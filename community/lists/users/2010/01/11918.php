<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 19:29:17 2010" -->
<!-- isoreceived="20100129002917" -->
<!-- sent="Thu, 28 Jan 2010 16:30:58 -0800" -->
<!-- isosent="20100129003058" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="4B622C42.8010500_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 19:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11917.php">Tim: "[OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11917.php">Tim: "[OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Take a look at some introductory MPI materials to learn how to use MPI 
<br>
and what it's about.  There should be resources on-line... take a look 
<br>
around.
<br>
<p>The main idea is that you would have many processes, each process would 
<br>
have part of the array.  Thereafter, if a process needs data or results 
<br>
from any other process, such data would have to be exchanged between the 
<br>
processes explicitly.
<br>
<p>Many codes have both OpenMP and MPI parallelization, but you should 
<br>
first familiarize yourself with the basics of MPI before dealing with 
<br>
&quot;hybrid&quot; codes.
<br>
<p>Tim wrote:
<br>
<p><span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(1). I am wondering how I can speed up the time-consuming computation in the loop of my code below using MPI?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char ** argv)   
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;     // some operations           
</span><br>
<span class="quotelev1">&gt;     f(size);           
</span><br>
<span class="quotelev1">&gt;     // some operations         
</span><br>
<span class="quotelev1">&gt;     return 0;   
</span><br>
<span class="quotelev1">&gt;     }   
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;     void f(int size)   
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;     // some operations          
</span><br>
<span class="quotelev1">&gt;     int i;           
</span><br>
<span class="quotelev1">&gt;     double * array =  new double [size];           
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; size; i++) // how can I use MPI to speed up this loop to compute all elements in the array?   
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;     array[i] = complicated_computation(); // time comsuming computation   
</span><br>
<span class="quotelev1">&gt;     }           
</span><br>
<span class="quotelev1">&gt;     // some operations using all elements in array           
</span><br>
<span class="quotelev1">&gt;     delete [] array;  
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As shown in the code, I want to do some operations before and after the part to be paralleled with MPI, but I don't know how to specify where the parallel part begins and ends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(2) My current code is using OpenMP to speed up the comutation. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     void f(int size)   
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;     // some operations           
</span><br>
<span class="quotelev1">&gt;     int i;           
</span><br>
<span class="quotelev1">&gt;     double * array =  new double [size];   
</span><br>
<span class="quotelev1">&gt;     omp_set_num_threads(_nb_threads);  
</span><br>
<span class="quotelev1">&gt;     #pragma omp parallel shared(array) private(i)  
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     #pragma omp for schedule(dynamic) nowait          
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; size; i++) // how can I use MPI to speed up this loop to compute all elements in the array?   
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;     array[i] = complicated_computation(); // time comsuming computation   
</span><br>
<span class="quotelev1">&gt;     }          
</span><br>
<span class="quotelev1">&gt;     } 
</span><br>
<span class="quotelev1">&gt;     // some operations using all elements in array           
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I wonder if I change to use MPI, is it possible to have the code written both for OpenMP and MPI? If it is possible, how to write the code and how to compile and run the code?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11917.php">Tim: "[OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11917.php">Tim: "[OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
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
