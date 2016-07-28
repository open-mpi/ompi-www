<?
$subject_val = "Re: [OMPI users] ADIOI_Set_lock failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 19:44:25 2008" -->
<!-- isoreceived="20080119004425" -->
<!-- sent="Fri, 18 Jan 2008 19:44:12 -0500" -->
<!-- isosent="20080119004412" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ADIOI_Set_lock failure" -->
<!-- id="12309BD6-F2CB-4B21-B4A0-A9E280F19E2A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="537FA7A0-208D-4BC0-8C7B-2729923D87ED_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ADIOI_Set_lock failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 19:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4853.php">Jeff Squyres: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4851.php">Berit Hinnemann: "[OMPI users] behi is out of the office."</a>
<li><strong>In reply to:</strong> <a href="4844.php">Brock Palen: "[OMPI users] ADIOI_Set_lock failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4934.php">Robert Latham: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>Reply:</strong> <a href="4934.php">Robert Latham: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, you might want to ask the ROMIO maintainers if this is a known  
<br>
problem.  I unfortunately have no idea.  :-\
<br>
<p><p>On Jan 16, 2008, at 12:12 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; Using OpenMPI-1.2.3+pgi-7.0+hdf5 parallel + lustre is giving me the
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File locking failed in ADIOI_Set_lock. If the file system is NFS, you
</span><br>
<span class="quotelev1">&gt; need to use NFS version 3, ensure that the lockd daemon is running on
</span><br>
<span class="quotelev1">&gt; all the machines, and mount the directory with the 'noac' option (no
</span><br>
<span class="quotelev1">&gt; attribute caching).
</span><br>
<span class="quotelev1">&gt; [nyx357.engin.umich.edu:21186] MPI_ABORT invoked on rank 0 in
</span><br>
<span class="quotelev1">&gt; communicator MPI_COMM_WORLD with errorcode 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else managed to use hdf5+lustre+openMPI's romio setup?  I
</span><br>
<span class="quotelev1">&gt; can do MPI_File_wirte and MPI_File_read just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4853.php">Jeff Squyres: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Previous message:</strong> <a href="4851.php">Berit Hinnemann: "[OMPI users] behi is out of the office."</a>
<li><strong>In reply to:</strong> <a href="4844.php">Brock Palen: "[OMPI users] ADIOI_Set_lock failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4934.php">Robert Latham: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>Reply:</strong> <a href="4934.php">Robert Latham: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
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
