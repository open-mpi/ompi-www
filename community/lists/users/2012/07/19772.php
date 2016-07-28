<?
$subject_val = "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 16 16:48:55 2012" -->
<!-- isoreceived="20120716204855" -->
<!-- sent="Mon, 16 Jul 2012 14:49:39 -0600" -->
<!-- isosent="20120716204939" -->
<!-- name="Anne M. Hammond" -->
<!-- email="hammond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2" -->
<!-- id="2A504CB9-C750-435D-B61E-068F94312772_at_txcorp.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D43BB96C-7EB1-499D-A1D8-5D4F158E969B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2<br>
<strong>From:</strong> Anne M. Hammond (<em>hammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-16 16:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19771.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19771.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>Built the latest snapshot.  Still getting an error when trying to run on only
<br>
one socket (see below):  Is there a workaround?
<br>
<p>[hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 1 --npersocket 4 hostname
<br>
--------------------------------------------------------------------------
<br>
An invalid physical processor ID was returned when attempting to bind
<br>
an MPI process to a unique processor.
<br>
<p>This usually means that you requested binding to more processors than
<br>
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
M).  Double check that you have enough unique processors for all the
<br>
MPI processes that you are launching on this host.
<br>
<p>You job will now abort.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered an error:
<br>
<p>Error name: Fatal
<br>
Node: node65.cl.corp.com
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
4 total processes failed to start
<br>
<p><p>[hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 2 --npersocket 4 hostname
<br>
node65.cl.corp.com
<br>
node65.cl.corp.com
<br>
node65.cl.corp.com
<br>
node65.cl.corp.com
<br>
[hammond_at_node65 bin]$ 
<br>
<p><p><p><p>On Jul 16, 2012, at 12:56 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Jeff is at the MPI Forum this week, so his answers will be delayed. Last I heard, it was close, but no specific date has been set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2012, at 11:49 AM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When is the expected date for the official 1.6.1 (or 1.6.2 ?) to be available ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mike
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 07/16/2012 01:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can get it here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 16, 2012, at 10:22 AM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For benchmarking, we would like to use openmpi with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --num-sockets 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This fails in 1.6, but Bug Report #3119 indicates it is changed in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.6.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is 1.6.1 or 1.6.2 available in tar.gz form?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anne
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p>Anne M. Hammond - Systems / Network Administration - Tech-X Corp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hammond_at_txcorp.com 720-974-1840
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19771.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19771.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
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
