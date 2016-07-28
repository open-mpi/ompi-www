<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 03:21:56 2005" -->
<!-- isoreceived="20051206082156" -->
<!-- sent="Tue, 06 Dec 2005 09:21:47 +0100" -->
<!-- isosent="20051206082147" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.valiron_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron" -->
<!-- id="43954A1B.8010804_at_obs.ujf-grenoble.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.58.0512060036050.19904_at_localhost" -->
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
<strong>From:</strong> Pierre Valiron (<em>Pierre.valiron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-06 03:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0419.php">George Bosilca: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>In reply to:</strong> <a href="0419.php">George Bosilca: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt;Pierre,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The problem seems to come from the fact that we do not detect how to
</span><br>
<span class="quotelev1">&gt;generate the assembly code for our atomic operations. As a result we fall
</span><br>
<span class="quotelev1">&gt;back on the gcc mode for 32 bits architectures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here is the corresponding output from the configure script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;checking if cc supports GCC inline assembly... no
</span><br>
<span class="quotelev1">&gt;checking if cc supports DEC inline assembly... no
</span><br>
<span class="quotelev1">&gt;checking if cc supports XLC inline assembly... no
</span><br>
<span class="quotelev1">&gt;checking if CC supports GCC inline assembly... no
</span><br>
<span class="quotelev1">&gt;checking if CC supports DEC inline assembly... no
</span><br>
<span class="quotelev1">&gt;checking if CC supports XLC inline assembly... no
</span><br>
<span class="quotelev1">&gt;checking for assembly format... default-.text-.globl-:--.L-_at_-1-0-1-1
</span><br>
<span class="quotelev1">&gt;checking for asssembly architecture... IA32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But there is something strange with the system you're compiling on. The
</span><br>
<span class="quotelev1">&gt;size of a C pointer is detected as 8 bytes, so this system is running in
</span><br>
<span class="quotelev1">&gt;64 bits mode. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
Dear George,
<br>
<p>Yes, the system is running in 64 bit mode. Also I enforced the options 
<br>
-xtarget=opteron -xarch=amd64 to produce 64-bit objects.
<br>
<p>The default for Solaris 10 is 32-bit compatibility mode. This is 
<br>
probably why the system reports as i386-pc-solaris2.10.
<br>
<p><span class="quotelev1">&gt;However, configure report it as a i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt;(basically a 32 bits mode).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Give us one or two days to find a fix.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sure !
<br>
Documentation for Solaris 10 is available on the Sun web page. Also, if 
<br>
you are interested in an account on our machine, you may ask to 
<br>
Francoise Roch.
<br>
<p>All the best for open-mpi.
<br>
Pierre.
<br>
<p><span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mon, 5 Dec 2005, Pierre Valiron wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I tried to experiment open-mpi on our Solaris10 v40z cluster hoping it
</span><br>
<span class="quotelev2">&gt;&gt;might surpass lam/mpi 7.1.2b28...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I used the following script to compile in 64 bit mode:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;#! /bin/tcsh -v
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;setenv CC          &quot;cc&quot;
</span><br>
<span class="quotelev2">&gt;&gt;setenv CXX         &quot;CC&quot;
</span><br>
<span class="quotelev2">&gt;&gt;setenv FC          &quot;f95&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;setenv CFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;setenv CXXFLAGS    &quot;-O -xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;setenv FFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;setenv LDFLAGS     &quot;-xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;setenv CXXLDFLAGS  &quot;-xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;./configure --prefix=/users/valiron/lib/openmpi-1.0.1rc5
</span><br>
<span class="quotelev2">&gt;&gt;make
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The configure runs fine and the make aborts very rapidly.
</span><br>
<span class="quotelev2">&gt;&gt;I attach the log for configure+make and the config.log file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Any idea ?
</span><br>
<span class="quotelev2">&gt;&gt;Pierre.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt;hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                  Martin Luther King
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0419.php">George Bosilca: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>In reply to:</strong> <a href="0419.php">George Bosilca: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
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
