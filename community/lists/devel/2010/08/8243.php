<?
$subject_val = "[OMPI devel] RFC:  Add new Solaris sysinfo component";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  3 07:01:40 2010" -->
<!-- isoreceived="20100803110140" -->
<!-- sent="Tue, 03 Aug 2010 06:59:52 -0400" -->
<!-- isosent="20100803105952" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC:  Add new Solaris sysinfo component" -->
<!-- id="4C57F6A8.6070105_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC:  Add new Solaris sysinfo component<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-03 06:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8244.php">Ralph Castain: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Previous message:</strong> <a href="8242.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8244.php">Ralph Castain: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Reply:</strong> <a href="8244.php">Ralph Castain: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Reply:</strong> <a href="8245.php">Graham, Richard L.: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:  Add new Solaris sysinfo component
<br>
<p>WHY:  To allow OPAL access to chip type and model information when 
<br>
running on Solaris OS.
<br>
<p>WHERE: opal/mca/sysinfo/solaris
<br>
<p>WHEN:  for 1.5.1
<br>
<p>TIMEOUT:  Aug 10, 2010
<br>
<p>-------------------------------------------------------------------------
<br>
<p>MORE DETAILS:
<br>
<p>There is a sysinfo framework that has a component for Linux to expose 
<br>
the chip type and model information to OPAL.  This RFC is to propose the 
<br>
making of a Solaris component to expose the same information.  The Linux 
<br>
component also exposes number of processes and memory amount on a node, 
<br>
however the first instantiation of the Solaris component will not expose 
<br>
this information because it will be easier to do such with hwloc (which 
<br>
has not been integrated to provide such info, yet).
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8243/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8244.php">Ralph Castain: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Previous message:</strong> <a href="8242.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8244.php">Ralph Castain: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Reply:</strong> <a href="8244.php">Ralph Castain: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Reply:</strong> <a href="8245.php">Graham, Richard L.: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
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
