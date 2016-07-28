<?
$subject_val = "[hwloc-users] hwloc sockets support on solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 15:57:03 2010" -->
<!-- isoreceived="20100623195703" -->
<!-- sent="Wed, 23 Jun 2010 15:56:35 -0400" -->
<!-- isosent="20100623195635" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc sockets support on solaris" -->
<!-- id="4C2266F3.9090608_at_oracle.com" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc sockets support on solaris<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 15:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Previous message:</strong> <a href="0210.php">Brice Goglin: "Re: [hwloc-users] hwloc on cray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Reply:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does hwloc think it supports binding processes to sockets or multiple 
<br>
cpus?  I am asking because I believe there are no current Solaris 
<br>
accessors that support this (processor_bind only binds a pid or a set of 
<br>
pids to a *single* processor). 
<br>
<p>I bring this up because in testing OMPI with hwloc support it looks like 
<br>
-bind-to-socket is acting like -bind-to-core on Solaris.  I believe the 
<br>
issue is hwloc should be returning an error to tell OMPI it cannot 
<br>
bind-to-socket or multiple cpus at that.
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0211/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-users/att-0211/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-users/att-0211/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Previous message:</strong> <a href="0210.php">Brice Goglin: "Re: [hwloc-users] hwloc on cray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Reply:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
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
