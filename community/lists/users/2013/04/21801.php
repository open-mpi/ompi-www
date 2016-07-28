<?
$subject_val = "Re: [OMPI users] multithreaded jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 21:09:13 2013" -->
<!-- isoreceived="20130426010913" -->
<!-- sent="Thu, 25 Apr 2013 18:09:04 -0700" -->
<!-- isosent="20130426010904" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multithreaded jobs" -->
<!-- id="9607D8F6-B5B6-4BE5-9F42-B46BFC16CB51_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAP9vw5D_wubvRJ0j2P4BLAvPycwa6=f3R3rAfxTcvCU52DFn+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multithreaded jobs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 21:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2013, at 5:33 PM, Vladimir Yamshchikov &lt;yaximik_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; $NSLOTS is what requested by -pe openmpi &lt;ARG&gt; in the script, my understanding that by default it is threads.
</span><br>
<p>No - it is the number of processing elements (typically cores) that are assigned to your job.
<br>
<p><span class="quotelev1">&gt; $NSLOTS processes each spinning -t &lt;ARG&gt; threads is not what is wanted as each process could spin off more threads then there are physical or logical cores per node, thus degrading performance or even crashing the node. Even when -t &lt;ARG. is kept within permissive boundaries (2, 4, or 6 cores per processor or 2, 4, 8, or 12 cores per node), it is still not clear how these cores are utilized in multithreaded runs.
</span><br>
<span class="quotelev1">&gt; My question is then - how to correctly formulate resource scheduling for programs designed to run in multithreaded mode? For those involved in bioinformatics, examples are bwa with -t &lt;ARG&gt; option or blast+ with number_of_threads &lt;ARG&gt; option specified.
</span><br>
<p>What you want to do is:
<br>
<p>1. request a number of slots = the number of application processes * the number of threads each process will run
<br>
<p>2. execute mpirun with the --cpus-per-proc N option, where N = the number of threads each process will run.
<br>
<p>This will ensure you have one core for each thread. Note, however, that we don't actually bind a thread to the core - so having more threads than there are cores on a socket can cause a thread to bounce across sockets and (therefore) potentially across NUMA regions.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 25, 2013 at 2:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Depends on what NSLOTS is and what your program's &quot;-t&quot; option does :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming your &quot;-t&quot; tells your program the number of threads to start, then the command you show will execute NSLOTS number of processes, each of which will spin off the number of indicated threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2013, at 11:39 AM, Vladimir Yamshchikov &lt;yaximik_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The FAQ has excellent entries on how to schedule on a SGE cluster non-MPI jobs, yet only simple jobs are exemplified. But wnat about jobs that can be run in multithreaded mode, say specifying option -t number_of_threads? In other words, consider a command an esample qsub script:
</span><br>
<span class="quotelev2">&gt; &gt; ..........
</span><br>
<span class="quotelev2">&gt; &gt; #$ -pe openmpi 16
</span><br>
<span class="quotelev2">&gt; &gt; ..........
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np $NSLOTS my_program -t 16 &gt; out_file
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Will that launch a program to run in 16 threads (as desired) or will this launch 16 instances of a program wiith each instance trying to run in 16 threads (certainly not desired)?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21801/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
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
