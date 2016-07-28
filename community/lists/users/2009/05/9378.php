<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 08:21:02 2009" -->
<!-- isoreceived="20090519122102" -->
<!-- sent="Tue, 19 May 2009 14:20:57 +0200" -->
<!-- isosent="20090519122057" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="d21ea44c0905190520o28fa7815ia3b640f46120b42a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0607010-4AD2-4C3C-8223-AE5FCCC3AC6D_at_nrl.navy.mil" -->
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
<strong>From:</strong> Roman Martonak (<em>r.martonak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 08:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using CPMD 3.11.1, not cp2k. Below are the timings for 20 steps
<br>
of MD for 32 water molecules (one of standard CPMD benchmarks) with
<br>
openmpi, mvapich and Intel MPI, running on 64 cores (8 blades, each
<br>
has 2 quad-core 2.2 GHz AMD Barcelona CPUs).
<br>
<p>openmpi-1.3.2                           time per one MD step is 3.66 s
<br>
summary:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS  1 MINUTES 23.85 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS  1 MINUTES 25.90 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS   70020/ 319128 kBYTES ***
<br>
<p>&nbsp;PROGRAM CPMD ENDED AT:   Tue May 19 11:12:06 2009
<br>
<p>&nbsp;================================================================
<br>
&nbsp;= COMMUNICATION TASK  AVERAGE MESSAGE LENGTH  NUMBER OF CALLS  =
<br>
&nbsp;= SEND/RECEIVE                8585. BYTES              48447.  =
<br>
&nbsp;= BROADCAST                  19063. BYTES                396.  =
<br>
&nbsp;= GLOBAL SUMMATION           32010. BYTES                329.  =
<br>
&nbsp;= GLOBAL MULTIPLICATION          0. BYTES                  1.  =
<br>
&nbsp;= ALL TO ALL COMM           102033. BYTES               4221.  =
<br>
&nbsp;=                             PERFORMANCE          TOTAL TIME  =
<br>
&nbsp;= SEND/RECEIVE              209.014  MB/S           1.990 SEC  =
<br>
&nbsp;= BROADCAST                  10.485  MB/S           0.720 SEC  =
<br>
&nbsp;= GLOBAL SUMMATION          154.115  MB/S           0.410 SEC  =
<br>
&nbsp;= GLOBAL MULTIPLICATION       0.000  MB/S           0.001 SEC  =
<br>
&nbsp;= ALL TO ALL COMM             7.802  MB/S          55.200 SEC  =
<br>
&nbsp;= SYNCHRONISATION                                   2.440 SEC  =
<br>
&nbsp;================================================================
<br>
<p>mvapich-1.1.0                            time per one MD step is 2.55 s
<br>
summary:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS  0 MINUTES 59.79 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS  1 MINUTES  0.65 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS   59072/ 182960 kBYTES ***
<br>
<p>&nbsp;PROGRAM CPMD ENDED AT:   Tue May 19 10:34:56 2009
<br>
<p>&nbsp;================================================================
<br>
&nbsp;= COMMUNICATION TASK  AVERAGE MESSAGE LENGTH  NUMBER OF CALLS  =
<br>
&nbsp;= SEND/RECEIVE                8585. BYTES              48447.  =
<br>
&nbsp;= BROADCAST                  19063. BYTES                396.  =
<br>
&nbsp;= GLOBAL SUMMATION           32010. BYTES                329.  =
<br>
&nbsp;= GLOBAL MULTIPLICATION          0. BYTES                  1.  =
<br>
&nbsp;= ALL TO ALL COMM           102033. BYTES               4221.  =
<br>
&nbsp;=                             PERFORMANCE          TOTAL TIME  =
<br>
&nbsp;= SEND/RECEIVE              170.466  MB/S           2.440 SEC  =
<br>
&nbsp;= BROADCAST                   6.863  MB/S           1.100 SEC  =
<br>
&nbsp;= GLOBAL SUMMATION           61.948  MB/S           1.020 SEC  =
<br>
&nbsp;= GLOBAL MULTIPLICATION       0.000  MB/S           0.001 SEC  =
<br>
&nbsp;= ALL TO ALL COMM            14.815  MB/S          29.070 SEC  =
<br>
&nbsp;= SYNCHRONISATION                                   0.400 SEC  =
<br>
&nbsp;================================================================
<br>
<p>Intel MPI 3.2.1.009                 time per one MD step is 1.58 s
<br>
<p>summary:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS  0 MINUTES 36.11 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS  0 MINUTES 38.16 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS   65196/ 178736 kBYTES ***
<br>
<p>&nbsp;PROGRAM CPMD ENDED AT:   Tue May 19 10:17:17 2009
<br>
<p>&nbsp;================================================================
<br>
&nbsp;= COMMUNICATION TASK  AVERAGE MESSAGE LENGTH  NUMBER OF CALLS  =
<br>
&nbsp;= SEND/RECEIVE                8585. BYTES              48447.  =
<br>
&nbsp;= BROADCAST                  19063. BYTES                396.  =
<br>
&nbsp;= GLOBAL SUMMATION           32010. BYTES                329.  =
<br>
&nbsp;= GLOBAL MULTIPLICATION          0. BYTES                  1.  =
<br>
&nbsp;= ALL TO ALL COMM           102033. BYTES               4221.  =
<br>
&nbsp;=                             PERFORMANCE          TOTAL TIME  =
<br>
&nbsp;= SEND/RECEIVE              815.562  MB/S           0.510 SEC  =
<br>
&nbsp;= BROADCAST                 754.914  MB/S           0.010 SEC  =
<br>
&nbsp;= GLOBAL SUMMATION          180.535  MB/S           0.350 SEC  =
<br>
&nbsp;= GLOBAL MULTIPLICATION       0.000  MB/S           0.001 SEC  =
<br>
&nbsp;= ALL TO ALL COMM            38.696  MB/S          11.130 SEC  =
<br>
&nbsp;= SYNCHRONISATION                                   0.550 SEC  =
<br>
&nbsp;================================================================
<br>
<p>Clearly the whole difference is basically in the ALL TO ALL COMM time.
<br>
Running on 1 blade (8 cores) all three MPI implementations have very
<br>
similar same time per step of about 8.6 s. Openmpi was ran with the
<br>
--mca mpi_paffinity_alone 1 option, in mvapich and IntelMPI no
<br>
particular option was used. I was told by HP that there could be an
<br>
increased latency when all 8 cores in one blade communicate via a
<br>
single port HCA to Infiniband fabric but even if that is the case I am
<br>
still wondering how there can be such difference between the
<br>
implementations. For CPMD I found that using the keyword TASKGROUP
<br>
which introduces a different way of parallelization it is possible to
<br>
improve on the openmpi time substantially and lower the time from 3.66
<br>
s to 1.67 s, almost to the value found with Intel MPI. Is there
<br>
perhaps any openmpi parameter that could be tuned to help the scaling,
<br>
without the use of TASKGROUP (maybe some tuning of collective
<br>
operations) ?
<br>
<p>Thanks, best regards
<br>
<p>Roman
<br>
<p><p>On Mon, May 18, 2009 at 6:58 PM, Noam Bernstein
<br>
&lt;noam.bernstein_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 18, 2009, at 12:50 PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Roman,
</span><br>
<span class="quotelev2">&gt;&gt; Can you please share with us Mvapich numbers that you get . Also what is
</span><br>
<span class="quotelev2">&gt;&gt; mvapich version that you use.
</span><br>
<span class="quotelev2">&gt;&gt; Default mvapich and openmpi IB tuning is very similar, so it is strange to
</span><br>
<span class="quotelev2">&gt;&gt; see so big difference. Do you know what kind of collectives operation is
</span><br>
<span class="quotelev2">&gt;&gt; used in this specific application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code does a bunch of parallel things in various different places
</span><br>
<span class="quotelev1">&gt; (mostly dense matrix math, and some FFT stuff that may or may not
</span><br>
<span class="quotelev1">&gt; be parallelized). &#160;In the standard output there's a summary of the time
</span><br>
<span class="quotelev1">&gt; taken by various MPI routines. &#160;Perhaps Roman can send them? &#160;The
</span><br>
<span class="quotelev1">&gt; code also uses ScaLAPACK, but I'm not sure how CP2K labels the
</span><br>
<span class="quotelev1">&gt; timing for those routines in the output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Noam
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
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
