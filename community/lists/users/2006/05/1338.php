<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 14:41:59 2006" -->
<!-- isoreceived="20060531184159" -->
<!-- sent="Wed, 31 May 2006 14:41:52 -0400" -->
<!-- isosent="20060531184152" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers." -->
<!-- id="8d39cca0605311141g70b838bdy3f6bf1b3ba44806f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0605311111360.9932_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-31 14:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1339.php">William Voorhees: "[OMPI users] Recommended Resources for learning MPI"</a>
<li><strong>Previous message:</strong> <a href="1337.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>In reply to:</strong> <a href="1336.php">Brian W. Barrett: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1340.php">Brian Barrett: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Reply:</strong> <a href="1340.php">Brian Barrett: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/31/06, Brian W. Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A quick workaround is to edit opal/include/opal_config.h and change the
</span><br>
<span class="quotelev1">&gt; #defines for OMPI_CXX_GCC_INLINE_ASSEMBLY and OMPI_CC_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev1">&gt; from 1 to 0.  That should allow you to build Open MPI with those XL
</span><br>
<span class="quotelev1">&gt; compilers.  Hopefully IBM will fix this in a future version ;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well I actually edited include/ompi_config.h and set both
<br>
OMPI_C_GCC_INLINE_ASSEMBLY
<br>
and OMPI_CXX_GCC_INLINE_ASSEMBLY to 0.  This worked until libtool tried to
<br>
create
<br>
a shared library:
<br>
<p>/bin/sh ../libtool --tag=CC --mode=link gxlc_64  -O -DNDEBUG
<br>
-qnokeyword=asm   -export-dynamic   -o libopal.la -rpath
<br>
/usr/local/ompi-xl/lib   libltdl/libltdlc.la asm/libasm.la class/libclass.la
<br>
event/libevent.la mca/base/libmca_base.la memoryhooks/libopalmemory.la
<br>
runtime/libruntime.la threads/libthreads.la util/libopalutil.la
<br>
mca/maffinity/base/libmca_maffinity_base.la
<br>
mca/memory/base/libmca_memory_base.la
<br>
mca/memory/malloc_hooks/libmca_memory_malloc_hooks.la
<br>
mca/paffinity/base/libmca_paffinity_base.la
<br>
mca/timer/base/libmca_timer_base.la mca/timer/linux/libmca_timer_linux.la
<br>
-lm  -lutil -lnsl
<br>
mkdir .libs
<br>
gxlc_64 -shared  --whole-archive libltdl/.libs/libltdlc.a asm/.libs/libasm.a
<br>
class/.libs/libclass.a event/.libs/libevent.a mca/base/.libs/libmca_base.a
<br>
memoryhooks/.libs/libopalmemory.a runtime/.libs/libruntime.a
<br>
threads/.libs/libthreads.a util/.libs/libopalutil.a
<br>
mca/maffinity/base/.libs/libmca_maffinity_base.a
<br>
mca/memory/base/.libs/libmca_memory_base.a
<br>
mca/memory/malloc_hooks/.libs/libmca_memory_malloc_hooks.a
<br>
mca/paffinity/base/.libs/libmca_paffinity_base.a
<br>
mca/timer/base/.libs/libmca_timer_base.a
<br>
mca/timer/linux/.libs/libmca_timer_linux.a --no-whole-archive  -ldl -lm
<br>
-lutil -lnsl -lc  -qnokeyword=asm -soname libopal.so.0 -o
<br>
.libs/libopal.so.0.0.0
<br>
gxlc: 1501-257 Option --whole-archive is not recognized.  Option will be
<br>
ignored.
<br>
gxlc: 1501-257 Option --no-whole-archive is not recognized.  Option will be
<br>
ignored.
<br>
gxlc: 1501-257 Option -qnokeyword=asm is not recognized.  Option will be
<br>
ignored.
<br>
gxlc: 1501-257 Option -soname is not recognized.  Option will be ignored.
<br>
xlc: 1501-218 file libopal.so.0 contains an incorrect file suffix
<br>
xlc: 1501-228 input file libopal.so.0 not found
<br>
xlc -q64 -qthreaded -D_REENTRANT -lpthread -qmkshrobj
<br>
libltdl/.libs/libltdlc.a asm/.libs/libasm.a class/.libs/libclass.a
<br>
event/.libs/libevent.a mca/base/.libs/libmca_base.a
<br>
memoryhooks/.libs/libopalmemory.a runtime/.libs/libruntime.a
<br>
threads/.libs/libthreads.a util/.libs/libopalutil.a
<br>
mca/maffinity/base/.libs/libmca_maffinity_base.
<br>
<p>I was able to fix this by editing libtool and replacing $CC with $LD in the
<br>
following:
<br>
<p># Commands used to build and install a shared archive.
<br>
archive_cmds=&quot;\$LD -shared \$libobjs \$deplibs \$compiler_flags
<br>
\${wl}-soname \$wl\$soname -o \$lib&quot;
<br>
archive_expsym_cmds=&quot;\$echo \\\&quot;{ global:\\\&quot; &gt;
<br>
\$output_objdir/\$libname.ver~
<br>
&nbsp;&nbsp;cat \$export_symbols | sed -e \\\&quot;s/\\\\(.*\\\\)/\\\\1;/\\\&quot; &gt;&gt;
<br>
\$output_objdir/\$libname.ver~
<br>
&nbsp;&nbsp;\$echo \\\&quot;local: *; };\\\&quot; &gt;&gt; \$output_objdir/\$libname.ver~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;\$LD -shared \$libobjs \$deplibs \$compiler_flags \${wl}-soname
<br>
\$wl\$soname \${wl}-version-script \${wl}\$output_objdir/\$libname.ver -o
<br>
\$lib&quot;
<br>
<p>We then fail later on at:
<br>
<p>make[3]: Entering directory `/usr/src/openmpi-1.0.3a1r10133
<br>
/orte/tools/orted'
<br>
/bin/sh ../../../libtool --tag=CC --mode=link gxlc_64  -O -DNDEBUG
<br>
-export-dynamic   -o orted   orted.o ../../../orte/liborte.la
<br>
../../../opal/libopal.la  -lm  -lutil -lnsl
<br>
gxlc_64 -O -DNDEBUG -o .libs/orted orted.o --export-dynamic
<br>
../../../orte/.libs/liborte.so
<br>
/usr/src/openmpi-1.0.3a1r10133/opal/.libs/libopal.so
<br>
../../../opal/.libs/libopal.so -ldl -lm -lutil -lnsl --rpath
<br>
/usr/local/ompi-xl/lib
<br>
gxlc: 1501-257 Option --export-dynamic is not recognized.  Option will be
<br>
ignored.
<br>
gxlc: 1501-257 Option --rpath is not recognized.  Option will be ignored.
<br>
xlc: 1501-274 An incompatible level of gcc has been specified.
<br>
xlc: 1501-228 input file /usr/local/ompi-xl/lib not found
<br>
xlc -q64 -qthreaded -D_REENTRANT -lpthread -O -DNDEBUG -o .libs/orted
<br>
orted.o ../../../orte/.libs/liborte.so
<br>
/usr/src/openmpi-1.0.3a1r10133/opal/.libs/libopal.so
<br>
../../../opal/.libs/libopal.so -ldl -lm -lutil -lnsl /usr/local/ompi-xl/lib
<br>
<p>Simply replacing ld for gxlc_64 here obviously won't work.
<br>
node42 orted # ld  -O -DNDEBUG -o .libs/orted orted.o --export-dynamic
<br>
../../../orte/.libs/liborte.so
<br>
/usr/src/openmpi-1.0.3a1r10133/opal/.libs/libopal.so
<br>
../../../opal/.libs/libopal.so -ldl -lm -lutil -lnsl --rpath
<br>
/usr/local/ompi-xl/lib -lpthread
<br>
ld: warning: cannot find entry symbol _start; defaulting to 0000000010013ed8
<br>
<p>Of course, I've been told that directly linking with ld isn't such a great
<br>
idea in the first
<br>
place.  Ideas?
<br>
<p>Thanks,
<br>
<p>Justin.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1338/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1339.php">William Voorhees: "[OMPI users] Recommended Resources for learning MPI"</a>
<li><strong>Previous message:</strong> <a href="1337.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>In reply to:</strong> <a href="1336.php">Brian W. Barrett: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1340.php">Brian Barrett: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Reply:</strong> <a href="1340.php">Brian Barrett: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
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
