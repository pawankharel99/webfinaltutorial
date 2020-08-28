function test_prime()
{
    const n = prompt("Please enter number", "");

  if (n===1)
  {
    window.alert(`${n} is Not Prime`);
  }
  else if(n === 2)
  {
    window.alert(`${n} is  Prime`);
  }else
  {
    for(var x = 2; x < n; x++)
    {
      if(n % x === 0)
      {
        window.alert(`${n} is Not Prime`);
      }
    }
    window.alert(`${n} is Prime`);  
  }
}
