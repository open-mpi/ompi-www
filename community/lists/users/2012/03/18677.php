<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 20:32:41 2012" -->
<!-- isoreceived="20120303013241" -->
<!-- sent="Fri, 2 Mar 2012 18:32:33 -0700" -->
<!-- isosent="20120303013233" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="558BDE6A-FD24-4673-960C-8A7F07D1CCD3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F510223.26353.7B91F4_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 20:32:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18678.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18676.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18676.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2012, at 3:23 PM, Yiguang Yan wrote:
<br>
<p><span class="quotelev1">&gt; It turns out that the &quot;-x&quot; option should be put on each line of the app file if app file is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<p><span class="quotelev1">&gt; So from tests (a),(b),(c), if I am using app file, the PATH and LD_LIBRARY_PATH are only passed to slave node 
</span><br>
<span class="quotelev1">&gt; when the &quot;-x&quot; is set on each line of the app file, similar to the &quot;--prefix&quot; option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any conclusion? If a bug fix is admitted for the &quot;--prefix&quot; option, I would think this is another bug for &quot;-x&quot; option.
</span><br>
<p>I don't think so, in this case. I can see places where one might want to pass an envar to one app_context, but not all. I fixed the --prefix option on our trunk and filed the patch for the 1.5 series - let's hold there for now.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18678.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18676.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18676.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
