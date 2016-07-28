<?
$subject_val = "Re: [OMPI users] problem when compiling ompenmpiV1.5.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 06:49:55 2010" -->
<!-- isoreceived="20101216114955" -->
<!-- sent="Thu, 16 Dec 2010 06:49:50 -0500" -->
<!-- isosent="20101216114950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem when compiling ompenmpiV1.5.1" -->
<!-- id="AB6920AF-4E5B-4274-856C-3CC2CC722B08_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="32518_1292498060_oBGBEGo9002281_4D09F486.1010300_at_cea.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem when compiling ompenmpiV1.5.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 06:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15172.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15170.php">Jeff Squyres: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15181.php">Matthias Jurenz: "Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm. I thought we had squashed all VT OMP issues.  Bummer.
<br>
<p>Can you send all the information located here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>If you're not using VampirTrace, you can disable VampirTrace with --disable-vt.
<br>
<p><p>On Dec 16, 2010, at 6:14 AM, Bernard Secher - SFME/LGLS wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to install openmpi without openmp ? Is there any option in configure for that ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bernard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jody a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if i rememmber correctly, &quot;omp.h&quot; is a header file for OpenMP which is
</span><br>
<span class="quotelev2">&gt;&gt; not the same as Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; So it looks like you have to install OpenMP,
</span><br>
<span class="quotelev2">&gt;&gt; Then you can compile it with the compiler option -fopenmp (in gcc)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Dec 16, 2010 at 11:56 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bernard.secher_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following error message when I compile openmpi V1.5.1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CXX    otfprofile-otfprofile.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:11:18:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erreur: omp.h : Aucun fichier ou dossier de ce type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In function &#145;int main(int, const char**)&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:325:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erreur: &#145;omp_set_num_threads&#146; was not declared in this scope
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:460:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erreur: &#145;omp_get_thread_num&#146; was not declared in this scope
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:471:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erreur: &#145;omp_get_num_threads&#146; was not declared in this scope
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The compiler doesn't find the omp.h file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What happens ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;        _\\|//_
</span><br>
<span class="quotelev1">&gt;       (' 0 0 ')
</span><br>
<span class="quotelev1">&gt; ____ooO  (_) Ooo______________________________________________________
</span><br>
<span class="quotelev1">&gt;  Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : 
</span><br>
<span class="quotelev1">&gt; bsecher_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
</span><br>
<span class="quotelev1">&gt;  91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
</span><br>
<span class="quotelev1">&gt; ------------Oooo---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        oooO (   )
</span><br>
<span class="quotelev1">&gt;        (   ) ) /
</span><br>
<span class="quotelev1">&gt;         \ ( (_/
</span><br>
<span class="quotelev1">&gt;          \_)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
</span><br>
<span class="quotelev1">&gt; sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la personne
</span><br>
<span class="quotelev1">&gt; &#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par erreur,
</span><br>
<span class="quotelev1">&gt; merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en conserver
</span><br>
<span class="quotelev1">&gt; de copie.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail and any files transmitted with it are confidential and
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual to whom they are addressed.
</span><br>
<span class="quotelev1">&gt; If you have received this e-mail in error please inform the sender
</span><br>
<span class="quotelev1">&gt; immediately, without keeping any copy thereof.
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
<li><strong>Next message:</strong> <a href="15172.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15170.php">Jeff Squyres: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15181.php">Matthias Jurenz: "Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
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
