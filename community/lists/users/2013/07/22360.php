<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 06:56:29 2013" -->
<!-- isoreceived="20130723105629" -->
<!-- sent="Tue, 23 Jul 2013 10:56:24 +0000" -->
<!-- isosent="20130723105624" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F745082_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51EBD923.8000005_at_ohio.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 06:56:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22361.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>In reply to:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22361.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22361.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22366.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2013, at 8:50 AM, Kevin H. Hobbs &lt;hobbsk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Ah! That would indicate an issue with the external hwloc
</span><br>
<span class="quotelev2">&gt;&gt; package they provided, which is the big reason we don't
</span><br>
<span class="quotelev2">&gt;&gt; recommend installing from packages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll happily report the bug to the hwloc developers.
</span><br>
<p>I don't think that this is necessarily an hwloc bug.
<br>
<p><span class="quotelev1">&gt; I'll also add what we've found here to the bug on the Fedora
</span><br>
<span class="quotelev1">&gt; bugzilla.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there anything more I can do on this list to figure out the
</span><br>
<span class="quotelev1">&gt; nature of the bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have internal copies of hwloc and libevent that ensure (a)
</span><br>
<span class="quotelev2">&gt;&gt; they are at the proper level, and (b) they are configured
</span><br>
<span class="quotelev2">&gt;&gt; properly for OMPI's use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does look like Fedora's hwloc is ahead of OMPI's.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fedora 18 has openmpi-1.6.3 and hwloc-1.4.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The source of openmpi-1.6.5 has hwloc-1.3.2.
</span><br>
<p>Hypothetically, hwloc 1.4.x is backwards source-compatible with hwloc 1.3.x, but we have not tested this.  I don't know if hwloc has, either (I'm sure they haven't tested with Open MPI 1.6.x).
<br>
<p><span class="quotelev1">&gt; How can I tell what the configuration differences are?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The entire configure section of the .spec file in
</span><br>
<span class="quotelev1">&gt; hwloc-1.4.2-2.fc18.src.rpm is :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  %configure
</span><br>
<span class="quotelev1">&gt;  %{__make} %{?_smp_mflags} V=1
</span><br>
<p>OMPI builds hwloc in &quot;embedded&quot; mode, which means that OMPI's configure line is used to build hwloc (vs. having a separate configure invocation for hwloc).  They're hypothetically the moral equivalent of each other, but perhaps something is different somehow...
<br>
<p><span class="quotelev1">&gt; I don't see anything that looks like any hwloc configure options
</span><br>
<span class="quotelev1">&gt; are being set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do I tell how OMPI configures it's bundled hwloc?
</span><br>
<p>With this embedded mechanism, we're calling hwloc's configury with the moral equivalent of:
<br>
<p>./configure --disable-cairo --disable-libxml2 --enable-xml --with-hwloc-symbol-prefix=opal_hwloc152_ --enable-embedded-mode
<br>
<p><span class="quotelev1">&gt; Better yet, I'd like to figure out the actual nature of the bug
</span><br>
<span class="quotelev1">&gt; and report it in the proper place.
</span><br>
<p><p>Yes, it's curious that they can't reproduce your issue, which suggests that the hwloc issue is a red herring (because, as stated above, hwloc *should* be backwards compatible).
<br>
<p>Ralph: is there an easy way to find out more detail on why orte_util_nidmap_init() failed without attaching a debugger?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22361.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>In reply to:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22361.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22361.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22366.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
