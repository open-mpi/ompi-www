<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 15:33:30 2007" -->
<!-- isoreceived="20070608193330" -->
<!-- sent="Fri, 8 Jun 2007 13:33:25 -0600" -->
<!-- isosent="20070608193325" -->
<!-- name="Paul Henning" -->
<!-- email="phenning_at_[hidden]" -->
<!-- subject="[OMPI devel] Patch to fix cross-compile failure" -->
<!-- id="A87F9060-D8FD-43FE-8A21-925EB732D728_at_lanl.gov" -->
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
<strong>From:</strong> Paul Henning (<em>phenning_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 15:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1650.php">Markus Daene: "[OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1648.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Reboot schedule of all the OSL server machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1653.php">Jeff Squyres: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<li><strong>Reply:</strong> <a href="1653.php">Jeff Squyres: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attached a patch relative to the revision 14962 version of
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi/mca/io/romio/romio/configure.in
<br>
<p>that fixes configuration errors when doing a cross-compile.  It  
<br>
simply changes some tests for the number of parameters to aio_suspend  
<br>
and aio_write from AC_TRY_RUN to AC_TRY_COMPILE.
<br>
<p>Paul
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1649/romio_configure.in.diff">romio_configure.in.diff</a>
</ul>
<!-- attachment="romio_configure.in.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1650.php">Markus Daene: "[OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1648.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Reboot schedule of all the OSL server machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1653.php">Jeff Squyres: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<li><strong>Reply:</strong> <a href="1653.php">Jeff Squyres: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
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
