<?
$subject_val = "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 11:57:22 2011" -->
<!-- isoreceived="20110708155722" -->
<!-- sent="Fri, 8 Jul 2011 17:57:15 +0200" -->
<!-- isosent="20110708155715" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_init/finalize counter --&amp;gt; boolean" -->
<!-- id="DF9D3012-3AB2-4FFF-BDC7-9DFA5FA03107_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="11E9BDC2-8639-466A-BF1C-CEF9378D479D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-07-08 11:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9487.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9485.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="9485.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9490.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9490.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 8, 2011, at 16:15 , Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So we have opal_init * 1 and opal_util * 2. Clearly the opal util is not a simple ON/OFF stuff. With Ralph patch the OPAL utilities will disappear as soon as the OMPI layer call orte_fini. Luckily, today there is nothing between the call to orte_fini and opal_finalize_util, so we're safe from a segfault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The point is that you shouldn't be calling opal_finalize_util separately. We do so now only because of the counter - there is no reason for doing it separately otherwise.
</span><br>
<p>Absolutely not, we do so for consistency. If as a software layer have to explicitly call the opal util initialization function (in order to access some features), then it should __explicitly__ state when it doesn't need it anymore (instead of relying on some other layer will do the right thing for me).
<br>
<p><span class="quotelev1">&gt; In other words, we created a counter, and then modified the code to make the counter work. There is no reason for it to exist as there is no use of the opal utilities following the call to orte_finalize.
</span><br>
<p>It happens today that this is not the case, which doesn't means 1) nobody will ever do it; 2) it is correct to just assume you can release it somewhere else; 3) assume a bool is equivalent to a counter.
<br>
<p><span class="quotelev2">&gt;&gt; Moreover, from a software engineering point of view there are two choices for allowing library composition (ORTE using OPAL, OMPI using ORTE and OPAL, something else using OMPI and ORTE and OPAL). Either you do the management at the lowest level using counters, or you provide accessors to check the init/fini state of the library and do the management at the upper level (similar to the MPI library). In Open MPI and this for the last 7 years we chose the first approach. And so far there was no compelling case to switch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes there was - we just never checked it. None of the tools were calling opal_finalize multiple times. There was an inherent understanding that calling orte_finalize would shut everything down. This wasn't the case because this hidden counter wasn't getting zero'd, and so opal_finalize never actually executed.
</span><br>
<p>I dont get it. Why do a tool has to call the opal_finalize function multiple times? Instead, each layer should call it as many time as it called the corresponding initialization function, and because each layer is supposed to get initialized and finalized a equivalent number of times everything will just work.
<br>
<p>The modification in your commit created two different behavior, one for software using ORTE (which can safely assume everything was teared down after orte_fini and can avoid calling the opal_finalize_util) and one for every other software that doesn't use ORTE and therefore has to call opal_finalize_util as many times as it called the corresponding init function.
<br>
<p><span class="quotelev1">&gt; Now imagine there is an abnormal termination. You can't know for sure where it occurs - did we increment the counter already, or not? So how many times do I have to call opal_finalize and opal_finalize_util to get them to actually execute?
</span><br>
<p>First I'll say that if it's only for abnormal termination, I don't really care about not having memory leaks.   Now let's assume we do care about memory leaks. First there are many process data left around, the job map the modex info, countless other things that are significantly more difficult to cleanup than the opal util. And then, as I saidf before each layer should call the fini function exactly the same number of times it called the corresponding init.
<br>
<p><span class="quotelev1">&gt; The way things sat, I could only loop over opal_finalize and opal_finalize_util until I got back an error indicating it had finally executed. That is plain ugly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It isn't a big deal, but creates a hidden 'gotcha' that results in some ugly code to compensate if you want to cleanly terminate under all conditions. If you have a compelling case where someone needs to access the opal utils -after- having called orte_finalize or opal_finalize, then I would welcome hearing about it.
</span><br>
<p>We did not have to do any of this in the MPI layer, and we did have a correct handling of this issue. 
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>PS: Small reminder in case we decide to withdraw this change: r24862 and r24864 are now related.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9487.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9485.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="9485.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9490.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Reply:</strong> <a href="9490.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
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
