<?
$subject_val = "Re: [OMPI users] HPMPI versus OpenMPI performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 13:55:57 2008" -->
<!-- isoreceived="20080604175557" -->
<!-- sent="Wed, 4 Jun 2008 13:55:45 -0400" -->
<!-- isosent="20080604175545" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HPMPI versus OpenMPI performance" -->
<!-- id="9908BB83-755E-43F0-AE9F-40CEA9B86636_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B9D477017AEEC4188C18CB8DA8364B6105BDD38_at_pusehe0l.eh.pweh.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] HPMPI versus OpenMPI performance<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 13:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5808.php">Brock Palen: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5806.php">Jeff Squyres: "Re: [OMPI users] disabling tcp altogether"</a>
<li><strong>In reply to:</strong> <a href="5779.php">Ayer, Timothy  C.: "[OMPI users] HPMPI versus OpenMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5822.php">George Bosilca: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Reply:</strong> <a href="5822.php">George Bosilca: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for all the detailed information!
<br>
<p>It is quite likely that our bsend performance has never been tuned; we  
<br>
simply implemented it, verified that it works, and then moved on -- we  
<br>
hadn't considered that real applications would actually use it.  :-\
<br>
<p>But that being said, 60% difference is a bit odd.  Have you tried  
<br>
running with &quot;--mca mpi_leave_pinned 1&quot;?  If all your sends are  
<br>
MPI_BSEND, it *may* not make a difference, but it could make a  
<br>
difference on the receive side.
<br>
<p>What are the typical communication patterns for your application?
<br>
<p><p><p>On Jun 2, 2008, at 3:39 PM, Ayer, Timothy C. wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We a performing a comparison of HPMPI versus OpenMPI using  
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband and
</span><br>
<span class="quotelev2">&gt;&gt; seeing a performance hit in the vicinity of 60% (OpenMPI is slower)  
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; controlled benchmarks.  Since everything else is similar, we  
</span><br>
<span class="quotelev2">&gt;&gt; suspect a
</span><br>
<span class="quotelev2">&gt;&gt; problem with the way we are using or have installed OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please find attached the following info as requested from
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Application:  in house CFD solver using both point-point and  
</span><br>
<span class="quotelev2">&gt;&gt; collective
</span><br>
<span class="quotelev2">&gt;&gt; operations. Also, for historical reasons it makes extensive use of  
</span><br>
<span class="quotelev2">&gt;&gt; BSEND.
</span><br>
<span class="quotelev2">&gt;&gt; We recognize that BSEND's can be inefficient but it is not  
</span><br>
<span class="quotelev2">&gt;&gt; practical to
</span><br>
<span class="quotelev2">&gt;&gt; change them at this time.  We are trying to understand why the  
</span><br>
<span class="quotelev2">&gt;&gt; performance
</span><br>
<span class="quotelev2">&gt;&gt; is so significantly different from HPMPI.  The application is mixed
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN 90 and C built with Portland Group compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HPMPI Version info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: HP MPI 02.02.05.00 Linux x86-64
</span><br>
<span class="quotelev2">&gt;&gt; major version 202 minor version 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI Version info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.2.4
</span><br>
<span class="quotelev2">&gt;&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configuration info :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The benchmark was a 4-processor job run on a single dual-socket  
</span><br>
<span class="quotelev2">&gt;&gt; dual core
</span><br>
<span class="quotelev2">&gt;&gt; HP DL140G3 (Woodcrest 3.0) with 4 GB of memory.  Each rank requires
</span><br>
<span class="quotelev2">&gt;&gt; approximately 250MB of memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Output from ompi_info --all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See attached file ompi_info_output.txt
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt; File: ompi_info_output.txt &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below is the output requested in the FAQ section:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order for us to help you, it is most helpful if you can run a  
</span><br>
<span class="quotelev2">&gt;&gt; few steps
</span><br>
<span class="quotelev2">&gt;&gt; before sending an e-mail to both perform some basic troubleshooting  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; provide us with enough information about your environment to help  
</span><br>
<span class="quotelev2">&gt;&gt; you.
</span><br>
<span class="quotelev2">&gt;&gt; Please include answers to the following questions in your e-mail:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.	Which OpenFabrics version are you running? Please specify where  
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; got the software from (e.g., from the OpenFabrics community web  
</span><br>
<span class="quotelev2">&gt;&gt; site, from
</span><br>
<span class="quotelev2">&gt;&gt; a vendor, or it was already included in your Linux distribution).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We obtained the software from  www.openfabrics.org &lt;www.openfabrics.org 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Output from ofed_info command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OFED-1.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openib-1.1 (REV=9905)
</span><br>
<span class="quotelev2">&gt;&gt; # User space
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://openib.org/svn/gen2/branches/1.1/src/userspace">https://openib.org/svn/gen2/branches/1.1/src/userspace</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="https://openib.org/svn/gen2/branches/1.1/src/userspace">https://openib.org/svn/gen2/branches/1.1/src/userspace</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Git:
</span><br>
<span class="quotelev2">&gt;&gt; ref: refs/heads/ofed_1_1
</span><br>
<span class="quotelev2">&gt;&gt; commit a083ec1174cb4b5a5052ef5de9a8175df82e864a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # MPI
</span><br>
<span class="quotelev2">&gt;&gt; mpi_osu-0.9.7-mlx2.2.0.tgz
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.1-1.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt; mpitests-2.0-0.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2.	What distro and version of Linux are you running? What is your
</span><br>
<span class="quotelev2">&gt;&gt; kernel version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux xxxxxxxx 2.6.9-64.EL.IT133935.jbtest.1smp #1 SMP Fri Oct 19  
</span><br>
<span class="quotelev2">&gt;&gt; 11:28:12
</span><br>
<span class="quotelev2">&gt;&gt; EDT 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3.	Which subnet manager are you running? (e.g., OpenSM, a
</span><br>
<span class="quotelev2">&gt;&gt; vendor-specific subnet manager, etc.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We believe this to be HP or Voltaire but we are not certain how to
</span><br>
<span class="quotelev2">&gt;&gt; determine this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4.	What is the output of the ibv_devinfo command on a known &quot;good&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; node
</span><br>
<span class="quotelev2">&gt;&gt; and a known &quot;bad&quot; node? (NOTE: there must be at least one port  
</span><br>
<span class="quotelev2">&gt;&gt; listed as
</span><br>
<span class="quotelev2">&gt;&gt; &quot;PORT_ACTIVE&quot; for Open MPI to work. If there is not at least one
</span><br>
<span class="quotelev2">&gt;&gt; PORT_ACTIVE port, something is wrong with your OpenFabrics  
</span><br>
<span class="quotelev2">&gt;&gt; environment and
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI will not be able to run).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hca_id: mthca0
</span><br>
<span class="quotelev2">&gt;&gt;        fw_ver:                         1.2.0
</span><br>
<span class="quotelev2">&gt;&gt;        node_guid:                      001a:4bff:ff0b:5f9c
</span><br>
<span class="quotelev2">&gt;&gt;        sys_image_guid:                 001a:4bff:ff0b:5f9f
</span><br>
<span class="quotelev2">&gt;&gt;        vendor_id:                      0x08f1
</span><br>
<span class="quotelev2">&gt;&gt;        vendor_part_id:                 25204
</span><br>
<span class="quotelev2">&gt;&gt;        hw_ver:                         0xA0
</span><br>
<span class="quotelev2">&gt;&gt;        board_id:                       VLT0030010001
</span><br>
<span class="quotelev2">&gt;&gt;        phys_port_cnt:                  1
</span><br>
<span class="quotelev2">&gt;&gt;                port:   1
</span><br>
<span class="quotelev2">&gt;&gt;                        state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt;&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;                        active_mtu:             2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;                        sm_lid:                 1
</span><br>
<span class="quotelev2">&gt;&gt;                        port_lid:               161
</span><br>
<span class="quotelev2">&gt;&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5.	What is the output of the ifconfig command on a known &quot;good&quot; node
</span><br>
<span class="quotelev2">&gt;&gt; and a known &quot;bad&quot; node? (mainly relevant for IPoIB installations)  
</span><br>
<span class="quotelev2">&gt;&gt; Note
</span><br>
<span class="quotelev2">&gt;&gt; that some Linux distributions do not put ifconfig in the default  
</span><br>
<span class="quotelev2">&gt;&gt; path for
</span><br>
<span class="quotelev2">&gt;&gt; normal users; look for it in /sbin/ifconfig or /usr/sbin/ifconfig.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:XX:XX:XX:XX:XX
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:X.Y.Z.Q  Bcast:X.Y.Z.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;          inet6 addr: X::X:X:X:X/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:1021733054 errors:0 dropped:10717 overruns:0  
</span><br>
<span class="quotelev2">&gt;&gt; frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:1047320834 errors:0 dropped:0 overruns:0  
</span><br>
<span class="quotelev2">&gt;&gt; carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:1035986839096 (964.8 GiB)  TX bytes:1068055599116
</span><br>
<span class="quotelev2">&gt;&gt; (994.7 GiB)
</span><br>
<span class="quotelev2">&gt;&gt;          Interrupt:169
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ib0       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev2">&gt;&gt; 80-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:A.B.C.D  Bcast:A.B.C.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;          inet6 addr: X::X:X:X:X/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:137021 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:20 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:128
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:12570947 (11.9 MiB)  TX bytes:1504 (1.4 KiB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:1498664 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:1498664 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:1190810468 (1.1 GiB)  TX bytes:1190810468 (1.1 GiB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6.	If running under Bourne shells, what is the output of the &quot;ulimit
</span><br>
<span class="quotelev2">&gt;&gt; -l&quot; command?
</span><br>
<span class="quotelev2">&gt;&gt; If running under C shells, what is the output of the &quot;limit | grep
</span><br>
<span class="quotelev2">&gt;&gt; memorylocked&quot; command?
</span><br>
<span class="quotelev2">&gt;&gt; (NOTE: If the value is not &quot;unlimited&quot;, this FAQ entry
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked</a>- 
</span><br>
<span class="quotelev2">&gt;&gt; pages&gt;  and
</span><br>
<span class="quotelev2">&gt;&gt; this FAQ entry
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a> 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; memorylocked 3500000 kbytes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gather up this information and see this page
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt;  about how to submit a help
</span><br>
<span class="quotelev2">&gt;&gt; request to the user's mailing list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5808.php">Brock Palen: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5806.php">Jeff Squyres: "Re: [OMPI users] disabling tcp altogether"</a>
<li><strong>In reply to:</strong> <a href="5779.php">Ayer, Timothy  C.: "[OMPI users] HPMPI versus OpenMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5822.php">George Bosilca: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Reply:</strong> <a href="5822.php">George Bosilca: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
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
