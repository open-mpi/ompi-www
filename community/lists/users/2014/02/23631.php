<?
$subject_val = "[OMPI users] linking with openmpi version 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 24 12:03:11 2014" -->
<!-- isoreceived="20140224170311" -->
<!-- sent="Mon, 24 Feb 2014 10:02:47 -0700" -->
<!-- isosent="20140224170247" -->
<!-- name="ocnoptcs_at_[hidden]" -->
<!-- email="ocnoptcs_at_[hidden]" -->
<!-- subject="[OMPI users] linking with openmpi version 1.6.1" -->
<!-- id="!&amp;!AAAAAAAAAAAYAAAAAAAAAIREkfl+k5FLojq+8en22/jCgAAAEAAAALSH7JxJne1EoQ69YsaFkT8BAAAAAA==_at_earthlink.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] linking with openmpi version 1.6.1<br>
<strong>From:</strong> <a href="mailto:ocnoptcs_at_[hidden]?Subject=Re:%20[OMPI%20users]%20linking%20with%20openmpi%20version%201.6.1"><em>ocnoptcs_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-24 12:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Previous message:</strong> <a href="23630.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Reply:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi...
<br>
<p>&nbsp;
<br>
<p>I have a rather large and complex set of FORTRAN and C++ programs for a
<br>
simulation project.
<br>
<p>&nbsp;
<br>
<p>I am using a Nvidia Cluster system that hosts Linux along with openmpi
<br>
version 1.6.1 along with
<br>
<p>FORTRAN 77 and 90 compilers and C++.  The linux system uses Bourne shells.
<br>
<p>I have a makefile that compiles and links the object codes
<br>
<p>To produce an executable file.
<br>
<p>&nbsp;
<br>
<p>In the past I have been successful in compiling, linking, and running the
<br>
modules using IBM MPI,
<br>
<p>As well as SUN, SGI, and CRAY.  However, I cannot seem to get the FORTRAN
<br>
object files to link
<br>
<p>With the C++ object files with this system.  Unfortunately the system I am
<br>
now using has no manuals
<br>
<p>On openmpi.
<br>
<p>&nbsp;
<br>
<p>In attempt to link, I am getting the following error messages..
<br>
<p>&nbsp;
<br>
<p>&quot;undefined reference to ranf_&quot;
<br>
<p>&quot;undefined reference to ranskip_&quot;
<br>
<p>&quot;undefined reference to ranget_&quot;
<br>
<p>&nbsp;
<br>
<p>I have 3 C++ routines in a module called ranf, ranskip, ranf.
<br>
<p>&nbsp;
<br>
<p>In the fortran programs, I make calls to the C++ like
<br>
<p>&nbsp;
<br>
<p>R = RANF
<br>
<p>&nbsp;
<br>
<p>And have the C++ routine set up as ..
<br>
<p>&nbsp;
<br>
<p>Real  ranf  (void)
<br>
<p>&nbsp;
<br>
<p>It seems that it is referring to the fact that I need an underscore in the
<br>
C++ routine name,
<br>
<p>&nbsp;
<br>
<p>Like real ranf_ (void)
<br>
<p>&nbsp;
<br>
<p>As I said previously, the other systems I used does not require the
<br>
underscore.  I thought
<br>
<p>This one might so I tried to use the underscore but getting the same
<br>
results.
<br>
<p>&nbsp;
<br>
<p>I am attaching the makefile (compressed with bzip2) which I hope will be
<br>
some help.
<br>
<p>&nbsp;
<br>
<p>I would appreciate any help in this matter.  It is best to respond to me via
<br>
my email
<br>
<p>As it is quite infrequent that I can access the user list.
<br>
<p>&nbsp;
<br>
<p>Thanks.
<br>
<p>&nbsp;
<br>
<p>Bill
<br>
<p>&nbsp;
<br>
<p>ocnoptcs_at_[hidden] &lt;mailto:ocnoptcs_at_[hidden]&gt; 
<br>
<p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23631/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23631/Makefile.bz2">Makefile.bz2</a>
</ul>
<!-- attachment="Makefile.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23632.php">Ralph Castain: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>Previous message:</strong> <a href="23630.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Reply:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
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
