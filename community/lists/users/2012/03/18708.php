<?
$subject_val = "Re: [OMPI users] AlltoallV (with some zero send count values)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 18:05:30 2012" -->
<!-- isoreceived="20120306230530" -->
<!-- sent="Tue, 6 Mar 2012 17:05:25 -0600" -->
<!-- isosent="20120306230525" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlltoallV (with some zero send count values)" -->
<!-- id="CAM9tzS=WRLwYaXtjxnbjMDvDgo-dfFFEy6r6HaUSR5GDXzbN=Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8A0CB688-690A-493F-A8E6-EBB5518D3E39_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] AlltoallV (with some zero send count values)<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 18:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18709.php">Timothy Stitt: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18709.php">Timothy Stitt: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18709.php">Timothy Stitt: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 6, 2012 at 15:43, Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can anyone tell me whether it is legal to pass zero values for some of the
</span><br>
<span class="quotelev1">&gt; send count elements in an MPI_AlltoallV() call? I want to perform an
</span><br>
<span class="quotelev1">&gt; all-to-all operation but for performance reasons do not want to send data
</span><br>
<span class="quotelev1">&gt; to various ranks who don't need to receive any useful values. If it is
</span><br>
<span class="quotelev1">&gt; legal, can I assume the implementation is smart enough to not send messages
</span><br>
<span class="quotelev1">&gt; when the send count is 0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI: my tests show that AlltoallV operations with various send count
</span><br>
<span class="quotelev1">&gt; values set to 0...hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is allowed by the standard, but be warned that it is likely to perform
<br>
poorly compared to what could be done with point-to-point or one-sided
<br>
operations if most links are empty.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18709.php">Timothy Stitt: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18709.php">Timothy Stitt: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18709.php">Timothy Stitt: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
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
