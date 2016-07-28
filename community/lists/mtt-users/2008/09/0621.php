<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 17:35:20 2008" -->
<!-- isoreceived="20080918213520" -->
<!-- sent="Thu, 18 Sep 2008 17:35:13 -0400" -->
<!-- isosent="20080918213513" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="C74E6E8E-37CC-4782-9077-D1B5504E00AA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080918144512.GD24599_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch to add --local-scratch option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 17:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0620.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0620.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2008, at 10:45 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Ah, yeah, ok, now I see why you wouldl call it --mpi-install- 
</span><br>
<span class="quotelev2">&gt;&gt; scratch, so
</span><br>
<span class="quotelev2">&gt;&gt; that it matches the MTT ini section name.  Sure, that works for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since this does seem like a feature that should eventually
</span><br>
<span class="quotelev1">&gt; propogate to all the other phases (except for Test run),
</span><br>
<span class="quotelev1">&gt; what will we call the option to group all the fast phase
</span><br>
<span class="quotelev1">&gt; scratches?
</span><br>
<p><p>--scratch
<br>
<p>:-)
<br>
<p>Seriously, *if* we ever implement the other per-phase scratches, I  
<br>
think having one overall --scratch and fine-grained per-phase  
<br>
specifications fine.  I don't think we need to go overboard to have a  
<br>
way to say I want phases X, Y, and Z to use scratch A.  Meaning that  
<br>
you could just use --X-scratch=A --Y-scratch=A and --Z-scratch=A.
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
<li><strong>Next message:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0620.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0620.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0622.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
