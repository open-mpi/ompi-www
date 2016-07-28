<?
$subject_val = "[OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  6 04:38:53 2012" -->
<!-- isoreceived="20120606083853" -->
<!-- sent="Wed, 6 Jun 2012 10:38:21 +0200 (CEST)" -->
<!-- isosent="20120606083821" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;-library=stlport4&amp;quot; neccessary for Sun C" -->
<!-- id="201206060838.q568cLUj021546_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-06 04:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19457.php">TERRY DONTJE: "Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<li><strong>Previous message:</strong> <a href="19455.php">Reuti: "Re: [OMPI users] Directed to Undirected Graph"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19457.php">TERRY DONTJE: "Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<li><strong>Reply:</strong> <a href="19457.php">TERRY DONTJE: "Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I compiled &quot;openmpi-1.6&quot; on &quot;Solaris 10 sparc&quot;, &quot;Solaris 10 x86&quot;,
<br>
and Linux (openSuSE 12.1) with &quot;Sun C 5.12&quot;. Today I searched my
<br>
log-files for &quot;WARNING&quot; and found the following message.
<br>
<p>WARNING: **************************************************************
<br>
WARNING: *** VampirTrace cannot be built due to your STL appears to
<br>
WARNING: *** be broken.
<br>
WARNING: *** Please try again re-configuring Open MPI with using
<br>
WARNING: *** the STLport4 by adding the compiler flag -library=stlport4
<br>
WARNING: *** to CXXFLAGS.
<br>
WARNING: *** Pausing to give you time to read this message...
<br>
WARNING: **************************************************************
<br>
<p>With this recommendation I could configure and build VampirTrace
<br>
support. Perhaps somebody can add this option as default to
<br>
&quot;configure&quot; for &quot;Sun C 5.12&quot; on Solaris and Linux.
<br>
<p><p>By the way it wasn't enough to &quot;enhance&quot; my old built because
<br>
&quot;ompi_info&quot; didn't know about VampirTrace in that case.
<br>
<p>tyr fd1026 101 cd /usr/local/openmpi-1.6_64_cc/bin
<br>
tyr bin 102 ls -l ompi_info
<br>
-rwxr-xr-x    1 root     root       184392 Jun  6 08:54 ompi_info
<br>
tyr bin 103 ./ompi_info | grep &quot;Built on&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Tue May 29 15:45:13 CEST 2012
<br>
tyr bin 104 ./ompi_info | grep Vampir
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VampirTrace support: no
<br>
tyr bin 105 ls -l vtwrapper 
<br>
-rwxr-xr-x    1 root     root       342816 Jun  6 08:54 vtwrapper
<br>
<p>After rebuilding everything from scratch &quot;ompi_info&quot; worked as
<br>
expected.
<br>
<p>tyr bin 106 ./ompi_info | grep Vampir
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VampirTrace support: yes
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19457.php">TERRY DONTJE: "Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<li><strong>Previous message:</strong> <a href="19455.php">Reuti: "Re: [OMPI users] Directed to Undirected Graph"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19457.php">TERRY DONTJE: "Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<li><strong>Reply:</strong> <a href="19457.php">TERRY DONTJE: "Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
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
