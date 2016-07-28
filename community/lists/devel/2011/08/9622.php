<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 11:34:59 2011" -->
<!-- isoreceived="20110808153459" -->
<!-- sent="Mon, 8 Aug 2011 11:34:44 -0400" -->
<!-- isosent="20110808153444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015" -->
<!-- id="EB6ED411-AEF8-454D-B24C-58A22C577E6C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMHgK37UeL1MLkuPoacUyoOOMFdn1ONeWwO-_FRGTs=vn8gWAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 11:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<li><strong>In reply to:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 8, 2011, at 11:30 AM, Wesley Bland wrote:
<br>
<p><span class="quotelev1">&gt; The reason is because valgrind was complaining about uninitialized values that were passed into proc_get_epoch. I saw the same warnings from valgrind when I ran it. I added the code to initialize the values to what really should be the default value and the warnings went away. Since the process_name_t struct isn't an object, it doesn't have an initialization function like so many of the other objects in the code. This is what we have.
</span><br>
<p>Ah, I see -- you are passing peer_name into proc_get_epoch().  I missed that.
<br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev1">&gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9621.php">renyong.yang: "[OMPI devel] bug report-"</a>
<li><strong>In reply to:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
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
