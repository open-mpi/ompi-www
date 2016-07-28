<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  5 16:06:15 2005" -->
<!-- isoreceived="20051205210615" -->
<!-- sent="Mon, 05 Dec 2005 22:05:49 +0100" -->
<!-- isosent="20051205210549" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="[O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron" -->
<!-- id="4394ABAD.4040002_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Pierre Valiron (<em>Pierre.Valiron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-05 16:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0418.php">Jeff Squyres: "Re: [O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
<li><strong>Previous message:</strong> <a href="0416.php">Borenstein, Bernard S: "[O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0419.php">George Bosilca: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0419.php">George Bosilca: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to experiment open-mpi on our Solaris10 v40z cluster hoping it 
<br>
might surpass lam/mpi 7.1.2b28...
<br>
<p>I used the following script to compile in 64 bit mode:
<br>
<p>#! /bin/tcsh -v
<br>
<p>setenv CC          &quot;cc&quot;
<br>
setenv CXX         &quot;CC&quot;
<br>
setenv FC          &quot;f95&quot;
<br>
<p>setenv CFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
setenv CXXFLAGS    &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
setenv FFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
<p>setenv LDFLAGS     &quot;-xtarget=opteron -xarch=amd64&quot;
<br>
setenv CXXLDFLAGS  &quot;-xtarget=opteron -xarch=amd64&quot;
<br>
<p>./configure --prefix=/users/valiron/lib/openmpi-1.0.1rc5
<br>
make
<br>
<p>The configure runs fine and the make aborts very rapidly.
<br>
I attach the log for configure+make and the config.log file.
<br>
<p>Any idea ?
<br>
Pierre.
<br>
<p><pre>
-- 
Soutenez le mouvement SAUVONS LA RECHERCHE :
<a href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>
       _/_/_/_/    _/       _/       Dr. Pierre VALIRON
      _/     _/   _/      _/   Laboratoire d'Astrophysique
     _/     _/   _/     _/    Observatoire de Grenoble / UJF
    _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
   _/          _/   _/    <a href="http://www-laog.obs.ujf-grenoble.fr/~valiron/">http://www-laog.obs.ujf-grenoble.fr/~valiron/</a>
  _/          _/  _/     Mail: Pierre.Valiron_at_[hidden]
 _/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
_/          _/_/        


</pre>
<p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0417/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0417/config_make.log.bz2">config_make.log.bz2</a>
</ul>
<!-- attachment="config_make.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0418.php">Jeff Squyres: "Re: [O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
<li><strong>Previous message:</strong> <a href="0416.php">Borenstein, Bernard S: "[O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0419.php">George Bosilca: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0419.php">George Bosilca: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
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
