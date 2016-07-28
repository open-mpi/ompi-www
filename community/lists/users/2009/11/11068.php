<?
$subject_val = "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 13:03:36 2009" -->
<!-- isoreceived="20091105180336" -->
<!-- sent="Thu, 5 Nov 2009 13:03:31 -0500" -->
<!-- isosent="20091105180331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault whilst running RaXML-MPI" -->
<!-- id="49451944-09EC-436F-A5D3-2D1C0114A885_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="60fabd260911050930v7ffa8236r879f6ef5f5659c5f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault whilst running RaXML-MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 13:03:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11069.php">Terry Dontje: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Previous message:</strong> <a href="11067.php">Nick Holway: "[OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>In reply to:</strong> <a href="11067.php">Nick Holway: "[OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11090.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Reply:</strong> <a href="11090.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I think Intel released 11.1.059 earlier today (I've been trying  
<br>
to download it all morning).  I doubt it's an issue in this case, but  
<br>
I thought I'd mention it as a public service announcement.  ;-)
<br>
<p>Seg faults are *usually* an application issue (never say &quot;never&quot;, but  
<br>
they *usually* are).  You might want to first contact the RaXML team  
<br>
to see if there are any known issues with their software and Open MPI  
<br>
1.3.3...?  (Sorry, I'm totally unfamiliar with RaXML)
<br>
<p>On Nov 5, 2009, at 12:30 PM, Nick Holway wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run RaXML 7.0.4 on my 64bit Rocks 5.1 cluster (ie Centos
</span><br>
<span class="quotelev1">&gt; 5.2). I compiled Open MPI 1.3.3 using the Intel compilers v 11.1.056
</span><br>
<span class="quotelev1">&gt; using ./configure CC=icc CXX=icpc F77=ifort FC=ifort --with-sge
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man
</span><br>
<span class="quotelev1">&gt; --with-memory-manager=none.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run run RaXML in a qlogin session using
</span><br>
<span class="quotelev1">&gt; /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/bin/mpirun -np 8
</span><br>
<span class="quotelev1">&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
</span><br>
<span class="quotelev1">&gt; -f a -x 12345 -p12345 -# 10 -m GTRGAMMA -s
</span><br>
<span class="quotelev1">&gt; /users/holwani1/jay/ornodko-1582 -n mpitest39
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the RAxML MPI Worker Process Number: 1
</span><br>
<span class="quotelev1">&gt; This is the RAxML MPI Worker Process Number: 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the RAxML MPI Master process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the RAxML MPI Worker Process Number: 7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the RAxML MPI Worker Process Number: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the RAxML MPI Worker Process Number: 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the RAxML MPI Worker Process Number: 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the RAxML MPI Worker Process Number: 6
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: Alignment column 1695 contains only undetermined
</span><br>
<span class="quotelev1">&gt; values which will be treated as missing data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: Sequences A4_H10 and A3ii_E11 are exactly identical
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: Sequences A2_A08 and A9_C10 are exactly identical
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: Sequences A3ii_B03 and A3ii_C06 are exactly  
</span><br>
<span class="quotelev1">&gt; identical
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: Sequences A9_D08 and A9_F10 are exactly identical
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: Sequences A3ii_F07 and A9_C08 are exactly identical
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: Sequences A6_F05 and A6_F11 are exactly identical
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING
</span><br>
<span class="quotelev1">&gt; Found 6 sequences that are exactly identical to other sequences in the
</span><br>
<span class="quotelev1">&gt; alignment.
</span><br>
<span class="quotelev1">&gt; Normally they should be excluded from the analysis.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING
</span><br>
<span class="quotelev1">&gt; Found 1 column that contains only undetermined values which will be
</span><br>
<span class="quotelev1">&gt; treated as missing data.
</span><br>
<span class="quotelev1">&gt; Normally these columns should be excluded from the analysis.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An alignment file with undetermined columns and sequence duplicates
</span><br>
<span class="quotelev1">&gt; removed has already
</span><br>
<span class="quotelev1">&gt; been printed to file /users/holwani1/jay/ornodko-1582.reduced
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are using RAxML version 7.0.4 released by Alexandros Stamatakis in
</span><br>
<span class="quotelev1">&gt; April 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alignment has 1280 distinct alignment patterns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Proportion of gaps and completely undetermined characters in this
</span><br>
<span class="quotelev1">&gt; alignment: 0.124198
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RAxML rapid bootstrapping and subsequent ML search
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executing 10 rapid bootstrap inferences and thereafter a thorough ML  
</span><br>
<span class="quotelev1">&gt; search
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All free model parameters will be estimated by RAxML
</span><br>
<span class="quotelev1">&gt; GAMMA model of rate heteorgeneity, ML estimate of alpha-parameter
</span><br>
<span class="quotelev1">&gt; GAMMA Model parameters will be estimated up to an accuracy of
</span><br>
<span class="quotelev1">&gt; 0.1000000000 Log Likelihood units
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Partition: 0
</span><br>
<span class="quotelev1">&gt; Name: No Name Provided
</span><br>
<span class="quotelev1">&gt; DataType: DNA
</span><br>
<span class="quotelev1">&gt; Substitution Matrix: GTR
</span><br>
<span class="quotelev1">&gt; Empirical Base Frequencies:
</span><br>
<span class="quotelev1">&gt; pi(A): 0.261129 pi(C): 0.228570 pi(G): 0.315946 pi(T): 0.194354
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Switching from GAMMA to CAT for rapid Bootstrap, final ML search will
</span><br>
<span class="quotelev1">&gt; be conducted under the GAMMA model you specified
</span><br>
<span class="quotelev1">&gt; Bootstrap[10]: Time 44.442728 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev1">&gt; rearrangement setting 5
</span><br>
<span class="quotelev1">&gt; Bootstrap[0]: Time 44.814948 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev1">&gt; rearrangement setting 5
</span><br>
<span class="quotelev1">&gt; Bootstrap[6]: Time 46.470371 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev1">&gt; rearrangement setting 6
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] Failing at address: 0x408
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] [ 0] /lib64/libpthread.so.0 [0x3fb580de80]
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC- 
</span><br>
<span class="quotelev1">&gt; MPI(hookup+0)
</span><br>
<span class="quotelev1">&gt; [0x413ca0]
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC- 
</span><br>
<span class="quotelev1">&gt; MPI(restoreTL+0xd9)
</span><br>
<span class="quotelev1">&gt; [0x442c09]
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
</span><br>
<span class="quotelev1">&gt; [0x42c968]
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC- 
</span><br>
<span class="quotelev1">&gt; MPI(doAllInOne+0x91a)
</span><br>
<span class="quotelev1">&gt; [0x42b21a]
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] [ 5]
</span><br>
<span class="quotelev1">&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC- 
</span><br>
<span class="quotelev1">&gt; MPI(main+0xc25)
</span><br>
<span class="quotelev1">&gt; [0x4063f5]
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3fb501d8b4]
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] [ 7]
</span><br>
<span class="quotelev1">&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
</span><br>
<span class="quotelev1">&gt; [0x405719]
</span><br>
<span class="quotelev1">&gt; [compute-0-11:08698] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Bootstrap[1]: Time 8.400332 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev1">&gt; rearrangement setting 5
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 8698 on node
</span><br>
<span class="quotelev1">&gt; compute-0-11.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $PATH is /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/bin/:/usr/ 
</span><br>
<span class="quotelev1">&gt; prog/mpi/openmpi/1.3.3/x86_64/bin/:/usr/prog/intel/ifort/11.1.056/ 
</span><br>
<span class="quotelev1">&gt; bin/intel64:/usr/prog/intel/icc/11.1.056//bin/intel64:/usr/prog/ 
</span><br>
<span class="quotelev1">&gt; intel/ifort/11.1.056/bin/intel64:/usr/prog/intel/icc/11.1.056//bin/ 
</span><br>
<span class="quotelev1">&gt; intel64:/opt/gridengine/bin/lx26-amd64:/usr/kerberos/sbin:/usr/ 
</span><br>
<span class="quotelev1">&gt; kerberos/bin:/opt/gridengine/bin/lx26-amd64:/usr/java/latest/bin:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/ 
</span><br>
<span class="quotelev1">&gt; ganglia/bin:/opt/ganglia/sbin:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $LD_LIBRARY_PATH is
</span><br>
<span class="quotelev1">&gt; /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/lib/:/usr/prog/mpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi/1.3.3/x86_64/lib/:/usr/prog/intel/ifort/11.1.056/lib/ 
</span><br>
<span class="quotelev1">&gt; intel64:/usr/prog/intel/ifort/11.1.056/mkl/lib/em64t:/usr/prog/intel/ 
</span><br>
<span class="quotelev1">&gt; icc/11.1.056//lib/intel64:/usr/prog/intel/icc/11.1.056//ipp/em64t/ 
</span><br>
<span class="quotelev1">&gt; sharedlib:/usr/prog/intel/icc/11.1.056//mkl/lib/em64t:/usr/prog/ 
</span><br>
<span class="quotelev1">&gt; intel/icc/11.1.056//tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/ 
</span><br>
<span class="quotelev1">&gt; usr/prog/intel/ifort/11.1.056/lib/intel64:/usr/prog/intel/ifort/ 
</span><br>
<span class="quotelev1">&gt; 11.1.056/mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//lib/intel64:/ 
</span><br>
<span class="quotelev1">&gt; usr/prog/intel/icc/11.1.056//ipp/em64t/sharedlib:/usr/prog/intel/icc/ 
</span><br>
<span class="quotelev1">&gt; 11.1.056//mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//tbb/intel64/ 
</span><br>
<span class="quotelev1">&gt; cc4.1.0_libc2.4_kernel2.6.16.21/lib:/opt/gridengine/lib/lx26-amd64:/ 
</span><br>
<span class="quotelev1">&gt; opt/gridengine/lib/lx26-amd64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although I'm only running this on one node, it may be helpful to know
</span><br>
<span class="quotelev1">&gt; that there is Infiniband with Voltaire OFED v1.4 on the nodes. Rocks'
</span><br>
<span class="quotelev1">&gt; HPC roll MPIs is not installed. I've tried running the above on
</span><br>
<span class="quotelev1">&gt; multiple nodes but still see the same error. I've attached the
</span><br>
<span class="quotelev1">&gt; config.log and ompi_info to the email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that the input is OK as I can run the serial gcc-compiled
</span><br>
<span class="quotelev1">&gt; raXML on the data with no problems. I tried compiling openmpi with
</span><br>
<span class="quotelev1">&gt; --with-memory-manager=none as a quick google
</span><br>
<span class="quotelev1">&gt; (<a href="http://osdir.com/ml/clustering.open-mpi.user/2008-07/msg00201.html">http://osdir.com/ml/clustering.open-mpi.user/2008-07/msg00201.html</a>)
</span><br>
<span class="quotelev1">&gt; suggested that it could help, but it made no difference. Google also
</span><br>
<span class="quotelev1">&gt; suggested that it could be caused by the compile environment being
</span><br>
<span class="quotelev1">&gt; different to the runtime, to test this I compiled and ran RaXML
</span><br>
<span class="quotelev1">&gt; immediately after I compiled Openmpi in the same session, again with
</span><br>
<span class="quotelev1">&gt; no joy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does any one know how I can fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.tar.gz&gt;&lt;ompi-info.tar.gz&gt;&lt;ATT2831213.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11069.php">Terry Dontje: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Previous message:</strong> <a href="11067.php">Nick Holway: "[OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>In reply to:</strong> <a href="11067.php">Nick Holway: "[OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11090.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Reply:</strong> <a href="11090.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
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
