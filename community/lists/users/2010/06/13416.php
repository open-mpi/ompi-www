<?
$subject_val = "Re: [OMPI users] openMPI asychronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 27 23:31:40 2010" -->
<!-- isoreceived="20100628033140" -->
<!-- sent="Mon, 28 Jun 2010 11:31:16 +0800" -->
<!-- isosent="20100628033116" -->
<!-- name="Changsheng Jiang" -->
<!-- email="jiangzuoyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI asychronous communication" -->
<!-- id="AANLkTinMcf97wMn1U_IRu9kzIKbe2-6dD8ItgLTYoEZx_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="SNT134-w35F88033286E96235AC037CBCA0_at_phx.gbl" -->
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
<strong>From:</strong> Changsheng Jiang (<em>jiangzuoyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-27 23:31:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13417.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Previous message:</strong> <a href="13415.php">Jack Bryan: "[OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13415.php">Jack Bryan: "[OMPI users] openMPI asychronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13417.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Reply:</strong> <a href="13417.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Isend - Starts a standard-mode, nonblocking send.
<br>
<p>BTW, are there any asynchronous collective operations?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Changsheng Jiang
<br>
<p><p>On Mon, Jun 28, 2010 at 11:22, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Dear All:
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13417.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Previous message:</strong> <a href="13415.php">Jack Bryan: "[OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13415.php">Jack Bryan: "[OMPI users] openMPI asychronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13417.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Reply:</strong> <a href="13417.php">Jack Bryan: "Re: [OMPI users] openMPI asychronous communication"</a>
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
