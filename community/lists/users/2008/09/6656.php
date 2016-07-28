<?
$subject_val = "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 11:05:29 2008" -->
<!-- isoreceived="20080922150529" -->
<!-- sent="Mon, 22 Sep 2008 11:05:15 -0400" -->
<!-- isosent="20080922150515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..." -->
<!-- id="4D494477-2FE5-485B-B7F7-6E5E01D32B75_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 11:05:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>In reply to:</strong> <a href="6642.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aurelien's advice is good -- check and see exactly what the debugger  
<br>
is telling you.  You might want to look at the corefile in the  
<br>
debugger and see exactly where it failed -- it may or may not be an  
<br>
MPI issue.
<br>
<p>Also -- Aurelien didn't directly say it, but don't worry about the  
<br>
OMPI_DECLSPEC stuff.  You'll see earlier in mpi.h that OMPI_DECLSPEC  
<br>
is #define'd to be empty (it's for Windows compatibility).
<br>
<p>Keep in mind that although different MPI implementations provide  
<br>
source code compatibility for MPI applications, they are not binary- 
<br>
portable.
<br>
<p>So if you compile an MPI application with MPICH's wrapper compilers,  
<br>
it will not run properly under Open MPI's mpirun (and vice versa).   
<br>
You must entirely compile your application with Open MPI's wrapper  
<br>
compilers and then run it with Open MPI's mpirun.
<br>
<p><p>On Sep 21, 2008, at 12:35 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Are you sure that you have matching versions of the MPI library and  
</span><br>
<span class="quotelev1">&gt; mpi.h file ? Open MPI and MPICH have different internal types for  
</span><br>
<span class="quotelev1">&gt; the opaque MPI objects (such as MPI_Comm). If you have mismatching  
</span><br>
<span class="quotelev1">&gt; mpi.h and mpi library, you'll transmit those as integer to the  
</span><br>
<span class="quotelev1">&gt; library while it is expecting pointers. This will obviously segfault  
</span><br>
<span class="quotelev1">&gt; very badly. Please make sure that you actually use the mpi.h from  
</span><br>
<span class="quotelev1">&gt; open MPI (by using Open MPI's mpicc) to compile your program when  
</span><br>
<span class="quotelev1">&gt; using Open MPI. Also make sure that you don't have another version  
</span><br>
<span class="quotelev1">&gt; of libmpi in your LD_LIBRARY_PATH that could be used instead of the  
</span><br>
<span class="quotelev1">&gt; one you used to compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 21 sept. 08 &#224; 04:38, Shafagh Jafer a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok. I noticed that whenever in my code, i use an MPI fucntion that  
</span><br>
<span class="quotelev2">&gt;&gt; has
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OMPI_DECLSPEC&quot;  in front of it in mpi.h , I get this segfault  
</span><br>
<span class="quotelev2">&gt;&gt; error. Could some one please tell me what is &quot;OMPI_DECLSPEC&quot;?? is  
</span><br>
<span class="quotelev2">&gt;&gt; it a macro that I need to enable ?!?
</span><br>
<span class="quotelev2">&gt;&gt; forexample, in MPICH the function getsize in mpi.h looks like the  
</span><br>
<span class="quotelev2">&gt;&gt; following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int MPI_Comm_size(MPI_Comm, int *);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but the same function in OMPI apears as follows:
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC int MPI_Comm_size(MPI_Comm comm, int *size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- On Sat, 9/20/08, Shafagh Jafer &lt;barfy27_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; From: Shafagh Jafer &lt;barfy27_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Segmentation Fault--libc.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 6(__libc_start_main...
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Saturday, September 20, 2008, 9:50 PM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My code was working perfect when I had it with MPICH now I have  
</span><br>
<span class="quotelev2">&gt;&gt; replaced that with OMPI. Could that be the problem?? Do I need to  
</span><br>
<span class="quotelev2">&gt;&gt; change any part of my source code if I migrate from MPICH-1.2.6 to  
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI-1.2.7?? Please let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- On Sat, 9/20/08, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; From: Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Segmentation Fault--libc.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 6(__libc_start_main...
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Saturday, September 20, 2008, 6:54 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shafagh,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You have a segfault in your own code. Because Open MPI detects it, it
</span><br>
<span class="quotelev2">&gt;&gt; forwards the error to you and pretty print it but Open MPI is not the
</span><br>
<span class="quotelev2">&gt;&gt; source of the bug. From the stack trace, I suggest you gdb debug the
</span><br>
<span class="quotelev2">&gt;&gt; PhysicalGetID function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 19 sept. 08 &#224; 22:22, Shafagh Jafer a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi every one,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I need urgent help plz :-(
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am getting the following error when i run my program. OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compilation was all fine and went well, but now i dont understand
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the source of this error:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ============================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] Failing at address: 0xcf
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] [ 0] /lib/tls/libpthread.so.0 [0x7ccf80]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] [ 1] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/ 
</span><br>
<span class="quotelev2">&gt;&gt; cd++
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (physicalGetId__C10CommPhyMPI+0x14) [0x8305880]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] [ 2] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/ 
</span><br>
<span class="quotelev2">&gt;&gt; cd++
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (physicalCommGetId__Fv+0x43) [0x82ff81b]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] [ 3] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/ 
</span><br>
<span class="quotelev2">&gt;&gt; cd++
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (openComm__16StandAloneLoader+0x1f) [0x80fdf43]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] [ 4] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/ 
</span><br>
<span class="quotelev2">&gt;&gt; cd++
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (run__21ParallelMainSimulator+0x1640) [0x81ea53c]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] [ 5] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/ 
</span><br>
<span class="quotelev2">&gt;&gt; cd++
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (main+0xde) [0x80a58ce]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] [ 6] /lib/tls/libc.so.6(__libc_start_main+0xda)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [0xe3d79a]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] [ 7] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/ 
</span><br>
<span class="quotelev2">&gt;&gt; cd++
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (sinh+0x4d) [0x80a2221]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node01:29264] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun noticed that job rank 0 with PID 29264 on node node01 exited
</span><br>
<span class="quotelev3">&gt;&gt; &gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ===========================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev2">&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev2">&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev2">&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>In reply to:</strong> <a href="6642.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
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
