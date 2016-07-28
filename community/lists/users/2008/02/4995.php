<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 10:52:21 2008" -->
<!-- isoreceived="20080206155221" -->
<!-- sent="Wed, 6 Feb 2008 16:52:11 +0100" -->
<!-- isosent="20080206155211" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)" -->
<!-- id="9b0da5ce0802060752r30b6faf7q1f26d6b59b967bd5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 10:52:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4996.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4994.php">Michal Charemza: "[OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I now solved the &quot;ssh&quot; part of my Problem
<br>
The XServer is being started with the nolisten option (thanks Allen).
<br>
In Fedora (Gnome) this can easily be changed by choosing the
<br>
the &quot;Login Screen&quot; tool from the System|Administration Menu.
<br>
There, under the tab &quot;Security&quot;, remove the checkmark from
<br>
&quot;Deny TCP connections from xserver&quot;
<br>
Of course, this needs root access - fortunately,
<br>
i am the boss of my computer ;)
<br>
Additionally, at least the port 6000 should be open.
<br>
<p>This leaves me with my second problem
<br>
<p>$mpirun -np 5 -hostfile testhosts -x DISPLAY=plankton:0.0 xterm -hold
<br>
-e ./MPITest
<br>
Opens 2 xterms from nano (remote) and 3 xterms from plankton(local).
<br>
The local screens display the message:
<br>
./MPITest: error while loading shared libraries: libmpi_cxx.so.0:
<br>
cannot open shared object file: No such file or directory
<br>
<p>Which is unbelievably strange, since for all xterms (local &amp; remote)
<br>
the output of
<br>
&nbsp;&nbsp;&nbsp;$mpirun -np 5 -hostfile testhosts -x DISPLAY=plankton:0.0 xterm
<br>
-hold -e printenv
<br>
contains the PATH variable containing the path to openmpi/bin and the
<br>
LD_LIBRARY_PATH
<br>
containing the path to openmpi/lib
<br>
<p>Doing
<br>
&nbsp;&nbsp;&nbsp;$mpirun -np 5 -hostfile testhosts -x DISPLAY=plankton:0.0 xterm
<br>
-hold -e locate libmpi_cxx
<br>
returns on all xterms (local &amp; remote)
<br>
/opt/openmpi/lib/libmpi_cxx.la
<br>
/opt/openmpi/lib/libmpi_cxx.so
<br>
/opt/openmpi/lib/libmpi_cxx.so.0
<br>
/opt/openmpi/lib/libmpi_cxx.so.0.0.0
<br>
<p>On the other hand, the application has no problem when being called
<br>
without xterms:
<br>
$mpirun -np 5 -hostfile testhosts ./MPITest
<br>
<p>Does anybody have an idea why that should happen?
<br>
<p><p>Thanks
<br>
&nbsp;&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4996.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4994.php">Michal Charemza: "[OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
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
