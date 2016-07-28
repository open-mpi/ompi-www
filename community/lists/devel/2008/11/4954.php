<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 01:28:44 2008" -->
<!-- isoreceived="20081125062844" -->
<!-- sent="Tue, 25 Nov 2008 07:28:36 +0100" -->
<!-- isosent="20081125062836" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081125062835.GD24284_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081124202727.GG240_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-25 01:28:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4955.php">Jeff Squyres: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Previous message:</strong> <a href="4953.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4952.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4945.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Ethan Mallove wrote on Mon, Nov 24, 2008 at 09:27:28PM CET:
<br>
<span class="quotelev1">&gt; On Sun, Nov/23/2008 09:19:12AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; While I suppose your patch works, I think in similar situations, OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; has resorted to patching input files to configure (like aclocal.m4 or
</span><br>
<span class="quotelev2">&gt; &gt; ltmain.sh).  Search autogen.sh for instances of 'patch'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I got it. I patch libtool.m4 in autogen.sh after libtoolize
</span><br>
<span class="quotelev1">&gt; creates libtool.m4. How is the patch now?
</span><br>
<p>This is what I had in mind, yes.
<br>
<p><span class="quotelev2">&gt; &gt; (This is merely an observation; I am not an OpenMPI developer.)
</span><br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4955.php">Jeff Squyres: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Previous message:</strong> <a href="4953.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4952.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4945.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
