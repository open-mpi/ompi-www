<?
$subject_val = "Re: [OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 08:19:43 2010" -->
<!-- isoreceived="20100507121943" -->
<!-- sent="Fri, 07 May 2010 08:19:31 -0400" -->
<!-- isosent="20100507121931" -->
<!-- name="Cole, Derek E" -->
<!-- email="derek.e.cole_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran derived types" -->
<!-- id="063591A1FD6A8143ACC2CA38F4C1B5EF88FAEA5F_at_HVXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1273119846.8881.66.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran derived types<br>
<strong>From:</strong> Cole, Derek E (<em>derek.e.cole_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 08:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12961.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12959.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12965.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12965.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have any hard numbers for fortran, but I do for C structures. Using C structures with some other C functionality (pointer functions, etc etc) can yield up to a 3x slowdown at worst, and at best, had a 15% slowdown. I have seen similar results in fortran, but don't have the benchmark results for it. In either language, nothing beats raw data types for performance. Just my .02, I know some out there may not agree.
<br>
<p>Derek
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Terry Frankcombe
<br>
Sent: Thursday, May 06, 2010 12:24 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Fortran derived types
<br>
<p>Hi Derek
<br>
<p>On Wed, 2010-05-05 at 13:05 -0400, Cole, Derek E wrote:
<br>
<span class="quotelev1">&gt; In general, even in your serial fortran code, you're already taking a 
</span><br>
<span class="quotelev1">&gt; performance hit using a derived type.
</span><br>
<p>Do you have any numbers to back that up?
<br>
<p>Ciao
<br>
Terry
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12961.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12959.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12965.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12965.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
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
