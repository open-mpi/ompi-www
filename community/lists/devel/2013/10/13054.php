<?
$subject_val = "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 11:49:44 2013" -->
<!-- isoreceived="20131004154944" -->
<!-- sent="Sat, 5 Oct 2013 00:49:26 +0900" -->
<!-- isosent="20131004154926" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?" -->
<!-- id="20131005004926.beace2e6b7f00cb21aed397b_at_nifty.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="524E5547.6020006_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?<br>
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 11:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>Previous message:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>In reply to:</strong> <a href="13046.php">Christopher Samuel: "[OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13096.php">Christopher Samuel: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>Reply:</strong> <a href="13096.php">Christopher Samuel: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is a bug in the test program, test/datatype/ddt_raw.c, and it was
<br>
fixed at r24328 in trunk.
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/24328">https://svn.open-mpi.org/trac/ompi/changeset/24328</a>
<br>
<p>I've confirmed the failure occurs with plain v1.6.5 and it doesn't
<br>
occur with patched v1.6.5.
<br>
<p>Thanks,
<br>
KAWASHIMA Takahiro
<br>
<p><span class="quotelev1">&gt; Not sure if this is important, or expected, but I ran a make check out
</span><br>
<span class="quotelev1">&gt; of interest after seeing recent emails and saw the final one of these
</span><br>
<span class="quotelev1">&gt; tests be reported as &quot;NOT PASSED&quot; (it seems to be the only failure).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No idea if this is important or not.  The text I see is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  * TEST UPPER MATRIX
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; test upper matrix
</span><br>
<span class="quotelev1">&gt; complete raw in 7 microsec
</span><br>
<span class="quotelev1">&gt; decode [NOT PASSED]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This happens on both our Nehalem and SandyBridge clusters and we are
</span><br>
<span class="quotelev1">&gt; building with the system GCC.  I've attached the full log from our
</span><br>
<span class="quotelev1">&gt; Nehalem cluster (RHEL 6.4).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our configure script is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BASE=`basename $PWD | sed -e s,-,/,`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module purge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/${BASE} --with-slurm --with-openib \
</span><br>
<span class="quotelev1">&gt;             --enable-static  --enable-shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make -j
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm away on leave next week (first break for a year, yay!) but back
</span><br>
<span class="quotelev1">&gt; the week after..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>Previous message:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>In reply to:</strong> <a href="13046.php">Christopher Samuel: "[OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13096.php">Christopher Samuel: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>Reply:</strong> <a href="13096.php">Christopher Samuel: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
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
