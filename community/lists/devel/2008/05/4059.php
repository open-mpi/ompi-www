<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 17:20:11 2008" -->
<!-- isoreceived="20080528212011" -->
<!-- sent="Wed, 28 May 2008 17:20:05 -0400" -->
<!-- isosent="20080528212005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="99E5418E-02DB-480B-9E95-247E85187562_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B61EA9A7-4303-46C9-85EB-77411417FC60_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 17:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2008, at 8:02 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Note that the two /sys checks may be redundant; I'm not entirely sure
</span><br>
<span class="quotelev1">&gt; how the two files relate to each other.  libibverbs will complain
</span><br>
<span class="quotelev1">&gt; about the first if it is not present; the second is used to indicate
</span><br>
<span class="quotelev1">&gt; that the kernel drivers are loaded.
</span><br>
<p>I got some more feedback from Roland off-list explaining that if /sys/ 
<br>
class/infiniband does exist and is non-empty and /sys/class/ 
<br>
infiniband_verbs/abi_version does not exist, then this is definitely a  
<br>
case where we want to warn because it implies that config is screwed  
<br>
up -- RDMA devices are present but not usable.
<br>
<p>In this case, I think the warning that libibverbs itself prints is  
<br>
suitable (&quot;Fatal: couldn't read...&quot;).  So let's just eliminate that  
<br>
check in OMPI and go with something like the following (pretty much  
<br>
exactly what was proposed a while ago by Pasha :-) ):
<br>
<p>&nbsp;&nbsp;&nbsp;# If sysfs/class/infiniband does not exist, the driver was not
<br>
&nbsp;&nbsp;&nbsp;# started.  Therefore: assume that the user does not want RDMA
<br>
&nbsp;&nbsp;&nbsp;# hardware support -- do *not* print a warning message.
<br>
&nbsp;&nbsp;&nbsp;if (! -d &quot;$sysfsdir/class/infiniband&quot;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($always_want_to_see_warnings)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print &quot;Warning: $sysfsdir/class/infiniband does not exist\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return SKIP_THIS_BTL;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;# If we get to this point, the drivers are loaded and therefore we
<br>
&nbsp;&nbsp;&nbsp;# will assume that there is supposed to be at least one RDMA device
<br>
&nbsp;&nbsp;&nbsp;# present.  Warn if we don't find any.
<br>
&nbsp;&nbsp;&nbsp;$list = ibv_get_device_list();
<br>
&nbsp;&nbsp;&nbsp;if (empty($list)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print &quot;Warning: couldn't find any RDMA devices -- if you have  
<br>
no RDMA devices, stop the driver to avoid this warning message\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return SKIP_THIS_BTL;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;# ...continue with initialization; warnings and errors are
<br>
&nbsp;&nbsp;&nbsp;# *always* displayed after this point
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
