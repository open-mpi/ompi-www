<?
$subject_val = "Re: [OMPI devel] unable to open mca_shmem_mmap";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 06:27:56 2013" -->
<!-- isoreceived="20131101102756" -->
<!-- sent="Fri, 1 Nov 2013 10:27:54 +0000" -->
<!-- isosent="20131101102754" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] unable to open mca_shmem_mmap" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A25C8_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANFHntA-c_yFcuqjjTrE_ODDmB7GEqDhTt1J9i2BNcZyNFV4kg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] unable to open mca_shmem_mmap<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 06:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13181.php">Jeff Squyres (jsquyres): "[OMPI devel] US changing time this weekend"</a>
<li><strong>Previous message:</strong> <a href="13179.php">Bibrak Qamar: "[OMPI devel] unable to open mca_shmem_mmap"</a>
<li><strong>In reply to:</strong> <a href="13179.php">Bibrak Qamar: "[OMPI devel] unable to open mca_shmem_mmap"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like you either have a busted installation, or you have a mixture of installations of multiple versions.
<br>
<p>Try &quot;rm -rf&quot;'ing your /export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9 tree and running &quot;make install&quot; again (assuming that OMPI is supposed to be the only thing installed in that tree), and see if that gives you a functional installation.
<br>
<p><p>On Nov 1, 2013, at 2:45 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have this developers version of openmpi1.9 installed on my system.
</span><br>
<span class="quotelev1">&gt; The helloword program works but on another program it throws these
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_mmap:
</span><br>
<span class="quotelev1">&gt; /export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_mmap.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_posix:
</span><br>
<span class="quotelev1">&gt; /export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_posix.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev1">&gt; /export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_sysv.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Bibrak Qamar
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13181.php">Jeff Squyres (jsquyres): "[OMPI devel] US changing time this weekend"</a>
<li><strong>Previous message:</strong> <a href="13179.php">Bibrak Qamar: "[OMPI devel] unable to open mca_shmem_mmap"</a>
<li><strong>In reply to:</strong> <a href="13179.php">Bibrak Qamar: "[OMPI devel] unable to open mca_shmem_mmap"</a>
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
