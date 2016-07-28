<?
$subject_val = "Re: [OMPI users] LAM/MPI -&gt; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 10:40:53 2015" -->
<!-- isoreceived="20150227154053" -->
<!-- sent="Fri, 27 Feb 2015 07:40:49 -0800" -->
<!-- isosent="20150227154049" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LAM/MPI -&amp;gt; OpenMPI" -->
<!-- id="7E81D82B-05A7-46E9-A30B-11D5F0BD364C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC46ABB202_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LAM/MPI -&gt; OpenMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-27 10:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26408.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="26408.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Feb 27, 2015, at 6:42 AM, Sasso, John (GE Power &amp; Water, Non-GE) &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, we have a few apps which use LAM/MPI instead of OpenMPI (and this is something I have NO control over).   I have been making an effort to try and convince those who handle such apps to move over to LAM/MPI as it is (as I understand it) no longer supported and end-of-life.   In fact, the website www.lam-mpi-org &lt;<a href="http://www.lam-mpi-org/">http://www.lam-mpi-org/</a>&gt; is no longer accessible as the domain name expired on 2/20/2015. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Aside from a change of library paths in the Makefiles, I am assuming that hardly any code changes would be needed for them to rebuild and run the code with OpenMPI.  Comments on this?  
</span><br>
<p>You are correct - the MPI calls will not change. You would probably need to update any scripts that run the jobs as &#226;&#128;&#156;lamboot&#226;&#128;&#157; doesn&#226;&#128;&#153;t exist any more, but that&#226;&#128;&#153;s about it
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Yeah, any other recommendations I can give to convince the powers-that-be that immediate sun-setting of LAM/MPI would be great.   Sometimes I feel like I am trying to fit a square peg in a round hole L
</span><br>
<p>Other than the fact that LAM/MPI no longer is supported, the only real rationale would be that OMPI has a lot of enhancements in terms of binding options and other features, supports thru MPI-3, etc.
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;            --john
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26408.php">http://www.open-mpi.org/community/lists/users/2015/02/26408.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26408.php">http://www.open-mpi.org/community/lists/users/2015/02/26408.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26408.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="26408.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
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
