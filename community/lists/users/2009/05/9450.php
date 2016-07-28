<?
$subject_val = "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 20:05:19 2009" -->
<!-- isoreceived="20090528000519" -->
<!-- sent="Wed, 27 May 2009 17:05:13 -0700 (PDT)" -->
<!-- isosent="20090528000513" -->
<!-- name="Michael Kuklik" -->
<!-- email="mkkuklik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu" -->
<!-- id="11543.54323.qm_at_web31402.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.7025.1243435454.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu<br>
<strong>From:</strong> Michael Kuklik (<em>mkkuklik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 20:05:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9451.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intelcompiler onubuntu"</a>
<li><strong>Previous message:</strong> <a href="9449.php">Dimar Gonzalez: "[OMPI users] Fwd: open mpi ptoblem with LAM previously installed"</a>
<li><strong>Maybe in reply to:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9451.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intelcompiler onubuntu"</a>
<li><strong>Reply:</strong> <a href="9451.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intelcompiler onubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joe
<br>
<p>'which icc' returns the path to icc
<br>
/usr/local/intel/Compiler/11.0/083/bin/intel64/icc
<br>
<p>and I used the env variable script provided by intel.
<br>
so my shell env is ok and I think libtool should inherit my shell environment
<br>
<p>just in case I send you the env printout
<br>
<p>MKLROOT=/usr/local/intel/Compiler/11.0/083/mkl
<br>
MANPATH=/usr/local/intel/Compiler/11.0/083/man:/usr/local/intel/Compiler/11.0/083/mkl/man/en_US:/usr/local/intel/Compiler/11.0/083/man:/usr/local/intel/Compiler/11.0/083/mkl/man/en_US:/usr/local/man:/usr/local/share/man:/usr/share/man
<br>
INTEL_LICENSE_FILE=/usr/local/intel/Compiler/11.0/083/licenses:/opt/intel/licenses:/home/mkuklik/intel/licenses:/usr/local/intel/Compiler/11.0/083/licenses:/opt/intel/licenses:/home/mkuklik/intel/licenses
<br>
IPPROOT=/usr/local/intel/Compiler/11.0/083/ipp/em64t
<br>
TERM=xterm-color
<br>
SHELL=/bin/bash
<br>
XDG_SESSION_COOKIE=d03e782e0b3c90f7ce8380174a15d9d2-1243468120.315267-1057427925
<br>
SSH_CLIENT=128.151.210.198 54616 22
<br>
LIBRARY_PATH=/usr/local/intel/Compiler/11.0/083/ipp/em64t/lib:/usr/local/intel/Compiler/11.0/083/mkl/lib/em64t:/usr/local/intel/Compiler/11.0/083/tbb/em64t/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/usr/local/intel/Compiler/11.0/083/ipp/em64t/lib:/usr/local/intel/Compiler/11.0/083/mkl/lib/em64t:/usr/local/intel/Compiler/11.0/083/tbb/em64t/cc4.1.0_libc2.4_kernel2.6.16.21/lib
<br>
FPATH=/usr/local/intel/Compiler/11.0/083/mkl/include:/usr/local/intel/Compiler/11.0/083/mkl/include
<br>
SSH_TTY=/dev/pts/4
<br>
LC_ALL=C
<br>
USER=mkuklik
<br>
LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/083/lib/intel64:/usr/local/intel/Compiler/11.0/083/ipp/em64t/sharedlib:/usr/local/intel/Compiler/11.0/083/mkl/lib/em64t:/usr/local/intel/Compiler/11.0/083/tbb/em64t/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/usr/local/intel/Compiler/11.0/083/lib/intel64:/usr/local/intel/Compiler/11.0/083/ipp/em64t/sharedlib:/usr/local/intel/Compiler/11.0/083/mkl/lib/em64t:/usr/local/intel/Compiler/11.0/083/tbb/em64t/cc4.1.0_libc2.4_kernel2.6.16.21/lib
<br>
LIB=/usr/local/intel/Compiler/11.0/083/ipp/em64t/lib:/usr/local/intel/Compiler/11.0/083/ipp/em64t/lib:
<br>
CPATH=/usr/local/intel/Compiler/11.0/083/ipp/em64t/include:/usr/local/intel/Compiler/11.0/083/mkl/include:/usr/local/intel/Compiler/11.0/083/tbb/include:/usr/local/intel/Compiler/11.0/083/ipp/em64t/include:/usr/local/intel/Compiler/11.0/083/mkl/include:/usr/local/intel/Compiler/11.0/083/tbb/include
<br>
NLSPATH=/usr/local/intel/Compiler/11.0/083/lib/intel64/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/083/ipp/em64t/lib/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/083/mkl/lib/em64t/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/083/idb/intel64/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/083/lib/intel64/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/083/ipp/em64t/lib/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/083/mkl/lib/em64t/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/083/idb/intel64/locale/%l_%t/%N
<br>
MAIL=/var/mail/mkuklik
<br>
PATH=/usr/local/intel/Compiler/11.0/083/bin/intel64:/usr/local/intel/Compiler/11.0/083/bin/intel64:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
<br>
PWD=/home/mkuklik
<br>
LANG=en_US
<br>
SHLVL=1
<br>
HOME=/home/mkuklik
<br>
DYLD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/083/tbb/em64t/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/usr/local/intel/Compiler/11.0/083/tbb/em64t/cc4.1.0_libc2.4_kernel2.6.16.21/lib
<br>
LOGNAME=mkuklik
<br>
SSH_CONNECTION=128.151.210.198 54616 128.151.210.190 22
<br>
INCLUDE=/usr/local/intel/Compiler/11.0/083/ipp/em64t/include:/usr/local/intel/Compiler/11.0/083/mkl/include:/usr/local/intel/Compiler/11.0/083/ipp/em64t/include:/usr/local/intel/Compiler/11.0/083/mkl/include
<br>
_=/usr/bin/env
<br>
<p>Thanks,
<br>
<p>mk
<br>
<p><p><p>________________________________
<br>
<p>----------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Tue, 26 May 2009 19:51:48 -0700
<br>
From: &quot;Joe Griffin&quot; &lt;joe.griffin_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] problem with installing openmpi with intel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;compiler onubuntu
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;1D367926756E9848BABD800E249AA5E04BFF84_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
<br>
<p>MK,
<br>
<p>Is &quot;icc&quot; in your path?
<br>
<p>What if you type &quot;which icc&quot;?
<br>
<p>Joe
<br>
<p><p>________________________________
<br>
<p>From: users-bounces_at_[hidden] on behalf of Michael Kuklik
<br>
Sent: Tue 5/26/2009 7:05 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] problem with installing openmpi with intel compiler onubuntu
<br>
<p><p>Hi everybody,
<br>
<p>I try to compile openmpi with intel compiler on ubuntu 9.04.
<br>
I compiled openmpi on Redhat and os x many times and I could always find a problem. But the error that I'm getting now, gives me no clues where to even search for the problem.
<br>
<p>my config line is a follows:
<br>
./configure CC=icc CXX=icpc --prefix=/usr/local/intel/openmpi
<br>
<p>Everything configures and compiles OK. But then when I try to install I get this error
<br>
<p>Making install in etc
<br>
make[2]: Entering directory `/tmp/openmpi-1.3.2/orte/etc'
<br>
make[3]: Entering directory `/tmp/openmpi-1.3.2/orte/etc'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
/bin/mkdir -p /usr/local/intel/openmpi/etc
<br>
******************************* WARNING ************************************
<br>
*** Not installing new openmpi-default-hostfile over existing file in:
<br>
***   /usr/local/intel/openmpi/etc/openmpi-default-hostfile
<br>
******************************* WARNING ************************************
<br>
make[3]: Leaving directory `/tmp/openmpi-1.3.2/orte/etc'
<br>
make[2]: Leaving directory `/tmp/openmpi-1.3.2/orte/etc'
<br>
Making install in .
<br>
make[2]: Entering directory `/tmp/openmpi-1.3.2/orte'
<br>
make[3]: Entering directory `/tmp/openmpi-1.3.2/orte'
<br>
test -z &quot;/usr/local/intel/openmpi/lib&quot; || /bin/mkdir -p &quot;/usr/local/intel/openmpi/lib&quot;
<br>
/bin/bash ../libtool   --mode=install /usr/bin/install -c  'libopen-rte.la' '/usr/local/intel/openmpi/lib/libopen-rte.la'
<br>
libtool: install: warning: relinking `libopen-rte.la'
<br>
libtool: install: (cd /tmp/openmpi-1.3.2/orte; /bin/bash /tmp/openmpi-1.3.2/libtool  --tag CC --mode=relink icc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing ................ )
<br>
libtool: relink: icc -shared  runtime/.libs/orte_finalize.o runtime/.libs/orte_init.o runtime/.libs/orte_locks.o runtime/.libs/orte_globals.o runtime/data_type_support/.libs/orte_dt_compare_fns.o runtime/data_type_support/.libs/orte_dt_copy_fns.o runtime/data_type_support/.libs/orte_dt_print_fns.o runtime/data_type_support/.libs/orte_dt_release_fns.o runtime/data_type_support/.libs/orte_dt_size_fns.o runtime/data_type_support/.libs/orte_dt_packing_fns.o runtime/data_type_support/.libs/orte_dt_unpacking_fns.o runtime/.libs/orte_mca_params.o runtime/.libs/orte_wait.o runtime/.libs/orte_cr.o runtime/.libs/..................................... -Wl,libopen-rte.so.0 -o .libs/libopen-rte.so.0.0.0
<br>
/tmp/openmpi-1.3.2/libtool: line 7847: icc: command not found
<br>
libtool: install: error: relink `libopen-rte.la' with the above command before installing it
<br>
make[3]: *** [install-libLTLIBRARIES] Error 1
<br>
make[3]: Leaving directory `/tmp/openmpi-1.3.2/orte'
<br>
make[2]: *** [install-am] Error 2
<br>
make[2]: Leaving directory `/tmp/openmpi-1.3.2/orte'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/openmpi-1.3.2/orte'
<br>
make: *** [install-recursive] Error 1
<br>
<p>libtool is the one from ubuntu repository i.e. 2.2.6a-1
<br>
icc and icpc are the newest ones i.e. 11.083 
<br>
<p>Ouputs of configure make and install are attached.
<br>
<p>Any clues what's wrong?
<br>
<p>Thanks for help
<br>
<p>mk
<br>
<p><p>-------------- next part --------------
<br>
A non-text attachment was scrubbed...
<br>
Name: not available
<br>
Type: application/ms-tnef
<br>
Size: 5414 bytes
<br>
Desc: not available
<br>
URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20090526/9737163d/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20090526/9737163d/attachment.bin</a>&gt;
<br>
<p>------------------------------
<br>
<p>Message: 2
<br>
Date: Wed, 27 May 2009 13:09:27 +0300
<br>
From: vasilis &lt;gkanis_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;than 2    CPU
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;200905271309.27914.gkanis_at_[hidden]&gt;
<br>
Content-Type: Text/Plain;  charset=&quot;iso-8859-1&quot;
<br>
<p>Thank you Eugene for your suggestion. I used different tags for each variable, 
<br>
and now I do not get this error. 
<br>
The problem now is that I am getting a different solution when I use more than 
<br>
2 CPUs. I checked the matrices and I found that they differ by a very small 
<br>
amount  of the order 10^(-10). Actually, I am getting a different solution if I 
<br>
use 4CPUs or 16CPUs!!!
<br>
Do you have any idea what could cause this behavior?
<br>
<p>Thank you,
<br>
Vasilis
<br>
<p>On Tuesday 26 of May 2009 7:21:32 pm you wrote:
<br>
<span class="quotelev1">&gt; vasilis wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Dear openMpi users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I am trying to develop a code that runs in parallel mode with openMPI
</span><br>
<span class="quotelev2">&gt; &gt; (1.3.2 version). The code is written in Fortran 90, and I am running on 
</span><br>
<span class="quotelev2">&gt; &gt; a cluster
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;If I use 2 CPU the program runs fine, but for a larger number of CPUs I
</span><br>
<span class="quotelev2">&gt; &gt; get the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;[compute-2-6.local:18491] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt;[compute-2-6.local:18491] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;[compute-2-6.local:18491] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt; &gt;[compute-2-6.local:18491] *** MPI_ERRORS_ARE_FATAL (your MPI job will now
</span><br>
<span class="quotelev2">&gt; &gt;abort)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Here is the part of the code that this error refers to:
</span><br>
<span class="quotelev2">&gt; &gt;if( mumps_par%MYID .eq. 0 ) THEN
</span><br>
<span class="quotelev2">&gt; &gt;                res=res+res_cpu
</span><br>
<span class="quotelev2">&gt; &gt;                do iw=1,total_elem_cpu*unique
</span><br>
<span class="quotelev2">&gt; &gt;                        jacob(iw)=jacob(iw)+jacob_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt;                        position_col(iw)=position_col(iw)+col_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt;                        position_row(iw)=position_row(iw)+row_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt;                end do
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                do jw=1,nsize-1
</span><br>
<span class="quotelev2">&gt; &gt;                        call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_recv(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,MPI_ANY_SOUR
</span><br>
<span class="quotelev2">&gt; &gt;CE,MPI_ANY_TAG,MPI_COMM_WORLD,status1,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_recv(res_cpu,total_unknowns,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI_AN
</span><br>
<span class="quotelev2">&gt; &gt;Y_TAG,MPI_COMM_WORLD,status2,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_recv(row_cpu,total_elem_cpu*unique,MPI_INTEGER,MPI_ANY_SOURCE,MPI_ANY_
</span><br>
<span class="quotelev2">&gt; &gt;TAG,MPI_COMM_WORLD,status3,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_recv(col_cpu,total_elem_cpu*unique,MPI_INTEGER,MPI_ANY_SOURCE,MPI_ANY_
</span><br>
<span class="quotelev2">&gt; &gt;TAG,MPI_COMM_WORLD,status4,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  res=res+res_cpu
</span><br>
<span class="quotelev2">&gt; &gt;                        do iw=1,total_elem_cpu*unique
</span><br>
<span class="quotelev2">&gt; &gt;                              
</span><br>
<span class="quotelev2">&gt; &gt; jacob(status1(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev2">&gt; &gt; jacob(status1(MPI_SOURCE)*total_elem_cpu*unique+iw)+jacob_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt; position_col(status4(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev2">&gt; &gt; position_col(status4(MPI_SOURCE)*total_elem_cpu*unique+iw)+col_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt; position_row(status3(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev2">&gt; &gt; position_row(status3(MPI_SOURCE)*total_elem_cpu*unique+iw)+row_cpu(iw)
</span><br>
<span class="quotelev2">&gt; &gt; end do
</span><br>
<span class="quotelev2">&gt; &gt;                end do
</span><br>
<span class="quotelev2">&gt; &gt;        else
</span><br>
<span class="quotelev2">&gt; &gt;                call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Isend(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,0,mumps_par
</span><br>
<span class="quotelev2">&gt; &gt;%MYID,MPI_COMM_WORLD,request1,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Isend(res_cpu,total_unknowns,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,MPI
</span><br>
<span class="quotelev2">&gt; &gt;_COMM_WORLD,request2,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Isend(row_cpu,total_elem_cpu*unique,MPI_INTEGER,0,mumps_par%MYID,MPI_C
</span><br>
<span class="quotelev2">&gt; &gt;OMM_WORLD,request3,ierr) call
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Isend(col_cpu,total_elem_cpu*unique,MPI_INTEGER,0,mumps_par%MYID,MPI_C
</span><br>
<span class="quotelev2">&gt; &gt;OMM_WORLD,request4,ierr) call MPI_Wait(request1, status1, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;                call MPI_Wait(request2, status2, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;                call MPI_Wait(request3, status3, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;                call MPI_Wait(request4, status4, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I am also using the MUMPS library
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Could someone help to track this error down. Is really annoying to use
</span><br>
<span class="quotelev2">&gt; &gt; only two processors.
</span><br>
<span class="quotelev2">&gt; &gt;The cluster has about 8 nodes and each has 4 dual core CPU. I tried to run
</span><br>
<span class="quotelev2">&gt; &gt; the code on a single node with more than 2 CPU but I got the same error!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the error message means that the received message was longer
</span><br>
<span class="quotelev1">&gt; than the receive buffer that was specified.  If I look at your code and
</span><br>
<span class="quotelev1">&gt; try to reason about its correctness, I think of the message-passing
</span><br>
<span class="quotelev1">&gt; portion as looking like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if( mumps_par%MYID .eq. 0 ) THEN
</span><br>
<span class="quotelev1">&gt;     do jw=1,nsize-1
</span><br>
<span class="quotelev1">&gt;         call
</span><br>
<span class="quotelev1">&gt; MPI_recv(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,MPI_ANY_SOURC
</span><br>
<span class="quotelev1">&gt;E,MPI_ANY_TAG,MPI_COMM_WORLD,status1,ierr) call MPI_recv( 
</span><br>
<span class="quotelev1">&gt; res_cpu,total_unknowns
</span><br>
<span class="quotelev1">&gt; ,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status2,ier
</span><br>
<span class="quotelev1">&gt;r) call MPI_recv(
</span><br>
<span class="quotelev1">&gt; row_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status3,ierr)
</span><br>
<span class="quotelev1">&gt;         call MPI_recv(
</span><br>
<span class="quotelev1">&gt; col_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status4,ierr)
</span><br>
<span class="quotelev1">&gt;     end do
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     call
</span><br>
<span class="quotelev1">&gt; MPI_Send(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,0,mumps_par%M
</span><br>
<span class="quotelev1">&gt;YID,MPI_COMM_WORLD,ierr) call MPI_Send(  res_cpu,total_unknowns
</span><br>
<span class="quotelev1">&gt; ,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;     call MPI_Send(  row_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;     call MPI_Send(  col_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're running on two processes, then the messages you receive are in
</span><br>
<span class="quotelev1">&gt; the order you expect.  If there are more than two processes, however,
</span><br>
<span class="quotelev1">&gt; certainly messages will start appearing &quot;out of order&quot; and your
</span><br>
<span class="quotelev1">&gt; indiscriminate use of MPI_ANY_SOURCE and MPI_ANY_TAG will start getting
</span><br>
<span class="quotelev1">&gt; them mixed up.  You won't just get all messages from one rank and then
</span><br>
<span class="quotelev1">&gt; all from another and then all from another.  Rather, the messages from
</span><br>
<span class="quotelev1">&gt; all these other processes will come interwoven, but you interpret them
</span><br>
<span class="quotelev1">&gt; in a fixed order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I mean.  Let's say you have 3 processes.  So, rank 0 will
</span><br>
<span class="quotelev1">&gt; receive 8 messages:  4 from rank 1and 4 from rank 2.  Correspondingly,
</span><br>
<span class="quotelev1">&gt; rank 1 and rank 2 will each send 4 messages to rank 0.  Here is a
</span><br>
<span class="quotelev1">&gt; possibility for the order in which messages are received:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jacob_cpu from rank 1
</span><br>
<span class="quotelev1">&gt; jacob_cpu from rank 2
</span><br>
<span class="quotelev1">&gt; res_cpu from rank 1
</span><br>
<span class="quotelev1">&gt; row_cpu from rank 1
</span><br>
<span class="quotelev1">&gt; res_cpu from rank 2
</span><br>
<span class="quotelev1">&gt; row_cpu from rank 2
</span><br>
<span class="quotelev1">&gt; col_cpu from rank 2
</span><br>
<span class="quotelev1">&gt; col_cpu from rank 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank 0, however, is trying to unpack these in the order you prescribed
</span><br>
<span class="quotelev1">&gt; in your code.  Data will get misinterpreted.  More to the point here,
</span><br>
<span class="quotelev1">&gt; you will be trying to receive data into buffers of the wrong size (some
</span><br>
<span class="quotelev1">&gt; of the time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe you should use tags to distinguish between the different types of
</span><br>
<span class="quotelev1">&gt; messages you're trying to send.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>------------------------------
<br>
<p>Message: 3
<br>
Date: Wed, 27 May 2009 07:41:08 -0700
<br>
From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;than 2    CPU
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;4A1D5104.7090501_at_[hidden]&gt;
<br>
Content-Type: text/plain; CHARSET=US-ASCII; format=flowed
<br>
<p>vasilis wrote:
<br>
<p><span class="quotelev1">&gt;Thank you Eugene for your suggestion. I used different tags for each variable, 
</span><br>
<span class="quotelev1">&gt;and now I do not get this error. 
</span><br>
<span class="quotelev1">&gt;The problem now is that I am getting a different solution when I use more than 
</span><br>
<span class="quotelev1">&gt;2 CPUs. I checked the matrices and I found that they differ by a very small 
</span><br>
<span class="quotelev1">&gt;amount  of the order 10^(-10). Actually, I am getting a different solution if I 
</span><br>
<span class="quotelev1">&gt;use 4CPUs or 16CPUs!!!
</span><br>
<span class="quotelev1">&gt;Do you have any idea what could cause this behavior?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sure.
<br>
<p>Rank 0 accumulates all the res_cpu values into a single array, res.  It 
<br>
starts with its own res_cpu and then adds all other processes.  When 
<br>
np=2, that means the order is prescribed.  When np&gt;2, the order is no 
<br>
longer prescribed and some floating-point rounding variations can start 
<br>
to occur.
<br>
<p>If you want results to be more deterministic, you need to fix the order 
<br>
in which res is aggregated.  E.g., instead of using MPI_ANY_SOURCE, loop 
<br>
over the peer processes in a specific order.
<br>
<p><p><p>P.S.  It seems to me that you could use MPI collective operations to 
<br>
implement what you're doing.  E.g., something like:
<br>
<p>call MPI_Reduce(res_cpu, res, total_unknown, MPI_DOUBLE_PRECISION, 
<br>
MPI_SUM, 0, MPI_COMM_WORLD, ierr)
<br>
<p>call MPI_Gather(jacob_cpu, total_elem_cpu * unique, MPI_DOUBLE_PRECISION, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jacob    , total_elem_cpu * unique, 
<br>
MPI_DOUBLE_PRECISION, 0, MPI_COMM_WORLD, ierr)
<br>
call MPI_Gather(  row_cpu, total_elem_cpu * unique, MPI_INTEGER         , &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;row    , total_elem_cpu * unique, MPI_INTEGER        
<br>
, 0, MPI_COMM_WORLD, ierr)
<br>
call MPI_Gather(  col_cpu, total_elem_cpu * unique, MPI_INTEGER         , &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;col    , total_elem_cpu * unique, MPI_INTEGER        
<br>
, 0, MPI_COMM_WORLD, ierr)
<br>
<p>I think the res part is right.  The jacob/row/col parts are not quite 
<br>
right since you don't just want to gather the elements, but add them 
<br>
into particular arrays.  Not sure if you really want to allocate a new 
<br>
scratch array to use for this purpose or what.  Nor would this solve the 
<br>
res_cpu indeterministic problem you had.  I just wanted to make sure you 
<br>
knew about the MPI collective operations as an alternative to your 
<br>
point-to-point implementation.
<br>
<p><p>------------------------------
<br>
<p>Message: 4
<br>
Date: Wed, 27 May 2009 10:28:42 -0400
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] How to use Multiple links with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI??????????????????
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;8864ED55-66A8-424E-B1B9-249F033816DE_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
<br>
<p>Open MPI considers hosts differently than network links.
<br>
<p>So you should only list the actual hostname in the hostfile, with  
<br>
slots equal to the number of processors (4 in your case, I think?).
<br>
<p>Once the MPI processes are launched, they each look around on the host  
<br>
that they're running and find network paths to each of their peers.  
<br>
If they are multiple paths between pairs of peers, Open MPI will round- 
<br>
robin stripe messages across each of the links.  We don't really have  
<br>
an easy setting for each peer pair only using 1 link.  Indeed, since  
<br>
connectivity is bidirectional, the traffic patterns become less  
<br>
obvious if you want MPI_COMM_WORLD rank X to only use link Y -- what  
<br>
does that mean to the other 4 MPI processes on the other host (with  
<br>
whom you have assumedly assigned their own individual links as well)?
<br>
<p><p>On May 26, 2009, at 12:24 AM, shan axida wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; I want to ask how to use multiple links (multiple NICs) with OpenMPI.
</span><br>
<span class="quotelev1">&gt; For example, how can I assign a link to each process, if there are 4  
</span><br>
<span class="quotelev1">&gt; links
</span><br>
<span class="quotelev1">&gt; and 4 processors on each node in our cluster?
</span><br>
<span class="quotelev1">&gt; Is this a correct way?
</span><br>
<span class="quotelev1">&gt; hostfile:
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt; host1-eth0 slots=1
</span><br>
<span class="quotelev1">&gt; host1-eth1 slots=1
</span><br>
<span class="quotelev1">&gt; host1-eth2 slots=1
</span><br>
<span class="quotelev1">&gt; host1-eth3 slots=1
</span><br>
<span class="quotelev1">&gt; host2-eth0 slots=1
</span><br>
<span class="quotelev1">&gt; host2-eth1 slots=1
</span><br>
<span class="quotelev1">&gt; host2-eth2 slots=1
</span><br>
<span class="quotelev1">&gt; host2-eth3 slots=1
</span><br>
<span class="quotelev1">&gt; ...             ...
</span><br>
<span class="quotelev1">&gt; ...          ...
</span><br>
<span class="quotelev1">&gt; host16-eth0 slots=1
</span><br>
<span class="quotelev1">&gt; host16-eth1 slots=1
</span><br>
<span class="quotelev1">&gt; host16-eth2 slots=1
</span><br>
<span class="quotelev1">&gt; host16-eth3 slots=1
</span><br>
<span class="quotelev1">&gt; ------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
End of users Digest, Vol 1242, Issue 1
**************************************
      
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9450/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9451.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intelcompiler onubuntu"</a>
<li><strong>Previous message:</strong> <a href="9449.php">Dimar Gonzalez: "[OMPI users] Fwd: open mpi ptoblem with LAM previously installed"</a>
<li><strong>Maybe in reply to:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9451.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intelcompiler onubuntu"</a>
<li><strong>Reply:</strong> <a href="9451.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intelcompiler onubuntu"</a>
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
