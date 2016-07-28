<?
$subject_val = "Re: [OMPI devel] [OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 11:28:04 2007" -->
<!-- isoreceived="20071128162804" -->
<!-- sent="Wed, 28 Nov 2007 11:27:47 -0500" -->
<!-- isosent="20071128162747" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Memory manager" -->
<!-- id="A274A083-E949-402A-8845-FCE68DDA0DBD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1196205209.18085.411.camel_at_fkpc167.phc.chalmers.se" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 11:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2669.php">Jeff Squyres: "[OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="2667.php">Terry Frankcombe: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="2667.php">Terry Frankcombe: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 27, 2007, at 5:13 PM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; ==20671== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==20671==    at 0x40152B1: (within /lib/ld-2.5.so)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x400A289: (within /lib/ld-2.5.so)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x6A42E4D: (within /lib/libc-2.5.so)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x59AE0E3: (within /lib/libdl-2.5.so)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x400D725: (within /lib/ld-2.5.so)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x59AE4EC: (within /lib/libdl-2.5.so)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x59AE099: dlsym (in /lib/libdl-2.5.so)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x57610FB: vm_sym
</span><br>
<span class="quotelev1">&gt; (in /usr/local/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x575E29E: lt_dlsym
</span><br>
<span class="quotelev1">&gt; (in /usr/local/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x57666EF: open_component
</span><br>
<span class="quotelev1">&gt; (in /usr/local/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x576711B: mca_base_component_find
</span><br>
<span class="quotelev1">&gt; (in /usr/local/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==20671==    by 0x5767A9F: mca_base_components_open
</span><br>
<span class="quotelev1">&gt; (in /usr/local/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks particularly broken!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've just run valgrind on another (serial) piece of code on this  
</span><br>
<span class="quotelev1">&gt; machine
</span><br>
<span class="quotelev1">&gt; and got three of the unitialised jumps from within ld-2.5.so,  
</span><br>
<span class="quotelev1">&gt; virtually
</span><br>
<span class="quotelev1">&gt; identical to the first three from this MPI code.  Of the 24 from the  
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; code, those seeming to originate from within OpenMPI are particularly
</span><br>
<span class="quotelev1">&gt; worrying.
</span><br>
<p>These are usually false positives -- in my [not comprehensive]  
<br>
experience, they are typically the results of valgrind trying to  
<br>
analyze optimized code where all the debugging information is not  
<br>
available (and therefore it generates false positives).  For example,  
<br>
the one snipit above is from a supposedly uninitialized variable in  
<br>
the system call dlsym().  I strongly suspect that this is not a real  
<br>
problem.
<br>
<p>As for valgrind not finding your real problem -- bummer.  It can't  
<br>
always find everything.  :-(  Perhaps try electric fence and/or other  
<br>
kinds of &quot;watch&quot; actions to see when exactly variables change (that  
<br>
might give insight into whether a buffer is being overflowed, etc.)...?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2669.php">Jeff Squyres: "[OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="2667.php">Terry Frankcombe: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="2667.php">Terry Frankcombe: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
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
