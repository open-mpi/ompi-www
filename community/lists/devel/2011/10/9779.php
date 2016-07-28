<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 14:40:52 2011" -->
<!-- isoreceived="20111005184052" -->
<!-- sent="Wed, 5 Oct 2011 18:40:33 +0000" -->
<!-- isosent="20111005184033" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234" -->
<!-- id="CAB20053.826F%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15D03B0D-C587-4033-B4F6-C6F702309F1E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 14:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9780.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="9778.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>In reply to:</strong> <a href="9778.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9780.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Reply:</strong> <a href="9780.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/5/11 12:37 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Oct 5, 2011, at 2:30 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think we need to go that far; in fact, we really shouldn't use
</span><br>
<span class="quotelev2">&gt;&gt;m4
</span><br>
<span class="quotelev2">&gt;&gt; macros to enforce license policies like that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not talking about enforcement -- I'm talking about notification.
</span><br>
<p>That's what I meant by policies.  Configure.m4 is the wrong place to set
<br>
things like licensing information; if you want ompi_info to know something
<br>
about a license, make it part of the component struct.
<br>
<p><span class="quotelev2">&gt;&gt; But more importantly, we should remove that particular warning from this
</span><br>
<span class="quotelev2">&gt;&gt; test, since the test is used in places other than SLURM, which don't
</span><br>
<span class="quotelev2">&gt;&gt;have
</span><br>
<span class="quotelev2">&gt;&gt; negative licensing impact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Fair enough; is there a way to tell the difference between BSD-friendly
</span><br>
<span class="quotelev1">&gt;PMI and not-BSD-friendly PMI?
</span><br>
<p>Not directly, no.  It's likely that the ess will need to be PMI +
<br>
something for many cases, so perhaps those configure macros can check.
<br>
Perhaps not.  Kind of sucks, but what can you do?
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9780.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="9778.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>In reply to:</strong> <a href="9778.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9780.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Reply:</strong> <a href="9780.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
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
