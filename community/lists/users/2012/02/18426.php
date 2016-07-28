<?
$subject_val = "[OMPI users] Problem in epoll checking in the head revision of 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 15:16:49 2012" -->
<!-- isoreceived="20120209201649" -->
<!-- sent="Fri, 10 Feb 2012 00:16:45 +0400" -->
<!-- isosent="20120209201645" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="[OMPI users] Problem in epoll checking in the head revision of 1.5" -->
<!-- id="CAN7CqreK2YE+i1nhP+rMUTLzkrV7KbZotoKLKyQNfMVH=773eA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Problem in epoll checking in the head revision of 1.5<br>
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 15:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18428.php">Jeff Squyres: "Re: [OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<li><strong>Reply:</strong> <a href="18428.php">Jeff Squyres: "Re: [OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think there is a problem in the latest commit to the branch 1.5. When
<br>
opal_setup_libevent.m4 is upgraded to autotools 1.5.5 the square brackets
<br>
in the test C code should be replaced too. Otherwise they'll go unchanged
<br>
to the configure file. And the C program which tests for epoll support will
<br>
fail:
<br>
<p>...
<br>
configure:159404: checking for working epoll system call
<br>
configure:159455: gcc -o conftest -DNDEBUG -g -O2
<br>
-I/hpc/home/USERS/senina/projects/hg/shmem-dev/opal/mca/hwloc/hwloc131/hwloc/include
<br>
-I/hpc/home/USERS/senina/projects/distribs/valgrind-3.7.0/install/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband    conftest.c -lrt
<br>
-lnsl  -lutil -lm  &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:725: error: expected expression before '[' token
<br>
conftest.c:729: error: expected expression before '[' token
<br>
conftest.c:737: error: expected expression before '[' token
<br>
configure:159455: $? = 1
<br>
configure: program exited with status 1
<br>
configure: failed program was:
<br>
...
<br>
<p>So
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int fildes[[2]];
<br>
and similar
<br>
should be replaced to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int fildes[2];
<br>
<p>I've attached a diff file which worked for me.
<br>
<p>Regards,
<br>
Andrew Senin
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18426/diff">diff</a>
</ul>
<!-- attachment="diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18428.php">Jeff Squyres: "Re: [OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<li><strong>Reply:</strong> <a href="18428.php">Jeff Squyres: "Re: [OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
