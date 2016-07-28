<?
$subject_val = "Re: [OMPI devel] PLM consistency: priority";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 11:14:08 2008" -->
<!-- isoreceived="20080711151408" -->
<!-- sent="Fri, 11 Jul 2008 09:14:01 -0600" -->
<!-- isosent="20080711151401" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLM consistency: priority" -->
<!-- id="C49CD4D9.E43A%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C95E6045-EF72-44A3-9995-E940A9DE25E3_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLM consistency: priority<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 11:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4324.php">Terry Dontje: "[OMPI devel] SM latency regression"</a>
<li><strong>Previous message:</strong> <a href="4322.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>In reply to:</strong> <a href="4322.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4372.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Reply:</strong> <a href="4372.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ummm...I actually was talking about the &quot;PLM&quot;, not the &quot;PML&quot;.
<br>
<p>But I believe what you suggest concurs with what I said. In the PLM, you
<br>
could still provide multiple components you want considered, though it has
<br>
less meaning there. My suggestion really is only that we eliminate the
<br>
params to adjust relative priority as they are just confusing the user and
<br>
potentially misleading them as to what is going to happen.
<br>
<p>Ralph
<br>
<p><p><p>On 7/11/08 9:07 AM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We don't want the user to have to select by hand the best PML. The
</span><br>
<span class="quotelev1">&gt; logic inside the current selection process selects the best pml for
</span><br>
<span class="quotelev1">&gt; the underlying network. However changing the priority is pretty
</span><br>
<span class="quotelev1">&gt; meaningless from the user's point of view. So while retaining the
</span><br>
<span class="quotelev1">&gt; selection process including priorities, we might want to remove the
</span><br>
<span class="quotelev1">&gt; priority parameter, and use only the pml=ob1,cm syntax from the user's
</span><br>
<span class="quotelev1">&gt; point of view.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 11 juil. 08 &#224; 10:56, Ralph H Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, another fun one. Some of the PLM modules use MCA params to
</span><br>
<span class="quotelev2">&gt;&gt; adjust
</span><br>
<span class="quotelev2">&gt;&gt; their relative selection priority. This can lead to very unexpected
</span><br>
<span class="quotelev2">&gt;&gt; behavior
</span><br>
<span class="quotelev2">&gt;&gt; as which module gets selected will depend on the priorities of the
</span><br>
<span class="quotelev2">&gt;&gt; other
</span><br>
<span class="quotelev2">&gt;&gt; selectable modules - which changes from release to release as people
</span><br>
<span class="quotelev2">&gt;&gt; independently make adjustments and/or new modules are added.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fortunately, this doesn't bite us too often since many environments
</span><br>
<span class="quotelev2">&gt;&gt; only
</span><br>
<span class="quotelev2">&gt;&gt; support one module, and since there is nothing to tell the user that
</span><br>
<span class="quotelev2">&gt;&gt; the plm
</span><br>
<span class="quotelev2">&gt;&gt; module whose priority they raised actually -didn't- get used!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, in the interest of &quot;least astonishment&quot;, some of us working
</span><br>
<span class="quotelev2">&gt;&gt; on the
</span><br>
<span class="quotelev2">&gt;&gt; RTE had changed our coding approach to avoid this confusion. Given
</span><br>
<span class="quotelev2">&gt;&gt; that we
</span><br>
<span class="quotelev2">&gt;&gt; have this nice mca component select logic that takes the specified
</span><br>
<span class="quotelev2">&gt;&gt; module -
</span><br>
<span class="quotelev2">&gt;&gt; i.e., &quot;-mca plm foo&quot; always yields foo if it can run, or errors out
</span><br>
<span class="quotelev2">&gt;&gt; if it
</span><br>
<span class="quotelev2">&gt;&gt; can't - then the safest course is to remove MCA params that adjust
</span><br>
<span class="quotelev2">&gt;&gt; module
</span><br>
<span class="quotelev2">&gt;&gt; priorities and have the user simply tell us which module they want
</span><br>
<span class="quotelev2">&gt;&gt; us to
</span><br>
<span class="quotelev2">&gt;&gt; use.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do we want to make this consistent, at least in the PLM? Or do you
</span><br>
<span class="quotelev2">&gt;&gt; want to
</span><br>
<span class="quotelev2">&gt;&gt; leave the user guessing? :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<li><strong>Next message:</strong> <a href="4324.php">Terry Dontje: "[OMPI devel] SM latency regression"</a>
<li><strong>Previous message:</strong> <a href="4322.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>In reply to:</strong> <a href="4322.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4372.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Reply:</strong> <a href="4372.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: priority"</a>
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
