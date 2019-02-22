<?php

namespace HomeDesignShops\Zendesk;

use Zendesk\API\Resources\Core\Activities;
use Zendesk\API\Resources\Core\AppInstallations;
use Zendesk\API\Resources\Core\Apps;
use Zendesk\API\Resources\Core\Attachments;
use Zendesk\API\Resources\Core\AuditLogs;
use Zendesk\API\Resources\Core\Autocomplete;
use Zendesk\API\Resources\Core\Automations;
use Zendesk\API\Resources\Core\Bookmarks;
use Zendesk\API\Resources\Core\Brands;
use Zendesk\API\Resources\Core\CustomRoles;
use Zendesk\API\Resources\Core\DynamicContent;
use Zendesk\API\Resources\Core\GroupMemberships;
use Zendesk\API\Resources\Core\Groups;
use Zendesk\API\Resources\Core\Incremental;
use Zendesk\API\Resources\Core\JobStatuses;
use Zendesk\API\Resources\Core\Locales;
use Zendesk\API\Resources\Core\Macros;
use Zendesk\API\Resources\Core\OAuthClients;
use Zendesk\API\Resources\Core\OAuthTokens;
use Zendesk\API\Resources\Core\OrganizationFields;
use Zendesk\API\Resources\Core\OrganizationMemberships;
use Zendesk\API\Resources\Core\Organizations;
use Zendesk\API\Resources\Core\OrganizationSubscriptions;
use Zendesk\API\Resources\Core\PushNotificationDevices;
use Zendesk\API\Resources\Core\Requests;
use Zendesk\API\Resources\Core\SatisfactionRatings;
use Zendesk\API\Resources\Core\Search;
use Zendesk\API\Resources\Core\Sessions;
use Zendesk\API\Resources\Core\SharingAgreements;
use Zendesk\API\Resources\Core\SlaPolicies;
use Zendesk\API\Resources\Core\SupportAddresses;
use Zendesk\API\Resources\Core\SuspendedTickets;
use Zendesk\API\Resources\Core\Tags;
use Zendesk\API\Resources\Core\Targets;
use Zendesk\API\Resources\Core\TicketFields;
use Zendesk\API\Resources\Core\TicketImports;
use Zendesk\API\Resources\Core\Tickets;
use Zendesk\API\Resources\Core\Triggers;
use Zendesk\API\Resources\Core\TwitterHandles;
use Zendesk\API\Resources\Core\UserFields;
use Zendesk\API\Resources\Core\Users;
use Zendesk\API\Resources\Core\Views;

/**
 * Client class, base level access
 *
 * @method Activities activities()
 * @method Apps apps()
 * @method AppInstallations appInstallations()
 * @method Attachments attachments($id = null)
 * @method AuditLogs auditLogs()
 * @method AutoComplete autocomplete()
 * @method Automations automations()
 * @method Bookmarks bookmarks()
 * @method Brands brands($id = null)
 * @method CustomRoles customRoles()
 * @method DynamicContent dynamicContent()
 * @method GroupMemberships groupMemberships()
 * @method Groups groups($id = null)
 * @method Incremental incremental()
 * @method JobStatuses jobStatuses()
 * @method Locales locales()
 * @method Macros macros()
 * @method OAuthClients oauthClients($id = null)
 * @method OAuthTokens oauthTokens($id = null)
 * @method OrganizationFields organizationFields()
 * @method OrganizationMemberships organizationMemberships()
 * @method Organizations organizations()
 * @method OrganizationSubscriptions organizationSubscriptions()
 * @method PushNotificationDevices pushNotificationDevices()
 * @method Requests requests($id = null)
 * @method SatisfactionRatings satisfactionRatings()
 * @method Search search()
 * @method Sessions sessions($id = null)
 * @method SharingAgreements sharingAgreements()
 * @method SlaPolicies slaPolicies()
 * @method SupportAddresses supportAddresses()
 * @method SuspendedTickets suspendedTickets()
 * @method Tags tags($id = null)
 * @method Targets targets()
 * @method Tickets tickets($id = null)
 * @method TicketFields ticketFields($id = null)
 * @method TicketImports ticketImports()
 * @method Triggers triggers()
 * @method TwitterHandles twitterHandles()
 * @method UserFields userFields($id = null)
 * @method Users users($id = null)
 * @method Views views()
 */
abstract class ZendeskAbstract
{

}