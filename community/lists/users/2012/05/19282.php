<?
$subject_val = "Re: [OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 14:47:58 2012" -->
<!-- isoreceived="20120515184758" -->
<!-- sent="Tue, 15 May 2012 14:47:54 -0400" -->
<!-- isosent="20120515184754" -->
<!-- name="Secretan Yves" -->
<!-- email="Yves.Secretan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO puzzlement" -->
<!-- id="0DA854E5D5F4C8428ABC1701AE2621CD0297AF8B88E3_at_INRSEXCH02.AD.INRS.CA" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1F0D5560-8EB3-4A74-A67B-17A72AA693F0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO puzzlement<br>
<strong>From:</strong> Secretan Yves (<em>Yves.Secretan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 14:47:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19283.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19283.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19283.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hy,
<br>
<p>The patch contains changes for mpi_file_get_view, mpi_file_get_position and mpi_file_get_size.
<br>
I think mpi_file_get_position_shared is another candidate, and maybe mpi_address but this last one I am not sure
<br>
<p>In my first response, I did only list the function I use.
<br>
<p>Yves Secretan
<br>
Yves.Secretan_at_[hidden]
<br>
<p>Avant d'imprimer, pensez &#224; l'environnement 
<br>
<p><p><p>-----Message d'origine-----
<br>
De&#160;: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] De la part de Jeff Squyres
<br>
Envoy&#233;&#160;: 15 mai 2012 14:29
<br>
&#192;&#160;: Open MPI Users
<br>
Objet&#160;: Re: [OMPI users] MPI-IO puzzlement
<br>
<p>On May 15, 2012, at 2:19 PM, Ricardo Reis wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; INTEGER(kind=MPI_OFFSET_KIND) :: offset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_OFFSET_KIND is insuficient to represent my offset...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it not a 64 bit integer for your compiler?
</span><br>
<p>I'm still interested in the answer to this question.
<br>
<p><span class="quotelev2">&gt;&gt; There *is* a bug in OMPI at the moment that we're casting the result back down to 32 bits.  I can give you a patch for that, if you'd like to try it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll get it from svn and try it out. On another note, me thinks with a derived_data type I nail two with one stroke. This problem and the limitation of 2GB per core when writing files...
</span><br>
<p>You should be able to get just a patch that you can apply to your v1.6 tarball here (the trunk patch was different because some filenames have changed between the v1.6 branch and the trunk):
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix.diff">https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix.diff</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19283.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19283.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19283.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
