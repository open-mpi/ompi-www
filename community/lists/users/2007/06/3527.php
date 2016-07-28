<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 08:16:12 2007" -->
<!-- isoreceived="20070621121612" -->
<!-- sent="Thu, 21 Jun 2007 08:15:51 -0400" -->
<!-- isosent="20070621121551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/numa" -->
<!-- id="841B6E93-A806-4E90-B5B1-4D712EE4B828_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="439773.25373.qm_at_web58907.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-21 08:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3528.php">Jeffrey L. Tilson: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>In reply to:</strong> <a href="3498.php">Francesco Pietra: "[OMPI users] openmpi/numa"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 16, 2007, at 3:22 AM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; The question is whether, in compiling openmpi,the flag
</span><br>
<span class="quotelev1">&gt; libnuma is needed or simply useful also in the special
</span><br>
<span class="quotelev1">&gt; arrangement of the Tyan S2895 Thunder K8WE with two
</span><br>
<span class="quotelev1">&gt; dual-core opterons and eighth memory modules, two GB
</span><br>
<span class="quotelev1">&gt; each.
</span><br>
<p>At worst, it is not harmful.  At best, it is helpful.
<br>
<p>We're still playing / experimenting with the memory affinity controls  
<br>
and don't have great support for it at the moment.  It's ok, but it  
<br>
will likely mainly end up smoothing your results over repeated runs  
<br>
rather than result in dramatic performance improvements.  Note that  
<br>
you need to enable processor affinity for OMPI to use memory  
<br>
affinity.  See the FAQ for more information.
<br>
<p><span class="quotelev1">&gt; If so (being first time to compile a mpi, and being
</span><br>
<span class="quotelev1">&gt; nonexpert singleuser/administrator) I would be much
</span><br>
<span class="quotelev1">&gt; obliged for checking the series of commands below (as
</span><br>
<span class="quotelev1">&gt; superuser) for Linux Debian amd64 etch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd /usr/local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bunzip2 openmpi-1.2.2.tar.bz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tar xvf openmpi-1.2.2.tar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd /usr/local/openmpi-1.2.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/cce/9.1.036/bin/ifort; export FC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC=/opt/intel/cce/9.1.042/bin/icc; export CC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CXX=/opt/intel/cce/9.1.042/bin/icpc; export CXX
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-libnuma=/full pat to libnuma-dev
</span><br>
<span class="quotelev1">&gt; 0.9.11-4, 0.9.11-3 (not yet installed)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<p>This all looks fine.  You might always want to set F77 to the same  
<br>
value as FC.  Alternatively, you can run:
<br>
<p>./configure CC=/opt/intel/... CXX=/opt/intel/... (etc.)
<br>
<p>and not set the variables in the environment.  In terms of end  
<br>
results, the effect is identical between the two techniques.  The  
<br>
only difference is that if you put the CC=... stuff on the configure  
<br>
command line, which compilers you specifically chose will be recorded  
<br>
in the config.log file, which can be handy for referring to later and/ 
<br>
or debugging problems.
<br>
<p><span class="quotelev1">&gt; followed by setting as user in my .bashrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_HOME=/usr/local; export MPI_HOME
</span><br>
<p>Note that Open MPI does not use the MPI_HOME environment variable.
<br>
<p>If you already have /usr/local/bin in your PATH and /usr/local/lib in  
<br>
your LD_LIBRARY_PATH, you're set.
<br>
<p><span class="quotelev1">&gt; ____
</span><br>
<span class="quotelev1">&gt; mpi for a computational application that is best
</span><br>
<span class="quotelev1">&gt; compiled with intel. On my system those intels already
</span><br>
<span class="quotelev1">&gt; furnish runtime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/fce/9.1.036/lib/libimf.so
</span><br>
<span class="quotelev1">&gt; /opt/intel/cce/9.1.042/lib/libimf.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to a QM code (NWChem 5.0) that is built-in
</span><br>
<span class="quotelev1">&gt; parallelized with TCGMSG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________ 
</span><br>
<span class="quotelev1">&gt; ______________
</span><br>
<span class="quotelev1">&gt; Yahoo! oneSearch: Finally, mobile search
</span><br>
<span class="quotelev1">&gt; that gives answers, not web links.
</span><br>
<span class="quotelev1">&gt; <a href="http://mobile.yahoo.com/mobileweb/onesearch?refer=1ONXIC">http://mobile.yahoo.com/mobileweb/onesearch?refer=1ONXIC</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3528.php">Jeffrey L. Tilson: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>In reply to:</strong> <a href="3498.php">Francesco Pietra: "[OMPI users] openmpi/numa"</a>
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
