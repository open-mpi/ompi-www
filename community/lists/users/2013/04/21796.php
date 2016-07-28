<?
$subject_val = "[OMPI users] multithreaded jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 14:39:18 2013" -->
<!-- isoreceived="20130425183918" -->
<!-- sent="Thu, 25 Apr 2013 13:39:14 -0500" -->
<!-- isosent="20130425183914" -->
<!-- name="Vladimir Yamshchikov" -->
<!-- email="yaximik_at_[hidden]" -->
<!-- subject="[OMPI users] multithreaded jobs" -->
<!-- id="CAP9vw5ANiAuv_1i-bw5BAJHkY9sv6Cfq63+k50h5UNd8UVMSbw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] multithreaded jobs<br>
<strong>From:</strong> Vladimir Yamshchikov (<em>yaximik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 14:39:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>Previous message:</strong> <a href="21795.php">Padma Pavani: "[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>The FAQ has excellent entries on how to schedule on a SGE cluster non-MPI
<br>
jobs, yet only simple jobs are exemplified. But wnat about jobs that can be
<br>
run in multithreaded mode, say specifying option -t number_of_threads? In
<br>
other words, consider a command an esample qsub script:
<br>
..........
<br>
#$ -pe openmpi 16
<br>
..........
<br>
<p>mpirun -np $NSLOTS my_program -t 16 &gt; out_file
<br>
<p>Will that launch a program to run in 16 threads (as desired) or will this
<br>
launch 16 instances of a program wiith each instance trying to run in 16
<br>
threads (certainly not desired)?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21796/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>Previous message:</strong> <a href="21795.php">Padma Pavani: "[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
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
