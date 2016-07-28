<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 19:25:30 2014" -->
<!-- isoreceived="20140515232530" -->
<!-- sent="Thu, 15 May 2014 16:23:43 -0700" -->
<!-- isosent="20140515232343" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="8EC26BC2-A555-49CB-BC6E-24EA880E9BE9_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53754A7A.20406_at_calculquebec.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 19:23:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24405.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24405.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2014, at 4:15 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 2014-05-15 18:27, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2014, at 6:14 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alright, but now I'm curious as to why you decided against it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could please elaborate on it a bit ?
</span><br>
<span class="quotelev2">&gt;&gt; OMPI has a long, deep history with the GNU Autotools.  It's a very long, complicated story, but the high points are:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. The GNU Autotools community has given us very good support over the years.
</span><br>
<span class="quotelev2">&gt;&gt; 2. The GNU Autotools support all compilers that we want to support, including shared library support (others did not, back in 2004 when we started OMPI).
</span><br>
<span class="quotelev2">&gt;&gt; 3. The GNU Autotools can fully bootstrap a tarball such that the end user does not need to have the GNU Autotools installed to build an OMPI tarball.
</span><br>
<span class="quotelev1">&gt; You mean some people do NOT have GNU Autotools ? :P
</span><br>
<p>Actually, yes - Cray doesn't install them.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jokes aside, CMake has certainly matured enough for point #2 and is used by very big projects (KDE for example). Not sure about point #3 though. I am wondering though, how do you handle Windows with OpenMPI and GNU Autotools ? I know CMake is famous for being cross-plateform (that's what the C means) and can generate builds for Windows, Visual Studio and such.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The Windows integration actually involved adding CMake support within OMPI. It was truly an ugly effort that caused the student who took it on a great deal of pain. Ultimately, that support was scrapped when the student graduated and nobody was willing to maintain it.
<br>
<p><span class="quotelev1">&gt; In any case, I do not see any need to change from one toolchain to another, although I have seen many projects providing both and that did not seem to be too much of a hassle. It's still probably more work than what you want to get into though.
</span><br>
<p>Yeah, as Jeff indicated, without a burning justification, it just doesn't seem worth it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maxime
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
<li><strong>Next message:</strong> <a href="24405.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24403.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24405.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
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
