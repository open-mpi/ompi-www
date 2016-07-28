<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 16:22:11 2011" -->
<!-- isoreceived="20111005202211" -->
<!-- sent="Wed, 5 Oct 2011 13:22:10 -0700" -->
<!-- isosent="20111005202210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234" -->
<!-- id="CDBB47B7-CD96-4640-930A-8FA0E186175B_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAB20053.826F%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 16:22:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9781.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>In reply to:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9781.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Reply:</strong> <a href="9781.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought I already had a check pmi m4 somewhere? Should have been in that pmi component I committed a few months ago. I can check next week.
<br>
<p>I agree with Brian - can't really be checked, and there are non-slurm pmi's out there.
<br>
Ralph
<br>
<p>Sent from my iPad
<br>
<p>On Oct 5, 2011, at 11:40 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 10/5/11 12:37 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 5, 2011, at 2:30 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think we need to go that far; in fact, we really shouldn't use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macros to enforce license policies like that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not talking about enforcement -- I'm talking about notification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's what I meant by policies.  Configure.m4 is the wrong place to set
</span><br>
<span class="quotelev1">&gt; things like licensing information; if you want ompi_info to know something
</span><br>
<span class="quotelev1">&gt; about a license, make it part of the component struct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But more importantly, we should remove that particular warning from this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test, since the test is used in places other than SLURM, which don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; negative licensing impact.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fair enough; is there a way to tell the difference between BSD-friendly
</span><br>
<span class="quotelev2">&gt;&gt; PMI and not-BSD-friendly PMI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not directly, no.  It's likely that the ess will need to be PMI +
</span><br>
<span class="quotelev1">&gt; something for many cases, so perhaps those configure macros can check.
</span><br>
<span class="quotelev1">&gt; Perhaps not.  Kind of sucks, but what can you do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9781.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>In reply to:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9781.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Reply:</strong> <a href="9781.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
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
