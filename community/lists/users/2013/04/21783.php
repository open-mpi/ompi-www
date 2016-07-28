<?
$subject_val = "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 11:47:16 2013" -->
<!-- isoreceived="20130424154716" -->
<!-- sent="Wed, 24 Apr 2013 11:47:10 -0400" -->
<!-- isosent="20130424154710" -->
<!-- name="Thomas Watson" -->
<!-- email="exascale.system_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes" -->
<!-- id="CAKj9NDnbKxTFqTpaWyCrrEsRizgEcni28fZq69FZXEAbP_=wMw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4404CCB8_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes<br>
<strong>From:</strong> Thomas Watson (<em>exascale.system_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 11:47:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>In reply to:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff! That's very helpful.
<br>
<p>Cheers!
<br>
<p>Jacky
<br>
<p><p>On Wed, Apr 24, 2013 at 10:56 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 24, 2013, at 10:24 AM, Thomas Watson &lt;exascale.system_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I still have a couple of questions to ask:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. In both MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED modes, the MPI
</span><br>
<span class="quotelev1">&gt; calls are serialized at only one thread (in the former case, only the rank
</span><br>
<span class="quotelev1">&gt; main thread can make MPI calls, while in the latter case the threads need
</span><br>
<span class="quotelev1">&gt; to be coordinated so that only one thread makes MPI calls at a time). So
</span><br>
<span class="quotelev1">&gt; are there any performance implications associated with choosing between
</span><br>
<span class="quotelev1">&gt; FUNNELED or SERIALIZED?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Open MPI, no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. My current code uses many MPI collective calls
</span><br>
<span class="quotelev1">&gt; (gather/scatter/broadcast, etc.). It seems that these collective calls have
</span><br>
<span class="quotelev1">&gt; some negative impact on performance because ALL MPI processes need to wait
</span><br>
<span class="quotelev1">&gt; on each of these calls. I would like to explore the idea of decoupling
</span><br>
<span class="quotelev1">&gt; computation from MPI communication - so if one thread of each MPI rank is
</span><br>
<span class="quotelev1">&gt; blocked at a MPI call, the other threads can still make progress. I am
</span><br>
<span class="quotelev1">&gt; wondering if I could still make MPI calls from the other non-blocked
</span><br>
<span class="quotelev1">&gt; threads using  MPI_THREAD_FUNNELED or MPI_THREAD_SERIALIZED mode (assuming
</span><br>
<span class="quotelev1">&gt; that the blocked thread is the main thread in the rank)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI-3 introduced the concept of non-blocking collectives (e.g.,
</span><br>
<span class="quotelev1">&gt; MPI_Igather).  Open MPI 1.7.x has preliminary versions of these, but the
</span><br>
<span class="quotelev1">&gt; implementations concentrated on correctness: they haven't been optimized
</span><br>
<span class="quotelev1">&gt; yet.  You might need to check how well MPI_Gather performs in a separate
</span><br>
<span class="quotelev1">&gt; thread vs. MPI_Igather.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, be aware that not all collectives are synchronizing.  Depending on
</span><br>
<span class="quotelev1">&gt; the back-end algorithm that is used to implement any given collective, one
</span><br>
<span class="quotelev1">&gt; MPI process may return much earlier from a collective call than one of its
</span><br>
<span class="quotelev1">&gt; peers in the same collective call.  For example, with MPI_Gather of a short
</span><br>
<span class="quotelev1">&gt; message, all non-root processes might do an eager send and return
</span><br>
<span class="quotelev1">&gt; more-or-less immediately.  The root will need to block, however, until all
</span><br>
<span class="quotelev1">&gt; messages are received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>In reply to:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
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
