<?
$subject_val = "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 26 06:57:31 2016" -->
<!-- isoreceived="20160426105731" -->
<!-- sent="Tue, 26 Apr 2016 12:57:18 +0200" -->
<!-- isosent="20160426105718" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8" -->
<!-- id="ab089872-b470-2574-f580-d2df4a80348a_at_informatik.hs-fulda.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="f3897b55-5a21-97b3-fe34-9852e16b9f12_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-26 06:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29034.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Previous message:</strong> <a href="29032.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29009.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles and Ralph,
<br>
<p>I was able to sort out my mess. In my last email I compared the
<br>
files from &quot;SunOS_sparc/openmpi-2.0.0_64_gcc/lib64/openmpi&quot; from
<br>
the attachment of my email to Ralph with the files from
<br>
&quot;SunOS_sparc/openmpi-2.0.0_64_cc/lib64/openmpi&quot; from my current
<br>
file system. That's the reason while I have had different
<br>
timestamps. The other problem was that Ralph didn't recognize
<br>
that &quot;mca_pmix_pmix112.so&quot; wasn't built on Solaris with the
<br>
Sun C compiler. I've removed most of the files from the attachment
<br>
of my email so that it is easier to see the relevant files. Below
<br>
I try to give you more information that may be relevant to track
<br>
down the problem. I still get an error running one of my small
<br>
test programs, when I use my gcc-version of Open MPI.
<br>
&quot;mca_pmix_pmix112.so&quot; is a 64 bits library.
<br>
<p>Linux_x86_64/openmpi-2.0.0_64_cc/lib64/openmpi:
<br>
...
<br>
-rwxr-xr-x 1 root root  261327 Apr 19 16:46 mca_plm_slurm.so
<br>
-rwxr-xr-x 1 root root    1002 Apr 19 16:45 mca_pmix_pmix112.la
<br>
-rwxr-xr-x 1 root root 3906526 Apr 19 16:45 mca_pmix_pmix112.so
<br>
-rwxr-xr-x 1 root root     966 Apr 19 16:51 mca_pml_cm.la
<br>
-rwxr-xr-x 1 root root 1574265 Apr 19 16:51 mca_pml_cm.so
<br>
...
<br>
<p>Linux_x86_64/openmpi-2.0.0_64_gcc/lib64/openmpi:
<br>
...
<br>
-rwxr-xr-x 1 root root   70371 Apr 19 16:43 mca_plm_slurm.so
<br>
-rwxr-xr-x 1 root root    1008 Apr 19 16:42 mca_pmix_pmix112.la
<br>
-rwxr-xr-x 1 root root 1029005 Apr 19 16:42 mca_pmix_pmix112.so
<br>
-rwxr-xr-x 1 root root     972 Apr 19 16:46 mca_pml_cm.la
<br>
-rwxr-xr-x 1 root root  284858 Apr 19 16:46 mca_pml_cm.so
<br>
...
<br>
<p>SunOS_sparc/openmpi-2.0.0_64_cc/lib64/openmpi:
<br>
...
<br>
-rwxr-xr-x 1 root root  319816 Apr 19 19:58 mca_plm_rsh.so
<br>
-rwxr-xr-x 1 root root     970 Apr 19 20:00 mca_pml_cm.la
<br>
-rwxr-xr-x 1 root root 1507440 Apr 19 20:00 mca_pml_cm.so
<br>
...
<br>
<p>SunOS_sparc/openmpi-2.0.0_64_gcc/lib64/openmpi:
<br>
...
<br>
-rwxr-xr-x 1 root root  153280 Apr 19 19:49 mca_plm_rsh.so
<br>
-rwxr-xr-x 1 root root    1007 Apr 19 19:47 mca_pmix_pmix112.la
<br>
-rwxr-xr-x 1 root root 1400512 Apr 19 19:47 mca_pmix_pmix112.so
<br>
-rwxr-xr-x 1 root root     971 Apr 19 19:52 mca_pml_cm.la
<br>
-rwxr-xr-x 1 root root  342440 Apr 19 19:52 mca_pml_cm.so
<br>
...
<br>
<p>SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/openmpi:
<br>
...
<br>
-rwxr-xr-x 1 root root  300096 Apr 19 17:18 mca_plm_rsh.so
<br>
-rwxr-xr-x 1 root root     970 Apr 19 17:23 mca_pml_cm.la
<br>
-rwxr-xr-x 1 root root 1458816 Apr 19 17:23 mca_pml_cm.so
<br>
...
<br>
<p>SunOS_x86_64/openmpi-2.0.0_64_gcc/lib64/openmpi:
<br>
...
<br>
-rwxr-xr-x 1 root root  133096 Apr 19 17:42 mca_plm_rsh.so
<br>
-rwxr-xr-x 1 root root    1007 Apr 19 17:41 mca_pmix_pmix112.la
<br>
-rwxr-xr-x 1 root root 1320240 Apr 19 17:41 mca_pmix_pmix112.so
<br>
-rwxr-xr-x 1 root root     971 Apr 19 17:46 mca_pml_cm.la
<br>
-rwxr-xr-x 1 root root  419848 Apr 19 17:46 mca_pml_cm.so
<br>
...
<br>
<p><p>Yesterday I've installed openmpi-v2.x-dev-1290-gbd0e4e1 so that we
<br>
have a current version for the investigation of the problem. Once
<br>
more mca_pmix_pmix112.so isn't available on Solaris if I use the
<br>
Sun C compiler.
<br>
<p>&quot;config.log&quot; for gcc-5.1.0 shows the following.
<br>
<p>...
<br>
configure:127799: /bin/bash 
<br>
'../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/
<br>
pmix/configure' succeeded for opal/mca/pmix/pmix112/pmix
<br>
configure:127916: checking if MCA component pmix:pmix112 can compile
<br>
configure:127918: result: yes
<br>
configure:5637: --- MCA component pmix:external (m4 configuration macro)
<br>
configure:128523: checking for MCA component pmix:external compile mode
<br>
configure:128529: result: dso
<br>
configure:129054: checking if MCA component pmix:external can compile
<br>
configure:129056: result: no
<br>
...
<br>
config.status:3897: creating opal/mca/pmix/Makefile
<br>
config.status:3897: creating opal/mca/pmix/s1/Makefile
<br>
config.status:3897: creating opal/mca/pmix/cray/Makefile
<br>
config.status:3897: creating opal/mca/pmix/s2/Makefile
<br>
config.status:3897: creating opal/mca/pmix/pmix112/Makefile
<br>
config.status:3897: creating opal/mca/pmix/external/Makefile
<br>
...
<br>
MCA_BUILD_opal_pmix_cray_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_cray_DSO_TRUE=''
<br>
MCA_BUILD_opal_pmix_external_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_external_DSO_TRUE=''
<br>
MCA_BUILD_opal_pmix_pmix112_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_pmix112_DSO_TRUE=''
<br>
MCA_BUILD_opal_pmix_s1_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_s1_DSO_TRUE=''
<br>
MCA_BUILD_opal_pmix_s2_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_s2_DSO_TRUE=''
<br>
...
<br>
MCA_opal_FRAMEWORKS='common  allocator backtrace btl dl event hwloc if 
<br>
installdirs memchecker memcpy memory mpool pmix pstat rcache sec shmem timer'
<br>
MCA_opal_FRAMEWORKS_SUBDIRS='mca/common  mca/allocator mca/backtrace mca/btl 
<br>
mca/dl mca/event mca/hwloc mca/if mca/installdirs mca/memchecker mca/memcpy 
<br>
mca/memory mca/mpool mca/pmix mca/pstat mca/rcache mca/sec mca/shmem mca/timer'
<br>
MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS='$(MCA_opal_common_ALL_SUBDIRS) 
<br>
$(MCA_opal_allocator_ALL_SUBDIRS) $(MCA_opal_backtrace_ALL_SUBDIRS) 
<br>
$(MCA_opal_btl_ALL_SUBDIRS) $(MCA_opal_dl_ALL_SUBDIRS) 
<br>
$(MCA_opal_event_ALL_SUBDIRS) $(MCA_opal_hwloc_ALL_SUBDIRS) 
<br>
$(MCA_opal_if_ALL_SUBDIRS) $(MCA_opal_installdirs_ALL_SUBDIRS) 
<br>
$(MCA_opal_memchecker_ALL_SUBDIRS) $(MCA_opal_memcpy_ALL_SUBDIRS) 
<br>
$(MCA_opal_memory_ALL_SUBDIRS) $(MCA_opal_mpool_ALL_SUBDIRS) 
<br>
$(MCA_opal_pmix_ALL_SUBDIRS) $(MCA_opal_pstat_ALL_SUBDIRS) 
<br>
$(MCA_opal_rcache_ALL_SUBDIRS) $(MCA_opal_sec_ALL_SUBDIRS) 
<br>
$(MCA_opal_shmem_ALL_SUBDIRS) $(MCA_opal_timer_ALL_SUBDIRS)'
<br>
MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS='$(MCA_opal_common_DSO_SUBDIRS) 
<br>
$(MCA_opal_allocator_DSO_SUBDIRS) $(MCA_opal_backtrace_DSO_SUBDIRS) 
<br>
$(MCA_opal_btl_DSO_SUBDIRS) $(MCA_opal_dl_DSO_SUBDIRS) 
<br>
$(MCA_opal_event_DSO_SUBDIRS) $(MCA_opal_hwloc_DSO_SUBDIRS) 
<br>
$(MCA_opal_if_DSO_SUBDIRS) $(MCA_opal_installdirs_DSO_SUBDIRS) 
<br>
$(MCA_opal_memchecker_DSO_SUBDIRS) $(MCA_opal_memcpy_DSO_SUBDIRS) 
<br>
$(MCA_opal_memory_DSO_SUBDIRS) $(MCA_opal_mpool_DSO_SUBDIRS) 
<br>
$(MCA_opal_pmix_DSO_SUBDIRS) $(MCA_opal_pstat_DSO_SUBDIRS) 
<br>
$(MCA_opal_rcache_DSO_SUBDIRS) $(MCA_opal_sec_DSO_SUBDIRS) 
<br>
$(MCA_opal_shmem_DSO_SUBDIRS) $(MCA_opal_timer_DSO_SUBDIRS)'
<br>
MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS='$(MCA_opal_common_STATIC_SUBDIRS) 
<br>
&nbsp;&nbsp;$(MCA_opal_allocator_STATIC_SUBDIRS) $(MCA_opal_backtrace_STATIC_SUBDIRS) 
<br>
$(MCA_opal_btl_STATIC_SUBDIRS) $(MCA_opal_dl_STATIC_SUBDIRS) 
<br>
$(MCA_opal_event_STATIC_SUBDIRS) $(MCA_opal_hwloc_STATIC_SUBDIRS) 
<br>
$(MCA_opal_if_STATIC_SUBDIRS) $(MCA_opal_installdirs_STATIC_SUBDIRS) 
<br>
$(MCA_opal_memchecker_STATIC_SUBDIRS) $(MCA_opal_memcpy_STATIC_SUBDIRS) 
<br>
$(MCA_opal_memory_STATIC_SUBDIRS) $(MCA_opal_mpool_STATIC_SUBDIRS) 
<br>
$(MCA_opal_pmix_STATIC_SUBDIRS) $(MCA_opal_pstat_STATIC_SUBDIRS) 
<br>
$(MCA_opal_rcache_STATIC_SUBDIRS) $(MCA_opal_sec_STATIC_SUBDIRS) 
<br>
$(MCA_opal_shmem_STATIC_SUBDIRS) $(MCA_opal_timer_STATIC_SUBDIRS)'
<br>
MCA_opal_FRAMEWORK_LIBS=' $(MCA_opal_common_STATIC_LTLIBS) 
<br>
mca/allocator/libmca_allocator.la $(MCA_opal_allocator_STATIC_LTLIBS) 
<br>
mca/backtrace/libmca_backtrace.la $(MCA_opal_backtrace_STATIC_LTLIBS) 
<br>
mca/btl/libmca_btl.la $(MCA_opal_btl_STATIC_LTLIBS) mca/dl/libmca_dl.la 
<br>
$(MCA_opal_dl_STATIC_LTLIBS) mca/event/libmca_event.la 
<br>
$(MCA_opal_event_STATIC_LTLIBS) mca/hwloc/libmca_hwloc.la 
<br>
$(MCA_opal_hwloc_STATIC_LTLIBS) mca/if/libmca_if.la 
<br>
$(MCA_opal_if_STATIC_LTLIBS) mca/installdirs/libmca_installdirs.la 
<br>
$(MCA_opal_installdirs_STATIC_LTLIBS) mca/memchecker/libmca_memchecker.la 
<br>
$(MCA_opal_memchecker_STATIC_LTLIBS) mca/memcpy/libmca_memcpy.la 
<br>
$(MCA_opal_memcpy_STATIC_LTLIBS) mca/memory/libmca_memory.la 
<br>
$(MCA_opal_memory_STATIC_LTLIBS) mca/mpool/libmca_mpool.la 
<br>
$(MCA_opal_mpool_STATIC_LTLIBS) mca/pmix/libmca_pmix.la 
<br>
$(MCA_opal_pmix_STATIC_LTLIBS) mca/pstat/libmca_pstat.la 
<br>
$(MCA_opal_pstat_STATIC_LTLIBS) mca/rcache/libmca_rcache.la 
<br>
$(MCA_opal_rcache_STATIC_LTLIBS) mca/sec/libmca_sec.la 
<br>
$(MCA_opal_sec_STATIC_LTLIBS) mca/shmem/libmca_shmem.la 
<br>
$(MCA_opal_shmem_STATIC_LTLIBS) mca/timer/libmca_timer.la 
<br>
$(MCA_opal_timer_STATIC_LTLIBS)'
<br>
...
<br>
MCA_opal_pmix_ALL_COMPONENTS=' s1 cray s2 pmix112 external'
<br>
MCA_opal_pmix_ALL_SUBDIRS=' mca/pmix/s1 mca/pmix/cray mca/pmix/s2 
<br>
mca/pmix/pmix112 mca/pmix/external'
<br>
MCA_opal_pmix_DSO_COMPONENTS=' pmix112'
<br>
MCA_opal_pmix_DSO_SUBDIRS=' mca/pmix/pmix112'
<br>
MCA_opal_pmix_STATIC_COMPONENTS=''
<br>
MCA_opal_pmix_STATIC_LTLIBS=''
<br>
MCA_opal_pmix_STATIC_SUBDIRS=''
<br>
...
<br>
opal_pmix_ext_CPPFLAGS=''
<br>
opal_pmix_ext_LDFLAGS=''
<br>
opal_pmix_ext_LIBS=''
<br>
opal_pmix_pmix112_CPPFLAGS='-I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/include/pmix 
<br>
-I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/include 
<br>
-I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix 
<br>
-I$(OPAL_TOP_SRCDIR)/opal/mca/pmix/pmix112/pmix'
<br>
opal_pmix_pmix112_LIBS='$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/libpmix.la'
<br>
...
<br>
<p><p><p>&quot;config.log&quot; for Sun C 5.13 shows the following.
<br>
<p>...
<br>
configure:127803: /bin/bash 
<br>
'../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/
<br>
pmix/configure' *failed* for opal/mca/pmix/pmix112/pmix
<br>
configure:128379: checking if MCA component pmix:pmix112 can compile
<br>
configure:128381: result: no
<br>
configure:5637: --- MCA component pmix:external (m4 configuration macro)
<br>
configure:128523: checking for MCA component pmix:external compile mode
<br>
configure:128529: result: dso
<br>
configure:129054: checking if MCA component pmix:external can compile
<br>
configure:129056: result: no
<br>
...
<br>
config.status:3887: creating opal/mca/pmix/Makefile
<br>
config.status:3887: creating opal/mca/pmix/s1/Makefile
<br>
config.status:3887: creating opal/mca/pmix/cray/Makefile
<br>
config.status:3887: creating opal/mca/pmix/s2/Makefile
<br>
config.status:3887: creating opal/mca/pmix/pmix112/Makefile
<br>
config.status:3887: creating opal/mca/pmix/external/Makefile
<br>
...
<br>
MCA_BUILD_opal_pmix_cray_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_cray_DSO_TRUE=''
<br>
MCA_BUILD_opal_pmix_external_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_external_DSO_TRUE=''
<br>
MCA_BUILD_opal_pmix_pmix112_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_pmix112_DSO_TRUE=''
<br>
MCA_BUILD_opal_pmix_s1_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_s1_DSO_TRUE=''
<br>
MCA_BUILD_opal_pmix_s2_DSO_FALSE='#'
<br>
MCA_BUILD_opal_pmix_s2_DSO_TRUE=''
<br>
...
<br>
MCA_opal_FRAMEWORKS='common  allocator backtrace btl dl event hwloc if 
<br>
installdirs memchecker memcpy memory mpool pmix pstat rcache sec shmem timer'
<br>
MCA_opal_FRAMEWORKS_SUBDIRS='mca/common  mca/allocator mca/backtrace mca/btl 
<br>
mca/dl mca/event mca/hwloc mca/if mca/installdirs mca/memchecker mca/memcpy 
<br>
mca/memory mca/mpool mca/pmix mca/pstat mca/rcache mca/sec mca/shmem mca/timer'
<br>
MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS='$(MCA_opal_common_ALL_SUBDIRS) 
<br>
$(MCA_opal_allocator_ALL_SUBDIRS) $(MCA_opal_backtrace_ALL_SUBDIRS) 
<br>
$(MCA_opal_btl_ALL_SUBDIRS) $(MCA_opal_dl_ALL_SUBDIRS) 
<br>
$(MCA_opal_event_ALL_SUBDIRS) $(MCA_opal_hwloc_ALL_SUBDIRS) 
<br>
$(MCA_opal_if_ALL_SUBDIRS) $(MCA_opal_installdirs_ALL_SUBDIRS) 
<br>
$(MCA_opal_memchecker_ALL_SUBDIRS) $(MCA_opal_memcpy_ALL_SUBDIRS) 
<br>
$(MCA_opal_memory_ALL_SUBDIRS) $(MCA_opal_mpool_ALL_SUBDIRS) 
<br>
$(MCA_opal_pmix_ALL_SUBDIRS) $(MCA_opal_pstat_ALL_SUBDIRS) 
<br>
$(MCA_opal_rcache_ALL_SUBDIRS) $(MCA_opal_sec_ALL_SUBDIRS) 
<br>
$(MCA_opal_shmem_ALL_SUBDIRS) $(MCA_opal_timer_ALL_SUBDIRS)'
<br>
MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS='$(MCA_opal_common_DSO_SUBDIRS) 
<br>
$(MCA_opal_allocator_DSO_SUBDIRS) $(MCA_opal_backtrace_DSO_SUBDIRS) 
<br>
$(MCA_opal_btl_DSO_SUBDIRS) $(MCA_opal_dl_DSO_SUBDIRS) 
<br>
$(MCA_opal_event_DSO_SUBDIRS) $(MCA_opal_hwloc_DSO_SUBDIRS) 
<br>
$(MCA_opal_if_DSO_SUBDIRS) $(MCA_opal_installdirs_DSO_SUBDIRS) 
<br>
$(MCA_opal_memchecker_DSO_SUBDIRS) $(MCA_opal_memcpy_DSO_SUBDIRS) 
<br>
$(MCA_opal_memory_DSO_SUBDIRS) $(MCA_opal_mpool_DSO_SUBDIRS) 
<br>
$(MCA_opal_pmix_DSO_SUBDIRS) $(MCA_opal_pstat_DSO_SUBDIRS) 
<br>
$(MCA_opal_rcache_DSO_SUBDIRS) $(MCA_opal_sec_DSO_SUBDIRS) 
<br>
$(MCA_opal_shmem_DSO_SUBDIRS) $(MCA_opal_timer_DSO_SUBDIRS)'
<br>
MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS='$(MCA_opal_common_STATIC_SUBDIRS) 
<br>
&nbsp;&nbsp;$(MCA_opal_allocator_STATIC_SUBDIRS) $(MCA_opal_backtrace_STATIC_SUBDIRS) 
<br>
$(MCA_opal_btl_STATIC_SUBDIRS) $(MCA_opal_dl_STATIC_SUBDIRS) 
<br>
$(MCA_opal_event_STATIC_SUBDIRS) $(MCA_opal_hwloc_STATIC_SUBDIRS) 
<br>
$(MCA_opal_if_STATIC_SUBDIRS) $(MCA_opal_installdirs_STATIC_SUBDIRS) 
<br>
$(MCA_opal_memchecker_STATIC_SUBDIRS) $(MCA_opal_memcpy_STATIC_SUBDIRS) 
<br>
$(MCA_opal_memory_STATIC_SUBDIRS) $(MCA_opal_mpool_STATIC_SUBDIRS) 
<br>
$(MCA_opal_pmix_STATIC_SUBDIRS) $(MCA_opal_pstat_STATIC_SUBDIRS) 
<br>
$(MCA_opal_rcache_STATIC_SUBDIRS) $(MCA_opal_sec_STATIC_SUBDIRS) 
<br>
$(MCA_opal_shmem_STATIC_SUBDIRS) $(MCA_opal_timer_STATIC_SUBDIRS)'
<br>
MCA_opal_FRAMEWORK_LIBS=' $(MCA_opal_common_STATIC_LTLIBS) 
<br>
mca/allocator/libmca_allocator.la $(MCA_opal_allocator_STATIC_LTLIBS) 
<br>
mca/backtrace/libmca_backtrace.la $(MCA_opal_backtrace_STATIC_LTLIBS) 
<br>
mca/btl/libmca_btl.la $(MCA_opal_btl_STATIC_LTLIBS) mca/dl/libmca_dl.la 
<br>
$(MCA_opal_dl_STATIC_LTLIBS) mca/event/libmca_event.la 
<br>
$(MCA_opal_event_STATIC_LTLIBS) mca/hwloc/libmca_hwloc.la 
<br>
$(MCA_opal_hwloc_STATIC_LTLIBS) mca/if/libmca_if.la 
<br>
$(MCA_opal_if_STATIC_LTLIBS) mca/installdirs/libmca_installdirs.la 
<br>
$(MCA_opal_installdirs_STATIC_LTLIBS) mca/memchecker/libmca_memchecker.la 
<br>
$(MCA_opal_memchecker_STATIC_LTLIBS) mca/memcpy/libmca_memcpy.la 
<br>
$(MCA_opal_memcpy_STATIC_LTLIBS) mca/memory/libmca_memory.la 
<br>
$(MCA_opal_memory_STATIC_LTLIBS) mca/mpool/libmca_mpool.la 
<br>
$(MCA_opal_mpool_STATIC_LTLIBS) mca/pmix/libmca_pmix.la 
<br>
$(MCA_opal_pmix_STATIC_LTLIBS) mca/pstat/libmca_pstat.la 
<br>
$(MCA_opal_pstat_STATIC_LTLIBS) mca/rcache/libmca_rcache.la 
<br>
$(MCA_opal_rcache_STATIC_LTLIBS) mca/sec/libmca_sec.la 
<br>
$(MCA_opal_sec_STATIC_LTLIBS) mca/shmem/libmca_shmem.la 
<br>
$(MCA_opal_shmem_STATIC_LTLIBS) mca/timer/libmca_timer.la 
<br>
$(MCA_opal_timer_STATIC_LTLIBS)'
<br>
...
<br>
MCA_opal_pmix_ALL_COMPONENTS=' s1 cray s2 pmix112 external'
<br>
MCA_opal_pmix_ALL_SUBDIRS=' mca/pmix/s1 mca/pmix/cray mca/pmix/s2 
<br>
mca/pmix/pmix112 mca/pmix/external'
<br>
MCA_opal_pmix_DSO_COMPONENTS=''
<br>
MCA_opal_pmix_DSO_SUBDIRS=''
<br>
MCA_opal_pmix_STATIC_COMPONENTS=''
<br>
MCA_opal_pmix_STATIC_LTLIBS=''
<br>
MCA_opal_pmix_STATIC_SUBDIRS=''
<br>
...
<br>
opal_pmix_ext_CPPFLAGS=''
<br>
opal_pmix_ext_LDFLAGS=''
<br>
opal_pmix_ext_LIBS=''
<br>
opal_pmix_pmix112_CPPFLAGS=''
<br>
opal_pmix_pmix112_LIBS=''
<br>
...
<br>
<p><p><p><p>I've attached the config.log files for pmix.
<br>
<p>tyr openmpi-2.0.0 142 tar zvft pmix_config.log.tar.gz
<br>
-rw-r--r-- root/root    136291 2016-04-25 08:05:34 
<br>
openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/pmix/pmix112/pmix/config.log
<br>
-rw-r--r-- root/root    528808 2016-04-25 08:07:54 
<br>
openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_gcc/opal/mca/pmix/pmix112/pmix/config.log
<br>
tyr openmpi-2.0.0 143
<br>
<p><p><p>I've also attached the output for the broken execution of
<br>
&quot;spawn_multiple_master&quot; for my gcc-version of Open MPI.
<br>
&quot;spawn_master&quot; works as expected with my gcc-version of Open MPI.
<br>
<p>Hopefully you can fix the problem.
<br>
<p><p>Kind regards and thank you very much for your help
<br>
<p>Siegmar
<br>
<p><p><p>Am 23.04.2016 um 21:34 schrieb Siegmar Gross:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what happened, but the files are not available now
</span><br>
<span class="quotelev1">&gt; and they were definitely available when I answered the email from
</span><br>
<span class="quotelev1">&gt; Ralph. The files also have a different timestamp now. This is an
</span><br>
<span class="quotelev1">&gt; extract from my email to Ralph for Solaris Sparc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root     977 Apr 19 19:49 mca_plm_rsh.la
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root  153280 Apr 19 19:49 mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root    1007 Apr 19 19:47 mca_pmix_pmix112.la
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root 1400512 Apr 19 19:47 mca_pmix_pmix112.so
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root     971 Apr 19 19:52 mca_pml_cm.la
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root  342440 Apr 19 19:52 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I have the following output for these files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root     976 Apr 19 19:58 mca_plm_rsh.la
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root  319816 Apr 19 19:58 mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root     970 Apr 19 20:00 mca_pml_cm.la
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 root root 1507440 Apr 19 20:00 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to find out what happened next week when I'm back in
</span><br>
<span class="quotelev1">&gt; my office.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 23.04.16 um 02:12 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will try to reproduce this on my solaris11 x86_64 vm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the mean time, can you please double check mca_pmix_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt; is a 64 bits library ?
</span><br>
<span class="quotelev2">&gt;&gt; (E.g, confirm &quot;-m64&quot; was correctly passed to pmix)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday, April 22, 2016, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt; &lt;siegmar.gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:siegmar.gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I've already used &quot;-enable-debug&quot;. &quot;SYSTEM_ENV&quot; is &quot;SunOS&quot; or
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Linux&quot; and &quot;MACHINE_ENV&quot; is &quot;sparc&quot; or &quot;x86_84&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mkdir openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;     cd openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ../openmpi-v2.x-dev-1280-gc110ae8/configure \
</span><br>
<span class="quotelev2">&gt;&gt;       --prefix=/usr/local/openmpi-2.0.0_64_gcc \
</span><br>
<span class="quotelev2">&gt;&gt;       --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev2">&gt;&gt;       JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev2">&gt;&gt;       LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;       --without-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;       |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mkdir openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;     cd openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ../openmpi-v2.x-dev-1280-gc110ae8/configure \
</span><br>
<span class="quotelev2">&gt;&gt;       --prefix=/usr/local/openmpi-2.0.0_64_cc \
</span><br>
<span class="quotelev2">&gt;&gt;       --libdir=/usr/local/openmpi-2.0.0_64_cc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev2">&gt;&gt;       JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev2">&gt;&gt;       LDFLAGS=&quot;-m64&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;       --without-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-wrapper-cflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       --with-wrapper-ldflags=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;       |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Am 21.04.2016 um 18:18 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Can you please rebuild OMPI with -enable-debug in the configure
</span><br>
<span class="quotelev2">&gt;&gt;         cmd? It will let us see more error output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Apr 21, 2016, at 8:52 AM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I don't see any additional information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             tyr hello_1 108 mpiexec -np 4 --host
</span><br>
<span class="quotelev2">&gt;&gt;             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt;             mca_base_component_show_load_errors 1 hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt;             [tyr.informatik.hs-fulda.de:06211
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06211">http://tyr.informatik.hs-fulda.de:06211</a>&gt;] [[48741,0],0]
</span><br>
<span class="quotelev2">&gt;&gt;             ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;             at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;             It looks like orte_init failed for some reason; your
</span><br>
<span class="quotelev2">&gt;&gt;             parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;             likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev2">&gt;&gt;             process can
</span><br>
<span class="quotelev2">&gt;&gt;             fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;             environment problems.  This failure appears to be an
</span><br>
<span class="quotelev2">&gt;&gt;             internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;             here's some additional information (which may only be
</span><br>
<span class="quotelev2">&gt;&gt;             relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;             Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;              --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             tyr hello_1 109 mpiexec -np 4 --host
</span><br>
<span class="quotelev2">&gt;&gt;             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt;             mca_base_component_show_load_errors 1 -mca pmix_base_verbose
</span><br>
<span class="quotelev2">&gt;&gt;             10 -mca pmix_server_verbose 5 hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt;             components_register: registering framework pmix components
</span><br>
<span class="quotelev2">&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt;             components_open: opening pmix components
</span><br>
<span class="quotelev2">&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca:base:select:
</span><br>
<span class="quotelev2">&gt;&gt;             Auto-selecting pmix components
</span><br>
<span class="quotelev2">&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca:base:select:(
</span><br>
<span class="quotelev2">&gt;&gt;             pmix) No component selected!
</span><br>
<span class="quotelev2">&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] [[48738,0],0]
</span><br>
<span class="quotelev2">&gt;&gt;             ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;             at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;             It looks like orte_init failed for some reason; your
</span><br>
<span class="quotelev2">&gt;&gt;             parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;             likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev2">&gt;&gt;             process can
</span><br>
<span class="quotelev2">&gt;&gt;             fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;             environment problems.  This failure appears to be an
</span><br>
<span class="quotelev2">&gt;&gt;             internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;             here's some additional information (which may only be
</span><br>
<span class="quotelev2">&gt;&gt;             relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;             Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;              --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;             tyr hello_1 110
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Am 21.04.2016 um 17:24 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Hmmm&#133;it looks like you built the right components, but
</span><br>
<span class="quotelev2">&gt;&gt;                 they are not being picked up. Can you run your mpiexec
</span><br>
<span class="quotelev2">&gt;&gt;                 command again, adding &#147;-mca
</span><br>
<span class="quotelev2">&gt;&gt;                 mca_base_component_show_load_errors 1&#148; to the cmd line?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     On Apr 21, 2016, at 8:16 AM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     I have attached ompi_info output for both compilers
</span><br>
<span class="quotelev2">&gt;&gt;                     from my
</span><br>
<span class="quotelev2">&gt;&gt;                     sparc machine and the listings for both compilers
</span><br>
<span class="quotelev2">&gt;&gt;                     from the
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;prefix&gt;/lib/openmpi directories. Hopefully that
</span><br>
<span class="quotelev2">&gt;&gt;                     helps to
</span><br>
<span class="quotelev2">&gt;&gt;                     find the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     hermes tmp 3 tar zvft openmpi-2.x_info.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;                     -rw-r--r-- root/root     10969 2016-04-21 17:06
</span><br>
<span class="quotelev2">&gt;&gt;                     ompi_info_SunOS_sparc_cc.txt
</span><br>
<span class="quotelev2">&gt;&gt;                     -rw-r--r-- root/root     11044 2016-04-21 17:06
</span><br>
<span class="quotelev2">&gt;&gt;                     ompi_info_SunOS_sparc_gcc.txt
</span><br>
<span class="quotelev2">&gt;&gt;                     -rw-r--r-- root/root     71252 2016-04-21 17:02
</span><br>
<span class="quotelev2">&gt;&gt;                     lib64_openmpi.txt
</span><br>
<span class="quotelev2">&gt;&gt;                     hermes tmp 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Kind regards and thank you very much once more for
</span><br>
<span class="quotelev2">&gt;&gt;                     your help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Am 21.04.2016 um 15:54 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Odd - it would appear that none of the pmix
</span><br>
<span class="quotelev2">&gt;&gt;                         components built? Can you send
</span><br>
<span class="quotelev2">&gt;&gt;                         along the output from ompi_info? Or just send a
</span><br>
<span class="quotelev2">&gt;&gt;                         listing of the files in the
</span><br>
<span class="quotelev2">&gt;&gt;                         &lt;prefix&gt;/lib/openmpi directory?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             On Apr 21, 2016, at 1:27 AM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             Am 21.04.2016 um 00:18 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 Could you please rerun these test and
</span><br>
<span class="quotelev2">&gt;&gt;                                 add &#147;-mca pmix_base_verbose 10
</span><br>
<span class="quotelev2">&gt;&gt;                                 -mca pmix_server_verbose 5&#148; to your cmd
</span><br>
<span class="quotelev2">&gt;&gt;                                 line? I need to see why the
</span><br>
<span class="quotelev2">&gt;&gt;                                 pmix components failed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             tyr spawn 111 mpiexec -np 1 --host
</span><br>
<span class="quotelev2">&gt;&gt;                             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt;                             pmix_base_verbose 10 -mca
</span><br>
<span class="quotelev2">&gt;&gt;                             pmix_server_verbose 5 spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev2">&gt;&gt;                             base: components_register: registering
</span><br>
<span class="quotelev2">&gt;&gt;                             framework pmix components
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev2">&gt;&gt;                             base: components_open: opening pmix components
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev2">&gt;&gt;                             mca:base:select: Auto-selecting pmix components
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev2">&gt;&gt;                             mca:base:select:( pmix) No component selected!
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev2">&gt;&gt;                             [[52794,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;                             at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                             It looks like orte_init failed for some
</span><br>
<span class="quotelev2">&gt;&gt;                             reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;                             likely to abort.  There are many reasons
</span><br>
<span class="quotelev2">&gt;&gt;                             that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;                             fail during orte_init; some of which are due
</span><br>
<span class="quotelev2">&gt;&gt;                             to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;                             environment problems.  This failure appears
</span><br>
<span class="quotelev2">&gt;&gt;                             to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;                             here's some additional information (which
</span><br>
<span class="quotelev2">&gt;&gt;                             may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;                             Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;                             --&gt; Returned value Not found (-13) instead
</span><br>
<span class="quotelev2">&gt;&gt;                             of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                             tyr spawn 112
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             tyr hello_1 116 mpiexec -np 1 --host
</span><br>
<span class="quotelev2">&gt;&gt;                             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev2">&gt;&gt;                             pmix_base_verbose 10 -mca
</span><br>
<span class="quotelev2">&gt;&gt;                             pmix_server_verbose 5 hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev2">&gt;&gt;                             base: components_register: registering
</span><br>
<span class="quotelev2">&gt;&gt;                             framework pmix components
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev2">&gt;&gt;                             base: components_open: opening pmix components
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev2">&gt;&gt;                             mca:base:select: Auto-selecting pmix components
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev2">&gt;&gt;                             mca:base:select:( pmix) No component selected!
</span><br>
<span class="quotelev2">&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev2">&gt;&gt;                             [[52315,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;                             at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                             It looks like orte_init failed for some
</span><br>
<span class="quotelev2">&gt;&gt;                             reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;                             likely to abort.  There are many reasons
</span><br>
<span class="quotelev2">&gt;&gt;                             that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;                             fail during orte_init; some of which are due
</span><br>
<span class="quotelev2">&gt;&gt;                             to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;                             environment problems.  This failure appears
</span><br>
<span class="quotelev2">&gt;&gt;                             to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;                             here's some additional information (which
</span><br>
<span class="quotelev2">&gt;&gt;                             may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;                             Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;                             --&gt; Returned value Not found (-13) instead
</span><br>
<span class="quotelev2">&gt;&gt;                             of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                             tyr hello_1 117
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             Thank you very much for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 Thanks
</span><br>
<span class="quotelev2">&gt;&gt;                                 Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     On Apr 20, 2016, at 10:12 AM,
</span><br>
<span class="quotelev2">&gt;&gt;                                     Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt;                                     &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     I have built
</span><br>
<span class="quotelev2">&gt;&gt;                                     openmpi-v2.x-dev-1280-gc110ae8 on my
</span><br>
<span class="quotelev2">&gt;&gt;                                     machines
</span><br>
<span class="quotelev2">&gt;&gt;                                     (Solaris 10 Sparc, Solaris 10
</span><br>
<span class="quotelev2">&gt;&gt;                                     x86_64, and openSUSE Linux
</span><br>
<span class="quotelev2">&gt;&gt;                                     12.1 x86_64) with gcc-5.1.0 and Sun
</span><br>
<span class="quotelev2">&gt;&gt;                                     C 5.13. Unfortunately I get
</span><br>
<span class="quotelev2">&gt;&gt;                                     runtime errors for some programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     Sun C 5.13:
</span><br>
<span class="quotelev2">&gt;&gt;                                     ===========
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     For all my test programs I get the
</span><br>
<span class="quotelev2">&gt;&gt;                                     same error on Solaris Sparc and
</span><br>
<span class="quotelev2">&gt;&gt;                                     Solaris x86_64, while the programs
</span><br>
<span class="quotelev2">&gt;&gt;                                     work fine on Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     tyr hello_1 115 mpiexec -np 2
</span><br>
<span class="quotelev2">&gt;&gt;                                     hello_1_mpi
</span><br>
<span class="quotelev2">&gt;&gt;                                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:22373]
</span><br>
<span class="quotelev2">&gt;&gt;                                     [[61763,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt;&gt;                                     found in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;                                     at line 638
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                     It looks like orte_init failed for
</span><br>
<span class="quotelev2">&gt;&gt;                                     some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;                                     likely to abort.  There are many
</span><br>
<span class="quotelev2">&gt;&gt;                                     reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;                                     fail during orte_init; some of which
</span><br>
<span class="quotelev2">&gt;&gt;                                     are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;                                     environment problems.  This failure
</span><br>
<span class="quotelev2">&gt;&gt;                                     appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;                                     here's some additional information
</span><br>
<span class="quotelev2">&gt;&gt;                                     (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;                                     Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     opal_pmix_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;                                     --&gt; Returned value Not found (-13)
</span><br>
<span class="quotelev2">&gt;&gt;                                     instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                     tyr hello_1 116
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     GCC-5.1.0:
</span><br>
<span class="quotelev2">&gt;&gt;                                     ==========
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     tyr spawn 121 mpiexec -np 1 --host
</span><br>
<span class="quotelev2">&gt;&gt;                                     tyr,sunpc1,linpc1,ruester
</span><br>
<span class="quotelev2">&gt;&gt;                                     spawn_multiple_master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     Parent process 0 running on
</span><br>
<span class="quotelev2">&gt;&gt;                                     tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     I create 3 slave processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev2">&gt;&gt;                                     PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     at line 829
</span><br>
<span class="quotelev2">&gt;&gt;                                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev2">&gt;&gt;                                     PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     at line 2176
</span><br>
<span class="quotelev2">&gt;&gt;                                     [tyr:25377] *** An error occurred in
</span><br>
<span class="quotelev2">&gt;&gt;                                     MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt;                                     [tyr:25377] *** reported by process
</span><br>
<span class="quotelev2">&gt;&gt;                                     [3308257281,0]
</span><br>
<span class="quotelev2">&gt;&gt;                                     [tyr:25377] *** on communicator
</span><br>
<span class="quotelev2">&gt;&gt;                                     MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;                                     [tyr:25377] *** MPI_ERR_SPAWN: could
</span><br>
<span class="quotelev2">&gt;&gt;                                     not spawn processes
</span><br>
<span class="quotelev2">&gt;&gt;                                     [tyr:25377] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev2">&gt;&gt;                                     (processes in this communicator will
</span><br>
<span class="quotelev2">&gt;&gt;                                     now abort,
</span><br>
<span class="quotelev2">&gt;&gt;                                     [tyr:25377] ***    and potentially
</span><br>
<span class="quotelev2">&gt;&gt;                                     your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt;                                     tyr spawn 122
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     I would be grateful if somebody can
</span><br>
<span class="quotelev2">&gt;&gt;                                     fix the problems. Thank you very
</span><br>
<span class="quotelev2">&gt;&gt;                                     much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hello_1_mpi.c&gt;&lt;spawn_multiple_master.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                                     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                     Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                                     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28983.php">http://www.open-mpi.org/community/lists/users/2016/04/28983.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                                 Link to this
</span><br>
<span class="quotelev2">&gt;&gt;                                 post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28986.php">http://www.open-mpi.org/community/lists/users/2016/04/28986.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                             Link to this
</span><br>
<span class="quotelev2">&gt;&gt;                             post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28987.php">http://www.open-mpi.org/community/lists/users/2016/04/28987.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                         Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28988.php">http://www.open-mpi.org/community/lists/users/2016/04/28988.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi-2.x_info.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                     Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28989.php">http://www.open-mpi.org/community/lists/users/2016/04/28989.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2016/04/28990.php">http://www.open-mpi.org/community/lists/users/2016/04/28990.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2016/04/28991.php">http://www.open-mpi.org/community/lists/users/2016/04/28991.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/04/28992.php">http://www.open-mpi.org/community/lists/users/2016/04/28992.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/04/28993.php">http://www.open-mpi.org/community/lists/users/2016/04/28993.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28999.php">http://www.open-mpi.org/community/lists/users/2016/04/28999.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29009.php">http://www.open-mpi.org/community/lists/users/2016/04/29009.php</a>
</span><br>
<p>

<br><hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29033/pmix_config.log.tar.gz">pmix_config.log.tar.gz</a>
</ul>
<!-- attachment="pmix_config.log.tar.gz" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29033/pmix_error_gcc.txt">pmix_error_gcc.txt</a>
</ul>
<!-- attachment="pmix_error_gcc.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29034.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Previous message:</strong> <a href="29032.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29009.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
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
