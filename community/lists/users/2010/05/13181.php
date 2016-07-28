<?
$subject_val = "Re: [OMPI users] MPI daemon error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 29 09:19:14 2010" -->
<!-- isoreceived="20100529131914" -->
<!-- sent="Sat, 29 May 2010 07:19:03 -0600" -->
<!-- isosent="20100529131903" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI daemon error" -->
<!-- id="B806784D-347F-48FB-AB60-4574A0559AFC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikdGF_JLV8eG7e_XiipL6wUnHNp-rdtFQZ6AD85_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI daemon error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-29 09:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Previous message:</strong> <a href="13180.php">Ralph Castain: "Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>In reply to:</strong> <a href="13177.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Reply:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are some timeout issues you can see with large clusters on Torque - check the Torque web site for explanations and instructions on what to do about it. However, that doesn't appear to be the problem here.
<br>
<p>If our daemon doesn't report back, it is typically due to one or more of the following reasons:
<br>
<p>1. it couldn't start because it didn't find the required libraries.
<br>
<p>2. it couldn't report back because it hit a firewall
<br>
<p>3. it couldn't report back because it didn't find a network that would get it back to mpirun
<br>
<p><span class="quotelev1">&gt;From your other note, it sounds like #3 might be the problem here. Do you have some nodes that are configured with &quot;eth0&quot; pointing to your 10.x network, and other nodes with &quot;eth0&quot; pointing to your 192.x network? I have found that having interfaces that share a name but are on different IP addresses sometimes causes OMPI to miss-connect.
</span><br>
<p>If you randomly got some of those nodes in your allocation, that might explain why your jobs sometimes work and sometimes don't.
<br>
<p><p>On May 28, 2010, at 3:23 PM, Rahul Nabar wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, May 28, 2010 at 3:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What environment are you running on the cluster, and what version of OMPI? Not sure that error message is coming from us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.1
</span><br>
<span class="quotelev1">&gt; The cluster runs PBS-Torque. So I guess, that could be the other error source.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rahul
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
<li><strong>Next message:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Previous message:</strong> <a href="13180.php">Ralph Castain: "Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>In reply to:</strong> <a href="13177.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Reply:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
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
