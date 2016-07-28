<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 16:10:41 2007" -->
<!-- isoreceived="20070911201041" -->
<!-- sent="Tue, 11 Sep 2007 16:10:36 -0400" -->
<!-- isosent="20070911201036" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another mpirun + xgrid question" -->
<!-- id="20070911201036.GB14664_at_avicenna.cc.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1189482543.2977.4.camel_at_neeraj.crlindia.com" -->
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
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-11 16:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3990.php">Richard.Friedman_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="3988.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="3987.php">Neeraj Chourasia: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4027.php">Brian Barrett: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Neeraj Chourasia on Mon, Sep 10, 2007 at 11:49:03PM EDT:
<br>
<span class="quotelev1">&gt; On Mon, 2007-09-10 at 15:35 -0400, Lev Givon wrote:
</span><br>
<span class="quotelev2">&gt; &gt; When launching an MPI program with mpirun on an xgrid cluster, is
</span><br>
<span class="quotelev2">&gt; &gt; there a way to cause the program being run to be temporarily copied to
</span><br>
<span class="quotelev2">&gt; &gt; the compute nodes in the cluster when executed (i.e., similar to what the
</span><br>
<span class="quotelev2">&gt; &gt; xgrid command line tool does)? Or is it necessary to make the program
</span><br>
<span class="quotelev2">&gt; &gt; being run available on every compute node (e.g., using NFS data
</span><br>
<span class="quotelev2">&gt; &gt; partions)?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 						L.G.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; If you are using scheduler like PBS or SGE over MPI, there is an option
</span><br>
<span class="quotelev1">&gt; called prolog and epilog, where you can give scripts which does copy
</span><br>
<span class="quotelev1">&gt; operation. This script is called before and after job execution as the
</span><br>
<span class="quotelev1">&gt; name suggests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Without it, in mpi itself, i have to see, if it can be done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The alternative way is to keep copy of the program at the same location
</span><br>
<span class="quotelev1">&gt; on all compute nodes and launch mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Of course, but one of the advantages of XGrid is that one can submit
<br>
an executable or script for execution on the compute nodes even if it
<br>
wasn't installed on those machines. Moreover, it also isn't necessary
<br>
to have multiple user accounts on the compute nodes in an XGrid
<br>
cluster because the job scheduler runs as the nobody user. Since
<br>
OpenMPI makes use of the XGrid scheduler, I was curious whether its
<br>
mpirun command could also somehow submit the program being run to the
<br>
compute nodes (a bit of experimenting seems to suggests that it is not
<br>
possible).
<br>
<p><span class="quotelev1">&gt; If the executable location is different on compute nodes, you have to
</span><br>
<span class="quotelev1">&gt; specify the same as the mpirun command-line arguments.
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L.G.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3990.php">Richard.Friedman_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="3988.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="3987.php">Neeraj Chourasia: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4027.php">Brian Barrett: "Re: [OMPI users] another mpirun + xgrid question"</a>
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
