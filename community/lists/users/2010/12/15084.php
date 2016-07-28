<?
$subject_val = "Re: [OMPI users] How to check if Send was made or not before performing a recv";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 11 10:29:48 2010" -->
<!-- isoreceived="20101211152948" -->
<!-- sent="Sat, 11 Dec 2010 07:28:53 -0800" -->
<!-- isosent="20101211152853" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check if Send was made or not before performing a recv" -->
<!-- id="4D0398B5.9050101_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinmvsHJf3oX-VLvb2D7b0AD9N-HxiDfZwupVJrF_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to check if Send was made or not before performing a recv<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-11 10:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15083.php">Alaukik Aggarwal: "[OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="15083.php">Alaukik Aggarwal: "[OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Reply:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alaukik Aggarwal wrote:
<br>
<p><span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am using Open MPI 1.4.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have to perform a receive operation from processes that are sending
</span><br>
<span class="quotelev1">&gt;data. It might happen that some of the processes don't send data
</span><br>
<span class="quotelev1">&gt;(might have completed in-fact).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So, how do I perform check on which processes to receive data from and
</span><br>
<span class="quotelev1">&gt;which processes to skip?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[code]
</span><br>
<span class="quotelev1">&gt;if(id != master)
</span><br>
<span class="quotelev1">&gt;        MPI::COMM_WORLD.Send(&amp;dist, NUM_VERTEX, MPI_LONG, master, 1234);
</span><br>
<span class="quotelev1">&gt;if(id == master)
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;        for(int eachId = 1; eachId&lt;procs ; eachId++)
</span><br>
<span class="quotelev1">&gt;        MPI::COMM_WORLD.Recv(&amp;dist1, NUM_VERTEX, MPI_LONG, eachId, 1234);
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;[/code]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
One option is to have each non-master process send a &quot;forget about me&quot; 
<br>
message.  In practice, what this means is that every non-master process 
<br>
does, in fact, send a message, with that message either containing data 
<br>
or an indication that there is no data to send.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15083.php">Alaukik Aggarwal: "[OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="15083.php">Alaukik Aggarwal: "[OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Reply:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
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
