<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 20:05:39 2010" -->
<!-- isoreceived="20100129010539" -->
<!-- sent="Thu, 28 Jan 2010 17:05:31 -0800 (PST)" -->
<!-- isosent="20100129010531" -->
<!-- name="Tim" -->
<!-- email="timlee126_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="891118.26442.qm_at_web63107.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B622C42.8010500_at_sun.com" -->
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
<strong>From:</strong> Tim (<em>timlee126_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 20:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11920.php">Charles Shuller: "[OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11921.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11921.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11922.php">Natarajan CS: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11923.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Eugene.
<br>
<p>I admit I am not that smart to understand well how to use MPI, but I did read some basic materials about it and understand how some simple problems are solved by MPI. 
<br>
<p>But dealing with an array in my case, I am not certain about how to apply MPI to it. Are you saying to use send and recieve to transfer the value computed for each element from child process to parent process? Do you allocate a copy of the array for each process?
<br>
<p>Also I only need the loop that computes every element of the array to be parallelized. Someone said that the parallel part begins with MPI_Init and ends with MPI_Finilize, and one can do any serial computations before and/or after these calls. But I have wrote some MPI programs, and found that the parallel part is not restricted between MPI_Init and MPI_Finilize, but instead the whole program. If the rest part of the code has to be wrapped for process with ID 0, I have little idea about how to apply that to my case since the rest part would be the parts before and after the loop in the function and the whole in main().
<br>
<p>If someone could give a sample of how to apply MPI in my case, it will clarify a lot of my questions. Usually I can learn a lot from good examples.
<br>
<p>Thanks!
<br>
<p>--- On Thu, 1/28/10, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] speed up this problem by MPI
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, January 28, 2010, 7:30 PM
</span><br>
<span class="quotelev1">&gt; Take a look at some introductory MPI
</span><br>
<span class="quotelev1">&gt; materials to learn how to use MPI and what it's about.&#160;
</span><br>
<span class="quotelev1">&gt; There should be resources on-line... take a look around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The main idea is that you would have many processes, each
</span><br>
<span class="quotelev1">&gt; process would have part of the array.&#160; Thereafter, if a
</span><br>
<span class="quotelev1">&gt; process needs data or results from any other process, such
</span><br>
<span class="quotelev1">&gt; data would have to be exchanged between the processes
</span><br>
<span class="quotelev1">&gt; explicitly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many codes have both OpenMP and MPI parallelization, but
</span><br>
<span class="quotelev1">&gt; you should first familiarize yourself with the basics of MPI
</span><br>
<span class="quotelev1">&gt; before dealing with &quot;hybrid&quot; codes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (1). I am wondering how I can speed up the
</span><br>
<span class="quotelev1">&gt; time-consuming computation in the loop of my code below
</span><br>
<span class="quotelev1">&gt; using MPI?
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160; &#160;&#160;&#160;int main(int argc, char
</span><br>
<span class="quotelev1">&gt; ** argv)&#160; &#160; &#160;&#160;&#160;{&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;// some operations&#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&#160;&#160;f(size);&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;&#160;&#160;// some
</span><br>
<span class="quotelev1">&gt; operations&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;return 0;&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;}&#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; void f(int size)&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;{&#160; &#160; &#160;&#160;&#160;// some
</span><br>
<span class="quotelev1">&gt; operations&#160; &#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; int i;&#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;double * array =&#160; new double
</span><br>
<span class="quotelev1">&gt; [size];&#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;for (i = 0; i &lt; size; i++) // how can I
</span><br>
<span class="quotelev1">&gt; use MPI to speed up this loop to compute all elements in the
</span><br>
<span class="quotelev1">&gt; array?&#160; &#160; &#160;&#160;&#160;{&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;array[i] = complicated_computation(); //
</span><br>
<span class="quotelev1">&gt; time comsuming computation&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;}&#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;// some operations using all elements in
</span><br>
<span class="quotelev1">&gt; array&#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;delete [] array;&#160; &#160; &#160; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As shown in the code, I want to do some operations
</span><br>
<span class="quotelev1">&gt; before and after the part to be paralleled with MPI, but I
</span><br>
<span class="quotelev1">&gt; don't know how to specify where the parallel part begins and
</span><br>
<span class="quotelev1">&gt; ends.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (2) My current code is using OpenMP to speed up the
</span><br>
<span class="quotelev1">&gt; comutation. 
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;void f(int size)&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;{&#160; &#160; &#160;&#160;&#160;// some
</span><br>
<span class="quotelev1">&gt; operations&#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;int i;&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;&#160;&#160;double * array =&#160; new double
</span><br>
<span class="quotelev1">&gt; [size];&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;omp_set_num_threads(_nb_threads);&#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; #pragma omp parallel shared(array)
</span><br>
<span class="quotelev1">&gt; private(i)&#160; &#160; &#160; {
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;#pragma omp for
</span><br>
<span class="quotelev1">&gt; schedule(dynamic) nowait&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; for (i = 0; i &lt; size; i++) // how can I use
</span><br>
<span class="quotelev1">&gt; MPI to speed up this loop to compute all elements in the
</span><br>
<span class="quotelev1">&gt; array?&#160; &#160; &#160;&#160;&#160;{&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;array[i] = complicated_computation(); //
</span><br>
<span class="quotelev1">&gt; time comsuming computation&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;}&#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; }&#160; &#160;&#160;&#160;// some operations using
</span><br>
<span class="quotelev1">&gt; all elements in array&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;&#160;&#160;}
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if I change to use MPI, is it possible to
</span><br>
<span class="quotelev1">&gt; have the code written both for OpenMP and MPI? If it is
</span><br>
<span class="quotelev1">&gt; possible, how to write the code and how to compile and run
</span><br>
<span class="quotelev1">&gt; the code?
</span><br>
<span class="quotelev2">&gt; &gt;&#160; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11920.php">Charles Shuller: "[OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11918.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11921.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11921.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11922.php">Natarajan CS: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11923.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
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
