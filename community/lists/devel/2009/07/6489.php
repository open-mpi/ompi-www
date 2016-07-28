<?
$subject_val = "Re: [OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 20:05:38 2009" -->
<!-- isoreceived="20090722000538" -->
<!-- sent="Tue, 21 Jul 2009 20:05:21 -0400" -->
<!-- isosent="20090722000521" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autodetect broken" -->
<!-- id="5D872E34-96A1-4011-BC3C-AAC19D00E59C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F63192A9-B7E7-41DA-88FA-743B7E4EB32E_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autodetect broken<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 20:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6490.php">Jeff Squyres: "[OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Previous message:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6497.php">Brian W. Barrett: "Re: [OMPI devel] autodetect broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2009, at 8:01 PM, Iain Bason wrote:
<br>
<p><span class="quotelev2">&gt; &gt; $ mpicc -g -Isrc   -c -o libmpitest.o libmpitest.c
</span><br>
<span class="quotelev2">&gt; &gt; Cannot open configuration file ${datadir}/openmpi/mpicc-wrapper-
</span><br>
<span class="quotelev2">&gt; &gt; data.txt
</span><br>
<span class="quotelev2">&gt; &gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this just mpicc, or is it also ompi_info and mpirun failing like
</span><br>
<span class="quotelev1">&gt; this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>ompi_info was -- I did not check mpirun.
<br>
<p><span class="quotelev1">&gt; I presume the autodetect component is *not* involved, right? So
</span><br>
<span class="quotelev1">&gt; this presumably is a problem with opal_install_dirs_expand?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>autodetect was .ompi_info'ed out, so it was not built/installed.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6490.php">Jeff Squyres: "[OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Previous message:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6497.php">Brian W. Barrett: "Re: [OMPI devel] autodetect broken"</a>
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
