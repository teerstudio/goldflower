
function HomeCtrl($scope) 
{
	$http.get('http://128.199/api/surveys').success(function(data)
	{
		$scope.surveys = data;
	});
}


function CreateSurveyCtrl($scope) 
{
	/*
	s = $scope;
	l = $location;
	
	$scope.saveSurvey = function(form)
	{
		if(form.$invalid)
		{
			//$scope.scrollTo_selector = "i.icon-warning-sign:visible";
			goToElement($scope, "i.icon-warning-sign:visible");
			return;
		}
		//Check if survey has at least one question
		else if($scope.survey.questions.length == 0)
		{
			return;
		}
		
		var cleanSurvey = cloneAndCleanSurvey($scope.survey);
		
		$scope.workbench.edit = true;
		
		showLoading();
		$http.post("/api/survey", cleanSurvey).success(function(data)
		{
			hideLoading();
			$log.info("Saved successfully");
			$scope.survey = data;
			$scope.workbench.edit = false;
			showNotiSaveSuccess();
		}
		).error(function()
		{
			$scope.workbench.edit = false;
		});
	};
	*/
}

