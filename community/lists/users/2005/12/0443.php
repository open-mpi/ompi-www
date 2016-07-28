<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 16 13:45:14 2005" -->
<!-- isoreceived="20051216184514" -->
<!-- sent="Fri, 16 Dec 2005 13:45:12 -0500" -->
<!-- isosent="20051216184512" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron" -->
<!-- id="FE7D568C-5944-4F3F-B5BC-20E483F21D12_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43A2C2E3.6070502_at_obs.ujf-grenoble.fr" -->
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
<strong>Date:</strong> 2005-12-16 13:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0444.php">Carsten Kutzner: "[O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>In reply to:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It appears you have found a bug in Libtool, the package we use for  
<br>
hiding all the portability issues in building libraries.  Thankfully,  
<br>
Open MPI has been befriended by a Libtool developer and he provided a  
<br>
workaround for your problem (Thanks Ralf!).  If you configure with  
<br>
the option LD=&quot;ld -64&quot;, you should be able to properly build.  Can  
<br>
you give this a whirl and let us know if it works?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p>On Dec 16, 2005, at 8:36 AM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; Dear Brian and George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We could not check your fix because the nightly tarball was not  
</span><br>
<span class="quotelev1">&gt; updated accordingly ;-).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have discovered today the 1.0.1 version on the open-mpi web page  
</span><br>
<span class="quotelev1">&gt; and Francoise Roch tested it. The make goes a little further but  
</span><br>
<span class="quotelev1">&gt; still fails. Plesase find the logs in attachment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck !
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
<span class="quotelev2">&gt;&gt; Thanks for the update.  I've fixed the next bug in subversion on  
</span><br>
<span class="quotelev2">&gt;&gt; the  trunk and it should be in tonight's nightly tarball.  I  
</span><br>
<span class="quotelev2">&gt;&gt; should also  make it into v1.0.1, once that is made available.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 7, 2005, at 11:41 AM, Pierre Valiron wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Brian and George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Francoise Roch tried the following version as you suggested
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/~brbarret/download/">http://www.open-mpi.org/~brbarret/download/</a>  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.1a1r8384.tar.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Things go a little further but the make still fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please find the logs attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pierre.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 5, 2005, at 4:05 PM, Pierre Valiron wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried to experiment open-mpi on our Solaris10 v40z cluster   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hoping  it might surpass lam/mpi 7.1.2b28...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I used the following script to compile in 64 bit mode:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The configure runs fine and the make aborts very rapidly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I attach the log for configure+make and the config.log file.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George spotted the problem - it looks like config.guess/  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config.sub  always report i386 as the architecture when running  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on  an Opteron.   This isn't totally unexpected -- generally   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config.guess / config.sub  reports the architecture target that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is  the default for the given  platform and, as you said,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Solaris on  Opteron defaults to emitting 32  bit code.  I think  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a fix  for this issue, but I don't have any  Opteron  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machines running  Solaris to verify.  Can you grab the Open  MPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball at the URL  below and see if it builds properly?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/~brbarret/download/">http://www.open-mpi.org/~brbarret/download/</a>   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.1a1r8384.tar.gz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If that works for you, we'll push the change into Open MPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.0.1   (it's a very small change).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Soutenez le mouvement SAUVONS LA RECHERCHE :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      _/_/_/_/    _/       _/       Dr. Pierre VALIRON
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _/     _/   _/      _/   Laboratoire d'Astrophysique
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    _/     _/   _/     _/    Observatoire de Grenoble / UJF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _/          _/   _/    <a href="http://www-laog.obs.ujf-grenoble.fr/">http://www-laog.obs.ujf-grenoble.fr/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~valiron/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _/          _/  _/     Mail: Pierre.Valiron_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _/          _/_/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;make.output.bz2&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Makefile.openmpi.bz2&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;config.log.bz2&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; &lt;make.out.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.tar.gz&gt;
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
<li><strong>Next message:</strong> <a href="0444.php">Carsten Kutzner: "[O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>In reply to:</strong> <a href="0442.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
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
