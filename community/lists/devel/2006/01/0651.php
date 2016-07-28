<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 17:53:02 2006" -->
<!-- isoreceived="20060104225302" -->
<!-- sent="Wed, 4 Jan 2006 15:52:57 -0700" -->
<!-- isosent="20060104225257" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="configure issue" -->
<!-- id="E325A069-C086-489C-B897-8C502DC62253_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-04 17:52:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">Greg Watson: "Re:  configure issue"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Brian Barrett: "Debugging changes tonight"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0652.php">Greg Watson: "Re:  configure issue"</a>
<li><strong>Reply:</strong> <a href="0652.php">Greg Watson: "Re:  configure issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just downloaded 1.0.2a2 and ran the following configure command on  
<br>
a bproc machine:
<br>
<p>./configure --enable-static --disable-shared --with-devel-headers
<br>
<p>At the very end when the final substitutions are being done, I saw this:
<br>
<p>...
<br>
config.status: creating test/util/Makefile
<br>
config.status: creating include/ompi_config.h
<br>
config.status: creating include/mpi.h
<br>
config.status: include/mpi.h is unchanged
<br>
config.status: linking ./opal/mca/timer/linux/timer_linux.h to opal/ 
<br>
mca/timer/base/base_impl.h
<br>
config.status: linking ./ompi/mca/btl/portals/ 
<br>
btl_portals_compat_utcp.c to ompi/mca/btl/portals/btl_portals_compat.c
<br>
config.status: executing depfiles commands
<br>
config.status: executing pml-direct commands
<br>
cp: listing attributes of `ompi/mca/pml/pml_direct_call.h.template':  
<br>
Numerical result out of range
<br>
config.status: creating ompi/mca/pml/pml_direct_call.h
<br>
<p>No idea if it's a problem.
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">Greg Watson: "Re:  configure issue"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Brian Barrett: "Debugging changes tonight"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0652.php">Greg Watson: "Re:  configure issue"</a>
<li><strong>Reply:</strong> <a href="0652.php">Greg Watson: "Re:  configure issue"</a>
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
