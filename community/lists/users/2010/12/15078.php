<?
$subject_val = "[OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 17:29:27 2010" -->
<!-- isoreceived="20101210222927" -->
<!-- sent="Fri, 10 Dec 2010 14:29:22 -0800" -->
<!-- isosent="20101210222922" -->
<!-- name="Tang, Hsiu-Khuern" -->
<!-- email="hsiu-khuern_tang_at_[hidden]" -->
<!-- subject="[OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4" -->
<!-- id="20101210222922.GE3198_at_htang-linux.corp.intuit.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4<br>
<strong>From:</strong> Tang, Hsiu-Khuern (<em>hsiu-khuern_tang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 17:29:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15079.php">Ralph Castain: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15077.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Reply:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to understand how to control the range of ports used by Open MPI.
<br>
I tried setting the parameters btl_tcp_port_min_v4 and btl_tcp_port_range_v4,
<br>
but they don't seem to have an effect.
<br>
<p>I am using Open MPI 1.4.2 from Debian sid, but get the same result on RHEL5.
<br>
<p>When I run a program like
<br>
<p>mpirun --host host1,host2 -np 2 --mca btl_tcp_port_min_v4 10000 --mca btl_tcp_port_range_v4 10 sleep 100
<br>
<p>and then in another terminal run &quot;netstat -plnt&quot;, should I expect to see mpirun
<br>
listening on one or more ports between 10000 and 10009?  I don't -- mpirun is
<br>
invariably listening on some other ports.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Best,
Hsiu-Khuern.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15079.php">Ralph Castain: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15077.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Reply:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
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
