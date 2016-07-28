<?
$subject_val = "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 06:40:22 2016" -->
<!-- isoreceived="20160427104022" -->
<!-- sent="Wed, 27 Apr 2016 12:38:48 +0200" -->
<!-- isosent="20160427103848" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8" -->
<!-- id="933ba2d9-1ff0-f528-c2f4-a33f5525d501_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3068d1f0-391b-26c8-a57e-f60cd2ce9f1b_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-04-27 06:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29040.php">Gilles Gouaillardet: "[OMPI users]  runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29040.php">Gilles Gouaillardet: "[OMPI users]  runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29040.php">Gilles Gouaillardet: "[OMPI users]  runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>adding &quot;-std=c99&quot; to CFLAGS solves the problem with the missing library.
<br>
Shall I add it permanently to my configure command or will you add it,
<br>
so that I will not run into problems if you need the C11 standard later?
<br>
<p>&quot;spawn_multiple_master&quot; breaks with the same error that I reported
<br>
yesterday for my gcc-version of Open MPI. Hopefully you can solve the
<br>
problem as well.
<br>
<p><p>Kind regards and thank you very much for your help
<br>
<p>Siegmar
<br>
<p><p>Am 27.04.2016 um 08:05 schrieb Gilles Gouaillardet:
<br>
<span class="quotelev1">&gt; Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is the error :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:17969: cc -o conftest -m64 -D_REENTRANT -g  -g
</span><br>
<span class="quotelev1">&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1
</span><br>
<span class="quotelev1">&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc
</span><br>
<span class="quotelev1">&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/include
</span><br>
<span class="quotelev1">&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/include
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/stdbool.h&quot;, line 42: #error: &quot;Use of &lt;stdbool.h&gt; is valid only
</span><br>
<span class="quotelev1">&gt; in a c99 compilation environment.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i cannot reproduce this on solaris 11 with oracle studio 5.3 compiler, and i
</span><br>
<span class="quotelev1">&gt; do not have solaris 10 yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please re-configure with '-std=c99' appended to your CFLAGS and see
</span><br>
<span class="quotelev1">&gt; if it helps ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/26/2016 7:57 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles and Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was able to sort out my mess. In my last email I compared the
</span><br>
<span class="quotelev2">&gt;&gt; files from &quot;SunOS_sparc/openmpi-2.0.0_64_gcc/lib64/openmpi&quot; from
</span><br>
<span class="quotelev2">&gt;&gt; the attachment of my email to Ralph with the files from
</span><br>
<span class="quotelev2">&gt;&gt; &quot;SunOS_sparc/openmpi-2.0.0_64_cc/lib64/openmpi&quot; from my current
</span><br>
<span class="quotelev2">&gt;&gt; file system. That's the reason while I have had different
</span><br>
<span class="quotelev2">&gt;&gt; timestamps. The other problem was that Ralph didn't recognize
</span><br>
<span class="quotelev2">&gt;&gt; that &quot;mca_pmix_pmix112.so&quot; wasn't built on Solaris with the
</span><br>
<span class="quotelev2">&gt;&gt; Sun C compiler. I've removed most of the files from the attachment
</span><br>
<span class="quotelev2">&gt;&gt; of my email so that it is easier to see the relevant files. Below
</span><br>
<span class="quotelev2">&gt;&gt; I try to give you more information that may be relevant to track
</span><br>
<span class="quotelev2">&gt;&gt; down the problem. I still get an error running one of my small
</span><br>
<span class="quotelev2">&gt;&gt; test programs, when I use my gcc-version of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_pmix_pmix112.so&quot; is a 64 bits library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux_x86_64/openmpi-2.0.0_64_cc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  261327 Apr 19 16:46 mca_plm_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root    1002 Apr 19 16:45 mca_pmix_pmix112.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root 3906526 Apr 19 16:45 mca_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root     966 Apr 19 16:51 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root 1574265 Apr 19 16:51 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux_x86_64/openmpi-2.0.0_64_gcc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root   70371 Apr 19 16:43 mca_plm_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root    1008 Apr 19 16:42 mca_pmix_pmix112.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root 1029005 Apr 19 16:42 mca_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root     972 Apr 19 16:46 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  284858 Apr 19 16:46 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SunOS_sparc/openmpi-2.0.0_64_cc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  319816 Apr 19 19:58 mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root     970 Apr 19 20:00 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root 1507440 Apr 19 20:00 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SunOS_sparc/openmpi-2.0.0_64_gcc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  153280 Apr 19 19:49 mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root    1007 Apr 19 19:47 mca_pmix_pmix112.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root 1400512 Apr 19 19:47 mca_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root     971 Apr 19 19:52 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  342440 Apr 19 19:52 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  300096 Apr 19 17:18 mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root     970 Apr 19 17:23 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root 1458816 Apr 19 17:23 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SunOS_x86_64/openmpi-2.0.0_64_gcc/lib64/openmpi:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  133096 Apr 19 17:42 mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root    1007 Apr 19 17:41 mca_pmix_pmix112.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root 1320240 Apr 19 17:41 mca_pmix_pmix112.so
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root     971 Apr 19 17:46 mca_pml_cm.la
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  419848 Apr 19 17:46 mca_pml_cm.so
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yesterday I've installed openmpi-v2.x-dev-1290-gbd0e4e1 so that we
</span><br>
<span class="quotelev2">&gt;&gt; have a current version for the investigation of the problem. Once
</span><br>
<span class="quotelev2">&gt;&gt; more mca_pmix_pmix112.so isn't available on Solaris if I use the
</span><br>
<span class="quotelev2">&gt;&gt; Sun C compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;config.log&quot; for gcc-5.1.0 shows the following.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; configure:127799: /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; '../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/
</span><br>
<span class="quotelev2">&gt;&gt; pmix/configure' succeeded for opal/mca/pmix/pmix112/pmix
</span><br>
<span class="quotelev2">&gt;&gt; configure:127916: checking if MCA component pmix:pmix112 can compile
</span><br>
<span class="quotelev2">&gt;&gt; configure:127918: result: yes
</span><br>
<span class="quotelev2">&gt;&gt; configure:5637: --- MCA component pmix:external (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt; configure:128523: checking for MCA component pmix:external compile mode
</span><br>
<span class="quotelev2">&gt;&gt; configure:128529: result: dso
</span><br>
<span class="quotelev2">&gt;&gt; configure:129054: checking if MCA component pmix:external can compile
</span><br>
<span class="quotelev2">&gt;&gt; configure:129056: result: no
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3897: creating opal/mca/pmix/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3897: creating opal/mca/pmix/s1/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3897: creating opal/mca/pmix/cray/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3897: creating opal/mca/pmix/s2/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3897: creating opal/mca/pmix/pmix112/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3897: creating opal/mca/pmix/external/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_cray_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_cray_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_external_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_external_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_pmix112_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_pmix112_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_s1_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_s1_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_s2_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_s2_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORKS='common  allocator backtrace btl dl event hwloc if
</span><br>
<span class="quotelev2">&gt;&gt; installdirs memchecker memcpy memory mpool pmix pstat rcache sec shmem timer'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORKS_SUBDIRS='mca/common  mca/allocator mca/backtrace mca/btl
</span><br>
<span class="quotelev2">&gt;&gt; mca/dl mca/event mca/hwloc mca/if mca/installdirs mca/memchecker mca/memcpy
</span><br>
<span class="quotelev2">&gt;&gt; mca/memory mca/mpool mca/pmix mca/pstat mca/rcache mca/sec mca/shmem mca/timer'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS='$(MCA_opal_common_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_allocator_ALL_SUBDIRS) $(MCA_opal_backtrace_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_btl_ALL_SUBDIRS) $(MCA_opal_dl_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_event_ALL_SUBDIRS) $(MCA_opal_hwloc_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_if_ALL_SUBDIRS) $(MCA_opal_installdirs_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memchecker_ALL_SUBDIRS) $(MCA_opal_memcpy_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memory_ALL_SUBDIRS) $(MCA_opal_mpool_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pmix_ALL_SUBDIRS) $(MCA_opal_pstat_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_rcache_ALL_SUBDIRS) $(MCA_opal_sec_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_shmem_ALL_SUBDIRS) $(MCA_opal_timer_ALL_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS='$(MCA_opal_common_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_allocator_DSO_SUBDIRS) $(MCA_opal_backtrace_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_btl_DSO_SUBDIRS) $(MCA_opal_dl_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_event_DSO_SUBDIRS) $(MCA_opal_hwloc_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_if_DSO_SUBDIRS) $(MCA_opal_installdirs_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memchecker_DSO_SUBDIRS) $(MCA_opal_memcpy_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memory_DSO_SUBDIRS) $(MCA_opal_mpool_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pmix_DSO_SUBDIRS) $(MCA_opal_pstat_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_rcache_DSO_SUBDIRS) $(MCA_opal_sec_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_shmem_DSO_SUBDIRS) $(MCA_opal_timer_DSO_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS='$(MCA_opal_common_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;  $(MCA_opal_allocator_STATIC_SUBDIRS) $(MCA_opal_backtrace_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_btl_STATIC_SUBDIRS) $(MCA_opal_dl_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_event_STATIC_SUBDIRS) $(MCA_opal_hwloc_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_if_STATIC_SUBDIRS) $(MCA_opal_installdirs_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memchecker_STATIC_SUBDIRS) $(MCA_opal_memcpy_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memory_STATIC_SUBDIRS) $(MCA_opal_mpool_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pmix_STATIC_SUBDIRS) $(MCA_opal_pstat_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_rcache_STATIC_SUBDIRS) $(MCA_opal_sec_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_shmem_STATIC_SUBDIRS) $(MCA_opal_timer_STATIC_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_LIBS=' $(MCA_opal_common_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt; mca/allocator/libmca_allocator.la $(MCA_opal_allocator_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt; mca/backtrace/libmca_backtrace.la $(MCA_opal_backtrace_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt; mca/btl/libmca_btl.la $(MCA_opal_btl_STATIC_LTLIBS) mca/dl/libmca_dl.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_dl_STATIC_LTLIBS) mca/event/libmca_event.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_event_STATIC_LTLIBS) mca/hwloc/libmca_hwloc.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_hwloc_STATIC_LTLIBS) mca/if/libmca_if.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_if_STATIC_LTLIBS) mca/installdirs/libmca_installdirs.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_installdirs_STATIC_LTLIBS) mca/memchecker/libmca_memchecker.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memchecker_STATIC_LTLIBS) mca/memcpy/libmca_memcpy.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memcpy_STATIC_LTLIBS) mca/memory/libmca_memory.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memory_STATIC_LTLIBS) mca/mpool/libmca_mpool.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_mpool_STATIC_LTLIBS) mca/pmix/libmca_pmix.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pmix_STATIC_LTLIBS) mca/pstat/libmca_pstat.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pstat_STATIC_LTLIBS) mca/rcache/libmca_rcache.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_rcache_STATIC_LTLIBS) mca/sec/libmca_sec.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_sec_STATIC_LTLIBS) mca/shmem/libmca_shmem.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_shmem_STATIC_LTLIBS) mca/timer/libmca_timer.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_timer_STATIC_LTLIBS)'
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_ALL_COMPONENTS=' s1 cray s2 pmix112 external'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_ALL_SUBDIRS=' mca/pmix/s1 mca/pmix/cray mca/pmix/s2
</span><br>
<span class="quotelev2">&gt;&gt; mca/pmix/pmix112 mca/pmix/external'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_DSO_COMPONENTS=' pmix112'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_DSO_SUBDIRS=' mca/pmix/pmix112'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_STATIC_LTLIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_ext_CPPFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_ext_LDFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_ext_LIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_pmix112_CPPFLAGS='-I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/include/pmix
</span><br>
<span class="quotelev2">&gt;&gt; -I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/include
</span><br>
<span class="quotelev2">&gt;&gt; -I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix
</span><br>
<span class="quotelev2">&gt;&gt; -I$(OPAL_TOP_SRCDIR)/opal/mca/pmix/pmix112/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_pmix112_LIBS='$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/libpmix.la'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;config.log&quot; for Sun C 5.13 shows the following.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; configure:127803: /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; '../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/
</span><br>
<span class="quotelev2">&gt;&gt; pmix/configure' *failed* for opal/mca/pmix/pmix112/pmix
</span><br>
<span class="quotelev2">&gt;&gt; configure:128379: checking if MCA component pmix:pmix112 can compile
</span><br>
<span class="quotelev2">&gt;&gt; configure:128381: result: no
</span><br>
<span class="quotelev2">&gt;&gt; configure:5637: --- MCA component pmix:external (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt; configure:128523: checking for MCA component pmix:external compile mode
</span><br>
<span class="quotelev2">&gt;&gt; configure:128529: result: dso
</span><br>
<span class="quotelev2">&gt;&gt; configure:129054: checking if MCA component pmix:external can compile
</span><br>
<span class="quotelev2">&gt;&gt; configure:129056: result: no
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3887: creating opal/mca/pmix/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3887: creating opal/mca/pmix/s1/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3887: creating opal/mca/pmix/cray/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3887: creating opal/mca/pmix/s2/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3887: creating opal/mca/pmix/pmix112/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status:3887: creating opal/mca/pmix/external/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_cray_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_cray_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_external_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_external_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_pmix112_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_pmix112_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_s1_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_s1_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_s2_DSO_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_opal_pmix_s2_DSO_TRUE=''
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORKS='common  allocator backtrace btl dl event hwloc if
</span><br>
<span class="quotelev2">&gt;&gt; installdirs memchecker memcpy memory mpool pmix pstat rcache sec shmem timer'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORKS_SUBDIRS='mca/common  mca/allocator mca/backtrace mca/btl
</span><br>
<span class="quotelev2">&gt;&gt; mca/dl mca/event mca/hwloc mca/if mca/installdirs mca/memchecker mca/memcpy
</span><br>
<span class="quotelev2">&gt;&gt; mca/memory mca/mpool mca/pmix mca/pstat mca/rcache mca/sec mca/shmem mca/timer'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS='$(MCA_opal_common_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_allocator_ALL_SUBDIRS) $(MCA_opal_backtrace_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_btl_ALL_SUBDIRS) $(MCA_opal_dl_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_event_ALL_SUBDIRS) $(MCA_opal_hwloc_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_if_ALL_SUBDIRS) $(MCA_opal_installdirs_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memchecker_ALL_SUBDIRS) $(MCA_opal_memcpy_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memory_ALL_SUBDIRS) $(MCA_opal_mpool_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pmix_ALL_SUBDIRS) $(MCA_opal_pstat_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_rcache_ALL_SUBDIRS) $(MCA_opal_sec_ALL_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_shmem_ALL_SUBDIRS) $(MCA_opal_timer_ALL_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS='$(MCA_opal_common_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_allocator_DSO_SUBDIRS) $(MCA_opal_backtrace_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_btl_DSO_SUBDIRS) $(MCA_opal_dl_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_event_DSO_SUBDIRS) $(MCA_opal_hwloc_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_if_DSO_SUBDIRS) $(MCA_opal_installdirs_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memchecker_DSO_SUBDIRS) $(MCA_opal_memcpy_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memory_DSO_SUBDIRS) $(MCA_opal_mpool_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pmix_DSO_SUBDIRS) $(MCA_opal_pstat_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_rcache_DSO_SUBDIRS) $(MCA_opal_sec_DSO_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_shmem_DSO_SUBDIRS) $(MCA_opal_timer_DSO_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS='$(MCA_opal_common_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt;  $(MCA_opal_allocator_STATIC_SUBDIRS) $(MCA_opal_backtrace_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_btl_STATIC_SUBDIRS) $(MCA_opal_dl_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_event_STATIC_SUBDIRS) $(MCA_opal_hwloc_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_if_STATIC_SUBDIRS) $(MCA_opal_installdirs_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memchecker_STATIC_SUBDIRS) $(MCA_opal_memcpy_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memory_STATIC_SUBDIRS) $(MCA_opal_mpool_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pmix_STATIC_SUBDIRS) $(MCA_opal_pstat_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_rcache_STATIC_SUBDIRS) $(MCA_opal_sec_STATIC_SUBDIRS)
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_shmem_STATIC_SUBDIRS) $(MCA_opal_timer_STATIC_SUBDIRS)'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_FRAMEWORK_LIBS=' $(MCA_opal_common_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt; mca/allocator/libmca_allocator.la $(MCA_opal_allocator_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt; mca/backtrace/libmca_backtrace.la $(MCA_opal_backtrace_STATIC_LTLIBS)
</span><br>
<span class="quotelev2">&gt;&gt; mca/btl/libmca_btl.la $(MCA_opal_btl_STATIC_LTLIBS) mca/dl/libmca_dl.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_dl_STATIC_LTLIBS) mca/event/libmca_event.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_event_STATIC_LTLIBS) mca/hwloc/libmca_hwloc.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_hwloc_STATIC_LTLIBS) mca/if/libmca_if.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_if_STATIC_LTLIBS) mca/installdirs/libmca_installdirs.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_installdirs_STATIC_LTLIBS) mca/memchecker/libmca_memchecker.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memchecker_STATIC_LTLIBS) mca/memcpy/libmca_memcpy.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memcpy_STATIC_LTLIBS) mca/memory/libmca_memory.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_memory_STATIC_LTLIBS) mca/mpool/libmca_mpool.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_mpool_STATIC_LTLIBS) mca/pmix/libmca_pmix.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pmix_STATIC_LTLIBS) mca/pstat/libmca_pstat.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_pstat_STATIC_LTLIBS) mca/rcache/libmca_rcache.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_rcache_STATIC_LTLIBS) mca/sec/libmca_sec.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_sec_STATIC_LTLIBS) mca/shmem/libmca_shmem.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_shmem_STATIC_LTLIBS) mca/timer/libmca_timer.la
</span><br>
<span class="quotelev2">&gt;&gt; $(MCA_opal_timer_STATIC_LTLIBS)'
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_ALL_COMPONENTS=' s1 cray s2 pmix112 external'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_ALL_SUBDIRS=' mca/pmix/s1 mca/pmix/cray mca/pmix/s2
</span><br>
<span class="quotelev2">&gt;&gt; mca/pmix/pmix112 mca/pmix/external'
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_DSO_COMPONENTS=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_DSO_SUBDIRS=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_STATIC_LTLIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; MCA_opal_pmix_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_ext_CPPFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_ext_LDFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_ext_LIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_pmix112_CPPFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; opal_pmix_pmix112_LIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've attached the config.log files for pmix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-2.0.0 142 tar zvft pmix_config.log.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r-- root/root    136291 2016-04-25 08:05:34
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/pmix/pmix112/pmix/config.log
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r-- root/root    528808 2016-04-25 08:07:54
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_gcc/opal/mca/pmix/pmix112/pmix/config.log
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-2.0.0 143
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've also attached the output for the broken execution of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;spawn_multiple_master&quot; for my gcc-version of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;spawn_master&quot; works as expected with my gcc-version of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully you can fix the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards and thank you very much for your help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 23.04.2016 um 21:34 schrieb Siegmar Gross:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know what happened, but the files are not available now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and they were definitely available when I answered the email from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph. The files also have a different timestamp now. This is an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extract from my email to Ralph for Solaris Sparc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root     977 Apr 19 19:49 mca_plm_rsh.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root  153280 Apr 19 19:49 mca_plm_rsh.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root    1007 Apr 19 19:47 mca_pmix_pmix112.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root 1400512 Apr 19 19:47 mca_pmix_pmix112.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root     971 Apr 19 19:52 mca_pml_cm.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root  342440 Apr 19 19:52 mca_pml_cm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now I have the following output for these files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root     976 Apr 19 19:58 mca_plm_rsh.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root  319816 Apr 19 19:58 mca_plm_rsh.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root     970 Apr 19 20:00 mca_pml_cm.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x 1 root root 1507440 Apr 19 20:00 mca_pml_cm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll try to find out what happened next week when I'm back in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my office.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 23.04.16 um 02:12 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will try to reproduce this on my solaris11 x86_64 vm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the mean time, can you please double check mca_pmix_pmix_pmix112.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is a 64 bits library ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (E.g, confirm &quot;-m64&quot; was correctly passed to pmix)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Friday, April 22, 2016, Siegmar Gross
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;siegmar.gross_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:siegmar.gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I've already used &quot;-enable-debug&quot;. &quot;SYSTEM_ENV&quot; is &quot;SunOS&quot; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &quot;Linux&quot; and &quot;MACHINE_ENV&quot; is &quot;sparc&quot; or &quot;x86_84&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mkdir openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     cd openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ../openmpi-v2.x-dev-1280-gc110ae8/configure \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --prefix=/usr/local/openmpi-2.0.0_64_gcc \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-mpi-cxx \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-cxx-exceptions \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-mpi-java \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-heterogeneous \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-hwloc=internal \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --without-verbs \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-debug \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mkdir openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     cd openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ../openmpi-v2.x-dev-1280-gc110ae8/configure \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --prefix=/usr/local/openmpi-2.0.0_64_cc \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --libdir=/usr/local/openmpi-2.0.0_64_cc/lib64 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       LDFLAGS=&quot;-m64&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-mpi-cxx \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-cxx-exceptions \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-mpi-java \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-heterogeneous \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-hwloc=internal \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --without-verbs \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-wrapper-cflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-wrapper-ldflags=&quot;&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --enable-debug \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Am 21.04.2016 um 18:18 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Can you please rebuild OMPI with -enable-debug in the configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         cmd? It will let us see more error output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             On Apr 21, 2016, at 8:52 AM, Siegmar Gross
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I don't see any additional information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             tyr hello_1 108 mpiexec -np 4 --host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             mca_base_component_show_load_errors 1 hello_1_mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [tyr.informatik.hs-fulda.de:06211
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06211">http://tyr.informatik.hs-fulda.de:06211</a>&gt;] [[48741,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             at line 638
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             It looks like orte_init failed for some reason; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             environment problems.  This failure appears to be an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             here's some additional information (which may only be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              opal_pmix_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             tyr hello_1 109 mpiexec -np 4 --host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             mca_base_component_show_load_errors 1 -mca pmix_base_verbose
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             10 -mca pmix_server_verbose 5 hello_1_mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca: base:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             components_register: registering framework pmix components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca: base:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             components_open: opening pmix components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca:base:select:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Auto-selecting pmix components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] mca:base:select:(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             pmix) No component selected!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             [tyr.informatik.hs-fulda.de:06212
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;<a href="http://tyr.informatik.hs-fulda.de:06212">http://tyr.informatik.hs-fulda.de:06212</a>&gt;] [[48738,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             at line 638
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             It looks like orte_init failed for some reason; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             environment problems.  This failure appears to be an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             here's some additional information (which may only be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              opal_pmix_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             tyr hello_1 110
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Am 21.04.2016 um 17:24 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Hmmm&#133;it looks like you built the right components, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 they are not being picked up. Can you run your mpiexec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 command again, adding &#147;-mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 mca_base_component_show_load_errors 1&#148; to the cmd line?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     On Apr 21, 2016, at 8:16 AM, Siegmar Gross
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     I have attached ompi_info output for both compilers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     from my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     sparc machine and the listings for both compilers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     &lt;prefix&gt;/lib/openmpi directories. Hopefully that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     helps to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     find the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     hermes tmp 3 tar zvft openmpi-2.x_info.tar.gz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     -rw-r--r-- root/root     10969 2016-04-21 17:06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     ompi_info_SunOS_sparc_cc.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     -rw-r--r-- root/root     11044 2016-04-21 17:06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     ompi_info_SunOS_sparc_gcc.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     -rw-r--r-- root/root     71252 2016-04-21 17:02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     lib64_openmpi.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     hermes tmp 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Kind regards and thank you very much once more for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     your help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Am 21.04.2016 um 15:54 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Odd - it would appear that none of the pmix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         components built? Can you send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         along the output from ompi_info? Or just send a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         listing of the files in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         &lt;prefix&gt;/lib/openmpi directory?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             On Apr 21, 2016, at 1:27 AM, Siegmar Gross
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Am 21.04.2016 um 00:18 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 Could you please rerun these test and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 add &#147;-mca pmix_base_verbose 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 -mca pmix_server_verbose 5&#148; to your cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 line? I need to see why the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 pmix components failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             tyr spawn 111 mpiexec -np 1 --host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             pmix_base_verbose 10 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             pmix_server_verbose 5 spawn_multiple_master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             base: components_register: registering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             framework pmix components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652] mca:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             base: components_open: opening pmix components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             mca:base:select: Auto-selecting pmix components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             mca:base:select:( pmix) No component selected!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:26652]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [[52794,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             at line 638
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             It looks like orte_init failed for some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             likely to abort.  There are many reasons
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             fail during orte_init; some of which are due
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             environment problems.  This failure appears
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             here's some additional information (which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             opal_pmix_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             --&gt; Returned value Not found (-13) instead
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             tyr spawn 112
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             tyr hello_1 116 mpiexec -np 1 --host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             tyr,sunpc1,linpc1,ruester -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             pmix_base_verbose 10 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             pmix_server_verbose 5 hello_1_mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             base: components_register: registering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             framework pmix components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261] mca:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             base: components_open: opening pmix components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             mca:base:select: Auto-selecting pmix components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             mca:base:select:( pmix) No component selected!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27261]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             [[52315,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             at line 638
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             It looks like orte_init failed for some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             likely to abort.  There are many reasons
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             fail during orte_init; some of which are due
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             environment problems.  This failure appears
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             here's some additional information (which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             opal_pmix_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             --&gt; Returned value Not found (-13) instead
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             tyr hello_1 117
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Thank you very much for your help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     On Apr 20, 2016, at 10:12 AM,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Siegmar Gross
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     I have built
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     openmpi-v2.x-dev-1280-gc110ae8 on my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     (Solaris 10 Sparc, Solaris 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     x86_64, and openSUSE Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     12.1 x86_64) with gcc-5.1.0 and Sun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     C 5.13. Unfortunately I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     runtime errors for some programs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Sun C 5.13:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     ===========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     For all my test programs I get the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     same error on Solaris Sparc and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Solaris x86_64, while the programs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     work fine on Linux.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     tyr hello_1 115 mpiexec -np 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     hello_1_mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:22373]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [[61763,0],0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-v2.x-dev-1280-gc110ae8/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     at line 638
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     It looks like orte_init failed for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     likely to abort.  There are many
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     fail during orte_init; some of which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     environment problems.  This failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     here's some additional information
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     opal_pmix_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     --&gt; Returned value Not found (-13)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     tyr hello_1 116
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     GCC-5.1.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     ==========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     tyr spawn 121 mpiexec -np 1 --host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     tyr,sunpc1,linpc1,ruester
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     spawn_multiple_master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Parent process 0 running on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     I create 3 slave processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     at line 829
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a>&gt;:25366]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../../openmpi-v2.x-dev-1280-gc110ae8/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     at line 2176
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [tyr:25377] *** An error occurred in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [tyr:25377] *** reported by process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [3308257281,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [tyr:25377] *** on communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [tyr:25377] *** MPI_ERR_SPAWN: could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     not spawn processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [tyr:25377] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     (processes in this communicator will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     now abort,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     [tyr:25377] ***    and potentially
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     your MPI job)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     tyr spawn 122
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     I would be grateful if somebody can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     fix the problems. Thank you very
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     much for any help in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;hello_1_mpi.c&gt;&lt;spawn_multiple_master.c&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28983.php">http://www.open-mpi.org/community/lists/users/2016/04/28983.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                 post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28986.php">http://www.open-mpi.org/community/lists/users/2016/04/28986.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28987.php">http://www.open-mpi.org/community/lists/users/2016/04/28987.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28988.php">http://www.open-mpi.org/community/lists/users/2016/04/28988.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;openmpi-2.x_info.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28989.php">http://www.open-mpi.org/community/lists/users/2016/04/28989.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28990.php">http://www.open-mpi.org/community/lists/users/2016/04/28990.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2016/04/28991.php">http://www.open-mpi.org/community/lists/users/2016/04/28991.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/04/28992.php">http://www.open-mpi.org/community/lists/users/2016/04/28992.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/04/28993.php">http://www.open-mpi.org/community/lists/users/2016/04/28993.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28999.php">http://www.open-mpi.org/community/lists/users/2016/04/28999.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29009.php">http://www.open-mpi.org/community/lists/users/2016/04/29009.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29033.php">http://www.open-mpi.org/community/lists/users/2016/04/29033.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29038.php">http://www.open-mpi.org/community/lists/users/2016/04/29038.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
########################################################################
#                                                                      #
# Hochschule Fulda          University of Applied Sciences             #
# FB Angewandte Informatik  Department of Applied Computer Science     #
#                                                                      #
# Prof. Dr. Siegmar Gross   Tel.: +49 (0)661 9640 - 333                #
#                           Fax:  +49 (0)661 9640 - 349                #
# Leipziger Str. 123        WWW:  <a href="http://www.hs-fulda.de/~gross">http://www.hs-fulda.de/~gross</a>        #
# D-36037 Fulda             Mail: Siegmar.Gross_at_[hidden] #
#                                                                      #
#                                                                      #
# IT-Sicherheit: <a href="http://www.hs-fulda.de/it-sicherheit">http://www.hs-fulda.de/it-sicherheit</a>                  #
#                                                                      #
########################################################################

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29039/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29040.php">Gilles Gouaillardet: "[OMPI users]  runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="29038.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29040.php">Gilles Gouaillardet: "[OMPI users]  runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29040.php">Gilles Gouaillardet: "[OMPI users]  runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
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
