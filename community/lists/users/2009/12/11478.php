<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 13:00:36 2009" -->
<!-- isoreceived="20091209180036" -->
<!-- sent="Wed, 9 Dec 2009 10:00:23 -0800" -->
<!-- isosent="20091209180023" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="545D4CAA-BD39-4A30-A013-1480F18B8D0D_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1F2C7C.8040803_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2009-12-09 13:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11479.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11477.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Interestingly the results for the connectivity_c test... works fine with -np &lt;8. For -np &gt;8 it works some of the time, other times it HANGS. I have got to believe that this is a big clue!! Also, when it hangs, sometimes I get the message &quot;mpirun was unable to cleanly terminate the daemons on the nodes shown below&quot; Note that NO nodes are shown below.   Once, I got -np 250 to pass the connectivity test, but I was not able to replicate this reliable, so I'm not sure if it was a fluke, or what.  Here is a like to a screenshop of TOP when connectivity_c is hung with -np 14.. I see that 2 processes are only at 50% CPU usage.. Hmmmm  
<br>
<p><a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink</a>
<br>
<p>The other tests, ring_c, hello_c, as well as the cxx versions of these guys with with all values of -np.
<br>
<p>Using -mca mpi-paffinity_alone 1 I get the same behavior. 
<br>
<p>I agree that I am should worry about the mismatch between where the libraries are installed versus where I am telling my programs to look for them. Would this type of mismatch cause behavior like what I am seeing, i.e. working with  a small number of processors, but failing with larger?  It seems like a mismatch would have the same effect regardless of the number of processors used. Maybe I am mistaken. Anyway, to address this, which mpirun gives me /usr/local/bin/mpirun.. so to configure ./configure --with-mpi=/usr/local/bin/mpirun and to run /usr/local/bin/mpirun -np X ...  This should 
<br>
<p>uname -a gives me: Linux macmanes 2.6.31-16-generic #52-Ubuntu SMP Thu Dec 3 22:07:16 UTC 2006 x86_64 GNU/Linux
<br>
<p>Matt
<br>
<p>On Dec 8, 2009, at 8:50 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Matthew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please see comments/answers inline below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthew MacManes wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus, Thanks for your ideas.. I have a few questions, and will try to answer yours in hopes of solving this!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A simple way to test OpenMPI on your system is to run the
</span><br>
<span class="quotelev1">&gt; test programs that come with the OpenMPI source code,
</span><br>
<span class="quotelev1">&gt; hello_c.c, connectivity_c.c, and ring_c.c:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Get the tarball from the OpenMPI site, gzip and untar it,
</span><br>
<span class="quotelev1">&gt; and look for it in the &quot;examples&quot; directory.
</span><br>
<span class="quotelev1">&gt; Compile it with /your/path/to/openmpi/bin/mpicc hello_c.c
</span><br>
<span class="quotelev1">&gt; Run it with /your/path/to/openmpi/bin/mpiexec -np X a.out
</span><br>
<span class="quotelev1">&gt; using X = 2, 4, 8, 16, 32, 64, ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will tell if your OpenMPI is functional,
</span><br>
<span class="quotelev1">&gt; and if you can run on many Nehalem cores,
</span><br>
<span class="quotelev1">&gt; even with oversubscription perhaps.
</span><br>
<span class="quotelev1">&gt; It will also set the stage for further investigation of your
</span><br>
<span class="quotelev1">&gt; actual programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should I worry about setting things like --num-cores --bind-to-cores?  This, I think, gets at your questions about processor affinity.. Am I right? I could not exactly figure out the -mca mpi-paffinity_alone stuff...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use the simple minded -mca mpi-paffinity_alone 1.
</span><br>
<span class="quotelev1">&gt; This is probably the easiest way to assign a process to a core.
</span><br>
<span class="quotelev1">&gt; There more complex  ways in OpenMPI, but I haven't tried.
</span><br>
<span class="quotelev1">&gt; Indeed, -mca mpi-paffinity_alone 1 does improve performance of
</span><br>
<span class="quotelev1">&gt; our programs here.
</span><br>
<span class="quotelev1">&gt; There is a chance that without it the 16 virtual cores of
</span><br>
<span class="quotelev1">&gt; your Nehalem get confused with more than 3 processes
</span><br>
<span class="quotelev1">&gt; (you reported that -np &gt; 3 breaks).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you try adding just -mca mpi-paffinity_alone 1  to
</span><br>
<span class="quotelev1">&gt; your mpiexec command line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Additional load: nope. nothing else, most of the time not even firefox. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt; Turn off firefox, etc, to make it even better.
</span><br>
<span class="quotelev1">&gt; Ideally, use runlevel 3, no X, like a computer cluster node,
</span><br>
<span class="quotelev1">&gt; but this may not be required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. RAM: no problems apparent when monitoring through TOP. Interesting, I did wonder about oversubscription, so I tried the option --nooversubscription, but this gave me an error mssage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oversubscription from your program would only happen if
</span><br>
<span class="quotelev1">&gt; you asked for more processes than available cores, i.e.,
</span><br>
<span class="quotelev1">&gt; -np &gt; 8 (or &quot;virtual&quot; cores, in case of Nehalem hyperthreading,
</span><br>
<span class="quotelev1">&gt; -np &gt; 16).
</span><br>
<span class="quotelev1">&gt; Since you have -np=4 there is no oversubscription,
</span><br>
<span class="quotelev1">&gt; unless you have other external load (e.g. Matlab, etc),
</span><br>
<span class="quotelev1">&gt; but you said you don't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yet another possibility would be if your program is threaded
</span><br>
<span class="quotelev1">&gt; (e.g. using OpenMP along with MPI), but considering what you
</span><br>
<span class="quotelev1">&gt; said about OpenMP I would guess the programs don't use it.
</span><br>
<span class="quotelev1">&gt; For instance, you launch the program with 4 MPI processes,
</span><br>
<span class="quotelev1">&gt; and each process decides to start, say, 8 OpenMP threads.
</span><br>
<span class="quotelev1">&gt; You end up with 32 threads and 8 (real) cores (or 16 hyperthreaded
</span><br>
<span class="quotelev1">&gt; ones on Nehalem).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What else does top say?
</span><br>
<span class="quotelev1">&gt; Any hog processes (memory- or CPU-wise)
</span><br>
<span class="quotelev1">&gt; besides your program processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. I have not tried other MPI flavors.. Ive been speaking to the authors of the programs, and they are both using openMPI.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was not trying to convince you to use another MPI.
</span><br>
<span class="quotelev1">&gt; I use MPICH2 also, but OpenMPI reigns here.
</span><br>
<span class="quotelev1">&gt; The idea or trying it with MPICH2 was just to check whether OpenMPI
</span><br>
<span class="quotelev1">&gt; is causing the problem, but I don't think it is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. I don't think that this is a problem, as I'm specifying --with-mpi=/usr/bin/...  when I compile the programs. Is there any other way to be sure that this is not a problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm ....
</span><br>
<span class="quotelev1">&gt; I don't know about your Ubuntu (we have CentOS and Fedora on various
</span><br>
<span class="quotelev1">&gt; machines).
</span><br>
<span class="quotelev1">&gt; However, most Linux distributions come with their MPI flavors,
</span><br>
<span class="quotelev1">&gt; and so do compilers, etc.
</span><br>
<span class="quotelev1">&gt; Often times they install these goodies in unexpected places,
</span><br>
<span class="quotelev1">&gt; and this has caused a lot of frustration.
</span><br>
<span class="quotelev1">&gt; There are tons of postings on this list that eventually
</span><br>
<span class="quotelev1">&gt; boiled down to mismatched versions of MPI in unexpected places.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The easy way is to use full path names to compile and to run.
</span><br>
<span class="quotelev1">&gt; Something like this:
</span><br>
<span class="quotelev1">&gt; /my/openmpi/bin/mpicc on your program configuration script),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and something like this
</span><br>
<span class="quotelev1">&gt; /my/openmpi/bin/mpiexec -np  ... bla, bla ...
</span><br>
<span class="quotelev1">&gt; when you submit the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can check your version with &quot;which mpicc&quot;, &quot;which mpiexec&quot;,
</span><br>
<span class="quotelev1">&gt; and (perhaps using full path names) with
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info&quot;, &quot;mpicc --showme&quot;, &quot;mpiexec --help&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 5. I had not been, and you could see some shuffling when monitoring the load on specific processors. I have tried to use --bind-to-cores to deal with this. I don't understand how to use the -mca options you asked about. 6. I am using Ubuntu 9.10. gcc 4.4.1 and g++  4.4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am afraid I won't be of help, because I don't have Nehalem.
</span><br>
<span class="quotelev1">&gt; However, I read about Nehalem requiring quite recent kernels
</span><br>
<span class="quotelev1">&gt; to get all of its features working right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the output of &quot;uname -a&quot;?
</span><br>
<span class="quotelev1">&gt; This will tell the kernel version, etc.
</span><br>
<span class="quotelev1">&gt; Other list subscribers may give you a suggestion if you post the
</span><br>
<span class="quotelev1">&gt; information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MyBayes is a for bayesian phylogenetics:  <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a> ABySS: is a program for assembly of DNA sequence data: <a href="http://www.bcgsc.ca/platform/bioinfo/software/abyss">http://www.bcgsc.ca/platform/bioinfo/software/abyss</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the links!
</span><br>
<span class="quotelev1">&gt; I had found the MrBayes link.
</span><br>
<span class="quotelev1">&gt; I eventually found what your ABySS was about, but no links.
</span><br>
<span class="quotelev1">&gt; Amazing that it is about DNA/gene sequencing.
</span><br>
<span class="quotelev1">&gt; Our abyss here is the deep ocean ... :)
</span><br>
<span class="quotelev1">&gt; Abysmal difference!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do the programs mix MPI (message passing) with OpenMP (threads)? 
</span><br>
<span class="quotelev2">&gt;&gt; Im honestly not sure what this means..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some programs mix the two.
</span><br>
<span class="quotelev1">&gt; OpenMP only works in a shared memory environment (e.g. a single
</span><br>
<span class="quotelev1">&gt; computer like yours), whereas MPI can use both shared memory
</span><br>
<span class="quotelev1">&gt; and work across a network (e.g. in a cluster).
</span><br>
<span class="quotelev1">&gt; There are other differences too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unlikely that you have this hybrid type of parallel program,
</span><br>
<span class="quotelev1">&gt; otherwise there would be some reference to OpenMP
</span><br>
<span class="quotelev1">&gt; on the very program configuration files, program documentation, etc.
</span><br>
<span class="quotelev1">&gt; Also, in general the configuration scripts of these hybrid
</span><br>
<span class="quotelev1">&gt; programs can turn on MPI only, or OpenMP only, or both,
</span><br>
<span class="quotelev1">&gt; depending on how you configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even to compile with OpenMP you would need a proper compiler
</span><br>
<span class="quotelev1">&gt; flag, but that one might be hidden in a Makefile too, making
</span><br>
<span class="quotelev1">&gt; a bit hard to find. &quot;grep -n mp Makefile&quot; may give a clue.
</span><br>
<span class="quotelev1">&gt; Anything on the documentation that mentions threads or OpenMP?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI, here is OpenMP:
</span><br>
<span class="quotelev1">&gt; <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for all your help!
</span><br>
<span class="quotelev2">&gt; &gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, so far it didn't really help. :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But let's hope to find a clue,
</span><br>
<span class="quotelev1">&gt; maybe with a little help of
</span><br>
<span class="quotelev1">&gt; our list subscriber friends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Matthew
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More guesses/questions than anything else:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) Is there any additional load on this machine?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We had problems like that (on different machines) when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users start listening to streaming video, doing Matlab calculations,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc, while the MPI programs are running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This tends to oversubscribe the cores, and may lead to crashes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) RAM:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you monitor the RAM usage through &quot;top&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I presume you are on Linux.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It may show unexpected memory leaks, if they exist.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On &quot;top&quot;, type &quot;1&quot; (one) see all cores, type &quot;f&quot; then &quot;j&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to see the core number associated to each process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) Do the programs work right with other MPI flavors (e.g. MPICH2)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not, then it is not OpenMPI's fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) Any possibility that the MPI versions/flavors of mpicc and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun that you are using to compile and launch the program are not the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) Are you setting processor affinity on mpiexec?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -mca mpi_paffinity_alone 1 -np ... bla, bla ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Context switching across the cores may also cause trouble, I suppose.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6) Which Linux are you using (uname -a)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On other mailing lists I read reports that only quite recent kernels
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support all the Intel Nehalem processor features well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have Nehalem, I can't help here,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but the information may be useful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for other list subscribers to help you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for the programs, some programs require specific setup,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and even specific compilation) when the number of MPI processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It may help if you tell us a link to the program sites.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Baysian statistics is not totally out of our business,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but phylogenetic genetic trees is not really my league,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hence forgive me any bad guesses, please,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but would it need specific compilation or a different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set of input parameters to run correctly on a different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of processors?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do the programs mix MPI (message passing) with OpenMP (threads)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found this MrBayes, which seems to do the above:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://mrbayes.csit.fsu.edu/">http://mrbayes.csit.fsu.edu/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for the ABySS, what is it, where can it be found?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doesn't look like a deep ocean circulation model, as the name suggest.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My $0.02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>_________________________________
<br>
Matthew MacManes
<br>
PhD Candidate
<br>
University of California- Berkeley
<br>
Museum of Vertebrate Zoology
<br>
Phone: 510-495-5833
<br>
Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
<br>
Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
<br>
<p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11479.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11477.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11485.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
