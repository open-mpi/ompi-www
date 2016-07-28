<?
$subject_val = "Re: [OMPI devel] [OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 18:13:34 2007" -->
<!-- isoreceived="20071127231334" -->
<!-- sent="Wed, 28 Nov 2007 00:13:29 +0100" -->
<!-- isosent="20071127231329" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Memory manager" -->
<!-- id="1196205209.18085.411.camel_at_fkpc167.phc.chalmers.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="35D9D42D-750A-4BF9-8AC2-3EA5E64244FD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Memory manager<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-27 18:13:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2668.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="2666.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] OSL system outage"</a>
<li><strong>In reply to:</strong> <a href="2663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2668.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="2668.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p><span class="quotelev2">&gt; &gt; I posted this to the devel list the other day, but it raised no
</span><br>
<span class="quotelev2">&gt; &gt; responses.  Maybe people will have more to say here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry Terry; many of us were at the SC conference last week, and this  
</span><br>
<span class="quotelev1">&gt; week is short because of the US holiday.  Some of the inbox got  
</span><br>
<span class="quotelev1">&gt; dropped/delayed as a result...
</span><br>
<p>'Tis OK.  Beggars can't be choosers!  ;-)
<br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev2">&gt; &gt; Because of this I can't reduce the problem to a small testcase, and so
</span><br>
<span class="quotelev2">&gt; &gt; have not included any code at this stage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ugh.  Heisenbugs are the worst.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried with a memory checking debugger, such as valgrind, or a  
</span><br>
<span class="quotelev1">&gt; parallel debugger?  Is there a chance that there's a simple errant  
</span><br>
<span class="quotelev1">&gt; posted receive (perhaps in a race condition) that is unexpectedly  
</span><br>
<span class="quotelev1">&gt; receiving into the Bug's memory location when you don't expect it?
</span><br>
<p>I have zero experience with valgrind.  But I downloaded it and ran my
<br>
&quot;minimal&quot; case (about 1000 lines + libraries!) with it.  Thus I found
<br>
one uninitialised variable and need to go away and check my code
<br>
carefully now.  Correcting this in the most obvious, un-thought-through
<br>
way makes my Bug go away.  (But then so does changing the code in other,
<br>
unexecuted sections!)
<br>
<p>However, what I get out of valgrind now is:
<br>
<p>[tjf_at_fkpc167 Minimal]$ valgrind --leak-check=yes ./nnh
<br>
==20671== Memcheck, a memory error detector.
<br>
==20671== Copyright (C) 2002-2007, and GNU GPL'd, by Julian Seward et
<br>
al.
<br>
==20671== Using LibVEX rev 1732, a library for dynamic binary
<br>
translation.
<br>
==20671== Copyright (C) 2004-2007, and GNU GPL'd, by OpenWorks LLP.
<br>
==20671== Using valgrind-3.2.3, a dynamic binary instrumentation
<br>
framework.
<br>
==20671== Copyright (C) 2000-2007, and GNU GPL'd, by Julian Seward et
<br>
al.
<br>
==20671== For more details, rerun with: -v
<br>
==20671== 
<br>
==20671== Conditional jump or move depends on uninitialised value(s)
<br>
==20671==    at 0x40152B1: (within /lib/ld-2.5.so)
<br>
==20671==    by 0x4005278: (within /lib/ld-2.5.so)
<br>
==20671==    by 0x4007CFD: (within /lib/ld-2.5.so)
<br>
==20671==    by 0x400318A: (within /lib/ld-2.5.so)
<br>
==20671==    by 0x4013D9A: (within /lib/ld-2.5.so)
<br>
==20671==    by 0x40012C6: (within /lib/ld-2.5.so)
<br>
==20671==    by 0x4000A67: (within /lib/ld-2.5.so)
<br>
<p>...&lt;snip&gt;...
<br>
<p>==20671== Conditional jump or move depends on uninitialised value(s)
<br>
==20671==    at 0x40152B1: (within /lib/ld-2.5.so)
<br>
==20671==    by 0x400A289: (within /lib/ld-2.5.so)
<br>
==20671==    by 0x6A42E4D: (within /lib/libc-2.5.so)
<br>
==20671==    by 0x59AE0E3: (within /lib/libdl-2.5.so)
<br>
==20671==    by 0x400D725: (within /lib/ld-2.5.so)
<br>
==20671==    by 0x59AE4EC: (within /lib/libdl-2.5.so)
<br>
==20671==    by 0x59AE099: dlsym (in /lib/libdl-2.5.so)
<br>
==20671==    by 0x57610FB: vm_sym
<br>
(in /usr/local/lib/libopen-pal.so.0.0.0)
<br>
==20671==    by 0x575E29E: lt_dlsym
<br>
(in /usr/local/lib/libopen-pal.so.0.0.0)
<br>
==20671==    by 0x57666EF: open_component
<br>
(in /usr/local/lib/libopen-pal.so.0.0.0)
<br>
==20671==    by 0x576711B: mca_base_component_find
<br>
(in /usr/local/lib/libopen-pal.so.0.0.0)
<br>
==20671==    by 0x5767A9F: mca_base_components_open
<br>
(in /usr/local/lib/libopen-pal.so.0.0.0)
<br>
<p>...&lt;snip&gt;...
<br>
<p>&lt;my code output, no valgrind errors within it&gt;
<br>
<p>==20671== 
<br>
==20671== ERROR SUMMARY: 102 errors from 24 contexts (suppressed: 0 from
<br>
0)
<br>
==20671== malloc/free: in use at exit: 0 bytes in 0 blocks.
<br>
==20671== malloc/free: 0 allocs, 0 frees, 0 bytes allocated.
<br>
==20671== For counts of detected errors, rerun with: -v
<br>
==20671== All heap blocks were freed -- no leaks are possible.
<br>
<p><p>This looks particularly broken!
<br>
<p>I've just run valgrind on another (serial) piece of code on this machine
<br>
and got three of the unitialised jumps from within ld-2.5.so, virtually
<br>
identical to the first three from this MPI code.  Of the 24 from the MPI
<br>
code, those seeming to originate from within OpenMPI are particularly
<br>
worrying.
<br>
<p>Am I panicking for no reason, have I likely got a bad build or is
<br>
OpenMPI broken beyond repair?!!
<br>
<p><p><span class="quotelev2">&gt; &gt; If I run the code with mpirun -np 1 the problem goes away.  So one  
</span><br>
<span class="quotelev2">&gt; &gt; could
</span><br>
<span class="quotelev2">&gt; &gt; presumably simply say &quot;always run it with mpirun.&quot;  But if this is
</span><br>
<span class="quotelev2">&gt; &gt; required, why does OpenMPI not detect it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what you're asking -- Open MPI does not *require* you to  
</span><br>
<span class="quotelev1">&gt; run with mpirun...
</span><br>
<p>That's exactly what I was asking.  Cheers!
<br>
<p>Ciao
<br>
Terry
<br>
<p><pre>
-- 
Dr Terry Frankcombe
Physical Chemistry, Department of Chemistry
G&#195;&#182;teborgs Universitet
SE-412 96 G&#195;&#182;teborg Sweden
Ph: +46 76 224 0887   Skype: terry.frankcombe
&lt;terry_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2668.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="2666.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] OSL system outage"</a>
<li><strong>In reply to:</strong> <a href="2663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2668.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="2668.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
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
