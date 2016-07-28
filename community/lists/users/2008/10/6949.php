<?
$subject_val = "Re: [OMPI users] --enable-static --enable-shared using intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 08:01:07 2008" -->
<!-- isoreceived="20081011120107" -->
<!-- sent="Sat, 11 Oct 2008 08:01:02 -0400" -->
<!-- isosent="20081011120102" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --enable-static --enable-shared using intel compilers" -->
<!-- id="654693F2-FEC4-4030-9F23-DF3824D065CE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1223596563.23963.45.camel_at_holwrs01.amoco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] --enable-static --enable-shared using intel compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-11 08:01:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6950.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Previous message:</strong> <a href="6948.php">Jeff Squyres: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>In reply to:</strong> <a href="6930.php">Rene Salmon: "[OMPI users] --enable-static --enable-shared using intel compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 9, 2008, at 7:56 PM, Rene Salmon wrote:
<br>
<p><span class="quotelev1">&gt; on my configure line I specified &quot;-static-intel&quot; so why are the  
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev1">&gt; binaries not linking these in statically?
</span><br>
<p>Have you tried putting that flag in LDFLAGS?  The CFLAGS (and friends)  
<br>
are compiler flags; the LDFLAGS is linker flags.
<br>
<p><span class="quotelev1">&gt; If I run configure with --disable-static --enabled-shared (the  
</span><br>
<span class="quotelev1">&gt; default)
</span><br>
<span class="quotelev1">&gt; the &quot;-static-intel&quot; flag sees to work and all the intel libs get
</span><br>
<span class="quotelev1">&gt; statically linked into the openmpi executables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also why does ompi_info dynamically link in libibverbs.so.1 and
</span><br>
<span class="quotelev1">&gt; libmyriexpress.so?  On nodes that do not have IB or MX installed
</span><br>
<span class="quotelev1">&gt; ompi_info exists immediately stating it can't find the IB or MX libs.
</span><br>
<p><p>This is a function of --enable-static.  --enable-static also implies -- 
<br>
enable-mca-static, which means that all the plugins are sucked up into  
<br>
libmpi (and friends).  Hence, when ompi_info links against libmpi, it  
<br>
also has to link against all the support libraries (e.g., libibverbs).
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
<li><strong>Next message:</strong> <a href="6950.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Previous message:</strong> <a href="6948.php">Jeff Squyres: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>In reply to:</strong> <a href="6930.php">Rene Salmon: "[OMPI users] --enable-static --enable-shared using intel compilers"</a>
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
