<?
$subject_val = "Re: [OMPI users] AlltoallV (with some zero send count values)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 18:17:56 2012" -->
<!-- isoreceived="20120306231756" -->
<!-- sent="Tue, 6 Mar 2012 18:17:51 -0500" -->
<!-- isosent="20120306231751" -->
<!-- name="Timothy Stitt" -->
<!-- email="Timothy.Stitt.9_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlltoallV (with some zero send count values)" -->
<!-- id="14A207F6-5326-4E1F-828B-6C8F9EB9B9B3_at_nd.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAM9tzS=WRLwYaXtjxnbjMDvDgo-dfFFEy6r6HaUSR5GDXzbN=Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Timothy Stitt (<em>Timothy.Stitt.9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 18:17:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Previous message:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>In reply to:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18727.php">Jeffrey Squyres: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jed for the advice. How well-implemented are the one-sided communication routines? Are they something that could be trusted in a production code?
<br>

<br>
Sent from my iPad
<br>

<br>
On Mar 6, 2012, at 6:06 PM, &quot;Jed Brown&quot; &lt;jed_at_[hidden]&lt;mailto:jed_at_[hidden]&gt;&gt; wrote:
<br>

<br>
On Tue, Mar 6, 2012 at 15:43, Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&lt;mailto:Timothy.Stitt.9_at_[hidden]&gt;&gt; wrote:
<br>
Can anyone tell me whether it is legal to pass zero values for some of the send count elements in an MPI_AlltoallV() call? I want to perform an all-to-all operation but for performance reasons do not want to send data to various ranks who don't need to receive any useful values. If it is legal, can I assume the implementation is smart enough to not send messages when the send count is 0?
<br>

<br>
FYI: my tests show that AlltoallV operations with various send count values set to 0...hangs.
<br>

<br>
This is allowed by the standard, but be warned that it is likely to perform poorly compared to what could be done with point-to-point or one-sided operations if most links are empty.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18709/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Previous message:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>In reply to:</strong> <a href="18708.php">Jed Brown: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18727.php">Jeffrey Squyres: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
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
