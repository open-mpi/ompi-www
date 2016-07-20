<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 12:07:49 2013" -->
<!-- isoreceived="20131111170749" -->
<!-- sent="Mon, 11 Nov 2013 18:07:47 +0100" -->
<!-- isosent="20131111170747" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released" -->
<!-- id="CALT_uBQ9FUk7JvA1cNfXeGsf=izzqNdfuBhdKqbRaM9yRC63yg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="527DF0C1.2060601_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 12:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0920.php">Solibakke Per Bjarte: "[hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>Previous message:</strong> <a href="0918.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0918.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>it's fine with me, let's keep the code as it is.
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p>On Sat, Nov 9, 2013 at 9:22 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Le 09/11/2013 01:33, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have bumped into the following issue:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc-1.7.2:
</span><br>
<span class="quotelev1">&gt;  This works as expected:
</span><br>
<span class="quotelev1">&gt;  utils/hwloc-calc core:0-1 -H pu
</span><br>
<span class="quotelev1">&gt; PU:0 PU:1 PU:2 PU:3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Now intuitively one would expect this to work as well (as supported by
</span><br>
<span class="quotelev1">&gt; taskset/numactl commands)
</span><br>
<span class="quotelev1">&gt;  utils/hwloc-calc core:0,1 -H pu
</span><br>
<span class="quotelev1">&gt; PU:0 PU:1
</span><br>
<span class="quotelev1">&gt;  Unfortunately, &quot;,1&quot; is silently ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc-1.8rc1 does better:
</span><br>
<span class="quotelev1">&gt;  $ ./hwloc-calc core:0,1 -H pu
</span><br>
<span class="quotelev1">&gt; invalid character at `,1' after index at `0,1'
</span><br>
<span class="quotelev1">&gt; ignored unrecognized argument core:0,1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somebody got the same issue a couple months ago. That's why I've added
</span><br>
<span class="quotelev1">&gt; these explicit warning in 1.8. NEWS says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   + hwloc-calc and friends have a more robust parsing of locations given
</span><br>
<span class="quotelev1">&gt;     on the command-line and they report useful error messages about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  However, I would vote for the format
</span><br>
<span class="quotelev1">&gt; object:index,index1,index2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  to be supported and being equivalent to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  object:index object:index1 object:index2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  What do you think about it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's annoying to implement because the current code was designed for
</span><br>
<span class="quotelev1">&gt; (nested) loops only. Given that object:index1 object:index2 is easy to
</span><br>
<span class="quotelev1">&gt; write, I'd vote for not making the code too complex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks a lot!
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 6, 2013 at 3:06 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev2">&gt;&gt; release candidate for v1.8:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; v1.8rc1 is the first milestone of a major feature release.
</span><br>
<span class="quotelev2">&gt;&gt; It adds PCI discovery on Linux without dependencies on external libs,
</span><br>
<span class="quotelev2">&gt;&gt; a new API to manipulate differences between very similar topologies,
</span><br>
<span class="quotelev2">&gt;&gt; multiple improvements to command-line tools, and more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * New components
</span><br>
<span class="quotelev2">&gt;&gt;   + Add the &quot;linuxpci&quot; component that always works on Linux even when
</span><br>
<span class="quotelev2">&gt;&gt;     libpciaccess and libpci aren't available (and even with a modified
</span><br>
<span class="quotelev2">&gt;&gt;     file-system root). By default the old &quot;pci&quot; component runs first
</span><br>
<span class="quotelev2">&gt;&gt;     because &quot;linuxpci&quot; lacks device names (obj-&gt;name is always NULL).
</span><br>
<span class="quotelev2">&gt;&gt; * API
</span><br>
<span class="quotelev2">&gt;&gt;   + Add the topology difference API in hwloc/diff.h for manipulating
</span><br>
<span class="quotelev2">&gt;&gt;     many similar topologies.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add hwloc_topology_dup() for duplicating an entire topology.
</span><br>
<span class="quotelev2">&gt;&gt;   + hwloc.h and hwloc/helper.h have been reorganized to clarify the
</span><br>
<span class="quotelev2">&gt;&gt;     documentation sections. The actual inline code has moved out of
</span><br>
<span class="quotelev2">&gt;&gt; hwloc.h
</span><br>
<span class="quotelev2">&gt;&gt;     into the new hwloc/inlines.h.
</span><br>
<span class="quotelev2">&gt;&gt;   + Deprecated functions are now in hwloc/deprecated.h, and not in the
</span><br>
<span class="quotelev2">&gt;&gt;     official documentation anymore.
</span><br>
<span class="quotelev2">&gt;&gt; * Tools
</span><br>
<span class="quotelev2">&gt;&gt;   + Add hwloc-diff and hwloc-patch tools together with the new diff API.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add hwloc-compress-dir to (de)compress an entire directory of XML
</span><br>
<span class="quotelev2">&gt;&gt; files
</span><br>
<span class="quotelev2">&gt;&gt;     using hwloc-diff and hwloc-patch.
</span><br>
<span class="quotelev2">&gt;&gt;   + Object colors in the graphical output of lstopo may be changed by
</span><br>
<span class="quotelev2">&gt;&gt; adding
</span><br>
<span class="quotelev2">&gt;&gt;     a &quot;lstopoStyle&quot; info attribute. See CUSTOM COLORS in the lstopo(1)
</span><br>
<span class="quotelev2">&gt;&gt; manpage
</span><br>
<span class="quotelev2">&gt;&gt;     for details. Thanks to Jirka Hladky for discussing the idea.
</span><br>
<span class="quotelev2">&gt;&gt;   + hwloc-gather-topology may now gather I/O-related files on Linux when
</span><br>
<span class="quotelev2">&gt;&gt;     --io is given. Only the linuxpci component supports discovering I/O
</span><br>
<span class="quotelev2">&gt;&gt;     objects from these extended tarballs.
</span><br>
<span class="quotelev2">&gt;&gt;   + hwloc-annotate now supports --ri to remove/replace info attributes
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;     a given name.
</span><br>
<span class="quotelev2">&gt;&gt;   + hwloc-info supports &quot;root&quot; and &quot;all&quot; special locations for dumping
</span><br>
<span class="quotelev2">&gt;&gt;     information about the root object.
</span><br>
<span class="quotelev2">&gt;&gt;   + lstopo now supports --append-legend to append custom lines of text
</span><br>
<span class="quotelev2">&gt;&gt;     to the legend in the graphical output. Thanks to Jirka Hladky for
</span><br>
<span class="quotelev2">&gt;&gt;     discussing the idea.
</span><br>
<span class="quotelev2">&gt;&gt;   + hwloc-calc and friends have a more robust parsing of locations given
</span><br>
<span class="quotelev2">&gt;&gt;     on the command-line and they report useful error messages about it.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add --whole-system to hwloc-bind, hwloc-calc, hwloc-distances and
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-distrib, and add --restrict to hwloc-bind for uniformity among
</span><br>
<span class="quotelev2">&gt;&gt;     tools.
</span><br>
<span class="quotelev2">&gt;&gt; * Misc
</span><br>
<span class="quotelev2">&gt;&gt;   + Calling hwloc_topology_load() or hwloc_topology_set_*() on an already
</span><br>
<span class="quotelev2">&gt;&gt;     loaded topology now returns an error (deprecated since release 1.6.1).
</span><br>
<span class="quotelev2">&gt;&gt;   + Fix the initialisation of cpusets and nodesets in Group objects added
</span><br>
<span class="quotelev2">&gt;&gt;     when inserting PCI hostbridges.
</span><br>
<span class="quotelev2">&gt;&gt;   + Never merge Group objects that were added explicitly by the user with
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_custom_insert_group_object_by_parent().
</span><br>
<span class="quotelev2">&gt;&gt;   + Add a sanity check during dynamic plugin loading to prevent some
</span><br>
<span class="quotelev2">&gt;&gt;     crashes when hwloc is dynamically loaded by another plugin mechanisms.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add --with-hwloc-plugins-path to specify the install/load directories
</span><br>
<span class="quotelev2">&gt;&gt;     of plugins.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add the MICSerialNumber info attribute to the root object when running
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc inside a Xeon Phi to match the same attribute in the MIC OS
</span><br>
<span class="quotelev2">&gt;&gt; device
</span><br>
<span class="quotelev2">&gt;&gt;     when running in the host.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-announce mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-announce_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0919/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0920.php">Solibakke Per Bjarte: "[hwloc-users] DELL 8 core machine + Quadro K5000 GPU Card..."</a>
<li><strong>Previous message:</strong> <a href="0918.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0918.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
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
