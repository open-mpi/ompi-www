<?
$subject_val = "Re: [OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 09:55:03 2008" -->
<!-- isoreceived="20080115145503" -->
<!-- sent="Tue, 15 Jan 2008 16:54:57 +0200" -->
<!-- isosent="20080115145457" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="20080115145457.GM25619_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0801080955540.16691_at_mail.ccr.buffalo.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mixed myrinet/non-myrinet nodes<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 09:54:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 15, 2008 at 09:49:40AM -0500, M Jones wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    We have a mixed environment in which roughly 2/3 of the nodes
</span><br>
<span class="quotelev1">&gt; in our cluster have myrinet (mx 1.2.1), while the full cluster has
</span><br>
<span class="quotelev1">&gt; gigE.  Running open-mpi exclusively on myrinet nodes or exclusively
</span><br>
<span class="quotelev1">&gt; on non-myrinet nodes is fine, but mixing the two nodes types
</span><br>
<span class="quotelev1">&gt; results in a runtime error (PML add procs failed), no matter what --mca 
</span><br>
<span class="quotelev1">&gt; flags I try to use to push the traffic onto tcp (note that
</span><br>
<span class="quotelev1">&gt; --mca mtl ^mx --mca btl ^mx does appear to use tcp, as long as all
</span><br>
<span class="quotelev1">&gt; of the nodes have myrinet cards, but not in the mixed case).
</span><br>
What error do you get in this case? What version of Open MPI are you using?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
