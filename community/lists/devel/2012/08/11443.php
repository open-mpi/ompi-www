<?
$subject_val = "Re: [OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 19:40:44 2012" -->
<!-- isoreceived="20120824234044" -->
<!-- sent="Fri, 24 Aug 2012 16:40:37 -0700" -->
<!-- isosent="20120824234037" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r27078 and OMPI build" -->
<!-- id="1ABC5866-C1AE-4561-B5CF-EFAF1746349F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17aLo81oHQ0=k0Moo-Uccs41ojRgp4qPDu8ypivxpbKuA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r27078 and OMPI build<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 19:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11444.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11442.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11442.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11444.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11444.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oracle uses an abysmally complicated configure line, but nearly all of it is irrelevant to the problem here. For this, I would suggest just doing a vanilla ./configure - if the component gets pulled into libmpi, then we know there is a problem.
<br>
<p>Thanks!
<br>
<p>Just FYI: here is there actual configure line, just in case you spot something problematic:
<br>
<p>CC=cc CXX=CC F77=f77 FC=f90  --with-openib  --enable-openib-connectx-xrc  --without-udapl 
<br>
--disable-openib-ibcm  --enable-btl-openib-failover   --without-dtrace  --enable-heterogeneous
<br>
--enable-cxx-exceptions --enable-shared --enable-orterun-prefix-by-default --with-sge
<br>
--enable-mpi-f90 --with-mpi-f90-size=small  --disable-peruse --disable-state 
<br>
--disable-mpi-thread-multiple   --disable-debug  --disable-mem-debug  --disable-mem-profile 
<br>
CFLAGS=&quot;-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -Qoption
<br>
cg -xregs=no%appl -xdepend=yes -xbuiltin=%all -xO5&quot;  CXXFLAGS=&quot;-xtarget=ultra3 -m32
<br>
-xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -Qoption cg -xregs=no%appl -xdepend=yes
<br>
-xbuiltin=%all -xO5 -Bstatic -lCrun -lCstd -Bdynamic&quot;  FFLAGS=&quot;-xtarget=ultra3 -m32 -xarch=sparcvis2
<br>
-xprefetch -xprefetch_level=2 -xvector=lib -Qoption cg -xregs=no%appl -stackvar -xO5&quot; 
<br>
FCFLAGS=&quot;-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -Qoption
<br>
cg -xregs=no%appl -stackvar -xO5&quot;  
<br>
--prefix=/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/installs/JA08/install 
<br>
--mandir=${prefix}/man  --bindir=${prefix}/bin  --libdir=${prefix}/lib 
<br>
--includedir=${prefix}/include   --with-tm=/ws/ompi-tools/orte/torque/current/shared-install32 
<br>
--enable-contrib-no-build=vt --with-package-string=&quot;Oracle Message Passing Toolkit &quot;
<br>
--with-ident-string=&quot;@(#)RELEASE VERSION 1.9openmpi-1.5.4-r1.9a1r27092&quot;
<br>
<p>and the error he gets is:
<br>
<p>make[2]: Entering directory
<br>
`/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/mpi-install/s3rI/src/openmpi-1.9a1r27092/ompi/tools/ompi_info'
<br>
&nbsp;&nbsp;CCLD     ompi_info
<br>
Undefined			first referenced
<br>
&nbsp;symbol  			    in file
<br>
mca_coll_ml_memsync_intra           ../../../ompi/.libs/libmpi.so
<br>
ld: fatal: symbol referencing errors. No output written to .libs/ompi_info
<br>
make[2]: *** [ompi_info] Error 2
<br>
make[2]: Leaving directory
<br>
`/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/mpi-install/s3rI/src/openmpi-1.9a1r27092/ompi/tools/ompi_info'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/mpi-install/s3rI/src/openmpi-1.9a1r27092/ompi'
<br>
make: *** [install-recursive] Error 1
<br>
<p>On Aug 24, 2012, at 4:30 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have access to a few different Solaris machines and can offer to build the trunk if somebody tells me what configure flags are desired.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 24, 2012 at 8:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Eugene - can you confirm that this is only happening on the one Solaris system? In other words, is this a general issue or something specific to that one machine?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm wondering because if it is just the one machine, then it might be something strange about how it is setup - perhaps the version of Solaris, or it is configuring --enable-static, or...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just trying to assess how general a problem this might be, and thus if this should be a blocker or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2012, at 8:00 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 08/24/12 09:54, Shamis, Pavel wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Maybe there is a chance to get direct access to this system ?
</span><br>
<span class="quotelev2">&gt; &gt; No.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But I'm attaching compressed log files from configure/make.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;tarball-of-log-files.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11444.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11442.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11442.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11444.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Reply:</strong> <a href="11444.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
