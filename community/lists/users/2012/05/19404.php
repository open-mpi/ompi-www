<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 20:21:17 2012" -->
<!-- isoreceived="20120601002117" -->
<!-- sent="Thu, 31 May 2012 18:21:12 -0600" -->
<!-- isosent="20120601002112" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="CAPkgxczwztEpmATosUVxdHpmhHtXK4cut7pCd6cpQjQBE-EcLA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9578E75B-DA39-4B26-9D2A-40671BB03F6A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault with intel compiler<br>
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 20:21:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19405.php">denis cohen: "[OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>In reply to:</strong> <a href="19402.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19407.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19407.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the tip Jeff,
<br>
<p>I wish it was that simple. Unfortunately, this is the only version
<br>
installed. When I added --prefix to the mpiexec command line, I still got a
<br>
seg fault, but without the backtrace. Oh well, I'll keep trying (compiler
<br>
upgrade etc).
<br>
<p>[cl2n022:03057] *** Process received signal ***
<br>
[cl2n022:03057] Signal: Segmentation fault (11)
<br>
[cl2n022:03057] Signal code: Address not mapped (1)
<br>
[cl2n022:03057] Failing at address: 0x10
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file util/nidmap.c at line 776
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file ess_tm_module.c at line 310
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file base/odls_base_default_fns.c at line 2342
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file util/nidmap.c at line 776
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file ess_tm_module.c at line 310
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file base/odls_base_default_fns.c at line 2342
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file util/nidmap.c at line 776
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file ess_tm_module.c at line 310
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file base/odls_base_default_fns.c at line 2342
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file util/nidmap.c at line 776
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file ess_tm_module.c at line 310
<br>
[cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file base/odls_base_default_fns.c at line 2342
<br>
[cl2n010:16470] *** Process received signal ***
<br>
[cl2n010:16470] Signal: Segmentation fault (11)
<br>
[cl2n010:16470] Signal code: Address not mapped (1)
<br>
[cl2n010:16470] Failing at address: 0x10
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 32 with PID 3057 on node cl2n022 exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p>On Thu, May 31, 2012 at 2:54 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This type of error usually means that you are inadvertently mixing
</span><br>
<span class="quotelev1">&gt; versions of Open MPI (e.g., version A.B.C on one node and D.E.F on another
</span><br>
<span class="quotelev1">&gt; node).
</span><br>
<p><p><p><p><pre>
-- 
Edmund Sumbar
University of Alberta
+1 780 492 9360
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19404/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19405.php">denis cohen: "[OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>In reply to:</strong> <a href="19402.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19407.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19407.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
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
