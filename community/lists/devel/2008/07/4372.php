<?
$subject_val = "Re: [OMPI devel] PLM consistency: priority";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 07:35:54 2008" -->
<!-- isoreceived="20080717113554" -->
<!-- sent="Thu, 17 Jul 2008 07:35:37 -0400" -->
<!-- isosent="20080717113537" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLM consistency: priority" -->
<!-- id="D80AEE62-DB83-4A58-8ECC-7EBAE29FCED9_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C49CD4D9.E43A%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-17 07:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4371.php">Jeff Squyres: "[OMPI devel] IBCM and ordering of OpenFabrics devices"</a>
<li><strong>In reply to:</strong> <a href="4323.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: priority"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW -- we talked about this a bunch in the Louisville and have some  
<br>
ideas.  More details coming in meeting wrapup notes...
<br>
<p><p>On Jul 11, 2008, at 11:14 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ummm...I actually was talking about the &quot;PLM&quot;, not the &quot;PML&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I believe what you suggest concurs with what I said. In the PLM,  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; could still provide multiple components you want considered, though  
</span><br>
<span class="quotelev1">&gt; it has
</span><br>
<span class="quotelev1">&gt; less meaning there. My suggestion really is only that we eliminate the
</span><br>
<span class="quotelev1">&gt; params to adjust relative priority as they are just confusing the  
</span><br>
<span class="quotelev1">&gt; user and
</span><br>
<span class="quotelev1">&gt; potentially misleading them as to what is going to happen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/11/08 9:07 AM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We don't want the user to have to select by hand the best PML. The
</span><br>
<span class="quotelev2">&gt;&gt; logic inside the current selection process selects the best pml for
</span><br>
<span class="quotelev2">&gt;&gt; the underlying network. However changing the priority is pretty
</span><br>
<span class="quotelev2">&gt;&gt; meaningless from the user's point of view. So while retaining the
</span><br>
<span class="quotelev2">&gt;&gt; selection process including priorities, we might want to remove the
</span><br>
<span class="quotelev2">&gt;&gt; priority parameter, and use only the pml=ob1,cm syntax from the  
</span><br>
<span class="quotelev2">&gt;&gt; user's
</span><br>
<span class="quotelev2">&gt;&gt; point of view.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 11 juil. 08 &#224; 10:56, Ralph H Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, another fun one. Some of the PLM modules use MCA params to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adjust
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their relative selection priority. This can lead to very unexpected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as which module gets selected will depend on the priorities of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; selectable modules - which changes from release to release as people
</span><br>
<span class="quotelev3">&gt;&gt;&gt; independently make adjustments and/or new modules are added.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortunately, this doesn't bite us too often since many environments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support one module, and since there is nothing to tell the user that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the plm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module whose priority they raised actually -didn't- get used!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, in the interest of &quot;least astonishment&quot;, some of us working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RTE had changed our coding approach to avoid this confusion. Given
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have this nice mca component select logic that takes the specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i.e., &quot;-mca plm foo&quot; always yields foo if it can run, or errors out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can't - then the safest course is to remove MCA params that adjust
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priorities and have the user simply tell us which module they want
</span><br>
<span class="quotelev3">&gt;&gt;&gt; us to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do we want to make this consistent, at least in the PLM? Or do you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leave the user guessing? :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4371.php">Jeff Squyres: "[OMPI devel] IBCM and ordering of OpenFabrics devices"</a>
<li><strong>In reply to:</strong> <a href="4323.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: priority"</a>
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
