<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 09:26:32 2007" -->
<!-- isoreceived="20070906132632" -->
<!-- sent="Thu, 06 Sep 2007 09:27:28 -0400" -->
<!-- isosent="20070906132728" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Exit without finalize" -->
<!-- id="46E00040.4070607_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070906130006.GL3410_at_minantech.com" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-06 09:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2292.php">Sajjad Tabib: "[OMPI devel] Adding a new component"</a>
<li><strong>Previous message:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>In reply to:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2293.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2293.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt;On Thu, Sep 06, 2007 at 06:50:43AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;WHAT:   Decide upon how to handle MPI applications where one or more
</span><br>
<span class="quotelev2">&gt;&gt;        processes exit without calling MPI_Finalize
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;WHY:    Some applications can abort via an exit call instead of
</span><br>
<span class="quotelev2">&gt;&gt;        calling MPI_Abort when a library (or something else) calls
</span><br>
<span class="quotelev2">&gt;&gt;        exit. This situation is outside a user's control, so they
</span><br>
<span class="quotelev2">&gt;&gt;        cannot fix it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;WHERE:  Refer to ticket #1144 - code changes are TBD
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;WHEN:   Up to the group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;[snip]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Does the general community feel we should do anything here, or is this a
</span><br>
<span class="quotelev2">&gt;&gt;&quot;bug&quot; that should be fixed by the entity calling &quot;exit&quot;? I should note that
</span><br>
<span class="quotelev2">&gt;&gt;it actually is bad behavior (IMHO) for any library to call &quot;exit&quot; - but
</span><br>
<span class="quotelev2">&gt;&gt;then, we do that in some situations too, so perhaps we shouldn't cast
</span><br>
<span class="quotelev2">&gt;&gt;stones!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Any suggested solutions or comments on whether or not we should do anything
</span><br>
<span class="quotelev2">&gt;&gt;would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;IMO (a) should be implemented.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I don't think (b) should be implemented.  However, one could register an 
<br>
atexit handler that calls MPI_finalize.  Therefore, the exiting process 
<br>
would be stuck until everyone else reaches their exits or finalize.
<br>
<p>That being said I think (a) probably makes more sense and adheres to the 
<br>
MPI standard.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2292.php">Sajjad Tabib: "[OMPI devel] Adding a new component"</a>
<li><strong>Previous message:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>In reply to:</strong> <a href="2290.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2293.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2293.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
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
