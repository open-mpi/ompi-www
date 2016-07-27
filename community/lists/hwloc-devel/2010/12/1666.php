<?
$subject_val = "[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 05:29:37 2010" -->
<!-- isoreceived="20101203102937" -->
<!-- sent="Fri, 3 Dec 2010 11:29:32 +0100" -->
<!-- isosent="20101203102932" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868" -->
<!-- id="AANLkTi=cFaMApJVCt0i_Rc_RH+XFSORFJzwhK+axwW7g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTi=2wJphSw9Ki8T-maG0ceG0TggvdJ6s59w8mZhA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 05:29:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1667.php">Jiri Hladky: "[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Previous message:</strong> <a href="1665.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1668.php">Samuel Thibault: "Re: [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Maybe reply:</strong> <a href="1668.php">Samuel Thibault: "Re: [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I just realized that my messages has been rejected. Sending it again.
<br>
<p>Thanks
<br>
Jirka
<br>
<p>---------- Forwarded message ----------
<br>
From: Jiri Hladky &lt;hladky.jiri_at_[hidden]&gt;
<br>
Date: Wed, Dec 1, 2010 at 6:19 PM
<br>
Subject: Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868
<br>
To: Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
<br>
<p><p>Hi Brice,
<br>
<p>it's a good point, I vote to have Ls also in the text output.
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p>On Wed, Dec 1, 2010 at 8:29 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 30/11/2010 15:59, sthibaul_at_[hidden] a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Author: sthibaul
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2010-11-30 09:59:40 EST (Tue, 30 Nov 2010)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 2868
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2868">https://svn.open-mpi.org/trac/hwloc/changeset/2868</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; put back L#/P# prefixes in graphical output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before the release, we'll have to update the graphical outputs in the
</span><br>
<span class="quotelev1">&gt; documentation (and grep for # everywhere too :)).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we apply something similar to the above patch for the textual output
</span><br>
<span class="quotelev1">&gt; too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current output:         Node #1 (phys=0)
</span><br>
<span class="quotelev1">&gt;                         Socket #1
</span><br>
<span class="quotelev1">&gt;                          PU #2 (phys=3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; would become:           Node L#1 (Phys=0)
</span><br>
<span class="quotelev1">&gt;                         Socket L#1
</span><br>
<span class="quotelev1">&gt;                          PU L#2 (Phys=3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1666/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1667.php">Jiri Hladky: "[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Previous message:</strong> <a href="1665.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1668.php">Samuel Thibault: "Re: [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Maybe reply:</strong> <a href="1668.php">Samuel Thibault: "Re: [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
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
