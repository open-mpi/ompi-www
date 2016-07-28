<?
$subject_val = "Re: [OMPI devel] Building otfcompress with binutils-gold fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 13:08:38 2012" -->
<!-- isoreceived="20120215180838" -->
<!-- sent="Wed, 15 Feb 2012 13:08:29 -0500" -->
<!-- isosent="20120215180829" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building otfcompress with binutils-gold fails" -->
<!-- id="A63D9ACB-94CC-4592-8A41-02376F83568D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYffu6anZxAYttKjFwJ-DyGneURBdhi8zTHWt1kFC9QHyg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 13:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10430.php">Jeff Squyres: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="10428.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>In reply to:</strong> <a href="10427.php">Dmitri Gribenko: "[OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Reply:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is &quot;gold&quot;?  Can you send all the information listed here (e.g., I don't know what version of Open MPI you're reporting about):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>If VT is a problem, you can specify --disable-vt on OMPI's configure command line (assuming this is OMPI 1.5.x).
<br>
<p><p>On Feb 15, 2012, at 12:03 PM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've found that otfcompress doesn't build with gold:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/storage_3/grib/ompi-build/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool  --tag=CC   --mode=link clang  -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -I/home/storage_3/grib/ompi-trunk/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev1">&gt; -L/home/storage_3/grib/ompi-build/ompi/contrib/vt/vt/../../../.libs
</span><br>
<span class="quotelev1">&gt; -o otfcompress otfcompress.o ../../otflib/libotf.la
</span><br>
<span class="quotelev1">&gt; libtool: link: clang -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -I/home/storage_3/grib/ompi-trunk/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev1">&gt; -o .libs/otfcompress otfcompress.o
</span><br>
<span class="quotelev1">&gt; -L/home/storage_3/grib/ompi-build/ompi/contrib/vt/vt/../../../.libs
</span><br>
<span class="quotelev1">&gt; ../../otflib/.libs/libotf.so -pthread -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/storage_3/grib/ompi-install/lib
</span><br>
<span class="quotelev1">&gt; otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
</span><br>
<span class="quotelev1">&gt; decompressFile: error: undefined reference to 'inflateInit_'
</span><br>
<span class="quotelev1">&gt; otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
</span><br>
<span class="quotelev1">&gt; decompressFile: error: undefined reference to 'inflate'
</span><br>
<span class="quotelev1">&gt; otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
</span><br>
<span class="quotelev1">&gt; decompressFile: error: undefined reference to 'inflateEnd'
</span><br>
<span class="quotelev1">&gt; otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
</span><br>
<span class="quotelev1">&gt; compressFile: error: undefined reference to 'deflateInit_'
</span><br>
<span class="quotelev1">&gt; otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
</span><br>
<span class="quotelev1">&gt; compressFile: error: undefined reference to 'deflate'
</span><br>
<span class="quotelev1">&gt; otfcompress.o:../../../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/tools/otfcompress/otfcompress.c:function
</span><br>
<span class="quotelev1">&gt; compressFile: error: undefined reference to 'deflateEnd'
</span><br>
<span class="quotelev1">&gt; clang: error: linker command failed with exit code 1 (use -v to see invocation)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that --no-add-needed is default gold behavior.  All
</span><br>
<span class="quotelev1">&gt; libraries have to be specified explicitly to the linker.  In this case
</span><br>
<span class="quotelev1">&gt; -lz is missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dmitri
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
</span><br>
<span class="quotelev1">&gt; (j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10430.php">Jeff Squyres: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="10428.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>In reply to:</strong> <a href="10427.php">Dmitri Gribenko: "[OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Reply:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
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
