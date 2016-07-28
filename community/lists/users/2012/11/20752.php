<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 23 13:52:57 2012" -->
<!-- isoreceived="20121123185257" -->
<!-- sent="Fri, 23 Nov 2012 13:52:53 -0500" -->
<!-- isosent="20121123185253" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="CAHwLALNnBDh8Zay2EDdRwUNQDMUMX7vk1hgAyY0dADoX_55mUQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG8o1y72n=nKBgymhQPKhhCuCnc3DJ7vX+QO-WDkdFaXV8fRow_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-11-23 13:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20751.php">Diego Avesani: "[OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20751.php">Diego Avesani: "[OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you read the log, you will find:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure: line 5373: icc: command not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;configure:5382: $? = 127
<br>
&nbsp;&nbsp;&nbsp;&nbsp;configure:5371: icc -v &gt;&amp;5
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p>On Fri, Nov 23, 2012 at 1:45 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; dear all,
</span><br>
<span class="quotelev1">&gt; I am new in openMPI world and in general in parallelization. I have some
</span><br>
<span class="quotelev1">&gt; problem with configuration of openMPI in my laptop.
</span><br>
<span class="quotelev1">&gt; I have read your FAQ and I tried to google the problem but I was not able to
</span><br>
<span class="quotelev1">&gt; solve it.
</span><br>
<span class="quotelev1">&gt; The problem is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have downloaded the openmpi-1.6.3, unpacked it
</span><br>
<span class="quotelev1">&gt; Then I have installed on my pc intel icc and icpc.
</span><br>
<span class="quotelev1">&gt; when I run:
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Startup tests
</span><br>
<span class="quotelev1">&gt; checking build system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking host system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking target system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking for gcc... icc
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... no
</span><br>
<span class="quotelev1">&gt; configure: error: in `/home/diedro/Downloads/openmpi-1.6.3':
</span><br>
<span class="quotelev1">&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details
</span><br>
<span class="quotelev1">&gt; diedro_at_diedro-Latitude-E6420:~/Desktop/Downloads/openmpi-1.6.3$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do no understand why. I did a simple hello project with icc and it works.
</span><br>
<span class="quotelev1">&gt; (in attachment you can fiend the config.log)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really thanks for any help.
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
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html">http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20751.php">Diego Avesani: "[OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20751.php">Diego Avesani: "[OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
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
