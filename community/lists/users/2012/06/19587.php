<?
$subject_val = "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 07:13:18 2012" -->
<!-- isoreceived="20120615111318" -->
<!-- sent="Fri, 15 Jun 2012 07:13:12 -0400" -->
<!-- isosent="20120615111312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI" -->
<!-- id="28A9880D-14D4-4DAF-9F45-A1B8A55D4F44_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8546005.41292.1339597943409.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 07:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19588.php">Jeff Squyres: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19586.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>In reply to:</strong> <a href="19531.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19603.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic	optimized	parallel	I/O with Open MPI"</a>
<li><strong>Reply:</strong> <a href="19603.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic	optimized	parallel	I/O with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's nothing that says that your daemons have to be MPI processes.  They could be proper system-level daemons that live &quot;forever&quot;, for example.  You might not be able to speak to them via MPI easily (e.g., you may need to use TCP sockets or some other network transport), but this is fairly common client/server stuff.
<br>
<p>Or you could use MPI_COMM_CONNECT / MPI_COMM_ACCEPT to connect to them, if they're long-lived MPI jobs.  That gets a bit more complicated; I'm not sure how well we've tested having a &quot;server&quot;-like MPI process around with repeated connects/disconnects for long periods of time.  The failure model may also not be attractive (i.e., if your MPI job MPI connects to the server, but then segv's -- it might likely take down the server, too).
<br>
<p>That being said, any additional monitoring or querying of what to do will add overhead.  Hence, your techniques might be useful for large IO operations, for example.  Or every Nth small operation.  It's just a question of balancing the overhead of the query/reply with the expected duration of the IO operation(s) that you intend to perform.  I suspect that you can probably model this overhead and then refine it with some empirical data.  I suspect that you can supplement such a query scheme with some level of caching on the rationale that if an app does IO pattern X once, it might need to do it multiple times.  So if you query for it once, you can just keep that result around for a little while in case the same pattern comes up again -- you won't necessarily need to query for it again.
<br>
<p>The tricky part is that everyone's HPC setup is different -- the exact/empirical overhead of the query/reply will likely be highly tied to a user's particular hardware, software stack, network setup, back-end filesystem, etc.
<br>
<p>One more thing -- to expand on what Ralph said, there's two kinds of typical MPI IO optimizations that are possible:
<br>
<p>1. one-time optimizations during startup: this is usually effected via OMPI's MCA parameters, and is only performed when OMPI's MPI IO subsystem is initialized.  This is typically the first time an app calls MPI_FILE_OPEN.
<br>
<p>2. MPI_Info hints that are passed in to each MPI IO operation.  These obviously are much more flexible and timely (since they can be passed in to each operation, and/or to MPI_FILE_OPEN).  
<br>
<p>More below.
<br>
<p><p>On Jun 13, 2012, at 10:32 AM, Xuan Wang wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you are right, the monitor hurts the performance, if the monitor has to sent the monitoring results to the data warehouse during the execution of the I/O operation. But actually, we don't need this parallel execution for the monitor. The monitor only need to gather the information such as the duration of read/write, the bandwidth, the number of used processes, the algorithm ID and some other small information. This information can be stored as txt file and sent to the data warehouse when the file system is free, which means the monitor sends information to the data warehouse &quot;OFFLINE&quot;.
</span><br>
<p>You might find that IO -- particularly parallel IO -- is a *highly* complex issue with many different variables involved.  Specifically: it may be better to save as much meta data as possible, not just number of bytes and number of processes (for example).  Position in the file may also be relevant (e.g., you may be able to infer the file systems caching algorithms from information like this, which will have a significant effect on overall performance).  And so on.
<br>
<p><span class="quotelev1">&gt; I will try to find out the impact of comm_spawn to the whole performance. Besides starting another MPI process to monitoring the performance, is there any possibility to integrating a monitoring function within the MPI process or even within the MPI I/O operation? That means we start one MPI process, there are multiple threads for I/O operations, in which one thread is in charge of monitoring. Will that hurt a lot of performance? If necessary, the Open MPI source code has to be overwritten for this purpose.
</span><br>
<p>Sure, you can do this.  If you spawn off multiple threads, if they block most of the time (and I really mean *most* of the time), that's no big deal.  Or you could interpose your IO module with some other back-end module (like ROMIO or OMPIO), and thereby intercept all MPI IO calls to see the parameters going by, possibly even having visibility on when those operations complete (but this might get a little tricky for request-based non-blocking IO -- you'd have to interpose your own request to know when the real request has completed... hmm... that could get tricky...  I'm not even sure it could be done in the current code base; I'd have to think about it...).
<br>
<p><span class="quotelev1">&gt; The database is actually independent to the I/O operation. The only disadvantage I can see, is that the MPI process has to wait for accessing the database. Especially the table in very large.
</span><br>
<p>If your query thread to the database is off in a thread, the IO operation could always wait for a short period of time for the answer, and if it doesn't get it, give up and let the database query proceed in the background (e.g., might as well let it complete and cache the result in case you do the same IO operation in the future) while you let the IO operation proceed in the foreground (so to speak).
<br>
<p><span class="quotelev1">&gt; The goal of this concept is to automatically adjust the I/O operation parameters according to the historical I/O operation results, so that each I/O operation will execute at least not worse than last similar I/O operations. Therefore the system includes a learning phase - the better combination of the parameters and algorithm replaces the older and worse one.
</span><br>
<p>Sure.  That's a good goal.
<br>
<p>But keep in mind that past performance is not always a good indicator of future performance.  For example, the filesystem may perform very differently for the same operation at times X, Y, and Z.  What if the filesystem was empty at time X, but 99.99999% full at time Y?  What if the network fileserver was busy with other requests at time Z?  All of these things can dramatically impact the delivered performance, and not all of these factors are easily directly observable by you.
<br>
<p>My *guess* is that past behavior of large, coarse-grained operations might well be suitable for future performance predictions (e.g., if you're going to a 20MB shared write, use hints A, B, and C).  But small, fine-grained application hints may be too transient and sensitive to external factors to be reliably based on past performance.  (that's a *guess* -- feel free to prove me wrong! :-) )
<br>
<p>My real point is -- and I know that I'm repeating myself :-) -- storage/IO is very, very complex.  There are multiple opaque levels of hardware and software involved. Here's a few:
<br>
<p>- the MPI layer
<br>
- the OS filesystem
<br>
- the network (if it's a network filesystem, or is otherwise talking to one or more remote servers, such as with parallel filesystems)
<br>
- the storage controller (some of which have multiple levels of caching and/or aggregation)
<br>
- the back-end disks themselves
<br>
<p>...and there could even be more.  Some storage controllers, for example, offer front-end SSD caches to back-end HDD's these days.  Yow.  I don't even know how to begin to profile the performance of such systems under complicated load patterns.
<br>
<p>Hope this helps!
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
<li><strong>Next message:</strong> <a href="19588.php">Jeff Squyres: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19586.php">Jeff Squyres: "Re: [OMPI users] Multiple Communicators for communication"</a>
<li><strong>In reply to:</strong> <a href="19531.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19603.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic	optimized	parallel	I/O with Open MPI"</a>
<li><strong>Reply:</strong> <a href="19603.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic	optimized	parallel	I/O with Open MPI"</a>
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
