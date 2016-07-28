<?
$subject_val = "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 16 12:13:00 2011" -->
<!-- isoreceived="20111116171300" -->
<!-- sent="Wed, 16 Nov 2011 09:12:47 -0800" -->
<!-- isosent="20111116171247" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5" -->
<!-- id="4EC3EF0F.2080000_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EC39F37.4010004_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-16 12:12:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9978.php">Hugo Daniel Meyer: "[OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>In reply to:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/16/2011 3:32 AM, TERRY DONTJE wrote:
<br>
<span class="quotelev1">&gt; On 11/15/2011 10:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2011, at 10:17 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried building v1.5.  r25469 builds for me, r25470 does not.  This is Friday's hwloc putback of CMR 2866.  I'm on Solaris11/x86.  The problem is basically:
</span><br>
<span class="quotelev2">&gt;&gt; Doh!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CC     ompi_info.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev2">&gt;&gt; Have these warnings always been there for you?  r25470 should not have changed any of the assembly stuff.
</span><br>
<span class="quotelev1">&gt; Yes.  You can ignore these warnings they aren't the droids you are 
</span><br>
<span class="quotelev1">&gt; looking for.
</span><br>
+1  Those warnings aren't the issue I'm talking about.  E.g., they're 
<br>
there for r25469 as well.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9977/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9978.php">Hugo Daniel Meyer: "[OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>In reply to:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
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
