<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1242, Issue 5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 09:32:51 2009" -->
<!-- isoreceived="20090528133251" -->
<!-- sent="Thu, 28 May 2009 06:32:37 -0700" -->
<!-- isosent="20090528133237" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1242, Issue 5" -->
<!-- id="1D367926756E9848BABD800E249AA5E0C11901_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="845813.9178.qm_at_web31404.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1242, Issue 5<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 09:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9460.php">Φοίβος Κουκουβίνης: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="9458.php">Jeff Squyres: "Re: [OMPI users] Fwd: open mpi ptoblem with LAM previously installed"</a>
<li><strong>In reply to:</strong> <a href="9452.php">Michael Kuklik: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MIke,
<br>
<p>&nbsp;
<br>
<p>That may help.  It depends on your initialization scripts.  Some scripts
<br>
<p>could check items and skip sections ( like skipping based on stty).
<br>
<p>&nbsp;
<br>
<p>Anyway, I am glad you are working.
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Joe
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Michael Kuklik
<br>
Sent: Wednesday, May 27, 2009 10:04 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] users Digest, Vol 1242, Issue 5
<br>
<p>&nbsp;
<br>
<p>Joe,
<br>
<p>I don't know why I didn't think about it. It works with the whole path.
<br>
<p>I put the intel env script in user .bash_login file. 
<br>
Do you think I should put the intel env script in the global shell
<br>
config file like /etc/profile in order for libtool to see icc?
<br>
<p>Thanks for help,
<br>
<p>mike
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>From: &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden]&gt;
<br>
To: users_at_[hidden]
<br>
Sent: Wednesday, May 27, 2009 9:24:00 PM
<br>
Subject: users Digest, Vol 1242, Issue 5
<br>
<p>Send users mailing list submissions to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
<p>To subscribe or unsubscribe via the World Wide Web, visit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
or, via email, send a message with subject or body 'help' to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;users-request_at_[hidden]
<br>
<p>You can reach the person managing the list at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;users-owner_at_[hidden]
<br>
<p>When replying, please edit your Subject line so it is more specific
<br>
than &quot;Re: Contents of users digest...&quot;
<br>
<p><p>Today's Topics:
<br>
<p>&nbsp;&nbsp;1. Re: problem with installing openmpi with intelcompiler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;onubuntu (Joe Griffin)
<br>
<p><p>----------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Wed, 27 May 2009 18:23:10 -0700
<br>
From: &quot;Joe Griffin&quot; &lt;joe.griffin_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] problem with installing openmpi with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;intelcompiler    onubuntu
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;, &lt;users_at_[hidden]&gt;
<br>
Message-ID:
<br>
&nbsp;
<br>
&lt;1D367926756E9848BABD800E249AA5E04BFF88_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
<br>
<p>MK,
<br>
<p>Hmm.. What if you put
<br>
CC=/usr/local/intel/Compiler/11.0/083/bin/intel64/icc
<br>
on the build line.
<br>
<p>Joe
<br>
<p><p>________________________________
<br>
<p>From: users-bounces_at_[hidden] on behalf of Michael Kuklik
<br>
Sent: Wed 5/27/2009 5:05 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] problem with installing openmpi with
<br>
intelcompiler onubuntu
<br>
<p><p>Joe
<br>
<p>'which icc' returns the path to icc
<br>
/usr/local/intel/Compiler/11.0/083/bin/intel64/icc
<br>
<p>and I used the env variable script provided by intel.
<br>
so my shell env is ok and I think libtool should inherit my shell
<br>
environment
<br>
<p>just in case I send you the env printout
<br>
<p>MKLROOT=/usr/local/intel/Compiler/11.0/083/mkl
<br>
MANPATH=/usr/local/intel/Compiler/11.0/083/man:/usr/local/intel/Compiler
<br>
/11.0/083/mkl/man/en_US:/usr/local/intel/Compiler/11.0/083/man:/usr/loca
<br>
l/intel/Compiler/11.0/083/mkl/man/en_US:/usr/local/man:/usr/local/share/
<br>
man:/usr/share/man
<br>
INTEL_LICENSE_FILE=/usr/local/intel/Compiler/11.0/083/licenses:/opt/inte
<br>
l/licenses:/home/mkuklik/intel/licenses:/usr/local/intel/Compiler/11.0/0
<br>
83/licenses:/opt/intel/licenses:/home/mkuklik/intel/licenses
<br>
IPPROOT=/usr/local/intel/Compiler/11.0/083/ipp/em64t
<br>
TERM=xterm-color
<br>
SHELL=/bin/bash
<br>
XDG_SESSION_COOKIE=d03e782e0b3c90f7ce8380174a15d9d2-1243468120.315267-10
<br>
57427925
<br>
SSH_CLIENT=128.151.210.198 54616 22
<br>
LIBRARY_PATH=/usr/local/intel/Compiler/11.0/083/ipp/em64t/lib:/usr/local
<br>
/intel/Compiler/11.0/083/mkl/lib/em64t:/usr/local/intel/Compiler/11.0/08
<br>
3/tbb/em64t/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/usr/local/intel/Compile
<br>
r/11.0/083/ipp/em64t/lib:/usr/local/intel/Compiler/11.0/083/mkl/lib/em64
<br>
t:/usr/local/intel/Compiler/11.0/083/tbb/em64t/cc4.1.0_libc2.4_kernel2.6
<br>
.16.21/lib
<br>
FPATH=/usr/local/intel/Compiler/11.0/083/mkl/include:/usr/local/intel/Co
<br>
mpiler/11.0/083/mkl/include
<br>
SSH_TTY=/dev/pts/4
<br>
LC_ALL=C
<br>
USER=mkuklik
<br>
LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/083/lib/intel64:/usr/loca
<br>
l/intel/Compiler/11.0/083/ipp/em64t/sharedlib:/usr/local/intel/Compiler/
<br>
11.0/083/mkl/lib/em64t:/usr/local/intel/Compiler/11.0/083/tbb/em64t/cc4.
<br>
1.0_libc2.4_kernel2.6.16.21/lib:/usr/local/intel/Compiler/11.0/083/lib/i
<br>
ntel64:/usr/local/intel/Compiler/11.0/083/ipp/em64t/sharedlib:/usr/local
<br>
/intel/Compiler/11.0/083/mkl/lib/em64t:/usr/local/intel/Compiler/11.0/08
<br>
3 /tbb/em64t/cc4.1.0_libc2.4_kernel2.6.16.21/lib
<br>
LIB=/usr/local/intel/Compiler/11.0/083/ipp/em64t/lib:/usr/local/intel/Co
<br>
mpiler/11.0/083/ipp/em64t/lib:
<br>
CPATH=/usr/local/intel/Compiler/11.0/083/ipp/em64t/include:/usr/local/in
<br>
tel/Compiler/11.0/083/mkl/include:/usr/local/intel/Compiler/11.0/083/tbb
<br>
/include:/usr/local/intel/Compiler/11.0/083/ipp/em64t/include:/usr/local
<br>
/intel/Compiler/11.0/083/mkl/include:/usr/local/intel/Compiler/11.0/083/
<br>
tbb/include
<br>
NLSPATH=/usr/local/intel/Compiler/11.0/083/lib/intel64/locale/%l_%t/%N:/
<br>
usr/local/intel/Compiler/11.0/083/ipp/em64t/lib/locale/%l_%t/%N:/usr/loc
<br>
al/intel/Compiler/11.0/083/mkl/lib/em64t/locale/%l_%t/%N:/usr/local/inte
<br>
l/Compiler/11.0/083/idb/intel64/locale/%l_%t/%N:/usr/local/intel/Compile
<br>
r/11.0/083/lib/intel64/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/08
<br>
3/ipp/em64t/lib/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/083/mkl/l
<br>
ib/em64t/locale/%l_%t/%N:/usr/local/intel/Compiler/11.0/083/idb/intel64/
<br>
loca le/%l_%t/%N
<br>
MAIL=/var/mail/mkuklik
<br>
PATH=/usr/local/intel/Compiler/11.0/083/bin/intel64:/usr/local/intel/Com
<br>
piler/11.0/083/bin/intel64:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr
<br>
/bin:/sbin:/bin:/usr/games
<br>
PWD=/home/mkuklik
<br>
LANG=en_US
<br>
SHLVL=1
<br>
HOME=/home/mkuklik
<br>
DYLD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/083/tbb/em64t/cc4.1.0_l
<br>
ibc2.4_kernel2.6.16.21/lib:/usr/local/intel/Compiler/11.0/083/tbb/em64t/
<br>
cc4.1.0_libc2.4_kernel2.6.16.21/lib
<br>
LOGNAME=mkuklik
<br>
SSH_CONNECTION=128.151.210.198 54616 128.151.210.190 22
<br>
INCLUDE=/usr/local/intel/Compiler/11.0/083/ipp/em64t/include:/usr/local/
<br>
intel/Compiler/11.0/083/mkl/include:/usr/local/intel/Compiler/11.0/083/i
<br>
pp/em64t/include:/usr/local/intel/Compiler/11.0/083/mkl/include
<br>
_=/usr/bin/env
<br>
<p>Thanks,
<br>
<p>mk
<br>
<p><p>________________________________
<br>
<p><p>----------------------------------------------------------------------
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
&nbsp;
<br>
&lt;1D367926756E9848BABD800E249AA5E04BFF84_at_[hidden]&gt;
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
Subject: [OMPI users] problem with installing openmpi with intel
<br>
compiler onubuntu
<br>
<p><p>Hi everybody,
<br>
<p>I try to compile openmpi with intel compiler on ubuntu 9.04.
<br>
I compiled openmpi on Redhat and os x many times and I could always find
<br>
a problem. But the error that I'm getting now, gives me no clues where
<br>
to even search for the problem.
<br>
<p>my config line is a follows:
<br>
./configure CC=icc CXX=icpc --prefix=/usr/local/intel/openmpi
<br>
<p>Everything configures and compiles OK. But then when I try to install I
<br>
get this error
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
******************************* WARNING
<br>
************************************
<br>
*** Not installing new openmpi-default-hostfile over existing file in:
<br>
***  /usr/local/intel/openmpi/etc/openmpi-default-hostfile
<br>
******************************* WARNING
<br>
************************************
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
test -z &quot;/usr/local/intel/openmpi/lib&quot; || /bin/mkdir -p
<br>
&quot;/usr/local/intel/openmpi/lib&quot;
<br>
/bin/bash ../libtool  --mode=install /usr/bin/install -c
<br>
'libopen-rte.la &lt;<a href="http://libopen-rte.la/">http://libopen-rte.la/</a>&gt; '
<br>
'/usr/local/intel/openmpi/lib/libopen-rte.la'
<br>
libtool: install: warning: relinking `libopen-rte.la'
<br>
libtool: install: (cd /tmp/openmpi-1.3.2/orte; /bin/bash
<br>
/tmp/openmpi-1.3.2/libtool  --tag CC --mode=relink icc -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing ................ )
<br>
libtool: relink: icc -shared  runtime/.libs/orte_finalize.o
<br>
runtime/.libs/orte_init.o runtime/.libs/orte_locks.o
<br>
runtime/.libs/orte_globals.o
<br>
runtime/data_type_support/.libs/orte_dt_compare_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_copy_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_print_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_release_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_size_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_packing_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_unpacking_fns.o
<br>
runtime/.libs/orte_mca_params.o runtime/.libs/orte_wait.o
<br>
runtime/.libs/orte_cr.o
<br>
runtime/.libs/..................................... -Wl,libopen-rte.so
<br>
&lt;<a href="http://libopen-rte.so/">http://libopen-rte.so/</a>&gt; .0 -o .libs/libopen-rte.so.0.0.0
<br>
/tmp/openmpi-1.3.2/libtool: line 7847: icc: command not found
<br>
libtool: install: error: relink `libopen-rte.la' with the above command
<br>
before installing it
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
URL:
<br>
&lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20090526/9737163">http://www.open-mpi.org/MailArchives/users/attachments/20090526/9737163</a>
<br>
d/attachment.bin&gt;
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
<p>Thank you Eugene for your suggestion. I used different tags for each
<br>
variable, 
<br>
and now I do not get this error. 
<br>
The problem now is that I am getting a different solution when I use
<br>
more than 
<br>
2 CPUs. I checked the matrices and I found that they differ by a very
<br>
small 
<br>
amount  of the order 10^(-10). Actually, I am getting a different
<br>
solution if I 
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
<span class="quotelev2">&gt; &gt; (1.3.2 version). The code is written in Fortran 90, and I am running
</span><br>
on 
<br>
<span class="quotelev2">&gt; &gt; a cluster
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;If I use 2 CPU the program runs fine, but for a larger number of CPUs
</span><br>
I
<br>
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
<span class="quotelev2">&gt; &gt;[compute-2-6.local:18491] *** MPI_ERRORS_ARE_FATAL (your MPI job will
</span><br>
now
<br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_recv(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,MPI_ANY_S
</span><br>
OUR
<br>
<span class="quotelev2">&gt; &gt;CE,MPI_ANY_TAG,MPI_COMM_WORLD,status1,ierr) call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_recv(res_cpu,total_unknowns,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI
</span><br>
_AN
<br>
<span class="quotelev2">&gt; &gt;Y_TAG,MPI_COMM_WORLD,status2,ierr) call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_recv(row_cpu,total_elem_cpu*unique,MPI_INTEGER,MPI_ANY_SOURCE,MPI_A
</span><br>
NY_
<br>
<span class="quotelev2">&gt; &gt;TAG,MPI_COMM_WORLD,status3,ierr) call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_recv(col_cpu,total_elem_cpu*unique,MPI_INTEGER,MPI_ANY_SOURCE,MPI_A
</span><br>
NY_
<br>
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
<span class="quotelev2">&gt; &gt;
</span><br>
position_col(status4(MPI_SOURCE)*total_elem_cpu*unique+iw)+col_cpu(iw)
<br>
<span class="quotelev2">&gt; &gt; position_row(status3(MPI_SOURCE)*total_elem_cpu*unique+iw)=&amp;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
position_row(status3(MPI_SOURCE)*total_elem_cpu*unique+iw)+row_cpu(iw)
<br>
<span class="quotelev2">&gt; &gt; end do
</span><br>
<span class="quotelev2">&gt; &gt;                end do
</span><br>
<span class="quotelev2">&gt; &gt;        else
</span><br>
<span class="quotelev2">&gt; &gt;                call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Isend(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,0,mumps_
</span><br>
par
<br>
<span class="quotelev2">&gt; &gt;%MYID,MPI_COMM_WORLD,request1,ierr) call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Isend(res_cpu,total_unknowns,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,
</span><br>
MPI
<br>
<span class="quotelev2">&gt; &gt;_COMM_WORLD,request2,ierr) call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Isend(row_cpu,total_elem_cpu*unique,MPI_INTEGER,0,mumps_par%MYID,MP
</span><br>
I_C
<br>
<span class="quotelev2">&gt; &gt;OMM_WORLD,request3,ierr) call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Isend(col_cpu,total_elem_cpu*unique,MPI_INTEGER,0,mumps_par%MYID,MP
</span><br>
I_C
<br>
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
<span class="quotelev2">&gt; &gt;Could someone help to track this error down. Is really annoying to
</span><br>
use
<br>
<span class="quotelev2">&gt; &gt; only two processors.
</span><br>
<span class="quotelev2">&gt; &gt;The cluster has about 8 nodes and each has 4 dual core CPU. I tried
</span><br>
to run
<br>
<span class="quotelev2">&gt; &gt; the code on a single node with more than 2 CPU but I got the same
</span><br>
error!!
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the error message means that the received message was longer
</span><br>
<span class="quotelev1">&gt; than the receive buffer that was specified.  If I look at your code
</span><br>
and
<br>
<span class="quotelev1">&gt; try to reason about its correctness, I think of the message-passing
</span><br>
<span class="quotelev1">&gt; portion as looking like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if( mumps_par%MYID .eq. 0 ) THEN
</span><br>
<span class="quotelev1">&gt;    do jw=1,nsize-1
</span><br>
<span class="quotelev1">&gt;        call
</span><br>
<span class="quotelev1">&gt;
</span><br>
MPI_recv(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,MPI_ANY_SO
<br>
URC
<br>
<span class="quotelev1">&gt;E,MPI_ANY_TAG,MPI_COMM_WORLD,status1,ierr) call MPI_recv( 
</span><br>
<span class="quotelev1">&gt; res_cpu,total_unknowns
</span><br>
<span class="quotelev1">&gt;
</span><br>
,MPI_DOUBLE_PRECISION,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status2,
<br>
ier
<br>
<span class="quotelev1">&gt;r) call MPI_recv(
</span><br>
<span class="quotelev1">&gt; row_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status3,ierr)
</span><br>
<span class="quotelev1">&gt;        call MPI_recv(
</span><br>
<span class="quotelev1">&gt; col_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,status4,ierr)
</span><br>
<span class="quotelev1">&gt;    end do
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;    call
</span><br>
<span class="quotelev1">&gt;
</span><br>
MPI_Send(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,0,mumps_pa
<br>
r%M
<br>
<span class="quotelev1">&gt;YID,MPI_COMM_WORLD,ierr) call MPI_Send(  res_cpu,total_unknowns
</span><br>
<span class="quotelev1">&gt; ,MPI_DOUBLE_PRECISION,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;    call MPI_Send(  row_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;    call MPI_Send(  col_cpu,total_elem_cpu*unique,MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; ,0,mumps_par%MYID,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're running on two processes, then the messages you receive are
</span><br>
in
<br>
<span class="quotelev1">&gt; the order you expect.  If there are more than two processes, however,
</span><br>
<span class="quotelev1">&gt; certainly messages will start appearing &quot;out of order&quot; and your
</span><br>
<span class="quotelev1">&gt; indiscriminate use of MPI_ANY_SOURCE and MPI_ANY_TAG will start
</span><br>
getting
<br>
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
<span class="quotelev1">&gt; you will be trying to receive data into buffers of the wrong size
</span><br>
(some
<br>
<span class="quotelev1">&gt; of the time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe you should use tags to distinguish between the different types
</span><br>
of
<br>
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
<p><span class="quotelev1">&gt;Thank you Eugene for your suggestion. I used different tags for each
</span><br>
variable, 
<br>
<span class="quotelev1">&gt;and now I do not get this error. 
</span><br>
<span class="quotelev1">&gt;The problem now is that I am getting a different solution when I use
</span><br>
more than 
<br>
<span class="quotelev1">&gt;2 CPUs. I checked the matrices and I found that they differ by a very
</span><br>
small 
<br>
<span class="quotelev1">&gt;amount  of the order 10^(-10). Actually, I am getting a different
</span><br>
solution if I 
<br>
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
<p>over the peer processes in a specific order.
<br>
<p><p><p>P.S.  It seems to me that you could use MPI collective operations to 
<br>
implement what you're doing.  E.g., something like:
<br>
<p>call MPI_Reduce(res_cpu, res, total_unknown, MPI_DOUBLE_PRECISION, 
<br>
MPI_SUM, 0, MPI_COMM_WORLD, ierr)
<br>
<p>call MPI_Gather(jacob_cpu, total_elem_cpu * unique,
<br>
MPI_DOUBLE_PRECISION, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jacob    , total_elem_cpu * unique, 
<br>
MPI_DOUBLE_PRECISION, 0, MPI_COMM_WORLD, ierr)
<br>
call MPI_Gather(  row_cpu, total_elem_cpu * unique, MPI_INTEGER        ,
<br>
&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;row    , total_elem_cpu * unique, MPI_INTEGER        
<br>
, 0, MPI_COMM_WORLD, ierr)
<br>
call MPI_Gather(  col_cpu, total_elem_cpu * unique, MPI_INTEGER        ,
<br>
&amp;
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
<p>res_cpu indeterministic problem you had.  I just wanted to make sure you
<br>
<p>knew about the MPI collective operations as an alternative to your 
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
<span class="quotelev1">&gt; ...            ...
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
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
End of users Digest, Vol 1242, Issue 5
**************************************
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9459/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9460.php">Φοίβος Κουκουβίνης: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="9458.php">Jeff Squyres: "Re: [OMPI users] Fwd: open mpi ptoblem with LAM previously installed"</a>
<li><strong>In reply to:</strong> <a href="9452.php">Michael Kuklik: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
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
