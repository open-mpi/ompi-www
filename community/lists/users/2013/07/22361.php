<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 08:54:27 2013" -->
<!-- isoreceived="20130723125427" -->
<!-- sent="Tue, 23 Jul 2013 05:54:19 -0700" -->
<!-- isosent="20130723125419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="2CCC7D9A-1B9D-4E00-B3A7-C2DD9F550CDF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F745082_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 08:54:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2013, at 3:56 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 21, 2013, at 8:50 AM, Kevin H. Hobbs &lt;hobbsk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah! That would indicate an issue with the external hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; package they provided, which is the big reason we don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recommend installing from packages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll happily report the bug to the hwloc developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that this is necessarily an hwloc bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll also add what we've found here to the bug on the Fedora
</span><br>
<span class="quotelev2">&gt;&gt; bugzilla.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything more I can do on this list to figure out the
</span><br>
<span class="quotelev2">&gt;&gt; nature of the bug?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have internal copies of hwloc and libevent that ensure (a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they are at the proper level, and (b) they are configured
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly for OMPI's use.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It does look like Fedora's hwloc is ahead of OMPI's.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fedora 18 has openmpi-1.6.3 and hwloc-1.4.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The source of openmpi-1.6.5 has hwloc-1.3.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hypothetically, hwloc 1.4.x is backwards source-compatible with hwloc 1.3.x, but we have not tested this.  I don't know if hwloc has, either (I'm sure they haven't tested with Open MPI 1.6.x).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How can I tell what the configuration differences are?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The entire configure section of the .spec file in
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-1.4.2-2.fc18.src.rpm is :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; %configure
</span><br>
<span class="quotelev2">&gt;&gt; %{__make} %{?_smp_mflags} V=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI builds hwloc in &quot;embedded&quot; mode, which means that OMPI's configure line is used to build hwloc (vs. having a separate configure invocation for hwloc).  They're hypothetically the moral equivalent of each other, but perhaps something is different somehow...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see anything that looks like any hwloc configure options
</span><br>
<span class="quotelev2">&gt;&gt; are being set.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How do I tell how OMPI configures it's bundled hwloc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With this embedded mechanism, we're calling hwloc's configury with the moral equivalent of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --disable-cairo --disable-libxml2 --enable-xml --with-hwloc-symbol-prefix=opal_hwloc152_ --enable-embedded-mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Better yet, I'd like to figure out the actual nature of the bug
</span><br>
<span class="quotelev2">&gt;&gt; and report it in the proper place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it's curious that they can't reproduce your issue,
</span><br>
<p>Guess I missed this - where does it say that they can't reproduce the issue?? I'm suspicious because build-from-source produced a working result.
<br>
<p><span class="quotelev1">&gt; which suggests that the hwloc issue is a red herring (because, as stated above, hwloc *should* be backwards compatible).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph: is there an easy way to find out more detail on why orte_util_nidmap_init() failed without attaching a debugger?
</span><br>
<p>A debugger would be the best way.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
