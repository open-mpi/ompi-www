<?
$subject_val = "Re: [OMPI devel] Use OMPI on another network interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 05:42:48 2016" -->
<!-- isoreceived="20160204104248" -->
<!-- sent="Thu, 4 Feb 2016 19:42:47 +0900" -->
<!-- isosent="20160204104247" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use OMPI on another network interface" -->
<!-- id="CAAkFZ5s3L8DR6HRZGOjLFpNS075kaF8yeT0J8oTD_wHHyFq4tA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160204105856.Horde.FS8br5GL2R6Mw5KC6Pf11g1_at_www.hordeimp.univ-montp2.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use OMPI on another network interface<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 05:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18548.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Use OMPI on another network interface"</a>
<li><strong>Previous message:</strong> <a href="18546.php">asavarym_at_[hidden]: "[OMPI devel] Use OMPI on another network interface"</a>
<li><strong>In reply to:</strong> <a href="18546.php">asavarym_at_[hidden]: "[OMPI devel] Use OMPI on another network interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18548.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Use OMPI on another network interface"</a>
<li><strong>Reply:</strong> <a href="18548.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Use OMPI on another network interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>this is difficult to answer such a generic request.
<br>
<p>MPI symbols (MPI_Bcast, ...) are defined as weak symbols, so the simplest
<br>
option is to redefine them an implement them the way you like. you are
<br>
always able to invoke PMPI_Bcast if you want to invoke the openmpi
<br>
implementation.
<br>
<p>a more ompi-ish way is to create your own collective module.
<br>
for example, the default module is in ompi/mca/coll/tuned
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, February 4, 2016, &lt;asavarym_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using a new network interface and its ad-hoc routing algorithms I would
</span><br>
<span class="quotelev1">&gt; like to try my own custom implementation of some collective communication
</span><br>
<span class="quotelev1">&gt; patterns(MPI_Bcast,MPI_Alltoall,...) without expanding those collective
</span><br>
<span class="quotelev1">&gt; communications as series of point-to-point ones based on a given predefined
</span><br>
<span class="quotelev1">&gt; process topology.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition my routing methods might require additional parameters, rather
</span><br>
<span class="quotelev1">&gt; than the basic destination lists obtained from that topology and the kind
</span><br>
<span class="quotelev1">&gt; of collective communication considered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How would I do that ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In which component should I modilfy something ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18546.php">http://www.open-mpi.org/community/lists/devel/2016/02/18546.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18547/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18548.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Use OMPI on another network interface"</a>
<li><strong>Previous message:</strong> <a href="18546.php">asavarym_at_[hidden]: "[OMPI devel] Use OMPI on another network interface"</a>
<li><strong>In reply to:</strong> <a href="18546.php">asavarym_at_[hidden]: "[OMPI devel] Use OMPI on another network interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18548.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Use OMPI on another network interface"</a>
<li><strong>Reply:</strong> <a href="18548.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Use OMPI on another network interface"</a>
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
