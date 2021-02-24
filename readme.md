# Contribution
* Youcef BRAHIMI
* Nassim ARAB
* Mohamed CHABANE

# AgentU 
![](https://i.imgur.com/PHCMlWQ.jpg)


___
## Description du projet 

AgentU est une application web qui permet de gérer le contact entre un accueil d'une residence et les residents (gestion de courrier, gestion des rendez vous, gestion des evenements, gestion de la liste des agents et la lsite des étudiants).

___
## Lancement du projet

1. Récuperer le dépot.
2. Se placer à la racine du projet.
3. Lancer la commande`sudo docker-compose pull`
4. Lancer la commande`sudo docker-compose up -d`
___
## Accès
- Admin : `https://localhost:444`
- Api : `https://localhost:8443`

___
## Base de données 
Notre base de données est composée de cinq tables





![](https://i.imgur.com/ML2jKs1.png)


### Etudiant

* Représente l'ensemble des étudiants ayant un logement dans la résidence. 


| Attribute | Type |Description |
|-----------|------|-------------|
|id         | integer | L'id de l'étudiant. |
|ine         | integer | L'ine de l'étudiant. |
|nom        | string | Le nom de l'étudiant. |
|prenom        | string | Le prénom de l'étudiant. |
|mail        | string | L'adresse mail de l'étudiant. |
|motDePasse        | string | Le mot de passe de l'étudiant.      |
|petiteEnveloppe        | integer  | Nombre de petite enveloppe.            |
|grandeEnveloppe        | integer  | Nombre de grande enveloppe.  |
|avisPassage        | integer  | Nombre d'avis de passage.           |
|colis       | integer  | Nombre de colis.          |
|datePetiteEnveloppe       | date | La date de dernier petite enveloppe réçu. |
|dateGrandeEnveloppe        | date | La date de dernier grande enveloppe réçu.      |
|dateAvisPassage        | date  | La date de dernier avis de passage réçu.            |
|dateColis        | date  | La date de dernier colis réçu.  |
|chambre        | string  | Le bloc avec le numéro de la chambre.           |


### Agent

* Représente l'équipe du staff de la résidence.

| Attribute | Type |Description |
|-----------|------|-------------|
|id         | integer | Un identifient unique.     |
|nom | string | Nom de l'agent. |
|prenom        | String | Prenom de l'agent. |
|rendezVous       | RendezVous [] | liste des rendez-vous proposés par l'agent.  |


### RendezVous

* Représente l'ensemble des rendez-vous proposés par les agents pour les étudiants.

| Attribute | Type |Description |
|-----------|------|-------------|
|id         | integer | Un identifient unique.     |
|motif | string | Motif du rendez-vous. |
|date        | datetime | Date et heure du rendez-vous. |
|disponible       | boolean | Le rendez vous est disponible pour un étudiant ou non.  |
|etudiant        | Etudiant | L'étudiant qui réserve le rendez-vous.|
|agent       | Agent | L'agent qui propose le rendez-vous. |


### Incident

* Représente l'ensemble des incidetns signalés par les étudiants.

| Attribute | Type |Description |
|-----------|------|-------------|
|id         | integer | A unique id.     |
|motif      | string | Motif de l'incident. |
|description| string | Information sur l'incident  |
|date        | datetime | Date de déclaration de l'incidnet|
|lieu       | string | Lieu de l'incident |
|etat       | smallInt | l'état de l'incident |
|etuidant_id| integer | l'étudiant qui a déclaré l'incident |

### Evenement

* Représente l'ensemble des évènements dans le campus.


| Attribute | Type |Description |
|-----------|------|-------------|
|id         | integer | L'id de l'évenement. |
|titre        | string | Le titre l'évenement. |
|image_url        | string | Le lien vers l'image de l'évenement. |
|detail        | string | Détail de l'évenement. |

___
## Les méthodes basique de l'API

## Methode GET

|Endpoint| Description |Parameter | Parameter type | Returned Resource  Type |
|--------|-------------|----------|----------------|-------------------------|
| /etudiants | Récupérer la liste des étudiants. | - | - | Etudiant []        |
| /agents   | Récupérer la liste des agents.   | - | - | Agent []        |
| /evenemets     | Récupérer la liste des évenements. | - | - | Evenemet []    |
| /rendez_vouses | Récupérer la liste des rendez-vous. | - | - | RendezVous [] |
| /incidents | Récupérer la liste des incidents. | - | - | Incident [] |
| /etudiants/{id:int} | Récupérer l'étudiants avec l'id. |id | int | Etudiant|
| /agents/{id:int} | Récupérer l'agent avec l'id.  |id| int| Agent|
| /evenemets/{id:int}      |  Récupérer l'évenement avec l'id. |id| int| Evenemet|
| /rendez_vouses/{id:int}    | Récupérer le rendez-vous avec l'id.  |id | int | RendezVous |
| /incidents/{id:int}          | Récupérer l'incident' avec l'id.  |id | int | Incident|


## Methode POST

|Endpoint| Description |Parameter | Parameter type | Returned Resource  Type |
|--------|-------------|----------|----------------|-------------------------|
| /etudiants | Ajouter l'étudiant. | etudiant | Etudiant | Etudiant      |
| /agents   | Ajouter l'agent.   | agent | Agent | Agent        |
| /evenemets     | Ajouter l'évenement. | evenemet | Evenemet | Evenemet    |
| /rendez_vouses | Ajouter le rendezVous. | rendezVous | RendezVous | RendezVous |
| /incidents | Ajouter l'incident. | incident | Incident | Incident |

## Methode PUT

|Endpoint| Description |Parameter | Parameter type | Returned Resource  Type |
|--------|-------------|----------|----------------|-------------------------|
| /etudiants/{id:int} | Modifier l'étudiant. | etudiant | Etudiant | Etudiant      |
| /agents/{id:int}   | Modifier l'agent.   | agent | Agent | Agent        |
| /evenemets/{id:int}     | Modifier l'évenement. | evenemet | Evenemet | Evenemet    |
| /rendez_vouses/{id:int} | Modifier le rendezVous. | rendezVous | RendezVous | RendezVous |
| /incidents/{id:int} | Modifier l'incident. | incident | Incident | Incident |

## Methode Delete

|Endpoint| Description |Parameter | Parameter type | Returned Resource  Type |
|--------|-------------|----------|----------------|-------------------------|
| /etudiants/{id:int} | Supprimer l'étudiant avec l'id. | etudiant | Etudiant | -      |
| /agents/{id:int}   | Supprimer l'agent avec l'id.   | agent | Agent |    -        |
| /evenemets/{id:int}     | Supprimer l'évenement avec l'id. | evenemet | Evenemet | -    |
| /rendez_vouses/{id:int} | Supprimer le rendezVous avec l'id. | rendezVous | RendezVous | - |
| /incidents/{id:int} | Supprimer l'incident avec l'id. | incident | Incident | - |

___
## Examples

* Etudiant
![](https://i.imgur.com/DsFVZn1.png)

* Agent
![](https://i.imgur.com/EJ8WJkb.png)

* Incident
![](https://i.imgur.com/Eblrrs5.png)

* Rendez-vous
![](https://i.imgur.com/4fJT8W3.png)

* evenement 
![](https://i.imgur.com/4mj5Ypg.png)

* Ajouter un Etudiant
![](https://i.imgur.com/6NUO8TA.png)

* Ajouter un Agent
![](https://i.imgur.com/KDMeJV7.png)

* Ajouter un incident
![](https://i.imgur.com/yDatHYF.png)

* Ajouter un rendez-vous
![](https://i.imgur.com/DsMwXpx.png)

* Ajouter un évènement 

![](https://i.imgur.com/f3lY4rK.png)








