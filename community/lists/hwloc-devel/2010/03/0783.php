<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 07:40:05 2010" -->
<!-- isoreceived="20100322114005" -->
<!-- sent="Mon, 22 Mar 2010 12:40:00 +0100" -->
<!-- isosent="20100322114000" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840" -->
<!-- id="20100322113959.GF5203_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="36ca99e91003220420u276ece0cna0e0022c35e108c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 07:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0784.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0782.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<li><strong>In reply to:</strong> <a href="0782.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert Wesarg, le Mon 22 Mar 2010 12:20:58 +0100, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; -static hwloc_cpuset_t
</span><br>
<span class="quotelev2">&gt; &gt; -hwloc_aix_get_thisproc_cpubind(hwloc_topology_t topology, int policy)
</span><br>
<span class="quotelev2">&gt; &gt; +static int
</span><br>
<span class="quotelev2">&gt; &gt; +hwloc_aix_get_thisproc_cpubind(hwloc_topology_t topology, hwloc_cpuset_t hwloc_set, int policy)
</span><br>
<span class="quotelev2">&gt; &gt; &#160;{
</span><br>
<span class="quotelev2">&gt; &gt; &#160; rsid_t who = { .at_pid = getpid() };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This one came to my intention while looking over the commit, but
</span><br>
<span class="quotelev1">&gt; shouldn't this be topology-&gt;pid as of r1837?
</span><br>
<p>It could, but it should not (yet).  setpid is supposed to change the
<br>
behavior of all functions, not just cpu bindings.  For now, this is only
<br>
supported on Linux, other OSes will return ENOSYS.  I do not know how
<br>
to make the AIX backend use the personality of another process for the
<br>
topology detection, that is why setpid is not (yet) enabled on it.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0784.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0782.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<li><strong>In reply to:</strong> <a href="0782.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
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
