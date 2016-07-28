<?
$subject_val = "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 07:03:57 2015" -->
<!-- isoreceived="20150131120357" -->
<!-- sent="Sat, 31 Jan 2015 13:03:54 +0100" -->
<!-- isosent="20150131120354" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] Assertion `0 != r_mkey-&amp;gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get" -->
<!-- id="54CCC4AA.4080609_at_tu-dresden.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54CC9A8F.8010604_at_tu-dresden.de" -->
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
<strong>Subject:</strong> [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-31 07:03:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16862.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
<li><strong>Previous message:</strong> <a href="16860.php">Bert Wesarg: "[OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
<li><strong>In reply to:</strong> <a href="16860.php">Bert Wesarg: "[OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16864.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Reply:</strong> <a href="16864.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>On 01/31/2015 10:04 AM, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; I also have failing shmem programs with 1.8.4 which didn't with 1.8.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have now a reproducer which fails for me with 1.8.4 and 
<br>
dev-791-g03c2adf but works with 1.8.2. SHMMAX is:
<br>
<p>$ cat /proc/sys/kernel/shmmax
<br>
268435456
<br>
<p>config.log and ompi_info --all is attached for both 1.8.2 and 
<br>
dev-791-g03c2adf.
<br>
<p>$ oshcc -W -Wall -o shmem_hello_world shmem_hello_world.c
<br>
$ oshrun -np 2 -x SHMEM_SYMMETRIC_HEAP_SIZE=$((32*1024*1024)) 
<br>
./shmem_hello_world
<br>
Hello from PE 2 of 2
<br>
Hello from PE 1 of 2
<br>
shmem_hello_world: ../../../../../oshmem/mca/spml/yoda/spml_yoda.c:1113: 
<br>
mca_spml_yoda_get: Assertion `0 != r_mkey-&gt;len' failed.
<br>
[tudtug:25168] *** Process received signal ***
<br>
[tudtug:25168] Signal: Aborted (6)
<br>
[tudtug:25168] Signal code:  (-6)
<br>
shmem_hello_world: ../../../../../oshmem/mca/spml/yoda/spml_yoda.c:1113: 
<br>
mca_spml_yoda_get: Assertion `0 != r_mkey-&gt;len' failed.
<br>
[tudtug:25169] *** Process received signal ***
<br>
[tudtug:25169] Signal: Aborted (6)
<br>
[tudtug:25169] Signal code:  (-6)
<br>
<p>Backtrace for PE 0 is:
<br>
<p>#0  0x00007ffff749f0d5 in __GI_raise (sig=&lt;optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../nptl/sysdeps/unix/sysv/linux/raise.c:64
<br>
#1  0x00007ffff74a283b in __GI_abort () at abort.c:91
<br>
#2  0x00007ffff7497d9e in __assert_fail_base (fmt=&lt;optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assertion=0x7fffd38c2658 &quot;0 != r_mkey-&gt;len&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file=0x7fffd38c21f8 &quot;../../../../../oshmem/mca/spml/yoda/spml_yoda.c&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line=&lt;optimized out&gt;, function=&lt;optimized out&gt;) at assert.c:94
<br>
#3  0x00007ffff7497e42 in __GI___assert_fail (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assertion=0x7fffd38c2658 &quot;0 != r_mkey-&gt;len&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file=0x7fffd38c21f8 &quot;../../../../../oshmem/mca/spml/yoda/spml_yoda.c&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line=1113, function=0x7fffd38c26e0 &quot;mca_spml_yoda_get&quot;) at assert.c:103
<br>
#4  0x00007fffd38c0d61 in mca_spml_yoda_get (src_addr=0xff004100, size=8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dst_addr=0x7fffffffc9f0, src=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../oshmem/mca/spml/yoda/spml_yoda.c:1113
<br>
#5  0x00007fffd36b5f19 in _algorithm_f_recursive_doubling (group=0xc3fb90,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target=0xff0020d8, source=0xff0000d0, nlong=4, pSync=0xff004100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../oshmem/mca/scoll/basic/scoll_basic_collect.c:472
<br>
#6  0x00007fffd36b4bfd in mca_scoll_basic_collect (group=0xc3fb90,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target=0xff0020d8, source=0xff0000d0, nlong=4, pSync=0xff004100,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nlong_type=true, alg=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../oshmem/mca/scoll/basic/scoll_basic_collect.c:93
<br>
#7  0x00007ffff7a76b2c in _shmem_collect (target=0xff0020d8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source=0xff0000d0, nbytes=4, PE_start=0, logPE_stride=0, PE_size=2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pSync=0xff004100, array_type=true) at pshmem_collect.c:87
<br>
#8  0x00007ffff7a77236 in pshmem_fcollect32 (target=0xff0020d8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source=0xff0000d0, nelems=1, PE_start=0, logPE_stride=0, PE_size=2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pSync=0xff004100) at pshmem_collect.c:115
<br>
#9  0x00000000004009d8 in main ()
<br>
<p>Thanks for helping.
<br>
<p>Bert
<br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/x-xz attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16861/assert-r_mkey_len.tar.xz">assert-r_mkey_len.tar.xz</a>
</ul>
<!-- attachment="assert-r_mkey_len.tar.xz" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16861/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16862.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
<li><strong>Previous message:</strong> <a href="16860.php">Bert Wesarg: "[OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
<li><strong>In reply to:</strong> <a href="16860.php">Bert Wesarg: "[OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16864.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Reply:</strong> <a href="16864.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in	spml_yoda.c:1113:mca_spml_yoda_get"</a>
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
