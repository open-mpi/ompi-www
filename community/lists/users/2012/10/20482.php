<?
$subject_val = "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 13 04:12:14 2012" -->
<!-- isoreceived="20121013081214" -->
<!-- sent="Sat, 13 Oct 2012 12:12:09 +0400" -->
<!-- isosent="20121013081209" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem executing mpic++ for LAMMPS installation" -->
<!-- id="CAFamD4UXcCB2OjXVMUkvA=U9pYD4HqQm9w0YW+Hbf3dc8FdqXw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT125-W27CC610A91292665CC095BF78C0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem executing mpic++ for LAMMPS installation<br>
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-13 04:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20483.php">Rafael Antonio Soler-Crespo: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>Previous message:</strong> <a href="20481.php">Rafael Antonio Soler-Crespo: "[OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>In reply to:</strong> <a href="20481.php">Rafael Antonio Soler-Crespo: "[OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20483.php">Rafael Antonio Soler-Crespo: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding path to openmpi libraries to LD_LIBRARY_PATH:
<br>
<p>export LD_LIBRARY_PATH=/home/ras536/lib/openmpi/lib:$LD_LIBRARY_PATH
<br>
<p>Regards, Pavel Mezentsev
<br>
<p>2012/10/12 Rafael Antonio Soler-Crespo &lt;rafael.soler_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a new student at my university, and I need to install LAMMPS software
</span><br>
<span class="quotelev1">&gt; to perform some molecular dynamic simulations for my work. The cluster I am
</span><br>
<span class="quotelev1">&gt; working on has no root access for me (obviously) and I am installing
</span><br>
<span class="quotelev1">&gt; everything on my local account. I'm having some difficulty installing
</span><br>
<span class="quotelev1">&gt; LAMMPS on my cluster home account. I downloaded and installed openmpi, and
</span><br>
<span class="quotelev1">&gt; had to edit ~/.bashrc to add the line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/home/ras536/bin/openmpi/bin/:${PATH}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To get it to recognize that I had installed mpic++ and etc. Upon doing
</span><br>
<span class="quotelev1">&gt; this, I run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpic++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I will succesfully obtain the message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g++: no input files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I think, everything is fine with my openmpi1.1 (LAMMPS requieres
</span><br>
<span class="quotelev1">&gt; this) installation. However, when I try to make LAMMPS using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get errors like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpic++ -O2 -funroll-loops -fstrict-aliasing -Wall -W -Wno-uninitialized
</span><br>
<span class="quotelev1">&gt; -DLAMMPS_GZIP   -DFFT_FFTW   -c memory.cpp
</span><br>
<span class="quotelev1">&gt; mpic++ -O2 -funroll-loops -fstrict-aliasing -Wall -W -Wno-uninitialized
</span><br>
<span class="quotelev1">&gt; -DLAMMPS_GZIP   -DFFT_FFTW   -c min_cg.cpp
</span><br>
<span class="quotelev1">&gt; mpic++ -O2 -funroll-loops -fstrict-aliasing -Wall -W -Wno-uninitialized
</span><br>
<span class="quotelev1">&gt; -DLAMMPS_GZIP   -DFFT_FFTW   -c min.cpp
</span><br>
<span class="quotelev1">&gt; min.cpp: In member function &#226;void LAMMPS_NS::Min::force_clear()&#226;:
</span><br>
<span class="quotelev1">&gt; min.cpp:547: warning: unused variable &#226;i&#226;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And furthermore, upon trying to use the executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./lmp_yotta
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./lmp_yotta: error while loading shared libraries: liborte.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what might be going on? Am I missing linking stuff so that LAMMPS
</span><br>
<span class="quotelev1">&gt; building can proceed fine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help,
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20482/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20483.php">Rafael Antonio Soler-Crespo: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>Previous message:</strong> <a href="20481.php">Rafael Antonio Soler-Crespo: "[OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<li><strong>In reply to:</strong> <a href="20481.php">Rafael Antonio Soler-Crespo: "[OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20483.php">Rafael Antonio Soler-Crespo: "Re: [OMPI users] Problem executing mpic++ for LAMMPS installation"</a>
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
