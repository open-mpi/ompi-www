<?
$subject_val = "Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 12:10:54 2014" -->
<!-- isoreceived="20140303171054" -->
<!-- sent="Mon, 3 Mar 2014 17:10:52 +0000" -->
<!-- isosent="20140303171052" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A87166E_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15Jvwuk2amDPe0M4ibgGD4+KJYaNCs3v5S91kYweqQn8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 12:10:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14280.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable"</a>
<li><strong>Previous message:</strong> <a href="14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>In reply to:</strong> <a href="14259.php">Paul Hargrove: "[OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed on the trunk and CMR'ed to 1.7.5.
<br>
<p>-Nathan
<br>
<p>On Sunday, March 02, 2014 5:17 PM, devel [devel-bounces_at_[hidden]] on behalf of Paul Hargrove [phhargrove_at_[hidden]] wrote:
<br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The failure below (from OpenBSD5-amd64) shows unresolved calls to pthread &quot;setpshared&quot; interfaces for mutex and condition vars.   Thesw were not part of the initial POSIX threads specification, and therefore configure-time check is required before these calls can safely be included.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Like my previous report (unresolved __sync_synchronize) this is from the osc/sm component code, and there is no relation to VT (it just happens that otfmerge-mpi is the first executable linked to libmpi).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.5rc1-openbsd5-amd64/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.a(osc_sm_component.o)(.text+0xba5): In function `component_select':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.5rc1-openbsd5-amd64/openmpi-1.7.5rc1/ompi/mca/osc/sm/osc_sm_component.c:349: undefined reference to `pthread_mutexattr_setpshared'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.5rc1-openbsd5-amd64/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.a(osc_sm_component.o)(.text+0xc14):/home/phargrov/OMPI/openmpi-1.7.5rc1-openbsd5-amd64/openmpi-1.7.5rc1/ompi/mca/osc/sm/osc_sm_component.c:358: undefined reference to `pthread_condattr_setpshared'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14280.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable"</a>
<li><strong>Previous message:</strong> <a href="14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>In reply to:</strong> <a href="14259.php">Paul Hargrove: "[OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
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
