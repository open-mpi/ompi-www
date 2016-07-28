<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun  3 22:10:26 2006" -->
<!-- isoreceived="20060604021026" -->
<!-- sent="Sat, 3 Jun 2006 22:10:21 -0400 (EDT)" -->
<!-- isosent="20060604021021" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler" -->
<!-- id="Pine.LNX.4.63.0606032113430.8397_at_www.beowulf.uwo.ca" -->
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
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-03 22:10:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1377.php">Frank: "[OMPI users] Open MPI 1.0.2 with XGrid on Netvolumes failed to run (wrong ownership)"</a>
<li><strong>Previous message:</strong> <a href="1375.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.  Adding FCFLAGS=&quot;-mismatch -w&quot; allowed openmpi-1.1a9r10177
<br>
to build this time and i am able to run simple test problems on the
<br>
cluster.  However, I am unable to run example problems that come with
<br>
the Nag Parallel library which we also have in addition to the Nag
<br>
f95 compiler.  So I just installed mpich1 with mx support and was able
<br>
to cleanly compile and run the Nag Parallel library sample problems
<br>
with it.  The Nag Parallel library was itself built as described here
<br>
&lt;<a href="http://www.nag.com/doc/inun/fd03/l6ad9/in.html">http://www.nag.com/doc/inun/fd03/l6ad9/in.html</a>&gt;.  For example i can
<br>
successfully compile a sample problem from the parallel library with
<br>
Openmpi like this: mpif77 f07aefpe.f -L/opt/nag/fdl6a03d9/lib -lnagmpi
<br>
-lnagfls -lacml -dcfuns -mismatch -w. The compilation does give one
<br>
warning &quot;Unrecognised option -pthread passed to ld&quot;.  When i try to
<br>
run the binary i get the error message output shown below.  I have
<br>
attached my config.log, config.out and make.out from my build of
<br>
openmpi in case that helps.  Since the examples run with mpich1 and
<br>
not with openmpi, i am assuming this is a openmpi problem and not a
<br>
problem with Nags compiler or Parallel Library ?
<br>
<p># /opt/openmpi/openmpi-1.1a9r10177/bin/mpirun -np 2 a.out
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xf3
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xf3
<br>
[0] func:/opt/openmpi/openmpi-1.1a9r10177/lib/libopal.so.0 
<br>
[0x2aaaaaeef3fa]
<br>
[1] func:/lib/libpthread.so.0 [0x2aaaab9697a0]
<br>
[2] 
<br>
func:/opt/openmpi/openmpi-1.1a9r10177/lib/libmpi.so.0(MPI_Comm_size+0x58) 
<br>
[0x2aaaaac33458]
<br>
[3] func:a.out [0x41dec8]
<br>
[4] func:a.out [0x417eef]
<br>
[5] func:a.out [0x404a0c]
<br>
[6] func:/lib/libc.so.6(__libc_start_main+0xda) [0x2aaaaba8e4ca]
<br>
[7] func:a.out [0x4025aa]
<br>
*** End of error message ***
<br>
[0] func:/opt/openmpi/openmpi-1.1a9r10177/lib/libopal.so.0 
<br>
[0x2aaaaaeef3fa]
<br>
[1] func:/lib/libpthread.so.0 [0x2aaaab9687a0]
<br>
[2] 
<br>
func:/opt/openmpi/openmpi-1.1a9r10177/lib/libmpi.so.0(MPI_Comm_size+0x58) 
<br>
[0x2aaaaac33458]
<br>
[3] func:a.out [0x41dec8]
<br>
[4] func:a.out [0x417eef]
<br>
[5] func:a.out [0x404a0c]
<br>
[6] func:/lib/libc.so.6(__libc_start_main+0xda) [0x2aaaaba8d4ca]
<br>
[7] func:a.out [0x4025aa]
<br>
*** End of error message ***
<br>
<p>Any ideas greatly appreciated,
<br>
-Doug
<br>
<p><p>---------- Forwarded message ----------
<br>
Date: Fri, 2 Jun 2006 17:53:03 -0400
<br>
From: Brock Palen
<br>
<p>I was able to build OMPI  (1.1a9r10177)  with nag f95  5.0(414)  with
<br>
out any problems.  To configure it be sure to use:
<br>
&nbsp;&nbsp;&nbsp;FCFLAGS='-mismatch -w'   That is the only really big change,  I did
<br>
use a prefix path to pbs (for tm)  I also use portland for both my c
<br>
and c++ compiler.  Here if my full configure, its mostlikly useless
<br>
to you, but somthing will make sence to you:
<br>
<p>./configure --prefix=/home/software/rhel4/openmpi-1.1a8-nag --with-
<br>
tm=/home/software/torque-2.0.0p8/ FC=/afs/engin.umich.edu/caen/rhel_4/
<br>
nag/bin/f95 F77=/afs/engin.umich.edu/caen/rhel_4/nag/bin/f95
<br>
FCFLAGS=&quot;-mismatch -w&quot; CC=pgcc CXX=pgCC
<br>
<p>Some things i found, you cant have FCFLAGS have -O3  your mpif90 will
<br>
segfault.
<br>
<p>Currently though we have problems with OMPI with nag though.   So if
<br>
some devs have some in sight into this problem would be help.
<br>
Heres the problem,  the package builds fine,  on execution the
<br>
following error is given:
<br>
<p>-bash-3.00$ mpirun -np 2 SWMF.exe
<br>
[nyx-login.engin.umich.edu:06116] *** An error occurred in MPI_Comm_rank
<br>
[nyx-login.engin.umich.edu:06116] *** on communicator MPI_COMM_WORLD
<br>
[nyx-login.engin.umich.edu:06116] *** MPI_ERR_COMM: invalid communicator
<br>
[nyx-login.engin.umich.edu:06116] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
1 additional process aborted (not shown)
<br>
<p>I know there were some similar messages on the list sooner,  Is this
<br>
a known problem? If so is a fix in the works? And last is there a
<br>
timeline for such a fix?
<br>
Brock
<br>

<br><hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1376/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1377.php">Frank: "[OMPI users] Open MPI 1.0.2 with XGrid on Netvolumes failed to run (wrong ownership)"</a>
<li><strong>Previous message:</strong> <a href="1375.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
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
