<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 19:52:38 2014" -->
<!-- isoreceived="20141007235238" -->
<!-- sent="Wed, 8 Oct 2014 01:52:37 +0200" -->
<!-- isosent="20141007235237" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release" -->
<!-- id="CALT_uBTw_Ybpq66-ZGLKyN2ATJ=sJzvWTnWzP81ZHJ8FmUkoZw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5433EA71.5010403_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 19:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1107.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="1105.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1107.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1107.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1108.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>glad to see the new version is out! :-)
<br>
<p>I have bumped into couple of minor problems when building new RPM for
<br>
Fedora:
<br>
<p>1) desktop file
<br>
&nbsp;desktop-file-validate hwloc-ls.desktop.back
<br>
hwloc-ls.desktop.back: error: file contains key &quot;comment&quot; in group &quot;Desktop
<br>
Entry&quot;, but keys extending the format should start with &quot;X-&quot;
<br>
hwloc-ls.desktop.back: warning: value &quot;Application;System;&quot; for key
<br>
&quot;Categories&quot; in group &quot;Desktop Entry&quot; contains a deprecated value
<br>
&quot;Application&quot;
<br>
<p>Fixed version is attached.
<br>
<p>2) I have also some trouble with symlinks. The trouble is this:
<br>
<p>&nbsp;&nbsp;&nbsp;- when installed with ./configure &amp;&amp; make &amp;&amp; make install then hwloc-ls
<br>
&nbsp;&nbsp;&nbsp;is symlink to lstopo-no-graphics and man pages
<br>
&nbsp;&nbsp;&nbsp;{ lstopo-no-graphics.1, hwloc-ls.1 } are symlinks to lstopo.1
<br>
&nbsp;&nbsp;&nbsp;- I split the package into non-GUI dependent package and GUI version. In
<br>
&nbsp;&nbsp;&nbsp;GUI version I have lstopo binary, in plain version just lstopo-no-graphics
<br>
&nbsp;&nbsp;&nbsp;and  hwloc-ls links to it
<br>
<p>When GUI version is installed to you recommend to
<br>
<p>&nbsp;&nbsp;&nbsp;- either keep hwloc-ls to point to lstopo-no-graphics
<br>
&nbsp;&nbsp;&nbsp;- or rewrite it to point to lstopo (GUI version)?
<br>
<p>In the former case hwloc-ls.desktop should be changed to lstopo.desktop.
<br>
In the latter one I need to recreate symlinks
<br>
<p>%post gui
<br>
ln -f -s %{_bindir}/hwloc-ls %{_bindir}/lstopo
<br>
<p>%postun gui
<br>
ln -f -s %{_bindir}/hwloc-ls %{_bindir}/lstopo-no-graphics
<br>
<p>which is ugly and rpmlint warns about it:
<br>
<p>hwloc-gui.x86_64: W: dangerous-command-in-%post ln
<br>
hwloc-gui.x86_64: W: dangerous-command-in-%postun ln
<br>
<p>Regarding manpage - since lstopo is GUI version it would be better to have
<br>
main (regular file) man page named lstopo-no-graphics.1 and lstopo.1 link
<br>
would link to it. That way I can package binary lstopo and man page
<br>
lstopo.1 in the same rpm package.
<br>
<p>Any advice on packaging of GUI subpackage? Do you know how is it handled in
<br>
other repos? Are symlinks regenerated upon GUI installation and removal?
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p><p><p><p><p>On Tue, Oct 7, 2014 at 3:28 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the release
</span><br>
<span class="quotelev1">&gt; of v1.10.0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.10.0 is the new feature release. There is no new major change
</span><br>
<span class="quotelev1">&gt; in this release, just improvements everywhere.
</span><br>
<span class="quotelev1">&gt; If you are buying new Intel Xeon E5 with 10 cores or more, this
</span><br>
<span class="quotelev1">&gt; release is required for proper Socket/NUMA detection until the
</span><br>
<span class="quotelev1">&gt; Linux kernel gets fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * API
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_topology_export_synthetic() to export a topology to a
</span><br>
<span class="quotelev1">&gt;     synthetic string without using lstopo. See the Synthetic topologies
</span><br>
<span class="quotelev1">&gt;     section in the documentation.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_topology_set/get_userdata() to let the application save
</span><br>
<span class="quotelev1">&gt;     a private pointer in the topology whenever it needs a way to find
</span><br>
<span class="quotelev1">&gt;     its own object corresponding to a topology.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_get_numanode_obj_by_os_index() and document that this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt;     as well as hwloc_get_pu_obj_by_os_index() are good at converting
</span><br>
<span class="quotelev1">&gt;     nodesets and cpusets into objects.
</span><br>
<span class="quotelev1">&gt;   + hwloc_distrib() does not ignore any objects anymore when there are
</span><br>
<span class="quotelev1">&gt;     too many of them. They get merged with others instead.
</span><br>
<span class="quotelev1">&gt;     Thanks to Tim Creech for reporting the issue.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;   + hwloc-bind --get &lt;command-line&gt; now executes the command after
</span><br>
<span class="quotelev1">&gt; displaying
</span><br>
<span class="quotelev1">&gt;     the binding instead of ignoring the command entirely.
</span><br>
<span class="quotelev1">&gt;     Thanks to John Donners for the suggestion.
</span><br>
<span class="quotelev1">&gt;   + Clarify that memory sizes shown in lstopo are local by default
</span><br>
<span class="quotelev1">&gt;     unless specified (total memory added in the root object).
</span><br>
<span class="quotelev1">&gt; * Synthetic topologies
</span><br>
<span class="quotelev1">&gt;   + Synthetic topology descriptions may now specify attributes such as
</span><br>
<span class="quotelev1">&gt;     memory sizes and OS indexes. See the Synthetic topologies section
</span><br>
<span class="quotelev1">&gt;     in the documentation.
</span><br>
<span class="quotelev1">&gt;   + lstopo now exports in this fully-detailed format by default.
</span><br>
<span class="quotelev1">&gt;     The new option --export-synthetic-flags may be used to revert
</span><br>
<span class="quotelev1">&gt;     back the old format.
</span><br>
<span class="quotelev1">&gt; * Documentation
</span><br>
<span class="quotelev1">&gt;   + Add the doc/examples/ subdirectory with several real-life examples,
</span><br>
<span class="quotelev1">&gt;     including the already existing hwloc-hello.C for basics.
</span><br>
<span class="quotelev1">&gt;     Thanks to Rob Aulwes for the suggestion.
</span><br>
<span class="quotelev1">&gt;   + Improve the documentation of CPU and memory binding in the API.
</span><br>
<span class="quotelev1">&gt;   + Add a FAQ entry about operating system errors, especially on AMD
</span><br>
<span class="quotelev1">&gt;     platforms with buggy cache information.
</span><br>
<span class="quotelev1">&gt;   + Add a FAQ entry about loading many topologies in a single program.
</span><br>
<span class="quotelev1">&gt; * Misc
</span><br>
<span class="quotelev1">&gt;   + Work around buggy Linux kernels reporting 2 sockets instead
</span><br>
<span class="quotelev1">&gt;     1 socket with 2 NUMA nodes for each Xeon E5 v3 (Haswell) processor.
</span><br>
<span class="quotelev1">&gt;   + pciutils/libpci support is now removed since libpciaccess works
</span><br>
<span class="quotelev1">&gt;     well and there's also a Linux-specific PCI backend. For the record,
</span><br>
<span class="quotelev1">&gt;     pciutils was GPL and therefore disabled by default since v1.6.2.
</span><br>
<span class="quotelev1">&gt;   + Add --disable-cpuid configure flag to work around buggy processor
</span><br>
<span class="quotelev1">&gt;     simulators reporting invalid CPUID information.
</span><br>
<span class="quotelev1">&gt;     Thanks for Andrew Friedley for reporting the issue.
</span><br>
<span class="quotelev1">&gt;   + Fix a racy use of libltdl when manipulating multiple topologies in
</span><br>
<span class="quotelev1">&gt;     different threads.
</span><br>
<span class="quotelev1">&gt;     Thanks to Andra Hugo for reporting the issue and testing patches.
</span><br>
<span class="quotelev1">&gt;   + Fix some build failures in private/misc.h.
</span><br>
<span class="quotelev1">&gt;     Thanks to Pavan Balaji and Ralph Castain for the reports.
</span><br>
<span class="quotelev1">&gt;   + Fix failures to detect X11/Xutil.h on some Solaris platforms.
</span><br>
<span class="quotelev1">&gt;     Thanks to Siegmar Gross for reporting the failure.
</span><br>
<span class="quotelev1">&gt;   + The plugin ABI has changed, this release will not load plugins
</span><br>
<span class="quotelev1">&gt;     built against previous hwloc releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changes since v1.10rc1 are minor.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-announce mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/10/0073.php">http://www.open-mpi.org/community/lists/hwloc-announce/2014/10/0073.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1106/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-desktop attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1106/hwloc-ls.desktop">hwloc-ls.desktop</a>
</ul>
<!-- attachment="hwloc-ls.desktop" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1107.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="1105.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1107.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1107.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Reply:</strong> <a href="1108.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
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
