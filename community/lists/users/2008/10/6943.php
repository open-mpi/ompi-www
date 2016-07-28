<?
$subject_val = "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 14:55:03 2008" -->
<!-- isoreceived="20081010185503" -->
<!-- sent="Fri, 10 Oct 2008 14:54:58 -0400" -->
<!-- isosent="20081010185458" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory" -->
<!-- id="D07C853F-0388-4983-AEDA-ECFE0F3CF8C5_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1223656939.23009.1278622977_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 14:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6944.php">Craig Tierney: "[OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6942.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6938.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 10, 2008, at 12:42 PM, V. Ram wrote:
<br>
<p><span class="quotelev1">&gt; Can anyone else suggest why the code might be crashing when running  
</span><br>
<span class="quotelev1">&gt; over
</span><br>
<span class="quotelev1">&gt; ethernet and not over shared memory?  Any suggestions on how to debug
</span><br>
<span class="quotelev1">&gt; this or interpret the error message issued from btl_tcp_frag.c ?
</span><br>
<p>Unfortunately this is a standard error message which do not enlighten  
<br>
us on what the real error is/was. It simply state that one node failed  
<br>
to read data from a socket, which usually happens when the remote peer  
<br>
died unexpectedly (such as a seg-fault).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6944.php">Craig Tierney: "[OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6942.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6938.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
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
