<?
$subject_val = "Re: [OMPI users] mpirun on 8-way node with rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 15:25:41 2008" -->
<!-- isoreceived="20080803192541" -->
<!-- sent="Sun, 3 Aug 2008 12:18:15 -0700" -->
<!-- isosent="20080803191815" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun on 8-way node with rsh" -->
<!-- id="204469AF-3AFC-4DE4-A832-16FC03ED158A_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4895EEA7.1010209_at_dartmouth.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun on 8-way node with rsh<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-03 15:18:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6256.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6254.php">Pete Schmitt: "[OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>In reply to:</strong> <a href="6254.php">Pete Schmitt: "[OMPI users] mpirun on 8-way node with rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6258.php">Ralph Castain: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>Reply:</strong> <a href="6258.php">Ralph Castain: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pete,
<br>
<p>I don't know why the behavior on an 8 processor machine differs with  
<br>
the machine file format/syntax. You don't need to specify a machine  
<br>
file on a single multiprocessor machine.
<br>
<p>On you torque scheduled cluster you shouldn't need a machine file for  
<br>
openmpi. Openmpi should just use the number of processors you  
<br>
requested from torque. It will communicate with torque to find out  
<br>
which ones to use.
<br>
<p>Doug Reeder
<br>
On Aug 3, 2008, at 10:45 AM, Pete Schmitt wrote:
<br>
<p><span class="quotelev1">&gt; I use the following:  mpirun -machinefile machine.file -np 8 ./mpi- 
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev1">&gt; and the machine file has the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; t01
</span><br>
<span class="quotelev1">&gt; t01
</span><br>
<span class="quotelev1">&gt; t01
</span><br>
<span class="quotelev1">&gt; t01
</span><br>
<span class="quotelev1">&gt; t01
</span><br>
<span class="quotelev1">&gt; t01
</span><br>
<span class="quotelev1">&gt; t01
</span><br>
<span class="quotelev1">&gt; t01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rm_12992: (0.632812) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev1">&gt; rm_13053: (0.421875) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev1">&gt; rm_l_3_13050: (0.636719) net_send: could not write to fd=5, errno = 32
</span><br>
<span class="quotelev1">&gt; rm_13114: (0.210938) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev1">&gt; rm_12870: (1.066406) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev1">&gt; rm_12931: (0.855469) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev1">&gt; rm_l_4_13111: (0.425781) net_send: could not write to fd=5, errno = 32
</span><br>
<span class="quotelev1">&gt; rm_l_1_12929: (1.070312) net_send: could not write to fd=5, errno = 32
</span><br>
<span class="quotelev1">&gt; rm_l_2_12989: (0.859375) net_send: could not write to fd=5, errno = 32
</span><br>
<span class="quotelev1">&gt; rm_l_5_13172: (0.214844) net_send: could not write to fd=5, errno = 32
</span><br>
<span class="quotelev1">&gt; p0_12866: (5.285156) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use np=6 or less, it works fine.   It also works with 8 if the
</span><br>
<span class="quotelev1">&gt; machine.file just contains t01:8
</span><br>
<span class="quotelev1">&gt; Since we want to submit this to a torque/moab cluster, it's not  
</span><br>
<span class="quotelev1">&gt; possible
</span><br>
<span class="quotelev1">&gt; to get the latter format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OS is a 64b RH5.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pete Schmitt
</span><br>
<span class="quotelev1">&gt; Technical Director:
</span><br>
<span class="quotelev1">&gt;  Discovery Cluster / Computational Genetics Lab
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://discovery.dartmouth.edu">http://discovery.dartmouth.edu</a>
</span><br>
<span class="quotelev1">&gt; 179M Berry Baker Library, HB 6224
</span><br>
<span class="quotelev1">&gt; Dartmouth College
</span><br>
<span class="quotelev1">&gt; Hanover, NH 03755
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dart: 603-646-8109
</span><br>
<span class="quotelev1">&gt; DHMC: 603-653-3598
</span><br>
<span class="quotelev1">&gt; Fax:  603-646-1042
</span><br>
<span class="quotelev1">&gt; Cell: 603-252-2452
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6256.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6254.php">Pete Schmitt: "[OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>In reply to:</strong> <a href="6254.php">Pete Schmitt: "[OMPI users] mpirun on 8-way node with rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6258.php">Ralph Castain: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>Reply:</strong> <a href="6258.php">Ralph Castain: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
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
