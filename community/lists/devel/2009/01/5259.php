<?
$subject_val = "[OMPI devel] VT problems on Debian";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 13:52:51 2009" -->
<!-- isoreceived="20090121185251" -->
<!-- sent="Wed, 21 Jan 2009 13:52:43 -0500" -->
<!-- isosent="20090121185243" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] VT problems on Debian" -->
<!-- id="0238526D-9B7C-4104-A9E5-C91E7B490770_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] VT problems on Debian<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 13:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Previous message:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
<li><strong>Reply:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Debian OMPI maintainers raised a few failures on some of their  
<br>
architectures to my attention -- it looks like there's some wonkyness  
<br>
on Debian on SPARC and Alpha -- scroll to the bottom of these two pages:
<br>
<p><a href="http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=sparc&amp;stamp=1232513504&amp;file=log">http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=sparc&amp;stamp=1232513504&amp;file=log</a>
<br>
<a href="http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=alpha&amp;stamp=1232510796&amp;file=log">http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=alpha&amp;stamp=1232510796&amp;file=log</a>
<br>
<p>They both seem to incur the same error:
<br>
<p>gcc -DHAVE_CONFIG_H -I. -I../../../../../../../ompi/contrib/vt/vt/ 
<br>
vtlib -I.. -I../../../../../../../ompi/contrib/vt/vt/tools/opari/lib - 
<br>
I../../../../../../../ompi/contrib/vt/vt/extlib/otf/otflib -I../extlib/ 
<br>
otf/otflib     -I../../../../../../../ompi/contrib/vt/vt  - 
<br>
D_GNU_SOURCE -DBINDIR=\&quot;/usr/bin\&quot; -DDATADIR=\&quot;/usr/share/vampirtrace 
<br>
\&quot; -DRFG  -DVT_MEMHOOK -DVT_IOWRAP  -Wall -g -O2 -MT vt_pform_linux.o - 
<br>
MD -MP -MF .deps/vt_pform_linux.Tpo -c -o  
<br>
vt_pform_linux.o ../../../../../../../ompi/contrib/vt/vt/vtlib/ 
<br>
vt_pform_linux.c
<br>
../../../../../../../ompi/contrib/vt/vt/vtlib/vt_pform_linux.c: In  
<br>
function 'vt_pform_wtime':
<br>
../../../../../../../ompi/contrib/vt/vt/vtlib/vt_pform_linux.c:179:  
<br>
error: impossible constraint in 'asm'
<br>
make[6]: *** [vt_pform_linux.o] Error 1
<br>
make[6]: Leaving directory `/build/buildd/openmpi-1.3/build/shared/ 
<br>
ompi/contrib/vt/vt/vtlib'
<br>
<p>VT guys -- any ideas?
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
<li><strong>Next message:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Previous message:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
<li><strong>Reply:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
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
