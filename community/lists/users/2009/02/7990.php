<?
$subject_val = "Re: [OMPI users] signal 15 (terminated)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  7 15:32:25 2009" -->
<!-- isoreceived="20090207203225" -->
<!-- sent="Sat, 7 Feb 2009 15:32:19 -0500" -->
<!-- isosent="20090207203219" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal 15 (terminated)" -->
<!-- id="9D1460C9-5E86-466E-B21D-E1A3EA23081C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="576829.74591.qm_at_web111209.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] signal 15 (terminated)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-07 15:32:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7991.php">Kersey Black: "[OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Previous message:</strong> <a href="7989.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<li><strong>In reply to:</strong> <a href="7989.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to look through the FAQ for our recommended ways to  
<br>
build BLACS, etc.  If you have a mismatch such that those libraries  
<br>
did not build properly -- or perhaps built against a different MPI  
<br>
implementation -- Bad Things can happen.
<br>
<p>Are there any test applications with those libraries to verify that  
<br>
they compiled / installed / can run properly?
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>
<br>
<p><p>On Feb 7, 2009, at 1:01 PM, Hana Milani wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you able to run *any* MPI applications (especially those  
</span><br>
<span class="quotelev1">&gt; compiled
</span><br>
<span class="quotelev2">&gt; &gt; with Fortran) in parallel?  E.g., the hello world and the ring
</span><br>
<span class="quotelev2">&gt; &gt; programs in the examples/ subdirectory in the OMPI distribution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am ruuning another code which does not need scalapack and blacs  
</span><br>
<span class="quotelev1">&gt; with openmpi directly, it has been written by fortran as well. The  
</span><br>
<span class="quotelev1">&gt; parallel run is happily going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;hello world&quot; and the ring programs in the examples are also  
</span><br>
<span class="quotelev1">&gt; working fine!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see in my prev. email, in the code there's an &quot;arch.make&quot;  
</span><br>
<span class="quotelev1">&gt; file in which I have to mention the MPI address + scalapack, blacs  
</span><br>
<span class="quotelev1">&gt; lapack and blas library addresses. Could this &quot;killing&quot; originate  
</span><br>
<span class="quotelev1">&gt; from this file. Because the scalapack installer is installed  
</span><br>
<span class="quotelev1">&gt; correctly the tests are running fine and the openmpi is functioning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have had enclosed arch.make in my prev. email.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7991.php">Kersey Black: "[OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Previous message:</strong> <a href="7989.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<li><strong>In reply to:</strong> <a href="7989.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
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
