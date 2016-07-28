<?
$subject_val = "Re: [OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 25 14:59:10 2012" -->
<!-- isoreceived="20120825185910" -->
<!-- sent="Sat, 25 Aug 2012 14:59:01 -0400" -->
<!-- isosent="20120825185901" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r27078 and OMPI build" -->
<!-- id="82307734-3189-4A9D-B9F6-6112517B6F1E_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15-vOiVmsW-wNtMQXPZ0wHYMAHf3S_m_AZDM+BM8xWPAw_at_mail.gmail.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-25 14:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11453.php">Yevgeny Kliteynik: "Re: [OMPI devel] git mirror"</a>
<li><strong>Previous message:</strong> <a href="11451.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11448.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11455.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>Your analysis of the issue is very helpful, thank you very much!
<br>
We will work to fix it.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Aug 24, 2012, at 9:29 PM, Paul Hargrove wrote:
I *can* reproduce the problem on SPARC/Solaris-10 with the SS12.3 compiler and an ALMOST vanilla configure:
$ [path_to]configure \
       --prefix=[blah]  CC=cc CXX=CC F77=f77 FC=f90 \
       CFLAGS=&quot;-m64&quot;  --with-wrapper-cflags=&quot;-m64&quot;  CXXFLAGS=&quot;-m64&quot;  --with-wrapper-cxxflags=&quot;-m64&quot; \
       FFLAGS=&quot;-m64&quot;  --with-wrapper-fflags=&quot;-m64&quot;  FCFLAGS=&quot;-m64&quot;  --with-wrapper-fcflags=&quot;-m64&quot; \
       CXXFLAGS=&quot;-m64 -library=stlport4&quot;
I did NOT manage to reproduce on AMD64/Solaris-11, which completed a build w/ VT disabled.
Unfortunately I have neither SPARC/Solaris-11 nor AMD64/Solaris-10 readily available to disambiguate the key factor.
Hopefully it is enough to know that the problem is reproducible w/o Oracle's massive configure commandline.
The build isn't complete, but I can already see that the symbol has &quot;leaked&quot; into libmpi:
$ grep -arl mca_coll_ml_memsync_intra BLD/
BLD/ompi/mca/bcol/.libs/libmca_bcol.a
BLD/ompi/mca/bcol/base/.libs/bcol_base_open.o
BLD/ompi/.libs/libmpi.so.0.0.0
BLD/ompi/.libs/libmpi.so
BLD/ompi/.libs/libmpi.so.0
It is referenced by mca_coll_ml_generic_collectives_launcher:
$ nm BLD/ompi/.libs/libmpi.so.0.0.0 | grep -B1 mca_coll_ml_memsync_intra
00000000006a6088 t mca_coll_ml_generic_collectives_launcher
                 U mca_coll_ml_memsync_intra
This is coming from libmca_bcol.a:
$ nm BLD/ompi/mca/bcol/.libs/libmca_bcol.a | grep -B1 mca_coll_ml_memsync_intra
0000000000005248 t mca_coll_ml_generic_collectives_launcher
                 U mca_coll_ml_memsync_intra
This appears to be via the following chain of calls within coll_ml.h:
mca_coll_ml_generic_collectives_launcher
   mca_coll_ml_task_completion_processing
      coll_ml_fragment_completion_processing
         mca_coll_ml_buffer_recycling
             mca_coll_ml_memsync_intra
All of which are marked as &quot;static inline __opal_attribute_always_inline__&quot;.
-Paul
On Fri, Aug 24, 2012 at 4:55 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
OK, I have a vanilla configure+make running on both SPARC/Solaris-10 and AMD64/Solaris-11.
I am using the 12.3 Oracle compilers in both cases to match the original report.
I'll post the results when they complete.
In the meantime, I took a quick look at the code and have a pretty reasonable guess as to the cause.
Looking at ompi/mca/coll/ml/coll_ml.h I see:
   827  int mca_coll_ml_memsync_intra(mca_coll_ml_module_t *module, int bank_index);
[...]
   996  static inline __opal_attribute_always_inline__
   997          int mca_coll_ml_buffer_recycling(mca_coll_ml_collective_operation_progress_t *ml_request)
   998  {
[...]
  1023                  rc = mca_coll_ml_memsync_intra(ml_module, ml_memblock-&gt;memsync_counter);
[...]
  1041  }
