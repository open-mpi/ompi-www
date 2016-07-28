<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 20:26:27 2015" -->
<!-- isoreceived="20150619002627" -->
<!-- sent="Thu, 18 Jun 2015 17:26:21 -0700" -->
<!-- isosent="20150619002621" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash" -->
<!-- id="001CAD4F-D2E6-43A1-AE7A-79A638647332_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EDC41A_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-18 20:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27161.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27159.php">Lane, William: "[OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27159.php">Lane, William: "[OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27161.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27161.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I don&#146;t think this actually has anything to do with the #procs you are trying to run. Instead, I expect it has to do with confusion over how many cores it can bind across. When you tell it to use-hwthread-cpus, you are asking us to map processes to hwthreads, and not cores. I don&#146;t know which nodes are which, but it could be that we are getting incorrect info somewhere.
<br>
<p>Given that you are limiting the number of procs to the number of cores, is there some reason why you are asking us to use-hwthread-cpus? Why not just leave it at the default core level?
<br>
<p>I also suspect that you would have no problems if you &#151;bind-to none - does that in fact work?
<br>
<p><p><span class="quotelev1">&gt; On Jun 18, 2015, at 4:54 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having a strange problem w/OpenMPI 1.8.6. If I run
</span><br>
<span class="quotelev1">&gt; my OpenMPI test code (compiled against OpenMPI 1.8.6
</span><br>
<span class="quotelev1">&gt; libraries) on &lt; 131 slots I get no issues. Anything over 131
</span><br>
<span class="quotelev1">&gt; errors out:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/ --hostfile hostfile-single --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The hostfile has the number of slots restricted
</span><br>
<span class="quotelev1">&gt; to the number of cores, while the max-slots includes
</span><br>
<span class="quotelev1">&gt; the hyperthreading cores (e.g. csclprd3-0-0 slots=6 
</span><br>
<span class="quotelev1">&gt; max-slots=12).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The nodes are a mix of IBM x3550 nodes some
</span><br>
<span class="quotelev1">&gt; are Sandybridges and others are older Xeons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to add that the submit node from
</span><br>
<span class="quotelev1">&gt; which I am launching mpirun has the open files
</span><br>
<span class="quotelev1">&gt; soft limit (ulimit -a) set to 1024, while the hard limit
</span><br>
<span class="quotelev1">&gt; (ulimit -Ha) is set to 4096. I know open file limits
</span><br>
<span class="quotelev1">&gt; were an issue w/an older version of OpenMPI. The
</span><br>
<span class="quotelev1">&gt; compute nodes all have their hard open files limit
</span><br>
<span class="quotelev1">&gt; and soft open files limits set to 4096.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the output (csclprd3-0-13 is the last node
</span><br>
<span class="quotelev1">&gt; listed in the hostfile hostfile-single):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] Failing at address: 0x7f30002a8980
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] Failing at address: 0x7fe137662880
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] Failing at address: 0x7f9b40228a80
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] Failing at address: 0x7f0de7f2bb00
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] Failing at address: 0x7f9b6c2e8980
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] Failing at address: 0x7f30002a8980
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] Failing at address: 0x7fe137662880
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] Failing at address: 0x7f9b40228a80
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] Failing at address: 0x7f0de7f2bb00
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] Failing at address: 0x7f9b6c2e8980
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] [ 3] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f9b513ad110]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x219)[0x7f0df77b6009]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [ 3] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f0df77b6110]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f9b5141d68e]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f9b514f1715]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f30115ea68e]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f30116be715]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f9b7bb3b68e]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f9b7bc0f715]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] [ 6] [csclprd3-0-13:28764] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7fa946bb768e]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7fe146d4068e]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f0df782668e]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f0df78fa715]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f0df77d0ad6]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fe146e14715]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fe146ceaad6]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f9b513c7ad6]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f9b513e6c60]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9b50dc7cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28768] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f3011594ad6]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f30115b3c60]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f3010f94cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28765] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f9b7bae5ad6]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f9b7bb04c60]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9b7b4e5cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fa946c8b715]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fa946b61ad6]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f0df77efc60]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f0df71d0cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fe146d09c60]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe1466eacdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28767] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fa946c8b715]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fa946b61ad6]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f0df77efc60]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f0df71d0cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28770] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fe146d09c60]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe1466eacdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28766] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fa946b80c60]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] [ 8] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fa946561cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] [10] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:28764] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 126 with PID 0 on node csclprd3-0-13 exited on signal 7 (Bus error).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could a lack of the necessary NUMA libraries or the wrong version of NUMA
</span><br>
<span class="quotelev1">&gt; libraries be contributing to this?
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27159.php">http://www.open-mpi.org/community/lists/users/2015/06/27159.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27159.php">http://www.open-mpi.org/community/lists/users/2015/06/27159.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27161.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27159.php">Lane, William: "[OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27159.php">Lane, William: "[OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27161.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27161.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
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
