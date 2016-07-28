<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 16:56:59 2008" -->
<!-- isoreceived="20080521205659" -->
<!-- sent="Wed, 21 May 2008 16:56:49 -0400" -->
<!-- isosent="20080521205649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="E62D2963-240D-4111-8356-FB47B0C43965_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0805211626000.15227_at_marvin.we-be-smart.org" -->
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
<strong>Date:</strong> 2008-05-21 16:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3977.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3977.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3977.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2008, at 4:29 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Previously, there has not been such a distinction, so I really have no
</span><br>
<span class="quotelev1">&gt; idea which caused the openib BTL throw its error (and never really  
</span><br>
<span class="quotelev1">&gt; cared,
</span><br>
<span class="quotelev1">&gt; as it was always somebody else's problem at that point).
</span><br>
<p>In the scenarios that I'm talking about, ibv_devinfo(1) and  
<br>
ibv_devices(1) commands should return that there are no devices (you  
<br>
have OFED or equivalent installed but have no verbs-capable hardware):
<br>
<p>-----
<br>
[15:21] queeg:~/mpi % ibv_devinfo
<br>
No IB devices found
<br>
[16:41] queeg:~/mpi % ibv_devices
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device                 node GUID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------              ----------------
<br>
[16:41] queeg:~/mpi %
<br>
-----
<br>
<p>Since there's no need for an immediate change to the code base --  
<br>
perhaps you could watch over the next few weeks and when you see  
<br>
problems of the kind that you're worried about, run ibv_devices and  
<br>
ibv_devinfo.  If you see OMPI-reported openfabrics problems with no  
<br>
warnings from libibverbs itself (like I mentioned in my first mail)  
<br>
and ibv_dev* are reporting no devices, then we need to worry about  
<br>
cases where the verbs stack itself doesn't even see the devices (which  
<br>
is a Really Big Error; the OS/driver stack doesn't even see the device).
<br>
<p>If ibv_dev* reports that there *are* devices when you see the errors  
<br>
that you're worried about, then OMPI would have gotten past this first  
<br>
case and reported something a bit more specific.  And therefore is a  
<br>
different warning than the one I'm proposing to remove [by default].
<br>
<p><span class="quotelev1">&gt; I'm only concerned about the case where there's an IB card, the user
</span><br>
<span class="quotelev1">&gt; expects the IB card to be used, and the IB card isn't used.
</span><br>
<p>Can you put in a site wide
<br>
<p>btl = ^tcp
<br>
<p>to avoid the problem?  If the IB card fails, then you'll get  
<br>
unreachable MPI errors.
<br>
<p><span class="quotelev1">&gt; If the
</span><br>
<span class="quotelev1">&gt; changes don't silence a warning in that situation, I'm fine with  
</span><br>
<span class="quotelev1">&gt; whatever
</span><br>
<span class="quotelev1">&gt; you do.  But does ibv_get_device_list return an HCA when the port is  
</span><br>
<span class="quotelev1">&gt; down
</span><br>
<span class="quotelev1">&gt; (because the SM failed and the machine rebooted since that time)?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; If not,
</span><br>
<span class="quotelev1">&gt; we still ahve a (fairly common, unfortunately) error case that we  
</span><br>
<span class="quotelev1">&gt; need to
</span><br>
<span class="quotelev1">&gt; report (in my opinion).
</span><br>
<p><p>Agreed.  This scenario is already covered by the checking that the  
<br>
openib BTL performs, and I agree that we should not remove this warning.
<br>
<p>That being said, note that the current error-checking code in the  
<br>
openib BTL only reports if *no* active ports are found on the host.   
<br>
If there are multiple ports in a host where some are active and some  
<br>
are [erroneously] not active, OMPI does not report this (because some  
<br>
real-world users have dual-port HCAs but are only using 1 port).
<br>
<p>Two options jump to mind:
<br>
<p>1. Add yet another MCA param to say &quot;all my ports should be active;  
<br>
warn/error if you find any non-active ports.&quot;
<br>
2. Add yet another MCA param where ports that *should* be active are  
<br>
itemized.  If OMPI finds that any of them are not active, warn/error.
<br>
<p>#1 could really be a special case of #2 (e.g., a keyword &quot;all&quot;).  Both  
<br>
of these options wouldn't be too difficult to do, but we technically  
<br>
are feature frozen...
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
<li><strong>Next message:</strong> <a href="3977.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3977.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3977.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
