<?
$subject_val = "Re: [OMPI devel] RTE issues: scalability &amp; complexity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 09:33:33 2007" -->
<!-- isoreceived="20071219143333" -->
<!-- sent="Wed, 19 Dec 2007 07:33:19 -0700" -->
<!-- isosent="20071219143319" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE issues: scalability &amp;amp; complexity" -->
<!-- id="C38E79BF.BA5D%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C37ABBB8.B77D%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE issues: scalability &amp; complexity<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 09:33:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2884.php">Tim Mattox: "[OMPI devel] TCP BTL vs MX BTL broke on the trunk a week ago..."</a>
<li><strong>Previous message:</strong> <a href="2882.php">George Bosilca: "[OMPI devel] EuroPVM/MPI 2008 First Call for Papers"</a>
<li><strong>In reply to:</strong> <a href="2708.php">Ralph H Castain: "[OMPI devel] RTE issues: scalability &amp; complexity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>There was very little response to these notes, so I'm moving forward as per
<br>
the initial mailings. Here is what was concluded - holler if you have a
<br>
comment.
<br>
<p>Ralph
<br>
<p><p><p>On 12/4/07 8:09 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yo all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As (I hope) many of you know, we are in a final phase of revamping ORTE to
</span><br>
<span class="quotelev1">&gt; simplify the code, enhance scalability, and improve reliability. In working
</span><br>
<span class="quotelev1">&gt; on this effort, we recently uncovered four issues that merit broader
</span><br>
<span class="quotelev1">&gt; discussion (apologies in advance for verbosity). Although these somewhat
</span><br>
<span class="quotelev1">&gt; relate, I realize that people may care about some and not others. Hence, to
</span><br>
<span class="quotelev1">&gt; provide the chance to only comment on those you -do- care about, and to at
</span><br>
<span class="quotelev1">&gt; least somewhat constrain the length of the emails, I will be sending out a
</span><br>
<span class="quotelev1">&gt; series of four emails in this area.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issues will include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I. Support for non-MPI jobs
</span><br>
<p>We will maintain the support to launch (both at mpirun time and dynamically)
<br>
non-MPI jobs. We will not require a command-line switch warning us that
<br>
&quot;this is not an MPI job&quot; - this maintains the existing capability.
<br>
<p>We will add an MPI_Info key to indicate that the comm_spawned job will not
<br>
be calling MPI_Init so we don't attempt to modex with it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; II. Interaction between the ROUTED and GRPCOMM frameworks
</span><br>
<p>We will leave this &quot;as-is&quot; - so if you select a pairing that clashes (e.g.,
<br>
the default grpcomm and a ring routing algo), your startup (including OpenIB
<br>
wireup) performance will stink. User beware.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; III. Collective communications across daemons
</span><br>
<p>Nobody has time to work on this one. I will insert hooks where these
<br>
collectives can go, and may play with at least one implementation.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IV. RTE/MPI relative modex responsibilities
</span><br>
<p>We are still wrestling with this one - hope to resolve it sometime soon.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please feel free to contact me and/or comment on any of these issues. As a
</span><br>
<span class="quotelev1">&gt; reminder, if you do comment back to the Devel mailing list, please use
</span><br>
<span class="quotelev1">&gt; &quot;reply all&quot; so I will also receive a copy of the message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2884.php">Tim Mattox: "[OMPI devel] TCP BTL vs MX BTL broke on the trunk a week ago..."</a>
<li><strong>Previous message:</strong> <a href="2882.php">George Bosilca: "[OMPI devel] EuroPVM/MPI 2008 First Call for Papers"</a>
<li><strong>In reply to:</strong> <a href="2708.php">Ralph H Castain: "[OMPI devel] RTE issues: scalability &amp; complexity"</a>
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
