$(document).ready(function() {
        event.preventDefault()
      $('#phase-1').click(function(){
        $('.steps').show();
       $('#phase-1step-p').text("Звонок");
       $('#phase-2step-p').text("Консультация");
       $('#phase-3step-p').text("Встреча");
       $('#phase-4step-p').text("Договор");
      });
        $('#phase-2').click(function(){
        $('.steps').show();
       $('#phase-1step-p').text("Формулировка требований к автоматизации");
       $('#phase-2step-p').text("Обследование");
       $('#phase-3step-p').text("Обследование");
       $('#phase-4step-p').text("Согласование ТЗ");
      }); 
       
        $('#phase-3').click(function(){
        $('.steps').show();
       $('#phase-1step-p').text("Утверждение проектной команды");
       $('#phase-2step-p').text("Согласование сроков/этапов работ");
       $('#phase-3step-p').text("Исполнение этапа");
       $('#phase-4step-p').html("Приемка /n этапа");
      });

       $('#phase-4').click(function(){
        $('.steps').show();
       $('#phase-1step-p').text("Подготовка и согласование документации по проекту");
       $('#phase-2step-p').text("Создание и передача  инструкций на рабочие места");
       $('#phase-3step-p').text("Обучение сотрудников");
       $('#phase-4step-p').text("Обучение службы поддержки");
      });

       $('#phase-5').click(function(){
        $('.steps').show();
       $('#phase-1step-p').text("Фиксация замечаний/доп. требований");
       $('#phase-2step-p').text("Фиксация замечаний/доп. требований");
       $('#phase-3step-p').text("Исполненние этапа");
       $('#phase-4step-p').text("Приемка");
      });
      });