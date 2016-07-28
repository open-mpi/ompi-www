<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 27 07:44:05 2005" -->
<!-- isoreceived="20051127124405" -->
<!-- sent="Sun, 27 Nov 2005 07:43:57 -0500" -->
<!-- isosent="20051127124357" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  [O-MPI svn-full] svn:open-mpi r8262 - trunk/opal/runtime" -->
<!-- id="010c5e9d4c61f7eda183749cee7f65aa_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200511262118.jAQLIpuV025590_at_magrathea.osl.iu.edu" -->
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
<strong>Date:</strong> 2005-11-27 07:43:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0553.php">George Bosilca: "FORTRAN TRUE"</a>
<li><strong>Previous message:</strong> <a href="0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>What compiler(s) did this create a problem on?  Does it need to go to 
<br>
v1.0?
<br>
<p><p>On Nov 26, 2005, at 4:18 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2005-11-26 16:18:47 -0500 (Sat, 26 Nov 2005)
</span><br>
<span class="quotelev1">&gt; New Revision: 8262
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; error seems to be a reserved keyword for some compilers ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/runtime/opal_init.c	2005-11-26 21:17:15 UTC (rev 8261)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/runtime/opal_init.c	2005-11-26 21:18:47 UTC (rev 8262)
</span><br>
<span class="quotelev1">&gt; @@ -89,13 +89,13 @@
</span><br>
<span class="quotelev1">&gt;      if (OPAL_SUCCESS != (ret = opal_error_register(&quot;OPAL&quot;,
</span><br>
<span class="quotelev1">&gt;              OPAL_ERR_BASE, OPAL_ERR_MAX, opal_err2str))) {
</span><br>
<span class="quotelev1">&gt;          error = &quot;opal_error_register&quot;;
</span><br>
<span class="quotelev1">&gt; -        goto error;
</span><br>
<span class="quotelev1">&gt; +        goto return_error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* initialize the mca */
</span><br>
<span class="quotelev1">&gt;      if (OMPI_SUCCESS != (ret = mca_base_open())) {
</span><br>
<span class="quotelev1">&gt;          error = &quot;mca_base_open&quot;;
</span><br>
<span class="quotelev1">&gt; -        goto error;
</span><br>
<span class="quotelev1">&gt; +        goto return_error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* open the processor affinity base */
</span><br>
<span class="quotelev1">&gt; @@ -108,27 +108,25 @@
</span><br>
<span class="quotelev1">&gt;         without good initialization routine support */
</span><br>
<span class="quotelev1">&gt;      if (OPAL_SUCCESS != (ret = opal_memory_base_open())) {
</span><br>
<span class="quotelev1">&gt;          error = &quot;opal_memory_base_open&quot;;
</span><br>
<span class="quotelev1">&gt; -        goto error;
</span><br>
<span class="quotelev1">&gt; +        goto return_error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* initialize the memory manager / tracker */
</span><br>
<span class="quotelev1">&gt;      if (OPAL_SUCCESS != opal_mem_free_init()) {
</span><br>
<span class="quotelev1">&gt;          error = &quot;opal_mem_free_init&quot;;
</span><br>
<span class="quotelev1">&gt; -        goto error;
</span><br>
<span class="quotelev1">&gt; +        goto return_error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (OPAL_SUCCESS != (ret = opal_timer_base_open())) {
</span><br>
<span class="quotelev1">&gt;          error = &quot;opal_timer_base_open&quot;;
</span><br>
<span class="quotelev1">&gt; -        goto error;
</span><br>
<span class="quotelev1">&gt; +        goto return_error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -error:
</span><br>
<span class="quotelev1">&gt; -    if (ret != OPAL_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; -        opal_show_help(&quot;help-opal-runtime&quot;,
</span><br>
<span class="quotelev1">&gt; -                       &quot;opal_init:startup:internal-failure&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       error, ret);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; + return_error:
</span><br>
<span class="quotelev1">&gt; +    opal_show_help( &quot;help-opal-runtime&quot;,
</span><br>
<span class="quotelev1">&gt; +                    &quot;opal_init:startup:internal-failure&quot;, true,
</span><br>
<span class="quotelev1">&gt; +                    error, ret );
</span><br>
<span class="quotelev1">&gt;      return ret;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0553.php">George Bosilca: "FORTRAN TRUE"</a>
<li><strong>Previous message:</strong> <a href="0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
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
