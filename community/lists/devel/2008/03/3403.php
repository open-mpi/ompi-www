<?
$subject_val = "Re: [OMPI devel] 3 test failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 17:02:12 2008" -->
<!-- isoreceived="20080306220212" -->
<!-- sent="Thu, 6 Mar 2008 17:01:48 -0500" -->
<!-- isosent="20080306220148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 3 test failures" -->
<!-- id="2CE94EE5-638C-41D1-9E8C-32A5EE983028_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080306215434.GG25893_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 3 test failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 17:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3404.php">Jeff Squyres: "Re: [OMPI devel] t_win failures if openib btl is not loaded"</a>
<li><strong>Previous message:</strong> <a href="3402.php">Ralf Wildenhues: "[OMPI devel] 3 test failures"</a>
<li><strong>In reply to:</strong> <a href="3402.php">Ralf Wildenhues: "[OMPI devel] 3 test failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope, you're not off-topic at all.  This has been a debate among us  
<br>
developers for a few days now... :-)
<br>
<p>The issue is that these tests are now doing something that assume that  
<br>
OMPI has been installed.  We've sent an RFC around to the developers  
<br>
proposing how to fix it (easy solution: just remove these tests from  
<br>
&quot;make check&quot;), and have a longer-term fix filed as a trac ticket  
<br>
(allow carto to fail gracefully when there are no components  
<br>
available: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1232">https://svn.open-mpi.org/trac/ompi/ticket/1232</a>).
<br>
<p><p>On Mar 6, 2008, at 4:54 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've just stumbled over three testsuite failures on GNU/Linux x86,
</span><br>
<span class="quotelev1">&gt; with an out-of-tree build (mkdir build; cd build;
</span><br>
<span class="quotelev1">&gt; ../ompi_trunk/configure -C).  Hope I'm not completely off-topic  
</span><br>
<span class="quotelev1">&gt; here...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PASS: ompi_bitmap
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;    opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;    help-opal-runtime.txt
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Failure : Comparison failure
</span><br>
<span class="quotelev1">&gt; Expected result: 0
</span><br>
<span class="quotelev1">&gt; Test result: -13
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_hash_table_t (1 of 1 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_hash_table
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;    opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;    help-opal-runtime.txt
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Failure : Comparison failure
</span><br>
<span class="quotelev1">&gt; Expected result: 0
</span><br>
<span class="quotelev1">&gt; Test result: -13
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: (null) (1 of 1 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_list
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;    opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;    help-opal-runtime.txt
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Failure : Comparison failure
</span><br>
<span class="quotelev1">&gt; Expected result: 0
</span><br>
<span class="quotelev1">&gt; Test result: -13
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_value_array_t (1 of 1 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_value_array
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3404.php">Jeff Squyres: "Re: [OMPI devel] t_win failures if openib btl is not loaded"</a>
<li><strong>Previous message:</strong> <a href="3402.php">Ralf Wildenhues: "[OMPI devel] 3 test failures"</a>
<li><strong>In reply to:</strong> <a href="3402.php">Ralf Wildenhues: "[OMPI devel] 3 test failures"</a>
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
