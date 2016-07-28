<?
$subject_val = "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 12:46:29 2013" -->
<!-- isoreceived="20130423164629" -->
<!-- sent="Tue, 23 Apr 2013 12:46:27 -0400" -->
<!-- isosent="20130423164627" -->
<!-- name="Nick Edmonds" -->
<!-- email="ngedmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes" -->
<!-- id="1F1510EB-624B-4E78-BBA6-0A1DDA488F63_at_cs.indiana.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKj9NDm88t95cuhodKFAqh=JDmGKVcU7FmSxKGU7M-b1e1za8g_at_mail.gmail.com" -->
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
<strong>From:</strong> Nick Edmonds (<em>ngedmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 12:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21769.php">Reuti: "Re: [OMPI users] Copying installed runtimes to another machine and using it"</a>
<li><strong>In reply to:</strong> <a href="21763.php">Thomas Watson: "[OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Reply:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jacky,
<br>
<p>I'm a regular reader of this list but seldom a poster.  In this case however I might actually be qualified to answer some questions or provide some insight given I'm not sure how many other folks here use Boost.Thread.  The first question is really what sort of threading model you want to use with MPI, which others here are probably more qualified to advise you on.  
<br>
<p>In our applications we're using Boost.Thread with MPI_THREAD_MULTIPLE, which is a not all-together enjoyable experience because the openib BTL lacks support for thread multiple (at least as of the last time I checked).  That being said, Boost.Thread behaves just like any pthread code on the linux clusters we run on, as well as one BlueGene/P.  With MPI_THREAD_SERIALIZED writing hybrid-parallel code is pretty painless.  Most of the work required involved adding two-stage collectives such that threads first perform collectives locally and then a single thread participates in the MPI collective operation.  
<br>
<p>If you end up using Boost.MPI you could probably even write your own wrappers to encapsulate the local computation required for MPI collective operations.  Unfortunately Boost.MPI currently lacks full support for even MPI-2 but if it includes the subset of functionality you need it may be worthwhile.  Extensions are fairly straightforward to implement as well.
<br>
<p>I've implemented a few different approaches to MPI + threading in the context of Boost, from explicit thread management to thread pools, and currently a complete runtime system.  Most of it is research code, though there's no reason it couldn't be released, and some of it probably will be eventually.  If you'd like to describe your intended use case I'm happy to offer any advice I can based on what I've learned.
<br>
<p>Cheers,
<br>
Nick
<br>
<p>On Apr 22, 2013, at 3:25 PM, Thomas Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to create a pool of threads (using Boost::Thread) within each OpenMPI process to accelerate my application on multicore CPUs. My application is already built on OpenMPI, but it currently exploits parallelism only at the process level. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering if anyone can point me to some good tutorials/documents/examples on how to integrate Boost multithreading with OpenMPI applications?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jacky
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21769.php">Reuti: "Re: [OMPI users] Copying installed runtimes to another machine and using it"</a>
<li><strong>In reply to:</strong> <a href="21763.php">Thomas Watson: "[OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Reply:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
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
