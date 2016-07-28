<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 24 10:00:44 2012" -->
<!-- isoreceived="20121124150044" -->
<!-- sent="Sat, 24 Nov 2012 12:00:39 -0300" -->
<!-- isosent="20121124150039" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="CAG8o1y5rSz3nuinxao+r2hjDG0HcE2Q8=VVK0nWtExoQ43+QUw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALNbrBhFn-2LFfDvzJ7=PZuzG1gzJszXcGaW5FSdVZ=ewA_at_mail.gmail.com" -->
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
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-24 10:00:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20760.php">Ralph Castain: "Re: [OMPI users] network timeout"</a>
<li><strong>Previous message:</strong> <a href="20758.php">marco atzeri: "[OMPI users] network timeout"</a>
<li><strong>In reply to:</strong> <a href="20757.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20761.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20761.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rayson and all,
<br>
<p>I run only with iFort and the compile works, I use only ifort.
<br>
Now I have folder with OPT. If it works now and it is ok use only iFort
<br>
what can I do to learn?
<br>
I mean where can I find a good tutorial or hello project in fortran. I have
<br>
found something for c but nothing about fortran.
<br>
<p>Thanks again
<br>
<p>Diego
<br>
<p><p><p><p>On 24 November 2012 03:32, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In your shell, run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then rerun configure again with the original parameters again - it
</span><br>
<span class="quotelev1">&gt; should find icc &amp; ifort this time.
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
<span class="quotelev1">&gt; On Fri, Nov 23, 2012 at 9:22 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; hi,
</span><br>
<span class="quotelev2">&gt; &gt; thank for your replay.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I currently use ifort to compile my program. I write also a hello program
</span><br>
<span class="quotelev2">&gt; &gt; for icc and it works.
</span><br>
<span class="quotelev2">&gt; &gt; After that I have run
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; without specified any compiler and it seem to work. Now I have a ompi-1.6
</span><br>
<span class="quotelev2">&gt; &gt; folder in my opt folder. A question: Can I now compile a program with
</span><br>
<span class="quotelev2">&gt; &gt; openmpi and intel fortran compiler?
</span><br>
<span class="quotelev2">&gt; &gt; if yes do you know some good tutorial
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; again thank for you time
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; On 23 November 2012 20:45, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I believe what it is telling you is that icc is not in your PATH. Please
</span><br>
<span class="quotelev3">&gt; &gt;&gt; check that icc, icpc, and ifort are all in your PATH.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 23, 2012, at 11:35 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dear all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks for the replay,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ./configure: line 5373: icc: command not found
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     configure:5382: $? = 127
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     configure:5371: icc -v &gt;&amp;5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am totally new, What can I do? As I told you if I compile a simple
</span><br>
<span class="quotelev1">&gt; hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt; program with icc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it works.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 23 November 2012 15:45, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; dear all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am new in openMPI world and in general in parallelization. I have
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; problem with configuration of openMPI in my laptop.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have read your FAQ and I tried to google the problem but I was not
</span><br>
<span class="quotelev1">&gt; able
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to solve it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The problem is:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have downloaded the openmpi-1.6.3, unpacked it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Then I have installed on my pc intel icc and icpc.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; when I run:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I get:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *** Startup tests
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; checking build system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; checking host system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; checking target system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; checking for gcc... icc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; checking whether the C compiler works... no
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; configure: error: in `/home/diedro/Downloads/openmpi-1.6.3':
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; See `config.log' for more details
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; diedro_at_diedro-Latitude-E6420:~/Desktop/Downloads/openmpi-1.6.3$
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I do no understand why. I did a simple hello project with icc and it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; works.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (in attachment you can fiend the config.log)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Really thanks for any help.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20759/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20760.php">Ralph Castain: "Re: [OMPI users] network timeout"</a>
<li><strong>Previous message:</strong> <a href="20758.php">marco atzeri: "[OMPI users] network timeout"</a>
<li><strong>In reply to:</strong> <a href="20757.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20761.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20761.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
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
