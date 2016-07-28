<?
$subject_val = "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 10:25:01 2013" -->
<!-- isoreceived="20130424142501" -->
<!-- sent="Wed, 24 Apr 2013 10:24:55 -0400" -->
<!-- isosent="20130424142455" -->
<!-- name="Thomas Watson" -->
<!-- email="exascale.system_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes" -->
<!-- id="CAKj9NDkWzyC7ZWg8tLDPg1daXEruy9mCswW3LzuKdJeDbbLmSA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1F1510EB-624B-4E78-BBA6-0A1DDA488F63_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2013-04-24 10:24:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21781.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21779.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21770.php">Nick Edmonds: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Reply:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nick,
<br>
<p>Thanks for your detailed info. In my case, I expect to spawn multiple
<br>
threads from each MPI process. I could use MPI_THREAD_FUNNELED
<br>
or MPI_THREAD_SERIALIZED to do so - I think MPI_THREAD_MULTIPLE is not
<br>
supported on InfiniBand, which I am using. Currently, I use OpenMPI +
<br>
Boost::Thread - no plan to shift to Boost::MPI yet.
<br>
<p>I still have a couple of questions to ask:
<br>
<p>1. In both MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED modes, the MPI
<br>
calls are serialized at only one thread (in the former case, only the rank
<br>
main thread can make MPI calls, while in the latter case the threads need
<br>
to be coordinated so that only one thread makes MPI calls at a time). So
<br>
are there any performance implications associated with choosing between
<br>
FUNNELED or SERIALIZED?
<br>
<p>2. My current code uses many MPI collective calls
<br>
(gather/scatter/broadcast, etc.). It seems that these collective calls have
<br>
some negative impact on performance because ALL MPI processes need to wait
<br>
on each of these calls. I would like to explore the idea of decoupling
<br>
computation from MPI communication - so if one thread of each MPI rank is
<br>
blocked at a MPI call, the other threads can still make progress. I am
<br>
wondering if I could still make MPI calls from the other non-blocked
<br>
threads using  MPI_THREAD_FUNNELED or MPI_THREAD_SERIALIZED mode (assuming
<br>
that the blocked thread is the main thread in the rank)?
<br>
<p>Any advice is highly appreciated!
<br>
<p><p>Cheers!
<br>
<p><p>Jacky
<br>
<p><p><p><p>On Tue, Apr 23, 2013 at 12:46 PM, Nick Edmonds &lt;ngedmond_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jacky,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a regular reader of this list but seldom a poster.  In this case
</span><br>
<span class="quotelev1">&gt; however I might actually be qualified to answer some questions or provide
</span><br>
<span class="quotelev1">&gt; some insight given I'm not sure how many other folks here use Boost.Thread.
</span><br>
<span class="quotelev1">&gt;  The first question is really what sort of threading model you want to use
</span><br>
<span class="quotelev1">&gt; with MPI, which others here are probably more qualified to advise you on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our applications we're using Boost.Thread with MPI_THREAD_MULTIPLE,
</span><br>
<span class="quotelev1">&gt; which is a not all-together enjoyable experience because the openib BTL
</span><br>
<span class="quotelev1">&gt; lacks support for thread multiple (at least as of the last time I checked).
</span><br>
<span class="quotelev1">&gt;  That being said, Boost.Thread behaves just like any pthread code on the
</span><br>
<span class="quotelev1">&gt; linux clusters we run on, as well as one BlueGene/P.  With
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SERIALIZED writing hybrid-parallel code is pretty painless.
</span><br>
<span class="quotelev1">&gt;  Most of the work required involved adding two-stage collectives such that
</span><br>
<span class="quotelev1">&gt; threads first perform collectives locally and then a single thread
</span><br>
<span class="quotelev1">&gt; participates in the MPI collective operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you end up using Boost.MPI you could probably even write your own
</span><br>
<span class="quotelev1">&gt; wrappers to encapsulate the local computation required for MPI collective
</span><br>
<span class="quotelev1">&gt; operations.  Unfortunately Boost.MPI currently lacks full support for even
</span><br>
<span class="quotelev1">&gt; MPI-2 but if it includes the subset of functionality you need it may be
</span><br>
<span class="quotelev1">&gt; worthwhile.  Extensions are fairly straightforward to implement as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've implemented a few different approaches to MPI + threading in the
</span><br>
<span class="quotelev1">&gt; context of Boost, from explicit thread management to thread pools, and
</span><br>
<span class="quotelev1">&gt; currently a complete runtime system.  Most of it is research code, though
</span><br>
<span class="quotelev1">&gt; there's no reason it couldn't be released, and some of it probably will be
</span><br>
<span class="quotelev1">&gt; eventually.  If you'd like to describe your intended use case I'm happy to
</span><br>
<span class="quotelev1">&gt; offer any advice I can based on what I've learned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2013, at 3:25 PM, Thomas Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to create a pool of threads (using Boost::Thread) within
</span><br>
<span class="quotelev1">&gt; each OpenMPI process to accelerate my application on multicore CPUs. My
</span><br>
<span class="quotelev1">&gt; application is already built on OpenMPI, but it currently exploits
</span><br>
<span class="quotelev1">&gt; parallelism only at the process level.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering if anyone can point me to some good
</span><br>
<span class="quotelev1">&gt; tutorials/documents/examples on how to integrate Boost multithreading with
</span><br>
<span class="quotelev1">&gt; OpenMPI applications?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jacky
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21781.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21779.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21770.php">Nick Edmonds: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Reply:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
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
