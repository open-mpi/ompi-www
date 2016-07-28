<?
$subject_val = "Re: [OMPI users] mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 17:22:02 2015" -->
<!-- isoreceived="20150529212202" -->
<!-- sent="Fri, 29 May 2015 14:21:57 -0700" -->
<!-- isosent="20150529212157" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun" -->
<!-- id="6A44E15D-7E91-45C9-9A92-12A15B463B86_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3F5244EA-6A7E-4B11-ABA6-194AE19FBBCC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 17:21:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26994.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun"</a>
<li><strong>Previous message:</strong> <a href="26992.php">Ralph Castain: "Re: [OMPI users] mpirun"</a>
<li><strong>In reply to:</strong> <a href="26992.php">Ralph Castain: "Re: [OMPI users] mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26995.php">Tim Prince: "Re: [OMPI users] mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another thing you might want to try: see how long it takes to run a simple MPI &#226;&#128;&#156;hello&#226;&#128;&#157; - see our &#226;&#128;&#156;examples&#226;&#128;&#157; directory. This will tell us if there is something about this app that is causing the delay, or something in the launch support
<br>
<p><p><span class="quotelev1">&gt; On May 29, 2015, at 1:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since you are able to build OMPI from scratch, can you build it with &#226;&#128;&#148;enable-debug? If so, then you could set an MCA param or two for debug purposes that might help us narrow down where the delay is coming from. I&#226;&#128;&#153;d start with &quot;&#226;&#128;&#148;mca state_base_verbose 5&#226;&#128;&#157; and see if there is some noticeable hang during the output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 29, 2015, at 12:58 PM, Walt Brainerd &lt;walt.brainerd_at_[hidden] &lt;mailto:walt.brainerd_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should explain a little more. Sorry.
</span><br>
<span class="quotelev2">&gt;&gt; I built OpenMPI and Opencoarrays and Gfortran 5.1.
</span><br>
<span class="quotelev2">&gt;&gt; It is with this  combination that I am running a
</span><br>
<span class="quotelev2">&gt;&gt; program using coarrays compiled by gfortran.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The command &quot;mpirun -np 4 a.exe&quot; appears to take
</span><br>
<span class="quotelev2">&gt;&gt; about 5 seconds to start up. This is true of another
</span><br>
<span class="quotelev2">&gt;&gt; person using the same software. It is the same
</span><br>
<span class="quotelev2">&gt;&gt; whether using mpirun that I built from source or the
</span><br>
<span class="quotelev2">&gt;&gt; mpirun in cygwin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After the 5 seconds, the program appears to run fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your comments.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 29, 2015 at 12:35 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I assume you mean on cygwin? Or is this an older version that supported native Windows?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On May 29, 2015, at 12:34 PM, Walt Brainerd &lt;walt.brainerd_at_[hidden] &lt;mailto:walt.brainerd_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Windows, mpirun appears to take about 5 seconds
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to start. I can't try it on Linux. Intel takes no time to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; start executing its version.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is this expected?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Walt Brainerd
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26988.php">http://www.open-mpi.org/community/lists/users/2015/05/26988.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/05/26988.php">http://www.open-mpi.org/community/lists/users/2015/05/26988.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26989.php">http://www.open-mpi.org/community/lists/users/2015/05/26989.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/05/26989.php">http://www.open-mpi.org/community/lists/users/2015/05/26989.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Walt Brainerd
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26991.php">http://www.open-mpi.org/community/lists/users/2015/05/26991.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26993/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26994.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun"</a>
<li><strong>Previous message:</strong> <a href="26992.php">Ralph Castain: "Re: [OMPI users] mpirun"</a>
<li><strong>In reply to:</strong> <a href="26992.php">Ralph Castain: "Re: [OMPI users] mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26995.php">Tim Prince: "Re: [OMPI users] mpirun"</a>
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
