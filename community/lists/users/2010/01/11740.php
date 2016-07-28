<?
$subject_val = "Re: [OMPI users] OpenMPI problem on Fedora Core 12";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 08:12:16 2010" -->
<!-- isoreceived="20100112131216" -->
<!-- sent="Tue, 12 Jan 2010 08:12:11 -0500" -->
<!-- isosent="20100112131211" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI problem on Fedora Core 12" -->
<!-- id="CAA542C1-4597-44D3-A31D-38BBDB0CEFA7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="36c2b31c0912311015g22ac442u321f412238c6f684_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI problem on Fedora Core 12<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-12 08:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11741.php">Pawan Acharya: "[OMPI users] Compilig CG.W.8 benchmark"</a>
<li><strong>Previous message:</strong> <a href="11739.php">Jeff Squyres: "Re: [OMPI users] MPI problem after update"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Reply:</strong> <a href="11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would be very strange for nanosleep to cause a problem for Open MPI -- it shouldn't interfere with any of Open MPI's mechanisms.  Double check that your my_barrier() function is actually working properly -- removing the nanosleep() shouldn't affect the correctness of your barrier.  
<br>
<p>If you've implemented your own barrier function, here's a few points:
<br>
<p>1. If you want to re-implement the back-end to MPI_Barrier itself, it would likely be possible to wrap up your routine in an Open MPI plugin (remember that the back-end of MPI_Barrier -- and others -- are driven by plugins; hence, you can actually replace the algorithms and whatnot that are used by MPI_Barrier without altering Open MPI's source code).  Let me know if you're interested in that.
<br>
<p>2. MPI_Wait, as you surmised, is pretty much the same -- it aggressively polls, waiting for progress.  You *could* replace its behavior with a plugin, similar to MPI_Barrier, but it's a little harder (I can describe why, if you care).  
<br>
<p>3. Your best bet might actually be to write a small profiling library that intercepts calls to MPI_Barrier and/or MPI_Wait and replaces them with not-aggressive versions.  E.g., your version of MPI_Wait can call MPI_Test, and if the request is not finished, call sleep() (or whatever).  Rinse, repeat.  
<br>
<p>4. The mpi_yield_when_idle MCA parameter will simply call sched_yield() in OMPI's inner loops.  It'll still aggressively, but it'll call yield in the very core of those loops, thereby allowing other processes to pre-empt the MPI processes.  So it'll likely help your situation by allowing other processes to run, but the CPU's will still be pegged out at 100%.
<br>
<p><p>On Dec 31, 2009, at 1:15 PM, Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt; First of all, the reason that I have created a CPU-friendly version of MPI_Barrier is that my program is asymmetric (so some of the nodes can easily have to wait for several hours) and that it is I/O bound. My program uses MPI mainly to synchronize I/O and to share some counters between the nodes, followed by a gather/scatter of the files. MPI_Barrier (or any of the other MPI calls) caused the four CPU's of my Quad Core to continuously run at 100% because of the aggressive polling, making the server almost unusable and also slowing my program down because there was less CPU time available for I/O and file synchronization. With this version of MPI_Barrier CPU usage averages out at about 25%. I only recently learned about the OMPI_MCA_mpi_yield_when_idle variable, I still have to test if that is an alternative to my workaround.
</span><br>
<span class="quotelev1">&gt; Meanwhile I seem to have found the cause of problem thanks to Ashley's excellent padb tool. Following Eugene's recommendation, I have added the MPI_Wait call: the same problem. Next I created a separate program that just calls my_barrier repeatedly with randomized 1-2 seconds intervals. Again the same problem (with 4 nodes), sometimes after a couple of iterations, sometimes after 500, 1000 or 2000 iterations. Next I followed Ashley's suggestion to use padb. I ran padb --all --mpi-queue and padb --all --message-queue while the program was running fine and after the problem occured. When the problem occurred padb said:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Warning, remote process state differs across ranks
</span><br>
<span class="quotelev1">&gt; state : ranks
</span><br>
<span class="quotelev1">&gt;     R : [2-3]
</span><br>
<span class="quotelev1">&gt;     S : [0-1]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ padb --all --stack-trace --tree
</span><br>
<span class="quotelev1">&gt; Warning, remote process state differs across ranks
</span><br>
<span class="quotelev1">&gt; state : ranks
</span><br>
<span class="quotelev1">&gt;     R : [2-3]
</span><br>
<span class="quotelev1">&gt;     S : [0-1]
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; [0-1] (2 processes)
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; main() at ?:?
</span><br>
<span class="quotelev1">&gt;   barrier_util() at ?:?
</span><br>
<span class="quotelev1">&gt;     my_sleep() at ?:?
</span><br>
<span class="quotelev1">&gt;       __nanosleep_nocancel() at ?:?
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; [2-3] (2 processes)
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; ??() at ?:?
</span><br>
<span class="quotelev1">&gt;   ??() at ?:?
</span><br>
<span class="quotelev1">&gt;     ??() at ?:?
</span><br>
<span class="quotelev1">&gt;       ??() at ?:?
</span><br>
<span class="quotelev1">&gt;         ??() at ?:?
</span><br>
<span class="quotelev1">&gt;           ompi_mpi_signed_char() at ?:?
</span><br>
<span class="quotelev1">&gt;             ompi_request_default_wait_all() at ?:?
</span><br>
<span class="quotelev1">&gt;               opal_progress() at ?:?
</span><br>
<span class="quotelev1">&gt;                 -----------------
</span><br>
<span class="quotelev1">&gt;                 2 (1 processes)
</span><br>
<span class="quotelev1">&gt;                 -----------------
</span><br>
<span class="quotelev1">&gt;                 mca_pml_ob1_progress() at ?:?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; suggests that rather than OpenMPI being the problem, nanosleep is the culprit because the call to it seems to hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for all the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 14, 2009 at 8:22 PM, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Sun, 2009-12-13 at 19:04 +0100, Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The following routine gives a problem after some (not reproducible)
</span><br>
<span class="quotelev2">&gt; &gt; time on Fedora Core 12. The routine is a CPU usage friendly version of
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are some proposals for Non-blocking collectives before the MPI
</span><br>
<span class="quotelev1">&gt; forum currently and I believe a working implementation which can be used
</span><br>
<span class="quotelev1">&gt; as a plug-in for OpenMPI, I would urge you to look at these rather than
</span><br>
<span class="quotelev1">&gt; try and implement your own.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My question is: is there a problem with this routine that I overlooked
</span><br>
<span class="quotelev2">&gt; &gt; that somehow did not show up until now
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your code both does all-to-all communication and also uses probe, both
</span><br>
<span class="quotelev1">&gt; of these can easily be avoided when implementing Barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to see which messages have been sent/received/are
</span><br>
<span class="quotelev2">&gt; &gt; pending?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, there is a message queue interface allowing tools to peek inside
</span><br>
<span class="quotelev1">&gt; the MPI library and see these queues.  That I know of there are three
</span><br>
<span class="quotelev1">&gt; tools which use this, either TotalView, DDT or my own tool, padb.
</span><br>
<span class="quotelev1">&gt; TotalView and DDT are both full-featured graphical debuggers and
</span><br>
<span class="quotelev1">&gt; commercial products, padb is a open-source text based tool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11741.php">Pawan Acharya: "[OMPI users] Compilig CG.W.8 benchmark"</a>
<li><strong>Previous message:</strong> <a href="11739.php">Jeff Squyres: "Re: [OMPI users] MPI problem after update"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Reply:</strong> <a href="11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
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
