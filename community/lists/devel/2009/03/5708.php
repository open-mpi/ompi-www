<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 12:08:32 2009" -->
<!-- isoreceived="20090326160832" -->
<!-- sent="Thu, 26 Mar 2009 08:07:49 -0800" -->
<!-- isosent="20090326160749" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49CBA855.7060509_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="29ED446C-7456-41DC-BE4E-DF0394B895D3_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 12:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5707.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5705.php">Ralph Castain: "[OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<p>Er, perhaps pronounced &quot;Eugene&quot;.  :^(
<br>
<p><span class="quotelev1">&gt; It looks like the SM revisions we inserted into 1.3.2 are a great  
</span><br>
<span class="quotelev1">&gt; detector for shared memory init failures
</span><br>
<p>How delicately put!  I appreciate the gentleness.
<br>
<p><span class="quotelev1">&gt; - it segfaulted 143 times  last night on IU's sif computer, 34 times 
</span><br>
<span class="quotelev1">&gt; on Sun/Linux, and 3 times on  Sun/SunOS...almost every single time due 
</span><br>
<span class="quotelev1">&gt; to &quot;Address not mapped&quot; errors in the sm btl during init.
</span><br>
<p>Any guess as to frequency or what it'd take for me to reproduce this?  I 
<br>
tried with 1.3.1... 200K times and no failures on np=8 MPI_Init() jobs.  
<br>
I'm starting now with a single-queue version, but wouldn't be surprised 
<br>
if, again, I can't turn anything up.
<br>
<p><span class="quotelev1">&gt; Might be worth someone looking at the MTT output stack traces -this 
</span><br>
<span class="quotelev1">&gt; is  something that now appears to be reproducible, and should be 
</span><br>
<span class="quotelev1">&gt; addressed  before we release 1.3.2 as it seems far more likely to 
</span><br>
<span class="quotelev1">&gt; happen than in  the past.
</span><br>
<p>Great (in a weird way, I guess).  Can you tell me how to look at the MTT 
<br>
output stack traces?  I found <a href="http://www.open-mpi.org/projects/mtt/">http://www.open-mpi.org/projects/mtt/</a> but 
<br>
expect it'll take me awhile to wade through that.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5707.php">Timothy Hayes: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>In reply to:</strong> <a href="5705.php">Ralph Castain: "[OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
