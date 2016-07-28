<?
$subject_val = "[OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 06:00:24 2008" -->
<!-- isoreceived="20081017100024" -->
<!-- sent="Fri, 17 Oct 2008 06:00:18 -0400" -->
<!-- isosent="20081017100018" -->
<!-- name="Teng Lin" -->
<!-- email="teng.lin_at_[hidden]" -->
<!-- subject="[OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c" -->
<!-- id="549268DF-4F9B-4D18-BBE8-64F6D025E269_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c<br>
<strong>From:</strong> Teng Lin (<em>teng.lin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 06:00:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7009.php">Simone Giannerini: "[OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7007.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<li><strong>Reply:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>We have bundled Open MPI with our product and shipped it to the  
<br>
customer. According to <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a> 
<br>
,
<br>
<p>Below is the command we used to launch MPI program:
<br>
env OPAL_PREFIX=/path/to/openmpi \
<br>
/path/to/openmpi/bin//orterun --prefix /path/to/openmpi -x PATH -x  
<br>
LD_LIBRARY_PATH -x OPAL_PREFIX -np 2 --host host1,host2 ring_c
<br>
<p>The interesting fact is that it always works on csh/tcsh. But  quite a  
<br>
few users told us that they runs into below errors:
<br>
<p>[compute-28-1.local:11174] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init_stage1.c at line 182
<br>
------------------------------------------------------------------------
<br>
<pre>
--
Sorry!  You were supposed to get help about:
   orte_init:startup:internal-failure
from the file:
   help-orte-runtime
But I couldn't find any file matching that name.  Sorry!
------------------------------------------------------------------------
--
[compute-28-1.local:11174] [NO-NAME] ORTE_ERROR_LOG: Not found in file
runtime/orte_system_init.c at line 42
[compute-28-1.local:11174] [NO-NAME] ORTE_ERROR_LOG: Not found in file
runtime/orte_init.c at line 52
------------------------------------------------------------------------
--
Sorry!  You were supposed to get help about:
   orted:init-failure
from the file:
   help-orted.txt
But I couldn't find any file matching that name.  Sorry!
Jeff did mention in <a href="http://www.open-mpi.org/community/lists/users/2008/09/6582.php">http://www.open-mpi.org/community/lists/users/2008/09/6582.php</a> 
  that OPAL_PREFIX was propagated for him automatically. I bet Jeff  
uses csh/tcsh.
Anyway, it can be traced back to how the daemon is launched.
sh/bash:
[xxxxx:25369] pls:rsh: executing: (//usr/bin/ssh) /usr/bin/ssh xxxxx
OPAL_PREFIX=/opt/openmpi-1.2.4 ;
PATH=/opt/openmpi-1.2.4/bin:$PATH
; export PATH ;
LD_LIBRARY_PATH=/opt/openmpi-1.2.4/lib:$LD_LIBRARY_PATH ; export  
LD_LIBRARY_PATH ;
csh/tcsh:
[xxxxx:09886] pls:rsh: executing: (//usr/bin/ssh) /usr/bin/ssh xxxxx
setenv OPAL_PREFIX /opt/openmpi-1.2.4 ;
It seems to work after I patched pls_rsh_module.c
--- pls_rsh_module.c.orig	2008-10-16 17:15:32.000000000 -0400
+++ pls_rsh_module.c	2008-10-16 17:15:51.000000000 -0400
@@ -989,7 +989,7 @@
                                   &quot;%s/%s/%s&quot;,
                                   (opal_prefix != NULL ?  
&quot;OPAL_PREFIX=&quot; : &quot;&quot;),
                                   (opal_prefix != NULL ?  
opal_prefix : &quot;&quot;),
-                                  (opal_prefix != NULL ? &quot; ;&quot; : &quot;&quot;),
+                                  (opal_prefix != NULL ? &quot; ; export  
OPAL_PREFIX ; &quot; : &quot;&quot;),
                                   prefix_dir, bin_base,
                                   prefix_dir, lib_base,
                                   prefix_dir, bin_base,
Another workaround is to add
export OPAL_PREFIX
into $HOME/.bashrc.
Jeff, is this a bug in the code? Or  there is a reason that  
OPAL_PREFIX is not exported for sh/bash?
Teng
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7009.php">Simone Giannerini: "[OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7007.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<li><strong>Reply:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
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
