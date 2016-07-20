<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 08:33:11 2012" -->
<!-- isoreceived="20120313123311" -->
<!-- sent="Tue, 13 Mar 2012 13:33:05 +0100" -->
<!-- isosent="20120313123305" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="20120313123305.GG4466_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1852426210.76130.1331639165162.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problems on SMP with 48 cores<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 08:33:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0575.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0575.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0575.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0576.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hartmut Kaiser, le Tue 13 Mar 2012 12:46:05 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Trying to use hwloc on a 48 bit core machine (Windows x64) causes problems,
</span><br>
<span class="quotelev1">&gt; though. Any information requests for processing units above number 32 return
</span><br>
<span class="quotelev1">&gt; garbage (see also the attached output of 'lstopo -of txt'). 
</span><br>
<p>Ok, so it didn't magically work.
<br>
<p>Unfortunately I have no access to a windows machine with that many
<br>
cores, so I could not test &gt;sizeof(unsigned long) cores detection
<br>
myself, it's thus not very surprising that it does not work.
<br>
<p><span class="quotelev1">&gt; I tried to recompile the library using MSVC which would allow me to debug
</span><br>
<span class="quotelev1">&gt; the issue, but after several hours of tweaking I gave up. As it turns out
</span><br>
<span class="quotelev1">&gt; the code base is everything but portable, which is really unfortunate for a
</span><br>
<span class="quotelev1">&gt; library which is supposed to be cross platform. 
</span><br>
<p>I'm afraid to have to answer that MSVC does everything but respecting
<br>
standards, even when they are more that 10 years old. The hwloc code
<br>
compiles as such on a variety of unix compilers, and we didn't need many
<br>
tweaks for that. The mingw toolchain saves a lot of such concerns, so I
<br>
can only advise to use it.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0575.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0575.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0575.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0576.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
