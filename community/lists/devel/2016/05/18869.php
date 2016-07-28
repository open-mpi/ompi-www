<?
$subject_val = "[OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 15:53:18 2016" -->
<!-- isoreceived="20160502195318" -->
<!-- sent="Mon, 2 May 2016 12:53:13 -0700" -->
<!-- isosent="20160502195313" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] build failure with ppc64 and &amp;quot;gcc -m32&amp;quot; (hwloc)" -->
<!-- id="CAAvDA17R87jUhe32ng0CeQWAfnRRYVLN1Y2LqjTd3NVbRMB6Ow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 15:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18870.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on IA64/Linux"</a>
<li><strong>Previous message:</strong> <a href="18868.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18881.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18881.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18892.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a linux/ppc64 host running Fedora 20.
<br>
I have configured the 2.0.0rc2 tarball with
<br>
<p>--prefix=[....] --enable-debug \
<br>
CFLAGS=-m32 --with-wrapper-cflags=-m32 \
<br>
CXXFLAGS=-m32 --with-wrapper-cxxflags=-m32 \
<br>
FCFLAGS=-m32 --with-wrapper-fcflags=-m32 --disable-mpi-fortran
<br>
<p>[yes, I know the fortran flags are pointless with --disable-mpi-fortran]
<br>
<p>My build is failing (as shown at the bottom of this email) in
<br>
tools/wrappers with undefined references to udev symbols.
<br>
The udev configure probe run by the embedded hwloc seemed happy enough:
<br>
<p>--- MCA component hwloc:hwloc1112 (m4 configuration macro, priority 90)
<br>
checking for MCA component hwloc:hwloc1112 compile mode... static
<br>
checking hwloc building mode... embedded
<br>
[...]
<br>
checking libudev.h usability... yes
<br>
checking libudev.h presence... yes
<br>
checking for libudev.h... yes
<br>
checking for udev_device_new_from_subsystem_sysname in -ludev... no
<br>
<p><p>However, looking at config.log one can see that despite the
<br>
presence/usability of libudev.h there is NOT a libudev library present for
<br>
&quot;-m32&quot;.
<br>
This is apparent because the probe
<br>
for udev_device_new_from_subsystem_sysname failed with a message about the
<br>
*library* not being found rather than about an undefined symbol.
<br>
<p><p>I *can* work-around this issue by passing  --disable-libudev to configure.
<br>
However, it would seem appropriate to check for a usable libudev library in
<br>
addition to the header.
<br>
<p>-Paul
<br>
<p><p>Making all in tools/wrappers
<br>
make[2]: Entering directory
<br>
`/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/tools/wrappers'
<br>
depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
gcc -std=gnu99 &quot;-DEXEEXT=\&quot;\&quot;&quot; -I.
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/tools/wrappers
<br>
-I../../../opal/include -I../../../ompi/include -I../../../oshmem/include
<br>
-I../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../../../ompi/mpiext/cuda/c
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2
<br>
-I../../..
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/orte/include
<br>
-I../../../orte/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/ompi/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/oshmem/include
<br>
<p>-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/mca/event/libevent2022/libevent/include
<br>
&nbsp;-m32 -g -finline-functions -fno-strict-aliasing -pthread -MT
<br>
opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o opal_wrapper.o
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/tools/wrappers/opal_wrapper.c
<br>
&amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Po
<br>
/bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -m32 -g
<br>
-finline-functions -fno-strict-aliasing -pthread   -o opal_wrapper
<br>
opal_wrapper.o ../../../opal/libopen-pal.la -lrt -lm -lutil
<br>
libtool: link: gcc -std=gnu99 -m32 -g -finline-functions
<br>
-fno-strict-aliasing -pthread -o .libs/opal_wrapper opal_wrapper.o
<br>
&nbsp;../../../opal/.libs/libopen-pal.so -ldl -lrt -lm -lutil -pthread
<br>
-Wl,-rpath -Wl,/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/INST/lib
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `udev_new'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to
<br>
`udev_device_new_from_subsystem_sysname'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `udev_unref'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to
<br>
`udev_device_get_property_value'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to
<br>
`udev_device_unref'
<br>
collect2: error: ld returned 1 exit status
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18869/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18870.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on IA64/Linux"</a>
<li><strong>Previous message:</strong> <a href="18868.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18881.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18881.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18892.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
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
