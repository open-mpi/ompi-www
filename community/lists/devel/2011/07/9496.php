<?
$subject_val = "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 10:02:02 2011" -->
<!-- isoreceived="20110711140202" -->
<!-- sent="Mon, 11 Jul 2011 10:01:46 -0400" -->
<!-- isosent="20110711140146" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_init/finalize counter --&amp;gt; boolean" -->
<!-- id="BB8CF78C-2E8A-4BA0-A90D-0E888933AE05_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="228CE6EB-02B7-46A8-ADFA-D2A383408B71_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_init/finalize counter --&gt; boolean<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 10:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9497.php">Jeff Squyres: "[OMPI devel] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Previous message:</strong> <a href="9495.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="9493.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9499.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9499.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 11, 2011, at 7:28 AM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt;&gt; How about a compromise?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on the english dictionary a compromise is an agreement or a settlement of a dispute that is reached by each side making concessions. This is not a compromise. This is exactly what Ralph did plus name changes. Therefore, this is a single sided settlement.
</span><br>
<p>Actually, it gives you what you wanted, too (i.e., the ability to separately init/finalize OPAL util vs. the rest of OPAL).  
<br>
<p>Hence, it's a compromise.
<br>
<p><span class="quotelev2">&gt;&gt; - Take what is (essentially) in opal_init() today and rename it to be opal_init_frameworks() -- because it's (mostly) initializing the OPAL MCA frameworks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Take what is (essentially) in opal_finalize() today and rename it to be opal_finalize_frameworks() -- because it's (mostly) finalizing the OPAL MCA frameworks.  Remove the call to opal_finalize_util() from this function.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Remove all use of counters; calling opal_init*() will initialize (unless it has already been initialized), and calling opal_finalize*() will finalize (unless it has already been finalized).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Create a new opal_init() function that is a wrapper around opal_init_util() and opal_init_frameworks().  Create a new opal_finalize() function that is a wrapper around opal_finalize_util() and opal_finalize_frameworks().
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - orte_finalize() will call opal_finalize() -- i.e., it will unconditionally shut down all of OPAL.  This will remove the need for opal_finalize_util() in the MPI layer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This seems to give all desired behaviors:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - All &lt;foo&gt;_finalize() functions will be unconditional.  The Law of Least Surprise is preserved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - There are paths for split init and split finalize and combined init and combined finalize.  They can even be combined (e.g., split init and combined finalize -- which will be a common case, actually).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Least surprise you say? How surprise one will be once he/she realize that orte_finalize teared down all OPAL.  At least, do not forget to add one of those nice comments about the fact that one have to initialize the utils, but don't have to finalize them, ORTE will graciously do it for you.
</span><br>
<p>To clarify: you can *choose* to separately initialize the OPAL utilities if you want/need to.  
<br>
<p>Otherwise, the lower layer -- ORTE -- will both initialize and finalize OPAL for you.  Isn't that what lower layers are supposed to do?
<br>
<p>OPAL has a weird &quot;side entrance&quot; because we need to use some of OPAL (MCA params) before the rest of the system.  *That's* the weird part.  We actually somewhat violate abstraction barriers there, IMHO (but I don't know any way around that).
<br>
<p><span class="quotelev1">&gt; You want to change names, OK go for it. At the point where the code is today, I don't think it really matters anymore. In fact why do we need a boolean in the code Ralph put inside? If the opal_finalize is supposed to clean up everything just go ahead and remove that useless bool. And as you made the code easy to understand by few, put a big comment for all the others
</span><br>
<p>Do you really find this confusing?  
<br>
<p>int opal_finalize(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!opal_initialized) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
...
<br>
<p>FWIW, we have similar patterns elsewhere in OMPI for preventing multiple initializations / finalizations.  Are you saying that we should remove all of those, too?
<br>
<p><span class="quotelev1">&gt; (the ones that will try to understand why their code break after a simple orte_finalize).
</span><br>
<p>Can you cite any codes that will break if OPAL is finalized during orte_finalize()?  I thought you said in a prior mail on this thread that no one uses OPAL after orte_finalize() anyway -- we *might* want to in the future, but no one does it today.  Am I remembering incorrectly?
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
<li><strong>Next message:</strong> <a href="9497.php">Jeff Squyres: "[OMPI devel] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Previous message:</strong> <a href="9495.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="9493.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9499.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9499.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
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
