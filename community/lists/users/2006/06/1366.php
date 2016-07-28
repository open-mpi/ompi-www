<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 12:46:51 2006" -->
<!-- isoreceived="20060602164651" -->
<!-- sent="Fri, 02 Jun 2006 10:46:26 -0600" -->
<!-- isosent="20060602164626" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib /compiler issue?" -->
<!-- id="op.tai17ot0ies9li_at_rygel.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.tahq5fx3ies9li_at_rygel.local" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 12:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1367.php">Ali Eghlima: "[OMPI users] OpenMPI on VxWorks?"</a>
<li><strong>Previous message:</strong> <a href="1365.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>In reply to:</strong> <a href="1354.php">Troy Telford: "[OMPI users] openib /compiler issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 01 Jun 2006 17:49:53 -0600, Troy Telford  
<br>
&lt;ttelford_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; the 'com' test ends with:
</span><br>
<span class="quotelev1">&gt; [n1:04941] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev1">&gt; [n1:04941] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n1:04941] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [n1:04941] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And yes, I'm going to try out the dev snapshots of 1.0.3 and 1.1... I'm
</span><br>
<span class="quotelev1">&gt; just not there yet...
</span><br>
<p>I've now tried it on 1.0.3 and 1.1 nightly builds:
<br>
***presta 'com'***
<br>
1.1 works fine (hooray!!!)
<br>
<p>1.0.3 doesn't work fine (booo!!!!)
<br>
[n1:28313] *** An error occurred in MPI_Gather
<br>
[n1:28313] *** on communicator MPI_COMM_WORLD
<br>
[n1:28313] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[n1:28313] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>***presta 'allred' (allreduce)***
<br>
1.0.3 has the following error:
<br>
mpirun -np 4 -machinefile machines -prefix $MPIHOME allred 10 10 10
<br>
[n1:28366] *** An error occurred in MPI_Gather
<br>
[n1:28366] *** on communicator MPI_COMM_WORLD
<br>
[n1:28366] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[n1:28366] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[n1:28367] *** An error occurred in MPI_Gather
<br>
[n1:28367] *** on communicator MPI_COMM_WORLD
<br>
[n1:28367] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[n1:28367] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>1.1 has the following error:
<br>
mpirun -np 4 -machinefile machines -prefix $MPIHOME allred 10 10 10
<br>
[n1:28536] *** An error occurred in MPI_Gather
<br>
[n1:28537] *** An error occurred in MPI_Gather
<br>
[n1:28537] *** on communicator MPI_COMM_WORLD
<br>
[n1:28537] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[n1:28537] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[n1:28536] *** on communicator MPI_COMM_WORLD
<br>
[n1:28536] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[n1:28536] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1367.php">Ali Eghlima: "[OMPI users] OpenMPI on VxWorks?"</a>
<li><strong>Previous message:</strong> <a href="1365.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>In reply to:</strong> <a href="1354.php">Troy Telford: "[OMPI users] openib /compiler issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
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
