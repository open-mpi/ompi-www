<?
$subject_val = "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 17:14:46 2010" -->
<!-- isoreceived="20101129221446" -->
<!-- sent="Mon, 29 Nov 2010 17:14:41 -0500" -->
<!-- isosent="20101129221441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits" -->
<!-- id="94C7C13F-683D-418D-82B2-753249E3D621_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTik1COkFyz7VOCeHoxaPBWHTQc3NEEjgHJx32yqf_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 17:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14935.php">George Bosilca: "Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<li><strong>Previous message:</strong> <a href="14933.php">George Bosilca: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14931.php">Maur&#237;cio Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14938.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14938.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14951.php">Prentice Bisbal: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please note that this is an English-speaking list.  I don't know if Tim speaks ?Spanish?, but I unfortunately don't.  :-)
<br>
<p>Also note that I asked for some specific information, but you ignored it when you replied.  Please see the following web page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><p>On Nov 29, 2010, at 5:03 PM, Maur&#237;cio Rodrigues wrote:
<br>
<p><span class="quotelev1">&gt; senhor Tim Prince, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gostaria de agradecer o email  que me enviou sobre openmpi, na verdade, estou tentando compilar o Regcm 4, e quando uso o comando, make regcm, aparece um erro &quot;mpif90&quot; por isso fui em busca da solu&#231;&#227;o do problema do openmpi,utilizo um computador de plataforma 64 bits com sistema operacional ubuntu 10, nao consigo instalar de forma alguma o open, fa&#231;o passo a passo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1- ./configure FC=ifort F77=ifort CC=icc CXX=icpc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2-make all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3 sudo make install all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; os passos 1 e 2 operam normalmente, mas quando uso o comando make install aparece o erro que nao consigo solucionar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; se tiver alguma id&#233;ia sobre isso, por favor me ajude.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; obrigado
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/11/29 Tim Prince &lt;n8tm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; On 11/29/2010 11:31 AM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; Hi Mauricio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check if you have icc (in the Intel compiler bin directory/subdirectories).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check also if it is in your PATH environment variable.
</span><br>
<span class="quotelev1">&gt; &quot;which icc&quot; will tell.
</span><br>
<span class="quotelev1">&gt; If not, add it to PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, the right way to do it
</span><br>
<span class="quotelev1">&gt; is to run the Intel scripts to set the whole compiler environment,
</span><br>
<span class="quotelev1">&gt; not only PATH.
</span><br>
<span class="quotelev1">&gt; The scripts should be called something like iccvars.csh  iccvars.sh for C/C++ and  ifortvars.csh  ifortvars.sh for Fortran, and are also in the Intel bin directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can source these scripts in your .cshrc/.bashrc file,
</span><br>
<span class="quotelev1">&gt; using the correct shell (.sh if you use [ba]sh, .csh if you use [t]csh).
</span><br>
<span class="quotelev1">&gt; This is in the Intel compiler documentation, take a look.
</span><br>
<span class="quotelev1">&gt; For the icc version mentioned, there is a compilervars.[c]sh which takes care of both C++ and Fortran (if present), as do either of the iccvars or ifortvars, when the compilers are installed in the same directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, you can compile OpenMPI with gcc,g++ and gfortran, if you want.
</span><br>
<span class="quotelev1">&gt; If they are not yet installed in your Ubuntu, you can get them with apt-get, or whatever Ubuntu uses to get packages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; icc ought to work interchangeably with gcc, provided the same g++ version is always on PATH. icc doesn't work without the g++.  Thus, it is entirely reasonable to build openmpi with gcc and use either gcc or icc to build the application.  gfortran and ifort, however, involve incompatible run-time libraries, and the openmpi fortran libraries won't be interchangeable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You must take care not to mix 32- and 64-bit compilers/libraries.  Normally you would build everything 64-bit, both openmpi and the application.  Ubuntu doesn't follow the standard scheme for location of 32-bit vs. 64-bit compilers and libraries, but the Intel compiler version you mentioned should resolve this automatically.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Maur&#237;cio Paulo Rodrigues
</span><br>
<span class="quotelev1">&gt; Bacharelando em F&#237;sica 
</span><br>
<span class="quotelev1">&gt; Universidade Federal de Vi&#231;osa
</span><br>
<span class="quotelev1">&gt; Mobile- (32)-9972 2239
</span><br>
<span class="quotelev1">&gt; e-mail alternativo mauricio.paulo_at_[hidden] 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14935.php">George Bosilca: "Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<li><strong>Previous message:</strong> <a href="14933.php">George Bosilca: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14931.php">Maur&#237;cio Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14938.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14938.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14951.php">Prentice Bisbal: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
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
