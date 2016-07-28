<?
$subject_val = "Re: [OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 08:38:06 2008" -->
<!-- isoreceived="20081013123806" -->
<!-- sent="Mon, 13 Oct 2008 08:38:02 -0400" -->
<!-- isosent="20081013123802" -->
<!-- name="Sean Davis" -->
<!-- email="sdavis2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi installation issues" -->
<!-- id="264855a00810130538i26efc07u33ce8c5f1353ca0a_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="079F5F13-E10B-4BE6-8C20-9F63385726FC_at_cisco.com" -->
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
<strong>From:</strong> Sean Davis (<em>sdavis2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 08:38:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6965.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6965.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 13, 2008 at 8:14 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; We always recommend using the Open MPI &quot;wrapper&quot; compilers instead of
</span><br>
<span class="quotelev1">&gt; directly using gcc.  There are very few scenarios where it is better to use
</span><br>
<span class="quotelev1">&gt; the native compilers directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to check with the RMPI authors for more details; I'm afraid
</span><br>
<span class="quotelev1">&gt; that I don't know anything about that package.
</span><br>
<p>To be explicit, try:
<br>
<p>CC=&quot;mpicc&quot; R CMD INSTALL Rmpi_0.5-6.tar.gz
<br>
<p>Sean
<br>
<p><p><span class="quotelev1">&gt; On Oct 13, 2008, at 5:22 AM, Simone Giannerini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have troubles installing rmpi  0.5-5 (or 0.5-6) on a quad opteron
</span><br>
<span class="quotelev2">&gt;&gt; machine with OpenSUSE 11.0 and
</span><br>
<span class="quotelev2">&gt;&gt; R 2.7.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; platform       x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; arch           x86_64
</span><br>
<span class="quotelev2">&gt;&gt; os             linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; system         x86_64, linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; status         Patched
</span><br>
<span class="quotelev2">&gt;&gt; major          2
</span><br>
<span class="quotelev2">&gt;&gt; minor          7.2
</span><br>
<span class="quotelev2">&gt;&gt; year           2008
</span><br>
<span class="quotelev2">&gt;&gt; month          09
</span><br>
<span class="quotelev2">&gt;&gt; day            18
</span><br>
<span class="quotelev2">&gt;&gt; svn rev        46546
</span><br>
<span class="quotelev2">&gt;&gt; language       R
</span><br>
<span class="quotelev2">&gt;&gt; version.string R version 2.7.2 Patched (2008-09-18 r46546)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried the following
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # export MPI_ROOT=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # R CMD INSTALL  Rmpi_0.5-6.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Installing to library '/usr/local/lib64/R/library'
</span><br>
<span class="quotelev2">&gt;&gt; * Installing *source* package 'Rmpi' ...
</span><br>
<span class="quotelev2">&gt;&gt; checking for gcc... gcc
</span><br>
<span class="quotelev2">&gt;&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev2">&gt;&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are cross compiling... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for suffix of executables...
</span><br>
<span class="quotelev2">&gt;&gt; checking for suffix of object files... o
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU C compiler... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether gcc accepts -g... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for gcc option to accept ISO C89... none needed
</span><br>
<span class="quotelev2">&gt;&gt; Try to find mpi.h ...
</span><br>
<span class="quotelev2">&gt;&gt; Found in /usr/lib64/mpi/gcc/openmpi//include
</span><br>
<span class="quotelev2">&gt;&gt; Try to find libmpi.so or libmpich.a
</span><br>
<span class="quotelev2">&gt;&gt; checking for main in -lmpi... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for openpty in -lutil... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for main in -lpthread... yes
</span><br>
<span class="quotelev2">&gt;&gt; configure: creating ./config.status
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating src/Makevars
</span><br>
<span class="quotelev2">&gt;&gt; ** libs
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
</span><br>
<span class="quotelev2">&gt;&gt; -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c RegQuery.c -o
</span><br>
<span class="quotelev2">&gt;&gt; RegQuery.o
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
</span><br>
<span class="quotelev2">&gt;&gt; -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c Rmpi.c -o Rmpi.o
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
</span><br>
<span class="quotelev2">&gt;&gt; -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c conversion.c -o
</span><br>
<span class="quotelev2">&gt;&gt; conversion.o
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2
</span><br>
<span class="quotelev2">&gt;&gt; -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c internal.c -o
</span><br>
<span class="quotelev2">&gt;&gt; internal.o
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -shared -L/usr/local/lib64 -o Rmpi.so RegQuery.o Rmpi.o
</span><br>
<span class="quotelev2">&gt;&gt; conversion.o internal.o -L/usr/lib64/mpi/gcc/openmpi//lib -lmpi -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lpthread -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.3/../../../../x86_64-suse-linux/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; cannot find -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [Rmpi.so] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; chmod: cannot access `/usr/local/lib64/R/library/Rmpi/libs/*': No such
</span><br>
<span class="quotelev2">&gt;&gt; file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: compilation failed for package 'Rmpi'
</span><br>
<span class="quotelev2">&gt;&gt; ** Removing '/usr/local/lib64/R/library/Rmpi'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also tried with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; R CMD INSTALL  Rmpi_0.5-6.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; --configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with the same results.
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Simone Giannerini
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Simone Giannerini
</span><br>
<span class="quotelev2">&gt;&gt; Dipartimento di Scienze Statistiche &quot;Paolo Fortunati&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Universita' di Bologna
</span><br>
<span class="quotelev2">&gt;&gt; Via delle belle arti 41 - 40126  Bologna,  ITALY
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +39 051 2098262  Fax: +39 051 232153
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www2.stat.unibo.it/giannerini/">http://www2.stat.unibo.it/giannerini/</a>
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6965.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6965.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
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
