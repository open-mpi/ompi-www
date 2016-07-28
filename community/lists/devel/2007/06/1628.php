<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 16:29:59 2007" -->
<!-- isoreceived="20070606202959" -->
<!-- sent="Wed, 06 Jun 2007 14:29:55 -0600" -->
<!-- isosent="20070606202955" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14923" -->
<!-- id="C28C7563.2F24%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200706062017.l56KHR8V030755_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 16:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1629.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1627.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George
<br>
<p>I believe that such non-professional comments do not belong in a code base
<br>
that will be distributed to the public. I have removed this one - kindly
<br>
refrain from them in the future.
<br>
<p>I remind you that the decision to use dynamic memory was made in an ORTE
<br>
design meeting here at LANL three years ago which you (among many others)
<br>
attended. If you feel that decision should be revisited, then fine - let's
<br>
revisit it.
<br>
<p>Meantime, I appreciate catching the necessary free - let's do it without the
<br>
negative wisecracks.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 6/6/07 2:17 PM, &quot;bosilca_at_[hidden]&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2007-06-06 16:17:27 EDT (Wed, 06 Jun 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 14923
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14923">https://svn.open-mpi.org/trac/ompi/changeset/14923</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Don't forget to free the temporary buffer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/gpr/replica/functional_layer/gpr_replica_put_get_fn.c |
</span><br>
<span class="quotelev1">&gt; 1 +              
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/gpr/replica/functional_layer/gpr_replica_put_get_fn.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
trunk/orte/mca/gpr/replica/functional_layer/gpr_replica_put_get_fn.c (original&gt;
<br>
)
<br>
<span class="quotelev1">&gt; +++ 
</span><br>
<span class="quotelev1">&gt; trunk/orte/mca/gpr/replica/functional_layer/gpr_replica_put_get_fn.c 2007-06-0
</span><br>
<span class="quotelev1">&gt; 6 16:17:27 EDT (Wed, 06 Jun 2007)
</span><br>
<span class="quotelev1">&gt; @@ -139,6 +139,7 @@
</span><br>
<span class="quotelev1">&gt;          for (i=0; i &lt; num_tokens; i++) {
</span><br>
<span class="quotelev1">&gt;              orte_gpr_replica_dict_reverse_lookup(&amp;tmp, seg, token_itags[i]);
</span><br>
<span class="quotelev1">&gt;              opal_output(0, &quot;\t%s&quot;, tmp);
</span><br>
<span class="quotelev1">&gt; +            free(tmp); /* We all enjoy allocating and releasing memory all
</span><br>
<span class="quotelev1">&gt; over the code isn't it ? */
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1629.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1627.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
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
