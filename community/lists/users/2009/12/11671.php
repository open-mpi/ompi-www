<?
$subject_val = "Re: [OMPI users] OpenMPI problem on Fedora Core 12";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 31 13:15:55 2009" -->
<!-- isoreceived="20091231181555" -->
<!-- sent="Thu, 31 Dec 2009 19:15:49 +0100" -->
<!-- isosent="20091231181549" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI problem on Fedora Core 12" -->
<!-- id="36c2b31c0912311015g22ac442u321f412238c6f684_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1260818563.5420.287.camel_at_alpha" -->
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
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-31 13:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11672.php">Kritiraj Sajadah: "[OMPI users] Fw: Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Previous message:</strong> <a href="11670.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>In reply to:</strong> <a href="11531.php">Ashley Pittman: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First of all, the reason that I have created a CPU-friendly version of
<br>
MPI_Barrier is that my program is asymmetric (so some of the nodes can
<br>
easily have to wait for several hours) and that it is I/O bound. My program
<br>
uses MPI mainly to synchronize I/O and to share some counters between the
<br>
nodes, followed by a gather/scatter of the files. MPI_Barrier (or any of the
<br>
other MPI calls) caused the four CPU's of my Quad Core to continuously run
<br>
at 100% because of the aggressive polling, making the server almost unusable
<br>
and also slowing my program down because there was less CPU time available
<br>
for I/O and file synchronization. With this version of MPI_Barrier CPU usage
<br>
averages out at about 25%. I only recently learned about
<br>
the OMPI_MCA_mpi_yield_when_idle variable, I still have to test if that is
<br>
an alternative to my workaround.
<br>
Meanwhile I seem to have found the cause of problem thanks to Ashley's
<br>
excellent padb tool. Following Eugene's recommendation, I have added the
<br>
MPI_Wait call: the same problem. Next I created a separate program that just
<br>
calls my_barrier repeatedly with randomized 1-2 seconds intervals. Again the
<br>
same problem (with 4 nodes), sometimes after a couple of iterations,
<br>
sometimes after 500, 1000 or 2000 iterations. Next I followed Ashley's
<br>
suggestion to use padb. I ran padb --all --mpi-queue and padb --all
<br>
--message-queue while the program was running fine and after the problem
<br>
occured. When the problem occurred padb said:
<br>
<p>Warning, remote process state differs across ranks
<br>
state : ranks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;R : [2-3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S : [0-1]
<br>
<p>and
<br>
<p>$ padb --all --stack-trace --tree
<br>
Warning, remote process state differs across ranks
<br>
state : ranks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;R : [2-3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;S : [0-1]
<br>
-----------------
<br>
[0-1] (2 processes)
<br>
-----------------
<br>
main() at ?:?
<br>
&nbsp;&nbsp;barrier_util() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my_sleep() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__nanosleep_nocancel() at ?:?
<br>
-----------------
<br>
[2-3] (2 processes)
<br>
-----------------
<br>
??() at ?:?
<br>
&nbsp;&nbsp;??() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;??() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;??() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;??() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_signed_char() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_default_wait_all() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 (1 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_progress() at ?:?
<br>
<p>suggests that rather than OpenMPI being the problem, nanosleep is the
<br>
culprit because the call to it seems to hang.
<br>
<p>Thanks for all the help.
<br>
<p>Gijsbert
<br>
<p>On Mon, Dec 14, 2009 at 8:22 PM, Ashley Pittman &lt;ashley_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, 2009-12-13 at 19:04 +0100, Gijsbert Wiesenekker wrote:
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11672.php">Kritiraj Sajadah: "[OMPI users] Fw: Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Previous message:</strong> <a href="11670.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>In reply to:</strong> <a href="11531.php">Ashley Pittman: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
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
