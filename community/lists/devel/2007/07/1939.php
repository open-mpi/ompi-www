<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 05:34:44 2007" -->
<!-- isoreceived="20070719093444" -->
<!-- sent="Thu, 19 Jul 2007 11:34:35 +0200 (CEST)" -->
<!-- isosent="20070719093435" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492" -->
<!-- id="57726.145.254.176.86.1184837675.squirrel_at_merkur.informatik.uni-halle.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200707182023.l6IKNkdi002800_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 05:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>Previous message:</strong> <a href="1938.php">Jeff Squyres: "[OMPI devel] problems with openib finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Reply:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><span class="quotelev1">&gt; Author: brbarret
</span><br>
<span class="quotelev1">&gt; Date: 2007-07-18 16:23:45 EDT (Wed, 18 Jul 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15492
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15492">https://svn.open-mpi.org/trac/ompi/changeset/15492</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; add ability to have thread-specific data on windows, pthreads, solaris
</span><br>
<span class="quotelev1">&gt; threads,
</span><br>
<span class="quotelev1">&gt; and non-threaded builds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +int
</span><br>
<span class="quotelev1">&gt; +opal_tsd_key_create(opal_tsd_key_t *key,
</span><br>
<span class="quotelev1">&gt; +                    opal_tsd_destructor_t destructor)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int i;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (!atexit_registered) {
</span><br>
<span class="quotelev1">&gt; +        atexit_registered = true;
</span><br>
<span class="quotelev1">&gt; +        if (0 != atexit(run_destructors)) {
</span><br>
<span class="quotelev1">&gt; +            return OPAL_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    for (i = 0 ; i &lt; TSD_ENTRIES ; ++i) {
</span><br>
<span class="quotelev1">&gt; +        if (entries[i].used == false) {
</span><br>
<span class="quotelev1">&gt; +            entries[i].used = true;
</span><br>
<span class="quotelev1">&gt; +            entries[i].value = NULL;
</span><br>
<span class="quotelev1">&gt; +            entries[i].destructor = destructor;
</span><br>
<span class="quotelev1">&gt; +            *key = i;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if (i == TSD_ENTRIES) return ENOMEM;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<p>Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>Previous message:</strong> <a href="1938.php">Jeff Squyres: "[OMPI devel] problems with openib finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Reply:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
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
