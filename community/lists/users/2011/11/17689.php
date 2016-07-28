<?
$subject_val = "Re: [OMPI users] problem with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 18:22:10 2011" -->
<!-- isoreceived="20111103222210" -->
<!-- sent="Thu, 3 Nov 2011 18:22:03 -0400" -->
<!-- isosent="20111103222203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mpirun" -->
<!-- id="2E998DAD-DAA5-47EB-9310-06AD26C77F1F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAA+UwzuWLcygV3sE0Wd9RHQ_cfSMoc5Za0cbMNuPBSVKyUFtrw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 18:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17690.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17688.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17691.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Reply:</strong> <a href="17691.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like you have an old version of Open MPI that is not ignoring your unconfigured OpenFabrics devices in your Linux install.  This is a guess because you didn't provide any information about your Open MPI installation.  :-)
<br>
<p>Try upgrading to a newer version of Open MPI.
<br>
<p><p>On Nov 3, 2011, at 12:52 PM, amine mrabet wrote:
<br>
<p><span class="quotelev1">&gt; i use openmpi in my computer 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/11/3 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Couple of things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Check the configure cmd line you gave - OMPI thinks your local computer should have an openib support that isn't correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. did you recompile your app on your local computer, using the version of OMPI built/installed there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2011, at 10:10 AM, amine mrabet wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hey ,
</span><br>
<span class="quotelev2">&gt; &gt; i use mpirun tu run program  with using mpi this program worked well in university computer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but with mine i have this error
</span><br>
<span class="quotelev2">&gt; &gt;  i run with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; amine_at_dellam:~/Bureau$ mpirun  -np 2 pl
</span><br>
<span class="quotelev2">&gt; &gt; and i have this error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [0,0,0]: OpenIB on host dellam was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt; &gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt; &gt; lower performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; any help?!
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; amine mrabet
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17690.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17688.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17691.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Reply:</strong> <a href="17691.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
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
