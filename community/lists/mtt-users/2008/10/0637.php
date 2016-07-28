<?
$subject_val = "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 11:29:20 2008" -->
<!-- isoreceived="20081031152920" -->
<!-- sent="Fri, 31 Oct 2008 11:29:14 -0400" -->
<!-- isosent="20081031152914" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)" -->
<!-- id="28C1F0F3-204A-4333-9928-D27F8CFA6238_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220810310820j7ea23c6ct3aeb91629bdad79b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 11:29:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0638.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Previous message:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0638.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Reply:</strong> <a href="0638.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which patch broke BigRed -- Ethan's patch, or Brian's original new  
<br>
version of whatami?
<br>
<p><p>On Oct 31, 2008, at 11:20 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; This change also broke whatami for sles9 (which happens to be what  
</span><br>
<span class="quotelev1">&gt; our BigRed
</span><br>
<span class="quotelev1">&gt; PPC cluster is running).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/10/30 Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using your &quot;whatami&quot; in the MPI Testing Tool (MTT), but
</span><br>
<span class="quotelev2">&gt;&gt; I think a recent change to it broke for our sles10 system.
</span><br>
<span class="quotelev2">&gt;&gt; We have an lsb-release file that is different from what
</span><br>
<span class="quotelev2">&gt;&gt; &quot;whatami&quot; expects:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /etc/lsb-release
</span><br>
<span class="quotelev2">&gt;&gt; LSB_VERSION=&quot;core-2.0-noarch:core-3.0-noarch:core-2.0- 
</span><br>
<span class="quotelev2">&gt;&gt; x86_64:core-3.0-x86_64&quot;
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux burl-ct-v20z-6 2.6.16.46-0.12-smp #1 SMP Thu May 17 14:00:09  
</span><br>
<span class="quotelev2">&gt;&gt; UTC 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I attached a patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0638.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Previous message:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0638.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Reply:</strong> <a href="0638.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
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
