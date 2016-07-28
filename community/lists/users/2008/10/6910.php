<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 17:09:53 2008" -->
<!-- isoreceived="20081008210953" -->
<!-- sent="Wed, 8 Oct 2008 17:09:48 -0400" -->
<!-- isosent="20081008210948" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="2b5e0c120810081409v253ef8a6g6a69ac8bb4b93c6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48ED1FA9.9000109_at_sun.com" -->
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
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 17:09:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6909.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6909.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6912.php">Aurélien Bouteiller: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6912.php">Aurélien Bouteiller: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6917.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>[From Eugene Loh:]
<br>
<p><span class="quotelev1">&gt; OpenMPI - 25 m 39 s.
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2  -  15 m 53 s.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; With regards to your issue, do you have any indication when you get that
</span><br>
<span class="quotelev1">&gt; 25m39s timing if there is a grotesque amount of time being spent in MPI
</span><br>
<span class="quotelev1">&gt; calls?  Or, is the slowdown due to non-MPI portions?
</span><br>
<p><p>&nbsp;&nbsp;Just to add my two cents: if this job *can* be run on less than 8
<br>
processors (ideally, even on just 1), then I'd recommend doing so.  That is,
<br>
run it with OpenMPI and with MPICH2 on 1, 2 and 4 processors as well.  If
<br>
the single-processor jobs still give vastly different timings, then perhaps
<br>
Eugene is on the right track and it comes down to various computational
<br>
optimizations and not so much the message-passing that's make a difference.
<br>
Timings from 2 and 4 process runs might be interesting as well to see how
<br>
this difference changes with process counts.
<br>
<p>&nbsp;&nbsp;I've seen differences between various MPI libraries before, but nothing
<br>
quite this severe either.  If I get the time, maybe I'll try to set up
<br>
Gromacs tonight -- I've got both MPICH2 and OpenMPI installed here and can
<br>
try to duplicate the runs.   Sangamesh, is this a standard benchmark case
<br>
that anyone can download and run?
<br>
<p>&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>Brian Dobbins
<br>
Yale Engineering HPC
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6910/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6909.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6909.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6912.php">Aurélien Bouteiller: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6912.php">Aurélien Bouteiller: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6917.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
