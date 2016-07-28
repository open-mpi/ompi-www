<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 09:53:29 2007" -->
<!-- isoreceived="20070806135329" -->
<!-- sent="Mon, 06 Aug 2007 09:53:20 -0400" -->
<!-- isosent="20070806135320" -->
<!-- name="Bill Wichser" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="[OMPI devel] problem with system() call and openib - blocks send/recv" -->
<!-- id="46B727D0.4070406_at_princeton.edu" -->
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
<strong>From:</strong> Bill Wichser (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 09:53:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2079.php">Sven Stork: "[OMPI devel] using google-perftools for hunting memory leaks"</a>
<li><strong>Previous message:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2080.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>Reply:</strong> <a href="2080.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>Reply:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have run across an issue, probably more related to openib than to 
<br>
openmpi but don't know how to resolve.
<br>
<p>Linux kernel - 2.6.9-55.0.2.ELsmp x86_64
<br>
libibverbs-1.0.4-7
<br>
<p>openmpi - it doesn't matter - 1.1.5 and 1.2.3 both fail.
<br>
<p>When the sample code is run across IB nodes, using the IB interface, the 
<br>
receive just hangs whenever a system call is issued.  Removing this 
<br>
system call removes the hang.  Running across the nodes over TCP removes 
<br>
the hang.  Running on a single node removes the hang.  Only when using 
<br>
the IB interface do we have this hang.
<br>
<p>So the simple solution is &quot;don't do this&quot; but apparently something 
<br>
deeper is involved and who knows where it will pop up again.
<br>
<p>Thanks,
<br>
Bill
<br>
<p>ps - sample code compiled using mpicc, built with gcc.  You'll need a 
<br>
test.dat file for the system(&quot;cp&quot;) command.
<br>
<p>
<br><hr>
<ul>
<li>text/x-c attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2078/Small0.c">Small0.c</a>
</ul>
<!-- attachment="Small0.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2079.php">Sven Stork: "[OMPI devel] using google-perftools for hunting memory leaks"</a>
<li><strong>Previous message:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2080.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>Reply:</strong> <a href="2080.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>Reply:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
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
