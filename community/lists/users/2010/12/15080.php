<?
$subject_val = "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 17:50:10 2010" -->
<!-- isoreceived="20101210225010" -->
<!-- sent="Fri, 10 Dec 2010 15:49:59 -0700" -->
<!-- isosent="20101210224959" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4" -->
<!-- id="A54ED4C6-CBE2-43A7-8081-6E4C0AC7E188_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101210222922.GE3198_at_htang-linux.corp.intuit.net" -->
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
<strong>Date:</strong> 2010-12-10 17:49:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15079.php">Ralph Castain: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>In reply to:</strong> <a href="15078.php">Tang, Hsiu-Khuern: "[OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Reply:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun is not an MPI process, and so it doesn't obey the btl port params. To control mpirun's ports (and those used by the ORTE daemons), use the oob_tcp_port... params
<br>
<p><p>On Dec 10, 2010, at 3:29 PM, Tang, Hsiu-Khuern wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to understand how to control the range of ports used by Open MPI.
</span><br>
<span class="quotelev1">&gt; I tried setting the parameters btl_tcp_port_min_v4 and btl_tcp_port_range_v4,
</span><br>
<span class="quotelev1">&gt; but they don't seem to have an effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI 1.4.2 from Debian sid, but get the same result on RHEL5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run a program like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --host host1,host2 -np 2 --mca btl_tcp_port_min_v4 10000 --mca btl_tcp_port_range_v4 10 sleep 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then in another terminal run &quot;netstat -plnt&quot;, should I expect to see mpirun
</span><br>
<span class="quotelev1">&gt; listening on one or more ports between 10000 and 10009?  I don't -- mpirun is
</span><br>
<span class="quotelev1">&gt; invariably listening on some other ports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Hsiu-Khuern.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15079.php">Ralph Castain: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>In reply to:</strong> <a href="15078.php">Tang, Hsiu-Khuern: "[OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Reply:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
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
