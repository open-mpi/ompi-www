<?
$subject_val = "Re: [OMPI users] OpenMP &amp; Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 13 19:04:33 2016" -->
<!-- isoreceived="20160313230433" -->
<!-- sent="Sun, 13 Mar 2016 16:04:11 -0700" -->
<!-- isosent="20160313230411" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP &amp;amp; Open MPI" -->
<!-- id="CAGKz=uLHzd+KUFZMtfKtSYNbBgrRy3SUkHhjiXxVgFvGhezJkg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2110909222.594603.1457902959807.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMP &amp; Open MPI<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-13 19:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28699.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28696.php">Matthew Larkin: "[OMPI users] OpenMP &amp; Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Mar 13, 2016 at 2:02 PM, Matthew Larkin &lt;larkym_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is Open MPI can utilize shared and/or distributed memory
</span><br>
<span class="quotelev1">&gt; architecture (parallel programming model). OpenMP is soley for shared
</span><br>
<span class="quotelev1">&gt; memory systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
The MPI-3 standard provides both explicitly shared and distributed memory
<br>
semantics.  See MPI_Win_allocate_shared for the shared memory feature.
<br>
<p>In addition to the explicit semantic, all reasonable MPI implementations
<br>
exploit shared-memory internally, which is why Send-Recv within a node is
<br>
usually higher bandwidth than between nodes.
<br>
<p><p><span class="quotelev1">&gt; I believe Open MPI incorporates OpenMP from some of the other archives I
</span><br>
<span class="quotelev1">&gt; glanced at.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Some implementations use OS threads (e.g. POSIX threads) internally but not
<br>
for the type of concurrency that OpenMP provides.
<br>
<p>OpenMP is usually a bad choice for use inside of an MPI library because it
<br>
does not generally compose well with other threading models.
<br>
<p><p><span class="quotelev1">&gt; Is this a true statement? If so, is there any need to create a hybrid
</span><br>
<span class="quotelev1">&gt; model that uses both OpenMP and Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Various people, including me, have argued that MPI+OpenMP hybrid
<br>
programming is not necessary and even harmful:
<br>
<a href="http://www.orau.gov/hpcor2015/whitepapers/Exascale_Computing_without_Threads-Barry_Smith.pdf">http://www.orau.gov/hpcor2015/whitepapers/Exascale_Computing_without_Threads-Barry_Smith.pdf</a>
<br>
<a href="http://www.cs.utexas.edu/users/flame/BLISRetreat2014/slides/hammond-blis-2014.pdf">http://www.cs.utexas.edu/users/flame/BLISRetreat2014/slides/hammond-blis-2014.pdf</a>
<br>
<a href="http://scisoftdays.org/pdf/2016_slides/hammond.pdf">http://scisoftdays.org/pdf/2016_slides/hammond.pdf</a>
<br>
<p>However, this does not mean that flat MPI is close to optimal.  The
<br>
statement here is only that MPI+MPI is more effective than MPI+OpenMP when
<br>
the programmer devotes equivalent effort to both (and handles SIMD via some
<br>
mechanism)
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28696.php">http://www.open-mpi.org/community/lists/users/2016/03/28696.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28700/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28699.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28696.php">Matthew Larkin: "[OMPI users] OpenMP &amp; Open MPI"</a>
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
