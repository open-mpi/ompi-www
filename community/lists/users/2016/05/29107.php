<?
$subject_val = "Re: [OMPI users] barrier algorithm 5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 01:59:33 2016" -->
<!-- isoreceived="20160506055933" -->
<!-- sent="Fri, 6 May 2016 14:59:31 +0900" -->
<!-- isosent="20160506055931" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] barrier algorithm 5" -->
<!-- id="7633635c-8c3b-26b1-120c-bdb996419c30_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8737pxhhxz.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 01:59:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29114.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Reply:</strong> <a href="29114.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p><p>i made PR #1644 to abort with a user friendly error message
<br>
<p><a href="https://github.com/open-mpi/ompi/pull/1644">https://github.com/open-mpi/ompi/pull/1644</a>
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/5/2016 2:05 AM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes, this is for two MPI tasks only.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the MPI subroutine could/should return with an error if the communicator is
</span><br>
<span class="quotelev2">&gt;&gt; made of more than 3 tasks.
</span><br>
<span class="quotelev2">&gt;&gt; an other option would be to abort at initialization time if no collective
</span><br>
<span class="quotelev2">&gt;&gt; modules provide a barrier implementation.
</span><br>
<span class="quotelev2">&gt;&gt; or maybe the tuned module should have not used the two_procs algorithm, but
</span><br>
<span class="quotelev2">&gt;&gt; what should it do instead ? use a default one ? do not implement barrier ?
</span><br>
<span class="quotelev2">&gt;&gt; warn/error the end user ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; note the error message might be a bit obscure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I write &quot;could&quot; because you explicitly forced something that cannot work,
</span><br>
<span class="quotelev2">&gt;&gt; and I am not convinced OpenMPI should protect end users from themselves,
</span><br>
<span class="quotelev2">&gt;&gt; even when they make an honest mistake.
</span><br>
<span class="quotelev1">&gt; I just looped over the available algorithms, not expecting any not to
</span><br>
<span class="quotelev1">&gt; work.  One question is how I'd know it can't work; I can't find
</span><br>
<span class="quotelev1">&gt; documentation on the algorithms, just the more-or-less suggestive names
</span><br>
<span class="quotelev1">&gt; that I might be able to find in the literature, or not.  Is there a good
</span><br>
<span class="quotelev1">&gt; place to look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the absence of a good reason why not -- I haven't looked at the code
</span><br>
<span class="quotelev1">&gt; -- but I'd expect it to abort with a message about the algorithm being
</span><br>
<span class="quotelev1">&gt; limited to two processes at some stage.  Of course, this isn't a common
</span><br>
<span class="quotelev1">&gt; case, and people probably have more important things to do.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29083.php">http://www.open-mpi.org/community/lists/users/2016/05/29083.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29114.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Reply:</strong> <a href="29114.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
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
