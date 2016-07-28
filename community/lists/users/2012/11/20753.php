<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 23 14:35:24 2012" -->
<!-- isoreceived="20121123193524" -->
<!-- sent="Fri, 23 Nov 2012 16:35:16 -0300" -->
<!-- isosent="20121123193516" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="CAG8o1y6vNa1=E-5NFHTR1=Q=Pg3TkmZZngkjSW7eF_rwVPR+qg_at_mail.gmail.com" -->
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
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-23 14:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20754.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20752.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20751.php">Diego Avesani: "[OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20755.php">Ralph Castain: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20755.php">Ralph Castain: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear all,
<br>
thanks for the replay,
<br>
<p>&nbsp;&nbsp;&nbsp;./configure: line 5373: icc: command not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;configure:5382: $? = 127
<br>
&nbsp;&nbsp;&nbsp;&nbsp;configure:5371: icc -v &gt;&amp;5
<br>
<p>I am totally new, What can I do? As I told you if I compile a simple hello
<br>
program with icc
<br>
it works.
<br>
<p>Thanks
<br>
<p>Diego
<br>
<p><p><p><p>On 23 November 2012 15:45, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; dear all,
</span><br>
<span class="quotelev1">&gt; I am new in openMPI world and in general in parallelization. I have some
</span><br>
<span class="quotelev1">&gt; problem with configuration of openMPI in my laptop.
</span><br>
<span class="quotelev1">&gt; I have read your FAQ and I tried to google the problem but I was not able
</span><br>
<span class="quotelev1">&gt; to solve it.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20753/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20754.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20752.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20751.php">Diego Avesani: "[OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20755.php">Ralph Castain: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20755.php">Ralph Castain: "Re: [OMPI users] configuration openMPI problem"</a>
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
