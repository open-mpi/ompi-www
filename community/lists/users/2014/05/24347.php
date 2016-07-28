<?
$subject_val = "[OMPI users] bug in MPI_File_set_view?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 09:53:12 2014" -->
<!-- isoreceived="20140514135312" -->
<!-- sent="Wed, 14 May 2014 13:52:53 +0000" -->
<!-- isosent="20140514135253" -->
<!-- name="CANELA-XANDRI Oriol" -->
<!-- email="Oriol.CAnela-Xandri_at_[hidden]" -->
<!-- subject="[OMPI users] bug in MPI_File_set_view?" -->
<!-- id="62214d0171224bb0a647e7289f4f5747_at_AMSPR05MB264.eurprd05.prod.outlook.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] bug in MPI_File_set_view?<br>
<strong>From:</strong> CANELA-XANDRI Oriol (<em>Oriol.CAnela-Xandri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 09:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24348.php">Ralph Castain: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24346.php">Ralph Castain: "Re: [OMPI users] errors while making openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24348.php">Ralph Castain: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24348.php">Ralph Castain: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am using MPI IO for writing/reading  a block cyclic distribution matrix into a file.
<br>
<p>It works fine except when there is some MPI threads with no data (i.e. when the matrix is small enough, or the block size is big enough that some processes in the grid do not have any matrix block). In this case, I receive an error when calling MPI_File_set_view saying that the data cannot be freed. I tried with 1.3 and 1.6 versions. When I try with MPICH it works without errors. Could this be a bug?
<br>
<p>My function is (where nBlockRows/nBlockCols define the size of the blocks, nGlobRows/nGlobCols define the global size of the matrix, nProcRows/nProcCols define the dimensions of the process grid, and fname is the name of the file.):
<br>
<p>void Matrix::writeMatrixMPI(std::string fname) {
<br>
&nbsp;&nbsp;int dims[] = {this-&gt;nGlobRows, this-&gt;nGlobCols};
<br>
&nbsp;&nbsp;int dargs[] = {this-&gt;nBlockRows, this-&gt;nBlockCols};
<br>
&nbsp;&nbsp;int distribs[] = {MPI_DISTRIBUTE_CYCLIC, MPI_DISTRIBUTE_CYCLIC};
<br>
&nbsp;&nbsp;int dim[] = {communicator-&gt;nProcRows, communicator-&gt;nProcCols};
<br>
&nbsp;&nbsp;char nat[] = &quot;native&quot;;
<br>
&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;MPI_Datatype dcarray;
<br>
&nbsp;&nbsp;MPI_File cFile;
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;MPI_Type_create_darray(communicator-&gt;mpiNumTasks, communicator-&gt;mpiRank, 2, dims, distribs, dargs, dim, MPI_ORDER_FORTRAN, MPI_DOUBLE, &amp;dcarray);
<br>
&nbsp;&nbsp;MPI_Type_commit(&amp;dcarray);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;std::vector&lt;char&gt; fn(fname.begin(), fname.end());
<br>
&nbsp;&nbsp;fn.push_back('\0');
<br>
&nbsp;&nbsp;rc = MPI_File_open(MPI_COMM_WORLD, &amp;fn[0], MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;cFile);
<br>
&nbsp;&nbsp;if(rc){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::stringstream ss;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ss &lt;&lt; &quot;Error: Failed to open file: &quot; &lt;&lt; rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;misc.error(ss.str(), 0);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_set_view(cFile, 0, MPI_DOUBLE, dcarray, nat, MPI_INFO_NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_write_all(cFile, this-&gt;m, this-&gt;nRows*this-&gt;nCols, MPI_DOUBLE, &amp;status);    
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_File_close(&amp;cFile);
<br>
&nbsp;&nbsp;MPI_Type_free(&amp;dcarray);
<br>
}
<br>
<p>Best regards,
<br>
<p>Oriol
<br>
<p><pre>
-- 
The University of Edinburgh is a charitable body, registered in
Scotland, with registration number SC005336.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24348.php">Ralph Castain: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24346.php">Ralph Castain: "Re: [OMPI users] errors while making openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24348.php">Ralph Castain: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24348.php">Ralph Castain: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
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
