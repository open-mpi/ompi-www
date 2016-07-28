<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 22:24:29 2007" -->
<!-- isoreceived="20070824022429" -->
<!-- sent="Thu, 23 Aug 2007 22:24:03 -0400" -->
<!-- isosent="20070824022403" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MVAPI Options on Job Submission" -->
<!-- id="1D680866-D489-410E-8E7B-ADCBF4BDAAE1_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46CE33F1.5080200_at_uark.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 22:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3918.php">Jeff Pummill: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Previous message:</strong> <a href="3916.php">Jeff Pummill: "[OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>In reply to:</strong> <a href="3916.php">Jeff Pummill: "[OMPI users] MVAPI Options on Job Submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3918.php">Jeff Pummill: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Reply:</strong> <a href="3918.php">Jeff Pummill: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You will know if it doesn't,  You will have a bunch of messages about  
<br>
not finding a ib card and that openMPI is falling back to another  
<br>
transport.
<br>
<p>Do all your nodes have infiniband?
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Aug 23, 2007, at 9:27 PM, Jeff Pummill wrote:
<br>
<p><span class="quotelev1">&gt; I have successfully compiled Open MPI 1.2.3 against Intel 8.1 compiler
</span><br>
<span class="quotelev1">&gt; suite and old (3 years) mvapi stack using the following configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure --prefix=/nfsutil/openmpi-1.2.3
</span><br>
<span class="quotelev1">&gt; --with-mvapi=/usr/local/topspin/ CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I need to assign any particular flags to the command line  
</span><br>
<span class="quotelev1">&gt; submission
</span><br>
<span class="quotelev1">&gt; to ensure that it is using the IB network instead of the TCP? Or
</span><br>
<span class="quotelev1">&gt; possibly disable the Gig-E with ^tcp to see if it still runs  
</span><br>
<span class="quotelev1">&gt; successfully?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just want to be sure that Open MPI is actually USING the IB network
</span><br>
<span class="quotelev1">&gt; and mvapi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Pummill
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3918.php">Jeff Pummill: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Previous message:</strong> <a href="3916.php">Jeff Pummill: "[OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>In reply to:</strong> <a href="3916.php">Jeff Pummill: "[OMPI users] MVAPI Options on Job Submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3918.php">Jeff Pummill: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Reply:</strong> <a href="3918.php">Jeff Pummill: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
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
