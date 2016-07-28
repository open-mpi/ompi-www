<?
$subject_val = "[OMPI devel] New MOSIX components draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 31 12:04:36 2012" -->
<!-- isoreceived="20120331160436" -->
<!-- sent="Sat, 31 Mar 2012 19:04:12 +0300" -->
<!-- isosent="20120331160412" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] New MOSIX components draft" -->
<!-- id="4F772AFC.8050301_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] New MOSIX components draft<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-31 12:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10791.php">Ralph Castain: "[OMPI devel] Stale code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10795.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think i'm close to finishing an initial version of the MOSIX support 
<br>
for open-mpi. A perliminary draft is attached.
<br>
The support consists of two modules: ODLS module for launching processes 
<br>
under MOSIX, and BTL module for efficient communication between processes.
<br>
I'm not quite there yet - I'm sure the BTL module needs more work... 
<br>
first because it fails (see error output below) and second because I'm 
<br>
not sure I got all the function output right. I've written some 
<br>
documentation inside the code, which is pretty short at the moment. The 
<br>
ODLS component is working fine.
<br>
<p>Is it possible someone will take a look at my code to see if i'm in the 
<br>
right direction? I would like to submit my code to the repository 
<br>
eventually... I know of quite a few open-mpi users interested in MOSIX 
<br>
support (they know I'm working on it), and I was hoping to publish some 
<br>
benchmark results for it at the upcoming EuroMPI.
<br>
<p>P.S. I get the following Error - I'm pretty sure my BTL is to blame here:
<br>
<p>alex_at_singularity:~/huji/benchmarks/simple$ mpirun -mca btl_base_verbose 
<br>
100 -mca btl self,mosix hello
<br>
[singularity:10838] mca: base: component_find: unable to open 
<br>
/usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot open 
<br>
shared object file: No such file or directory (ignored)
<br>
[singularity:10838] mca: base: components_open: Looking for btl components
<br>
[singularity:10838] mca: base: components_open: opening btl components
<br>
[singularity:10838] mca: base: components_open: found loaded component mosix
<br>
[singularity:10838] mca: base: components_open: component mosix register 
<br>
function successful
<br>
[singularity:10838] mca: base: components_open: component mosix open 
<br>
function successful
<br>
[singularity:10838] mca: base: components_open: found loaded component self
<br>
[singularity:10838] mca: base: components_open: component self has no 
<br>
register function
<br>
[singularity:10838] mca: base: components_open: component self open 
<br>
function successful
<br>
[singularity:10838] mca: base: component_find: unable to open 
<br>
/usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open 
<br>
shared object file: No such file or directory (ignored)
<br>
[singularity:10838] select: initializing btl component mosix
<br>
[singularity:10838] select: init of component mosix returned success
<br>
[singularity:10838] select: initializing btl component self
<br>
[singularity:10838] select: init of component self returned success
<br>
[singularity:10838] *** Process received signal ***
<br>
[singularity:10838] Signal: Segmentation fault (11)
<br>
[singularity:10838] Signal code: Address not mapped (1)
<br>
[singularity:10838] Failing at address: 0x30
<br>
[singularity:10838] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36420) 
<br>
[0x7fa94a3cd420]
<br>
[singularity:10838] [ 1] /lib/x86_64-linux-gnu/libc.so.6(+0x84391) 
<br>
[0x7fa94a41b391]
<br>
[singularity:10838] [ 2] /lib/x86_64-linux-gnu/libc.so.6(__strdup+0x16) 
<br>
[0x7fa94a41b086]
<br>
[singularity:10838] [ 3] 
<br>
/usr/local/lib/libmpi.so.0(opal_argv_append_nosize+0xf7) [0x7fa94add66a4]
<br>
[singularity:10838] [ 4] /usr/local/lib/openmpi/mca_bml_r2.so(+0x1cf5) 
<br>
[0x7fa946177cf5]
<br>
[singularity:10838] [ 5] /usr/local/lib/openmpi/mca_bml_r2.so(+0x1e50) 
<br>
[0x7fa946177e50]
<br>
[singularity:10838] [ 6] 
<br>
/usr/local/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x12f) 
<br>
[0x7fa946382b6d]
<br>
[singularity:10838] [ 7] /usr/local/lib/libmpi.so.0(ompi_mpi_init+0x909) 
<br>
[0x7fa94acd1549]
<br>
[singularity:10838] [ 8] /usr/local/lib/libmpi.so.0(MPI_Init+0x16c) 
<br>
[0x7fa94ad033ec]
<br>
[singularity:10838] [ 9] 
<br>
/home/alex/huji/benchmarks/simple/hello(_ZN3MPI4InitERiRPPc+0x23) [0x409e2d]
<br>
[singularity:10838] [10] 
<br>
/home/alex/huji/benchmarks/simple/hello(main+0x22) [0x408f66]
<br>
[singularity:10838] [11] 
<br>
/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7fa94a3b830d]
<br>
[singularity:10838] [12] /home/alex/huji/benchmarks/simple/hello() 
<br>
[0x408e89]
<br>
[singularity:10838] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 10838 on node singularity 
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
alex_at_singularity:~/huji/benchmarks/simple$ mpirun -mca btl self,tcp hello
<br>
[singularity:10841] mca: base: component_find: unable to open 
<br>
/usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot open 
<br>
shared object file: No such file or directory (ignored)
<br>
[singularity:10841] mca: base: component_find: unable to open 
<br>
/usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open 
<br>
shared object file: No such file or directory (ignored)
<br>
Hello world!
<br>
alex_at_singularity:~/huji/benchmarks/simple$
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10792/mosix_components.diff">mosix_components.diff</a>
</ul>
<!-- attachment="mosix_components.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10791.php">Ralph Castain: "[OMPI devel] Stale code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10795.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
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
