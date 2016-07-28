<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 20:32:34 2010" -->
<!-- isoreceived="20100129013234" -->
<!-- sent="Thu, 28 Jan 2010 19:32:28 -0600" -->
<!-- isosent="20100129013228" -->
<!-- name="Natarajan CS" -->
<!-- email="csnataraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="c4b5a27c1001281732j7621588yfecee1c3902b8629_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="891118.26442.qm_at_web63107.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Natarajan CS (<em>csnataraj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 20:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11923.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11921.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11923.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tom,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sorry to add something in the same vein as Eugene's reply. i think
<br>
this is an excellent resource
<br>
<a href="http://ci-tutor.ncsa.illinois.edu/login.php">http://ci-tutor.ncsa.illinois.edu/login.php</a>. It's a great online course and
<br>
detailed! Before I took proper classes, this helped me a lot!!
<br>
<p>On Thu, Jan 28, 2010 at 7:05 PM, Tim &lt;timlee126_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, Eugene.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I admit I am not that smart to understand well how to use MPI, but I did
</span><br>
<span class="quotelev1">&gt; read some basic materials about it and understand how some simple problems
</span><br>
<span class="quotelev1">&gt; are solved by MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But dealing with an array in my case, I am not certain about how to apply
</span><br>
<span class="quotelev1">&gt; MPI to it. Are you saying to use send and recieve to transfer the value
</span><br>
<span class="quotelev1">&gt; computed for each element from child process to parent process? Do you
</span><br>
<span class="quotelev1">&gt; allocate a copy of the array for each process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also I only need the loop that computes every element of the array to be
</span><br>
<span class="quotelev1">&gt; parallelized. Someone said that the parallel part begins with MPI_Init and
</span><br>
<span class="quotelev1">&gt; ends with MPI_Finilize, and one can do any serial computations before and/or
</span><br>
<span class="quotelev1">&gt; after these calls. But I have wrote some MPI programs, and found that the
</span><br>
<span class="quotelev1">&gt; parallel part is not restricted between MPI_Init and MPI_Finilize, but
</span><br>
<span class="quotelev1">&gt; instead the whole program. If the rest part of the code has to be wrapped
</span><br>
<span class="quotelev1">&gt; for process with ID 0, I have little idea about how to apply that to my case
</span><br>
<span class="quotelev1">&gt; since the rest part would be the parts before and after the loop in the
</span><br>
<span class="quotelev1">&gt; function and the whole in main().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If someone could give a sample of how to apply MPI in my case, it will
</span><br>
<span class="quotelev1">&gt; clarify a lot of my questions. Usually I can learn a lot from good examples.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Thu, 1/28/10, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] speed up this problem by MPI
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thursday, January 28, 2010, 7:30 PM
</span><br>
<span class="quotelev2">&gt; &gt; Take a look at some introductory MPI
</span><br>
<span class="quotelev2">&gt; &gt; materials to learn how to use MPI and what it's about.
</span><br>
<span class="quotelev2">&gt; &gt; There should be resources on-line... take a look around.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The main idea is that you would have many processes, each
</span><br>
<span class="quotelev2">&gt; &gt; process would have part of the array.  Thereafter, if a
</span><br>
<span class="quotelev2">&gt; &gt; process needs data or results from any other process, such
</span><br>
<span class="quotelev2">&gt; &gt; data would have to be exchanged between the processes
</span><br>
<span class="quotelev2">&gt; &gt; explicitly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Many codes have both OpenMP and MPI parallelization, but
</span><br>
<span class="quotelev2">&gt; &gt; you should first familiarize yourself with the basics of MPI
</span><br>
<span class="quotelev2">&gt; &gt; before dealing with &quot;hybrid&quot; codes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (1). I am wondering how I can speed up the
</span><br>
<span class="quotelev2">&gt; &gt; time-consuming computation in the loop of my code below
</span><br>
<span class="quotelev2">&gt; &gt; using MPI?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       int main(int argc, char
</span><br>
<span class="quotelev2">&gt; &gt; ** argv)       {
</span><br>
<span class="quotelev2">&gt; &gt;    // some operations
</span><br>
<span class="quotelev2">&gt; &gt;          f(size);
</span><br>
<span class="quotelev2">&gt; &gt;            // some
</span><br>
<span class="quotelev2">&gt; &gt; operations
</span><br>
<span class="quotelev2">&gt; &gt;    return 0;
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;   void f(int size)
</span><br>
<span class="quotelev2">&gt; &gt;    {       // some
</span><br>
<span class="quotelev2">&gt; &gt; operations
</span><br>
<span class="quotelev2">&gt; &gt; int i;
</span><br>
<span class="quotelev2">&gt; &gt;    double * array =  new double
</span><br>
<span class="quotelev2">&gt; &gt; [size];
</span><br>
<span class="quotelev2">&gt; &gt;    for (i = 0; i &lt; size; i++) // how can I
</span><br>
<span class="quotelev2">&gt; &gt; use MPI to speed up this loop to compute all elements in the
</span><br>
<span class="quotelev2">&gt; &gt; array?       {
</span><br>
<span class="quotelev2">&gt; &gt;    array[i] = complicated_computation(); //
</span><br>
<span class="quotelev2">&gt; &gt; time comsuming computation
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    // some operations using all elements in
</span><br>
<span class="quotelev2">&gt; &gt; array
</span><br>
<span class="quotelev2">&gt; &gt;    delete [] array;      }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As shown in the code, I want to do some operations
</span><br>
<span class="quotelev2">&gt; &gt; before and after the part to be paralleled with MPI, but I
</span><br>
<span class="quotelev2">&gt; &gt; don't know how to specify where the parallel part begins and
</span><br>
<span class="quotelev2">&gt; &gt; ends.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (2) My current code is using OpenMP to speed up the
</span><br>
<span class="quotelev2">&gt; &gt; comutation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     void f(int size)
</span><br>
<span class="quotelev2">&gt; &gt;    {       // some
</span><br>
<span class="quotelev2">&gt; &gt; operations
</span><br>
<span class="quotelev2">&gt; &gt;    int i;
</span><br>
<span class="quotelev2">&gt; &gt;      double * array =  new double
</span><br>
<span class="quotelev2">&gt; &gt; [size];
</span><br>
<span class="quotelev2">&gt; &gt;    omp_set_num_threads(_nb_threads);
</span><br>
<span class="quotelev2">&gt; &gt;     #pragma omp parallel shared(array)
</span><br>
<span class="quotelev2">&gt; &gt; private(i)      {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     #pragma omp for
</span><br>
<span class="quotelev2">&gt; &gt; schedule(dynamic) nowait
</span><br>
<span class="quotelev2">&gt; &gt;     for (i = 0; i &lt; size; i++) // how can I use
</span><br>
<span class="quotelev2">&gt; &gt; MPI to speed up this loop to compute all elements in the
</span><br>
<span class="quotelev2">&gt; &gt; array?       {
</span><br>
<span class="quotelev2">&gt; &gt;    array[i] = complicated_computation(); //
</span><br>
<span class="quotelev2">&gt; &gt; time comsuming computation
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;   }     // some operations using
</span><br>
<span class="quotelev2">&gt; &gt; all elements in array
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I wonder if I change to use MPI, is it possible to
</span><br>
<span class="quotelev2">&gt; &gt; have the code written both for OpenMP and MPI? If it is
</span><br>
<span class="quotelev2">&gt; &gt; possible, how to write the code and how to compile and run
</span><br>
<span class="quotelev2">&gt; &gt; the code?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11923.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11921.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11923.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
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
