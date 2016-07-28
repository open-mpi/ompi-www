<?
$subject_val = "Re: [OMPI users] Processor affinity troubles";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 17:06:55 2011" -->
<!-- isoreceived="20110715210655" -->
<!-- sent="Fri, 15 Jul 2011 17:06:50 -0400" -->
<!-- isosent="20110715210650" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processor affinity troubles" -->
<!-- id="FA0021E9-42F9-4038-8DB2-20398B7F4CC2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcxFUDAc__D+ytJycw+Gvr=v2nu1P3FZPSniTSVEDy8xz836Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processor affinity troubles<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 17:06:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16951.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16949.php">Karl Dockendorf: "[OMPI users] Processor affinity troubles"</a>
<li><strong>In reply to:</strong> <a href="16949.php">Karl Dockendorf: "[OMPI users] Processor affinity troubles"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sadly, OS X does not provide an API for processor affinity.  :-(
<br>
<p>On Jul 15, 2011, at 5:03 PM, Karl Dockendorf wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just upgraded from the default ompi install on OS X 10.6 to v1.5.3
</span><br>
<span class="quotelev1">&gt; so that I can use the processor affinity options.  However there seems
</span><br>
<span class="quotelev1">&gt; to be some trouble.  My mpi application executes perfectly with the
</span><br>
<span class="quotelev1">&gt; following CL statement:
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.5.3/bin/mpiexec --host `hostname` --np 2
</span><br>
<span class="quotelev1">&gt; *APPLICATIONANDARGS*
</span><br>
<span class="quotelev1">&gt; but this fails:
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.5.3/bin/mpiexec --host `hostname` --np 2
</span><br>
<span class="quotelev1">&gt; --cpus-per-proc 2 *APPLICATIONANDARGS*
</span><br>
<span class="quotelev1">&gt; saying:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An attempt to set processor affinity has failed - please check to
</span><br>
<span class="quotelev1">&gt; ensure that your system supports such functionality. If so, then
</span><br>
<span class="quotelev1">&gt; this is probably something that should be reported to the OMPI developers.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev1">&gt; encountered an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: No such file or directory
</span><br>
<span class="quotelev1">&gt; Node: hrle03274.&lt;BASEURLNAME DELETED&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this also fails:
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.5.3/bin/mpiexec --host `hostname` --np 2
</span><br>
<span class="quotelev1">&gt; --bind-to-core *APPLICATIONANDARGS*
</span><br>
<span class="quotelev1">&gt; saying the exact same thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured the install with:
</span><br>
<span class="quotelev1">&gt; ./configure --with-hwloc=internal --prefix=/usr/local/openmpi-1.5.3/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any help in getting this working would be greatly appreciated as the
</span><br>
<span class="quotelev1">&gt; process jumping from core to core is killing my system responsiveness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Karl
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16951.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16949.php">Karl Dockendorf: "[OMPI users] Processor affinity troubles"</a>
<li><strong>In reply to:</strong> <a href="16949.php">Karl Dockendorf: "[OMPI users] Processor affinity troubles"</a>
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
