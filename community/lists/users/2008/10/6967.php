<?
$subject_val = "Re: [OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 10:05:11 2008" -->
<!-- isoreceived="20081013140511" -->
<!-- sent="Mon, 13 Oct 2008 16:05:05 +0200" -->
<!-- isosent="20081013140505" -->
<!-- name="Simone Giannerini" -->
<!-- email="sgiannerini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi installation issues" -->
<!-- id="3c12769c0810130705n336c3458p2ddeb3e4970bc746_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3c12769c0810130656w54795b31la29afa439f2de1c9_at_mail.gmail.com" -->
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
<strong>From:</strong> Simone Giannerini (<em>sgiannerini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 10:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6968.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6968.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the sake of completeness,
<br>
Rmpi 0.5-5 does not even find libmpi
<br>
<p>gauss:~/Desktop # R CMD INSTALL  Rmpi_0.5-5.tar.gz
<br>
--configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
<br>
* Installing to library '/usr/local/lib64/R/library'
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
checking for main in -lmpi... no
<br>
libmpi not found. exiting...
<br>
ERROR: configuration failed for package 'Rmpi'
<br>
** Removing '/usr/local/lib64/R/library/Rmpi'
<br>
<p>and adding CC=&quot;mpicc&quot; does not solve the problem
<br>
<p>Thanks,
<br>
<p>Simone
<br>
<p>On Mon, Oct 13, 2008 at 3:56 PM, Simone Giannerini &lt;sgiannerini_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear Dirk,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; many thanks for your reply, please see below,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 13 October 2008 at 11:22, Simone Giannerini wrote:
</span><br>
<span class="quotelev1">&gt; | Dear all,
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | I have troubles installing rmpi 0.5-5 (or 0.5-6) on a quad opteron
</span><br>
<span class="quotelev1">&gt; machine
</span><br>
<span class="quotelev1">&gt; | with OpenSUSE 11.0 and
</span><br>
<span class="quotelev1">&gt; | R 2.7.2
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | platform x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; | arch x86_64
</span><br>
<span class="quotelev1">&gt; | os linux-gnu
</span><br>
<span class="quotelev1">&gt; | system x86_64, linux-gnu
</span><br>
<span class="quotelev1">&gt; | status Patched
</span><br>
<span class="quotelev1">&gt; | major 2
</span><br>
<span class="quotelev1">&gt; | minor 7.2
</span><br>
<span class="quotelev1">&gt; | year 2008
</span><br>
<span class="quotelev1">&gt; | month 09
</span><br>
<span class="quotelev1">&gt; | day 18
</span><br>
<span class="quotelev1">&gt; | svn rev 46546
</span><br>
<span class="quotelev1">&gt; | language R
</span><br>
<span class="quotelev1">&gt; | version.string R version 2.7.2 Patched (2008-09-18 r46546)
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | I tried the following
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | # export MPI_ROOT=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | # R CMD INSTALL Rmpi_0.5-6.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where did you get 0.5-6 from? The newest, per the author's website, is
</span><br>
<span class="quotelev1">&gt; 0.5-5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/download/dev">http://www.stats.uwo.ca/faculty/yu/Rmpi/download/dev</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | * Installing to library '/usr/local/lib64/R/library'
</span><br>
<span class="quotelev1">&gt; | * Installing *source* package 'Rmpi' ...
</span><br>
<span class="quotelev1">&gt; | checking for gcc... gcc
</span><br>
<span class="quotelev1">&gt; | checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev1">&gt; | checking whether the C compiler works... yes
</span><br>
<span class="quotelev1">&gt; | checking whether we are cross compiling... no
</span><br>
<span class="quotelev1">&gt; | checking for suffix of executables...
</span><br>
<span class="quotelev1">&gt; | checking for suffix of object files... o
</span><br>
<span class="quotelev1">&gt; | checking whether we are using the GNU C compiler... yes
</span><br>
<span class="quotelev1">&gt; | checking whether gcc accepts -g... yes
</span><br>
<span class="quotelev1">&gt; | checking for gcc option to accept ISO C89... none needed
</span><br>
<span class="quotelev1">&gt; | Try to find mpi.h ...
</span><br>
<span class="quotelev1">&gt; | Found in /usr/lib64/mpi/gcc/openmpi//include
</span><br>
<span class="quotelev1">&gt; | Try to find libmpi.so or libmpich.a
</span><br>
<span class="quotelev1">&gt; | checking for main in -lmpi... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this point you have mpi.h and libmpi. Looks good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | checking for openpty in -lutil... yes
</span><br>
<span class="quotelev1">&gt; | checking for main in -lpthread... yes
</span><br>
<span class="quotelev1">&gt; | configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; | config.status: creating src/Makevars
</span><br>
<span class="quotelev1">&gt; | ** libs
</span><br>
<span class="quotelev1">&gt; | gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; | -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; | -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
</span><br>
<span class="quotelev1">&gt; | -DOPENMPI -fPIC -I/usr/local/include -fpic -g -O2 -c RegQuery.c -o
</span><br>
<span class="quotelev1">&gt; | RegQuery.o
</span><br>
<span class="quotelev1">&gt; | gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; | -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; | -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
</span><br>
<span class="quotelev1">&gt; | -DOPENMPI -fPIC -I/usr/local/include -fpic -g -O2 -c Rmpi.c -o Rmpi.o
</span><br>
<span class="quotelev1">&gt; | gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; | -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; | -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
</span><br>
<span class="quotelev1">&gt; | -DOPENMPI -fPIC -I/usr/local/include -fpic -g -O2 -c conversion.c -o
</span><br>
<span class="quotelev1">&gt; | conversion.o
</span><br>
<span class="quotelev1">&gt; | gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; | -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; | -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
</span><br>
<span class="quotelev1">&gt; | -DOPENMPI -fPIC -I/usr/local/include -fpic -g -O2 -c internal.c -o
</span><br>
<span class="quotelev1">&gt; | internal.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It all compiles, thanks to mpi.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | gcc -std=gnu99 -shared -L/usr/local/lib64 -o Rmpi.so RegQuery.o Rmpi.o
</span><br>
<span class="quotelev1">&gt; | conversion.o internal.o -L/usr/lib64/mpi/gcc/openmpi//lib -lmpi -lutil
</span><br>
<span class="quotelev1">&gt; | -lpthread -fPIC
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc/x86_64-suse-linux/4.3/../../../../x86_64-suse-linux/bin/ld:
</span><br>
<span class="quotelev1">&gt; | cannot find -lmpi
</span><br>
<span class="quotelev1">&gt; | collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; | make: *** [Rmpi.so] Error 1
</span><br>
<span class="quotelev1">&gt; | chmod: cannot access `/usr/local/lib64/R/library/Rmpi/libs/*': No such
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; | or directory
</span><br>
<span class="quotelev1">&gt; | ERROR: compilation failed for package 'Rmpi'
</span><br>
<span class="quotelev1">&gt; | ** Removing '/usr/local/lib64/R/library/Rmpi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to indicate that your installation of Open MPI conflicts with
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev1">&gt; setting of
</span><br>
<span class="quotelev1">&gt;         export MPI_ROOT=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev1">&gt; as this directory is expected to contain include/ and lib/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure I got this,  Open MPI is installed in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/mpi/gcc/openmpi/ and such directory contains both include and lib
</span><br>
<span class="quotelev1">&gt; folders:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gauss:/usr/lib64/mpi/gcc/openmpi # ls -R
</span><br>
<span class="quotelev1">&gt; bin  include  lib64  share
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./bin:
</span><br>
<span class="quotelev1">&gt; mpiCC   mpicc   mpiexec  mpif90  mpivars.csh  ompi_info     opalc++
</span><br>
<span class="quotelev1">&gt; ortec++  orted
</span><br>
<span class="quotelev1">&gt; mpic++  mpicxx  mpif77   mpirun  mpivars.sh   opal_wrapper  opalcc
</span><br>
<span class="quotelev1">&gt; ortecc   orterun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./include:
</span><br>
<span class="quotelev1">&gt; mpi.h  mpif-common.h  mpif-config.h  mpif.h  openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./include/openmpi:
</span><br>
<span class="quotelev1">&gt; ompi           opal           opal_config_bottom.h  orte
</span><br>
<span class="quotelev1">&gt; ompi_config.h  opal_config.h  opal_stdint.h         orte_config.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./lib64:
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.la        libmpi_cxx.la        libmpi_f90.la
</span><br>
<span class="quotelev1">&gt; libopen-rte.la
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so        libmpi_cxx.so        libmpi_f90.so
</span><br>
<span class="quotelev1">&gt; libopen-rte.so
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.0      libmpi_cxx.so.0      libmpi_f90.so.0
</span><br>
<span class="quotelev1">&gt; libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.0.0.0  libmpi_cxx.so.0.0.0  libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libmpi.la                  libmpi_f77.la        libopen-pal.la
</span><br>
<span class="quotelev1">&gt; mpi.mod
</span><br>
<span class="quotelev1">&gt; libmpi.so                  libmpi_f77.so        libopen-pal.so
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev1">&gt; libmpi.so.0                libmpi_f77.so.0      libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; libmpi.so.0.0.0            libmpi_f77.so.0.0.0  libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | I also tried with
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | R CMD INSTALL Rmpi_0.5-6.tar.gz
</span><br>
<span class="quotelev1">&gt; | --configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | with the same results.
</span><br>
<span class="quotelev1">&gt; | Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; I'd recommend having a look at configure.ac, which is pretty
</span><br>
<span class="quotelev1">&gt; straightforward,
</span><br>
<span class="quotelev1">&gt; and 'helping' it with the locations you have. I had to do the same for
</span><br>
<span class="quotelev1">&gt; Debian's Rmpi due to use also having mpich and lam.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please, could you be more explicit? Thanks, I tried to modify line 8 of the
</span><br>
<span class="quotelev1">&gt; file configure.ac without success. BTW I had also LAM and mpich installed
</span><br>
<span class="quotelev1">&gt; but I removed them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simone
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6967/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6968.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6968.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
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
