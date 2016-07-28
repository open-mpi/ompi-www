<?
$subject_val = "[OMPI users] MPI can determine which CPU to send a process?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  8 18:54:06 2009" -->
<!-- isoreceived="20090808225406" -->
<!-- sent="Sat, 8 Aug 2009 19:53:32 -0300 (BRT)" -->
<!-- isosent="20090808225332" -->
<!-- name="otavioarj_at_[hidden]" -->
<!-- email="otavioarj_at_[hidden]" -->
<!-- subject="[OMPI users] MPI can determine which CPU to send a process?" -->
<!-- id="fy4xzkg62euv9sxyd8UYAxe124vaj_firegpg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="fy4x3xlv6udj21lckdUYAxe124vaj_firegpg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI can determine which CPU to send a process?<br>
<strong>From:</strong> <a href="mailto:otavioarj_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI%20can%20determine%20which%20CPU%20to%20send%20a%20process?"><em>otavioarj_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-08-08 18:53:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10264.php">Attila Börcs: "[OMPI users] compile mpi program on Cell BE"</a>
<li><strong>Previous message:</strong> <a href="10262.php">John R. Cary: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello fellows, 
<br>

<br>
I'm search the best Message Passing implementation to use in the University Beowulf Cluster, and I was wandering if&amp;nbsp; MPI can determine which CPU to send a process.
<br>
With MPI I can determine the host and the number of process, and with&amp;nbsp; -npernode , the number of process per nodes, but that guaranty that if I put 4 quad cores in some host list, and use -npernode 3, it will execute exactly 1 process per CPU in which&amp;nbsp; host? 
<br>
And I can determine the CPU to send a process, like CPU1 or CPU0 , some CPU affinity on execution time?
<br>

<br>
Best Regards.
<br>

<br>
Otavio Augusto.
<br>

<br>

<br>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10263/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10263/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10264.php">Attila Börcs: "[OMPI users] compile mpi program on Cell BE"</a>
<li><strong>Previous message:</strong> <a href="10262.php">John R. Cary: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<!-- nextthread="start" -->
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
