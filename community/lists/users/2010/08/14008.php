<?
$subject_val = "[OMPI users] problem with .bashrc stetting of openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 02:11:22 2010" -->
<!-- isoreceived="20100813061122" -->
<!-- sent="Fri, 13 Aug 2010 11:27:38 +0530 (IST)" -->
<!-- isosent="20100813055738" -->
<!-- name="sunita_at_[hidden]" -->
<!-- email="sunita_at_[hidden]" -->
<!-- subject="[OMPI users] problem with .bashrc stetting of openmpi" -->
<!-- id="59918.10.209.4.2.1281679058.squirrel_at_www.chem.iitb.ac.in" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problem with .bashrc stetting of openmpi<br>
<strong>From:</strong> <a href="mailto:sunita_at_[hidden]?Subject=Re:%20[OMPI%20users]%20problem%20with%20.bashrc%20stetting%20of%20openmpi"><em>sunita_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-13 01:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14009.php">Cristobal Navarro: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14009.php">Cristobal Navarro: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14009.php">Cristobal Navarro: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14010.php">Terry Dontje: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14013.php">Jeff Squyres: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14014.php">Gus Correa: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-mpi users,
<br>
<p>I installed openmpi-1.4.1 in my user area and then set the path for
<br>
openmpi in the .bashrc file as follow. However, am still getting following
<br>
error message whenever am starting the parallel molecular dynamics
<br>
simulation using GROMACS. So every time am starting the MD job, I need to
<br>
source the .bashrc file again.
<br>
<p>Earlier in some other machine I did the same thing and was not getting any
<br>
problem.
<br>
<p>Could you guys suggest what would be the problem?
<br>
<p>============.bashrc============
<br>
#path for openmpi
<br>
export PATH=$PATH:/home/sunitap/soft/openmpi/bin
<br>
export CFLAGS=&quot;-I/home/sunitap/soft/openmpi/include&quot;
<br>
export LDFLAGS=&quot;-L/home/sunitap/soft/openmpi/lib&quot;
<br>
export LD_LIBRARY_PATH=/home/sunitap/soft/openmpi/lib:$LD_LIBRARY_PATH
<br>
<p>============== error message ==============
<br>
mdrun_mpi: error while loading shared libraries: libmpi.so.0: cannot open
<br>
shared object file: No such file or directory
<br>
<p>============================================
<br>
<p>Thanks for any help.
<br>
Best regards,
<br>
Sunita
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14009.php">Cristobal Navarro: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14009.php">Cristobal Navarro: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14009.php">Cristobal Navarro: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14010.php">Terry Dontje: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14013.php">Jeff Squyres: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14014.php">Gus Correa: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
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
