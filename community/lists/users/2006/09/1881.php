<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 17 19:15:15 2006" -->
<!-- isoreceived="20060917231515" -->
<!-- sent="Sun, 17 Sep 2006 19:14:53 -0400" -->
<!-- isosent="20060917231453" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] linux alpha ev6 openmpi 1.1.1" -->
<!-- id="5BCA6232-CC0A-4438-9EEC-FD684236B6F9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200609082018.23484.slug_at_aeminium.org" -->
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
<strong>Date:</strong> 2006-09-17 19:14:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1882.php">Jeffrey M Ceason: "[OMPI users] Mpirun no output without --debug-daemons flag"</a>
<li><strong>Previous message:</strong> <a href="1880.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1847.php">Nuno Sucena Almeida: "[OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2006, at 8:18 PM, Nuno Sucena Almeida wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 	while trying to compile openmpi 1.1.1 on a linux alpha ev6  
</span><br>
<span class="quotelev1">&gt; (tsunami) gentoo
</span><br>
<span class="quotelev1">&gt; system, I had to add the following lines to config/ompi_config_asm.m4:
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; alphaev6-*)
</span><br>
<span class="quotelev1">&gt;             ompi_cv_asm_arch=&quot;ALPHA&quot;
</span><br>
<span class="quotelev1">&gt;             OMPI_ASM_SUPPORT_64BIT=1
</span><br>
<span class="quotelev1">&gt;             OMPI_GCC_INLINE_ASSIGN='&quot;bis zero,zero,%0&quot; : &quot;=&amp;r&quot;(ret)'
</span><br>
<span class="quotelev1">&gt;                 ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; since my system was being detected as such , and not alpha-*
</span><br>
<p>I forgot to mention -- I've committed a fix for this part of the  
<br>
issue in the SVN trunk.  It should eventually be migrated into the  
<br>
branch for the 1.2 release once we sort out the other Alpha issues.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1882.php">Jeffrey M Ceason: "[OMPI users] Mpirun no output without --debug-daemons flag"</a>
<li><strong>Previous message:</strong> <a href="1880.php">Brian Barrett: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1847.php">Nuno Sucena Almeida: "[OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
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
