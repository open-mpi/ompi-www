<?
$subject_val = "Re: [OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 10:25:12 2008" -->
<!-- isoreceived="20080115152512" -->
<!-- sent="Tue, 15 Jan 2008 10:25:00 -0500 (EST)" -->
<!-- isosent="20080115152500" -->
<!-- name="M D Jones" -->
<!-- email="jonesm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="Pine.LNX.4.64.0801151018430.18528_at_mail.ccr.buffalo.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C44161FD-687D-4550-BB35-EF1081D4DAEC_at_eecs.utk.edu" -->
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
<strong>From:</strong> M D Jones (<em>jonesm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 10:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4836.php">Patrick Geoffray: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4839.php">Aurélien Bouteiller: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4839.php">Aurélien Bouteiller: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, that combination seems to hang on me - but
<br>
'--mca pml ob1 --mca btl ^mx' does indeed do the trick.
<br>
Many thanks!
<br>
<p>Matt
<br>
<p>On Tue, 15 Jan 2008, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This case actually works. We run into it few days ago, when we discovered 
</span><br>
<span class="quotelev1">&gt; that one of the compute nodes in a cluster didn't get his Myrinet card 
</span><br>
<span class="quotelev1">&gt; installed properly ... The performance were horrible but the application run 
</span><br>
<span class="quotelev1">&gt; to completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will have to use the following flags: --mca pml ob1 --mca btl mx,tcp,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 15, 2008, at 8:49 AM, M Jones wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   We have a mixed environment in which roughly 2/3 of the nodes
</span><br>
<span class="quotelev2">&gt;&gt; in our cluster have myrinet (mx 1.2.1), while the full cluster has
</span><br>
<span class="quotelev2">&gt;&gt; gigE.  Running open-mpi exclusively on myrinet nodes or exclusively
</span><br>
<span class="quotelev2">&gt;&gt; on non-myrinet nodes is fine, but mixing the two nodes types
</span><br>
<span class="quotelev2">&gt;&gt; results in a runtime error (PML add procs failed), no matter what --mca
</span><br>
<span class="quotelev2">&gt;&gt; flags I try to use to push the traffic onto tcp (note that
</span><br>
<span class="quotelev2">&gt;&gt; --mca mtl ^mx --mca btl ^mx does appear to use tcp, as long as all
</span><br>
<span class="quotelev2">&gt;&gt; of the nodes have myrinet cards, but not in the mixed case).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I thought that we would be able to use a single open-mpi build to
</span><br>
<span class="quotelev2">&gt;&gt; support both networks (and users would be able to request mx nodes if
</span><br>
<span class="quotelev2">&gt;&gt; they need them using the batch queuing system, which they are
</span><br>
<span class="quotelev2">&gt;&gt; already accustomed to).  Am I missing something (or just doing
</span><br>
<span class="quotelev2">&gt;&gt; something dumb)?  Compiling mpi implementations for each compiler suite
</span><br>
<span class="quotelev2">&gt;&gt; is bad enough, add in separate builds for networks and it just gets
</span><br>
<span class="quotelev2">&gt;&gt; worse ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Matt
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4836.php">Patrick Geoffray: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4839.php">Aurélien Bouteiller: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4839.php">Aurélien Bouteiller: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
