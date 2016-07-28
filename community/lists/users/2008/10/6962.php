<?
$subject_val = "Re: [OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 08:14:54 2008" -->
<!-- isoreceived="20081013121454" -->
<!-- sent="Mon, 13 Oct 2008 08:14:45 -0400" -->
<!-- isosent="20081013121445" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi installation issues" -->
<!-- id="079F5F13-E10B-4BE6-8C20-9F63385726FC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 08:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6961.php">Simone Giannerini: "[OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6961.php">Simone Giannerini: "[OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6964.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6964.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We always recommend using the Open MPI &quot;wrapper&quot; compilers instead of  
<br>
directly using gcc.  There are very few scenarios where it is better  
<br>
to use the native compilers directly.
<br>
<p>You might want to check with the RMPI authors for more details; I'm  
<br>
afraid that I don't know anything about that package.
<br>
<p><p>On Oct 13, 2008, at 5:22 AM, Simone Giannerini wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have troubles installing rmpi  0.5-5 (or 0.5-6) on a quad opteron  
</span><br>
<span class="quotelev1">&gt; machine with OpenSUSE 11.0 and
</span><br>
<span class="quotelev1">&gt; R 2.7.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; platform       x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; arch           x86_64
</span><br>
<span class="quotelev1">&gt; os             linux-gnu
</span><br>
<span class="quotelev1">&gt; system         x86_64, linux-gnu
</span><br>
<span class="quotelev1">&gt; status         Patched
</span><br>
<span class="quotelev1">&gt; major          2
</span><br>
<span class="quotelev1">&gt; minor          7.2
</span><br>
<span class="quotelev1">&gt; year           2008
</span><br>
<span class="quotelev1">&gt; month          09
</span><br>
<span class="quotelev1">&gt; day            18
</span><br>
<span class="quotelev1">&gt; svn rev        46546
</span><br>
<span class="quotelev1">&gt; language       R
</span><br>
<span class="quotelev1">&gt; version.string R version 2.7.2 Patched (2008-09-18 r46546)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried the following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # export MPI_ROOT=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # R CMD INSTALL  Rmpi_0.5-6.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Installing to library '/usr/local/lib64/R/library'
</span><br>
<span class="quotelev1">&gt; * Installing *source* package 'Rmpi' ...
</span><br>
<span class="quotelev1">&gt; checking for gcc... gcc
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking whether we are cross compiling... no
</span><br>
<span class="quotelev1">&gt; checking for suffix of executables...
</span><br>
<span class="quotelev1">&gt; checking for suffix of object files... o
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gcc accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking for gcc option to accept ISO C89... none needed
</span><br>
<span class="quotelev1">&gt; Try to find mpi.h ...
</span><br>
<span class="quotelev1">&gt; Found in /usr/lib64/mpi/gcc/openmpi//include
</span><br>
<span class="quotelev1">&gt; Try to find libmpi.so or libmpich.a
</span><br>
<span class="quotelev1">&gt; checking for main in -lmpi... yes
</span><br>
<span class="quotelev1">&gt; checking for openpty in -lutil... yes
</span><br>
<span class="quotelev1">&gt; checking for main in -lpthread... yes
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating src/Makevars
</span><br>
<span class="quotelev1">&gt; ** libs
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot; - 
</span><br>
<span class="quotelev1">&gt; DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot; - 
</span><br>
<span class="quotelev1">&gt; DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2  
</span><br>
<span class="quotelev1">&gt; -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c RegQuery.c - 
</span><br>
<span class="quotelev1">&gt; o RegQuery.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot; - 
</span><br>
<span class="quotelev1">&gt; DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot; - 
</span><br>
<span class="quotelev1">&gt; DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2  
</span><br>
<span class="quotelev1">&gt; -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c Rmpi.c -o  
</span><br>
<span class="quotelev1">&gt; Rmpi.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot; - 
</span><br>
<span class="quotelev1">&gt; DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot; - 
</span><br>
<span class="quotelev1">&gt; DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2  
</span><br>
<span class="quotelev1">&gt; -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c  
</span><br>
<span class="quotelev1">&gt; conversion.c -o conversion.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/local/lib64/R/include -DPACKAGE_NAME=\&quot;\&quot; - 
</span><br>
<span class="quotelev1">&gt; DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot; - 
</span><br>
<span class="quotelev1">&gt; DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/lib64/mpi/gcc/openmpi//include -DMPI2  
</span><br>
<span class="quotelev1">&gt; -DOPENMPI -fPIC -I/usr/local/include    -fpic  -g -O2 -c internal.c - 
</span><br>
<span class="quotelev1">&gt; o internal.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -shared -L/usr/local/lib64 -o Rmpi.so RegQuery.o  
</span><br>
<span class="quotelev1">&gt; Rmpi.o conversion.o internal.o -L/usr/lib64/mpi/gcc/openmpi//lib - 
</span><br>
<span class="quotelev1">&gt; lmpi -lutil -lpthread -fPIC
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc/x86_64-suse-linux/4.3/../../../../x86_64-suse-linux/ 
</span><br>
<span class="quotelev1">&gt; bin/ld: cannot find -lmpi
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make: *** [Rmpi.so] Error 1
</span><br>
<span class="quotelev1">&gt; chmod: cannot access `/usr/local/lib64/R/library/Rmpi/libs/*': No  
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<span class="quotelev1">&gt; ERROR: compilation failed for package 'Rmpi'
</span><br>
<span class="quotelev1">&gt; ** Removing '/usr/local/lib64/R/library/Rmpi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; R CMD INSTALL  Rmpi_0.5-6.tar.gz --configure-args=--with-mpi=/usr/ 
</span><br>
<span class="quotelev1">&gt; lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with the same results.
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simone Giannerini
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simone Giannerini
</span><br>
<span class="quotelev1">&gt; Dipartimento di Scienze Statistiche &quot;Paolo Fortunati&quot;
</span><br>
<span class="quotelev1">&gt; Universita' di Bologna
</span><br>
<span class="quotelev1">&gt; Via delle belle arti 41 - 40126  Bologna,  ITALY
</span><br>
<span class="quotelev1">&gt; Tel: +39 051 2098262  Fax: +39 051 232153
</span><br>
<span class="quotelev1">&gt; <a href="http://www2.stat.unibo.it/giannerini/">http://www2.stat.unibo.it/giannerini/</a>
</span><br>
<span class="quotelev1">&gt; ______________________________________________________
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6961.php">Simone Giannerini: "[OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6961.php">Simone Giannerini: "[OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6964.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6964.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
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
