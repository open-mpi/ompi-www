<?
$subject_val = "[hwloc-devel] cython re-write of python-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 15:32:36 2014" -->
<!-- isoreceived="20140107203236" -->
<!-- sent="Tue, 07 Jan 2014 14:32:33 -0600" -->
<!-- isosent="20140107203233" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] cython re-write of python-hwloc" -->
<!-- id="52CC6461.10806_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] cython re-write of python-hwloc<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 15:32:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4017.php">Brice Goglin: "Re: [hwloc-devel] cython re-write of python-hwloc"</a>
<li><strong>Previous message:</strong> <a href="4015.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4017.php">Brice Goglin: "Re: [hwloc-devel] cython re-write of python-hwloc"</a>
<li><strong>Reply:</strong> <a href="4017.php">Brice Goglin: "Re: [hwloc-devel] cython re-write of python-hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Partly to prepare for the eventual switch to python3, and partly for the
<br>
better refcount handling etc., I have rewritten python-hwloc and the requisite
<br>
python-libnuma in Cython.
<br>
<p>The only drawback I've noticed with this change is that where python-hwloc
<br>
used to be backward-compatible with older hwloc releases, it now is bound to
<br>
the particular hwloc library version it was built against.
<br>
<p>source tarballs and Fedora RPMs are at <a href="http://people.redhat.com/streeter/">http://people.redhat.com/streeter/</a> and
<br>
the git repos are
<br>
<a href="https://git.fedorahosted.org/cgit/python-libnuma.git/">https://git.fedorahosted.org/cgit/python-libnuma.git/</a>
<br>
and
<br>
<a href="https://git.fedorahosted.org/cgit/python-hwloc.git/">https://git.fedorahosted.org/cgit/python-hwloc.git/</a>
<br>
<p>--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4017.php">Brice Goglin: "Re: [hwloc-devel] cython re-write of python-hwloc"</a>
<li><strong>Previous message:</strong> <a href="4015.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4017.php">Brice Goglin: "Re: [hwloc-devel] cython re-write of python-hwloc"</a>
<li><strong>Reply:</strong> <a href="4017.php">Brice Goglin: "Re: [hwloc-devel] cython re-write of python-hwloc"</a>
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
