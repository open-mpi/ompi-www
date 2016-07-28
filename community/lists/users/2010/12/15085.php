<?
$subject_val = "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 11 13:27:19 2010" -->
<!-- isoreceived="20101211182719" -->
<!-- sent="Sat, 11 Dec 2010 11:27:09 -0700" -->
<!-- isosent="20101211182709" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4" -->
<!-- id="8DF38374-81D1-4190-B4D4-B94F1C33CB99_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101210225813.GF3198_at_htang-linux.corp.intuit.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-11 13:27:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15091.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Reply:</strong> <a href="15091.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....well, that stinks. I did some digging and there is indeed a bug in the 1.4 series - forgot to convert the port number to network-byte order.
<br>
<p>Will file a patch and add you to the ticket so you can see when it gets applied. If you wouldn't mind testing the release candidate, that would be appreciated.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Dec 10, 2010, at 3:58 PM, Tang, Hsiu-Khuern wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did try the corresponding oob_* parameters (sorry for not mentioning that).
</span><br>
<span class="quotelev1">&gt; Here's what I tried:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --host host1,host2 -np 2 --mca btl_tcp_port_min_v4 10000 --mca btl_tcp_port_range_v4 10 --mca oob_tcp_port_min_v4 10000 --mca oob_tcp_port_range_v4 10 sleep 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In another window while the above is running:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ sudo netstat -plnt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tcp        0      0 0.0.0.0:4135                0.0.0.0:*                   LISTEN      9714/mpirun
</span><br>
<span class="quotelev1">&gt; tcp        0      0 :::58600                    :::*                        LISTEN      9714/mpirun
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Hsiu-Khuern.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * On Fri 03:49PM -0700, 10 Dec 2010, Ralph Castain (rhc_at_[hidden]) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun is not an MPI process, and so it doesn't obey the btl port params. To control mpirun's ports (and those used by the ORTE daemons), use the oob_tcp_port... params
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 10, 2010, at 3:29 PM, Tang, Hsiu-Khuern wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to understand how to control the range of ports used by Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried setting the parameters btl_tcp_port_min_v4 and btl_tcp_port_range_v4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but they don't seem to have an effect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using Open MPI 1.4.2 from Debian sid, but get the same result on RHEL5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I run a program like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --host host1,host2 -np 2 --mca btl_tcp_port_min_v4 10000 --mca btl_tcp_port_range_v4 10 sleep 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then in another terminal run &quot;netstat -plnt&quot;, should I expect to see mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listening on one or more ports between 10000 and 10009?  I don't -- mpirun is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invariably listening on some other ports.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hsiu-Khuern.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15084.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15091.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Reply:</strong> <a href="15091.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
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
