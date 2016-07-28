<?
$subject_val = "Re: [OMPI devel] Updating the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 20:24:50 2009" -->
<!-- isoreceived="20090701002450" -->
<!-- sent="Tue, 30 Jun 2009 18:24:44 -0600" -->
<!-- isosent="20090701002444" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Updating the trunk" -->
<!-- id="10F0A7D7-D4FF-417E-AAF1-547AB75BD554_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6DE64140-EEB1-461E-9DEF-8EF56EF84504_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Updating the trunk<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 20:24:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6367.php">Ashley Pittman: "[OMPI devel] Information from orte-ps"</a>
<li><strong>Previous message:</strong> <a href="6365.php">Ralph Castain: "[OMPI devel] Updating the trunk"</a>
<li><strong>In reply to:</strong> <a href="6365.php">Ralph Castain: "[OMPI devel] Updating the trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 30, 2009, at 5:57 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; If you are updating a prior checkout of the OMPI trunk with r21568,  
</span><br>
<span class="quotelev1">&gt; please be aware that there is an additional step required to make it  
</span><br>
<span class="quotelev1">&gt; build. Due to a quirk of the build system, you will need to do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rm ompi/tools/ompi_info/.deps/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then re-run autogen/configure in order to build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason this is required is that the new ompi_info implementation  
</span><br>
<span class="quotelev1">&gt; generates .o files of the same name as the prior C++ implementation.  
</span><br>
<span class="quotelev1">&gt; As a result, the .deps files do not get updated - and therefore  
</span><br>
<span class="quotelev1">&gt; insist on looking for the old .cc files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removing the .deps and re-running autogen/configure will resolve the  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are doing a fresh checkout of the OMPI trunk, this will not  
</span><br>
<span class="quotelev1">&gt; affect you.
</span><br>
<p>Slightly less safe, but you can also do the rm command Ralph gave,  
<br>
followed by a &quot;make -k&quot;, which will regenerate just that makefile,  
<br>
then update the .deps files, then build the sources.  You probably  
<br>
want to do a plain-old make after that to make sure nothing failed in  
<br>
the build, as Make will report an error occurred during &quot;make -k&quot;.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6367.php">Ashley Pittman: "[OMPI devel] Information from orte-ps"</a>
<li><strong>Previous message:</strong> <a href="6365.php">Ralph Castain: "[OMPI devel] Updating the trunk"</a>
<li><strong>In reply to:</strong> <a href="6365.php">Ralph Castain: "[OMPI devel] Updating the trunk"</a>
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
