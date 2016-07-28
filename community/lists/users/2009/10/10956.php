<?
$subject_val = "Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 12:26:41 2009" -->
<!-- isoreceived="20091023162641" -->
<!-- sent="Fri, 23 Oct 2009 09:27:51 -0700" -->
<!-- isosent="20091023162751" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT" -->
<!-- id="4AE1D987.5030007_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="74EC9794-DEB4-45AB-8303-E4859B60DA7A_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 12:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10957.php">Roberto C. Sánchez: "[OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Previous message:</strong> <a href="10955.php">Noam Bernstein: "[OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<li><strong>In reply to:</strong> <a href="10955.php">Noam Bernstein: "[OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Noam Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; Hi all - we have a new Nehalem cluster (dual quad core), and SMT is
</span><br>
<span class="quotelev1">&gt; enabled in the  BIOS (for now).  I do want to do benchmarking on our
</span><br>
<span class="quotelev1">&gt; applications, obviously, but I was also wondering what happens if I just
</span><br>
<span class="quotelev1">&gt; set the number of slots to 8 in SGE, and just let things run.  It  
</span><br>
<span class="quotelev1">&gt; particular,
</span><br>
<span class="quotelev1">&gt; how will things be laid out if I do &quot;mpirun --mca mpi_paffinity_alone  
</span><br>
<span class="quotelev1">&gt; 1&quot;?
</span><br>
<p>0, 1, 2, 3, 4, 5, etc.  As usual.
<br>
<p><span class="quotelev1">&gt; 1. Will it be clever enough to schedule each process on its own core,
</span><br>
<span class="quotelev1">&gt;     and only resort to the second SMT virtual core if I go over 8
</span><br>
<span class="quotelev1">&gt;     processes per node (dual quad core)?
</span><br>
<p>No.  &quot;Clever&quot; is not part of mpi_paffinity_alone semantics.  The 
<br>
semantics are 0, 1, 2, 3, etc.  What that means with respect to cores, 
<br>
sockets, hardware threads, etc., depends on how your BIOS numbers these 
<br>
things.  It could be &quot;good&quot;.  It could be &quot;bad&quot; (e.g., doubling 
<br>
subscribing a core before moving on to the next one).
<br>
<p><span class="quotelev1">&gt; 2.  If it's not that clever, can I pass a rank file?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; 3. If I do have to do that, what is the mapping between core numbers
</span><br>
<span class="quotelev1">&gt;      and processor/core/SMT virtual cores?
</span><br>
<p>Depends on your BIOS, I think.  Take a look at /proc/cpuinfo.  Here is 
<br>
one example:
<br>
<p>$ grep &quot;physical id&quot; /proc/cpuinfo
<br>
physical id     : 0
<br>
physical id     : 1
<br>
physical id     : 0
<br>
physical id     : 1
<br>
physical id     : 0
<br>
physical id     : 1
<br>
physical id     : 0
<br>
physical id     : 1
<br>
physical id     : 0
<br>
physical id     : 1
<br>
physical id     : 0
<br>
physical id     : 1
<br>
physical id     : 0
<br>
physical id     : 1
<br>
physical id     : 0
<br>
physical id     : 1
<br>
$ grep &quot;core id&quot; /proc/cpuinfo
<br>
core id         : 0
<br>
core id         : 0
<br>
core id         : 1
<br>
core id         : 1
<br>
core id         : 2
<br>
core id         : 2
<br>
core id         : 3
<br>
core id         : 3
<br>
core id         : 0
<br>
core id         : 0
<br>
core id         : 1
<br>
core id         : 1
<br>
core id         : 2
<br>
core id         : 2
<br>
core id         : 3
<br>
core id         : 3
<br>
<p>In this case, sequential binding takes you round-robin between the 
<br>
sockets (physical id), on each socket loading up the cores.  Only after 
<br>
the first 8 do you revisit cores.  So, that's a &quot;good&quot; numbering.
<br>
<p>Starting in OMPI 1.3.4, there is &quot;improved&quot; binding support, but it's 
<br>
not aware of hardware threads.  If you're okay using only one thread per 
<br>
core, that may be fine for you.  You could run with &quot;mpirun -bysocket 
<br>
-bind-to-socket&quot;.  If you need to use more than one thread per core, 
<br>
however, that won't do the job for you.  You'd have to use rankfiles or 
<br>
something.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10957.php">Roberto C. Sánchez: "[OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Previous message:</strong> <a href="10955.php">Noam Bernstein: "[OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<li><strong>In reply to:</strong> <a href="10955.php">Noam Bernstein: "[OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
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
