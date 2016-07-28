<?
$subject_val = "Re: [OMPI users] signal 15 (terminated)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 17:25:47 2009" -->
<!-- isoreceived="20090206222547" -->
<!-- sent="Fri, 6 Feb 2009 17:25:41 -0500" -->
<!-- isosent="20090206222541" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal 15 (terminated)" -->
<!-- id="D65C7B47-F2F8-4D22-9F26-1C240A2B06C7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="312638.29206.qm_at_web111204.mail.gq1.yahoo.com" -->
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
<strong>Date:</strong> 2009-02-06 17:25:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7986.php">Jeff Squyres: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7966.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; this turned into a hectic week...
<br>
<p>On Feb 4, 2009, at 11:28 AM, Hana Milani wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, Thanks for helping me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a Fortran program, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it has been written by f77, but I have compiled it with  
</span><br>
<span class="quotelev1">&gt; gfortran. People have also done the same with no problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have access to the source code?  I wonder if the program is
</span><br>
<span class="quotelev1">&gt; internally raising an error and effectively aborting itself.  Do you
</span><br>
<span class="quotelev1">&gt; know that the application runs correctly?  Do you have any test data
</span><br>
<span class="quotelev1">&gt; sets that you can try that give known outputs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I have installed the source code. I have not been able to run  
</span><br>
<span class="quotelev1">&gt; the program in parallel, but I have run my inputs sequentially and  
</span><br>
<span class="quotelev1">&gt; got satisfactory results.
</span><br>
<p>That's a good datapoint, but it's unfortunately not conclusive.
<br>
<p><span class="quotelev1">&gt; If you allow me, I can send the details of the code to your email.
</span><br>
<p><p>If it's small and simple, sure.  I'm afraid I don't have the time/ 
<br>
resources to investigate a large complex application that is  
<br>
misbehaving.
<br>
<p>I don't have any more insights other than to re-state that *something*  
<br>
is killing your application with SIGTERM.  It is *likely* some other  
<br>
entity on your node - a daemon or some other controller process.  But  
<br>
it is also possible (although probably less likely) that the  
<br>
application is aborting itself.
<br>
<p>Are you able to run *any* MPI applications (especially those compiled  
<br>
with Fortran) in parallel?  E.g., the hello world and the ring  
<br>
programs in the examples/ subdirectory in the OMPI distribution?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7986.php">Jeff Squyres: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7966.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
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
