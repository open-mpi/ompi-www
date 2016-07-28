<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 15:14:39 2007" -->
<!-- isoreceived="20070621191439" -->
<!-- sent="Thu, 21 Jun 2007 12:14:30 -0700" -->
<!-- isosent="20070621191430" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15144" -->
<!-- id="D0E6F3D6-794F-4A1B-BC37-23DE3A7CB294_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200706201400.l5KE0ebx027234_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-21 15:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1740.php">pcascon_at_[hidden]: "[OMPI devel] create new btl"</a>
<li><strong>Previous message:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I might be the only one shocked by this but I'll let you know  
<br>
my feelings anyway.
<br>
<p>Having to modify the base mca in order to add one global variable  
<br>
that is never used for anything useful except by the orted, doesn't  
<br>
look like the best coding approach to me. Note that orterun use this  
<br>
variable too, but for a different purpose: it set it to true [which  
<br>
is anyway the default value] just to make sure that the default value  
<br>
is correctly understood by that little nasty processor ...
<br>
<p>So, I propose to update the documentation for the  
<br>
mca_base_param_recache_files function in the header file to something  
<br>
closer to the actual behavior of the function:
<br>
<p>This function mostly reload/recache the MCA parameters file(s).  
<br>
Except, if the obscure and undocumented  
<br>
opal_mca_base_param_use_amca_sets global is set to false in which  
<br>
case it will only recache half of the files you expect, in a way that  
<br>
not even the original developer might have imagined.
<br>
<p>Now, if I look at most of the tools in the orte/tools directory they  
<br>
apparently take special care of how they initialize the opal layer.  
<br>
They all call mca_base_param_init before calling the opal_init. Is  
<br>
there a real reason for that ? I miss to see it, as the execution is  
<br>
equivalent with the case where we call directly the opal_init ...
<br>
<p>I try to figure out if there is a consistent way to deal with the  
<br>
amca stuff, and as far as I see there is not. Is there a reason to  
<br>
have the orted behave differently than the others tools ? Btw, the  
<br>
call to mca_base_param_init in orted is completely useless, and  
<br>
wrongly documented. In fact the call will not do anything because the  
<br>
opal_init_util was called few lines prior and it already called the  
<br>
mca_base_param_init function (which has set the initialized status to  
<br>
true).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jun 20, 2007, at 7:00 AM, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2007-06-20 10:00:40 EDT (Wed, 20 Jun 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15144
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15144">https://svn.open-mpi.org/trac/ompi/changeset/15144</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix an AMCA parameter regression introduced (as a side effect of)  
</span><br>
<span class="quotelev1">&gt; in r14449
</span><br>
<span class="quotelev1">&gt; (and, due to lack of in code documentation, in r14661).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The {{{opal_mca_base_param_use_amca_sets}}} flag tells the orted  
</span><br>
<span class="quotelev1">&gt; that it should
</span><br>
<span class="quotelev1">&gt; not look at the parameter files just yet since it may have an AMCA  
</span><br>
<span class="quotelev1">&gt; parameter
</span><br>
<span class="quotelev1">&gt; file to look at first. So we need to set this to {{{false}}} before  
</span><br>
<span class="quotelev1">&gt; initializing
</span><br>
<span class="quotelev1">&gt; the MCA paras, then quickly turn around and re-init them when we  
</span><br>
<span class="quotelev1">&gt; have the full
</span><br>
<span class="quotelev1">&gt; information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This commit fixes #1058
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/tools/orted/orted.c |    10 ++++++----
</span><br>
<span class="quotelev1">&gt;    1 files changed, 6 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orted/orted.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orted/orted.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orted/orted.c	2007-06-20 10:00:40 EDT (Wed, 20  
</span><br>
<span class="quotelev1">&gt; Jun 2007)
</span><br>
<span class="quotelev1">&gt; @@ -83,8 +83,6 @@
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Globals
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -extern bool opal_mca_base_param_use_amca_sets;
</span><br>
<span class="quotelev1">&gt;  orted_globals_t orted_globals;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static struct opal_event term_handler;
</span><br>
<span class="quotelev1">&gt; @@ -196,6 +194,12 @@
</span><br>
<span class="quotelev1">&gt;      /* initialize the globals */
</span><br>
<span class="quotelev1">&gt;      memset(&amp;orted_globals, 0, sizeof(orted_globals_t));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /* Need to set this so that the orted does not throw a warning  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; +     * about missing AMCA param files that are located in the  
</span><br>
<span class="quotelev1">&gt; relative or
</span><br>
<span class="quotelev1">&gt; +     * absolute paths (e.g., not in the package directory).
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    opal_mca_base_param_use_amca_sets = false;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* Ensure that enough of OPAL is setup for us to be able to  
</span><br>
<span class="quotelev1">&gt; run */
</span><br>
<span class="quotelev1">&gt;      if (OPAL_SUCCESS != opal_init_util()) {
</span><br>
<span class="quotelev1">&gt;          fprintf(stderr, &quot;OPAL failed to initialize -- orted  
</span><br>
<span class="quotelev1">&gt; aborting\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -209,8 +213,6 @@
</span><br>
<span class="quotelev1">&gt;       * Do not parse the Aggregate Parameter Sets in this pass.
</span><br>
<span class="quotelev1">&gt;       * we will get to them in a moment
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    /* GMS: what does this do and why is it gone now? */
</span><br>
<span class="quotelev1">&gt; -    /* opal_mca_base_param_use_mca_sets = false; */
</span><br>
<span class="quotelev1">&gt;      mca_base_param_init();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* setup to check common command line options that just report  
</span><br>
<span class="quotelev1">&gt; and die */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1739/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1740.php">pcascon_at_[hidden]: "[OMPI devel] create new btl"</a>
<li><strong>Previous message:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
