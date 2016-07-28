<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 16:58:34 2008" -->
<!-- isoreceived="20081008205834" -->
<!-- sent="Wed, 08 Oct 2008 14:01:29 -0700" -->
<!-- isosent="20081008210129" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="48ED1FA9.9000109_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40810080610u329c2466r7fae4b0572a30df1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 17:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6908.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>In reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6914.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt; I wanted to switch from mpich2/mvapich2 to OpenMPI, as OpenMPI 
</span><br>
<span class="quotelev1">&gt; supports both ethernet and infiniband. Before doing that I tested an 
</span><br>
<span class="quotelev1">&gt; application 'GROMACS' to compare the performance of MPICH2 &amp; OpenMPI. 
</span><br>
<span class="quotelev1">&gt; Both have been compiled with GNU compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After this benchmark, I came to know that OpenMPI is slower than MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This benchmark is run on a AMD dual core, dual opteron processor. Both 
</span><br>
<span class="quotelev1">&gt; have compiled with default configurations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job is run on 2 nodes - 8 cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI - 25 m 39 s.
</span><br>
<span class="quotelev1">&gt; MPICH2  -  15 m 53 s.
</span><br>
<p>I agree with Samuel that this difference is strikingly large.
<br>
<p>I had a thought that might not apply to your case, but I figured I'd 
<br>
share it anyhow.
<br>
<p>I don't understand MPICH very well, but it seemed as though some of the 
<br>
flags used in building MPICH are supposed to be added in automatically 
<br>
to the mpicc/etc compiler wrappers.  That is, if you specified CFLAGS=-O 
<br>
to build MPICH, then if you compiled an application with mpicc you would 
<br>
automatically get -O.  At least that was my impression.  Maybe I 
<br>
misunderstood the documentation.  (If you want to use some flags just 
<br>
for building MPICH but you don't want users to get those flags 
<br>
automatically when they use mpicc, you're supposed to use flags like 
<br>
MPICH2LIB_CFLAGS instead of just CFLAGS when you run &quot;configure&quot;.)
<br>
<p>Not only may this theory not apply to your case, but I'm not even sure 
<br>
it holds water.  I just tried building MPICH2 with --enable-fast turned 
<br>
on.  The &quot;configure&quot; output indicates I'm getting CFLAGS=-O2, but when I 
<br>
run &quot;mpicc -show&quot; it seems to invoke gcc without any optimization flags 
<br>
by default.
<br>
<p>So, I guess I'm sending this mail less to help you and more as a request 
<br>
that someone might improve my understanding.
<br>
<p>With regards to your issue, do you have any indication when you get that 
<br>
25m39s timing if there is a grotesque amount of time being spent in MPI 
<br>
calls?  Or, is the slowdown due to non-MPI portions?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6908.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>In reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6910.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6914.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
