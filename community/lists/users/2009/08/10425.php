<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1321, Issue 6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 17:40:11 2009" -->
<!-- isoreceived="20090818214011" -->
<!-- sent="Tue, 18 Aug 2009 23:39:04 +0200" -->
<!-- isosent="20090818213904" -->
<!-- name="Oskar Enoksson" -->
<!-- email="enok_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1321, Issue 6" -->
<!-- id="4A8B1F78.7060102_at_lysator.liu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.13608.1250630618.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1321, Issue 6<br>
<strong>From:</strong> Oskar Enoksson (<em>enok_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 17:39:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10424.php">Gerry Creager: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick Geoffray &lt;patrick_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Oskar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oskar Enoksson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The reason in this case was that cl120 had some kind of hardware 
</span><br>
<span class="quotelev2">&gt;&gt; problem, perhaps memory error or myrinet NIC hardware error. The system 
</span><br>
<span class="quotelev2">&gt;&gt; hung.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will try MX_ZOMBIE_SEND=0, thanks for the hint!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would not recommend to use that setting. It will affect performance, 
</span><br>
<span class="quotelev1">&gt; use a code path that is less tested and not really address the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As small messages are buffered in MX, a send can return immediately as 
</span><br>
<span class="quotelev1">&gt; the send buffer can be reused right away. However, if the MX lib fail to 
</span><br>
<span class="quotelev1">&gt; reliably deliver the message, it will eventually call the asynchronous 
</span><br>
<span class="quotelev1">&gt; error handler to report the problem. The default async error handler 
</span><br>
<span class="quotelev1">&gt; only prints a message, leaving to the application the choice of 
</span><br>
<span class="quotelev1">&gt; recovery. The right way to address the problem would be for OpenMPI to 
</span><br>
<span class="quotelev1">&gt; register its own asynchronous error handler in the MX BTL/MTL, and 
</span><br>
<span class="quotelev1">&gt; signal to ORTE to terminate the job when a send timeout has occurred.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We will implement this mechanism and push it on the trunk shortly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<p>Sounds great, I'm looking forward to it. Thanks a lot.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10424.php">Gerry Creager: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
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
