<?
$subject_val = "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 08:16:54 2009" -->
<!-- isoreceived="20090430121654" -->
<!-- sent="Thu, 30 Apr 2009 08:16:49 -0400" -->
<!-- isosent="20090430121649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="D8FC141B-3DFC-49E4-A950-DAE9C79BE375_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F99477.2000207_at_ntlworld.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 08:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5917.php">Terry Dontje: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="5915.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5961.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5961.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2009, at 8:07 AM, Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; Following the discussion about ABI compatibility and type-punning of  
</span><br>
<span class="quotelev1">&gt; non
</span><br>
<span class="quotelev1">&gt; client-visible types, I've attached a patch against 1.3.2 which  
</span><br>
<span class="quotelev1">&gt; casts to
</span><br>
<span class="quotelev1">&gt; an opaque (void *) when OMPI_BUILDING is 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will prevent the compiler from trying to do any strict-aliasing
</span><br>
<span class="quotelev1">&gt; based optimizations when the definition of the type to cast to is  
</span><br>
<span class="quotelev1">&gt; unknown.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When builing Open MPI, the (void *) cast is omitted (because of the
</span><br>
<span class="quotelev1">&gt; compiler flag &quot;-DOMPI_BUILDING=1&quot;) and the code remains as before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This clears up all warnings for my GCC 4.1 compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Awesome, thanks!
<br>
<p>I have a request in to a friend who's a C++/compiler guru (he works on  
<br>
Apple's next-gen C++ compiler).  He promised me an email response to  
<br>
my questions about this topic by tomorrow (he was somewhat slammed  
<br>
this week).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5917.php">Terry Dontje: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="5915.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5961.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5961.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
