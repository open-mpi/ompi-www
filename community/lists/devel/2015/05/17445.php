<?
$subject_val = "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 11:13:07 2015" -->
<!-- isoreceived="20150521151307" -->
<!-- sent="Thu, 21 May 2015 08:13:03 -0700" -->
<!-- isosent="20150521151303" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses" -->
<!-- id="75580586-952B-4531-A230-A75B79D8A189_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkWDDHmdRgeP=8HK0xU-pJ_sY1EF07BZLK_6bkAsovHN_g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-21 11:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17446.php">Joshua Ladd: "[OMPI devel] Fwd: job post"</a>
<li><strong>Previous message:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>In reply to:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can live with that - the OOB currently looks for loopback and ignores them if any other option is available. Easy enough to extend that logic to link-local.
<br>
<p>So I guess we should leave link-local addrs in the opal IF list, and let the modules deal with it
<br>
<p><p><span class="quotelev1">&gt; On May 21, 2015, at 8:08 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I indicated in the ticket, these are sometimes useful for identifying issues with the internals of the MPI stack. I'll go with 2, but having them by default in the tcp_exclude list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 21, 2015 at 10:28 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I can&#226;&#128;&#153;t speak for the BTL, but the OOB has no need for link-local addresses
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 21, 2015, at 1:24 AM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; this RFC is a follow-up of
</span><br>
<span class="quotelev2">&gt; &gt; * issue 585 <a href="https://github.com/open-mpi/ompi/issues/585">https://github.com/open-mpi/ompi/issues/585</a> &lt;<a href="https://github.com/open-mpi/ompi/issues/585">https://github.com/open-mpi/ompi/issues/585</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; * related PR 591 <a href="https://github.com/open-mpi/ompi/pull/591">https://github.com/open-mpi/ompi/pull/591</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/591">https://github.com/open-mpi/ompi/pull/591</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As some of you might have already noticed, Open MPI fails if configure'd with --enable-ipv6 and ipv6 interfaces are found on the system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The root cause is IPv6 link-local addresses are not (yet) correctly handled.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Wikipedia has a good pages about link-locak addresses at <a href="http://en.wikipedia.org/wiki/Link-local_address">http://en.wikipedia.org/wiki/Link-local_address</a> &lt;<a href="http://en.wikipedia.org/wiki/Link-local_address">http://en.wikipedia.org/wiki/Link-local_address</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; basically, in IPv4, link-local addresses are 169.254.0.0/16 &lt;<a href="http://169.254.0.0/16">http://169.254.0.0/16</a>&gt; and should be used only when zeroconf'ing the IP stack.
</span><br>
<span class="quotelev2">&gt; &gt; on the other hand, IPv6 are fe80::/10, are also used when zeroconf'ing, but must always be present, in addition of a non link-local address.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Currently, these addresses are considered as regular addresses, but the tcp btl (and probably oob tcp too) do not know how to handle them, and that causes OpenMPI crash.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can think of three options :
</span><br>
<span class="quotelev2">&gt; &gt; 1) it is very unlikely a user wants Open MPI use a link-local address, so link-local addresses should be simply skipped
</span><br>
<span class="quotelev2">&gt; &gt; 2) each module should decide if/how to handle link-local addresses
</span><br>
<span class="quotelev2">&gt; &gt; 3) all modules should correctly handle link-local addresses (that requires some extra devel)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as far as i am concerned, i am fine with 1) because i think it is very unlikely an user ever wants to use link-local addresses.
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
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17442.php">http://www.open-mpi.org/community/lists/devel/2015/05/17442.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/05/17442.php">http://www.open-mpi.org/community/lists/devel/2015/05/17442.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17443.php">http://www.open-mpi.org/community/lists/devel/2015/05/17443.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/05/17443.php">http://www.open-mpi.org/community/lists/devel/2015/05/17443.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17444.php">http://www.open-mpi.org/community/lists/devel/2015/05/17444.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17445/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17446.php">Joshua Ladd: "[OMPI devel] Fwd: job post"</a>
<li><strong>Previous message:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>In reply to:</strong> <a href="17444.php">George Bosilca: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
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
