<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 19:01:06 2007" -->
<!-- isoreceived="20070612230106" -->
<!-- sent="Tue, 12 Jun 2007 19:00:31 -0400" -->
<!-- isosent="20070612230031" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran" -->
<!-- id="466F258F.5010104_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.tttun0t0nye9fc_at_auchentoshan.cluster.mkem.uu.se" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 19:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1670.php">Rainer Keller: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Previous message:</strong> <a href="1668.php">Daniel Sp&#229;ngberg: "[OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>In reply to:</strong> <a href="1668.php">Daniel Sp&#229;ngberg: "[OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1670.php">Rainer Keller: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>Thanks for the very precise and clear report. I checked the code and 
<br>
indeed we miss the OMPI_ADDR macro call in a lot of places in the 
<br>
Fortran interface (not for point-to-point communications) . I will 
<br>
correct the issue shortly and hopefully the the fix will make its way 
<br>
into the next release (1.2.3).
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>Daniel Sp&#195;&#165;ngberg wrote:
<br>
<span class="quotelev1">&gt; Dear openmpi developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have very recently joined this list to be able to submit this report, as  
</span><br>
<span class="quotelev1">&gt; recommended in the FAQ, why I have not had time to familiarize myself with  
</span><br>
<span class="quotelev1">&gt; the etiquette of this list, for which I apologize in advance. If you  
</span><br>
<span class="quotelev1">&gt; require any additional information I am more than happy to provide you  
</span><br>
<span class="quotelev1">&gt; with such information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of the users of our computer cluster have reported a problem with his  
</span><br>
<span class="quotelev1">&gt; simulation code. We have been able to trace this down to a problem with  
</span><br>
<span class="quotelev1">&gt; the MPI struct when absolute addressing is used for the members in the  
</span><br>
<span class="quotelev1">&gt; struct, necessating the use of MPI_BOTTOM. The problem occurs with  
</span><br>
<span class="quotelev1">&gt; MPI_BCAST, but works fine with MPI_SEND and MPI_RECV. I digged down into  
</span><br>
<span class="quotelev1">&gt; the openmpi code and found out that the problem occurs only in fortran,  
</span><br>
<span class="quotelev1">&gt; which seems to be because when MPI_BCAST is called, the OMPI_ADDR macro in  
</span><br>
<span class="quotelev1">&gt; ompi/mpi/f77/constants.h is never evaluated which thus never turns the  
</span><br>
<span class="quotelev1">&gt; fortran MPI_BOTTOM into a C MPI_BOTTOM. When MPI_SEND and MPI_RECV are  
</span><br>
<span class="quotelev1">&gt; used the OMPI_ADDR macro is evaluated and no problem occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An example of a problematic code (tested on two processes):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        program testme
</span><br>
<span class="quotelev1">&gt;        implicit none
</span><br>
<span class="quotelev1">&gt;        include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;        integer ierr,rank,size
</span><br>
<span class="quotelev1">&gt;        integer btype(1),blen(1),param_batch
</span><br>
<span class="quotelev1">&gt;        real param
</span><br>
<span class="quotelev1">&gt;        integer(kind=mpi_address_kind) :: disp(1)
</span><br>
<span class="quotelev1">&gt;        integer status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        param=0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;        call MPI_GET_ADDRESS(param,disp(1),ierr)
</span><br>
<span class="quotelev1">&gt;        if (ierr.ne.MPI_SUCCESS) write(*,*) 'MPI_GET_ADDRESS FAILED'
</span><br>
<span class="quotelev1">&gt;        btype(1)=MPI_REAL
</span><br>
<span class="quotelev1">&gt;        blen(1)=1
</span><br>
<span class="quotelev1">&gt;        call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
</span><br>
<span class="quotelev1">&gt;        call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
</span><br>
<span class="quotelev1">&gt;        call MPI_TYPE_CREATE_STRUCT(1,blen,disp,btype,param_batch,ierr)
</span><br>
<span class="quotelev1">&gt;        if (ierr.ne.MPI_SUCCESS) then
</span><br>
<span class="quotelev1">&gt;          write(*,*) 'MPI_TYPE_CREATE_STRUCT FAILED'
</span><br>
<span class="quotelev1">&gt;        endif
</span><br>
<span class="quotelev1">&gt;        call MPI_TYPE_COMMIT(param_batch,ierr)
</span><br>
<span class="quotelev1">&gt;        if (ierr.ne.MPI_SUCCESS) write(*,*) 'MPI_TYPE_COMMIT FAILED'
</span><br>
<span class="quotelev1">&gt;        if (rank.eq.0) param=100.
</span><br>
<span class="quotelev1">&gt; c      if (rank.eq.0) then
</span><br>
<span class="quotelev1">&gt; c        call MPI_SEND(MPI_BOTTOM,1,
</span><br>
<span class="quotelev1">&gt; c     x       param_batch,1,0,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; c      else
</span><br>
<span class="quotelev1">&gt; c        call MPI_RECV(MPI_BOTTOM,1,
</span><br>
<span class="quotelev1">&gt; c     x       param_batch,0,0,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev1">&gt; c      endif
</span><br>
<span class="quotelev1">&gt;        call MPI_BCAST(MPI_BOTTOM,1,param_batch,0,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;        if (ierr.ne.MPI_SUCCESS) write(*,*) 'MPI_BCAST FAILED'
</span><br>
<span class="quotelev1">&gt;        write(*,*) 'Rank:',rank,'Size:',size,'Param=',param
</span><br>
<span class="quotelev1">&gt;        call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        end program testme
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 testme_submitted_to_devel
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] Failing at address: 0x7fc04ffd7c
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 0] /lib64/tls/libpthread.so.0 [0x3d9660c430]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 1] /lib64/tls/libc.so.6(memcpy+0x60) [0x3d95571ec0]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 2]  
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1-gcc4/lib/libmpi.so.0(ompi_convertor_pack+0x164)  
</span><br>
<span class="quotelev1">&gt; [0x2a957cf5b4]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 3]  
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1-gcc4/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x24c)  
</span><br>
<span class="quotelev1">&gt; [0x2a982851dc]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 4]  
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1-gcc4/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_isend+0x217)  
</span><br>
<span class="quotelev1">&gt; [0x2a9827fe77]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 5]  
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1-gcc4/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_bcast_intra_generic+0x354)  
</span><br>
<span class="quotelev1">&gt; [0x2a98ac08b4]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 6]  
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1-gcc4/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_bcast_intra_binomial+0xc8)  
</span><br>
<span class="quotelev1">&gt; [0x2a98ac0bd8]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 7]  
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1-gcc4/lib/libmpi.so.0(PMPI_Bcast+0x15c) [0x2a957d62ac]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 8]  
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1-gcc4/lib/libmpi_f77.so.0(pmpi_bcast_+0x5a)  
</span><br>
<span class="quotelev1">&gt; [0x2a9567e99a]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [ 9] testme_submitted_to_devel(MAIN__+0x1f8)  
</span><br>
<span class="quotelev1">&gt; [0x401080]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [10] testme_submitted_to_devel(main+0xe) [0x4011be]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [11] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
</span><br>
<span class="quotelev1">&gt; [0x3d9551c3fb]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] [12] testme_submitted_to_devel [0x400dfa]
</span><br>
<span class="quotelev1">&gt; [auchentoshan:21021] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 21021 on node auchentoshan exited  
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openmpi version we have tested this on includes the latest, 1.2.2  
</span><br>
<span class="quotelev1">&gt; version as well although the log message above is for version 1.2.1.  
</span><br>
<span class="quotelev1">&gt; Distribution: Scientific Linux 4.4 (RHEL4 clone). The problem occurs on  
</span><br>
<span class="quotelev1">&gt; both AMD64 and i386. The problem occurs both when using gcc/gfortran and  
</span><br>
<span class="quotelev1">&gt; the portland group compilers version 7.0-4. Interconnect GBE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; daniels_at_auchentoshan:~ &gt; gcc4 --version
</span><br>
<span class="quotelev1">&gt; gcc4 (GCC) 4.1.0 20060515 (Red Hat 4.1.0-18)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; daniels_at_auchentoshan:~ &gt; gfortran --version
</span><br>
<span class="quotelev1">&gt; GNU Fortran 95 (GCC) 4.1.0 20060515 (Red Hat 4.1.0-18)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev1">&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev1">&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Working C code which does the same thing:
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank,size;
</span><br>
<span class="quotelev1">&gt;    float param=0.;
</span><br>
<span class="quotelev1">&gt;    MPI_Datatype btype[1],param_batch;
</span><br>
<span class="quotelev1">&gt;    MPI_Aint disp[1];
</span><br>
<span class="quotelev1">&gt;    int blen[1];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    if (MPI_Get_address(&amp;param,&amp;disp[0])!=MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;      fprintf(stderr,&quot;MPI_Get_address failed.\n&quot;);
</span><br>
<span class="quotelev1">&gt;    btype[0]=MPI_FLOAT;
</span><br>
<span class="quotelev1">&gt;    blen[0]=1;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;    if (MPI_Type_create_struct(1,blen,disp,btype,&amp;param_batch)!=MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;      fprintf(stderr,&quot;MPI_Type_Create_Struct failed.\n&quot;);
</span><br>
<span class="quotelev1">&gt;    if (MPI_Type_commit(&amp;param_batch)!=MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;      fprintf(stderr,&quot;MPI_Type_Commit failed.\n&quot;);
</span><br>
<span class="quotelev1">&gt;    if (rank==0)
</span><br>
<span class="quotelev1">&gt;      param=100.;
</span><br>
<span class="quotelev1">&gt;    if (MPI_Bcast(MPI_BOTTOM,1,param_batch,0,MPI_COMM_WORLD)!=MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;      fprintf(stderr,&quot;MPI_Bcast failed.\n&quot;);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Rank:%d, Size:%d, Param=%f\n&quot;,rank,size,param);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Daniel Sp&#195;&#165;ngberg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1670.php">Rainer Keller: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Previous message:</strong> <a href="1668.php">Daniel Sp&#229;ngberg: "[OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>In reply to:</strong> <a href="1668.php">Daniel Sp&#229;ngberg: "[OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1670.php">Rainer Keller: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
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
