<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 11:34:32 2007" -->
<!-- isoreceived="20070823153432" -->
<!-- sent="Thu, 23 Aug 2007 09:33:46 -0600" -->
<!-- isosent="20070823153346" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_FILE_NULL" -->
<!-- id="750324B3-6C77-4BD6-BF35-A5728F393559_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fajnpj$lbj$1_at_sea.gmane.org" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 11:33:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3914.php">Bernd Schubert: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>Previous message:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>In reply to:</strong> <a href="3911.php">Bernd Schubert: "[OMPI users] MPI_FILE_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3914.php">Bernd Schubert: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>Reply:</strong> <a href="3914.php">Bernd Schubert: "Re: [OMPI users] MPI_FILE_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 23, 2007, at 4:33 AM, Bernd Schubert wrote:
<br>
<p><span class="quotelev1">&gt; I need to compile a benchmarking program and absolutely so far do  
</span><br>
<span class="quotelev1">&gt; not have
</span><br>
<span class="quotelev1">&gt; any experience with any MPI.
</span><br>
<span class="quotelev1">&gt; However, this looks like a general open-mpi problem, doesn't it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bschubert_at_lanczos MPI_IO&gt; make
</span><br>
<span class="quotelev1">&gt; cp ../globals.f90 ./; mpif90 -O2 -c ../globals.f90
</span><br>
<span class="quotelev1">&gt; mpif90 -O2 -c main.f90
</span><br>
<span class="quotelev1">&gt; mpif90 -O2 -c reader.f90
</span><br>
<span class="quotelev1">&gt; fortcom: Error: reader.f90, line 24: This name does not have a  
</span><br>
<span class="quotelev1">&gt; type, and
</span><br>
<span class="quotelev1">&gt; must have an explicit type.   [MPI_FILE_NULL]
</span><br>
<span class="quotelev1">&gt; call MPI_File_set_errhandler (MPI_FILE_NULL, MPI_ERRORS_ARE_FATAL,  
</span><br>
<span class="quotelev1">&gt; ierror)
</span><br>
<p>Yeah, that looks like a mistake on our part.  It will be fixed in  
<br>
Open MPI 1.2.4.  Your quick fix should work until then.
<br>
<p><p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3914.php">Bernd Schubert: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>Previous message:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>In reply to:</strong> <a href="3911.php">Bernd Schubert: "[OMPI users] MPI_FILE_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3914.php">Bernd Schubert: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>Reply:</strong> <a href="3914.php">Bernd Schubert: "Re: [OMPI users] MPI_FILE_NULL"</a>
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
