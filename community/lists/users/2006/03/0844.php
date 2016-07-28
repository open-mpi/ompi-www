<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 16:05:36 2006" -->
<!-- isoreceived="20060313210536" -->
<!-- sent="Mon, 13 Mar 2006 22:05:22 +0100" -->
<!-- isosent="20060313210522" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="4415DE92.901_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F426D58-0F1E-4A35-A5D7-B7A0A6FD9802_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-03-13 16:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0845.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0843.php">Jean-Christophe Hugly: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0846.php">Pierre Valiron: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev2">&gt;&gt; b) whatever the code was compiled with mpif77 or mpif90, execution  
</span><br>
<span class="quotelev2">&gt;&gt; fails:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; valiron_at_icare ~/BENCHES &gt; mpirun -np 2 all
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:40
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:40
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this code work with other MPI implementations?  I'm still trying  
</span><br>
<span class="quotelev1">&gt; to track the problem down, but it looks like an invalid request is  
</span><br>
<span class="quotelev1">&gt; cropping up in a call to MPI_Wait and that is causing the  
</span><br>
<span class="quotelev1">&gt; segmentation fault.  There may be another issue, but I need to do a  
</span><br>
<span class="quotelev1">&gt; bit more testing to be sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;   
</span><br>
You are right, there is a bug in the code for algo=3 and algo=4.
<br>
This bug was harmless with lam/mpi.
<br>
Now open/mpi works fine !!!
<br>
Pierre.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="0845.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0843.php">Jean-Christophe Hugly: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0846.php">Pierre Valiron: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
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
