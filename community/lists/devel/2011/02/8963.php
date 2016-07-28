<?
$subject_val = "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  7 14:58:26 2011" -->
<!-- isoreceived="20110207195826" -->
<!-- sent="Mon, 7 Feb 2011 14:58:20 -0500" -->
<!-- isosent="20110207195820" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel" -->
<!-- id="7AEAD0BF-3F5E-443A-ABE7-AED2FC0FCE3C_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CCBA51AB-D9BF-437A-A224-C2FEB23E946A_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-07 14:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8964.php">Tobias Hilbrich: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Previous message:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>In reply to:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8964.php">Tobias Hilbrich: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Reply:</strong> <a href="8964.php">Tobias Hilbrich: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot to mention that you should test the cancelled status of your request with MPI_TEST_CANCELLED after the MPI_Cancel, as the MPI_Cancel doesn't return an error.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 7, 2011, at 14:52 , George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Tobias,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Cancel is a tricky beast, and should be handled with extreme care. From my perspective, your problem is not related to a specific implementation, but to you usage of the MPI_Cancel. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You state the MPI_Wait is not supposed to hang but I don't see anything in the MPI standard allowing you to state this? If you are referring to the first paragraph on 3.8 (regarding MPI_Cancel), then I have to disagree with you. You have to pay attention to the wording of the standard to see the trick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Either the cancellation succeeds, or the communication succeeds, but not both.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the definition of a successful cancellation, that is the base of every other action that happen on the request. As the MPI_Cancel is only defined as a local operation, an MPI library the send the matching info for the persistent request in MPI_Start, will have a hard time canceling the request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, imagine a run where the receiver manage to cancel his request as it has not been matched (and this can be done locally). As the sender sent the matching information on MPI_Start, when it reach the MPI_Cancel it cannot cancel the request locally, so the cancel will fail. The sender will therefore be blocked on the MPI_Wait, which the receiver will happily wait on the MPI_Finalize.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2011, at 04:54 , Tobias Hilbrich wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am with the ZIH developers working on VampirTrace and just discovered a possibly erroneous behavior of OpenMPI (v1.4.3). I am canceling an active persistent request created with MPI_Ssend_init, in a successive MPI_Wait call the process hangs, even though according to the MPI standard this should never happen. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The pesudo code is as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 	if (rank == 0)
</span><br>
<span class="quotelev2">&gt;&gt; 		MPI_Ssend_init (&amp;buf, 1, MPI_INT, 1, 666, MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev2">&gt;&gt; 	if (rank == 1)
</span><br>
<span class="quotelev2">&gt;&gt; 		MPI_Recv_init (&amp;buf, 1, MPI_INT, 0, 666, MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev2">&gt;&gt; 	
</span><br>
<span class="quotelev2">&gt;&gt; 	//Start
</span><br>
<span class="quotelev2">&gt;&gt; 	MPI_Start (&amp;r);
</span><br>
<span class="quotelev2">&gt;&gt; 	
</span><br>
<span class="quotelev2">&gt;&gt; 	//Cancel
</span><br>
<span class="quotelev2">&gt;&gt; 	MPI_Cancel (&amp;r);
</span><br>
<span class="quotelev2">&gt;&gt; 	
</span><br>
<span class="quotelev2">&gt;&gt; 	//Wait
</span><br>
<span class="quotelev2">&gt;&gt; 	MPI_Wait (&amp;r, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt; 	
</span><br>
<span class="quotelev2">&gt;&gt; 	//Free
</span><br>
<span class="quotelev2">&gt;&gt; 	MPI_Request_free (&amp;r);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The full (minimal reproducer) source code along with a dump of ompi_info is attached.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Either I am missing some passage of the standard mentioning that it is forbidden to cancel an synchronous send or there appears to be an error in OpenMPI's implementation. If it is already fixed, sorry for the spam.
</span><br>
<span class="quotelev2">&gt;&gt; (Note: changing the Ssend to Send or Bsend removes the hang)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Tobias
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ssend_init_cancel.c&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ssend_init_cancel.ompi_info&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8964.php">Tobias Hilbrich: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Previous message:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>In reply to:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8964.php">Tobias Hilbrich: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Reply:</strong> <a href="8964.php">Tobias Hilbrich: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
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
