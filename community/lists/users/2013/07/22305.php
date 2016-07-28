<?
$subject_val = "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  9 14:14:27 2013" -->
<!-- isoreceived="20130709181427" -->
<!-- sent="Tue, 9 Jul 2013 11:14:19 -0700" -->
<!-- isosent="20130709181419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2" -->
<!-- id="921E9463-64A1-489F-AED8-3204154719A5_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="alpine.LRH.2.00.1307090956240.2578_at_scorpion.emsl.pnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-09 14:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22306.php">Daniels, Marcus G: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22306.php">Daniels, Marcus G: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22306.php">Daniels, Marcus G: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim
<br>
<p>Quick question: can the procs on the MIC communicate with procs on (a) the local host, (b) other hosts, and (c) MICs on other hosts?
<br>
<p>The last two would depend on having direct access to one or more network transports.
<br>
<p><p>On Jul 9, 2013, at 10:18 AM, Tim Carlson &lt;tim.carlson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 8 Jul 2013, Tim Carlson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now that I have gone through this process, I'll report that it works with the caveat that you can't use the openmpi wrappers for compiling. Recall that the Phi card does not have either the GNU or Intel compilers installed. While you could build up a tool chain for the GNU compilers, you're not going to get a native Intel compiler unless Intel decides to support it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the process from end to end to get Openmpi to build a native Phi application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/linux-k1om-4.7/bin:$PATH
</span><br>
<span class="quotelev1">&gt; . /share/apps/intel/composer_xe_2013.3.163/bin/iccvars.sh intel64
</span><br>
<span class="quotelev1">&gt; export CC=&quot;icc -mmic&quot;
</span><br>
<span class="quotelev1">&gt; export CXX=&quot;icpc -mmic&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd ~
</span><br>
<span class="quotelev1">&gt; tar zxf openmpi-1.6.4.tar.gz
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.6.4
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/people/tim/mic/openmpi/intel \
</span><br>
<span class="quotelev1">&gt; --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77 \
</span><br>
<span class="quotelev1">&gt; AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib LD=x86_64-k1om-linux-ld
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That leaves me with a native build of openmpi in /people/tim/mic/openmpi/intel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is of course tempting to just do a
</span><br>
<span class="quotelev1">&gt; export PATH=/people/tim/mic/openmpi/intel/bin:$PATH
</span><br>
<span class="quotelev1">&gt; and start using mpicc to build my code but that does not work because:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) If I try this on the host system I am going to get &quot;wrong architecture&quot; because mpicc was build for the Phi and not for the x86_64 host
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) If I try running it on the Phi, I don't have access to &quot;icc&quot; because I can't run the compiler directly on the Phi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can &quot;cheat&quot; and see what the mpicc command really does by using &quot;mpicc --show&quot; for another installation of openmpi and munge the paths correctly. In this case
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; icc -mmic cpi.c -I/people/tim/mic/openmpi/intel/include -pthread \
</span><br>
<span class="quotelev1">&gt; -L/people/tim/mic/openmpi/intel/lib -lmpi -ldl -lm -Wl,--export-dynamic \
</span><br>
<span class="quotelev1">&gt; -lrt -lnsl -lutil -lm -ldl -o cpi.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That leaves me with a Phi native version of cpi.x which I can then execute on the Phi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ssh phi002-mic0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ( I have NFS mounts on the Phi for all the bits I need )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~ $ export PATH=/people/tim/mic/openmpi/intel/bin/:$PATH
</span><br>
<span class="quotelev1">&gt; ~ $ export LD_LIBRARY_PATH=/share/apps/intel/composer_xe_2013.3.163/compiler/lib/mic/
</span><br>
<span class="quotelev1">&gt; ~ $ export LD_LIBRARY_PATH=/people/tim/mic/openmpi/intel/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; ~ $ cd mic
</span><br>
<span class="quotelev1">&gt; ~/mic $ mpirun -np 12 cpi.x
</span><br>
<span class="quotelev1">&gt; Process 7 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 10 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 2 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 9 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 1 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 3 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 11 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 5 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 8 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 4 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 6 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; Process 0 on phi002-mic0.local
</span><br>
<span class="quotelev1">&gt; pi is approximately 3.1416009869231245, Error is 0.0000083333333314
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.001766
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 8 Jul 2013, Elken, Tom wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My mistake on the OFED bits. The host I was installing on did not have all of the MPSS software installed (my cluster admin node and not one of the compute nodes). Adding the intel-mic-ofed-card RPM fixed the problem with compiling the btl:openib bits with both the GNU and Intel compilers using the cross-compiler route (-mmic on the Intel side)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Still working on getting the resulting mpicc wrapper working on the MIC side. When I get a working example I'll post the results.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Tim,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, in general and not on MIC I usually build the MPI stacks using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel compiler set. Have you ran into s/w that requires GCC instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers (beside Nvidia Cuda)? Did you try to use Intel compiler to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; produce
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MIC native code (the OpenMPI stack for that matter)? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Tom]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good idea Michael,  With the Intel Compiler, I would use the -mmic flag to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build MIC code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim wrote: &#147;My first pass at doing a cross-compile with the GNU compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to produce something with OFED support (not surprising)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH=/usr/linux-k1om-4.7/bin:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if MCA component btl:openib can compile... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regarding a Gnu cross compiler, this worked for one of our engineers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; building for True Scale HCAs and PSM/infinipath.  But it may give useful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tips for building for btl:openib as well:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. How to configure/compile OpenMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        a). untar the openmpi tarball.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        b). edit configure in top directory, add '-linfinipath' after
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '-lpsm_infinipath &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            but not necessary for messages, only for command lines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c). run the following script,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-f77=no --enable-mpi-f90=no \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-psm=/&#133;/psm-7.6 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/&#133;/openmpi \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=x86_64-k1om-linux-gcc  CXX=x86_64-k1om-linux-g++ \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        d). run 'make' and 'make install'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK, I see that they did not configure for mpi-f77 &amp; mpif90, but perhaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is still helpful, if the AR and RANLIB flags are important.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Tom
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jul 8, 2013 at 4:30 PM, Tim Carlson &lt;tim.carlson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 8 Jul 2013, Elken, Tom wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It isn't quite so easy.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Out of the box, there is no gcc on the Phi card. You can use the cross
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler on the host, but you don't get gcc on the Phi by default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See this post <a href="http://software.intel.com/en-us/forums/topic/382057">http://software.intel.com/en-us/forums/topic/382057</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I really think you would need to build and install gcc on the Phi first.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My first pass at doing a cross-compile with the GNU compilers failed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; produce something with OFED support (not surprising)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH=/usr/linux-k1om-4.7/bin:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if MCA component btl:openib can compile... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Thanks Tom, that sounds good. I will give it a try as soon as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       our Phi host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       here host gets installed. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I assume that all the prerequisite libs and bins on the Phi side
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       available when we download the Phi s/w stack from Intel's site,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       right ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       [Tom]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Right.  When you install Intel&#146;s MPSS (Manycore Platform
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Software Stack),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       including following the section on &#147;OFED Support&#148; in the readme
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       file, you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       should have all the prerequisite libs and bins.  Note that I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       have not built
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Open MPI for Xeon Phi for your interconnect, but it seems to me
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       that it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       should work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -Tom
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Cheers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       On Mon, Jul 8, 2013 at 12:10 PM, Elken, Tom
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       &lt;tom.elken_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Do you guys have any plan to support Intel Phi in the future?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       That is,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       running MPI code on the Phi cards or across the multicore and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Phi, as Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MPI does?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       [Tom]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Hi Michael,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Because a Xeon Phi card acts a lot like a Linux host with an x86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       architecture, you can build your own Open MPI libraries to serve
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       purpose.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Our team has used existing (an older 1.4.3 version of) Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       source to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       build an Open MPI for running MPI code on Intel Xeon Phi cards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       over Intel&#146;s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       (formerly QLogic&#146;s) True Scale InfiniBand fabric, and it works
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       quite well. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       We have not released a pre-built Open MPI as part of any Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       software
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       release.   But I think if you have a compiler for Xeon Phi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       (Intel Compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       or GCC) and an interconnect for it, you should be able to build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       that works on Xeon Phi. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Tom Elken
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       thanks...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       On Sat, Jul 6, 2013 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Rolf will have to answer the question on level of support. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       CUDA code is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       not in the 1.6 series as it was developed after that series went
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       &quot;stable&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       It is in the 1.7 series, although the level of support will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       likely be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       incrementally increasing as that &quot;feature&quot; series continues to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       evolve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       On Jul 6, 2013, at 12:06 PM, Michael Thomadakis
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  Hello OpenMPI,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;  I am wondering what level of support is there for CUDA and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       GPUdirect on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OpenMPI 1.6.5 and 1.7.2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;  I saw the ./configure --with-cuda=CUDA_DIR option in the FAQ.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       However, it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       seems that with configure v1.6.5 it was ignored.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;  Can you identify GPU memory and send messages from it directly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       without
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       copying to host memory first?
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;  Or in general, what level of CUDA support is there on 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       and 1.7.2 ? Do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       you support SDK 5.0 and above?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;  Cheers ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  Michael
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt; Tim Carlson, PhD
</span><br>
<span class="quotelev1">&gt; Senior Research Scientist
</span><br>
<span class="quotelev1">&gt; Environmental Molecular Sciences Laboratory_______________________________________________
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
<li><strong>Next message:</strong> <a href="22306.php">Daniels, Marcus G: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22306.php">Daniels, Marcus G: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22306.php">Daniels, Marcus G: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2"</a>
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
