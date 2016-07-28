<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 15:57:11 2007" -->
<!-- isoreceived="20071023195711" -->
<!-- sent="Tue, 23 Oct 2007 12:57:07 -0700" -->
<!-- isosent="20071023195707" -->
<!-- name="Prasun Ratn" -->
<!-- email="prasun.r_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of processes and number of the cores." -->
<!-- id="471E5213.6090008_at_ncsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9bab5e7a0710231226y72d9ef3eqd3dc4e9847191778_at_mail.gmail.com" -->
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
<strong>From:</strong> Prasun Ratn (<em>prasun.r_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 15:57:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4290.php">Dirk Eddelbuettel: "Re: [OMPI users] Parallel Genetic Algorithms - Open MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="4288.php">Sajjad Tabib: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<li><strong>In reply to:</strong> <a href="4286.php">Siamak Riahi: "Re: [OMPI users] Number of processes and number of the cores."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4314.php">Jeff Squyres: "Re: [OMPI users] Number of processes and number of the cores."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assumed you meant processes on a host, but I noticed that you
<br>
wrote &quot;cores&quot;. I'm not sure what the answer is if you really meant cores.
<br>
<p>I run different number of processes per &quot;node&quot; using mpirun 
<br>
-hostfile=hosts .... ,
<br>
where hosts file contains:
<br>
<p>host0 slots=5
<br>
host1 slots=5
<br>
host2 slots=5
<br>
host3 slots=5
<br>
host4 slots=4
<br>
host5 slots=4
<br>
host6 slots=4
<br>
<p>This would create 5 processes on host0-3 and 4 processes on host4-6.
<br>
<p><p>Siamak Riahi wrote:
<br>
<span class="quotelev1">&gt; Thanks for the answer. I have been using LAM MPI. I'm using FDS (Fire 
</span><br>
<span class="quotelev1">&gt; Dynamic Simulator) and in my model I have 7 threads and want to tie 
</span><br>
<span class="quotelev1">&gt; them to two cores which means I don't want the 7 threads to use all 
</span><br>
<span class="quotelev1">&gt; four cores on the cluster that we have. Have you done some thing 
</span><br>
<span class="quotelev1">&gt; similar to this?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Siamak
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On 10/23/07, *Prasun Ratn* &lt;prasun.r_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:prasun.r_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I do this using the hostfile. There might be a more sophisticated
</span><br>
<span class="quotelev1">&gt;     way too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Siamak Riahi wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; I have a question about using the open mpi.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I want to tie &quot;N&quot; number of processes to one core and &quot;M&quot; number of
</span><br>
<span class="quotelev2">&gt;     &gt; processes to another core. I want to know if open mpi is capable of
</span><br>
<span class="quotelev2">&gt;     &gt; doing that.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Siamak
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4290.php">Dirk Eddelbuettel: "Re: [OMPI users] Parallel Genetic Algorithms - Open MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="4288.php">Sajjad Tabib: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<li><strong>In reply to:</strong> <a href="4286.php">Siamak Riahi: "Re: [OMPI users] Number of processes and number of the cores."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4314.php">Jeff Squyres: "Re: [OMPI users] Number of processes and number of the cores."</a>
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
