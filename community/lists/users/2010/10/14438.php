<?
$subject_val = "[OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 11 16:50:09 2010" -->
<!-- isoreceived="20101011205009" -->
<!-- sent="Mon, 11 Oct 2010 22:50:03 +0200" -->
<!-- isosent="20101011205003" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="[OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="AANLkTikoTSWwbjMx00s7LkRrJoTGW1Nidy_6O4_7GPxo_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-11 16:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14439.php">Mahesh Salunkhe: "[OMPI users] connecting to MPI from outside"</a>
<li><strong>Previous message:</strong> <a href="14437.php">Bowen Zhou: "Re: [OMPI users] nonblocking send/receive question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Maybe reply:</strong> <a href="14480.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that this is an out-of-source build.
<br>
<p>$ ../configure --enable-debug --enable-mem-debug
<br>
--prefix=/home/jed/usr/ompi-1.5-clang CC=clang CXX=clang++
<br>
$ make
<br>
[...]
<br>
&nbsp;&nbsp;CXXLD  vtunify-mpi
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Abort':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:63:
<br>
undefined reference to `MPI_Abort'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Address':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:74:
<br>
undefined reference to `MPI_Address'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Barrier':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:86:
<br>
undefined reference to `MPI_Barrier'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Bcast':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:101:
<br>
undefined reference to `MPI_Bcast'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Comm_size':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:115:
<br>
undefined reference to `MPI_Comm_size'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Comm_rank':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:127:
<br>
undefined reference to `MPI_Comm_rank'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Finalize':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:138:
<br>
undefined reference to `MPI_Finalize'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Init':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:149:
<br>
undefined reference to `MPI_Init'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Pack':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:165:
<br>
undefined reference to `MPI_Pack'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Pack_size':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:180:
<br>
undefined reference to `MPI_Pack_size'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Recv':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:197:
<br>
undefined reference to `MPI_Recv'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Send':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:218:
<br>
undefined reference to `MPI_Send'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Type_commit':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:230:
<br>
undefined reference to `MPI_Type_commit'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Type_free':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:242:
<br>
undefined reference to `MPI_Type_free'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Type_struct':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:270:
<br>
undefined reference to `MPI_Type_struct'
<br>
vtunify_mpi-vt_unify_mpi.o: In function `VTUnify_MPI_Unpack':
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/tools/vtunify/mpi/../../../../../../../../ompi/contrib/vt/vt/tools/vtunify/mpi/vt_unify_mpi.c:300:
<br>
undefined reference to `MPI_Unpack'
<br>
collect2: ld returned 1 exit status
<br>
clang: error: linker (via gcc) command failed with exit code 1 (use -v to
<br>
see invocation)
<br>
make[7]: *** [vtunify-mpi] Error 1
<br>
<p><p>Leaving out the debugging flags gets me further (no compilation error, just
<br>
this link error):
<br>
<p>$ ../configure --prefix=/home/jed/usr/ompi-1.5-clang CC=clang CXX=clang++
<br>
$ make
<br>
[...]
<br>
&nbsp;&nbsp;CCLD   libutil.la
<br>
ar:
<br>
/home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/util/.libs/libutil.a: No
<br>
such file or directory
<br>
make[5]: *** [libutil.la] Error 9
<br>
<p>I also get this last failure with gcc-4.5.1, but only with the debug flags:
<br>
<p>$ ../configure --enable-debug --enable-mem-debug
<br>
--prefix=/home/jed/usr/ompi-1.5-gcc CC=gcc CXX=g++
<br>
$ make
<br>
[...]
<br>
Making all in util
<br>
&nbsp;&nbsp;CC     libutil_la-installdirs.lo
<br>
&nbsp;&nbsp;CCLD   libutil.la
<br>
ar: /home/jed/src/openmpi-1.5/bgcc/ompi/contrib/vt/vt/util/.libs/libutil.a:
<br>
No such file or directory
<br>
make[5]: *** [libutil.la] Error 9
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[3]: *** [all] Error 2
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>There are also lots of these warnings (almost every compilation unit).
<br>
<p>../../../../../../../../opal/include/opal/sys/atomic_impl.h:124:7: warning:
<br>
indirection of non-volatile null pointer will be deleted, not trap
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*(int*)(0) = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^~~~~~~~~~
<br>
../../../../../../../../opal/include/opal/sys/atomic_impl.h:124:7: note:
<br>
consider using __builtin_trap() or qualifying pointer with 'volatile'
<br>
<p><p>Trunk became unbuildable for me a couple months ago, but it was written off
<br>
(could find the bug number) as being the fault of my autotools being too
<br>
new, thus I haven't built from mercurial recently.  Otherwise I might have
<br>
been able to point these out prior to the release.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14439.php">Mahesh Salunkhe: "[OMPI users] connecting to MPI from outside"</a>
<li><strong>Previous message:</strong> <a href="14437.php">Bowen Zhou: "Re: [OMPI users] nonblocking send/receive question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Maybe reply:</strong> <a href="14480.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
