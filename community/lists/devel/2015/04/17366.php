<?
$subject_val = "Re: [OMPI devel] 1.8.5....going once...going twice...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 25 10:44:19 2015" -->
<!-- isoreceived="20150425144419" -->
<!-- sent="Sat, 25 Apr 2015 16:44:11 +0200" -->
<!-- isosent="20150425144411" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5....going once...going twice..." -->
<!-- id="553BA83B.6040502_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="047A0861-C9D9-4552-A633-A492117FC666_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5....going once...going twice...<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-25 10:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>Previous message:</strong> <a href="17365.php">Paul Hargrove: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>In reply to:</strong> <a href="17358.php">Ralph Castain: "[OMPI devel] 1.8.5....going once...going twice..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>Reply:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/24/2015 6:52 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Any last minute issues people need to report? Otherwise, this baby is going to ship
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul: I will include your README suggestions as they relate to 1.8.5. Thanks, as always!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>attached patch to avoid the link chains
<br>
<p>mpif77$(EXEEXT) -&gt; mpifort$(EXEEXT) -&gt; opal_wrapper$(EXEEXT)
<br>
mpif90$(EXEEXT) -&gt; mpifort$(EXEEXT) -&gt; opal_wrapper$(EXEEXT)
<br>
<p>and replace with just
<br>
<p>mpif77$(EXEEXT) -&gt; opal_wrapper$(EXEEXT)
<br>
mpif90$(EXEEXT) -&gt; opal_wrapper$(EXEEXT)
<br>
<p>It is not a bug, but produces side effects with cygwin
<br>
build and package system when it drops the $(EXEEXT) from
<br>
the links and leaves with broken chains.
<br>
<p>It should be innocuous on every other system
<br>
<p>Regards
<br>
Marco
<br>
<p><p><p><p><p><p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17366/avoid-double-link.patch">avoid-double-link.patch</a>
</ul>
<!-- attachment="avoid-double-link.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>Previous message:</strong> <a href="17365.php">Paul Hargrove: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>In reply to:</strong> <a href="17358.php">Ralph Castain: "[OMPI devel] 1.8.5....going once...going twice..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>Reply:</strong> <a href="17367.php">Ralph Castain: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
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
