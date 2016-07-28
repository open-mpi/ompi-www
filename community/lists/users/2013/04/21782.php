<?
$subject_val = "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 10:56:56 2013" -->
<!-- isoreceived="20130424145656" -->
<!-- sent="Wed, 24 Apr 2013 14:56:51 +0000" -->
<!-- isosent="20130424145651" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4404CCB8_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAKj9NDkWzyC7ZWg8tLDPg1daXEruy9mCswW3LzuKdJeDbbLmSA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 10:56:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21783.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21781.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21783.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Reply:</strong> <a href="21783.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2013, at 10:24 AM, Thomas Watson &lt;exascale.system_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I still have a couple of questions to ask:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. In both MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED modes, the MPI calls are serialized at only one thread (in the former case, only the rank main thread can make MPI calls, while in the latter case the threads need to be coordinated so that only one thread makes MPI calls at a time). So are there any performance implications associated with choosing between FUNNELED or SERIALIZED?
</span><br>
<p>In Open MPI, no.
<br>
<p><span class="quotelev1">&gt; 2. My current code uses many MPI collective calls (gather/scatter/broadcast, etc.). It seems that these collective calls have some negative impact on performance because ALL MPI processes need to wait on each of these calls. I would like to explore the idea of decoupling computation from MPI communication - so if one thread of each MPI rank is blocked at a MPI call, the other threads can still make progress. I am wondering if I could still make MPI calls from the other non-blocked threads using  MPI_THREAD_FUNNELED or MPI_THREAD_SERIALIZED mode (assuming that the blocked thread is the main thread in the rank)?
</span><br>
<p>MPI-3 introduced the concept of non-blocking collectives (e.g., MPI_Igather).  Open MPI 1.7.x has preliminary versions of these, but the implementations concentrated on correctness: they haven't been optimized yet.  You might need to check how well MPI_Gather performs in a separate thread vs. MPI_Igather.
<br>
<p>Also, be aware that not all collectives are synchronizing.  Depending on the back-end algorithm that is used to implement any given collective, one MPI process may return much earlier from a collective call than one of its peers in the same collective call.  For example, with MPI_Gather of a short message, all non-root processes might do an eager send and return more-or-less immediately.  The root will need to block, however, until all messages are received.
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21783.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21781.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21783.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Reply:</strong> <a href="21783.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
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
