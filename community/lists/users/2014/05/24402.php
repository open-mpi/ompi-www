<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 18:27:59 2014" -->
<!-- isoreceived="20140515222759" -->
<!-- sent="Thu, 15 May 2014 22:27:55 +0000" -->
<!-- isosent="20140515222755" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="E0258681-2B23-42ED-B3CC-72C119E56DDC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53753C2E.2020404_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 18:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24401.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24401.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2014, at 6:14 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Alright, but now I'm curious as to why you decided against it.
</span><br>
<span class="quotelev1">&gt; Could please elaborate on it a bit ?
</span><br>
<p>OMPI has a long, deep history with the GNU Autotools.  It's a very long, complicated story, but the high points are:
<br>
<p>1. The GNU Autotools community has given us very good support over the years.
<br>
2. The GNU Autotools support all compilers that we want to support, including shared library support (others did not, back in 2004 when we started OMPI).
<br>
3. The GNU Autotools can fully bootstrap a tarball such that the end user does not need to have the GNU Autotools installed to build an OMPI tarball.
<br>
<p>#2 and #3 were the most important reasons back in the beginning of the project.
<br>
<p>Periodically, we have looked at other tools over the years because the GNU Autootols are far from perfect, too (scons, cmake, etc.).  The other tools either still failed #2 or #3, or were not enough of an improvement to justify the time/effort to re-write OMPI's configure/build system.  
<br>
<p>To be clear: we'd need a *very* strong reason to move to another toolchain at this point.
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
<li><strong>Next message:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24401.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24401.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
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
