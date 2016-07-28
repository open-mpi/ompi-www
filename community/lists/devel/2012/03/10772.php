<?
$subject_val = "Re: [OMPI devel] Debugger question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 13:44:38 2012" -->
<!-- isoreceived="20120326174438" -->
<!-- sent="Mon, 26 Mar 2012 13:44:32 -0400" -->
<!-- isosent="20120326174432" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Debugger question" -->
<!-- id="2219B615-0F31-4D30-8167-E86847620761_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB9600BA.D098%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Debugger question<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 13:44:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>Previous message:</strong> <a href="10771.php">Barrett, Brian W: "[OMPI devel] Debugger question"</a>
<li><strong>In reply to:</strong> <a href="10771.php">Barrett, Brian W: "[OMPI devel] Debugger question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>Reply:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think so.
<br>
<p>IIRC, that test is mainly a sanity check to ensure we haven't broken anything in the overall debugging scheme -- not necessarily that we are using those specific fields.  (Terry: can you confirm?)
<br>
<p>Could you replace one or two of those fields with any other fields on the new window structure?
<br>
<p><p>On Mar 26, 2012, at 1:17 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In ompi/debuggers/predefined_gap_test.c, there's set of tests looking at
</span><br>
<span class="quotelev1">&gt; all the fields in a window structure.  The other source files in
</span><br>
<span class="quotelev1">&gt; ompi/debuggers/ don't seem to use most of those fields (since they really
</span><br>
<span class="quotelev1">&gt; shouldn't be useful to a debugger anyway).  I removed some of the fields
</span><br>
<span class="quotelev1">&gt; as part of my MPI-3 RMA changes; is there anything I need to do other than
</span><br>
<span class="quotelev1">&gt; remove those GAP_CHECK() calls in the test code?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>Previous message:</strong> <a href="10771.php">Barrett, Brian W: "[OMPI devel] Debugger question"</a>
<li><strong>In reply to:</strong> <a href="10771.php">Barrett, Brian W: "[OMPI devel] Debugger question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>Reply:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
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
