<?
$subject_val = "Re: [hwloc-devel] hwloc + OMPI issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 12 17:23:25 2011" -->
<!-- isoreceived="20111012212325" -->
<!-- sent="Wed, 12 Oct 2011 15:23:17 -0600" -->
<!-- isosent="20111012212317" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc + OMPI issue" -->
<!-- id="4E3E688E-0B9D-49A9-AD54-7C01327C7A13_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E960283.7050400_at_inria.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-12 17:23:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2511.php">Jeff Squyres: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Previous message:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>In reply to:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2511.php">Jeff Squyres: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! I'll add the latter to our code.
<br>
<p>Ralph
<br>
<p>On Oct 12, 2011, at 3:11 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 12/10/2011 22:56, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; One of the OMPI devs found a problem when I upgraded the OMPI SVN trunk to the hwloc 1.2.2ompi version last week that I think I am just now beginning to understand.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brief reminder of our strategy:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - on each compute node, OMPI launches a local &quot;orted&quot; helper daemon
</span><br>
<span class="quotelev2">&gt;&gt; - this orted fork/exec's the local MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To avoid the penalty of each MPI process invoking hwloc discovery more-or-less simultaneously upon startup (which, as we've see on this list before, can be painful when core counts are large), we have the orted do the hwloc discovery, serialize this into XML, and send it to each of its local processes.  The local processes receive this XML and then load it into hwloc and run from there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, it looks like the resulting loaded-from-XML topology-&gt;is_thissystem is set to 0, and therefore functions like hwloc_get_cpubind() actually get wired up to dontget_thisproc_cpubind() (instead of the proper Linux backend, for example).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How do we avoid this?  We need working hwloc functions after loading up an XML topology string.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export HWLOC_THISSYSTEM=1
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; hwloc_topology_set_flags(HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM) between
</span><br>
<span class="quotelev1">&gt; init() and load()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2511.php">Jeff Squyres: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>Previous message:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<li><strong>In reply to:</strong> <a href="2509.php">Brice Goglin: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2511.php">Jeff Squyres: "Re: [hwloc-devel] hwloc + OMPI issue"</a>
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
