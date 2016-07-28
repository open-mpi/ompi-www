<?
$subject_val = "Re: [OMPI users] problem with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 12:52:06 2011" -->
<!-- isoreceived="20111103165206" -->
<!-- sent="Thu, 3 Nov 2011 17:52:01 +0100" -->
<!-- isosent="20111103165201" -->
<!-- name="amine mrabet" -->
<!-- email="aminesm01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mpirun" -->
<!-- id="CAA+UwzuWLcygV3sE0Wd9RHQ_cfSMoc5Za0cbMNuPBSVKyUFtrw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B05356F-FD54-45B6-AD93-740A420CD1A0_at_open-mpi.org" -->
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
<strong>From:</strong> amine mrabet (<em>aminesm01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 12:52:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17680.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<li><strong>Previous message:</strong> <a href="17678.php">Ralph Castain: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="17678.php">Ralph Castain: "Re: [OMPI users] problem with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17689.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Reply:</strong> <a href="17689.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i use openmpi in my computer
<br>
<p>2011/11/3 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Couple of things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Check the configure cmd line you gave - OMPI thinks your local computer
</span><br>
<span class="quotelev1">&gt; should have an openib support that isn't correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. did you recompile your app on your local computer, using the version of
</span><br>
<span class="quotelev1">&gt; OMPI built/installed there?
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
<span class="quotelev2">&gt; &gt; i use mpirun tu run program  with using mpi this program worked well in
</span><br>
<span class="quotelev1">&gt; university computer
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<p><p><p><pre>
-- 
amine mrabet
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17680.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<li><strong>Previous message:</strong> <a href="17678.php">Ralph Castain: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="17678.php">Ralph Castain: "Re: [OMPI users] problem with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17689.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Reply:</strong> <a href="17689.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
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
