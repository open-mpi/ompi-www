<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 17:19:24 2010" -->
<!-- isoreceived="20101123221924" -->
<!-- sent="Tue, 23 Nov 2010 17:19:19 -0500" -->
<!-- isosent="20101123221919" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="194C5D2E-161D-4580-B010-AF93770B2BDF_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CEC2D2C.7040500_at_oracle.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 17:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8701.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8704.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No message is eager if there is congestion. 64K is eager for TCP only if the kernel buffer has enough room to hold the 64k. For SM it only works if there are ready buffers. In fact, eager is an optimization of the MPI library, not something the users should be aware of, or base their application on this particular behavior.
<br>
<p>On the MPI 2.2 there is a specific paragraph that advice the users not to do it.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Nov 23, 2010, at 16:07 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now I can describe the cases.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; The test cases can all be explained by the test requiring eager messages (something that test4096.cpp does not require).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Case 1: 30 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; File: mpirun-np-30-Program-4096.txt
</span><br>
<span class="quotelev2">&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 4096 is rendezvous.  For eager, try 4000 or lower.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Case 2: 30 MPI ranks, message size is 1 byte
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; File: mpirun-np-30-Program-1.txt.gz
</span><br>
<span class="quotelev2">&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 1 byte is eager.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Case 3: 2 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; File: mpirun-np-2-Program-4096.txt
</span><br>
<span class="quotelev2">&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Same as Case 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
</span><br>
<span class="quotelev2">&gt;&gt; disabled
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
</span><br>
<span class="quotelev2">&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Eager limit for TCP is 65536 (perhaps less some overhead).  So, these messages are eager.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8701.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8704.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
