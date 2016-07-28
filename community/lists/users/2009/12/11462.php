<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 19:19:49 2009" -->
<!-- isoreceived="20091209001949" -->
<!-- sent="Tue, 8 Dec 2009 16:19:42 -0800" -->
<!-- isosent="20091209001942" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="D61F336D-88B5-4DBB-AC6A-88280401E446_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.1272.1260311354.15697.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)<br>
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 19:19:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11463.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11461.php">Tim Prince: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Maybe reply:</strong> <a href="11517.php">Terry Dontje: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus, 
<br>
<p>Thanks for your ideas.. I have a few questions, and will try to answer yours in hopes of solving this!!
<br>
<p>Should I worry about setting things like --num-cores --bind-to-cores?  This, I think, gets at your questions about processor affinity.. Am I right? I could not exactly figure out the -mca mpi-paffinity_alone stuff...
<br>
<p>1. Additional load: nope. nothing else, most of the time not even firefox. 
<br>
2. RAM: no problems apparent when monitoring through TOP. Interesting, I did wonder about oversubscription, so I tried the option --nooversubscription, but this gave me an error mssage.
<br>
3. I have not tried other MPI flavors.. Ive been speaking to the authors of the programs, and they are both using openMPI.  
<br>
4. I don't think that this is a problem, as I'm specifying --with-mpi=/usr/bin/...  when I compile the programs. Is there any other way to be sure that this is not a problem?
<br>
5. I had not been, and you could see some shuffling when monitoring the load on specific processors. I have tried to use --bind-to-cores to deal with this. I don't understand how to use the -mca options you asked about. 
<br>
6. I am using Ubuntu 9.10. gcc 4.4.1 and g++  4.4.1
<br>
<p><p>MyBayes is a for bayesian phylogenetics:  <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a> 
<br>
ABySS: is a program for assembly of DNA sequence data: <a href="http://www.bcgsc.ca/platform/bioinfo/software/abyss">http://www.bcgsc.ca/platform/bioinfo/software/abyss</a>
<br>
<p><span class="quotelev1">&gt; Do the programs mix MPI (message passing) with OpenMP (threads)? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Im honestly not sure what this means..
<br>
<p>Thanks for all your help!
<br>
<p>Matt
<br>
<p><span class="quotelev1">&gt;  Hi Matthew 
</span><br>
<span class="quotelev1">&gt; More guesses/questions than anything else: 
</span><br>
<span class="quotelev1">&gt; 1) Is there any additional load on this machine? 
</span><br>
<span class="quotelev1">&gt; We had problems like that (on different machines) when 
</span><br>
<span class="quotelev1">&gt; users start listening to streaming video, doing Matlab calculations, 
</span><br>
<span class="quotelev1">&gt; etc, while the MPI programs are running. 
</span><br>
<span class="quotelev1">&gt; This tends to oversubscribe the cores, and may lead to crashes. 
</span><br>
<span class="quotelev1">&gt; 2) RAM: 
</span><br>
<span class="quotelev1">&gt; Can you monitor the RAM usage through &quot;top&quot;? 
</span><br>
<span class="quotelev1">&gt; (I presume you are on Linux.) 
</span><br>
<span class="quotelev1">&gt; It may show unexpected memory leaks, if they exist. 
</span><br>
<span class="quotelev1">&gt; On &quot;top&quot;, type &quot;1&quot; (one) see all cores, type &quot;f&quot; then &quot;j&quot; 
</span><br>
<span class="quotelev1">&gt; to see the core number associated to each process. 
</span><br>
<span class="quotelev1">&gt; 3) Do the programs work right with other MPI flavors (e.g. MPICH2)? 
</span><br>
<span class="quotelev1">&gt; If not, then it is not OpenMPI's fault. 
</span><br>
<span class="quotelev1">&gt; 4) Any possibility that the MPI versions/flavors of mpicc and 
</span><br>
<span class="quotelev1">&gt; mpirun that you are using to compile and launch the program are not the 
</span><br>
<span class="quotelev1">&gt; same? 
</span><br>
<span class="quotelev1">&gt; 5) Are you setting processor affinity on mpiexec? 
</span><br>
<span class="quotelev1">&gt; mpiexec -mca mpi_paffinity_alone 1 -np ... bla, bla ... 
</span><br>
<span class="quotelev1">&gt; Context switching across the cores may also cause trouble, I suppose. 
</span><br>
<span class="quotelev1">&gt; 6) Which Linux are you using (uname -a)? 
</span><br>
<span class="quotelev1">&gt; On other mailing lists I read reports that only quite recent kernels 
</span><br>
<span class="quotelev1">&gt; support all the Intel Nehalem processor features well. 
</span><br>
<span class="quotelev1">&gt; I don't have Nehalem, I can't help here, 
</span><br>
<span class="quotelev1">&gt; but the information may be useful 
</span><br>
<span class="quotelev1">&gt; for other list subscribers to help you. 
</span><br>
<span class="quotelev1">&gt; *** 
</span><br>
<span class="quotelev1">&gt; As for the programs, some programs require specific setup, 
</span><br>
<span class="quotelev1">&gt; (and even specific compilation) when the number of MPI processes 
</span><br>
<span class="quotelev1">&gt; vary. 
</span><br>
<span class="quotelev1">&gt; It may help if you tell us a link to the program sites. 
</span><br>
<span class="quotelev1">&gt; Baysian statistics is not totally out of our business, 
</span><br>
<span class="quotelev1">&gt; but phylogenetic genetic trees is not really my league, 
</span><br>
<span class="quotelev1">&gt; hence forgive me any bad guesses, please, 
</span><br>
<span class="quotelev1">&gt; but would it need specific compilation or a different 
</span><br>
<span class="quotelev1">&gt; set of input parameters to run correctly on a different 
</span><br>
<span class="quotelev1">&gt; number of processors? 
</span><br>
<span class="quotelev1">&gt; Do the programs mix MPI (message passing) with OpenMP (threads)? 
</span><br>
<span class="quotelev1">&gt; I found this MrBayes, which seems to do the above: 
</span><br>
<span class="quotelev1">&gt; <a href="http://mrbayes.csit.fsu.edu/">http://mrbayes.csit.fsu.edu/</a> 
</span><br>
<span class="quotelev1">&gt; <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a> 
</span><br>
<span class="quotelev1">&gt; As for the ABySS, what is it, where can it be found? 
</span><br>
<span class="quotelev1">&gt; Doesn't look like a deep ocean circulation model, as the name suggest. 
</span><br>
<span class="quotelev1">&gt; My $0.02 
</span><br>
<span class="quotelev1">&gt; Gus Correa 
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11463.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11461.php">Tim Prince: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Maybe reply:</strong> <a href="11517.php">Terry Dontje: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