Based on past experience w/ the Sun/Oracle compilers on another project (See <a href="http://bugzilla.hcs.ufl.edu/cgi-bin/bugzilla3/show_bug.cgi?id=193">http://bugzilla.hcs.ufl.edu/cgi-bin/bugzilla3/show_bug.cgi?id=193</a> ), I suspect that this static-inline-always function is being emitted by the compiler in every object which includes this header even if they don't call it..  The call on line 1023 then results in the undefined reference to mca_coll_ml_memsync_intra.  Basically it is not safe for an inline function in a header to call an extern function that isn't available to every object that includes the header REGARDLESS of whether the object invokes the inline function or not.
-Paul
On Fri, Aug 24, 2012 at 4:40 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
Oracle uses an abysmally complicated configure line, but nearly all of it is irrelevant to the problem here. For this, I would suggest just doing a vanilla ./configure - if the component gets pulled into libmpi, then we know there is a problem.
Thanks!
Just FYI: here is there actual configure line, just in case you spot something problematic:
CC=cc CXX=CC F77=f77 FC=f90  --with-openib  --enable-openib-connectx-xrc  --without-udapl
--disable-openib-ibcm  --enable-btl-openib-failover   --without-dtrace  --enable-heterogeneous
--enable-cxx-exceptions --enable-shared --enable-orterun-prefix-by-default --with-sge
--enable-mpi-f90 --with-mpi-f90-size=small  --disable-peruse --disable-state
--disable-mpi-thread-multiple   --disable-debug  --disable-mem-debug  --disable-mem-profile
CFLAGS=&quot;-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -Qoption
cg -xregs=no%appl -xdepend=yes -xbuiltin=%all -xO5&quot;  CXXFLAGS=&quot;-xtarget=ultra3 -m32
-xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -Qoption cg -xregs=no%appl -xdepend=yes
-xbuiltin=%all -xO5 -Bstatic -lCrun -lCstd -Bdynamic&quot;  FFLAGS=&quot;-xtarget=ultra3 -m32 -xarch=sparcvis2
-xprefetch -xprefetch_level=2 -xvector=lib -Qoption cg -xregs=no%appl -stackvar -xO5&quot;
FCFLAGS=&quot;-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -Qoption
cg -xregs=no%appl -stackvar -xO5&quot;
--prefix=/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/installs/JA08/install
--mandir=${prefix}/man  --bindir=${prefix}/bin  --libdir=${prefix}/lib
--includedir=${prefix}/include   --with-tm=/ws/ompi-tools/orte/torque/current/shared-install32
--enable-contrib-no-build=vt --with-package-string=&quot;Oracle Message Passing Toolkit &quot;
--with-ident-string=&quot;@(#)RELEASE VERSION 1.9openmpi-1.5.4-r1.9a1r27092&quot;
and the error he gets is:
make[2]: Entering directory
`/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/mpi-install/s3rI/src/openmpi-1.9a1r27092/ompi/tools/ompi_info'
  CCLD     ompi_info
Undefined                       first referenced
 symbol                             in file
mca_coll_ml_memsync_intra           ../../../ompi/.libs/libmpi.so
ld: fatal: symbol referencing errors. No output written to .libs/ompi_info
make[2]: *** [ompi_info] Error 2
make[2]: Leaving directory
`/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/mpi-install/s3rI/src/openmpi-1.9a1r27092/ompi/tools/ompi_info'
make[1]: *** [install-recursive] Error 1
make[1]: Leaving directory
`/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/mpi-install/s3rI/src/openmpi-1.9a1r27092/ompi'
make: *** [install-recursive] Error 1
On Aug 24, 2012, at 4:30 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
I have access to a few different Solaris machines and can offer to build the trunk if somebody tells me what configure flags are desired.
-Paul
On Fri, Aug 24, 2012 at 8:54 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
Eugene - can you confirm that this is only happening on the one Solaris system? In other words, is this a general issue or something specific to that one machine?
I'm wondering because if it is just the one machine, then it might be something strange about how it is setup - perhaps the version of Solaris, or it is configuring --enable-static, or...
Just trying to assess how general a problem this might be, and thus if this should be a blocker or not.
On Aug 24, 2012, at 8:00 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&lt;mailto:eugene.loh_at_[hidden]&gt;&gt; wrote:
&gt; On 08/24/12 09:54, Shamis, Pavel wrote:
&gt;&gt; Maybe there is a chance to get direct access to this system ?
&gt; No.
&gt;
&gt; But I'm attaching compressed log files from configure/make.
&gt;
&gt; &lt;tarball-of-log-files.tar.bz2&gt;_______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11453.php">Yevgeny Kliteynik: "Re: [OMPI devel] git mirror"</a>
<li><strong>Previous message:</strong> <a href="11451.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11448.php">Paul Hargrove: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11455.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
