<?
$subject_val = "Re: [OMPI users] About the Open-MPI point-to-point messaging layers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 17:21:30 2012" -->
<!-- isoreceived="20120702212130" -->
<!-- sent="Mon, 2 Jul 2012 17:21:25 -0400" -->
<!-- isosent="20120702212125" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About the Open-MPI point-to-point messaging layers" -->
<!-- id="CB118808-7F01-48B4-B543-806ED7BC2D2E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FEFABED.1040903_at_ulaval.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 17:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19715.php">Jeff Squyres: "Re: [OMPI users] How does OpenMPI's progress engine determine progress?"</a>
<li><strong>Previous message:</strong> <a href="19713.php">Jeff Squyres: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>In reply to:</strong> <a href="../../2012/06/19709.php">S&#233;bastien Boisvert: "[OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 30, 2012, at 9:46 PM, S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; I really like Open-MPI and its Modular Component Architecture.
</span><br>
<span class="quotelev1">&gt; The --mca parameters are so useful for learning and testing things !
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt; So here are my questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that the default point-to-point messaging layer is ob1
</span><br>
<span class="quotelev1">&gt; (the Obi-Wan Kenobi PML). I know that there is also the PML
</span><br>
<span class="quotelev1">&gt; cm (the Connor MacLeod PML).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From what I understand, the force is strong with Obi-Wan Kenobi, so he
</span><br>
<span class="quotelev1">&gt; can use various byte transfer layers (BTLs).
</span><br>
<span class="quotelev1">&gt; And there can be only one highlander (probably Connor MacLeod) so
</span><br>
<span class="quotelev1">&gt; when I use the MTL psm, I can not use any of the BTLs because Connor
</span><br>
<span class="quotelev1">&gt; MacLeod can only be alone at the end.
</span><br>
<p>Exactly.
<br>
<p><span class="quotelev1">&gt; But what about the PML csum ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What exactly is the PML csum (checksum) doing ?
</span><br>
<p>csum is a clone of ob1 and that adds checksumming as a data check -- it is helpful in some environments where you're not entirely sure if your underlying &quot;reliable&quot; transport may actually be silently corrupting data under the covers.
<br>
<p>That being said, I'm not sure how much csum (hahah! Apple Mail keeps autocorrecting that to &quot;scum&quot; :-) ) has kept up with all the recent ob1 advances.  So it may actually be lagging a bit.  As I understand it, csum will likely not be included in v1.7.
<br>
<p><span class="quotelev1">&gt; Which code is the PML csum using for actually transferring stuff between
</span><br>
<span class="quotelev1">&gt; MPI ranks ? BTLs or MTLs or something else or nothing ?
</span><br>
<p>BTLs.
<br>
<p><span class="quotelev1">&gt; I have searched the web a little but have not found much about it.
</span><br>
<p>It was created by a vendor for a very specific purpose on a very specific network. It hasn't seen much use since then.
<br>
<p><span class="quotelev1">&gt; If I use the MTL psm, can the PML csum be used to detect message
</span><br>
<span class="quotelev1">&gt; corruption ? I guess the answer is no because csum is not Connor MacLeod.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have read that when the MTL psm is used, all the Open-MPI BTL objects are
</span><br>
<span class="quotelev1">&gt; disabled.
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; What code would the PML dr use to move bytes around should it
</span><br>
<span class="quotelev1">&gt; be stable and production-ready ?
</span><br>
<p>dr was never finished.  It was meant to be a fault-tolerant version of ob1.  So, sadly, it also didn't keep up with all the changes in ob1 over the years, and was also never finished.
<br>
<p><span class="quotelev1">&gt; And my final question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When a company design a new interconnect, why choose the MTL architecture
</span><br>
<span class="quotelev1">&gt; (and thus the PML cm) instead of the BTL architecture (with the ob1 PML) ?
</span><br>
<p>BTLs are relatively easy to write.  They work for any old byte-pushing network.
<br>
<p>MTLs require a bit more MPI co-design with the network.  MTLs are for networks that can either natively perform MPI-style message matching on the network or emulate it well enough (e.g., PSM does it all in software, as does MXM).  
<br>
<p><span class="quotelev1">&gt; It seems to me that ob1 and BTLs are mature and that BTLs self and sm are quite
</span><br>
<span class="quotelev1">&gt; useful and bug-free for what I know. New code should only do the case when the two
</span><br>
<span class="quotelev1">&gt; MPI processes are on different nodes, right ?
</span><br>
<p>Correct.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19715.php">Jeff Squyres: "Re: [OMPI users] How does OpenMPI's progress engine determine progress?"</a>
<li><strong>Previous message:</strong> <a href="19713.php">Jeff Squyres: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>In reply to:</strong> <a href="../../2012/06/19709.php">S&#233;bastien Boisvert: "[OMPI users] About the Open-MPI point-to-point messaging layers"</a>
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
