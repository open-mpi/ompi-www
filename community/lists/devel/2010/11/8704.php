<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 17:29:41 2010" -->
<!-- isoreceived="20101123222941" -->
<!-- sent="Tue, 23 Nov 2010 17:29:44 -0500" -->
<!-- isosent="20101123222944" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="1290551384.24821.30.camel_at_godzilla" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 17:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8705.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8708.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le mardi 23 novembre 2010 &#195;&#160; 16:07 -0500, Eugene Loh a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Now I can describe the cases.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; The test cases can all be explained by the test requiring eager messages 
</span><br>
<span class="quotelev1">&gt; (something that test4096.cpp does not require).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Case 1: 30 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;File: mpirun-np-30-Program-4096.txt
</span><br>
<span class="quotelev2">&gt; &gt;Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 4096 is rendezvous.  For eager, try 4000 or lower.
</span><br>
<p>According to ompi_info, the threshold is 4096, not 4000, right ?
<br>
<p>(Open-MPI 1.4.3)
<br>
[sboisver12_at_colosse1 ~]$ ompi_info -a|less
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
<br>
&quot;4096&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maximum size (in bytes) of &quot;short&quot; messages
<br>
(must be &gt;= 1).
<br>
<p><p>&quot;btl_sm_eager_limit: Below this size, messages are sent &quot;eagerly&quot; --
<br>
that is, a sender attempts to write its entire message to shared buffers
<br>
without waiting for a receiver to be ready. Above this size, a sender
<br>
will only write the first part of a message, then wait for the receiver
<br>
to acknowledge its ready before continuing. Eager sends can improve
<br>
performance by decoupling senders from receivers.&quot;
<br>
<p><p><p>source:
<br>
<a href="http://www.open-mpi.org/faq/?category=sm#more-sm">http://www.open-mpi.org/faq/?category=sm#more-sm</a>
<br>
<p><p>It should say &quot;Below this size or equal to this size&quot; instead of &quot;Below
<br>
this size&quot; as ompi_info says. ;)
<br>
<p><p><p><p>As Mr. George Bosilca put it:
<br>
<p>&quot;__should__ is not correct, __might__ is a better verb to describe the
<br>
most &quot;common&quot; behavior for small messages. The problem comes from the
<br>
fact that in each communicator the FIFO ordering is required by the MPI
<br>
standard. As soon as there is any congestion, MPI_Send will block even
<br>
for small messages (and this independent on the underlying network)
<br>
until all he pending packets have been delivered.&quot;
<br>
<p>source:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8696.php">http://www.open-mpi.org/community/lists/devel/2010/11/8696.php</a>
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Case 2: 30 MPI ranks, message size is 1 byte
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;File: mpirun-np-30-Program-1.txt.gz
</span><br>
<span class="quotelev2">&gt; &gt;Outcome: It runs just fine.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 1 byte is eager.
</span><br>
<p>I agree.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Case 3: 2 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;File: mpirun-np-2-Program-4096.txt
</span><br>
<span class="quotelev2">&gt; &gt;Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Same as Case 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
</span><br>
<span class="quotelev2">&gt; &gt;disabled
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
</span><br>
<span class="quotelev2">&gt; &gt;Outcome: It runs just fine.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Eager limit for TCP is 65536 (perhaps less some overhead).  So, these 
</span><br>
<span class="quotelev1">&gt; messages are eager.
</span><br>
<p>I agree.
<br>
<p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8705.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8708.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
