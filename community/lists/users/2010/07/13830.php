<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 09:33:48 2010" -->
<!-- isoreceived="20100728133348" -->
<!-- sent="Wed, 28 Jul 2010 09:33:44 -0400" -->
<!-- isosent="20100728133344" -->
<!-- name="Hugo Gagnon" -->
<!-- email="sourceforge.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="1280324024.9679.1387158251_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="26ACC128-05DB-4662-A2BE-992869FA903E_at_cisco.com" -->
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
<strong>Date:</strong> 2010-07-28 09:33:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13831.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>In reply to:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13832.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13832.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And how do I know how big my data buffer is? I ran MPI_TYPE_EXTENT of
<br>
And how do I know how big my data buffer is? I ran MPI_TYPE_EXTENT of
<br>
MPI_DOUBLE_PRECISION and the result was 8. So I changed my program to:
<br>
<p>&nbsp;&nbsp;1 program test
<br>
&nbsp;&nbsp;2 
<br>
&nbsp;&nbsp;3         use mpi
<br>
&nbsp;&nbsp;4 
<br>
&nbsp;&nbsp;5         implicit none
<br>
&nbsp;&nbsp;6 
<br>
&nbsp;&nbsp;7         integer :: ierr, nproc, myrank
<br>
&nbsp;&nbsp;8         !integer, parameter :: dp = kind(1.d0)
<br>
&nbsp;&nbsp;9         real(kind=8) :: inside(5), outside(5)
<br>
&nbsp;10 
<br>
&nbsp;11         call mpi_init(ierr)
<br>
&nbsp;12         call mpi_comm_size(mpi_comm_world, nproc, ierr)
<br>
&nbsp;13         call mpi_comm_rank(mpi_comm_world, myrank, ierr)
<br>
&nbsp;14 
<br>
&nbsp;15         inside = (/ 1., 2., 3., 4., 5. /)
<br>
&nbsp;16         call mpi_allreduce(inside, outside, 5, mpi_real, mpi_sum,
<br>
&nbsp;mpi_comm_world, ierr)
<br>
&nbsp;17 
<br>
&nbsp;18         if (myrank == 0) then
<br>
&nbsp;19                 print*, outside
<br>
&nbsp;20         end if
<br>
&nbsp;21 
<br>
&nbsp;22         call mpi_finalize(ierr)
<br>
&nbsp;23 
<br>
&nbsp;24 end program test
<br>
<p>but I still get a SIGSEGV fault:
<br>
<p>forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line       
<br>
Source             
<br>
libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown 
<br>
Unknown
<br>
libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown 
<br>
Unknown
<br>
a.out              0000000100000D87  _MAIN__                    16 
<br>
test.f90
<br>
a.out              0000000100000C9C  Unknown               Unknown 
<br>
Unknown
<br>
a.out              0000000100000C34  Unknown               Unknown 
<br>
Unknown
<br>
forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line       
<br>
Source             
<br>
libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown 
<br>
Unknown
<br>
libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown 
<br>
Unknown
<br>
a.out              0000000100000D87  _MAIN__                    16 
<br>
test.f90
<br>
a.out              0000000100000C9C  Unknown               Unknown 
<br>
Unknown
<br>
a.out              0000000100000C34  Unknown               Unknown 
<br>
Unknown
<br>
<p>What is wrong now?
<br>
<pre>
-- 
  Hugo Gagnon
On Wed, 28 Jul 2010 07:56 -0400, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
wrote:
&gt; On Jul 27, 2010, at 4:19 PM, Gus Correa wrote:
&gt; 
&gt; &gt; Is there a simple way to check the number of bytes associated to each
&gt; &gt; MPI basic type of OpenMPI on a specific machine (or machine+compiler)?
&gt; &gt; 
&gt; &gt; Something that would come out easily, say, from ompi_info?
&gt; 
&gt; Not via ompi_info, but the MPI function MPI_GET_EXTENT will tell you the
&gt; datatype's size.
&gt; 
&gt; -----
&gt; [4:54] svbu-mpi:~/mpi % cat extent.f90
&gt;       program main
&gt;       use mpi
&gt;       implicit none
&gt;       integer ierr, ext
&gt;       
&gt;       call MPI_INIT(ierr)
&gt;       call MPI_TYPE_EXTENT(MPI_DOUBLE_PRECISION, ext, ierr)
&gt;       print *, 'Type extent of DOUBLE_PREC is', ext
&gt;       call MPI_FINALIZE(ierr)
&gt;       
&gt;       end
&gt; [4:54] svbu-mpi:~/mpi % mpif90 extent.f90 -o extent -g
&gt; [4:54] svbu-mpi:~/mpi % ./extent
&gt;  Type extent of DOUBLE_PREC is           8
&gt; [4:54] svbu-mpi:~/mpi % 
&gt; -----
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
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
<li><strong>Next message:</strong> <a href="13831.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>In reply to:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13832.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13832.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
