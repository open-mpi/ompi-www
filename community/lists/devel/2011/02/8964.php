<?
$subject_val = "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  8 03:24:12 2011" -->
<!-- isoreceived="20110208082412" -->
<!-- sent="Tue, 8 Feb 2011 09:24:45 +0100" -->
<!-- isosent="20110208082445" -->
<!-- name="Tobias Hilbrich" -->
<!-- email="tobias.hilbrich_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel" -->
<!-- id="D8EA3BE2-259B-49DE-B319-1983E8A84B35_at_zih.tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7AEAD0BF-3F5E-443A-ABE7-AED2FC0FCE3C_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-02-08 03:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8965.php">Damien Guinier: "[OMPI devel] setenv MPI_ROOT"</a>
<li><strong>Previous message:</strong> <a href="8963.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>In reply to:</strong> <a href="8963.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8966.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Reply:</strong> <a href="8966.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>thanks for your fast answer! I hate the cancel too, but am a tool developer that unfortunately has to deal with it :( Likely, implementing the functionality for something like this in an MPI implementation is far more horrible ... 
<br>
<p>My MPI standard says the following (MPI 2.2): 
<br>
- &quot;A call to MPI_Cancel marks for cancellation a pending, nonblocking communication operation (send or receive).&quot; ... &quot;If a communication is marked for cancellation, then a MPI_Wait call for that communication is guaranteed to return, ...&quot; (lines 1-10 on page 68)
<br>
(both sentences only got micro changes since MPI 1.0)
<br>
<p>So either the communication is not pending anymore (premise of first sentence not fulfilled), thus it would already be completed (Wait would return). Or its marked for cancellation (independent of it completing in future or not), and the wait would be guaranteed to return (second sentence).
<br>
(Notice that the standard differentiates between marked for cancelation and canceled) 
<br>
<p>How I understand your quoted sentence, the system is fine to decide that it was too late to cancel the send, which would mean that it completed, thus the wait should return. But maybe I got it wrong. 
<br>
<p>I tested with MPI_Test_cancelled, for the hang situation I can apparently not tell you what happens for the sender, but the receive was canceled. If you use Bsend or Send (standard mode), the send is actually not cancelled (as it was buffered), the receives are still cancelled in this situation. 
<br>
<p>Now for the fun part,  I tested a little bit:
<br>
- SGI MPT,  same behavior as for OpenMPI
<br>
- Mvapich(1), aborts with an error that cancel of sends is not implemented :) 
<br>
- MPICH, segfault in MPI_Finalize (on the receiver side during cleanup of some sort)
<br>
- MPICH2, works, both communication calls get cancelled
<br>
- lam, crashes in MPI_Ssend_init/MPI_Recv_init
<br>
- Intel MPI, works, both communication calls get cancelled
<br>
<p>Not sure whether I got it all wrong, Tobias
<br>
<p>On Feb 7, 2011, at 8:58 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I forgot to mention that you should test the cancelled status of your request with MPI_TEST_CANCELLED after the MPI_Cancel, as the MPI_Cancel doesn't return an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2011, at 14:52 , George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tobias,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Cancel is a tricky beast, and should be handled with extreme care. From my perspective, your problem is not related to a specific implementation, but to you usage of the MPI_Cancel. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You state the MPI_Wait is not supposed to hang but I don't see anything in the MPI standard allowing you to state this? If you are referring to the first paragraph on 3.8 (regarding MPI_Cancel), then I have to disagree with you. You have to pay attention to the wording of the standard to see the trick.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either the cancellation succeeds, or the communication succeeds, but not both.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is the definition of a successful cancellation, that is the base of every other action that happen on the request. As the MPI_Cancel is only defined as a local operation, an MPI library the send the matching info for the persistent request in MPI_Start, will have a hard time canceling the request.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now, imagine a run where the receiver manage to cancel his request as it has not been matched (and this can be done locally). As the sender sent the matching information on MPI_Start, when it reach the MPI_Cancel it cannot cancel the request locally, so the cancel will fail. The sender will therefore be blocked on the MPI_Wait, which the receiver will happily wait on the MPI_Finalize.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 7, 2011, at 04:54 , Tobias Hilbrich wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am with the ZIH developers working on VampirTrace and just discovered a possibly erroneous behavior of OpenMPI (v1.4.3). I am canceling an active persistent request created with MPI_Ssend_init, in a successive MPI_Wait call the process hangs, even though according to the MPI standard this should never happen. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The pesudo code is as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	if (rank == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		MPI_Ssend_init (&amp;buf, 1, MPI_INT, 1, 666, MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	if (rank == 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		MPI_Recv_init (&amp;buf, 1, MPI_INT, 0, 666, MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	//Start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	MPI_Start (&amp;r);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	//Cancel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	MPI_Cancel (&amp;r);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	//Wait
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	MPI_Wait (&amp;r, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	//Free
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	MPI_Request_free (&amp;r);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The full (minimal reproducer) source code along with a dump of ompi_info is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either I am missing some passage of the standard mentioning that it is forbidden to cancel an synchronous send or there appears to be an error in OpenMPI's implementation. If it is already fixed, sorry for the spam.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Note: changing the Ssend to Send or Bsend removes the hang)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Tobias
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ssend_init_cancel.c&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ssend_init_cancel.ompi_info&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dipl.-Inf. Tobias Hilbrich
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wissenschaftlicher Mitarbeiter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Technische Universitaet Dresden
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zentrum fuer Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Center for Information Services and High Performance Computing (ZIH))
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interdisziplin&#228;re Anwenderunterst&#252;tzung und Koordination
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Interdisciplinary Application Development and Coordination)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 01062 Dresden
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel.: +49 (351) 463-32041
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E-Mail: tobias.hilbrich_at_[hidden]
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
<li><strong>Next message:</strong> <a href="8965.php">Damien Guinier: "[OMPI devel] setenv MPI_ROOT"</a>
<li><strong>Previous message:</strong> <a href="8963.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>In reply to:</strong> <a href="8963.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8966.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Reply:</strong> <a href="8966.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
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
