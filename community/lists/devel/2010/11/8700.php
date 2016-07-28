<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 16:09:10 2010" -->
<!-- isoreceived="20101123210910" -->
<!-- sent="Tue, 23 Nov 2010 13:07:56 -0800" -->
<!-- isosent="20101123210756" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="4CEC2D2C.7040500_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1289946413.23022.10.camel_at_lw132" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 16:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8701.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8699.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8685.php">S&#233;bastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8702.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8702.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8704.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt;Now I can describe the cases.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
The test cases can all be explained by the test requiring eager messages 
<br>
(something that test4096.cpp does not require).
<br>
<p><span class="quotelev1">&gt;Case 1: 30 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;File: mpirun-np-30-Program-4096.txt
</span><br>
<span class="quotelev1">&gt;Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
4096 is rendezvous.  For eager, try 4000 or lower.
<br>
<p><span class="quotelev1">&gt;Case 2: 30 MPI ranks, message size is 1 byte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;File: mpirun-np-30-Program-1.txt.gz
</span><br>
<span class="quotelev1">&gt;Outcome: It runs just fine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
1 byte is eager.
<br>
<p><span class="quotelev1">&gt;Case 3: 2 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;File: mpirun-np-2-Program-4096.txt
</span><br>
<span class="quotelev1">&gt;Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Same as Case 1.
<br>
<p><span class="quotelev1">&gt;Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
</span><br>
<span class="quotelev1">&gt;disabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
</span><br>
<span class="quotelev1">&gt;Outcome: It runs just fine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Eager limit for TCP is 65536 (perhaps less some overhead).  So, these 
<br>
messages are eager.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8701.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8699.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8685.php">S&#233;bastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8702.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8702.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8704.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
