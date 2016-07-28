<?
$subject_val = "Re: [OMPI users] lsb_launch failed: 0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 01:58:27 2013" -->
<!-- isoreceived="20130618055827" -->
<!-- sent="Tue, 18 Jun 2013 11:28:17 +0530" -->
<!-- isosent="20130618055817" -->
<!-- name="Singh, Bharati (GE Global Research, consultant)" -->
<!-- email="Bharati.Singh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] lsb_launch failed: 0" -->
<!-- id="87EE25C6C3081A42900798613A105C1201F537AD_at_BANMLVEM04.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F68A2F9_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Singh, Bharati (GE Global Research, consultant) (<em>Bharati.Singh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 01:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Previous message:</strong> <a href="22118.php">xu: "[OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>In reply to:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff Squyres
<br>
<p>Issue have resolved after resetting environment variables in the user
<br>
script.
<br>
<p>Thanks,
<br>
Bharati Singh
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Monday, June 17, 2013 7:13 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] lsb_launch failed: 0
<br>
<p>I'm not an LSF expert, but this usually means that the Open MPI helper
<br>
executable named &quot;orted&quot; was not able to be found on the remote nodes.
<br>
<p>Is your PATH set properly, both locally and remotely, such that the Open
<br>
MPI executables can be found?
<br>
<p><p>On Jun 17, 2013, at 7:01 AM, &quot;Singh, Bharati (GE Global Research,
<br>
consultant)&quot; &lt;Bharati.Singh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Our users jobs are exiting with below error for random nodes. could
</span><br>
you please help us to resolve this issue?
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [root_at_bng1grcdc200 output.228472]# cat user_script.stderr 
</span><br>
<span class="quotelev1">&gt; [bng1grcdc181:08381] [[54933,0],0] ORTE_ERROR_LOG: The specified 
</span><br>
<span class="quotelev1">&gt; application failed to start in file plm_lsf_module.c at line 308 
</span><br>
<span class="quotelev1">&gt; [bng1grcdc181:08381] lsb_launch failed: 0
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- A daemon (pid unknown) died unexpectedly on signal 1  while 
</span><br>
<span class="quotelev1">&gt; attempting to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed 
</span><br>
<span class="quotelev1">&gt; shared libraries on the remote node. You may set your LD_LIBRARY_PATH 
</span><br>
<span class="quotelev1">&gt; to have the location of the shared libraries on the remote nodes and 
</span><br>
<span class="quotelev1">&gt; this will automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- mpirun noticed that the job aborted, but has no info as to the 
</span><br>
<span class="quotelev1">&gt; process that caused that situation.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- mpirun was unable to cleanly terminate the daemons on the nodes 
</span><br>
<span class="quotelev1">&gt; shown below. Additional manual cleanup may be required - please refer 
</span><br>
<span class="quotelev1">&gt; to the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
------------------------------------------------------------------------
<br>
<pre>
--
&gt;         bng1grcdc172 - daemon did not report back when launched
&gt;         bng1grcdc154 - daemon did not report back when launched
&gt;         bng1grcdc198 - daemon did not report back when launched
&gt;         bng1grcdc183 - daemon did not report back when launched
&gt;         bng1grcdc187 - daemon did not report back when launched
&gt;         bng1grcdc196 - daemon did not report back when launched
&gt;         bng1grcdc153 - daemon did not report back when launched
&gt;         bng1grcdc173 - daemon did not report back when launched
&gt;         bng1grcdc193 - daemon did not report back when launched
&gt;         bng1grcdc185 - daemon did not report back when launched
&gt;         bng1grcdc176 - daemon did not report back when launched
&gt;         bng1grcdc190 - daemon did not report back when launched
&gt;         bng1grcdc194 - daemon did not report back when launched
&gt;         bng1grcdc156 - daemon did not report back when launched
&gt;  
&gt;  
&gt; Thanks,
&gt; Bharati Singh
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Previous message:</strong> <a href="22118.php">xu: "[OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>In reply to:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
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
