<?
$subject_val = "Re: [OMPI users] lsb_launch failed: 0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 17 09:42:45 2013" -->
<!-- isoreceived="20130617134245" -->
<!-- sent="Mon, 17 Jun 2013 13:42:40 +0000" -->
<!-- isosent="20130617134240" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] lsb_launch failed: 0" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F68A2F9_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87EE25C6C3081A42900798613A105C1201EB4AE6_at_BANMLVEM04.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] lsb_launch failed: 0<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-17 09:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22111.php">Haroogan: "[OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>Previous message:</strong> <a href="22109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>In reply to:</strong> <a href="22108.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] lsb_launch failed: 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22119.php">Singh, Bharati (GE Global Research, consultant): "Re: [OMPI users] lsb_launch failed: 0"</a>
<li><strong>Reply:</strong> <a href="22119.php">Singh, Bharati (GE Global Research, consultant): "Re: [OMPI users] lsb_launch failed: 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not an LSF expert, but this usually means that the Open MPI helper executable named &quot;orted&quot; was not able to be found on the remote nodes.
<br>
<p>Is your PATH set properly, both locally and remotely, such that the Open MPI executables can be found?
<br>
<p><p>On Jun 17, 2013, at 7:01 AM, &quot;Singh, Bharati (GE Global Research, consultant)&quot; &lt;Bharati.Singh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Our users jobs are exiting with below error for random nodes. could you please help us to resolve this issue?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [root_at_bng1grcdc200 output.228472]# cat user_script.stderr
</span><br>
<span class="quotelev1">&gt; [bng1grcdc181:08381] [[54933,0],0] ORTE_ERROR_LOG: The specified application failed to start in file plm_lsf_module.c at line 308
</span><br>
<span class="quotelev1">&gt; [bng1grcdc181:08381] lsb_launch failed: 0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;         bng1grcdc172 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc154 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc198 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc183 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc187 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc196 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc153 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc173 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc193 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc185 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc176 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc190 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc194 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         bng1grcdc156 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Bharati Singh
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22111.php">Haroogan: "[OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>Previous message:</strong> <a href="22109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>In reply to:</strong> <a href="22108.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] lsb_launch failed: 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22119.php">Singh, Bharati (GE Global Research, consultant): "Re: [OMPI users] lsb_launch failed: 0"</a>
<li><strong>Reply:</strong> <a href="22119.php">Singh, Bharati (GE Global Research, consultant): "Re: [OMPI users] lsb_launch failed: 0"</a>
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
