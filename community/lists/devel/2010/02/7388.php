<?
$subject_val = "[OMPI devel] [patch] return value not updated in ompi_mpi_init()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 09:13:32 2010" -->
<!-- isoreceived="20100209141332" -->
<!-- sent="Tue, 9 Feb 2010 15:13:38 +0100" -->
<!-- isosent="20100209141338" -->
<!-- name="Guillaume Thouvenin" -->
<!-- email="guillaume.thouvenin_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] return value not updated in ompi_mpi_init()" -->
<!-- id="20100209151338.4c6837d1_at_frecb007984.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] return value not updated in ompi_mpi_init()<br>
<strong>From:</strong> Guillaume Thouvenin (<em>guillaume.thouvenin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 09:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7389.php">Ralph Castain: "Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>Previous message:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7389.php">Ralph Castain: "Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>Reply:</strong> <a href="7389.php">Ralph Castain: "Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;It seems that a return value is not updated during the setup of
<br>
process affinity in function ompi_mpi_init()
<br>
ompi/runtime/ompi_mpi_init.c:459
<br>
<p>&nbsp;The problem is in the following piece of code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[... here ret == OPAL_SUCCESS ...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;phys_cpu = opal_paffinity_base_get_physical_processor_id(nrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (0 &gt; phys_cpu) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;Could not get physical processor id - cannot set processor affinity&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[...]
<br>
<p>&nbsp;If opal_paffinity_base_get_physical_processor_id() failed ret is not
<br>
updated and we will reach the &quot;error:&quot; label while ret == OPAL_SUCCESS.
<br>
<p>&nbsp;As a result MPI_Init() will return without having initialized the
<br>
MPI_COMM_WORLD struct leading to a segmentation fault on calls like
<br>
MPI_Comm_size().
<br>
<p>&nbsp;I got the bug recently with new westmere processors for which the
<br>
function opal_paffinity_base_get_physical_processor_id() failed if we
<br>
are using the mca parameter &quot;opal_paffinity_alone 1&quot; during the
<br>
execution.
<br>
<p>&nbsp;I'm not sure that it's the right way to fix the problem but here is a
<br>
patch tested with v1.5. This patch allows to report the problem instead
<br>
of generating a segmentation fault.
<br>
<p>With the patch, the output is:
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;Could not get physical processor id - cannot set processor affinity
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-5) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
<p>Without the patch, the output was:
<br>
<p>&nbsp;*** Process received signal ***
<br>
&nbsp;Signal: Segmentation fault (11)
<br>
&nbsp;Signal code: Address not mapped (1)
<br>
&nbsp;Failing at address: 0x10
<br>
[ 0] /lib64/libpthread.so.0 [0x3d4e20ee90]
<br>
[ 1] /home_nfs/thouveng/dev/openmpi-v1.5/lib/libmpi.so.0(MPI_Comm_size+0x9c) [0x7fce74468dfc]
<br>
[ 2] ./IMB-MPI1(IMB_init_pointers+0x2f) [0x40629f]
<br>
[ 3] ./IMB-MPI1(main+0x65) [0x4035c5]
<br>
[ 4] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3d4da1ea2d]
<br>
[ 5] ./IMB-MPI1 [0x403499]
<br>
<p><p>Regards,
<br>
Guillaume
<br>
<p><pre>
---
diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
--- a/ompi/runtime/ompi_mpi_init.c
+++ b/ompi/runtime/ompi_mpi_init.c
@@ -459,6 +459,7 @@ int ompi_mpi_init(int argc, char **argv,
                 OPAL_PAFFINITY_CPU_ZERO(mask);
                 phys_cpu = opal_paffinity_base_get_physical_processor_id(nrank);
                 if (0 &gt; phys_cpu) {
+                    ret = phys_cpu;
                     error = &quot;Could not get physical processor id - cannot set processor affinity&quot;;
                     goto error;
                 }
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7389.php">Ralph Castain: "Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>Previous message:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7389.php">Ralph Castain: "Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>Reply:</strong> <a href="7389.php">Ralph Castain: "Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
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
