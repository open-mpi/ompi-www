<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 12:18:22 2006" -->
<!-- isoreceived="20060309171822" -->
<!-- sent="Thu, 09 Mar 2006 18:18:02 +0100" -->
<!-- isosent="20060309171802" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="4410634A.4070305_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1E80F0A4-12D9-49C5-955B-EDA4F1650B74_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-03-09 12:18:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0802.php">Tom Rosmond: "[OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0816.php">Jeff Squyres: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0816.php">Jeff Squyres: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0825.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Thanks for the quick night fix.
<br>
I could not find r9223 on the subversion trunk but I downloaded r9224 
<br>
instead.
<br>
<p><p>- Configure and compile are okay
<br>
<p><p>- However compiling the mpi.f90 takes over 35 *minutes* with -O1.  This 
<br>
seems a bit excessive...  I tried removing any -O option and things are 
<br>
just as slow. Is this behaviour related to open-mpi or to some wrong 
<br>
features of the Studio11 compiler ?
<br>
<p><p>- 'mpirun --help' non longer crashes.
<br>
<p><p>- standard output seems messy:
<br>
<p>a) 'mpirun -np 4 pwd' returns randomly 1 or two lines, never 4. The same 
<br>
behaviour occurs if the output is redirected to a file.
<br>
<p>b) When running some simple &quot;demo&quot; fortran code, the standard output is 
<br>
buffered within open-mpi and all results are issued at the end. No 
<br>
intermediates are showed.
<br>
<p><p>- running a slightly more elaborate program fails:
<br>
<p>a) compile behaves differently with mpif77 and mpif90.
<br>
<p>While mpif90 compiles and builds &quot;silently&quot;, mpif77 is talkative:
<br>
<p>valiron_at_icare ~/BENCHES &gt; mpif77 -xtarget=opteron -xarch=amd64 -o all all.f
<br>
NOTICE: Invoking /opt/Studio11/SUNWspro/bin/f90 -f77 -ftrap=%none 
<br>
-I/users/valiron/lib/openmpi-1.1a1r9224/include -xtarget=opteron 
<br>
-xarch=amd64 -o all all.f -L/users/valiron/lib/openmpi-1.1a1r9224/lib 
<br>
-lmpi -lorte -lopal -lsocket -lnsl -lrt -lm -lthread -ldl
<br>
all.f:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rw_sched:
<br>
&nbsp;MAIN all:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lam_alltoall:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_alltoall1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_alltoall2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_alltoall3:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_alltoall4:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_buf:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alltoall_sched_ori:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alltoall_sched_new:
<br>
<p><p>b) whatever the code was compiled with mpif77 or mpif90, execution fails:
<br>
<p>valiron_at_icare ~/BENCHES &gt; mpirun -np 2 all
<br>
Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:40
<br>
*** End of error message ***
<br>
Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:40
<br>
*** End of error message ***
<br>
<p>Compiling with -g adds no more information.
<br>
<p><p>I attach the all.f program...  (this program was used last summer to 
<br>
discuss several strategies for alltoall over ethernet on the lammpi list).
<br>
<p>Pierre.
<br>
<p><p><p><p><p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Mar 8, 2006, at 4:46 AM, Pierre Valiron wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the interruption. I back on mpi tracks again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have rebuilt openmpi-1.0.2a9 with -g and the error is unchanged.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have also discovered that I don't need to run any openmpi  
</span><br>
<span class="quotelev2">&gt;&gt; application
</span><br>
<span class="quotelev2">&gt;&gt; to show up the error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --help or mpirun show up the same error:
</span><br>
<span class="quotelev2">&gt;&gt; valiron_at_icare ~ &gt; mpirun
</span><br>
<span class="quotelev2">&gt;&gt; *Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; valiron_at_icare ~ &gt; pstack core
</span><br>
<span class="quotelev2">&gt;&gt; core 'core' of 13842:   mpirun
</span><br>
<span class="quotelev2">&gt;&gt;  fffffd7ffee9dfe0 strlen () + 20
</span><br>
<span class="quotelev2">&gt;&gt;  fffffd7ffeef6ab3 vsprintf () + 33
</span><br>
<span class="quotelev2">&gt;&gt;  fffffd7fff180fd1 opal_vasprintf () + 41
</span><br>
<span class="quotelev2">&gt;&gt;  fffffd7fff180f88 opal_asprintf () + 98
</span><br>
<span class="quotelev2">&gt;&gt;  00000000004098a3 orterun () + 63
</span><br>
<span class="quotelev2">&gt;&gt;  0000000000407214 main () + 34
</span><br>
<span class="quotelev2">&gt;&gt;  000000000040708c ???????? ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seems very basic !
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It turns out this was an error in our compatibility code for asprintf 
</span><br>
<span class="quotelev1">&gt; ().  We were doing something with va_list structures that Solaris  
</span><br>
<span class="quotelev1">&gt; didn't like.  I'm actually surprised that it worked on the UltraSparc  
</span><br>
<span class="quotelev1">&gt; version of Solaris, but it has been for some time for us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I committed a fix at r9223 on the subversion trunk - it  
</span><br>
<span class="quotelev1">&gt; should make tonight's nightly tarball for the trunk.  I've also asked  
</span><br>
<span class="quotelev1">&gt; the release managers for v1.0.2 to push the fix into that release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for reporting the issue and for the account.  Let me know if  
</span><br>
<span class="quotelev1">&gt; you have any further problems.
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
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0801/all.f.gz">all.f.gz</a>
</ul>
<!-- attachment="all.f.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0802.php">Tom Rosmond: "[OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0800.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0816.php">Jeff Squyres: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0816.php">Jeff Squyres: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0825.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
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
