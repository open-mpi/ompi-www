<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 23 18:46:04 2012" -->
<!-- isoreceived="20121123234604" -->
<!-- sent="Fri, 23 Nov 2012 15:45:56 -0800" -->
<!-- isosent="20121123234556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="ED160D18-A0A1-44E6-9A54-41C15B9BBCCC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAG8o1y6vNa1=E-5NFHTR1=Q=Pg3TkmZZngkjSW7eF_rwVPR+qg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-23 18:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20754.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe what it is telling you is that icc is not in your PATH. Please check that icc, icpc, and ifort are all in your PATH.
<br>
<p><p>On Nov 23, 2012, at 11:35 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; dear all,
</span><br>
<span class="quotelev1">&gt; thanks for the replay,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ./configure: line 5373: icc: command not found 
</span><br>
<span class="quotelev1">&gt;     configure:5382: $? = 127 
</span><br>
<span class="quotelev1">&gt;     configure:5371: icc -v &gt;&amp;5 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am totally new, What can I do? As I told you if I compile a simple hello program with icc
</span><br>
<span class="quotelev1">&gt; it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
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
<span class="quotelev1">&gt; On 23 November 2012 15:45, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; dear all,
</span><br>
<span class="quotelev1">&gt; I am new in openMPI world and in general in parallelization. I have some problem with configuration of openMPI in my laptop.
</span><br>
<span class="quotelev1">&gt; I have read your FAQ and I tried to google the problem but I was not able to solve it.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20755/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20754.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20753.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20756.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
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
