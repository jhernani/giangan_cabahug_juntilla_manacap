

<script type="text/javascript">
    $(function () {

      //LogIn
      $('#LogInButton').click(function(){
      $('#LogInModal').modal('show');    
      });


      $('#LogInButton1').click(function(){
      $('#LogInModal').modal('show');    
      });

      $('#LogInButton2').click(function(){
      $('#LogInModal').modal('show', 'transition');    
      });

<!--
      //Edit
      $('#EditButton').click(function(){
      $('#EditModal').modal('show');    
      });

      //Activate
      $('#ActivateButton').click(function(){
      $('#ActivateModal').modal('show');    
      });

      //Deactivate
      $('#DeactivateButton').click(function(){
      $('#DeactivateModal').modal('show');    
      });
-->



      //modal
         $('#exp').click(function(){
        $('#modalExp').modal('show');    
     });

          $('#educ').click(function(){
        $('#modalEduc').modal('show');    
     });

         $('#proj').click(function(){
        $('#modalProj').modal('show');    
     });

         $('#skill').click(function(){
        $('#modalSkill').modal('show');    
     });

         $('#job').click(function(){
        $('#modalJob').modal('show');    
     });
         
        //profile picture hover shit
     $('.special.cards .image').dimmer({
      on: 'hover'
      });

     //dropdown
     $('select.dropdown')
     .dropdown()
      ;

       //radiobutton
     $('.ui.radio.checkbox')
      .checkbox()
      ;

      //welcome message
      $('.message .close')
        .on('click', function() {
          $(this)
            .closest('.message')
            .transition('fade')
          ;
        })
      ;
        //popup jizz
        $('.example input')
        .popup({
         on: 'focus'
          })
        ;

    });
</script>



<script type="text/javascript">
    $(function () {

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    // accordion
    $('.ui.accordion')
        .accordion()
    ;
      
    //modal
    $('#addExpButton').click(function(){
    $('#addExpModal').modal('show');    
     });

    $('#addProjButton').click(function(){
    $('#addProjModal').modal('show');    
     });

    $('#addEducButton').click(function(){
    $('#addEducModal').modal('show');    
     });

    $('#addOrgButton').click(function(){
    $('#addOrgModal').modal('show');    
     });

    $('#addAwardsButton').click(function(){
    $('#addAwardsModal').modal('show');    
     });

    $('#addSkillsButton').click(function(){
    $('#addSkillsModal').modal('show');    
     });

    //profile picture hover shit
     $('.special.cards .image').dimmer({
      on: 'hover'
      });

     //dropdown
     $('select.dropdown')
     .dropdown()
      ;


    $('.ui.dropdown')
    .dropdown()
    ;

       //radiobutton
     $('.ui.radio.checkbox')
      .checkbox()
      ;

    });
</script>



<script>
  $(document)
    .ready(function() {


      // showing multiple
    $('.visible.example .ui.sidebar')
  .sidebar({
    context: '.visible.example .bottom.segment'
  })
  .sidebar('hide')
    ;

  // popup menu
  $('.menu .browse')
    .popup({
      inline   : true,
      hoverable: true,
      position : 'bottom left',
      delay: {
        show: 300,
        hide: 800
      }
    })
  ;

  $('.ui.dropdown')
    .dropdown()
  ;

      })
    ;
//sticky headers
    $('.ui.sticky')
    .sticky({
      context:'company'
    })
    ;
$('.ui.sticky')
    .sticky({
      context:'alumni'
    })
    ;
  </script>



