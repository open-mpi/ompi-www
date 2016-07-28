<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 19:02:06 2007" -->
<!-- isoreceived="20070323230206" -->
<!-- sent="Fri, 23 Mar 2007 16:01:56 -0700" -->
<!-- isosent="20070323230156" -->
<!-- name="Dan Dansereau" -->
<!-- email="ddansereau_at_[hidden]" -->
<!-- subject="[OMPI users] install error" -->
<!-- id="9E8869B62C56004781914D8107A36DEF010D001F_at_email.corp.hydropoint.com" -->
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
<strong>From:</strong> Dan Dansereau (<em>ddansereau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 19:01:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2907.php">George Bosilca: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2905.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2912.php">Jeff Squyres: "Re: [OMPI users] install error"</a>
<li><strong>Reply:</strong> <a href="2912.php">Jeff Squyres: "Re: [OMPI users] install error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To ALL
<br>
<p>I am getting the following error while attempting to install openmpi on
<br>
a Linux 
<br>
<p>System - as follows
<br>
<p>Linux utahwtm.hydropoint.com 2.6.9-42.0.2.ELsmp #1 SMP Wed Aug 23
<br>
13:38:27 BST 2006 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>&nbsp;
<br>
<p>with the  lntel compilers that are the latest versions of 9.1 
<br>
<p>&nbsp;
<br>
<p>this is the ERROR
<br>
<p>&nbsp;
<br>
<p>libtool: link: icc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
<br>
-restrict -pthread -o opal_wrapper opal_wrapper.o -Wl,--export-dynamic
<br>
-pthread ../../../opal/.libs/libopen-pal.a -lnsl -lutil
<br>
<p>../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o)(.text+0x1d):
<br>
In function `munmap':
<br>
<p>: undefined reference to `__munmap'
<br>
<p>../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o)(.text+0x52):
<br>
In function `opal_mem_free_ptmalloc2_munmap':
<br>
<p>: undefined reference to `__munmap'
<br>
<p>../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o)(.text+0x66):
<br>
In function `mmap':
<br>
<p>: undefined reference to `__mmap'
<br>
<p>../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o)(.text+0x8d):
<br>
In function `opal_mem_free_ptmalloc2_mmap':
<br>
<p>: undefined reference to `__mmap'
<br>
<p>make[2]: *** [opal_wrapper] Error 1
<br>
<p>make[2]: Leaving directory
<br>
`/home/dad/model/openmpi-1.2/opal/tools/wrappers'
<br>
<p>make[1]: *** [all-recursive] Error 1
<br>
<p>make[1]: Leaving directory `/home/dad/model/openmpi-1.2/opal'
<br>
<p>make: *** [all-recursive] Error 1
<br>
<p>&nbsp;
<br>
<p>the config command was 
<br>
<p>./configure CC=icc CXX=icpc F77=ifort FC=ifort --disable-shared
<br>
--enable-static --prefix=/model/OPENMP_I
<br>
<p>&nbsp;
<br>
<p>and executed with no errors
<br>
<p>&nbsp;
<br>
<p>I have attached both the config.log and the compile.log
<br>
<p>&nbsp;
<br>
<p>Any help or direction would greatly be appreciated.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2906/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2907.php">George Bosilca: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2905.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2912.php">Jeff Squyres: "Re: [OMPI users] install error"</a>
<li><strong>Reply:</strong> <a href="2912.php">Jeff Squyres: "Re: [OMPI users] install error"</a>
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
