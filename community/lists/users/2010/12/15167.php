<?
$subject_val = "[OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 05:56:07 2010" -->
<!-- isoreceived="20101216105607" -->
<!-- sent="Thu, 16 Dec 2010 11:56:00 +0100" -->
<!-- isosent="20101216105600" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bernard.secher_at_[hidden]" -->
<!-- subject="[OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1" -->
<!-- id="32518_1292496967_oBGAu16u000577_4D09F040.9030905_at_cea.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1<br>
<strong>From:</strong> Bernard Secher - SFME/LGLS (<em>bernard.secher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 05:56:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15166.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>Reply:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get the following error message when I compile openmpi V1.5.1:
<br>
<p>&nbsp;&nbsp;CXX    otfprofile-otfprofile.o
<br>
../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:11:18: 
<br>
erreur: omp.h : Aucun fichier ou dossier de ce type
<br>
../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp: 
<br>
In function 'int main(int, const char**)':
<br>
../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:325: 
<br>
erreur: 'omp_set_num_threads' was not declared in this scope
<br>
../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:460: 
<br>
erreur: 'omp_get_thread_num' was not declared in this scope
<br>
../../../../../../../../../openmpi-1.5.1-src/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp:471: 
<br>
erreur: 'omp_get_num_threads' was not declared in this scope
<br>
<p>The compiler doesn't find the omp.h file.
<br>
What happens ?
<br>
<p>Best
<br>
Bernard
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15167/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15166.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>Reply:</strong> <a href="15168.php">jody: "Re: [OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
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
