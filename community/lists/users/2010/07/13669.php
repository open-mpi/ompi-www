<?
$subject_val = "[OMPI users] do all processors have to execute MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 14:39:59 2010" -->
<!-- isoreceived="20100716183959" -->
<!-- sent="Fri, 16 Jul 2010 19:39:54 +0100" -->
<!-- isosent="20100716183954" -->
<!-- name="Anton Shterenlikht" -->
<!-- email="mexas_at_[hidden]" -->
<!-- subject="[OMPI users] do all processors have to execute MPI_Bcast?" -->
<!-- id="20100716183954.GA39545_at_mech-cluster241.men.bris.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinuy4zLONCEPJrb3eWDgO5xMrsQNjXIsOBIPLvN_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] do all processors have to execute MPI_Bcast?<br>
<strong>From:</strong> Anton Shterenlikht (<em>mexas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 14:39:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13668.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13571.php">jody: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will this bit of code work:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank .eq. &lt;somerank&gt;) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*change var*
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Bcast(var, 1, MPI_INTEGER, rank, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, errstat)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Barrier(MPI_COMM_WORLD, errstat)
<br>
<p>I'm using a int variable on all processors.
<br>
At some point some process can change its
<br>
value of this variable.
<br>
I then need to let all other
<br>
processes know the new value. So I tried
<br>
to use MPI_Bcast for this. But I think
<br>
MPI waits indefinitely at MPI_Barrier.
<br>
<p>I'm now wondering if MPI_Bcast must
<br>
be executed by all processes, similar
<br>
to MPI_Barrier. Is this correct?
<br>
<p><p>many thanks
<br>
anton
<br>
<p><p><pre>
-- 
Anton Shterenlikht
Room 2.6, Queen's Building
Mech Eng Dept
Bristol University
University Walk, Bristol BS8 1TR, UK
Tel: +44 (0)117 331 5944
Fax: +44 (0)117 929 4423
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13668.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13571.php">jody: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
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
