<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 10:12:35 2007" -->
<!-- isoreceived="20070306151235" -->
<!-- sent="Tue, 6 Mar 2007 10:12:10 -0500" -->
<!-- isosent="20070306151210" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS tests fails on IPF" -->
<!-- id="2369E6A5-76C5-4CB5-8914-FD5D8FC4C0A2_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="E3C0BCA40296C347AF7142161DB9FC82AF6143_at_mssmsx411" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 10:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2759.php">Åke Sandgren: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Previous message:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2717.php">Kobotov, Alexander V: "[OMPI users] BLACS tests fails on IPF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying -- we've been quite busy trying to  
<br>
get OMPI v1.2 out the door!
<br>
<p>Are you sure that you build BLACS properly with Open MPI?  Check this  
<br>
FAQ item:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#blacs">http://www.open-mpi.org/faq/?category=mpi-apps#blacs</a>
<br>
<p>In particular, note that there are items in Bmake.inc that you need  
<br>
to set properly or BLACS won't work properly with Open MPI.
<br>
<p><p>On Feb 20, 2007, at 4:25 AM, Kobotov, Alexander V wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built BLACS on Itanium using Intel compilers under linux  
</span><br>
<span class="quotelev1">&gt; (2.6.9-34.EL). But it fails default BLACS Fortran tests (xFbtest),  
</span><br>
<span class="quotelev1">&gt; C tests (xCbtest) are ok. I&#146;ve tried different configurations  
</span><br>
<span class="quotelev1">&gt; combining OpenMPI-1.1.2 or OpenMPI-1.1.4, ICC 9.1.038 or ICC  
</span><br>
<span class="quotelev1">&gt; 8.1.38, IFORT 9.1.33 or IFORT 8.1.34, but all results were the  
</span><br>
<span class="quotelev1">&gt; same. OpenMPI is built using 9.1 compilers. Also I&#146;ve tried the  
</span><br>
<span class="quotelev1">&gt; same using em64t compiler on Intel XEON &#150; all tests were passed.  
</span><br>
<span class="quotelev1">&gt; MPICH2 on IPF also works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that an OpenMPI bug? Maybe some workaround exists?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bmake.inc is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is output I&#146;ve got (Don&#146;t pay attention to blacs warnings,  
</span><br>
<span class="quotelev1">&gt; they are normal for MPI):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===[ begin of: xFbtest output ]=====================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.00$  mpirun -np 4 xFbtest_MPI-LINUX-0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BLACS WARNING 'No need to set message ID range due to MPI  
</span><br>
<span class="quotelev1">&gt; communicator.'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from {-1,-1}, pnum=1, Contxt=-1, on line 18 of file 'blacs_set_.c'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BLACS WARNING 'No need to set message ID range due to MPI  
</span><br>
<span class="quotelev1">&gt; communicator.'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from {-1,-1}, pnum=3, Contxt=-1, on line 18 of file 'blacs_set_.c'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BLACS WARNING 'No need to set message ID range due to MPI  
</span><br>
<span class="quotelev1">&gt; communicator.'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from {-1,-1}, pnum=0, Contxt=-1, on line 18 of file 'blacs_set_.c'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BLACS WARNING 'No need to set message ID range due to MPI  
</span><br>
<span class="quotelev1">&gt; communicator.'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from {-1,-1}, pnum=2, Contxt=-1, on line 18 of file 'blacs_set_.c'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30119] *** An error occurred in MPI_Comm_group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30118] *** An error occurred in MPI_Comm_group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30118] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30118] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30119] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30119] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30119] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30116] *** An error occurred in MPI_Comm_group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30116] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30118] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30116] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30116] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30117] *** An error occurred in MPI_Comm_group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30117] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30117] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [comp-pvfs-0-7.local:30117] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===[ end of: xFbtest output ]=====================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; W.B.R.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kobotov Alexander
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Bmake.inc&gt;
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2759.php">Åke Sandgren: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Previous message:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2717.php">Kobotov, Alexander V: "[OMPI users] BLACS tests fails on IPF"</a>
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
