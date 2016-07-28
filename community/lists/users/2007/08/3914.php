<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 13:01:54 2007" -->
<!-- isoreceived="20070823170154" -->
<!-- sent="Thu, 23 Aug 2007 19:01:29 +0200" -->
<!-- isosent="20070823170129" -->
<!-- name="Bernd Schubert" -->
<!-- email="bs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_FILE_NULL" -->
<!-- id="fakeh9$bch$1_at_sea.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="750324B3-6C77-4BD6-BF35-A5728F393559_at_lanl.gov" -->
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
<strong>From:</strong> Bernd Schubert (<em>bs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 13:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3915.php">Tim Prins: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Previous message:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 23, 2007, at 4:33 AM, Bernd Schubert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I need to compile a benchmarking program and absolutely so far do
</span><br>
<span class="quotelev2">&gt;&gt; not have
</span><br>
<span class="quotelev2">&gt;&gt; any experience with any MPI.
</span><br>
<span class="quotelev2">&gt;&gt; However, this looks like a general open-mpi problem, doesn't it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bschubert_at_lanczos MPI_IO&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; cp ../globals.f90 ./; mpif90 -O2 -c ../globals.f90
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -O2 -c main.f90
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -O2 -c reader.f90
</span><br>
<span class="quotelev2">&gt;&gt; fortcom: Error: reader.f90, line 24: This name does not have a
</span><br>
<span class="quotelev2">&gt;&gt; type, and
</span><br>
<span class="quotelev2">&gt;&gt; must have an explicit type.   [MPI_FILE_NULL]
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_File_set_errhandler (MPI_FILE_NULL, MPI_ERRORS_ARE_FATAL,
</span><br>
<span class="quotelev2">&gt;&gt; ierror)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, that looks like a mistake on our part.  It will be fixed in
</span><br>
<span class="quotelev1">&gt; Open MPI 1.2.4.  Your quick fix should work until then.
</span><br>
<p>Great, thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3915.php">Tim Prins: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Previous message:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
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
