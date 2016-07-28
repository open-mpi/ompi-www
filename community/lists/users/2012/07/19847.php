<?
$subject_val = "Re: [OMPI users] restricting a job to a set of hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 21:54:20 2012" -->
<!-- isoreceived="20120727015420" -->
<!-- sent="Thu, 26 Jul 2012 20:54:15 -0500" -->
<!-- isosent="20120727015415" -->
<!-- name="Erik Nelson" -->
<!-- email="nelsonerikd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] restricting a job to a set of hosts" -->
<!-- id="CAM=OgigDgB=CR4qVyFeVD5uvkNGjAL+xshvznXX1LB7BdtV2vw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="435B38AE-E5DA-4C2F-9C92-DCDC41754E6F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] restricting a job to a set of hosts<br>
<strong>From:</strong> Erik Nelson (<em>nelsonerikd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 21:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19848.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19849.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see. Thank you both for the prompt replies.
<br>
<p>On Thu, Jul 26, 2012 at 8:21 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Application processes will *only* be placed on nodes included in the
</span><br>
<span class="quotelev1">&gt; allocation. The -nolocal flag is intended to ensure that no application
</span><br>
<span class="quotelev1">&gt; processes are started on the same node as mpirun in the case where that
</span><br>
<span class="quotelev1">&gt; node is included in the allocation. This happens, for example, with Torque,
</span><br>
<span class="quotelev1">&gt; where mpirun is executed on one of the allocated nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe SGE doesn't do that - and so the allocation won't include the
</span><br>
<span class="quotelev1">&gt; submit host, in which case you don't need -nolocal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2012, at 5:58 PM, Erik Nelson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was under the impression that the -nolocal option keeps processes off
</span><br>
<span class="quotelev1">&gt; the submit
</span><br>
<span class="quotelev1">&gt; host (since there may be hundreds or thousands of jobs submitted at any
</span><br>
<span class="quotelev1">&gt; time,
</span><br>
<span class="quotelev1">&gt; and we don't want this host to be overloaded).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding of what you said in you last email is that, by listing
</span><br>
<span class="quotelev1">&gt; the hosts,  I
</span><br>
<span class="quotelev1">&gt; automatically send all processes (parent and child, or master and slave if
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; prefer) to the specified list of hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reading your email below, it looks like this was the correct understanding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 26, 2012 at 5:20 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 26.07.2012 um 23:58 schrieb Erik Nelson:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Reuti,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you. Our queue is backed up, so it will take a little while
</span><br>
<span class="quotelev2">&gt;&gt; before I can try this.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I assume that by specifying the nodes this way, I don't need (and it
</span><br>
<span class="quotelev2">&gt;&gt; would confuse
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the system) to add -nolocal. In other words, qsub will try to put the
</span><br>
<span class="quotelev2">&gt;&gt; parent node
</span><br>
<span class="quotelev3">&gt;&gt; &gt; somewhere in this set.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is this the idea?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depends what you refer to by &quot;parent node&quot;. I assume you mean the submit
</span><br>
<span class="quotelev2">&gt;&gt; host. This is never included in any created selection of SGE unless it's an
</span><br>
<span class="quotelev2">&gt;&gt; execution host too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The master host of the parallel job (i.e. the one where the jobscript
</span><br>
<span class="quotelev2">&gt;&gt; with the `mpiexec` is running) will be used as a normal machine from MPI's
</span><br>
<span class="quotelev2">&gt;&gt; point of view.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Erik
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Thu, Jul 26, 2012 at 4:48 PM, Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Am 26.07.2012 um 23:33 schrieb Erik Nelson:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I have a purely parallel job that runs ~100 processes. Each process
</span><br>
<span class="quotelev2">&gt;&gt; has ~identical
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; overhead so the speed of the program is dominated by the slowest
</span><br>
<span class="quotelev2">&gt;&gt; processor.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; For this reason, I would like to restrict the job to a specific set
</span><br>
<span class="quotelev2">&gt;&gt; of identical (fast)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; processors on our cluster.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I read the FAQ on -hosts and -hostfile, but it is still unclear to me
</span><br>
<span class="quotelev2">&gt;&gt; what affect these
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; directives will have in a queuing environment.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Currently, I submit the job using the &quot;qsub&quot; command in the &quot;sge&quot;
</span><br>
<span class="quotelev2">&gt;&gt; environment as :
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;             qsub -pe mpich 101 jobfile.job
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; where jobfile contains the command
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;             mpirun -np 101 -nolocal ./executable
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I would leave -nolocal out here.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ qsub -l
</span><br>
<span class="quotelev2">&gt;&gt; &quot;h=compute-5-[1-9]|compute-5-1[0-9]|compute-5-2[0-9]|compute-5-3[0-2]&quot; -pe
</span><br>
<span class="quotelev2">&gt;&gt; mpich 101 jobfile.job
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I would like to restrict the job to nodes compute-5-1 to compute-5-32
</span><br>
<span class="quotelev2">&gt;&gt; on our machine,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; each containing 8 cpu's (slots). How do I go about this?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks, Erik
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Erik Nelson
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; f : 214 645 5948
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Erik Nelson
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev3">&gt;&gt; &gt; f : 214 645 5948
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; Erik Nelson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev1">&gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev1">&gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; p : 214 645 5981
</span><br>
<span class="quotelev1">&gt; f : 214 645 5948
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
Erik Nelson
Howard Hughes Medical Institute
6001 Forest Park Blvd., Room ND10.124
Dallas, Texas 75235-9050
p : 214 645 5981
f : 214 645 5948
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19848.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19849.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
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
