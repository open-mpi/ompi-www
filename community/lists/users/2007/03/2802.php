<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 12:19:06 2007" -->
<!-- isoreceived="20070315161906" -->
<!-- sent="Thu, 15 Mar 2007 12:18:53 -0400" -->
<!-- isosent="20070315161853" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] portability of the executables compiled with OpenMPI" -->
<!-- id="7C6F1F47-E935-4999-9DAF-EAB81DD5234C_at_ieee.org" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-15 12:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2803.php">Sebastien.HERRY_at_[hidden]: "[OMPI users] Shared Ram used for simple application"</a>
<li><strong>Previous message:</strong> <a href="2801.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having trouble with the portability of executables compiled with  
<br>
OpenMPI.  I suspect the sysadms on the HPC system I'm using changed  
<br>
something because I think it worked previously.
<br>
<p>Situation: I'm compiling my code locally on a machine with just  
<br>
ethernet interfaces and OpenMPI 1.1.2 that I built.
<br>
<p>When I attempt to run that executable on a HPC machine with OpenMPI  
<br>
1.1.2 and InfiniBand interfaces I get messages about &quot;can't find  
<br>
libmosal.so.0.0&quot; -- I'm certain this wasn't happening earlier.
<br>
<p>I can compile on this machine and run on it, even though there is no  
<br>
libmosal.* in my path.
<br>
<p>mpif90 --showme on this system gives me:
<br>
<p>/opt/compiler/intel/compiler91/x86_64/bin/ifort -I/opt/mpi/x86_64/ 
<br>
intel/9.1/openmpi-1.1.4/include -pthread -I/opt/mpi/x86_64/intel/9.1/ 
<br>
openmpi-1.1.4/lib -L/opt/mpi/x86_64/intel/9.1/openmpi-1.1.4/lib -L/ 
<br>
opt/gm/lib64 -lmpi_f90 -lmpi -lorte -lopal -lgm -lvapi -lmosal -lrt - 
<br>
lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
<br>
<p><p>I suspect that read access to libmosal.so has been removed and  
<br>
somehow when I link on this machine I'm getting a static library,  
<br>
i.e. libmosal.a
<br>
<p><p>Does this make any sense?
<br>
<p>Is there a flag in this compile line that permits linking an  
<br>
executable even when the person doing the linking does not have  
<br>
access to all the libraries, i.e.  export-dynamic?
<br>
<p><p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2803.php">Sebastien.HERRY_at_[hidden]: "[OMPI users] Shared Ram used for simple application"</a>
<li><strong>Previous message:</strong> <a href="2801.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
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
