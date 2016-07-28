<?
$subject_val = "Re: [OMPI devel] Cross Memory Attach: What am I Missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 22 12:45:47 2012" -->
<!-- isoreceived="20121022164547" -->
<!-- sent="Mon, 22 Oct 2012 16:45:42 +0000" -->
<!-- isosent="20121022164542" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross Memory Attach: What am I Missing?" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B1130F107_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121020214338.2b27e194_at_Gantu" -->
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
<strong>Date:</strong> 2012-10-22 12:45:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11628.php">Paul Hargrove: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Previous message:</strong> <a href="11626.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk:	ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<li><strong>In reply to:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay. How does this sound?
<br>
<p>I'm trying to use the Cross Memory Attach (CMA) capability, but am getting: &quot;mca_btl_sm_get_sync: process_vm_readv
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
<p>If this doesn't work, please look at your SE Linux settings and make certain PTRACE_ATTACH is allowed.
<br>
<p>Sam 
<br>
<p>On Oct 20, 2012, at 5:13 AM, Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; Hi Sam,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 19 Oct 2012 19:30:16 +0000
</span><br>
<span class="quotelev1">&gt; &quot;Gutierrez, Samuel K&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for all the info. Below is what can go into the FAQ. Any
</span><br>
<span class="quotelev2">&gt;&gt; suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sounds good. One thing that might be worth adding is a suggestion to
</span><br>
<span class="quotelev1">&gt; look at SE Linux as well if the ptrace_scope setting doesn't work. I
</span><br>
<span class="quotelev1">&gt; don't know the details but I think Fedora might now disable ptrace by
</span><br>
<span class="quotelev1">&gt; default using an SE Linux setting.
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
<span class="quotelev2">&gt;&gt; I'm trying to use the Cross Memory Attach (CMA) capability within the
</span><br>
<span class="quotelev2">&gt;&gt; shared-memory (sm) BTL, but am getting: &quot;mca_btl_sm_get_sync:
</span><br>
<span class="quotelev2">&gt;&gt; process_vm_readv failed: 1.&quot; Why am I seeing this error message?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may be due to insufficient permissions. CMA's usage requirements
</span><br>
<span class="quotelev2">&gt;&gt; are exactly the same as those required to successfully perform a
</span><br>
<span class="quotelev2">&gt;&gt; ptrace wtih PTRACE_ATTACH.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On some systems, a modification to /etc/sysctl.d/10-ptrace.conf is
</span><br>
<span class="quotelev2">&gt;&gt; required.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Change:
</span><br>
<span class="quotelev2">&gt;&gt; kernel.yama.ptrace_scope = 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; kernel.yama.ptrace_scope = 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and restart your system so the change can take effect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on
</span><br>
<span class="quotelev2">&gt;&gt; behalf of Christopher Yeoh [cyeoh_at_[hidden]] Sent: Thursday, October
</span><br>
<span class="quotelev2">&gt;&gt; 18, 2012 5:57 PM To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Cross Memory Attach: What am I Missing?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Sam,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 18 Oct 2012 15:08:59 +0000
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Gutierrez, Samuel K&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I really appreciate your pointing me in the right direction. It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; turns out that on this particular system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had /etc/sysctl.d/10-ptrace.conf was set to 1. Changing this to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed the problem. I'm not sure if this is the best way of getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things to work, but is sufficient for my purposes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes I think this is the best way to do it. The kernel side
</span><br>
<span class="quotelev2">&gt;&gt; implementation of CMA does the same permission checking as as ptrace
</span><br>
<span class="quotelev2">&gt;&gt; (checks to see if PTRACE_MODE_ATTACH would be permitted). A value of 1
</span><br>
<span class="quotelev2">&gt;&gt; in that config file only allows you to ptrace direct child processes,
</span><br>
<span class="quotelev2">&gt;&gt; whereas a 0 removes that restriction.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You still need to either have CAP_SYS_PTRACE (eg am probably root) or
</span><br>
<span class="quotelev2">&gt;&gt; have the same UID/GID as the target. So from a security point of view
</span><br>
<span class="quotelev2">&gt;&gt; the only extra risk you have exposed your system to are bugs that may
</span><br>
<span class="quotelev2">&gt;&gt; exist in the ptrace or CMA implementations.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behalf of George Bosilca [bosilca_at_[hidden]] Sent: Thursday,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; October 18, 2012 7:44 AM To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] Cross Memory Attach: What am I Missing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check the permissions granted by pam. Look in the /etc/security to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check for any type of restrictions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 17, 2012, at 23:30 , &quot;Gutierrez, Samuel K&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;samuel_at_[hidden]&lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to run with CMA support, but process_vm_readv is failing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with EPERM when trying to use it as a regular user (everything seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to work fine as root). I've looked around for some solutions, but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can't seem to find what I'm looking for. The documentation states
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the target and source processes need to have the same GID and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; UID to work properly. It appears that they do, so my feeling is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm missing something.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; cyeoh_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11628.php">Paul Hargrove: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Previous message:</strong> <a href="11626.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk:	ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<li><strong>In reply to:</strong> <a href="11623.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
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
