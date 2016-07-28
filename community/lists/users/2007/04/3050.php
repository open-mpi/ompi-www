<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 10 05:21:06 2007" -->
<!-- isoreceived="20070410092106" -->
<!-- sent="Tue, 10 Apr 2007 02:21:01 -0700 (PDT)" -->
<!-- isosent="20070410092101" -->
<!-- name="Bala" -->
<!-- email="cppbala_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification" -->
<!-- id="983537.10941.qm_at_web35111.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5711d990703280353k6b248494nb416163886fb9db3_at_mail.gmail.com" -->
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
<strong>From:</strong> Bala (<em>cppbala_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-10 05:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3051.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="3049.php">snj78_at_[hidden]: "[OMPI users] Help with HPL and MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2936.php">G&#246;tz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3051.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Reply:</strong> <a href="3051.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Goetz, we are able to submit OpenMPI jobs
<br>
using SGE.
<br>
<p>&nbsp;&nbsp;But still when we try to submit interactive job
<br>
we are getting the following error,
<br>
<p>$ qrsh -pe mpich 4
<br>
&nbsp;Rocks Compute Node
<br>
&nbsp;Rocks 4.2.1 (Cydonia)
<br>
&nbsp;Profile built 14:09 02-Apr-2007
<br>
<p>&nbsp;Kickstarted 22:16 02-Apr-2007
<br>
&nbsp;-bash: ulimit: max locked memory: cannot modify
<br>
limit: Operation not permitted
<br>
<p>&nbsp;we are setting the ulimit in &quot;/etc/init.d/sshd&quot; file,
<br>
but not sure why we are getting this ulimit error
<br>
only in interactive jobs.
<br>
<p>&nbsp;How do you set ulimit?? and how much??
<br>
pls advice.
<br>
<p>thanks,
<br>
-bala-
<br>
<p>--- G&#246;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 3/28/07, Bala &lt;cppbala_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; % qconf -sp orte
</span><br>
<span class="quotelev2">&gt; &gt; ....
</span><br>
<span class="quotelev2">&gt; &gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev2">&gt; &gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt; &gt; just want to know anybody successfully running in
</span><br>
<span class="quotelev1">&gt; SGE
</span><br>
<span class="quotelev2">&gt; &gt; using this PE??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, I have a working installation of openmpi 1.2
</span><br>
<span class="quotelev1">&gt; with SGE 6.0u9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; from my mpich PE I can see start/stop arguments as
</span><br>
<span class="quotelev2">&gt; &gt; show below
</span><br>
<span class="quotelev2">&gt; &gt; start_proc_args   /opt/gridengine/mpi/startmpi.sh
</span><br>
<span class="quotelev2">&gt; &gt; -catch_rsh
</span><br>
<span class="quotelev2">&gt; &gt; $pe_hostfile
</span><br>
<span class="quotelev2">&gt; &gt; stop_proc_args    /opt/gridengine/mpi/stopmpi.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Take a look at these scripts, they don't do anything
</span><br>
<span class="quotelev1">&gt; fancy, they just
</span><br>
<span class="quotelev1">&gt; prepare the machinefile and the rsh wrapper for
</span><br>
<span class="quotelev1">&gt; mpich. Openmpi does
</span><br>
<span class="quotelev1">&gt; the right thing by itself by looking at SGE's
</span><br>
<span class="quotelev1">&gt; environment variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, G&#246;tz Waschk - DESY Zeuthen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; AL I:40: Do what thou wilt shall be the whole of the
</span><br>
<span class="quotelev1">&gt; Law.
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
<p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Looking for earth-friendly autos? 
<br>
Browse Top Cars by &quot;Green Rating&quot; at Yahoo! Autos' Green Center.
<br>
<a href="http://autos.yahoo.com/green_center/">http://autos.yahoo.com/green_center/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3051.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="3049.php">snj78_at_[hidden]: "[OMPI users] Help with HPL and MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2936.php">G&#246;tz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3051.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Reply:</strong> <a href="3051.php">Götz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
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
