<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 06:37:49 2016" -->
<!-- isoreceived="20160503103749" -->
<!-- sent="Tue, 3 May 2016 10:37:46 +0000" -->
<!-- isosent="20160503103746" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &amp;quot;gcc -m32&amp;quot; (hwloc)" -->
<!-- id="71FA41B2-13CE-4766-9E30-8D7E46C1C3C5_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="57285D92.4080302_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 06:37:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18900.php">Edgar Gabriel: "Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<li><strong>Previous message:</strong> <a href="18898.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18898.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brice; I filed the corresponding v2.0 PR here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release/pull/1130">https://github.com/open-mpi/ompi-release/pull/1130</a>
<br>
<p><p><span class="quotelev1">&gt; On May 3, 2016, at 4:13 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/1621">https://github.com/open-mpi/ompi/pull/1621</a> (against master, needs to go to 2.0 later)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 03/05/2016 08:22, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Yes we should backport this to OMPI master and v2.x.
</span><br>
<span class="quotelev2">&gt;&gt; I am usually not the one doing the PR, I'd need to learn the exact procedure first :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 03/05/2016 08:15, Paul Hargrove a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, Brice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any plans to get this fix into Open MPI's embedded copy of hwloc 1.11.2, and into v2.x in particular?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or perhaps that is Jeff's job?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, May 2, 2016 at 11:04 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should be fixed by <a href="https://github.com/open-mpi/hwloc/commit/9549fd59af04dca2e2340e17f0e685f8c552d818">https://github.com/open-mpi/hwloc/commit/9549fd59af04dca2e2340e17f0e685f8c552d818</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the report
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 02/05/2016 21:53, Paul Hargrove a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a linux/ppc64 host running Fedora 20.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have configured the 2.0.0rc2 tarball with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=[....] --enable-debug \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CFLAGS=-m32 --with-wrapper-cflags=-m32 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CXXFLAGS=-m32 --with-wrapper-cxxflags=-m32 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FCFLAGS=-m32 --with-wrapper-fcflags=-m32 --disable-mpi-fortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [yes, I know the fortran flags are pointless with --disable-mpi-fortran]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My build is failing (as shown at the bottom of this email) in tools/wrappers with undefined references to udev symbols.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The udev configure probe run by the embedded hwloc seemed happy enough:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- MCA component hwloc:hwloc1112 (m4 configuration macro, priority 90)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking for MCA component hwloc:hwloc1112 compile mode... static
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking hwloc building mode... embedded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking libudev.h usability... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking libudev.h presence... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking for libudev.h... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking for udev_device_new_from_subsystem_sysname in -ludev... no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, looking at config.log one can see that despite the presence/usability of libudev.h there is NOT a libudev library present for &quot;-m32&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is apparent because the probe for udev_device_new_from_subsystem_sysname failed with a message about the *library* not being found rather than about an undefined symbol.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I *can* work-around this issue by passing  --disable-libudev to configure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, it would seem appropriate to check for a usable libudev library in addition to the header.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory `/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/tools/wrappers'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc -std=gnu99 &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/tools/wrappers -I../../../opal/include -I../../../ompi/include -I../../../oshmem/include -I../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen -I../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen -I../../../ompi/mpiext/cuda/c   -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2 -I../../.. -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/include -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/orte/include -I../../../orte/include -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/ompi/include                                 -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/oshmem/include   -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/mca/hwloc/hwloc1112/hwloc/include -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include -I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/mca/event/libevent2022/libevent/include  -m32 -g -finline-functions -fno-strict-aliasing -pthread -MT opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o opal_wrapper.o /home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/tools/wrappers/opal_wrapper.c &amp;&amp;\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -m32 -g -finline-functions -fno-strict-aliasing -pthread   -o opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la -lrt -lm -lutil
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: gcc -std=gnu99 -m32 -g -finline-functions -fno-strict-aliasing -pthread -o .libs/opal_wrapper opal_wrapper.o  ../../../opal/.libs/libopen-pal.so -ldl -lrt -lm -lutil -pthread -Wl,-rpath -Wl,/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/INST/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `udev_new'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `udev_device_new_from_subsystem_sysname'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `udev_unref'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `udev_device_get_property_value'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `udev_device_unref'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/tools/wrappers'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18869.php">http://www.open-mpi.org/community/lists/devel/2016/05/18869.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18892.php">http://www.open-mpi.org/community/lists/devel/2016/05/18892.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18893.php">http://www.open-mpi.org/community/lists/devel/2016/05/18893.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18898.php">http://www.open-mpi.org/community/lists/devel/2016/05/18898.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18900.php">Edgar Gabriel: "Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<li><strong>Previous message:</strong> <a href="18898.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18898.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
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
