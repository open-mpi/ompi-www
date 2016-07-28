<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 08:26:31 2007" -->
<!-- isoreceived="20071001122631" -->
<!-- sent="Mon, 1 Oct 2007 17:56:26 +0530" -->
<!-- isosent="20071001122626" -->
<!-- name="Amit Kumar Saha" -->
<!-- email="amitsaha.in_at_[hidden]" -->
<!-- subject="[OMPI users] problem with 'orted'" -->
<!-- id="547db2260710010526l43603405ne6cab3f82f2e44df_at_mail.gmail.com" -->
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
<strong>From:</strong> Amit Kumar Saha (<em>amitsaha.in_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 08:26:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4116.php">Tim Prins: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4117.php">Si Hammond: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Reply:</strong> <a href="4117.php">Si Hammond: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Reply:</strong> <a href="4313.php">Jeff Squyres: "Re: [OMPI users] problem with 'orted'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>I am using Open MPI 1.2.3 to run a task on 4 hosts as follows:
<br>
<p>amit_at_ubuntu-desktop-1:~/mpi-exec$ mpirun --np 4 --hostfile
<br>
mpi-host-file ParallelSearch
<br>
bash: /usr/local/bin/orted: No such file or directory
<br>
<p>The problem is that 'orted' is not found on one of the 4 hosts. I
<br>
investigated the problem and found out that whereas 'orted' is stored
<br>
in /usr/local/bin on all the other 3 hosts, it is in /usr/bin/orted on
<br>
the erroneous host. I tried to create a soft link to solve the problem
<br>
but sadly it is not so simple, it seems.
<br>
<p>It would be nice to know how to get around this problem.
<br>
<p>Thanks,
<br>
Amit
<br>
<pre>
-- 
Amit Kumar Saha
*NetBeans Community Docs Coordinator*
me blogs@ <a href="http://amitksaha.blogspot.com">http://amitksaha.blogspot.com</a>
URL:<a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4116.php">Tim Prins: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4114.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4117.php">Si Hammond: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Reply:</strong> <a href="4117.php">Si Hammond: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Reply:</strong> <a href="4313.php">Jeff Squyres: "Re: [OMPI users] problem with 'orted'"</a>
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
