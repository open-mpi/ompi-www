<?
$subject_val = "Re: [OMPI users] barrier algorithm 5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 07:58:22 2016" -->
<!-- isoreceived="20160504115822" -->
<!-- sent="Wed, 4 May 2016 20:58:22 +0900" -->
<!-- isosent="20160504115822" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] barrier algorithm 5" -->
<!-- id="CAAkFZ5u0E32_ut5mORBnuDqkH_6oa33OgKdRMBKF8crK4Oh8dw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87oa8mgk7n.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-04 07:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Previous message:</strong> <a href="29081.php">Dave Love: "[OMPI users] barrier algorithm 5"</a>
<li><strong>In reply to:</strong> <a href="29081.php">Dave Love: "[OMPI users] barrier algorithm 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Reply:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>yes, this is for two MPI tasks only.
<br>
<p>the MPI subroutine could/should return with an error if the communicator is
<br>
made of more than 3 tasks.
<br>
an other option would be to abort at initialization time if no collective
<br>
modules provide a barrier implementation.
<br>
or maybe the tuned module should have not used the two_procs algorithm, but
<br>
what should it do instead ? use a default one ? do not implement barrier ?
<br>
warn/error the end user ?
<br>
<p>note the error message might be a bit obscure.
<br>
<p>I write &quot;could&quot; because you explicitly forced something that cannot work,
<br>
and I am not convinced OpenMPI should protect end users from themselves,
<br>
even when they make an honest mistake.
<br>
<p>George, any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, May 4, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With OMPI 1.10.2 and earlier on Infiniband, IMB generally spins with no
</span><br>
<span class="quotelev1">&gt; output for the barrier benchmark if you run it with algorithm 5, i.e.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun --mca coll_tuned_use_dynamic_rules 1 --mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_barrier_algorithm 5 IMB-MPI1 barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is &quot;two proc only&quot;.  Does that mean it will only work for two
</span><br>
<span class="quotelev1">&gt; processes (which seems true experimentally)?  If so, should it report an
</span><br>
<span class="quotelev1">&gt; error if used with more?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29081.php">http://www.open-mpi.org/community/lists/users/2016/05/29081.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29082/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Previous message:</strong> <a href="29081.php">Dave Love: "[OMPI users] barrier algorithm 5"</a>
<li><strong>In reply to:</strong> <a href="29081.php">Dave Love: "[OMPI users] barrier algorithm 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>Reply:</strong> <a href="29083.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
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
