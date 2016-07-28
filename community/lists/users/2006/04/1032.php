<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 11:48:40 2006" -->
<!-- isoreceived="20060412154840" -->
<!-- sent="Wed, 12 Apr 2006 11:48:35 -0400 (EDT)" -->
<!-- isosent="20060412154835" -->
<!-- name="Hugh Merz" -->
<!-- email="merz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel EM64T Compiler error on Opteron" -->
<!-- id="Pine.LNX.4.63.0604121142320.3905_at_porcupine.cita.utoronto.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF671769_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Hugh Merz (<em>merz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-12 11:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1033.php">Troy Telford: "[OMPI users] SilverStorm IB"</a>
<li><strong>Previous message:</strong> <a href="1031.php">liuliang_at_[hidden]: "[OMPI users] running a job problem"</a>
<li><strong>In reply to:</strong> <a href="1029.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; FWIW, I know that we saw similar issues with the Intel 8.1 series
</span><br>
<span class="quotelev1">&gt; (segv's during compilation).  Since we are not doing anything illegal in
</span><br>
<span class="quotelev1">&gt; terms of C++, we already treated this as a compiler bug that we couldn't
</span><br>
<span class="quotelev1">&gt; really do much about.  Plus, we [perhaps incorrectly] assumed that most
</span><br>
<span class="quotelev1">&gt; sites using the Intel compilers would be using more recent versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Troy seems to confirm that later builds of the 8.1 series seem to have
</span><br>
<span class="quotelev1">&gt; fixed the problem -- can you try upgrading?
</span><br>
<p>I tried the most recent v8.1 compiler, Build 20060202 Package ID: l_cce_pc_8.1.034
<br>
<p>But it still core dumps:
<br>
<p>icc: error: /scratch/merz/intel_cce_80/bin/mcpcom: core dumped
<br>
icc: error: Fatal error in /scratch/merz/intel_cce_80/bin/mcpcom, terminated by unknown signal(139)
<br>
compilation aborted for cmd_line.c (code 1)
<br>
<p>I'm running on Opteron 254s, Fedora Core 4.  I can get by with building it
<br>
using gcc, so there's no urgency.
<br>
<p>Thanks!
<br>
<p>Hugh
<br>
<p><span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Troy Telford
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, April 11, 2006 4:14 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Intel EM64T Compiler error on Opteron
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 11 Apr 2006 13:48:43 -0600, Troy Telford
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ttelford_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have compiled Open MPI (on an Opteron) with the Intel 9 EM64T
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's been a while since I've used the 8.1 series, but I'll
</span><br>
<span class="quotelev2">&gt;&gt; give it a shot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Intel 8.1 and tell you what happens.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can confirm that I'm able to compile Open MPI 1.0.2 on my systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other info:
</span><br>
<span class="quotelev2">&gt;&gt; * Opteron 244 CPUs
</span><br>
<span class="quotelev2">&gt;&gt; * SLES 9 SP3 x86_64
</span><br>
<span class="quotelev2">&gt;&gt; * Intel(R) C Compiler for Intel(R) EM64T-based applications, Version
</span><br>
<span class="quotelev2">&gt;&gt; 8.1    Build 20050628
</span><br>
<span class="quotelev2">&gt;&gt; * Intel(R) Fortran Compiler for Intel(R) EM64T-based
</span><br>
<span class="quotelev2">&gt;&gt; applications, Version
</span><br>
<span class="quotelev2">&gt;&gt; 8.1    Build 20050517
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Troy Telford
</span><br>
<span class="quotelev2">&gt;&gt; Linux Networx
</span><br>
<span class="quotelev2">&gt;&gt; ttelford_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (801) 649-1356
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1033.php">Troy Telford: "[OMPI users] SilverStorm IB"</a>
<li><strong>Previous message:</strong> <a href="1031.php">liuliang_at_[hidden]: "[OMPI users] running a job problem"</a>
<li><strong>In reply to:</strong> <a href="1029.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
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
