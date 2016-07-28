<?
$subject_val = "Re: [OMPI devel] question about vpid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 29 14:11:31 2011" -->
<!-- isoreceived="20110729181131" -->
<!-- sent="Fri, 29 Jul 2011 12:11:22 -0600" -->
<!-- isosent="20110729181122" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question about vpid" -->
<!-- id="9EFDB152-1856-4150-8DB3-D67AB57E670C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E32F691.5050101_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] question about vpid<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-29 14:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9570.php">Maurice Feskanich: "Re: [OMPI devel] question about vpid"</a>
<li><strong>Previous message:</strong> <a href="9568.php">Maurice Feskanich: "[OMPI devel] question about vpid"</a>
<li><strong>In reply to:</strong> <a href="9568.php">Maurice Feskanich: "[OMPI devel] question about vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9570.php">Maurice Feskanich: "Re: [OMPI devel] question about vpid"</a>
<li><strong>Reply:</strong> <a href="9570.php">Maurice Feskanich: "Re: [OMPI devel] question about vpid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are no hard rules, but some practical ones. In theory, you can use any value so long as it is unique. In practice, that can cause problems as several arrays are sized by the vpid value. So a really big vpid causes the array to be sized to accommodate at least that many values.
<br>
<p>In other words, the system was designed as if vpids would be continuous, starting from zero.
<br>
<p>This is something I plan to adjust in the not-too-distant future as sparse arrays of nodes, procs, and even jobs are becoming more common.
<br>
<p><p>On Jul 29, 2011, at 12:06 PM, Maurice Feskanich wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a question about the vpid values.  Do they have to start with zero or one, and do they have to have no gaps in the sequence?  Basically, I'm wondering if I can use any arbitrary integer, as long as they are unique.  If I can, is there a maximum value? 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maury Feskanich
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
<li><strong>Next message:</strong> <a href="9570.php">Maurice Feskanich: "Re: [OMPI devel] question about vpid"</a>
<li><strong>Previous message:</strong> <a href="9568.php">Maurice Feskanich: "[OMPI devel] question about vpid"</a>
<li><strong>In reply to:</strong> <a href="9568.php">Maurice Feskanich: "[OMPI devel] question about vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9570.php">Maurice Feskanich: "Re: [OMPI devel] question about vpid"</a>
<li><strong>Reply:</strong> <a href="9570.php">Maurice Feskanich: "Re: [OMPI devel] question about vpid"</a>
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
