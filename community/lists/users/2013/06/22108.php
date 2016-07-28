<?
$subject_val = "[OMPI users] lsb_launch failed: 0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 17 07:01:14 2013" -->
<!-- isoreceived="20130617110114" -->
<!-- sent="Mon, 17 Jun 2013 16:31:04 +0530" -->
<!-- isosent="20130617110104" -->
<!-- name="Singh, Bharati (GE Global Research, consultant)" -->
<!-- email="Bharati.Singh_at_[hidden]" -->
<!-- subject="[OMPI users] lsb_launch failed: 0" -->
<!-- id="87EE25C6C3081A42900798613A105C1201EB4AE6_at_BANMLVEM04.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] lsb_launch failed: 0<br>
<strong>From:</strong> Singh, Bharati (GE Global Research, consultant) (<em>Bharati.Singh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-17 07:01:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>Previous message:</strong> <a href="22107.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] jobs are hanging with btl_openib_component error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
<li><strong>Reply:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Team,
<br>
<p>&nbsp;
<br>
<p>Our users jobs are exiting with below error for random nodes. could you
<br>
please help us to resolve this issue?
<br>
<p>&nbsp;
<br>
<p>[root_at_bng1grcdc200 output.228472]# cat user_script.stderr
<br>
<p>[bng1grcdc181:08381] [[54933,0],0] ORTE_ERROR_LOG: The specified
<br>
application failed to start in file plm_lsf_module.c at line 308
<br>
<p>[bng1grcdc181:08381] lsb_launch failed: 0
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
A daemon (pid unknown) died unexpectedly on signal 1  while attempting
to
launch so we are aborting.
 
There may be more information reported by the environment (see above).
 
This may be because the daemon was unable to find all the needed shared
libraries on the remote node. You may set your LD_LIBRARY_PATH to have
the
location of the shared libraries on the remote nodes and this will
automatically be forwarded to the remote nodes.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
mpirun noticed that the job aborted, but has no info as to the process
that caused that situation.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
mpirun was unable to cleanly terminate the daemons on the nodes shown
below. Additional manual cleanup may be required - please refer to
the &quot;orte-clean&quot; tool for assistance.
------------------------------------------------------------------------
--
        bng1grcdc172 - daemon did not report back when launched
        bng1grcdc154 - daemon did not report back when launched
        bng1grcdc198 - daemon did not report back when launched
        bng1grcdc183 - daemon did not report back when launched
        bng1grcdc187 - daemon did not report back when launched
        bng1grcdc196 - daemon did not report back when launched
        bng1grcdc153 - daemon did not report back when launched
        bng1grcdc173 - daemon did not report back when launched
        bng1grcdc193 - daemon did not report back when launched
        bng1grcdc185 - daemon did not report back when launched
        bng1grcdc176 - daemon did not report back when launched
        bng1grcdc190 - daemon did not report back when launched
        bng1grcdc194 - daemon did not report back when launched
        bng1grcdc156 - daemon did not report back when launched
 
 
Thanks,
Bharati Singh
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22108/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>Previous message:</strong> <a href="22107.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] jobs are hanging with btl_openib_component error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
<li><strong>Reply:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
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
