<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 06:35:14 2007" -->
<!-- isoreceived="20070502103514" -->
<!-- sent="Wed, 02 May 2007 04:35:10 -0600" -->
<!-- isosent="20070502103510" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="C25DC57E.2ABF%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46383D81.7020301_at_fysik.dtu.dk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 06:35:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3179.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3177.php">G&#246;tz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>In reply to:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3179.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3179.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/2/07 1:28 AM, &quot;Ole Holm Nielsen&quot; &lt;Ole.H.Nielsen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Bas hit the nail on the head:  When using OpenMPI's mpirun under
</span><br>
<span class="quotelev1">&gt; Torque TM one apparently *must* omit the &quot;-machinefile $PBS_NODEFILE&quot;
</span><br>
<span class="quotelev1">&gt; flags and only specify &quot;-np 2&quot;, presumably because TM knows all
</span><br>
<span class="quotelev1">&gt; about the machines under its control.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This behavior is new to me:  Is this a feature or a bug in OpenMPI ?
</span><br>
<span class="quotelev1">&gt; At least a better behavior of mpirun could be expected when you
</span><br>
<span class="quotelev1">&gt; specify both -np and -machinefile.
</span><br>
<p>Thanks Bas - I spaced out on the command line.
<br>
<p>We would consider it a &quot;feature&quot; that OpenMPI is integrated with Torque. We
<br>
actually read the PBS_NODEFILE internally ourselves. I believe the problem
<br>
here is that specifying the &quot;machinefile&quot; prevents us from using that
<br>
Torque-integrated code and forces us down a different code path that doesn't
<br>
correctly interpret the PBS_NODEFILE format.
<br>
<p>We probably should consider your observation a &quot;bug&quot; - frankly, it wasn't
<br>
something anyone anticipated a user ever doing, so nobody I know of ever
<br>
tested it. I'd have to dig into the internals to understand how you wound up
<br>
in that particular error mode.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bas van der Vlies wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  You must use the following command:
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; whello, i am 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt; whello, i am 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt; all is well that ends well
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -np 2 -machinefile $PBS_NODEFILE ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; [ib-r6n19.irc.sara.nl:04999] pls:tm: failed to poll for a spawned proc,
</span><br>
<span class="quotelev2">&gt;&gt; return status = 17002
</span><br>
<span class="quotelev2">&gt;&gt; [ib-r6n19.irc.sara.nl:04999] [0,0,0] ORTE_ERROR_LOG: In errno in file
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_urm.c at line 462
</span><br>
<span class="quotelev2">&gt;&gt; [ib-r6n19.irc.sara.nl:04999] mpiexec: spawn failed with errno=-11
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ole
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
<li><strong>Next message:</strong> <a href="3179.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3177.php">G&#246;tz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>In reply to:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3179.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3179.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
