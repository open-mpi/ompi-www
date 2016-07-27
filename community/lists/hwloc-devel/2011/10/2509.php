<?
$subject_val = "Re: [hwloc-devel] hwloc + OMPI issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 12 17:11:38 2011" -->
<!-- isoreceived="20111012211138" -->
<!-- sent="Wed, 12 Oct 2011 23:11:31 +0200" -->
<!-- isosent="20111012211131" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc + OMPI issue" -->
<!-- id="4E960283.7050400_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FCF5B69A-1D00-40C8-A42C-AA7B5B709B6B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc + OMPI issue<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-12 17:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2510.php">Ralph Castain: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Previous message:</strong> <a href="2508.php">Jeff Squyres: "[hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>In reply to:</strong> <a href="2508.php">Jeff Squyres: "[hwloc-devel] hwloc + OMPI issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2510.php">Ralph Castain: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Reply:</strong> <a href="2510.php">Ralph Castain: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Reply:</strong> <a href="2511.php">Jeff Squyres: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/10/2011 22:56, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; One of the OMPI devs found a problem when I upgraded the OMPI SVN trunk to the hwloc 1.2.2ompi version last week that I think I am just now beginning to understand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brief reminder of our strategy:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - on each compute node, OMPI launches a local &quot;orted&quot; helper daemon
</span><br>
<span class="quotelev1">&gt; - this orted fork/exec's the local MPI processes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To avoid the penalty of each MPI process invoking hwloc discovery more-or-less simultaneously upon startup (which, as we've see on this list before, can be painful when core counts are large), we have the orted do the hwloc discovery, serialize this into XML, and send it to each of its local processes.  The local processes receive this XML and then load it into hwloc and run from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it looks like the resulting loaded-from-XML topology-&gt;is_thissystem is set to 0, and therefore functions like hwloc_get_cpubind() actually get wired up to dontget_thisproc_cpubind() (instead of the proper Linux backend, for example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do we avoid this?  We need working hwloc functions after loading up an XML topology string.
</span><br>
<p>export HWLOC_THISSYSTEM=1
<br>
or
<br>
hwloc_topology_set_flags(HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM) between
<br>
init() and load()
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2510.php">Ralph Castain: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Previous message:</strong> <a href="2508.php">Jeff Squyres: "[hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>In reply to:</strong> <a href="2508.php">Jeff Squyres: "[hwloc-devel] hwloc + OMPI issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2510.php">Ralph Castain: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Reply:</strong> <a href="2510.php">Ralph Castain: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Reply:</strong> <a href="2511.php">Jeff Squyres: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
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
