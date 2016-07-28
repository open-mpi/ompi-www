<?
$subject_val = "Re: [OMPI users] OpenMPI + Hadoop";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 24 13:22:08 2014" -->
<!-- isoreceived="20140224182208" -->
<!-- sent="Mon, 24 Feb 2014 13:22:07 -0500" -->
<!-- isosent="20140224182207" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI + Hadoop" -->
<!-- id="CA+ssbKW+kja=iqZDZHo7D2-ZZQ17TLZvYVsbo_mjqFu8Pkfiqg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7CBB90AB-3614-4AD7-99EA-163BE95B969B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-24 13:22:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23929.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23929.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph. I'll get back to you if I run into issues.
<br>
<p><p>On Mon, Feb 24, 2014 at 12:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2014, at 7:55 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is very interesting. I've been working on getting one of our
</span><br>
<span class="quotelev1">&gt; clustering programs (
</span><br>
<span class="quotelev1">&gt; <a href="http://grids.ucs.indiana.edu/ptliupages/publications/DAVS_IEEE.pdf">http://grids.ucs.indiana.edu/ptliupages/publications/DAVS_IEEE.pdf</a>) to
</span><br>
<span class="quotelev1">&gt; work with OpenMPI Java binding and we obtained very good speedup and
</span><br>
<span class="quotelev1">&gt; scalability when run on HPC clusters with Infiniband. We are working on a
</span><br>
<span class="quotelev1">&gt; report with performance results and will make it available here soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Great! Will look forward to seeing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is again interesting as we have a series of MapReduce applications
</span><br>
<span class="quotelev1">&gt; that we have developed in analyzing gene sequences (
</span><br>
<span class="quotelev1">&gt; <a href="http://grids.ucs.indiana.edu/ptliupages/publications/DACIDR_camera_ready_v0.3.pdf">http://grids.ucs.indiana.edu/ptliupages/publications/DACIDR_camera_ready_v0.3.pdf</a>),
</span><br>
<span class="quotelev1">&gt; which could benefit from having MPI support. Also, as you have mentioned,
</span><br>
<span class="quotelev1">&gt; we run all these MapReduce jobs on HPC clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The folks at TACC are doing the Intel beta on a mouse genome, and will
</span><br>
<span class="quotelev1">&gt; also be publishing their results comparing Hadoop performance under
</span><br>
<span class="quotelev1">&gt; YARN/HDFS vs Slurm/Lustre.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am very eager to try 4.) and wonder if you could kindly provide some
</span><br>
<span class="quotelev1">&gt; pointers on how to get it working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current release contains the initial &quot;staged&quot; execution support, but
</span><br>
<span class="quotelev1">&gt; not the dynamic extension I described. To use staged execution, all you
</span><br>
<span class="quotelev1">&gt; have to do is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) express your mapper and reducer stages as separate app_contexts on the
</span><br>
<span class="quotelev1">&gt; command line; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) add --staged to the cmd line to request staged execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it looks something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --staged -n 10 ./mapper; -n 4 ./reducer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on the allocation, mpirun will stage execution of the mappers
</span><br>
<span class="quotelev1">&gt; and reducers, connecting the stdout of the first to the stdin of the
</span><br>
<span class="quotelev1">&gt; second. There is also support for localized file systems (see the
</span><br>
<span class="quotelev1">&gt; orte/mca/dfs framework) that allows you to transparently access/move data
</span><br>
<span class="quotelev1">&gt; across the network, and of course mpirun supports pre-positioning of files
</span><br>
<span class="quotelev1">&gt; via the --preload-files option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH - feel free to ask questions and we'll be happy to help. Also, if you
</span><br>
<span class="quotelev1">&gt; want to collaborate on the dynamic extension, we'd welcome the assist. Both
</span><br>
<span class="quotelev1">&gt; Jeff and I have been somewhat swamped with other priorities and so progress
</span><br>
<span class="quotelev1">&gt; on that last step is lagging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 24, 2014 at 10:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 23, 2014, at 10:42 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is to get some info on the subject and not directly a question on
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've Jeff's blog post on integrating OpenMPI with Hadoop (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://blogs.cisco.com/performance/resurrecting-mpi-and-java/">http://blogs.cisco.com/performance/resurrecting-mpi-and-java/</a>) and
</span><br>
<span class="quotelev2">&gt;&gt; wanted to check if this is related with the Jira at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://issues.apache.org/jira/browse/MAPREDUCE-2911">https://issues.apache.org/jira/browse/MAPREDUCE-2911</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Somewhat. A little history might help. I was asked a couple of years ago
</span><br>
<span class="quotelev2">&gt;&gt; to work on integrating MPI support with Hadoop. At that time, the thought
</span><br>
<span class="quotelev2">&gt;&gt; of those asking for my help was that we would enable YARN to support MPI,
</span><br>
<span class="quotelev2">&gt;&gt; which was captured in 2911. However, after working on it for a few months,
</span><br>
<span class="quotelev2">&gt;&gt; it became apparent to me that this was a mistake. YARN's architecture makes
</span><br>
<span class="quotelev2">&gt;&gt; support of MPI very difficult (but achievable - I did it with OMPI, and
</span><br>
<span class="quotelev2">&gt;&gt; someone else has now done it with MPICH), and the result exhibits horrible
</span><br>
<span class="quotelev2">&gt;&gt; scaling and relatively poor performance by HPC standards. So if you want to
</span><br>
<span class="quotelev2">&gt;&gt; run a very small MPI job under YARN, you can do it with a custom
</span><br>
<span class="quotelev2">&gt;&gt; application manager and JNI wrappers around every MPI call - just don't
</span><br>
<span class="quotelev2">&gt;&gt; expect great performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I did instead was to pivot direction and focus on porting Hadoop to
</span><br>
<span class="quotelev2">&gt;&gt; the HPC environment. Thought here was that, if we could get the Hadoop
</span><br>
<span class="quotelev2">&gt;&gt; classes working with a regular HPC environment, then all the HPC world's
</span><br>
<span class="quotelev2">&gt;&gt; tools and programming models become available. This is what we have done,
</span><br>
<span class="quotelev2">&gt;&gt; and it comes in four parts:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Java MPI bindings that are very close to C-level performance. These
</span><br>
<span class="quotelev2">&gt;&gt; are being released in the 1.7 series of OMPI and are unique to OMPI at this
</span><br>
<span class="quotelev2">&gt;&gt; time. Jose Roman and Oscar Vega continue to close the performance gap.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Integration to HPC resource managers such as Slurm and Moab. Intel has
</span><br>
<span class="quotelev2">&gt;&gt; taken the lead there and announced that support at SC13 - in beta test now
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Integration to HPC file systems such as Lustre. Intel again took the
</span><br>
<span class="quotelev2">&gt;&gt; lead here and has a Lustre adaptor in beta test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Equivalent of an application manager to stage map-reduce executions. I
</span><br>
<span class="quotelev2">&gt;&gt; updated OMPI's &quot;mpirun&quot; to handle that - available in the current 1.7
</span><br>
<span class="quotelev2">&gt;&gt; release series. It fully understands &quot;staged&quot; execution and also notifies
</span><br>
<span class="quotelev2">&gt;&gt; the associated processes when MPI is feasible (i.e., all the procs in
</span><br>
<span class="quotelev2">&gt;&gt; comm_world are running).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We continue to improve the Hadoop support - Cisco and I are collaborating
</span><br>
<span class="quotelev2">&gt;&gt; on a new &quot;dynamic MPI&quot; capability that will allow the procs to interact
</span><br>
<span class="quotelev2">&gt;&gt; without imposing the barrier at MPI_Init, for example. So I expect that
</span><br>
<span class="quotelev2">&gt;&gt; this summer will demonstrate a pretty robust capability in that area.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After all, there is no reason you shouldn't be able to run Hadoop on an
</span><br>
<span class="quotelev2">&gt;&gt; HPC cluster :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, is there a place I can get more info on this effort?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23929.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23929.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
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
