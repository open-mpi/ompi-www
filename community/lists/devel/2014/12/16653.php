<?
$subject_val = "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 16:03:45 2014" -->
<!-- isoreceived="20141217210345" -->
<!-- sent="Wed, 17 Dec 2014 13:03:15 -0800" -->
<!-- isosent="20141217210315" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest" -->
<!-- id="CAAvDA14rDe_5JB+cw5MEURzScPcN4yMSbqcJXH-3q0PkJfoSuA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="aff3ba633fe6470aa416eb48067bcdea_at_DRHQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 16:03:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>In reply to:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about 'idx' vs 'index'.
<br>
In case Rolf is not correct about this being fixed, see below for the
<br>
topology object.
<br>
-Paul
<br>
<p>(dbx) print *topology
<br>
*topology = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nb_levels          = 3736059629U
<br>
&nbsp;&nbsp;&nbsp;&nbsp;next_group_depth   = 3736059629U
<br>
&nbsp;&nbsp;&nbsp;&nbsp;level_nbobjects    = (3800392320U, 4294966655U, 1U, 1702192501U,
<br>
3792869728U, 4294966655U, 408U, 16777216U, 4428736U, 0, 5150816U, 0, 0, 0,
<br>
65U, 0, 0, 0, 842477617U, 859058744U, 808333362U, 1885566011U, 825175866U,
<br>
825111095U, 774909494U, 741356081U, 775042865U, 808335409U, 808595758U,
<br>
876164154U, 14390U, 0, 0, 0, 65U, 0, 0, 0, 5065504U, 0, 0, 0, 0, 0, 0, 0,
<br>
0, 0, 0, 0, 0, 0, 0, 0, 65U, 0, 0, 0, 1651664214U, 1953067887U,
<br>
1701585017U, 543974774U, 544370534U, 543516788U, 1953853298U, 1713398885U,
<br>
1701667186U, 1802661751U, 540026912U, 1869488189U, 1919252000U,
<br>
1769172834U, 2718068U, 0, 65U, 0, 4219982788U, 4294967295U, 3736059629U,
<br>
3736059629U, 3800400896U, 4294966655U, 1U, 0, 3800248320U, 4294966655U,
<br>
81U, 0, 16370U, 1072824320U, 0, 0, 0, 0, 65U, 0, 0, 0, 1852404304U,
<br>
1869881460U, 1701344288U, 1684957472U, 1952539497U, 1713398885U,
<br>
543517801U, 1025518888U, 1953701950U, 1953853284U, 539697196U, 1931492925U,
<br>
1919247476U, 10610U, 1835363691U, 1667326815U, 65U, 0, 0, 0, 1651664214U,
<br>
1953067887U, 1701585017U, 543974774U, 544370534U, 543516788U, 1713398372U,
<br>
1701667186U, 1802661751U, 540026912U)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;levels             = (0x726576206f6e203d, 0x29797469736f62,
<br>
0xfffffffffb87d42c, 0x41, (nil), 0x2072656874656857, 0x612070616d206f74,
<br>
0x206b6e617220646e, 0x65737365636f7270, 0x2d646e756f722073,
<br>
0x7962206e69626f72, 0x74690065726f6320, 0x2979, 0x41, 0x61636d5f75706367,
<br>
0x7469736f62726556, 0x206c6576656c2079, 0x2065687420726f66,
<br>
0x206d6d6f63707267, 0x726f77656d617266, 0x6e203d203028206b,
<br>
0x736f62726576206f, 0x29797469, 0x41, 0x180, 0x7469736f62726556,
<br>
0x206c6576656c2079, 0x2065687420726f66, 0x6d61726620736172,
<br>
0x3028206b726f7765, 0x6576206f6e203d20, 0x29797469736f6272, (nil), 0x41,
<br>
0x4d4dc0, 0x7469736f62726556, 0x206c6576656c2079, 0x2065687420726f66,
<br>
0x7266207370616d72, 0x206b726f77656d61, 0x206f6e203d203028,
<br>
0x7469736f62726576, 0x2979, 0x41, 0x6361635f6d656d6b, 0x2072656874656857,
<br>
0x6c70736964206f74, 0x6669642061207961, 0x727020656c626166,
<br>
0x616d20737365636f, 0x2072657466612070, 0x6f63207369207469, 0x64657475706d,
<br>
0x41, 0xfffffffffb87d42c, 0x2072656874656857, 0x612070616d206f74,
<br>
0x206b6e617220646e, 0x65737365636f7270, 0x2d646e756f722073,
<br>
0x7962206e69626f72, 0x786900746f6c7320, (nil), 0x41, (nil),
<br>
0x2072656874656857, 0x612070616d206f74, 0x206b6e617220646e,
<br>
0x65737365636f7270, 0x2d646e756f722073, 0x7962206e69626f72, 0x65646f6e20,
<br>
(nil), 0x41, (nil), 0x6f207265626d754e, 0x7420737570632066,
<br>
0x6f6620657375206f, 0x7220686361652072, 0x322d315b206b6e61,
<br>
0x6564282035312a2a, 0x29313d746c756166, 0x5d, 0x41, (nil),
<br>
0x6f207265626d754e, 0x7420737570632066, 0x6f6620657375206f,
<br>
0x7220686361652072, 0x322d315b206b6e61, 0x6564282035312a2a,
<br>
0x29313d746c756166, 0x6c6974736e72005d, 0x41, (nil), 0x2072656874656857,
<br>
0x6c70736964206f74, 0x7020656874207961, 0x6d20737365636f72,
<br>
0x7265746661207061, 0x6320736920746920, 0x64657475706d6f, 0x720, 0x41,
<br>
0xfffffffffba56f14, 0x70614d20414d414c, 0x7365636f7250203a,
<br>
0x74756f79616c2073, 0x6974617265746920, 0x726564726f206e6f,
<br>
0x6565532820676e69, 0x6e656d75636f6420, 0x296e6f69746174, 0x41, (nil),
<br>
0x17500000174, 0x17700000176, 0x17900000178, 0x17b0000017a, 0x650000017c,
<br>
(nil), 0x100000000000000, 0x6361635f6d656d6b, 0x41, (nil), 0x6200000061,
<br>
0x6400000063, 0x6600000065)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags              = 446676598887U
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type_depth         = (105, 1935762796, 1702256485, 1869181810,
<br>
-1306853266, -254, -74984404, -1, 65, 0, 0, 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ignored_types      = (842477617, 859058744, 808333362, 1885566011,
<br>
825175866, 825111095, 774909494, 741356081, 775042865, 808335409,
<br>
808595758, 876164154)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is_thissystem      = 1862285366
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is_loaded          = 2037672307
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pid                = 41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bridge_nbobjects   = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bridge_level       = 0x41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;first_bridge       = 0x6361635f64657263
<br>
&nbsp;&nbsp;&nbsp;&nbsp;last_bridge        = 0x7469736f62726556
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pcidev_nbobjects   = 1701585017U
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pcidev_level       = 0x2065687420726f66
<br>
&nbsp;&nbsp;&nbsp;&nbsp;first_pcidev       = 0x61726620736c646f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;last_pcidev        = 0x28206b726f77656d
<br>
&nbsp;&nbsp;&nbsp;&nbsp;osdev_nbobjects    = 540876848U
<br>
&nbsp;&nbsp;&nbsp;&nbsp;osdev_level        = 0x797469736f627265
<br>
&nbsp;&nbsp;&nbsp;&nbsp;first_osdev        = 0x29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;last_osdev         = 0x41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;binding_hooks      = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set_thisproc_cpubind             = 0x720
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_thisproc_cpubind             = 0x3334323832373031
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set_thisthread_cpubind           = 0x7063743b302e3032
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_thisthread_cpubind           = 0x312e3237312f2f3a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set_proc_cpubind                 = 0x2c3032312e302e36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_proc_cpubind                 = 0x302e38312e323731
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set_thread_cpubind               = 0x3439343a3032312e
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_thread_cpubind               = 0x3836
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_thisproc_last_cpu_location   = (nil)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_thisthread_last_cpu_location = 0x41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_proc_last_cpu_location       = 0x4d51d0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set_thisproc_membind             = 0x3334323832373031
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_thisproc_membind             = 0x7063743b302e3032
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set_thisthread_membind           = 0x312e3237312f2f3a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_thisthread_membind           = 0x2c3032312e302e36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set_proc_membind                 = 0x302e38312e323731
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_proc_membind                 = 0x3439343a3032312e
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set_area_membind                 = 0x6568003836
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_area_membind                 = (nil)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alloc                            = 0x41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alloc_membind                    = 0x6361635f6d656d6b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free_membind                     = 0x65706f2f706d742f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;support            = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;discovery = 0x7365732d69706d6e
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpubind   = 0x68702d736e6f6973
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;membind   = 0x7040766f72677261
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;userdata_export_cb = 0x5f30322d6a2d7063
<br>
&nbsp;&nbsp;&nbsp;&nbsp;userdata_import_cb = 0x2f30373336312f30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;first_osdist       = 0x302f30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;last_osdist        = 0xfffffffffba56f14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;backends           = 0x41
<br>
}
<br>
<p><p><p><p>On Wed, Dec 17, 2014 at 12:54 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I think this has already been fixed by Ralph this morning.  I had
</span><br>
<span class="quotelev1">&gt; observed the same issue but is now gone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Brice
</span><br>
<span class="quotelev1">&gt; Goglin
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, December 17, 2014 3:53 PM
</span><br>
<span class="quotelev1">&gt; *To:* devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 17/12/2014 21:43, Paul Hargrove a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dbx gives me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   t_at_1 (l_at_1) terminated by signal SEGV (no mapping at the fault address)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current function is opal_hwloc172_hwloc_get_obj_by_depth
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    74     return topology-&gt;levels[depth][idx];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (dbx) where
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; current thread: t_at_1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =&gt;[1] opal_hwloc172_hwloc_get_obj_by_depth(topology = 0x4d49e0, depth = 0,
</span><br>
<span class="quotelev1">&gt; idx = 0), line 74 in &quot;traversal.c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [2] opal_hwloc172_hwloc_get_root_obj(topology = 0x4d49e0), line 118 in
</span><br>
<span class="quotelev1">&gt; &quot;helper.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [3] opal_hwloc_base_get_nbobjs_by_type(topo = 0x4d49e0, target =
</span><br>
<span class="quotelev1">&gt; OPAL_HWLOC172_hwloc_OBJ_CORE, cache_level = 0, rtype = '\003'), line 833 in
</span><br>
<span class="quotelev1">&gt; &quot;hwloc_base_util.c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [4] orte_rmaps_rr_byobj(jdata = 0x43c940, app = 0x483fe0, node_list =
</span><br>
<span class="quotelev1">&gt; 0xfffffd7fffdff4b0, num_slots = 2, num_procs = 2U, target =
</span><br>
<span class="quotelev1">&gt; OPAL_HWLOC172_hwloc_OBJ_CORE, cache_level = 0), line 495 in
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_rr_mappers.c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [5] orte_rmaps_rr_map(jdata = 0x43c940), line 165 in &quot;rmaps_rr.c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [6] orte_rmaps_base_map_job(fd = -1, args = 4, cbdata = 0x4a3300), line
</span><br>
<span class="quotelev1">&gt; 277 in &quot;rmaps_base_map_job.c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [7] event_process_active_single_queue(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at
</span><br>
<span class="quotelev1">&gt; 0xfffffd7fe453afbc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [8] event_process_active(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at
</span><br>
<span class="quotelev1">&gt; 0xfffffd7fe453b361
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [9] opal_libevent2021_event_base_loop(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at
</span><br>
<span class="quotelev1">&gt; 0xfffffd7fe453bc79
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [10] orterun(argc = 9, argv = 0xfffffd7fffdffa58), line 1081 in
</span><br>
<span class="quotelev1">&gt; &quot;orterun.c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [11] main(argc = 9, argv = 0xfffffd7fffdffa58), line 13 in &quot;main.c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (dbx) print depth
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; depth = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (dbx) print index
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; index = 0xfffffd7fff19c174
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pretty sure that index value is bogus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see &quot;idx&quot; instead of &quot;index&quot; in the code above. index may be a pointer
</span><br>
<span class="quotelev1">&gt; to the &quot;index()&quot; function in your standard library?
</span><br>
<span class="quotelev1">&gt; Anyway, depth=0 and idx=0 is totally valid, especially when called from
</span><br>
<span class="quotelev1">&gt; hwloc_get_root_obj(). Something bad happened to the topology object? Can
</span><br>
<span class="quotelev1">&gt; you print the contents of topology and topology-&gt;nblevels and
</span><br>
<span class="quotelev1">&gt; topology-&gt;levels ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;   ------------------------------
</span><br>
<span class="quotelev1">&gt;  This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt; disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev1">&gt; of the original message.
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16652.php">http://www.open-mpi.org/community/lists/devel/2014/12/16652.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16653/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>In reply to:</strong> <a href="16652.php">Rolf vandeVaart: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
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
