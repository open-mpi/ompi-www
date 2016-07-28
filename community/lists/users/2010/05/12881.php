<?
$subject_val = "Re: [OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 17:20:35 2010" -->
<!-- isoreceived="20100504212035" -->
<!-- sent="Tue, 04 May 2010 17:20:15 -0400" -->
<!-- isosent="20100504212015" -->
<!-- name="Cole, Derek E" -->
<!-- email="derek.e.cole_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran derived types" -->
<!-- id="063591A1FD6A8143ACC2CA38F4C1B5EF88F09BF3_at_HVXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="z2g48b85f861005041225yb5870debiaefefce2fa5d8270_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-05-04 17:20:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12882.php">Vedran Coralic: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12880.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12875.php">Vedran Coralic: "[OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12882.php">Vedran Coralic: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12882.php">Vedran Coralic: "Re: [OMPI users] Fortran derived types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Others may be able to chime in more, because I am no fortran expert, but you probably will have to copy it into a contiguous block in memory. Working with derived types is hard, especially if they are not uniform. MPI can probably technically handle it, but the programming effort is harder.  Are your arrays all equal length, same type?
<br>
<p>Derek
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Vedran Coralic
<br>
Sent: Tuesday, May 04, 2010 3:25 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Fortran derived types
<br>
<p>Hello,
<br>
<p>In my Fortran 90 code I use several custom defined derived types. Amongst them is a vector of arrays, i.e. v(:)%f(:,:,:). I am wondering what the proper way of sending this data structure from one processor to another is. Is the best way to just restructure the data by copying it into a vector and sending that or is there a simpler way possible by defining an MPI derived type that can handle it?
<br>
<p>I looked into the latter myself but so far, I have only found the solution for a scalar fortran derived type and the methodology that was suggested in that case did not seem naturally extensible to the vector case.
<br>
<p><p>Thanks any help you can give me!
<br>
<p><pre>
--
Vedran Coralic
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12882.php">Vedran Coralic: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12880.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12875.php">Vedran Coralic: "[OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12882.php">Vedran Coralic: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12882.php">Vedran Coralic: "Re: [OMPI users] Fortran derived types"</a>
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
