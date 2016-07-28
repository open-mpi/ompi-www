<?
$subject_val = "Re: [OMPI users] problem with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 12:38:14 2011" -->
<!-- isoreceived="20111103163814" -->
<!-- sent="Thu, 3 Nov 2011 10:38:07 -0600" -->
<!-- isosent="20111103163807" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mpirun" -->
<!-- id="2B05356F-FD54-45B6-AD93-740A420CD1A0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAA+Uwzu1woHFD_Tb83sq3NWFn5HDrfwmDnzcJtkkpcvtWf5uJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 12:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="17677.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17675.php">amine mrabet: "[OMPI users] problem with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Reply:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Couple of things:
<br>
<p>1. Check the configure cmd line you gave - OMPI thinks your local computer should have an openib support that isn't correct.
<br>
<p>2. did you recompile your app on your local computer, using the version of OMPI built/installed there?
<br>
<p><p>On Nov 3, 2011, at 10:10 AM, amine mrabet wrote:
<br>
<p><span class="quotelev1">&gt; hey ,
</span><br>
<span class="quotelev1">&gt; i use mpirun tu run program  with using mpi this program worked well in university computer 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but with mine i have this error
</span><br>
<span class="quotelev1">&gt;  i run with 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amine_at_dellam:~/Bureau$ mpirun  -np 2 pl
</span><br>
<span class="quotelev1">&gt; and i have this error 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,0,0]: OpenIB on host dellam was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in 
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any help?!
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; amine mrabet 
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
<li><strong>Next message:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="17677.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17675.php">amine mrabet: "[OMPI users] problem with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Reply:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
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
