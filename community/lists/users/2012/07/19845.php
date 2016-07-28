<?
$subject_val = "Re: [OMPI users] restricting a job to a set of hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 20:59:01 2012" -->
<!-- isoreceived="20120727005901" -->
<!-- sent="Thu, 26 Jul 2012 19:58:56 -0500" -->
<!-- isosent="20120727005856" -->
<!-- name="Erik Nelson" -->
<!-- email="nelsonerikd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] restricting a job to a set of hosts" -->
<!-- id="CAM=OgigwErHEQ3tgb0BZpOJV+azMQMwzGEr+FyJcbOvwPE3mfw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D3A8FF42-A873-4AC1-BB01-A98C21A85934_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2012-07-26 20:58:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19844.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>In reply to:</strong> <a href="19836.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was under the impression that the -nolocal option keeps processes off the
<br>
submit
<br>
host (since there may be hundreds or thousands of jobs submitted at any
<br>
time,
<br>
and we don't want this host to be overloaded).
<br>
<p>My understanding of what you said in you last email is that, by listing the
<br>
hosts,  I
<br>
automatically send all processes (parent and child, or master and slave if
<br>
you
<br>
prefer) to the specified list of hosts.
<br>
<p>Reading your email below, it looks like this was the correct understanding.
<br>
<p><p>On Thu, Jul 26, 2012 at 5:20 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 26.07.2012 um 23:58 schrieb Erik Nelson:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Reuti,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you. Our queue is backed up, so it will take a little while before
</span><br>
<span class="quotelev1">&gt; I can try this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I assume that by specifying the nodes this way, I don't need (and it
</span><br>
<span class="quotelev1">&gt; would confuse
</span><br>
<span class="quotelev2">&gt; &gt; the system) to add -nolocal. In other words, qsub will try to put the
</span><br>
<span class="quotelev1">&gt; parent node
</span><br>
<span class="quotelev2">&gt; &gt; somewhere in this set.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this the idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depends what you refer to by &quot;parent node&quot;. I assume you mean the submit
</span><br>
<span class="quotelev1">&gt; host. This is never included in any created selection of SGE unless it's an
</span><br>
<span class="quotelev1">&gt; execution host too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The master host of the parallel job (i.e. the one where the jobscript with
</span><br>
<span class="quotelev1">&gt; the `mpiexec` is running) will be used as a normal machine from MPI's point
</span><br>
<span class="quotelev1">&gt; of view.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Erik
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jul 26, 2012 at 4:48 PM, Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Am 26.07.2012 um 23:33 schrieb Erik Nelson:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have a purely parallel job that runs ~100 processes. Each process
</span><br>
<span class="quotelev1">&gt; has ~identical
</span><br>
<span class="quotelev3">&gt; &gt; &gt; overhead so the speed of the program is dominated by the slowest
</span><br>
<span class="quotelev1">&gt; processor.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For this reason, I would like to restrict the job to a specific set of
</span><br>
<span class="quotelev1">&gt; identical (fast)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; processors on our cluster.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I read the FAQ on -hosts and -hostfile, but it is still unclear to me
</span><br>
<span class="quotelev1">&gt; what affect these
</span><br>
<span class="quotelev3">&gt; &gt; &gt; directives will have in a queuing environment.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Currently, I submit the job using the &quot;qsub&quot; command in the &quot;sge&quot;
</span><br>
<span class="quotelev1">&gt; environment as :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             qsub -pe mpich 101 jobfile.job
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; where jobfile contains the command
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             mpirun -np 101 -nolocal ./executable
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would leave -nolocal out here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ qsub -l
</span><br>
<span class="quotelev1">&gt; &quot;h=compute-5-[1-9]|compute-5-1[0-9]|compute-5-2[0-9]|compute-5-3[0-2]&quot; -pe
</span><br>
<span class="quotelev1">&gt; mpich 101 jobfile.job
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would like to restrict the job to nodes compute-5-1 to compute-5-32
</span><br>
<span class="quotelev1">&gt; on our machine,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; each containing 8 cpu's (slots). How do I go about this?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks, Erik
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Erik Nelson
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev3">&gt; &gt; &gt; f : 214 645 5948
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Erik Nelson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev2">&gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev2">&gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev2">&gt; &gt; f : 214 645 5948
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19844.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>In reply to:</strong> <a href="19836.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
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
