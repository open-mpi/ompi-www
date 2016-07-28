<?
$subject_val = "Re: [OMPI users] mpirun on 8-way node with rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 09:01:13 2008" -->
<!-- isoreceived="20080804130113" -->
<!-- sent="Mon, 4 Aug 2008 07:01:05 -0600" -->
<!-- isosent="20080804130105" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun on 8-way node with rsh" -->
<!-- id="6BE841D0-50B3-4DE5-BCC2-A1447353ADD8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="204469AF-3AFC-4DE4-A832-16FC03ED158A_at_rain.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 09:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6259.php">Bernhard Hermann: "[OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Previous message:</strong> <a href="6257.php">Lenny Verkhovsky: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pete
<br>
<p>I'm not sure how to help here as the error messages you show are not  
<br>
something coming from Open MPI - we have no such function as  
<br>
&quot;net_send&quot;, nor any such error message in our code base.
<br>
<p>Are you sure you are using Open MPI (if so, which version)? Or is this  
<br>
an error message from your program?
<br>
Ralph
<br>
<p>On Aug 3, 2008, at 1:18 PM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Pete,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know why the behavior on an 8 processor machine differs with  
</span><br>
<span class="quotelev1">&gt; the machine file format/syntax. You don't need to specify a machine  
</span><br>
<span class="quotelev1">&gt; file on a single multiprocessor machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On you torque scheduled cluster you shouldn't need a machine file  
</span><br>
<span class="quotelev1">&gt; for openmpi. Openmpi should just use the number of processors you  
</span><br>
<span class="quotelev1">&gt; requested from torque. It will communicate with torque to find out  
</span><br>
<span class="quotelev1">&gt; which ones to use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2008, at 10:45 AM, Pete Schmitt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use the following:  mpirun -machinefile machine.file -np 8 ./mpi- 
</span><br>
<span class="quotelev2">&gt;&gt; program
</span><br>
<span class="quotelev2">&gt;&gt; and the machine file has the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; t01
</span><br>
<span class="quotelev2">&gt;&gt; t01
</span><br>
<span class="quotelev2">&gt;&gt; t01
</span><br>
<span class="quotelev2">&gt;&gt; t01
</span><br>
<span class="quotelev2">&gt;&gt; t01
</span><br>
<span class="quotelev2">&gt;&gt; t01
</span><br>
<span class="quotelev2">&gt;&gt; t01
</span><br>
<span class="quotelev2">&gt;&gt; t01
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rm_12992: (0.632812) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev2">&gt;&gt; rm_13053: (0.421875) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev2">&gt;&gt; rm_l_3_13050: (0.636719) net_send: could not write to fd=5, errno =  
</span><br>
<span class="quotelev2">&gt;&gt; 32
</span><br>
<span class="quotelev2">&gt;&gt; rm_13114: (0.210938) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev2">&gt;&gt; rm_12870: (1.066406) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev2">&gt;&gt; rm_12931: (0.855469) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev2">&gt;&gt; rm_l_4_13111: (0.425781) net_send: could not write to fd=5, errno =  
</span><br>
<span class="quotelev2">&gt;&gt; 32
</span><br>
<span class="quotelev2">&gt;&gt; rm_l_1_12929: (1.070312) net_send: could not write to fd=5, errno =  
</span><br>
<span class="quotelev2">&gt;&gt; 32
</span><br>
<span class="quotelev2">&gt;&gt; rm_l_2_12989: (0.859375) net_send: could not write to fd=5, errno =  
</span><br>
<span class="quotelev2">&gt;&gt; 32
</span><br>
<span class="quotelev2">&gt;&gt; rm_l_5_13172: (0.214844) net_send: could not write to fd=5, errno =  
</span><br>
<span class="quotelev2">&gt;&gt; 32
</span><br>
<span class="quotelev2">&gt;&gt; p0_12866: (5.285156) net_send: could not write to fd=4, errno = 32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I use np=6 or less, it works fine.   It also works with 8 if the
</span><br>
<span class="quotelev2">&gt;&gt; machine.file just contains t01:8
</span><br>
<span class="quotelev2">&gt;&gt; Since we want to submit this to a torque/moab cluster, it's not  
</span><br>
<span class="quotelev2">&gt;&gt; possible
</span><br>
<span class="quotelev2">&gt;&gt; to get the latter format.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The OS is a 64b RH5.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Pete Schmitt
</span><br>
<span class="quotelev2">&gt;&gt; Technical Director:
</span><br>
<span class="quotelev2">&gt;&gt; Discovery Cluster / Computational Genetics Lab
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="http://discovery.dartmouth.edu">http://discovery.dartmouth.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; 179M Berry Baker Library, HB 6224
</span><br>
<span class="quotelev2">&gt;&gt; Dartmouth College
</span><br>
<span class="quotelev2">&gt;&gt; Hanover, NH 03755
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dart: 603-646-8109
</span><br>
<span class="quotelev2">&gt;&gt; DHMC: 603-653-3598
</span><br>
<span class="quotelev2">&gt;&gt; Fax:  603-646-1042
</span><br>
<span class="quotelev2">&gt;&gt; Cell: 603-252-2452
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6259.php">Bernhard Hermann: "[OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Previous message:</strong> <a href="6257.php">Lenny Verkhovsky: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
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
