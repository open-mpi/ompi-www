<?
$subject_val = "Re: [OMPI users] OpenMPI + Hadoop";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 16:11:03 2014" -->
<!-- isoreceived="20140321201103" -->
<!-- sent="Fri, 21 Mar 2014 16:11:02 -0400" -->
<!-- isosent="20140321201102" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI + Hadoop" -->
<!-- id="CA+ssbKXOyFYELUF+r9C-7-tb9GGePZ7Kr55nPaxJNb4ahC9Vaw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKW+kja=iqZDZHo7D2-ZZQ17TLZvYVsbo_mjqFu8Pkfiqg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-03-21 16:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>Previous message:</strong> <a href="23928.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23633.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>This is regarding the MapReduce support with OpenMPI for which you gave a
<br>
good amount of info previously. I have several MR applications that I'd
<br>
like to test for performance in an HPC cluster with OpenMPI. I found this
<br>
presentation by you
<br>
<a href="http://www.open-mpi.org/video/mrplus/Greenplum_RalphCastain-1up.pdf">http://www.open-mpi.org/video/mrplus/Greenplum_RalphCastain-1up.pdf</a>, but
<br>
wonder if there's some detailed steps on getting a simple MR program
<br>
running with OpenMPI.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p>On Mon, Feb 24, 2014 at 1:22 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Ralph. I'll get back to you if I run into issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 24, 2014 at 12:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 24, 2014, at 7:55 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is very interesting. I've been working on getting one of our
</span><br>
<span class="quotelev2">&gt;&gt; clustering programs (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://grids.ucs.indiana.edu/ptliupages/publications/DAVS_IEEE.pdf">http://grids.ucs.indiana.edu/ptliupages/publications/DAVS_IEEE.pdf</a>) to
</span><br>
<span class="quotelev2">&gt;&gt; work with OpenMPI Java binding and we obtained very good speedup and
</span><br>
<span class="quotelev2">&gt;&gt; scalability when run on HPC clusters with Infiniband. We are working on a
</span><br>
<span class="quotelev2">&gt;&gt; report with performance results and will make it available here soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Great! Will look forward to seeing it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is again interesting as we have a series of MapReduce applications
</span><br>
<span class="quotelev2">&gt;&gt; that we have developed in analyzing gene sequences (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://grids.ucs.indiana.edu/ptliupages/publications/DACIDR_camera_ready_v0.3.pdf">http://grids.ucs.indiana.edu/ptliupages/publications/DACIDR_camera_ready_v0.3.pdf</a>),
</span><br>
<span class="quotelev2">&gt;&gt; which could benefit from having MPI support. Also, as you have mentioned,
</span><br>
<span class="quotelev2">&gt;&gt; we run all these MapReduce jobs on HPC clusters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The folks at TACC are doing the Intel beta on a mouse genome, and will
</span><br>
<span class="quotelev2">&gt;&gt; also be publishing their results comparing Hadoop performance under
</span><br>
<span class="quotelev2">&gt;&gt; YARN/HDFS vs Slurm/Lustre.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am very eager to try 4.) and wonder if you could kindly provide some
</span><br>
<span class="quotelev2">&gt;&gt; pointers on how to get it working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current release contains the initial &quot;staged&quot; execution support, but
</span><br>
<span class="quotelev2">&gt;&gt; not the dynamic extension I described. To use staged execution, all you
</span><br>
<span class="quotelev2">&gt;&gt; have to do is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (a) express your mapper and reducer stages as separate app_contexts on
</span><br>
<span class="quotelev2">&gt;&gt; the command line; and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (b) add --staged to the cmd line to request staged execution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it looks something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --staged -n 10 ./mapper; -n 4 ./reducer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depending on the allocation, mpirun will stage execution of the mappers
</span><br>
<span class="quotelev2">&gt;&gt; and reducers, connecting the stdout of the first to the stdin of the
</span><br>
<span class="quotelev2">&gt;&gt; second. There is also support for localized file systems (see the
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/dfs framework) that allows you to transparently access/move data
</span><br>
<span class="quotelev2">&gt;&gt; across the network, and of course mpirun supports pre-positioning of files
</span><br>
<span class="quotelev2">&gt;&gt; via the --preload-files option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH - feel free to ask questions and we'll be happy to help. Also, if you
</span><br>
<span class="quotelev2">&gt;&gt; want to collaborate on the dynamic extension, we'd welcome the assist. Both
</span><br>
<span class="quotelev2">&gt;&gt; Jeff and I have been somewhat swamped with other priorities and so progress
</span><br>
<span class="quotelev2">&gt;&gt; on that last step is lagging.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Feb 24, 2014 at 10:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 23, 2014, at 10:42 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is to get some info on the subject and not directly a question on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've Jeff's blog post on integrating OpenMPI with Hadoop (
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://blogs.cisco.com/performance/resurrecting-mpi-and-java/">http://blogs.cisco.com/performance/resurrecting-mpi-and-java/</a>) and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wanted to check if this is related with the Jira at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://issues.apache.org/jira/browse/MAPREDUCE-2911">https://issues.apache.org/jira/browse/MAPREDUCE-2911</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Somewhat. A little history might help. I was asked a couple of years ago
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to work on integrating MPI support with Hadoop. At that time, the thought
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of those asking for my help was that we would enable YARN to support MPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which was captured in 2911. However, after working on it for a few months,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it became apparent to me that this was a mistake. YARN's architecture makes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support of MPI very difficult (but achievable - I did it with OMPI, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; someone else has now done it with MPICH), and the result exhibits horrible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scaling and relatively poor performance by HPC standards. So if you want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run a very small MPI job under YARN, you can do it with a custom
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application manager and JNI wrappers around every MPI call - just don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expect great performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I did instead was to pivot direction and focus on porting Hadoop to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the HPC environment. Thought here was that, if we could get the Hadoop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; classes working with a regular HPC environment, then all the HPC world's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tools and programming models become available. This is what we have done,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it comes in four parts:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Java MPI bindings that are very close to C-level performance. These
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are being released in the 1.7 series of OMPI and are unique to OMPI at this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time. Jose Roman and Oscar Vega continue to close the performance gap.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Integration to HPC resource managers such as Slurm and Moab. Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has taken the lead there and announced that support at SC13 - in beta test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Integration to HPC file systems such as Lustre. Intel again took the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lead here and has a Lustre adaptor in beta test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. Equivalent of an application manager to stage map-reduce executions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I updated OMPI's &quot;mpirun&quot; to handle that - available in the current 1.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release series. It fully understands &quot;staged&quot; execution and also notifies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the associated processes when MPI is feasible (i.e., all the procs in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm_world are running).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We continue to improve the Hadoop support - Cisco and I are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collaborating on a new &quot;dynamic MPI&quot; capability that will allow the procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to interact without imposing the barrier at MPI_Init, for example. So I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expect that this summer will demonstrate a pretty robust capability in that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; area.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After all, there is no reason you shouldn't be able to run Hadoop on an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC cluster :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, is there a place I can get more info on this effort?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23929/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>Previous message:</strong> <a href="23928.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23633.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
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
