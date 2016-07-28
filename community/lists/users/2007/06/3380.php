<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 21:46:34 2007" -->
<!-- isoreceived="20070606014634" -->
<!-- sent="Tue, 5 Jun 2007 21:46:25 -0400" -->
<!-- isosent="20070606014625" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="72C4EA03-C295-4A0C-9565-1D8E3A6D39FA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52a1b28a0706051351h54849466wa886b4a801d3c53_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 21:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3379.php">smairal_at_[hidden]: "[OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<li><strong>In reply to:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2007, at 4:51 PM, Lie-Quan Lee wrote:
<br>
<p><span class="quotelev1">&gt; Using the OPEN_MPI #define is probably the safest bet to identify the
</span><br>
<span class="quotelev1">&gt; MPI as Open MPI, which then opens the door to using mpi&lt;compiler&gt; --
</span><br>
<span class="quotelev1">&gt; showme to find the proper linker flags.  I would *NOT* recommend hard-
</span><br>
<span class="quotelev1">&gt; coding specific flags just because you know that you're linking
</span><br>
<span class="quotelev1">&gt; against Open MPI (because we can/have changed the flags behind the
</span><br>
<span class="quotelev1">&gt; scenes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think one of the possible solutions would be, in the next MPI  
</span><br>
<span class="quotelev1">&gt; standard (will it come very soon?, or not?),
</span><br>
<p>I would like to hope that MPI 2.1 comes out someday in the not- 
<br>
distant future, but I'm guessing that it'll take quite a while.
<br>
<p><span class="quotelev1">&gt; specify the library (libraries) for mixed language linking.
</span><br>
<p>MPI has traditionally shied away from specifying this kind of thing,  
<br>
instead leaving it to be an implementation-specific detail.
<br>
<p>What, exactly, do you need to do?  Do you need to link an application  
<br>
that uses all 4 of the MPI language bindings?
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
<li><strong>Next message:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3379.php">smairal_at_[hidden]: "[OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<li><strong>In reply to:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
