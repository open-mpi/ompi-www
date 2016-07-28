<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 21:16:14 2010" -->
<!-- isoreceived="20100129021614" -->
<!-- sent="Thu, 28 Jan 2010 21:16:04 -0500" -->
<!-- isosent="20100129021604" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="4B6244E4.6000204_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="230325.23948.qm_at_web63101.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] speed up this problem by MPI<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 21:16:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11917.php">Tim: "[OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim
<br>
<p>Your OpenMP layout suggests that there are no data dependencies
<br>
in your &quot;complicated_computation()&quot; and the operations therein
<br>
are local.
<br>
I will assume this is true in what I suggest.
<br>
<p>In MPI you could use MPI_Scatter to distribute the (initial)
<br>
array values before the computational loop,
<br>
and MPI_Gather to collect the results after the loop.
<br>
This approach would stay relatively close
<br>
to your current program logic/structure.
<br>
<p>The process that distributes and collects the array,
<br>
typically rank 0, takes responsibility to read/initialize,
<br>
and write/report the results.
<br>
Normally it also takes part in the computation,
<br>
as there is no reason for it to be just the &quot;master&quot;,
<br>
and sit idle while the &quot;slave&quot; processes do the work.
<br>
<p>On this (&quot;master&quot;, rank 0) process the array would be allocated with
<br>
the &quot;global&quot; &quot;size&quot;.
<br>
On the remaining processes (&quot;slaves&quot;), the allocated array
<br>
could be smaller, just as big as to hold the array segment that is 
<br>
computed/manipulated there.
<br>
How much memory you need to allocate depends on how many
<br>
processes you launch, and can be controlled dynamically,
<br>
at run time (see below).
<br>
<p>At the very beginning of the program you need to
<br>
1) initialize MPI (MPI_Init),
<br>
2) get each process rank (MPI_Comm_rank), and
<br>
3) get the number of processes (MPI_Comm_size).
<br>
Memory allocation would probably come after that,
<br>
once you know how many processes are at work.
<br>
<p>At the end of the program you need to
<br>
4) shut MPI down (MPI_Finalize).
<br>
<p>In OpenMP you can use $OMP_NUM_THREADS to decide at run time
<br>
how many processes to use.
<br>
In MPI this is done when you launch the executable
<br>
by the mpirun command:  &quot;mpirun -n $NPROC my_mpi_executable&quot;,
<br>
where $NPROC is the counterpart of $OMP_NUM_THREADS,
<br>
i.e., the number of processes you want to launch.
<br>
<p>If you have access to a library, check Peter S. Pacheco's book
<br>
&quot;Parallel Programming with MPI&quot;, as it has examples similar to
<br>
your problem, and will get you going with MPI in no time.
<br>
You will also need to check the syntactic details of the MPI functions.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Tim wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1). I am wondering how I can speed up the time-consuming computation in the loop of my code below using MPI?
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;      int main(int argc, char ** argv)   
</span><br>
<span class="quotelev1">&gt;      {   
</span><br>
<span class="quotelev1">&gt;      // some operations           
</span><br>
<span class="quotelev1">&gt;      f(size);           
</span><br>
<span class="quotelev1">&gt;      // some operations         
</span><br>
<span class="quotelev1">&gt;      return 0;   
</span><br>
<span class="quotelev1">&gt;      }   
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;      void f(int size)   
</span><br>
<span class="quotelev1">&gt;      {   
</span><br>
<span class="quotelev1">&gt;      // some operations          
</span><br>
<span class="quotelev1">&gt;      int i;           
</span><br>
<span class="quotelev1">&gt;      double * array =  new double [size];           
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; size; i++) // how can I use MPI to speed up this loop to compute all elements in the array?   
</span><br>
<span class="quotelev1">&gt;      {   
</span><br>
<span class="quotelev1">&gt;      array[i] = complicated_computation(); // time comsuming computation   
</span><br>
<span class="quotelev1">&gt;      }           
</span><br>
<span class="quotelev1">&gt;      // some operations using all elements in array           
</span><br>
<span class="quotelev1">&gt;      delete [] array;  
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As shown in the code, I want to do some operations before and after the part to be paralleled with MPI, but I don't know how to specify where the parallel part begins and ends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) My current code is using OpenMP to speed up the comutation. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      void f(int size)   
</span><br>
<span class="quotelev1">&gt;      {   
</span><br>
<span class="quotelev1">&gt;      // some operations           
</span><br>
<span class="quotelev1">&gt;      int i;           
</span><br>
<span class="quotelev1">&gt;      double * array =  new double [size];   
</span><br>
<span class="quotelev1">&gt;      omp_set_num_threads(_nb_threads);  
</span><br>
<span class="quotelev1">&gt;      #pragma omp parallel shared(array) private(i)  
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;      #pragma omp for schedule(dynamic) nowait          
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; size; i++) // how can I use MPI to speed up this loop to compute all elements in the array?   
</span><br>
<span class="quotelev1">&gt;      {   
</span><br>
<span class="quotelev1">&gt;      array[i] = complicated_computation(); // time comsuming computation   
</span><br>
<span class="quotelev1">&gt;      }          
</span><br>
<span class="quotelev1">&gt;      } 
</span><br>
<span class="quotelev1">&gt;      // some operations using all elements in array           
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if I change to use MPI, is it possible to have the code written both for OpenMP and MPI? If it is possible, how to write the code and how to compile and run the code?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and regards!
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11917.php">Tim: "[OMPI users] speed up this problem by MPI"</a>
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
