<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 18:03:10 2010" -->
<!-- isoreceived="20101123230310" -->
<!-- sent="Tue, 23 Nov 2010 18:03:04 -0500" -->
<!-- isosent="20101123230304" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="04FB949B-23E8-468E-AC32-A39A194F8A70_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1290552231.24821.40.camel_at_godzilla" -->
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
<strong>Date:</strong> 2010-11-23 18:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8711.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8709.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8707.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8711.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8711.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8721.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you know the max size of the receives I would take a different approach. Post few persistent receives, and manage them in a circular buffer. Instead of doing an MPI_Iprobe, use MPI_Test on the current head of your circular buffer. Once you use the data related to the receive, just do an MPI_Start on your request.
<br>
<p>This approach will minimize the unexpected messages, and drain the connections faster. Moreover, at the end it is very easy to MPI_Cancel all the receives not yet matched.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 23, 2010, at 17:43 , S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; Le mardi 23 novembre 2010 &#224; 17:38 -0500, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The eager size reported by ompi_info includes the Open MPI internal headers. They are anywhere between 20 and 64 bytes long (potentially more for some particular networks), so what Eugene suggested was a safe boundary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, eager send can improve performance if and only if the matching receives are already posted on the peer. If not, the data will become unexpected, and there will be one additional memcpy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it won't improve performance in my application (Ray,
</span><br>
<span class="quotelev1">&gt; <a href="http://denovoassembler.sf.net">http://denovoassembler.sf.net</a>) because I use MPI_Iprobe to check for
</span><br>
<span class="quotelev1">&gt; incoming messages, which means any receive (MPI_Recv) is never posted
</span><br>
<span class="quotelev1">&gt; before any send (MPI_Isend).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, this thread is very informative for me !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 23, 2010, at 17:29 , S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le mardi 23 novembre 2010 &#224; 16:07 -0500, Eugene Loh a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now I can describe the cases.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The test cases can all be explained by the test requiring eager messages 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (something that test4096.cpp does not require).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Case 1: 30 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; File: mpirun-np-30-Program-4096.txt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4096 is rendezvous.  For eager, try 4000 or lower.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According to ompi_info, the threshold is 4096, not 4000, right ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Open-MPI 1.4.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sboisver12_at_colosse1 ~]$ ompi_info -a|less
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;4096&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (must be &gt;= 1).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;btl_sm_eager_limit: Below this size, messages are sent &quot;eagerly&quot; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is, a sender attempts to write its entire message to shared buffers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without waiting for a receiver to be ready. Above this size, a sender
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will only write the first part of a message, then wait for the receiver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to acknowledge its ready before continuing. Eager sends can improve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance by decoupling senders from receivers.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=sm#more-sm">http://www.open-mpi.org/faq/?category=sm#more-sm</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It should say &quot;Below this size or equal to this size&quot; instead of &quot;Below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this size&quot; as ompi_info says. ;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As Mr. George Bosilca put it:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;__should__ is not correct, __might__ is a better verb to describe the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; most &quot;common&quot; behavior for small messages. The problem comes from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fact that in each communicator the FIFO ordering is required by the MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standard. As soon as there is any congestion, MPI_Send will block even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for small messages (and this independent on the underlying network)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; until all he pending packets have been delivered.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8696.php">http://www.open-mpi.org/community/lists/devel/2010/11/8696.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Case 2: 30 MPI ranks, message size is 1 byte
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; File: mpirun-np-30-Program-1.txt.gz
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 byte is eager.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Case 3: 2 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; File: mpirun-np-2-Program-4096.txt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Same as Case 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; disabled
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eager limit for TCP is 65536 (perhaps less some overhead).  So, these 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; messages are eager.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; M. S&#233;bastien Boisvert
</span><br>
<span class="quotelev1">&gt; &#201;tudiant au doctorat en physiologie-endocrinologie &#224; l'Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt; Boursier des Instituts de recherche en sant&#233; du Canada
</span><br>
<span class="quotelev1">&gt; &#201;quipe du Professeur Jacques Corbeil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Centre de recherche en infectiologie de l'Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt; Local R-61B
</span><br>
<span class="quotelev1">&gt; 2705, boulevard Laurier
</span><br>
<span class="quotelev1">&gt; Qu&#233;bec, Qu&#233;bec
</span><br>
<span class="quotelev1">&gt; Canada G1V 4G2
</span><br>
<span class="quotelev1">&gt; T&#233;l&#233;phone: 418 525 4444 46342
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Courriel: SEB_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://boisvert.info">http://boisvert.info</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
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
<li><strong>Next message:</strong> <a href="8711.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8709.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8707.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8711.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8711.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8721.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
