<?
$subject_val = "Re: [OMPI users] What about MPI-3 shared memory features?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 12:02:40 2016" -->
<!-- isoreceived="20160411160240" -->
<!-- sent="Mon, 11 Apr 2016 09:02:38 -0700" -->
<!-- isosent="20160411160238" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What about MPI-3 shared memory features?" -->
<!-- id="CAGKz=uKFrFvYW4nrfVqFwr5y5yyOXrWuvmEJY1+0PYAZ90ZHeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="570BC6E0.1050904_at_reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What about MPI-3 shared memory features?<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-11 12:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28917.php">Nathan Hjelm: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Previous message:</strong> <a href="28915.php">Tom Rosmond: "[OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>In reply to:</strong> <a href="28915.php">Tom Rosmond: "[OMPI users] What about MPI-3 shared memory features?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28917.php">Nathan Hjelm: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Reply:</strong> <a href="28917.php">Nathan Hjelm: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI-3 shared memory gives you direct access, meaning potentially zero
<br>
copies if you eg just read shared state.
<br>
<p>Optimizing intranode MPI comm just reduces copies. Since MPI comm semantics
<br>
require one copy, you can't do better in RMA. In Send-Recv, I guess you can
<br>
do only one copy with a CMA implementation, else probably two copies (to
<br>
and from shared memory).
<br>
<p>So there is definitely an advantage to MPI shared memory.
<br>
<p>Jeff
<br>
<p>On Monday, April 11, 2016, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been looking into the MPI-3 extensions that added ways to do direct
</span><br>
<span class="quotelev1">&gt; memory copying on multi-core 'nodes' that share memory. Architectures
</span><br>
<span class="quotelev1">&gt; constructed from these nodes are universal now, so improved ways to exploit
</span><br>
<span class="quotelev1">&gt; them are certainly needed.  However, it is my understanding that Open-MPI
</span><br>
<span class="quotelev1">&gt; and other widely used MPI implementations, e.g. Intel, MPICH, use hardware
</span><br>
<span class="quotelev1">&gt; locality to identify shared memory regions and do direct memory copies
</span><br>
<span class="quotelev1">&gt; between processes in these cases, rather than network communication.  If
</span><br>
<span class="quotelev1">&gt; this is the case, are there any additional advantages from explicit
</span><br>
<span class="quotelev1">&gt; programming of memory copying using MPI-3 shared memory features?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T. Rosmond
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28915.php">http://www.open-mpi.org/community/lists/users/2016/04/28915.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28917.php">Nathan Hjelm: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Previous message:</strong> <a href="28915.php">Tom Rosmond: "[OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>In reply to:</strong> <a href="28915.php">Tom Rosmond: "[OMPI users] What about MPI-3 shared memory features?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28917.php">Nathan Hjelm: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Reply:</strong> <a href="28917.php">Nathan Hjelm: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
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
