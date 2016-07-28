<?
$subject_val = "Re: [OMPI users] LD_LIBRARY_PATH Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 09:18:57 2013" -->
<!-- isoreceived="20130429131857" -->
<!-- sent="Mon, 29 Apr 2013 06:18:50 -0700" -->
<!-- isosent="20130429131850" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LD_LIBRARY_PATH Problem" -->
<!-- id="37257F43-BB2C-4B43-8E44-AC92C58450B1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMG+jNk652GQ08Q3ROX8AoH+MAMZ9UxYseBu-ppiR7dDQ7nPoA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LD_LIBRARY_PATH Problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-29 09:18:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21822.php">Jeff Squyres (jsquyres): "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21820.php">sudhirs_at_[hidden]: "[OMPI users] LD_LIBRARY_PATH Problem"</a>
<li><strong>In reply to:</strong> <a href="21820.php">sudhirs_at_[hidden]: "[OMPI users] LD_LIBRARY_PATH Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it looks like you included a node called &quot;ibc18&quot; in your hostfile, and ssh doesn't recognize that node or know how to reach it.
<br>
<p>On Apr 29, 2013, at 6:12 AM, &quot;sudhirs@&quot; &lt;sudhirchem87_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt; I am getting following error while doing a calculation. The job is getting terminated before writing anything in output file .
</span><br>
<span class="quotelev1">&gt; ==========================================================================================
</span><br>
<span class="quotelev1">&gt; ssh: ibc18: Name or service not known^M
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 8103) died unexpectedly with status 255 while attempting
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; ================================================================================
</span><br>
<span class="quotelev1">&gt; Can any one help me ?? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advances
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sudhir Kumar Sahoo
</span><br>
<span class="quotelev1">&gt; Ph.D Scholar
</span><br>
<span class="quotelev1">&gt; Dept. Of Chemistry
</span><br>
<span class="quotelev1">&gt; IIT Kanpur-208016
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
<li><strong>Next message:</strong> <a href="21822.php">Jeff Squyres (jsquyres): "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21820.php">sudhirs_at_[hidden]: "[OMPI users] LD_LIBRARY_PATH Problem"</a>
<li><strong>In reply to:</strong> <a href="21820.php">sudhirs_at_[hidden]: "[OMPI users] LD_LIBRARY_PATH Problem"</a>
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
