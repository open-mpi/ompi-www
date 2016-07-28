<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 25 20:21:33 2012" -->
<!-- isoreceived="20121126012133" -->
<!-- sent="Sun, 25 Nov 2012 20:21:06 -0500" -->
<!-- isosent="20121126012106" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="C9FEDFC7-AA6D-41AD-841B-8452DEF0D602_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y4BvDikzR1Kz9SZHD_DkLw5ZH-n6bTc=J_bSUpMh=cm6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuration openMPI problem<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-25 20:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20764.php">George Markomanolis: "[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20762.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20762.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2012, at 11:38 PM, Diego Avesani wrote:
<br>
<p><span class="quotelev1">&gt; dear all,
</span><br>
<span class="quotelev1">&gt; thanks for the web site.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About the previous question. Can I compile with only ifort?
</span><br>
<span class="quotelev1">&gt; I mean:
</span><br>
<span class="quotelev1">&gt; udo ./configure --prefix=/opt/ompi-1.6 FC=ifort
</span><br>
<span class="quotelev1">&gt; avoiding the others?
</span><br>
<p>Hi
<br>
This will probably build openMPI with the native C/C++ compilers (gcc and g++ if you are
<br>
in Linux) to build the C and C++ bindings, and ifort for the Fortran-90 binding, maybe
<br>
for the Fortran-77 bindings also (but it may use Gnu gfortran for that).
<br>
<p>You can find which compilers were actually used in config.log.
<br>
<p>For consistency I would try adding F77=ifort to the configure command line.
<br>
<p>Also, do you have icc and icpc, besides ifort?
<br>
If you do, the previous failures in configure are probably because your PATH and 
<br>
the overall Intel compiler environment wasn't set correctly.
<br>
You probably need to do
<br>
'source iccvars.sh intel64'  and 'source ifortvars.sh intel64'  (or the corresponding '.csh' scripts 
<br>
if you use csh),
<br>
or perhaps 'source compilervars.sh intel64' depending on which version of the compiler you
<br>
have.
<br>
Otherwise the Intel compilers won't work properly.
<br>
Check the compiler documentation for details.
<br>
<p>I hope it helps
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 24 November 2012 15:14, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; That's what Google is for! You can very easily find lots of examples
</span><br>
<span class="quotelev1">&gt; by Google Searching: mpi+fortran+examples
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Like this one: <a href="http://www.dartmouth.edu/~rc/classes/intro_mpi/hello_world_ex.html">http://www.dartmouth.edu/~rc/classes/intro_mpi/hello_world_ex.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or this one, with C &amp; Fortran examples side by side:
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/mpi/">https://computing.llnl.gov/tutorials/mpi/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Nov 24, 2012 at 10:00 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Rayson and all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I run only with iFort and the compile works, I use only ifort.
</span><br>
<span class="quotelev2">&gt; &gt; Now I have folder with OPT. If it works now and it is ok use only iFort what
</span><br>
<span class="quotelev2">&gt; &gt; can I do to learn?
</span><br>
<span class="quotelev2">&gt; &gt; I mean where can I find a good tutorial or hello project in fortran. I have
</span><br>
<span class="quotelev2">&gt; &gt; found something for c but nothing about fortran.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks again
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 24 November 2012 03:32, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In your shell, run:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; export PATH=$PATH
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And then rerun configure again with the original parameters again - it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; should find icc &amp; ifort this time.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rayson
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Nov 23, 2012 at 9:22 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; thank for your replay.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I currently use ifort to compile my program. I write also a hello
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; program
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; for icc and it works.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; After that I have run
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ./configure --prefix=/usr/local
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; without specified any compiler and it seem to work. Now I have a
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ompi-1.6
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; folder in my opt folder. A question: Can I now compile a program with
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; openmpi and intel fortran compiler?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; if yes do you know some good tutorial
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; again thank for you time
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Diego
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On 23 November 2012 20:45, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I believe what it is telling you is that icc is not in your PATH.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Please
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; check that icc, icpc, and ifort are all in your PATH.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On Nov 23, 2012, at 11:35 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; dear all,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; thanks for the replay,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;    ./configure: line 5373: icc: command not found
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;     configure:5382: $? = 127
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;     configure:5371: icc -v &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I am totally new, What can I do? As I told you if I compile a simple
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; hello
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; program with icc
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; it works.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Diego
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On 23 November 2012 15:45, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; dear all,
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; I am new in openMPI world and in general in parallelization. I have
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; some
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; problem with configuration of openMPI in my laptop.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; I have read your FAQ and I tried to google the problem but I was not
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; able
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; to solve it.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; The problem is:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; I have downloaded the openmpi-1.6.3, unpacked it
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Then I have installed on my pc intel icc and icpc.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; when I run:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; I get:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; *** Startup tests
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; checking build system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; checking host system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; checking target system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; checking for gcc... icc
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; checking whether the C compiler works... no
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; configure: error: in `/home/diedro/Downloads/openmpi-1.6.3':
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; See `config.log' for more details
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; diedro_at_diedro-Latitude-E6420:~/Desktop/Downloads/openmpi-1.6.3$
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; I do no understand why. I did a simple hello project with icc and it
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; works.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; (in attachment you can fiend the config.log)
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Really thanks for any help.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; <a href="http://blogs.scalablelogic.com/2012/11/running-10000-node-grid-engine-cluster.html">http://blogs.scalablelogic.com/2012/11/running-10000-node-grid-engine-cluster.html</a>
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
<li><strong>Next message:</strong> <a href="20764.php">George Markomanolis: "[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20762.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20762.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
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
