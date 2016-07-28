<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 09:10:18 2012" -->
<!-- isoreceived="20120126141018" -->
<!-- sent="Thu, 26 Jan 2012 15:10:12 +0100" -->
<!-- isosent="20120126141012" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="CABdqK10Vn-MH=yJ5yyex=6mHbWwzuc-UKBKJ2+=JERUikGNK4A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABdqK11ctaJKbdZhXw4JnBMGKFM0wJsCshBrCvytLVqbxBwu_g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Retrying a MPI_SEND<br>
<strong>From:</strong> Hugo Daniel Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 09:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10256.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing FAILURE: icc/ia64 atomics"</a>
<li><strong>Previous message:</strong> <a href="10254.php">TERRY DONTJE: "Re: [OMPI devel] SOLVED: 1.4.5rc2 Solaris results [libtool problem]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10167.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello @ll.
<br>
<p>I'm reviving this topic because i've done things as you propose, and i
<br>
still can't catch the error mentioned before. I will put here some pieces
<br>
of code to contextualize.
<br>
<p>I've set the error handler:
<br>
<p>*MPI_Errhandler_set(MPI_COMM_WORLD,MPI_ERRORS_RETURN);*
<br>
<p><p>Then do a send like this:
<br>
<p>*ierr = MPI_Send(b, task.msize*task.msize, MPI_DOUBLE, 1, 152,
<br>
MPI_COMM_WORLD);*
<br>
* *
<br>
*if (ierr != MPI_SUCCESS) {*
<br>
* *
<br>
*printf(&quot;ERROR %d \n&quot;,ierr);*
<br>
&nbsp;}
<br>
<p><p>This send, as i mentioned before is made at the beginning of a
<br>
master/worker application by the master. When the send is made process 1
<br>
resides in Node1, but then node1 fails and the process 1 is restarted on
<br>
node2. Process 1 post the recv when in node2, but here the execution stops
<br>
without showing an error. I'm thinking that this kind of failures are not
<br>
noticed.
<br>
<p>I've noticed that the execution stops in ompi/request/req_wait.c in
<br>
ompi_request_wait_completion(req).
<br>
<p>*int ompi_request_default_wait(*
<br>
*    ompi_request_t ** req_ptr,*
<br>
*    ompi_status_public_t * status)*
<br>
*{*
<br>
*    ompi_request_t *req = *req_ptr;*
<br>
*    ompi_request_wait_completion(req);*
<br>
*.........*
<br>
<p>The code is not returning from that sentence, and no handler is catching
<br>
the error. Someone know where can i search for a variable o something that
<br>
is set when and endpoint gets broken, or something similar?
<br>
<p>Thanks in advance.
<br>
<p>Hugo Meyer
<br>
<p><p>2011/12/20 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Sorry for the delay.
</span><br>
<span class="quotelev1">&gt; I will try with the MPI_ERRORS_RETURN handler, maybe that is my problem.
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll let you know how it goes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/12/16 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Setting the error handler to MPI_ERRORS_RETURN is the right solution for
</span><br>
<span class="quotelev2">&gt;&gt; mechanism using the PMPI interface. Hugo is one software layer below the
</span><br>
<span class="quotelev2">&gt;&gt; MPI interface, so the error handler is not affecting his code. However,
</span><br>
<span class="quotelev2">&gt;&gt; once he reacts to an error, he should reset the error (in the status
</span><br>
<span class="quotelev2">&gt;&gt; attached to the request) to MPI_SUCCESS, in order to avoid triggering the
</span><br>
<span class="quotelev2">&gt;&gt; error handler on the way back to the MPI layer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 16, 2011, at 09:09 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm jumping into the middle of this conversation and probably don't
</span><br>
<span class="quotelev2">&gt;&gt; have all the right context, so forgive me if this is a stupid question: did
</span><br>
<span class="quotelev2">&gt;&gt; you set MPI_ERRORS_RETURN on the communicator in question?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Dec 14, 2011, at 10:43 AM, Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hello George and @ll.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sorry for the late answer, but i was doing some trace to see where is
</span><br>
<span class="quotelev2">&gt;&gt; set the MPI_ERROR. I took a look to ompi_request_default_wait and try to
</span><br>
<span class="quotelev2">&gt;&gt; see what happen with request.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Well, i've noticed that all requests that are not inmediately solved
</span><br>
<span class="quotelev2">&gt;&gt; go to ompi_request_wait_completion. But i don't know exactly where the
</span><br>
<span class="quotelev2">&gt;&gt; execution jumps when i inject a failure to the receiver of the message.
</span><br>
<span class="quotelev2">&gt;&gt; After the failure, the sender does not return from
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_wait_completion to ompi_request_default_wait, and i don't know
</span><br>
<span class="quotelev2">&gt;&gt; where to catch when the req-&gt;req_status.MPI_ERROR is set. Do you know where
</span><br>
<span class="quotelev2">&gt;&gt; jumps the execution? or at least in which error handler?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hugo
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 2011/12/9 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Dec 9, 2011, at 06:59 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Hello George and all.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I've been adapting some of the code to copy the request, and now i
</span><br>
<span class="quotelev2">&gt;&gt; think that it is working ok. I'm storing the request as you do on the
</span><br>
<span class="quotelev2">&gt;&gt; pessimist, but i'm only logging received messages, as my approach is a
</span><br>
<span class="quotelev2">&gt;&gt; pessimist log based on the receiver.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I do have a question about how you detect when you have to resend a
</span><br>
<span class="quotelev2">&gt;&gt; message, or at least repost it?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The error in the status attached to the request will be set in case of
</span><br>
<span class="quotelev2">&gt;&gt; failure. As the MPI error handler is triggered right before returning above
</span><br>
<span class="quotelev2">&gt;&gt; the MPI layer, at the level where you placed your interception you have all
</span><br>
<span class="quotelev2">&gt;&gt; the freedom you need to handle the faults.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  george.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Hugo
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; 2011/11/19 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Nov 18, 2011, at 11:50 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; On Nov 18, 2011, at 11:14 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; On Nov 18, 2011, at 07:29 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello again.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; I was doing some trace into de PML_OB1 files. I start to follow a
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Ssend() trying to find where a message is stored (in the sender) if it
</span><br>
<span class="quotelev2">&gt;&gt; is not send until the receiver post the recv, but i didn't find that place.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Right, you can't find this as the message is not stored on the
</span><br>
<span class="quotelev2">&gt;&gt; sender. The pointer to the send request is sent encapsulated in the
</span><br>
<span class="quotelev2">&gt;&gt; matching header, and the receiver will provide it back once the message has
</span><br>
<span class="quotelev2">&gt;&gt; been matched (this means the data is now ready to flow).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; So, what you're saying is that the sender only sends the header, so
</span><br>
<span class="quotelev2">&gt;&gt; when the receiver post the recv will send again the header so the sender
</span><br>
<span class="quotelev2">&gt;&gt; starts with the data sent? am i getting it right?  If this is ok, the data
</span><br>
<span class="quotelev2">&gt;&gt; stays in the sender, but where it is stored?
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; If we consider rendez-vous messages the data is remains in the
</span><br>
<span class="quotelev2">&gt;&gt; sender buffer (aka the buffer provided by the upper level to the MPI_Send
</span><br>
<span class="quotelev2">&gt;&gt; function).
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Yes, so i will only need to save the headears of the messages (where
</span><br>
<span class="quotelev2">&gt;&gt; the status is incomplete), and then maybe just call again the upper level
</span><br>
<span class="quotelev2">&gt;&gt; MP_Send. A question here, the headers are not marked as pending (at least i
</span><br>
<span class="quotelev2">&gt;&gt; think so), so, my only approach might be to create a list of pending
</span><br>
<span class="quotelev2">&gt;&gt; headers and store there the pointer to the send, then try to identify its
</span><br>
<span class="quotelev2">&gt;&gt; corresponding upper level MPI_Send and retries it in case of failure, is
</span><br>
<span class="quotelev2">&gt;&gt; this a correct approach?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Look in the mca/vprotocol/base to see how we deal with the send
</span><br>
<span class="quotelev2">&gt;&gt; requests in our message logging protocol. We hijack the send request list,
</span><br>
<span class="quotelev2">&gt;&gt; and replace them with our own, allowing us to chain all active requests.
</span><br>
<span class="quotelev2">&gt;&gt; This make the tracking of chive requests very simple, and minimize the
</span><br>
<span class="quotelev2">&gt;&gt; impact on the overall code.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  george.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Ok George.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I will take a look there and then let you know how it goes.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Hugo
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10255/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10256.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing FAILURE: icc/ia64 atomics"</a>
<li><strong>Previous message:</strong> <a href="10254.php">TERRY DONTJE: "Re: [OMPI devel] SOLVED: 1.4.5rc2 Solaris results [libtool problem]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10167.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
