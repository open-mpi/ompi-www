<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 05:25:34 2007" -->
<!-- isoreceived="20070306102534" -->
<!-- sent="Tue, 06 Mar 2007 11:24:06 +0100" -->
<!-- isosent="20070306102406" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization" -->
<!-- id="45ED4146.8060403_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070306095239.GB24777_at_minantech.com" -->
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
<strong>Date:</strong> 2007-03-06 05:24:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; If it does this after opal_atomic_lock() (which is explicit memory
</span><br>
<span class="quotelev1">&gt; barrier) then it is broken.
</span><br>
Than, gcc 4.1.1 on the amd64 architecture is broken:
<br>
<p>The test-cases were compiled in the test/asm directory, with -O3
<br>
<p>Bert
<br>
<p><p><p>



<br><hr>
<ul>
<li>text/x-c attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1336/double_check.c">double_check.c</a>
</ul>
<!-- attachment="double_check.c" -->
<hr>
<ul>
<li>text/x-asm attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1336/double_check.s">double_check.s</a>
</ul>
<!-- attachment="double_check.s" -->
<hr>
<ul>
<li>text/x-c attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1336/double_check_volatile.c">double_check_volatile.c</a>
</ul>
<!-- attachment="double_check_volatile.c" -->
<hr>
<ul>
<li>text/x-asm attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1336/double_check_volatile.s">double_check_volatile.s</a>
</ul>
<!-- attachment="double_check_volatile.s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1337.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
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
