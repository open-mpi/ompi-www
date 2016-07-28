<?
$subject_val = "Re: [OMPI devel] r27078 and OMPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 22:26:02 2012" -->
<!-- isoreceived="20120825022602" -->
<!-- sent="Fri, 24 Aug 2012 19:25:48 -0700" -->
<!-- isosent="20120825022548" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r27078 and OMPI build" -->
<!-- id="CAAvDA16EfLHG2uYvB_yww2QxGqAhV9W-nUd4n3R7ipZ4-kAz6Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50382EC3.2030904_at_oracle.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 22:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11452.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11450.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11450.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11452.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can add x86-64/Linux/SS12.3 to the NOT-showing-the-problem list.
<br>
<p>-Paul
<br>
<p>On Fri, Aug 24, 2012 at 6:47 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; Indeed.  Sorry to jump late back into the melee.  I did reproduce the
</span><br>
<span class="quotelev1">&gt; problem on a second SPARC system, to answer Ralph's earlier question;  I
</span><br>
<span class="quotelev1">&gt; don't know how interesting that is given that it's very similar to the
</span><br>
<span class="quotelev1">&gt; original system.  And, to corroborate Paul's AMD observation, we have an
</span><br>
<span class="quotelev1">&gt; x86/Solaris/Studio system that is *not* seeing the problem.  Thanks to Paul
</span><br>
<span class="quotelev1">&gt; for identifying the likely cause of the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/24/2012 6:32 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Paul!! That is very helpful - hopefully the ORNL folks can now fix
</span><br>
<span class="quotelev1">&gt; the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Aug 24, 2012, at 6:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I *can* reproduce the problem on SPARC/Solaris-10 with the SS12.3
</span><br>
<span class="quotelev1">&gt; compiler and an ALMOST vanilla configure:
</span><br>
<span class="quotelev1">&gt;  $ [path_to]configure \
</span><br>
<span class="quotelev1">&gt;        --prefix=[blah]  CC=cc CXX=CC F77=f77 FC=f90 \
</span><br>
<span class="quotelev1">&gt;         CFLAGS=&quot;-m64&quot;  --with-wrapper-cflags=&quot;-m64&quot;  CXXFLAGS=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;        FFLAGS=&quot;-m64&quot;  --with-wrapper-fflags=&quot;-m64&quot;  FCFLAGS=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;        CXXFLAGS=&quot;-m64 -library=stlport4&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I did NOT manage to reproduce on AMD64/Solaris-11, which completed a
</span><br>
<span class="quotelev1">&gt; build w/ VT disabled.
</span><br>
<span class="quotelev1">&gt; Unfortunately I have neither SPARC/Solaris-11 nor
</span><br>
<span class="quotelev1">&gt; AMD64/Solaris-10 readily available to disambiguate the key factor.
</span><br>
<span class="quotelev1">&gt; Hopefully it is enough to know that the problem is reproducible w/o
</span><br>
<span class="quotelev1">&gt; Oracle's massive configure commandline.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The build isn't complete, but I can already see that the symbol has
</span><br>
<span class="quotelev1">&gt; &quot;leaked&quot; into libmpi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ grep -arl mca_coll_ml_memsync_intra BLD/
</span><br>
<span class="quotelev1">&gt; BLD/ompi/mca/bcol/.libs/libmca_bcol.a
</span><br>
<span class="quotelev1">&gt; BLD/ompi/mca/bcol/base/.libs/bcol_base_open.o
</span><br>
<span class="quotelev1">&gt; BLD/ompi/.libs/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; BLD/ompi/.libs/libmpi.so
</span><br>
<span class="quotelev1">&gt; BLD/ompi/.libs/libmpi.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It is referenced by mca_coll_ml_generic_collectives_launcher:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ nm BLD/ompi/.libs/libmpi.so.0.0.0 | grep -B1 mca_coll_ml_memsync_intra
</span><br>
<span class="quotelev1">&gt; 00000000006a6088 t mca_coll_ml_generic_collectives_launcher
</span><br>
<span class="quotelev1">&gt;                  U mca_coll_ml_memsync_intra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is coming from libmca_bcol.a:
</span><br>
<span class="quotelev1">&gt;  $ nm BLD/ompi/mca/bcol/.libs/libmca_bcol.a | grep -B1
</span><br>
<span class="quotelev1">&gt; mca_coll_ml_memsync_intra
</span><br>
<span class="quotelev1">&gt; 0000000000005248 t mca_coll_ml_generic_collectives_launcher
</span><br>
<span class="quotelev1">&gt;                  U mca_coll_ml_memsync_intra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This appears to be via the following chain of calls within coll_ml.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mca_coll_ml_generic_collectives_launcher
</span><br>
<span class="quotelev1">&gt;    mca_coll_ml_task_completion_processing
</span><br>
<span class="quotelev1">&gt;       coll_ml_fragment_completion_processing
</span><br>
<span class="quotelev1">&gt;          mca_coll_ml_buffer_recycling
</span><br>
<span class="quotelev1">&gt;              mca_coll_ml_memsync_intra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  All of which are marked as &quot;static
</span><br>
<span class="quotelev1">&gt; inline __opal_attribute_always_inline__&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 24, 2012 at 4:55 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, I have a vanilla configure+make running on both SPARC/Solaris-10 and
</span><br>
<span class="quotelev2">&gt;&gt; AMD64/Solaris-11.
</span><br>
<span class="quotelev2">&gt;&gt; I am using the 12.3 Oracle compilers in both cases to match the original
</span><br>
<span class="quotelev2">&gt;&gt; report.
</span><br>
<span class="quotelev2">&gt;&gt; I'll post the results when they complete.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  In the meantime, I took a quick look at the code and have a pretty
</span><br>
<span class="quotelev2">&gt;&gt; reasonable guess as to the cause.
</span><br>
<span class="quotelev2">&gt;&gt; Looking at ompi/mca/coll/ml/coll_ml.h I see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     827  int mca_coll_ml_memsync_intra(mca_coll_ml_module_t *module, int
</span><br>
<span class="quotelev2">&gt;&gt; bank_index);
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;     996  static inline __opal_attribute_always_inline__
</span><br>
<span class="quotelev2">&gt;&gt;    997          int
</span><br>
<span class="quotelev2">&gt;&gt; mca_coll_ml_buffer_recycling(mca_coll_ml_collective_operation_progress_t
</span><br>
<span class="quotelev2">&gt;&gt; *ml_request)
</span><br>
<span class="quotelev2">&gt;&gt;    998  {
</span><br>
<span class="quotelev2">&gt;&gt;  [...]
</span><br>
<span class="quotelev2">&gt;&gt;   1023                  rc = mca_coll_ml_memsync_intra(ml_module,
</span><br>
<span class="quotelev2">&gt;&gt; ml_memblock-&gt;memsync_counter);
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;   1041  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Based on past experience w/ the Sun/Oracle compilers on another project
</span><br>
<span class="quotelev2">&gt;&gt; (See <a href="http://bugzilla.hcs.ufl.edu/cgi-bin/bugzilla3/show_bug.cgi?id=193">http://bugzilla.hcs.ufl.edu/cgi-bin/bugzilla3/show_bug.cgi?id=193</a> ),
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that this static-inline-always function is being emitted by the
</span><br>
<span class="quotelev2">&gt;&gt; compiler in every object which includes this header even if they don't call
</span><br>
<span class="quotelev2">&gt;&gt; it..  The call on line 1023 then results in the undefined reference
</span><br>
<span class="quotelev2">&gt;&gt; to mca_coll_ml_memsync_intra.  Basically it is not safe for an inline
</span><br>
<span class="quotelev2">&gt;&gt; function in a header to call an extern function that isn't available to
</span><br>
<span class="quotelev2">&gt;&gt; every object that includes the header REGARDLESS of whether the object
</span><br>
<span class="quotelev2">&gt;&gt; invokes the inline function or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Aug 24, 2012 at 4:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle uses an abysmally complicated configure line, but nearly all of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is irrelevant to the problem here. For this, I would suggest just doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a vanilla ./configure - if the component gets pulled into libmpi, then we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know there is a problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Just FYI: here is there actual configure line, just in case you spot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something problematic:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC=cc CXX=CC F77=f77 FC=f90  --with-openib  --enable-openib-connectx-xrc  --without-udapl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-openib-ibcm  --enable-btl-openib-failover   --without-dtrace  --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-cxx-exceptions --enable-shared --enable-orterun-prefix-by-default --with-sge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-f90 --with-mpi-f90-size=small  --disable-peruse --disable-state
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-thread-multiple   --disable-debug  --disable-mem-debug  --disable-mem-profile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=&quot;-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -Qoption
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg -xregs=no%appl -xdepend=yes -xbuiltin=%all -xO5&quot;  CXXFLAGS=&quot;-xtarget=ultra3 -m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -Qoption cg -xregs=no%appl -xdepend=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -xbuiltin=%all -xO5 -Bstatic -lCrun -lCstd -Bdynamic&quot;  FFLAGS=&quot;-xtarget=ultra3 -m32 -xarch=sparcvis2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -xprefetch -xprefetch_level=2 -xvector=lib -Qoption cg -xregs=no%appl -stackvar -xO5&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FCFLAGS=&quot;-xtarget=ultra3 -m32 -xarch=sparcvis2 -xprefetch -xprefetch_level=2 -xvector=lib -Qoption
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cg -xregs=no%appl -stackvar -xO5&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/installs/JA08/install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mandir=${prefix}/man  --bindir=${prefix}/bin  --libdir=${prefix}/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --includedir=${prefix}/include   --with-tm=/ws/ompi-tools/orte/torque/current/shared-install32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-contrib-no-build=vt --with-package-string=&quot;Oracle Message Passing Toolkit &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-ident-string=&quot;@(#)RELEASE VERSION 1.9openmpi-1.5.4-r1.9a1r27092&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  and the error he gets is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/mpi-install/s3rI/src/openmpi-1.9a1r27092/ompi/tools/ompi_info'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CCLD     ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Undefined			first referenced
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  symbol  			    in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_coll_ml_memsync_intra           ../../../ompi/.libs/libmpi.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: fatal: symbol referencing errors. No output written to .libs/ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [ompi_info] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/mpi-install/s3rI/src/openmpi-1.9a1r27092/ompi/tools/ompi_info'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/workspace/euloh/hpc/mtt-scratch/burl-ct-t2k-3/ompi-tarball-testing/mpi-install/s3rI/src/openmpi-1.9a1r27092/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Aug 24, 2012, at 4:30 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have access to a few different Solaris machines and can offer to build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the trunk if somebody tells me what configure flags are desired.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Aug 24, 2012 at 8:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eugene - can you confirm that this is only happening on the one Solaris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system? In other words, is this a general issue or something specific to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that one machine?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm wondering because if it is just the one machine, then it might be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something strange about how it is setup - perhaps the version of Solaris,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or it is configuring --enable-static, or...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just trying to assess how general a problem this might be, and thus if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this should be a blocker or not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 24, 2012, at 8:00 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On 08/24/12 09:54, Shamis, Pavel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Maybe there is a chance to get direct access to this system ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; No.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; But I'm attaching compressed log files from configure/make.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;tarball-of-log-files.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt;  Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Paul H. Hargrove                          PHHargrove_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11452.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11450.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>In reply to:</strong> <a href="11450.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11452.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
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
