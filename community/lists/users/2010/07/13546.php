<?
$subject_val = "Re: [OMPI users] configure options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 12:49:49 2010" -->
<!-- isoreceived="20100708164949" -->
<!-- sent="Thu, 08 Jul 2010 12:49:39 -0400" -->
<!-- isosent="20100708164939" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure options" -->
<!-- id="4C3601A3.8090901_at_ldeo.columbia.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201007081125561166896_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure options<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 12:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13547.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13545.php">Anton Shterenlikht: "[OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="13544.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13547.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13547.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Zhigang
<br>
<p>I never used OpenFoam
<br>
(we're atmosphere/ocean/climate/Earth Science CFD practitioners here!) 
<br>
but I would guess it should work with any
<br>
resource manager, not necessarily with SGE.
<br>
<p>In any case, it doesn't make much sense to configure OpenMPI with SGE,
<br>
if your university HPC uses another resource manager (RM).
<br>
You need to find out which resource manager the university
<br>
computer has,
<br>
and build OpenMPI with support for it, assuming that resource manager
<br>
is one that is supported by OpenMPI.
<br>
If you are lucky, it will be SGE.
<br>
If it is Torque, or SLURM, you can still build OpenMPI with RM support.
<br>
<p>If you prefer, you can just leave it alone.
<br>
You can still run your OpenMPI programs with mpiexec even if you
<br>
don't build OpenMPI with resource manager support.
<br>
<p>I would guess any resource manager will tell you the compute nodes
<br>
that it allocated to you in some way.
<br>
In Torque/PBS (which I use here) the environment variable $PBS_NODEFILE
<br>
has the list of nodes for each job.
<br>
(The list repeats the nodes' names several times, if you ask for many 
<br>
processors/cores on each node.)
<br>
<p>So, even if I didn't build OpenMPI with Torque support,
<br>
I could launch mpiexec with a syntax more or less like this:
<br>
<p>@ NP = `cat $PBS_NODEFILE | wc -l`
<br>
mpiexec -n $NP -hostfile $PBS_NODEFILE ./my_program
<br>
<p>Not as simple as &quot;mpiexec -n $NP ./my_program&quot;, but not
<br>
a big deal either.
<br>
<p>Other resource managers should have something
<br>
equivalent to $PBS_NODEFILE.
<br>
You need to find out what your computer has.
<br>
In general there is a command named &quot;qsub&quot;, or &quot;bsub&quot;,
<br>
or something else,
<br>
and &quot;man qsub&quot; or &quot;man bsub&quot; should turn up some information.
<br>
Otherwise, you can ask your HPC support folks about it.
<br>
<p>I hope this helps,
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
<p>Zhigang Wei wrote:
<br>
<span class="quotelev1">&gt; Thank you Gus, your answer is very helpful.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I use a CFD opensource called OpenFOAM, from official build suggestions, 
</span><br>
<span class="quotelev1">&gt; I found something like &quot;--with-sge&quot;,
</span><br>
<span class="quotelev1">&gt; but I just don't know if it make sense in my school 's hpc setting.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The basic question is, if simply &quot;./configure --prefix=blahblah&quot; works 
</span><br>
<span class="quotelev1">&gt; (as you have said the modern openmpi will AUTOMATICALLY detect the hard 
</span><br>
<span class="quotelev1">&gt; and software system configuaration), then, why should people around try 
</span><br>
<span class="quotelev1">&gt; to build it with &quot;--with-sge&quot;, etc. That make those dummies like me 
</span><br>
<span class="quotelev1">&gt; really confused.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks and best Regards,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Zhigang Wei
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; NatHaz Modeling Laboratory
</span><br>
<span class="quotelev1">&gt; University of Notre Dame
</span><br>
<span class="quotelev1">&gt; 112J FitzPatrick Hall
</span><br>
<span class="quotelev1">&gt; Notre Dame, IN 46556 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2010-07-08
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *&#229;&#143;&#145;&#228;&#187;&#182;&#228;&#186;&#186;&#239;&#188;&#154;* Gus Correa
</span><br>
<span class="quotelev1">&gt; *&#229;&#143;&#145;&#233;&#128;&#129;&#230;&#151;&#182;&#233;&#151;&#180;&#239;&#188;&#154;* 2010-07-08  11:17:26
</span><br>
<span class="quotelev1">&gt; *&#230;&#148;&#182;&#228;&#187;&#182;&#228;&#186;&#186;&#239;&#188;&#154;* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *&#230;&#138;&#132;&#233;&#128;&#129;&#239;&#188;&#154;*
</span><br>
<span class="quotelev1">&gt; *&#228;&#184;&#187;&#233;&#162;&#152;&#239;&#188;&#154;* Re: [OMPI users] configure options
</span><br>
<span class="quotelev1">&gt; Hi Zhigang
</span><br>
<span class="quotelev1">&gt; So, did setting the LD_LIBRARY_PATH work?
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; I don't add many options to the OpenMPI configure,
</span><br>
<span class="quotelev1">&gt; besides --prefix.
</span><br>
<span class="quotelev1">&gt; OpenMPI does a very good job searching and checking
</span><br>
<span class="quotelev1">&gt; for everything that is available and that it needs in the system.
</span><br>
<span class="quotelev1">&gt; It will build with support for nearly everything it finds
</span><br>
<span class="quotelev1">&gt; and that works.
</span><br>
<span class="quotelev1">&gt; Since you are using OpenMPI in your university HPC computer,
</span><br>
<span class="quotelev1">&gt; you may want to piggy back support from its resource manager/queue
</span><br>
<span class="quotelev1">&gt; system (e.g. Torque/PBS, --with-tm, or SGE, or SLURM).
</span><br>
<span class="quotelev1">&gt; This makes mpiexec work in cooperation with the resource manager (RM),
</span><br>
<span class="quotelev1">&gt; automatically using the nodes that were allocated by the the RM
</span><br>
<span class="quotelev1">&gt; to your job.
</span><br>
<span class="quotelev1">&gt; That is not essential, but it helps.
</span><br>
<span class="quotelev1">&gt; The same is true if there is specific hardware
</span><br>
<span class="quotelev1">&gt; (e.g. Infinband --with-openib, NUMA, --with-libnuma, etc).
</span><br>
<span class="quotelev1">&gt; You may need to point configure to the directories where these libraries
</span><br>
<span class="quotelev1">&gt; are, if they are not in standard locations, it depends on your system.
</span><br>
<span class="quotelev1">&gt; Do ./configure --help for a list of options.
</span><br>
<span class="quotelev1">&gt; Also, consult the OpenMPI FAQ, which is the best resource to answer
</span><br>
<span class="quotelev1">&gt; many of your questions:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev1">&gt; One way to check what configuration options OpenMPI is really using,
</span><br>
<span class="quotelev1">&gt; is to redirect the configure output to a file, and inspect it to see if
</span><br>
<span class="quotelev1">&gt; everything you want is there.
</span><br>
<span class="quotelev1">&gt; I hope this helps,
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
<span class="quotelev1">&gt; Zhigang Wei wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; Hi, thanks, the LD_LIBRARY_PATH has been set, and I checked again, and I 
</span><br>
<span class="quotelev2">&gt;  &gt; don't think there is a confict.
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; May I ask you a question, how do you normally configure your openmpi?
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; I guess you will not use simply &quot;./configure --prefix=blahblah&quot;, pls 
</span><br>
<span class="quotelev2">&gt;  &gt; correct me if I am wrong.
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; So, what is your procedure to check your system hardware and software 
</span><br>
<span class="quotelev2">&gt;  &gt; background, so as to make openmpi correctly built.
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; That's my question.
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; And Thank you, Gus
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt;  
</span><br>
<span class="quotelev2">&gt;  &gt; Zhigang Wei
</span><br>
<span class="quotelev2">&gt;  &gt; ------------
</span><br>
<span class="quotelev2">&gt;  &gt; NatHaz Modeling Laboratory
</span><br>
<span class="quotelev2">&gt;  &gt; University of Notre Dame
</span><br>
<span class="quotelev2">&gt;  &gt; 112J FitzPatrick Hall
</span><br>
<span class="quotelev2">&gt;  &gt; Notre Dame, IN 46556 
</span><br>
<span class="quotelev2">&gt;  &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; 2010-07-08
</span><br>
<span class="quotelev2">&gt;  &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; *&#229;&#143;&#145;&#228;&#187;&#182;&#228;&#186;&#186;&#239;&#188;&#154;* Gus Correa
</span><br>
<span class="quotelev2">&gt;  &gt; *&#229;&#143;&#145;&#233;&#128;&#129;&#230;&#151;&#182;&#233;&#151;&#180;&#239;&#188;&#154;* 2010-07-08  10:07:13
</span><br>
<span class="quotelev2">&gt;  &gt; *&#230;&#148;&#182;&#228;&#187;&#182;&#228;&#186;&#186;&#239;&#188;&#154;* Open MPI Users
</span><br>
<span class="quotelev2">&gt;  &gt; *&#230;&#138;&#132;&#233;&#128;&#129;&#239;&#188;&#154;*
</span><br>
<span class="quotelev2">&gt;  &gt; *&#228;&#184;&#187;&#233;&#162;&#152;&#239;&#188;&#154;* Re: [OMPI users] configure options
</span><br>
<span class="quotelev2">&gt;  &gt; Hi Zhigang
</span><br>
<span class="quotelev2">&gt;  &gt; Are  you talking about a run time failure?
</span><br>
<span class="quotelev2">&gt;  &gt; If you are, I think what is missing is just to set the PATH and the 
</span><br>
<span class="quotelev2">&gt;  &gt; LD_LIBRARY_PATH environment variables to point to the OpenMPI directories.
</span><br>
<span class="quotelev2">&gt;  &gt; This can be done in your .[t]cshrc / .profile / .bashrc
</span><br>
<span class="quotelev2">&gt;  &gt; file in your home directory (assuming it is accessible by all computers
</span><br>
<span class="quotelev2">&gt;  &gt; that you're using to run the program).
</span><br>
<span class="quotelev2">&gt;  &gt; Hopefully it will override the default OpenMPI 1.3.2 in your HPC.
</span><br>
<span class="quotelev2">&gt;  &gt; See this FAQ:
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev2">&gt;  &gt; There are other ways to do it, which you can find with
</span><br>
<span class="quotelev2">&gt;  &gt; &quot;man $MY_OWN_DIR/share/man/man1/mpiexec&quot;.
</span><br>
<span class="quotelev2">&gt;  &gt; (You could also set MANPATH to get the right man pages.)
</span><br>
<span class="quotelev2">&gt;  &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;  &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;  &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;  &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; Zhigang Wei wrote:
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; Dear all,
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; How can I decide the configure options? I am greatly confused.
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; I am using school's high performance computer.
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; But the openmpi there is version 1.3.2, old, so I want to build the new one.
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; I am new to openmpi, I have built the openmpi and it doesn't work, I 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; built and installed it to my own directory.
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; I use the following configure options,
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; ./configure --with-sge --prefix=$MY_OWN_DIR --with-psm
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; but it won't work and failed with somelines like
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; ......lib/openmpi/mca_ess_hnp: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; in the output file.
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; I guess my configure is wrong, could you tell me the meaning of 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; --with-psm, --with-sge, do I need to add other options? I guess the 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; computing nodes are using infiniband, but how to build with that? If I 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; don't have the su right, can I build it? What should I pay attettion if 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; I want to build and use my own openmpi?
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; You see, in a personal multicore computer, building is so easy and 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; mpirun the program without any problems. But in school's hpc, it fails 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; all the time.
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; Please help. Thank you all.
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; Zhigang Wei
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; ------------
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; NatHaz Modeling Laboratory
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; University of Notre Dame
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; 112J FitzPatrick Hall
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; Notre Dame, IN 46556 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; 2010-07-07
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; 
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt; .
</span><br>
<span class="quotelev2">&gt;  &gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="13547.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13545.php">Anton Shterenlikht: "[OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="13544.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13547.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13547.php">Gus Correa: "Re: [OMPI users] configure options"</a>
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
