<?
$subject_val = "Re: [OMPI users] performance issue mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 02:37:57 2015" -->
<!-- isoreceived="20150507063757" -->
<!-- sent="Thu, 7 May 2015 08:37:51 +0200" -->
<!-- isosent="20150507063751" -->
<!-- name="Steven Vancoillie" -->
<!-- email="steven.vancoillie_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance issue mpi_init" -->
<!-- id="20150507063751.GA832_at_lenovo" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6751834C-EC3D-43B7-AACC-68DC7A89649B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] performance issue mpi_init<br>
<strong>From:</strong> Steven Vancoillie (<em>steven.vancoillie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-07 02:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Previous message:</strong> <a href="26845.php">Rahul Yadav: "[OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26804.php">Ralph Castain: "Re: [OMPI users] performance issue mpi_init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 28 [07:57], Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Here is what I get on my CentOS7 system using the 1.8.5 about to be released:
</span><br>
<p>I have now tried 1.8.5 release candidate 3 and now I get much better
<br>
performance. So, I will just move on to 1.8.5 and consider this
<br>
solved.
<br>
<p><span class="quotelev1">&gt; If you have a hostfile (or allocation of some kind) that is larger
</span><br>
<span class="quotelev1">&gt; than one node, then the extra time is likely being used by this
</span><br>
<span class="quotelev1">&gt; DVM-style launch. You might try adding the -host flag (as I did
</span><br>
<span class="quotelev1">&gt; above) to cut that down.
</span><br>
<p>Adding the -host flag did not make any difference for 1.8.4,
<br>
but as mentioned above, 1.8.5 seems to not have this performance issue
<br>
any more...
<br>
<p>Steven
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Previous message:</strong> <a href="26845.php">Rahul Yadav: "[OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26804.php">Ralph Castain: "Re: [OMPI users] performance issue mpi_init"</a>
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
