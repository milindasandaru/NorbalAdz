/*<!-- M.S.Umair Salih  	IT23274716  -->*/

const boxes = document.querySelectorAll('.box');

boxes.forEach(box => {
  const question = box.querySelector('.question');
  const answer = box.querySelector('.answer');

  question.addEventListener('click', () => {
    answer.classList.toggle('visible');
  });
});

const form = document.getElementById('inquiry-form');

form.addEventListener('submit', (e) => {
  e.preventDefault(); 
  
  const name = document.getElementById('name').value;
  const phone = document.getElementById('phone').value;
  const description = document.getElementById('description').value;

  if (name === '' || phone === '' || description === '') {
    alert('Please fill in all required fields!');
    return;
  }

  if (phone.length !== 10 || isNaN(phone)) {
    alert('Enter a valid 10-digit phone number');
    return;
  }

 
  alert('Data inserted successfully!');
  form.submit();
});