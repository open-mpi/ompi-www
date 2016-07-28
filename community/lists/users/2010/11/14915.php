<?
$subject_val = "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 14:31:10 2010" -->
<!-- isoreceived="20101129193110" -->
<!-- sent="Mon, 29 Nov 2010 14:31:00 -0500" -->
<!-- isosent="20101129193100" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits" -->
<!-- id="4CF3FF74.80201_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTin8cQw3q8y_jeTJobydTAQkW_Oc2VVUvLuvObj7_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 14:31:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14916.php">Nehemiah Dacres: "[OMPI users] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14914.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14908.php">Maur&#237;cio Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14917.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14917.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mauricio
<br>
<p>Check if you have icc (in the Intel compiler bin directory/subdirectories).
<br>
<p>Check also if it is in your PATH environment variable.
<br>
&quot;which icc&quot; will tell.
<br>
If not, add it to PATH.
<br>
<p>Actually, the right way to do it
<br>
is to run the Intel scripts to set the whole compiler environment,
<br>
not only PATH.
<br>
The scripts should be called something like iccvars.csh  iccvars.sh for 
<br>
C/C++ and  ifortvars.csh  ifortvars.sh for Fortran, and are also in the 
<br>
Intel bin directory.
<br>
<p>You can source these scripts in your .cshrc/.bashrc file,
<br>
using the correct shell (.sh if you use [ba]sh, .csh if you use [t]csh).
<br>
This is in the Intel compiler documentation, take a look.
<br>
<p>Also, you can compile OpenMPI with gcc,g++ and gfortran, if you want.
<br>
If they are not yet installed in your Ubuntu, you can get them with 
<br>
apt-get, or whatever Ubuntu uses to get packages.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p><p>Maur&#237;cio Rodrigues wrote:
<br>
<span class="quotelev1">&gt; I'm using Intel &#174; C + + 2011 Composer XE for Linux, I have no idea how 
</span><br>
<span class="quotelev1">&gt; to solve this problem.
</span><br>
<span class="quotelev1">&gt; I would like to help if possible.
</span><br>
<span class="quotelev1">&gt; Thank you from the already
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Em 29 de novembro de 2010 16:06, Maur&#237;cio Rodrigues 
</span><br>
<span class="quotelev1">&gt; &lt;mauriciopaulorodrigues_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:mauriciopaulorodrigues_at_[hidden]&gt;&gt; escreveu:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      usando o Intel&#174;  C++ Composer XE 2011 for Linux, nao tenho nenhuma
</span><br>
<span class="quotelev1">&gt;     id&#233;ia de como resolver este problema.
</span><br>
<span class="quotelev1">&gt;     gostaria de ajuda se possivel.
</span><br>
<span class="quotelev1">&gt;     obrigado desde de j&#225;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     2010/11/29 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Are you using the Intel compiler? The build system is looking
</span><br>
<span class="quotelev1">&gt;         for an &quot;icc&quot; command and not finding it. Perhaps something in
</span><br>
<span class="quotelev1">&gt;         your environment is defining CC to be &quot;icc&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         On Nov 29, 2010, at 10:43 AM, Maur&#237;cio Rodrigues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         HI, I need to install opnmpi 1.4.2 in Ubuntu 4.10 64bit, and
</span><br>
<span class="quotelev2">&gt;&gt;         giving this error all the time ... I would like to help.
</span><br>
<span class="quotelev2">&gt;&gt;         below follows the lines of the error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thank you!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/fjustino/fjustino/openmpi-1.4.2/libtool: line 7847: icc:
</span><br>
<span class="quotelev2">&gt;&gt;         command not found
</span><br>
<span class="quotelev2">&gt;&gt;         libtool: install: error: relink `libopen-rte.la
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://libopen-rte.la/">http://libopen-rte.la/</a>&gt;' with the above command before
</span><br>
<span class="quotelev2">&gt;&gt;         installing it
</span><br>
<span class="quotelev2">&gt;&gt;         make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;         make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;         `/home/fjustino/fjustino/openmpi-1.4.2/orte'
</span><br>
<span class="quotelev2">&gt;&gt;         make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;         make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;         `/home/fjustino/fjustino/openmpi-1.4.2/orte'
</span><br>
<span class="quotelev2">&gt;&gt;         make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;         make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;         `/home/fjustino/fjustino/openmpi-1.4.2/orte'
</span><br>
<span class="quotelev2">&gt;&gt;         make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         Maur&#237;cio Paulo Rodrigues
</span><br>
<span class="quotelev2">&gt;&gt;         Bacharelando em F&#237;sica
</span><br>
<span class="quotelev2">&gt;&gt;         Universidade Federal de Vi&#231;osa
</span><br>
<span class="quotelev2">&gt;&gt;         Mobile- (32)-9972 2239
</span><br>
<span class="quotelev2">&gt;&gt;         e-mail alternativo mauricio.paulo_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:mauricio.paulo_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Brazil
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Maur&#237;cio Paulo Rodrigues
</span><br>
<span class="quotelev1">&gt;     Bacharelando em F&#237;sica
</span><br>
<span class="quotelev1">&gt;     Universidade Federal de Vi&#231;osa
</span><br>
<span class="quotelev1">&gt;     Mobile- (32)-9972 2239
</span><br>
<span class="quotelev1">&gt;     e-mail alternativo mauricio.paulo_at_[hidden] &lt;mailto:mauricio.paulo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; e-mail alternativo mauricio.paulo_at_[hidden] &lt;mailto:mauricio.paulo_at_[hidden]&gt;
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
<li><strong>Next message:</strong> <a href="14916.php">Nehemiah Dacres: "[OMPI users] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14914.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14908.php">Maur&#237;cio Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14917.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14917.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
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
