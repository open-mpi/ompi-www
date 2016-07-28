<?
$subject_val = "Re: [OMPI users] Question on running the openmpi test modules";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 08:50:10 2009" -->
<!-- isoreceived="20090707125010" -->
<!-- sent="Tue, 7 Jul 2009 08:50:05 -0400" -->
<!-- isosent="20090707125005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on running the openmpi test modules" -->
<!-- id="BEECC315-677A-44B8-B18B-E81075054C9D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="610ca1a30907062143s52844a2cgd8941e2aa47b033f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on running the openmpi test modules<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 08:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9866.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>In reply to:</strong> <a href="9855.php">Prasadcse Perera: "[OMPI users] Question on running the openmpi test modules"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2009, at 12:43 AM, Prasadcse Perera wrote:
<br>
<p><span class="quotelev1">&gt; I'm  new to openmpi and currently I have setup openmpi-1.3.3a1r21566  
</span><br>
<span class="quotelev1">&gt; on my Linux machines. I have run some of available examples and also  
</span><br>
<span class="quotelev1">&gt; noticed there are some test modules under /openmpi-1.3.3a1r21566/ 
</span><br>
<span class="quotelev1">&gt; test. Are these tests run on batchwise? then how ? or are these  
</span><br>
<span class="quotelev1">&gt; tests suppose to run individually by compiling and executing  
</span><br>
<span class="quotelev1">&gt; seperately ?
</span><br>
<p>They are run via &quot;make check&quot; -- it's a standard GNU mechanism that is  
<br>
built into our make system automatically by Automake.  These tests are  
<br>
loosely maintained at best -- they were put in a long time ago, but  
<br>
the bulk of our regression testing codes are in different, not- 
<br>
publicly-accessible repositories (mainly because many of them were not  
<br>
originally written by us and we were too lazy to look into public  
<br>
redistribution rights).
<br>
<p><span class="quotelev1">&gt; I'm hoping to contribute openmpi as a developer, so I would like to  
</span><br>
<span class="quotelev1">&gt; know can users contribute by adding more example codes ?
</span><br>
<p><p>Great!  More tests, examples, documentation, and code are always  
<br>
appreciated!
<br>
<p>Note that we have a separate &quot;devel_at_[hidden]&quot; list for developer- 
<br>
level discussions.
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
<li><strong>Next message:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9866.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>In reply to:</strong> <a href="9855.php">Prasadcse Perera: "[OMPI users] Question on running the openmpi test modules"</a>
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
