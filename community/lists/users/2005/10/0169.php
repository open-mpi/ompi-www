<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 10 06:58:54 2005" -->
<!-- isoreceived="20051010115854" -->
<!-- sent="Mon, 10 Oct 2005 07:58:32 -0400" -->
<!-- isosent="20051010115832" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MPI ABI" -->
<!-- id="434A5768.5000404_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="434A433E.1090100_at_fft.be" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-10 06:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0170.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0168.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0168.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0170.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0170.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Toon,
<br>
<p>Toon Knapen wrote:
<br>
<span class="quotelev1">&gt; If only the 'named constants' are a problem: It's very easy to create a
</span><br>
<span class="quotelev1">&gt; few functions (like 'int mpi_comm_world()') that will return the correct
</span><br>
<span class="quotelev1">&gt; value for a given implementation.
</span><br>
<p>This is not the only problem, but this one can be fixed more or less 
<br>
easily by having the MPI forum defining these constants with arbitrary 
<br>
values.
<br>
<p>The Fortran interface is actually worse than the C interface. Instead of 
<br>
using pointers to opaque structures, the Fortran interface may use 
<br>
integers as indexes into array of structures, into array of pointers, as 
<br>
pointers casted to integers, etc.
<br>
<p>Even if you implement all of the wrappers in a MorphMPI approach, 
<br>
nothing guarantee you that you can take an Fortran MorphMPI compliant 
<br>
application and link it with a MorhMPI compliant MPI library compiled 
<br>
with a different Fortran compiler. Fortran is evil.
<br>
<p><span class="quotelev1">&gt; Any other alternative (cfr. MorphMPI that was discussed some months ago)
</span><br>
<span class="quotelev1">&gt; is much more complicated and finally I'm not convinced it provides any
</span><br>
<span class="quotelev1">&gt; added value in respect to the solution mentioned above.
</span><br>
<p>There are only 2 ways to achieve ABI compatibility:
<br>
1) you impose/agree on a single one.
<br>
2) you translate between several ABIs at runtime.
<br>
<p>Politically speaking, 1) will never happen. MorphMPI could do 2), but 
<br>
it's not a silver bullet.
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0170.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0168.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0168.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0170.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0170.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
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
