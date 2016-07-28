<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 28 06:53:58 2007" -->
<!-- isoreceived="20070328105358" -->
<!-- sent="Wed, 28 Mar 2007 12:53:54 +0200" -->
<!-- isosent="20070328105354" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification" -->
<!-- id="5711d990703280353k6b248494nb416163886fb9db3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="423057.57040.qm_at_web35114.mail.mud.yahoo.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-28 06:53:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2937.php">Warner Yuen: "[OMPI users] Odd behavior with slots=4"</a>
<li><strong>Previous message:</strong> <a href="2935.php">Bala: "[OMPI users] OpenMPI run with the  SGE launcher, orte PE calrification"</a>
<li><strong>In reply to:</strong> <a href="2935.php">Bala: "[OMPI users] OpenMPI run with the  SGE launcher, orte PE calrification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/28/07, Bala &lt;cppbala_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; % qconf -sp orte
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; just want to know anybody successfully running in SGE
</span><br>
<span class="quotelev1">&gt; using this PE??
</span><br>
<p>Hi,
<br>
<p>yes, I have a working installation of openmpi 1.2 with SGE 6.0u9.
<br>
<p><span class="quotelev1">&gt; from my mpich PE I can see start/stop arguments as
</span><br>
<span class="quotelev1">&gt; show below
</span><br>
<span class="quotelev1">&gt; start_proc_args   /opt/gridengine/mpi/startmpi.sh
</span><br>
<span class="quotelev1">&gt; -catch_rsh
</span><br>
<span class="quotelev1">&gt; $pe_hostfile
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /opt/gridengine/mpi/stopmpi.sh
</span><br>
<p>Take a look at these scripts, they don't do anything fancy, they just
<br>
prepare the machinefile and the rsh wrapper for mpich. Openmpi does
<br>
the right thing by itself by looking at SGE's environment variables.
<br>
<p>Regards, G&#246;tz Waschk - DESY Zeuthen
<br>
<p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2937.php">Warner Yuen: "[OMPI users] Odd behavior with slots=4"</a>
<li><strong>Previous message:</strong> <a href="2935.php">Bala: "[OMPI users] OpenMPI run with the  SGE launcher, orte PE calrification"</a>
<li><strong>In reply to:</strong> <a href="2935.php">Bala: "[OMPI users] OpenMPI run with the  SGE launcher, orte PE calrification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
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
