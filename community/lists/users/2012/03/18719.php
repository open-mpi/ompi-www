<?
$subject_val = "[OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  8 22:27:31 2012" -->
<!-- isoreceived="20120309032731" -->
<!-- sent="Thu, 08 Mar 2012 22:27:21 -0500" -->
<!-- isosent="20120309032721" -->
<!-- name="Robert Collyer" -->
<!-- email="rcollyer_at_[hidden]" -->
<!-- subject="[OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5" -->
<!-- id="4F597899.9050905_at_phys.lsu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5<br>
<strong>From:</strong> Robert Collyer (<em>rcollyer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-08 22:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18720.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18718.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18720.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18720.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The libtool that is constructed for the configuration I'm using (below) 
<br>
has bug when it is constructing compiler_lib_search_path in both the CXX 
<br>
and FC sections, as follows
<br>
<p>compiler_lib_search_path=&quot;-L/lib -L/usr/lib -L/usr/local/lib' ...&quot;
<br>
<p>where the ellipses is just more directories. The error is the extra ' 
<br>
placed after /usr/local/lib. I am not sure where it creeps in as I am 
<br>
unfamiliar with m4.  Changing both instances allows compilation to 
<br>
continue. Additionally, the extra ' is present in both instances of 
<br>
compiler_lib_search_dir, also.
<br>
<p>Sincerely,
<br>
Rob Collyer
<br>
<p>P.S. My configuration, to be run from the shell using sh:
<br>
<p>export LDFLAGS=&quot;-L/opt/lib -L/opt/lib -L/usr/lib -L/usr/local/lib&quot;
<br>
export CPPFLAGS=&quot;-I/opt/include -I/usr/include -I/usr/local/include&quot;
<br>
export FCFLAGS=&quot;-I/opt/include -I/usr/include -I/usr/local/include&quot;
<br>
<p>./configure --prefix=`pwd` CC=/opt/bin/gcc CXX=/opt/bin/g++ 
<br>
FC=/opt/bin/gfortran F77=/opt/bin/gfortran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18720.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18718.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18720.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18720.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
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
