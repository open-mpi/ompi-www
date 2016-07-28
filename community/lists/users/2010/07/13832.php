<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 10:01:32 2010" -->
<!-- isoreceived="20100728140132" -->
<!-- sent="Wed, 28 Jul 2010 10:01:28 -0400" -->
<!-- isosent="20100728140128" -->
<!-- name="Hugo Gagnon" -->
<!-- email="sourceforge.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="1280325688.15649.1387162775_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1280324024.9679.1387158251_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce on local machine<br>
<strong>From:</strong> Hugo Gagnon (<em>sourceforge.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 10:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13833.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13831.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13830.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I mean to write:
<br>
call mpi_allreduce(inside, outside, 5,mpi_real, mpi_double_precision,
<br>
mpi_comm_world, ierr)
<br>
<pre>
-- 
  Hugo Gagnon
On Wed, 28 Jul 2010 09:33 -0400, &quot;Hugo Gagnon&quot;
&lt;sourceforge.openmpi_at_[hidden]&gt; wrote:
&gt; And how do I know how big my data buffer is? I ran MPI_TYPE_EXTENT of
&gt; And how do I know how big my data buffer is? I ran MPI_TYPE_EXTENT of
&gt; MPI_DOUBLE_PRECISION and the result was 8. So I changed my program to:
&gt; 
&gt;   1 program test
&gt;   2 
&gt;   3         use mpi
&gt;   4 
&gt;   5         implicit none
&gt;   6 
&gt;   7         integer :: ierr, nproc, myrank
&gt;   8         !integer, parameter :: dp = kind(1.d0)
&gt;   9         real(kind=8) :: inside(5), outside(5)
&gt;  10 
&gt;  11         call mpi_init(ierr)
&gt;  12         call mpi_comm_size(mpi_comm_world, nproc, ierr)
&gt;  13         call mpi_comm_rank(mpi_comm_world, myrank, ierr)
&gt;  14 
&gt;  15         inside = (/ 1., 2., 3., 4., 5. /)
&gt;  16         call mpi_allreduce(inside, outside, 5, mpi_real, mpi_sum,
&gt;  mpi_comm_world, ierr)
&gt;  17 
&gt;  18         if (myrank == 0) then
&gt;  19                 print*, outside
&gt;  20         end if
&gt;  21 
&gt;  22         call mpi_finalize(ierr)
&gt;  23 
&gt;  24 end program test
&gt; 
&gt; but I still get a SIGSEGV fault:
&gt; 
&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
&gt; Image              PC                Routine            Line       
&gt; Source             
&gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown 
&gt; Unknown
&gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown 
&gt; Unknown
&gt; a.out              0000000100000D87  _MAIN__                    16 
&gt; test.f90
&gt; a.out              0000000100000C9C  Unknown               Unknown 
&gt; Unknown
&gt; a.out              0000000100000C34  Unknown               Unknown 
&gt; Unknown
&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
&gt; Image              PC                Routine            Line       
&gt; Source             
&gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown 
&gt; Unknown
&gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown 
&gt; Unknown
&gt; a.out              0000000100000D87  _MAIN__                    16 
&gt; test.f90
&gt; a.out              0000000100000C9C  Unknown               Unknown 
&gt; Unknown
&gt; a.out              0000000100000C34  Unknown               Unknown 
&gt; Unknown
&gt; 
&gt; What is wrong now?
&gt; -- 
&gt;   Hugo Gagnon
&gt; 
&gt; 
&gt; On Wed, 28 Jul 2010 07:56 -0400, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
&gt; wrote:
&gt; &gt; On Jul 27, 2010, at 4:19 PM, Gus Correa wrote:
&gt; &gt; 
&gt; &gt; &gt; Is there a simple way to check the number of bytes associated to each
&gt; &gt; &gt; MPI basic type of OpenMPI on a specific machine (or machine+compiler)?
&gt; &gt; &gt; 
&gt; &gt; &gt; Something that would come out easily, say, from ompi_info?
&gt; &gt; 
&gt; &gt; Not via ompi_info, but the MPI function MPI_GET_EXTENT will tell you the
&gt; &gt; datatype's size.
&gt; &gt; 
&gt; &gt; -----
&gt; &gt; [4:54] svbu-mpi:~/mpi % cat extent.f90
&gt; &gt;       program main
&gt; &gt;       use mpi
&gt; &gt;       implicit none
&gt; &gt;       integer ierr, ext
&gt; &gt;       
&gt; &gt;       call MPI_INIT(ierr)
&gt; &gt;       call MPI_TYPE_EXTENT(MPI_DOUBLE_PRECISION, ext, ierr)
&gt; &gt;       print *, 'Type extent of DOUBLE_PREC is', ext
&gt; &gt;       call MPI_FINALIZE(ierr)
&gt; &gt;       
&gt; &gt;       end
&gt; &gt; [4:54] svbu-mpi:~/mpi % mpif90 extent.f90 -o extent -g
&gt; &gt; [4:54] svbu-mpi:~/mpi % ./extent
&gt; &gt;  Type extent of DOUBLE_PREC is           8
&gt; &gt; [4:54] svbu-mpi:~/mpi % 
&gt; &gt; -----
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]
&gt; &gt; For corporate legal information go to:
&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt; 
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; 
&gt; -- 
&gt;   Hugo Gagnon
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
-- 
  Hugo Gagnon
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13833.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13831.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13830.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
