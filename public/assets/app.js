window.addEventListener("DOMContentLoaded", () => {
   const form = document.querySelector("#exchange");
   const triggerFrom = document.querySelector("#trigger_from");
   const triggerTo = document.querySelector("#trigger_to");
   const dropdownFrom = document.querySelector("#dropdown_from");
   const dropdownTo = document.querySelector("#dropdown_to");
   const inputFrom = document.querySelector("#input_from");
   const inputTo = document.querySelector("#input_to");
   const modal = document.querySelector(".modal");

   form.addEventListener("submit", formHandler);

   triggerFrom.addEventListener("click", triggerHandler);
   triggerTo.addEventListener("click", triggerHandler);

   inputFrom.addEventListener("input", inputFromHandler);
   inputTo.addEventListener("input", inputToHandler);

   dropdownFrom.addEventListener("click", (e) =>
      dropdownHandler(e, triggerFrom, "from")
   );
   dropdownTo.addEventListener("click", (e) =>
      dropdownHandler(e, triggerTo, "to")
   );

   modal.addEventListener("click", (e) => {
      e.stopPropagation();
      const target = e.target;

      if (target.classList.contains("modal__close")) {
         modal.classList.remove("_active");
         return;
      }

      if (target.classList.contains("modal")) {
         modal.classList.remove("_active");
         return;
      }

      console.log(target);
   });

   function dropdownHandler(e, trigger, direction) {
      let target = e.target;
      let { currency, course } = target.dataset;

      if (!currency || !course) {
         target = target.closest(".currency__field");
         currency = target.dataset.currency;
         course = target.dataset.course;
      }

      trigger.dataset.course = course;
      trigger.dataset.currency = currency;
      trigger.querySelector("span").textContent = currency;
      trigger.querySelector(".currency__symbol img").src =
         target.querySelector("img").src;

      target.closest(".currency__dropdown").classList.toggle("_active");
      switch (direction) {
         case "from":
            inputFromHandler();
            break;
         case "to":
            inputToHandler();
            break;
         default:
            break;
      }
   }

   function inputFromHandler() {
      const course = triggerFrom.dataset.course;

      if (!course) {
         return;
      }

      inputTo.value = inputFrom.value * course;
   }

   function inputToHandler() {
      const course = triggerTo.dataset.course;

      if (!course) {
         return;
      }

      inputFrom.value = inputTo.value / course;
   }

   function triggerHandler() {
      this.nextElementSibling.classList.toggle("_active");
   }

   async function formHandler(e) {
      e.preventDefault();
      e.stopPropagation();

      const fromValue = inputFrom.value;
      const toValue = inputTo.value;
      const fromCurrency = triggerFrom.dataset.currency;
      const toCurrency = triggerTo.dataset.currency;
      const email = document.querySelector("#email").value;
      const fullname = document.querySelector("#fullname").value;
      const wallet = document.querySelector("#wallet").value;

      const formData = new FormData();

      formData.append("fromCurrency", fromCurrency);
      formData.append("toCurrency", toCurrency);
      formData.append("fromValue", fromValue);
      formData.append("toValue", toValue);
      formData.append("email", email);
      formData.append("fullname", fullname);
      formData.append("wallet", wallet);

      try {
         const response = await fetch("https://url.com", {
            method: "POST",
            body: formData
         });
         const result = await response.json();
         if (result.status == true) {
            modal.classList.add("_active");
         }
      } catch (error) {
         console.error("Ошибка:", error);
      } finally {
         e.target.reset();
      }
   }
});
