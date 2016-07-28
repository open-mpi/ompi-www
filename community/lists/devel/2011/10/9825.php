<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 14 17:07:39 2011" -->
<!-- isoreceived="20111014210739" -->
<!-- sent="Fri, 14 Oct 2011 23:07:33 +0200" -->
<!-- isosent="20111014210733" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270" -->
<!-- id="2337661.iiUfIZM9IU_at_james" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALwSR2W81VnAcJKJtu4OycPzDSwcyHNS9uRNE3sC0eT62vdsuw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-14 17:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9826.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>Previous message:</strong> <a href="9824.php">George Bosilca: "[OMPI devel] [Open MPI Announce] Open MPI 1.4.4 released"</a>
<li><strong>In reply to:</strong> <a href="9820.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
in fact I was trying the OR-alternative -- however, it's only a win on older 
<br>
AMD Opterons (16 cycles vs. 20), but cannot beat the __builtin_clz alternative 
<br>
on Intel.
<br>
<p>Best regards,
<br>
Rainer
<br>
<p><p><p>On Wednesday 12 October 2011 11:26:52 Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; If you wanted to speedup these routines for processors without
</span><br>
<span class="quotelev1">&gt; __builtin_clz, there are a variety of variations in C to implement clz
</span><br>
<span class="quotelev1">&gt; efficiently. See Hacker's Delight nlz (number of leading zeros):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hackersdelight.org/HDcode/nlz.c.txt">http://www.hackersdelight.org/HDcode/nlz.c.txt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or from my Ph.D. advisor's magic algorithm's page:
</span><br>
<span class="quotelev1">&gt; <a href="http://aggregate.org/MAGIC/#Leading%20Zero%20Count">http://aggregate.org/MAGIC/#Leading%20Zero%20Count</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And you can directly implement opal_next_poweroftwo()
</span><br>
<span class="quotelev1">&gt; with this:
</span><br>
<span class="quotelev1">&gt; <a href="http://aggregate.org/MAGIC/#Next%20Largest%20Power%20of%202">http://aggregate.org/MAGIC/#Next%20Largest%20Power%20of%202</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Hacker's Delight webpage (and book) are fun to read for that
</span><br>
<span class="quotelev1">&gt; certain kind of person. :-)
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hackersdelight.org/">http://www.hackersdelight.org/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9826.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>Previous message:</strong> <a href="9824.php">George Bosilca: "[OMPI devel] [Open MPI Announce] Open MPI 1.4.4 released"</a>
<li><strong>In reply to:</strong> <a href="9820.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
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
