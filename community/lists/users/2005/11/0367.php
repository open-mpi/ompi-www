<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 18 12:34:32 2005" -->
<!-- isoreceived="20051118173432" -->
<!-- sent="Fri, 18 Nov 2005 10:34:29 -0700" -->
<!-- isosent="20051118173429" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors" -->
<!-- id="20051118173429.GA14425_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.29.1132333204.26037.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-11-18 12:34:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0368.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Maybe in reply to:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0368.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Reply:</strong> <a href="0368.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Thu, 17 Nov 2005 09:20:10 -0800
</span><br>
<span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;6E3F2F6A-FB69-4879-A2B1-E286B5DB7738_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daryl -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unable to replicate your problem.  I was testing on a Fedora Core  
</span><br>
<span class="quotelev1">&gt; 3 system with Clustermatic 5.  Is is possible that you have a random  
</span><br>
<span class="quotelev1">&gt; dso from a previous build in your installation path?  How are you  
</span><br>
<span class="quotelev1">&gt; running mpirun -- maybe I'm just not hitting the same code path you   
</span><br>
<span class="quotelev1">&gt; are...
</span><br>
<p>Brian, thanks for trying to replicate.  I'm actually not building any dso's
<br>
for OMPI, merely static libs and recompiling my app.  I'm running as
<br>
follows:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -H 200,201,202,203 -np 4 ./a.out
<br>
<p>The last successful build I've had was rc4, which succeeds in running the
<br>
above test.  I'll try to build/install 1.0 just announced and let you know.
<br>
<p>Daryl
<br>
<p>P.s.  I'm building OMPI with the following flags:
<br>
<p>&nbsp;&nbsp;&nbsp;--prefix=/opt/OpenMPI/openmpi-1.0rc8/ib
<br>
&nbsp;&nbsp;&nbsp;--disable-shared --enable-static --with-bproc
<br>
&nbsp;&nbsp;&nbsp;--with-mvapi=/opt/IB/ibgd-1.8.0/driver/infinihost
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0368.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Maybe in reply to:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0368.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Reply:</strong> <a href="0368.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
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
