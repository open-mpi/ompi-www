<?
$subject_val = "Re: [OMPI devel] Cross Memory Attach: What am I Missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 19 16:24:36 2012" -->
<!-- isoreceived="20121019202436" -->
<!-- sent="Fri, 19 Oct 2012 16:24:31 -0400" -->
<!-- isosent="20121019202431" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross Memory Attach: What am I Missing?" -->
<!-- id="8E665E23-A861-438D-B96C-F06CF0160C39_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F7AEC0555CE39418857F909CEE0451B1130DBA6_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-19 16:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The title is a bit long.  :-)
<br>
<p>On Oct 19, 2012, at 3:30 PM, Gutierrez, Samuel K wrote:
<br>
<p><span class="quotelev1">&gt; Hi Chris,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for all the info. Below is what can go into the FAQ. Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to use the Cross Memory Attach (CMA) capability within the
</span><br>
<span class="quotelev1">&gt; shared-memory (sm) BTL, but am getting: &quot;mca_btl_sm_get_sync: process_vm_readv
</span><br>
<span class="quotelev1">&gt; failed: 1.&quot; Why am I seeing this error message?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be due to insufficient permissions. CMA's usage requirements are 
</span><br>
<span class="quotelev1">&gt; exactly the same as those required to successfully perform a ptrace wtih PTRACE_ATTACH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On some systems, a modification to /etc/sysctl.d/10-ptrace.conf is required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Change:
</span><br>
<span class="quotelev1">&gt; kernel.yama.ptrace_scope = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kernel.yama.ptrace_scope = 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and restart your system so the change can take effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Christopher Yeoh [cyeoh_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, October 18, 2012 5:57 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Cross Memory Attach: What am I Missing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Sam,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 18 Oct 2012 15:08:59 +0000
</span><br>
<span class="quotelev1">&gt; &quot;Gutierrez, Samuel K&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I really appreciate your pointing me in the right direction. It turns
</span><br>
<span class="quotelev2">&gt;&gt; out that on this particular system had /etc/sysctl.d/10-ptrace.conf
</span><br>
<span class="quotelev2">&gt;&gt; was set to 1. Changing this to 0 fixed the problem. I'm not sure if
</span><br>
<span class="quotelev2">&gt;&gt; this is the best way of getting things to work, but is sufficient for
</span><br>
<span class="quotelev2">&gt;&gt; my purposes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes I think this is the best way to do it. The kernel side
</span><br>
<span class="quotelev1">&gt; implementation of CMA does the same permission checking as as ptrace
</span><br>
<span class="quotelev1">&gt; (checks to see if PTRACE_MODE_ATTACH would be permitted). A value of 1
</span><br>
<span class="quotelev1">&gt; in that config file only allows you to ptrace direct child processes,
</span><br>
<span class="quotelev1">&gt; whereas a 0 removes that restriction.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You still need to either have CAP_SYS_PTRACE (eg am probably root) or
</span><br>
<span class="quotelev1">&gt; have the same UID/GID as the target. So from a security point of view
</span><br>
<span class="quotelev1">&gt; the only extra risk you have exposed your system to are bugs that may
</span><br>
<span class="quotelev1">&gt; exist in the ptrace or CMA implementations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on
</span><br>
<span class="quotelev2">&gt;&gt; behalf of George Bosilca [bosilca_at_[hidden]] Sent: Thursday,
</span><br>
<span class="quotelev2">&gt;&gt; October 18, 2012 7:44 AM To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Cross Memory Attach: What am I Missing?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Check the permissions granted by pam. Look in the /etc/security to
</span><br>
<span class="quotelev2">&gt;&gt; check for any type of restrictions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 17, 2012, at 23:30 , &quot;Gutierrez, Samuel K&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;samuel_at_[hidden]&lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run with CMA support, but process_vm_readv is failing
</span><br>
<span class="quotelev2">&gt;&gt; with EPERM when trying to use it as a regular user (everything seems
</span><br>
<span class="quotelev2">&gt;&gt; to work fine as root). I've looked around for some solutions, but I
</span><br>
<span class="quotelev2">&gt;&gt; can't seem to find what I'm looking for. The documentation states
</span><br>
<span class="quotelev2">&gt;&gt; that the target and source processes need to have the same GID and
</span><br>
<span class="quotelev2">&gt;&gt; UID to work properly. It appears that they do, so my feeling is that
</span><br>
<span class="quotelev2">&gt;&gt; I'm missing something.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; cyeoh_at_[hidden]
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
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
