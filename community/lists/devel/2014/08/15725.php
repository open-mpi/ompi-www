<?
$subject_val = "Re: [OMPI devel] malloc 0 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 19:39:00 2014" -->
<!-- isoreceived="20140826233900" -->
<!-- sent="Tue, 26 Aug 2014 23:38:59 +0000" -->
<!-- isosent="20140826233859" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] malloc 0 warnings" -->
<!-- id="8B9BFD2D-F877-4336-A173-A732D799A931_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwAuY-VVWDoEs_0XTJZM8Nk0Mnt4z-ih_+t5DQmaLUZ9Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] malloc 0 warnings<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 19:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Previous message:</strong> <a href="15724.php">Andrej Prsa: "[OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>In reply to:</strong> <a href="15714.php">Lisandro Dalcin: "[OMPI devel] malloc 0 warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15740.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Reply:</strong> <a href="15740.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Reply:</strong> <a href="15742.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you have reproducers, yes, that would be most helpful -- thanks.
<br>
<p>On Aug 26, 2014, at 12:26 PM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting a bunch of the following messages. Are they signaling some
</span><br>
<span class="quotelev1">&gt; easy-to-fix internal issue? Do you need code to reproduce each one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_libnbc_ireduce_scatter_block.c, 67)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (nbc_internal.h, 496)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_rdma_active_target.c, 74)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15714.php">http://www.open-mpi.org/community/lists/devel/2014/08/15714.php</a>
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
<li><strong>Next message:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Previous message:</strong> <a href="15724.php">Andrej Prsa: "[OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>In reply to:</strong> <a href="15714.php">Lisandro Dalcin: "[OMPI devel] malloc 0 warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15740.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Reply:</strong> <a href="15740.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Reply:</strong> <a href="15742.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
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
