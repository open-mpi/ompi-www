<?
$subject_val = "[OMPI users] Segmentation fault when checkpointing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 13:12:55 2012" -->
<!-- isoreceived="20120329171255" -->
<!-- sent="Thu, 29 Mar 2012 17:12:47 +0000" -->
<!-- isosent="20120329171247" -->
<!-- name="Linton, Tom" -->
<!-- email="tom.linton_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault when checkpointing" -->
<!-- id="49CF7D2C430CF64F8CD8846494DE652F0E33B1B3_at_ORSMSX102.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault when checkpointing<br>
<strong>From:</strong> Linton, Tom (<em>tom.linton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 13:12:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18874.php">Amit Ghadge: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18872.php">Joshua Baker-LePain: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18875.php">Josh Hursey: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
<li><strong>Reply:</strong> <a href="18875.php">Josh Hursey: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a legacy application that runs fine on our cluster using Intel MPI with hundreds of cores. We ported it to OpenMPI so that we could use BLCR and it runs fine but checkpointing is not working properly:
<br>
<p>1. when we checkpoint with more than 1 core, each MPI rank reports a segmentation fault for the MPI job and the ompi-checkpoint command does not return. For example, with two cores we get:
<br>
[tscco28017:16352] *** Process received signal ***
<br>
[tscco28017:16352] Signal: Segmentation fault (11)
<br>
[tscco28017:16352] Signal code: Address not mapped (1)
<br>
[tscco28017:16352] Failing at address: 0x7fffef51
<br>
[tscco28017:16353] *** Process received signal ***
<br>
[tscco28017:16353] Signal: Segmentation fault (11)
<br>
[tscco28017:16353] Signal code: Address not mapped (1)
<br>
[tscco28017:16353] Failing at address: 0x7fffef51
<br>
[tscco28017:16353] [ 0] /lib64/libpthread.so.0(+0xf5d0) [0x7ffff698e5d0]
<br>
[tscco28017:16353] [ 1] [0xf500b0]
<br>
[tscco28017:16353] *** End of error message ***
<br>
[tscco28017:16352] [ 0] /lib64/libpthread.so.0(+0xf5d0) [0x7ffff698e5d0]
<br>
[tscco28017:16352] [ 1] [0xf500b0]
<br>
[tscco28017:16352] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 16353 on node tscco28017 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
When I execute the TotalView debugger on a resulting core file (I assume it's for the rank 0 process), Totalview reports a null frame pointer and the stack is trashed (gdb shows a backtrace with 30 frames but shows no debug info).
<br>
<p>2. Checkpointing with 1 core on the legacy program works.
<br>
3. Checkpointing with a simple test program on 16 cores works.
<br>
<p><p>Can you suggest how to debug this problem?
<br>
<p>Some additional information:
<br>
<p><p>*        I execute the program like this: mpirun -am ft-enable-cr -n 2 -machinefile machines program inputfile
<br>
<p>*        We are using Open MPI 1.4.4 with BLCR 0.8.4
<br>
<p>*        OpenMPI and the application were both compiled on the same machine using the Intel icc 12.0.4 compiler
<br>
<p>*        For the failing example, both MPI processes are running on cores on the same machine node.
<br>
<p>*        I have attached &quot;ompi_info.txt&quot;
<br>
<p>*        We're running on a single Xeon 5150 node with Gigabit Ethernet.
<br>
<p>*        [Reuti: previously I reported a problem involving illegal instructions but this turned out to be a build problem. Sorry I didn't answer your response to my previous thread but I was having problems with accessing this email list at that time.]
<br>
<p>Thanks
<br>
Tom
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18873/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18874.php">Amit Ghadge: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18872.php">Joshua Baker-LePain: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18875.php">Josh Hursey: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
<li><strong>Reply:</strong> <a href="18875.php">Josh Hursey: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
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
