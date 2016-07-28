<?
$subject_val = "[OMPI users] OMPI not calling finalize error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  2 11:05:47 2011" -->
<!-- isoreceived="20110402150547" -->
<!-- sent="Sat, 2 Apr 2011 09:05:42 -0600" -->
<!-- isosent="20110402150542" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI not calling finalize error" -->
<!-- id="SNT134-w24CBE500D312F260D6A358CBA10_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-02 11:05:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16066.php">David Zhang: "Re: [OMPI users] OMPI not calling finalize error"</a>
<li><strong>Previous message:</strong> <a href="16064.php">Satoi Ogawa: "[OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16066.php">David Zhang: "Re: [OMPI users] OMPI not calling finalize error"</a>
<li><strong>Reply:</strong> <a href="16066.php">David Zhang: "Re: [OMPI users] OMPI not calling finalize error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
When I run a parallel program, I got an error : ------------------------------------------------------------------[n333:129522] *** Process received signal ***[n333:129522] Signal: Segmentation fault (11)[n333:129522] Signal code: Address not mapped (1)[n333:129522] Failing at address: 0x40[n333:129522] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0][n333:129522] [ 1] /opt/openmpi-1.3.4-gnu/lib/libmpi.so.0 [0x4cd19b1][n333:129522] [ 2] /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0(opal_progress+0x75) [0x52e5165][n333:129522] [ 3] /opt/openmpi-1.3.4-gnu/lib/libopen-rte.so.0 [0x508565c][n333:129522] [ 4] /opt/openmpi-1.3.4-gnu/lib/libmpi.so.0 [0x4c653eb][n333:129522] [ 5] /opt/openmpi-1.3.4-gnu/lib/libmpi.so.0(MPI_Init+0x120) [0x4c84b90][n333:129522] [ 6] /lustre/jxding/netplan49/nsga2b [0x4497f6][n333:129522] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974][n333:129522] [ 8] /lustre/jxding/netplan49/nsga2b(__gxx_personality_v0+0x499) [0x4436e9][n333:129522] *** End of error message ***--------------------------------------------------------------------------mpirun has exited due to process rank 24 with PID 129522 onnode n333 exiting without calling &quot;finalize&quot;. This mayhave caused other processes in the application to beterminated by signals sent by mpirun (as reported here).-----------------------------------------------------------------------------------------------------------------------------------------------------------------But, the program only run for not more than a few of minutes. It should take hours to finish. 
<br>
How can it reach &quot;finalize&quot; so fast ? 
<br>
Any help is appreciated. 
<br>
Jack 		 	   		  
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-16065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16066.php">David Zhang: "Re: [OMPI users] OMPI not calling finalize error"</a>
<li><strong>Previous message:</strong> <a href="16064.php">Satoi Ogawa: "[OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16066.php">David Zhang: "Re: [OMPI users] OMPI not calling finalize error"</a>
<li><strong>Reply:</strong> <a href="16066.php">David Zhang: "Re: [OMPI users] OMPI not calling finalize error"</a>
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
