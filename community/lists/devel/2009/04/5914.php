<?
$subject_val = "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 08:07:28 2009" -->
<!-- isoreceived="20090430120728" -->
<!-- sent="Thu, 30 Apr 2009 13:07:19 +0100" -->
<!-- isosent="20090430120719" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="49F99477.2000207_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
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
<strong>Subject:</strong> Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 08:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5915.php">Andreas Knüpfer: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="5913.php">Terry Dontje: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Maybe in reply to:</strong> <a href="5862.php">Number Cruncher: "[OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following the discussion about ABI compatibility and type-punning of non 
<br>
client-visible types, I've attached a patch against 1.3.2 which casts to 
<br>
an opaque (void *) when OMPI_BUILDING is 0.
<br>
<p>This will prevent the compiler from trying to do any strict-aliasing 
<br>
based optimizations when the definition of the type to cast to is unknown.
<br>
<p>When builing Open MPI, the (void *) cast is omitted (because of the 
<br>
compiler flag &quot;-DOMPI_BUILDING=1&quot;) and the code remains as before.
<br>
<p>This clears up all warnings for my GCC 4.1 compiler.
<br>
<p>Simon.
<br>
<p><span class="quotelev2"> &gt;&gt; Ultimately, for internal use, the (void *) is bad, but from client
</span><br>
<span class="quotelev2"> &gt;&gt; code
</span><br>
<span class="quotelev2"> &gt;&gt; with no knowledge of your types, it should be mandatory and tells the
</span><br>
<span class="quotelev2"> &gt;&gt; compiler to make no assumptions about aliasing.
</span><br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; I think you're convincing me, but I need to think over this a little
</span><br>
<span class="quotelev1"> &gt; more.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; I wonder if we should have a &quot;smart&quot; #define for MPI_COMM_WORLD that
</span><br>
<span class="quotelev1"> &gt; puts the (void*) in when compiling user codes, and doesn't include it
</span><br>
<span class="quotelev1"> &gt; when building OMPI itself (i.e., so that we can get the debugging
</span><br>
<span class="quotelev1"> &gt; benefit of proper type checking when building OMPI). We do have the
</span><br>
<span class="quotelev1"> &gt; OMPI_BUILDING macro in opal_config_bottom.h that could be used to
</span><br>
<span class="quotelev1"> &gt; switch the macro definition. Hrm...
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5914/openmpi-aliasing.patch">openmpi-aliasing.patch</a>
</ul>
<!-- attachment="openmpi-aliasing.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5915.php">Andreas Knüpfer: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="5913.php">Terry Dontje: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Maybe in reply to:</strong> <a href="5862.php">Number Cruncher: "[OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
