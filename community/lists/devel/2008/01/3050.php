<?
$subject_val = "Re: [OMPI devel] Hierarchical Collectives Query";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 20:02:47 2008" -->
<!-- isoreceived="20080125010247" -->
<!-- sent="Thu, 24 Jan 2008 19:02:33 -0600" -->
<!-- isosent="20080125010233" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hierarchical Collectives Query" -->
<!-- id="47993529.50704_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4799206E.10708_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hierarchical Collectives Query<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 20:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>In reply to:</strong> <a href="3048.php">Rolf Vandevaart: "[OMPI devel] Hierarchical Collectives Query"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>Whoowh! That's actually good news, since in our own tests hierarch is 
<br>
always slower. But this might be due to various reasons, including the 
<br>
fact, that we only have two cores per node. BTW: I actually would expect 
<br>
IMB test to have worse performance for hierarch compared to many other 
<br>
benchmarks, since the rotating root causes some additional work/overhead.
<br>
<p>Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt; I am curious if anyone is doing any work currently on the hierarchical 
</span><br>
<span class="quotelev1">&gt; collectives.  I ask this because I just did some runs on a cluster made 
</span><br>
<span class="quotelev1">&gt; up of 4 servers with 4 processors per server.  I used TCP over IB.  I 
</span><br>
<span class="quotelev1">&gt; was running with np=16 and using the IMB benchmark to test MPI_Bcast. 
</span><br>
<span class="quotelev1">&gt; What I am seeing is that the hierarchical collectives appear to boost 
</span><br>
<span class="quotelev1">&gt; performance.  The IMB test rotates the root so one could imagine that 
</span><br>
<span class="quotelev1">&gt; since the hierarchical minimizes internode communication, performance 
</span><br>
<span class="quotelev1">&gt; increases.  See the table at the end of this post with the comparison 
</span><br>
<span class="quotelev1">&gt; for MPI_Bcast between tuned and hierarchical.  This leads me to a few 
</span><br>
<span class="quotelev1">&gt; other questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. From what I can tell from the debug messages, we still cannot stack 
</span><br>
<span class="quotelev1">&gt; the hierarchical on top of the tuned.  I know that Brian Barrett did 
</span><br>
<span class="quotelev1">&gt; some work after the collectives meeting to allow for this, but I could 
</span><br>
<span class="quotelev1">&gt; not figure out how to get it to work.
</span><br>
<p>actually, this should be possible. We do however experience with the 
<br>
current trunk some problems, so I can not verify right now. So, just for 
<br>
the sake of clarity, did you run hierarch on top of tuned or on top of 
<br>
basic and/or sm?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Enabling the hierarchical collectives causes a massive slowdown 
</span><br>
<span class="quotelev1">&gt; during MPI_Init.  I know it was discussed a little at the collectives 
</span><br>
<span class="quotelev1">&gt; meeting and it appears that this is still something we need to solve. 
</span><br>
<span class="quotelev1">&gt; For a simple hello_world, np=4, 2 node cluster, I see around 5 seconds 
</span><br>
<span class="quotelev1">&gt; to run for tuned collectives, but I see around 18 seconds for
</span><br>
<span class="quotelev1">&gt; hierarchical.
</span><br>
<p>yes. A faster, however simpler hierarchy detection is implemented, but 
<br>
not yet committed.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Apart from the MPI_Init issue, is hierarchical ready to go?
</span><br>
<p>Clearly, the algorithms are very simple in hierarch, but they are still 
<br>
lacking large-scale testing, so this is something which would have to be 
<br>
incorporated.
<br>
<p>We have also experimented with various other hierarchical algorithms for 
<br>
bcast, over the last few months. Our overall progress has however been 
<br>
significantly slower than I hoped. I know however, that various other 
<br>
groups also have interest in the hierarch component, and might also be 
<br>
ready to invest some time to bring it up to speed.
<br>
<p><p><p>Thanks
<br>
Edgar
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. As the nodes get fatter, I assume the need for hierarchical
</span><br>
<span class="quotelev1">&gt; will increase, so this may become a larger issue for all of us?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RESULTS FROM TWO RUNS OF IMB-MPI1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking Bcast
</span><br>
<span class="quotelev1">&gt; # #processes = 16             TUNED         HIERARCH
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         #bytes #repetitions  t_avg[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;              0         1000         0.11         0.22
</span><br>
<span class="quotelev1">&gt;              1         1000       205.97       319.86
</span><br>
<span class="quotelev1">&gt;              2         1000       159.23       180.80
</span><br>
<span class="quotelev1">&gt;              4         1000       175.32       189.16
</span><br>
<span class="quotelev1">&gt;              8         1000       153.10       184.26
</span><br>
<span class="quotelev1">&gt;             16         1000       170.98       192.33
</span><br>
<span class="quotelev1">&gt;             32         1000       160.69       187.17
</span><br>
<span class="quotelev1">&gt;             64         1000       159.75       182.62
</span><br>
<span class="quotelev1">&gt;            128         1000       175.47       185.19
</span><br>
<span class="quotelev1">&gt;            256         1000       160.77       194.68
</span><br>
<span class="quotelev1">&gt;            512         1000       265.45       313.89
</span><br>
<span class="quotelev1">&gt;           1024         1000       185.66       215.43
</span><br>
<span class="quotelev1">&gt;           2048         1000       815.97       257.37
</span><br>
<span class="quotelev1">&gt;           4096         1000      1208.48       442.93
</span><br>
<span class="quotelev1">&gt;           8192         1000      1521.23       530.54
</span><br>
<span class="quotelev1">&gt;          16384         1000      2357.45       813.44
</span><br>
<span class="quotelev1">&gt;          32768         1000      3341.29      1455.78
</span><br>
<span class="quotelev1">&gt;          65536          640      6485.70      3387.02
</span><br>
<span class="quotelev1">&gt;         131072          320     13488.35      5261.65
</span><br>
<span class="quotelev1">&gt;         262144          160     24783.09     10747.28
</span><br>
<span class="quotelev1">&gt;         524288           80     50906.06     21817.64
</span><br>
<span class="quotelev1">&gt;        1048576           40     95466.82     41397.49
</span><br>
<span class="quotelev1">&gt;        2097152           20    180759.72     81319.54
</span><br>
<span class="quotelev1">&gt;        4194304           10    322327.71    163274.55
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>In reply to:</strong> <a href="3048.php">Rolf Vandevaart: "[OMPI devel] Hierarchical Collectives Query"</a>
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
