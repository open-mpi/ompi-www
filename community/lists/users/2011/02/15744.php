<?
$subject_val = "[OMPI users] Fatal error while running the code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 25 09:23:09 2011" -->
<!-- isoreceived="20110225142309" -->
<!-- sent="Fri, 25 Feb 2011 14:23:04 +0000" -->
<!-- isosent="20110225142304" -->
<!-- name="Ashwinkumar Dobariya" -->
<!-- email="adobariya_at_[hidden]" -->
<!-- subject="[OMPI users] Fatal error while running the code" -->
<!-- id="AANLkTi=f40cfvT_C9+Ndv4nQ5EfqD6iJNjuCH10LrQJN_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fatal error while running the code<br>
<strong>From:</strong> Ashwinkumar Dobariya (<em>adobariya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-25 09:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15745.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15743.php">Ole Widar Saastad: "[OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15747.php">Jeff Squyres: "Re: [OMPI users] Fatal error while running the code"</a>
<li><strong>Reply:</strong> <a href="15747.php">Jeff Squyres: "Re: [OMPI users] Fatal error while running the code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I am newbie here. I am running the code for Large eddy simulation of
<br>
turbulent flow. I am compiling the code using wrapper command and running
<br>
the code on Hydra cluster. when I am submitting the script file it is
<br>
showing the following error.
<br>
<p>running mpdallexit on hydra127
<br>
LAUNCHED mpd on hydra127  via
<br>
RUNNING: mpd on hydra127
<br>
LAUNCHED mpd on hydra118  via  hydra127
<br>
RUNNING: mpd on hydra118
<br>
Fatal error in MPI_Send: Invalid rank, error stack:
<br>
MPI_Send(176): MPI_Send(buf=0x7fffa7a1e4a8, count=1, MPI_DOUBLE_PRECISION,
<br>
dest=1, tag=1, MPI_COMM_WORLD) failed
<br>
MPI_Send(98).: Invalid rank has value 1 but must be nonnegative and less
<br>
than 1
<br>
&nbsp;Total Nb of PE:            1
<br>
<p>&nbsp;PE#           0 /           1  OK
<br>
PE# 0    0   0   0
<br>
PE# 0    0  33   0 165   0  33
<br>
PE# 0  -1  1 -1 -1 -1  8
<br>
&nbsp;PE_Table, PE#           0  complete
<br>
PE# 0   -0.03   0.98  -1.00   1.00  -0.03   0.98
<br>
&nbsp;PE#           0  doesn t intersect any bloc
<br>
&nbsp;PE#           0  will communicate with            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;single value
<br>
&nbsp;PE#           0  has           2  com. boundaries
<br>
&nbsp;Data_Read, PE#           0  complete
<br>
<p>&nbsp;PE#           0  checking boundary type for
<br>
&nbsp;0  1   1   1   0 165   0  33  nor sur sur sur gra  1  0  0
<br>
&nbsp;0  2  33  33   0 165   0  33            EXC -&gt;  1
<br>
&nbsp;0  3   0  33   1   1   0  33  sur nor sur sur gra  0  1  0
<br>
&nbsp;0  4   0  33 164 164   0  33  sur nor sur sur gra  0 -1  0
<br>
&nbsp;0  5   0  33   0 165   1   1  cyc cyc cyc sur cyc  0  0  1
<br>
&nbsp;0  6   0  33   0 165  33  33            EXC -&gt;  8
<br>
&nbsp;PE#           0  Set new
<br>
&nbsp;PE#           0  FFT Table
<br>
&nbsp;PE#           0  Coeff
<br>
rank 0 in job 1  hydra127_34565   caused collective abort of all ranks
<br>
&nbsp;&nbsp;exit status of rank 0: return code 1
<br>
<p>I am struggling to find the error in my code. can anybody suggest me where I
<br>
messed up.
<br>
<p>Thanks and Regards,
<br>
Ash
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15744/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15745.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15743.php">Ole Widar Saastad: "[OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15747.php">Jeff Squyres: "Re: [OMPI users] Fatal error while running the code"</a>
<li><strong>Reply:</strong> <a href="15747.php">Jeff Squyres: "Re: [OMPI users] Fatal error while running the code"</a>
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
