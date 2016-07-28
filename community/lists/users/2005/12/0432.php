<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  7 11:41:37 2005" -->
<!-- isoreceived="20051207164137" -->
<!-- sent="Wed, 07 Dec 2005 17:41:23 +0100" -->
<!-- isosent="20051207164123" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron" -->
<!-- id="439710B3.50603_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D08730A8-E897-494A-999B-7792F94336D0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-12-07 11:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0433.php">Daryl W. Grunau: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0431.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0434.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0434.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brian and George,
<br>
<p>Francoise Roch tried the following version as you suggested
<br>
<p><a href="http://www.open-mpi.org/~brbarret/download/">http://www.open-mpi.org/~brbarret/download/</a> 
<br>
openmpi-1.1a1r8384.tar.gz
<br>
<p>Things go a little further but the make still fails.
<br>
Please find the logs attached.
<br>
<p>Pierre.
<br>
<p><p><p>Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;On Dec 5, 2005, at 4:05 PM, Pierre Valiron wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I tried to experiment open-mpi on our Solaris10 v40z cluster hoping  
</span><br>
<span class="quotelev2">&gt;&gt;it might surpass lam/mpi 7.1.2b28...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I used the following script to compile in 64 bit mode:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The configure runs fine and the make aborts very rapidly.
</span><br>
<span class="quotelev2">&gt;&gt;I attach the log for configure+make and the config.log file.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;George spotted the problem - it looks like config.guess/config.sub  
</span><br>
<span class="quotelev1">&gt;always report i386 as the architecture when running on an Opteron.   
</span><br>
<span class="quotelev1">&gt;This isn't totally unexpected -- generally config.guess / config.sub  
</span><br>
<span class="quotelev1">&gt;reports the architecture target that is the default for the given  
</span><br>
<span class="quotelev1">&gt;platform and, as you said, Solaris on Opteron defaults to emitting 32  
</span><br>
<span class="quotelev1">&gt;bit code.  I think I have a fix for this issue, but I don't have any  
</span><br>
<span class="quotelev1">&gt;Opteron machines running Solaris to verify.  Can you grab the Open  
</span><br>
<span class="quotelev1">&gt;MPI tarball at the URL below and see if it builds properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/~brbarret/download/">http://www.open-mpi.org/~brbarret/download/</a> 
</span><br>
<span class="quotelev1">&gt;openmpi-1.1a1r8384.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If that works for you, we'll push the change into Open MPI 1.0.1  
</span><br>
<span class="quotelev1">&gt;(it's a very small change).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0432/make.output.bz2">make.output.bz2</a>
</ul>
<!-- attachment="make.output.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0432/Makefile.openmpi.bz2">Makefile.openmpi.bz2</a>
</ul>
<!-- attachment="Makefile.openmpi.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0432/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0433.php">Daryl W. Grunau: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0431.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0434.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0434.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
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
