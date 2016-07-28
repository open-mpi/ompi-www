<?
$subject_val = "[OMPI users] HPMPI versus OpenMPI performance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 15:39:50 2008" -->
<!-- isoreceived="20080602193950" -->
<!-- sent="Mon, 2 Jun 2008 15:39:50 -0400 " -->
<!-- isosent="20080602193950" -->
<!-- name="Ayer, Timothy  C." -->
<!-- email="timothy.ayer_at_[hidden]" -->
<!-- subject="[OMPI users] HPMPI versus OpenMPI performance" -->
<!-- id="4B9D477017AEEC4188C18CB8DA8364B6105BDD38_at_pusehe0l.eh.pweh.com" -->
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
<strong>Subject:</strong> [OMPI users] HPMPI versus OpenMPI performance<br>
<strong>From:</strong> Ayer, Timothy  C. (<em>timothy.ayer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-02 15:39:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5780.php">8mj6tc902_at_[hidden]: "[OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Previous message:</strong> <a href="5778.php">Ralph H Castain: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5786.php">Mukesh K Srivastava: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Maybe reply:</strong> <a href="5786.php">Mukesh K Srivastava: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Maybe reply:</strong> <a href="5787.php">Mukesh K Srivastava: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Reply:</strong> <a href="5807.php">Jeff Squyres: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; We a performing a comparison of HPMPI versus OpenMPI using Infiniband and
</span><br>
<span class="quotelev1">&gt; seeing a performance hit in the vicinity of 60% (OpenMPI is slower) on
</span><br>
<span class="quotelev1">&gt; controlled benchmarks.  Since everything else is similar, we suspect a
</span><br>
<span class="quotelev1">&gt; problem with the way we are using or have installed OpenMPI. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please find attached the following info as requested from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Application:  in house CFD solver using both point-point and collective
</span><br>
<span class="quotelev1">&gt; operations. Also, for historical reasons it makes extensive use of BSEND.
</span><br>
<span class="quotelev1">&gt; We recognize that BSEND's can be inefficient but it is not practical to
</span><br>
<span class="quotelev1">&gt; change them at this time.  We are trying to understand why the performance
</span><br>
<span class="quotelev1">&gt; is so significantly different from HPMPI.  The application is mixed
</span><br>
<span class="quotelev1">&gt; FORTRAN 90 and C built with Portland Group compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HPMPI Version info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun: HP MPI 02.02.05.00 Linux x86-64
</span><br>
<span class="quotelev1">&gt; major version 202 minor version 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI Version info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.2.4
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configuration info :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The benchmark was a 4-processor job run on a single dual-socket dual core
</span><br>
<span class="quotelev1">&gt; HP DL140G3 (Woodcrest 3.0) with 4 GB of memory.  Each rank requires
</span><br>
<span class="quotelev1">&gt; approximately 250MB of memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Output from ompi_info --all 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See attached file ompi_info_output.txt
</span><br>
<span class="quotelev1">&gt;  &lt;&lt; File: ompi_info_output.txt &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is the output requested in the FAQ section:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In order for us to help you, it is most helpful if you can run a few steps
</span><br>
<span class="quotelev1">&gt; before sending an e-mail to both perform some basic troubleshooting and
</span><br>
<span class="quotelev1">&gt; provide us with enough information about your environment to help you.
</span><br>
<span class="quotelev1">&gt; Please include answers to the following questions in your e-mail: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.	Which OpenFabrics version are you running? Please specify where you
</span><br>
<span class="quotelev1">&gt; got the software from (e.g., from the OpenFabrics community web site, from
</span><br>
<span class="quotelev1">&gt; a vendor, or it was already included in your Linux distribution).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We obtained the software from  www.openfabrics.org &lt;www.openfabrics.org&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output from ofed_info command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OFED-1.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openib-1.1 (REV=9905)
</span><br>
<span class="quotelev1">&gt; # User space
</span><br>
<span class="quotelev1">&gt; <a href="https://openib.org/svn/gen2/branches/1.1/src/userspace">https://openib.org/svn/gen2/branches/1.1/src/userspace</a>
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://openib.org/svn/gen2/branches/1.1/src/userspace">https://openib.org/svn/gen2/branches/1.1/src/userspace</a>&gt; 
</span><br>
<span class="quotelev1">&gt; Git:
</span><br>
<span class="quotelev1">&gt; ref: refs/heads/ofed_1_1
</span><br>
<span class="quotelev1">&gt; commit a083ec1174cb4b5a5052ef5de9a8175df82e864a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # MPI
</span><br>
<span class="quotelev1">&gt; mpi_osu-0.9.7-mlx2.2.0.tgz
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.1-1.src.rpm
</span><br>
<span class="quotelev1">&gt; mpitests-2.0-0.src.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.	What distro and version of Linux are you running? What is your
</span><br>
<span class="quotelev1">&gt; kernel version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux xxxxxxxx 2.6.9-64.EL.IT133935.jbtest.1smp #1 SMP Fri Oct 19 11:28:12
</span><br>
<span class="quotelev1">&gt; EDT 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3.	Which subnet manager are you running? (e.g., OpenSM, a
</span><br>
<span class="quotelev1">&gt; vendor-specific subnet manager, etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We believe this to be HP or Voltaire but we are not certain how to
</span><br>
<span class="quotelev1">&gt; determine this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4.	What is the output of the ibv_devinfo command on a known &quot;good&quot; node
</span><br>
<span class="quotelev1">&gt; and a known &quot;bad&quot; node? (NOTE: there must be at least one port listed as
</span><br>
<span class="quotelev1">&gt; &quot;PORT_ACTIVE&quot; for Open MPI to work. If there is not at least one
</span><br>
<span class="quotelev1">&gt; PORT_ACTIVE port, something is wrong with your OpenFabrics environment and
</span><br>
<span class="quotelev1">&gt; Open MPI will not be able to run).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hca_id: mthca0
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         1.2.0
</span><br>
<span class="quotelev1">&gt;         node_guid:                      001a:4bff:ff0b:5f9c
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 001a:4bff:ff0b:5f9f
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x08f1
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 25204
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;         board_id:                       VLT0030010001
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                         port_lid:               161
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5.	What is the output of the ifconfig command on a known &quot;good&quot; node
</span><br>
<span class="quotelev1">&gt; and a known &quot;bad&quot; node? (mainly relevant for IPoIB installations) Note
</span><br>
<span class="quotelev1">&gt; that some Linux distributions do not put ifconfig in the default path for
</span><br>
<span class="quotelev1">&gt; normal users; look for it in /sbin/ifconfig or /usr/sbin/ifconfig.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:XX:XX:XX:XX:XX
</span><br>
<span class="quotelev1">&gt;           inet addr:X.Y.Z.Q  Bcast:X.Y.Z.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: X::X:X:X:X/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1021733054 errors:0 dropped:10717 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:1047320834 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:1035986839096 (964.8 GiB)  TX bytes:1068055599116
</span><br>
<span class="quotelev1">&gt; (994.7 GiB)
</span><br>
<span class="quotelev1">&gt;           Interrupt:169
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev1">&gt; 80-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet addr:A.B.C.D  Bcast:A.B.C.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: X::X:X:X:X/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:137021 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:20 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:128
</span><br>
<span class="quotelev1">&gt;           RX bytes:12570947 (11.9 MiB)  TX bytes:1504 (1.4 KiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1498664 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:1498664 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:1190810468 (1.1 GiB)  TX bytes:1190810468 (1.1 GiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6.	If running under Bourne shells, what is the output of the &quot;ulimit
</span><br>
<span class="quotelev1">&gt; -l&quot; command? 
</span><br>
<span class="quotelev1">&gt; If running under C shells, what is the output of the &quot;limit | grep
</span><br>
<span class="quotelev1">&gt; memorylocked&quot; command? 
</span><br>
<span class="quotelev1">&gt; (NOTE: If the value is not &quot;unlimited&quot;, this FAQ entry
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;  and
</span><br>
<span class="quotelev1">&gt; this FAQ entry
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>&gt;
</span><br>
<span class="quotelev1">&gt; ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; memorylocked 3500000 kbytes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gather up this information and see this page
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt;  about how to submit a help
</span><br>
<span class="quotelev1">&gt; request to the user's mailing list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5780.php">8mj6tc902_at_[hidden]: "[OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Previous message:</strong> <a href="5778.php">Ralph H Castain: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5786.php">Mukesh K Srivastava: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Maybe reply:</strong> <a href="5786.php">Mukesh K Srivastava: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Maybe reply:</strong> <a href="5787.php">Mukesh K Srivastava: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Reply:</strong> <a href="5807.php">Jeff Squyres: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
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
