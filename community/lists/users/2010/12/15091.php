<?
$subject_val = "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 01:52:23 2010" -->
<!-- isoreceived="20101213065223" -->
<!-- sent="Sun, 12 Dec 2010 22:52:19 -0800" -->
<!-- isosent="20101213065219" -->
<!-- name="Tang, Hsiu-Khuern" -->
<!-- email="hsiu-khuern_tang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4" -->
<!-- id="20101213065218.GA14661_at_htang-linux.corp.intuit.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8DF38374-81D1-4190-B4D4-B94F1C33CB99_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-12-13 01:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15092.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="15090.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for confirming this and for getting a patch in.  Greatly appreciated!
<br>
<p><pre>
-- 
Best,
Hsiu-Khuern.
* On Sat 11:27AM -0700, 11 Dec 2010, Ralph Castain (rhc_at_[hidden]) wrote:
&gt; Hmmm....well, that stinks. I did some digging and there is indeed a bug in
&gt; the 1.4 series - forgot to convert the port number to network-byte order.
&gt; 
&gt; Will file a patch and add you to the ticket so you can see when it gets
&gt; applied. If you wouldn't mind testing the release candidate, that would be
&gt; appreciated.
&gt; 
&gt; Thanks!
&gt; Ralph
&gt; 
&gt; On Dec 10, 2010, at 3:58 PM, Tang, Hsiu-Khuern wrote:
&gt; 
&gt; &gt; Hi Ralph,
&gt; &gt; 
&gt; &gt; I did try the corresponding oob_* parameters (sorry for not mentioning that).
&gt; &gt; Here's what I tried:
&gt; &gt; 
&gt; &gt; 
&gt; &gt; mpirun --host host1,host2 -np 2 --mca btl_tcp_port_min_v4 10000 --mca btl_tcp_port_range_v4 10 --mca oob_tcp_port_min_v4 10000 --mca oob_tcp_port_range_v4 10 sleep 100
&gt; &gt; 
&gt; &gt; 
&gt; &gt; In another window while the above is running:
&gt; &gt; 
&gt; &gt; $ sudo netstat -plnt
&gt; &gt; 
&gt; &gt; tcp        0      0 0.0.0.0:4135                0.0.0.0:*                   LISTEN      9714/mpirun
&gt; &gt; tcp        0      0 :::58600                    :::*                        LISTEN      9714/mpirun
&gt; &gt; ...
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt; Best,
&gt; &gt; Hsiu-Khuern.
&gt; &gt; 
&gt; &gt; 
&gt; &gt; * On Fri 03:49PM -0700, 10 Dec 2010, Ralph Castain (rhc_at_[hidden]) wrote:
&gt; &gt;&gt; mpirun is not an MPI process, and so it doesn't obey the btl port params. To control mpirun's ports (and those used by the ORTE daemons), use the oob_tcp_port... params
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; On Dec 10, 2010, at 3:29 PM, Tang, Hsiu-Khuern wrote:
&gt; &gt;&gt; 
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; Hi,
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; I am trying to understand how to control the range of ports used by Open MPI.
&gt; &gt;&gt;&gt; I tried setting the parameters btl_tcp_port_min_v4 and btl_tcp_port_range_v4,
&gt; &gt;&gt;&gt; but they don't seem to have an effect.
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; I am using Open MPI 1.4.2 from Debian sid, but get the same result on RHEL5.
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; When I run a program like
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; mpirun --host host1,host2 -np 2 --mca btl_tcp_port_min_v4 10000 --mca btl_tcp_port_range_v4 10 sleep 100
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; and then in another terminal run &quot;netstat -plnt&quot;, should I expect to see mpirun
&gt; &gt;&gt;&gt; listening on one or more ports between 10000 and 10009?  I don't -- mpirun is
&gt; &gt;&gt;&gt; invariably listening on some other ports.
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; Thanks!
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; -- 
&gt; &gt;&gt;&gt; Best,
&gt; &gt;&gt;&gt; Hsiu-Khuern.
&gt; &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15092.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="15090.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="15085.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
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
