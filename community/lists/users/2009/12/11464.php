<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 23:50:15 2009" -->
<!-- isoreceived="20091209045015" -->
<!-- sent="Tue, 08 Dec 2009 23:50:04 -0500" -->
<!-- isosent="20091209045004" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="4B1F2C7C.8040803_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D61F336D-88B5-4DBB-AC6A-88280401E446_at_gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 23:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11465.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11463.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11462.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11478.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11478.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matthew
<br>
<p>Please see comments/answers inline below.
<br>
<p>Matthew MacManes wrote:
<br>
<span class="quotelev1">&gt; Hi Gus, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your ideas.. I have a few questions, and will try to answer 
</span><br>
<span class="quotelev1">&gt; yours in hopes of solving this!!
</span><br>
<p>A simple way to test OpenMPI on your system is to run the
<br>
test programs that come with the OpenMPI source code,
<br>
hello_c.c, connectivity_c.c, and ring_c.c:
<br>
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
<br>
<p>Get the tarball from the OpenMPI site, gzip and untar it,
<br>
and look for it in the &quot;examples&quot; directory.
<br>
Compile it with /your/path/to/openmpi/bin/mpicc hello_c.c
<br>
Run it with /your/path/to/openmpi/bin/mpiexec -np X a.out
<br>
using X = 2, 4, 8, 16, 32, 64, ...
<br>
<p>This will tell if your OpenMPI is functional,
<br>
and if you can run on many Nehalem cores,
<br>
even with oversubscription perhaps.
<br>
It will also set the stage for further investigation of your
<br>
actual programs.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I worry about setting things like --num-cores --bind-to-cores? 
</span><br>
<span class="quotelev1">&gt;  This, I think, gets at your questions about processor affinity.. Am I 
</span><br>
<span class="quotelev1">&gt; right? I could not exactly figure out the -mca mpi-paffinity_alone stuff...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I use the simple minded -mca mpi-paffinity_alone 1.
<br>
This is probably the easiest way to assign a process to a core.
<br>
There more complex  ways in OpenMPI, but I haven't tried.
<br>
Indeed, -mca mpi-paffinity_alone 1 does improve performance of
<br>
our programs here.
<br>
There is a chance that without it the 16 virtual cores of
<br>
your Nehalem get confused with more than 3 processes
<br>
(you reported that -np &gt; 3 breaks).
<br>
<p>Did you try adding just -mca mpi-paffinity_alone 1  to
<br>
your mpiexec command line?
<br>
<p><p><span class="quotelev1">&gt; 1. Additional load: nope. nothing else, most of the time not even firefox. 
</span><br>
<p>Good.
<br>
Turn off firefox, etc, to make it even better.
<br>
Ideally, use runlevel 3, no X, like a computer cluster node,
<br>
but this may not be required.
<br>
<p><span class="quotelev1">&gt; 2. RAM: no problems apparent when monitoring through TOP. Interesting, I 
</span><br>
<span class="quotelev1">&gt; did wonder about oversubscription, so I tried the option 
</span><br>
<span class="quotelev1">&gt; --nooversubscription, but this gave me an error mssage.
</span><br>
<p>Oversubscription from your program would only happen if
<br>
you asked for more processes than available cores, i.e.,
<br>
-np &gt; 8 (or &quot;virtual&quot; cores, in case of Nehalem hyperthreading,
<br>
-np &gt; 16).
<br>
Since you have -np=4 there is no oversubscription,
<br>
unless you have other external load (e.g. Matlab, etc),
<br>
but you said you don't.
<br>
<p>Yet another possibility would be if your program is threaded
<br>
(e.g. using OpenMP along with MPI), but considering what you
<br>
said about OpenMP I would guess the programs don't use it.
<br>
For instance, you launch the program with 4 MPI processes,
<br>
and each process decides to start, say, 8 OpenMP threads.
<br>
You end up with 32 threads and 8 (real) cores (or 16 hyperthreaded
<br>
ones on Nehalem).
<br>
<p><p>What else does top say?
<br>
Any hog processes (memory- or CPU-wise)
<br>
besides your program processes?
<br>
<p><span class="quotelev1">&gt; 3. I have not tried other MPI flavors.. Ive been speaking to the authors 
</span><br>
<span class="quotelev1">&gt; of the programs, and they are both using openMPI.  
</span><br>
<p>I was not trying to convince you to use another MPI.
<br>
I use MPICH2 also, but OpenMPI reigns here.
<br>
The idea or trying it with MPICH2 was just to check whether OpenMPI
<br>
is causing the problem, but I don't think it is.
<br>
<p><span class="quotelev1">&gt; 4. I don't think that this is a problem, as I'm specifying 
</span><br>
<span class="quotelev1">&gt; --with-mpi=/usr/bin/...  when I compile the programs. Is there any other 
</span><br>
<span class="quotelev1">&gt; way to be sure that this is not a problem?
</span><br>
<p>Hmmm ....
<br>
I don't know about your Ubuntu (we have CentOS and Fedora on various
<br>
machines).
<br>
However, most Linux distributions come with their MPI flavors,
<br>
and so do compilers, etc.
<br>
Often times they install these goodies in unexpected places,
<br>
and this has caused a lot of frustration.
<br>
There are tons of postings on this list that eventually
<br>
boiled down to mismatched versions of MPI in unexpected places.
<br>
<p><p>The easy way is to use full path names to compile and to run.
<br>
Something like this:
<br>
/my/openmpi/bin/mpicc on your program configuration script),
<br>
<p>and something like this
<br>
/my/openmpi/bin/mpiexec -np  ... bla, bla ...
<br>
when you submit the job.
<br>
<p>You can check your version with &quot;which mpicc&quot;, &quot;which mpiexec&quot;,
<br>
and (perhaps using full path names) with
<br>
&quot;ompi_info&quot;, &quot;mpicc --showme&quot;, &quot;mpiexec --help&quot;.
<br>
<p><p><span class="quotelev1">&gt; 5. I had not been, and you could see some shuffling when monitoring the 
</span><br>
<span class="quotelev1">&gt; load on specific processors. I have tried to use --bind-to-cores to deal 
</span><br>
<span class="quotelev1">&gt; with this. I don't understand how to use the -mca options you asked about. 
</span><br>
<span class="quotelev1">&gt; 6. I am using Ubuntu 9.10. gcc 4.4.1 and g++  4.4.1
</span><br>
<p>I am afraid I won't be of help, because I don't have Nehalem.
<br>
However, I read about Nehalem requiring quite recent kernels
<br>
to get all of its features working right.
<br>
<p>What is the output of &quot;uname -a&quot;?
<br>
This will tell the kernel version, etc.
<br>
Other list subscribers may give you a suggestion if you post the
<br>
information.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MyBayes is a for bayesian phylogenetics: 
</span><br>
<span class="quotelev1">&gt;  <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a> 
</span><br>
<span class="quotelev1">&gt; ABySS: is a program for assembly of DNA sequence 
</span><br>
<span class="quotelev1">&gt; data: <a href="http://www.bcgsc.ca/platform/bioinfo/software/abyss">http://www.bcgsc.ca/platform/bioinfo/software/abyss</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks for the links!
<br>
I had found the MrBayes link.
<br>
I eventually found what your ABySS was about, but no links.
<br>
Amazing that it is about DNA/gene sequencing.
<br>
Our abyss here is the deep ocean ... :)
<br>
Abysmal difference!
<br>
<p><span class="quotelev2">&gt;&gt; Do the programs mix MPI (message passing) with OpenMP (threads)? 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Im honestly not sure what this means..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Some programs mix the two.
<br>
OpenMP only works in a shared memory environment (e.g. a single
<br>
computer like yours), whereas MPI can use both shared memory
<br>
and work across a network (e.g. in a cluster).
<br>
There are other differences too.
<br>
<p>Unlikely that you have this hybrid type of parallel program,
<br>
otherwise there would be some reference to OpenMP
<br>
on the very program configuration files, program documentation, etc.
<br>
Also, in general the configuration scripts of these hybrid
<br>
programs can turn on MPI only, or OpenMP only, or both,
<br>
depending on how you configure.
<br>
<p>Even to compile with OpenMP you would need a proper compiler
<br>
flag, but that one might be hidden in a Makefile too, making
<br>
a bit hard to find. &quot;grep -n mp Makefile&quot; may give a clue.
<br>
Anything on the documentation that mentions threads or OpenMP?
<br>
<p>FYI, here is OpenMP:
<br>
<a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
<br>
<p><span class="quotelev1">&gt; Thanks for all your help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1"> &gt; Matt
</span><br>
<p>Well, so far it didn't really help. :(
<br>
<p>But let's hope to find a clue,
<br>
maybe with a little help of
<br>
our list subscriber friends.
<br>
<p>Gus Correa
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
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Matthew
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More guesses/questions than anything else:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Is there any additional load on this machine?
</span><br>
<span class="quotelev2">&gt;&gt; We had problems like that (on different machines) when
</span><br>
<span class="quotelev2">&gt;&gt; users start listening to streaming video, doing Matlab calculations,
</span><br>
<span class="quotelev2">&gt;&gt; etc, while the MPI programs are running.
</span><br>
<span class="quotelev2">&gt;&gt; This tends to oversubscribe the cores, and may lead to crashes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) RAM:
</span><br>
<span class="quotelev2">&gt;&gt; Can you monitor the RAM usage through &quot;top&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; (I presume you are on Linux.)
</span><br>
<span class="quotelev2">&gt;&gt; It may show unexpected memory leaks, if they exist.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On &quot;top&quot;, type &quot;1&quot; (one) see all cores, type &quot;f&quot; then &quot;j&quot;
</span><br>
<span class="quotelev2">&gt;&gt; to see the core number associated to each process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Do the programs work right with other MPI flavors (e.g. MPICH2)?
</span><br>
<span class="quotelev2">&gt;&gt; If not, then it is not OpenMPI's fault.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) Any possibility that the MPI versions/flavors of mpicc and
</span><br>
<span class="quotelev2">&gt;&gt; mpirun that you are using to compile and launch the program are not the
</span><br>
<span class="quotelev2">&gt;&gt; same?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5) Are you setting processor affinity on mpiexec?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -mca mpi_paffinity_alone 1 -np ... bla, bla ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Context switching across the cores may also cause trouble, I suppose.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6) Which Linux are you using (uname -a)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On other mailing lists I read reports that only quite recent kernels
</span><br>
<span class="quotelev2">&gt;&gt; support all the Intel Nehalem processor features well.
</span><br>
<span class="quotelev2">&gt;&gt; I don't have Nehalem, I can't help here,
</span><br>
<span class="quotelev2">&gt;&gt; but the information may be useful
</span><br>
<span class="quotelev2">&gt;&gt; for other list subscribers to help you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for the programs, some programs require specific setup,
</span><br>
<span class="quotelev2">&gt;&gt; (and even specific compilation) when the number of MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; vary.
</span><br>
<span class="quotelev2">&gt;&gt; It may help if you tell us a link to the program sites.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Baysian statistics is not totally out of our business,
</span><br>
<span class="quotelev2">&gt;&gt; but phylogenetic genetic trees is not really my league,
</span><br>
<span class="quotelev2">&gt;&gt; hence forgive me any bad guesses, please,
</span><br>
<span class="quotelev2">&gt;&gt; but would it need specific compilation or a different
</span><br>
<span class="quotelev2">&gt;&gt; set of input parameters to run correctly on a different
</span><br>
<span class="quotelev2">&gt;&gt; number of processors?
</span><br>
<span class="quotelev2">&gt;&gt; Do the programs mix MPI (message passing) with OpenMP (threads)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found this MrBayes, which seems to do the above:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mrbayes.csit.fsu.edu/">http://mrbayes.csit.fsu.edu/</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for the ABySS, what is it, where can it be found?
</span><br>
<span class="quotelev2">&gt;&gt; Doesn't look like a deep ocean circulation model, as the name suggest.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My $0.02
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11465.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11463.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11462.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11478.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11478.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
