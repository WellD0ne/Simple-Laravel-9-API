## About Laravel

Simple Laravel 9 REST API

Deploy:
- Clone this repository
- Composer install
- Config DB .env
- artisan migrate --seed

Test token Authorization: "Bearer 2|7P1hZsvrtMzMCt643jaC4nmrp4Kc0vtSed7v78Y3"

---
Usage:

* GET	/api/v1/users - get all
* GET	/api/v1/users/{user_id} - get one

* GET	/api/v1/posts - get all
* GET	/api/v1/posts/{post_id} - get one
* POST /api/v1/posts/ - store
* PUT/PATCH /api/v1/posts/{post_id} - update
* DELETE /api/v1/posts/{post_id} - delete
---
Example response:

"/api/v1/users/10"

{
"data": {
"id": 10,
"name": "Ronny Maggio",
"email": "mandy28@example.com",
"created": "2022-11-30T16:32:52.000000Z",
"posts": [
{
"id": 46,
"title": "Excepturi laboriosam molestiae iure dolores qui et similique.",
"content": "Fuga suscipit ullam aut animi quas. Voluptas non vel enim quia ut illo quidem voluptas. Ipsum adipisci quasi omnis. Facere sit est quia sit ut nemo corporis omnis. Doloribus et velit beatae. Fugiat esse quo quas odit exercitationem.",
"status": "publish",
"comment_count": 0
}
]
}
}
