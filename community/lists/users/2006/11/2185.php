<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 18 14:48:29 2006" -->
<!-- isoreceived="20061118194829" -->
<!-- sent="Sat, 18 Nov 2006 14:48:08 -0500" -->
<!-- isosent="20061118194808" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl mx : file not found" -->
<!-- id="BEA55B1C-5496-489F-8F46-C31D56D560BD_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0611181634170.9621_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-18 14:48:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<li><strong>Previous message:</strong> <a href="2184.php">Lydia Heck: "[OMPI users] btl mx : file not found"</a>
<li><strong>In reply to:</strong> <a href="2184.php">Lydia Heck: "[OMPI users] btl mx : file not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2188.php">Lydia Heck: "Re: [OMPI users] btl mx : file not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error happen when Open MPI tried to open the MX BTL. However,  
<br>
this does not necessary means that the MX file was not found. I think  
<br>
the problem is not the Open MPI libraries but the MX driver itself.
<br>
<p>I suggest you do a ldd on the mca_btl_mx.so file and check that all  
<br>
dependencies are fulfilled ? All your nodes have a similar  
<br>
configuration ? Do they all have the MX library installed ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 18, 2006, at 11:55 AM, Lydia Heck wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have myricom mx installed and configured and its communications  
</span><br>
<span class="quotelev1">&gt; work (using
</span><br>
<span class="quotelev1">&gt; mx commands such as mx_info to check)
</span><br>
<span class="quotelev1">&gt; Then I configured openmpi-1.3a1r12408 with mx and the configuration
</span><br>
<span class="quotelev1">&gt; did give no errors. The built of the openmpi was without problems  
</span><br>
<span class="quotelev1">&gt; and it
</span><br>
<span class="quotelev1">&gt; installed properly. I can build and link a program - and ldd shows the
</span><br>
<span class="quotelev1">&gt; openmpi libraries linked accordingly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to run applications I set the LD_LIBRARY_PATH and the PATH  
</span><br>
<span class="quotelev1">&gt; correctly
</span><br>
<span class="quotelev1">&gt; but the command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info | grep mx
</span><br>
<span class="quotelev1">&gt; [m2001:12844] mca: base: component_find: unable to open mtl mx:  
</span><br>
<span class="quotelev1">&gt; file not found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [m2001:12844] mca: base: component_find: unable to open btl mx:  
</span><br>
<span class="quotelev1">&gt; file not found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [m2001:12844] mca: base: component_find: unable to open mtl mx:  
</span><br>
<span class="quotelev1">&gt; file not found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and indeed the job does not run, if I give the instruction
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl mx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea why this should happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.3a1r12408-config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<li><strong>Previous message:</strong> <a href="2184.php">Lydia Heck: "[OMPI users] btl mx : file not found"</a>
<li><strong>In reply to:</strong> <a href="2184.php">Lydia Heck: "[OMPI users] btl mx : file not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2188.php">Lydia Heck: "Re: [OMPI users] btl mx : file not found"</a>
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
