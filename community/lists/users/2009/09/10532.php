<?
$subject_val = "Re: [OMPI users] Running problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 04:40:30 2009" -->
<!-- isoreceived="20090901084030" -->
<!-- sent="Tue, 01 Sep 2009 10:40:26 +0200" -->
<!-- isosent="20090901084026" -->
<!-- name="J.S. van Bethlehem" -->
<!-- email="j.s.van.bethlehem_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running problem" -->
<!-- id="4A9CDDFA.9010900_at_astro.rug.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="428810f20909010027h7a766b70re9244fa5b271d253_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running problem<br>
<strong>From:</strong> J.S. van Bethlehem (<em>j.s.van.bethlehem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 04:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10533.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10531.php">amjad ali: "[OMPI users] Running problem"</a>
<li><strong>In reply to:</strong> <a href="10531.php">amjad ali: "[OMPI users] Running problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10556.php">amjad ali: "Re: [OMPI users] Running problem"</a>
<li><strong>Reply:</strong> <a href="10556.php">amjad ali: "Re: [OMPI users] Running problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From the look of it, this is not an OMPI problem, but a problem with
</span><br>
your paths. You need to make sure that libGLU.so.1 can be found by the
<br>
system at runtime. This is true for _all_ the systems that are in your
<br>
machinefile. So make sure that on all systems the path to that library
<br>
is in the LD_LIBRARY_PATH environment variable. That will fix this. If
<br>
you need help with this, you'll need to tell more details on your
<br>
installation, your system and your shell.
<br>
<p>Greetings, Jakob
<br>
<p>amjad ali wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; A simple program at my 4-node ROCKS cluster runs fine with command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun -np 4 -machinefile machines ./mpi-ring
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another bigger programs runs fine on the head node only with command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd ./sphere; /opt/openmpi/bin/mpirun -np 4 ../bin/flo2d
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But with the command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd /sphere; /opt/openmpi/bin/mpirun -np 4 -machinefile ../machines
</span><br>
<span class="quotelev1">&gt; ../bin/flo2d
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It gives output that:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../bin/flo2d: error while loading shared libraries: libGLU.so.1: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../bin/flo2d: error while loading shared libraries: libGLU.so.1: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../bin/flo2d: error while loading shared libraries: libGLU.so.1: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (cursor blinking here)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please fix it.
</span><br>
<span class="quotelev1">&gt; Note that with this bigger code the exe file is in different location
</span><br>
<span class="quotelev1">&gt; than the ./sphere.
</span><br>
<span class="quotelev1">&gt; Openmpi is installed with GNU compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Amjad Ali
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10533.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10531.php">amjad ali: "[OMPI users] Running problem"</a>
<li><strong>In reply to:</strong> <a href="10531.php">amjad ali: "[OMPI users] Running problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10556.php">amjad ali: "Re: [OMPI users] Running problem"</a>
<li><strong>Reply:</strong> <a href="10556.php">amjad ali: "Re: [OMPI users] Running problem"</a>
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
