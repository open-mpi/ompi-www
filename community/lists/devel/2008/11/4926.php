<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 15:24:21 2008" -->
<!-- isoreceived="20081119202421" -->
<!-- sent="Wed, 19 Nov 2008 15:24:16 -0500" -->
<!-- isosent="20081119202416" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081119202416.GC240_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081119184255.GB240_at_sun.com" -->
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
<strong>Date:</strong> 2008-11-19 15:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4927.php">Shiqing Fan: "[OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4925.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4924.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4932.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4932.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4934.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov/19/2008 01:42:55PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Wed, Nov/19/2008 05:12:03PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello Ethan,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; * Ethan Mallove wrote on Wed, Nov 19, 2008 at 04:11:23PM CET:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There are a couple issues with SunStudio and Libtool:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Which Libtool version are you using?  If not 2.2.2 or newer, then please
</span><br>
<span class="quotelev2">&gt; &gt; retry with 2.2.6.  If the problem persists, then we should fix Libtool
</span><br>
<span class="quotelev2">&gt; &gt; rather than patching OpenMPI.  That way, other packages benefit from the
</span><br>
<span class="quotelev2">&gt; &gt; fix as well.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using 2.2 (for Solaris) and 2.1b (for Linux). I'll try
</span><br>
<span class="quotelev1">&gt; 2.2.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I'm seeing the same issue with the faulty &quot;wl&quot; Libtool
<br>
variable in 2.2.6 with Linux SunStudio:
<br>
<p>&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;make[5]: Entering directory `ompi/mpi/f90'
<br>
&nbsp;&nbsp;/bin/sh ../../../libtool   --mode=link f90 -I../../../ompi/include -I../../../ompi/include -M. -I. -I../../../ompi/mpi/f90  -m32 -xO5  -export-dynamic    -o libmpi_f90.la -rpath /opt/SUNWhpc/HPC8.1/sun/lib mpi.lo mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo       ../../../ompi/libmpi.la -lnsl -lutil  -lm
<br>
&nbsp;&nbsp;libtool: link: f90 -G  .libs/mpi.o .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   -Wl,-rpath -Wl,ompi/.libs -Wl,-rpath -Wl,/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/orte/.libs -Wl,-rpath -Wl,/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/opal/.libs -Wl,-rpath -Wl,/opt/SUNWhpc/HPC8.1/sun/lib -L/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/orte/.libs -L/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/opal/.libs ../../../ompi/.libs/libmpi.so /tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/orte/.libs/libopen-rte.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm  -m32   -mt -Wl,-soname -Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
<br>
&nbsp;&nbsp;f90: Warning: Option -Wl,-rpath passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;f90: Warning: Option -Wl,ompi/.libs passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;f90: Warning: Option -Wl,-rpath passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f90: Warning: Option -Wl,orte/.libs passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f90: Warning: Option -Wl,-rpath passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f90: Warning: Option -Wl,opal/.libs passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f90: Warning: Option -Wl,-rpath passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f90: Warning: Option -Wl,/opt/SUNWhpc/HPC8.1/sun/lib passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f90: Warning: Option -Wl,-soname passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f90: Warning: Option -Wl,libmpi_f90.so.0 passed to ld, if ld is invoked, ignored otherwise
<br>
&nbsp;&nbsp;/usr/bin/ld: unrecognized option '-Wl,-rpath'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/ld: use the --help option for usage information
<br>
&nbsp;&nbsp;make[5]: *** [libmpi_f90.la] Error 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make[5]: Leaving directory `ompi/mpi/f90'
<br>
&nbsp;&nbsp;make[4]: *** [install-recursive] Error 1
<br>
&nbsp;&nbsp;make[4]: Leaving directory `ompi/mpi/f90'
<br>
&nbsp;&nbsp;make[3]: *** [install] Error 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make[3]: Leaving directory `ompi/mpi/f90'
<br>
&nbsp;&nbsp;make[2]: *** [install-recursive] Error 1
<br>
&nbsp;&nbsp;make[2]: Leaving directory `ompi'
<br>
&nbsp;&nbsp;make[1]: *** [install] Error 2
<br>
&nbsp;&nbsp;make[1]: Leaving directory `ompi'
<br>
&nbsp;&nbsp;make: *** [install-recursive] Error 1
<br>
<p>The wl var in auto-generated libtool script should be set to
<br>
&quot;&quot;.
<br>
<p>Less sure about the Cstd/stlport4 issue, though it does
<br>
appear from the below thread that the issue was already
<br>
tackled at some point:
<br>
<p>&nbsp;&nbsp;<a href="http://lists.gnu.org/archive/html/libtool/2008-02/msg00024.html">http://lists.gnu.org/archive/html/libtool/2008-02/msg00024.html</a>
<br>
<p>The thread says the Cstd/stlport4 issue was fixed in 2006.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Ralf
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4927.php">Shiqing Fan: "[OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4925.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4924.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4932.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4932.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4934.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
