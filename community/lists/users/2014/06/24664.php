<?
$subject_val = "Re: [OMPI users] connect() fails - inhomogeneous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 08:53:02 2014" -->
<!-- isoreceived="20140617125302" -->
<!-- sent="Tue, 17 Jun 2014 14:53:01 +0200" -->
<!-- isosent="20140617125301" -->
<!-- name="borno_borno_at_[hidden]" -->
<!-- email="borno_borno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] connect() fails - inhomogeneous cluster" -->
<!-- id="trinity-836a4b30-9ce3-4bf3-a440-6b514ea808d8-1403009581062_at_3capp-gmx-bs45" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2C9F43E9-8AE8-4B3E-980B-627F9478DCEC_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2014-06-17 08:53:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on licensing"</a>
<li><strong>Previous message:</strong> <a href="24663.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="24663.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24666.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="24666.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<head></head><body><div style="font-family: Verdana;font-size: 12.0px;"><div>
<div>I should have written that...</div>

<div>&nbsp;</div>

<div>mpirun -np n --hostfile host.cfg</div>

<div>
<div>&nbsp;</div>

<div>
<div>mpi@Ries&nbsp;&nbsp; slots=n_1 max_slots=n_1<br/>
mpi@Euler&nbsp; slots=n_2 max_slots=n_2</div>
</div>

<div>&nbsp;</div>

<div>It is arranged that the sum over the n_i is equal to n.</div>

<div>&nbsp;</div>

<div>Kurt</div>

<div name="quote" style="margin:10px 5px 5px 10px; padding: 10px 0 10px 10px; border-left:2px solid #C3D9E5; word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;">
<div style="margin:0 0 10px 0;"><b>Gesendet:</b>&nbsp;Dienstag, 17. Juni 2014 um 14:25 Uhr<br/>
<b>Von:</b>&nbsp;Reuti &lt;reuti@staff.uni-marburg.de&gt;<br/>
<b>An:</b>&nbsp;&quot;Open MPI Users&quot; &lt;users@open-mpi.org&gt;<br/>
<b>Betreff:</b>&nbsp;Re: [OMPI users] connect() fails - inhomogeneous cluster</div>

<div name="quoted-content">Hi,<br/>
<br/>
Am 17.06.2014 um 13:00 schrieb Borno Knuttelski:<br/>
<br/>
&gt; this is the first time I contact this list. I&#39;m using OpenMPI 1.6.5 on an inhomogeneous cluster with 2 machines. Short: With few processes everything works fine but with some more my application crashes. (Yes, I can guarantee that in every scenario I start processes on both machines). I posted the problem already with all details on stackoverflow (<a href="http://stackoverflow.com/questions/24164825/mpi-connect-fails-inhomogeneous-cluster" target="_blank">http://stackoverflow.com/questions/24164825/mpi-connect-fails-inhomogeneous-cluster</a>). Please have a look at it. What exactly is the problem and how can I fix it?<br/>
<br/>
How do you start the program - just with &#96;mpiexec&#96; and a proper hostfile and number of slots?<br/>
<br/>
-- Reuti<br/>
<br/>
<br/>
&gt; Every help and guess is appreciated and will be tested...<br/>
&gt; Thanks in advance,<br/>
&gt;<br/>
&gt; Kurt<br/>
&gt; _______________________________________________<br/>
&gt; users mailing list<br/>
&gt; users@open-mpi.org<br/>
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br/>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24662.php" target="_blank">http://www.open-mpi.org/community/lists/users/2014/06/24662.php</a><br/>
<br/>
_______________________________________________<br/>
users mailing list<br/>
users@open-mpi.org<br/>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br/>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24663.php" target="_blank">http://www.open-mpi.org/community/lists/users/2014/06/24663.php</a></div>
</div>
</div>
</div></div></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on licensing"</a>
<li><strong>Previous message:</strong> <a href="24663.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="24663.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24666.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="24666.php">Reuti: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
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
