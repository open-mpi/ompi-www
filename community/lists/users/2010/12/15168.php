<?
$subject_val = "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 06:10:08 2010" -->
<!-- isoreceived="20101216111008" -->
<!-- sent="Thu, 16 Dec 2010 12:10:03 +0100" -->
<!-- isosent="20101216111003" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1" -->
<!-- id="AANLkTinASvdnCC0mEzR3TBCc+p6nb9H9VTEY7nTwNDZH_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="32518_1292496967_oBGAu16u000577_4D09F040.9030905_at_cea.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 06:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15167.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15167.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Reply:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>if i rememmber correctly, &quot;omp.h&quot; is a header file for OpenMP which is
<br>
not the same as Open MPI.
<br>
So it looks like you have to install OpenMP,
<br>
Then you can compile it with the compiler option -fopenmp (in gcc)
<br>
<p>Jody
<br>
<p><p>On Thu, Dec 16, 2010 at 11:56 AM, Bernard Secher - SFME/LGLS
<br>
&lt;bernard.secher_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I get the following error message when I compile openmpi V1.5.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; CXX&#160;&#160;&#160; otfprofile-otfprofile.o
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:11:18:
</span><br>
<span class="quotelev1">&gt; erreur: omp.h : Aucun fichier ou dossier de ce type
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:
</span><br>
<span class="quotelev1">&gt; In function &#145;int main(int, const char**)&#146;:
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:325:
</span><br>
<span class="quotelev1">&gt; erreur: &#145;omp_set_num_threads&#146; was not declared in this scope
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:460:
</span><br>
<span class="quotelev1">&gt; erreur: &#145;omp_get_thread_num&#146; was not declared in this scope
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:471:
</span><br>
<span class="quotelev1">&gt; erreur: &#145;omp_get_num_threads&#146; was not declared in this scope
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compiler doesn't find the omp.h file.
</span><br>
<span class="quotelev1">&gt; What happens ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; Bernard
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15167.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15167.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Reply:</strong> <a href="15169.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
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
