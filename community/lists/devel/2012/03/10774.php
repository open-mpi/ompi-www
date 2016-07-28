<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 14:17:31 2012" -->
<!-- isoreceived="20120326181731" -->
<!-- sent="Mon, 26 Mar 2012 14:17:28 -0400" -->
<!-- isosent="20120326181728" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  Debugger question" -->
<!-- id="4F70B2B8.4040400_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CB960881.D0A0%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 14:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10775.php">Leif Lindholm: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>In reply to:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff was right in the recollection that this was mainly to test out that 
<br>
accessing the fields in a structure was going to work in the debugger 
<br>
plugin.  If you remove some fields in ompi_win_t you can just remove the 
<br>
corresponding GAP_CHECK line in the test.  If you are removing fields in 
<br>
the middle of the structure then you'll need to adjust the GAP_CHECK 
<br>
lines so fourth parameter is the name of the previous field (or the 
<br>
third parameter in the previous GAP_CHECK).
<br>
<p>--td
<br>
<p><p>On 3/26/2012 1:51 PM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; Thanks for the info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The window's going to be smaller (the predefined code already existed, so
</span><br>
<span class="quotelev1">&gt; it shouldn&#185;t matter that much).  There were a bunch of fields that really
</span><br>
<span class="quotelev1">&gt; should have been in the module structure that was kept in the window
</span><br>
<span class="quotelev1">&gt; previously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/26/12 11:44 AM, &quot;Jeffrey Squyres&quot;&lt;jsquyres_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IIRC, that test is mainly a sanity check to ensure we haven't broken
</span><br>
<span class="quotelev2">&gt;&gt; anything in the overall debugging scheme -- not necessarily that we are
</span><br>
<span class="quotelev2">&gt;&gt; using those specific fields.  (Terry: can you confirm?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you replace one or two of those fields with any other fields on the
</span><br>
<span class="quotelev2">&gt;&gt; new window structure?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 26, 2012, at 1:17 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In ompi/debuggers/predefined_gap_test.c, there's set of tests looking at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all the fields in a window structure.  The other source files in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/debuggers/ don't seem to use most of those fields (since they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; really
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shouldn't be useful to a debugger anyway).  I removed some of the fields
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as part of my MPI-3 RMA changes; is there anything I need to do other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove those GAP_CHECK() calls in the test code?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10774/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10775.php">Leif Lindholm: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>In reply to:</strong> <a href="10773.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
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
