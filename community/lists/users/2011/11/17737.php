<?
$subject_val = "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  9 12:28:09 2011" -->
<!-- isoreceived="20111109172809" -->
<!-- sent="Wed, 9 Nov 2011 12:28:27 -0500" -->
<!-- isosent="20111109172827" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks" -->
<!-- id="4EBAB83B.1000503_at_ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E807425.5030406_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-09 12:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17738.php">Gustavo Correa: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17736.php">Jeff Squyres: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17436.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We did more tests concerning the latency using 512 MPI ranks
<br>
on our super-computer. (64 machines * 8 cores per machine)
<br>
<p>By default in Ray, any rank can communicate directly with any other.
<br>
<p>Thus we have a complete graph with 512 vertices and 130816 edges (512*511/2)
<br>
where vertices are ranks and edges are communication links.
<br>
<p>When a rank sends to itself, the route length is 0 edge. Otherwise, the 
<br>
route
<br>
length is 1 edge. However, 130816 is a lot of edges.
<br>
<p>With this, the average latency in microseconds when requesting a reply 
<br>
for a message of 4000 bytes
<br>
with Ray on our super-computer is 386 microseconds (standard deviation: 9).
<br>
<p>Recently, Jeff Squyres highlighted that using such a communication pattern
<br>
is not recommended and &quot;there are a bunch of different options you can 
<br>
pursue.&quot;
<br>
<p>See <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9773.php">http://www.open-mpi.org/community/lists/devel/2011/09/9773.php</a>
<br>
<p><p>By pursuing different options, we reduced the latency to 158 microseconds
<br>
(standard deviation: 15).  This is a drop of 59%.
<br>
To do so, we added a transparent message router in Ray.
<br>
<p>First a random graph is created with n vertices and n*log2(n)/2 randomly 
<br>
selected edges
<br>
from the n*(n-1)/2 edges. The idea is that, on average, any rank has a 
<br>
degree of log2(n)
<br>
instead of n.
<br>
With 512 ranks, this random graph has 2304 edges (512*9/2),
<br>
down from 130816 edges.
<br>
<p>Note that this is not a 9-regular graph (not all vertices have a degree 
<br>
of 9),
<br>
but the average is 9.
<br>
<p>Then , shortest routes are computed with Dijkstra's algorithm modified
<br>
to choose the less saturated route if more then one have
<br>
the same length.
<br>
<p>The route lengths are quite small.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Frequencies:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0    512    0.195312%      # send a message to itself
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1    4608    1.75781%      # send a message to a directly 
<br>
connected rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2    37644    14.36%
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    152972    58.3542%   # most of them
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    65710    25.0664%
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    698    0.266266%
<br>
<p><p>So my question is:
<br>
<p>Does that indicate where the real problem is on our super-computer ?
<br>
<p><p>Thanks a lot !
<br>
<p><p>Also, would transparent message routing be easy to implement
<br>
directly in Open-MPI as a component ?
<br>
<p><p><p>S&#233;bastien Boisvert
<br>
<a href="http://boisvert.info">http://boisvert.info</a>
<br>
<p>On 26/09/11 08:46 AM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; On 26-Sep-11 11:27 AM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; On 22-Sep-11 12:09 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 21, 2011, at 4:24 PM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What happens if you run 2 ibv_rc_pingpong's on each node?  Or N ibv_rc_pingpongs?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With 11 ibv_rc_pingpong's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://pastebin.com/85sPcA47">http://pastebin.com/85sPcA47</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Code to do that =&gt;    <a href="https://gist.github.com/1233173">https://gist.github.com/1233173</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Latencies are around 20 microseconds.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This seems to imply that the network is to blame for the higher latency...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; Interesting... I'm getting the same latency with ibv_rc_pingpong.
</span><br>
<span class="quotelev2">&gt;&gt; I get 8.5 usec for a single ping-pong.
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; BTW, I've just checked this with performance guys - ibv_rc_pingpong
</span><br>
<span class="quotelev1">&gt; is not used for performance measurement but only as IB network
</span><br>
<span class="quotelev1">&gt; sanity check, therefore it was never meant to give optimal performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use ib_write_lat instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; Please run 'ibclearcounters' to reset fabric counters, then
</span><br>
<span class="quotelev2">&gt;&gt; ibdiagnet to make sure that the fabric is clean.
</span><br>
<span class="quotelev2">&gt;&gt; If you have 4x QDR cluster, run ibdiagnet as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ibdiagnet --ls 10 --lw 4x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check that you don't have any errors/warnings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then please run your script with ib_write_lat instead of ibv_rc_pingpong.
</span><br>
<span class="quotelev2">&gt;&gt; Just replace the command in the script and the rest would be fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the fabric is clean, you're supposed to get typical
</span><br>
<span class="quotelev2">&gt;&gt; latency of ~1.4 usec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., if you run the same pattern with MPI processes and get 20us latency, that would tend to imply that the network itself is not performing well with that IO pattern.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My job seems to do well so far with ofud !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sboisver12_at_colosse2 ray]$ qstat
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job-ID  prior   name       user         state submit/start at     queue                          slots ja-task-ID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3047460 0.55384 fish-Assem sboisver12   r     09/21/2011 15:02:25 med_at_r104-n58                     256
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would still be suspicious -- ofud is not well tested, and it can definitely hang if there are network drops.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17738.php">Gustavo Correa: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17736.php">Jeff Squyres: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17436.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
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
