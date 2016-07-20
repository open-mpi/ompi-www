<?
$subject_val = "[hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 16:10:05 2010" -->
<!-- isoreceived="20100618201005" -->
<!-- sent="Fri, 18 Jun 2010 22:09:56 +0200" -->
<!-- isosent="20100618200956" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc and rpath" -->
<!-- id="201006182209.56861.jhladky_at_redhat.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc and rpath<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 16:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0163.php">Alfredo Buttari: "Re: [hwloc-users] Could not bind on Power6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0169.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody!
<br>
<p>I'm in process to pack hwloc into rpm for Fedora. I have attached the latest 
<br>
hwloc.spec file for reference.
<br>
<p>However, there are strict rules to get a package into Fedora. One of the rules 
<br>
is that rpmlint has to pass. It's failing at the moment:
<br>
<p>=====================================================
<br>
&nbsp;hwloc.x86_64: E: binary-or-shlib-defines-rpath /usr/bin/hwloc-distrib 
<br>
['/usr/lib64']
<br>
The binary or shared library defines `RPATH'. Usually this is a bad thing
<br>
because it hardcodes the path to search libraries and so makes it difficult to
<br>
move libraries around.  Most likely you will find a Makefile with a line like:
<br>
gcc test.o -o test -Wl,--rpath.  Also, sometimes configure scripts provide a
<br>
--disable-rpath flag to avoid this.
<br>
=====================================================
<br>
<p>Check
<br>
<a href="https://fedoraproject.org/wiki/Packaging/Guidelines#Beware_of_Rpath">https://fedoraproject.org/wiki/Packaging/Guidelines#Beware_of_Rpath</a>
<br>
or for example
<br>
<a href="http://wiki.debian.org/RpathIssue">http://wiki.debian.org/RpathIssue</a>
<br>
<p>Basically, I need to get rid of it. One approach is to change it in the source 
<br>
code directly. Could you guys do it?
<br>
<p>I could possibly deal with it when creating a package 
<br>
<p>- either by patching libtool after ./configure step. (Which works nicely)
<br>
%configure
<br>
sed -i 's|^hardcode_libdir_flag_spec=.*|hardcode_libdir_flag_spec=&quot;&quot;|g' libtool
<br>
sed -i 's|^runpath_var=LD_RUN_PATH|runpath_var=DIE_RPATH_DIE|g' libtool
<br>
<p>- or by using chrpath to strip the RPATH header from the generated binary. 
<br>
<p>As I said, patching libtool after ./configure step works just fine (see attached 
<br>
spec file hwloc.spec-patching_libtool). However, I don't like this solution. I 
<br>
believe that fixing this in upstream would be the best solution.
<br>
<p>Please let me know your opinion.
<br>
<p>Thanks
<br>
Jirka
<br>
<p>

<br><hr>
<ul>
<li>text/x-rpm-spec attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0164/hwloc.spec">hwloc.spec</a>
</ul>
<!-- attachment="hwloc.spec" -->
<hr>
<ul>
<li>text/x-rpm-spec attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0164/hwloc.spec-patching_libtool">hwloc.spec-patching_libtool</a>
</ul>
<!-- attachment="hwloc.spec-patching_libtool" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0163.php">Alfredo Buttari: "Re: [hwloc-users] Could not bind on Power6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0169.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
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
