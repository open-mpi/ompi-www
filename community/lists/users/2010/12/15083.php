<?
$subject_val = "[OMPI users] How to check if Send was made or not before performing a recv";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 11 09:42:50 2010" -->
<!-- isoreceived="20101211144250" -->
<!-- sent="Sat, 11 Dec 2010 09:42:45 -0500" -->
<!-- isosent="20101211144245" -->
<!-- name="Alaukik Aggarwal" -->
<!-- email="alaukik.aggarwal_at_[hidden]" -->
<!-- subject="[OMPI users] How to check if Send was made or not before performing a recv" -->
<!-- id="AANLkTinmvsHJf3oX-VLvb2D7b0AD9N-HxiDfZwupVJrF_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to check if Send was made or not before performing a recv<br>
<strong>From:</strong> Alaukik Aggarwal (<em>alaukik.aggarwal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-11 09:42:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Reply:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using Open MPI 1.4.3.
<br>
<p>I have to perform a receive operation from processes that are sending
<br>
data. It might happen that some of the processes don't send data
<br>
(might have completed in-fact).
<br>
<p>So, how do I perform check on which processes to receive data from and
<br>
which processes to skip?
<br>
<p>[code]
<br>
if(id != master)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Send(&amp;dist, NUM_VERTEX, MPI_LONG, master, 1234);
<br>
if(id == master)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int eachId = 1; eachId&lt;procs ; eachId++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Recv(&amp;dist1, NUM_VERTEX, MPI_LONG, eachId, 1234);
<br>
}
<br>
[/code]
<br>
<p>Kindly help!
<br>
<p>Regards,
<br>
Alaukik
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Reply:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
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
