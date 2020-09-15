SYMFONY = php bin/console

help:
	$(SYMFONY)
cc:
	$(SYMFONY) cache:clear
dsd:
	$(SYMFONY) doctrine:schema:drop --full-database --force
dmd:
	$(SYMFONY) doctrine:migrations:diff
dmm:
	$(SYMFONY) doctrine:migrations:migrate
dfl:
	$(SYMFONY) doctrine:fixtures:load
controller:
	$(SYMFONY) make:controller
entity:
	$(SYMFONY) make:entity
form:
	$(SYMFONY) make:form
