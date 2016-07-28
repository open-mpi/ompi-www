<?
$subject_val = "Re: [OMPI users] How to get started?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 13:05:58 2008" -->
<!-- isoreceived="20080815170558" -->
<!-- sent="Fri, 15 Aug 2008 13:05:49 -0400" -->
<!-- isosent="20080815170549" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to get started?" -->
<!-- id="48A5B76D.4020507_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="995c92030808150904y31b3c7b9le33ec1e7eef02420_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to get started?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-15 13:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6350.php">Doug Reeder: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6348.php">C.Y. Lee: "[OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="6345.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Anugraha, Jody, Mohd, and list
<br>
<p>Anugraha: You should follow Jody's  recommendation.
<br>
Read the OpenMPI FAQ, particularly the ones on how to install OpenMPI
<br>
compile, and run programs.
<br>
<p>jody wrote:
<br>
<p>Hi Anughra
<br>
<p>Why don't you check the FAQ first:
<br>
<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>It answers may questions and also provides instruction to install
<br>
Open-MPI and build MPI applications.
<br>
And, yes, Open-MPI works with gcc.
<br>
<p>Jody
<br>
<p><p>I could get everything to work here simply by reading the FAQ.
<br>
Read also the README file in the main directory of the distribution,
<br>
before you install.  It is a good source of information too.
<br>
<p>I am not familiar to Ubuntu, but gcc will allow you to build the OpenMPI
<br>
&quot;C&quot; language bindings and the compiler wrapper &quot;mpicc&quot;,
<br>
and use it to compile and run MPI programs in C.
<br>
Besides, it will give you the MPI program launchpad &quot;mpiexec&quot;.
<br>
This is a minimal build of OpenMPI, but may be all that you want to get 
<br>
started.
<br>
<p>Most likely OpenMPI will also be able to build the C++ language 
<br>
bindings, using g++, if present in Ubuntu.
<br>
If a Fortran 77 compiler is present (not sure if g77 is good enough for 
<br>
the task, but it may),
<br>
you can build also the Fortran 77 language bindings.
<br>
Finally, if you have a Fortran 90 compiler (again, not sure if gfortran 
<br>
works, but it may),
<br>
you can build the Fortran 90 language bindings.
<br>
If you have PGI or Intel Fortran you can use them instead, if you prefer.
<br>
<p>Yes, you can use OpenMPI (and other flavors of MPI)
<br>
on a single multicore machine like your dual-core notebook.
<br>
It will use the shared memory mechanism for MPI communication.
<br>
I am not sure if the performance will be great with your processor, though.
<br>
I read reports elsewhere of low MPI performance and memory contention in 
<br>
quad-core for instance.
<br>
However, performance aside, your laptop is a legitimate platform to 
<br>
learn MPI programming,
<br>
without the complexities of a networked environment.
<br>
It can also be used do develop MPI code of modest size.
<br>
You can move to a cluster later, when the need for performance and 
<br>
scaling comes.
<br>
<p>You should realize that you have only two physical cores/CPUs in your 
<br>
machine.
<br>
Launching jobs that start two MPI processes is perfectly safe (mpiexec 
<br>
-n 2).
<br>
Launching jobs that start more than two MPI processes (say, mpiexec -n 8),
<br>
will still work if the tasks are relatively small (say, a &quot;hello world&quot; 
<br>
program),
<br>
but may hang if the tasks are big.
<br>
<p>Finally, make sure your laptop has enough memory to run your MPI programs.
<br>
For small MPI programs the memory requirements should be minimal.
<br>
However, notice that each MPI process you launch has a memory footprint 
<br>
of its own,
<br>
which you need to sum up (or multiply by the number of processes).
<br>
The easy way to check memory usage is through the Linux &quot;top&quot; utility,
<br>
while the MPI programs are running.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
I hope this helps.
Mohd Radzi Nurul Azri wrote:
&gt; Are you talking about single notebook or multiple? Doesn't make sense 
&gt; to just have it single machine - unless you're building codes that 
&gt; gonna go into a cluster.
&gt;
&gt;
&gt; On Fri, Aug 15, 2008 at 6:25 PM, Anugraha Sankaranarayanan 
&gt; &lt;atomhouse_at_[hidden] &lt;mailto:atomhouse_at_[hidden]&gt;&gt; wrote:
&gt;
&gt;     hi all,
&gt;             I'm new to MPI.Can I install OpenMPI for my gcc?I'm using
&gt;     Ubuntu(hardy heron) on a Intel DualCore Notebook.
&gt;      
&gt;      
&gt;     Anugraha.S
&gt;
&gt;     _______________________________________________
&gt;     users mailing list
&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt;
&gt; -- 
&gt; Thank you.
&gt;
&gt; Nurul Azri Mohd Radzi
&gt;
&gt;------------------------------------------------------------------------
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6350.php">Doug Reeder: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6348.php">C.Y. Lee: "[OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="6345.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] How to get started?"</a>
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
