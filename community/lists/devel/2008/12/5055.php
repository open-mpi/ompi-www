<?
$subject_val = "[OMPI devel] RFC: Add ompi-top tool";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 15:20:13 2008" -->
<!-- isoreceived="20081212202013" -->
<!-- sent="Fri, 12 Dec 2008 13:20:05 -0700" -->
<!-- isosent="20081212202005" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add ompi-top tool" -->
<!-- id="1D46481C-DA8A-4A1C-B401-5F4EBB662812_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Add ompi-top tool<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 15:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5056.php">George Bosilca: "Re: [OMPI devel] BML problem?"</a>
<li><strong>Previous message:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>Reply:</strong> <a href="5059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add ompi-top tool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----------------------------------------------------------------------------
<br>
WHAT: Add new tool to retrieve/monitor process stats
<br>
<p>----------------------------------------------------------------------------
<br>
WHY: Several of us have had user requests to provide a
<br>
convenient way of obtaining reports on memory usage and
<br>
other typical stats from their MPI procs. The notion was to
<br>
create a tool that would allow a user to specify multiple ranks
<br>
(which could be on any number of nodes), and have the tool
<br>
query mpirun to get the info. This would avoid the necessity
<br>
of users remotely logging into multiple nodes to run top, ps,
<br>
or other stat tools - and from having to use something heavy
<br>
like Totalview for such a small purpose.
<br>
<p>----------------------------------------------------------------------------
<br>
WHERE: Involves the following:
<br>
<p>1. new opal framework &quot;opal/mca/pstat&quot; with components
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to support obtaining process stats from the different OS's.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note that application procs do -not- open this framework.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The open/select functions are -only- in the orte_init procedures
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for the HNP and orteds. This is because an app would never
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;have any reason to call this framework, so there is no reason
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to open it.
<br>
<p>2. new &quot;orte-top&quot; tool (also avail as ompi-top) that sends
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the top request to the specified mpirun and prints out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the returned data. No fancy screen handling - just basic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printout
<br>
<p>3. slight mods to orted_comm to receive and process the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new cmd
<br>
<p>4. added new cmd flag define to orte/mca/odls/odls_types.h
<br>
<p>5. added new base function to orte/mca/odls/base/odls_base_default_fns.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to lookup the specified child and call opal_pstat to get
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the info
<br>
<p>----------------------------------------------------------------------------
<br>
WHEN: I would like to do this before the holiday break, if
<br>
possible, given that Sun, Cisco, and IU are all aware and
<br>
supportive of this change. However, since a number of
<br>
community members are tied up with the MPI Forum next week,
<br>
I propose to see if there are any immediate concerns and, if so,
<br>
wait until after the holiday to more thoroughly discuss them.
<br>
<p>----------------------------------------------------------------------------
<br>
TIMEOUT: Dec 23
<br>
<p>----------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5056.php">George Bosilca: "Re: [OMPI devel] BML problem?"</a>
<li><strong>Previous message:</strong> <a href="5054.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>Reply:</strong> <a href="5059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add ompi-top tool"</a>
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
