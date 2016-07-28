<?
$subject_val = "Re: [OMPI users] multithreaded jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 20:33:16 2013" -->
<!-- isoreceived="20130426003316" -->
<!-- sent="Thu, 25 Apr 2013 19:33:12 -0500" -->
<!-- isosent="20130426003312" -->
<!-- name="Vladimir Yamshchikov" -->
<!-- email="yaximik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multithreaded jobs" -->
<!-- id="CAP9vw5D_wubvRJ0j2P4BLAvPycwa6=f3R3rAfxTcvCU52DFn+A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="72B95554-F364-462E-87DF-B69161C0A178_at_open-mpi.org" -->
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
<strong>From:</strong> Vladimir Yamshchikov (<em>yaximik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 20:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21799.php">Jeff Squyres (jsquyres): "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>In reply to:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
$NSLOTS is what requested by -pe openmpi &lt;ARG&gt; in the script, my
<br>
understanding that by default it is threads. $NSLOTS processes each
<br>
spinning -t &lt;ARG&gt; threads is not what is wanted as each process could spin
<br>
off more threads then there are physical or logical cores per node, thus
<br>
degrading performance or even crashing the node. Even when -t &lt;ARG. is kept
<br>
within permissive boundaries (2, 4, or 6 cores per processor or 2, 4, 8, or
<br>
12 cores per node), it is still not clear how these cores are utilized in
<br>
multithreaded runs.
<br>
My question is then - how to correctly formulate resource scheduling for
<br>
programs designed to run in multithreaded mode? For those involved in
<br>
bioinformatics, examples are bwa with -t &lt;ARG&gt; option or blast+ with
<br>
number_of_threads &lt;ARG&gt; option specified.
<br>
<p><p>On Thu, Apr 25, 2013 at 2:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Depends on what NSLOTS is and what your program's &quot;-t&quot; option does :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Assuming your &quot;-t&quot; tells your program the number of threads to start, then
</span><br>
<span class="quotelev1">&gt; the command you show will execute NSLOTS number of processes, each of which
</span><br>
<span class="quotelev1">&gt; will spin off the number of indicated threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2013, at 11:39 AM, Vladimir Yamshchikov &lt;yaximik_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The FAQ has excellent entries on how to schedule on a SGE cluster
</span><br>
<span class="quotelev1">&gt; non-MPI jobs, yet only simple jobs are exemplified. But wnat about jobs
</span><br>
<span class="quotelev1">&gt; that can be run in multithreaded mode, say specifying option -t
</span><br>
<span class="quotelev1">&gt; number_of_threads? In other words, consider a command an esample qsub
</span><br>
<span class="quotelev1">&gt; script:
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
<span class="quotelev2">&gt; &gt; Will that launch a program to run in 16 threads (as desired) or will
</span><br>
<span class="quotelev1">&gt; this launch 16 instances of a program wiith each instance trying to run in
</span><br>
<span class="quotelev1">&gt; 16 threads (certainly not desired)?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21799.php">Jeff Squyres (jsquyres): "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>In reply to:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
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
