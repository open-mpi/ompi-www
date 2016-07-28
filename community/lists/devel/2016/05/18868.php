<?
$subject_val = "[OMPI devel] [2.0.0rc2] build failure on RHEL AS4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 15:45:16 2016" -->
<!-- isoreceived="20160502194516" -->
<!-- sent="Mon, 2 May 2016 12:45:10 -0700" -->
<!-- isosent="20160502194510" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] build failure on RHEL AS4" -->
<!-- id="CAAvDA15pgzc-rBEfp0C42ie1mOShw7uUsJJ=aSSR7uWoq=yDnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] build failure on RHEL AS4<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 15:45:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18869.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18867.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8/1.10 --&gt; 2.0.0 migration guide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18871.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
<li><strong>Reply:</strong> <a href="18871.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a fairly old x86-64 system running RHEL AS4.
<br>
The build is failing (as shown at the bottom of this message), with
<br>
MREMAP_FIXED undeclared.
<br>
There *is* a definition in the system headers, but  in linux/mmap.h rather
<br>
than sys/mmap.h
<br>
<p>$ grep -rw MREMAP_FIXED /usr/include/
<br>
/usr/include/linux/mman.h:#define MREMAP_FIXED  2
<br>
<p><p><p>-Paul
<br>
<p>libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher
<br>
-I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../../../../ompi/mpiext/cuda/c
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2
<br>
-I../../../..
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi2.0.0rc2/opal/include
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/orte/include
<br>
-I../../../../orte/include
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/ompi/include
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/oshmem/include
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -finline-functions -fno-strict-aliasing -pthread -MT
<br>
memory_patcher_component.lo -MD -MP -MF .deps/memory_patcher_component.Tpo
<br>
-c
<br>
/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c
<br>
&nbsp;-fPIC -DPIC -o .libs/memory_patcher_component.o
<br>
/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:
<br>
In function `intercept_mremap':
<br>
/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:178:
<br>
error: `MREMAP_FIXED' undeclared (first use in this function)
<br>
/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:178:
<br>
error: (Each undeclared identifier is reported only once
<br>
/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:178:
<br>
error: for each function it appears in.)
<br>
/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:
<br>
In function `intercept_shmdt':
<br>
/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:347:
<br>
warning: passing arg 1 of `opal_mem_hooks_release_hook' discards qualifiers
<br>
from pointer target type
<br>
make[2]: *** [memory_patcher_component.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/BLD/opal/mca/memory/patcher'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/BLD/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18869.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18867.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8/1.10 --&gt; 2.0.0 migration guide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18871.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
<li><strong>Reply:</strong> <a href="18871.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
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
