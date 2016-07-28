<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 10 23:49:47 2007" -->
<!-- isoreceived="20070911034947" -->
<!-- sent="Tue, 11 Sep 2007 09:19:03 +0530" -->
<!-- isosent="20070911034903" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another mpirun + xgrid question" -->
<!-- id="1189482543.2977.4.camel_at_neeraj.crlindia.com" -->
<!-- inreplyto="20070910193547.GJ3441_at_avicenna.cc.columbia.edu" -->
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
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-10 23:49:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3988.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="3986.php">Lev Givon: "[OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="3986.php">Lev Givon: "[OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3989.php">Lev Givon: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Reply:</strong> <a href="3989.php">Lev Givon: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using scheduler like PBS or SGE over MPI, there is an option
<br>
called prolog and epilog, where you can give scripts which does copy
<br>
operation. This script is called before and after job execution as the
<br>
name suggests.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Without it, in mpi itself, i have to see, if it can be done.
<br>
<p>The alternative way is to keep copy of the program at the same location
<br>
on all compute nodes and launch mpirun.
<br>
<p>If the executable location is different on compute nodes, you have to
<br>
specify the same as the mpirun command-line arguments.
<br>
<p>On Mon, 2007-09-10 at 15:35 -0400, Lev Givon wrote:
<br>
<span class="quotelev1">&gt; When launching an MPI program with mpirun on an xgrid cluster, is
</span><br>
<span class="quotelev1">&gt; there a way to cause the program being run to be temporarily copied to
</span><br>
<span class="quotelev1">&gt; the compute nodes in the cluster when executed (i.e., similar to what the
</span><br>
<span class="quotelev1">&gt; xgrid command line tool does)? Or is it necessary to make the program
</span><br>
<span class="quotelev1">&gt; being run available on every compute node (e.g., using NFS data
</span><br>
<span class="quotelev1">&gt; partions)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 						L.G.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments contained in it.
<br>
<p>Contact your Administrator for further information.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3988.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="3986.php">Lev Givon: "[OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="3986.php">Lev Givon: "[OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3989.php">Lev Givon: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Reply:</strong> <a href="3989.php">Lev Givon: "Re: [OMPI users] another mpirun + xgrid question"</a>
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
