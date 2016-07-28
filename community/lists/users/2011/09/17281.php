<?
$subject_val = "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 05:59:12 2011" -->
<!-- isoreceived="20110914095912" -->
<!-- sent="Wed, 14 Sep 2011 05:59:07 -0400" -->
<!-- isosent="20110914095907" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?" -->
<!-- id="F0A1D0B7-621A-47E8-8D14-4D6B74151C20_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="da8fe76431336c216185f0e8c0883a49.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 05:59:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>In reply to:</strong> <a href="17275.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17300.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17300.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17332.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 13, 2011, at 6:33 PM, Kevin.Buckley_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; there have been two runs of jobs that invoked the mpirun using these
</span><br>
<span class="quotelev1">&gt; OpenMPI parameter setting flags (basically, these mimic what I have
</span><br>
<span class="quotelev1">&gt; in the global config file)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_ib_timeout 20 -mca btl_openib_ib_min_rnr_timer 25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when both of the job failed, the error output was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
</span><br>
<span class="quotelev1">&gt; Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev1">&gt; respect to the retry count:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev1">&gt;  attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev1">&gt;  to 10).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev1">&gt; -----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the error output it still showing that mysterious &quot;10&quot;
</span><br>
<span class="quotelev1">&gt; in there for btl_openib_ib_timeout value.
</span><br>
<p>That text message is hard-coded (and apparently out of date); it does not show the current value.
<br>
<p>I agree that that is misleading.  This error message needs to be improved.
<br>
<p><span class="quotelev1">&gt; I have noticed that the same node is apearing in the error output
</span><br>
<span class="quotelev1">&gt; each time, so I'll try taking that one out of the test PE that the
</span><br>
<span class="quotelev1">&gt; jobs are executing in and seeing if I can tie it to hardware.
</span><br>
<p>This might suggest a hardware issue; let us know what you find.
<br>
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
<li><strong>Next message:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>In reply to:</strong> <a href="17275.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17300.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17300.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17332.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
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
