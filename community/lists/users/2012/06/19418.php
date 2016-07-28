<?
$subject_val = "Re: [OMPI users] Intra-node communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 10:44:35 2012" -->
<!-- isoreceived="20120601144435" -->
<!-- sent="Fri, 1 Jun 2012 07:44:27 -0700" -->
<!-- isosent="20120601144427" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intra-node communication" -->
<!-- id="5E78C4A1-06BC-4460-9715-7D7BEB89F2D4_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1338561247.15801.YahooMailNeo_at_web121705.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intra-node communication<br>
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 10:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19419.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19417.php">Mudassar Majeed: "[OMPI users] Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19417.php">Mudassar Majeed: "[OMPI users] Intra-node communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19419.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Reply:</strong> <a href="19419.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This should not happen. Typically, Intra node communication latency are way way cheaper than inter node.
<br>
Can you please tell us how u ran your application ?
<br>
Thanks 
<br>
<p><pre>
--
Sent from my iPhone
On Jun 1, 2012, at 7:34 AM, Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt; wrote:
&gt; Dear MPI people, 
&gt;                                Can someone tell me why MPI_Ssend takes more time when two MPI processes are on same node ...... ?? the same two processes on different nodes take much less time for the same message exchange. I am using a supercomputing center and this happens. I was writing an algorithm to reduce the across node communication. But now I found that across node communication is cheaper than communication within a node (with 8 cores on each node).
&gt; 
&gt; best regards,
&gt; 
&gt; Mudassar
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19419.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19417.php">Mudassar Majeed: "[OMPI users] Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19417.php">Mudassar Majeed: "[OMPI users] Intra-node communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19419.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Reply:</strong> <a href="19419.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
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
