<?
$subject_val = "Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 20:13:12 2016" -->
<!-- isoreceived="20160325001312" -->
<!-- sent="Fri, 25 Mar 2016 00:13:10 +0000" -->
<!-- isosent="20160325001310" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun --verbose &amp;amp;&amp;amp; opal_output_verbose() on 0" -->
<!-- id="6CF72282-DD89-4B99-9CD3-692DE78A63D7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEmt-ccwG9a80ACA5b9_dqZ+K=69748FBGO5WZ+dSVd3EQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 20:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18731.php">Gilles Gouaillardet: "[OMPI devel] Fwd: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="18729.php">Josh Hursey: "[OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<li><strong>In reply to:</strong> <a href="18729.php">Josh Hursey: "[OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if #1 was supposed to activate #2...?
<br>
<p><p><span class="quotelev1">&gt; On Mar 24, 2016, at 2:52 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was rummaging through the code today and made two observations related to verbose. Neither is terribly critical, but probably worth making the developer community aware. (2) might need to be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) mpirun --verbose
</span><br>
<span class="quotelev1">&gt; It does not seem to do anything in the current master (and probably for quite some time). Would it be useful to display something with this flag? Maybe set the default verbosity for all components? Show launch status?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) opal_output_verbose(MCA_BASE_VERBOSE_INFO, 0, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; The above function call (found in a number of place in opal/mca/base/) cannot be turned on since stream 0 has its verbosity set to 0, and there does not seem to be a mechanism in the repo to adjust this value. (Am I correct here?) It would be nice to be able to activate some of these varbosity settings when debugging the MCA core (like trying to determine why a component is not loading). So it seems like we need an mca_base_verbose option somewhere. Any opinions here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18729.php">http://www.open-mpi.org/community/lists/devel/2016/03/18729.php</a>
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
<li><strong>Next message:</strong> <a href="18731.php">Gilles Gouaillardet: "[OMPI devel] Fwd: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="18729.php">Josh Hursey: "[OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<li><strong>In reply to:</strong> <a href="18729.php">Josh Hursey: "[OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
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
