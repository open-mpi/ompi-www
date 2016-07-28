<?
$subject_val = "Re: [OMPI devel] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 21:25:18 2016" -->
<!-- isoreceived="20160315012518" -->
<!-- sent="Tue, 15 Mar 2016 10:25:18 +0900" -->
<!-- isosent="20160315012518" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Error" -->
<!-- id="CAAkFZ5uWAp+R=icEQaBi--e51D9yLYbDBjX9W6MA5zJWEq6nAQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALimjmWfEJZWX+YZbePk4C9nJXW4+d5Lg9UYeZapdg1PYoTLnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-14 21:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18698.php">Ralph Castain: "[OMPI devel] Event notification in OMPI"</a>
<li><strong>Previous message:</strong> <a href="18696.php">Dominic Kedelty: "[OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18696.php">Dominic Kedelty: "[OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dominic,
<br>
<p>this is a ROMIO error message, and ROMIO is from MPICH project.
<br>
at first, I recommend you try the same test with the latest mpich, in order
<br>
to check
<br>
whether the bug is indeed from romio, and has been fixed in the latest
<br>
release.
<br>
(ompi is a few version behind the latest romio)
<br>
<p>would you be able to post a trimmed version of your application that
<br>
evidences the test ?
<br>
that will be helpful to understand what is going on.
<br>
<p>you might also want to give a try to
<br>
mpirun --mca io ompio ...
<br>
and see whether this helps.
<br>
that being said, I think ompio is not considered as production ready on the
<br>
v1.10 series of ompi
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, March 15, 2016, Dominic Kedelty &lt;dkedelty_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am getting the following error using openmpi and I am wondering if
</span><br>
<span class="quotelev1">&gt; anyone would have clue as to why it is happening. It is an error coming
</span><br>
<span class="quotelev1">&gt; from openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes
</span><br>
<span class="quotelev1">&gt; (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev1">&gt; Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes
</span><br>
<span class="quotelev1">&gt; (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev1">&gt; application called MPI_Abort(MPI_COMM_WORLD, 1) - process 157
</span><br>
<span class="quotelev1">&gt; application called MPI_Abort(MPI_COMM_WORLD, 1) - process 477
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18697/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18698.php">Ralph Castain: "[OMPI devel] Event notification in OMPI"</a>
<li><strong>Previous message:</strong> <a href="18696.php">Dominic Kedelty: "[OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18696.php">Dominic Kedelty: "[OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
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
