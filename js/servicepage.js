const readMoreButtons = document.querySelectorAll('.read-more');

readMoreButtons.forEach(button => {
  button.addEventListener('click', () => {
    const textBox = button.closest('.text-box');
    const details = textBox.querySelector('.details');

    if (details.style.display === 'none' || details.style.display === '') {
      // Expand text box
      details.style.display = 'block';
      button.textContent = 'Read Less';
    } else {
      // Collapse text box
      details.style.display = 'none';
      button.textContent = 'Read More';
    }
  });
});
