<?
$subject_val = "[OMPI devel] RFC: openib BTL failover";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 17:23:33 2010" -->
<!-- isoreceived="20100602212333" -->
<!-- sent="Wed, 02 Jun 2010 17:22:00 -0400" -->
<!-- isosent="20100602212200" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: openib BTL failover" -->
<!-- id="4C06CB78.6020902_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: openib BTL failover<br>
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 17:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8044.php">KHALDI Dounia: "[OMPI devel] mpi_comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="8042.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: New PML called &quot;bfo&quot; (Btl Fail Over) that supports failover between
<br>
two or more openib BTLs.  New configurable code in openib BTL that works
<br>
with the bfo to do failover.  Note this only works when we have two or more
<br>
openib BTLs.  This does not failover to another BTL, like tcp.
<br>
<p>TO CONFIGURE:
<br>
--enable-openib-failover
<br>
<p>TO RUN:
<br>
--mca pml bfo
<br>
<p>TIMEOUT:
<br>
June 16, 2010
<br>
<p>ADDITIONAL DETAILS:
<br>
The design relies on the BTL to call back into the PML with each
<br>
fragment that fails so the PML can decide what needs to be done.
<br>
There is no additional message tracking or software acknowledges
<br>
added so that we can have minimal impact on latency.  Testing has
<br>
shown no measurable affect.
<br>
<p>When errors are detected on the BTL, it is no longer used.  No effort
<br>
is made to bring it back if the problems get corrected.  If it gets
<br>
fixed before the next job starts, then it will be used by the next
<br>
job.
<br>
<p>Under normal conditions, these changes have no effect whatsover on the
<br>
trunk as the bfo PML is never selected, and the failover support is
<br>
not configured into the openib BTL.  Every effort was made to minimize
<br>
the changes in the openib BTL.  The main changes are contained in two
<br>
new files that only get compiled when the -enable-openib-failover flag
<br>
is set.  The other changes consist of about 75 new lines in various
<br>
openib BTL files.
<br>
<p>The bitbucket version is at:
<br>
<a href="http://bitbucket.org/rolfv/rfc-failover">http://bitbucket.org/rolfv/rfc-failover</a>
<br>
<p>Here are the files that would be added/changed.
<br>
<p>BTL LAYER
<br>
M       ompi/mca/btl/btl.h
<br>
M       ompi/mca/btl/base/btl_base_mca.c
<br>
M       ompi/mca/btl/openib/btl_openib_component.c
<br>
M       ompi/mca/btl/openib/btl_openib.c
<br>
M       ompi/mca/btl/openib/btl_openib.h
<br>
M       ompi/mca/btl/openib/btl_openib_endpoint.h
<br>
M       ompi/mca/btl/openib/btl_openib_mca.c
<br>
A       ompi/mca/btl/openib/btl_openib_failover.c
<br>
A       ompi/mca/btl/openib/btl_openib_failover.h
<br>
M       ompi/mca/btl/openib/btl_openib_frag.h
<br>
M       ompi/mca/btl/openib/Makefile.am
<br>
M       ompi/config/ompi_check_openib.m4
<br>
<p>PML LAYER
<br>
A       ompi/mca/pml/bfo
<br>
A       ompi/mca/pml/bfo/pml_bfo_comm.h
<br>
A       ompi/mca/pml/bfo/pml_bfo_sendreq.c
<br>
A       ompi/mca/pml/bfo/pml_bfo_isend.c
<br>
A       ompi/mca/pml/bfo/pml_bfo_component.c
<br>
A       ompi/mca/pml/bfo/Makefile.in
<br>
A       ompi/mca/pml/bfo/help-mpi-pml-bfo.txt
<br>
A       ompi/mca/pml/bfo/pml_bfo_recvfrag.h
<br>
A       ompi/mca/pml/bfo/pml_bfo_progress.c
<br>
A       ompi/mca/pml/bfo/pml_bfo_sendreq.h
<br>
A       ompi/mca/pml/bfo/pml_bfo_component.h
<br>
A       ompi/mca/pml/bfo/pml_bfo_failover.c
<br>
A       ompi/mca/pml/bfo/pml_bfo_recvreq.c
<br>
A       ompi/mca/pml/bfo/pml_bfo_irecv.c
<br>
A       ompi/mca/pml/bfo/pml_bfo_failover.h
<br>
A       ompi/mca/pml/bfo/pml_bfo_recvreq.h
<br>
A       ompi/mca/pml/bfo/pml_bfo_iprobe.c
<br>
A       ompi/mca/pml/bfo/pml_bfo.c
<br>
A       ompi/mca/pml/bfo/post_configure.sh
<br>
A       ompi/mca/pml/bfo/pml_bfo_hdr.h
<br>
A       ompi/mca/pml/bfo/pml_bfo_rdmafrag.c
<br>
A       ompi/mca/pml/bfo/pml_bfo_rdma.c
<br>
A       ompi/mca/pml/bfo/configure.params
<br>
A       ompi/mca/pml/bfo/pml_bfo.h
<br>
A       ompi/mca/pml/bfo/pml_bfo_rdmafrag.h
<br>
A       ompi/mca/pml/bfo/pml_bfo_rdma.h
<br>
A       ompi/mca/pml/bfo/.windows
<br>
A       ompi/mca/pml/bfo/Makefile.am
<br>
A       ompi/mca/pml/bfo/pml_bfo_comm.c
<br>
A       ompi/mca/pml/bfo/pml_bfo_start.c
<br>
A       ompi/mca/pml/bfo/pml_bfo_recvfrag.c
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8044.php">KHALDI Dounia: "[OMPI devel] mpi_comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="8042.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
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
