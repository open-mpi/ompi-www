<?
$subject_val = "Re: [OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 14:10:59 2008" -->
<!-- isoreceived="20080115191059" -->
<!-- sent="Tue, 15 Jan 2008 14:10:54 -0500" -->
<!-- isosent="20080115191054" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="530E0704-C950-4F71-B94A-A0CE5DFF201E_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0801151018430.18528_at_mail.ccr.buffalo.edu" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 14:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4838.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4836.php">Patrick Geoffray: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the --mca btl ^mx totally prevents use of mx interface. So  
<br>
everybody uses tcp (even mx capable nodes). If you want a mixed  
<br>
configuration you have to enforce use of the ob1 pml, but let the mx  
<br>
btl be used where it is suitable (it will be disabled at runtime if it  
<br>
can't run). You're problem is not solved yet.
<br>
<p>Aurelien
<br>
<p><p>Le 15 janv. 08 &#224; 10:25, M D Jones a &#233;crit :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, that combination seems to hang on me - but
</span><br>
<span class="quotelev1">&gt; '--mca pml ob1 --mca btl ^mx' does indeed do the trick.
</span><br>
<span class="quotelev1">&gt; Many thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 15 Jan 2008, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This case actually works. We run into it few days ago, when we  
</span><br>
<span class="quotelev2">&gt;&gt; discovered
</span><br>
<span class="quotelev2">&gt;&gt; that one of the compute nodes in a cluster didn't get his Myrinet  
</span><br>
<span class="quotelev2">&gt;&gt; card
</span><br>
<span class="quotelev2">&gt;&gt; installed properly ... The performance were horrible but the  
</span><br>
<span class="quotelev2">&gt;&gt; application run
</span><br>
<span class="quotelev2">&gt;&gt; to completion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You will have to use the following flags: --mca pml ob1 --mca btl  
</span><br>
<span class="quotelev2">&gt;&gt; mx,tcp,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 15, 2008, at 8:49 AM, M Jones wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  We have a mixed environment in which roughly 2/3 of the nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in our cluster have myrinet (mx 1.2.1), while the full cluster has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gigE.  Running open-mpi exclusively on myrinet nodes or exclusively
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on non-myrinet nodes is fine, but mixing the two nodes types
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results in a runtime error (PML add procs failed), no matter what  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags I try to use to push the traffic onto tcp (note that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca mtl ^mx --mca btl ^mx does appear to use tcp, as long as all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the nodes have myrinet cards, but not in the mixed case).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought that we would be able to use a single open-mpi build to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support both networks (and users would be able to request mx nodes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they need them using the batch queuing system, which they are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; already accustomed to).  Am I missing something (or just doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something dumb)?  Compiling mpi implementations for each compiler  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is bad enough, add in separate builds for networks and it just gets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; worse ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4838.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4835.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4836.php">Patrick Geoffray: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
