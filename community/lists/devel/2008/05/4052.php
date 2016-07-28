<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 08:02:51 2008" -->
<!-- isoreceived="20080528120251" -->
<!-- sent="Wed, 28 May 2008 08:02:41 -0400" -->
<!-- isosent="20080528120241" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="B61EA9A7-4303-46C9-85EB-77411417FC60_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1211793025.3764.26.camel_at_zmb-155.zmb.uni-essen.de" -->
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
<strong>Date:</strong> 2008-05-28 08:02:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="4051.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="4028.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.  With lots more off-list discussion, how's this pseudocode for a  
<br>
proposal:
<br>
<p>&nbsp;&nbsp;&nbsp;# Main assumption: if the kernel drivers are loaded, the user wants  
<br>
RDMA
<br>
&nbsp;&nbsp;&nbsp;# hardware support in OMPI.
<br>
<p>&nbsp;&nbsp;&nbsp;$sysfsdir = ibv_get_sysfs_path();
<br>
&nbsp;&nbsp;&nbsp;# Avoid printing &quot;Fatal: couldn't read uverbs ABI version&quot; message.
<br>
&nbsp;&nbsp;&nbsp;if (! -r &quot;$sysfsdir/class/infiniband_verbs/abi_version&quot;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($always_want_to_see_warnings)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print &quot;Warning: verbs ABI version unreadable\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return SKIP_THIS_BTL;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;# If sysfs/class/infiniband does not exist, the driver was not  
<br>
started.
<br>
&nbsp;&nbsp;&nbsp;# Therefore: assume that the user does not want RDMA hardware  
<br>
support --
<br>
&nbsp;&nbsp;&nbsp;# do *not* print a warning message.
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
will
<br>
&nbsp;&nbsp;&nbsp;# assume that there is supposed to be at least one RDMA device  
<br>
present.
<br>
&nbsp;&nbsp;&nbsp;# Warn if we don't find any.
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
<p>An overriding assumption here is that if the user requested *only* the  
<br>
openib BTL in OMPI and it fails to find any devices, OMPI will always  
<br>
print an error that it was unable to reach remote MPI peers  
<br>
(regardless of whether the default warning was previously printed or  
<br>
not).
<br>
<p>Note that the two /sys checks may be redundant; I'm not entirely sure  
<br>
how the two files relate to each other.  libibverbs will complain  
<br>
about the first if it is not present; the second is used to indicate  
<br>
that the kernel drivers are loaded.
<br>
<p><p><p>On May 26, 2008, at 5:10 AM, Manuel Prinz wrote:
<br>
<p><span class="quotelev1">&gt; Am Samstag, den 24.05.2008, 17:30 +0200 schrieb Manuel Prinz:
</span><br>
<span class="quotelev2">&gt;&gt; Am Donnerstag, den 22.05.2008, 17:18 -0400 schrieb Jeff Squyres:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you check with some of your other Debian maintainers?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry that I can't check that before Monday! I'll let you know
</span><br>
<span class="quotelev2">&gt;&gt; then but I'm not aware of that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just checked on a box with no InfiniBand hardware: /dev/infiniband
</span><br>
<span class="quotelev1">&gt; *does not* exist. Loading the IB kernel modules *does not* create the
</span><br>
<span class="quotelev1">&gt; device. I seems like it only exists if the hardware is present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Manuel
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4053.php">Greg Watson: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="4051.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="4028.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
