<?
$subject_val = "Re: [OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 10:02:05 2008" -->
<!-- isoreceived="20080115150205" -->
<!-- sent="Tue, 15 Jan 2008 09:01:58 -0600" -->
<!-- isosent="20080115150158" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="C44161FD-687D-4550-BB35-EF1081D4DAEC_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 10:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4833.php">Gleb Natapov: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This case actually works. We run into it few days ago, when we  
<br>
discovered that one of the compute nodes in a cluster didn't get his  
<br>
Myrinet card installed properly ... The performance were horrible but  
<br>
the application run to completion.
<br>
<p>You will have to use the following flags: --mca pml ob1 --mca btl  
<br>
mx,tcp,self
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 15, 2008, at 8:49 AM, M Jones wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   We have a mixed environment in which roughly 2/3 of the nodes
</span><br>
<span class="quotelev1">&gt; in our cluster have myrinet (mx 1.2.1), while the full cluster has
</span><br>
<span class="quotelev1">&gt; gigE.  Running open-mpi exclusively on myrinet nodes or exclusively
</span><br>
<span class="quotelev1">&gt; on non-myrinet nodes is fine, but mixing the two nodes types
</span><br>
<span class="quotelev1">&gt; results in a runtime error (PML add procs failed), no matter what -- 
</span><br>
<span class="quotelev1">&gt; mca
</span><br>
<span class="quotelev1">&gt; flags I try to use to push the traffic onto tcp (note that
</span><br>
<span class="quotelev1">&gt; --mca mtl ^mx --mca btl ^mx does appear to use tcp, as long as all
</span><br>
<span class="quotelev1">&gt; of the nodes have myrinet cards, but not in the mixed case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought that we would be able to use a single open-mpi build to
</span><br>
<span class="quotelev1">&gt; support both networks (and users would be able to request mx nodes if
</span><br>
<span class="quotelev1">&gt; they need them using the batch queuing system, which they are
</span><br>
<span class="quotelev1">&gt; already accustomed to).  Am I missing something (or just doing
</span><br>
<span class="quotelev1">&gt; something dumb)?  Compiling mpi implementations for each compiler  
</span><br>
<span class="quotelev1">&gt; suite
</span><br>
<span class="quotelev1">&gt; is bad enough, add in separate builds for networks and it just gets
</span><br>
<span class="quotelev1">&gt; worse ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4834/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4833.php">Gleb Natapov: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
