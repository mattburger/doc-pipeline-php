# Simple PHP Application
This is a simple php application that is deployed onto AWS Elasticbeanstalk, using AWS Code pipeline.

[Deployed Site](http://simplephpapp.us-west-1.elasticbeanstalk.com/)


## How to deploy using AWS Code Pipeline

###Basic Setup:
* Within AWS Console, navigate to [code pipeline](https://us-east-2.console.aws.amazon.com/codesuite/codepipeline/start?region=us-east-2)
    ![code pipeline](./assets/codepipelinestart.png)

* Create new pipeline using create button
    ![create pipeline](./assets/create.png)
* Configure pipeline settings you can either use an existing role or have Code Pipeline create one for you
    ![configure pipeline](./assets/config.png)
    * Add a source provider: Github
      * If you choose github, make sure to select Github's Webhooks, to enable change detection 
        ![configure pipeline](./assets/source.png) 
        ![stage pipeline](./assets/stage1.png) 
        * **NOTE**: Build stage is optional
           ![build pipeline](./assets/build.png)
    * Configure deployment stage:
    *  **NOTE**: Your ec2, ecs, ebs instance must be created before you can finish setup.
       ![deploy pipeline](./assets/deploy.png)
       ![deploy pipeline](./assets/deploy2.png)
    * Review and create:
       ![Review pipeline](./assets/review.png)
  
  

###Once Deployed:
* You should receive a success message
  ![success pipeline](./assets/success.png)

* You can now continue to update your repo, and the pipeline should handle updating your deployed site

  ![deploy pipeline](./assets/update.png)

