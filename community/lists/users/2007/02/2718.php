<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 20 12:24:00 2007" -->
<!-- isoreceived="20070220172400" -->
<!-- sent="Tue, 20 Feb 2007 17:24:24 +0000" -->
<!-- isosent="20070220172424" -->
<!-- name="Arif Ali" -->
<!-- email="aali_at_[hidden]" -->
<!-- subject="[OMPI users] IBM XL compilers[Scanned]" -->
<!-- id="45DB2EC8.4060805_at_ocf.co.uk" -->
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
<strong>From:</strong> Arif Ali (<em>aali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-20 12:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2717.php">Kobotov, Alexander V: "[OMPI users] BLACS tests fails on IPF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>I have tried a few ways to compile OpenMPI using XLX/XLF compilers but 
<br>
the I keep getting the same error (detailed below). I was wandering if 
<br>
anyone has had any problems or successes in compiling OpenMPI with XL 
<br>
compilers?
<br>
<p>I have tried 1.2b3, 1.2b4,1.2b4r13690, 1.1.4; and I got the same error 
<br>
message. Maybe i'm missing something here with the XL compilers?
<br>
<p>All the files that have _64 as postfix are just wrapper files that do 64 
<br>
bit compilation( i.e -q64)
<br>
<p>build.sh
<br>
-------------
<br>
<p>make distclean
<br>
<p>BUILD_DIR=/opt/openmpi-ofed/xl/64
<br>
<p>export GNU_FLAGS=&quot;-O3&quot;
<br>
export OPTFLAGS=&quot;-O3&quot;
<br>
export LDFLAGS=$GNU_FLAGS
<br>
export RSHCOMMAND=ssh
<br>
export CXX=xlC_64
<br>
export CC=xlc_64
<br>
export F77=xlf_64
<br>
export F90=xlf90_64
<br>
export CCLINKER=xlC_64
<br>
export CLINKER=xlC_64
<br>
export FLINKER=xlf_64
<br>
export FCLINKER=xlf90_64
<br>
export CCFLAGS=&quot;$GNU_FLAGS&quot;
<br>
export CFLAGS=&quot;$GNU_FLAGS&quot;
<br>
export FFLAGS=&quot;$GNU_FLAGS&quot;
<br>
export FCFLAGS=&quot;$GNU_FLAGS&quot;
<br>
../openmpi-1.2b3/configure -prefix=$BUILD_DIR 
<br>
--with-wrapper-cflags=&quot;$CFLAGS&quot; --with-openib=/usr/local/ofed \
<br>
--with-wrapper-cxxflags=&quot;$CCFLAGS&quot; --with-wrapper-fflags=&quot;$FFLAGS&quot; 
<br>
--with-wrapper-fcflags=&quot;$FCFLAGS&quot;
<br>
make -j 2
<br>
<p><p><p>last few lines of the error
<br>
<p>source='../../openmpi-1.2b3/opal/threads/thread.c' 
<br>
object='threads/thread.lo' libtool=yes \
<br>
DEPDIR=.deps depmode=none /bin/sh ../../openmpi-1.2b3/config/depcomp \
<br>
/bin/sh ../libtool --tag=CC --mode=compile xlc_64 -DHAVE_CONFIG_H -I. 
<br>
-I../../openmpi-1.2b3/opal -I../opal/include -I../orte/include 
<br>
-I../ompi/include -I../ompi/include   -I../../openmpi-1.2b3 -I.. 
<br>
-I../../openmpi-1.2b3/opal/include -I../../openmpi-1.2b3/orte/include 
<br>
-I../../openmpi-1.2b3/ompi/include    -DNDEBUG -O3  -c -o 
<br>
threads/thread.lo ../../openmpi-1.2b3/opal/threads/thread.c
<br>
libtool: compile:  xlc_64 -DHAVE_CONFIG_H -I. -I../../openmpi-1.2b3/opal 
<br>
-I../opal/include -I../orte/include -I../ompi/include -I../ompi/include 
<br>
-I../../openmpi-1.2b3 -I.. -I../../openmpi-1.2b3/opal/include 
<br>
-I../../openmpi-1.2b3/orte/include -I../../openmpi-1.2b3/ompi/include 
<br>
-DNDEBUG -O3 -c ../../openmpi-1.2b3/opal/threads/mutex.c  -DPIC -o 
<br>
threads/.libs/mutex.o
<br>
libtool: compile:  xlc_64 -DHAVE_CONFIG_H -I. -I../../openmpi-1.2b3/opal 
<br>
-I../opal/include -I../orte/include -I../ompi/include -I../ompi/include 
<br>
-I../../openmpi-1.2b3 -I.. -I../../openmpi-1.2b3/opal/include 
<br>
-I../../openmpi-1.2b3/orte/include -I../../openmpi-1.2b3/ompi/include 
<br>
-DNDEBUG -O3 -c ../../openmpi-1.2b3/opal/threads/thread.c  -DPIC -o 
<br>
threads/.libs/thread.o
<br>
/bin/sh ../libtool --tag=CC --mode=link xlc_64  -DNDEBUG -O3   
<br>
-export-dynamic -O3  -o libopen-pal.la -rpath 
<br>
/opt/openmpi-ofed/xl/64/lib   class/opal_free_list.lo 
<br>
class/opal_hash_table.lo class/opal_list.lo class/opal_object.lo 
<br>
class/opal_atomic_lifo.lo class/opal_value_array.lo 
<br>
memoryhooks/memory.lo runtime/opal_progress.lo runtime/opal_finalize.lo 
<br>
runtime/opal_init.lo runtime/opal_params.lo threads/condition.lo 
<br>
threads/mutex.lo threads/thread.lo  libltdl/libltdlc.la asm/libasm.la 
<br>
event/libevent.la mca/base/libmca_base.la util/libopalutil.la 
<br>
mca/backtrace/libmca_backtrace.la 
<br>
mca/backtrace/execinfo/libmca_backtrace_execinfo.la  
<br>
mca/maffinity/libmca_maffinity.la  mca/memcpy/libmca_memcpy.la  
<br>
mca/memory/libmca_memory.la 
<br>
mca/memory/ptmalloc2/libmca_memory_ptmalloc2.la  
<br>
mca/paffinity/libmca_paffinity.la  mca/timer/libmca_timer.la 
<br>
mca/timer/linux/libmca_timer_linux.la  -lnsl -lutil
<br>
libtool: link: xlc_64 -shared  class/.libs/opal_free_list.o 
<br>
class/.libs/opal_hash_table.o class/.libs/opal_list.o 
<br>
class/.libs/opal_object.o class/.libs/opal_atomic_lifo.o 
<br>
class/.libs/opal_value_array.o memoryhooks/.libs/memory.o 
<br>
runtime/.libs/opal_progress.o runtime/.libs/opal_finalize.o 
<br>
runtime/.libs/opal_init.o runtime/.libs/opal_params.o 
<br>
threads/.libs/condition.o threads/.libs/mutex.o threads/.libs/thread.o  
<br>
--whole-archive libltdl/.libs/libltdlc.a asm/.libs/libasm.a 
<br>
event/.libs/libevent.a mca/base/.libs/libmca_base.a 
<br>
util/.libs/libopalutil.a mca/backtrace/.libs/libmca_backtrace.a 
<br>
mca/backtrace/execinfo/.libs/libmca_backtrace_execinfo.a 
<br>
mca/maffinity/.libs/libmca_maffinity.a mca/memcpy/.libs/libmca_memcpy.a 
<br>
mca/memory/.libs/libmca_memory.a 
<br>
mca/memory/ptmalloc2/.libs/libmca_memory_ptmalloc2.a 
<br>
mca/paffinity/.libs/libmca_paffinity.a mca/timer/.libs/libmca_timer.a 
<br>
mca/timer/linux/.libs/libmca_timer_linux.a --no-whole-archive  -ldl 
<br>
-lnsl -lutil -lc                              -soname libopen-pal.so.0 
<br>
-o .libs/libopen-pal.so.0.0.0
<br>
xlc: 1501-216 command option --whole-archive is not recognized - passed 
<br>
to ld
<br>
xlc: 1501-216 command option --no-whole-archive is not recognized - 
<br>
passed to ld
<br>
xlc: 1501-218 file libopen-pal.so.0 contains an incorrect file suffix
<br>
xlc: 1501-228 input file libopen-pal.so.0 not found
<br>
make[2]: *** [libopen-pal.la] Error 252
<br>
make[2]: Leaving directory `/root/ocf/software/openmpi-1.2b3-ofed-xl/opal'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/root/ocf/software/openmpi-1.2b3-ofed-xl/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><pre>
-- 
regards,
Arif Ali
Software Engineer
OCF plc
Mobile: +44 (0)7970 148 122
Office: +44 (0)114 257 2200
Fax:    +44 (0)114 257 0022
Email:  aali_at_[hidden]
Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
Skype:  arif_ali80
MSN:    aali_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2717.php">Kobotov, Alexander V: "[OMPI users] BLACS tests fails on IPF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
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
