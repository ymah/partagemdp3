clean:
	rm -rf *~ *#
fullclean:

	sudo rm -rf *~ *# file/* .git

	sudo rm -rf *~ *# file/*
commit:
	git init
	git add *
	git commit -m 'test'
	git remote add origin https://github.com/ymah/partagemdp3.git
	git push -u origin master 

recommit:
	git add *
	git commit -m 'test'
	git push -u origin master
	git push -u origin master

