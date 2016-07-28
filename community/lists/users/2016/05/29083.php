<?
$subject_val = "Re: [OMPI users] barrier algorithm 5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 13:05:46 2016" -->
<!-- isoreceived="20160504170546" -->
<!-- sent="Wed, 04 May 2016 18:05:44 +0100" -->
<!-- isosent="20160504170544" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] barrier algorithm 5" -->
<!-- id="8737pxhhxz.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAkFZ5u0E32_ut5mORBnuDqkH_6oa33OgKdRMBKF8crK4Oh8dw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] barrier algorithm 5<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-04 13:05:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29084.php">Iman Faraji: "[OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
<li><strong>Previous message:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>In reply to:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29107.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Reply:</strong> <a href="29107.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, this is for two MPI tasks only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the MPI subroutine could/should return with an error if the communicator is
</span><br>
<span class="quotelev1">&gt; made of more than 3 tasks.
</span><br>
<span class="quotelev1">&gt; an other option would be to abort at initialization time if no collective
</span><br>
<span class="quotelev1">&gt; modules provide a barrier implementation.
</span><br>
<span class="quotelev1">&gt; or maybe the tuned module should have not used the two_procs algorithm, but
</span><br>
<span class="quotelev1">&gt; what should it do instead ? use a default one ? do not implement barrier ?
</span><br>
<span class="quotelev1">&gt; warn/error the end user ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note the error message might be a bit obscure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I write &quot;could&quot; because you explicitly forced something that cannot work,
</span><br>
<span class="quotelev1">&gt; and I am not convinced OpenMPI should protect end users from themselves,
</span><br>
<span class="quotelev1">&gt; even when they make an honest mistake.
</span><br>
<p>I just looped over the available algorithms, not expecting any not to
<br>
work.  One question is how I'd know it can't work; I can't find
<br>
documentation on the algorithms, just the more-or-less suggestive names
<br>
that I might be able to find in the literature, or not.  Is there a good
<br>
place to look?
<br>
<p>In the absence of a good reason why not -- I haven't looked at the code
<br>
-- but I'd expect it to abort with a message about the algorithm being
<br>
limited to two processes at some stage.  Of course, this isn't a common
<br>
case, and people probably have more important things to do.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29084.php">Iman Faraji: "[OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
<li><strong>Previous message:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>In reply to:</strong> <a href="29082.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29107.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Reply:</strong> <a href="29107.php">Gilles Gouaillardet: "Re: [OMPI users] barrier algorithm 5"</a>
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
