# Observer

## Roadmap

- Ability to create a status page for an endpoint; display uptime and incident logs.

## Dictionary

- Endpoint; a website or API endpoint to monitor.

## Tests (to write...)

- A user can create an endpoint
- A user cannot create more than 3 endpoints
- A user can delete an endpoint
- A user cannot delete an endpoint that isn't their own
- A user can update an endpoint (base_url, protocol, query_string)
- A user cannot edit an endpoint that isn't their own
- A user cannot view an endpoint that is not their own
- A user can add their details to their profile in order to be notified
- A user can set their preferred method of notification
- A user can set up to 3 preferred methods of notification
- A user can delete their account, and it will also delete their endpoints, which will delete their test records

- Observer can monitor an endpoints up status
- Observer can monitor an endpoints domain expiry date
- Observer can monitor an endpoints speed
- Observer can monitor an endpoints SSL certificate expiry date
- Observer can monitor an endpoints SSL certificate status (in-date, expired)
- Observer can monitor an endpoints MX records setup (exists, DKIM, SPF)
- Observer can monitor core web vitals (through Hammerstonedev Sidecar)

- If an endpoint becomes unreachable, a notification is sent
- If an endpoint comes back online after going offline, a notification is sent
- If an endpoints average speed declines by 50% for more than 5 minutes, a notification is sent
- If a domain name is going to expire within 31 days, a notification is sent
- If a notification is sent, it sends the notification to the users preferred methods

### Future

- An owner of a team can generate a code to share to a user in order for them to join a team
- A user can join a team using a special link
- A user who is a part of the team cannot generate a special code for that team
- A user who is not part of the team cannot generate a special code for that team

- A user who is a part of a team can share an endpoint they are monitoring to that team
- A user who is a part of a team can revoke access to an endpoint that they have shared to a team
- A user cannot revoke access to a server that they have not previously shared to a team
- A user who is part of a team can edit a shared endpoint
- A user who is part of a team can soft delete a shared endpoint
- A user who is part of a team can elect themselves to be notified for endpoint events

- A user can create a status page for an endpoint.
- A user can set a status page to public or private.
- If a status page is set to private, it will not be accessible by outside users.