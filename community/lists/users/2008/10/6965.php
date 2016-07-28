<?
$subject_val = "Re: [OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 08:40:15 2008" -->
<!-- isoreceived="20081013124015" -->
<!-- sent="Mon, 13 Oct 2008 07:40:05 -0500" -->
<!-- isosent="20081013124005" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi installation issues" -->
<!-- id="18675.16805.987709.800210_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3c12769c0810130222s25b56353wa201e278df1676bf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Rmpi installation issues<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 08:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6964.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6961.php">Simone Giannerini: "[OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13 October 2008 at 11:22, Simone Giannerini wrote:
<br>
| Dear all,
<br>
| 
<br>
| I have troubles installing rmpi  0.5-5 (or 0.5-6) on a quad opteron machine
<br>
| with OpenSUSE 11.0 and
<br>
| R 2.7.2
<br>
| 
<br>
| platform       x86_64-unknown-linux-gnu
<br>
| arch           x86_64
<br>
| os             linux-gnu
<br>
| system         x86_64, linux-gnu
<br>
| status         Patched
<br>
| major          2
<br>
| minor          7.2
<br>
| year           2008
<br>
| month          09
<br>
| day            18
<br>
| svn rev        46546
<br>
| language       R
<br>
| version.string R version 2.7.2 Patched (2008-09-18 r46546)
<br>
| 
<br>
| I tried the following
<br>
| 
<br>
| # export MPI_ROOT=/usr/lib64/mpi/gcc/openmpi/
<br>
| 
<br>
| # R CMD INSTALL  Rmpi_0.5-6.tar.gz
<br>
<p>Where did you get 0.5-6 from? The newest, per the author's website, is 0.5-5.
<br>
&nbsp;
<br>
| * Installing to library '/usr/local/lib64/R/library'
<br>
| * Installing *source* package 'Rmpi' ...
<br>
| checking for gcc... gcc
<br>
| checking for C compiler default output file name... a.out
<br>
| checking whether the C compiler works... yes
<br>
| checking whether we are cross compiling... no
<br>
| checking for suffix of executables...
<br>
| checking for suffix of object files... o
<br>
| checking whether we are using the GNU C compiler... yes
<br>
| checking whether gcc accepts -g... yes
<br>
| checking for gcc option to accept ISO C89... none needed
<br>
| Try to find mpi.h ...
<br>
| Found in /usr/lib64/mpi/gcc/openmpi//include
<br>
| Try to find libmpi.so or libmpich.a
<br>
| checking for main in -lmpi... yes
<br>
<p>At this point you have mpi.h and libmpi. Looks good.
<br>
<p>| checking for openpty in -lutil... yes
<br>
| checking for main in -lpthread... yes
<br>
| configure: creating ./config.status
<br>
| config.status: creating src/Makevars
<br>
| ** libs
<br>
| gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
<br>
| -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
| -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
<br>
| -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c RegQuery.c -o
<br>
| RegQuery.o
<br>
| gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
<br>
| -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
| -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
<br>
| -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c Rmpi.c -o Rmpi.o
<br>
| gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
<br>
| -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
| -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
<br>
| -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c conversion.c -o
<br>
| conversion.o
<br>
| gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
<br>
| -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
| -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
<br>
| -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c internal.c -o
<br>
| internal.o
<br>
<p>It all compiles, thanks to mpi.h.
<br>
<p>| gcc -std=gnu99 -shared -L/usr/local/lib64 -o Rmpi.so RegQuery.o Rmpi.o
<br>
| conversion.o internal.o -L/usr/lib64/mpi/gcc/openmpi//lib -lmpi -lutil
<br>
| -lpthread -fPIC
<br>
| /usr/lib64/gcc/x86_64-suse-linux/4.3/../../../../x86_64-suse-linux/bin/ld:
<br>
| cannot find -lmpi
<br>
| collect2: ld returned 1 exit status
<br>
| make: *** [Rmpi.so] Error 1
<br>
| chmod: cannot access `/usr/local/lib64/R/library/Rmpi/libs/*': No such file
<br>
| or directory
<br>
| ERROR: compilation failed for package 'Rmpi'
<br>
| ** Removing '/usr/local/lib64/R/library/Rmpi'
<br>
<p>This seems to indicate that your installation of Open MPI conflicts with your
<br>
setting of 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export MPI_ROOT=/usr/lib64/mpi/gcc/openmpi/
<br>
as this directory is expected to contain include/ and lib/
<br>
&nbsp;
<br>
| I also tried with
<br>
| 
<br>
| R CMD INSTALL  Rmpi_0.5-6.tar.gz
<br>
| --configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
<br>
| 
<br>
| with the same results.
<br>
| Any help would be greatly appreciated.
<br>
<p>I'd recommend having a look at configure.ac, which is pretty straightforward,
<br>
and 'helping' it with the locations you have. I had to do the same for
<br>
Debian's Rmpi due to use also having mpich and lam.
<br>
<p>Hth,  Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6964.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6961.php">Simone Giannerini: "[OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
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
