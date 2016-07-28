<?
$subject_val = "[OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 18:33:36 2010" -->
<!-- isoreceived="20100128233336" -->
<!-- sent="Thu, 28 Jan 2010 15:33:32 -0800 (PST)" -->
<!-- isosent="20100128233332" -->
<!-- name="Tim" -->
<!-- email="timlee126_at_[hidden]" -->
<!-- subject="[OMPI users] speed up this problem by MPI" -->
<!-- id="230325.23948.qm_at_web63101.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] speed up this problem by MPI<br>
<strong>From:</strong> Tim (<em>timlee126_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 18:33:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11916.php">DevL: "[OMPI users] totalview and message queue, empty windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11925.php">Gus Correa: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>(1). I am wondering how I can speed up the time-consuming computation in the loop of my code below using MPI?
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int main(int argc, char ** argv)   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f(size);           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void f(int size)   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations          
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double * array =  new double [size];           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; size; i++) // how can I use MPI to speed up this loop to compute all elements in the array?   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array[i] = complicated_computation(); // time comsuming computation   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations using all elements in array           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete [] array;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>As shown in the code, I want to do some operations before and after the part to be paralleled with MPI, but I don't know how to specify where the parallel part begins and ends.
<br>
<p>(2) My current code is using OpenMP to speed up the comutation. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void f(int size)   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double * array =  new double [size];   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;omp_set_num_threads(_nb_threads);  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#pragma omp parallel shared(array) private(i)  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#pragma omp for schedule(dynamic) nowait          
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; size; i++) // how can I use MPI to speed up this loop to compute all elements in the array?   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array[i] = complicated_computation(); // time comsuming computation   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}          
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations using all elements in array           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I wonder if I change to use MPI, is it possible to have the code written both for OpenMP and MPI? If it is possible, how to write the code and how to compile and run the code?
<br>
<p>Thanks and regards!
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11916.php">DevL: "[OMPI users] totalview and message queue, empty windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11925.php">Gus Correa: "Re: [OMPI users] speed up this problem by MPI"</a>
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
