<?
$subject_val = "[OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 06:20:23 2011" -->
<!-- isoreceived="20110908102023" -->
<!-- sent="Thu, 8 Sep 2011 12:20:19 +0200" -->
<!-- isosent="20110908102019" -->
<!-- name="Ghislain Lartigue" -->
<!-- email="ghislain.lartigue_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_BARRIER" -->
<!-- id="CE527A96-A52B-4D5D-8A78-C358E319FD34_at_coria.fr" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_BARRIER<br>
<strong>From:</strong> Ghislain Lartigue (<em>ghislain.lartigue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 06:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17183.php">Jeff Squyres: "Re: [OMPI users] query regarding Open fabrics connections"</a>
<li><strong>Previous message:</strong> <a href="17181.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17184.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17184.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>at a given point in my (Fortran90) program, I write:
<br>
<p>===================
<br>
start_time = MPI_Wtime()
<br>
call MPI_BARRIER(...)
<br>
new_time = MPI_Wtime() - start_time
<br>
write(*,*) &quot;barrier time =&quot;,new_time
<br>
==================
<br>
<p>and then I run my code...
<br>
<p>I expected that the values of &quot;new_time&quot; would range from 0 to Tmax (1700 in my case)
<br>
As I understand it, the first process that hits the barrier should print Tmax and the last process that hits the barrier should print 0 (or a very low value).
<br>
<p>But this is not the case: all processes print values in the range 1400-1700!
<br>
<p>Any explanation?
<br>
<p>Thanks,
<br>
Ghislain.
<br>
<p>PS:
<br>
This small code behaves perfectly in other parts of my code...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17183.php">Jeff Squyres: "Re: [OMPI users] query regarding Open fabrics connections"</a>
<li><strong>Previous message:</strong> <a href="17181.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17184.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17184.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
