<?
$subject_val = "[OMPI users] MPI Spawn functionality and core allocation questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 11:50:47 2016" -->
<!-- isoreceived="20160629155047" -->
<!-- sent="Wed, 29 Jun 2016 10:50:16 -0500" -->
<!-- isosent="20160629155016" -->
<!-- name="Jason Maldonis" -->
<!-- email="maldonis_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Spawn functionality and core allocation questions" -->
<!-- id="CA+LevYJ9xVipnYd648f49pGdrg83=WZQdiBYTyN_9_91cYuHGQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI Spawn functionality and core allocation questions<br>
<strong>From:</strong> Jason Maldonis (<em>maldonis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-29 11:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29562.php">Aurelien Bouteiller: "Re: [OMPI users] MPI Spawn functionality and core allocation questions"</a>
<li><strong>Previous message:</strong> <a href="29560.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29562.php">Aurelien Bouteiller: "Re: [OMPI users] MPI Spawn functionality and core allocation questions"</a>
<li><strong>Reply:</strong> <a href="29562.php">Aurelien Bouteiller: "Re: [OMPI users] MPI Spawn functionality and core allocation questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I am having trouble developing a complicated parallelization algorithm with
<br>
MPI and I'm hoping for some tips (I am using OpenMPI 1.10.2). I posted the
<br>
latest problem I ran into on Stack Overflow and got a response from someone
<br>
saying they don't think it is possible to do the spawn allocation that I
<br>
want.
<br>
<p>You have all been very helpful in the past, so I am hoping to get your
<br>
opinions.
<br>
<p>Briefly, I am trying to oversubscribe cores to run spawned processes while
<br>
the main program's processes sit and wait in a barrier.  Because the syntax
<br>
highlighting is better, it might be easiest to look at my post on Stack
<br>
Overflow than me trying to paste it in an email. Please see this link:
<br>
<a href="http://stackoverflow.com/questions/38087327/mpi-spawn-not-enough-slots-available-all-which-nodes-are-allocated-for-this-j">http://stackoverflow.com/questions/38087327/mpi-spawn-not-enough-slots-available-all-which-nodes-are-allocated-for-this-j</a>
<br>
<p>Thanks for your help,
<br>
Jason
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29561/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29562.php">Aurelien Bouteiller: "Re: [OMPI users] MPI Spawn functionality and core allocation questions"</a>
<li><strong>Previous message:</strong> <a href="29560.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29562.php">Aurelien Bouteiller: "Re: [OMPI users] MPI Spawn functionality and core allocation questions"</a>
<li><strong>Reply:</strong> <a href="29562.php">Aurelien Bouteiller: "Re: [OMPI users] MPI Spawn functionality and core allocation questions"</a>
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
