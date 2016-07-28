<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 17:25:39 2008" -->
<!-- isoreceived="20081008212539" -->
<!-- sent="Wed, 8 Oct 2008 17:25:34 -0400" -->
<!-- isosent="20081008212534" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="9F1AA220-2D1D-4546-AFC7-EE875324B648_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2b5e0c120810081409v253ef8a6g6a69ac8bb4b93c6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 17:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6913.php">Sudhakar Mahalingam: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Previous message:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6915.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6915.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make sure you don't use a &quot;debug&quot; build of Open MPI. If you use trunk,  
<br>
the build system detects it and turns on debug by default. It really  
<br>
kills performance. --disable-debug will remove all those nasty printfs  
<br>
from the critical path.
<br>
<p>You can also run a simple ping-pong test (Netpipe is a good one) to  
<br>
make sure that the numbers are correct. Based on your processor model,  
<br>
shared memory latency should be in the .45us, while bandwidth should  
<br>
reach 9Gbit/s for messages longer than cache.
<br>
<p>Aurelien
<br>
<p><p>Le 8 oct. 08 &#224; 17:09, Brian Dobbins a &#233;crit :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [From Eugene Loh:]
</span><br>
<span class="quotelev1">&gt; OpenMPI - 25 m 39 s.
</span><br>
<span class="quotelev1">&gt; MPICH2  -  15 m 53 s.
</span><br>
<span class="quotelev1">&gt; With regards to your issue, do you have any indication when you get  
</span><br>
<span class="quotelev1">&gt; that 25m39s timing if there is a grotesque amount of time being  
</span><br>
<span class="quotelev1">&gt; spent in MPI calls?  Or, is the slowdown due to non-MPI portions?
</span><br>
<span class="quotelev1">&gt;   Just to add my two cents: if this job can be run on less than 8  
</span><br>
<span class="quotelev1">&gt; processors (ideally, even on just 1), then I'd recommend doing so.   
</span><br>
<span class="quotelev1">&gt; That is, run it with OpenMPI and with MPICH2 on 1, 2 and 4  
</span><br>
<span class="quotelev1">&gt; processors as well.  If the single-processor jobs still give vastly  
</span><br>
<span class="quotelev1">&gt; different timings, then perhaps Eugene is on the right track and it  
</span><br>
<span class="quotelev1">&gt; comes down to various computational optimizations and not so much  
</span><br>
<span class="quotelev1">&gt; the message-passing that's make a difference.  Timings from 2 and 4  
</span><br>
<span class="quotelev1">&gt; process runs might be interesting as well to see how this difference  
</span><br>
<span class="quotelev1">&gt; changes with process counts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I've seen differences between various MPI libraries before, but  
</span><br>
<span class="quotelev1">&gt; nothing quite this severe either.  If I get the time, maybe I'll try  
</span><br>
<span class="quotelev1">&gt; to set up Gromacs tonight -- I've got both MPICH2 and OpenMPI  
</span><br>
<span class="quotelev1">&gt; installed here and can try to duplicate the runs.   Sangamesh, is  
</span><br>
<span class="quotelev1">&gt; this a standard benchmark case that anyone can download and run?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Cheers,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Dobbins
</span><br>
<span class="quotelev1">&gt; Yale Engineering HPC
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
<p><p><p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6913.php">Sudhakar Mahalingam: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Previous message:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6915.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6915.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
