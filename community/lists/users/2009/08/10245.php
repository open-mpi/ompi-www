<?
$subject_val = "Re: [OMPI users] init failing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 09:24:39 2009" -->
<!-- isoreceived="20090807132439" -->
<!-- sent="Fri, 7 Aug 2009 09:24:34 -0400" -->
<!-- isosent="20090807132434" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] init failing" -->
<!-- id="E8B3280F-633C-4A39-BC09-409C2C7A8ABE_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1248768431.4204.18.camel_at_eddy" -->
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
<strong>Subject:</strong> Re: [OMPI users] init failing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 09:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10244.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10116.php">Dominik T&#225;borsk&#253;: "[OMPI users] init failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10260.php">Dominik Táborský: "Re: [OMPI users] init failing"</a>
<li><strong>Reply:</strong> <a href="10260.php">Dominik Táborský: "Re: [OMPI users] init failing"</a>
<li><strong>Reply:</strong> <a href="10336.php">Dominik Táborský: "Re: [OMPI users] init failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm way behind on my mail; apologies for the delay in replying.
<br>
<p>Did you figure this out?
<br>
<p>As a pure guess, it sounds like you have a heterogeneous setup --  
<br>
nodes have different distros and/or versions.  As such, your glibc's  
<br>
may be different, etc.  In such situations, it is definitely  
<br>
recommended to have a separate installation of Open MPI *on each node*  
<br>
(i.e., compiled/built for that distro/version/platform).
<br>
<p>If you're copying the files from system A to system B and A and B are  
<br>
different distros/versions, it could be a good reason why it fails to  
<br>
work.
<br>
<p>Hope that helps.
<br>
<p><p>On Jul 28, 2009, at 4:07 AM, Dominik T&#225;borsk&#253; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build my own system for my nodes - minimalistic. I  
</span><br>
<span class="quotelev1">&gt; tried
</span><br>
<span class="quotelev1">&gt; to make things easy so I didn't even recompile openMPI for it, I just
</span><br>
<span class="quotelev1">&gt; copied everything from my Ubuntu installation (I know, it's very  
</span><br>
<span class="quotelev1">&gt; dirty,
</span><br>
<span class="quotelev1">&gt; but I stick to KISS :) ). Before, things just worked perfectly with  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; libraries. I only recompile executable binaries, not Glibc (not  
</span><br>
<span class="quotelev1">&gt; openMPI,
</span><br>
<span class="quotelev1">&gt; I also didn't succeed compiling openMPI but that's a different story).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, as I keep trying to run Hello world! program, I keep getting the
</span><br>
<span class="quotelev1">&gt; same error message every time. Everything in the system is fine from  
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev1">&gt; point of view. The error message is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [user:24307] mca: base: components_open: component timer / linux open
</span><br>
<span class="quotelev1">&gt; function failed
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   opal_carto_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [user:24307] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file ../../../orte/runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; [user:24307] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file ../../../orte/orted/orted_main.c at line 315
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried googling and searching the archives, nothing gave me a hint.
</span><br>
<span class="quotelev1">&gt; What might be missing? Should I really try to recompile openMPI? What
</span><br>
<span class="quotelev1">&gt; needs to be on/off in the kernel? Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bremby
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
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10244.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10116.php">Dominik T&#225;borsk&#253;: "[OMPI users] init failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10260.php">Dominik Táborský: "Re: [OMPI users] init failing"</a>
<li><strong>Reply:</strong> <a href="10260.php">Dominik Táborský: "Re: [OMPI users] init failing"</a>
<li><strong>Reply:</strong> <a href="10336.php">Dominik Táborský: "Re: [OMPI users] init failing"</a>
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
