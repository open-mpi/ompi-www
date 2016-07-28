<?
$subject_val = "Re: [OMPI users] More on AlltoAll";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 19:58:29 2008" -->
<!-- isoreceived="20080320235829" -->
<!-- sent="Fri, 21 Mar 2008 00:58:20 +0100 (CET)" -->
<!-- isosent="20080320235820" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More on AlltoAll" -->
<!-- id="61644.58.165.156.75.1206057500.squirrel_at_webmail.chalmers.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="47E29E6D.5060708_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] More on AlltoAll<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 19:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5254.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5186.php">Ashley Pittman: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the data distribution was sufficiently predictable and long-lived
<br>
through the life of the application, could one not define new
<br>
communicators to clean up the calls?
<br>
<p><p><span class="quotelev1">&gt; After reading the previous discussion on AllReduce and AlltoAll, I
</span><br>
<span class="quotelev1">&gt; thought I would ask my question. I have a case where I have data
</span><br>
<span class="quotelev1">&gt; unevenly distributed among the processes (unevenly means that the
</span><br>
<span class="quotelev1">&gt; processes have differing amounts of data) that I need to globally
</span><br>
<span class="quotelev1">&gt; redistribute, resulting in a different uneven distribution. Writing the
</span><br>
<span class="quotelev1">&gt; code to do the redistribution using AlltoAll is straightforward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem though is that there are often special cases where each
</span><br>
<span class="quotelev1">&gt; process only needs to exchange data with it neighbors. So the question
</span><br>
<span class="quotelev1">&gt; is that when two processors don't have data to exchange, is the OpenMPI
</span><br>
<span class="quotelev1">&gt; AlltoAll is written in such a way so that they don't do any
</span><br>
<span class="quotelev1">&gt; communication? Will the AlltoAll be as efficient (or at least nearly as
</span><br>
<span class="quotelev1">&gt; efficient) as direct send/recv among neighbors?
</span><br>
<span class="quotelev1">&gt;   Thanks!
</span><br>
<span class="quotelev1">&gt;     Dave
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5254.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5186.php">Ashley Pittman: "Re: [OMPI users] MPI_Allreduce()"</a>
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
