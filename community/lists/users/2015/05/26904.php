<?
$subject_val = "[OMPI users] 1.8.5, mxm, and a spurious '-L' flag";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 22 18:07:22 2015" -->
<!-- isoreceived="20150522220722" -->
<!-- sent="Fri, 22 May 2015 16:07:20 -0600" -->
<!-- isosent="20150522220720" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="[OMPI users] 1.8.5, mxm, and a spurious '-L' flag" -->
<!-- id="555FA898.6020607_at_lanl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] 1.8.5, mxm, and a spurious '-L' flag<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-22 18:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26903.php">Joshua Ladd: "[OMPI users] Fwd: job post"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm getting a spurious '-L' flag when I have mxm installed in 
<br>
system-space (/usr/lib64/libmxm.so) which is causing an error at link 
<br>
time during make:
<br>
<p>...output snipped...
<br>
/bin/sh ../../../../libtool  --tag=CC   --mode=link gcc -std=gnu99 -O3 
<br>
-DNDEBUG -I/opt/panfs/include -finline-functions -fno-strict-aliasing 
<br>
-pthread -module -avoid-version   -o libmca_mtl_mxm.la  mtl_mxm.lo 
<br>
mtl_mxm_cancel.lo mtl_mxm_component.lo mtl_mxm_endpoint.lo 
<br>
mtl_mxm_probe.lo mtl_mxm_recv.lo mtl_mxm_send.lo -lmxm -L -lrt -lm -lutil
<br>
libtool: link: require no space between `-L' and `-lrt'
<br>
make[2]: *** [libmca_mtl_mxm.la] Error 1
<br>
make[2]: Leaving directory 
<br>
`/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi/mca/mtl/mxm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>If I I use --with-mxm=no, then this error doesn't occur (as expected as 
<br>
the mxm component isn't touched). Has anyone run in to this before?
<br>
<p>Here is my configure line:
<br>
<p>./configure --disable-silent-rules 
<br>
--with-platform=contrib/platform/lanl/toss/optimized-panasas --prefix=...
<br>
<p>I wonder if there is an empty variable that should contain the directory 
<br>
libmxm is in somewhere in configure since no directory is passed to 
<br>
--with-mxm which is then paired with a &quot;-L&quot;. I think I'll go through the 
<br>
configure script while waiting to see if anyone else has run in to this.
<br>
<p>Thank you for any and all help,
<br>
David
<br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26903.php">Joshua Ladd: "[OMPI users] Fwd: job post"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
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
