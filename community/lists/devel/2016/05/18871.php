<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 16:03:25 2016" -->
<!-- isoreceived="20160502200325" -->
<!-- sent="Mon, 2 May 2016 20:03:22 +0000" -->
<!-- isosent="20160502200322" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4" -->
<!-- id="03E7E375-6F46-4447-AEE0-469AAD5F8BE8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15pgzc-rBEfp0C42ie1mOShw7uUsJJ=aSSR7uWoq=yDnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 16:03:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18872.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] netbsd-7 build failure"</a>
<li><strong>Previous message:</strong> <a href="18870.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on IA64/Linux"</a>
<li><strong>In reply to:</strong> <a href="18868.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan just fixed: <a href="https://github.com/open-mpi/ompi/pull/1615">https://github.com/open-mpi/ompi/pull/1615</a>
<br>
<p><p><span class="quotelev1">&gt; On May 2, 2016, at 3:45 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a fairly old x86-64 system running RHEL AS4.
</span><br>
<span class="quotelev1">&gt; The build is failing (as shown at the bottom of this message), with MREMAP_FIXED undeclared.
</span><br>
<span class="quotelev1">&gt; There *is* a definition in the system headers, but  in linux/mmap.h rather than sys/mmap.h
</span><br>
<span class="quotelev1">&gt; $ grep -rw MREMAP_FIXED /usr/include/
</span><br>
<span class="quotelev1">&gt; /usr/include/linux/mman.h:#define MREMAP_FIXED  2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I. -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher -I../../../../opal/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen -I../../../../ompi/mpiext/cuda/c -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2 -I../../../.. -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi2.0.0rc2/opal/include -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/orte/include -I../../../../orte/include -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/ompi/include -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/oshmem/include -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/BLD/opal/mca/hwloc/hwloc1112/hwloc/include -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include -I/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/BLD/opal/mca/event/libevent2022/libevent/include -g -finline-functions -fno-strict-aliasing -pthread -MT memory_patcher_component.lo -MD -MP -MF .deps/memory_patcher_component.Tpo -c /home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c  -fPIC -DPIC -o .libs/memory_patcher_component.o
</span><br>
<span class="quotelev1">&gt; /home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c: In function `intercept_mremap':
</span><br>
<span class="quotelev1">&gt; /home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:178: error: `MREMAP_FIXED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:178: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; /home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:178: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; /home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c: In function `intercept_shmdt':
</span><br>
<span class="quotelev1">&gt; /home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/openmpi-2.0.0rc2/opal/mca/memory/patcher/memory_patcher_component.c:347: warning: passing arg 1 of `opal_mem_hooks_release_hook' discards qualifiers from pointer target type
</span><br>
<span class="quotelev1">&gt; make[2]: *** [memory_patcher_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/BLD/opal/mca/memory/patcher'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/phhargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-psm/BLD/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18868.php">http://www.open-mpi.org/community/lists/devel/2016/05/18868.php</a>
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
<li><strong>Next message:</strong> <a href="18872.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] netbsd-7 build failure"</a>
<li><strong>Previous message:</strong> <a href="18870.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on IA64/Linux"</a>
<li><strong>In reply to:</strong> <a href="18868.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
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
