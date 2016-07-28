<?
$subject_val = "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 11:08:51 2015" -->
<!-- isoreceived="20150521150851" -->
<!-- sent="Thu, 21 May 2015 11:08:49 -0400" -->
<!-- isosent="20150521150849" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses" -->
<!-- id="CAMJJpkWDDHmdRgeP=8HK0xU-pJ_sY1EF07BZLK_6bkAsovHN_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C1299B05-974D-4956-9CBE-C63FF9CEB214_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-21 11:08:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17445.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Previous message:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>In reply to:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17445.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Reply:</strong> <a href="17445.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I indicated in the ticket, these are sometimes useful for identifying
<br>
issues with the internals of the MPI stack. I'll go with 2, but having them
<br>
by default in the tcp_exclude list.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, May 21, 2015 at 10:28 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I can&#226;&#128;&#153;t speak for the BTL, but the OOB has no need for link-local addresses
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 21, 2015, at 1:24 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; this RFC is a follow-up of
</span><br>
<span class="quotelev2">&gt; &gt; * issue 585 <a href="https://github.com/open-mpi/ompi/issues/585">https://github.com/open-mpi/ompi/issues/585</a>
</span><br>
<span class="quotelev2">&gt; &gt; * related PR 591 <a href="https://github.com/open-mpi/ompi/pull/591">https://github.com/open-mpi/ompi/pull/591</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As some of you might have already noticed, Open MPI fails if configure'd
</span><br>
<span class="quotelev1">&gt; with --enable-ipv6 and ipv6 interfaces are found on the system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The root cause is IPv6 link-local addresses are not (yet) correctly
</span><br>
<span class="quotelev1">&gt; handled.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Wikipedia has a good pages about link-locak addresses at
</span><br>
<span class="quotelev1">&gt; <a href="http://en.wikipedia.org/wiki/Link-local_address">http://en.wikipedia.org/wiki/Link-local_address</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; basically, in IPv4, link-local addresses are 169.254.0.0/16 and should
</span><br>
<span class="quotelev1">&gt; be used only when zeroconf'ing the IP stack.
</span><br>
<span class="quotelev2">&gt; &gt; on the other hand, IPv6 are fe80::/10, are also used when zeroconf'ing,
</span><br>
<span class="quotelev1">&gt; but must always be present, in addition of a non link-local address.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Currently, these addresses are considered as regular addresses, but the
</span><br>
<span class="quotelev1">&gt; tcp btl (and probably oob tcp too) do not know how to handle them, and that
</span><br>
<span class="quotelev1">&gt; causes OpenMPI crash.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can think of three options :
</span><br>
<span class="quotelev2">&gt; &gt; 1) it is very unlikely a user wants Open MPI use a link-local address,
</span><br>
<span class="quotelev1">&gt; so link-local addresses should be simply skipped
</span><br>
<span class="quotelev2">&gt; &gt; 2) each module should decide if/how to handle link-local addresses
</span><br>
<span class="quotelev2">&gt; &gt; 3) all modules should correctly handle link-local addresses (that
</span><br>
<span class="quotelev1">&gt; requires some extra devel)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as far as i am concerned, i am fine with 1) because i think it is very
</span><br>
<span class="quotelev1">&gt; unlikely an user ever wants to use link-local addresses.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance for your feedback so we can move forward.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17442.php">http://www.open-mpi.org/community/lists/devel/2015/05/17442.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17443.php">http://www.open-mpi.org/community/lists/devel/2015/05/17443.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17445.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Previous message:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>In reply to:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17445.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Reply:</strong> <a href="17445.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
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
