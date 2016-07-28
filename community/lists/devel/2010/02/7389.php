<?
$subject_val = "Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 11:29:27 2010" -->
<!-- isoreceived="20100209162927" -->
<!-- sent="Tue, 9 Feb 2010 09:29:19 -0700" -->
<!-- isosent="20100209162919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()" -->
<!-- id="D023C2F6-F8ED-4F6E-AFC9-F83952023DDD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100209151338.4c6837d1_at_frecb007984.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 11:29:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7390.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Previous message:</strong> <a href="7388.php">Guillaume Thouvenin: "[OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>In reply to:</strong> <a href="7388.php">Guillaume Thouvenin: "[OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops - yep, that is an oversight! Will fix - thanks!
<br>
<p>On Feb 9, 2010, at 7:13 AM, Guillaume Thouvenin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that a return value is not updated during the setup of
</span><br>
<span class="quotelev1">&gt; process affinity in function ompi_mpi_init()
</span><br>
<span class="quotelev1">&gt; ompi/runtime/ompi_mpi_init.c:459
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is in the following piece of code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [... here ret == OPAL_SUCCESS ...]
</span><br>
<span class="quotelev1">&gt;    phys_cpu = opal_paffinity_base_get_physical_processor_id(nrank);
</span><br>
<span class="quotelev1">&gt;    if (0 &gt; phys_cpu) {
</span><br>
<span class="quotelev1">&gt;        error = &quot;Could not get physical processor id - cannot set processor affinity&quot;;
</span><br>
<span class="quotelev1">&gt;        goto error;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If opal_paffinity_base_get_physical_processor_id() failed ret is not
</span><br>
<span class="quotelev1">&gt; updated and we will reach the &quot;error:&quot; label while ret == OPAL_SUCCESS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a result MPI_Init() will return without having initialized the
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD struct leading to a segmentation fault on calls like
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got the bug recently with new westmere processors for which the
</span><br>
<span class="quotelev1">&gt; function opal_paffinity_base_get_physical_processor_id() failed if we
</span><br>
<span class="quotelev1">&gt; are using the mca parameter &quot;opal_paffinity_alone 1&quot; during the
</span><br>
<span class="quotelev1">&gt; execution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure that it's the right way to fix the problem but here is a
</span><br>
<span class="quotelev1">&gt; patch tested with v1.5. This patch allows to report the problem instead
</span><br>
<span class="quotelev1">&gt; of generating a segmentation fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the patch, the output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Could not get physical processor id - cannot set processor affinity
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Not found&quot; (-5) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without the patch, the output was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [ 0] /lib64/libpthread.so.0 [0x3d4e20ee90]
</span><br>
<span class="quotelev1">&gt; [ 1] /home_nfs/thouveng/dev/openmpi-v1.5/lib/libmpi.so.0(MPI_Comm_size+0x9c) [0x7fce74468dfc]
</span><br>
<span class="quotelev1">&gt; [ 2] ./IMB-MPI1(IMB_init_pointers+0x2f) [0x40629f]
</span><br>
<span class="quotelev1">&gt; [ 3] ./IMB-MPI1(main+0x65) [0x4035c5]
</span><br>
<span class="quotelev1">&gt; [ 4] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3d4da1ea2d]
</span><br>
<span class="quotelev1">&gt; [ 5] ./IMB-MPI1 [0x403499]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Guillaume
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; @@ -459,6 +459,7 @@ int ompi_mpi_init(int argc, char **argv,
</span><br>
<span class="quotelev1">&gt;                 OPAL_PAFFINITY_CPU_ZERO(mask);
</span><br>
<span class="quotelev1">&gt;                 phys_cpu = opal_paffinity_base_get_physical_processor_id(nrank);
</span><br>
<span class="quotelev1">&gt;                 if (0 &gt; phys_cpu) {
</span><br>
<span class="quotelev1">&gt; +                    ret = phys_cpu;
</span><br>
<span class="quotelev1">&gt;                     error = &quot;Could not get physical processor id - cannot set processor affinity&quot;;
</span><br>
<span class="quotelev1">&gt;                     goto error;
</span><br>
<span class="quotelev1">&gt;                 }
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
<li><strong>Next message:</strong> <a href="7390.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Previous message:</strong> <a href="7388.php">Guillaume Thouvenin: "[OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>In reply to:</strong> <a href="7388.php">Guillaume Thouvenin: "[OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
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
