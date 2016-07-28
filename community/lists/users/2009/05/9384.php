<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 09:42:38 2009" -->
<!-- isoreceived="20090519134238" -->
<!-- sent="Tue, 19 May 2009 15:42:33 +0200" -->
<!-- isosent="20090519134233" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="d21ea44c0905190642j15b16bafg755c0ba8ed2b6c3a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200905191529.46368.cap_at_nsc.liu.se" -->
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
<strong>Date:</strong> 2009-05-19 09:42:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9385.php">Josh Hursey: "Re: [OMPI users] bug in ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9383.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 19, 2009 at 3:29 PM, Peter Kjellstrom &lt;cap_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3.2 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; time per one MD step is 3.66 s
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;ELAPSED TIME : &#160; &#160;0 HOURS &#160;1 MINUTES 25.90 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; 102033. BYTES &#160; &#160; &#160; &#160; &#160; &#160; &#160; 4221. &#160;=
</span><br>
<span class="quotelev2">&gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; &#160; 7.802 &#160;MB/S &#160; &#160; &#160; &#160; &#160;55.200 SEC &#160;=
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; mvapich-1.1.0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;time per one MD step is 2.55 s
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;ELAPSED TIME : &#160; &#160;0 HOURS &#160;1 MINUTES &#160;0.65 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; 102033. BYTES &#160; &#160; &#160; &#160; &#160; &#160; &#160; 4221. &#160;=
</span><br>
<span class="quotelev2">&gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; &#160;14.815 &#160;MB/S &#160; &#160; &#160; &#160; &#160;29.070 SEC &#160;=
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Intel MPI 3.2.1.009 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; time per one MD step is 1.58 s
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;ELAPSED TIME : &#160; &#160;0 HOURS &#160;0 MINUTES 38.16 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; 102033. BYTES &#160; &#160; &#160; &#160; &#160; &#160; &#160; 4221. &#160;=
</span><br>
<span class="quotelev2">&gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; &#160;38.696 &#160;MB/S &#160; &#160; &#160; &#160; &#160;11.130 SEC &#160;=
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Clearly the whole difference is basically in the ALL TO ALL COMM time.
</span><br>
<span class="quotelev2">&gt;&gt; Running on 1 blade (8 cores) all three MPI implementations have very
</span><br>
<span class="quotelev2">&gt;&gt; similar same time per step of about 8.6 s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that what you see is the difference in MPI_Alltoall performance
</span><br>
<span class="quotelev1">&gt; for the different MPI-implementations (running in your env. on your hw.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could write a trivial loop like this and try on the three MPIs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;MPI_init
</span><br>
<span class="quotelev1">&gt; &#160;for i in 1 to 4221
</span><br>
<span class="quotelev1">&gt; &#160; MPI_Alltoall(size=102033, ...)
</span><br>
<span class="quotelev1">&gt; &#160;MPI_finialize
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And time it to comfirm this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For CPMD I found that using the keyword TASKGROUP
</span><br>
<span class="quotelev2">&gt;&gt; which introduces a different way of parallelization it is possible to
</span><br>
<span class="quotelev2">&gt;&gt; improve on the openmpi time substantially and lower the time from 3.66
</span><br>
<span class="quotelev2">&gt;&gt; s to 1.67 s, almost to the value found with Intel MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess this changed what kind of communication is done and you no longer have
</span><br>
<span class="quotelev1">&gt; to do 4221x 100Kbytes alltoall that seems to hurt OpenMPI so much.
</span><br>
<p>With TASKGROUP=2 the summary looks as follows
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS  0 MINUTES 42.09 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    0 HOURS  0 MINUTES 44.01 SECONDS
<br>
&nbsp;***      CPMD| SIZE OF THE PROGRAM IS   73532/ 322740 kBYTES ***
<br>
<p>&nbsp;PROGRAM CPMD ENDED AT:   Tue May 19 11:16:18 2009
<br>
<p>&nbsp;================================================================
<br>
&nbsp;= COMMUNICATION TASK  AVERAGE MESSAGE LENGTH  NUMBER OF CALLS  =
<br>
&nbsp;= SEND/RECEIVE                8585. BYTES              48447.  =
<br>
&nbsp;= BROADCAST                  19063. BYTES                396.  =
<br>
&nbsp;= GLOBAL SUMMATION          103463. BYTES                372.  =
<br>
&nbsp;= GLOBAL MULTIPLICATION          0. BYTES                  1.  =
<br>
&nbsp;= ALL TO ALL COMM           231821. BYTES               4221.  =
<br>
&nbsp;=                             PERFORMANCE          TOTAL TIME  =
<br>
&nbsp;= SEND/RECEIVE              193.459  MB/S           2.150 SEC  =
<br>
&nbsp;= BROADCAST                  10.785  MB/S           0.700 SEC  =
<br>
&nbsp;= GLOBAL SUMMATION          339.605  MB/S           0.680 SEC  =
<br>
&nbsp;= GLOBAL MULTIPLICATION       0.000  MB/S           0.001 SEC  =
<br>
&nbsp;= ALL TO ALL COMM            82.716  MB/S          11.830 SEC  =
<br>
&nbsp;= SYNCHRONISATION                                   2.360 SEC  =
<br>
&nbsp;================================================================
<br>
<p>Roman
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9385.php">Josh Hursey: "Re: [OMPI users] bug in ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9383.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
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
