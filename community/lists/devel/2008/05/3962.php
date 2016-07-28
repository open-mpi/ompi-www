<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 12:03:21 2008" -->
<!-- isoreceived="20080521160321" -->
<!-- sent="Wed, 21 May 2008 12:03:12 -0400" -->
<!-- isosent="20080521160312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="7ECC85C1-428B-4A72-BC30-D7FBE8D12515_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0805211106510.10912_at_marvin.we-be-smart.org" -->
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
<strong>Date:</strong> 2008-05-21 12:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3961.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2008, at 11:14 AM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I think having a parameter to turn off the warning is a great idea.   
</span><br>
<span class="quotelev1">&gt; So
</span><br>
<span class="quotelev1">&gt; great in fact, that it already exists in the trunk and v1.2 :)!   
</span><br>
<span class="quotelev1">&gt; Setting
</span><br>
<span class="quotelev1">&gt; the default value for the btl_base_warn_component_unused flag from 0  
</span><br>
<span class="quotelev1">&gt; to 1
</span><br>
<span class="quotelev1">&gt; will have the desired effect.
</span><br>
<p>Ah, ok.  I either didn't know about this flag or forgot about it.  :-)
<br>
<p>I just tested this myself and see that there are actually *two* error  
<br>
messages (on a machine where I installed libibverbs, but with no  
<br>
OpenFabrics hardware, with OMPI 1.2.6):
<br>
<p>% mpirun -np 1 hello
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: OpenIB on host eddie.osl.iu.edu was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
<p>So the MCA param takes care of the OMPI message; I'll contact the  
<br>
libibverbs authors about their message.
<br>
<p><span class="quotelev1">&gt; I'm not sure I agree with setting the default to 0, however.  The  
</span><br>
<span class="quotelev1">&gt; warning
</span><br>
<span class="quotelev1">&gt; has proven extremely useful for diagnosing that IB (or less often GM  
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; MX) isn't properly configured on a compute node due to some random  
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev1">&gt; It's trivially easy for any packaging group to have the line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   btl_base_warn_component_unused = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; added to $prefix/etc/openmpi-mca-params.conf during the install  
</span><br>
<span class="quotelev1">&gt; phase of
</span><br>
<span class="quotelev1">&gt; the package build (indeed, our simple build scripts at LANL used to do
</span><br>
<span class="quotelev1">&gt; this on a regular bases due to our need to tweek the OOB to keep IPoIB
</span><br>
<span class="quotelev1">&gt; happier at scale).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think keeping the Debian guys happy is a good thing.  Giving them an
</span><br>
<span class="quotelev1">&gt; easy way to turn off silly warnings is a good thing.  Removing a known
</span><br>
<span class="quotelev1">&gt; useful warning to help them doesn't seem like a good thing.
</span><br>
<p>I guess that this is what I am torn about.  Yes, it's a useful message  
<br>
-- in some cases.  But now that libibverbs is shipping in Debain and  
<br>
other Linuxes, the number of machines out there with verbs-capable  
<br>
hardware is far, far smaller than the number of machines without verbs- 
<br>
capable hardware.  Specifically:
<br>
<p>1. The number of cases where seeing the message by default is *not*  
<br>
useful is now potentially [much] larger than the number of cases where  
<br>
the default message is useful.
<br>
<p>2. An out-of-the-box &quot;mpirun a.out&quot; will print warning messages in  
<br>
perfectly valid/good configurations (no verbs-capable hardware, but  
<br>
just happen to have libibverbs installed).  This is a Big Deal.
<br>
<p>3. Problems with HCA hardware and/or verbs stack are uncommon  
<br>
(nowadays).  I'd be ok asking someone to enable a debug flag to get  
<br>
more information on configuration problems or hardware faults.
<br>
<p>Shouldn't we be optimizing for the common case?
<br>
<p>In short: I think it's no longer safe to assume that machines with  
<br>
libibverbs installed must also have verbs-capable hardware.
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
<li><strong>Next message:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3961.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3957.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
