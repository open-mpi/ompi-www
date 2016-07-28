<?
$subject_val = "Re: [OMPI users] Anyone with Visual Studio + MPI Experience";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 16:46:21 2011" -->
<!-- isoreceived="20110630204621" -->
<!-- sent="Thu, 30 Jun 2011 13:46:46 -0700" -->
<!-- isosent="20110630204646" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyone with Visual Studio + MPI Experience" -->
<!-- id="580DEAC013D9134283D52B6610071A2E8F3CE7_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E0CDF9C.70704_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anyone with Visual Studio + MPI Experience<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 16:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16795.php">David Warren: "[OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>In reply to:</strong> <a href="16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16796.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Reply:</strong> <a href="16796.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice,
<br>
<p>It might or might not matter, but on your older system you
<br>
may have used &quot;LD_LIBRARY_PATH&quot; but on windows you need &quot;PATH&quot;
<br>
to contain the PATH.
<br>
<p>I only mention this because you said it runs in one environment,
<br>
but not the other.
<br>
<p>Joe
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Prentice Bisbal
<br>
Sent: Thursday, June 30, 2011 1:42 PM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] Anyone with Visual Studio + MPI Experience
<br>
<p>Does anyone on this list have experience using MS Visual Studio for MPI
<br>
development? I'm supporting a Windows user who has been doing Fortran
<br>
programming on Windows using an ANCIENT version of Digital Visual
<br>
Fortran (I know, I know - using &quot;ancient&quot; and &quot;Digital&quot; in the same
<br>
sentence is redundant.)
<br>
<p>Well, we are upgrading his equally ancient laptopa new one with Windows
<br>
7, so we installed Intel Visual Fortran (direct descendent of DVF) and
<br>
Visual Studio 2010, and to be honest, I feel like a fish out of water
<br>
using VS 2010. It took me a longer than I care to admit to figure out
<br>
how to specify the include and linker paths.
<br>
<p>Right now, I'm working with the Intel MPI libraries, but plan on
<br>
installing OpenMPI, too, once I figure out VS 2010.
<br>
<p>Can anyone tell me how to configure visual studio so that when you click
<br>
on the little &quot;play&quot; icon to build/run the code, it will call mpiexec
<br>
automatically? Right now, it compiles fine, but throws errors when the
<br>
program executes because it doesn't have the right environment setup
<br>
because it's not being executed by mpiexec. It runs fine when I execute
<br>
it with mpiexec or wmpiexec.
<br>
<p><pre>
-- 
Prentice
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16795.php">David Warren: "[OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>In reply to:</strong> <a href="16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16796.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Reply:</strong> <a href="16796.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
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
