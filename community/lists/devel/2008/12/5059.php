<?
$subject_val = "Re: [OMPI devel] RFC: Add ompi-top tool";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 08:20:28 2008" -->
<!-- isoreceived="20081213132028" -->
<!-- sent="Sat, 13 Dec 2008 08:20:21 -0500" -->
<!-- isosent="20081213132021" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add ompi-top tool" -->
<!-- id="B0E9ADC0-80AE-43EE-B735-1FF0CC6653DA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1D46481C-DA8A-4A1C-B401-5F4EBB662812_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add ompi-top tool<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-13 08:20:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5058.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5055.php">Ralph Castain: "[OMPI devel] RFC: Add ompi-top tool"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This works for me.  LAM had a similar tool to query daemons and find  
<br>
the current state of running MPI procs (although it didn't get top- 
<br>
like statistics of the apps).
<br>
<p>On Dec 12, 2008, at 3:20 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WHAT: Add new tool to retrieve/monitor process stats
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WHY: Several of us have had user requests to provide a
</span><br>
<span class="quotelev1">&gt; convenient way of obtaining reports on memory usage and
</span><br>
<span class="quotelev1">&gt; other typical stats from their MPI procs. The notion was to
</span><br>
<span class="quotelev1">&gt; create a tool that would allow a user to specify multiple ranks
</span><br>
<span class="quotelev1">&gt; (which could be on any number of nodes), and have the tool
</span><br>
<span class="quotelev1">&gt; query mpirun to get the info. This would avoid the necessity
</span><br>
<span class="quotelev1">&gt; of users remotely logging into multiple nodes to run top, ps,
</span><br>
<span class="quotelev1">&gt; or other stat tools - and from having to use something heavy
</span><br>
<span class="quotelev1">&gt; like Totalview for such a small purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WHERE: Involves the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. new opal framework &quot;opal/mca/pstat&quot; with components
</span><br>
<span class="quotelev1">&gt;     to support obtaining process stats from the different OS's.
</span><br>
<span class="quotelev1">&gt;     Note that application procs do -not- open this framework.
</span><br>
<span class="quotelev1">&gt;     The open/select functions are -only- in the orte_init procedures
</span><br>
<span class="quotelev1">&gt;     for the HNP and orteds. This is because an app would never
</span><br>
<span class="quotelev1">&gt;     have any reason to call this framework, so there is no reason
</span><br>
<span class="quotelev1">&gt;     to open it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. new &quot;orte-top&quot; tool (also avail as ompi-top) that sends
</span><br>
<span class="quotelev1">&gt;     the top request to the specified mpirun and prints out
</span><br>
<span class="quotelev1">&gt;     the returned data. No fancy screen handling - just basic
</span><br>
<span class="quotelev1">&gt;     printout
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. slight mods to orted_comm to receive and process the
</span><br>
<span class="quotelev1">&gt;     new cmd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. added new cmd flag define to orte/mca/odls/odls_types.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. added new base function to orte/mca/odls/base/ 
</span><br>
<span class="quotelev1">&gt; odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt;     to lookup the specified child and call opal_pstat to get
</span><br>
<span class="quotelev1">&gt;     the info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WHEN: I would like to do this before the holiday break, if
</span><br>
<span class="quotelev1">&gt; possible, given that Sun, Cisco, and IU are all aware and
</span><br>
<span class="quotelev1">&gt; supportive of this change. However, since a number of
</span><br>
<span class="quotelev1">&gt; community members are tied up with the MPI Forum next week,
</span><br>
<span class="quotelev1">&gt; I propose to see if there are any immediate concerns and, if so,
</span><br>
<span class="quotelev1">&gt; wait until after the holiday to more thoroughly discuss them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Dec 23
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5058.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5055.php">Ralph Castain: "[OMPI devel] RFC: Add ompi-top tool"</a>
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
