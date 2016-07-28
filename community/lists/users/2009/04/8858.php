<?
$subject_val = "[OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 05:46:06 2009" -->
<!-- isoreceived="20090410094606" -->
<!-- sent="Fri, 10 Apr 2009 11:45:58 +0200" -->
<!-- isosent="20090410094558" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="[OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="b4f9bf870904100245l55d0895dn4ea91d39cef6b397_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] 1.3.1 -rf rankfile behaviour ??<br>
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-10 05:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8859.php">vkm: "[OMPI users] openmpi src rpm and message coalesce"</a>
<li><strong>Previous message:</strong> <a href="8857.php">neeraj_at_[hidden]: "[OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8879.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="8879.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="8887.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="8894.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="8975.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="8977.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="9000.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="9152.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="9153.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9184.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9203.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9969.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ,
<br>
<p>I am currently testing the process affinity capabilities of openmpi and I
<br>
would like to know if the rankfile behaviour I will describe below is normal
<br>
or not ?
<br>
<p>cat hostfile.0
<br>
r011n002 slots=4
<br>
r011n003 slots=4
<br>
<p>cat rankfile.0
<br>
rank 0=r011n002 slot=0
<br>
rank 1=r011n003 slot=1
<br>
<p>##################################################################################
<br>
<p>mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ### OK
<br>
r011n002
<br>
r011n003
<br>
<p>##################################################################################
<br>
but
<br>
mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1 hostname
<br>
### CRASHED
<br>
* --------------------------------------------------------------------------
<br>
Error, invalid rank (1) in the rankfile (rankfile.0)
<br>
--------------------------------------------------------------------------
<br>
[r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
<br>
rmaps_rank_file.c at line 404
<br>
[r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rmaps_base_map_job.c at line 87
<br>
[r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/plm_base_launch_support.c at line 77
<br>
[r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in file
<br>
plm_rsh_module.c at line 985
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
orterun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
orterun: clean termination accomplished
<br>
*
<br>
It seems that the rankfile option is not propagted to the second command
<br>
line ; there is no global understanding of the ranking inside a mpirun
<br>
command.
<br>
<p>##################################################################################
<br>
<p>Assuming that , I tried to provide a rankfile to each command line:
<br>
<p>cat rankfile.0
<br>
rank 0=r011n002 slot=0
<br>
<p>cat rankfile.1
<br>
rank 0=r011n003 slot=1
<br>
<p>mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf rankfile.1
<br>
-n 1 hostname ### CRASHED
<br>
*[r011n002:28778] *** Process received signal ***
<br>
[r011n002:28778] Signal: Segmentation fault (11)
<br>
[r011n002:28778] Signal code: Address not mapped (1)
<br>
[r011n002:28778] Failing at address: 0x34
<br>
[r011n002:28778] [ 0] [0xffffe600]
<br>
[r011n002:28778] [ 1]
<br>
/tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x55d)
<br>
[0x5557decd]
<br>
[r011n002:28778] [ 2]
<br>
/tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x117)
<br>
[0x555842a7]
<br>
[r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/mca_plm_rsh.so
<br>
[0x556098c0]
<br>
[r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun [0x804aa27]
<br>
[r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun [0x804a022]
<br>
[r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc) [0x9f1dec]
<br>
[r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun [0x8049f71]
<br>
[r011n002:28778] *** End of error message ***
<br>
Segmentation fault (core dumped)*
<br>
<p><p><p>I hope that I've found a bug because it would be very important for me to
<br>
have this kind of capabiliy .
<br>
Launch a multiexe mpirun command line and be able to bind my exes and
<br>
sockets together.
<br>
<p>Thanks in advance for your help
<br>
<p>Geoffroy
<br>
<p><p><p><p><p><p><p><p><p><p>2009/4/9 &lt;users-request_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;        users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;        users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. mpirun self,sm (Robert Kubrick)
</span><br>
<span class="quotelev1">&gt;   2. Re: mpirun self,sm (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;   3. shared libraries issue compiling 1.3.1/intel 10.1.022
</span><br>
<span class="quotelev1">&gt;      (Francesco Pietra)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Thu, 9 Apr 2009 00:15:03 -0400
</span><br>
<span class="quotelev1">&gt; From: Robert Kubrick &lt;robertkubrick_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] mpirun self,sm
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;99AB3654-DD6A-4E96-94AC-B741073821ED_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How is this possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dx:~&gt; mpirun -v -np 2 --mca btl self,sm --host dx,sx hostname
</span><br>
<span class="quotelev1">&gt; dx
</span><br>
<span class="quotelev1">&gt; sx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dx:~&gt; netstat -i
</span><br>
<span class="quotelev1">&gt; Kernel Interface table
</span><br>
<span class="quotelev1">&gt; Iface   MTU Met   RX-OK RX-ERR RX-DRP RX-OVR   TX-OK TX-ERR TX-DRP TX-
</span><br>
<span class="quotelev1">&gt; OVR Flg
</span><br>
<span class="quotelev1">&gt; eth0   1500   0  998755      0      0      0 1070323      0
</span><br>
<span class="quotelev1">&gt; 0      0 BMRU
</span><br>
<span class="quotelev1">&gt; eth1   1500   0   85352      0      0      0  379993      0
</span><br>
<span class="quotelev1">&gt; 0      0 BMRU
</span><br>
<span class="quotelev1">&gt; ib0   65520   0     204      0      0      0     155      0
</span><br>
<span class="quotelev1">&gt; 5      0 BMRU
</span><br>
<span class="quotelev1">&gt; lo    16436   0 1648874      0      0      0 1648874      0
</span><br>
<span class="quotelev1">&gt; 0      0 LRU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to force an error with the first command above to make sure
</span><br>
<span class="quotelev1">&gt; that my btl parameters are used correctly, but it looks like ompi
</span><br>
<span class="quotelev1">&gt; runs hostname on the remote machine regardless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Thu, 9 Apr 2009 02:16:08 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun self,sm
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;FF3FCDB6-3E23-41F6-88BC-7D4F327E40DC_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostname never calls MPI_Init, and therefore never initializes the BTL
</span><br>
<span class="quotelev1">&gt; subsystem. Therefore, hostname will always run correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun is not an MPI process, nor are the daemons used by OMPI to
</span><br>
<span class="quotelev1">&gt; launch the MPI job. Thus, they also do not call MPI_Init, and
</span><br>
<span class="quotelev1">&gt; therefore do not see the BTL subsystem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So this example will run just fine. You need to run an MPI application
</span><br>
<span class="quotelev1">&gt; to cause it to fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 8, 2009, at 10:15 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; How is this possible?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; dx:~&gt; mpirun -v -np 2 --mca btl self,sm --host dx,sx hostname
</span><br>
<span class="quotelev2">&gt; &gt; dx
</span><br>
<span class="quotelev2">&gt; &gt; sx
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; dx:~&gt; netstat -i
</span><br>
<span class="quotelev2">&gt; &gt; Kernel Interface table
</span><br>
<span class="quotelev2">&gt; &gt; Iface   MTU Met   RX-OK RX-ERR RX-DRP RX-OVR   TX-OK TX-ERR TX-DRP
</span><br>
<span class="quotelev2">&gt; &gt; TX-OVR Flg
</span><br>
<span class="quotelev2">&gt; &gt; eth0   1500   0  998755      0      0      0 1070323      0
</span><br>
<span class="quotelev2">&gt; &gt; 0      0 BMRU
</span><br>
<span class="quotelev2">&gt; &gt; eth1   1500   0   85352      0      0      0  379993      0
</span><br>
<span class="quotelev2">&gt; &gt; 0      0 BMRU
</span><br>
<span class="quotelev2">&gt; &gt; ib0   65520   0     204      0      0      0     155      0
</span><br>
<span class="quotelev2">&gt; &gt; 5      0 BMRU
</span><br>
<span class="quotelev2">&gt; &gt; lo    16436   0 1648874      0      0      0 1648874      0
</span><br>
<span class="quotelev2">&gt; &gt; 0      0 LRU
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I want to force an error with the first command above to make sure
</span><br>
<span class="quotelev2">&gt; &gt; that my btl parameters are used correctly, but it looks like ompi
</span><br>
<span class="quotelev2">&gt; &gt; runs hostname on the remote machine regardless.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Thu, 9 Apr 2009 17:31:16 +0200
</span><br>
<span class="quotelev1">&gt; From: Francesco Pietra &lt;chiendarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] shared libraries issue compiling 1.3.1/intel
</span><br>
<span class="quotelev1">&gt;        10.1.022
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;b87c422a0904090831q56a98e67w5000c90a94bf8a37_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=UTF-8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; As failure to find &quot;limits.h&quot; in my attempted compilations of Amber of
</span><br>
<span class="quotelev1">&gt; th fast few days (amd64 lenny, openmpi 1.3.1, intel compilers
</span><br>
<span class="quotelev1">&gt; 10.1.015) is probably (or I hope so) a bug of the version used of
</span><br>
<span class="quotelev1">&gt; intel compilers (I made with debian the same observations reported
</span><br>
<span class="quotelev1">&gt; for gentoo,
</span><br>
<span class="quotelev1">&gt; <a href="http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/">http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made a deb package of 10.1.022, icc and ifort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC icc, CXX icp, F77 and FC ifort --with-libnuma=/usr (not
</span><br>
<span class="quotelev1">&gt; /usr/lib so that the numa.h issue is not raised), &quot;make clean&quot;, and
</span><br>
<span class="quotelev1">&gt; &quot;mak install&quot; gave no error signals. However, the compilation tests in
</span><br>
<span class="quotelev1">&gt; the examples did not pass and I really don't understand why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error, with both connectivity_c and hello_c (I was operating on
</span><br>
<span class="quotelev1">&gt; the parallel computer deb64 directly and have access to everything
</span><br>
<span class="quotelev1">&gt; there) was failure to find a shared library, libimf.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # dpkg --search libimf.so
</span><br>
<span class="quotelev1">&gt;   /opt/intel/fce/10.1.022/lib/libimf.so  (the same for cce)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which path seems to be correctly sourced by iccvars.sh and
</span><br>
<span class="quotelev1">&gt; ifortvars.sh (incidentally, both files are -rw-r--r-- root root;
</span><br>
<span class="quotelev1">&gt; correct that non executable?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; returned, inter alia,
</span><br>
<span class="quotelev1">&gt; /opt/intel/mkl/
</span><br>
<span class="quotelev1">&gt; 10.1.2.024/lib/em64t:/opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/lib:/opt/intel/fce/10.1.022/lib
</span><br>
<span class="quotelev1">&gt; (why twice the mkl?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I surely miss to understand something fundamental. Hope other eyes see
</span><br>
<span class="quotelev1">&gt; better
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A kind person elsewhere suggested me on passing &quot;The use of -rpath
</span><br>
<span class="quotelev1">&gt; during linking is highly recommended as opposed to setting
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH at run time, not the least because it hardcodes the
</span><br>
<span class="quotelev1">&gt; paths to the &quot;right&quot; library files in the executables themselves&quot;
</span><br>
<span class="quotelev1">&gt; Should this be relevant to the present issue, where to learn about
</span><br>
<span class="quotelev1">&gt; -rpath linking?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1197, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8858/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8859.php">vkm: "[OMPI users] openmpi src rpm and message coalesce"</a>
<li><strong>Previous message:</strong> <a href="8857.php">neeraj_at_[hidden]: "[OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8879.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="8879.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="8887.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="8894.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="8975.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="8977.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="9000.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="9152.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="9153.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9184.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9203.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9969.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
