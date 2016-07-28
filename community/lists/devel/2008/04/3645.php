<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 09:18:35 2008" -->
<!-- isoreceived="20080403131835" -->
<!-- sent="Thu, 3 Apr 2008 16:18:28 +0300" -->
<!-- isosent="20080403131828" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="20080403131828.GK3614_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C41A3238.CF14%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: changes to modex<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 09:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3646.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3646.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3646.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 03, 2008 at 07:05:28AM -0600, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmmm...since I have no control nor involvement in what gets sent, perhaps I
</span><br>
<span class="quotelev1">&gt; can be a disinterested third party. ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you perhaps explain this comment:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BTW I looked at how we do modex now on the trunk. For OOB case more
</span><br>
<span class="quotelev2">&gt; &gt; than half the data we send for each proc is garbage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What &quot;garbage&quot; are you referring to? I am working to remove the stuff
</span><br>
<span class="quotelev1">&gt; inserted by proc.c - mostly hostname, hopefully arch, etc. If you are
</span><br>
<span class="quotelev1">&gt; running a &quot;debug&quot; version, there will also be type descriptors for each
</span><br>
<span class="quotelev1">&gt; entry, but those are eliminated for optimized builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So are you referring to other things?
</span><br>
I am talking about openib part of the modex. The &quot;garbage&quot; I am
<br>
referring to is this:
<br>
<p>This is the structure that is sent by modex for each openib BTL. We send entire
<br>
structure by copying it into a message.
<br>
struct mca_btl_openib_port_info {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint32_t mtu;
<br>
#if OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint8_t padding[4];
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint64_t subnet_id;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint16_t lid; /* used only in xrc */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint16_t apm_lid; /* the lid is used for APM to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;different port */
<br>
&nbsp;&nbsp;&nbsp;char *cpclist;
<br>
};
<br>
<p>The sizeof() the struct is 32 byte, but how much useful info it actually
<br>
contains?
<br>
mtu  - should really be uint8 since this is encoded value (1,2,3,4)
<br>
padding - is garbage.
<br>
sibnet_id - is ok
<br>
lid - should be sent only for XRC case
<br>
apm_lid - should be sent only if apm is enabled
<br>
cpclist - is pure garbage and should not be in this struct at all.
<br>
<p>So we send 32 bytes with only 9 bytes of useful info (for non XRC case
<br>
without APM enabled).
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3646.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3646.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3646.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
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
