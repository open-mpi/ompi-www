<?
$subject_val = "[OMPI devel] [2.0.0rc4] check failure with Linux Studio Compilers and -m32";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 18:48:37 2016" -->
<!-- isoreceived="20160706224837" -->
<!-- sent="Wed, 6 Jul 2016 15:48:15 -0700" -->
<!-- isosent="20160706224815" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc4] check failure with Linux Studio Compilers and -m32" -->
<!-- id="CAAvDA14w+gF_P8jjmVtDrJe5FVDyDNcOFcdt5wXnOrZsMUG9uw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc4] check failure with Linux Studio Compilers and -m32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-06 18:48:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19158.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19156.php">Paul Hargrove: "[OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have the Sun/Oracle Studio compilers installed on Linux/x86-64 systems.
<br>
I test versions 12.2 and 12.4 with &quot;-m32&quot;.
<br>
I both of those builds &quot;make check&quot; is failing with a SEGV from dlopen_test.
<br>
This is an improvement over the previous rc3, which did not build at all.
<br>
<p><span class="quotelev1">&gt;From the core file on the Studio 12.4 system (the other is the same)
</span><br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
#0  0xf6373da7 in flush_and_invalidate_cache (a=4127109984)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc4-linux-x86_64-ss12u4-m32/openmpi-2.0.0rc4/opal/mca/patcher/base/patcher_base_patch.c:96
<br>
96              have_clflush = !!(cpuid2 &amp; (1 &lt;&lt; 19));
<br>
<p>(gdb) where
<br>
#0  0xf6373da7 in flush_and_invalidate_cache (a=4127109984)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc4-linux-x86_64-ss12u4-m32/openmpi-2.0.0rc4/opal/mca/patcher/base/patcher_base_patch.c:96
<br>
#1  0xf6373ed4 in apply_patch (patch_data=0x971b4e0 &quot;\351\033\277\066&quot;,
<br>
address=4127109984, data_size=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc4-linux-x86_64-ss12u4-m32/openmpi-2.0.0rc4/opal/mca/patcher/base/patcher_base_patch.c:138
<br>
#2  0xf6373fb8 in mca_base_patcher_patch_apply_binary (patch=0x971b4a8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc4-linux-x86_64-ss12u4-m32/openmpi-2.0.0rc4/opal/mca/patcher/base/patcher_base_patch.c:152
<br>
#3  0xf6117e4c in mca_patcher_overwrite_apply_patch (patch=0x971b4a8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc4-linux-x86_64-ss12u4-m32/openmpi-2.0.0rc4/opal/mca/patcher/overwrite/patcher_overwrite_module.c:151
<br>
#4  0xf6117ee9 in mca_patcher_overwrite_patch_address (sys_addr=4127109984,
<br>
hook_addr=4130697856)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc4-linux-x86_64-ss12u4-m32/openmpi-2.0.0rc4/opal/mca/patcher/overwrite/patcher_overwrite_module.c:255
<br>
#5  0xf6118000 in mca_patcher_overwrite_patch_symbol
<br>
(func_symbol_name=0xf63e9f2c &quot;munmap&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;func_new_addr=4130697856, func_old_addr=0xf6404aa0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc4-linux-x86_64-ss12u4-m32/openmpi-2.0.0rc4/opal/mca/patcher/overwrite/patcher_overwrite_module.c:301
<br>
#6  0xf635771d in patcher_open ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc4-linux-x86_64-ss12u4-m32/openmpi-2.0.0rc4/opal/mca/memory/patcher/memory_patcher_component.c:442
<br>
#7  0xf622ecfb in open_components (framework=0xf63fda40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc4-linux-x86_64-ss12u4-m32/openmpi-2.0.0rc4/opal/mca/base/mca_base_components_open.c:117
<br>
[...truncated...]
<br>
<p><p>Note that gcc, clang and open64 all work fine on this system when
<br>
configured with -m32.
<br>
I ran the Studio 12.5 beta (not in my original suite of tests) and do *NOT*
<br>
see the failure.
<br>
So, I think a compiler bug is a definite possibility here.
<br>
However, given the issues seen with xlc, I think is might also be possible
<br>
that the patcher code could contain &quot;marginal C&quot; with undefined behavior.
<br>
<p>Note that w/o -m32 all the versions of the Studio Compilers are working
<br>
fine.
<br>
So the impact of this issue is pretty small.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19158.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19156.php">Paul Hargrove: "[OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
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
