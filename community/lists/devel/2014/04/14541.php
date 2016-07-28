<?
$subject_val = "Re: [OMPI devel] Update SLURM FAQ entry?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 08:00:07 2014" -->
<!-- isoreceived="20140416120007" -->
<!-- sent="Wed, 16 Apr 2014 12:00:00 +0000" -->
<!-- isosent="20140416120000" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update SLURM FAQ entry?" -->
<!-- id="1B550B43-F3B9-444C-826F-345315D8B273_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADkWibfUJuEgXV2hJLVYD_cpAx9x2g3eGP_3LEmav_ZYWFJ_jQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Update SLURM FAQ entry?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 08:00:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14542.php">Ralph Castain: "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Previous message:</strong> <a href="14540.php">Bastian Beischer: "[OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<li><strong>In reply to:</strong> <a href="14536.php">Anthony Alba: "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14542.php">Ralph Castain: "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Reply:</strong> <a href="14542.php">Ralph Castain: "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph -- does this text look ok to you?
<br>
<p>It looks ok to me.
<br>
<p><p>On Apr 15, 2014, at 9:52 PM, Anthony Alba &lt;ascanio.alba7_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sure - how about this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Yes, if you have configured OMPI --with-pmi=foo, where foo is the path to the directory where pmi.h/pmi2.h is located. Slurm (&gt; 2.6, &gt; 14.03) installs PMI-2 support by default. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Older versions of Slurm install PMI-1 by default. If you desire PMI-2, Slurm requires that you manually install that support. When the --with-pmi option is given, OMPI will automatically determine if PMI-2 support was built and use it in place of PMI-1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. Any issues with Slurm 2.6.3, 14.03?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes. The Slurm 2.6.3, 14.03 releases have a bug in their PMI-2 support. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the slurm-2.6 branch,  it is recommended to use the latest version (2.6.9 as of 2014/4) which works with pmi2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the slurm-14.03 branch, the fix will be in  14.03.1. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 15, 2014 at 9:46 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Would you mind sending us updated text?  I don't know if any of us follows the SLURM releases closely...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I assume you're referring specifically to question 4, right?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 11, 2014, at 11:42 PM, Anthony Alba &lt;ascanio.alba7_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it time to update the SLURM FAQ entry?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. SLURM 2.6.9 and 14.03 install pmi2 by default. (At least with the default RPM spec file).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. 14.03.0 is also buggy wrt to pmi2.
</span><br>
<span class="quotelev2">&gt; &gt; It is fixed in 14.03 tip and soon 14.03.1 release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Anthony
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14499.php">http://www.open-mpi.org/community/lists/devel/2014/04/14499.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14528.php">http://www.open-mpi.org/community/lists/devel/2014/04/14528.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14536.php">http://www.open-mpi.org/community/lists/devel/2014/04/14536.php</a>
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
<li><strong>Next message:</strong> <a href="14542.php">Ralph Castain: "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Previous message:</strong> <a href="14540.php">Bastian Beischer: "[OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<li><strong>In reply to:</strong> <a href="14536.php">Anthony Alba: "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14542.php">Ralph Castain: "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Reply:</strong> <a href="14542.php">Ralph Castain: "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
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
