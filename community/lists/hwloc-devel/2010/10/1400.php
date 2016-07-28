<?
$subject_val = "Re: [hwloc-devel] gather-topology.sh and rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 31 18:17:22 2010" -->
<!-- isoreceived="20101031221722" -->
<!-- sent="Sun, 31 Oct 2010 23:17:12 +0100" -->
<!-- isosent="20101031221712" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] gather-topology.sh and rpm" -->
<!-- id="201010312317.12838.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CCD1DFE.3070002_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] gather-topology.sh and rpm<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-31 18:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1401.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2676)"</a>
<li><strong>Previous message:</strong> <a href="1399.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1397.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1403.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1403.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sunday, October 31, 2010 08:42:54 am you wrote:
<br>
<span class="quotelev1">&gt; Le 31/10/2010 01:44, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; since gather-topology.sh is nice script to help debug problems I was
</span><br>
<span class="quotelev2">&gt; &gt; thinking to add it to the rpm.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, path to the lstopo is set to the absolute build path:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; abs_top_builddir=&quot;/home/jhladky/tests/performance/hwloc/hwloc-1.0.2&quot;
</span><br>
<span class="quotelev2">&gt; &gt; lstopo=&quot;$abs_top_builddir/utils/lstopo&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; so it will no work after installation from rpm package (lstopo is in
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/lstopo)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would propose to modify the script to look first for installed lstopo
</span><br>
<span class="quotelev2">&gt; &gt; using &quot;which&quot; command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Brice,
<br>
<p><span class="quotelev1">&gt; What about we first try the one in $abs_top_builddir/utils/lstopo and
</span><br>
<span class="quotelev1">&gt; then revert back to $prefix/bin/lstopo ?
</span><br>
<p>I'm sorry but I don't think that having $abs_top_builddir or $prefix in the rpm 
<br>
is good idea. I would simply use &quot;lstopo&quot; or lstopo=`which lstopo` For 
<br>
explanation please see bellow.
<br>
<p><span class="quotelev1">&gt; By the way, should we rename gather-topology.sh into
</span><br>
<span class="quotelev1">&gt; hwloc-gather-topology.sh during install ?
</span><br>
<p>I would vote to install gather-topology.sh into the same directory as other 
<br>
hwloc binaries (and lstopo in particular).
<br>
<p>I have reviewed few shell scripts at /usr/bin which relies on another 
<br>
programs. They call the program by the name without any path like this:
<br>
<p>$more /usr/bin/ooffice 
<br>
#!/bin/sh
<br>
exec openoffice.org &quot;$@&quot;
<br>
<p>My recommendation would be:
<br>
1) During install, rename  gather-topology.sh on hwloc-gather-topology.sh
<br>
2) During install,  remove variable abs_top_builddir all together and make 
<br>
lstopo=`which lstopo`
<br>
3)Create a minimalist man page (it just need to say in one or two sentences 
<br>
what the command does)
<br>
<p>I don't think that having abs_top_builddir in rpm is good idea. It will 
<br>
resolve to some build directory on some build system.
<br>
<p>BTW, 
<br>
gather-topology.sh /tmp/a 
<br>
is not working at the moment.
<br>
<p>gather-topology.sh /tmp/a
<br>
tar: Removing leading `/' from member names
<br>
tar: /tmp/a: Cannot stat: No such file or directory
<br>
tar: Exiting with failure status due to previous errors
<br>
mv: cannot stat `/tmp/tmp.6s80cAqWc2//tmp/a.tar.gz': No such file or directory
<br>
Hierarchy gathered in .//tmp/a.tar.gz and kept in /tmp/tmp.6s80cAqWc2//tmp/a/
<br>
./gather-topology.sh: line 54: .//tmp/a.tar.gz.output: No such file or 
<br>
directory
<br>
Expected topology output stored in .//tmp/a.tar.gz.output
<br>
<p>I can fix this if you are interested.
<br>
<p>Please let me know your opinion. Please let me know if I can help with any 
<br>
work to implement the proposed changes.
<br>
<p>Thanks
<br>
Jirka
<br>
<p><span class="quotelev1">&gt; Brice
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1401.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2676)"</a>
<li><strong>Previous message:</strong> <a href="1399.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1397.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1403.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1403.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
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
