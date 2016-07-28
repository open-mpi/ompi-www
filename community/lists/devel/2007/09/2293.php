<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep  8 14:33:33 2007" -->
<!-- isoreceived="20070908183333" -->
<!-- sent="Sat, 8 Sep 2007 14:33:25 -0400" -->
<!-- isosent="20070908183325" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Exit without finalize" -->
<!-- id="ABABC2F5-D666-4A0D-BC82-851CA71CE76D_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46E00040.4070607_at_sun.com" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-08 14:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2294.php">Aurelien Bouteiller: "Re: [OMPI devel] Adding a new component"</a>
<li><strong>Previous message:</strong> <a href="2292.php">Sajjad Tabib: "[OMPI devel] Adding a new component"</a>
<li><strong>In reply to:</strong> <a href="2291.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2307.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2307.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 6 sept. 07 &#224; 09:27, Terry D. Dontje a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 06, 2007 at 06:50:43AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:   Decide upon how to handle MPI applications where one or more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        processes exit without calling MPI_Finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:    Some applications can abort via an exit call instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        calling MPI_Abort when a library (or something else) calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        exit. This situation is outside a user's control, so they
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        cannot fix it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE:  Refer to ticket #1144 - code changes are TBD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN:   Up to the group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does the general community feel we should do anything here, or is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;bug&quot; that should be fixed by the entity calling &quot;exit&quot;? I should  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; note that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it actually is bad behavior (IMHO) for any library to call &quot;exit&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then, we do that in some situations too, so perhaps we shouldn't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stones!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggested solutions or comments on whether or not we should  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMO (a) should be implemented.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I don't think (b) should be implemented.  However, one could  
</span><br>
<span class="quotelev1">&gt; register an
</span><br>
<span class="quotelev1">&gt; atexit handler that calls MPI_finalize.  Therefore, the exiting  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; would be stuck until everyone else reaches their exits or finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said I think (a) probably makes more sense and adheres  
</span><br>
<span class="quotelev1">&gt; to the
</span><br>
<span class="quotelev1">&gt; MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I agree (b) is not a good idea. However I am not very pleased by (a)  
<br>
either. It totally prevent any process Fault Tolerant mechanism if we  
<br>
go that way. If we plan to add some failure detection mechanism to  
<br>
RTE and failure management (to avoid Finalize to hang), we should add  
<br>
the ability to plug-in FT specific error handlers. The default error  
<br>
handler should do exactly what is proposed by Ralph, but nowhere else  
<br>
(than in this handler) the RTE code should assume that the  
<br>
application is aborting when a failure occurs. If it is a FT  
<br>
application it might just not abort and recover.
<br>
<p>Aurelien
<br>
<p><p><span class="quotelev1">&gt; --td
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
<li><strong>Next message:</strong> <a href="2294.php">Aurelien Bouteiller: "Re: [OMPI devel] Adding a new component"</a>
<li><strong>Previous message:</strong> <a href="2292.php">Sajjad Tabib: "[OMPI devel] Adding a new component"</a>
<li><strong>In reply to:</strong> <a href="2291.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2307.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2307.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
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
