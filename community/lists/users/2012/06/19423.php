<?
$subject_val = "Re: [OMPI users] Intra-node communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 12:10:37 2012" -->
<!-- isoreceived="20120601161037" -->
<!-- sent="Fri, 1 Jun 2012 09:10:32 -0700 (PDT)" -->
<!-- isosent="20120601161032" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intra-node communication" -->
<!-- id="1338567032.40631.YahooMailNeo_at_web121705.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E8873450-2B13-44EC-B6C5-2F09562E7334_at_cisco.com" -->
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
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 12:10:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19424.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19422.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19419.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19424.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Reply:</strong> <a href="19424.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff, 
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Can you suggest me a quick guide that can help me testing specifically&#160; the across and within node communication. I have some submission today so have no time for googling. If the benchmark tells me the right thing then I will do something accordingly.

best regards,
Mudassar



________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Cc: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt; 
Sent: Friday, June 1, 2012 4:52 PM
Subject: Re: [OMPI users] Intra-node communication
 
...and exactly how you measured.&#160; You might want to run a well-known benchmark, like NetPIPE or the OSU pt2pt benchmarks.

Note that the *first* send between any given peer pair is likely to be slow because OMPI does a lazy connection scheme (i.e., the connection is made behind the scenes).&#160; Subsequent sends are likely faster.&#160; Well-known benchmarks do a bunch of warmup sends and then start timing after those are all done.

Also ensure that you have shared memory support enabled.&#160; It is likely to be enabled by default, but if you're seeing different performance than you expect, that's something to check.


On Jun 1, 2012, at 10:44 AM, Jingcha Joba wrote:

&gt; This should not happen. Typically, Intra node communication latency are way way cheaper than inter node.
&gt; Can you please tell us how u ran your application ?
&gt; Thanks 
&gt; 
&gt; --
&gt; Sent from my iPhone
&gt; 
&gt; On Jun 1, 2012, at 7:34 AM, Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; Dear MPI people, 
&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Can someone tell me why MPI_Ssend takes more time when two MPI processes are on same node ...... ?? the same two processes on different nodes take much less time for the same message exchange. I am using a supercomputing center and this happens. I was writing an algorithm to reduce the across node communication. But now I found that across node communication is cheaper than communication within a node (with 8 cores on each node).
&gt;&gt; 
&gt;&gt; best regards,
&gt;&gt; 
&gt;&gt; Mudassar
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19424.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19422.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19419.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19424.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Reply:</strong> <a href="19424.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
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
