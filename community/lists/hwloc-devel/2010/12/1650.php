<?
$subject_val = "Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 13:12:43 2010" -->
<!-- isoreceived="20101201181243" -->
<!-- sent="Wed, 1 Dec 2010 19:12:38 +0100" -->
<!-- isosent="20101201181238" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor" -->
<!-- id="20101201181238.GP6183_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1069504386.158460.1291194741799.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 13:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1651.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2884)"</a>
<li><strong>Previous message:</strong> <a href="1649.php">Brice Goglin: "Re: [hwloc-devel] &#180;&#240;&#184;&#180;: Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>Maybe in reply to:</strong> <a href="1647.php">Wei Lin: "[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Wei Lin, le Wed 01 Dec 2010 10:12:21 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; The following docs from Intel give details about x2APIC:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.intel.com/Assets/PDF/appnote/241618.pdf">http://www.intel.com/Assets/PDF/appnote/241618.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.intel.com/Assets/pdf/manual/318148.pdf">http://www.intel.com/Assets/pdf/manual/318148.pdf</a>
</span><br>
<p>Thanks for the pointers.  I have added support in the trunk.  As said on
<br>
the list, this is only used on freebsd ATM actually.  hwloc 1.1 will
<br>
already report proper topology on Linux systems since it gets topology
<br>
information from the kernel itself.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1651.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2884)"</a>
<li><strong>Previous message:</strong> <a href="1649.php">Brice Goglin: "Re: [hwloc-devel] &#180;&#240;&#184;&#180;: Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>Maybe in reply to:</strong> <a href="1647.php">Wei Lin: "[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
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
