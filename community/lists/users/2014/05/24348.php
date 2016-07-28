<?
$subject_val = "Re: [OMPI users] bug in MPI_File_set_view?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 10:19:18 2014" -->
<!-- isoreceived="20140514141918" -->
<!-- sent="Wed, 14 May 2014 07:17:40 -0700" -->
<!-- isosent="20140514141740" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_set_view?" -->
<!-- id="C9B3B17C-9353-4AC3-B2B1-4603FB651219_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="62214d0171224bb0a647e7289f4f5747_at_AMSPR05MB264.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_File_set_view?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 10:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24349.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24347.php">CANELA-XANDRI Oriol: "[OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24347.php">CANELA-XANDRI Oriol: "[OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24349.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24349.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24353.php">Bennet Fauber: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might give it a try with 1.8.1 or the nightly snapshot from 1.8.2 - we updated ROMIO since the 1.6 series, and whatever fix is required may be in the newer version
<br>
<p><p>On May 14, 2014, at 6:52 AM, CANELA-XANDRI Oriol &lt;Oriol.CAnela-Xandri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using MPI IO for writing/reading  a block cyclic distribution matrix into a file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works fine except when there is some MPI threads with no data (i.e. when the matrix is small enough, or the block size is big enough that some processes in the grid do not have any matrix block). In this case, I receive an error when calling MPI_File_set_view saying that the data cannot be freed. I tried with 1.3 and 1.6 versions. When I try with MPICH it works without errors. Could this be a bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My function is (where nBlockRows/nBlockCols define the size of the blocks, nGlobRows/nGlobCols define the global size of the matrix, nProcRows/nProcCols define the dimensions of the process grid, and fname is the name of the file.):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void Matrix::writeMatrixMPI(std::string fname) {
</span><br>
<span class="quotelev1">&gt;  int dims[] = {this-&gt;nGlobRows, this-&gt;nGlobCols};
</span><br>
<span class="quotelev1">&gt;  int dargs[] = {this-&gt;nBlockRows, this-&gt;nBlockCols};
</span><br>
<span class="quotelev1">&gt;  int distribs[] = {MPI_DISTRIBUTE_CYCLIC, MPI_DISTRIBUTE_CYCLIC};
</span><br>
<span class="quotelev1">&gt;  int dim[] = {communicator-&gt;nProcRows, communicator-&gt;nProcCols};
</span><br>
<span class="quotelev1">&gt;  char nat[] = &quot;native&quot;;
</span><br>
<span class="quotelev1">&gt;  int rc;
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype dcarray;
</span><br>
<span class="quotelev1">&gt;  MPI_File cFile;
</span><br>
<span class="quotelev1">&gt;  MPI_Status status;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Type_create_darray(communicator-&gt;mpiNumTasks, communicator-&gt;mpiRank, 2, dims, distribs, dargs, dim, MPI_ORDER_FORTRAN, MPI_DOUBLE, &amp;dcarray);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_commit(&amp;dcarray);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  std::vector&lt;char&gt; fn(fname.begin(), fname.end());
</span><br>
<span class="quotelev1">&gt;  fn.push_back('\0');
</span><br>
<span class="quotelev1">&gt;  rc = MPI_File_open(MPI_COMM_WORLD, &amp;fn[0], MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;cFile);
</span><br>
<span class="quotelev1">&gt;  if(rc){
</span><br>
<span class="quotelev1">&gt;    std::stringstream ss;
</span><br>
<span class="quotelev1">&gt;    ss &lt;&lt; &quot;Error: Failed to open file: &quot; &lt;&lt; rc;
</span><br>
<span class="quotelev1">&gt;    misc.error(ss.str(), 0);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_File_set_view(cFile, 0, MPI_DOUBLE, dcarray, nat, MPI_INFO_NULL);
</span><br>
<span class="quotelev1">&gt;    MPI_File_write_all(cFile, this-&gt;m, this-&gt;nRows*this-&gt;nCols, MPI_DOUBLE, &amp;status);    
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_File_close(&amp;cFile);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_free(&amp;dcarray);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oriol
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; The University of Edinburgh is a charitable body, registered in
</span><br>
<span class="quotelev1">&gt; Scotland, with registration number SC005336.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24349.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24347.php">CANELA-XANDRI Oriol: "[OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24347.php">CANELA-XANDRI Oriol: "[OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24349.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24349.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24353.php">Bennet Fauber: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
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
