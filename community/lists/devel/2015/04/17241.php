<?
$subject_val = "[OMPI devel] v1.8.5 NEWS and README";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 08:57:51 2015" -->
<!-- isoreceived="20150417125751" -->
<!-- sent="Fri, 17 Apr 2015 12:57:49 +0000" -->
<!-- isosent="20150417125749" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.8.5 NEWS and README" -->
<!-- id="6A2E513F-F491-407E-92B0-1D6752C1815A_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] v1.8.5 NEWS and README<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 08:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Previous message:</strong> <a href="17240.php">Jeff Squyres (jsquyres): "[OMPI devel] VERSION numbers for v1.8.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17250.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The v1.8 branch NEWS, README, and VERSION files have been updated in preparation for the v1.8.5 release.  Please double check them -- especially NEWS, particularly to ensure that we are giving credit to users who submitted bug reports, etc.
<br>
<p>Also, please double check that this is a current/correct list of supported systems:
<br>
<p>- The run-time systems that are currently supported are:
<br>
&nbsp;&nbsp;- rsh / ssh
<br>
&nbsp;&nbsp;- LoadLeveler
<br>
&nbsp;&nbsp;- PBS Pro, Torque
<br>
&nbsp;&nbsp;- Platform LSF (v7.0.2 and later)
<br>
&nbsp;&nbsp;- SLURM
<br>
&nbsp;&nbsp;- Cray XT-3, XT-4, and XT-5
<br>
&nbsp;&nbsp;- Oracle Grid Engine (OGE) 6.1, 6.2 and open source Grid Engine
<br>
<p>- Systems that have been tested are:
<br>
&nbsp;&nbsp;- Linux (various flavors/distros), 32 bit, with gcc
<br>
&nbsp;&nbsp;- Linux (various flavors/distros), 64 bit (x86), with gcc, Absoft,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Intel, and Portland (*)
<br>
&nbsp;&nbsp;- OS X (10.6, 10.7, 10.8, 10.9), 32 and 64 bit (x86_64), with gcc and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Absoft compilers (*)
<br>
<p>&nbsp;&nbsp;(*) Be sure to read the Compiler Notes, below.
<br>
<p>- Other systems have been lightly (but not fully tested):
<br>
&nbsp;&nbsp;- Cygwin 32 &amp; 64 bit with gcc
<br>
&nbsp;&nbsp;- ARMv4, ARMv5, ARMv6, ARMv7 (when using non-inline assembly; only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ARMv7 is fully supported when -DOMPI_DISABLE_INLINE_ASM is used).
<br>
&nbsp;&nbsp;- Other 64 bit platforms (e.g., Linux on PPC64)
<br>
&nbsp;&nbsp;- Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with Oracle Solaris Studio 12.2 and 12.3
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
<li><strong>Next message:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Previous message:</strong> <a href="17240.php">Jeff Squyres (jsquyres): "[OMPI devel] VERSION numbers for v1.8.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17250.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
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
