<?
$subject_val = "[OMPI users] compilation error with pgcc Unknown switch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 15:11:07 2012" -->
<!-- isoreceived="20120207201107" -->
<!-- sent="Tue, 7 Feb 2012 12:11:02 -0800" -->
<!-- isosent="20120207201102" -->
<!-- name="Abhinav Sarje" -->
<!-- email="asarje_at_[hidden]" -->
<!-- subject="[OMPI users] compilation error with pgcc Unknown switch" -->
<!-- id="CADbPk81Lt6oKyjzAQeYh9y_pDFHpPDFYu2x9ZmV8R5yp3ux60Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] compilation error with pgcc Unknown switch<br>
<strong>From:</strong> Abhinav Sarje (<em>asarje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 15:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18420.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18418.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18421.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18421.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build open-mpi 1.4.4 (latest stable from open-mpi.org)
<br>
using PGI compilers on a cray platform. PGI compilers' version is
<br>
11.9.0. I get the following error while building:
<br>
-------------------------------------
<br>
Making all in tools/wrappers
<br>
make[2]: Entering directory `{my_installation_directory}/opal/tools/wrappers'
<br>
source='opal_wrapper.c' object='opal_wrapper.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include
<br>
-I../../../orte/include -I../../../ompi/include
<br>
-I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..
<br>
-D_REENTRANT  -O -DNDEBUG -fPIC  -c -o opal_wrapper.o opal_wrapper.c
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link cc  -O -DNDEBUG -fPIC
<br>
&nbsp;-export-dynamic   -o opal_wrapper opal_wrapper.o
<br>
../../../opal/libopen-pal.la -lnsl -lutil
<br>
libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
<br>
opal_wrapper.o --export-dynamic  ../../../opal/.libs/libopen-pal.so
<br>
-ldl -lnsl -lutil -rpath {my_installation_directory}/lib
<br>
pgcc-Error-Unknown switch: --export-dynamic
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory `{my_installation_directory}/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `{my_installation_directory}/opal'
<br>
make: *** [all-recursive] Error 1
<br>
-------------------------------------
<br>
<p>I see that the libtool packaged with open-mpi is 2.2.6b
<br>
When I try to compile this particular part with libtool versions 2.2.6
<br>
or 2.4, I get the following error:
<br>
-------------------------------------
<br>
$ libtool --tag=CC   --mode=link cc  -O -DNDEBUG -fPIC
<br>
-export-dynamic   -o opal_wrapper opal_wrapper.o
<br>
../../../opal/libopen-pal.la -lnsl -lutil
<br>
libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
<br>
opal_wrapper.o -Wl,--export-dynamic
<br>
../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -Wl,-rpath
<br>
-Wl,{my_installation_directory}/lib
<br>
/usr/bin/ld: attempted static link of dynamic object
<br>
`../../../opal/.libs/libopen-pal.so'
<br>
-------------------------------------
<br>
<p>Looking at earlier posts, apparently there was a bug with libtool a
<br>
couple of years ago because of which the above error occurred. This
<br>
was fixed in newer releases, but I am getting similar errors.
<br>
<p>Does anyone have any information on how to fix this, or if I am doing
<br>
something wrong here?
<br>
<p>Thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18420.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18418.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18421.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18421.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
