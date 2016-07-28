<?
$subject_val = "Re: [OMPI devel] Notes from mem hooks call today";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 00:18:28 2008" -->
<!-- isoreceived="20080529041828" -->
<!-- sent="Thu, 29 May 2008 00:18:03 -0400" -->
<!-- isosent="20080529041803" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Notes from mem hooks call today" -->
<!-- id="483E2E7B.9040909_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="adaiqwyowjt.fsf_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Notes from mem hooks call today<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 00:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roland,
<br>
<p>Roland Dreier wrote:
<br>
<span class="quotelev1">&gt; Stick in a separate library then?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think we want the complexity in the kernel -- I personally would
</span><br>
<span class="quotelev1">&gt; argue against merging it upstream; and given that the userspace solution
</span><br>
<span class="quotelev1">&gt; is actually faster, it becomes pretty hard to justify.
</span><br>
<p>Memory registration has always been expensive, so it's not in the 
<br>
critical path (not used for small messages and a system call overhead is 
<br>
nothing for large messages in MPI). Sure, you can have the kernel notify 
<br>
the user space through mapped flags, but it's a bit ugly IMHO.
<br>
<p>There are cases where the basic registration already uses the same 
<br>
infrastructure as a regcache. For example, on Solaris, MacOSX and Linux 
<br>
PowerPC, you really want to register segments as large as possible to 
<br>
limit the IOMMU overhead. You also don't want to register multiple time 
<br>
the same page with overlapping registrations, because the IOMMU space is 
<br>
limited. In short, you already have a registration cache in the driver.
<br>
<p>However, if the user space is expected to call register/deregister 
<br>
often, then I agree that the cache better be in user space.
<br>
<p>The big picture is that it's not really important where the regcache 
<br>
lives, as long as it's out of MPI.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
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
