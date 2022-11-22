<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\WebSecurityScanner\Resource;

use Google\Service\WebSecurityScanner\ListFindingTypeStatsResponse;

/**
 * The "findingTypeStats" collection of methods.
 * Typical usage is:
 *  <code>
 *   $websecurityscannerService = new Google\Service\WebSecurityScanner(...);
 *   $findingTypeStats = $websecurityscannerService->findingTypeStats;
 *  </code>
 */
class ProjectsScanConfigsScanRunsFindingTypeStats extends \Google\Service\Resource
{
  /**
   * List all FindingTypeStats under a given ScanRun.
   * (findingTypeStats.listProjectsScanConfigsScanRunsFindingTypeStats)
   *
   * @param string $parent Required. The parent resource name, which should be a
   * scan run resource name in the format
   * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
   * @param array $optParams Optional parameters.
   * @return ListFindingTypeStatsResponse
   */
  public function listProjectsScanConfigsScanRunsFindingTypeStats($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListFindingTypeStatsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsScanConfigsScanRunsFindingTypeStats::class, 'Google_Service_WebSecurityScanner_Resource_ProjectsScanConfigsScanRunsFindingTypeStats');
