<?
$subject_val = "Re: [OMPI users] Gridengine + Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  8 19:22:55 2008" -->
<!-- isoreceived="20080708232255" -->
<!-- sent="Tue, 08 Jul 2008 19:22:41 -0400" -->
<!-- isosent="20080708232241" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gridengine + Open MPI" -->
<!-- id="4873F6C1.7030805_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48727A76.3080104_at_Sun.COM" -->
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
<strong>Date:</strong> 2008-07-08 19:22:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6036.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6034.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>In reply to:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6039.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6039.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pak Lui wrote:
<br>
<span class="quotelev1">&gt; Romaric David wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Pak Lui a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It was fixed at one point in the trunk before v1.3 went official, but 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while rolling the code from gridengine PLM into the rsh PLM code, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this feature was left out because there was some lingering issues 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I didn't resolved and I lost track of it. Sorry but thanks for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bringing it up, I will need to look at the issue again and reopen 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this ticket against v1.3:
</span><br>
<span class="quotelev2">&gt;&gt; Ok, so I have to wait for a 1.3 version to work with job suspend, or
</span><br>
<span class="quotelev2">&gt;&gt; will it be back-ported to 1.2.6 or 1.2.6 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe it will definitely be in 1.3 series, I am not sure about v1.2 
</span><br>
<span class="quotelev1">&gt; at this point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So even it is the rsh PLM that starts the parallel job under SGE, the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsh PLM can detect if the Open MPI job is started under the SGE 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Environment (via checking some SGE env vars) and use the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;qrsh --inherit&quot; command to launch the parallel job the same way as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it was before. You can check by setting MCA to something like &quot;--mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_base_verbose 10&quot; in your mpirun command and look for the launch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commands that mpirun uses.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like shepherd cannot be started for a reason I couldn't get yet.
</span><br>
<span class="quotelev2">&gt;&gt; /opt/SGE/utilbin/lx24-amd64/rsh exited with exit code 0
</span><br>
<span class="quotelev2">&gt;&gt; reading exit code from shepherd ... 255
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:16745] ----------------------------
</span><br>
<p>Romaric,
<br>
<p>I just made a fix for the problem I've shown below in r18844. I think it 
<br>
is essentially the same problem that you are running into here.
<br>
<p>Please let me know if you still see the problem with the SGE tight 
<br>
integration job errors out. And I'll look at the suspend/resume feature 
<br>
later on.
<br>
<p><p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Romaric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How recent is the build that you use to generate the error above? I 
</span><br>
<span class="quotelev1">&gt; assume you are using a trunk build?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't see the complete error messages that you are seeing, but I 
</span><br>
<span class="quotelev1">&gt; think I am running into the same exact error too. It seems to be a weird 
</span><br>
<span class="quotelev1">&gt; error that points out that the 'ssh' component not found. I don't 
</span><br>
<span class="quotelev1">&gt; believe there's a component named 'ssh' here, because ssh and rsh shared 
</span><br>
<span class="quotelev1">&gt; the same component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, it looks like something is broken in the plm that is responsible 
</span><br>
<span class="quotelev1">&gt; for launching the tight integration job for SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked it used to work without problem with my earlier trunk build 
</span><br>
<span class="quotelev1">&gt; (r18645). I have to find out what has happened since...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;burl-ct-v440-4&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.burl-ct-v440-4&quot;
</span><br>
<span class="quotelev1">&gt; Establishing /opt/sge/utilbin/sol-sparc64/rsh session to host 
</span><br>
<span class="quotelev1">&gt; burl-ct-v440-4 ...
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:13749] mca: base: components_open: Looking for plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      burl-ct-v440-4
</span><br>
<span class="quotelev1">&gt; Framework: plm
</span><br>
<span class="quotelev1">&gt; Component: ssh
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:13749] [[4569,0],1] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; base/ess_base_std_orted.c at line 70
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:13749] 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_plm_base_open failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:13749] [[4569,0],1] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; ess_env_module.c at line 135
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:13749] [[4569,0],1] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:13749] 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:13749] [[4569,0],1] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 311
</span><br>
<span class="quotelev1">&gt; /opt/sge/utilbin/sol-sparc64/rsh exited with exit code 0
</span><br>
<span class="quotelev1">&gt; reading exit code from shepherd ... 255
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-5:09789] 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 9790) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-5:09789] 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-5:09789] 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         burl-ct-v440-4 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-5:09789] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-5:09789] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6036.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6034.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>In reply to:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6039.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6039.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
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
