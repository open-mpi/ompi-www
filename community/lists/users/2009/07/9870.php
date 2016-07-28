<?
$subject_val = "Re: [OMPI users] any way to get serial time on head node?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 10:50:04 2009" -->
<!-- isoreceived="20090707145004" -->
<!-- sent="Tue, 7 Jul 2009 10:50:00 -0400" -->
<!-- isosent="20090707145000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] any way to get serial time on head node?" -->
<!-- id="FBF83558-A904-461F-9A62-EA3A1A6E2D12_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1246898926.559.63.camel_at_corn.betterworld.us" -->
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
<strong>Subject:</strong> Re: [OMPI users] any way to get serial time on head node?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 10:50:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9871.php">Justin: "[OMPI users] Segfault when using valgrind"</a>
<li><strong>Previous message:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9841.php">Ross Boylan: "[OMPI users] any way to get serial time on head node?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably want to use an MPI tracing tool that can break down the  
<br>
times spent inside and outside of the MPI library.  User vs. system  
<br>
time, as you noted, can get quite blurred.
<br>
<p><p>On Jul 6, 2009, at 12:48 PM, Ross Boylan wrote:
<br>
<p><span class="quotelev1">&gt; Let total time on my slot 0 process be S+C+B+I
</span><br>
<span class="quotelev1">&gt; = serial computations + communication + busy wait + idle
</span><br>
<span class="quotelev1">&gt; Is there a way to find out S?
</span><br>
<span class="quotelev1">&gt; S+C would probably also be useful, since I assume C is low.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that I = 0, roughly, and B is big.  Since B is big, the
</span><br>
<span class="quotelev1">&gt; usual process timing methods don't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If B all went to &quot;system&quot; as opposed to &quot;user&quot; time I could use the
</span><br>
<span class="quotelev1">&gt; latter, but I don't think that's the case.  Can anyone confirm that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If S is big, I might be able to gain by parallelizing in a different
</span><br>
<span class="quotelev1">&gt; way.  By S I mean to refer to serial computation that is part of my
</span><br>
<span class="quotelev1">&gt; algorithm, rather than the technical fact that all the computation is
</span><br>
<span class="quotelev1">&gt; serial on a given slot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running R/RMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Ross
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9871.php">Justin: "[OMPI users] Segfault when using valgrind"</a>
<li><strong>Previous message:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9841.php">Ross Boylan: "[OMPI users] any way to get serial time on head node?"</a>
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
