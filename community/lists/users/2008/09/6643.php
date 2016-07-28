<?
$subject_val = "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 21 15:46:29 2008" -->
<!-- isoreceived="20080921194629" -->
<!-- sent="Sun, 21 Sep 2008 12:46:24 -0700 (PDT)" -->
<!-- isosent="20080921194624" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..." -->
<!-- id="991840.97939.qm_at_web34802.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D04F8B6-CDC1-4DBC-AF61-40C996B5FBB7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-21 15:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6644.php">Shafagh Jafer: "[OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6642.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>In reply to:</strong> <a href="6642.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes I am using openmpi mpicc and mpic++ to compile my code, and I only have openmpi's lib directory in my LD_LIBRARY_PATH. to make sure that I am including the mpi.h of openmpi, i added this line to my source code 
<br>
#include &quot;/opt/openmpi/1.2.7/include/mpi.h&quot;instead of only saying 
<br>
#include &quot;mpi.h&quot; 
<br>
but now i get the following errors, which show that the wrapper compiler is not adding &quot;
<br>
-I${prefix}/include/openmpi&quot; infron of the included files from cxx folder.
<br>
&#160;
<br>
In file included from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from CommPhyMPI.cc:36:
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:167: CommMgrInterface.cc -o /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/warped/TimeWarp/src/obj/CommMgrInterface.o
<br>
openmpi/ompi/mpi/cxx/constants.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:168: openmpi/ompi/mpi/cxx/functions.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:169: openmpi/ompi/mpi/cxx/datatype.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:193: openmpi/ompi/mpi/cxx/exception.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:194: openmpi/ompi/mpi/cxx/op.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:195: openmpi/ompi/mpi/cxx/status.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:196: openmpi/ompi/mpi/cxx/request.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:197: openmpi/ompi/mpi/cxx/group.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:198: openmpi/ompi/mpi/cxx/comm.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:199: openmpi/ompi/mpi/cxx/win.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:200: openmpi/ompi/mpi/cxx/file.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:201: openmpi/ompi/mpi/cxx/errhandler.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:202: openmpi/ompi/mpi/cxx/intracomm.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:203: openmpi/ompi/mpi/cxx/topology.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:204: openmpi/ompi/mpi/cxx/intercomm.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:205: openmpi/ompi/mpi/cxx/info.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:244: openmpi/ompi/mpi/cxx/datatype_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:245: openmpi/ompi/mpi/cxx/functions_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:246: openmpi/ompi/mpi/cxx/request_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:247: openmpi/ompi/mpi/cxx/comm_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:248: openmpi/ompi/mpi/cxx/intracomm_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:249: openmpi/ompi/mpi/cxx/topology_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:250: openmpi/ompi/mpi/cxx/intercomm_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:251: openmpi/ompi/mpi/cxx/group_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:252: openmpi/ompi/mpi/cxx/op_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:253: openmpi/ompi/mpi/cxx/errhandler_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:254: openmpi/ompi/mpi/cxx/status_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:255: openmpi/ompi/mpi/cxx/info_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:256: openmpi/ompi/mpi/cxx/win_inln.h: No such file or directory
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:257: openmpi/ompi/mpi/cxx/file_inln.h: No such file or directory
<br>
make[1]: *** [/nfs/sjafer/phd/openMPI/latest_cd++_timewarp/warped/TimeWarp/src/obj/CommPhyMPI.o] Error 1
<br>
<p><p>--- On Sun, 9/21/08, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p>From: Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Sunday, September 21, 2008, 9:35 AM
<br>
<p>Are you sure that you have matching versions of the MPI library and  
<br>
mpi.h file ? Open MPI and MPICH have different internal types for the  
<br>
opaque MPI objects (such as MPI_Comm). If you have mismatching mpi.h  
<br>
and mpi library, you'll transmit those as integer to the library while  
<br>
it is expecting pointers. This will obviously segfault very badly.  
<br>
Please make sure that you actually use the mpi.h from open MPI (by  
<br>
using Open MPI's mpicc) to compile your program when using Open MPI.  
<br>
Also make sure that you don't have another version of libmpi in your  
<br>
LD_LIBRARY_PATH that could be used instead of the one you used to  
<br>
compile.
<br>
<p>Aurelien
<br>
<p>Le 21 sept. 08 &#224; 04:38, Shafagh Jafer a &#233;crit :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok. I noticed that whenever in my code, i use an MPI fucntion that has
</span><br>
<span class="quotelev1">&gt; &quot;OMPI_DECLSPEC&quot;  in front of it in mpi.h , I get this segfault  
</span><br>
<span class="quotelev1">&gt; error. Could some one please tell me what is &quot;OMPI_DECLSPEC&quot;??
</span><br>
is it  
<br>
<span class="quotelev1">&gt; a macro that I need to enable ?!?
</span><br>
<span class="quotelev1">&gt; forexample, in MPICH the function getsize in mpi.h looks like the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_Comm_size(MPI_Comm, int *);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but the same function in OMPI apears as follows:
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC int MPI_Comm_size(MPI_Comm comm, int *size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Sat, 9/20/08, Shafagh Jafer &lt;barfy27_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Shafagh Jafer &lt;barfy27_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Segmentation Fault--libc.so. 
</span><br>
<span class="quotelev1">&gt; 6(__libc_start_main...
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Saturday, September 20, 2008, 9:50 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My code was working perfect when I had it with MPICH now I have  
</span><br>
<span class="quotelev1">&gt; replaced that with OMPI. Could that be the problem?? Do I need to  
</span><br>
<span class="quotelev1">&gt; change any part of my source code if I migrate from MPICH-1.2.6 to  
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.2.7?? Please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Sat, 9/20/08, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Segmentation Fault--libc.so. 
</span><br>
<span class="quotelev1">&gt; 6(__libc_start_main...
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Saturday, September 20, 2008, 6:54 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shafagh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have a segfault in your own code. Because Open MPI detects it, it
</span><br>
<span class="quotelev1">&gt; forwards the error to you and pretty print it but Open MPI is not the
</span><br>
<span class="quotelev1">&gt; source of the bug. From the stack trace, I suggest you gdb debug the
</span><br>
<span class="quotelev1">&gt; PhysicalGetID function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 19 sept. 08 &#224; 22:22, Shafagh Jafer a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi every one,
</span><br>
<span class="quotelev2">&gt; &gt; I need urgent help plz :-(
</span><br>
<span class="quotelev2">&gt; &gt; I am getting the following error when i run my program. OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; compilation was all fine and went well, but now i dont understand
</span><br>
<span class="quotelev2">&gt; &gt; the source of this error:
</span><br>
<span class="quotelev2">&gt; &gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] Failing at address: 0xcf
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] [ 0] /lib/tls/libpthread.so.0 [0x7ccf80]
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] [ 1] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd 
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev2">&gt; &gt; (physicalGetId__C10CommPhyMPI+0x14) [0x8305880]
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] [ 2] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd 
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev2">&gt; &gt; (physicalCommGetId__Fv+0x43) [0x82ff81b]
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] [ 3] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd 
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev2">&gt; &gt; (openComm__16StandAloneLoader+0x1f) [0x80fdf43]
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] [ 4] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd 
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev2">&gt; &gt; (run__21ParallelMainSimulator+0x1640) [0x81ea53c]
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] [ 5] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd 
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev2">&gt; &gt; (main+0xde) [0x80a58ce]
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] [ 6] /lib/tls/libc.so.6(__libc_start_main+0xda)
</span><br>
<span class="quotelev2">&gt; &gt; [0xe3d79a]
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] [ 7] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd 
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev2">&gt; &gt; (sinh+0x4d) [0x80a2221]
</span><br>
<span class="quotelev2">&gt; &gt; [node01:29264] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that job rank 0 with PID 29264 on node node01 exited
</span><br>
<span class="quotelev2">&gt; &gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt; ===========================================
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 6321
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6644.php">Shafagh Jafer: "[OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6642.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>In reply to:</strong> <a href="6642.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
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
