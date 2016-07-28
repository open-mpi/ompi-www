<?
$subject_val = "[OMPI users] Question about OpenMPI performance vs. MVAPICH2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 02:37:01 2009" -->
<!-- isoreceived="20090920063701" -->
<!-- sent="Sat, 19 Sep 2009 20:36:53 -1000" -->
<!-- isosent="20090920063653" -->
<!-- name="Brian Powell" -->
<!-- email="powellb_at_[hidden]" -->
<!-- subject="[OMPI users] Question about OpenMPI performance vs. MVAPICH2" -->
<!-- id="24224559-0B8E-4BCD-B0A3-250CB93D7F50_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Question about OpenMPI performance vs. MVAPICH2<br>
<strong>From:</strong> Brian Powell (<em>powellb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-20 02:36:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10700.php">Sangamesh B: "[OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Previous message:</strong> <a href="10698.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Reply:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Reply:</strong> <a href="10702.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Maybe reply:</strong> <a href="10704.php">Brian Powell: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I recently purchased and set up a new blade cluster using Xeon 5560  
<br>
CPUs, Mellanox DDR ConnectX cards, running CentOS 5.2. I use the  
<br>
cluster to run a large FORTRAN 90 fluid model. I have been using  
<br>
OpenMPI on my other clusters for years, and it is my default MPI  
<br>
environment.
<br>
<p>I downloaded and installed the latest OpenMPI 1.3.3 release with the  
<br>
following:
<br>
<p>./configure FC=ifort F77=ifort F90=ifort --prefix=/share/apps/ 
<br>
openmpi-1.3.3-intel --with-openib=/opt/ofed --with-openib-libdir=/opt/ 
<br>
ofed/lib64 --with-tm=/opt/torque/
<br>
<p>To show the configuration, I ran:
<br>
<p>(machine:~)% mpicc -v
<br>
Using built-in specs.
<br>
Target: x86_64-redhat-linux
<br>
Configured with: ../configure --prefix=/usr --mandir=/usr/share/man -- 
<br>
infodir=/usr/share/info --enable-shared --enable-threads=posix -- 
<br>
enable-checking=release --with-system-zlib --enable-__cxa_atexit -- 
<br>
disable-libunwind-exceptions --enable-libgcj-multifile --enable- 
<br>
languages=c,c++,objc,obj-c++,java,fortran,ada --enable-java-awt=gtk -- 
<br>
disable-dssi --enable-plugin --with-java-home=/usr/lib/jvm/java-1.4.2- 
<br>
gcj-1.4.2.0/jre --with-cpu=generic --host=x86_64-redhat-linux
<br>
Thread model: posix
<br>
gcc version 4.1.2 20080704 (Red Hat 4.1.2-44)
<br>
<p>I then ran a large number of tests using one of my typical model  
<br>
domain configurations (which are relatively expensive) to test how  
<br>
well the system was performing. I didn't want to use &quot;benchmarking&quot;  
<br>
code, but rather the code I actually use the cluster for. Remarkably,  
<br>
it was scaling linearly up to about 8 nodes (using 8 cores per node).
<br>
<p>I decided -- for curiosity -- to see how this compared with MVAPICH2.  
<br>
I downloaded the 1.4rc2 code, and compiled it using the following:
<br>
<p>./configure FC=ifort F77=ifort F90=ifort --prefix=/share/apps/ 
<br>
mvapich2-1.4-intel --enable-f90 --with-ib-libpath=/opt/ofed/lib64 -- 
<br>
with-rdma=gen2 --with-ib-include=/opt/ofed/include
<br>
<p>This was confirmed with:
<br>
<p>(machine:~)% mpicc -v
<br>
mpicc for 1.4.0rc2
<br>
Using built-in specs.
<br>
Target: x86_64-redhat-linux
<br>
Configured with: ../configure --prefix=/usr --mandir=/usr/share/man -- 
<br>
infodir=/usr/share/info --enable-shared --enable-threads=posix -- 
<br>
enable-checking=release --with-system-zlib --enable-__cxa_atexit -- 
<br>
disable-libunwind-exceptions --enable-libgcj-multifile --enable- 
<br>
languages=c,c++,objc,obj-c++,java,fortran,ada --enable-java-awt=gtk -- 
<br>
disable-dssi --enable-plugin --with-java-home=/usr/lib/jvm/java-1.4.2- 
<br>
gcj-1.4.2.0/jre --with-cpu=generic --host=x86_64-redhat-linux
<br>
Thread model: posix
<br>
gcc version 4.1.2 20080704 (Red Hat 4.1.2-44)
<br>
<p>I tested the same runs as before, now using MVAPICH2 rather than  
<br>
OpenMPI. To my astonishment, the MVAPICH2 runs ran -- on average --  
<br>
20% faster as measured in terms of wall clock time. This was  
<br>
incredibly surprising to me. I tried a number of domain configurations  
<br>
(over 1-16 nodes, with various numbers of processors per node), and  
<br>
the improvement was from 7.7-35.2 percent (depending on the  
<br>
configuration).
<br>
<p>I reran a number of my OpenMPI tests because it was so surprising, and  
<br>
they were consistent with the original. I read through the FAQ: &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a> 
<br>
<span class="quotelev1"> &gt; and tried a number of options with RDMA (the size of the messages  
</span><br>
passed in the code I run is -- I believe -- rather small) and I was  
<br>
able to improve the OpenMPI results by about 3%, but still nowhere  
<br>
near what I was getting with MVAPICH2.
<br>
<p>I ran a final test which I find very strange: I ran the same test case  
<br>
on 1 cpu. The MVAPICH2 case was 23% faster!?!? This makes little sense  
<br>
to me. Both are using ifort as the mpif90 compiler using *identical*  
<br>
optimization flags, etc. I don't understand how the results could be  
<br>
different.
<br>
<p>All of these cases are run with myself as the only user of the cluster  
<br>
and each test is run alone (without any other interference on the  
<br>
machine). I am running TORQUE, so each is submitted to the queue, then  
<br>
the actual queue run time is used as the measure of time, which is the  
<br>
actual wallclock time for the job to finish. Some may discount that  
<br>
time metric; however, it is what I am most concerned with. If I have  
<br>
to wait 2 hours to run a job in OpenMPI, but 1:36 in MVAPICH2, that is  
<br>
a significant advantage to me.
<br>
<p>That said, MVAPICH2 has its own problems with hung mpd processes that  
<br>
can linger around on the nodes, etc. I prefer to use OpenMPI, so my  
<br>
question is:
<br>
<p>What does the list suggest I modify in order to improve the OpenMPI  
<br>
performance?
<br>
<p>I have played with the RDMA parameters to increase its thresholds, but  
<br>
little was gained. I am happy to provide the output of ompi_info if  
<br>
needed, but it is long so I didn't want to include in the initial  
<br>
post. I apologize for my naivete on the internals of MPI hardware  
<br>
utilization.
<br>
<p>Thank you in advance.
<br>
<p>Cheers,
<br>
Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10700.php">Sangamesh B: "[OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Previous message:</strong> <a href="10698.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Reply:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Reply:</strong> <a href="10702.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Maybe reply:</strong> <a href="10704.php">Brian Powell: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
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
