<?
$subject_val = "Re: [OMPI devel] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 02:05:59 2016" -->
<!-- isoreceived="20160316060559" -->
<!-- sent="Tue, 15 Mar 2016 23:05:58 -0700" -->
<!-- isosent="20160316060558" -->
<!-- name="Dominic Kedelty" -->
<!-- email="dkedelty_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Error" -->
<!-- id="CALimjmUkLdbnVm2p+-fp7SAMJ1=pM6s+P6a0UFG=SG21CtLudA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5uWAp+R=icEQaBi--e51D9yLYbDBjX9W6MA5zJWEq6nAQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Dominic Kedelty (<em>dkedelty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 02:05:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18699.php">Ralph Castain: "[OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>In reply to:</strong> <a href="18697.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I do not have the latest mpich available. I tested using openmpi version
<br>
1.8.7 as well as mvapich2 version 1.9. both produced similar errors. I
<br>
tried the mca flag that you had provided and it is telling me that a
<br>
configuration file is needed.
<br>
<p>all processes return:
<br>
<p>STOP A configuration file is required
<br>
<p>I am attaching the subroutine of the code that I believe is where the
<br>
problem is occuring.
<br>
<p><p><p>On Mon, Mar 14, 2016 at 6:25 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dominic,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is a ROMIO error message, and ROMIO is from MPICH project.
</span><br>
<span class="quotelev1">&gt; at first, I recommend you try the same test with the latest mpich, in
</span><br>
<span class="quotelev1">&gt; order to check
</span><br>
<span class="quotelev1">&gt; whether the bug is indeed from romio, and has been fixed in the latest
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<span class="quotelev1">&gt; (ompi is a few version behind the latest romio)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; would you be able to post a trimmed version of your application that
</span><br>
<span class="quotelev1">&gt; evidences the test ?
</span><br>
<span class="quotelev1">&gt; that will be helpful to understand what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you might also want to give a try to
</span><br>
<span class="quotelev1">&gt; mpirun --mca io ompio ...
</span><br>
<span class="quotelev1">&gt; and see whether this helps.
</span><br>
<span class="quotelev1">&gt; that being said, I think ompio is not considered as production ready on
</span><br>
<span class="quotelev1">&gt; the v1.10 series of ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, March 15, 2016, Dominic Kedelty &lt;dkedelty_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting the following error using openmpi and I am wondering if
</span><br>
<span class="quotelev2">&gt;&gt; anyone would have clue as to why it is happening. It is an error coming
</span><br>
<span class="quotelev2">&gt;&gt; from openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes
</span><br>
<span class="quotelev2">&gt;&gt; (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev2">&gt;&gt; Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;= fd-&gt;hints-&gt;cb_nodes
</span><br>
<span class="quotelev2">&gt;&gt; (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev2">&gt;&gt; application called MPI_Abort(MPI_COMM_WORLD, 1) - process 157
</span><br>
<span class="quotelev2">&gt;&gt; application called MPI_Abort(MPI_COMM_WORLD, 1) - process 477
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be appreciated. Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18697.php">http://www.open-mpi.org/community/lists/devel/2016/03/18697.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18700/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18700/file.F90">file.F90</a>
</ul>
<!-- attachment="file.F90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18699.php">Ralph Castain: "[OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>In reply to:</strong> <a href="18697.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18701.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI Error"</a>
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
