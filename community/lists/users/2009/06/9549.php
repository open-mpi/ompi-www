<?
$subject_val = "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 21:03:09 2009" -->
<!-- isoreceived="20090605010309" -->
<!-- sent="Thu, 4 Jun 2009 21:02:45 -0400" -->
<!-- isosent="20090605010245" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pb in configure script when using ifort with &amp;quot;-fast&amp;quot; + link of opal_wrapper" -->
<!-- id="6D4A4274-C5DE-4193-B09D-A657B36AD424_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A26ADC1.6050906_at_ens2m.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 21:02:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9550.php">Jeff Squyres: "Re: [OMPI users] What flags for configure for a single machineinstallation ?"</a>
<li><strong>Previous message:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<li><strong>In reply to:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2009, at 1:07 PM, DEVEL Michel wrote:
<br>
<p><span class="quotelev1">&gt; I did not check your mails before because I was busy trying the gcc/ 
</span><br>
<span class="quotelev1">&gt; gfortran way.
</span><br>
<span class="quotelev1">&gt; I have other problems:
</span><br>
<span class="quotelev1">&gt; - for static linking I am missing plenty of ibv_* routines. I saw on  
</span><br>
<span class="quotelev1">&gt; the net that they should be in a libibverbs library, but I cannot  
</span><br>
<span class="quotelev1">&gt; find it.
</span><br>
<p>Static linking for the verbs library is not for the faint of heart.   
<br>
See the OMPI FAQ in the Open Fabrics section if you really want to  
<br>
statically link; there's a question about exactly this issue.
<br>
<p><span class="quotelev1">&gt; - dynamic linking is OK, but when I test a simple test program on my  
</span><br>
<span class="quotelev1">&gt; machine (i7 920) with an mpd-hosts containing a single line with the  
</span><br>
<span class="quotelev1">&gt; name of the machine and slots=4, the program only execute provided I  
</span><br>
<span class="quotelev1">&gt; give my password, allthough I do have a .rhosts file with the name  
</span><br>
<span class="quotelev1">&gt; of my machine in my home directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Note that we're still working on the static linking with the intel  
<br>
compiler issue; it's more complex than we initially thought.
<br>
<p>Also note that this issue you're having is likely to happen with for  
<br>
static and shared linking -- it's probably your ssh setup, not  
<br>
anything to do with static or shared linking.  Can you ssh to the  
<br>
remote machine without entering a password?  That's what you need to  
<br>
have working.
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
<li><strong>Next message:</strong> <a href="9550.php">Jeff Squyres: "Re: [OMPI users] What flags for configure for a single machineinstallation ?"</a>
<li><strong>Previous message:</strong> <a href="9548.php">Terry Frankcombe: "Re: [OMPI users] What flags for configure for a single machine	installation ?"</a>
<li><strong>In reply to:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
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
