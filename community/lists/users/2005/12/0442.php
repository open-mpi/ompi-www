<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 16 08:37:48 2005" -->
<!-- isoreceived="20051216133748" -->
<!-- sent="Fri, 16 Dec 2005 14:36:35 +0100" -->
<!-- isosent="20051216133635" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron" -->
<!-- id="43A2C2E3.6070502_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="307D8F81-50FD-48B3-8C0D-A83C76AFF2E6_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-12-16 08:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Jeff Squyres: "Re: [O-MPI users] const_cast&lt;&gt;(), Alltoallw() and Spawn_multiple()"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0443.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brian and George,
<br>
<p>We could not check your fix because the nightly tarball was not updated 
<br>
accordingly ;-).
<br>
<p>I have discovered today the 1.0.1 version on the open-mpi web page and 
<br>
Francoise Roch tested it. The make goes a little further but still 
<br>
fails. Plesase find the logs in attachment.
<br>
<p>Good luck !
<br>
Pierre.
<br>
<p><p><p>Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;Thanks for the update.  I've fixed the next bug in subversion on the  
</span><br>
<span class="quotelev1">&gt;trunk and it should be in tonight's nightly tarball.  I should also  
</span><br>
<span class="quotelev1">&gt;make it into v1.0.1, once that is made available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 7, 2005, at 11:41 AM, Pierre Valiron wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks Brian and George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Francoise Roch tried the following version as you suggested
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/~brbarret/download/">http://www.open-mpi.org/~brbarret/download/</a> openmpi-1.1a1r8384.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Things go a little further but the make still fails.
</span><br>
<span class="quotelev2">&gt;&gt;Please find the logs attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Pierre.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Dec 5, 2005, at 4:05 PM, Pierre Valiron wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I tried to experiment open-mpi on our Solaris10 v40z cluster  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;hoping  it might surpass lam/mpi 7.1.2b28...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I used the following script to compile in 64 bit mode:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;The configure runs fine and the make aborts very rapidly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I attach the log for configure+make and the config.log file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;George spotted the problem - it looks like config.guess/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;config.sub  always report i386 as the architecture when running on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;an Opteron.   This isn't totally unexpected -- generally  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;config.guess / config.sub  reports the architecture target that is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the default for the given  platform and, as you said, Solaris on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Opteron defaults to emitting 32  bit code.  I think I have a fix  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;for this issue, but I don't have any  Opteron machines running  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Solaris to verify.  Can you grab the Open  MPI tarball at the URL  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;below and see if it builds properly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/~brbarret/download/">http://www.open-mpi.org/~brbarret/download/</a>  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;openmpi-1.1a1r8384.tar.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;If that works for you, we'll push the change into Open MPI 1.0.1   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(it's a very small change).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;Soutenez le mouvement SAUVONS LA RECHERCHE :
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      _/_/_/_/    _/       _/       Dr. Pierre VALIRON
</span><br>
<span class="quotelev2">&gt;&gt;     _/     _/   _/      _/   Laboratoire d'Astrophysique
</span><br>
<span class="quotelev2">&gt;&gt;    _/     _/   _/     _/    Observatoire de Grenoble / UJF
</span><br>
<span class="quotelev2">&gt;&gt;   _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
</span><br>
<span class="quotelev2">&gt;&gt;  _/          _/   _/    <a href="http://www-laog.obs.ujf-grenoble.fr/~valiron/">http://www-laog.obs.ujf-grenoble.fr/~valiron/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _/          _/  _/     Mail: Pierre.Valiron_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;_/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
</span><br>
<span class="quotelev2">&gt;&gt;_/          _/_/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&lt;make.output.bz2&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&lt;Makefile.openmpi.bz2&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&lt;config.log.bz2&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0442/make.out.tar.gz">make.out.tar.gz</a>
</ul>
<!-- attachment="make.out.tar.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0442/config.log.tar.gz">config.log.tar.gz</a>
</ul>
<!-- attachment="config.log.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Jeff Squyres: "Re: [O-MPI users] const_cast&lt;&gt;(), Alltoallw() and Spawn_multiple()"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0443.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
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
