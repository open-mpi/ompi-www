<?
$subject_val = "[OMPI users] Problem with MPI_Wtime()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 15 08:51:49 2011" -->
<!-- isoreceived="20110915125149" -->
<!-- sent="Thu, 15 Sep 2011 14:51:43 +0200" -->
<!-- isosent="20110915125143" -->
<!-- name="Ghislain Lartigue" -->
<!-- email="ghislain.lartigue_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_Wtime()" -->
<!-- id="79BDB6B8-FB47-405B-B7CE-D975455E499E_at_coria.fr" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_Wtime()<br>
<strong>From:</strong> Ghislain Lartigue (<em>ghislain.lartigue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-15 08:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17306.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17307.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
<li><strong>Reply:</strong> <a href="17307.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have instrumented my fortran code with &quot;timers&quot; in the following way:
<br>
<p>==================================================
<br>
<p>start_0 = MPI_Wtime()
<br>
<p>start_1 = MPI_Wtime()
<br>
call foo()
<br>
end_1 = MPI_Wtime()
<br>
write(*,*) &quot;timer1 = &quot;,end1-start1
<br>
<p>start_2 = MPI_Wtime()
<br>
call bar()
<br>
end_2 = MPI_Wtime()
<br>
write(*,*) &quot;timer2 = &quot;,end2-start2
<br>
<p>end_0 = MPI_Wtime()
<br>
write(*,*) &quot;timer0 = &quot;,end0-start0
<br>
<p>==================================================
<br>
<p>When I run my code on a &quot;small&quot; number of processors, I find that timer0=timer1+timer2 with a very good precision (less than 1%).
<br>
However, as I increase the number of processors, this is not true any more: I can have 10%, 20% or even more discrepancy!
<br>
The more processor I use, the bigger errors are observed.
<br>
<p>Obviously, my code is much bigger than the simple example above, but the principle is exactly the same.
<br>
<p>Does anyone have an idea?
<br>
<p>Thanks!
<br>
G.
<br>
<p>PS:
<br>
Of course, each processor writes its own timer in an individual file: the discrepancy is nearly the same on every processor.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17306.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17307.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
<li><strong>Reply:</strong> <a href="17307.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
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
