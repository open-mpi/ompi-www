<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 20 12:47:01 2007" -->
<!-- isoreceived="20070220174701" -->
<!-- sent="Tue, 20 Feb 2007 12:46:58 -0500" -->
<!-- isosent="20070220174658" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IBM XL compilers[Scanned]" -->
<!-- id="40B6A9F5-701C-46D4-85B9-CE534E48A944_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45DB2EC8.4060805_at_ocf.co.uk" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-20 12:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2718.php">Arif Ali: "[OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2718.php">Arif Ali: "[OMPI users] IBM XL compilers[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Arif,
<br>
<p>This is a problem with libtool and the IBM compilers and shared  
<br>
libraries. The easiest thing to do is to build static libraries  
<br>
instead by passing &quot;--disable-shared --enable-static&quot; to configure.
<br>
<p>I am currently unaware of any workarounds to make compiling shared  
<br>
libraries work with the IBM compilers.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p><p><p>On Feb 20, 2007, at 12:24 PM, Arif Ali wrote:
<br>
<p><span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried a few ways to compile OpenMPI using XLX/XLF compilers  
</span><br>
<span class="quotelev1">&gt; but the I keep getting the same error (detailed below). I was  
</span><br>
<span class="quotelev1">&gt; wandering if anyone has had any problems or successes in compiling  
</span><br>
<span class="quotelev1">&gt; OpenMPI with XL compilers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried 1.2b3, 1.2b4,1.2b4r13690, 1.1.4; and I got the same  
</span><br>
<span class="quotelev1">&gt; error message. Maybe i'm missing something here with the XL compilers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the files that have _64 as postfix are just wrapper files that  
</span><br>
<span class="quotelev1">&gt; do 64 bit compilation( i.e -q64)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; build.sh
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make distclean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BUILD_DIR=/opt/openmpi-ofed/xl/64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export GNU_FLAGS=&quot;-O3&quot;
</span><br>
<span class="quotelev1">&gt; export OPTFLAGS=&quot;-O3&quot;
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=$GNU_FLAGS
</span><br>
<span class="quotelev1">&gt; export RSHCOMMAND=ssh
</span><br>
<span class="quotelev1">&gt; export CXX=xlC_64
</span><br>
<span class="quotelev1">&gt; export CC=xlc_64
</span><br>
<span class="quotelev1">&gt; export F77=xlf_64
</span><br>
<span class="quotelev1">&gt; export F90=xlf90_64
</span><br>
<span class="quotelev1">&gt; export CCLINKER=xlC_64
</span><br>
<span class="quotelev1">&gt; export CLINKER=xlC_64
</span><br>
<span class="quotelev1">&gt; export FLINKER=xlf_64
</span><br>
<span class="quotelev1">&gt; export FCLINKER=xlf90_64
</span><br>
<span class="quotelev1">&gt; export CCFLAGS=&quot;$GNU_FLAGS&quot;
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;$GNU_FLAGS&quot;
</span><br>
<span class="quotelev1">&gt; export FFLAGS=&quot;$GNU_FLAGS&quot;
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=&quot;$GNU_FLAGS&quot;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.2b3/configure -prefix=$BUILD_DIR --with-wrapper- 
</span><br>
<span class="quotelev1">&gt; cflags=&quot;$CFLAGS&quot; --with-openib=/usr/local/ofed \
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cxxflags=&quot;$CCFLAGS&quot; --with-wrapper-fflags=&quot;$FFLAGS&quot;  
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fcflags=&quot;$FCFLAGS&quot;
</span><br>
<span class="quotelev1">&gt; make -j 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; last few lines of the error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source='../../openmpi-1.2b3/opal/threads/thread.c' object='threads/ 
</span><br>
<span class="quotelev1">&gt; thread.lo' libtool=yes \
</span><br>
<span class="quotelev1">&gt; DEPDIR=.deps depmode=none /bin/sh ../../openmpi-1.2b3/config/depcomp \
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC --mode=compile xlc_64 -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../openmpi-1.2b3/opal -I../opal/include -I../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../ompi/include -I../ompi/include   -I../../openmpi-1.2b3 -I.. - 
</span><br>
<span class="quotelev1">&gt; I../../openmpi-1.2b3/opal/include -I../../openmpi-1.2b3/orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../../openmpi-1.2b3/ompi/include    -DNDEBUG -O3  -c -o  
</span><br>
<span class="quotelev1">&gt; threads/thread.lo ../../openmpi-1.2b3/opal/threads/thread.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  xlc_64 -DHAVE_CONFIG_H -I. -I../../openmpi-1.2b3/ 
</span><br>
<span class="quotelev1">&gt; opal -I../opal/include -I../orte/include -I../ompi/include -I../ 
</span><br>
<span class="quotelev1">&gt; ompi/include -I../../openmpi-1.2b3 -I.. -I../../openmpi-1.2b3/opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../openmpi-1.2b3/orte/include -I../../openmpi-1.2b3/ 
</span><br>
<span class="quotelev1">&gt; ompi/include -DNDEBUG -O3 -c ../../openmpi-1.2b3/opal/threads/ 
</span><br>
<span class="quotelev1">&gt; mutex.c  -DPIC -o threads/.libs/mutex.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  xlc_64 -DHAVE_CONFIG_H -I. -I../../openmpi-1.2b3/ 
</span><br>
<span class="quotelev1">&gt; opal -I../opal/include -I../orte/include -I../ompi/include -I../ 
</span><br>
<span class="quotelev1">&gt; ompi/include -I../../openmpi-1.2b3 -I.. -I../../openmpi-1.2b3/opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../openmpi-1.2b3/orte/include -I../../openmpi-1.2b3/ 
</span><br>
<span class="quotelev1">&gt; ompi/include -DNDEBUG -O3 -c ../../openmpi-1.2b3/opal/threads/ 
</span><br>
<span class="quotelev1">&gt; thread.c  -DPIC -o threads/.libs/thread.o
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool --tag=CC --mode=link xlc_64  -DNDEBUG -O3   - 
</span><br>
<span class="quotelev1">&gt; export-dynamic -O3  -o libopen-pal.la -rpath /opt/openmpi-ofed/xl/ 
</span><br>
<span class="quotelev1">&gt; 64/lib   class/opal_free_list.lo class/opal_hash_table.lo class/ 
</span><br>
<span class="quotelev1">&gt; opal_list.lo class/opal_object.lo class/opal_atomic_lifo.lo class/ 
</span><br>
<span class="quotelev1">&gt; opal_value_array.lo memoryhooks/memory.lo runtime/opal_progress.lo  
</span><br>
<span class="quotelev1">&gt; runtime/opal_finalize.lo runtime/opal_init.lo runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_params.lo threads/condition.lo threads/mutex.lo threads/ 
</span><br>
<span class="quotelev1">&gt; thread.lo  libltdl/libltdlc.la asm/libasm.la event/libevent.la mca/ 
</span><br>
<span class="quotelev1">&gt; base/libmca_base.la util/libopalutil.la mca/backtrace/ 
</span><br>
<span class="quotelev1">&gt; libmca_backtrace.la mca/backtrace/execinfo/ 
</span><br>
<span class="quotelev1">&gt; libmca_backtrace_execinfo.la  mca/maffinity/libmca_maffinity.la   
</span><br>
<span class="quotelev1">&gt; mca/memcpy/libmca_memcpy.la  mca/memory/libmca_memory.la mca/memory/ 
</span><br>
<span class="quotelev1">&gt; ptmalloc2/libmca_memory_ptmalloc2.la  mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; libmca_paffinity.la  mca/timer/libmca_timer.la mca/timer/linux/ 
</span><br>
<span class="quotelev1">&gt; libmca_timer_linux.la  -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: xlc_64 -shared  class/.libs/opal_free_list.o  
</span><br>
<span class="quotelev1">&gt; class/.libs/opal_hash_table.o class/.libs/opal_list.o class/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_object.o class/.libs/opal_atomic_lifo.o class/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_value_array.o memoryhooks/.libs/memory.o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_progress.o runtime/.libs/opal_finalize.o runtime/.libs/ 
</span><br>
<span class="quotelev1">&gt; opal_init.o runtime/.libs/opal_params.o threads/.libs/condition.o  
</span><br>
<span class="quotelev1">&gt; threads/.libs/mutex.o threads/.libs/thread.o  --whole-archive  
</span><br>
<span class="quotelev1">&gt; libltdl/.libs/libltdlc.a asm/.libs/libasm.a event/.libs/libevent.a  
</span><br>
<span class="quotelev1">&gt; mca/base/.libs/libmca_base.a util/.libs/libopalutil.a mca/ 
</span><br>
<span class="quotelev1">&gt; backtrace/.libs/libmca_backtrace.a mca/backtrace/execinfo/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_backtrace_execinfo.a mca/maffinity/.libs/libmca_maffinity.a  
</span><br>
<span class="quotelev1">&gt; mca/memcpy/.libs/libmca_memcpy.a mca/memory/.libs/libmca_memory.a  
</span><br>
<span class="quotelev1">&gt; mca/memory/ptmalloc2/.libs/libmca_memory_ptmalloc2.a mca/ 
</span><br>
<span class="quotelev1">&gt; paffinity/.libs/libmca_paffinity.a mca/timer/.libs/libmca_timer.a  
</span><br>
<span class="quotelev1">&gt; mca/timer/linux/.libs/libmca_timer_linux.a --no-whole-archive  -ldl  
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil -lc                              -soname libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 -o .libs/libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; xlc: 1501-216 command option --whole-archive is not recognized -  
</span><br>
<span class="quotelev1">&gt; passed to ld
</span><br>
<span class="quotelev1">&gt; xlc: 1501-216 command option --no-whole-archive is not recognized -  
</span><br>
<span class="quotelev1">&gt; passed to ld
</span><br>
<span class="quotelev1">&gt; xlc: 1501-218 file libopen-pal.so.0 contains an incorrect file suffix
</span><br>
<span class="quotelev1">&gt; xlc: 1501-228 input file libopen-pal.so.0 not found
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libopen-pal.la] Error 252
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/root/ocf/software/openmpi-1.2b3-ofed- 
</span><br>
<span class="quotelev1">&gt; xl/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/root/ocf/software/openmpi-1.2b3-ofed- 
</span><br>
<span class="quotelev1">&gt; xl/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Arif Ali
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; OCF plc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mobile: +44 (0)7970 148 122
</span><br>
<span class="quotelev1">&gt; Office: +44 (0)114 257 2200
</span><br>
<span class="quotelev1">&gt; Fax:    +44 (0)114 257 0022
</span><br>
<span class="quotelev1">&gt; Email:  aali_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Skype:  arif_ali80
</span><br>
<span class="quotelev1">&gt; MSN:    aali_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;aali.vcf&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2718.php">Arif Ali: "[OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2718.php">Arif Ali: "[OMPI users] IBM XL compilers[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
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
