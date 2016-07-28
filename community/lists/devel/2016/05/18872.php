<?
$subject_val = "[OMPI devel] [2.0.0rc2] netbsd-7 build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 16:17:45 2016" -->
<!-- isoreceived="20160502201745" -->
<!-- sent="Mon, 2 May 2016 13:17:41 -0700" -->
<!-- isosent="20160502201741" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] netbsd-7 build failure" -->
<!-- id="CAAvDA15u_YetXDCTqpHQt_QvVt5T31=xzo-uN8-XsOaJV62sDw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] netbsd-7 build failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 16:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18873.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca undefined)"</a>
<li><strong>Previous message:</strong> <a href="18871.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both i386 and amd64 systems running NetBSD-7 fail with:
<br>
<p>libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/opal/mca/memory/patcher
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
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2
<br>
-I../../../..
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/opal/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/orte/include
<br>
-I../../../../orte/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/ompi/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/oshmem/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -finline-functions -fno-strict-aliasing -pthread -MT
<br>
memory_patcher_component.lo -MD -MP -MF .deps/memory_patcher_component.Tpo
<br>
-c
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c
<br>
&nbsp;-fPIC -DPIC -o .libs/memory_patcher_component.o
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:
<br>
In function 'intercept_mremap':
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:178:19:
<br>
error: 'MREMAP_FIXED' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!(flags &amp; MREMAP_FIXED)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-netbsd7-amd64/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:178:19:
<br>
note: each undeclared identifier is reported only once for each function it
<br>
appears in
<br>
*** Error code 1
<br>
<p><p>NetBSD does have a mremap() function, but with different arguments than the
<br>
one under Linux (and using MAP_FIXED rather than MREMAP_FIXED).
<br>
That is why the &quot;#if defined (SYS_mremap)&quot; is evaluating TRUE.
<br>
So, I think one wants &quot;#if defined (SYS_mremap) &amp;&amp; defined (__linux__)&quot; on
<br>
lines 163 and 409 of memory_patcher_component.c.
<br>
<p>It would be possible (advisable?) to construct a NetBSD-specific intercept
<br>
for mremap(), but the curent Linux-specific one won't compile.
<br>
See: <a href="http://netbsd.gw.com/cgi-bin/man-cgi?mremap++NetBSD-current">http://netbsd.gw.com/cgi-bin/man-cgi?mremap++NetBSD-current</a>
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18872/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18873.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca undefined)"</a>
<li><strong>Previous message:</strong> <a href="18871.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
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
