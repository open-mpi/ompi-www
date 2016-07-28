<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 06:14:51 2007" -->
<!-- isoreceived="20070306111451" -->
<!-- sent="Tue, 06 Mar 2007 12:13:16 +0100" -->
<!-- isosent="20070306111316" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization" -->
<!-- id="45ED4CCC.4010209_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070306105542.GC24777_at_minantech.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 06:13:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1339.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1339.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1339.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Tue, Mar 06, 2007 at 11:24:06AM +0100, Bert Wesarg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it does this after opal_atomic_lock() (which is explicit memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; barrier) then it is broken.
</span><br>
<span class="quotelev2">&gt;&gt; Than, gcc 4.1.1 on the amd64 architecture is broken:
</span><br>
<span class="quotelev1">&gt; And can you repeat the test please, but make &quot;test&quot; variable to be global
</span><br>
<span class="quotelev1">&gt; to tell compiler that it can be actually accessed by more then one
</span><br>
<span class="quotelev1">&gt; thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>ahh, now both produce nearly the same code.
<br>
<p>but who hurts it to declare the variable volatile?
<br>
<p>Bert
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1338/double_check.s.diff">double_check.s.diff</a>
</ul>
<!-- attachment="double_check.s.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1339.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1339.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1339.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
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
