<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 12:17:45 2007" -->
<!-- isoreceived="20070321161745" -->
<!-- sent="Wed, 21 Mar 2007 10:17:38 -0600" -->
<!-- isosent="20070321161738" -->
<!-- name="David Daniel" -->
<!-- email="ddd_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun --prefix question" -->
<!-- id="CFD4E089-A2AB-4563-BFBF-329296492519_at_lanl.gov" -->
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
<strong>From:</strong> David Daniel (<em>ddd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 12:17:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1371.php">Jeff Squyres: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>Previous message:</strong> <a href="1369.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm experimenting with heterogeneous applications (x86_64 &lt;--&gt;  
<br>
ppc64), where the systems share the file system where Open MPI is  
<br>
installed.
<br>
<p>What I would like to be able to do is something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --np 1 --host host-x86_64 --prefix /opt/ompi/x86_64  
<br>
a.out.x86_64 : --np 1 --host host-ppc64 --prefix /opt/ompi/ppc64  
<br>
a.out.ppc64
<br>
<p>Unfortunately it looks as if the second --prefix is always ignored.   
<br>
My guess is that orte_app_context_t::prefix_dir is getting set, but  
<br>
only the 0th app context is never consulted (except in the dynamic  
<br>
process stuff where I do see a loop over the app context array).
<br>
<p>I can of course work around it with startup scripts, but a command  
<br>
line solution would be attractive.
<br>
<p>This is with openmpi-1.2.
<br>
<p>Thanks, David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1371.php">Jeff Squyres: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>Previous message:</strong> <a href="1369.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
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
