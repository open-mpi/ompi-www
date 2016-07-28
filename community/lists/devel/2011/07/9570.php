<?
$subject_val = "Re: [OMPI devel] question about vpid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 29 14:33:54 2011" -->
<!-- isoreceived="20110729183354" -->
<!-- sent="Fri, 29 Jul 2011 11:33:40 -0700" -->
<!-- isosent="20110729183340" -->
<!-- name="Maurice Feskanich" -->
<!-- email="maurice.feskanich_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question about vpid" -->
<!-- id="4E32FD04.2090604_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9EFDB152-1856-4150-8DB3-D67AB57E670C_at_open-mpi.org" -->
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
<strong>From:</strong> Maurice Feskanich (<em>maurice.feskanich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-29 14:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9571.php">Xin He: "[OMPI devel] [TIPC BTL] test programmes"</a>
<li><strong>Previous message:</strong> <a href="9569.php">Ralph Castain: "Re: [OMPI devel] question about vpid"</a>
<li><strong>In reply to:</strong> <a href="9569.php">Ralph Castain: "Re: [OMPI devel] question about vpid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for the info!  The array sizing could be a problem as the value 
<br>
I'm thinking about using could potentially be over 100 million.  This 
<br>
value is a unique identifier my system is already generating, I was 
<br>
considering just using it rather than computing a separate vpid.  At 
<br>
least I have the flexibility to use arbitrary unique values, so I can 
<br>
work with that.
<br>
<p>Maury
<br>
<p><p>On 07/29/11 11:11, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; There are no hard rules, but some practical ones. In theory, you can use any value so long as it is unique. In practice, that can cause problems as several arrays are sized by the vpid value. So a really big vpid causes the array to be sized to accommodate at least that many values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, the system was designed as if vpids would be continuous, starting from zero.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is something I plan to adjust in the not-too-distant future as sparse arrays of nodes, procs, and even jobs are becoming more common.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 29, 2011, at 12:06 PM, Maurice Feskanich wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a question about the vpid values.  Do they have to start with zero or one, and do they have to have no gaps in the sequence?  Basically, I'm wondering if I can use any arbitrary integer, as long as they are unique.  If I can, is there a maximum value? 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maury Feskanich
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9570/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9571.php">Xin He: "[OMPI devel] [TIPC BTL] test programmes"</a>
<li><strong>Previous message:</strong> <a href="9569.php">Ralph Castain: "Re: [OMPI devel] question about vpid"</a>
<li><strong>In reply to:</strong> <a href="9569.php">Ralph Castain: "Re: [OMPI devel] question about vpid"</a>
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
