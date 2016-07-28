<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 07:55:42 2007" -->
<!-- isoreceived="20070322115542" -->
<!-- sent="Thu, 22 Mar 2007 07:55:30 -0400" -->
<!-- isosent="20070322115530" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] portability of the executables compiled with OpenMPI" -->
<!-- id="887BEF03-FDAE-47C4-836C-F5C9BAECF5D8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7C6F1F47-E935-4999-9DAF-EAB81DD5234C_at_ieee.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 07:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2874.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2872.php">Jeff Squyres: "Re: [OMPI users] threading"</a>
<li><strong>In reply to:</strong> <a href="2802.php">Michael: "[OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2875.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2875.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 15, 2007, at 12:18 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; I'm having trouble with the portability of executables compiled with
</span><br>
<span class="quotelev1">&gt; OpenMPI.  I suspect the sysadms on the HPC system I'm using changed
</span><br>
<span class="quotelev1">&gt; something because I think it worked previously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Situation: I'm compiling my code locally on a machine with just
</span><br>
<span class="quotelev1">&gt; ethernet interfaces and OpenMPI 1.1.2 that I built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I attempt to run that executable on a HPC machine with OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.1.2 and InfiniBand interfaces I get messages about &quot;can't find
</span><br>
<span class="quotelev1">&gt; libmosal.so.0.0&quot; -- I'm certain this wasn't happening earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can compile on this machine and run on it, even though there is no
</span><br>
<span class="quotelev1">&gt; libmosal.* in my path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 --showme on this system gives me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/compiler/intel/compiler91/x86_64/bin/ifort -I/opt/mpi/x86_64/
</span><br>
<span class="quotelev1">&gt; intel/9.1/openmpi-1.1.4/include -pthread -I/opt/mpi/x86_64/intel/9.1/
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.4/lib -L/opt/mpi/x86_64/intel/9.1/openmpi-1.1.4/lib -L/
</span><br>
<span class="quotelev1">&gt; opt/gm/lib64 -lmpi_f90 -lmpi -lorte -lopal -lgm -lvapi -lmosal -lrt -
</span><br>
<span class="quotelev1">&gt; lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
</span><br>
<p>Based on this output, I assume you have configured OMPI with either -- 
<br>
enable-static or otherwise including all plugins in libmpi.so, right?
<br>
<p><span class="quotelev1">&gt; I suspect that read access to libmosal.so has been removed and
</span><br>
<span class="quotelev1">&gt; somehow when I link on this machine I'm getting a static library,
</span><br>
<span class="quotelev1">&gt; i.e. libmosal.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this make any sense?
</span><br>
<p>This would be consistent with what you described above -- that  
<br>
libmosal.so (a VAPI support library) is available on the initial  
<br>
machine, so your MPI executable will have a runtime dependency on  
<br>
it.  But then on the second machine, libmosal.so is not available, so  
<br>
the runtime dependency fails.  But if you compile manually,  
<br>
libmosal.a is available and therefore the application can be created  
<br>
with compile/link-time resolution (vs. runtime resolution).
<br>
<p><span class="quotelev1">&gt; Is there a flag in this compile line that permits linking an
</span><br>
<span class="quotelev1">&gt; executable even when the person doing the linking does not have
</span><br>
<span class="quotelev1">&gt; access to all the libraries, i.e.  export-dynamic?
</span><br>
<p>No.  All the same Linux/POSIX linking rules apply for creating an  
<br>
executable; we're not doing anything funny in this area.
<br>
<p>FYI: --export-dynamic tells the linker that symbols in the libraries  
<br>
should be available to plugins that are opened later.  It's probably  
<br>
not relevant for the case where you're not opening any plugins at  
<br>
runtime, but we don't differentiate between this case because the  
<br>
decision whether to open plugins or not is a runtime decision, not a  
<br>
compile/link-time decision.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2874.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2872.php">Jeff Squyres: "Re: [OMPI users] threading"</a>
<li><strong>In reply to:</strong> <a href="2802.php">Michael: "[OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2875.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2875.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
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
