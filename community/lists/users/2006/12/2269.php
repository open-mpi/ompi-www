<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  1 10:48:20 2006" -->
<!-- isoreceived="20061201154820" -->
<!-- sent="Fri, 01 Dec 2006 08:48:12 -0700" -->
<!-- isosent="20061201154812" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] password orted problem" -->
<!-- id="C1959CCC.AA3%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1164986277.10710.15.camel_at_localhost" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-01 10:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2270.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2268.php">Jens Klostermann: "[OMPI users] password orted problem"</a>
<li><strong>In reply to:</strong> <a href="2268.php">Jens Klostermann: "[OMPI users] password orted problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2286.php">Jens Klostermann: "Re: [OMPI users] password orted problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What the system is saying is that (a) you don't have transparent ssh
<br>
authority on one or more of your nodes, and/or (b) the system was unable to
<br>
locate the Open MPI code libraries on the remote node. For the first
<br>
problem, please see the FAQ at:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
<br>
<p>Once you have that fixed, then you should check the remote nodes to ensure
<br>
that the Open MPI code libraries are available - you may need to provide a
<br>
prefix directory to mpirun to tell us where they are. Please see the FAQ at:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p>For some advice in that area.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On 12/1/06 8:17 AM, &quot;Jens Klostermann&quot;
<br>
&lt;jens.klostermann_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I 've got the same problem as described in:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/07/1537.php">http://www.open-mpi.org/community/lists/users/2006/07/1537.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Chengwen Chen (chenchengwen_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2006-07-04 03:53:26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem seems to occur randomly! It occurs more often if I use a
</span><br>
<span class="quotelev1">&gt; larger number of cpu, but always never if I use a small number of cpus.
</span><br>
<span class="quotelev1">&gt; So far my cure to the problem is to kill and restart my application
</span><br>
<span class="quotelev1">&gt; (mpirun ...) as often untill the error won't occur and mpirun will run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So is the problem resolved. Can anybody give me an hint?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using a amd64 linux (suse10) cluster with infiniband conection and
</span><br>
<span class="quotelev1">&gt; openmpi-1.2a1r10111.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I attach the ompi_info --param all all output, hope it helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards Jens
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
<li><strong>Next message:</strong> <a href="2270.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2268.php">Jens Klostermann: "[OMPI users] password orted problem"</a>
<li><strong>In reply to:</strong> <a href="2268.php">Jens Klostermann: "[OMPI users] password orted problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2286.php">Jens Klostermann: "Re: [OMPI users] password orted problem"</a>
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
