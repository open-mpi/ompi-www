<?
$subject_val = "Re: [OMPI users] Gridengine + Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 16:20:20 2008" -->
<!-- isoreceived="20080707202020" -->
<!-- sent="Mon, 07 Jul 2008 16:20:06 -0400" -->
<!-- isosent="20080707202006" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gridengine + Open MPI" -->
<!-- id="48727A76.3080104_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4871E25C.7050802_at_icps.u-strasbg.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Gridengine + Open MPI<br>
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 16:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6030.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6035.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6035.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Romaric David wrote:
<br>
<span class="quotelev1">&gt; Pak Lui a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It was fixed at one point in the trunk before v1.3 went official, but 
</span><br>
<span class="quotelev2">&gt;&gt; while rolling the code from gridengine PLM into the rsh PLM code, this 
</span><br>
<span class="quotelev2">&gt;&gt; feature was left out because there was some lingering issues that I 
</span><br>
<span class="quotelev2">&gt;&gt; didn't resolved and I lost track of it. Sorry but thanks for bringing 
</span><br>
<span class="quotelev2">&gt;&gt; it up, I will need to look at the issue again and reopen this ticket 
</span><br>
<span class="quotelev2">&gt;&gt; against v1.3:
</span><br>
<span class="quotelev1">&gt; Ok, so I have to wait for a 1.3 version to work with job suspend, or
</span><br>
<span class="quotelev1">&gt; will it be back-ported to 1.2.6 or 1.2.6 ?
</span><br>
<p>I believe it will definitely be in 1.3 series, I am not sure about v1.2 
<br>
at this point.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So even it is the rsh PLM that starts the parallel job under SGE, the 
</span><br>
<span class="quotelev2">&gt;&gt; rsh PLM can detect if the Open MPI job is started under the SGE 
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Environment (via checking some SGE env vars) and use the 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;qrsh --inherit&quot; command to launch the parallel job the same way as it 
</span><br>
<span class="quotelev2">&gt;&gt; was before. You can check by setting MCA to something like &quot;--mca 
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_verbose 10&quot; in your mpirun command and look for the launch 
</span><br>
<span class="quotelev2">&gt;&gt; commands that mpirun uses.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It looks like shepherd cannot be started for a reason I couldn't get yet.
</span><br>
<span class="quotelev1">&gt; /opt/SGE/utilbin/lx24-amd64/rsh exited with exit code 0
</span><br>
<span class="quotelev1">&gt; reading exit code from shepherd ... 255
</span><br>
<span class="quotelev1">&gt; [hostname:16745] ----------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Regards,
</span><br>
<span class="quotelev1">&gt;     Romaric
</span><br>
<p>How recent is the build that you use to generate the error above? I 
<br>
assume you are using a trunk build?
<br>
<p>I didn't see the complete error messages that you are seeing, but I 
<br>
think I am running into the same exact error too. It seems to be a weird 
<br>
error that points out that the 'ssh' component not found. I don't 
<br>
believe there's a component named 'ssh' here, because ssh and rsh shared 
<br>
the same component.
<br>
<p>Well, it looks like something is broken in the plm that is responsible 
<br>
for launching the tight integration job for SGE.
<br>
<p>I checked it used to work without problem with my earlier trunk build 
<br>
(r18645). I have to find out what has happened since...
<br>
<p><p><p>Starting server daemon at host &quot;burl-ct-v440-4&quot;
<br>
Server daemon successfully started with task id &quot;1.burl-ct-v440-4&quot;
<br>
Establishing /opt/sge/utilbin/sol-sparc64/rsh session to host 
<br>
burl-ct-v440-4 ...
<br>
[burl-ct-v440-4:13749] mca: base: components_open: Looking for plm 
<br>
components
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      burl-ct-v440-4
<br>
Framework: plm
<br>
Component: ssh
<br>
--------------------------------------------------------------------------
<br>
[burl-ct-v440-4:13749] [[4569,0],1] ORTE_ERROR_LOG: Error in file 
<br>
base/ess_base_std_orted.c at line 70
<br>
[burl-ct-v440-4:13749] 
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_plm_base_open failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[burl-ct-v440-4:13749] [[4569,0],1] ORTE_ERROR_LOG: Error in file 
<br>
ess_env_module.c at line 135
<br>
[burl-ct-v440-4:13749] [[4569,0],1] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init.c at line 132
<br>
[burl-ct-v440-4:13749] 
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[burl-ct-v440-4:13749] [[4569,0],1] ORTE_ERROR_LOG: Error in file 
<br>
orted/orted_main.c at line 311
<br>
/opt/sge/utilbin/sol-sparc64/rsh exited with exit code 0
<br>
reading exit code from shepherd ... 255
<br>
[burl-ct-v440-5:09789] 
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 9790) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
[burl-ct-v440-5:09789] 
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
[burl-ct-v440-5:09789] 
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;burl-ct-v440-4 - daemon did not report back when launched
<br>
[burl-ct-v440-5:09789] mca: base: close: component rsh closed
<br>
[burl-ct-v440-5:09789] mca: base: close: unloading component rsh
<br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6030.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6035.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6035.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
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
