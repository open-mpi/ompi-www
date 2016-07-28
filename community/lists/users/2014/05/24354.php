<?
$subject_val = "Re: [OMPI users] bug in MPI_File_set_view?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 11:25:51 2014" -->
<!-- isoreceived="20140514152551" -->
<!-- sent="Wed, 14 May 2014 08:24:11 -0700" -->
<!-- isosent="20140514152411" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_set_view?" -->
<!-- id="687CC7F3-66EA-410E-BC06-DB4F7EFF6F0A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAB2ovovaZ0jLP07bYaDjm5Ju--5NgpZDTX6R-VjK9ucSQQMBxA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-14 11:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24353.php">Bennet Fauber: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24353.php">Bennet Fauber: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24373.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24373.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our initial thinking was first half of June, but that is subject to change depending on severity of reported errors. FWIW: I don't believe we made any romio changes between 1.8.1 and the current 1.8.2 state, so using 1.8.1 should be a valid test.
<br>
<p><p>On May 14, 2014, at 8:16 AM, Bennet Fauber &lt;bennet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is there an ETA for 1.8.2 general release instead of snapshot?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,  -- bennet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 14, 2014 at 10:17 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You might give it a try with 1.8.1 or the nightly snapshot from 1.8.2 - we updated ROMIO since the 1.6 series, and whatever fix is required may be in the newer version
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 14, 2014, at 6:52 AM, CANELA-XANDRI Oriol &lt;Oriol.CAnela-Xandri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using MPI IO for writing/reading  a block cyclic distribution matrix into a file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It works fine except when there is some MPI threads with no data (i.e. when the matrix is small enough, or the block size is big enough that some processes in the grid do not have any matrix block). In this case, I receive an error when calling MPI_File_set_view saying that the data cannot be freed. I tried with 1.3 and 1.6 versions. When I try with MPICH it works without errors. Could this be a bug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My function is (where nBlockRows/nBlockCols define the size of the blocks, nGlobRows/nGlobCols define the global size of the matrix, nProcRows/nProcCols define the dimensions of the process grid, and fname is the name of the file.):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void Matrix::writeMatrixMPI(std::string fname) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int dims[] = {this-&gt;nGlobRows, this-&gt;nGlobCols};
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int dargs[] = {this-&gt;nBlockRows, this-&gt;nBlockCols};
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int distribs[] = {MPI_DISTRIBUTE_CYCLIC, MPI_DISTRIBUTE_CYCLIC};
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int dim[] = {communicator-&gt;nProcRows, communicator-&gt;nProcCols};
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char nat[] = &quot;native&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Datatype dcarray;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File cFile;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Type_create_darray(communicator-&gt;mpiNumTasks, communicator-&gt;mpiRank, 2, dims, distribs, dargs, dim, MPI_ORDER_FORTRAN, MPI_DOUBLE, &amp;dcarray);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Type_commit(&amp;dcarray);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::vector&lt;char&gt; fn(fname.begin(), fname.end());
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fn.push_back('\0');
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rc = MPI_File_open(MPI_COMM_WORLD, &amp;fn[0], MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;cFile);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if(rc){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   std::stringstream ss;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ss &lt;&lt; &quot;Error: Failed to open file: &quot; &lt;&lt; rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   misc.error(ss.str(), 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_File_set_view(cFile, 0, MPI_DOUBLE, dcarray, nat, MPI_INFO_NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_File_write_all(cFile, this-&gt;m, this-&gt;nRows*this-&gt;nCols, MPI_DOUBLE, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_close(&amp;cFile);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Type_free(&amp;dcarray);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oriol
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The University of Edinburgh is a charitable body, registered in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scotland, with registration number SC005336.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24353.php">Bennet Fauber: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24353.php">Bennet Fauber: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24373.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24373.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
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
