<?php

namespace DeliciousBrains\WP_Offload_Media\Aws3;

// This file was auto-generated from sdk-root/src/data/personalize-runtime/2018-05-22/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-05-22', 'endpointPrefix' => 'personalize-runtime', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Personalize Runtime', 'serviceId' => 'Personalize Runtime', 'signatureVersion' => 'v4', 'signingName' => 'personalize', 'uid' => 'personalize-runtime-2018-05-22'], 'operations' => ['GetPersonalizedRanking' => ['name' => 'GetPersonalizedRanking', 'http' => ['method' => 'POST', 'requestUri' => '/personalize-ranking'], 'input' => ['shape' => 'GetPersonalizedRankingRequest'], 'output' => ['shape' => 'GetPersonalizedRankingResponse'], 'errors' => [['shape' => 'InvalidInputException'], ['shape' => 'ResourceNotFoundException']], 'idempotent' => \true], 'GetRecommendations' => ['name' => 'GetRecommendations', 'http' => ['method' => 'POST', 'requestUri' => '/recommendations'], 'input' => ['shape' => 'GetRecommendationsRequest'], 'output' => ['shape' => 'GetRecommendationsResponse'], 'errors' => [['shape' => 'InvalidInputException'], ['shape' => 'ResourceNotFoundException']], 'idempotent' => \true]], 'shapes' => ['Arn' => ['type' => 'string', 'max' => 256, 'pattern' => 'arn:([a-z\\d-]+):personalize:.*:.*:.+'], 'AttributeName' => ['type' => 'string', 'max' => 150, 'pattern' => '[A-Za-z\\d_]+'], 'AttributeValue' => ['type' => 'string', 'max' => 1000, 'sensitive' => \true], 'Context' => ['type' => 'map', 'key' => ['shape' => 'AttributeName'], 'value' => ['shape' => 'AttributeValue'], 'max' => 150], 'ErrorMessage' => ['type' => 'string'], 'FilterAttributeName' => ['type' => 'string', 'max' => 50, 'pattern' => '[A-Za-z0-9_]+'], 'FilterAttributeValue' => ['type' => 'string', 'max' => 1000, 'sensitive' => \true], 'FilterValues' => ['type' => 'map', 'key' => ['shape' => 'FilterAttributeName'], 'value' => ['shape' => 'FilterAttributeValue'], 'max' => 25], 'GetPersonalizedRankingRequest' => ['type' => 'structure', 'required' => ['campaignArn', 'inputList', 'userId'], 'members' => ['campaignArn' => ['shape' => 'Arn'], 'inputList' => ['shape' => 'InputList'], 'userId' => ['shape' => 'UserID'], 'context' => ['shape' => 'Context'], 'filterArn' => ['shape' => 'Arn'], 'filterValues' => ['shape' => 'FilterValues']]], 'GetPersonalizedRankingResponse' => ['type' => 'structure', 'members' => ['personalizedRanking' => ['shape' => 'ItemList'], 'recommendationId' => ['shape' => 'RecommendationID']]], 'GetRecommendationsRequest' => ['type' => 'structure', 'members' => ['campaignArn' => ['shape' => 'Arn'], 'itemId' => ['shape' => 'ItemID'], 'userId' => ['shape' => 'UserID'], 'numResults' => ['shape' => 'NumResults'], 'context' => ['shape' => 'Context'], 'filterArn' => ['shape' => 'Arn'], 'filterValues' => ['shape' => 'FilterValues'], 'recommenderArn' => ['shape' => 'Arn'], 'promotions' => ['shape' => 'PromotionList']]], 'GetRecommendationsResponse' => ['type' => 'structure', 'members' => ['itemList' => ['shape' => 'ItemList'], 'recommendationId' => ['shape' => 'RecommendationID']]], 'InputList' => ['type' => 'list', 'member' => ['shape' => 'ItemID']], 'InvalidInputException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ItemID' => ['type' => 'string', 'max' => 256], 'ItemList' => ['type' => 'list', 'member' => ['shape' => 'PredictedItem']], 'Name' => ['type' => 'string', 'max' => 63, 'min' => 1, 'pattern' => '^[a-zA-Z0-9][a-zA-Z0-9\\-_]*'], 'NumResults' => ['type' => 'integer', 'min' => 0], 'PercentPromotedItems' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'PredictedItem' => ['type' => 'structure', 'members' => ['itemId' => ['shape' => 'ItemID'], 'score' => ['shape' => 'Score'], 'promotionName' => ['shape' => 'Name']]], 'Promotion' => ['type' => 'structure', 'members' => ['name' => ['shape' => 'Name'], 'percentPromotedItems' => ['shape' => 'PercentPromotedItems'], 'filterArn' => ['shape' => 'Arn'], 'filterValues' => ['shape' => 'FilterValues']]], 'PromotionList' => ['type' => 'list', 'member' => ['shape' => 'Promotion'], 'max' => 1], 'RecommendationID' => ['type' => 'string'], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'Score' => ['type' => 'double'], 'UserID' => ['type' => 'string', 'max' => 256]]];