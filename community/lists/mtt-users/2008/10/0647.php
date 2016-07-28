<?
$subject_val = "Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 14:15:05 2008" -->
<!-- isoreceived="20081031181505" -->
<!-- sent="Fri, 31 Oct 2008 13:14:59 -0500" -->
<!-- isosent="20081031181459" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)" -->
<!-- id="20081031181459.GI12131_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="84F79298-B7BA-4C7B-8E6C-89AD41AE27DB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 14:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0648.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>In reply to:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0649.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Reply:</strong> <a href="0649.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm still getting the error. Solaris sh seems to genuinely
<br>
have a problem with foo=$(bar) syntax:
<br>
<p>&nbsp;&nbsp;$ cat ./dollar-paren.sh
<br>
&nbsp;&nbsp;#!/bin/sh
<br>
&nbsp;&nbsp;foo=$(date)
<br>
&nbsp;&nbsp;$ ./dollar-paren.sh
<br>
&nbsp;&nbsp;dollar-paren.sh: syntax error at line 2: `foo=$' unexpected
<br>
<p>Backticks seem to work though. E.g.,
<br>
<p>&nbsp;&nbsp;foo=`date`
<br>
<p>-Ethan
<br>
<p>On Fri, Oct/31/2008 02:01:55PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry; my stupid mailer didn't display it as an attachment when I 
</span><br>
<span class="quotelev1">&gt; forwarded.  Try this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2008, at 1:56 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Oct/31/2008 01:01:02PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Re-sending to the MTT list, because I think our listserver will
</span><br>
<span class="quotelev3">&gt;&gt; &gt; automatically block Brian (I'll add him to the whitelist for future
</span><br>
<span class="quotelev3">&gt;&gt; &gt; posts!).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting a syntax error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   $ whatami
</span><br>
<span class="quotelev2">&gt;&gt;   whatami: syntax error at line 149:  `DISTRIB_ID=$' unexpected
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if I'm doing a bad copy/paste out of my mail
</span><br>
<span class="quotelev2">&gt;&gt; client. Jeff, can you send the new whatami script as an
</span><br>
<span class="quotelev2">&gt;&gt; attachment?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0648.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>In reply to:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0649.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Reply:</strong> <a href="0649.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
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
