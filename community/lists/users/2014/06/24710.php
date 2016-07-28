<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 16:41:44 2014" -->
<!-- isoreceived="20140626204144" -->
<!-- sent="Thu, 26 Jun 2014 15:41:43 -0500" -->
<!-- isosent="20140626204143" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC" -->
<!-- id="CAMD57oek=k5Mc9MeS75gBNapc213+x6vo_jaF7_U-BbGVNUnsg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CABnrQwT0t_xoVa6HoZt4K-4JK9LuvpS4gDJmNGbKZGLpequn5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-26 16:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24711.php">Brice Goglin: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="24709.php">Adam Jundt: "[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="24709.php">Adam Jundt: "[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24711.php">Brice Goglin: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm on the road today, but will be back tomorrow afternoon (US Pacific
<br>
time) and can forward my notes on this again. In the interim, just go to
<br>
our user mailing list archives and search for &quot;phi&quot; and you'll see the
<br>
conversations. Basically, you have to cross-compile OMPI to run on the Phi.
<br>
<p>I've been intending to post the detailed steps on our FAQ, but just haven't
<br>
gotten around to it - my bad.
<br>
Ralph
<br>
<p><p><p>On Thu, Jun 26, 2014 at 3:31 PM, Adam Jundt &lt;adam.jundt_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I'm currently working towards setting up a single node system with a
</span><br>
<span class="quotelev1">&gt; xeon phi card. We have intel compilers (v.13.1.3) installed and I was
</span><br>
<span class="quotelev1">&gt; able to get the standard openmpi (v1.6.5) to install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now, I am just hoping to run codes natively on the xeon phi.
</span><br>
<span class="quotelev1">&gt; When trying to compile a hello world code via &quot;mpicc -mmic hello.c&quot; it
</span><br>
<span class="quotelev1">&gt; results in the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; x86_64-k1om-linux-ld: skipping incompatible
</span><br>
<span class="quotelev1">&gt; /ssd/apps/openmpi-intel/lib/libmpi.so when searching for -lmpi
</span><br>
<span class="quotelev1">&gt; x86_64-k1om-linux-ld: cannot find -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing this is due to not having compiled openmpi with the
</span><br>
<span class="quotelev1">&gt; &quot;-mmic&quot; option. Although, attempting to configure openmpi with -mmic
</span><br>
<span class="quotelev1">&gt; will fail instantly as the configure attempts to test basic codes with
</span><br>
<span class="quotelev1">&gt; &quot;-mmic&quot; on the host processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a couple of threads it was mentioned that people have been able to
</span><br>
<span class="quotelev1">&gt; get this to work, but not much detail on how they built openmpi to
</span><br>
<span class="quotelev1">&gt; achieve this. Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24709.php">http://www.open-mpi.org/community/lists/users/2014/06/24709.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24710/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24711.php">Brice Goglin: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="24709.php">Adam Jundt: "[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="24709.php">Adam Jundt: "[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24711.php">Brice Goglin: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
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
