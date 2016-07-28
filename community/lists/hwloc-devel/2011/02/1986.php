<?
$subject_val = "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 18:02:39 2011" -->
<!-- isoreceived="20110222230239" -->
<!-- sent="Wed, 23 Feb 2011 00:02:31 +0100" -->
<!-- isosent="20110222230231" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1" -->
<!-- id="20110222230231.GV5240_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1379854448.175226.1298414971736.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 18:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1987.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1985.php">Jeff Squyres: "[hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1985.php">Jeff Squyres: "[hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1987.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1987.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Tue 22 Feb 2011 23:49:31 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Brad Benton from IBM is reporting a problem with hwloc 1.1.1 on PPC64.  See the details here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/2732">https://svn.open-mpi.org/trac/ompi/ticket/2732</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The printf that he's referring to is coming directly from hwloc.  I can certainly suppress this printf in OMPI's copy of hwloc, but it does seem to be weird.  He also includes the native lstopo output, which shows the same printf noise.
</span><br>
<p>Note the &quot;/* TODO: how to report? */&quot; comment in the code: we definitely
<br>
_want_ to get users to see the warning and report it.  It means the
<br>
kernel is giving contradictory information, and hwloc just happened to
<br>
take the first one and not the other.
<br>
<p>Brad, could you post the output of the hwloc-gather-topology script from
<br>
hwloc?  That's permit to know why the warning shows up.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1987.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1985.php">Jeff Squyres: "[hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1985.php">Jeff Squyres: "[hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1987.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1987.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
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
