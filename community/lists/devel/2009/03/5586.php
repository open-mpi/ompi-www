<?
$subject_val = "Re: [OMPI devel] trunk problem for large-SMP startup?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 13:43:29 2009" -->
<!-- isoreceived="20090305184329" -->
<!-- sent="Thu, 05 Mar 2009 10:43:01 -0800" -->
<!-- isosent="20090305184301" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk problem for large-SMP startup?" -->
<!-- id="49B01D35.5080905_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="12563241-9C28-4136-BEE5-240879F2A985_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk problem for large-SMP startup?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 13:43:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5587.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<li><strong>Previous message:</strong> <a href="5585.php">Pavel Shamis (Pasha): "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available"</a>
<li><strong>In reply to:</strong> <a href="5576.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I just ran a 64ppn job without problem. Couple of possibilities come  
</span><br>
<span class="quotelev1">&gt; to mind:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. you might have some stale lib around - try blowing things away and  
</span><br>
<span class="quotelev1">&gt; rebuilding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. there may be a problem in your specific situation. Can you provide  
</span><br>
<span class="quotelev1">&gt; some info on what you are doing (e.g., what environment)?
</span><br>
<p>I think it was indeed something in the trunk.  Rolf vandevaart had the 
<br>
same problem.  But, I think it's resolved:
<br>
<p>(long ago) works
<br>
...
<br>
20655 broken
<br>
20669 broken
<br>
20687 works
<br>
20728 works
<br>
20738 works
<br>
<p>So, something broke awhile back and got fixed between 20687 and 20728.  
<br>
Okay, I'm back in business and will charge off into the next concrete wall.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5587.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<li><strong>Previous message:</strong> <a href="5585.php">Pavel Shamis (Pasha): "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available"</a>
<li><strong>In reply to:</strong> <a href="5576.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
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
