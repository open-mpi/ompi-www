<?
$subject_val = "Re: [OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 15:54:42 2012" -->
<!-- isoreceived="20120515195442" -->
<!-- sent="Tue, 15 May 2012 15:54:37 -0400" -->
<!-- isosent="20120515195437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO puzzlement" -->
<!-- id="FDE519E8-AEE1-4C11-B00C-037A063FB554_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0DA854E5D5F4C8428ABC1701AE2621CD0297AF8B88E3_at_INRSEXCH02.AD.INRS.CA" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 15:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19284.php">Jeff Squyres: "Re: [OMPI users] Polling and Interrupt"</a>
<li><strong>Previous message:</strong> <a href="19282.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19282.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19286.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops -- yes, I missed FILE_GET_POSITION_SHARED.  I amended the patch:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix2.diff">https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix2.diff</a>
<br>
<p>MPI_Address is also a deprecated function exactly because it takes an fint -- MPI_Get_address replaced it, and uses an MPI_Aint.
<br>
<p><p>On May 15, 2012, at 2:47 PM, Secretan Yves wrote:
<br>
<p><span class="quotelev1">&gt; Hy,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch contains changes for mpi_file_get_view, mpi_file_get_position and mpi_file_get_size.
</span><br>
<span class="quotelev1">&gt; I think mpi_file_get_position_shared is another candidate, and maybe mpi_address but this last one I am not sure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my first response, I did only list the function I use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yves Secretan
</span><br>
<span class="quotelev1">&gt; Yves.Secretan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Avant d'imprimer, pensez &#224; l'environnement 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Message d'origine-----
</span><br>
<span class="quotelev1">&gt; De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] De la part de Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Envoy&#233; : 15 mai 2012 14:29
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Users
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] MPI-IO puzzlement
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 15, 2012, at 2:19 PM, Ricardo Reis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INTEGER(kind=MPI_OFFSET_KIND) :: offset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_OFFSET_KIND is insuficient to represent my offset...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it not a 64 bit integer for your compiler?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm still interested in the answer to this question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There *is* a bug in OMPI at the moment that we're casting the result back down to 32 bits.  I can give you a patch for that, if you'd like to try it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll get it from svn and try it out. On another note, me thinks with a derived_data type I nail two with one stroke. This problem and the limitation of 2GB per core when writing files...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should be able to get just a patch that you can apply to your v1.6 tarball here (the trunk patch was different because some filenames have changed between the v1.6 branch and the trunk):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix.diff">https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix.diff</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="19284.php">Jeff Squyres: "Re: [OMPI users] Polling and Interrupt"</a>
<li><strong>Previous message:</strong> <a href="19282.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19282.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19286.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
