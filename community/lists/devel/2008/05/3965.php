<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 12:42:10 2008" -->
<!-- isoreceived="20080521164210" -->
<!-- sent="Wed, 21 May 2008 19:41:58 +0300" -->
<!-- isosent="20080521164158" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="483450D6.8020202_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7ECC85C1-428B-4A72-BC30-D7FBE8D12515_at_cisco.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 12:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3966.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3966.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3966.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I know only Openib kernel drivers is installed by default with 
<br>
distribution.
<br>
But the user level - libibverbs and other openib stuff is not installed 
<br>
by default. User need go to the package manager and explicitly
<br>
select libibverb.  So if user decided to install libibverbs he had 
<br>
reasons for it, and I think it will be ok to show this warning.
<br>
<p>Pasha.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 21, 2008, at 11:14 AM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I think having a parameter to turn off the warning is a great idea.   
</span><br>
<span class="quotelev2">&gt;&gt; So
</span><br>
<span class="quotelev2">&gt;&gt; great in fact, that it already exists in the trunk and v1.2 :)!   
</span><br>
<span class="quotelev2">&gt;&gt; Setting
</span><br>
<span class="quotelev2">&gt;&gt; the default value for the btl_base_warn_component_unused flag from 0  
</span><br>
<span class="quotelev2">&gt;&gt; to 1
</span><br>
<span class="quotelev2">&gt;&gt; will have the desired effect.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, ok.  I either didn't know about this flag or forgot about it.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tested this myself and see that there are actually *two* error  
</span><br>
<span class="quotelev1">&gt; messages (on a machine where I installed libibverbs, but with no  
</span><br>
<span class="quotelev1">&gt; OpenFabrics hardware, with OMPI 1.2.6):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % mpirun -np 1 hello
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: OpenIB on host eddie.osl.iu.edu was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the MCA param takes care of the OMPI message; I'll contact the  
</span><br>
<span class="quotelev1">&gt; libibverbs authors about their message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I agree with setting the default to 0, however.  The  
</span><br>
<span class="quotelev2">&gt;&gt; warning
</span><br>
<span class="quotelev2">&gt;&gt; has proven extremely useful for diagnosing that IB (or less often GM  
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; MX) isn't properly configured on a compute node due to some random  
</span><br>
<span class="quotelev2">&gt;&gt; error.
</span><br>
<span class="quotelev2">&gt;&gt; It's trivially easy for any packaging group to have the line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   btl_base_warn_component_unused = 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; added to $prefix/etc/openmpi-mca-params.conf during the install  
</span><br>
<span class="quotelev2">&gt;&gt; phase of
</span><br>
<span class="quotelev2">&gt;&gt; the package build (indeed, our simple build scripts at LANL used to do
</span><br>
<span class="quotelev2">&gt;&gt; this on a regular bases due to our need to tweek the OOB to keep IPoIB
</span><br>
<span class="quotelev2">&gt;&gt; happier at scale).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think keeping the Debian guys happy is a good thing.  Giving them an
</span><br>
<span class="quotelev2">&gt;&gt; easy way to turn off silly warnings is a good thing.  Removing a known
</span><br>
<span class="quotelev2">&gt;&gt; useful warning to help them doesn't seem like a good thing.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess that this is what I am torn about.  Yes, it's a useful message  
</span><br>
<span class="quotelev1">&gt; -- in some cases.  But now that libibverbs is shipping in Debain and  
</span><br>
<span class="quotelev1">&gt; other Linuxes, the number of machines out there with verbs-capable  
</span><br>
<span class="quotelev1">&gt; hardware is far, far smaller than the number of machines without verbs- 
</span><br>
<span class="quotelev1">&gt; capable hardware.  Specifically:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The number of cases where seeing the message by default is *not*  
</span><br>
<span class="quotelev1">&gt; useful is now potentially [much] larger than the number of cases where  
</span><br>
<span class="quotelev1">&gt; the default message is useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. An out-of-the-box &quot;mpirun a.out&quot; will print warning messages in  
</span><br>
<span class="quotelev1">&gt; perfectly valid/good configurations (no verbs-capable hardware, but  
</span><br>
<span class="quotelev1">&gt; just happen to have libibverbs installed).  This is a Big Deal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Problems with HCA hardware and/or verbs stack are uncommon  
</span><br>
<span class="quotelev1">&gt; (nowadays).  I'd be ok asking someone to enable a debug flag to get  
</span><br>
<span class="quotelev1">&gt; more information on configuration problems or hardware faults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't we be optimizing for the common case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short: I think it's no longer safe to assume that machines with  
</span><br>
<span class="quotelev1">&gt; libibverbs installed must also have verbs-capable hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3966.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3966.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3966.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
