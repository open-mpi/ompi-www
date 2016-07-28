<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 09:29:52 2009" -->
<!-- isoreceived="20090519132952" -->
<!-- sent="Tue, 19 May 2009 15:29:41 +0200" -->
<!-- isosent="20090519132941" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="200905191529.46368.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="d21ea44c0905190520o28fa7815ia3b640f46120b42a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling problem with openmpi<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 09:29:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 19 May 2009, Roman Martonak wrote:
<br>
...
<br>
<span class="quotelev1">&gt; openmpi-1.3.2                           time per one MD step is 3.66 s
</span><br>
<span class="quotelev1">&gt;    ELAPSED TIME :    0 HOURS  1 MINUTES 25.90 SECONDS
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM           102033. BYTES               4221.  =
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM             7.802  MB/S          55.200 SEC  =
</span><br>
...
<br>
<span class="quotelev1">&gt; mvapich-1.1.0                            time per one MD step is 2.55 s
</span><br>
<span class="quotelev1">&gt;    ELAPSED TIME :    0 HOURS  1 MINUTES  0.65 SECONDS
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM           102033. BYTES               4221.  =
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM            14.815  MB/S          29.070 SEC  =
</span><br>
...
<br>
<span class="quotelev1">&gt; Intel MPI 3.2.1.009                 time per one MD step is 1.58 s
</span><br>
<span class="quotelev1">&gt;    ELAPSED TIME :    0 HOURS  0 MINUTES 38.16 SECONDS
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM           102033. BYTES               4221.  =
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM            38.696  MB/S          11.130 SEC  =
</span><br>
...
<br>
<span class="quotelev1">&gt; Clearly the whole difference is basically in the ALL TO ALL COMM time.
</span><br>
<span class="quotelev1">&gt; Running on 1 blade (8 cores) all three MPI implementations have very
</span><br>
<span class="quotelev1">&gt; similar same time per step of about 8.6 s.
</span><br>
<p>My guess is that what you see is the difference in MPI_Alltoall performance 
<br>
for the different MPI-implementations (running in your env. on your hw.).
<br>
<p>You could write a trivial loop like this and try on the three MPIs:
<br>
<p>&nbsp;MPI_init
<br>
&nbsp;for i in 1 to 4221
<br>
&nbsp;&nbsp;&nbsp;MPI_Alltoall(size=102033, ...)
<br>
&nbsp;MPI_finialize
<br>
<p>And time it to comfirm this.
<br>
<p><span class="quotelev1">&gt; For CPMD I found that using the keyword TASKGROUP
</span><br>
<span class="quotelev1">&gt; which introduces a different way of parallelization it is possible to
</span><br>
<span class="quotelev1">&gt; improve on the openmpi time substantially and lower the time from 3.66
</span><br>
<span class="quotelev1">&gt; s to 1.67 s, almost to the value found with Intel MPI.
</span><br>
<p>I guess this changed what kind of communication is done and you no longer have 
<br>
to do 4221x 100Kbytes alltoall that seems to hurt OpenMPI so much.
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9381/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
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
