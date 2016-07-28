<?
$subject_val = "[OMPI docs] Open MPI compilation Error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 17 08:02:52 2011" -->
<!-- isoreceived="20111017120252" -->
<!-- sent="Mon, 17 Oct 2011 12:02:46 +0000" -->
<!-- isosent="20111017120246" -->
<!-- name="Rashid, Z. (Zahid)" -->
<!-- email="Z.Rashid_at_[hidden]" -->
<!-- subject="[OMPI docs] Open MPI compilation Error" -->
<!-- id="E4836E204F953E4F91484E7A23674AB801C4824F_at_ICTSC-W-S206.soliscom.uu.nl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI docs] Open MPI compilation Error<br>
<strong>From:</strong> Rashid, Z. (Zahid) (<em>Z.Rashid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-17 08:02:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Jeff Squyres: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2011/06/0151.php">Jeff Squyres: "Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Jeff Squyres: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Reply:</strong> <a href="0153.php">Jeff Squyres: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Reply:</strong> <a href="0156.php">Richard Pitre: "Re: [OMPI docs] Open MPI compilation Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI users,
<br>
<p><p>I am trying to compile open MPI (release 1.5.4) from the source code on a Macbook Pro (OS X Lion) with Xcode 4.1 installed. I configure the openmpi with the following options;
<br>
<p>../configure CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 --with-wrapper-cflags=-m64 --with-wrapper-cxxflags=-m64
<br>
<p><p>in a new/clean directory. When I try make it gives me the following error;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Making all in otfprofile
<br>
&nbsp;&nbsp;CXX    otfprofile-otfprofile.o
<br>
&nbsp;&nbsp;CXX    otfprofile-CSVParse.o
<br>
&nbsp;&nbsp;CXX    otfprofile-DataStructure.o
<br>
&nbsp;&nbsp;CXX    otfprofile-Handler.o
<br>
&nbsp;&nbsp;CXX    otfprofile-Prodtex.o
<br>
&nbsp;&nbsp;CXX    otfprofile-Summary.o
<br>
&nbsp;&nbsp;CXXLD  otfprofile
<br>
Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;___builtin_expect&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main.omp_fn.0 in otfprofile-otfprofile.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
collect2: ld returned 1 exit status
<br>
make[9]: *** [otfprofile] Error 1
<br>
make[8]: *** [all-recursive] Error 1
<br>
make[7]: *** [all-recursive] Error 1
<br>
make[6]: *** [all] Error 2
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[3]: *** [all] Error 2
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>I have gcc version 4.2.1 (Based on Apple Inc. build 5658) (LLVM build 2335.15.00), gfortran GNU Fortran (GCC) 4.2.1 (Apple Inc. build 5666) (dot 3) I heard that I can use MacPorts for an easy installation but I want to compile it myself from the source. Can someone suggest me if I need to set some extra flags or what is causing this error? Please let me know if you need any further information.
<br>
<p>Regards.
<br>
<p>Zahid
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Jeff Squyres: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2011/06/0151.php">Jeff Squyres: "Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Jeff Squyres: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Reply:</strong> <a href="0153.php">Jeff Squyres: "Re: [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Reply:</strong> <a href="0156.php">Richard Pitre: "Re: [OMPI docs] Open MPI compilation Error"</a>
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
