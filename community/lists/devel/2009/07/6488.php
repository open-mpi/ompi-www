<?
$subject_val = "Re: [OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 20:01:10 2009" -->
<!-- isoreceived="20090722000110" -->
<!-- sent="Tue, 21 Jul 2009 20:01:02 -0400" -->
<!-- isosent="20090722000102" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autodetect broken" -->
<!-- id="F63192A9-B7E7-41DA-88FA-743B7E4EB32E_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FBDEC76B-CD42-43C7-B3FA-D0D099C8BE3E_at_cisco.com" -->
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
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 20:01:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6489.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6487.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6482.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6489.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6489.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2009, at 7:48 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Arrgh!!  Even with .ompi_ignore, everything is broken on OS X and  
</span><br>
<span class="quotelev1">&gt; Linux (perhaps this is what Ralph was referring to -- not a compile  
</span><br>
<span class="quotelev1">&gt; time problem?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; $ mpicc -g -Isrc   -c -o libmpitest.o libmpitest.c
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file ${datadir}/openmpi/mpicc-wrapper- 
</span><br>
<span class="quotelev1">&gt; data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<p>Is this just mpicc, or is it also ompi_info and mpirun failing like  
<br>
this?  I presume the autodetect component is *not* involved, right? So  
<br>
this presumably is a problem with opal_install_dirs_expand?
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6489.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6487.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6482.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6489.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6489.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
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
