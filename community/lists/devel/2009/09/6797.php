<?
$subject_val = "Re: [OMPI devel] Error message improvement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 09:54:23 2009" -->
<!-- isoreceived="20090908135423" -->
<!-- sent="Tue, 8 Sep 2009 16:54:18 +0300" -->
<!-- isosent="20090908135418" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error message improvement" -->
<!-- id="453d39990909080654y4a04035kab3a9705b309fe65_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AA660FE.5070805_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error message improvement<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 09:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6798.php">Arthur Huillet: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6796.php">Arthur Huillet: "[OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6796.php">Arthur Huillet: "[OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6798.php">Arthur Huillet: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6798.php">Arthur Huillet: "Re: [OMPI devel] Error message improvement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why not using __FUNCTION__  in all our error messages ???
<br>
diff -r 686ec286164a ompi/communicator/communicator.h
<br>
--- a/ompi/communicator/communicator.h Tue Sep 08 14:39:03 2009 +0200
<br>
+++ b/ompi/communicator/communicator.h Tue Sep 08 15:48:06 2009 +0200
<br>
@@ -313,7 +313,7 @@
<br>
&nbsp;{
<br>
&nbsp;#if OPAL_ENABLE_DEBUG
<br>
&nbsp;&nbsp;if(peer_id &gt;= comm-&gt;c_remote_group-&gt;grp_proc_count) {
<br>
- opal_output(0, &quot;ompi_comm_lookup_peer: invalid peer index (%d)&quot;, peer_id);
<br>
+ opal_output(0, &quot;%s: invalid peer index (%d)&quot;, __FUNCTION__,peer_id);
<br>
&nbsp;&nbsp;return (struct ompi_proc_t *) NULL;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;#endif
<br>
<p><p>On Tue, Sep 8, 2009 at 4:49 PM, Arthur Huillet &lt;arthur.huillet_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; please find attached a patch to ompi/communicator/communicator.h that fixes
</span><br>
<span class="quotelev1">&gt; the error message displayed by ompi_comm_peer_lookup() so the function name
</span><br>
<span class="quotelev1">&gt; that appears is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Greetings, A. Huillet
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6797/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6798.php">Arthur Huillet: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6796.php">Arthur Huillet: "[OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6796.php">Arthur Huillet: "[OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6798.php">Arthur Huillet: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6798.php">Arthur Huillet: "Re: [OMPI devel] Error message improvement"</a>
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
