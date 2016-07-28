<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 08:38:27 2008" -->
<!-- isoreceived="20080207133827" -->
<!-- sent="Thu, 7 Feb 2008 08:37:58 -0500" -->
<!-- isosent="20080207133758" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)" -->
<!-- id="E15DDBC9-B263-435C-B681-56B483FA4488_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0802060752r30b6faf7q1f26d6b59b967bd5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 08:37:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5001.php">Daniël Mantione: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>Previous message:</strong> <a href="4999.php">Jeff Squyres: "Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="4995.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The whole question of how to invoke xterms for gdb via mpirun keeps  
<br>
coming up, so when this thread is done, I'll add a pile of this  
<br>
information to the FAQ.
<br>
<p>More below.
<br>
<p>On Feb 6, 2008, at 10:52 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; I now solved the &quot;ssh&quot; part of my Problem
</span><br>
<span class="quotelev1">&gt; The XServer is being started with the nolisten option (thanks Allen).
</span><br>
<span class="quotelev1">&gt; In Fedora (Gnome) this can easily be changed by choosing the
</span><br>
<span class="quotelev1">&gt; the &quot;Login Screen&quot; tool from the System|Administration Menu.
</span><br>
<span class="quotelev1">&gt; There, under the tab &quot;Security&quot;, remove the checkmark from
</span><br>
<span class="quotelev1">&gt; &quot;Deny TCP connections from xserver&quot;
</span><br>
<span class="quotelev1">&gt; Of course, this needs root access - fortunately,
</span><br>
<span class="quotelev1">&gt; i am the boss of my computer ;)
</span><br>
<span class="quotelev1">&gt; Additionally, at least the port 6000 should be open.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This leaves me with my second problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun -np 5 -hostfile testhosts -x DISPLAY=plankton:0.0 xterm -hold
</span><br>
<span class="quotelev1">&gt; -e ./MPITest
</span><br>
<span class="quotelev1">&gt; Opens 2 xterms from nano (remote) and 3 xterms from plankton(local).
</span><br>
<span class="quotelev1">&gt; The local screens display the message:
</span><br>
<span class="quotelev1">&gt; ./MPITest: error while loading shared libraries: libmpi_cxx.so.0:
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is unbelievably strange, since for all xterms (local &amp; remote)
</span><br>
<span class="quotelev1">&gt; the output of
</span><br>
<span class="quotelev1">&gt;   $mpirun -np 5 -hostfile testhosts -x DISPLAY=plankton:0.0 xterm
</span><br>
<span class="quotelev1">&gt; -hold -e printenv
</span><br>
<span class="quotelev1">&gt; contains the PATH variable containing the path to openmpi/bin and the
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; containing the path to openmpi/lib
</span><br>
<p>The results of these two commands do seem to contradict each other;  
<br>
hmm.  Just to be absolutely sure, did you cut-n-paste the  
<br>
LD_LIBRARY_PATH directory output from printenv and try to &quot;ls&quot; it to  
<br>
ensure that it's completely spelled right, etc.?  I suspect that it's  
<br>
right since your other commands work, but at this point, it's worth  
<br>
checking the &quot;obvious&quot; things as well...
<br>
<p>What shell are you using?  You might want to add some echo statements  
<br>
to your shell startup scripts to ensure that all the right parts are  
<br>
being run in each of the cases -- perhaps, for some weird reason, they  
<br>
aren't in the problematic cases...?  [shrug]
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doing
</span><br>
<span class="quotelev1">&gt;   $mpirun -np 5 -hostfile testhosts -x DISPLAY=plankton:0.0 xterm
</span><br>
<span class="quotelev1">&gt; -hold -e locate libmpi_cxx
</span><br>
<span class="quotelev1">&gt; returns on all xterms (local &amp; remote)
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib/libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib/libmpi_cxx.so
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib/libmpi_cxx.so.0
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, the application has no problem when being called
</span><br>
<span class="quotelev1">&gt; without xterms:
</span><br>
<span class="quotelev1">&gt; $mpirun -np 5 -hostfile testhosts ./MPITest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have an idea why that should happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5001.php">Daniël Mantione: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>Previous message:</strong> <a href="4999.php">Jeff Squyres: "Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="4995.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
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
