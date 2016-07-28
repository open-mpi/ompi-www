<?
$subject_val = "Re: [OMPI devel] 1.8.3 and PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 17:13:44 2014" -->
<!-- isoreceived="20141111221344" -->
<!-- sent="Tue, 11 Nov 2014 22:13:43 +0000" -->
<!-- isosent="20141111221343" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.3 and PSM errors" -->
<!-- id="C442ED7D-D09F-4134-B852-DF6425B6207C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518C60D55_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.3 and PSM errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 17:13:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16295.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16293.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16293.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16295.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16295.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16297.php">George Bosilca: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2014, at 4:56 PM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OK, I'm able to reproduce this now, not sure why I couldn't before.  I took a look at the diff of the PSM MTL from 1.6.5 to 1.8.1, and nothing is standing out to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question more for the general group:  Did anything related to the behavior/usage of MTL add_procs() change in this time window?
</span><br>
<p>The time between the 1.6.x series and the 1.8.x series is measure in terms of a year or two, so, ya, something might have changed...
<br>
<p><span class="quotelev1">&gt; More particularly, it looks like add_procs is being called a second time during MPI_Intercomm_create and being passed a process that is already connected (passed into the first add_procs call).  Is that right?  Should the MTL handle multiple add_procs calls with the same proc provided?
</span><br>
<p>I'm afraid I don't know much about the MTL interface.
<br>
<p>George / Nathan?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16295.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16293.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16293.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16295.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16295.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16297.php">George Bosilca: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
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
