<?
$subject_val = "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 07:19:24 2009" -->
<!-- isoreceived="20090123121924" -->
<!-- sent="Fri, 23 Jan 2009 13:19:19 +0100 (CET)" -->
<!-- isosent="20090123121919" -->
<!-- name="Andrea Iob" -->
<!-- email="andrea_iob_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined" -->
<!-- id="698801.19904.qm_at_web23001.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="33552EC4-3C28-4071-9638-2E0D18152244_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined<br>
<strong>From:</strong> Andrea Iob (<em>andrea_iob_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 07:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7786.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>In reply to:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7791.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Reply:</strong> <a href="7791.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What files did you change?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The files I changed are:
<br>
<p>openmpi-1.3/ompi/contrib/vt/vt/vtlib/vt_otf_gen.c 
<br>
openmpi-1.3/ompi/contrib/vt/vt/vtlib/vt_thrd.c
<br>
openmpi-1.3/opal/util/path.c
<br>
openmpi-1.3/orte/mca/plm/rsh/plm_rsh_component.c
<br>
openmpi-1.3/orte/tools/orterun/debuggers.c
<br>
<p>I've attached a patch with the changes I made.
<br>
<p>Andrea
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7785/icc-10.1.021-fix.patch">1631551799-icc-10.1.021-fix.patch</a>
</ul>
<!-- attachment="icc-10.1.021-fix.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7786.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>In reply to:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7791.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Reply:</strong> <a href="7791.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
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
