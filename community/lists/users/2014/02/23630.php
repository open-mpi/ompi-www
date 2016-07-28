<?
$subject_val = "Re: [OMPI users] OpenMPI + Hadoop";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 24 10:55:09 2014" -->
<!-- isoreceived="20140224155509" -->
<!-- sent="Mon, 24 Feb 2014 10:55:08 -0500" -->
<!-- isosent="20140224155508" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI + Hadoop" -->
<!-- id="CA+ssbKVw3zZzR7H0EdRgaFA4G2H8rTA4DfW-FMq6S3a7wqK0mQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7A94551B-1E1A-47E8-9A93-6879853C4DF1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI + Hadoop<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-24 10:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23631.php">ocnoptcs_at_[hidden]: "[OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="23629.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23629.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Reply:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is very interesting. I've been working on getting one of our
<br>
clustering programs (
<br>
<a href="http://grids.ucs.indiana.edu/ptliupages/publications/DAVS_IEEE.pdf">http://grids.ucs.indiana.edu/ptliupages/publications/DAVS_IEEE.pdf</a>) to work
<br>
with OpenMPI Java binding and we obtained very good speedup and scalability
<br>
when run on HPC clusters with Infiniband. We are working on a report with
<br>
performance results and will make it available here soon.
<br>
<p>This is again interesting as we have a series of MapReduce applications
<br>
that we have developed in analyzing gene sequences (
<br>
<a href="http://grids.ucs.indiana.edu/ptliupages/publications/DACIDR_camera_ready_v0.3.pdf">http://grids.ucs.indiana.edu/ptliupages/publications/DACIDR_camera_ready_v0.3.pdf</a>),
<br>
which could benefit from having MPI support. Also, as you have mentioned,
<br>
we run all these MapReduce jobs on HPC clusters.
<br>
<p>I am very eager to try 4.) and wonder if you could kindly provide some
<br>
pointers on how to get it working.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p><p>On Mon, Feb 24, 2014 at 10:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 23, 2014, at 10:42 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is to get some info on the subject and not directly a question on
</span><br>
<span class="quotelev1">&gt; OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've Jeff's blog post on integrating OpenMPI with Hadoop (
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/resurrecting-mpi-and-java/">http://blogs.cisco.com/performance/resurrecting-mpi-and-java/</a>) and wanted
</span><br>
<span class="quotelev1">&gt; to check if this is related with the Jira at
</span><br>
<span class="quotelev1">&gt; <a href="https://issues.apache.org/jira/browse/MAPREDUCE-2911">https://issues.apache.org/jira/browse/MAPREDUCE-2911</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somewhat. A little history might help. I was asked a couple of years ago
</span><br>
<span class="quotelev1">&gt; to work on integrating MPI support with Hadoop. At that time, the thought
</span><br>
<span class="quotelev1">&gt; of those asking for my help was that we would enable YARN to support MPI,
</span><br>
<span class="quotelev1">&gt; which was captured in 2911. However, after working on it for a few months,
</span><br>
<span class="quotelev1">&gt; it became apparent to me that this was a mistake. YARN's architecture makes
</span><br>
<span class="quotelev1">&gt; support of MPI very difficult (but achievable - I did it with OMPI, and
</span><br>
<span class="quotelev1">&gt; someone else has now done it with MPICH), and the result exhibits horrible
</span><br>
<span class="quotelev1">&gt; scaling and relatively poor performance by HPC standards. So if you want to
</span><br>
<span class="quotelev1">&gt; run a very small MPI job under YARN, you can do it with a custom
</span><br>
<span class="quotelev1">&gt; application manager and JNI wrappers around every MPI call - just don't
</span><br>
<span class="quotelev1">&gt; expect great performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I did instead was to pivot direction and focus on porting Hadoop to
</span><br>
<span class="quotelev1">&gt; the HPC environment. Thought here was that, if we could get the Hadoop
</span><br>
<span class="quotelev1">&gt; classes working with a regular HPC environment, then all the HPC world's
</span><br>
<span class="quotelev1">&gt; tools and programming models become available. This is what we have done,
</span><br>
<span class="quotelev1">&gt; and it comes in four parts:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Java MPI bindings that are very close to C-level performance. These are
</span><br>
<span class="quotelev1">&gt; being released in the 1.7 series of OMPI and are unique to OMPI at this
</span><br>
<span class="quotelev1">&gt; time. Jose Roman and Oscar Vega continue to close the performance gap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Integration to HPC resource managers such as Slurm and Moab. Intel has
</span><br>
<span class="quotelev1">&gt; taken the lead there and announced that support at SC13 - in beta test now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Integration to HPC file systems such as Lustre. Intel again took the
</span><br>
<span class="quotelev1">&gt; lead here and has a Lustre adaptor in beta test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Equivalent of an application manager to stage map-reduce executions. I
</span><br>
<span class="quotelev1">&gt; updated OMPI's &quot;mpirun&quot; to handle that - available in the current 1.7
</span><br>
<span class="quotelev1">&gt; release series. It fully understands &quot;staged&quot; execution and also notifies
</span><br>
<span class="quotelev1">&gt; the associated processes when MPI is feasible (i.e., all the procs in
</span><br>
<span class="quotelev1">&gt; comm_world are running).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We continue to improve the Hadoop support - Cisco and I are collaborating
</span><br>
<span class="quotelev1">&gt; on a new &quot;dynamic MPI&quot; capability that will allow the procs to interact
</span><br>
<span class="quotelev1">&gt; without imposing the barrier at MPI_Init, for example. So I expect that
</span><br>
<span class="quotelev1">&gt; this summer will demonstrate a pretty robust capability in that area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After all, there is no reason you shouldn't be able to run Hadoop on an
</span><br>
<span class="quotelev1">&gt; HPC cluster :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, is there a place I can get more info on this effort?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23631.php">ocnoptcs_at_[hidden]: "[OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="23629.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23629.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Reply:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
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
