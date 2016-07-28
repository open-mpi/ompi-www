<?
$subject_val = "Re: [OMPI devel] Allgather failures?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 00:27:09 2009" -->
<!-- isoreceived="20090729042709" -->
<!-- sent="Tue, 28 Jul 2009 23:26:58 -0500" -->
<!-- isosent="20090729042658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Allgather failures?" -->
<!-- id="DE2BE93A-DE78-4A2B-9C2B-CDD9B462B168_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E33BFBCC-46A8-4D22-BCF8-C930C61BD2DF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Allgather failures?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 00:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6538.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6536.php">Ralph Castain: "[OMPI devel] Allgather failures?"</a>
<li><strong>In reply to:</strong> <a href="6536.php">Ralph Castain: "[OMPI devel] Allgather failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These are the MPI_COMPLEX failures that I reported to George last week.
<br>
<p><p>On Jul 28, 2009, at 8:06 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was reviewing the trunk MTT results tonight and found a ton of
</span><br>
<span class="quotelev1">&gt; failures in the Intel test suite on IU's odin cluster. That cluster -
</span><br>
<span class="quotelev1">&gt; usually- runs pretty clean, so I took a closer look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I found was that the errors were all typified by the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPITEST_INFO (         0): Starting test MPI_Allgather()
</span><br>
<span class="quotelev1">&gt; [odin001:31038] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [odin001:31038] Signal: Floating point exception (8)
</span><br>
<span class="quotelev1">&gt; [odin001:31038] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev1">&gt; [odin001:31038] Failing at address: 0x804c8c9
</span><br>
<span class="quotelev1">&gt; [odin001:31039] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [odin001:31039] Signal: Floating point exception (8)
</span><br>
<span class="quotelev1">&gt; [odin001:31039] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev1">&gt; [odin001:31039] Failing at address: 0x804c8c9
</span><br>
<span class="quotelev1">&gt; [odin001:31040] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [odin001:31040] Signal: Floating point exception (8)
</span><br>
<span class="quotelev1">&gt; [odin001:31040] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev1">&gt; [odin001:31040] Failing at address: 0x804c8c9
</span><br>
<span class="quotelev1">&gt; [odin001:31038] [ 0] [0xffffe600]
</span><br>
<span class="quotelev1">&gt; [odin001:31038] [ 1] src/MPI_Allgather_f(MAIN__+0x2db) [0x804b30f]
</span><br>
<span class="quotelev1">&gt; [odin001:31038] [ 2] src/MPI_Allgather_f(main+0x27) [0x805aa57]
</span><br>
<span class="quotelev1">&gt; [odin001:31038] [ 3] /lib/libc.so.6(__libc_start_main+0xdc)  
</span><br>
<span class="quotelev1">&gt; [0xf7c32dec]
</span><br>
<span class="quotelev1">&gt; [odin001:31038] [ 4] src/MPI_Allgather_f [0x804af81]
</span><br>
<span class="quotelev1">&gt; [odin001:31038] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, a divide-by-zero floating point exception on a
</span><br>
<span class="quotelev1">&gt; collective test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas what might be causing this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6538.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6536.php">Ralph Castain: "[OMPI devel] Allgather failures?"</a>
<li><strong>In reply to:</strong> <a href="6536.php">Ralph Castain: "[OMPI devel] Allgather failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
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
