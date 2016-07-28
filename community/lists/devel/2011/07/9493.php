<?
$subject_val = "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 07:28:33 2011" -->
<!-- isoreceived="20110711112833" -->
<!-- sent="Mon, 11 Jul 2011 13:28:21 +0200" -->
<!-- isosent="20110711112821" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_init/finalize counter --&amp;gt; boolean" -->
<!-- id="228CE6EB-02B7-46A8-ADFA-D2A383408B71_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56663F4B-2CE3-4624-A307-A026A189E9E7_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 07:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9494.php">Terry Dontje: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9492.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9490.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9494.php">Terry Dontje: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9494.php">Terry Dontje: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9496.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 9, 2011, at 13:43 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Leaving out many details, I think the arguments can be summarized as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Ralph's argument is that per convention of our other 2 layers, &quot;&lt;foo&gt;_finalize&quot; should unconditionally finalize the layer.  Just do it.  It's also weird that opal_finalize() may actually do *nothing* (vs. finalizing at least all of its stuff but leave OPAL util stuff initialized) -- this is not symmetric.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. George's argument is that for API symmetry, if you call opal_init_util, then opal shouldn't be finalized until opal_finalize_util is invoked.  Plus, we may want to use OPAL utils after opal_finalize someday (note that we don't do this today).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about a compromise?
</span><br>
<p>Based on the english dictionary a compromise is an agreement or a settlement of a dispute that is reached by each side making concessions. This is not a compromise. This is exactly what Ralph did plus name changes. Therefore, this is a single sided settlement.
<br>
<p><span class="quotelev1">&gt; - Take what is (essentially) in opal_init() today and rename it to be opal_init_frameworks() -- because it's (mostly) initializing the OPAL MCA frameworks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Take what is (essentially) in opal_finalize() today and rename it to be opal_finalize_frameworks() -- because it's (mostly) finalizing the OPAL MCA frameworks.  Remove the call to opal_finalize_util() from this function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Remove all use of counters; calling opal_init*() will initialize (unless it has already been initialized), and calling opal_finalize*() will finalize (unless it has already been finalized).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Create a new opal_init() function that is a wrapper around opal_init_util() and opal_init_frameworks().  Create a new opal_finalize() function that is a wrapper around opal_finalize_util() and opal_finalize_frameworks().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - orte_finalize() will call opal_finalize() -- i.e., it will unconditionally shut down all of OPAL.  This will remove the need for opal_finalize_util() in the MPI layer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to give all desired behaviors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - All &lt;foo&gt;_finalize() functions will be unconditional.  The Law of Least Surprise is preserved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - There are paths for split init and split finalize and combined init and combined finalize.  They can even be combined (e.g., split init and combined finalize -- which will be a common case, actually).
</span><br>
<p>Least surprise you say? How surprise one will be once he/she realize that orte_finalize teared down all OPAL.  At least, do not forget to add one of those nice comments about the fact that one have to initialize the utils, but don't have to finalize them, ORTE will graciously do it for you.
<br>
<p>You want to change names, OK go for it. At the point where the code is today, I don't think it really matters anymore. In fact why do we need a boolean in the code Ralph put inside? If the opal_finalize is supposed to clean up everything just go ahead and remove that useless bool. And as you made the code easy to understand by few, put a big comment for all the others (the ones that will try to understand why their code break after a simple orte_finalize).
<br>
<p>Moreover, Open MPI is a community project. I'm the only one against this change and you guys are two for adding this great feature to the code base. So go ahead and implement it with the blessing of the entire community!
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; If we ever want to use OPAL utility behavior after orte_finalize() someday, we can.  E.g., we can pass a flag to orte_finalize() saying &quot;use opal_finalize_frameworks() instead of opal_finalize()&quot;, or perhaps even &quot;don't finalize OPAL at all.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2011, at 11:57 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 8, 2011, at 16:15 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So we have opal_init * 1 and opal_util * 2. Clearly the opal util is not a simple ON/OFF stuff. With Ralph patch the OPAL utilities will disappear as soon as the OMPI layer call orte_fini. Luckily, today there is nothing between the call to orte_fini and opal_finalize_util, so we're safe from a segfault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The point is that you shouldn't be calling opal_finalize_util separately. We do so now only because of the counter - there is no reason for doing it separately otherwise.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Absolutely not, we do so for consistency. If as a software layer have to explicitly call the opal util initialization function (in order to access some features), then it should __explicitly__ state when it doesn't need it anymore (instead of relying on some other layer will do the right thing for me).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In other words, we created a counter, and then modified the code to make the counter work. There is no reason for it to exist as there is no use of the opal utilities following the call to orte_finalize.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It happens today that this is not the case, which doesn't means 1) nobody will ever do it; 2) it is correct to just assume you can release it somewhere else; 3) assume a bool is equivalent to a counter.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Moreover, from a software engineering point of view there are two choices for allowing library composition (ORTE using OPAL, OMPI using ORTE and OPAL, something else using OMPI and ORTE and OPAL). Either you do the management at the lowest level using counters, or you provide accessors to check the init/fini state of the library and do the management at the upper level (similar to the MPI library). In Open MPI and this for the last 7 years we chose the first approach. And so far there was no compelling case to switch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes there was - we just never checked it. None of the tools were calling opal_finalize multiple times. There was an inherent understanding that calling orte_finalize would shut everything down. This wasn't the case because this hidden counter wasn't getting zero'd, and so opal_finalize never actually executed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I dont get it. Why do a tool has to call the opal_finalize function multiple times? Instead, each layer should call it as many time as it called the corresponding initialization function, and because each layer is supposed to get initialized and finalized a equivalent number of times everything will just work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The modification in your commit created two different behavior, one for software using ORTE (which can safely assume everything was teared down after orte_fini and can avoid calling the opal_finalize_util) and one for every other software that doesn't use ORTE and therefore has to call opal_finalize_util as many times as it called the corresponding init function.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now imagine there is an abnormal termination. You can't know for sure where it occurs - did we increment the counter already, or not? So how many times do I have to call opal_finalize and opal_finalize_util to get them to actually execute?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First I'll say that if it's only for abnormal termination, I don't really care about not having memory leaks.   Now let's assume we do care about memory leaks. First there are many process data left around, the job map the modex info, countless other things that are significantly more difficult to cleanup than the opal util. And then, as I saidf before each layer should call the fini function exactly the same number of times it called the corresponding init.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The way things sat, I could only loop over opal_finalize and opal_finalize_util until I got back an error indicating it had finally executed. That is plain ugly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It isn't a big deal, but creates a hidden 'gotcha' that results in some ugly code to compensate if you want to cleanly terminate under all conditions. If you have a compelling case where someone needs to access the opal utils -after- having called orte_finalize or opal_finalize, then I would welcome hearing about it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We did not have to do any of this in the MPI layer, and we did have a correct handling of this issue. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: Small reminder in case we decide to withdraw this change: r24862 and r24864 are now related.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9494.php">Terry Dontje: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9492.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9490.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9494.php">Terry Dontje: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9494.php">Terry Dontje: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9496.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
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
