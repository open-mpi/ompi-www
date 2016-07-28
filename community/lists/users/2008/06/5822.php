<?
$subject_val = "Re: [OMPI users] HPMPI versus OpenMPI performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 04:46:36 2008" -->
<!-- isoreceived="20080605084636" -->
<!-- sent="Thu, 5 Jun 2008 04:46:17 -0400" -->
<!-- isosent="20080605084617" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HPMPI versus OpenMPI performance" -->
<!-- id="DCA143AA-3AB8-4B3A-B533-EFCB10DE74D8_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9908BB83-755E-43F0-AE9F-40CEA9B86636_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 04:46:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5823.php">Terry Dontje: "Re: [OMPI users] Communicators in Fortran and C"</a>
<li><strong>Previous message:</strong> <a href="5821.php">Samuel Sarholz: "[OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5807.php">Jeff Squyres: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I correctly understand how you run your application I think I know  
<br>
where the problem is coming from. In few words you're using buffered  
<br>
send over shared memory.
<br>
<p>First, buffered send has only one main benefit, it double the amount  
<br>
of memory required for the communication. A side effect is that it  
<br>
increase the number of memory copies. The original buffer have to be  
<br>
copied in the attached buffer, then from this attached buffer the data  
<br>
will be moved into the shared memory region, and from there the  
<br>
receiver can finally copy the data in the receive buffer. In total  
<br>
there are 3 memory copies involved in this operation, which  
<br>
automatically limit the available bandwidth to a 1/3 of the available  
<br>
memory bandwidth on the architecture. Additionally, if the amount of  
<br>
data involved in this communication is large enough, the cache will be  
<br>
completely thrashed by the end of the communication.
<br>
<p>Second, using buffered send requires asynchronous progress. If your  
<br>
code doesn't call any MPI communication functions, there is no reason  
<br>
that the data transfer take place at least not until the  
<br>
MPI_Buffer_detach function is called (or any other communication  
<br>
related MPI function).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jun 4, 2008, at 1:55 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for all the detailed information!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is quite likely that our bsend performance has never been tuned; we
</span><br>
<span class="quotelev1">&gt; simply implemented it, verified that it works, and then moved on -- we
</span><br>
<span class="quotelev1">&gt; hadn't considered that real applications would actually use it.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But that being said, 60% difference is a bit odd.  Have you tried
</span><br>
<span class="quotelev1">&gt; running with &quot;--mca mpi_leave_pinned 1&quot;?  If all your sends are
</span><br>
<span class="quotelev1">&gt; MPI_BSEND, it *may* not make a difference, but it could make a
</span><br>
<span class="quotelev1">&gt; difference on the receive side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are the typical communication patterns for your application?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2008, at 3:39 PM, Ayer, Timothy C. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We a performing a comparison of HPMPI versus OpenMPI using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infiniband and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seeing a performance hit in the vicinity of 60% (OpenMPI is slower)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; controlled benchmarks.  Since everything else is similar, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suspect a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem with the way we are using or have installed OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please find attached the following info as requested from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Application:  in house CFD solver using both point-point and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operations. Also, for historical reasons it makes extensive use of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BSEND.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We recognize that BSEND's can be inefficient but it is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; practical to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change them at this time.  We are trying to understand why the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is so significantly different from HPMPI.  The application is mixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FORTRAN 90 and C built with Portland Group compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPMPI Version info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: HP MPI 02.02.05.00 Linux x86-64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; major version 202 minor version 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI Version info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun (Open MPI) 1.2.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configuration info :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The benchmark was a 4-processor job run on a single dual-socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dual core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HP DL140G3 (Woodcrest 3.0) with 4 GB of memory.  Each rank requires
</span><br>
<span class="quotelev3">&gt;&gt;&gt; approximately 250MB of memory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) Output from ompi_info --all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See attached file ompi_info_output.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;&lt; File: ompi_info_output.txt &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Below is the output requested in the FAQ section:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order for us to help you, it is most helpful if you can run a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; few steps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before sending an e-mail to both perform some basic troubleshooting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide us with enough information about your environment to help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please include answers to the following questions in your e-mail:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.	Which OpenFabrics version are you running? Please specify where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; got the software from (e.g., from the OpenFabrics community web
</span><br>
<span class="quotelev3">&gt;&gt;&gt; site, from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a vendor, or it was already included in your Linux distribution).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We obtained the software from  www.openfabrics.org &lt;www.openfabrics.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Output from ofed_info command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OFED-1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib-1.1 (REV=9905)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # User space
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://openib.org/svn/gen2/branches/1.1/src/userspace">https://openib.org/svn/gen2/branches/1.1/src/userspace</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="https://openib.org/svn/gen2/branches/1.1/src/userspace">https://openib.org/svn/gen2/branches/1.1/src/userspace</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Git:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ref: refs/heads/ofed_1_1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commit a083ec1174cb4b5a5052ef5de9a8175df82e864a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_osu-0.9.7-mlx2.2.0.tgz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.1.1-1.src.rpm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpitests-2.0-0.src.rpm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.	What distro and version of Linux are you running? What is your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel version?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux xxxxxxxx 2.6.9-64.EL.IT133935.jbtest.1smp #1 SMP Fri Oct 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11:28:12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3.	Which subnet manager are you running? (e.g., OpenSM, a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor-specific subnet manager, etc.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We believe this to be HP or Voltaire but we are not certain how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; determine this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4.	What is the output of the ibv_devinfo command on a known &quot;good&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a known &quot;bad&quot; node? (NOTE: there must be at least one port
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listed as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;PORT_ACTIVE&quot; for Open MPI to work. If there is not at least one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PORT_ACTIVE port, something is wrong with your OpenFabrics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI will not be able to run).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hca_id: mthca0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       fw_ver:                         1.2.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       node_guid:                      001a:4bff:ff0b:5f9c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       sys_image_guid:                 001a:4bff:ff0b:5f9f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       vendor_id:                      0x08f1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       vendor_part_id:                 25204
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       hw_ver:                         0xA0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       board_id:                       VLT0030010001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       phys_port_cnt:                  1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               port:   1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       max_mtu:                2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       active_mtu:             2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       sm_lid:                 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       port_lid:               161
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       port_lmc:               0x00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5.	What is the output of the ifconfig command on a known &quot;good&quot; node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a known &quot;bad&quot; node? (mainly relevant for IPoIB installations)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that some Linux distributions do not put ifconfig in the default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; path for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; normal users; look for it in /sbin/ifconfig or /usr/sbin/ifconfig.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:XX:XX:XX:XX:XX
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet addr:X.Y.Z.Q  Bcast:X.Y.Z.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: X::X:X:X:X/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:1021733054 errors:0 dropped:10717 overruns:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:1047320834 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:1035986839096 (964.8 GiB)  TX bytes:1068055599116
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (994.7 GiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Interrupt:169
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib0       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 80-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet addr:A.B.C.D  Bcast:A.B.C.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: X::X:X:X:X/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:137021 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:20 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:12570947 (11.9 MiB)  TX bytes:1504 (1.4 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:1498664 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:1498664 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:1190810468 (1.1 GiB)  TX bytes:1190810468 (1.1 GiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6.	If running under Bourne shells, what is the output of the &quot;ulimit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -l&quot; command?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If running under C shells, what is the output of the &quot;limit | grep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memorylocked&quot; command?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (NOTE: If the value is not &quot;unlimited&quot;, this FAQ entry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked</a>-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pages&gt;  and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this FAQ entry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memorylocked 3500000 kbytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gather up this information and see this page
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&gt;  about how to submit a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request to the user's mailing list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5822/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5823.php">Terry Dontje: "Re: [OMPI users] Communicators in Fortran and C"</a>
<li><strong>Previous message:</strong> <a href="5821.php">Samuel Sarholz: "[OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5807.php">Jeff Squyres: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
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
