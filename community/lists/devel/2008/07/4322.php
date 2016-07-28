<?
$subject_val = "Re: [OMPI devel] PLM consistency: priority";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 11:07:22 2008" -->
<!-- isoreceived="20080711150722" -->
<!-- sent="Fri, 11 Jul 2008 11:07:16 -0400" -->
<!-- isosent="20080711150716" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLM consistency: priority" -->
<!-- id="C95E6045-EF72-44A3-9995-E940A9DE25E3_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C49CD0B2.E432%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 11:07:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4323.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Previous message:</strong> <a href="4321.php">Ralph H Castain: "[OMPI devel] PLM consistency: priority"</a>
<li><strong>In reply to:</strong> <a href="4321.php">Ralph H Castain: "[OMPI devel] PLM consistency: priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4323.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Reply:</strong> <a href="4323.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't want the user to have to select by hand the best PML. The  
<br>
logic inside the current selection process selects the best pml for  
<br>
the underlying network. However changing the priority is pretty  
<br>
meaningless from the user's point of view. So while retaining the  
<br>
selection process including priorities, we might want to remove the  
<br>
priority parameter, and use only the pml=ob1,cm syntax from the user's  
<br>
point of view.
<br>
<p>Aurelien
<br>
<p>Le 11 juil. 08 &#224; 10:56, Ralph H Castain a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Okay, another fun one. Some of the PLM modules use MCA params to  
</span><br>
<span class="quotelev1">&gt; adjust
</span><br>
<span class="quotelev1">&gt; their relative selection priority. This can lead to very unexpected  
</span><br>
<span class="quotelev1">&gt; behavior
</span><br>
<span class="quotelev1">&gt; as which module gets selected will depend on the priorities of the  
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev1">&gt; selectable modules - which changes from release to release as people
</span><br>
<span class="quotelev1">&gt; independently make adjustments and/or new modules are added.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fortunately, this doesn't bite us too often since many environments  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; support one module, and since there is nothing to tell the user that  
</span><br>
<span class="quotelev1">&gt; the plm
</span><br>
<span class="quotelev1">&gt; module whose priority they raised actually -didn't- get used!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, in the interest of &quot;least astonishment&quot;, some of us working  
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt; RTE had changed our coding approach to avoid this confusion. Given  
</span><br>
<span class="quotelev1">&gt; that we
</span><br>
<span class="quotelev1">&gt; have this nice mca component select logic that takes the specified  
</span><br>
<span class="quotelev1">&gt; module -
</span><br>
<span class="quotelev1">&gt; i.e., &quot;-mca plm foo&quot; always yields foo if it can run, or errors out  
</span><br>
<span class="quotelev1">&gt; if it
</span><br>
<span class="quotelev1">&gt; can't - then the safest course is to remove MCA params that adjust  
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; priorities and have the user simply tell us which module they want  
</span><br>
<span class="quotelev1">&gt; us to
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we want to make this consistent, at least in the PLM? Or do you  
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev1">&gt; leave the user guessing? :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="4323.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Previous message:</strong> <a href="4321.php">Ralph H Castain: "[OMPI devel] PLM consistency: priority"</a>
<li><strong>In reply to:</strong> <a href="4321.php">Ralph H Castain: "[OMPI devel] PLM consistency: priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4323.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Reply:</strong> <a href="4323.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: priority"</a>
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
