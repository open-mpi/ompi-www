<?
$subject_val = "Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 04:41:52 2010" -->
<!-- isoreceived="20101217094152" -->
<!-- sent="Fri, 17 Dec 2010 10:41:45 +0100" -->
<!-- isosent="20101217094145" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1" -->
<!-- id="201012171041.45472.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1" -->
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
<strong>Subject:</strong> Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 04:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15182.php">GUBERNATIS Pierre 164999: "[OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>Previous message:</strong> <a href="15180.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Maybe in reply to:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>the header file 'omp.h' belongs to the compiler, so if OpenMP is enabled by a 
<br>
specific compiler option (e.g. '-fopenmp' for GNU) the compiler should actually 
<br>
know where the header file is located. There is no need to install any 
<br>
additional OpenMP packages.
<br>
<p>The header include at the indicated source line is surrounded by the following 
<br>
preprocessor condition:
<br>
<p>#ifdef _OPENMP
<br>
# include &lt;omp.h&gt;
<br>
#endif
<br>
<p>It seems to me that the preprocessor macro is defined although OpenMP is 
<br>
disabled or the compiler doesn't support OpenMP.
<br>
<p>Which compiler are you using?
<br>
If the compiler supports OpenMP - where is the 'omp.h' located?
<br>
<p>If you have a suitable 'omp.h', could you please try to specify its path in 
<br>
the preprocessor flags:
<br>
<p>$ ./configure CPPFLAGS=-I&lt;path-to-omp.h&gt; ...
<br>
<p><p>To have a working OpenMPI 1.5.1 for now please perform the following steps: 
<br>
<p>$ cd openmpi-1.5.1/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile
<br>
$ cat otfprofile.cpp | sed -e &quot;s/_OPENMP/NEVER_DEFINED/&quot; &gt;tmp
<br>
$ mv tmp otfprofile.cpp
<br>
<p><p>Matthias Jurenz
<br>
<p><span class="quotelev1">&gt; On Dec 16, 2010, at 6:49 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm. I thought we had squashed all VT OMP issues. Bummer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send all the information located here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you're not using VampirTrace, you can disable VampirTrace with --disable-
</span><br>
vt.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 16, 2010, at 6:14 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Jody,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to install openmpi without openmp ? Is there any option in 
</span><br>
configure for that ?
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bernard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; jody a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if i rememmber correctly, &quot;omp.h&quot; is a header file for OpenMP which is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not the same as Open MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So it looks like you have to install OpenMP,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Then you can compile it with the compiler option -fopenmp (in gcc)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, Dec 16, 2010 at 11:56 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;bernard.secher_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I get the following error message when I compile openmpi V1.5.1:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CXX otfprofile-otfprofile.o
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-
</span><br>
src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:11:18:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; erreur: omp.h : Aucun fichier ou dossier de ce type
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-
</span><br>
src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In function &#226;&#128;&#152;int main(int, const char**)&#226;&#128;&#153;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-
</span><br>
src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:325:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; erreur: &#226;&#128;&#152;omp_set_num_threads&#226;&#128;&#153; was not declared in this scope
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-
</span><br>
src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:460:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; erreur: &#226;&#128;&#152;omp_get_thread_num&#226;&#128;&#153; was not declared in this scope
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ../../../../../../../../../openmpi-1.5.1-
</span><br>
src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:471:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; erreur: &#226;&#128;&#152;omp_get_num_threads&#226;&#128;&#153; was not declared in this scope
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The compiler doesn't find the omp.h file.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What happens ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Best
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; _\\|//_
</span><br>
<span class="quotelev2">&gt; &gt; (' 0 0 ')
</span><br>
<span class="quotelev2">&gt; &gt; ____ooO (_) Ooo______________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Bernard S&#195;&#169;cher DEN/DM2S/SFME/LGLS mailto :
</span><br>
<span class="quotelev2">&gt; &gt; bsecher_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CEA Saclay, B&#195;&#162;t 454, Pi&#195;&#168;ce 114 Phone : 33 (0)1 69 08 73 78
</span><br>
<span class="quotelev2">&gt; &gt; 91191 Gif-sur-Yvette Cedex, France Fax : 33 (0)1 69 08 10 87
</span><br>
<span class="quotelev2">&gt; &gt; ------------Oooo---------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; oooO ( )
</span><br>
<span class="quotelev2">&gt; &gt; ( ) ) /
</span><br>
<span class="quotelev2">&gt; &gt; \ ( (_/
</span><br>
<span class="quotelev2">&gt; &gt; \_)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ce message &#195;&#169;lectronique et tous les fichiers attach&#195;&#169;s qu'il contient
</span><br>
<span class="quotelev2">&gt; &gt; sont confidentiels et destin&#195;&#169;s exclusivement &#195;&#160; l'usage de la personne
</span><br>
<span class="quotelev2">&gt; &gt; &#195;&#160; laquelle ils sont adress&#195;&#169;s. Si vous avez re&#195;&#167;u ce message par erreur,
</span><br>
<span class="quotelev2">&gt; &gt; merci d'en avertir imm&#195;&#169;diatement son &#195;&#169;metteur et de ne pas en conserver
</span><br>
<span class="quotelev2">&gt; &gt; de copie.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This e-mail and any files transmitted with it are confidential and
</span><br>
<span class="quotelev2">&gt; &gt; intended solely for the use of the individual to whom they are addressed.
</span><br>
<span class="quotelev2">&gt; &gt; If you have received this e-mail in error please inform the sender
</span><br>
<span class="quotelev2">&gt; &gt; immediately, without keeping any copy thereof.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15182.php">GUBERNATIS Pierre 164999: "[OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>Previous message:</strong> <a href="15180.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Maybe in reply to:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
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
