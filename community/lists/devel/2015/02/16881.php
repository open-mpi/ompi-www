<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 16:18:11 2015" -->
<!-- isoreceived="20150202211811" -->
<!-- sent="Mon, 2 Feb 2015 21:18:09 +0000" -->
<!-- isosent="20150202211809" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="65F28BB1-4B97-4FB6-BF5F-BCBA98A1E873_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16gz35poup-EZ35XbAY7X30mmh0t2iPxfgZH-TsCDY14A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 16:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16882.php">Paul Hargrove: "[OMPI devel] confusing output when no c++ compiler"</a>
<li><strong>Previous message:</strong> <a href="16880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16848.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Re-adding devel, since Paul sent me the logs off-list.
<br>
<p>(per Ralph's comment, we may or may not stick with this don't-build-libltdl philosophy, but I'd still like to run this issue down)
<br>
<p>Howard: see Paul's notes below.  It's on the hopper system at Nersc.
<br>
<p>Do you have any Cray insight here?  (see below for the exact issue)
<br>
<p><p><span class="quotelev1">&gt; On Feb 1, 2015, at 3:52 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff (off-list),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Original make was with V=1, so I skipped the &quot;make clean&quot; before &quot;record/send the output of make w/ V=1&quot;.
</span><br>
<span class="quotelev1">&gt; All the requested files should be in the attached .tar.bz2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I see from configure is the following is explicit about &quot;without search path&quot;:
</span><br>
<span class="quotelev1">&gt; configure:63392: result: looking for library without search path
</span><br>
<span class="quotelev1">&gt; configure:63394: checking for lt_dlopen in -lltdl
</span><br>
<span class="quotelev1">&gt; configure:63419: pgcc -o conftest -g   conftest.c -lltdl  -lrt -lutil  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:63419: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:63428: result: yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;make V=1&quot; shows &quot;-ltdl&quot; passed to libtool in the line before the one I quoted previously.
</span><br>
<span class="quotelev1">&gt; Libtool then *instead* passes &quot;/usr/lib/libltdl.so&quot; to the link command.
</span><br>
<span class="quotelev1">&gt; So, I've included the generated config.lt, which appears to place /usr/lib ahead of /usr/lib64 in its search path(s).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know what else you may need.
</span><br>
<span class="quotelev1">&gt; This is on NERSC's Hopper, where Howard and Nathan both have accounts (though I did see the message about Nathan taking some time off).
</span><br>
<p>Here's the full output from the logs that Paul sent to me -- you can see that Makefile passes &quot;-lltdl&quot; and then libtool converts it to /usr/lib/ltdl.so:
<br>
<p>/bin/sh ../libtool  --tag=CC   --mode=link pgcc -DOPAL_CONFIGURE_HOST=&quot;\&quot;hopper09\&quot;&quot; -g  -version-info 0:0:0  -o libopen-pal.la -rpath /scratch/scratchdirs/hargrove/OMPI/openmpi-libltdl-linux-x86_64-pgi-14.7/INST/lib  class/opal_bitmap.lo class/opal_free_list.lo class/opal_hash_table.lo class/opal_hotel.lo class/opal_tree.lo class/opal_list.lo class/opal_object.lo class/opal_graph.lo class/opal_lifo.lo class/opal_fifo.lo class/opal_pointer_array.lo class/opal_value_array.lo class/opal_ring_buffer.lo class/opal_rb_tree.lo class/ompi_free_list.lo memoryhooks/memory.lo runtime/opal_progress.lo runtime/opal_finalize.lo runtime/opal_init.lo runtime/opal_params.lo runtime/opal_cr.lo runtime/opal_info_support.lo runtime/opal_progress_threads.lo threads/condition.lo threads/mutex.lo threads/thread.lo dss/dss_internal_functions.lo dss/dss_compare.lo dss/dss_copy.lo dss/dss_dump.lo dss/dss_load_unload.lo dss/dss_lookup.lo dss/dss_pack.lo dss/dss_peek.lo dss/dss_print.lo dss/dss_register.lo dss/dss_unpack.lo dss/dss_open_close.lo asm/libasm.la datatype/libdatatype.la mca/base/libmca_base.la util/libopalutil.la  mca/allocator/libmca_allocator.la  mca/backtrace/libmca_backtrace.la mca/backtrace/execinfo/libmca_backtrace_execinfo.la  mca/btl/libmca_btl.la  mca/compress/libmca_compress.la  mca/crs/libmca_crs.la  mca/dstore/libmca_dstore.la  mca/event/libmca_event.la mca/event/libevent2022/libmca_event_libevent2022.la  mca/hwloc/libmca_hwloc.la mca/hwloc/hwloc191/libmca_hwloc_hwloc191.la  mca/if/libmca_if.la mca/if/posix_ipv4/libmca_if_posix_ipv4.la mca/if/linux_ipv6/libmca_if_linux_ipv6.la  mca/installdirs/libmca_installdirs.la mca/installdirs/config/libmca_installdirs_config.la mca/installdirs/env/libmca_installdirs_env.la  mca/memchecker/libmca_memchecker.la  mca/memcpy/libmca_memcpy.la  mca/memory/libmca_memory.la mca/memory/linux/libmca_memory_linux.la  mca/mpool/libmca_mpool.la  mca/pmix/libmca_pmix.la  mca/pstat/libmca_pstat.la  mca/rcache/libmca_rcache.la  mca/sec/libmca_sec.la  mca/shmem/libmca_shmem.la  mca/timer/libmca_timer.la mca/timer/linux/libmca_timer_linux.la  -lrt -lutil  -lltdl   -lrt -lutil  -lltdl  
<br>
libtool: link: pgcc -shared  -fpic -DPIC  class/.libs/opal_bitmap.o class/.libs/opal_free_list.o class/.libs/opal_hash_table.o class/.libs/opal_hotel.o class/.libs/opal_tree.o class/.libs/opal_list.o class/.libs/opal_object.o class/.libs/opal_graph.o class/.libs/opal_lifo.o class/.libs/opal_fifo.o class/.libs/opal_pointer_array.o class/.libs/opal_value_array.o class/.libs/opal_ring_buffer.o class/.libs/opal_rb_tree.o class/.libs/ompi_free_list.o memoryhooks/.libs/memory.o runtime/.libs/opal_progress.o runtime/.libs/opal_finalize.o runtime/.libs/opal_init.o runtime/.libs/opal_params.o runtime/.libs/opal_cr.o runtime/.libs/opal_info_support.o runtime/.libs/opal_progress_threads.o threads/.libs/condition.o threads/.libs/mutex.o threads/.libs/thread.o dss/.libs/dss_internal_functions.o dss/.libs/dss_compare.o dss/.libs/dss_copy.o dss/.libs/dss_dump.o dss/.libs/dss_load_unload.o dss/.libs/dss_lookup.o dss/.libs/dss_pack.o dss/.libs/dss_peek.o dss/.libs/dss_print.o dss/.libs/dss_register.o dss/.libs/dss_unpack.o dss/.libs/dss_open_close.o  -Wl,--whole-archive,asm/.libs/libasm.a,datatype/.libs/libdatatype.a,mca/base/.libs/libmca_base.a,util/.libs/libopalutil.a,mca/allocator/.libs/libmca_allocator.a,mca/backtrace/.libs/libmca_backtrace.a,mca/backtrace/execinfo/.libs/libmca_backtrace_execinfo.a,mca/btl/.libs/libmca_btl.a,mca/compress/.libs/libmca_compress.a,mca/crs/.libs/libmca_crs.a,mca/dstore/.libs/libmca_dstore.a,mca/event/.libs/libmca_event.a,mca/event/libevent2022/.libs/libmca_event_libevent2022.a,mca/hwloc/.libs/libmca_hwloc.a,mca/hwloc/hwloc191/.libs/libmca_hwloc_hwloc191.a,mca/if/.libs/libmca_if.a,mca/if/posix_ipv4/.libs/libmca_if_posix_ipv4.a,mca/if/linux_ipv6/.libs/libmca_if_linux_ipv6.a,mca/installdirs/.libs/libmca_installdirs.a,mca/installdirs/config/.libs/libmca_installdirs_config.a,mca/installdirs/env/.libs/libmca_installdirs_env.a,mca/memchecker/.libs/libmca_memchecker.a,mca/memcpy/.libs/libmca_memcpy.a,mca/memory/.libs/libmca_memory.a,mca/memory/linux/.libs/libmca_memory_linux.a,mca/mpool/.libs/libmca_mpool.a,mca/pmix/.libs/libmca_pmix.a,mca/pstat/.libs/libmca_pstat.a,mca/rcache/.libs/libmca_rcache.a,mca/sec/.libs/libmca_sec.a,mca/shmem/.libs/libmca_shmem.a,mca/timer/.libs/libmca_timer.a,mca/timer/linux/.libs/libmca_timer_linux.a -Wl,--no-whole-archive  -lm -lpciaccess -lrt -lutil /usr/lib/libltdl.so -ldl -lc    -Wl,-soname -Wl,libopen-pal.so.0 -o .libs/libopen-pal.so.0.0.0
<br>
/usr/lib/libltdl.so: could not read symbols: File in wrong format
<br>
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
<li><strong>Next message:</strong> <a href="16882.php">Paul Hargrove: "[OMPI devel] confusing output when no c++ compiler"</a>
<li><strong>Previous message:</strong> <a href="16880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16848.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16883.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
