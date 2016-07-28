<?
$subject_val = "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 06:14:20 2010" -->
<!-- isoreceived="20101216111420" -->
<!-- sent="Thu, 16 Dec 2010 12:14:14 +0100" -->
<!-- isosent="20101216111414" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bernard.secher_at_[hidden]" -->
<!-- subject="[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1" -->
<!-- id="32518_1292498060_oBGBEGo9002281_4D09F486.1010300_at_cea.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTinASvdnCC0mEzR3TBCc+p6nb9H9VTEY7nTwNDZH_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1<br>
<strong>From:</strong> Bernard Secher - SFME/LGLS (<em>bernard.secher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 06:14:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15170.php">Jeff Squyres: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15171.php">Jeff Squyres: "Re: [OMPI users] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Reply:</strong> <a href="15171.php">Jeff Squyres: "Re: [OMPI users] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Maybe reply:</strong> <a href="15181.php">Matthias Jurenz: "Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jody,
<br>
<p>Is it possible to install openmpi without openmp ? Is there any option 
<br>
in configure for that ?
<br>
<p>Bernard
<br>
<p>jody a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i rememmber correctly, &quot;omp.h&quot; is a header file for OpenMP which is
</span><br>
<span class="quotelev1">&gt; not the same as Open MPI.
</span><br>
<span class="quotelev1">&gt; So it looks like you have to install OpenMP,
</span><br>
<span class="quotelev1">&gt; Then you can compile it with the compiler option -fopenmp (in gcc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 16, 2010 at 11:56 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev1">&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error message when I compile openmpi V1.5.1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   CXX    otfprofile-otfprofile.o
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:11:18:
</span><br>
<span class="quotelev2">&gt;&gt; erreur: omp.h : Aucun fichier ou dossier de ce type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:
</span><br>
<span class="quotelev2">&gt;&gt; In function &#145;int main(int, const char**)&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:325:
</span><br>
<span class="quotelev2">&gt;&gt; erreur: &#145;omp_set_num_threads&#146; was not declared in this scope
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:460:
</span><br>
<span class="quotelev2">&gt;&gt; erreur: &#145;omp_get_thread_num&#146; was not declared in this scope
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:471:
</span><br>
<span class="quotelev2">&gt;&gt; erreur: &#145;omp_get_num_threads&#146; was not declared in this scope
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The compiler doesn't find the omp.h file.
</span><br>
<span class="quotelev2">&gt;&gt; What happens ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best
</span><br>
<span class="quotelev2">&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<p><p><pre>
-- 
       _\\|//_
      (' 0 0 ')
____ooO  (_) Ooo______________________________________________________
 Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : bsecher_at_[hidden]
 CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
 91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
------------Oooo---------------------------------------------------
       oooO (   )
       (   ) ) /
        \ ( (_/
         \_)
Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la personne
&#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par erreur,
merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en conserver
de copie.
This e-mail and any files transmitted with it are confidential and
intended solely for the use of the individual to whom they are addressed.
If you have received this e-mail in error please inform the sender
immediately, without keeping any copy thereof.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15170.php">Jeff Squyres: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15171.php">Jeff Squyres: "Re: [OMPI users] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Reply:</strong> <a href="15171.php">Jeff Squyres: "Re: [OMPI users] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Maybe reply:</strong> <a href="15181.php">Matthias Jurenz: "Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
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
