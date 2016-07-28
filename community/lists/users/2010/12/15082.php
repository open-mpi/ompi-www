<?
$subject_val = "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 17:58:18 2010" -->
<!-- isoreceived="20101210225818" -->
<!-- sent="Fri, 10 Dec 2010 14:58:14 -0800" -->
<!-- isosent="20101210225814" -->
<!-- name="Tang, Hsiu-Khuern" -->
<!-- email="hsiu-khuern_tang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4" -->
<!-- id="20101210225813.GF3198_at_htang-linux.corp.intuit.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A54ED4C6-CBE2-43A7-8081-6E4C0AC7E188_at_open-mpi.org" -->
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
<strong>From:</strong> Tang, Hsiu-Khuern (<em>hsiu-khuern_tang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 17:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15083.php">Alaukik Aggarwal: "[OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>In reply to:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Reply:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I did try the corresponding oob_* parameters (sorry for not mentioning that).
<br>
Here's what I tried:
<br>
<p><p>mpirun --host host1,host2 -np 2 --mca btl_tcp_port_min_v4 10000 --mca btl_tcp_port_range_v4 10 --mca oob_tcp_port_min_v4 10000 --mca oob_tcp_port_range_v4 10 sleep 100
<br>
<p><p>In another window while the above is running:
<br>
<p>$ sudo netstat -plnt
<br>
<p>tcp        0      0 0.0.0.0:4135                0.0.0.0:*                   LISTEN      9714/mpirun
<br>
tcp        0      0 :::58600                    :::*                        LISTEN      9714/mpirun
<br>
...
<br>
<p><pre>
-- 
Best,
Hsiu-Khuern.
* On Fri 03:49PM -0700, 10 Dec 2010, Ralph Castain (rhc_at_[hidden]) wrote:
&gt; mpirun is not an MPI process, and so it doesn't obey the btl port params. To control mpirun's ports (and those used by the ORTE daemons), use the oob_tcp_port... params
&gt; 
&gt; 
&gt; On Dec 10, 2010, at 3:29 PM, Tang, Hsiu-Khuern wrote:
&gt; 
&gt; &gt; 
&gt; &gt; Hi,
&gt; &gt; 
&gt; &gt; I am trying to understand how to control the range of ports used by Open MPI.
&gt; &gt; I tried setting the parameters btl_tcp_port_min_v4 and btl_tcp_port_range_v4,
&gt; &gt; but they don't seem to have an effect.
&gt; &gt; 
&gt; &gt; I am using Open MPI 1.4.2 from Debian sid, but get the same result on RHEL5.
&gt; &gt; 
&gt; &gt; When I run a program like
&gt; &gt; 
&gt; &gt; mpirun --host host1,host2 -np 2 --mca btl_tcp_port_min_v4 10000 --mca btl_tcp_port_range_v4 10 sleep 100
&gt; &gt; 
&gt; &gt; and then in another terminal run &quot;netstat -plnt&quot;, should I expect to see mpirun
&gt; &gt; listening on one or more ports between 10000 and 10009?  I don't -- mpirun is
&gt; &gt; invariably listening on some other ports.
&gt; &gt; 
&gt; &gt; Thanks!
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt; Best,
&gt; &gt; Hsiu-Khuern.
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15083.php">Alaukik Aggarwal: "[OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>In reply to:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Reply:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
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
