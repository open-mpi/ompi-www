<?
$subject_val = "Re: [OMPI users] fork in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 07:50:58 2012" -->
<!-- isoreceived="20120830115058" -->
<!-- sent="Thu, 30 Aug 2012 07:50:52 -0400" -->
<!-- isosent="20120830115052" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fork in Fortran" -->
<!-- id="C4720156-DAB4-4413-84B2-3763887673E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMG+jN=K4hh99KQpFpTTWjG3qFXwd_hCS1t6iXPebg27PjiBWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] fork in Fortran<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 07:50:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20064.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>In reply to:</strong> <a href="20063.php">sudhirs_at_[hidden]: "[OMPI users] fork in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20071.php">Dmitry N. Mikushin: "Re: [OMPI users] fork in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good question.  You might want to ask in some Fortran-based user forums.  :-)
<br>
<p>This list is for support of Open MPI, not necessarily any direct language support.
<br>
<p>But in that light, I'll warn you that fork and friends are not directly supported in MPI applications (e.g., it can cause problems if you're using OpenFabrics-based networks with MPI).  You should use MPI_COMM_SPAWN, instead... but that may be heavier weight than you want.
<br>
<p><p>On Aug 30, 2012, at 7:45 AM, sudhirs@ wrote:
<br>
<p><span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt; How to use fork(), vfork() type functions in Fortran programming ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanking you in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sudhir Kumar Sahoo
</span><br>
<span class="quotelev1">&gt; Ph.D Scholar
</span><br>
<span class="quotelev1">&gt; Dept. Of Chemistry
</span><br>
<span class="quotelev1">&gt; IIT Kanpur-208016
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20064.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>In reply to:</strong> <a href="20063.php">sudhirs_at_[hidden]: "[OMPI users] fork in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20071.php">Dmitry N. Mikushin: "Re: [OMPI users] fork in Fortran"</a>
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
