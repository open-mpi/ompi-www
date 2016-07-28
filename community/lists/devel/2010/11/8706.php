<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 17:38:52 2010" -->
<!-- isoreceived="20101123223852" -->
<!-- sent="Tue, 23 Nov 2010 17:38:46 -0500" -->
<!-- isosent="20101123223846" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="3DDA5901-F03D-4DCA-BEA9-921AC75E900D_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1290551384.24821.30.camel_at_godzilla" -->
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
<strong>Date:</strong> 2010-11-23 17:38:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8707.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8705.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8704.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8707.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8707.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8709.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The eager size reported by ompi_info includes the Open MPI internal headers. They are anywhere between 20 and 64 bytes long (potentially more for some particular networks), so what Eugene suggested was a safe boundary.
<br>
<p>Moreover, eager send can improve performance if and only if the matching receives are already posted on the peer. If not, the data will become unexpected, and there will be one additional memcpy.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 23, 2010, at 17:29 , S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; Le mardi 23 novembre 2010 &#224; 16:07 -0500, Eugene Loh a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now I can describe the cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The test cases can all be explained by the test requiring eager messages 
</span><br>
<span class="quotelev2">&gt;&gt; (something that test4096.cpp does not require).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Case 1: 30 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; File: mpirun-np-30-Program-4096.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4096 is rendezvous.  For eager, try 4000 or lower.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to ompi_info, the threshold is 4096, not 4000, right ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Open-MPI 1.4.3)
</span><br>
<span class="quotelev1">&gt; [sboisver12_at_colosse1 ~]$ ompi_info -a|less
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4096&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                          Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev1">&gt; (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_eager_limit: Below this size, messages are sent &quot;eagerly&quot; --
</span><br>
<span class="quotelev1">&gt; that is, a sender attempts to write its entire message to shared buffers
</span><br>
<span class="quotelev1">&gt; without waiting for a receiver to be ready. Above this size, a sender
</span><br>
<span class="quotelev1">&gt; will only write the first part of a message, then wait for the receiver
</span><br>
<span class="quotelev1">&gt; to acknowledge its ready before continuing. Eager sends can improve
</span><br>
<span class="quotelev1">&gt; performance by decoupling senders from receivers.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; source:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=sm#more-sm">http://www.open-mpi.org/faq/?category=sm#more-sm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should say &quot;Below this size or equal to this size&quot; instead of &quot;Below
</span><br>
<span class="quotelev1">&gt; this size&quot; as ompi_info says. ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Mr. George Bosilca put it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;__should__ is not correct, __might__ is a better verb to describe the
</span><br>
<span class="quotelev1">&gt; most &quot;common&quot; behavior for small messages. The problem comes from the
</span><br>
<span class="quotelev1">&gt; fact that in each communicator the FIFO ordering is required by the MPI
</span><br>
<span class="quotelev1">&gt; standard. As soon as there is any congestion, MPI_Send will block even
</span><br>
<span class="quotelev1">&gt; for small messages (and this independent on the underlying network)
</span><br>
<span class="quotelev1">&gt; until all he pending packets have been delivered.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; source:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8696.php">http://www.open-mpi.org/community/lists/devel/2010/11/8696.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Case 2: 30 MPI ranks, message size is 1 byte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; File: mpirun-np-30-Program-1.txt.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1 byte is eager.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Case 3: 2 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; File: mpirun-np-2-Program-4096.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Same as Case 1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disabled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eager limit for TCP is 65536 (perhaps less some overhead).  So, these 
</span><br>
<span class="quotelev2">&gt;&gt; messages are eager.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8707.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8705.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8704.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8707.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8707.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8709.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
