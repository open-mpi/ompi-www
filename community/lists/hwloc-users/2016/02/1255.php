<?
$subject_val = "Re: [hwloc-users] lstopo hangs for centos 7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 01:25:01 2016" -->
<!-- isoreceived="20160203062501" -->
<!-- sent="Wed, 3 Feb 2016 07:24:58 +0100" -->
<!-- isosent="20160203062458" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo hangs for centos 7" -->
<!-- id="56B19D3A.9090603_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAKpNQuK1Dx56h3bB297HZqUhmczqqhJspNvS5KrcAsnLmdQX1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] lstopo hangs for centos 7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-03 01:24:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1256.php">Fabricio Cannini: "[hwloc-users] object intersection without inclusion"</a>
<li><strong>Previous message:</strong> <a href="1254.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1247.php">Jianjun Wen: "[hwloc-users] lstopo hangs for centos 7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. I pushed the fix to git branches. It will be included in future
<br>
releases (but 1.11.3 isn't planned anytime soon).
<br>
<p>It might be good to report a bug to VMware. I don't think they are
<br>
supposed to advertise the x2APIC CPU feature unless they support CPUID
<br>
0xb leaf.
<br>
<p>Brice
<br>
<p><p><p><p><p>Le 03/02/2016 05:45, Jianjun Wen a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Confirmed!
</span><br>
<span class="quotelev1">&gt; This patch fixes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt; Jianjun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 2, 2016 at 9:05 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Does this patch help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     diff --git a/src/topology-x86.c b/src/topology-x86.c
</span><br>
<span class="quotelev1">&gt;     index efd4300..a602121 100644
</span><br>
<span class="quotelev1">&gt;     --- a/src/topology-x86.c
</span><br>
<span class="quotelev1">&gt;     +++ b/src/topology-x86.c
</span><br>
<span class="quotelev1">&gt;     @@ -403,7 +403,7 @@ static void look_proc(struct hwloc_backend *backend, struct procinfo *infos, uns
</span><br>
<span class="quotelev1">&gt;        /* Get package/core/thread information from cpuid 0x0b
</span><br>
<span class="quotelev1">&gt;         * (Intel x2APIC)
</span><br>
<span class="quotelev1">&gt;         */
</span><br>
<span class="quotelev1">&gt;     -  if (cpuid_type == intel &amp;&amp; has_x2apic(features)) {
</span><br>
<span class="quotelev1">&gt;     +  if (cpuid_type == intel &amp;&amp; highest_cpuid &gt;= 0x0b &amp;&amp; has_x2apic(features)) {
</span><br>
<span class="quotelev1">&gt;          unsigned level, apic_nextshift, apic_number, apic_type, apic_id = 0, apic_shift = 0, id;
</span><br>
<span class="quotelev1">&gt;          for (level = 0; ; level++) {
</span><br>
<span class="quotelev1">&gt;            ecx = level;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It looks like VMware reports that the virtual reports x2APIC
</span><br>
<span class="quotelev1">&gt;     feature without 0xb CPUID. This looks buggy, but can be worked around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 02/02/2016 05:50, Jianjun Wen a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Brice,
</span><br>
<span class="quotelev2">&gt;&gt;     Oh, didn't realize that. Only master has the gatther-cpuid.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     BTW, /proc/cpuinfo contain a field called flags. If it is an vm,
</span><br>
<span class="quotelev2">&gt;&gt;     hypervisor will be there. 
</span><br>
<span class="quotelev2">&gt;&gt;     sudo  dmidecode -s system-product-name
</span><br>
<span class="quotelev2">&gt;&gt;     will output 
</span><br>
<span class="quotelev2">&gt;&gt;     VMware Virtual Platform
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Jianjun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Mon, Feb 1, 2016 at 12:26 AM, Brice Goglin
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Looks like you ran hwloc-gather-topology instead of
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc-gather-cpuid?
</span><br>
<span class="quotelev2">&gt;&gt;         By the way, in (4)
</span><br>
<span class="quotelev2">&gt;&gt;             tar cfj cpuid.tbz2 foo
</span><br>
<span class="quotelev2">&gt;&gt;         should be
</span><br>
<span class="quotelev2">&gt;&gt;             tar cfj cpuid.tbz2 cpuid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Le 01/02/2016 07:20, Jianjun Wen a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hi Brice,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks for the workaround -- it works very good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Attached please find the two output file after run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc-gather-cpuid.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Let me after this is fixed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Jianjun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Sun, Jan 31, 2016 at 9:48 PM, Brice Goglin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Thanks for the debugging. I guess VMware doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             properly emulate the CPUID instruction.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Please do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             1) take a tarball from git master at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="https://ci.inria.fr/hwloc/job/master-0-tarball/">https://ci.inria.fr/hwloc/job/master-0-tarball/</a> and build it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             2) export HWLOC_COMPONENTS=-x86 in your terminal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             3) do utils/hwloc/hwloc-gather-cpuid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             4) tar cfj cpuid.tbz2 foo and send that cpuid.tbz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Step (3) might do an infinite loop for the same reason,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             please replace
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             for(i=0; ; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             for(i=0; i&lt;10; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             everywhere in utils/hwloc/hwloc-gather-cpuid.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             This tarball will help me find what's buggy in VMware
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             CPUID instruction.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             In the meantime, you can fix your hwloc by exporting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             HWLOC_COMPONENTS=-x86 in your environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             If somebody knows how do detect vmware by looking under
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             /proc or /sys, we could use that to automatically set
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             that environment variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Le 01/02/2016 05:59, Jianjun Wen a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I did a debug build. Found it loops forever in this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             loop in topology-x86.c:404.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             /* Get package/core/thread information from cpuid 0x0b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                * (Intel x2APIC)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               if (cpuid_type == intel &amp;&amp; has_x2apic(features)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 unsigned level, apic_nextshift, apic_number,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             apic_type, apic_id = 0, apic_shift = 0, id;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 for (level = 0; ; level++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   ecx = level;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   eax = 0x0b;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   hwloc_x86_cpuid(&amp;eax, &amp;ebx, &amp;ecx, &amp;edx);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   if (!eax &amp;&amp; !ebx)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             On Sun, Jan 31, 2016 at 8:30 PM, Christopher Samuel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;samuel_at_[hidden] &lt;mailto:samuel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 On 01/02/16 15:09, Jianjun Wen wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                 &gt; 0x00007ffff7bce13c in look_proc () from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 /lib64/libhwloc.so.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                 &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                 &gt; Always the same place.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 pstack on the process when stuck might give more of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 an insight as it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 should give more of a stack trace.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Also running lstopo under strace should show what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 it is trying to do at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 that point.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 All the best,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Chris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  Email: samuel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 &lt;mailto:samuel_at_[hidden]&gt; Phone: +61 (0)3 903
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 55545 &lt;tel:%2B61%20%280%293%20903%2055545&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 hwloc-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 hwloc-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1251.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1251.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             -Jianjun Wen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Wancube.com - 3D photography
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Phone: 408 888 7023 &lt;tel:408%20888%207023&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             hwloc-users mailing list hwloc-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;mailto:hwloc-users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1252.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1254.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1254.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -Jianjun Wen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Wancube.com - 3D photography
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Phone: 408 888 7023 &lt;tel:408%20888%207023&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1254.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/02/1254.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     -Jianjun Wen
</span><br>
<span class="quotelev2">&gt;&gt;     Wancube.com - 3D photography
</span><br>
<span class="quotelev2">&gt;&gt;     Phone: 408 888 7023 &lt;tel:408%20888%207023&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -Jianjun Wen
</span><br>
<span class="quotelev1">&gt; Wancube.com - 3D photography
</span><br>
<span class="quotelev1">&gt; Phone: 408 888 7023
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1255/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1256.php">Fabricio Cannini: "[hwloc-users] object intersection without inclusion"</a>
<li><strong>Previous message:</strong> <a href="1254.php">Jianjun Wen: "Re: [hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1247.php">Jianjun Wen: "[hwloc-users] lstopo hangs for centos 7"</a>
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
