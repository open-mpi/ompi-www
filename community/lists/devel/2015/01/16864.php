<?
$subject_val = "Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 08:00:24 2015" -->
<!-- isoreceived="20150131130024" -->
<!-- sent="Sat, 31 Jan 2015 13:00:23 +0000" -->
<!-- isosent="20150131130023" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Assertion `0 != r_mkey-&amp;gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get" -->
<!-- id="2B2C6622-B8B2-4000-9156-51CAF9C2FA4F_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="54CCC4AA.4080609_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-31 08:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16863.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16868.php">Bert Wesarg: "Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Reply:</strong> <a href="16868.php">Bert Wesarg: "Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert --
<br>
<p>Can you file this as a Github issue?
<br>
<p><p><span class="quotelev1">&gt; On Jan 31, 2015, at 7:03 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 01/31/2015 10:04 AM, Bert Wesarg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I also have failing shmem programs with 1.8.4 which didn't with 1.8.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have now a reproducer which fails for me with 1.8.4 and dev-791-g03c2adf but works with 1.8.2. SHMMAX is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat /proc/sys/kernel/shmmax
</span><br>
<span class="quotelev1">&gt; 268435456
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; config.log and ompi_info --all is attached for both 1.8.2 and dev-791-g03c2adf.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ oshcc -W -Wall -o shmem_hello_world shmem_hello_world.c
</span><br>
<span class="quotelev1">&gt; $ oshrun -np 2 -x SHMEM_SYMMETRIC_HEAP_SIZE=$((32*1024*1024)) ./shmem_hello_world
</span><br>
<span class="quotelev1">&gt; Hello from PE 2 of 2
</span><br>
<span class="quotelev1">&gt; Hello from PE 1 of 2
</span><br>
<span class="quotelev1">&gt; shmem_hello_world: ../../../../../oshmem/mca/spml/yoda/spml_yoda.c:1113: mca_spml_yoda_get: Assertion `0 != r_mkey-&gt;len' failed.
</span><br>
<span class="quotelev1">&gt; [tudtug:25168] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tudtug:25168] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [tudtug:25168] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; shmem_hello_world: ../../../../../oshmem/mca/spml/yoda/spml_yoda.c:1113: mca_spml_yoda_get: Assertion `0 != r_mkey-&gt;len' failed.
</span><br>
<span class="quotelev1">&gt; [tudtug:25169] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tudtug:25169] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [tudtug:25169] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Backtrace for PE 0 is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00007ffff749f0d5 in __GI_raise (sig=&lt;optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;    at ../nptl/sysdeps/unix/sysv/linux/raise.c:64
</span><br>
<span class="quotelev1">&gt; #1  0x00007ffff74a283b in __GI_abort () at abort.c:91
</span><br>
<span class="quotelev1">&gt; #2  0x00007ffff7497d9e in __assert_fail_base (fmt=&lt;optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;    assertion=0x7fffd38c2658 &quot;0 != r_mkey-&gt;len&quot;,
</span><br>
<span class="quotelev1">&gt;    file=0x7fffd38c21f8 &quot;../../../../../oshmem/mca/spml/yoda/spml_yoda.c&quot;,
</span><br>
<span class="quotelev1">&gt;    line=&lt;optimized out&gt;, function=&lt;optimized out&gt;) at assert.c:94
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff7497e42 in __GI___assert_fail (
</span><br>
<span class="quotelev1">&gt;    assertion=0x7fffd38c2658 &quot;0 != r_mkey-&gt;len&quot;,
</span><br>
<span class="quotelev1">&gt;    file=0x7fffd38c21f8 &quot;../../../../../oshmem/mca/spml/yoda/spml_yoda.c&quot;,
</span><br>
<span class="quotelev1">&gt;    line=1113, function=0x7fffd38c26e0 &quot;mca_spml_yoda_get&quot;) at assert.c:103
</span><br>
<span class="quotelev1">&gt; #4  0x00007fffd38c0d61 in mca_spml_yoda_get (src_addr=0xff004100, size=8,
</span><br>
<span class="quotelev1">&gt;    dst_addr=0x7fffffffc9f0, src=1)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../oshmem/mca/spml/yoda/spml_yoda.c:1113
</span><br>
<span class="quotelev1">&gt; #5  0x00007fffd36b5f19 in _algorithm_f_recursive_doubling (group=0xc3fb90,
</span><br>
<span class="quotelev1">&gt;    target=0xff0020d8, source=0xff0000d0, nlong=4, pSync=0xff004100)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../oshmem/mca/scoll/basic/scoll_basic_collect.c:472
</span><br>
<span class="quotelev1">&gt; #6  0x00007fffd36b4bfd in mca_scoll_basic_collect (group=0xc3fb90,
</span><br>
<span class="quotelev1">&gt;    target=0xff0020d8, source=0xff0000d0, nlong=4, pSync=0xff004100,
</span><br>
<span class="quotelev1">&gt;    nlong_type=true, alg=2)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../oshmem/mca/scoll/basic/scoll_basic_collect.c:93
</span><br>
<span class="quotelev1">&gt; #7  0x00007ffff7a76b2c in _shmem_collect (target=0xff0020d8,
</span><br>
<span class="quotelev1">&gt;    source=0xff0000d0, nbytes=4, PE_start=0, logPE_stride=0, PE_size=2,
</span><br>
<span class="quotelev1">&gt;    pSync=0xff004100, array_type=true) at pshmem_collect.c:87
</span><br>
<span class="quotelev1">&gt; #8  0x00007ffff7a77236 in pshmem_fcollect32 (target=0xff0020d8,
</span><br>
<span class="quotelev1">&gt;    source=0xff0000d0, nelems=1, PE_start=0, logPE_stride=0, PE_size=2,
</span><br>
<span class="quotelev1">&gt;    pSync=0xff004100) at pshmem_collect.c:115
</span><br>
<span class="quotelev1">&gt; #9  0x00000000004009d8 in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for helping.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: bert.wesarg_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;assert-r_mkey_len.tar.xz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16861.php">http://www.open-mpi.org/community/lists/devel/2015/01/16861.php</a>
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
<li><strong>Next message:</strong> <a href="16865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16863.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16868.php">Bert Wesarg: "Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Reply:</strong> <a href="16868.php">Bert Wesarg: "Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get"</a>
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
