<?
$subject_val = "[hwloc-devel] Minor issue with the man page";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 03:48:04 2013" -->
<!-- isoreceived="20130509074804" -->
<!-- sent="Thu, 9 May 2013 09:47:59 +0200" -->
<!-- isosent="20130509074759" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] Minor issue with the man page" -->
<!-- id="CALT_uBRWxJgnqsNp8br-9Rb5kJxXs-KV8iZ7BK8fcH_GnZVfPQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Minor issue with the man page<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-09 03:47:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3730.php">Brice Goglin: "Re: [hwloc-devel] Minor issue with the man page"</a>
<li><strong>Previous message:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3730.php">Brice Goglin: "Re: [hwloc-devel] Minor issue with the man page"</a>
<li><strong>Reply:</strong> <a href="3730.php">Brice Goglin: "Re: [hwloc-devel] Minor issue with the man page"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>rpmlint reports a minor typo in the man page for hwloc 1.7
<br>
<p><p>$rpmlint -i /home/jhladky/rpmbuild/RPMS/x86_64/hwloc-1.7-0.fc18.x86_64.rpm
<br>
hwloc.x86_64: W: manual-page-warning /usr/share/man/man1/hwloc-info.1.gz
<br>
151: warning: macro `.' not defined
<br>
This man page may contain problems that can cause it not to be formatted as
<br>
intended.
<br>
<p><p>&nbsp;$ zcat hwloc-info.1.gz | sed -ne 151p
<br>
&nbsp;&nbsp;&nbsp;&nbsp;..\&quot; **************************
<br>
<p>There's one extra &quot;.&quot; at the beginning of that line.
<br>
<p>Patch file is attached.
<br>
<p>Thanks
<br>
Jirka
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3729/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3729/hwloc-1.7-manpage.patch">hwloc-1.7-manpage.patch</a>
</ul>
<!-- attachment="hwloc-1.7-manpage.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3730.php">Brice Goglin: "Re: [hwloc-devel] Minor issue with the man page"</a>
<li><strong>Previous message:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3730.php">Brice Goglin: "Re: [hwloc-devel] Minor issue with the man page"</a>
<li><strong>Reply:</strong> <a href="3730.php">Brice Goglin: "Re: [hwloc-devel] Minor issue with the man page"</a>
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
