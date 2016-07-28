<?
$subject_val = "Re: [OMPI devel] New MOSIX components draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 31 15:30:07 2012" -->
<!-- isoreceived="20120331193007" -->
<!-- sent="Sat, 31 Mar 2012 13:29:59 -0600" -->
<!-- isosent="20120331192959" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New MOSIX components draft" -->
<!-- id="59009E45-0F14-47FB-885B-BB2A95E0BAFC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F772AFC.8050301_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New MOSIX components draft<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-31 15:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10794.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10792.php">Alex Margolin: "[OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="10792.php">Alex Margolin: "[OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10794.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10794.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to the BTL itself, but I do have questions as to how this can work. If MOSIX migrates a process, or starts new processes on another node during the course of a job, there is no way for MPI to handle the wireup and so it will fail. We need ALL the procs started at the beginning of time, and for them to remain in their initial location throughout the job. There are people working on how to handle proc movement, but mostly from a fault recovery perspective - i.e., the process is already  known and wired, but fails and restarts at a new location, so we can try to re-wire it.
<br>
<p>I've looked at MOSIX before for other folks (easy enough to fork/exec a proc), but could find no real way to support the way MOSIX wants to manage resources without the constraint that MOSIX only operate at a job level - i.e., it start all specified procs at the beginning of time, and it not migrate them. Kinda defeated the intent of MOSIX.
<br>
<p><p>On Mar 31, 2012, at 10:04 AM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think i'm close to finishing an initial version of the MOSIX support for open-mpi. A perliminary draft is attached.
</span><br>
<span class="quotelev1">&gt; The support consists of two modules: ODLS module for launching processes under MOSIX, and BTL module for efficient communication between processes.
</span><br>
<span class="quotelev1">&gt; I'm not quite there yet - I'm sure the BTL module needs more work... first because it fails (see error output below) and second because I'm not sure I got all the function output right. I've written some documentation inside the code, which is pretty short at the moment. The ODLS component is working fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible someone will take a look at my code to see if i'm in the right direction? I would like to submit my code to the repository eventually... I know of quite a few open-mpi users interested in MOSIX support (they know I'm working on it), and I was hoping to publish some benchmark results for it at the upcoming EuroMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. I get the following Error - I'm pretty sure my BTL is to blame here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$ mpirun -mca btl_base_verbose 100 -mca btl self,mosix hello
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: found loaded component mosix
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: component mosix register function successful
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: component mosix open function successful
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:10838] select: initializing btl component mosix
</span><br>
<span class="quotelev1">&gt; [singularity:10838] select: init of component mosix returned success
</span><br>
<span class="quotelev1">&gt; [singularity:10838] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [singularity:10838] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [singularity:10838] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [singularity:10838] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [singularity:10838] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [singularity:10838] Failing at address: 0x30
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36420) [0x7fa94a3cd420]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 1] /lib/x86_64-linux-gnu/libc.so.6(+0x84391) [0x7fa94a41b391]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 2] /lib/x86_64-linux-gnu/libc.so.6(__strdup+0x16) [0x7fa94a41b086]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 3] /usr/local/lib/libmpi.so.0(opal_argv_append_nosize+0xf7) [0x7fa94add66a4]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 4] /usr/local/lib/openmpi/mca_bml_r2.so(+0x1cf5) [0x7fa946177cf5]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 5] /usr/local/lib/openmpi/mca_bml_r2.so(+0x1e50) [0x7fa946177e50]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 6] /usr/local/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x12f) [0x7fa946382b6d]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 7] /usr/local/lib/libmpi.so.0(ompi_mpi_init+0x909) [0x7fa94acd1549]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 8] /usr/local/lib/libmpi.so.0(MPI_Init+0x16c) [0x7fa94ad033ec]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 9] /home/alex/huji/benchmarks/simple/hello(_ZN3MPI4InitERiRPPc+0x23) [0x409e2d]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [10] /home/alex/huji/benchmarks/simple/hello(main+0x22) [0x408f66]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [11] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7fa94a3b830d]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [12] /home/alex/huji/benchmarks/simple/hello() [0x408e89]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 10838 on node singularity exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$ mpirun -mca btl self,tcp hello
</span><br>
<span class="quotelev1">&gt; [singularity:10841] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:10841] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; Hello world!
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$
</span><br>
<span class="quotelev1">&gt; &lt;mosix_components.diff&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10794.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10792.php">Alex Margolin: "[OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="10792.php">Alex Margolin: "[OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10794.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10794.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
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
