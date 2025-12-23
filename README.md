feedback

laravel new feedback
db feedback_db  mysql

first createed named routes 
/ root         (feedback.forrm)
/feedback-submit    (feedback.submit)
 made a feedback blade and inside a form and linked via route name feedback.submit
 submitted form succesfully even though backend db is not setauop yet
 now we will make a feedbackcontroller to move the logic inside controller instead of web routes which make rotes clean and testable and reuseable it will have store method
 then we linked the feedback controoler to routes with (feedback.submit) route named
 we used dd in store and token and msg data shows 
 now creating StoreFeedbackRequest for data validation and then type hinting it incontroller instead of Request ass data moves from request to controller
 now using global erros
 after validation we use middleware as valiadion is for cheking format and middleware is for chkecing request
 wwe made a middlewarea for cheking spam checkforspam msgs
 now using middleware on route 
 adding log in controller 
 now adding flash msg on blabde as it telss log sent