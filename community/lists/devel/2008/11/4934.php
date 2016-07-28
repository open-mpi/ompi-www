<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 12:53:45 2008" -->
<!-- isoreceived="20081120175345" -->
<!-- sent="Thu, 20 Nov 2008 18:53:38 +0100" -->
<!-- isosent="20081120175338" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081120175337.GB20093_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 12:53:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4926.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ethan,
<br>
<p>* Ethan Mallove wrote on Wed, Nov 19, 2008 at 09:24:16PM CET:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing the same issue with the faulty &quot;wl&quot; Libtool
</span><br>
<span class="quotelev1">&gt; variable in 2.2.6 with Linux SunStudio:
</span><br>
<p>That's really weird, because this change should have fixed that:
<br>
&lt;<a href="http://git.savannah.gnu.org/gitweb/?p=libtool.git;a=commitdiff;h=a84c618b61f9f3a8c41e76fa7ab87b92db7a70c3;hp=3c31380f6f2be5d3ec30b337ecb7886c80c9e437">http://git.savannah.gnu.org/gitweb/?p=libtool.git;a=commitdiff;h=a84c618b61f9f3a8c41e76fa7ab87b92db7a70c3;hp=3c31380f6f2be5d3ec30b337ecb7886c80c9e437</a>&gt;
<br>
<p><span class="quotelev1">&gt;   make[5]: Entering directory `ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt;   /bin/sh ../../../libtool   --mode=link f90 -I../../../ompi/include -I../../../ompi/include -M. -I. -I../../../ompi/mpi/f90  -m32 -xO5  -export-dynamic    -o libmpi_f90.la -rpath /opt/SUNWhpc/HPC8.1/sun/lib mpi.lo mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo       ../../../ompi/libmpi.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt;   libtool: link: f90 -G  .libs/mpi.o .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   -Wl,-rpath -Wl,ompi/.libs -Wl,-rpath -Wl,/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/orte/.libs -Wl,-rpath -Wl,/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/opal/.libs -Wl,-rpath -Wl,/opt/SUNWhpc/HPC8.1/sun/lib -L/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/orte/.libs -L/tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/opal/.libs ../../../ompi/.libs/libmpi.so /tmp/mtt-scratch-patch-libtool-for-sun-studio/mpi-install/HFfN/src/ompi-ct8.1-v1.3-sandbox/orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev1">&gt;      opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm  -m32   -mt -Wl,-soname -Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt;   f90: Warning: Option -Wl,-rpath passed to ld, if ld is invoked, ignored otherwise
</span><br>
[...]
<br>
<p>Please post the output of
<br>
&nbsp;&nbsp;f90 -V
<br>
<p>and the output of
<br>
&nbsp;&nbsp;./libtool --tag=FC --config
<br>
<p>to see what's going on.
<br>
<p>Thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4926.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
