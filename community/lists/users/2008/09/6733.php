<?
$subject_val = "[OMPI users] Crash in code using OMPI 1.2.7 - Debugging assistance sought";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 16:03:32 2008" -->
<!-- isoreceived="20080924200332" -->
<!-- sent="Wed, 24 Sep 2008 16:03:27 -0400" -->
<!-- isosent="20080924200327" -->
<!-- name="V. Ram" -->
<!-- email="v_r_959_at_[hidden]" -->
<!-- subject="[OMPI users] Crash in code using OMPI 1.2.7 - Debugging assistance sought" -->
<!-- id="1222286607.28631.1275776603_at_webmail.messagingengine.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Crash in code using OMPI 1.2.7 - Debugging assistance sought<br>
<strong>From:</strong> V. Ram (<em>v_r_959_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 16:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6734.php">Terry Frankcombe: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6732.php">Will Portnoy: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
<p>I have a user running a Fortran code that can be built and run on on
<br>
both 32-bit and 64-bit architectures.  When this code is built for the
<br>
x86-64 machines in our cluster, running on OMPI 1.2.7, it runs fine. 
<br>
However, if we build and run it on 32-bit x86 machines, also running the
<br>
same GNU/Linux distribution and also with OMPI 1.2.7, it crashes with
<br>
errors like:
<br>
<p>[node4][0,1,4][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
<br>
[node3][0,1,3][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed with errno=110
<br>
mca_btl_tcp_frag_recv: readv failed with errno=104
<br>
<p>We have tried different Fortran compilers (both PathScale and gfortran)
<br>
and keep getting these crashes, which occur after varying numbers of
<br>
iterations.  Running on a single node using MPI seems to work OK.
<br>
<p>Are there any suggestions on how to figure out if it's a problem with
<br>
the code or the OMPI installation/software on the system?  We have tried
<br>
&quot;--debug-daemons&quot; with no new/interesting information being revealed. 
<br>
Is there a way to trap segfault messages or more detailed MPI
<br>
transaction information or anything else that could help diagnose this?
<br>
<p>Thanks.
<br>
<pre>
-- 
  V. Ram
  v_r_959_at_[hidden]
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Access all of your messages and folders
                          wherever you are
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6734.php">Terry Frankcombe: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6732.php">Will Portnoy: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
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
