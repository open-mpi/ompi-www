<?
$subject_val = "Re: [OMPI devel] Building otfcompress with binutils-gold fails";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 11:35:43 2012" -->
<!-- isoreceived="20120216163543" -->
<!-- sent="Thu, 16 Feb 2012 17:35:37 +0100" -->
<!-- isosent="20120216163537" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building otfcompress with binutils-gold fails" -->
<!-- id="201202161735.37818.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYcoEd0DUiN4+DZ=mXG3R=WLnDEDQjFefichT_wPBO6n8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Building otfcompress with binutils-gold fails<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 11:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10460.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10472.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, Libtool evaluates the dependencies of libotf.la where -lz should 
<br>
appear:
<br>
<p>$ cat otflib/libotf.la  | grep dependency_libs
<br>
# Linker flags that can not go in dependency_libs.
<br>
dependency_libs=' -lz'
<br>
<p>In base of that Libtool should add -lz to the linker command line, or not?
<br>
<p>However, adding -lz to otfcompress_LDADD in .../otfcompress/Makefile.am doesn't 
<br>
should hurt.
<br>
<p>Matthias
<br>
<p>On Wednesday 15 February 2012 19:54:07 Dmitri Gribenko wrote:
<br>
<span class="quotelev1">&gt; On Wed, Feb 15, 2012 at 8:08 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; What is &quot;gold&quot;?  Can you send all the information listed here (e.g., I 
</span><br>
don't know what version of Open MPI you're reporting about):
<br>
<span class="quotelev1">&gt; gold is the new binutils linker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OS: Debian sid amd64 with g++-4.6, binutils-gold packages installed
</span><br>
<span class="quotelev1">&gt; OpenMPI: latest svn trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dmitri
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10460.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10472.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
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
