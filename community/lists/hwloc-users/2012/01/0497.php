<?
$subject_val = "Re: [hwloc-users] Memory replication on a linux NUMA server";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 05:37:32 2012" -->
<!-- isoreceived="20120105103732" -->
<!-- sent="Thu, 05 Jan 2012 11:37:26 +0100" -->
<!-- isosent="20120105103726" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Memory replication on a linux NUMA server" -->
<!-- id="4F057D66.9080305_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F057C93.7060304_at_free.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Memory replication on a linux NUMA server<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 05:37:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0498.php">Andrew Helwer: "[hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0496.php">Fran&#231;ois Galea: "[hwloc-users] Memory replication on a linux NUMA server"</a>
<li><strong>In reply to:</strong> <a href="0496.php">Fran&#231;ois Galea: "[hwloc-users] Memory replication on a linux NUMA server"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Fran&#231;ois,
<br>
<p>Replicate is not supported on Linux (and that is not going to change
<br>
soon unfortunately). For now you should replicate manually.
<br>
<p>Best wishes to you too!
<br>
<p>Brice
<br>
<p><p><p><p>Le 05/01/2012 11:33, Fran&#231;ois Galea a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on a Linux amd64 NUMA server running SUSE Linux
</span><br>
<span class="quotelev1">&gt; Enterprise Server 11 (x86_64).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to know why hwloc_set_area_membind_nodeset always return
</span><br>
<span class="quotelev1">&gt; an error code, and errno is set to ENOSYS, when using the
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_REPLICATE policy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a straightforward way to replicate a piece of data which is
</span><br>
<span class="quotelev1">&gt; not supposed to be written to after it has been replicated ? or do I
</span><br>
<span class="quotelev1">&gt; have to explicitly make per-node copies of that data ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wish all readers my best wishes for this new year.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fran&#231;ois Galea.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0498.php">Andrew Helwer: "[hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0496.php">Fran&#231;ois Galea: "[hwloc-users] Memory replication on a linux NUMA server"</a>
<li><strong>In reply to:</strong> <a href="0496.php">Fran&#231;ois Galea: "[hwloc-users] Memory replication on a linux NUMA server"</a>
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
