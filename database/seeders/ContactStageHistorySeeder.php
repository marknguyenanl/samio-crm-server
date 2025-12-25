<?php

namespace Database\Seeders;

use App\Models\ContactStageHistory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ContactStageHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stage_history = [
            ['id' => '1', 'contact_id' => '1', 'contact_stage_id' => '1', 'created_at' => '2025-11-21T15:30:00Z'],
            ['id' => '2', 'contact_id' => '2', 'contact_stage_id' => '1', 'created_at' => '2025-11-21T15:30:00Z'],
            ['id' => '3', 'contact_id' => '3', 'contact_stage_id' => '1', 'created_at' => '2025-11-21T15:30:00Z'],
            ['id' => '4', 'contact_id' => '4', 'contact_stage_id' => '1', 'created_at' => '2025-11-21T15:30:00Z'],
            ['id' => '5', 'contact_id' => '5', 'contact_stage_id' => '1', 'created_at' => '2025-11-21T15:30:00Z'],
            ['id' => '6', 'contact_id' => '6', 'contact_stage_id' => '1', 'created_at' => '2025-11-21T15:30:00Z'],
            ['id' => '7', 'contact_id' => '7', 'contact_stage_id' => '1', 'created_at' => '2025-01-14T09:23:00Z'],
            ['id' => '8', 'contact_id' => '8', 'contact_stage_id' => '1', 'created_at' => '2025-02-27T16:45:00Z'],
            ['id' => '9', 'contact_id' => '9', 'contact_stage_id' => '1', 'created_at' => '2025-03-05T11:12:00Z'],
            ['id' => '10', 'contact_id' => '10', 'contact_stage_id' => '1', 'created_at' => '2025-04-19T18:37:00Z'],

            ['id' => '11', 'contact_id' => '11', 'contact_stage_id' => '1', 'created_at' => '2025-05-08T10:04:00Z'],
            ['id' => '12', 'contact_id' => '12', 'contact_stage_id' => '1', 'created_at' => '2025-06-21T15:51:00Z'],
            ['id' => '13', 'contact_id' => '13', 'contact_stage_id' => '1', 'created_at' => '2025-07-03T08:29:00Z'],
            ['id' => '14', 'contact_id' => '14', 'contact_stage_id' => '1', 'created_at' => '2025-07-26T20:16:00Z'],
            ['id' => '15', 'contact_id' => '15', 'contact_stage_id' => '1', 'created_at' => '2025-08-12T13:40:00Z'],
            ['id' => '16', 'contact_id' => '16', 'contact_stage_id' => '1', 'created_at' => '2025-08-29T07:55:00Z'],
            ['id' => '17', 'contact_id' => '17', 'contact_stage_id' => '1', 'created_at' => '2025-09-10T19:22:00Z'],
            ['id' => '18', 'contact_id' => '18', 'contact_stage_id' => '1', 'created_at' => '2025-09-28T12:31:00Z'],
            ['id' => '19', 'contact_id' => '19', 'contact_stage_id' => '1', 'created_at' => '2025-10-09T14:48:00Z'],
            ['id' => '20', 'contact_id' => '20', 'contact_stage_id' => '1', 'created_at' => '2025-11-21T15:30:00Z'],
            ['id' => '21', 'contact_id' => '21', 'contact_stage_id' => '1', 'created_at' => '2025-01-28T12:31:00Z'],
            ['id' => '22', 'contact_id' => '22', 'contact_stage_id' => '1', 'created_at' => '2025-02-28T12:31:00Z'],
            ['id' => '23', 'contact_id' => '23', 'contact_stage_id' => '1', 'created_at' => '2025-03-28T12:31:00Z'],
            ['id' => '24', 'contact_id' => '24', 'contact_stage_id' => '1', 'created_at' => '2025-04-28T12:31:00Z'],
            ['id' => '25', 'contact_id' => '25', 'contact_stage_id' => '1', 'created_at' => '2025-05-28T12:31:00Z'],
            ['id' => '26', 'contact_id' => '26', 'contact_stage_id' => '1', 'created_at' => '2025-06-28T12:31:00Z'],
            ['id' => '27', 'contact_id' => '27', 'contact_stage_id' => '1', 'created_at' => '2025-07-28T12:31:00Z'],
            ['id' => '28', 'contact_id' => '28', 'contact_stage_id' => '1', 'created_at' => '2025-08-28T12:31:00Z'],
            ['id' => '29', 'contact_id' => '29', 'contact_stage_id' => '1', 'created_at' => '2025-09-28T12:31:00Z'],
            ['id' => '30', 'contact_id' => '30', 'contact_stage_id' => '1', 'created_at' => '2025-10-28T12:31:00Z'],

            ['id' => '31', 'contact_id' => '31', 'contact_stage_id' => '1', 'created_at' => '2025-11-28T12:31:00Z'],
            ['id' => '32', 'contact_id' => '32', 'contact_stage_id' => '1', 'created_at' => '2025-01-28T12:31:00Z'],
            ['id' => '33', 'contact_id' => '33', 'contact_stage_id' => '1', 'created_at' => '2025-02-28T12:31:00Z'],
            ['id' => '34', 'contact_id' => '34', 'contact_stage_id' => '1', 'created_at' => '2025-03-28T12:31:00Z'],
            ['id' => '35', 'contact_id' => '35', 'contact_stage_id' => '1', 'created_at' => '2025-04-28T12:31:00Z'],

            ['id' => '36', 'contact_id' => '36', 'contact_stage_id' => '1', 'created_at' => '2025-05-28T12:31:00Z'],
            ['id' => '37', 'contact_id' => '37', 'contact_stage_id' => '1', 'created_at' => '2025-06-28T12:31:00Z'],
            ['id' => '38', 'contact_id' => '38', 'contact_stage_id' => '1', 'created_at' => '2025-07-28T12:31:00Z'],
            ['id' => '39', 'contact_id' => '39', 'contact_stage_id' => '1', 'created_at' => '2025-08-28T12:31:00Z'],
            ['id' => '40', 'contact_id' => '40', 'contact_stage_id' => '1', 'created_at' => '2025-09-28T12:31:00Z'],

            ['id' => '41', 'contact_id' => '41', 'contact_stage_id' => '1', 'created_at' => '2025-10-28T12:31:00Z'],
            ['id' => '42', 'contact_id' => '42', 'contact_stage_id' => '1', 'created_at' => '2025-11-28T12:31:00Z'],
            ['id' => '43', 'contact_id' => '43', 'contact_stage_id' => '1', 'created_at' => '2025-01-28T12:31:00Z'],
            ['id' => '44', 'contact_id' => '44', 'contact_stage_id' => '1', 'created_at' => '2025-02-28T12:31:00Z'],
            ['id' => '45', 'contact_id' => '45', 'contact_stage_id' => '1', 'created_at' => '2025-03-28T12:31:00Z'],

            ['id' => '46', 'contact_id' => '46', 'contact_stage_id' => '1', 'created_at' => '2025-01-28T12:31:00Z'],
            ['id' => '47', 'contact_id' => '47', 'contact_stage_id' => '1', 'created_at' => '2025-02-28T12:31:00Z'],
            ['id' => '48', 'contact_id' => '48', 'contact_stage_id' => '1', 'created_at' => '2025-03-28T12:31:00Z'],
            ['id' => '49', 'contact_id' => '49', 'contact_stage_id' => '1', 'created_at' => '2025-04-28T12:31:00Z'],
            ['id' => '50', 'contact_id' => '50', 'contact_stage_id' => '1', 'created_at' => '2025-05-28T12:31:00Z'],
            ['id' => '51', 'contact_id' => '51', 'contact_stage_id' => '1', 'created_at' => '2025-06-28T12:31:00Z'],
            ['id' => '52', 'contact_id' => '52', 'contact_stage_id' => '1', 'created_at' => '2025-07-28T12:31:00Z'],
            ['id' => '53', 'contact_id' => '53', 'contact_stage_id' => '1', 'created_at' => '2025-08-28T12:31:00Z'],
            ['id' => '54', 'contact_id' => '54', 'contact_stage_id' => '1', 'created_at' => '2025-09-28T12:31:00Z'],
            ['id' => '55', 'contact_id' => '55', 'contact_stage_id' => '1', 'created_at' => '2025-10-28T12:31:00Z'],

            ['id' => '56', 'contact_id' => '56', 'contact_stage_id' => '1', 'created_at' => '2025-11-28T12:31:00Z'],
            ['id' => '57', 'contact_id' => '57', 'contact_stage_id' => '1', 'created_at' => '2025-01-28T12:31:00Z'],
            ['id' => '58', 'contact_id' => '58', 'contact_stage_id' => '1', 'created_at' => '2025-02-28T12:31:00Z'],
            ['id' => '59', 'contact_id' => '59', 'contact_stage_id' => '1', 'created_at' => '2025-03-28T12:31:00Z'],
            ['id' => '60', 'contact_id' => '60', 'contact_stage_id' => '1', 'created_at' => '2025-04-28T12:31:00Z'],

            ['id' => '61', 'contact_id' => '61', 'contact_stage_id' => '1', 'created_at' => '2025-05-28T12:31:00Z'],
            ['id' => '62', 'contact_id' => '62', 'contact_stage_id' => '1', 'created_at' => '2025-06-28T12:31:00Z'],
            ['id' => '63', 'contact_id' => '63', 'contact_stage_id' => '1', 'created_at' => '2025-07-28T12:31:00Z'],
            ['id' => '64', 'contact_id' => '64', 'contact_stage_id' => '1', 'created_at' => '2025-08-28T12:31:00Z'],
            ['id' => '65', 'contact_id' => '65', 'contact_stage_id' => '1', 'created_at' => '2025-09-28T12:31:00Z'],

            ['id' => '66', 'contact_id' => '66', 'contact_stage_id' => '1', 'created_at' => '2025-10-28T12:31:00Z'],
            ['id' => '67', 'contact_id' => '67', 'contact_stage_id' => '1', 'created_at' => '2025-11-28T12:31:00Z'],
            ['id' => '68', 'contact_id' => '68', 'contact_stage_id' => '1', 'created_at' => '2025-01-28T12:31:00Z'],
            ['id' => '69', 'contact_id' => '69', 'contact_stage_id' => '1', 'created_at' => '2025-02-28T12:31:00Z'],
            ['id' => '70', 'contact_id' => '70', 'contact_stage_id' => '1', 'created_at' => '2025-03-28T12:31:00Z'],

            ['id' => '71', 'contact_id' => '71', 'contact_stage_id' => '1', 'created_at' => '2025-01-28T12:31:00Z'],
            ['id' => '72', 'contact_id' => '72', 'contact_stage_id' => '1', 'created_at' => '2025-02-28T12:31:00Z'],
            ['id' => '73', 'contact_id' => '73', 'contact_stage_id' => '1', 'created_at' => '2025-03-28T12:31:00Z'],
            ['id' => '74', 'contact_id' => '74', 'contact_stage_id' => '1', 'created_at' => '2025-04-28T12:31:00Z'],
            ['id' => '75', 'contact_id' => '75', 'contact_stage_id' => '1', 'created_at' => '2025-05-28T12:31:00Z'],
            ['id' => '76', 'contact_id' => '76', 'contact_stage_id' => '1', 'created_at' => '2025-06-28T12:31:00Z'],
            ['id' => '77', 'contact_id' => '77', 'contact_stage_id' => '1', 'created_at' => '2025-07-28T12:31:00Z'],
            ['id' => '78', 'contact_id' => '78', 'contact_stage_id' => '1', 'created_at' => '2025-08-28T12:31:00Z'],
            ['id' => '79', 'contact_id' => '79', 'contact_stage_id' => '1', 'created_at' => '2025-09-28T12:31:00Z'],
            ['id' => '80', 'contact_id' => '80', 'contact_stage_id' => '1', 'created_at' => '2025-10-28T12:31:00Z'],

            ['id' => '81', 'contact_id' => '81', 'contact_stage_id' => '1', 'created_at' => '2025-11-28T12:31:00Z'],
            ['id' => '82', 'contact_id' => '82', 'contact_stage_id' => '1', 'created_at' => '2025-01-28T12:31:00Z'],
            ['id' => '83', 'contact_id' => '83', 'contact_stage_id' => '1', 'created_at' => '2025-02-28T12:31:00Z'],
            ['id' => '84', 'contact_id' => '84', 'contact_stage_id' => '1', 'created_at' => '2025-03-28T12:31:00Z'],
            ['id' => '85', 'contact_id' => '85', 'contact_stage_id' => '1', 'created_at' => '2025-04-28T12:31:00Z'],

            ['id' => '86', 'contact_id' => '86', 'contact_stage_id' => '1', 'created_at' => '2025-05-28T12:31:00Z'],
            ['id' => '87', 'contact_id' => '87', 'contact_stage_id' => '1', 'created_at' => '2025-06-28T12:31:00Z'],
            ['id' => '88', 'contact_id' => '88', 'contact_stage_id' => '1', 'created_at' => '2025-07-28T12:31:00Z'],
            ['id' => '89', 'contact_id' => '89', 'contact_stage_id' => '1', 'created_at' => '2025-08-28T12:31:00Z'],
            ['id' => '90', 'contact_id' => '90', 'contact_stage_id' => '1', 'created_at' => '2025-09-28T12:31:00Z'],
            ['id' => '91', 'contact_id' => '91', 'contact_stage_id' => '1', 'created_at' => '2025-01-14T03:21:47Z'],
            ['id' => '92', 'contact_id' => '92', 'contact_stage_id' => '1', 'created_at' => '2025-07-03T16:55:12Z'],
            ['id' => '93', 'contact_id' => '93', 'contact_stage_id' => '1', 'created_at' => '2025-04-22T09:13:05Z'],
            ['id' => '94', 'contact_id' => '94', 'contact_stage_id' => '1', 'created_at' => '2025-11-09T21:44:39Z'],
            ['id' => '95', 'contact_id' => '95', 'contact_stage_id' => '1', 'created_at' => '2025-03-27T06:02:18Z'],

            ['id' => '96', 'contact_id' => '96', 'contact_stage_id' => '1', 'created_at' => '2025-08-19T14:35:51Z'],
            ['id' => '97', 'contact_id' => '97', 'contact_stage_id' => '1', 'created_at' => '2025-02-06T01:27:33Z'],
            ['id' => '98', 'contact_id' => '98', 'contact_stage_id' => '1', 'created_at' => '2025-10-11T18:49:26Z'],
            ['id' => '99', 'contact_id' => '99', 'contact_stage_id' => '1', 'created_at' => '2025-06-24T07:18:09Z'],
            ['id' => '100', 'contact_id' => '100', 'contact_stage_id' => '1', 'created_at' => '2025-09-30T12:03:57Z'],
            ['id' => '101', 'contact_id' => '101', 'contact_stage_id' => '1', 'created_at' => '2025-05-08T23:41:29Z'],
            ['id' => '102', 'contact_id' => '102', 'contact_stage_id' => '1', 'created_at' => '2025-12-17T04:56:42Z'],
            ['id' => '103', 'contact_id' => '103', 'contact_stage_id' => '1', 'created_at' => '2025-01-29T15:22:54Z'],
            ['id' => '104', 'contact_id' => '104', 'contact_stage_id' => '1', 'created_at' => '2025-03-05T10:14:31Z'],
            ['id' => '105', 'contact_id' => '105', 'contact_stage_id' => '1', 'created_at' => '2025-07-21T02:48:16Z'],

            ['id' => '106', 'contact_id' => '106', 'contact_stage_id' => '1', 'created_at' => '2025-11-27T19:37:04Z'],
            ['id' => '107', 'contact_id' => '107', 'contact_stage_id' => '1', 'created_at' => '2025-04-02T08:19:45Z'],
            ['id' => '108', 'contact_id' => '108', 'contact_stage_id' => '1', 'created_at' => '2025-06-13T05:06:58Z'],
            ['id' => '109', 'contact_id' => '109', 'contact_stage_id' => '1', 'created_at' => '2025-09-01T17:52:21Z'],
            ['id' => '110', 'contact_id' => '110', 'contact_stage_id' => '1', 'created_at' => '2025-02-18T11:33:39Z'],

            ['id' => '111', 'contact_id' => '111', 'contact_stage_id' => '1', 'created_at' => '2025-10-09T00:27:18Z'],
            ['id' => '112', 'contact_id' => '112', 'contact_stage_id' => '1', 'created_at' => '2025-01-16T13:49:52Z'],
            ['id' => '113', 'contact_id' => '113', 'contact_stage_id' => '1', 'created_at' => '2025-08-05T09:05:34Z'],
            ['id' => '114', 'contact_id' => '114', 'contact_stage_id' => '1', 'created_at' => '2025-05-30T21:18:07Z'],
            ['id' => '115', 'contact_id' => '115', 'contact_stage_id' => '1', 'created_at' => '2025-12-03T03:41:56Z'],

            ['id' => '116', 'contact_id' => '116', 'contact_stage_id' => '1', 'created_at' => '2025-06-28T06:27:13Z'],
            ['id' => '117', 'contact_id' => '117', 'contact_stage_id' => '1', 'created_at' => '2025-03-19T18:12:49Z'],
            ['id' => '118', 'contact_id' => '118', 'contact_stage_id' => '1', 'created_at' => '2025-07-07T04:36:25Z'],
            ['id' => '119', 'contact_id' => '119', 'contact_stage_id' => '1', 'created_at' => '2025-11-15T16:23:38Z'],
            ['id' => '120', 'contact_id' => '120', 'contact_stage_id' => '1', 'created_at' => '2025-09-23T02:59:02Z'],

            ['id' => '121', 'contact_id' => '121', 'contact_stage_id' => '1', 'created_at' => '2025-02-01T07:48:55Z'],
            ['id' => '122', 'contact_id' => '122', 'contact_stage_id' => '1', 'created_at' => '2025-04-26T12:37:41Z'],
            ['id' => '123', 'contact_id' => '123', 'contact_stage_id' => '1', 'created_at' => '2025-10-14T20:05:19Z'],
            ['id' => '124', 'contact_id' => '124', 'contact_stage_id' => '1', 'created_at' => '2025-01-05T01:16:03Z'],
            ['id' => '125', 'contact_id' => '125', 'contact_stage_id' => '1', 'created_at' => '2025-06-11T14:53:22Z'],
            ['id' => '126', 'contact_id' => '126', 'contact_stage_id' => '1', 'created_at' => '2025-08-17T23:29:48Z'],
            ['id' => '127', 'contact_id' => '127', 'contact_stage_id' => '1', 'created_at' => '2025-12-22T05:07:36Z'],
            ['id' => '128', 'contact_id' => '128', 'contact_stage_id' => '1', 'created_at' => '2025-03-03T18:44:11Z'],
            ['id' => '129', 'contact_id' => '129', 'contact_stage_id' => '1', 'created_at' => '2025-05-20T10:25:59Z'],
            ['id' => '130', 'contact_id' => '130', 'contact_stage_id' => '1', 'created_at' => '2025-07-29T22:18:27Z'],
            ['id' => '131', 'contact_id' => '131', 'contact_stage_id' => '1', 'created_at' => '2025-11-04T09:32:44Z'],
            ['id' => '132', 'contact_id' => '132', 'contact_stage_id' => '1', 'created_at' => '2025-09-12T03:56:08Z'],
            ['id' => '133', 'contact_id' => '133', 'contact_stage_id' => '1', 'created_at' => '2025-02-24T16:41:27Z'],
            ['id' => '134', 'contact_id' => '134', 'contact_stage_id' => '1', 'created_at' => '2025-04-08T08:19:53Z'],
            ['id' => '135', 'contact_id' => '135', 'contact_stage_id' => '1', 'created_at' => '2025-10-31T19:07:15Z'],

            ['id' => '136', 'contact_id' => '136', 'contact_stage_id' => '1', 'created_at' => '2025-01-22T02:54:29Z'],
            ['id' => '137', 'contact_id' => '137', 'contact_stage_id' => '1', 'created_at' => '2025-06-05T11:39:48Z'],
            ['id' => '138', 'contact_id' => '138', 'contact_stage_id' => '1', 'created_at' => '2025-08-23T15:21:06Z'],
            ['id' => '139', 'contact_id' => '139', 'contact_stage_id' => '1', 'created_at' => '2025-03-10T20:43:37Z'],
            ['id' => '140', 'contact_id' => '140', 'contact_stage_id' => '1', 'created_at' => '2025-12-19T06:28:54Z'],

            ['id' => '141', 'contact_id' => '141', 'contact_stage_id' => '1', 'created_at' => '2025-05-03T17:36:22Z'],
            ['id' => '142', 'contact_id' => '142', 'contact_stage_id' => '1', 'created_at' => '2025-07-16T09:11:40Z'],
            ['id' => '143', 'contact_id' => '143', 'contact_stage_id' => '1', 'created_at' => '2025-09-07T00:58:33Z'],
            ['id' => '144', 'contact_id' => '144', 'contact_stage_id' => '1', 'created_at' => '2025-11-26T13:22:05Z'],
            ['id' => '145', 'contact_id' => '145', 'contact_stage_id' => '1', 'created_at' => '2025-02-12T04:47:18Z'],

            ['id' => '146', 'contact_id' => '146', 'contact_stage_id' => '1', 'created_at' => '2025-04-30T22:31:59Z'],
            ['id' => '147', 'contact_id' => '147', 'contact_stage_id' => '1', 'created_at' => '2025-10-06T07:14:42Z'],
            ['id' => '148', 'contact_id' => '148', 'contact_stage_id' => '1', 'created_at' => '2025-01-11T12:59:07Z'],
            ['id' => '149', 'contact_id' => '149', 'contact_stage_id' => '1', 'created_at' => '2025-03-21T05:26:51Z'],
            ['id' => '150', 'contact_id' => '150', 'contact_stage_id' => '1', 'created_at' => '2025-08-28T16:02:39Z'],

            ['id' => '151', 'contact_id' => '4', 'contact_stage_id' => '2', 'created_at' => '2025-11-22T09:17:22Z'],
            ['id' => '152', 'contact_id' => '9', 'contact_stage_id' => '2', 'created_at' => '2025-04-08T13:45:31Z'],
            ['id' => '153', 'contact_id' => '13', 'contact_stage_id' => '2', 'created_at' => '2025-08-07T21:09:44Z'],
            ['id' => '154', 'contact_id' => '17', 'contact_stage_id' => '2', 'created_at' => '2025-02-09T03:55:08Z'],
            ['id' => '155', 'contact_id' => '21', 'contact_stage_id' => '2', 'created_at' => '2025-12-23T11:02:16Z'],
            ['id' => '156', 'contact_id' => '24', 'contact_stage_id' => '2', 'created_at' => '2025-05-20T18:39:05Z'],
            ['id' => '157', 'contact_id' => '28', 'contact_stage_id' => '2', 'created_at' => '2025-08-29T07:28:49Z'],
            ['id' => '158', 'contact_id' => '30', 'contact_stage_id' => '2', 'created_at' => '2025-10-29T22:14:57Z'],
            ['id' => '159', 'contact_id' => '33', 'contact_stage_id' => '2', 'created_at' => '2025-03-01T01:36:12Z'],
            ['id' => '160', 'contact_id' => '36', 'contact_stage_id' => '2', 'created_at' => '2025-05-29T16:48:33Z'],
            ['id' => '161', 'contact_id' => '39', 'contact_stage_id' => '2', 'created_at' => '2025-09-13T05:21:47Z'],
            ['id' => '162', 'contact_id' => '42', 'contact_stage_id' => '2', 'created_at' => '2025-12-01T10:59:28Z'],
            ['id' => '163', 'contact_id' => '45', 'contact_stage_id' => '2', 'created_at' => '2025-04-02T20:33:54Z'],
            ['id' => '164', 'contact_id' => '47', 'contact_stage_id' => '2', 'created_at' => '2025-03-03T02:07:39Z'],
            ['id' => '165', 'contact_id' => '51', 'contact_stage_id' => '2', 'created_at' => '2025-07-08T14:42:26Z'],
            ['id' => '166', 'contact_id' => '55', 'contact_stage_id' => '2', 'created_at' => '2025-11-04T23:19:03Z'],
            ['id' => '167', 'contact_id' => '59', 'contact_stage_id' => '2', 'created_at' => '2025-04-08T06:55:41Z'],
            ['id' => '168', 'contact_id' => '63', 'contact_stage_id' => '2', 'created_at' => '2025-08-11T19:03:52Z'],
            ['id' => '169', 'contact_id' => '66', 'contact_stage_id' => '2', 'created_at' => '2025-10-29T08:27:19Z'],
            ['id' => '170', 'contact_id' => '70', 'contact_stage_id' => '2', 'created_at' => '2025-03-30T23:11:58Z'],

            ['id' => '171', 'contact_id' => '4',  'contact_stage_id' => '3', 'created_at' => '2025-12-13T15:27:22Z'],
            ['id' => '172', 'contact_id' => '9',  'contact_stage_id' => '3', 'created_at' => '2025-11-15T16:45:31Z'],
            ['id' => '173', 'contact_id' => '13', 'contact_stage_id' => '3', 'created_at' => '2025-12-19T09:09:44Z'],
            ['id' => '174', 'contact_id' => '17', 'contact_stage_id' => '3', 'created_at' => '2025-07-21T12:55:08Z'],
            ['id' => '175', 'contact_id' => '21', 'contact_stage_id' => '3', 'created_at' => '2025-12-31T23:32:16Z'],
            ['id' => '176', 'contact_id' => '24', 'contact_stage_id' => '3', 'created_at' => '2025-11-02T21:39:05Z'],
            ['id' => '177', 'contact_id' => '28', 'contact_stage_id' => '3', 'created_at' => '2025-12-01T18:28:49Z'],
            ['id' => '178', 'contact_id' => '30', 'contact_stage_id' => '3', 'created_at' => '2025-12-21T10:14:57Z'],
            ['id' => '179', 'contact_id' => '33', 'contact_stage_id' => '3', 'created_at' => '2025-05-11T08:36:12Z'],
            ['id' => '180', 'contact_id' => '36', 'contact_stage_id' => '3', 'created_at' => '2025-10-10T19:48:33Z'],
            ['id' => '181', 'contact_id' => '39', 'contact_stage_id' => '3', 'created_at' => '2025-10-27T11:21:47Z'],
            ['id' => '182', 'contact_id' => '45', 'contact_stage_id' => '3', 'created_at' => '2025-12-12T22:33:54Z'],
            ['id' => '183', 'contact_id' => '51', 'contact_stage_id' => '3', 'created_at' => '2025-10-09T17:42:26Z'],
            ['id' => '184', 'contact_id' => '66', 'contact_stage_id' => '3', 'created_at' => '2025-12-03T14:27:19Z'],
            ['id' => '185', 'contact_id' => '70', 'contact_stage_id' => '3', 'created_at' => '2025-08-11T23:59:58Z'],

            ['id' => '186', 'contact_id' => '4',  'contact_stage_id' => '4', 'created_at' => '2025-12-20T10:15:22Z'],
            ['id' => '187', 'contact_id' => '9',  'contact_stage_id' => '4', 'created_at' => '2025-11-31T16:45:31Z'],
            ['id' => '188', 'contact_id' => '13', 'contact_stage_id' => '4', 'created_at' => '2025-12-24T09:09:44Z'],
            ['id' => '189', 'contact_id' => '21', 'contact_stage_id' => '4', 'created_at' => '2025-12-31T23:45:16Z'],
            ['id' => '190', 'contact_id' => '24', 'contact_stage_id' => '4', 'created_at' => '2025-11-03T21:39:05Z'],
            ['id' => '191', 'contact_id' => '28', 'contact_stage_id' => '4', 'created_at' => '2025-12-15T18:28:49Z'],
            ['id' => '192', 'contact_id' => '30', 'contact_stage_id' => '4', 'created_at' => '2025-12-25T10:14:57Z'],
            ['id' => '193', 'contact_id' => '33', 'contact_stage_id' => '4', 'created_at' => '2025-07-12T08:36:12Z'],
            ['id' => '194', 'contact_id' => '36', 'contact_stage_id' => '4', 'created_at' => '2025-11-20T19:48:33Z'],
            ['id' => '195', 'contact_id' => '39', 'contact_stage_id' => '4', 'created_at' => '2025-12-28T11:21:47Z'],

            ['id' => '196', 'contact_id' => '148', 'contact_stage_id' => '2', 'created_at' => '2025-10-29T22:14:57Z'],
            ['id' => '197', 'contact_id' => '149', 'contact_stage_id' => '2', 'created_at' => '2025-10-29T22:10:47Z'],
            ['id' => '198', 'contact_id' => '150', 'contact_stage_id' => '2', 'created_at' => '2025-10-29T22:03:37Z'],
        ];

        foreach ($stage_history as $history) {
            ContactStageHistory::updateOrCreate(
                ['id' => $history['id']], // so you can run seeder multiple times
                [
                    'contact_id' => $history['contact_id'],
                    'contact_stage_id' => $history['contact_stage_id'] ?? null,
                    'created_at' => isset($history['created_at'])
                        ? Carbon::parse($history['created_at'])
                        : now(),
                ]
            );
        }
    }
}
