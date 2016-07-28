<?
$subject_val = "Re: [OMPI users] Symbol not found: _evsignal_base";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 19:27:35 2011" -->
<!-- isoreceived="20110525232735" -->
<!-- sent="Wed, 25 May 2011 19:27:29 -0400" -->
<!-- isosent="20110525232729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Symbol not found: _evsignal_base" -->
<!-- id="29701869-01F3-408A-AAD6-2CCB9B9A0AD1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTikc5Lewcra6RSVcdZgwvbB2HG6Ecw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Symbol not found: _evsignal_base<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 19:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16632.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16630.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16619.php">charles reid: "[OMPI users] Symbol not found: _evsignal_base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Reply:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like your installation is busted somehow.  Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On May 24, 2011, at 4:05 PM, charles reid wrote:
<br>
<p><span class="quotelev1">&gt; Hi -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to compile a simple hello world program with mpicc, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat test.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   printf (&quot;Hello World!\n&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but I'm seeing this issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ~/pkg/openmpi/1.4.3_bigmac/bin/mpicc test.c
</span><br>
<span class="quotelev1">&gt; dyld: Symbol not found: _evsignal_base
</span><br>
<span class="quotelev1">&gt;   Referenced from: /uufs/chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /uufs/chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt; Trace/BPT trap
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found this previous thread, <a href="http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/13033">http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/13033</a> , which suggested adding the installation directory's lib/ to LD_LIBRARY_PATH would fix things, but it did not:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ export LD_LIBRARY_PATH=&quot;${HOME}/pkg/openmpi/1.4.3_bigmac/lib:${LD_LIBRARY_PATH}&quot;; ~/pkg/openmpi/1.4.3_bigmac/bin/mpicc test.c
</span><br>
<span class="quotelev1">&gt; dyld: Symbol not found: _evsignal_base
</span><br>
<span class="quotelev1">&gt;   Referenced from: /uufs/chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /uufs/chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt; Trace/BPT trap
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions on what I might be doing wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Charles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16632.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16630.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16619.php">charles reid: "[OMPI users] Symbol not found: _evsignal_base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Reply:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
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
