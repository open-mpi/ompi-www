<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  3 07:34:27 2006" -->
<!-- isoreceived="20060803113427" -->
<!-- sent="Thu, 03 Aug 2006 07:34:08 -0400" -->
<!-- isosent="20060803113408" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I debug this?" -->
<!-- id="C0F75770.15B67%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44D0C0BA.5000407_at_lnxi.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-03 07:34:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Previous message:</strong> <a href="1711.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>In reply to:</strong> <a href="1710.php">Robert Cummins: "[OMPI users] How do I debug this?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Robert.
<br>
<p>Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Of particular interest will be the version that you are using.  We had some
<br>
bugs with the TCP connection code that were recently fixed.  Can you try the
<br>
latest 1.1.1 beta tarball and see if it fixes your problem?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.1/">http://www.open-mpi.org/software/ompi/v1.1/</a>
<br>
<p><p>On 8/2/06 11:11 AM, &quot;Robert Cummins&quot; &lt;rcummins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to run a 64 way mpi benchmark on my system.  I
</span><br>
<span class="quotelev1">&gt; *always* get the following error and I'm wondering how do
</span><br>
<span class="quotelev1">&gt; I debug the problem node?  I can not reproduce the problem
</span><br>
<span class="quotelev1">&gt; with a smaller number of nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; snip...
</span><br>
<span class="quotelev1">&gt; [p1d049:18547] [0,1,48]-[0,1,20] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connect() fa
</span><br>
<span class="quotelev1">&gt; iled with errno=113
</span><br>
<span class="quotelev1">&gt; [p1d049:18547] [0,1,48]-[0,1,21] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connect() fa
</span><br>
<span class="quotelev1">&gt; iled with errno=113
</span><br>
<span class="quotelev1">&gt; [p1d049:18547] [0,1,48]-[0,1,24] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connect() fa
</span><br>
<span class="quotelev1">&gt; iled with errno=113
</span><br>
<span class="quotelev1">&gt; [p1d049:18547] [0,1,48]-[0,1,25] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connect() fa
</span><br>
<span class="quotelev1">&gt; iled with errno=113
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like I have well over 128 lines of similar output.  A quick
</span><br>
<span class="quotelev1">&gt; eyeball of
</span><br>
<span class="quotelev1">&gt; the output seems to indicate about 1/2 of all nodes are reporting this
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have checked the error counters on my IB switch and I
</span><br>
<span class="quotelev1">&gt; have 0 new errors during the run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIA.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; R.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Previous message:</strong> <a href="1711.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>In reply to:</strong> <a href="1710.php">Robert Cummins: "[OMPI users] How do I debug this?"</a>
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
