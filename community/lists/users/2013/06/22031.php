<?
$subject_val = "[OMPI users] problem with -lmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  5 14:03:44 2013" -->
<!-- isoreceived="20130605180344" -->
<!-- sent="Wed, 5 Jun 2013 11:03:39 -0700" -->
<!-- isosent="20130605180339" -->
<!-- name="Florian Beutler" -->
<!-- email="fbeutler_at_[hidden]" -->
<!-- subject="[OMPI users] problem with -lmpi" -->
<!-- id="CAFGpuQqNf9G5_PeuzMiYV5W6ywuvP-ZMKiirY8Lu3eSRf0jLOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] problem with -lmpi<br>
<strong>From:</strong> Florian Beutler (<em>fbeutler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-05 14:03:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22032.php">Ralph Castain: "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>Previous message:</strong> <a href="22030.php">Blosch, Edwin L: "Re: [OMPI users] How to diagnose bus error with 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22032.php">Ralph Castain: "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>Reply:</strong> <a href="22032.php">Ralph Castain: "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>Reply:</strong> <a href="22033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with -lmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I just installed openMPI and the installation works without any trouble.
<br>
But when I want to use the mpif90 compiler, it gives me the following error
<br>
<p>bash-3.2$ mpif90 -lmpi
<br>
ld: library not found for -lmpi
<br>
<p>I was wondering whether there is a configure flag which I forgot to set? My
<br>
configure command is
<br>
<p>./configure FC=ifort MPIFC=mpif90 --prefix=/usr/local/openmpi 2&gt;&amp;1 | tee
<br>
config.out
<br>
<p>so I am using the ifort compiler. I attached the output files
<br>
<p>I am using mpich-3.0.4 on Mac OS 10.8.2
<br>
<p>I set the following paths in my .bashrc file
<br>
<p>PATH=/usr/local/openmpi/bin:$PATH ; export PATH
<br>
LD_LIBRARY_PATH=/usr/local/openmpi/lib:$LD_LIBRARY_PATH ; export
<br>
LD_LIBRARY_PATH
<br>
DYLD_LIBRARY_PATH=$LD_LIBRARY_PATH ; export DYLD_LIBRARY_PATH
<br>
<p>any help is highly appreciated
<br>
thanks
<br>
florian
<br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22031/config_out.tar.gz">config_out.tar.gz</a>
</ul>
<!-- attachment="config_out.tar.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22031/make_out.tar.gz">make_out.tar.gz</a>
</ul>
<!-- attachment="make_out.tar.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22031/make-install_out.tar.gz">make-install_out.tar.gz</a>
</ul>
<!-- attachment="make-install_out.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22032.php">Ralph Castain: "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>Previous message:</strong> <a href="22030.php">Blosch, Edwin L: "Re: [OMPI users] How to diagnose bus error with 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22032.php">Ralph Castain: "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>Reply:</strong> <a href="22032.php">Ralph Castain: "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>Reply:</strong> <a href="22033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with -lmpi"</a>
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
