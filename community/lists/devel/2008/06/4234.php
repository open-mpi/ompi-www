<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18748";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 09:58:43 2008" -->
<!-- isoreceived="20080626135843" -->
<!-- sent="Thu, 26 Jun 2008 09:58:35 -0400" -->
<!-- isosent="20080626135835" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18748" -->
<!-- id="ea86ce220806260658u3a71683ds87a099450aada208_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200806261331.m5QDVbG3032151_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18748<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-26 09:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4235.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4233.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This doesn't look right.  Either remote_pml at this point might be NULL
<br>
and needs to be checked before calling free(remote_pml), or it is
<br>
guaranteed to not be NULL and the two NULL checks a few lines
<br>
above this change should be removed.
<br>
<p>On Thu, Jun 26, 2008 at 9:31 AM,  &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2008-06-26 09:31:36 EDT (Thu, 26 Jun 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 18748
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18748">https://svn.open-mpi.org/trac/ompi/changeset/18748</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; May be picky, but cleanup before returning in error conditions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/base/pml_base_select.c |     1 +
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/base/pml_base_select.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/base/pml_base_select.c   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/base/pml_base_select.c   2008-06-26 09:31:36 EDT (Thu, 26 Jun 2008)
</span><br>
<span class="quotelev1">&gt; @@ -372,6 +372,7 @@
</span><br>
<span class="quotelev1">&gt;                         my_pml, ORTE_NAME_PRINT(&amp;procs[0]-&gt;proc_name),
</span><br>
<span class="quotelev1">&gt;                         (NULL == remote_pml) ? &quot;NULL&quot; : remote_pml);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +        free(remote_pml); /* cleanup before returning */
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERR_UNREACH;
</span><br>
<span class="quotelev1">&gt;     }
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
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4235.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4233.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
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
