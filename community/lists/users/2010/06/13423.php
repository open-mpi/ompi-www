<?
$subject_val = "Re: [OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 08:29:51 2010" -->
<!-- isoreceived="20100628122951" -->
<!-- sent="Mon, 28 Jun 2010 08:29:47 -0400" -->
<!-- isosent="20100628122947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Persistent Communication Question" -->
<!-- id="DE53C264-99C2-4B44-8D8F-3A8822B795F3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimsQQ8oR5bYmGv274oR-2l-onnRjhrFrEU98Pur_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Persistent Communication Question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-28 08:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13422.php">amjad ali: "[OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13422.php">amjad ali: "[OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 28, 2010, at 4:03 AM, amjad ali wrote:
<br>
<p><span class="quotelev1">&gt; (1)
</span><br>
<span class="quotelev1">&gt; Call this subroutines 1000 times
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt;              call MPI_RECV_Init() 
</span><br>
<span class="quotelev1">&gt;              call MPI_Send_Init()
</span><br>
<span class="quotelev1">&gt;              call MPI_Startall()
</span><br>
<span class="quotelev1">&gt;              call MPI_Free()
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2)
</span><br>
<span class="quotelev1">&gt; Call this subroutines 1000 times
</span><br>
<span class="quotelev1">&gt; ===========================
</span><br>
<span class="quotelev1">&gt;              call MPI_RECV_Init() 
</span><br>
<span class="quotelev1">&gt;              call MPI_Send_Init()
</span><br>
<span class="quotelev1">&gt;              call MPI_Startall()
</span><br>
<span class="quotelev1">&gt; ==========================
</span><br>
<span class="quotelev1">&gt;             call MPI_Free()  --------- call it only once at the end.
</span><br>
<p>Neither is better.  The idea is to do this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv_init()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send_init()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; 1000; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Startall()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* do whatever */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; 1000; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>So in your inner loop, you just call MPI_Startall() and a corresponding MPI_Test* / MPI_Wait* call to complete those requests.
<br>
<p>The idea is that the MPI_*_init() functions do some one-time setup on the requests and then you just start and complete those same requests over and over and over.  When you're done, you free them.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13422.php">amjad ali: "[OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13422.php">amjad ali: "[OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13424.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
