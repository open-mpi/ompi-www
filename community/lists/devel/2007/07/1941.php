<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 09:38:04 2007" -->
<!-- isoreceived="20070719133804" -->
<!-- sent="Thu, 19 Jul 2007 09:37:44 -0400" -->
<!-- isosent="20070719133744" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492" -->
<!-- id="E7C1D0D8-7FFF-45E4-AB04-8D52CAC0AC67_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="57726.145.254.176.86.1184837675.squirrel_at_merkur.informatik.uni-halle.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 09:37:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>In reply to:</strong> <a href="1939.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1945.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Reply:</strong> <a href="1945.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>Ralph got it this morning in <a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> 
<br>
changeset/15501.
<br>
<p><p>On Jul 19, 2007, at 5:34 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: brbarret
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-07-18 16:23:45 EDT (Wed, 18 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 15492
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15492">https://svn.open-mpi.org/trac/ompi/changeset/15492</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; add ability to have thread-specific data on windows, pthreads,  
</span><br>
<span class="quotelev2">&gt;&gt; solaris
</span><br>
<span class="quotelev2">&gt;&gt; threads,
</span><br>
<span class="quotelev2">&gt;&gt; and non-threaded builds
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +int
</span><br>
<span class="quotelev2">&gt;&gt; +opal_tsd_key_create(opal_tsd_key_t *key,
</span><br>
<span class="quotelev2">&gt;&gt; +                    opal_tsd_destructor_t destructor)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    int i;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (!atexit_registered) {
</span><br>
<span class="quotelev2">&gt;&gt; +        atexit_registered = true;
</span><br>
<span class="quotelev2">&gt;&gt; +        if (0 != atexit(run_destructors)) {
</span><br>
<span class="quotelev2">&gt;&gt; +            return OPAL_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    for (i = 0 ; i &lt; TSD_ENTRIES ; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (entries[i].used == false) {
</span><br>
<span class="quotelev2">&gt;&gt; +            entries[i].used = true;
</span><br>
<span class="quotelev2">&gt;&gt; +            entries[i].value = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +            entries[i].destructor = destructor;
</span><br>
<span class="quotelev2">&gt;&gt; +            *key = i;
</span><br>
<span class="quotelev1">&gt;                break;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    if (i == TSD_ENTRIES) return ENOMEM;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
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
<li><strong>Next message:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>In reply to:</strong> <a href="1939.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1945.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Reply:</strong> <a href="1945.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
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
