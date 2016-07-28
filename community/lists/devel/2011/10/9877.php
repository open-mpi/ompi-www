<?
$subject_val = "[OMPI devel] ibm/io/file_status_get_count";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 28 01:58:19 2011" -->
<!-- isoreceived="20111028055819" -->
<!-- sent="Fri, 28 Oct 2011 01:59:14 -0400" -->
<!-- isosent="20111028055914" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] ibm/io/file_status_get_count" -->
<!-- id="4EAA44B2.1060201_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] ibm/io/file_status_get_count<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-28 01:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9878.php">Jeff Squyres: "[OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Previous message:</strong> <a href="9876.php">George Bosilca: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9896.php">Jeff Squyres: "Re: [OMPI devel] ibm/io/file_status_get_count"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9896.php">Jeff Squyres: "Re: [OMPI devel] ibm/io/file_status_get_count"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In our MTT testing, we see ibm/io/file_status_get_count fail 
<br>
occasionally with:
<br>
<p>File locking failed in ADIOI_Set_lock(fd A,cmd F_SETLKW/7,type F_RDLCK/0,whence 0) with return value
<br>
FFFFFFFF and errno 5.
<br>
- If the file system is NFS, you need to use NFS version 3, ensure that the lockd daemon is running
<br>
on all the machines, and mount the directory with the 'noac' option (no attribute caching).
<br>
- If the file system is LUSTRE, ensure that the directory is mounted with the 'flock' option.
<br>
ADIOI_Set_lock:: Input/output error
<br>
ADIOI_Set_lock:offset 0, length 1
<br>
<p>One of the curious things (to us) about this test is that no one else 
<br>
appears to run it.  Looking back through a lot of MTT results, 
<br>
essentially the only results reported are Oracle.  Almost no non-Oracle 
<br>
results for this test have been reported in the last few months.  Is 
<br>
there something special about this test we should know about?
<br>
<p>P.S.  We're also interested in understanding the error message better.  
<br>
I suppose that's more appropriately taken up with ROMIO folks, which I 
<br>
will do, but if anyone on this list has useful information I'd love to 
<br>
hear it.  The error apparently comes when MPI_File_get_size sets a 
<br>
lock.  Each process has its own file and the test usually passes, so 
<br>
it's unclear to me what the problem is.  Further, the error message 
<br>
discussing NFS and Lustre strikes me as rather speculative.  We tend to 
<br>
run these tests repeatedly on the same file systems from the same test 
<br>
nodes.  Anyone have any idea how sound the NFSv3/lockd/noac advice is or 
<br>
what the real issue is here?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9878.php">Jeff Squyres: "[OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Previous message:</strong> <a href="9876.php">George Bosilca: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9896.php">Jeff Squyres: "Re: [OMPI devel] ibm/io/file_status_get_count"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9896.php">Jeff Squyres: "Re: [OMPI devel] ibm/io/file_status_get_count"</a>
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
