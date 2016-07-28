<?
$subject_val = "Re: [OMPI users] segfault on finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 04:00:47 2009" -->
<!-- isoreceived="20090928080047" -->
<!-- sent="Mon, 28 Sep 2009 10:02:15 +0200" -->
<!-- isosent="20090928080215" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault on finalize" -->
<!-- id="4AC06D87.5090902_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7A4B5188-A6C9-4BBD-9BA0-D9ABA2FB25E6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault on finalize<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 04:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10791.php">Aniruddha Marathe: "[OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Previous message:</strong> <a href="10789.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are right. An update fixes the problem.
<br>
<p>Sorry.
<br>
<p>Thomas
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It's a fairly strange place to get an error -- 
</span><br>
<span class="quotelev1">&gt; mca_base_param_finalize() is where we're tidying up command line 
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was some memory bugs that have been fixed since 21970.  Can you 
</span><br>
<span class="quotelev1">&gt; update?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2009, at 9:49 AM, Thomas Ropars wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using r21970 of the trunk on Linux  2.6.18-3-amd64 and gcc version
</span><br>
<span class="quotelev2">&gt;&gt; 4.2.3 (Debian 4.2.3-2).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I compile open mpi with the default options, it works.
</span><br>
<span class="quotelev2">&gt;&gt; But if I use --with-platform=optimized option, then I get a segfault for
</span><br>
<span class="quotelev2">&gt;&gt; every program I run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==3073==  Access not within mapped region at address 0x30
</span><br>
<span class="quotelev2">&gt;&gt; ==3073==    at 0x535544D: mca_base_param_finalize (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/tropars/open-mpi/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3073==    by 0x5339D55: opal_finalize_util (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/tropars/open-mpi/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3073==    by 0x4E5A228: ompi_mpi_finalize (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/tropars/open-mpi/install/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3073==    by 0x400BF2: main (in /home/tropars/open-mpi/tests/ring)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10791.php">Aniruddha Marathe: "[OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Previous message:</strong> <a href="10789.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
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
