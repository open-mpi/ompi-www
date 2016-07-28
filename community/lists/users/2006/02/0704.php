<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 12:17:44 2006" -->
<!-- isoreceived="20060224171744" -->
<!-- sent="Fri, 24 Feb 2006 18:17:22 +0100" -->
<!-- isosent="20060224171722" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11" -->
<!-- id="43FF3FA2.6010207_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EC98AE3F-322F-42CA-A410-DA0AD0DD6FFF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-02-24 12:17:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0705.php">George Bosilca: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0703.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>In reply to:</strong> <a href="0697.php">Brian Barrett: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0715.php">Jeff Squyres: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<li><strong>Reply:</strong> <a href="0715.php">Jeff Squyres: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I have configured also for f77 as you suggest.
<br>
<p>The configure now completes, however it outputs a strange error message:
<br>
<p>*** Fortran 90/95 compiler
<br>
checking whether we are using the GNU Fortran compiler... no
<br>
checking whether f95 accepts -g... yes
<br>
checking for Fortran flag to compile .f files... none
<br>
checking for Fortran flag to compile .f90 files... none
<br>
checking whether f77 and f95 compilers are compatible... no
<br>
configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link 
<br>
compatible
<br>
configure: WARNING: *** Disabling Fortran 90/95 bindings
<br>
<p>I have checked f77 invokes the proper Studio11 compiler.
<br>
And of course the objects are compatible between all Studio 11 compilers...
<br>
<p>Then the make fails in orte/mca/pls/base with message
<br>
&quot;pls_base_context.c&quot;, line 48: undefined symbol: MAXHOSTNAMELEN
<br>
<p>Any further idea ?
<br>
<p>PS. I attach the relevant output.
<br>
<p><p><p><p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Feb 24, 2006, at 5:25 AM, Pierre Valiron wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I have tried to build the 1.0.2a8 version on Solaris Opteron with  
</span><br>
<span class="quotelev2">&gt;&gt; Sun Studio 11.
</span><br>
<span class="quotelev2">&gt;&gt; The configure fails on attempting to guess the largest fortran  
</span><br>
<span class="quotelev2">&gt;&gt; integer. I attach my build script, and output from configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully there is a simple fix.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI has both a Fortran 77 and Fortran 90 bindings layer, so we  
</span><br>
<span class="quotelev1">&gt; configure and test both compilers.  You need to add two more  
</span><br>
<span class="quotelev1">&gt; environment variables to get Open MPI configured correctly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F77=f77
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-O -xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The F77 / FFLAGS set the Fortran 77 compiler and its associated  
</span><br>
<span class="quotelev1">&gt; flags.  FC / FCFLAGS set the Fortran (90,95,03) compiler and its  
</span><br>
<span class="quotelev1">&gt; associated flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because F77 was unset, configure tried using the g77 it found in your  
</span><br>
<span class="quotelev1">&gt; path.  But because FFLAGS *was* set, it tried using the arguments in  
</span><br>
<span class="quotelev1">&gt; FFLAGS, which are for Sun's compiler, not gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this makes sense,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0704/solaris.tar.bz2">solaris.tar.bz2</a>
</ul>
<!-- attachment="solaris.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0705.php">George Bosilca: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0703.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>In reply to:</strong> <a href="0697.php">Brian Barrett: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0715.php">Jeff Squyres: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<li><strong>Reply:</strong> <a href="0715.php">Jeff Squyres: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
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
