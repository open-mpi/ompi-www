<?
$subject_val = "Re: [OMPI users] multithreaded jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 15:10:03 2013" -->
<!-- isoreceived="20130425191003" -->
<!-- sent="Thu, 25 Apr 2013 12:09:56 -0700" -->
<!-- isosent="20130425190956" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multithreaded jobs" -->
<!-- id="72B95554-F364-462E-87DF-B69161C0A178_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAP9vw5ANiAuv_1i-bw5BAJHkY9sv6Cfq63+k50h5UNd8UVMSbw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-04-25 15:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21799.php">Jeff Squyres (jsquyres): "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Previous message:</strong> <a href="21797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>In reply to:</strong> <a href="21796.php">Vladimir Yamshchikov: "[OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depends on what NSLOTS is and what your program's &quot;-t&quot; option does :-)
<br>
<p>Assuming your &quot;-t&quot; tells your program the number of threads to start, then the command you show will execute NSLOTS number of processes, each of which will spin off the number of indicated threads.
<br>
<p><p>On Apr 25, 2013, at 11:39 AM, Vladimir Yamshchikov &lt;yaximik_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The FAQ has excellent entries on how to schedule on a SGE cluster non-MPI jobs, yet only simple jobs are exemplified. But wnat about jobs that can be run in multithreaded mode, say specifying option -t number_of_threads? In other words, consider a command an esample qsub script:
</span><br>
<span class="quotelev1">&gt; ..........
</span><br>
<span class="quotelev1">&gt; #$ -pe openmpi 16
</span><br>
<span class="quotelev1">&gt; ..........
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS my_program -t 16 &gt; out_file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will that launch a program to run in 16 threads (as desired) or will this launch 16 instances of a program wiith each instance trying to run in 16 threads (certainly not desired)?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21799.php">Jeff Squyres (jsquyres): "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Previous message:</strong> <a href="21797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>In reply to:</strong> <a href="21796.php">Vladimir Yamshchikov: "[OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21800.php">Vladimir Yamshchikov: "Re: [OMPI users] multithreaded jobs"</a>
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
