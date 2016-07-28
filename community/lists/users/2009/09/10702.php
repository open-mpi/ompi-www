<?
$subject_val = "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 11:49:17 2009" -->
<!-- isoreceived="20090920154917" -->
<!-- sent="Sun, 20 Sep 2009 09:49:05 -0600" -->
<!-- isosent="20090920154905" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2" -->
<!-- id="8FDBE95C-66DF-4927-AFA7-401F21DA3573_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="24224559-0B8E-4BCD-B0A3-250CB93D7F50_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-20 11:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10703.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Previous message:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>In reply to:</strong> <a href="10699.php">Brian Powell: "[OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10704.php">Brian Powell: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you set -mca mpi_paffinity_alone 1? This will bind the processes  
<br>
to cores and (usually) significantly improve performance.
<br>
<p>The upcoming 1.3.4 will have additional binding options to help with  
<br>
performance issues.
<br>
<p>On Sep 20, 2009, at 12:36 AM, Brian Powell wrote:
<br>
<p><span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently purchased and set up a new blade cluster using Xeon 5560  
</span><br>
<span class="quotelev1">&gt; CPUs, Mellanox DDR ConnectX cards, running CentOS 5.2. I use the  
</span><br>
<span class="quotelev1">&gt; cluster to run a large FORTRAN 90 fluid model. I have been using  
</span><br>
<span class="quotelev1">&gt; OpenMPI on my other clusters for years, and it is my default MPI  
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I downloaded and installed the latest OpenMPI 1.3.3 release with the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure FC=ifort F77=ifort F90=ifort --prefix=/share/apps/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.3-intel --with-openib=/opt/ofed --with-openib-libdir=/ 
</span><br>
<span class="quotelev1">&gt; opt/ofed/lib64 --with-tm=/opt/torque/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To show the configuration, I ran:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (machine:~)% mpicc -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: x86_64-redhat-linux
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man  
</span><br>
<span class="quotelev1">&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix -- 
</span><br>
<span class="quotelev1">&gt; enable-checking=release --with-system-zlib --enable-__cxa_atexit -- 
</span><br>
<span class="quotelev1">&gt; disable-libunwind-exceptions --enable-libgcj-multifile --enable- 
</span><br>
<span class="quotelev1">&gt; languages=c,c++,objc,obj-c++,java,fortran,ada --enable-java-awt=gtk  
</span><br>
<span class="quotelev1">&gt; --disable-dssi --enable-plugin --with-java-home=/usr/lib/jvm/ 
</span><br>
<span class="quotelev1">&gt; java-1.4.2-gcj-1.4.2.0/jre --with-cpu=generic --host=x86_64-redhat- 
</span><br>
<span class="quotelev1">&gt; linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.2 20080704 (Red Hat 4.1.2-44)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then ran a large number of tests using one of my typical model  
</span><br>
<span class="quotelev1">&gt; domain configurations (which are relatively expensive) to test how  
</span><br>
<span class="quotelev1">&gt; well the system was performing. I didn't want to use &quot;benchmarking&quot;  
</span><br>
<span class="quotelev1">&gt; code, but rather the code I actually use the cluster for.  
</span><br>
<span class="quotelev1">&gt; Remarkably, it was scaling linearly up to about 8 nodes (using 8  
</span><br>
<span class="quotelev1">&gt; cores per node).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I decided -- for curiosity -- to see how this compared with  
</span><br>
<span class="quotelev1">&gt; MVAPICH2. I downloaded the 1.4rc2 code, and compiled it using the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure FC=ifort F77=ifort F90=ifort --prefix=/share/apps/ 
</span><br>
<span class="quotelev1">&gt; mvapich2-1.4-intel --enable-f90 --with-ib-libpath=/opt/ofed/lib64 -- 
</span><br>
<span class="quotelev1">&gt; with-rdma=gen2 --with-ib-include=/opt/ofed/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was confirmed with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (machine:~)% mpicc -v
</span><br>
<span class="quotelev1">&gt; mpicc for 1.4.0rc2
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: x86_64-redhat-linux
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man  
</span><br>
<span class="quotelev1">&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix -- 
</span><br>
<span class="quotelev1">&gt; enable-checking=release --with-system-zlib --enable-__cxa_atexit -- 
</span><br>
<span class="quotelev1">&gt; disable-libunwind-exceptions --enable-libgcj-multifile --enable- 
</span><br>
<span class="quotelev1">&gt; languages=c,c++,objc,obj-c++,java,fortran,ada --enable-java-awt=gtk  
</span><br>
<span class="quotelev1">&gt; --disable-dssi --enable-plugin --with-java-home=/usr/lib/jvm/ 
</span><br>
<span class="quotelev1">&gt; java-1.4.2-gcj-1.4.2.0/jre --with-cpu=generic --host=x86_64-redhat- 
</span><br>
<span class="quotelev1">&gt; linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.2 20080704 (Red Hat 4.1.2-44)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested the same runs as before, now using MVAPICH2 rather than  
</span><br>
<span class="quotelev1">&gt; OpenMPI. To my astonishment, the MVAPICH2 runs ran -- on average --  
</span><br>
<span class="quotelev1">&gt; 20% faster as measured in terms of wall clock time. This was  
</span><br>
<span class="quotelev1">&gt; incredibly surprising to me. I tried a number of domain  
</span><br>
<span class="quotelev1">&gt; configurations (over 1-16 nodes, with various numbers of processors  
</span><br>
<span class="quotelev1">&gt; per node), and the improvement was from 7.7-35.2 percent (depending  
</span><br>
<span class="quotelev1">&gt; on the configuration).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I reran a number of my OpenMPI tests because it was so surprising,  
</span><br>
<span class="quotelev1">&gt; and they were consistent with the original. I read through the FAQ: &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a> 
</span><br>
<span class="quotelev2">&gt; &gt; and tried a number of options with RDMA (the size of the messages  
</span><br>
<span class="quotelev1">&gt; passed in the code I run is -- I believe -- rather small) and I was  
</span><br>
<span class="quotelev1">&gt; able to improve the OpenMPI results by about 3%, but still nowhere  
</span><br>
<span class="quotelev1">&gt; near what I was getting with MVAPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran a final test which I find very strange: I ran the same test  
</span><br>
<span class="quotelev1">&gt; case on 1 cpu. The MVAPICH2 case was 23% faster!?!? This makes  
</span><br>
<span class="quotelev1">&gt; little sense to me. Both are using ifort as the mpif90 compiler  
</span><br>
<span class="quotelev1">&gt; using *identical* optimization flags, etc. I don't understand how  
</span><br>
<span class="quotelev1">&gt; the results could be different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of these cases are run with myself as the only user of the  
</span><br>
<span class="quotelev1">&gt; cluster and each test is run alone (without any other interference  
</span><br>
<span class="quotelev1">&gt; on the machine). I am running TORQUE, so each is submitted to the  
</span><br>
<span class="quotelev1">&gt; queue, then the actual queue run time is used as the measure of  
</span><br>
<span class="quotelev1">&gt; time, which is the actual wallclock time for the job to finish. Some  
</span><br>
<span class="quotelev1">&gt; may discount that time metric; however, it is what I am most  
</span><br>
<span class="quotelev1">&gt; concerned with. If I have to wait 2 hours to run a job in OpenMPI,  
</span><br>
<span class="quotelev1">&gt; but 1:36 in MVAPICH2, that is a significant advantage to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, MVAPICH2 has its own problems with hung mpd processes  
</span><br>
<span class="quotelev1">&gt; that can linger around on the nodes, etc. I prefer to use OpenMPI,  
</span><br>
<span class="quotelev1">&gt; so my question is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does the list suggest I modify in order to improve the OpenMPI  
</span><br>
<span class="quotelev1">&gt; performance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have played with the RDMA parameters to increase its thresholds,  
</span><br>
<span class="quotelev1">&gt; but little was gained. I am happy to provide the output of ompi_info  
</span><br>
<span class="quotelev1">&gt; if needed, but it is long so I didn't want to include in the initial  
</span><br>
<span class="quotelev1">&gt; post. I apologize for my naivete on the internals of MPI hardware  
</span><br>
<span class="quotelev1">&gt; utilization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Brian
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10703.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Previous message:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>In reply to:</strong> <a href="10699.php">Brian Powell: "[OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10704.php">Brian Powell: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
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
