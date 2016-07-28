<?
$subject_val = "Re: [OMPI devel] MPI_Reduce() is losing precision";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 04:22:36 2012" -->
<!-- isoreceived="20121015082236" -->
<!-- sent="Mon, 15 Oct 2012 08:22:30 +0000" -->
<!-- isosent="20121015082230" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Reduce() is losing precision" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903BD3E0C_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E6D5D6AF68E4194BAC1905E29435983190C54B47_at_365EXCH-MBX-P3.nbttech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Reduce() is losing precision<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 04:22:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11598.php">N.M. Maclaren: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>Previous message:</strong> <a href="11596.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>In reply to:</strong> <a href="11596.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce() is losing precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11598.php">N.M. Maclaren: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>Reply:</strong> <a href="11598.php">N.M. Maclaren: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Santhosh,
<br>
<p>&nbsp;
<br>
<p>Numeric differences are to be expected with parallel applications. The basic
<br>
reason for that is that on many architectures floating-point operations are
<br>
performed using higher internal precision than that of the arguments and
<br>
only the final result is rounded back to the lower output precision. When
<br>
performing the same operation in parallel, intermediate results are
<br>
communicated using the lower precision and thus the final result could
<br>
differ. How much it would differ depends on the stability of the algorithm -
<br>
it could be a slight difference in the last 1-2 significant bits or it could
<br>
be a completely different result (e.g. when integrating chaotic dynamic
<br>
systems).
<br>
<p>&nbsp;
<br>
<p>In your particular case with one process the MPI_Reduce is actually reduced
<br>
to a no-op and the summing is done entirely in the preceding loop. With two
<br>
processes the sum is broken into two parts which are computed with higher
<br>
precision but converted to float before being communicated.
<br>
<p>&nbsp;
<br>
<p>You could try to &quot;cure&quot; this (non-problem) by telling your compiler to not
<br>
use higher precision for intermediate results.
<br>
<p>&nbsp;
<br>
<p>Hope that helps,
<br>
<p>Hristo
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
 
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
Behalf Of Santhosh Kokala
Sent: Monday, October 15, 2012 8:07 AM
To: Open MPI Developers
Subject: [OMPI devel] MPI_Reduce() is losing precision
 
Hi All,
I am having a strange problem with the floating precision. I get correct
precision when I launch with one process, but when the same code is launched
with 2 or more process I am losing precision in MPI_Redcue(., MPI_FLOAT,
MPI_SUM..); call. Output from my code
 
(admin)host:~$ mpirun -np 1 string 10 0.1 0.9 10 3
sum = 1
sum = 0.999992
sum = 1.00043
 
(admin)host:~$ mpirun -np 2 string 10 0.1 0.9 10 3
sum = 1
sum = 1
sum = 1.00049
 
As you can see I am loosing precision. Can someone help me fix this code?
Last parameter to my code is the number of iterations. I am attaching source
code to this email.
 
Santhosh
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11597/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11598.php">N.M. Maclaren: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>Previous message:</strong> <a href="11596.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>In reply to:</strong> <a href="11596.php">Santhosh Kokala: "[OMPI devel] MPI_Reduce() is losing precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11598.php">N.M. Maclaren: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>Reply:</strong> <a href="11598.php">N.M. Maclaren: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
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
