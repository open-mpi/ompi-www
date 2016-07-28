<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 10:28:09 2007" -->
<!-- isoreceived="20070719142809" -->
<!-- sent="Thu, 19 Jul 2007 08:27:50 -0600" -->
<!-- isosent="20070719142750" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492" -->
<!-- id="A72DC2BD-70B9-4A86-9189-8555ACF53FCB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E7C1D0D8-7FFF-45E4-AB04-8D52CAC0AC67_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 10:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1946.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1944.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sigh.  Thanks.  Should probably have tested that code ;).  And the  
<br>
solaris code.  and the windows code.
<br>
<p>Brian
<br>
<p>On Jul 19, 2007, at 7:37 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph got it this morning in <a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a>
</span><br>
<span class="quotelev1">&gt; changeset/15501.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 19, 2007, at 5:34 AM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: brbarret
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-07-18 16:23:45 EDT (Wed, 18 Jul 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 15492
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15492">https://svn.open-mpi.org/trac/ompi/changeset/15492</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add ability to have thread-specific data on windows, pthreads,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and non-threaded builds
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +opal_tsd_key_create(opal_tsd_key_t *key,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    opal_tsd_destructor_t destructor)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (!atexit_registered) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        atexit_registered = true;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (0 != atexit(run_destructors)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            return OPAL_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    for (i = 0 ; i &lt; TSD_ENTRIES ; ++i) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (entries[i].used == false) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            entries[i].used = true;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            entries[i].value = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            entries[i].destructor = destructor;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            *key = i;
</span><br>
<span class="quotelev2">&gt;&gt;                break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (i == TSD_ENTRIES) return ENOMEM;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bert
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="1946.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1944.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
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
