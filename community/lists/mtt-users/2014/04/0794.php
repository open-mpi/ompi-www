<?
$subject_val = "Re: [MTT users] mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 09:03:42 2014" -->
<!-- isoreceived="20140408130342" -->
<!-- sent="Tue, 8 Apr 2014 13:03:41 +0000" -->
<!-- isosent="20140408130341" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] mpirun problem" -->
<!-- id="8CF9BE53-224F-4FFD-ABB1-DC19D86739A7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1396890840.75925.YahooMailNeo_at_web140702.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [MTT users] mpirun problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 09:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0795.php">Gilles Gouaillardet: "[MTT users] Account request"</a>
<li><strong>Previous message:</strong> <a href="0793.php">tesfaye mamuye: "[MTT users] mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="0793.php">tesfaye mamuye: "[MTT users] mpirun problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MTT list is not really the right place to report specific MPI implementation bugs.  MTT is a tool for testing MPI implementations; it isn't an MPI implementation itself.
<br>
<p>It looks like you're using Open MPI -- you should probably subscribe to the Open MPI user's mailing list and ask your question over there.
<br>
<p><p>On Apr 7, 2014, at 1:14 PM, tesfaye mamuye &lt;tesfa2127_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using python script for simulation on my laptop. The software I'm using support MPI. But at the end  the following problem is reported by mpirun. I'm seeking anyone to fix the problem. Thank you for your time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; [tfish-Satellite-Pro-L300:30299] [[10889,1],0]-[[10889,0],0] mca_oob_tcp_msg_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; [tfish-Satellite-Pro-L300:30299] [[10889,1],0] routed:binomial: Connection to lifeline [[10889,0],0] lost
</span><br>
<span class="quotelev1">&gt; [tfish-Satellite-Pro-L300:30300] [[10889,1],1]-[[10889,0],0] mca_oob_tcp_msg_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; [tfish-Satellite-Pro-L300:30300] [[10889,1],1] routed:binomial: Connection to lifeline [[10889,0],0] lost
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 30297 on
</span><br>
<span class="quotelev1">&gt; node tfish-Satellite-Pro-L300 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tfish_at_tfish-Satellite-Pro-L300:~/Desktop/new/new1$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0795.php">Gilles Gouaillardet: "[MTT users] Account request"</a>
<li><strong>Previous message:</strong> <a href="0793.php">tesfaye mamuye: "[MTT users] mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="0793.php">tesfaye mamuye: "[MTT users] mpirun problem"</a>
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
