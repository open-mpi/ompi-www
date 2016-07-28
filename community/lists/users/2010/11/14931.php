<?
$subject_val = "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 17:04:05 2010" -->
<!-- isoreceived="20101129220405" -->
<!-- sent="Mon, 29 Nov 2010 20:03:59 -0200" -->
<!-- isosent="20101129220359" -->
<!-- name="Maur&#237;cio Rodrigues" -->
<!-- email="mauriciopaulorodrigues_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits" -->
<!-- id="AANLkTik1COkFyz7VOCeHoxaPBWHTQc3NEEjgHJx32yqf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF404A8.6010906_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits<br>
<strong>From:</strong> Maur&#237;cio Rodrigues (<em>mauriciopaulorodrigues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 17:03:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14932.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14930.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14917.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14934.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14934.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
senhor Tim Prince,
<br>
<p>Gostaria de agradecer o email  que me enviou sobre openmpi, na verdade,
<br>
estou tentando compilar o Regcm 4, e quando uso o comando, make regcm,
<br>
aparece um erro &quot;mpif90&quot; por isso fui em busca da solu&#231;&#227;o do problema do
<br>
openmpi,utilizo um computador de plataforma 64 bits com sistema operacional
<br>
ubuntu 10, nao consigo instalar de forma alguma o open, fa&#231;o passo a passo.
<br>
<p>1- ./configure FC=ifort F77=ifort CC=icc CXX=icpc
<br>
<p>2-make all
<br>
<p>3 sudo make install all
<br>
<p>os passos 1 e 2 operam normalmente, mas quando uso o comando make install
<br>
aparece o erro que nao consigo solucionar.
<br>
<p>se tiver alguma id&#233;ia sobre isso, por favor me ajude.
<br>
<p><p><p>obrigado
<br>
<p>2010/11/29 Tim Prince &lt;n8tm_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On 11/29/2010 11:31 AM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Mauricio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check if you have icc (in the Intel compiler bin
</span><br>
<span class="quotelev2">&gt;&gt; directory/subdirectories).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check also if it is in your PATH environment variable.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;which icc&quot; will tell.
</span><br>
<span class="quotelev2">&gt;&gt; If not, add it to PATH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, the right way to do it
</span><br>
<span class="quotelev2">&gt;&gt; is to run the Intel scripts to set the whole compiler environment,
</span><br>
<span class="quotelev2">&gt;&gt; not only PATH.
</span><br>
<span class="quotelev2">&gt;&gt; The scripts should be called something like iccvars.csh  iccvars.sh for
</span><br>
<span class="quotelev2">&gt;&gt; C/C++ and  ifortvars.csh  ifortvars.sh for Fortran, and are also in the
</span><br>
<span class="quotelev2">&gt;&gt; Intel bin directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can source these scripts in your .cshrc/.bashrc file,
</span><br>
<span class="quotelev2">&gt;&gt; using the correct shell (.sh if you use [ba]sh, .csh if you use [t]csh).
</span><br>
<span class="quotelev2">&gt;&gt; This is in the Intel compiler documentation, take a look.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; For the icc version mentioned, there is a compilervars.[c]sh which takes
</span><br>
<span class="quotelev1">&gt; care of both C++ and Fortran (if present), as do either of the iccvars or
</span><br>
<span class="quotelev1">&gt; ifortvars, when the compilers are installed in the same directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, you can compile OpenMPI with gcc,g++ and gfortran, if you want.
</span><br>
<span class="quotelev2">&gt;&gt; If they are not yet installed in your Ubuntu, you can get them with
</span><br>
<span class="quotelev2">&gt;&gt; apt-get, or whatever Ubuntu uses to get packages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  icc ought to work interchangeably with gcc, provided the same g++ version
</span><br>
<span class="quotelev1">&gt; is always on PATH. icc doesn't work without the g++.  Thus, it is entirely
</span><br>
<span class="quotelev1">&gt; reasonable to build openmpi with gcc and use either gcc or icc to build the
</span><br>
<span class="quotelev1">&gt; application.  gfortran and ifort, however, involve incompatible run-time
</span><br>
<span class="quotelev1">&gt; libraries, and the openmpi fortran libraries won't be interchangeable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You must take care not to mix 32- and 64-bit compilers/libraries.  Normally
</span><br>
<span class="quotelev1">&gt; you would build everything 64-bit, both openmpi and the application.  Ubuntu
</span><br>
<span class="quotelev1">&gt; doesn't follow the standard scheme for location of 32-bit vs. 64-bit
</span><br>
<span class="quotelev1">&gt; compilers and libraries, but the Intel compiler version you mentioned should
</span><br>
<span class="quotelev1">&gt; resolve this automatically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Maur&#237;cio Paulo Rodrigues
Bacharelando em F&#237;sica
Universidade Federal de Vi&#231;osa
Mobile- (32)-9972 2239
e-mail alternativo mauricio.paulo_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14931/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14932.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14930.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14917.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14934.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14934.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
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
