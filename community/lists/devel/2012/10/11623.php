<?
$subject_val = "Re: [OMPI devel] Cross Memory Attach: What am I Missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 20 07:13:45 2012" -->
<!-- isoreceived="20121020111345" -->
<!-- sent="Sat, 20 Oct 2012 21:43:38 +1030" -->
<!-- isosent="20121020111338" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross Memory Attach: What am I Missing?" -->
<!-- id="20121020214338.2b27e194_at_Gantu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-20 07:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11624.php">Shamis, Pavel: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Previous message:</strong> <a href="11622.php">Paul Hargrove: "[OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>In reply to:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11627.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11627.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sam,
<br>
<p>On Fri, 19 Oct 2012 19:30:16 +0000
<br>
&quot;Gutierrez, Samuel K&quot; &lt;samuel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for all the info. Below is what can go into the FAQ. Any
</span><br>
<span class="quotelev1">&gt; suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Sounds good. One thing that might be worth adding is a suggestion to
<br>
look at SE Linux as well if the ptrace_scope setting doesn't work. I
<br>
don't know the details but I think Fedora might now disable ptrace by
<br>
default using an SE Linux setting.
<br>
<p>Regards,
<br>
<p>Chris
<br>
<p><span class="quotelev1">&gt; I'm trying to use the Cross Memory Attach (CMA) capability within the
</span><br>
<span class="quotelev1">&gt; shared-memory (sm) BTL, but am getting: &quot;mca_btl_sm_get_sync:
</span><br>
<span class="quotelev1">&gt; process_vm_readv failed: 1.&quot; Why am I seeing this error message?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be due to insufficient permissions. CMA's usage requirements
</span><br>
<span class="quotelev1">&gt; are exactly the same as those required to successfully perform a
</span><br>
<span class="quotelev1">&gt; ptrace wtih PTRACE_ATTACH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On some systems, a modification to /etc/sysctl.d/10-ptrace.conf is
</span><br>
<span class="quotelev1">&gt; required.
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
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on
</span><br>
<span class="quotelev1">&gt; behalf of Christopher Yeoh [cyeoh_at_[hidden]] Sent: Thursday, October
</span><br>
<span class="quotelev1">&gt; 18, 2012 5:57 PM To: devel_at_[hidden]
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I really appreciate your pointing me in the right direction. It
</span><br>
<span class="quotelev2">&gt; &gt; turns out that on this particular system
</span><br>
<span class="quotelev2">&gt; &gt; had /etc/sysctl.d/10-ptrace.conf was set to 1. Changing this to 0
</span><br>
<span class="quotelev2">&gt; &gt; fixed the problem. I'm not sure if this is the best way of getting
</span><br>
<span class="quotelev2">&gt; &gt; things to work, but is sufficient for my purposes.
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
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sam
</span><br>
<span class="quotelev2">&gt; &gt; ________________________________
</span><br>
<span class="quotelev2">&gt; &gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on
</span><br>
<span class="quotelev2">&gt; &gt; behalf of George Bosilca [bosilca_at_[hidden]] Sent: Thursday,
</span><br>
<span class="quotelev2">&gt; &gt; October 18, 2012 7:44 AM To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] Cross Memory Attach: What am I Missing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Check the permissions granted by pam. Look in the /etc/security to
</span><br>
<span class="quotelev2">&gt; &gt; check for any type of restrictions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 17, 2012, at 23:30 , &quot;Gutierrez, Samuel K&quot;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;samuel_at_[hidden]&lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to run with CMA support, but process_vm_readv is failing
</span><br>
<span class="quotelev2">&gt; &gt; with EPERM when trying to use it as a regular user (everything seems
</span><br>
<span class="quotelev2">&gt; &gt; to work fine as root). I've looked around for some solutions, but I
</span><br>
<span class="quotelev2">&gt; &gt; can't seem to find what I'm looking for. The documentation states
</span><br>
<span class="quotelev2">&gt; &gt; that the target and source processes need to have the same GID and
</span><br>
<span class="quotelev2">&gt; &gt; UID to work properly. It appears that they do, so my feeling is that
</span><br>
<span class="quotelev2">&gt; &gt; I'm missing something.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sam
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11624.php">Shamis, Pavel: "Re: [OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>Previous message:</strong> <a href="11622.php">Paul Hargrove: "[OMPI devel] MPI-RMA on uGNI?"</a>
<li><strong>In reply to:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11627.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11627.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
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
