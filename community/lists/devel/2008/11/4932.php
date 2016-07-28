<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 12:52:15 2008" -->
<!-- isoreceived="20081120175215" -->
<!-- sent="Thu, 20 Nov 2008 12:52:09 -0500" -->
<!-- isosent="20081120175209" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081120175209.GD240_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081119202416.GC240_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 12:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4931.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4926.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov/19/2008 03:24:16PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Wed, Nov/19/2008 01:42:55PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Nov/19/2008 05:12:03PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello Ethan,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * Ethan Mallove wrote on Wed, Nov 19, 2008 at 04:11:23PM CET:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; There are a couple issues with SunStudio and Libtool:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Which Libtool version are you using?  If not 2.2.2 or newer, then please
</span><br>
<span class="quotelev3">&gt; &gt; &gt; retry with 2.2.6.  If the problem persists, then we should fix Libtool
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rather than patching OpenMPI.  That way, other packages benefit from the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fix as well.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm using 2.2 (for Solaris) and 2.1b (for Linux). I'll try
</span><br>
<span class="quotelev2">&gt; &gt; 2.2.6.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing the same issue with the faulty &quot;wl&quot; Libtool
</span><br>
<span class="quotelev1">&gt; variable in 2.2.6 with Linux SunStudio:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;   make[5]: Entering directory `ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt;   /bin/sh ../../../libtool   --mode=link f90 -I../../../ompi/include -I../../../ompi/include -M. -I. -I../../../ompi/mpi/f90  -m32 -xO5  -export-dynamic    -o libmpi_f90.la -rpath /opt/SUNWhpc/HPC8.1/sun/lib mpi.lo mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo       ../../../ompi/libmpi.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt;   libtool: link: f90 -G  .libs/mpi.o .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   -Wl,-rpath -Wl,ompi/.libs -Wl,-rpath -Wl,/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/orte/.libs -Wl,-rpath -Wl,/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/opal/.libs -Wl,-rpath -Wl,/opt/SUNWhpc/HPC8.1/sun/lib -L/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/orte/.libs -L/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/opal/.libs ../../../ompi/.libs/libmpi.so /tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev1">&gt;      opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm  -m32   -mt -Wl,-soname -Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt;   f90: Warning: Option -Wl,-rpath passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;   f90: Warning: Option -Wl,ompi/.libs passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;   f90: Warning: Option -Wl,-rpath passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;      f90: Warning: Option -Wl,orte/.libs passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;      f90: Warning: Option -Wl,-rpath passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;      f90: Warning: Option -Wl,opal/.libs passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;      f90: Warning: Option -Wl,-rpath passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;      f90: Warning: Option -Wl,/opt/SUNWhpc/HPC8.1/sun/lib passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;      f90: Warning: Option -Wl,-soname passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;      f90: Warning: Option -Wl,libmpi_f90.so.0 passed to ld, if ld is invoked, ignored otherwise
</span><br>
<span class="quotelev1">&gt;   /usr/bin/ld: unrecognized option '-Wl,-rpath'
</span><br>
<span class="quotelev1">&gt;      /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt;   make[5]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev1">&gt;      make[5]: Leaving directory `ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt;   make[4]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;   make[4]: Leaving directory `ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt;   make[3]: *** [install] Error 2
</span><br>
<span class="quotelev1">&gt;      make[3]: Leaving directory `ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt;   make[2]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;   make[2]: Leaving directory `ompi'
</span><br>
<span class="quotelev1">&gt;   make[1]: *** [install] Error 2
</span><br>
<span class="quotelev1">&gt;   make[1]: Leaving directory `ompi'
</span><br>
<span class="quotelev1">&gt;   make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The wl var in auto-generated libtool script should be set to
</span><br>
<span class="quotelev1">&gt; &quot;&quot;.
</span><br>
<p>I think I found a potential problem. I see this in configure:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;case `$CC -V 2&gt;&amp;1 | sed 5q` in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*Sun\ C*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Sun C 5.9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_prog_compiler_pic='-KPIC'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_prog_compiler_static='-Bstatic'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_prog_compiler_wl='-Wl,'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*Sun\ F*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Sun Fortran 8.3 passes all unrecognized flags to the linker
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_prog_compiler_pic='-KPIC'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_prog_compiler_static='-Bstatic'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_prog_compiler_wl=''
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
<p>The above appears to be looking for a Fortran version string from the
<br>
C compiler, but it wouldn't match our version string anyway:
<br>
<p>&nbsp;&nbsp;$ f90 -V
<br>
&nbsp;&nbsp;f90: Sun Ceres Fortran 95 8.3 SunOS_sparc 2008/01/28
<br>
<p>The result is that lt_prog_compiler_wl never gets set to '', and it
<br>
should. See attached (untested) patch.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Less sure about the Cstd/stlport4 issue, though it does
</span><br>
<span class="quotelev1">&gt; appear from the below thread that the issue was already
</span><br>
<span class="quotelev1">&gt; tackled at some point:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://lists.gnu.org/archive/html/libtool/2008-02/msg00024.html">http://lists.gnu.org/archive/html/libtool/2008-02/msg00024.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The thread says the Cstd/stlport4 issue was fixed in 2006.
</span><br>
<p>I'm still running into the Cstd/stlport4 issue with 2.2.6. That is,
<br>
this line appears in the libtool script:
<br>
<p>&nbsp;&nbsp;postdeps=&quot;-library=Cstd -library=Crun&quot;
<br>
<p>I thought maybe adding this before the Libtool section in configure.ac
<br>
would solve the problem, but it does not:
<br>
<p>&nbsp;&nbsp;if test &quot;x$ompi_cv_c_compiler_vendor&quot; = &quot;xsun&quot;; then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Do not link with &quot;-library=Crun -library=Cstd&quot; for libmpi_cxx because
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# this can lead to Cstd/stlport4 incompatiblities
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_postdeps_CXX=''
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Sun Studio f90 (for Linux) does not pass -Wl values to the GNU linker
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -n &quot;`echo $host | $GREP linux`&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lt_prog_compiler_wl_FC=''
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;fi
<br>
<p>Is there a way to set some lt_ variables in configure.ac so that we
<br>
get a functional libtool script?
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Ethan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ralf
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4932/libtool-sun-fortran-8.3.diff">libtool-sun-fortran-8.3.diff</a>
</ul>
<!-- attachment="libtool-sun-fortran-8.3.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4931.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4926.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
