<?
$subject_val = "[OMPI users] v1.3 on Mac OS X with PGI 8.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 11:10:33 2009" -->
<!-- isoreceived="20090319151033" -->
<!-- sent="Thu, 19 Mar 2009 10:10:28 -0500" -->
<!-- isosent="20090319151028" -->
<!-- name="Tim Campbell" -->
<!-- email="tim.campbell_at_[hidden]" -->
<!-- subject="[OMPI users] v1.3 on Mac OS X with PGI 8.0" -->
<!-- id="hp-ik4CaiN84BOKPvvYJlBawwKU6oaUXVpr9PiieBM_pyzhfVlKA-AjMzcdXnB3ct3MBKON39aU_at_cipher.nrlssc.navy.mil" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] v1.3 on Mac OS X with PGI 8.0<br>
<strong>From:</strong> Tim Campbell (<em>tim.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 11:10:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8517.php">Reuti: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Previous message:</strong> <a href="8515.php">Malone, Scott: "[OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<li><strong>Reply:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
During &quot;make install&quot; of OpenMPI v1.3 on Mac OSX with PGI 8.0 I get  
<br>
the following error.
<br>
<p>----------------------------------------------------------------------
<br>
Making install in mca/paffinity/darwin
<br>
source='paffinity_darwin_module.c' object='paffinity_darwin_module.lo'  
<br>
libtool=yes \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../../config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool --tag=CC   --mode=compile pgcc - 
<br>
DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/ 
<br>
include -I../../../../ompi/include -I../../../../opal/mca/paffinity/ 
<br>
linux/plpa/src/libplpa   -I../../../..  -D_REENTRANT  -O -DNDEBUG   -c  
<br>
-o paffinity_darwin_module.lo paffinity_darwin_module.c
<br>
libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include  
<br>
-I../../../../orte/include -I../../../../ompi/include -I../../../../ 
<br>
opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -D_REENTRANT - 
<br>
O -DNDEBUG -c paffinity_darwin_module.c -o paffinity_darwin_module.o
<br>
PGC-F-0043-Redefinition of symbol, _OSSwapInt16 (/usr/include/libkern/ 
<br>
machine/OSByteOrder.h: 51)
<br>
PGC/x86 OSX 8.0-4: compilation aborted
<br>
make[2]: *** [paffinity_darwin_module.lo] Error 1
<br>
make[1]: *** [install-recursive] Error 1
<br>
make: *** [install-recursive] Error 1
<br>
----------------------------------------------------------------------
<br>
<p>I did not invoke any options for configure.  Any suggestions?
<br>
<p>Thanks,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8517.php">Reuti: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Previous message:</strong> <a href="8515.php">Malone, Scott: "[OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<li><strong>Reply:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
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
