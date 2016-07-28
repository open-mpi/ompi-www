<?
$subject_val = "Re: [OMPI users] connect() fails - inhomogeneous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 12:56:39 2014" -->
<!-- isoreceived="20140617165639" -->
<!-- sent="Tue, 17 Jun 2014 18:56:38 +0200" -->
<!-- isosent="20140617165638" -->
<!-- name="borno_borno_at_[hidden]" -->
<!-- email="borno_borno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] connect() fails - inhomogeneous cluster" -->
<!-- id="trinity-cff9c7e4-a486-42f3-bb62-9237d1273836-1403024197759_at_3capp-gmx-bs06" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="06183F19-1B83-423A-A168-D8D3DFEE8E35_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] connect() fails - inhomogeneous cluster<br>
<strong>From:</strong> <a href="mailto:borno_borno_at_[hidden]?Subject=Re:%20[OMPI%20users]%20connect()%20fails%20-%20inhomogeneous%20cluster"><em>borno_borno_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-06-17 12:56:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24668.php">Florian Hahner: "[OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Previous message:</strong> <a href="24666.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="24666.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<head></head><body><div style="font-family: Verdana;font-size: 12.0px;"><div>
<div>Well, maybe but when I use the more verbose Output <span class="comment-copy"><code>--mca btl_base_verbose 30 --mca oob_base_verbose 30, I can see that the right ip was found for each hostname, but the cnnection fails with:</code></span></div>

<div>&nbsp;</div>

<div><code>[Ries][[35743,1],2][/openmpi/1.6.5/openmpi-1.6.5/ompi/mca/btl/tcp/btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect() to &lt;ip of Euler&gt; failed: No route to host (113)</code><span class="comment-copy"><code>&nbsp; </code></span></div>

<div>&nbsp;
<div name="quote" style="margin:10px 5px 5px 10px; padding: 10px 0 10px 10px; border-left:2px solid #C3D9E5; word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;">
<div style="margin:0 0 10px 0;"><b>Gesendet:</b>&nbsp;Dienstag, 17. Juni 2014 um 15:44 Uhr<br/>
<b>Von:</b>&nbsp;Reuti &lt;reuti@Staff.Uni-Marburg.DE&gt;<br/>
<b>An:</b>&nbsp;&quot;Open MPI Users&quot; &lt;users@open-mpi.org&gt;<br/>
<b>Betreff:</b>&nbsp;Re: [OMPI users] connect() fails - inhomogeneous cluster</div>

<div name="quoted-content">Am 17.06.2014 um 14:53 schrieb borno_borno@gmx.de:<br/>
<br/>
&gt; I should have written that...<br/>
&gt;<br/>
&gt; mpirun -np n --hostfile host.cfg<br/>
&gt;<br/>
&gt; mpi@Ries slots=n_1 max_slots=n_1<br/>
&gt; mpi@Euler slots=n_2 max_slots=n_2<br/>
<br/>
Although it&#39;s defined to use characters in a case insensitive manner in hostnames, my experience is that not all calls are mapping it in a proper way. To avoid any confusion because of this, it&#39;s best to have them all in lowercase. I don&#39;t know whether this is related to your observation.<br/>
<br/>
-- Reuti<br/>
<br/>
<br/>
&gt; It is arranged that the sum over the n_i is equal to n.<br/>
&gt;<br/>
&gt; Kurt<br/>
&gt; Gesendet: Dienstag, 17. Juni 2014 um 14:25 Uhr<br/>
&gt; Von: Reuti &lt;reuti@staff.uni-marburg.de&gt;<br/>
&gt; An: &quot;Open MPI Users&quot; &lt;users@open-mpi.org&gt;<br/>
&gt; Betreff: Re: [OMPI users] connect() fails - inhomogeneous cluster<br/>
&gt; Hi,<br/>
&gt;<br/>
&gt; Am 17.06.2014 um 13:00 schrieb Borno Knuttelski:<br/>
&gt;<br/>
&gt; &gt; this is the first time I contact this list. I&#39;m using OpenMPI 1.6.5 on an inhomogeneous cluster with 2 machines. Short: With few processes everything works fine but with some more my application crashes. (Yes, I can guarantee that in every scenario I start processes on both machines). I posted the problem already with all details on stackoverflow (<a href="http://stackoverflow.com/questions/24164825/mpi-connect-fails-inhomogeneous-cluster" target="_blank">http://stackoverflow.com/questions/24164825/mpi-connect-fails-inhomogeneous-cluster</a>). Please have a look at it. What exactly is the problem and how can I fix it?<br/>
&gt;<br/>
&gt; How do you start the program - just with &#96;mpiexec&#96; and a proper hostfile and number of slots?<br/>
&gt;<br/>
&gt; -- Reuti<br/>
&gt;<br/>
&gt;<br/>
&gt; &gt; Every help and guess is appreciated and will be tested...<br/>
&gt; &gt; Thanks in advance,<br/>
&gt; &gt;<br/>
&gt; &gt; Kurt<br/>
&gt; &gt; _______________________________________________<br/>
&gt; &gt; users mailing list<br/>
&gt; &gt; users@open-mpi.org<br/>
&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br/>
&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24662.php" target="_blank">http://www.open-mpi.org/community/lists/users/2014/06/24662.php</a><br/>
&gt;<br/>
&gt; _______________________________________________<br/>
&gt; users mailing list<br/>
&gt; users@open-mpi.org<br/>
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br/>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24663.php" target="_blank">http://www.open-mpi.org/community/lists/users/2014/06/24663.php</a><br/>
&gt; _______________________________________________<br/>
&gt; users mailing list<br/>
&gt; users@open-mpi.org<br/>
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br/>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24664.php" target="_blank">http://www.open-mpi.org/community/lists/users/2014/06/24664.php</a><br/>
<br/>
_______________________________________________<br/>
users mailing list<br/>
users@open-mpi.org<br/>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br/>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24666.php" target="_blank">http://www.open-mpi.org/community/lists/users/2014/06/24666.php</a></div>
</div>
</div>
</div></div></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24668.php">Florian Hahner: "[OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Previous message:</strong> <a href="24666.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="24666.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
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
