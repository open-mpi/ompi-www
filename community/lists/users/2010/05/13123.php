<?
$subject_val = "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE:	invalid datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 10:56:50 2010" -->
<!-- isoreceived="20100521145650" -->
<!-- sent="Fri, 21 May 2010 07:56:42 -0700" -->
<!-- isosent="20100521145642" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE:	invalid datatype" -->
<!-- id="1274453802.7364.2.camel_at_alder.reachone.com" -->
<!-- inreplyto="DB5810118A97904784BECE13867C5CF670054240EE_at_MSX" -->
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
<strong>Subject:</strong> Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE:	invalid datatype<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 10:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13124.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>In reply to:</strong> <a href="13117.php">Pankatz, Klaus: "[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your fortran call to 'mpi_bcast' needs a status parameter at the end of
<br>
the argument list.  Also, I don't think 'MPI_INT' is correct for
<br>
fortran, it should be 'MPI_INTEGER'.  With these changes the program
<br>
works OK.
<br>
<p>T. Rosmond
<br>
<p>On Fri, 2010-05-21 at 11:40 +0200, Pankatz, Klaus wrote:
<br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openMPI 1.4.1 seems to have another problem with my machine, or something on it. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This little program here (compiled with mpif90) startet with mpiexec -np 4 a.out produces the following output:
</span><br>
<span class="quotelev1">&gt; Suriprisingly the same thing written in C-Code (compiled with mpiCC) works without a problem.
</span><br>
<span class="quotelev1">&gt; May it be a interference with other MPI-distributions although I think I have deleted all?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note: The error occurs also with my climate model. The error is nearly the same, only with MPI_ERR_TYPE: invalid root.
</span><br>
<span class="quotelev1">&gt; I've compiled openMPI not as root root, but in my home-directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your advice, 
</span><br>
<span class="quotelev1">&gt; Klaus
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My machine:
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI-version 1.4.1 compiled with Lahey Fortran 95 (lf95).
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI was compiled &quot;out of the box&quot; only changing to the Lahey compiler with a setenv $FC lf95
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The System: Linux marvin 2.6.27.6-1 #1 SMP Sat Nov 15 20:19:04 CET 2008 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Compiler: Lahey/Fujitsu Linux64 Fortran Compiler Release L8.10a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***************************************
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt; [marvin:21997] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; [marvin:21997] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [marvin:21997] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; [marvin:21997] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; Process 1 : k= 10 before
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 1 with PID 21997 on
</span><br>
<span class="quotelev1">&gt; node marvin exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [marvin:21993] 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [marvin:21993] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; Process 3 : k= 10 before
</span><br>
<span class="quotelev1">&gt; ************************************************************
</span><br>
<span class="quotelev1">&gt; Program Fortran90:
</span><br>
<span class="quotelev1">&gt;   include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer k, rank, size, ierror, tag, p
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_INIT(ierror)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
</span><br>
<span class="quotelev1">&gt;   if (rank == 0) then 
</span><br>
<span class="quotelev1">&gt;      k = 20
</span><br>
<span class="quotelev1">&gt;   else 
</span><br>
<span class="quotelev1">&gt;      k = 10
</span><br>
<span class="quotelev1">&gt;   end if
</span><br>
<span class="quotelev1">&gt;   do p= 0,size,1
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      if (rank == p) then
</span><br>
<span class="quotelev1">&gt;         print*, 'Process', p,': k=', k,  'before'
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      end if
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;   enddo 
</span><br>
<span class="quotelev1">&gt;   call MPI_Bcast(k, 1, MPI_INT,0,MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;   do p =0,size,1
</span><br>
<span class="quotelev1">&gt;      if (rank == p) then
</span><br>
<span class="quotelev1">&gt;         print*, 'Process', p, ': k=', k, 'after'
</span><br>
<span class="quotelev1">&gt;   end if   
</span><br>
<span class="quotelev1">&gt;   enddo
</span><br>
<span class="quotelev1">&gt;   call MPI_Finalize(ierror)
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;   end  
</span><br>
<span class="quotelev1">&gt; ********************************************************
</span><br>
<span class="quotelev1">&gt; Program C-Code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;         int k,id,p,size;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;id);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;         if(id == 0)
</span><br>
<span class="quotelev1">&gt;                 k = 20;
</span><br>
<span class="quotelev1">&gt;         else
</span><br>
<span class="quotelev1">&gt;                 k = 10;
</span><br>
<span class="quotelev1">&gt;         for(p=0; p&lt;size; p++){
</span><br>
<span class="quotelev1">&gt;                 if(id == p)
</span><br>
<span class="quotelev1">&gt;                         printf(&quot;Process %d: k= %d before\n&quot;,id,k);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         //note MPI_Bcast must be put where all other processes
</span><br>
<span class="quotelev1">&gt;         //can see it.
</span><br>
<span class="quotelev1">&gt;         MPI_Bcast(&amp;k,1,MPI_INT,0,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         for(p=0; p&lt;size; p++){
</span><br>
<span class="quotelev1">&gt;                 if(id == p)
</span><br>
<span class="quotelev1">&gt;                         printf(&quot;Process %d: k= %d after\n&quot;,id,k);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 	return 0 ;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; ***************************************************************
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13124.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>In reply to:</strong> <a href="13117.php">Pankatz, Klaus: "[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
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
