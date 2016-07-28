<?
$subject_val = "Re: [OMPI users] MPI_Bcast implementations in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 15:03:26 2016" -->
<!-- isoreceived="20160419190326" -->
<!-- sent="Tue, 19 Apr 2016 21:03:16 +0200" -->
<!-- isosent="20160419190316" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast implementations in OpenMPI" -->
<!-- id="CAMJJpkXJ-zNTMjYOLWARjh0P=YYtJ6jrdeqhU+jqjLuCP9YT3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CBF34FD3-13C5-44AE-B855-DB5222747895_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast implementations in OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 15:03:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28968.php">Nathan Hjelm: "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="28967.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28995.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthieu,
<br>
<p>If you are talking about how Open MPI selects between different broadcast
<br>
algorithms you might want to read [1]. We have implemented a dozen
<br>
different broadcast algorithms and have run a set of tests to measure their
<br>
performance. We then used a quad tree clasiffication algorithm to minimize
<br>
the number of switch points, and then generated the C code to dynamically
<br>
make the selection based on the message size and the number of
<br>
participants. Take a look at the function
<br>
ompi_coll_tuned_bcast_intra_dec_fixed in
<br>
ompi/mca/coll/tuned/coll_tuned_decision_fixed.c.
<br>
<p>&nbsp;George.
<br>
<p><p><p>On Tue, Apr 19, 2016 at 4:13 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Apr 15, 2016, at 9:18 AM, Dorier, Matthieu &lt;mdorier_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd like to know how OpenMPI implements MPI_Bcast. And if different
</span><br>
<span class="quotelev1">&gt; implementations are provided, how one is selected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a fairly complicated topic.  This old paper is the foundation for
</span><br>
<span class="quotelev1">&gt; how Open MPI works (it's a bit different these days, but the basic concepts
</span><br>
<span class="quotelev1">&gt; described in this paper are still mostly relevant):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/papers/ics-2004/">https://www.open-mpi.org/papers/ics-2004/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28967.php">http://www.open-mpi.org/community/lists/users/2016/04/28967.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28969/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28968.php">Nathan Hjelm: "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="28967.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28995.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
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
