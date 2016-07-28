<?
$subject_val = "Re: [OMPI devel] new btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 09:04:15 2011" -->
<!-- isoreceived="20110616130415" -->
<!-- sent="Thu, 16 Jun 2011 09:04:09 -0400" -->
<!-- isosent="20110616130409" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] new btl" -->
<!-- id="3F3A1A56-65C3-40B2-B1E7-4FAC999831AE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201106160947.36595.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] new btl<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-16 09:04:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9383.php">George Bosilca: "Re: [OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9381.php">Josh Hursey: "Re: [OMPI devel] Ideas for notifying completion of ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="9379.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] new btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9383.php">George Bosilca: "Re: [OMPI devel] new btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 16, 2011, at 3:47 AM, Peter Kjellstr&#246;m wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I should say that if anyone is contemplating writing a new BTL, I'm happy
</span><br>
<span class="quotelev2">&gt;&gt; to get on the phone / webex with you for an intro to the OMPI code base,
</span><br>
<span class="quotelev2">&gt;&gt; point you in the right direction, etc.  Ping me on/off list and we can
</span><br>
<span class="quotelev2">&gt;&gt; setup a time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess there's also the possibility to write an mtl (like psm), or is this discouraged?
</span><br>
<p>Not discouraged at all.
<br>
<p>MTLs simply have a different model than BTLs.
<br>
<p>In short, MTLs are for networks that have matching semantics built-in (e.g., MX, portals, PSM, tports, ...etc.).  BTLs are for everything else (sockets, shared memory, verbs, ...etc.).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9383.php">George Bosilca: "Re: [OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9381.php">Josh Hursey: "Re: [OMPI devel] Ideas for notifying completion of ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="9379.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] new btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9383.php">George Bosilca: "Re: [OMPI devel] new btl"</a>
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
