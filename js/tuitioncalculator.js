function calculate()
{
      var credits_input1=document.getElementById("level_credit_input_1").value;
      var credits_input2=document.getElementById("level_credit_input_2").value;

      var result=parseFloat(credits_input1 * 101.5)+parseFloat(credits_input2* 200) +50 +60 + (23*(credits_input1 + credits_input2));

      if(!isNaN(result))
      {
            document.getElementById("tuition_cost").innerHTML="Estimated Total: $" + result;
      }
}