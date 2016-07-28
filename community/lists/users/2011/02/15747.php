<?
$subject_val = "Re: [OMPI users] Fatal error while running the code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 25 10:06:19 2011" -->
<!-- isoreceived="20110225150619" -->
<!-- sent="Fri, 25 Feb 2011 10:06:13 -0500" -->
<!-- isosent="20110225150613" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fatal error while running the code" -->
<!-- id="B25275A6-F0A1-4337-A773-2AAF172CA1EB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=f40cfvT_C9+Ndv4nQ5EfqD6iJNjuCH10LrQJN_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fatal error while running the code<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-25 10:06:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15748.php">Jeff Squyres: "Re: [OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15744.php">Ashwinkumar Dobariya: "[OMPI users] Fatal error while running the code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two things:
<br>
<p>1. It looks like you are using the MPICH implementation of MPI.  You should probably ping them on their email list -- this list is for the Open MPI implementation of MPI (a wholly different code base than MPICH; sorry!).
<br>
<p>2. The error code seems quite descriptive, actually:
<br>
<p><span class="quotelev1">&gt; MPI_Send(176): MPI_Send(buf=0x7fffa7a1e4a8, count=1, MPI_DOUBLE_PRECISION, dest=1, tag=1, MPI_COMM_WORLD) failed
</span><br>
<span class="quotelev1">&gt; MPI_Send(98).: Invalid rank has value 1 but must be nonnegative and less than 1
</span><br>
<p>You sent dest=1, but the apparently the communicator must be of size 1, meaning that the only possible destination is 0 (i.e., yourself).
<br>
<p><p><p><p>On Feb 25, 2011, at 9:23 AM, Ashwinkumar Dobariya wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am newbie here. I am running the code for Large eddy simulation of turbulent flow. I am compiling the code using wrapper command and running the code on Hydra cluster. when I am submitting the script file it is showing the following error.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; running mpdallexit on hydra127
</span><br>
<span class="quotelev1">&gt; LAUNCHED mpd on hydra127  via
</span><br>
<span class="quotelev1">&gt; RUNNING: mpd on hydra127
</span><br>
<span class="quotelev1">&gt; LAUNCHED mpd on hydra118  via  hydra127
</span><br>
<span class="quotelev1">&gt; RUNNING: mpd on hydra118
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Send: Invalid rank, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Send(176): MPI_Send(buf=0x7fffa7a1e4a8, count=1, MPI_DOUBLE_PRECISION, dest=1, tag=1, MPI_COMM_WORLD) failed
</span><br>
<span class="quotelev1">&gt; MPI_Send(98).: Invalid rank has value 1 but must be nonnegative and less than 1
</span><br>
<span class="quotelev1">&gt;  Total Nb of PE:            1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PE#           0 /           1  OK
</span><br>
<span class="quotelev1">&gt; PE# 0    0   0   0
</span><br>
<span class="quotelev1">&gt; PE# 0    0  33   0 165   0  33
</span><br>
<span class="quotelev1">&gt; PE# 0  -1  1 -1 -1 -1  8
</span><br>
<span class="quotelev1">&gt;  PE_Table, PE#           0  complete
</span><br>
<span class="quotelev1">&gt; PE# 0   -0.03   0.98  -1.00   1.00  -0.03   0.98
</span><br>
<span class="quotelev1">&gt;  PE#           0  doesn t intersect any bloc
</span><br>
<span class="quotelev1">&gt;  PE#           0  will communicate with            0
</span><br>
<span class="quotelev1">&gt;              single value
</span><br>
<span class="quotelev1">&gt;  PE#           0  has           2  com. boundaries
</span><br>
<span class="quotelev1">&gt;  Data_Read, PE#           0  complete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PE#           0  checking boundary type for
</span><br>
<span class="quotelev1">&gt;  0  1   1   1   0 165   0  33  nor sur sur sur gra  1  0  0
</span><br>
<span class="quotelev1">&gt;  0  2  33  33   0 165   0  33            EXC -&gt;  1
</span><br>
<span class="quotelev1">&gt;  0  3   0  33   1   1   0  33  sur nor sur sur gra  0  1  0
</span><br>
<span class="quotelev1">&gt;  0  4   0  33 164 164   0  33  sur nor sur sur gra  0 -1  0
</span><br>
<span class="quotelev1">&gt;  0  5   0  33   0 165   1   1  cyc cyc cyc sur cyc  0  0  1
</span><br>
<span class="quotelev1">&gt;  0  6   0  33   0 165  33  33            EXC -&gt;  8
</span><br>
<span class="quotelev1">&gt;  PE#           0  Set new
</span><br>
<span class="quotelev1">&gt;  PE#           0  FFT Table
</span><br>
<span class="quotelev1">&gt;  PE#           0  Coeff
</span><br>
<span class="quotelev1">&gt; rank 0 in job 1  hydra127_34565   caused collective abort of all ranks
</span><br>
<span class="quotelev1">&gt;   exit status of rank 0: return code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am struggling to find the error in my code. can anybody suggest me where I messed up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Ash
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15748.php">Jeff Squyres: "Re: [OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15744.php">Ashwinkumar Dobariya: "[OMPI users] Fatal error while running the code"</a>
<!-- nextthread="start" -->
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
