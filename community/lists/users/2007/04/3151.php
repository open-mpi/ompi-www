<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 15:49:21 2007" -->
<!-- isoreceived="20070426194921" -->
<!-- sent="Thu, 26 Apr 2007 15:48:32 -0400" -->
<!-- isosent="20070426194832" -->
<!-- name="Nuno Sucena Almeida" -->
<!-- email="slug_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem." -->
<!-- id="200704261548.32803.slug_at_aeminium.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Nuno Sucena Almeida (<em>slug_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-26 15:48:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3152.php">Daniel Gruner: "[OMPI users] bproc problems"</a>
<li><strong>Previous message:</strong> <a href="3150.php">Andrew Friedley: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Reply:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm having a weird problem while using the MPI_Comm_Accept (C) or the 
<br>
MPI::Comm::Accept (C++ bindings).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My &quot;server&quot; runs until the call to this function but if there's no client 
<br>
connecting, it sits there eating all CPU (100%), although if a client connects 
<br>
the loop works fine, but when the client disconnects again we are back to the 
<br>
same high CPU usage.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I tried using OpenMPI version 1.1.2 and 1.2. The machines architectures are 
<br>
AMD Opteron and Intel Itanium2 respectively, the former compiled with gcc 
<br>
4.1.1 and the later with gcc 3.2.3.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The C++ code is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://compel.bu.edu/~nuno/openmpi/">http://compel.bu.edu/~nuno/openmpi/</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;along with the logs for orted and the 'server' output.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I started orted with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orted --persistent --seed --scope public  --universe foo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and the 'server' with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --universe foo -np 1 ./server
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The code is a C++ conversion from the C basic one posted at the mpi-forum 
<br>
website:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mpi-forum.org/docs/mpi-20-html/node106.htm#Node109">http://www.mpi-forum.org/docs/mpi-20-html/node106.htm#Node109</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is there an easy fix for this? I tried also the C version having the same 
<br>
problem...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nuno
<br>
<pre>
-- 
<a href="http://aeminium.org/slug/">http://aeminium.org/slug/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3152.php">Daniel Gruner: "[OMPI users] bproc problems"</a>
<li><strong>Previous message:</strong> <a href="3150.php">Andrew Friedley: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Reply:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
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
