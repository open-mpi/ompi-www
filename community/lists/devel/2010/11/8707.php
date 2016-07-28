<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 17:44:03 2010" -->
<!-- isoreceived="20101123224403" -->
<!-- sent="Tue, 23 Nov 2010 17:43:51 -0500" -->
<!-- isosent="20101123224351" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="1290552231.24821.40.camel_at_godzilla" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3DDA5901-F03D-4DCA-BEA9-921AC75E900D_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2010-11-23 17:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8708.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8710.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8710.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le mardi 23 novembre 2010 &#195;&#160; 17:38 -0500, George Bosilca a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; The eager size reported by ompi_info includes the Open MPI internal headers. They are anywhere between 20 and 64 bytes long (potentially more for some particular networks), so what Eugene suggested was a safe boundary.
</span><br>
<p>I see.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moreover, eager send can improve performance if and only if the matching receives are already posted on the peer. If not, the data will become unexpected, and there will be one additional memcpy.
</span><br>
<p>So it won't improve performance in my application (Ray,
<br>
<a href="http://denovoassembler.sf.net">http://denovoassembler.sf.net</a>) because I use MPI_Iprobe to check for
<br>
incoming messages, which means any receive (MPI_Recv) is never posted
<br>
before any send (MPI_Isend).
<br>
<p>Thanks, this thread is very informative for me !
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2010, at 17:29 , S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Le mardi 23 novembre 2010 &#195;&#160; 16:07 -0500, Eugene Loh a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Now I can describe the cases.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The test cases can all be explained by the test requiring eager messages 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (something that test4096.cpp does not require).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Case 1: 30 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; File: mpirun-np-30-Program-4096.txt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4096 is rendezvous.  For eager, try 4000 or lower.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; According to ompi_info, the threshold is 4096, not 4000, right ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (Open-MPI 1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt; [sboisver12_at_colosse1 ~]$ ompi_info -a|less
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;4096&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt; &gt;                          Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev2">&gt; &gt; (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl_sm_eager_limit: Below this size, messages are sent &quot;eagerly&quot; --
</span><br>
<span class="quotelev2">&gt; &gt; that is, a sender attempts to write its entire message to shared buffers
</span><br>
<span class="quotelev2">&gt; &gt; without waiting for a receiver to be ready. Above this size, a sender
</span><br>
<span class="quotelev2">&gt; &gt; will only write the first part of a message, then wait for the receiver
</span><br>
<span class="quotelev2">&gt; &gt; to acknowledge its ready before continuing. Eager sends can improve
</span><br>
<span class="quotelev2">&gt; &gt; performance by decoupling senders from receivers.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; source:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=sm#more-sm">http://www.open-mpi.org/faq/?category=sm#more-sm</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It should say &quot;Below this size or equal to this size&quot; instead of &quot;Below
</span><br>
<span class="quotelev2">&gt; &gt; this size&quot; as ompi_info says. ;)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As Mr. George Bosilca put it:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;__should__ is not correct, __might__ is a better verb to describe the
</span><br>
<span class="quotelev2">&gt; &gt; most &quot;common&quot; behavior for small messages. The problem comes from the
</span><br>
<span class="quotelev2">&gt; &gt; fact that in each communicator the FIFO ordering is required by the MPI
</span><br>
<span class="quotelev2">&gt; &gt; standard. As soon as there is any congestion, MPI_Send will block even
</span><br>
<span class="quotelev2">&gt; &gt; for small messages (and this independent on the underlying network)
</span><br>
<span class="quotelev2">&gt; &gt; until all he pending packets have been delivered.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; source:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8696.php">http://www.open-mpi.org/community/lists/devel/2010/11/8696.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Case 2: 30 MPI ranks, message size is 1 byte
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; File: mpirun-np-30-Program-1.txt.gz
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1 byte is eager.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I agree.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Case 3: 2 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; File: mpirun-np-2-Program-4096.txt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Same as Case 1.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; disabled
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Eager limit for TCP is 65536 (perhaps less some overhead).  So, these 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; messages are eager.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I agree.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
-- 
M. S&#195;&#169;bastien Boisvert
&#195;&#137;tudiant au doctorat en physiologie-endocrinologie &#195;&#160; l'Universit&#195;&#169; Laval
Boursier des Instituts de recherche en sant&#195;&#169; du Canada
&#195;&#137;quipe du Professeur Jacques Corbeil
Centre de recherche en infectiologie de l'Universit&#195;&#169; Laval
Local R-61B
2705, boulevard Laurier
Qu&#195;&#169;bec, Qu&#195;&#169;bec
Canada G1V 4G2
T&#195;&#169;l&#195;&#169;phone: 418 525 4444 46342
Courriel: SEB_at_[hidden]
Web: <a href="http://boisvert.info">http://boisvert.info</a>
&quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8708.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8710.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8710.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
