<?
$subject_val = "Re: [OMPI devel] Cross Memory Attach: What am I Missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 19:57:32 2012" -->
<!-- isoreceived="20121018235732" -->
<!-- sent="Fri, 19 Oct 2012 10:27:27 +1030" -->
<!-- isosent="20121018235727" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross Memory Attach: What am I Missing?" -->
<!-- id="20121019102727.16689b97_at_Gantu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2F7AEC0555CE39418857F909CEE0451B1130213D_at_ECS-EXG-P-MB04.win.lanl.gov" -->
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
<strong>Date:</strong> 2012-10-18 19:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11618.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Previous message:</strong> <a href="11616.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda ompi/mca/btl/template ompi/mca/btl/vader ompi/mca/btl/wv ompi/mca/coll/demo ompi/mca/coll/ml ompi/mca/coll/self ompi/mca/pml/base ompi/mca/pml/bfo ompi/mca/pml/csum ompi/mca/pml/dr ompi/mca/pml/example ompi/mca/pml/ob1 ompi/mca/pml/v ompi/mca/sbgp/basesmsocket ompi/mca/sbgp/basesmuma ompi/mca/sbgp/ibnet ompi/mca/sbgp/p2p ompi/mca/vprotocol/example ompi/mca/vprotocol/pessimist ompi/tools/ompi-server opal/dss opal/mca/base opal/mca/shmem/base opal/tools/opal-checkpoint opal/tools/opal-restart opal/util orte/mca/ess/base orte/mca/ess/pmi orte/mca/odls/base orte/mca/odls/default orte/mca/plm/base orte/mca/plm/tm orte/orted orte/tools/orte-checkpoint orte/tools/orte-clean orte/tools/orte-migrate orte/tools/orte-ps orte/tools/orte-restart orte/tools/orte-top orte/tools/orterun orte/util"</a>
<li><strong>In reply to:</strong> <a href="11611.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sam,
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11618.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Previous message:</strong> <a href="11616.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda ompi/mca/btl/template ompi/mca/btl/vader ompi/mca/btl/wv ompi/mca/coll/demo ompi/mca/coll/ml ompi/mca/coll/self ompi/mca/pml/base ompi/mca/pml/bfo ompi/mca/pml/csum ompi/mca/pml/dr ompi/mca/pml/example ompi/mca/pml/ob1 ompi/mca/pml/v ompi/mca/sbgp/basesmsocket ompi/mca/sbgp/basesmuma ompi/mca/sbgp/ibnet ompi/mca/sbgp/p2p ompi/mca/vprotocol/example ompi/mca/vprotocol/pessimist ompi/tools/ompi-server opal/dss opal/mca/base opal/mca/shmem/base opal/tools/opal-checkpoint opal/tools/opal-restart opal/util orte/mca/ess/base orte/mca/ess/pmi orte/mca/odls/base orte/mca/odls/default orte/mca/plm/base orte/mca/plm/tm orte/orted orte/tools/orte-checkpoint orte/tools/orte-clean orte/tools/orte-migrate orte/tools/orte-ps orte/tools/orte-restart orte/tools/orte-top orte/tools/orterun orte/util"</a>
<li><strong>In reply to:</strong> <a href="11611.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
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
