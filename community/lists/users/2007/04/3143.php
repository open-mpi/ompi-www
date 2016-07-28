<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 25 20:30:53 2007" -->
<!-- isoreceived="20070426003053" -->
<!-- sent="Wed, 25 Apr 2007 19:30:49 -0500" -->
<!-- isosent="20070426003049" -->
<!-- name="Bruce Foster" -->
<!-- email="bef_at_[hidden]" -->
<!-- subject="[OMPI users] Portland Group Compiler &amp;quot;-Msignextend&amp;quot; flag" -->
<!-- id="p0624050bc255a0e8456f_at_[129.105.110.38]" -->
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
<strong>From:</strong> Bruce Foster (<em>bef_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-25 20:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3144.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>Previous message:</strong> <a href="3142.php">Tim Mattox: "[OMPI users] Open MPI v1.2.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3144.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>Reply:</strong> <a href="3144.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>Maybe reply:</strong> <a href="3147.php">Götz Waschk: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The README instructions for PGI compilation have a typo:
<br>
<p>Current context:
<br>
<p>- The Portland Group compilers require the &quot;-Msignextend&quot; compiler
<br>
&nbsp;&nbsp;&nbsp;flag to extend the sign bit when converting from a shorter to longer
<br>
&nbsp;&nbsp;&nbsp;integer.  This is is different than other compilers (such as GNU).
<br>
&nbsp;&nbsp;&nbsp;When compiling Open MPI with the Portland compiler suite, the
<br>
&nbsp;&nbsp;&nbsp;following flags should be passed to Open MPI's configure script:
<br>
<p>&nbsp;&nbsp;&nbsp;shell$ ./configure CFLAGS=-Msignextend CXXFLAGS=-signextent \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=-Msignextend \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=-Msignextend ...
<br>
<p>&nbsp;&nbsp;&nbsp;This will both compile Open MPI with the proper compile flags and
<br>
&nbsp;&nbsp;&nbsp;also automatically add &quot;-Msignextend&quot; when the C and C++ MPI wrapper
<br>
&nbsp;&nbsp;&nbsp;compilers are used to compile user MPI applications.
<br>
<p>Should be:
<br>
<p>&nbsp;&nbsp;&nbsp;shell$ ./configure CFLAGS=-Msignextend CXXFLAGS=-Msignextend \
<br>
<p>That fixes the CXXFLAGS definition.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3144.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>Previous message:</strong> <a href="3142.php">Tim Mattox: "[OMPI users] Open MPI v1.2.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3144.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>Reply:</strong> <a href="3144.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>Maybe reply:</strong> <a href="3147.php">Götz Waschk: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
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
