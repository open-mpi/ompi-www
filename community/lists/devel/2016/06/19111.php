<?
$subject_val = "[OMPI devel] [2.0.0rc3] build failure on ppc32 and arm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 21:44:05 2016" -->
<!-- isoreceived="20160616014405" -->
<!-- sent="Wed, 15 Jun 2016 18:43:55 -0700" -->
<!-- isosent="20160616014355" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc3] build failure on ppc32 and arm" -->
<!-- id="CAAvDA17Y2oWungV5hOLeuotvLhyor60sOu4PetVmakoM8MxRSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc3] build failure on ppc32 and arm<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 21:43:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19112.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
<li><strong>Previous message:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The same failure mode reported below is also occurring on a 32-bit ARM
<br>
system.
<br>
<p>-Paul
<br>
<p>On Wed, Jun 15, 2016 at 6:13 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With a PPC64/Fedora20/gcc-4.8.3 system configuring for &quot;-m32&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure --prefix=[...] --enable-debug \
</span><br>
<span class="quotelev1">&gt;         CFLAGS=-m32 --with-wrapper-cflags=-m32 \
</span><br>
<span class="quotelev1">&gt;         CXXFLAGS=-m32 --with-wrapper-cxxflags=-m32 \
</span><br>
<span class="quotelev1">&gt;         FCFLAGS=-m32 --with-wrapper-fcflags=-m32 --disable-mpi-fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Build fails with
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -m32 -g
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread   -o opal_wrapper
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o ../../../opal/libopen-pal.la -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -m32 -g -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -o .libs/opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;  ../../../opal/.libs/libopen-pal.so -ldl -lrt -lm -lutil -pthread
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/home/phargrov/OMPI/openmpi-2.0.0rc3-linux-ppc32-gcc/INST/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `OPAL_THREAD_ADD64'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 15, 2016 at 3:19 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are now feature complete for v2.0.0 and would appreciate testing by
</span><br>
<span class="quotelev2">&gt;&gt; developers and end users before we finalize the v2.0.0 release.  In that
</span><br>
<span class="quotelev2">&gt;&gt; light, v2.0.0rc3 is now available:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are the changes since 2.0.0rc2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The MPI C++ bindings -- which were removed from the MPI standard in
</span><br>
<span class="quotelev2">&gt;&gt;    v3.0 -- are no longer built by default and will be removed in some
</span><br>
<span class="quotelev2">&gt;&gt;    future version of Open MPI.  Use the --enable-mpi-cxx-bindings
</span><br>
<span class="quotelev2">&gt;&gt;    configure option to build the deprecated/removed MPI C++ bindings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; NOTE: this is not new, actually -- but we just added it to the NEWS
</span><br>
<span class="quotelev2">&gt;&gt; file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - In environments where mpirun cannot automatically determine the
</span><br>
<span class="quotelev2">&gt;&gt;   number of slots available (e.g., when using a hostfile that does not
</span><br>
<span class="quotelev2">&gt;&gt;   specify &quot;slots&quot;, or when using --host without specifying a &quot;:N&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   suffix to hostnames), mpirun now requires the use of &quot;-np N&quot; to
</span><br>
<span class="quotelev2">&gt;&gt;   specify how many MPI processes to launch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Many updates and fixes to the revamped memory hooks infrastructure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Various configure-related compatibility updates for newer versions
</span><br>
<span class="quotelev2">&gt;&gt;    of libibverbs and OFED.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Properly detect Intel TrueScale and OmniPath devices in the ACTIVE
</span><br>
<span class="quotelev2">&gt;&gt;   state.  Thanks to Durga Choudhury for reporting the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Fix MPI_IREDUCE_SCATTER_BLOCK for a one-process communicator. Thanks
</span><br>
<span class="quotelev2">&gt;&gt;    to Lisandro Dalcin for reporting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Fix detection and use of Solaris Studio 12.5 (beta) compilers.
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks to Paul Hargrove for reporting and debugging.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Allow NULL arrays when creating empty MPI datatypes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Miscellaneous minor bug fixes in the hcoll component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Miscellaneous minor bug fixes in the ugni component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Fix various small memory leaks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Notable new MCA parameters:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    -  opal_progress_lp_call_ration: Control how often low-priority
</span><br>
<span class="quotelev2">&gt;&gt;       callbacks are made during Open MPI's main progress loop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Disable backtrace support by default in the PSM/PSM2 libraries to
</span><br>
<span class="quotelev2">&gt;&gt;   prevent unintentional conflicting behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard Pritchard
</span><br>
<span class="quotelev2">&gt;&gt; HPC-DES
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19103.php">http://www.open-mpi.org/community/lists/devel/2016/06/19103.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19112.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
<li><strong>Previous message:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
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
