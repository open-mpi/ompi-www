<?
$subject_val = "[OMPI users] could oversubscription clobber an executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 01:00:39 2009" -->
<!-- isoreceived="20090514050039" -->
<!-- sent="Thu, 14 May 2009 01:00:15 -0400" -->
<!-- isosent="20090514050015" -->
<!-- name="Valmor de Almeida" -->
<!-- email="val.lists_at_[hidden]" -->
<!-- subject="[OMPI users] could oversubscription clobber an executable?" -->
<!-- id="4A0BA55F.3050807_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] could oversubscription clobber an executable?<br>
<strong>From:</strong> Valmor de Almeida (<em>val.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 01:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9331.php">Camelia Avram: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="9329.php">&#197;ke Sandgren: "[OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9342.php">John Hearns: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am wondering whether light oversubscription could lead to a clobbered
<br>
program. The particular case is a fortran 77 (for the most part) code I
<br>
am working with that can only run on powers of 2 processes (starting
<br>
with power 1). When I run the program on my single-processor laptop, it
<br>
shows some erratic behavior, namely the fortran system calls that create
<br>
directories and rename files, etc. do not work after some point in the
<br>
program. I only use -np 2 and the hostfile is
<br>
<p>'hostname' slots=1 max_slots=1
<br>
<p>Changing the dimension of some larger arrays in the program do affect
<br>
the point where the system calls do not work. The status of the mpi
<br>
calls is normal; no errors reported. I am using gfortran 4.3.2 and
<br>
ompi-1.3.2
<br>
<p>The program runs normally on my workstation with 4 processors with the
<br>
same compiler/ompi versions.
<br>
<p>Thanks for any inputs.
<br>
<p><pre>
--
Valmor
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9331.php">Camelia Avram: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="9329.php">&#197;ke Sandgren: "[OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9342.php">John Hearns: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
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
