<?
$subject_val = "[OMPI devel] Building otfcompress with binutils-gold fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 12:04:14 2012" -->
<!-- isoreceived="20120215170414" -->
<!-- sent="Wed, 15 Feb 2012 19:03:50 +0200" -->
<!-- isosent="20120215170350" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="[OMPI devel] Building otfcompress with binutils-gold fails" -->
<!-- id="CA+Y5xYffu6anZxAYttKjFwJ-DyGneURBdhi8zTHWt1kFC9QHyg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Building otfcompress with binutils-gold fails<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 12:03:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10428.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10426.php">Dmitri Gribenko: "Re: [OMPI devel] VT build failure with Clang++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Reply:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've found that otfcompress doesn't build with gold:
<br>
<p>make[3]: Entering directory
<br>
`/home/storage_3/grib/ompi-build/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress'
<br>
/bin/sh ../../libtool  --tag=CC   --mode=link clang  -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -pthread
<br>
-I/home/storage_3/grib/ompi-trunk/opal/mca/hwloc/hwloc132/hwloc/include
<br>
&nbsp;-L/home/storage_3/grib/ompi-build/ompi/contrib/vt/vt/../../../.libs
<br>
-o otfcompress otfcompress.o ../../otflib/libotf.la
<br>
libtool: link: clang -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread
<br>
-I/home/storage_3/grib/ompi-trunk/opal/mca/hwloc/hwloc132/hwloc/include
<br>
-o .libs/otfcompress otfcompress.o
<br>
-L/home/storage_3/grib/ompi-build/ompi/contrib/vt/vt/../../../.libs
<br>
../../otflib/.libs/libotf.so -pthread -Wl,-rpath
<br>
-Wl,/home/storage_3/grib/ompi-install/lib
<br>
otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
<br>
decompressFile: error: undefined reference to 'inflateInit_'
<br>
otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
<br>
decompressFile: error: undefined reference to 'inflate'
<br>
otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
<br>
decompressFile: error: undefined reference to 'inflateEnd'
<br>
otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
<br>
compressFile: error: undefined reference to 'deflateInit_'
<br>
otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
<br>
compressFile: error: undefined reference to 'deflate'
<br>
otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
<br>
compressFile: error: undefined reference to 'deflateEnd'
<br>
clang: error: linker command failed with exit code 1 (use -v to see invocation)
<br>
<p>The problem is that --no-add-needed is default gold behavior.  All
<br>
libraries have to be specified explicitly to the linker.  In this case
<br>
-lz is missing.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10428.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10426.php">Dmitri Gribenko: "Re: [OMPI devel] VT build failure with Clang++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Reply:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
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
