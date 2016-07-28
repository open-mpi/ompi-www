<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 03:28:06 2007" -->
<!-- isoreceived="20070502072806" -->
<!-- sent="Wed, 02 May 2007 09:28:01 +0200" -->
<!-- isosent="20070502072801" -->
<!-- name="Ole Holm Nielsen" -->
<!-- email="Ole.H.Nielsen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="46383D81.7020301_at_fysik.dtu.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46382F5B.6070105_at_sara.nl" -->
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
<strong>From:</strong> Ole Holm Nielsen (<em>Ole.H.Nielsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 03:28:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3177.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Previous message:</strong> <a href="3175.php">Bas van der Vlies: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="3175.php">Bas van der Vlies: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bas hit the nail on the head:  When using OpenMPI's mpirun under
<br>
Torque TM one apparently *must* omit the &quot;-machinefile $PBS_NODEFILE&quot;
<br>
flags and only specify &quot;-np 2&quot;, presumably because TM knows all
<br>
about the machines under its control.
<br>
<p>This behavior is new to me:  Is this a feature or a bug in OpenMPI ?
<br>
At least a better behavior of mpirun could be expected when you
<br>
specify both -np and -machinefile.
<br>
<p>Bas van der Vlies wrote:
<br>
<span class="quotelev1">&gt;  You must use the following command:
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; mpiexec -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; whello, i am 0 of 2
</span><br>
<span class="quotelev1">&gt; whello, i am 1 of 2
</span><br>
<span class="quotelev1">&gt; all is well that ends well
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; $ mpiexec -np 2 -machinefile $PBS_NODEFILE ./a.out
</span><br>
<span class="quotelev1">&gt; [ib-r6n19.irc.sara.nl:04999] pls:tm: failed to poll for a spawned proc, 
</span><br>
<span class="quotelev1">&gt; return status = 17002
</span><br>
<span class="quotelev1">&gt; [ib-r6n19.irc.sara.nl:04999] [0,0,0] ORTE_ERROR_LOG: In errno in file 
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 462
</span><br>
<span class="quotelev1">&gt; [ib-r6n19.irc.sara.nl:04999] mpiexec: spawn failed with errno=-11
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<p><p>Thanks,
<br>
Ole
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3177.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Previous message:</strong> <a href="3175.php">Bas van der Vlies: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="3175.php">Bas van der Vlies: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
