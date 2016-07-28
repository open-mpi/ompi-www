<?
$subject_val = "[OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 05:22:55 2008" -->
<!-- isoreceived="20081013092255" -->
<!-- sent="Mon, 13 Oct 2008 11:22:49 +0200" -->
<!-- isosent="20081013092249" -->
<!-- name="Simone Giannerini" -->
<!-- email="sgiannerini_at_[hidden]" -->
<!-- subject="[OMPI users] Rmpi installation issues" -->
<!-- id="3c12769c0810130222s25b56353wa201e278df1676bf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Rmpi installation issues<br>
<strong>From:</strong> Simone Giannerini (<em>sgiannerini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 05:22:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6960.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6965.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have troubles installing rmpi  0.5-5 (or 0.5-6) on a quad opteron machine
<br>
with OpenSUSE 11.0 and
<br>
R 2.7.2
<br>
<p>platform       x86_64-unknown-linux-gnu
<br>
arch           x86_64
<br>
os             linux-gnu
<br>
system         x86_64, linux-gnu
<br>
status         Patched
<br>
major          2
<br>
minor          7.2
<br>
year           2008
<br>
month          09
<br>
day            18
<br>
svn rev        46546
<br>
language       R
<br>
version.string R version 2.7.2 Patched (2008-09-18 r46546)
<br>
<p>I tried the following
<br>
<p># export MPI_ROOT=/usr/lib64/mpi/gcc/openmpi/
<br>
<p># R CMD INSTALL  Rmpi_0.5-6.tar.gz
<br>
<p>* Installing to library '/usr/local/lib64/R/library'
<br>
* Installing *source* package 'Rmpi' ...
<br>
checking for gcc... gcc
<br>
checking for C compiler default output file name... a.out
<br>
checking whether the C compiler works... yes
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of executables...
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether gcc accepts -g... yes
<br>
checking for gcc option to accept ISO C89... none needed
<br>
Try to find mpi.h ...
<br>
Found in /usr/lib64/mpi/gcc/openmpi//include
<br>
Try to find libmpi.so or libmpich.a
<br>
checking for main in -lmpi... yes
<br>
checking for openpty in -lutil... yes
<br>
checking for main in -lpthread... yes
<br>
configure: creating ./config.status
<br>
config.status: creating src/Makevars
<br>
** libs
<br>
gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
<br>
-DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c RegQuery.c -o
<br>
RegQuery.o
<br>
gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
<br>
-DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c Rmpi.c -o Rmpi.o
<br>
gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
<br>
-DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c conversion.c -o
<br>
conversion.o
<br>
gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
<br>
-DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c internal.c -o
<br>
internal.o
<br>
gcc -std=gnu99 -shared -L/usr/local/lib64 -o Rmpi.so RegQuery.o Rmpi.o
<br>
conversion.o internal.o -L/usr/lib64/mpi/gcc/openmpi//lib -lmpi -lutil
<br>
-lpthread -fPIC
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.3/../../../../x86_64-suse-linux/bin/ld:
<br>
cannot find -lmpi
<br>
collect2: ld returned 1 exit status
<br>
make: *** [Rmpi.so] Error 1
<br>
chmod: cannot access `/usr/local/lib64/R/library/Rmpi/libs/*': No such file
<br>
or directory
<br>
ERROR: compilation failed for package 'Rmpi'
<br>
** Removing '/usr/local/lib64/R/library/Rmpi'
<br>
<p>I also tried with
<br>
<p>R CMD INSTALL  Rmpi_0.5-6.tar.gz
<br>
--configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
<br>
<p>with the same results.
<br>
Any help would be greatly appreciated.
<br>
<p>Regards
<br>
<p>Simone Giannerini
<br>
<p><p><p><pre>
-- 
______________________________________________________
Simone Giannerini
Dipartimento di Scienze Statistiche &quot;Paolo Fortunati&quot;
Universita' di Bologna
Via delle belle arti 41 - 40126  Bologna,  ITALY
Tel: +39 051 2098262  Fax: +39 051 232153
<a href="http://www2.stat.unibo.it/giannerini/">http://www2.stat.unibo.it/giannerini/</a>
______________________________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6961/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6960.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6965.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
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
