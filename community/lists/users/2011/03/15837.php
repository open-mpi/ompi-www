<?
$subject_val = "Re: [OMPI users] Open MPI access the same file in parallel ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 02:14:34 2011" -->
<!-- isoreceived="20110310071434" -->
<!-- sent="Wed, 09 Mar 2011 23:14:26 -0800" -->
<!-- isosent="20110310071426" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI access the same file in parallel ?" -->
<!-- id="4D787A52.6080305_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w374CC433FB3DBE456DAA4CCBC80_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI access the same file in parallel ?<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 02:14:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15838.php">George Markomanolis: "[OMPI users] Understanding the buffering of small messages with tcp network"</a>
<li><strong>Previous message:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15832.php">Belaid MOA: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/9/2011 11:05 PM, Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using GNU mpic++ compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it can automatically support accessing a file by many parallel
</span><br>
<span class="quotelev1">&gt; processes ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It should follow the gcc manual, e.g.
<br>
<a href="http://www.gnu.org/s/libc/manual/html_node/Opening-Streams.html">http://www.gnu.org/s/libc/manual/html_node/Opening-Streams.html</a>
<br>
I think you want *opentype to evaluate to 'r' (readonly).
<br>
<pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15838.php">George Markomanolis: "[OMPI users] Understanding the buffering of small messages with tcp network"</a>
<li><strong>Previous message:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15832.php">Belaid MOA: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
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
