<?
$subject_val = "[OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 23:37:35 2010" -->
<!-- isoreceived="20100826033735" -->
<!-- sent="Wed, 25 Aug 2010 20:37:23 -0700" -->
<!-- isosent="20100826033723" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C75E173.2030901_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 23:37:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8371.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<li><strong>Previous message:</strong> <a href="8369.php">Paul H. Hargrove: "[OMPI devel] atomic_spinlock test failure with xlc/ppc64 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has got to be the stupidest failure I have ever seen!
<br>
<p>$ make install
<br>
[...]
<br>
make[3]: Entering directory 
<br>
`/export/home/phargrov/openmpi-1.5rc5/BLD-gcc-vt/ompi'
<br>
test -z &quot;/usr/local/pkg/ompi-1.5rc5/lib&quot; || ../../config/install-sh -c 
<br>
-d &quot;/usr/local/pkg/ompi-1.5rc5/lib&quot;
<br>
&nbsp;/bin/bash ../libtool   --mode=install ../../config/install-sh -c   
<br>
libmpi.la '/usr/local/pkg/ompi-1.5rc5/lib'
<br>
libtool: install: ../../config/install-sh -c .libs/libmpi.so.0.0.2 
<br>
/usr/local/pkg/ompi-1.5rc5/lib/libmpi.so.0.0.2
<br>
libtool: install: (cd /usr/local/pkg/ompi-1.5rc5/lib &amp;&amp; { ln -s -f 
<br>
libmpi.so.0.0.2 libmpi.so.0 || { rm -f libmpi.so.0 &amp;&amp; ln -s 
<br>
libmpi.so.0.0.2 libmpi.so.0; }; })
<br>
Usage: ln [-f] [-s] f1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln [-f] [-s] f1 f2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln [-f] [-s] f1 ... fn d1
<br>
[...]
<br>
<p>This is due to an incomprehensibly stupid &quot;ln&quot; that cares about the 
<br>
order of the &quot;-s&quot; and &quot;-f&quot; options:
<br>
<p>$ rm -f b; touch a; ln -f -s a b
<br>
$ rm -f b; touch a; ln -s -f a b
<br>
Usage: ln [-f] [-s] f1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln [-f] [-s] f1 f2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln [-f] [-s] f1 ... fn d1
<br>
<p>$ which ln
<br>
/usr/ucb/ln
<br>
<p>$ uname -a
<br>
SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
<br>
<p><p>I see the same with both the 1.5rc5 and 1.4.3rc1 tarballs, which both 
<br>
contain
<br>
&nbsp;&nbsp;# ltmain.sh (GNU libtool) 2.2.6b
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8371.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<li><strong>Previous message:</strong> <a href="8369.php">Paul H. Hargrove: "[OMPI devel] atomic_spinlock test failure with xlc/ppc64 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
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
