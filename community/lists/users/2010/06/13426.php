<?
$subject_val = "Re: [OMPI users] openMPI asychronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 12:54:02 2010" -->
<!-- isoreceived="20100628165402" -->
<!-- sent="Mon, 28 Jun 2010 09:53:37 -0700" -->
<!-- isosent="20100628165337" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI asychronous communication" -->
<!-- id="AANLkTimC6gPHrMTPu1yIdPvf4S9_fq6VZT-NAetGJZtJ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w13D0F49DDB97485003DBC4CBCA0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI asychronous communication<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-28 12:53:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13427.php">Bowen Zhou: "[OMPI users] Any example for noncrashing bugs in MPI applications"</a>
<li><strong>Previous message:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13419.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13431.php">amjad ali: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Reply:</strong> <a href="13431.php">amjad ali: "Re: [OMPI users] openMPI asychronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Use MPI_Iprobe.  It's a nonblocking probe that allow you to see if a message
<br>
is coming.  So in your receiver code you just periodically probe to see if
<br>
messages are coming your way.
<br>
<p>On Sun, Jun 27, 2010 at 9:11 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_irecv() ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do other works;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_wait();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, my message receiver is much slower than sender.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when the sender is doing its local  works, the sender has sent out their
</span><br>
<span class="quotelev1">&gt; messages. but at this time,
</span><br>
<span class="quotelev1">&gt; the sender is very busy doing its local work and cannot post MPI_irecv to
</span><br>
<span class="quotelev1">&gt; get the messages from
</span><br>
<span class="quotelev1">&gt; senders.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; From: jiangzuoyan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Mon, 28 Jun 2010 11:55:32 +0800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openMPI asychronous communication
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, then i think you also know using MPI_Wait to wait the asynchronous
</span><br>
<span class="quotelev1">&gt; requests to complete. if sender works faster then receiver(or reverse), then
</span><br>
<span class="quotelev1">&gt; the MPI_Wait will do wait, not just deallocted. you should keep the buffer
</span><br>
<span class="quotelev1">&gt; content before MPI_Wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                      Changsheng Jiang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 28, 2010 at 11:41, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but, what if sender can send a lot of messages to receivers faster than
</span><br>
<span class="quotelev1">&gt; what receiver can receive ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it means that sender works faster than receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; From: jiangzuoyan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Mon, 28 Jun 2010 11:31:16 +0800
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openMPI asychronous communication
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Isend - Starts a standard-mode, nonblocking send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, are there any asynchronous collective operations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                      Changsheng Jiang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 28, 2010 at 11:22, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear All:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to do asychronous communication among nodes by openMPI or boot.MPI  in
</span><br>
<span class="quotelev1">&gt; cluster ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to set up a kind of asychronous communication protocol such that
</span><br>
<span class="quotelev1">&gt; message senders and receivers can communicate asychronously without losing
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; messages between them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not want to use blocking MPI routines because the processors can do
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev1">&gt; operations when they wait for new messages coming.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I donot find this kind of MPI routines that support this
</span><br>
<span class="quotelev1">&gt; asychronous communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; June 27  2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13427.php">Bowen Zhou: "[OMPI users] Any example for noncrashing bugs in MPI applications"</a>
<li><strong>Previous message:</strong> <a href="13425.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13419.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13431.php">amjad ali: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Reply:</strong> <a href="13431.php">amjad ali: "Re: [OMPI users] openMPI asychronous communication"</a>
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
