<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 17:15:45 2007" -->
<!-- isoreceived="20070612211545" -->
<!-- sent="Tue, 12 Jun 2007 23:15:26 +0200" -->
<!-- isosent="20070612211526" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="Daniel.Spangberg_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran" -->
<!-- id="op.tttun0t0nye9fc_at_auchentoshan.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>Daniel.Spangberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 17:15:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1669.php">George Bosilca: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Previous message:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI devel] Major commit to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1669.php">George Bosilca: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Reply:</strong> <a href="1669.php">George Bosilca: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Reply:</strong> <a href="1670.php">Rainer Keller: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi developers,
<br>
<p>I have very recently joined this list to be able to submit this report, as  
<br>
recommended in the FAQ, why I have not had time to familiarize myself with  
<br>
the etiquette of this list, for which I apologize in advance. If you  
<br>
require any additional information I am more than happy to provide you  
<br>
with such information.
<br>
<p>One of the users of our computer cluster have reported a problem with his  
<br>
simulation code. We have been able to trace this down to a problem with  
<br>
the MPI struct when absolute addressing is used for the members in the  
<br>
struct, necessating the use of MPI_BOTTOM. The problem occurs with  
<br>
MPI_BCAST, but works fine with MPI_SEND and MPI_RECV. I digged down into  
<br>
the openmpi code and found out that the problem occurs only in fortran,  
<br>
which seems to be because when MPI_BCAST is called, the OMPI_ADDR macro in  
<br>
ompi/mpi/f77/constants.h is never evaluated which thus never turns the  
<br>
fortran MPI_BOTTOM into a C MPI_BOTTOM. When MPI_SEND and MPI_RECV are  
<br>
used the OMPI_ADDR macro is evaluated and no problem occurs.
<br>
<p>An example of a problematic code (tested on two processes):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program testme
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr,rank,size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer btype(1),blen(1),param_batch
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real param
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(kind=mpi_address_kind) :: disp(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer status(MPI_STATUS_SIZE)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;param=0.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_GET_ADDRESS(param,disp(1),ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr.ne.MPI_SUCCESS) write(*,*) 'MPI_GET_ADDRESS FAILED'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btype(1)=MPI_REAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blen(1)=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TYPE_CREATE_STRUCT(1,blen,disp,btype,param_batch,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr.ne.MPI_SUCCESS) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'MPI_TYPE_CREATE_STRUCT FAILED'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TYPE_COMMIT(param_batch,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr.ne.MPI_SUCCESS) write(*,*) 'MPI_TYPE_COMMIT FAILED'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank.eq.0) param=100.
<br>
c      if (rank.eq.0) then
<br>
c        call MPI_SEND(MPI_BOTTOM,1,
<br>
c     x       param_batch,1,0,MPI_COMM_WORLD,ierr)
<br>
c      else
<br>
c        call MPI_RECV(MPI_BOTTOM,1,
<br>
c     x       param_batch,0,0,MPI_COMM_WORLD,status,ierr)
<br>
c      endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BCAST(MPI_BOTTOM,1,param_batch,0,MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr.ne.MPI_SUCCESS) write(*,*) 'MPI_BCAST FAILED'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'Rank:',rank,'Size:',size,'Param=',param
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Finalize(ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end program testme
<br>
<p>mpirun -np 2 testme_submitted_to_devel
<br>
[auchentoshan:21021] *** Process received signal ***
<br>
[auchentoshan:21021] Signal: Segmentation fault (11)
<br>
[auchentoshan:21021] Signal code: Address not mapped (1)
<br>
[auchentoshan:21021] Failing at address: 0x7fc04ffd7c
<br>
[auchentoshan:21021] [ 0] /lib64/tls/libpthread.so.0 [0x3d9660c430]
<br>
[auchentoshan:21021] [ 1] /lib64/tls/libc.so.6(memcpy+0x60) [0x3d95571ec0]
<br>
[auchentoshan:21021] [ 2]  
<br>
/opt/openmpi-1.2.1-gcc4/lib/libmpi.so.0(ompi_convertor_pack+0x164)  
<br>
[0x2a957cf5b4]
<br>
[auchentoshan:21021] [ 3]  
<br>
/opt/openmpi-1.2.1-gcc4/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x24c)  
<br>
[0x2a982851dc]
<br>
[auchentoshan:21021] [ 4]  
<br>
/opt/openmpi-1.2.1-gcc4/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_isend+0x217)  
<br>
[0x2a9827fe77]
<br>
[auchentoshan:21021] [ 5]  
<br>
/opt/openmpi-1.2.1-gcc4/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_bcast_intra_generic+0x354)  
<br>
[0x2a98ac08b4]
<br>
[auchentoshan:21021] [ 6]  
<br>
/opt/openmpi-1.2.1-gcc4/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_bcast_intra_binomial+0xc8)  
<br>
[0x2a98ac0bd8]
<br>
[auchentoshan:21021] [ 7]  
<br>
/opt/openmpi-1.2.1-gcc4/lib/libmpi.so.0(PMPI_Bcast+0x15c) [0x2a957d62ac]
<br>
[auchentoshan:21021] [ 8]  
<br>
/opt/openmpi-1.2.1-gcc4/lib/libmpi_f77.so.0(pmpi_bcast_+0x5a)  
<br>
[0x2a9567e99a]
<br>
[auchentoshan:21021] [ 9] testme_submitted_to_devel(MAIN__+0x1f8)  
<br>
[0x401080]
<br>
[auchentoshan:21021] [10] testme_submitted_to_devel(main+0xe) [0x4011be]
<br>
[auchentoshan:21021] [11] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
<br>
[0x3d9551c3fb]
<br>
[auchentoshan:21021] [12] testme_submitted_to_devel [0x400dfa]
<br>
[auchentoshan:21021] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 21021 on node auchentoshan exited  
<br>
on signal 11 (Segmentation fault).
<br>
1 additional process aborted (not shown)
<br>
<p>The openmpi version we have tested this on includes the latest, 1.2.2  
<br>
version as well although the log message above is for version 1.2.1.  
<br>
Distribution: Scientific Linux 4.4 (RHEL4 clone). The problem occurs on  
<br>
both AMD64 and i386. The problem occurs both when using gcc/gfortran and  
<br>
the portland group compilers version 7.0-4. Interconnect GBE.
<br>
<p>daniels_at_auchentoshan:~ &gt; gcc4 --version
<br>
gcc4 (GCC) 4.1.0 20060515 (Red Hat 4.1.0-18)
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>daniels_at_auchentoshan:~ &gt; gfortran --version
<br>
GNU Fortran 95 (GCC) 4.1.0 20060515 (Red Hat 4.1.0-18)
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
<p>Working C code which does the same thing:
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank,size;
<br>
&nbsp;&nbsp;&nbsp;float param=0.;
<br>
&nbsp;&nbsp;&nbsp;MPI_Datatype btype[1],param_batch;
<br>
&nbsp;&nbsp;&nbsp;MPI_Aint disp[1];
<br>
&nbsp;&nbsp;&nbsp;int blen[1];
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;if (MPI_Get_address(&amp;param,&amp;disp[0])!=MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;MPI_Get_address failed.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;btype[0]=MPI_FLOAT;
<br>
&nbsp;&nbsp;&nbsp;blen[0]=1;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;&nbsp;if (MPI_Type_create_struct(1,blen,disp,btype,&amp;param_batch)!=MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;MPI_Type_Create_Struct failed.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;if (MPI_Type_commit(&amp;param_batch)!=MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;MPI_Type_Commit failed.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;if (rank==0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;param=100.;
<br>
&nbsp;&nbsp;&nbsp;if (MPI_Bcast(MPI_BOTTOM,1,param_batch,0,MPI_COMM_WORLD)!=MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;MPI_Bcast failed.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Rank:%d, Size:%d, Param=%f\n&quot;,rank,size,param);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Best regards
<br>
Daniel Sp&#229;ngberg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1669.php">George Bosilca: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Previous message:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI devel] Major commit to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1669.php">George Bosilca: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Reply:</strong> <a href="1669.php">George Bosilca: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Reply:</strong> <a href="1670.php">Rainer Keller: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
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
