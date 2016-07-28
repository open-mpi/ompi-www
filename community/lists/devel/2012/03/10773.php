<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 13:52:01 2012" -->
<!-- isoreceived="20120326175201" -->
<!-- sent="Mon, 26 Mar 2012 17:51:35 +0000" -->
<!-- isosent="20120326175135" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  Debugger question" -->
<!-- id="CB960881.D0A0%bwbarre_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2219B615-0F31-4D30-8167-E86847620761_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  Debugger question<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 13:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10774.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>Previous message:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
<li><strong>In reply to:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10774.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>Reply:</strong> <a href="10774.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info.
<br>
<p>The window's going to be smaller (the predefined code already existed, so
<br>
it shouldn&#185;t matter that much).  There were a bunch of fields that really
<br>
should have been in the module structure that was kept in the window
<br>
previously.
<br>
<p>Brian
<br>
<p>On 3/26/12 11:44 AM, &quot;Jeffrey Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I don't think so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;IIRC, that test is mainly a sanity check to ensure we haven't broken
</span><br>
<span class="quotelev1">&gt;anything in the overall debugging scheme -- not necessarily that we are
</span><br>
<span class="quotelev1">&gt;using those specific fields.  (Terry: can you confirm?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Could you replace one or two of those fields with any other fields on the
</span><br>
<span class="quotelev1">&gt;new window structure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mar 26, 2012, at 1:17 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In ompi/debuggers/predefined_gap_test.c, there's set of tests looking at
</span><br>
<span class="quotelev2">&gt;&gt; all the fields in a window structure.  The other source files in
</span><br>
<span class="quotelev2">&gt;&gt; ompi/debuggers/ don't seem to use most of those fields (since they
</span><br>
<span class="quotelev2">&gt;&gt;really
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't be useful to a debugger anyway).  I removed some of the fields
</span><br>
<span class="quotelev2">&gt;&gt; as part of my MPI-3 RMA changes; is there anything I need to do other
</span><br>
<span class="quotelev2">&gt;&gt;than
</span><br>
<span class="quotelev2">&gt;&gt; remove those GAP_CHECK() calls in the test code?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10774.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>Previous message:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
<li><strong>In reply to:</strong> <a href="10772.php">Jeffrey Squyres: "Re: [OMPI devel] Debugger question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10774.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>Reply:</strong> <a href="10774.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
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
