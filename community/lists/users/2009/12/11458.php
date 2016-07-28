<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 14:54:59 2009" -->
<!-- isoreceived="20091208195459" -->
<!-- sent="Tue, 08 Dec 2009 14:54:49 -0500" -->
<!-- isosent="20091208195449" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4" -->
<!-- id="4B1EAF09.9080603_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A948C182-06DF-4CCB-88DC-955C95C18F59_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 14:54:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11457.php">Ralph Castain: "Re: [OMPI users] OMPI as a batch system"</a>
<li><strong>In reply to:</strong> <a href="11454.php">Matthew MacManes: "[OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11461.php">Tim Prince: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11461.php">Tim Prince: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matthew
<br>
<p>More guesses/questions than anything else:
<br>
<p>1) Is there any additional load on this machine?
<br>
We had problems like that (on different machines) when
<br>
users start listening to streaming video, doing Matlab calculations,
<br>
etc, while the MPI programs are running.
<br>
This tends to oversubscribe the cores, and may lead to crashes.
<br>
<p>2) RAM:
<br>
Can you monitor the RAM usage through &quot;top&quot;?
<br>
(I presume you are on Linux.)
<br>
It may show unexpected memory leaks, if they exist.
<br>
<p>On &quot;top&quot;, type &quot;1&quot; (one) see all cores, type &quot;f&quot; then &quot;j&quot;
<br>
to see the core number associated to each process.
<br>
<p>3) Do the programs work right with other MPI flavors (e.g. MPICH2)?
<br>
If not, then it is not OpenMPI's fault.
<br>
<p>4) Any possibility that the MPI versions/flavors of mpicc and
<br>
mpirun that you are using to compile and launch the program are not the
<br>
same?
<br>
<p>5) Are you setting processor affinity on mpiexec?
<br>
<p>mpiexec -mca mpi_paffinity_alone 1 -np  ... bla, bla ...
<br>
<p>Context switching across the cores may also cause trouble, I suppose.
<br>
<p>6) Which Linux are you using (uname -a)?
<br>
<p>On other mailing lists I read reports that only quite recent kernels
<br>
support all the Intel Nehalem processor features well.
<br>
I don't have Nehalem, I can't help here,
<br>
but the information may be useful
<br>
for other list subscribers to help you.
<br>
<p>***
<br>
<p>As for the programs, some programs require specific setup,
<br>
(and even specific compilation) when the number of MPI processes
<br>
vary.
<br>
It may help if you tell us a link to the program sites.
<br>
<p>Baysian statistics is not totally out of our business,
<br>
but phylogenetic genetic trees is not really my league,
<br>
hence forgive me any bad guesses, please,
<br>
but would it need specific compilation or a different
<br>
set of input parameters to run correctly on a different
<br>
number of processors?
<br>
Do the programs mix MPI (message passing) with OpenMP (threads)?
<br>
<p>I found this MrBayes, which seems to do the above:
<br>
<p><a href="http://mrbayes.csit.fsu.edu/">http://mrbayes.csit.fsu.edu/</a>
<br>
<a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a>
<br>
<p>As for the ABySS, what is it, where can it be found?
<br>
Doesn't look like a deep ocean circulation model, as the name suggest.
<br>
<p>My $0.02
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
<p>Matthew MacManes wrote:
<br>
<span class="quotelev1">&gt; Hi All, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having a problem running a couple of programs, ABySS and MrBayes in parallel. I am using Linux Ubuntu 9.10 with a dual socket (Xeon 5520) machine. There are 8 physical cores, or 16 with hyperthreading enabled. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use openMPI version 1.3.4, plus a few other packages downloaded via &quot;apt-get install &lt;program name&gt;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1st of all, let me say that when I specify that -np is less than 4 processors (1, 2, or 3), both programs seem to work as expected. Also, the non-mpi version of each of them works fine. Thus, I am pretty sure that this is a problem with MPI rather that with the program code or something else.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens is simply that the program hangs.. There are no error messages, and there is no clue from anything else (system working fine otherwise- no RAM issues, etc). It does not hang at the same place everytime, sometimes in the very beginning, sometime near the middle..  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could this an issue with hyperthreading? A conflict with something?  I can give you all more info if that would be helpful in troubleshooting. I'm not sure if there are any diagnostics for mpirun, so that would be helpful to know about if there were.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks. Matt
</span><br>
<span class="quotelev1">&gt; _________________________________
</span><br>
<span class="quotelev1">&gt; Matthew MacManes
</span><br>
<span class="quotelev1">&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; University of California- Berkeley
</span><br>
<span class="quotelev1">&gt; Museum of Vertebrate Zoology
</span><br>
<span class="quotelev1">&gt; Phone: 510-495-5833
</span><br>
<span class="quotelev1">&gt; Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
</span><br>
<span class="quotelev1">&gt; Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11457.php">Ralph Castain: "Re: [OMPI users] OMPI as a batch system"</a>
<li><strong>In reply to:</strong> <a href="11454.php">Matthew MacManes: "[OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11461.php">Tim Prince: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11461.php">Tim Prince: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
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
