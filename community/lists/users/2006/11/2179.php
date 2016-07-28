<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 16 16:11:38 2006" -->
<!-- isoreceived="20061116211138" -->
<!-- sent="Thu, 16 Nov 2006 16:11:14 -0500 (EST)" -->
<!-- isosent="20061116211114" -->
<!-- name="Yu Chen" -->
<!-- email="chen_at_[hidden]" -->
<!-- subject="[OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h" -->
<!-- id="Pine.LNX.4.64.0611161552251.28024_at_iridium.hhmi.umbc.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Yu Chen (<em>chen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-16 16:11:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2180.php">Åke Sandgren: "[OMPI users] Problems running Intel Mpi Benchmark (formerly PMB) with ompi	1.1.2 and 1.2b1"</a>
<li><strong>Previous message:</strong> <a href="2178.php">Geoffrey Irving: "[OMPI users] open mpi doesn't have OMPI_VERSION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<li><strong>Reply:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Not sure if it's openmpi related or the program I am installing.
<br>
<p>I installed openmpi using g95 as F77 and F90 compiler with flags 
<br>
&quot;-ffixed-line-length-132  -fno-underscoring&quot; on PowerMac G5 with OS X 
<br>
10.4 without any problems.
<br>
<p>Then I tried to compile this program (CYANA if it matters, it's a 
<br>
molucular caculation program) with openmpi generated mpif90 wrapper with 
<br>
same flags, then it gave out the following errors, wondering if someone 
<br>
has idea about this, googled it without much help. Thanks a lot in 
<br>
advance.
<br>
<p>.....
<br>
.....
<br>
../../etc/prepare -c -Dg95 -Dmpi -Dapple -Dapple_ompig95-withflags -w 
<br>
inclan.for &gt; inclan.f
<br>
/sw/mpich2_g95_withflags/bin/mpif90 -c -ffixed-line-length-132 
<br>
-fno-underscoring inclan.f
<br>
In file mpif.h:420
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at inclan.f:26
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAVE /MPIPRIV1/,/MPIPRIV2/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: SAVE statement at (1) follows blanket SAVE statement
<br>
In file mpif.h:423
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at inclan.f:26
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAVE   /MPIPRIVC/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: SAVE statement at (1) follows blanket SAVE statement
<br>
make[2]: *** [inclan.o] Error 1
<br>
.....
<br>
.....
<br>
<p><p><p><p><p>===========================================
<br>
Yu Chen
<br>
Howard Hughes Medical Institute
<br>
Chemistry Building, Rm 182
<br>
University of Maryland at Baltimore County
<br>
1000 Hilltop Circle
<br>
Baltimore, MD 21250
<br>
<p>phone: 	(410)455-6347 (primary)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(410)455-2718 (secondary)
<br>
fax: 	(410)455-1174
<br>
email: 	chen_at_[hidden]
<br>
===========================================
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2180.php">Åke Sandgren: "[OMPI users] Problems running Intel Mpi Benchmark (formerly PMB) with ompi	1.1.2 and 1.2b1"</a>
<li><strong>Previous message:</strong> <a href="2178.php">Geoffrey Irving: "[OMPI users] open mpi doesn't have OMPI_VERSION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<li><strong>Reply:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
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
