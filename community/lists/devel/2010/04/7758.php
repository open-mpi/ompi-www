<?
$subject_val = "Re: [OMPI devel] Migrate the OpenMPI to VxWorks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 01:24:03 2010" -->
<!-- isoreceived="20100416052403" -->
<!-- sent="Fri, 16 Apr 2010 07:23:57 +0200" -->
<!-- isosent="20100416052357" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Migrate the OpenMPI to VxWorks" -->
<!-- id="20100416052356.GA7547_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DC91CC39-6003-45B7-B8F9-65EA3F184AE4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Migrate the OpenMPI to VxWorks<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 01:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7759.php">张晶: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7759.php">张晶: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Ralph Castain wrote on Fri, Apr 16, 2010 at 05:35:37AM CEST:
<br>
<span class="quotelev1">&gt; I have not personally tried, but I am pretty sure that you can install
</span><br>
<span class="quotelev1">&gt; the autotools under VxWorks - have you tried to download the latest
</span><br>
<span class="quotelev1">&gt; autotool tarballs and build them?
</span><br>
<p>I don't know if that works well out of the box, but if you build any of
<br>
the autotools, run their testsuites and find any failures, then we would
<br>
be happy to hear about them at the respective mailing lists.  If the
<br>
testsuites pass, you can be fairly confident that they work well on your
<br>
system.
<br>
<p>To find out where the OpenMPI configure script hangs, try running it
<br>
after adding 'set -x' as second line to the script.  The output will be
<br>
large, so beware.  If /bin/sh is not a Posix shell, you might want to
<br>
try something like
<br>
&nbsp;&nbsp;CONFIG_SHELL=/bin/bash; export CONFIG_SHELL
<br>
&nbsp;&nbsp;$CONFIG_SHELL ./configure [OPTIONS...]
<br>
<p>instead.
<br>
<p>Hope that helps,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7759.php">张晶: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7759.php">张晶: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
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
