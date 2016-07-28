<?
$subject_val = "Re: [OMPI users] Can compute, but can not output files";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 11:14:49 2010" -->
<!-- isoreceived="20100503151449" -->
<!-- sent="Mon, 3 May 2010 11:14:41 -0400" -->
<!-- isosent="20100503151441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can compute, but can not output files" -->
<!-- id="D0E44F95-B9E1-4CF4-B82C-7F16B0991A3A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44390eb8.c9f.12851b88df4.Coremail.jzhj01_at_126.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can compute, but can not output files<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 11:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12869.php">Paul Kapinos: "[OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interface mpi.mod"</a>
<li><strong>Previous message:</strong> <a href="12867.php">Alan: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12863.php">JiangjunZheng: "[OMPI users] Can compute, but can not output files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12870.php">Mohamad Chaarawi: "Re: [OMPI users] Can compute, but can not output files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2010, at 10:36 PM, JiangjunZheng wrote:
<br>
<p><span class="quotelev1">&gt; I am using Rocks+openmpi+hdf5+pvfs2. The soft on the rocks+pvfs2 cluster will output hdf5 files after computing. However, when the output starts, it shows errors:
</span><br>
<span class="quotelev1">&gt; [root_at_nanohv pvfs2]# ./hdf5_mpio DH-ey-001400.20.h5
</span><br>
<span class="quotelev1">&gt; Testing simple C MPIO program with 1 processes accessing file DH-ey-001400.20.h5
</span><br>
<span class="quotelev1">&gt; (Filename can be specified via program argument)
</span><br>
<span class="quotelev1">&gt; Proc 0: hostname=nanohv.columbia.edu
</span><br>
<span class="quotelev1">&gt; Proc 0: MPI_File_open failed (MPI_ERR_IO: input/output error)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If run in a none shared folder on the main node, the program goes well. it shows:
</span><br>
<span class="quotelev1">&gt; Proc 0: hostname=nanohv.columbia.edu
</span><br>
<span class="quotelev1">&gt; Proc 0: all tests passed
</span><br>
<p>This seems to indicate that the file failed to open for some reason in your first test.
<br>
<p>Given that this is an HDF5 test program, you might want to ping them for more details...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12869.php">Paul Kapinos: "[OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interface mpi.mod"</a>
<li><strong>Previous message:</strong> <a href="12867.php">Alan: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12863.php">JiangjunZheng: "[OMPI users] Can compute, but can not output files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12870.php">Mohamad Chaarawi: "Re: [OMPI users] Can compute, but can not output files"</a>
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
