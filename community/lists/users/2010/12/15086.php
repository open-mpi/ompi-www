<?
$subject_val = "Re: [OMPI users] How to check if Send was made or not before performing a recv";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 11 21:51:41 2010" -->
<!-- isoreceived="20101212025141" -->
<!-- sent="Sat, 11 Dec 2010 21:51:35 -0500" -->
<!-- isosent="20101212025135" -->
<!-- name="Alaukik Aggarwal" -->
<!-- email="alaukik.aggarwal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check if Send was made or not before performing a recv" -->
<!-- id="AANLkTinKNVtgQ7tKaa5uE+qmKVoQnRwc6tr6F5uNQHcG_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0398B5.9050101_at_oracle.com" -->
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
<strong>From:</strong> Alaukik Aggarwal (<em>alaukik.aggarwal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-11 21:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>In reply to:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Reply:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply. I used this to solve the problem.
<br>
<p>But I think there should be an in-built construct for this.
<br>
<p>Alaukik
<br>
<p>On Sat, Dec 11, 2010 at 10:28 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Alaukik Aggarwal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using Open MPI 1.4.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have to perform a receive operation from processes that are sending
</span><br>
<span class="quotelev2">&gt;&gt; data. It might happen that some of the processes don't send data
</span><br>
<span class="quotelev2">&gt;&gt; (might have completed in-fact).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, how do I perform check on which processes to receive data from and
</span><br>
<span class="quotelev2">&gt;&gt; which processes to skip?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [code]
</span><br>
<span class="quotelev2">&gt;&gt; if(id != master)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI::COMM_WORLD.Send(&amp;dist, NUM_VERTEX, MPI_LONG, master, 1234);
</span><br>
<span class="quotelev2">&gt;&gt; if(id == master)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; for(int eachId = 1; eachId&lt;procs ; eachId++)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; MPI::COMM_WORLD.Recv(&amp;dist1, NUM_VERTEX, MPI_LONG, eachId, 1234);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; [/code]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One option is to have each non-master process send a &quot;forget about me&quot;
</span><br>
<span class="quotelev1">&gt; message. &#160;In practice, what this means is that every non-master process
</span><br>
<span class="quotelev1">&gt; does, in fact, send a message, with that message either containing data or
</span><br>
<span class="quotelev1">&gt; an indication that there is no data to send.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>In reply to:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Reply:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
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
