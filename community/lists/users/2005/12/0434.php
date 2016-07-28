<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  7 13:19:55 2005" -->
<!-- isoreceived="20051207181955" -->
<!-- sent="Wed, 7 Dec 2005 13:19:53 -0500" -->
<!-- isosent="20051207181953" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron" -->
<!-- id="307D8F81-50FD-48B3-8C0D-A83C76AFF2E6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="439710B3.50603_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-07 13:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0435.php">John Robinson: "[O-MPI users] FT-MPI?"</a>
<li><strong>Previous message:</strong> <a href="0433.php">Daryl W. Grunau: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0432.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the update.  I've fixed the next bug in subversion on the  
<br>
trunk and it should be in tonight's nightly tarball.  I should also  
<br>
make it into v1.0.1, once that is made available.
<br>
<p>Brian
<br>
<p><p>On Dec 7, 2005, at 11:41 AM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Brian and George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francoise Roch tried the following version as you suggested
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/~brbarret/download/">http://www.open-mpi.org/~brbarret/download/</a> openmpi-1.1a1r8384.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things go a little further but the make still fails.
</span><br>
<span class="quotelev1">&gt; Please find the logs attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pierre.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 5, 2005, at 4:05 PM, Pierre Valiron wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to experiment open-mpi on our Solaris10 v40z cluster  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hoping  it might surpass lam/mpi 7.1.2b28...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I used the following script to compile in 64 bit mode:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The configure runs fine and the make aborts very rapidly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attach the log for configure+make and the config.log file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George spotted the problem - it looks like config.guess/ 
</span><br>
<span class="quotelev2">&gt;&gt; config.sub  always report i386 as the architecture when running on  
</span><br>
<span class="quotelev2">&gt;&gt; an Opteron.   This isn't totally unexpected -- generally  
</span><br>
<span class="quotelev2">&gt;&gt; config.guess / config.sub  reports the architecture target that is  
</span><br>
<span class="quotelev2">&gt;&gt; the default for the given  platform and, as you said, Solaris on  
</span><br>
<span class="quotelev2">&gt;&gt; Opteron defaults to emitting 32  bit code.  I think I have a fix  
</span><br>
<span class="quotelev2">&gt;&gt; for this issue, but I don't have any  Opteron machines running  
</span><br>
<span class="quotelev2">&gt;&gt; Solaris to verify.  Can you grab the Open  MPI tarball at the URL  
</span><br>
<span class="quotelev2">&gt;&gt; below and see if it builds properly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/~brbarret/download/">http://www.open-mpi.org/~brbarret/download/</a>  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1a1r8384.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If that works for you, we'll push the change into Open MPI 1.0.1   
</span><br>
<span class="quotelev2">&gt;&gt; (it's a very small change).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Soutenez le mouvement SAUVONS LA RECHERCHE :
</span><br>
<span class="quotelev1">&gt; <a href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       _/_/_/_/    _/       _/       Dr. Pierre VALIRON
</span><br>
<span class="quotelev1">&gt;      _/     _/   _/      _/   Laboratoire d'Astrophysique
</span><br>
<span class="quotelev1">&gt;     _/     _/   _/     _/    Observatoire de Grenoble / UJF
</span><br>
<span class="quotelev1">&gt;    _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
</span><br>
<span class="quotelev1">&gt;   _/          _/   _/    <a href="http://www-laog.obs.ujf-grenoble.fr/~valiron/">http://www-laog.obs.ujf-grenoble.fr/~valiron/</a>
</span><br>
<span class="quotelev1">&gt;  _/          _/  _/     Mail: Pierre.Valiron_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
</span><br>
<span class="quotelev1">&gt; _/          _/_/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;make.output.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Makefile.openmpi.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;
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
<li><strong>Next message:</strong> <a href="0435.php">John Robinson: "[O-MPI users] FT-MPI?"</a>
<li><strong>Previous message:</strong> <a href="0433.php">Daryl W. Grunau: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0432.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
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
