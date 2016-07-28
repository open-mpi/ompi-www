<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 24 01:33:01 2012" -->
<!-- isoreceived="20121124063301" -->
<!-- sent="Sat, 24 Nov 2012 01:32:56 -0500" -->
<!-- isosent="20121124063256" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="CAHwLALNbrBhFn-2LFfDvzJ7=PZuzG1gzJszXcGaW5FSdVZ=ewA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG8o1y7NOwmn3fR+G9NKW3ep+PiPAxGW7p0qbaPOTZck8i-3Uw_at_mail.gmail.com" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-24 01:32:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20758.php">marco atzeri: "[OMPI users] network timeout"</a>
<li><strong>Previous message:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20759.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20759.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In your shell, run:
<br>
<p>export PATH=$PATH
<br>
<p>And then rerun configure again with the original parameters again - it
<br>
should find icc &amp; ifort this time.
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p>On Fri, Nov 23, 2012 at 9:22 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt; thank for your replay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I currently use ifort to compile my program. I write also a hello program
</span><br>
<span class="quotelev1">&gt; for icc and it works.
</span><br>
<span class="quotelev1">&gt; After that I have run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; without specified any compiler and it seem to work. Now I have a ompi-1.6
</span><br>
<span class="quotelev1">&gt; folder in my opt folder. A question: Can I now compile a program with
</span><br>
<span class="quotelev1">&gt; openmpi and intel fortran compiler?
</span><br>
<span class="quotelev1">&gt; if yes do you know some good tutorial
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; again thank for you time
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 23 November 2012 20:45, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe what it is telling you is that icc is not in your PATH. Please
</span><br>
<span class="quotelev2">&gt;&gt; check that icc, icpc, and ifort are all in your PATH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 23, 2012, at 11:35 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dear all,
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the replay,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    ./configure: line 5373: icc: command not found
</span><br>
<span class="quotelev2">&gt;&gt;     configure:5382: $? = 127
</span><br>
<span class="quotelev2">&gt;&gt;     configure:5371: icc -v &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am totally new, What can I do? As I told you if I compile a simple hello
</span><br>
<span class="quotelev2">&gt;&gt; program with icc
</span><br>
<span class="quotelev2">&gt;&gt; it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 23 November 2012 15:45, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am new in openMPI world and in general in parallelization. I have some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem with configuration of openMPI in my laptop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have read your FAQ and I tried to google the problem but I was not able
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to solve it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have downloaded the openmpi-1.6.3, unpacked it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then I have installed on my pc intel icc and icpc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Startup tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking build system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking host system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking target system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for gcc... icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether the C compiler works... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: in `/home/diedro/Downloads/openmpi-1.6.3':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See `config.log' for more details
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diedro_at_diedro-Latitude-E6420:~/Desktop/Downloads/openmpi-1.6.3$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do no understand why. I did a simple hello project with icc and it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (in attachment you can fiend the config.log)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Really thanks for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="20758.php">marco atzeri: "[OMPI users] network timeout"</a>
<li><strong>Previous message:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20759.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20759.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
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
