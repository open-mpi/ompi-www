<?
$subject_val = "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 01:15:59 2011" -->
<!-- isoreceived="20110209061559" -->
<!-- sent="Wed, 9 Feb 2011 07:16:32 +0100" -->
<!-- isosent="20110209061632" -->
<!-- name="Tobias Hilbrich" -->
<!-- email="tobias.hilbrich_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel" -->
<!-- id="F599D3E8-91E4-4A23-8F8E-1B059B8BF2E4_at_zih.tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A318F6C0-E762-4075-96CE-D1E94FA78FF4_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel<br>
<strong>From:</strong> Tobias Hilbrich (<em>tobias.hilbrich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 01:16:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8969.php">Nathan Hjelm: "[OMPI devel] hwloc causes compilation to fail"</a>
<li><strong>Previous message:</strong> <a href="8967.php">Jeff Squyres: "Re: [OMPI devel] setenv MPI_ROOT"</a>
<li><strong>In reply to:</strong> <a href="8966.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>thank you for your clarification.
<br>
<p>-Tobias
<br>
<p>On Feb 8, 2011, at 4:12 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This is the beauty of the MPI standard. Two reading can lead to two different understanding and therefore implementations ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2011, at 03:24 , Tobias Hilbrich wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi George,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your fast answer! I hate the cancel too, but am a tool developer that unfortunately has to deal with it :( Likely, implementing the functionality for something like this in an MPI implementation is far more horrible ... 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My MPI standard says the following (MPI 2.2): 
</span><br>
<span class="quotelev2">&gt;&gt; - &quot;A call to MPI_Cancel marks for cancellation a pending, nonblocking communication operation (send or receive).&quot; ... &quot;If a communication is marked for cancellation, then a MPI_Wait call for that communication is guaranteed to return, ...&quot; (lines 1-10 on page 68)
</span><br>
<span class="quotelev2">&gt;&gt; (both sentences only got micro changes since MPI 1.0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So either the communication is not pending anymore (premise of first sentence not fulfilled), thus it would already be completed (Wait would return). Or its marked for cancellation (independent of it completing in future or not), and the wait would be guaranteed to return (second sentence).
</span><br>
<span class="quotelev2">&gt;&gt; (Notice that the standard differentiates between marked for cancelation and canceled) 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How I understand your quoted sentence, the system is fine to decide that it was too late to cancel the send, which would mean that it completed, thus the wait should return. But maybe I got it wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the problem. As the MPI standard states that MPI_Cancel is a _local_ operation, nothing can be done locally for a send if the matching information has been already sent to the peer. As a result, send operations cannot be cancelled in most cases (except when the matching info is still pending in some internal queues mainly due to network traffic delays).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tested with MPI_Test_cancelled, for the hang situation I can apparently not tell you what happens for the sender, but the receive was canceled. If you use Bsend or Send (standard mode), the send is actually not cancelled (as it was buffered), the receives are still cancelled in this situation. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now for the fun part,  I tested a little bit:
</span><br>
<span class="quotelev2">&gt;&gt; - SGI MPT,  same behavior as for OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; - Mvapich(1), aborts with an error that cancel of sends is not implemented :) 
</span><br>
<span class="quotelev2">&gt;&gt; - MPICH, segfault in MPI_Finalize (on the receiver side during cleanup of some sort)
</span><br>
<span class="quotelev2">&gt;&gt; - MPICH2, works, both communication calls get cancelled
</span><br>
<span class="quotelev2">&gt;&gt; - lam, crashes in MPI_Ssend_init/MPI_Recv_init
</span><br>
<span class="quotelev2">&gt;&gt; - Intel MPI, works, both communication calls get cancelled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is expected. Both MPICH2 and IntelMPI implemented remote send cancelation. In other words, in the case of a cancel a cancelation request is sent to the peer. If the peer has not yet matched the unexpected message, then it will accept to cancel it, otherwise it will fail. In Open MPI the cancel is a purely local operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure whether I got it all wrong, Tobias
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 7, 2011, at 8:58 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I forgot to mention that you should test the cancelled status of your request with MPI_TEST_CANCELLED after the MPI_Cancel, as the MPI_Cancel doesn't return an error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 7, 2011, at 14:52 , George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tobias,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Cancel is a tricky beast, and should be handled with extreme care. &gt;From my perspective, your problem is not related to a specific implementation, but to you usage of the MPI_Cancel. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You state the MPI_Wait is not supposed to hang but I don't see anything in the MPI standard allowing you to state this? If you are referring to the first paragraph on 3.8 (regarding MPI_Cancel), then I have to disagree with you. You have to pay attention to the wording of the standard to see the trick.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Either the cancellation succeeds, or the communication succeeds, but not both.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is the definition of a successful cancellation, that is the base of every other action that happen on the request. As the MPI_Cancel is only defined as a local operation, an MPI library the send the matching info for the persistent request in MPI_Start, will have a hard time canceling the request.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now, imagine a run where the receiver manage to cancel his request as it has not been matched (and this can be done locally). As the sender sent the matching information on MPI_Start, when it reach the MPI_Cancel it cannot cancel the request locally, so the cancel will fail. The sender will therefore be blocked on the MPI_Wait, which the receiver will happily wait on the MPI_Finalize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 7, 2011, at 04:54 , Tobias Hilbrich wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am with the ZIH developers working on VampirTrace and just discovered a possibly erroneous behavior of OpenMPI (v1.4.3). I am canceling an active persistent request created with MPI_Ssend_init, in a successive MPI_Wait call the process hangs, even though according to the MPI standard this should never happen. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The pesudo code is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	if (rank == 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 		MPI_Ssend_init (&amp;buf, 1, MPI_INT, 1, 666, MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	if (rank == 1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 		MPI_Recv_init (&amp;buf, 1, MPI_INT, 0, 666, MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	//Start
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	MPI_Start (&amp;r);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	//Cancel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	MPI_Cancel (&amp;r);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	//Wait
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	MPI_Wait (&amp;r, &amp;status);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	//Free
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	MPI_Request_free (&amp;r);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The full (minimal reproducer) source code along with a dump of ompi_info is attached.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Either I am missing some passage of the standard mentioning that it is forbidden to cancel an synchronous send or there appears to be an error in OpenMPI's implementation. If it is already fixed, sorry for the spam.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Note: changing the Ssend to Send or Bsend removes the hang)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Tobias
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;ssend_init_cancel.c&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;ssend_init_cancel.ompi_info&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dipl.-Inf. Tobias Hilbrich
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Wissenschaftlicher Mitarbeiter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Technische Universitaet Dresden
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Zentrum fuer Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Center for Information Services and High Performance Computing (ZIH))
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Interdisziplin&#228;re Anwenderunterst&#252;tzung und Koordination
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Interdisciplinary Application Development and Coordination)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel.: +49 (351) 463-32041
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; E-Mail: tobias.hilbrich_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inf. Tobias Hilbrich
</span><br>
<span class="quotelev2">&gt;&gt; Wissenschaftlicher Mitarbeiter
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Technische Universitaet Dresden
</span><br>
<span class="quotelev2">&gt;&gt; Zentrum fuer Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev2">&gt;&gt; (Center for Information Services and High Performance Computing (ZIH))
</span><br>
<span class="quotelev2">&gt;&gt; Interdisziplin&#228;re Anwenderunterst&#252;tzung und Koordination
</span><br>
<span class="quotelev2">&gt;&gt; (Interdisciplinary Application Development and Coordination)
</span><br>
<span class="quotelev2">&gt;&gt; 01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; Tel.: +49 (351) 463-32041
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev2">&gt;&gt; E-Mail: tobias.hilbrich_at_[hidden]
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
Dipl.-Inf. Tobias Hilbrich
Wissenschaftlicher Mitarbeiter
Technische Universitaet Dresden
Zentrum fuer Informationsdienste und Hochleistungsrechnen (ZIH)
(Center for Information Services and High Performance Computing (ZIH))
Interdisziplin&#228;re Anwenderunterst&#252;tzung und Koordination
(Interdisciplinary Application Development and Coordination)
01062 Dresden
Tel.: +49 (351) 463-32041
Fax: +49 (351) 463-37773
E-Mail: tobias.hilbrich_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8969.php">Nathan Hjelm: "[OMPI devel] hwloc causes compilation to fail"</a>
<li><strong>Previous message:</strong> <a href="8967.php">Jeff Squyres: "Re: [OMPI devel] setenv MPI_ROOT"</a>
<li><strong>In reply to:</strong> <a href="8966.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
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
