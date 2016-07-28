<?
$subject_val = "[OMPI users] Problem launching onto Bourne shell";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 16:10:11 2008" -->
<!-- isoreceived="20081006201011" -->
<!-- sent="Mon, 6 Oct 2008 16:06:27 -0400" -->
<!-- isosent="20081006200627" -->
<!-- name="Hahn Kim" -->
<!-- email="hgk_at_[hidden]" -->
<!-- subject="[OMPI users] Problem launching onto Bourne shell" -->
<!-- id="3C52D52D-C424-4AD7-8E53-911C5F6DD1B6_at_ll.mit.edu" -->
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
<strong>Subject:</strong> [OMPI users] Problem launching onto Bourne shell<br>
<strong>From:</strong> Hahn Kim (<em>hgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 16:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6871.php">Aurélien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6869.php">arun dhakne: "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6871.php">Aurélien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6871.php">Aurélien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having difficulty launching an Open MPI job onto a machine that is  
<br>
running the Bourne shell.
<br>
<p>Here's my basic setup.  I have two machines, one is an x86-based  
<br>
machine running bash and the other is a Cell-based machine running  
<br>
Bourne shell.  I'm running mpirun from the x86 machine, which launches  
<br>
a C++ MPI application onto the Cell machine.  I get the following error:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;error while loading shared libraries: libstdc++.so.6: cannot open  
<br>
shared object file: No such file or directory
<br>
<p>The basic problem is that LD_LIBRARY_PATH needs to be set to the  
<br>
directory that contains libstdc++.so.6 for the Cell.  I set the  
<br>
following line in .profile:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;export LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
<br>
<p>which is the path to the PPC libraries for Cell.
<br>
<p>Now if I log directly into the Cell machine and run the program  
<br>
directly from the command line, I don't get the above error.  But  
<br>
mpirun still fails, even after setting LD_LIBRARY_PATH in .profile.
<br>
<p>As a sanity check, I did the following.  I ran the following command  
<br>
from the x86 machine:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 --host cab0 env
<br>
<p>which, among others things, shows me the following value:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH=/tools/openmpi-1.2.5/lib:
<br>
<p>If I log into the Cell machine and run env directly from the command  
<br>
line, I get the following value:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
<br>
<p>So it appears that .profile gets sourced when I log in but not when  
<br>
mpirun runs.
<br>
<p>However, according to the OpenMPI FAQ (<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a> 
<br>
), mpirun is supposed to directly call .profile since Bourne shell  
<br>
doesn't automatically call it for non-interactive shells.
<br>
<p>Does anyone have any insight as to why my environment isn't being set  
<br>
properly?  Thanks!
<br>
<p>Hahn
<br>
<p><pre>
--
Hahn Kim, hgk_at_[hidden]
MIT Lincoln Laboratory
244 Wood St., Lexington, MA 02420
Tel: 781-981-0940, Fax: 781-981-5255
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6871.php">Aurélien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6869.php">arun dhakne: "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6871.php">Aurélien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6871.php">Aurélien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
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
