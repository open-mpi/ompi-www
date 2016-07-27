<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 18:28:51 2010" -->
<!-- isoreceived="20100712222851" -->
<!-- sent="Tue, 13 Jul 2010 00:28:40 +0200" -->
<!-- isosent="20100712222840" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="201007130028.41359.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4C3B853E.1020606_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 18:28:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1156.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>Previous message:</strong> <a href="1154.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>In reply to:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1131.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><span class="quotelev1">&gt; I don't like long names like that :) I currently vote for --intersect
</span><br>
<span class="quotelev1">&gt; here since this option list the indexes of all objects that intersect
</span><br>
<span class="quotelev1">&gt; the input within the given depth or type.
</span><br>
I don't mind long descriptive names. I'm copying options usually from man page 
<br>
or ./command --help output. Of course, if there is good short name it's the 
<br>
best! 
<br>
<p><p><span class="quotelev1">&gt; --intersect &lt;type|depth&gt;
</span><br>
<span class="quotelev1">&gt;           Find the list of objects of the given type or depth that
</span><br>
<span class="quotelev1">&gt; intersect the CPU  set and  report  the  comma-separated list of their
</span><br>
<span class="quotelev1">&gt; indexes instead of the cpu mask string.  This may be used for determining
</span><br>
<span class="quotelev1">&gt; the list of objects  above  or  below the  input  objects.   When combined
</span><br>
<span class="quotelev1">&gt; with --physical, the list is convenient to pass to external tools such as
</span><br>
<span class="quotelev1">&gt; taskset or numactl --physcpubind  or  --membind. This  is  different  from
</span><br>
<span class="quotelev1">&gt; --largest since the latter requires that all reported objects are strictly
</span><br>
<span class="quotelev1">&gt; included inside the input objects.
</span><br>
<p>Cool! :-) 
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2) I would rename --objects to something like
</span><br>
<span class="quotelev2">&gt; &gt; --info_about_nearest_ancestor
</span><br>
<span class="quotelev2">&gt; &gt; or perhaps just
</span><br>
<span class="quotelev2">&gt; &gt; --ancestor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I currently vote for --largest (or something about
</span><br>
<span class="quotelev1">&gt; summarizing/synthetizing) since this option groups input objects and
</span><br>
<span class="quotelev1">&gt; summarizes them into larger ancestors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --largest Report the list of largest objects exactly included of the input
</span><br>
<span class="quotelev1">&gt; objects.  None of  these  output  objects intersect each other, and the
</span><br>
<span class="quotelev1">&gt; sum of them is exactly equivalent to the input. No largest object is
</span><br>
<span class="quotelev1">&gt; included in  the  input  This  is different  from --intersect where
</span><br>
<span class="quotelev1">&gt; reported objects may not be strictly included in the input.
</span><br>
IMHo, it's also very good name for this option. I would however rephrase help 
<br>
message:
<br>
<p>&quot;Report the list of largest objects which completely include all input objects 
<br>
IN THE HUMAN READABLE FORMAT.&quot;
<br>
<p>It took me a while to understand how user could benefit from such option. Now I 
<br>
see it:-) Please be sure to include some examples.
<br>
=====================================
<br>
Machine (4025MB) cpuset=0x0000ffff
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 2005MB) cpuset=0x00005555
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket #0 cpuset=0x00005555
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #0 (12MB) cpuset=0x00005555
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (256KB) cpuset=0x00000101
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 #0 (32KB) cpuset=0x00000101
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #0 cpuset=0x00000101
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0) cpuset=0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=8) cpuset=0x00000100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (256KB) cpuset=0x00000404
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 #1 (32KB) cpuset=0x00000404
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #1 cpuset=0x00000404
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2) cpuset=0x00000004
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=10) cpuset=0x00000400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #2 (256KB) cpuset=0x00001010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 #2 (32KB) cpuset=0x00001010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #2 cpuset=0x00001010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=4) cpuset=0x00000010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=12) cpuset=0x00001000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #3 (256KB) cpuset=0x00004040
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 #3 (32KB) cpuset=0x00004040
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #3 cpuset=0x00004040
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=6) cpuset=0x00000040
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=14) cpuset=0x00004000
<br>
&nbsp;&nbsp;NUMANode #1 (phys=1 2020MB) cpuset=0x0000aaaa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket #1 cpuset=0x0000aaaa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #1 (12MB) cpuset=0x0000aaaa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #4 (256KB) cpuset=0x00000202
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 #4 (32KB) cpuset=0x00000202
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #4 cpuset=0x00000202
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #8 (phys=1) cpuset=0x00000002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #9 (phys=9) cpuset=0x00000200
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #5 (256KB) cpuset=0x00000808
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 #5 (32KB) cpuset=0x00000808
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #5 cpuset=0x00000808
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #10 (phys=3) cpuset=0x00000008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #11 (phys=11) cpuset=0x00000800
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #6 (256KB) cpuset=0x00002020
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 #6 (32KB) cpuset=0x00002020
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #6 cpuset=0x00002020
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #12 (phys=5) cpuset=0x00000020
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #13 (phys=13) cpuset=0x00002000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 #7 (256KB) cpuset=0x00008080
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 #7 (32KB) cpuset=0x00008080
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #7 cpuset=0x00008080
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #14 (phys=7) cpuset=0x00000080
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #15 (phys=15) cpuset=0x00008000
<br>
=============================================
<br>
[root_at_dell-per810-01 utils]# hwloc-calc proc:0
<br>
0x00000001
<br>
[root_at_dell-per810-01 utils]# hwloc-calc proc:0-1
<br>
0x00000101
<br>
[root_at_dell-per810-01 utils]# hwloc-calc --objects proc:0
<br>
PU:0
<br>
[root_at_dell-per810-01 utils]# hwloc-calc --objects proc:0-1
<br>
L2Cache:0
<br>
[root_at_dell-per810-01 utils]# hwloc-calc --objects proc:0-5
<br>
L2Cache:0 L2Cache:1 L2Cache:2
<br>
[root_at_dell-per810-01 utils]# hwloc-calc --objects proc:0-7
<br>
NUMANode:0
<br>
<p>Another example
<br>
[root_at_amd-dinar-02 utils]# hwloc-calc --objects $(hwloc-distrib --single 4)
<br>
L2Cache:0 L2Cache:6 L2Cache:12 L2Cache:18
<br>
[root_at_amd-dinar-02 utils]# hwloc-calc $(hwloc-distrib --single 4)
<br>
0x00041041
<br>
[root_at_amd-dinar-02 utils]# hwloc-distrib --single 4
<br>
0x00000001
<br>
0x00000040
<br>
0x00001000
<br>
0x00040000
<br>
<p><p><span class="quotelev2">&gt; &gt; You may consider to add option
</span><br>
<span class="quotelev2">&gt; &gt; --all_ancestors (or perhaps ancestors-tree or family-tree)
</span><br>
<span class="quotelev2">&gt; &gt; to list the full tree of ancestors objects
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This one might be better in hwloc-info (if we split it out of lstopo) or
</span><br>
<span class="quotelev1">&gt; lstopo.
</span><br>
I completely agree.
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1156.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>Previous message:</strong> <a href="1154.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>In reply to:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1131.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
