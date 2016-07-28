<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 10:43:20 2011" -->
<!-- isoreceived="20111214154320" -->
<!-- sent="Wed, 14 Dec 2011 16:43:16 +0100" -->
<!-- isosent="20111214154316" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="CABdqK10YCMXGAGLdqBx_TzH4SLgD=uJVhVJUtyn2JXHBLo3prg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B9D313D6-C4BA-4E92-848E-BD2ABD82CEE9_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-12-14 10:43:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10118.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>Previous message:</strong> <a href="10116.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10158.php">Jeff Squyres: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10158.php">Jeff Squyres: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello George and @ll.
<br>
<p>Sorry for the late answer, but i was doing some trace to see where is set
<br>
the MPI_ERROR. I took a look to ompi_request_default_wait and try to see
<br>
what happen with request.
<br>
<p>Well, i've noticed that all requests that are not inmediately solved go
<br>
to ompi_request_wait_completion. But i don't know exactly where the
<br>
execution jumps when i inject a failure to the receiver of the message.
<br>
After the failure, the sender does not return
<br>
from ompi_request_wait_completion to ompi_request_default_wait, and i don't
<br>
know where to catch when the req-&gt;req_status.MPI_ERROR is set. Do you know
<br>
where jumps the execution? or at least in which error handler?
<br>
<p>Thanks in advance.
<br>
<p>Hugo
<br>
<p>2011/12/9 George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 9, 2011, at 06:59 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello George and all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been adapting some of the code to copy the request, and now i think
</span><br>
<span class="quotelev1">&gt; that it is working ok. I'm storing the request as you do on the pessimist,
</span><br>
<span class="quotelev1">&gt; but i'm only logging received messages, as my approach is a pessimist log
</span><br>
<span class="quotelev1">&gt; based on the receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do have a question about how you detect when you have to resend a
</span><br>
<span class="quotelev1">&gt; message, or at least repost it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error in the status attached to the request will be set in case of
</span><br>
<span class="quotelev1">&gt; failure. As the MPI error handler is triggered right before returning above
</span><br>
<span class="quotelev1">&gt; the MPI layer, at the level where you placed your interception you have all
</span><br>
<span class="quotelev1">&gt; the freedom you need to handle the faults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/11/19 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 18, 2011, at 11:50 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 18, 2011, at 11:14 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 18, 2011, at 07:29 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello again.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was doing some trace into de PML_OB1 files. I start to follow a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Ssend() trying to find where a message is stored (in the sender) if it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is not send until the receiver post the recv, but i didn't find that place.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Right, you can't find this as the message is not stored on the sender.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The pointer to the send request is sent encapsulated in the matching
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; header, and the receiver will provide it back once the message has been
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; matched (this means the data is now ready to flow).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, what you're saying is that the sender only sends the header, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when the receiver post the recv will send again the header so the sender
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; starts with the data sent? am i getting it right?  If this is ok, the data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stays in the sender, but where it is stored?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If we consider rendez-vous messages the data is remains in the sender
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffer (aka the buffer provided by the upper level to the MPI_Send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, so i will only need to save the headears of the messages (where the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status is incomplete), and then maybe just call again the upper level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MP_Send. A question here, the headers are not marked as pending (at least i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think so), so, my only approach might be to create a list of pending
</span><br>
<span class="quotelev3">&gt;&gt;&gt; headers and store there the pointer to the send, then try to identify its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponding upper level MPI_Send and retries it in case of failure, is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this a correct approach?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Look in the mca/vprotocol/base to see how we deal with the send requests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in our message logging protocol. We hijack the send request list, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replace them with our own, allowing us to chain all active requests. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make the tracking of chive requests very simple, and minimize the impact on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the overall code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok George.
</span><br>
<span class="quotelev2">&gt;&gt; I will take a look there and then let you know how it goes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hugo
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10118.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>Previous message:</strong> <a href="10116.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10158.php">Jeff Squyres: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10158.php">Jeff Squyres: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
