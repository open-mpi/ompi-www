<?
$subject_val = "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 26 17:42:05 2008" -->
<!-- isoreceived="20080426214205" -->
<!-- sent="Sat, 26 Apr 2008 17:41:36 -0400" -->
<!-- isosent="20080426214136" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster" -->
<!-- id="A89AB9EB-0D93-4110-9245-F01D9E982DBA_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C8E9EFD3-C247-47B9-8A3D-85AB9B9F7DA3_at_usno.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster<br>
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-26 17:41:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5547.php">SLIM H.A.: "[OMPI users] infiniband"</a>
<li><strong>Previous message:</strong> <a href="5545.php">Tim Mattox: "Re: [OMPI users] Fwd: hanging orteds"</a>
<li><strong>In reply to:</strong> <a href="5526.php">Roopesh Ojha: "[OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5598.php">Jeff Squyres: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check the FAQ section for processor affinity.
<br>
<p>On Apr 25, 2008, at 2:27 PM, Roopesh Ojha wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a newcomer to the world of openMPI who has perused the faq and
</span><br>
<span class="quotelev1">&gt; searched
</span><br>
<span class="quotelev1">&gt; the archives, I have a few questions about how to schedule processes
</span><br>
<span class="quotelev1">&gt; across
</span><br>
<span class="quotelev1">&gt; a heterogeneous cluster where some processes must be bound to  
</span><br>
<span class="quotelev1">&gt; particular
</span><br>
<span class="quotelev1">&gt; nodes and where some processes will not be compute bound, meaning more
</span><br>
<span class="quotelev1">&gt; processes than CPU cores is likely desired. Allow me to first
</span><br>
<span class="quotelev1">&gt; describe our
</span><br>
<span class="quotelev1">&gt; situation and then ask some specific questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a cluster of four nodes/hosts. Two of these have a single
</span><br>
<span class="quotelev1">&gt; Pentium3
</span><br>
<span class="quotelev1">&gt; 0.8GHz processor each. The other two have dual core processors. Our  
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev1">&gt; resides on two external drives that are mounted on the two fast  
</span><br>
<span class="quotelev1">&gt; machines
</span><br>
<span class="quotelev1">&gt; but are visible to all nodes over nfs. Our setup is not a real
</span><br>
<span class="quotelev1">&gt; cluster in
</span><br>
<span class="quotelev1">&gt; the sense that we are using ssh over nfs to link our nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For our application, some processes (manager and the datastreams)  
</span><br>
<span class="quotelev1">&gt; won't
</span><br>
<span class="quotelev1">&gt; take much CPU power while others will. Our application first  
</span><br>
<span class="quotelev1">&gt; assigns the
</span><br>
<span class="quotelev1">&gt; non-compute bound processes and then the high CPU power ones.  
</span><br>
<span class="quotelev1">&gt; Clearly we
</span><br>
<span class="quotelev1">&gt; would like to be able to assign the former processes to our two slower
</span><br>
<span class="quotelev1">&gt; machines. How can we get MPI to achieve this? What is the best way to
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; slot and max-slot commands in the hostfile to optimize performance?  
</span><br>
<span class="quotelev1">&gt; How
</span><br>
<span class="quotelev1">&gt; does max-slot behave when some node is listed more than once in the
</span><br>
<span class="quotelev1">&gt; hostfile?
</span><br>
<span class="quotelev1">&gt; Is there any way to control where processes are deployed apart from  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; basic bynode or byslot round robin schedule?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks for your time.
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Roo
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5547.php">SLIM H.A.: "[OMPI users] infiniband"</a>
<li><strong>Previous message:</strong> <a href="5545.php">Tim Mattox: "Re: [OMPI users] Fwd: hanging orteds"</a>
<li><strong>In reply to:</strong> <a href="5526.php">Roopesh Ojha: "[OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5598.php">Jeff Squyres: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
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
