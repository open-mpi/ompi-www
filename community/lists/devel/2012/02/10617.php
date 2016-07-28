<?
$subject_val = "Re: [OMPI devel] locked memory consumption with openib and spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 22:49:12 2012" -->
<!-- isoreceived="20120228034912" -->
<!-- sent="Mon, 27 Feb 2012 20:49:04 -0700" -->
<!-- isosent="20120228034904" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] locked memory consumption with openib and spawn" -->
<!-- id="7EA5CC14-5DED-4113-ABFD-8A8BE54F325D_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F4C48D1.2000809_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] locked memory consumption with openib and spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 22:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10618.php">Christopher Samuel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10616.php">Eugene Loh: "[OMPI devel] locked memory consumption with openib and spawn"</a>
<li><strong>In reply to:</strong> <a href="10616.php">Eugene Loh: "[OMPI devel] locked memory consumption with openib and spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that's the subject of several tickets&#133;
<br>
<p>On Feb 27, 2012, at 8:24 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; In the test suite, we have an ibm/dynamic/loop_spawn test that looks like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    for (...) {
</span><br>
<span class="quotelev1">&gt;        loop_spawn spawns loop_child
</span><br>
<span class="quotelev1">&gt;        parent and child execute MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt;        parent and child execute MPI_Comm_free
</span><br>
<span class="quotelev1">&gt;        parent and child execute MPI_Comm_disconnect
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the openib BTL is involved and you run long enough, it appears that you run out of locked memory.  Does anyone have a sense for whether that is expected or it shows a resource leak?
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
<li><strong>Next message:</strong> <a href="10618.php">Christopher Samuel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10616.php">Eugene Loh: "[OMPI devel] locked memory consumption with openib and spawn"</a>
<li><strong>In reply to:</strong> <a href="10616.php">Eugene Loh: "[OMPI devel] locked memory consumption with openib and spawn"</a>
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
