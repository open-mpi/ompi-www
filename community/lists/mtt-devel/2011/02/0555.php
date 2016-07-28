<?
$subject_val = "Re: [MTT devel] race condition in SCM module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 17:23:11 2011" -->
<!-- isoreceived="20110217222311" -->
<!-- sent="Thu, 17 Feb 2011 17:23:07 -0500" -->
<!-- isosent="20110217222307" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] race condition in SCM module" -->
<!-- id="F7AF0A05-097C-4208-86E7-F259A68E4FDF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTim_47HFM1h8+uJZH76T_FWQSuGRoXYv0Ws+6f7L_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] race condition in SCM module<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 17:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0556.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Previous message:</strong> <a href="0554.php">Mike Dubman: "[MTT devel] race condition in SCM module"</a>
<li><strong>In reply to:</strong> <a href="0554.php">Mike Dubman: "[MTT devel] race condition in SCM module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0556.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Reply:</strong> <a href="0556.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2011, at 2:36 PM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; There is a race condition in SCM, Mercurial module when used from MPI GET phase:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - scm_post_copy hook can be started before MPI GET completed copy of fetched tree into install location.
</span><br>
<p>How have you verified this?
<br>
<p><span class="quotelev1">&gt; - This leads to mtt failure, because post_copy starts too early (tree was not copied yet) and fails.
</span><br>
<span class="quotelev1">&gt; - adding sleeps to post_copy hook - helps.
</span><br>
<span class="quotelev1">&gt; - does copytree used during mtt get phase have async behave?
</span><br>
<p>No, it shouldn't.  Everything is serial.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------- from the mtt -d -v output ---------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; copytree running post_copy command: 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please suggest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0556.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Previous message:</strong> <a href="0554.php">Mike Dubman: "[MTT devel] race condition in SCM module"</a>
<li><strong>In reply to:</strong> <a href="0554.php">Mike Dubman: "[MTT devel] race condition in SCM module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0556.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Reply:</strong> <a href="0556.php">Mike Dubman: "Re: [MTT devel] race condition in SCM module"</a>
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
