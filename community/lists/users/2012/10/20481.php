<?
$subject_val = "[OMPI users] Problem executing mpic++ for LAMMPS installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 12 15:53:40 2012" -->
<!-- isoreceived="20121012195340" -->
<!-- sent="Fri, 12 Oct 2012 15:53:32 -0400" -->
<!-- isosent="20121012195332" -->
<!-- name="Rafael Antonio Soler-Crespo" -->
<!-- email="rafael.soler_at_[hidden]" -->
<!-- subject="[OMPI users] Problem executing mpic++ for LAMMPS installation" -->
<!-- id="SNT125-W27CC610A91292665CC095BF78C0_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] Problem executing mpic++ for LAMMPS installation<br>
<strong>From:</strong> Rafael Antonio Soler-Crespo (<em>rafael.soler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-12 15:53:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20482.php">Pavel Mezentsev: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>Previous message:</strong> <a href="20480.php">Ralph Castain: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20482.php">Pavel Mezentsev: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>Reply:</strong> <a href="20482.php">Pavel Mezentsev: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>Maybe reply:</strong> <a href="20483.php">Rafael Antonio Soler-Crespo: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
&nbsp;
<br>
I'm a new student at my university, and I need to install LAMMPS software to perform some molecular dynamic simulations for my work. The cluster I am working on has no root access for me (obviously) and I am installing everything on my local account. I'm having some difficulty installing LAMMPS on my cluster home account. I downloaded and installed openmpi, and had to edit ~/.bashrc to add the line:
<br>
&nbsp;
<br>
export PATH=/home/ras536/bin/openmpi/bin/:${PATH}
<br>
&nbsp;
<br>
To get it to recognize that I had installed mpic++ and etc. Upon doing this, I run:
<br>
&nbsp;
<br>
$ mpic++
<br>
&nbsp;
<br>
And I will succesfully obtain the message:
<br>
&nbsp;
<br>
g++: no input files
<br>
&nbsp;
<br>
So, I think, everything is fine with my openmpi1.1 (LAMMPS requieres this) installation. However, when I try to make LAMMPS using:
<br>
<p>$ make openmpi 
<br>
&nbsp;
<br>
I get errors like this:
<br>
&nbsp;
<br>
mpic++ -O2 -funroll-loops -fstrict-aliasing -Wall -W -Wno-uninitialized  -DLAMMPS_GZIP   -DFFT_FFTW   -c memory.cpp
<br>
mpic++ -O2 -funroll-loops -fstrict-aliasing -Wall -W -Wno-uninitialized  -DLAMMPS_GZIP   -DFFT_FFTW   -c min_cg.cpp
<br>
mpic++ -O2 -funroll-loops -fstrict-aliasing -Wall -W -Wno-uninitialized  -DLAMMPS_GZIP   -DFFT_FFTW   -c min.cpp
<br>
min.cpp: In member function &#226;void LAMMPS_NS::Min::force_clear()&#226;:
<br>
min.cpp:547: warning: unused variable &#226;i&#226;
<br>
<p>And furthermore, upon trying to use the executable:
<br>
&nbsp;
<br>
./lmp_yotta 
<br>
&nbsp;
<br>
I get this:
<br>
&nbsp;
<br>
./lmp_yotta: error while loading shared libraries: liborte.so.0: cannot open shared object file: No such file or directory
<br>
&nbsp;
<br>
Any idea what might be going on? Am I missing linking stuff so that LAMMPS building can proceed fine?
<br>
&nbsp;
<br>
Thanks for the help, 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20481/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20482.php">Pavel Mezentsev: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>Previous message:</strong> <a href="20480.php">Ralph Castain: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20482.php">Pavel Mezentsev: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>Reply:</strong> <a href="20482.php">Pavel Mezentsev: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>Maybe reply:</strong> <a href="20483.php">Rafael Antonio Soler-Crespo: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
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
