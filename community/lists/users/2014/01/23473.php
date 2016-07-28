<?
$subject_val = "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 10:31:46 2014" -->
<!-- isoreceived="20140127153146" -->
<!-- sent="Mon, 27 Jan 2014 15:31:45 +0000" -->
<!-- isosent="20140127153145" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface" -->
<!-- id="F8EE3CA3-971B-45DF-8172-3DAF03930EB4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52E67470.5080804_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 10:31:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23474.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23472.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23471.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23474.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23474.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We *do* still have a problem in the mpi_f08 module that we probably won't fix before 1.7.4 is released.  Here's the ticket:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4157">https://svn.open-mpi.org/trac/ompi/ticket/4157</a>
<br>
<p>Craig has a suggested patch, but a) I haven't had time to investigate it yet, and b) we believe that, at least so far, this issue only affects the as-yet unreleased gfortran 4.9 compiler.
<br>
<p>All that being said, my limited Fortran knowledge is probably showing here: is this the same issue that you're reporting with the ekopath compiler?
<br>
<p>If so, what version of the ekopath compiler are you using?
<br>
<p><p>On Jan 27, 2014, at 10:00 AM, &#197;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 01/27/2014 03:46 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There has been a LOT of changes in the Fortran since we made rc1; we should probably make rc2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the meantime, can you try with the latest 1.7 nightly snapshot?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/nightly/v1.7/">http://www.open-mpi.org/nightly/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That piece of the code looks the same in that version.
</span><br>
<span class="quotelev1">&gt; And I get the same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23474.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23472.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23471.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23474.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23474.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
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
