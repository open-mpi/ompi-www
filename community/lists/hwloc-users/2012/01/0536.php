<?
$subject_val = "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 13:24:06 2012" -->
<!-- isoreceived="20120130182406" -->
<!-- sent="Mon, 30 Jan 2012 13:24:00 -0500" -->
<!-- isosent="20120130182400" -->
<!-- name="Devendar Bureddy" -->
<!-- email="bureddy_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'" -->
<!-- id="CABB+w0Q1iu8Sc-X1a0o-fbVDWrNPxi4nzwQtzZRrO=Q-qsiJzg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20120130180037.GA4025_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'<br>
<strong>From:</strong> Devendar Bureddy (<em>bureddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 13:24:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0537.php">Devendar Bureddy: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>In reply to:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0537.php">Devendar Bureddy: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 30, 2012 at 1:00 PM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Devendar Bureddy, le Mon 30 Jan 2012 18:59:11 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; /home/bureddy/hwloc-1.4/include/private/cpuid.h: In function 'hwloc_cpuid':
</span><br>
<span class="quotelev2">&gt;&gt; /home/bureddy/hwloc-1.4/include/private/cpuid.h:54: error: can't find
</span><br>
<span class="quotelev2">&gt;&gt; a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you check in the config.log that the test for buildability of
</span><br>
<span class="quotelev1">&gt; cpuid.h includes your -mcmodel option and (would be surprising) doesn't
</span><br>
<span class="quotelev1">&gt; fail?
</span><br>
<p>I see following lines in the config.log.  It seems, -mcmodel option is
<br>
included but there is a failure.
<br>
<p>&nbsp;234 configure:5080: checking minix/config.h usability
<br>
&nbsp;235 configure:5080: gcc -c -mcmodel=medium  conftest.c &gt;&amp;5
<br>
&nbsp;236 conftest.c:57:26: error: minix/config.h: No such file or directory
<br>
&nbsp;237 configure:5080: $? = 1
<br>
<p>I attached completely config.log.
<br>
<p>-Devendar
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0536/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0537.php">Devendar Bureddy: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>In reply to:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0537.php">Devendar Bureddy: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
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
