<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 19:15:08 2014" -->
<!-- isoreceived="20140515231508" -->
<!-- sent="Thu, 15 May 2014 19:15:06 -0400" -->
<!-- isosent="20140515231506" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="53754A7A.20406_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0258681-2B23-42ED-B3CC-72C119E56DDC_at_cisco.com" -->
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
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 19:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24404.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24404.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24404.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24405.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 2014-05-15 18:27, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On May 15, 2014, at 6:14 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alright, but now I'm curious as to why you decided against it.
</span><br>
<span class="quotelev2">&gt;&gt; Could please elaborate on it a bit ?
</span><br>
<span class="quotelev1">&gt; OMPI has a long, deep history with the GNU Autotools.  It's a very long, complicated story, but the high points are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The GNU Autotools community has given us very good support over the years.
</span><br>
<span class="quotelev1">&gt; 2. The GNU Autotools support all compilers that we want to support, including shared library support (others did not, back in 2004 when we started OMPI).
</span><br>
<span class="quotelev1">&gt; 3. The GNU Autotools can fully bootstrap a tarball such that the end user does not need to have the GNU Autotools installed to build an OMPI tarball.
</span><br>
You mean some people do NOT have GNU Autotools ? :P
<br>
<p>Jokes aside, CMake has certainly matured enough for point #2 and is used 
<br>
by very big projects (KDE for example). Not sure about point #3 though. 
<br>
I am wondering though, how do you handle Windows with OpenMPI and GNU 
<br>
Autotools ? I know CMake is famous for being cross-plateform (that's 
<br>
what the C means) and can generate builds for Windows, Visual Studio and 
<br>
such.
<br>
<p>In any case, I do not see any need to change from one toolchain to 
<br>
another, although I have seen many projects providing both and that did 
<br>
not seem to be too much of a hassle. It's still probably more work than 
<br>
what you want to get into though.
<br>
<p>Maxime
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24404.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24404.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24404.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24405.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
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
