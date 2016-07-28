<?
$subject_val = "Re: [OMPI devel] Cross Memory Attach: What am I Missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 19 15:30:21 2012" -->
<!-- isoreceived="20121019193021" -->
<!-- sent="Fri, 19 Oct 2012 19:30:16 +0000" -->
<!-- isosent="20121019193016" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross Memory Attach: What am I Missing?" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B1130DBA6_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121019102727.16689b97_at_Gantu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Cross Memory Attach: What am I Missing?<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-19 15:30:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11620.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11618.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>In reply to:</strong> <a href="11617.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11620.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11620.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris,
<br>
<p>Thanks for all the info. Below is what can go into the FAQ. Any suggestions?
<br>
<p>I'm trying to use the Cross Memory Attach (CMA) capability within the
<br>
shared-memory (sm) BTL, but am getting: &quot;mca_btl_sm_get_sync: process_vm_readv
<br>
failed: 1.&quot; Why am I seeing this error message?
<br>
<p>This may be due to insufficient permissions. CMA's usage requirements are 
<br>
exactly the same as those required to successfully perform a ptrace wtih PTRACE_ATTACH.
<br>
<p>On some systems, a modification to /etc/sysctl.d/10-ptrace.conf is required.
<br>
<p>Change:
<br>
kernel.yama.ptrace_scope = 1
<br>
<p>to
<br>
<p>kernel.yama.ptrace_scope = 0
<br>
<p>and restart your system so the change can take effect.
<br>
<p>Thanks,
<br>
<p>Sam
<br>
________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Christopher Yeoh [cyeoh_at_[hidden]]
<br>
Sent: Thursday, October 18, 2012 5:57 PM
<br>
To: devel_at_[hidden]
<br>
Subject: Re: [OMPI devel] Cross Memory Attach: What am I Missing?
<br>
<p>Hi Sam,
<br>
<p>On Thu, 18 Oct 2012 15:08:59 +0000
<br>
&quot;Gutierrez, Samuel K&quot; &lt;samuel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I really appreciate your pointing me in the right direction. It turns
</span><br>
<span class="quotelev1">&gt; out that on this particular system had /etc/sysctl.d/10-ptrace.conf
</span><br>
<span class="quotelev1">&gt; was set to 1. Changing this to 0 fixed the problem. I'm not sure if
</span><br>
<span class="quotelev1">&gt; this is the best way of getting things to work, but is sufficient for
</span><br>
<span class="quotelev1">&gt; my purposes.
</span><br>
<p>Yes I think this is the best way to do it. The kernel side
<br>
implementation of CMA does the same permission checking as as ptrace
<br>
(checks to see if PTRACE_MODE_ATTACH would be permitted). A value of 1
<br>
in that config file only allows you to ptrace direct child processes,
<br>
whereas a 0 removes that restriction.
<br>
<p>You still need to either have CAP_SYS_PTRACE (eg am probably root) or
<br>
have the same UID/GID as the target. So from a security point of view
<br>
the only extra risk you have exposed your system to are bugs that may
<br>
exist in the ptrace or CMA implementations.
<br>
<p>Regards,
<br>
<p>Chris
<br>
<p><span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on
</span><br>
<span class="quotelev1">&gt; behalf of George Bosilca [bosilca_at_[hidden]] Sent: Thursday,
</span><br>
<span class="quotelev1">&gt; October 18, 2012 7:44 AM To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Cross Memory Attach: What am I Missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check the permissions granted by pam. Look in the /etc/security to
</span><br>
<span class="quotelev1">&gt; check for any type of restrictions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2012, at 23:30 , &quot;Gutierrez, Samuel K&quot;
</span><br>
<span class="quotelev1">&gt; &lt;samuel_at_[hidden]&lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run with CMA support, but process_vm_readv is failing
</span><br>
<span class="quotelev1">&gt; with EPERM when trying to use it as a regular user (everything seems
</span><br>
<span class="quotelev1">&gt; to work fine as root). I've looked around for some solutions, but I
</span><br>
<span class="quotelev1">&gt; can't seem to find what I'm looking for. The documentation states
</span><br>
<span class="quotelev1">&gt; that the target and source processes need to have the same GID and
</span><br>
<span class="quotelev1">&gt; UID to work properly. It appears that they do, so my feeling is that
</span><br>
<span class="quotelev1">&gt; I'm missing something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<pre>
--
cyeoh_at_[hidden]
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11620.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11618.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>In reply to:</strong> <a href="11617.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11620.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11620.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
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
