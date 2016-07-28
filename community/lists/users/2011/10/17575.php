<?
$subject_val = "Re: [OMPI users] Application in a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 12:25:36 2011" -->
<!-- isoreceived="20111019162536" -->
<!-- sent="Wed, 19 Oct 2011 09:25:34 -0700" -->
<!-- isosent="20111019162534" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application in a cluster" -->
<!-- id="4E9EF9FE.4030004_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACcUr4e-Gw1AXg-CJaZOrjCBx6X8-6koJJF1FWbM8GngCE4N0A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Application in a cluster<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 12:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17576.php">Reuti: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17574.php">Jorge Jaramillo: "[OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17574.php">Jorge Jaramillo: "[OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17576.php">Reuti: "Re: [OMPI users] Application in a cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe someone else on this list has a better idea what you're trying to 
<br>
do, but I'll attempt to answer your question.
<br>
<p>MPI is basically a set of library calls that can be used for processes 
<br>
to communicate with one another.  Of course, a program need not have any 
<br>
MPI calls in it, but if you want to parallelize an application, one 
<br>
strategy is to insert MPI calls so that the application can run as 
<br>
multiple processes that communicate via the MPI calls.
<br>
<p>In essence, all mpirun does is launch multiple processes on a cluster.  
<br>
Those processes can run independently, but if they have MPI calls in 
<br>
them then they can work cooperatively on the same computation.
<br>
<p>The questions you ask are more about basic MPI usage than about Open 
<br>
MPI.  There are good introductory MPI materials on the Internet.
<br>
<p>On 10/19/2011 8:57 AM, Jorge Jaramillo wrote:
<br>
<span class="quotelev1">&gt; Hello everyone, I have a doubt about how to execute a parallel 
</span><br>
<span class="quotelev1">&gt; application on a cluster.
</span><br>
How was the application parallelized?  With MPI?  With OpenMP 
<br>
(multi-threaded model, not related to Open MPI)?  Other?
<br>
<span class="quotelev1">&gt; I used the 'mpirun' to execute some applications and they worked, but 
</span><br>
<span class="quotelev1">&gt; I guess this command only is useful with MPI applications.
</span><br>
mpirun can be used to launch multiple processes on a cluster even if 
<br>
those processes do not use MPI, but typically the real value of mpirun 
<br>
is to launch MPI jobs.
<br>
<span class="quotelev1">&gt; My question is, How do I execute a program that has no MPI statements 
</span><br>
<span class="quotelev1">&gt; on the cluster?
</span><br>
Again, is it parallelized?  Using what parallelization model?
<br>
<span class="quotelev1">&gt; If it is not possible, how do I change the structure of the program so 
</span><br>
<span class="quotelev1">&gt; it can be executed as a parallel application?
</span><br>
First, choose a parallelization model -- MPI (for multi-process 
<br>
parallelization on a cluster), OpenMP (multi-threaded parallelization on 
<br>
a shared-memory system), etc.  Search for on-line resources for more 
<br>
information.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17576.php">Reuti: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17574.php">Jorge Jaramillo: "[OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17574.php">Jorge Jaramillo: "[OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17576.php">Reuti: "Re: [OMPI users] Application in a cluster"</a>
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
