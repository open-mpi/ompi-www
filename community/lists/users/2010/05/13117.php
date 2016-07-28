<?
$subject_val = "[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 05:40:25 2010" -->
<!-- isoreceived="20100521094025" -->
<!-- sent="Fri, 21 May 2010 11:40:14 +0200" -->
<!-- isosent="20100521094014" -->
<!-- name="Pankatz, Klaus" -->
<!-- email="klaus.pankatz_at_[hidden]" -->
<!-- subject="[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype" -->
<!-- id="DB5810118A97904784BECE13867C5CF670054240EE_at_MSX" -->
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
<strong>Subject:</strong> [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype<br>
<strong>From:</strong> Pankatz, Klaus (<em>klaus.pankatz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 05:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13118.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Previous message:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Reply:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Reply:</strong> <a href="13123.php">Tom Rosmond: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE:	invalid datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>openMPI 1.4.1 seems to have another problem with my machine, or something on it. 
<br>
<p>This little program here (compiled with mpif90) startet with mpiexec -np 4 a.out produces the following output:
<br>
Suriprisingly the same thing written in C-Code (compiled with mpiCC) works without a problem.
<br>
May it be a interference with other MPI-distributions although I think I have deleted all?
<br>
<p>Note: The error occurs also with my climate model. The error is nearly the same, only with MPI_ERR_TYPE: invalid root.
<br>
I've compiled openMPI not as root root, but in my home-directory.
<br>
<p>Thanks for your advice, 
<br>
Klaus
<br>
&nbsp;
<br>
My machine:
<br>
<span class="quotelev1">&gt; OpenMPI-version 1.4.1 compiled with Lahey Fortran 95 (lf95).
</span><br>
<span class="quotelev1">&gt; OpenMPI was compiled &quot;out of the box&quot; only changing to the Lahey compiler with a setenv $FC lf95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The System: Linux marvin 2.6.27.6-1 #1 SMP Sat Nov 15 20:19:04 CET 2008 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler: Lahey/Fujitsu Linux64 Fortran Compiler Release L8.10a
</span><br>
<p>***************************************
<br>
Output:
<br>
[marvin:21997] *** An error occurred in MPI_Bcast
<br>
[marvin:21997] *** on communicator MPI_COMM_WORLD
<br>
[marvin:21997] *** MPI_ERR_TYPE: invalid datatype
<br>
[marvin:21997] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
Process 1 : k= 10 before
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 1 with PID 21997 on
<br>
node marvin exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[marvin:21993] 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[marvin:21993] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
Process 3 : k= 10 before
<br>
************************************************************
<br>
Program Fortran90:
<br>
&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;integer k, rank, size, ierror, tag, p
<br>
<p><p>&nbsp;&nbsp;call MPI_INIT(ierror)
<br>
&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
<br>
&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
<br>
&nbsp;&nbsp;if (rank == 0) then 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = 20
<br>
&nbsp;&nbsp;else 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = 10
<br>
&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;do p= 0,size,1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == p) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, 'Process', p,': k=', k,  'before'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;enddo 
<br>
&nbsp;&nbsp;call MPI_Bcast(k, 1, MPI_INT,0,MPI_COMM_WORLD)
<br>
&nbsp;&nbsp;do p =0,size,1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == p) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, 'Process', p, ': k=', k, 'after'
<br>
&nbsp;&nbsp;end if   
<br>
&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;call MPI_Finalize(ierror)
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;end  
<br>
********************************************************
<br>
Program C-Code:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
int main (int argc, char *argv[])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int k,id,p,size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;id);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(id == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = 20;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = 10;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(p=0; p&lt;size; p++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(id == p)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d: k= %d before\n&quot;,id,k);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//note MPI_Bcast must be put where all other processes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//can see it.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;k,1,MPI_INT,0,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(p=0; p&lt;size; p++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(id == p)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d: k= %d after\n&quot;,id,k);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0 ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
***************************************************************
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13118.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Previous message:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Reply:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Reply:</strong> <a href="13123.php">Tom Rosmond: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE:	invalid datatype"</a>
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
