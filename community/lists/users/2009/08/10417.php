<?
$subject_val = "Re: [OMPI users] How to make a job abort when one host dies?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 15:10:03 2009" -->
<!-- isoreceived="20090818191003" -->
<!-- sent="Tue, 18 Aug 2009 15:10:06 -0400" -->
<!-- isosent="20090818191006" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to make a job abort when one host dies?" -->
<!-- id="4A8AFC8E.9020802_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A8AC1CD.3010904_at_lysator.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to make a job abort when one host dies?<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 15:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10418.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10416.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Oskar,
<br>
<p>Oskar Enoksson wrote:
<br>
<span class="quotelev1">&gt; The reason in this case was that cl120 had some kind of hardware 
</span><br>
<span class="quotelev1">&gt; problem, perhaps memory error or myrinet NIC hardware error. The system 
</span><br>
<span class="quotelev1">&gt; hung.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will try MX_ZOMBIE_SEND=0, thanks for the hint!
</span><br>
<p>I would not recommend to use that setting. It will affect performance, 
<br>
use a code path that is less tested and not really address the problem.
<br>
<p>As small messages are buffered in MX, a send can return immediately as 
<br>
the send buffer can be reused right away. However, if the MX lib fail to 
<br>
reliably deliver the message, it will eventually call the asynchronous 
<br>
error handler to report the problem. The default async error handler 
<br>
only prints a message, leaving to the application the choice of 
<br>
recovery. The right way to address the problem would be for OpenMPI to 
<br>
register its own asynchronous error handler in the MX BTL/MTL, and 
<br>
signal to ORTE to terminate the job when a send timeout has occurred.
<br>
<p>We will implement this mechanism and push it on the trunk shortly.
<br>
<p>Thanks
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10418.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10416.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
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
