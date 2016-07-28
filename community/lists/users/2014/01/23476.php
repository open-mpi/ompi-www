<?
$subject_val = "Re: [OMPI users] Specific use case - very very new to MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 10:52:34 2014" -->
<!-- isoreceived="20140127155234" -->
<!-- sent="Mon, 27 Jan 2014 15:52:32 +0000" -->
<!-- isosent="20140127155232" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Specific use case - very very new to MPI" -->
<!-- id="BBBB8BDD-556C-457D-A94D-89CA919856B4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAK7rcp_GvXgyTTEws69d7M6nT_PN5fFzFb41vbMmJTqw2eiauw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Specific use case - very very new to MPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 10:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23477.php">Gus Correa: "Re: [OMPI users] Open MPI and multiple Torque versions"</a>
<li><strong>Previous message:</strong> <a href="23475.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23445.php">Kenneth Adam Miller: "[OMPI users] Specific use case - very very new to MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No need to cross-post to both lists; I'm just replying to the users list since this is a user's-level question.
<br>
<p>Unfortunately, Open MPI's level of thread support still isn't great.
<br>
<p>Also, it sounds like you have a 100% threaded problem; MPI may not be the best tool for you.  MPI is more about inter-process communication; it is not currently good at inter-thread communication (there's a lot of talk about this topic in the MPI standards body, and something about inter-thread communication may make it into the upcoming MPI-4 specification, but today the most recent version of the MPI specification is MPI-3.0).
<br>
<p><p><p>On Jan 24, 2014, at 12:28 PM, Kenneth Adam Miller &lt;kennethadammiller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a specific use case that I want to describe, and I'm brand new to MPI. It's rather complex, so I want to be careful that I design it so that there are no race conditions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pool A is a buffer (of type 1) handle manager, that feeds buffer handles into thread set 1, and receives old handles from thread set 2. There is only one thread running pool A.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thread set 1 is a set of N threads that fill up buffers of type 1 with regular data. It pushes full buffers to thread set 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thread set 2 is a set of M threads that compress buffers of type 1 into data buffers of type 2. Once the buffer of type 1 has be used up, it is cleared and sent back to Pool A. It pulls fresh data buffers of type 2 from Pool B, and sends freshly filled compressed buffers to Pool C. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pool C does something with the buffer, clears it and hands it to Pool B.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can this be done safely using an implementation like what I see here: <a href="http://www.justsoftwaresolutions.co.uk/threading/implementing-a-thread-safe-queue-using-condition-variables.html">http://www.justsoftwaresolutions.co.uk/threading/implementing-a-thread-safe-queue-using-condition-variables.html</a>
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; Note 1: -= denotes a 1-to-N connect and =- a N-to-1 connect
</span><br>
<span class="quotelev1">&gt; RR = Request reply relationship
</span><br>
<span class="quotelev1">&gt; <a href="http://imgur.com/6tWZglJ">http://imgur.com/6tWZglJ</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Questions: does MPI work with intel PIN tools? If so, then how can I apply it to this? (I need specific modules and some examples, the OpenMPI manual just appears to be a bunch of references with no textual guides...).
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23477.php">Gus Correa: "Re: [OMPI users] Open MPI and multiple Torque versions"</a>
<li><strong>Previous message:</strong> <a href="23475.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23445.php">Kenneth Adam Miller: "[OMPI users] Specific use case - very very new to MPI"</a>
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
