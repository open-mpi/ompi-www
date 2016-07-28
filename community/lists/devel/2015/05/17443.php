<?
$subject_val = "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 10:28:29 2015" -->
<!-- isoreceived="20150521142829" -->
<!-- sent="Thu, 21 May 2015 07:28:24 -0700" -->
<!-- isosent="20150521142824" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses" -->
<!-- id="C1299B05-974D-4956-9CBE-C63FF9CEB214_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="555D963E.7000802_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-21 10:28:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Previous message:</strong> <a href="17442.php">Gilles Gouaillardet: "[OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>In reply to:</strong> <a href="17442.php">Gilles Gouaillardet: "[OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Reply:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can&#226;&#128;&#153;t speak for the BTL, but the OOB has no need for link-local addresses
<br>
<p><span class="quotelev1">&gt; On May 21, 2015, at 1:24 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this RFC is a follow-up of
</span><br>
<span class="quotelev1">&gt; * issue 585 <a href="https://github.com/open-mpi/ompi/issues/585">https://github.com/open-mpi/ompi/issues/585</a>
</span><br>
<span class="quotelev1">&gt; * related PR 591 <a href="https://github.com/open-mpi/ompi/pull/591">https://github.com/open-mpi/ompi/pull/591</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As some of you might have already noticed, Open MPI fails if configure'd with --enable-ipv6 and ipv6 interfaces are found on the system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The root cause is IPv6 link-local addresses are not (yet) correctly handled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wikipedia has a good pages about link-locak addresses at <a href="http://en.wikipedia.org/wiki/Link-local_address">http://en.wikipedia.org/wiki/Link-local_address</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically, in IPv4, link-local addresses are 169.254.0.0/16 and should be used only when zeroconf'ing the IP stack.
</span><br>
<span class="quotelev1">&gt; on the other hand, IPv6 are fe80::/10, are also used when zeroconf'ing, but must always be present, in addition of a non link-local address.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently, these addresses are considered as regular addresses, but the tcp btl (and probably oob tcp too) do not know how to handle them, and that causes OpenMPI crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can think of three options :
</span><br>
<span class="quotelev1">&gt; 1) it is very unlikely a user wants Open MPI use a link-local address, so link-local addresses should be simply skipped
</span><br>
<span class="quotelev1">&gt; 2) each module should decide if/how to handle link-local addresses
</span><br>
<span class="quotelev1">&gt; 3) all modules should correctly handle link-local addresses (that requires some extra devel)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as far as i am concerned, i am fine with 1) because i think it is very unlikely an user ever wants to use link-local addresses.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your feedback so we can move forward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17442.php">http://www.open-mpi.org/community/lists/devel/2015/05/17442.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Previous message:</strong> <a href="17442.php">Gilles Gouaillardet: "[OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>In reply to:</strong> <a href="17442.php">Gilles Gouaillardet: "[OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Reply:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
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
