<?
$subject_val = "[OMPI devel] ompi_info requesting CPUs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 19 22:12:18 2009" -->
<!-- isoreceived="20091020021218" -->
<!-- sent="Mon, 19 Oct 2009 19:13:29 -0700" -->
<!-- isosent="20091020021329" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi_info requesting CPUs?" -->
<!-- id="4ADD1CC9.7030302_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] ompi_info requesting CPUs?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-19 22:13:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Previous message:</strong> <a href="6972.php">Paul H. Hargrove: "[OMPI devel] Windows FAQ entry out-of-date"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Reply:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Somewhere between r22090 and r22109, ompi_info started (erroneously) 
<br>
requesting CPUs.
<br>
<p>E.g., r22090 is good:
<br>
<p>% ompi_info | grep Open MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.7a1r22090
<br>
<p>But r22109 is bad:
<br>
<p>% ompi_info | grep Open MPI:
<br>
--------------------------------------------------------------------------
<br>
Your job has requested more cpus per process(rank) than there
<br>
are cpus in a socket:
<br>
<p>&nbsp;&nbsp;Cpus/rank: 1
<br>
&nbsp;&nbsp;#cpus/socket: 0
<br>
<p>Please correct one or both of these values and try again.
<br>
--------------------------------------------------------------------------
<br>
A component framework failed to open properly.
<br>
ompi_info will likely not display all configuration information
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.7a1r22109
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Previous message:</strong> <a href="6972.php">Paul H. Hargrove: "[OMPI devel] Windows FAQ entry out-of-date"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Reply:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
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
