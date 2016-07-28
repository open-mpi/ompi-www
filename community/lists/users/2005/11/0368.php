<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 18 16:35:55 2005" -->
<!-- isoreceived="20051118213555" -->
<!-- sent="Fri, 18 Nov 2005 14:35:50 -0700" -->
<!-- isosent="20051118213550" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors" -->
<!-- id="20051118213550.GA20813_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051118173429.GA14425_at_lanl.gov" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-18 16:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Previous message:</strong> <a href="0367.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>In reply to:</strong> <a href="0367.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Fri, 18 Nov 2005 10:34:29 -0700
</span><br>
<span class="quotelev1">&gt; From: &quot;Daryl W. Grunau&quot; &lt;dwg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 17 Nov 2005 09:20:10 -0800
</span><br>
<span class="quotelev2">&gt; &gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;6E3F2F6A-FB69-4879-A2B1-E286B5DB7738_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Daryl -
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm unable to replicate your problem.  I was testing on a Fedora Core  
</span><br>
<span class="quotelev2">&gt; &gt; 3 system with Clustermatic 5.  Is is possible that you have a random  
</span><br>
<span class="quotelev2">&gt; &gt; dso from a previous build in your installation path?  How are you  
</span><br>
<span class="quotelev2">&gt; &gt; running mpirun -- maybe I'm just not hitting the same code path you   
</span><br>
<span class="quotelev2">&gt; &gt; are...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian, thanks for trying to replicate.  I'm actually not building any dso's
</span><br>
<span class="quotelev1">&gt; for OMPI, merely static libs and recompiling my app.  I'm running as
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun -H 200,201,202,203 -np 4 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The last successful build I've had was rc4, which succeeds in running the
</span><br>
<span class="quotelev1">&gt; above test.  I'll try to build/install 1.0 just announced and let you know.
</span><br>
<p>Looks like this problem got fixed in 1.0!!!  Thanks,
<br>
<p>Daryl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Previous message:</strong> <a href="0367.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>In reply to:</strong> <a href="0367.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
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
