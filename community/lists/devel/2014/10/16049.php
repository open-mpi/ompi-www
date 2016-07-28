<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 23:08:37 2014" -->
<!-- isoreceived="20141016030837" -->
<!-- sent="Thu, 16 Oct 2014 12:08:38 +0900" -->
<!-- isosent="20141016030838" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40" -->
<!-- id="543F36B6.8050307_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9885C31C-EF5C-4752-917C-A529CE67E7F6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-15 23:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16050.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>In reply to:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16050.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Reply:</strong> <a href="16050.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>let me quickly reply about this one :
<br>
<p>On 2014/10/16 12:00, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I also don't understand some of the changes in this commit. For example, why did you replace the OPAL_MODEX_SEND_STRING macro with essentially a hard-coded replica of that macro?
</span><br>
OPAL_MODEX_SEND_STRING put a key of type OPAL_BYTE_OBJECT
<br>
<p>in ompi_proc_complete_init:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_MODEX_RECV_VALUE(ret, OPAL_DSTORE_ARCH,
<br>
(opal_proc_t*)&amp;proc-&gt;super,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void**)&amp;ui32ptr, OPAL_UINT32);
<br>
<p>a key of type OPAL_UINT32 is expected, and an key of type
<br>
OPAL_BYTE_OBJECT was sent
<br>
<p>i chose to &quot;fix&quot; the sender (e.g. send a key of type OPAL_UINT32)
<br>
<p>should i have &quot;fixed&quot; the receiver instead ?
<br>
<span class="quotelev1">&gt; Would you mind reverting this until we can better understand what is going on, and decide on a path forward?
</span><br>
no problem
<br>
based on my previous comment, shall i also revert the change in
<br>
ompi/proc/proc.c as well ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16050.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>In reply to:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16050.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Reply:</strong> <a href="16050.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
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
