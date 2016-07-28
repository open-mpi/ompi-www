<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 02:04:26 2016" -->
<!-- isoreceived="20160503060426" -->
<!-- sent="Tue, 3 May 2016 08:04:21 +0200" -->
<!-- isosent="20160503060421" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &amp;quot;gcc -m32&amp;quot; (hwloc)" -->
<!-- id="57283F65.7020207_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA17R87jUhe32ng0CeQWAfnRRYVLN1Y2LqjTd3NVbRMB6Ow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 02:04:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18893.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18891.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>In reply to:</strong> <a href="18869.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18893.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18893.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed by
<br>
<a href="https://github.com/open-mpi/hwloc/commit/9549fd59af04dca2e2340e17f0e685f8c552d818">https://github.com/open-mpi/hwloc/commit/9549fd59af04dca2e2340e17f0e685f8c552d818</a>
<br>
Thanks for the report
<br>
Brice
<br>
<p><p><p>Le 02/05/2016 21:53, Paul Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; I have a linux/ppc64 host running Fedora 20.
</span><br>
<span class="quotelev1">&gt; I have configured the 2.0.0rc2 tarball with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --prefix=[....] --enable-debug \
</span><br>
<span class="quotelev1">&gt;     CFLAGS=-m32 --with-wrapper-cflags=-m32 \
</span><br>
<span class="quotelev1">&gt;     CXXFLAGS=-m32 --with-wrapper-cxxflags=-m32 \
</span><br>
<span class="quotelev1">&gt;     FCFLAGS=-m32 --with-wrapper-fcflags=-m32 --disable-mpi-fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [yes, I know the fortran flags are pointless with --disable-mpi-fortran]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My build is failing (as shown at the bottom of this email) in
</span><br>
<span class="quotelev1">&gt; tools/wrappers with undefined references to udev symbols.
</span><br>
<span class="quotelev1">&gt; The udev configure probe run by the embedded hwloc seemed happy enough:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --- MCA component hwloc:hwloc1112 (m4 configuration macro,
</span><br>
<span class="quotelev1">&gt;     priority 90)
</span><br>
<span class="quotelev1">&gt;     checking for MCA component hwloc:hwloc1112 compile mode... static
</span><br>
<span class="quotelev1">&gt;     checking hwloc building mode... embedded
</span><br>
<span class="quotelev1">&gt;     [...]
</span><br>
<span class="quotelev1">&gt;     checking libudev.h usability... yes
</span><br>
<span class="quotelev1">&gt;     checking libudev.h presence... yes
</span><br>
<span class="quotelev1">&gt;     checking for libudev.h... yes
</span><br>
<span class="quotelev1">&gt;     checking for udev_device_new_from_subsystem_sysname in -ludev... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, looking at config.log one can see that despite the
</span><br>
<span class="quotelev1">&gt; presence/usability of libudev.h there is NOT a libudev library present
</span><br>
<span class="quotelev1">&gt; for &quot;-m32&quot;.
</span><br>
<span class="quotelev1">&gt; This is apparent because the probe
</span><br>
<span class="quotelev1">&gt; for udev_device_new_from_subsystem_sysname failed with a message about
</span><br>
<span class="quotelev1">&gt; the *library* not being found rather than about an undefined symbol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I *can* work-around this issue by passing  --disable-libudev to configure.
</span><br>
<span class="quotelev1">&gt; However, it would seem appropriate to check for a usable libudev
</span><br>
<span class="quotelev1">&gt; library in addition to the header.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 &quot;-DEXEEXT=\&quot;\&quot;&quot; -I.
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/tools/wrappers
</span><br>
<span class="quotelev1">&gt; -I../../../opal/include -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../oshmem/include
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/mpiext/cuda/c  
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2 -I../../..
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/ompi/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/oshmem/include
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt;  -m32 -g -finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/tools/wrappers/opal_wrapper.c
</span><br>
<span class="quotelev1">&gt; &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -m32
</span><br>
<span class="quotelev1">&gt; -g -finline-functions -fno-strict-aliasing -pthread   -o opal_wrapper
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o ../../../opal/libopen-pal.la &lt;<a href="http://libopen-pal.la">http://libopen-pal.la</a>&gt;
</span><br>
<span class="quotelev1">&gt; -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -m32 -g -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -o .libs/opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;  ../../../opal/.libs/libopen-pal.so -ldl -lrt -lm -lutil -pthread
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/INST/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `udev_new'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `udev_device_new_from_subsystem_sysname'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `udev_unref'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `udev_device_get_property_value'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `udev_device_unref'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18869.php">http://www.open-mpi.org/community/lists/devel/2016/05/18869.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18893.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18891.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>In reply to:</strong> <a href="18869.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18893.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18893.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
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
