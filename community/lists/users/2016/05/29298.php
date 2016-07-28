<?
$subject_val = "Re: [OMPI users] wtime implementation in 1.10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 06:15:19 2016" -->
<!-- isoreceived="20160524101519" -->
<!-- sent="Tue, 24 May 2016 11:15:17 +0100" -->
<!-- isosent="20160524101517" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wtime implementation in 1.10" -->
<!-- id="87wpmjyd6y.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C75740D9-BC65-40C9-B5F8-6282B4DDEA67_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] wtime implementation in 1.10<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-24 06:15:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29299.php">Dave Love: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29297.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29287.php">Ralph Castain: "Re: [OMPI users] wtime implementation in 1.10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Nobody ever filed a PR to update the branch with the patch - looks
</span><br>
<span class="quotelev1">&gt; like you never responded to confirm that George&#226;&#128;&#153;s proposed patch was
</span><br>
<span class="quotelev1">&gt; acceptable.
</span><br>
<p>I've never seen anything asking me about it, but I'm not an OMPI
<br>
developer in a position to review backports or even put things in a bug
<br>
tracker.
<br>
<p>1.10 isn't used here, and I just subvert gettimeofday whenever I'm
<br>
running something that might use it for timing short intervals.
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;ll create the PR and copy you for review
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 23, 2016, at 9:17 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I thought the 1.10 branch had been fixed to use clock_gettime for
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Wtime where it's available, a la
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/community/lists/users/2016/04/28899.php">https://www.open-mpi.org/community/lists/users/2016/04/28899.php</a> -- and
</span><br>
<span class="quotelev2">&gt;&gt; have been telling people so!  However, I realize it hasn't, and it looks
</span><br>
<span class="quotelev2">&gt;&gt; as if 1.10 is still being maintained.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a good reason for that, or could it be fixed?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29299.php">Dave Love: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29297.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29287.php">Ralph Castain: "Re: [OMPI users] wtime implementation in 1.10"</a>
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
