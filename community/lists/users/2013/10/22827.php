<?
$subject_val = "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 14:10:52 2013" -->
<!-- isoreceived="20131023181052" -->
<!-- sent="Wed, 23 Oct 2013 14:10:32 -0400" -->
<!-- isosent="20131023181032" -->
<!-- name="Jai Dayal" -->
<!-- email="dayalsoap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED" -->
<!-- id="CAMJ-YiSvw5hWTF5LKhZFniMpE3okXSj8_TOYSTPo4_jv7Bx_2g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGKz=uJpYy0L9eKp6sFeVzMHHt7t-S83x0ZEaLJ-FMLz8CV9Qg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED<br>
<strong>From:</strong> Jai Dayal (<em>dayalsoap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 14:10:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22828.php">Paul Kapinos: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22826.php">Paul Kapinos: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The version of Open MPI I'm using is
<br>
mpiexec (OpenRTE) 1.6.5
<br>
<p>It's what's offered on this smaller batch scheduling cluster at Oak Ridge
<br>
(Sith to be exact).
<br>
<p>Running the ompi_info command, I get
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no (checkpoint thread: no)
<br>
<p>and in my MPI_Init_thread call, the provided flag is returned as
<br>
MPI_THREAD_SINGLE.
<br>
<p>I was mainly concerned because we have a threaded middleware underneath to
<br>
communicate across MPI worlds that also uses the IB infrastructure and
<br>
verbs library, so I just wanted to get some clarity as to what exactly
<br>
MPI_THREAD_SINGLE meant.
<br>
<p>Brian's answer seems to make perfect sense.
<br>
<p>Thanks!
<br>
<p><p>On Wed, Oct 23, 2013 at 1:47 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Oct 23, 2013 at 12:02 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On 10/22/13 10:23 AM, &quot;Jai Dayal&quot; &lt;dayalsoap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm asking because I'm using an open_mpi build ontop of infiniband, and
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; maximum thread mode is MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That doesn't seem right; which version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last time I looked at this, OpenMPI only supported
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE by default and if you ask for any higher thread
</span><br>
<span class="quotelev1">&gt; level, you get MPI_THREAD_MULTIPLE, which requires a configure-time
</span><br>
<span class="quotelev1">&gt; switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe something has changed dramatically more recently than I tested.
</span><br>
<span class="quotelev1">&gt; Squyres told me some thread-oriented refactoring was going on.  All of
</span><br>
<span class="quotelev1">&gt; this was over a year ago so it is entirely reasonable for me to be
</span><br>
<span class="quotelev1">&gt; wrong about all of this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22827/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22828.php">Paul Kapinos: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22826.php">Paul Kapinos: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
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
