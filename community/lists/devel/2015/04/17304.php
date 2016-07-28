<?
$subject_val = "Re: [OMPI devel] 1.8.5rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 10:05:27 2015" -->
<!-- isoreceived="20150422140527" -->
<!-- sent="Wed, 22 Apr 2015 16:05:12 +0200" -->
<!-- isosent="20150422140512" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc2 released" -->
<!-- id="5537AA98.9000300_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="2615D1DC-76D1-430A-A3A1-130EED886355_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc2 released<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 10:05:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17305.php">Raphaël Fouassier: "[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17303.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>In reply to:</strong> <a href="17298.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Reply:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/22/2015 12:43 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; In the usual location:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Making all in mpi/fortran/use-mpi-f08
<br>
make[2]: Entering directory 
<br>
'/cygdrive/e/cyg_pub/devel/openmpi/openmpi-1.8.5rc2-1.x86_64/build/ompi/mpi/fortran/use-mpi-f08'
<br>
&nbsp;&nbsp;&nbsp;FCLD     libmpi_usempif08.la
<br>
.libs/abort_f08.o: In function `mpi_abort_f08_':
<br>
/usr/src/debug/openmpi-1.8.5rc2-1/ompi/mpi/fortran/use-mpi-f08/abort_f08.F90:17: 
<br>
undefined reference to `ompi_abort_f'
<br>
/usr/src/debug/openmpi-1.8.5rc2-1/ompi/mpi/fortran/use-mpi-f08/abort_f08.F90:17:(.text+0xe): 
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol 
<br>
`ompi_abort_f'
<br>
.libs/accumulate_f08.o: In function `mpi_accumulate_f08_':
<br>
/usr/src/debug/openmpi-1.8.5rc2-1/ompi/mpi/fortran/use-mpi-f08/accumulate_f08.F90:28: 
<br>
undefined reference to `ompi_accumulate_f'
<br>
<p>Patch attached.
<br>
<p>Question:
<br>
what is the scope of the new two shared libs
<br>
<p>&nbsp;&nbsp;usr/bin/cygmpi_usempi_ignore_tkr-0.dll
<br>
&nbsp;&nbsp;usr/bin/cygmpi_usempif08-0.dll
<br>
<p>in comparison to previous
<br>
<p>&nbsp;&nbsp;usr/bin/cygmpi_mpifh-2.dll
<br>
&nbsp;&nbsp;usr/bin/cygmpi_usempi-1.dll
<br>
<p>already present in 1.8.4 ?
<br>
<p>REgards
<br>
Marco
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17304/use-mpi-f08.patch">use-mpi-f08.patch</a>
</ul>
<!-- attachment="use-mpi-f08.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17305.php">Raphaël Fouassier: "[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17303.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>In reply to:</strong> <a href="17298.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Reply:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
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
