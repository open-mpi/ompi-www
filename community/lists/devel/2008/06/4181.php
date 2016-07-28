<?
$subject_val = "Re: [OMPI devel] Is trunk broken ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 15:18:36 2008" -->
<!-- isoreceived="20080619191836" -->
<!-- sent="Thu, 19 Jun 2008 22:18:26 +0300" -->
<!-- isosent="20080619191826" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is trunk broken ?" -->
<!-- id="485AB102.5070208_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C47FFC18.DEA3%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Is trunk broken ?<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 15:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4182.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="4180.php">Ralph H Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>In reply to:</strong> <a href="4179.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4182.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="4182.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="4183.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; You'll have to tell us something more than that, Pasha. What kind of
</span><br>
<span class="quotelev1">&gt; environment, what rev level were you at, etc.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ahh, sorry :) I run on Linux x86_64 Sles10 sp1. (Open MPI) 1.3a1r18682M 
<br>
, OFED 1.3.1
<br>
Pasha.
<br>
<span class="quotelev1">&gt; So far as I know, the trunk is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/19/08 12:01 PM, &quot;Pavel Shamis (Pasha)&quot; &lt;pasha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I tried to run trunk on my machines and I got follow error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sw214:04367] [[16563,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file base/grpcomm_base_modex.c at line 451
</span><br>
<span class="quotelev2">&gt;&gt; [sw214:04367] [[16563,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file grpcomm_basic_module.c at line 560
</span><br>
<span class="quotelev2">&gt;&gt; [sw214:04365] 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   orte_grpcomm_modex failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead
</span><br>
<span class="quotelev2">&gt;&gt; of &quot;Success&quot; (0)
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
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4182.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="4180.php">Ralph H Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>In reply to:</strong> <a href="4179.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4182.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="4182.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="4183.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
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
