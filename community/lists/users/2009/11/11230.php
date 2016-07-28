<?
$subject_val = "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 05:22:34 2009" -->
<!-- isoreceived="20091118102234" -->
<!-- sent="Wed, 18 Nov 2009 10:22:29 +0000" -->
<!-- isosent="20091118102229" -->
<!-- name="Nick Holway" -->
<!-- email="nick.holway_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault whilst running RaXML-MPI" -->
<!-- id="60fabd260911180222u35dffdb7q63e2a5316c29f91b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="60fabd260911060656pecbeee3k2bbaefa27a403f71_at_mail.gmail.com" -->
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
<strong>From:</strong> Nick Holway (<em>nick.holway_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 05:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="11229.php">Laurin M&#195;&#188;ller: "[OMPI users] Antw: Re:  mpirun not working on more than one	 node"</a>
<li><strong>In reply to:</strong> <a href="11090.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>A quick follow up in aid of Google.
<br>
<p>Upgrading the Intel compilers made no difference to the error message.
<br>
<p>I contacted the researcher who wrote it who told me that the problem
<br>
was likely to be the Intel compilers over-optimising the code and
<br>
suggested using GCC which worked. He also pointed me in the direction
<br>
of new versions of RAxML which are available at
<br>
<a href="http://wwwkramer.in.tum.de/exelixis/software.html">http://wwwkramer.in.tum.de/exelixis/software.html</a>
<br>
<p>Nick
<br>
<p>2009/11/6 Nick Holway &lt;nick.holway_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the information, I'm going to try the new Intel
</span><br>
<span class="quotelev1">&gt; Compilers which I'm downloading now, but as they're taking so long to
</span><br>
<span class="quotelev1">&gt; download I don't think I'm going to be able to look into this again
</span><br>
<span class="quotelev1">&gt; until after the weekend. BTW using their java-based downloader is a
</span><br>
<span class="quotelev1">&gt; bit less painful than their normal download.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the meantime, if anyone else has some suggestions then please let me know.
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
<span class="quotelev1">&gt; 2009/11/5 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I think Intel released 11.1.059 earlier today (I've been trying to
</span><br>
<span class="quotelev2">&gt;&gt; download it all morning). &#160;I doubt it's an issue in this case, but I thought
</span><br>
<span class="quotelev2">&gt;&gt; I'd mention it as a public service announcement. &#160;;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seg faults are *usually* an application issue (never say &quot;never&quot;, but they
</span><br>
<span class="quotelev2">&gt;&gt; *usually* are). &#160;You might want to first contact the RaXML team to see if
</span><br>
<span class="quotelev2">&gt;&gt; there are any known issues with their software and Open MPI 1.3.3...?
</span><br>
<span class="quotelev2">&gt;&gt; &#160;(Sorry, I'm totally unfamiliar with RaXML)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2009, at 12:30 PM, Nick Holway wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to run RaXML 7.0.4 on my 64bit Rocks 5.1 cluster (ie Centos
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5.2). I compiled Open MPI 1.3.3 using the Intel compilers v 11.1.056
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using ./configure CC=icc CXX=icpc F77=ifort FC=ifort --with-sge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-memory-manager=none.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I run run RaXML in a qlogin session using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/bin/mpirun -np 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -f a -x 12345 -p12345 -# 10 -m GTRGAMMA -s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /users/holwani1/jay/ornodko-1582 -n mpitest39
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the RAxML MPI Worker Process Number: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the RAxML MPI Worker Process Number: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the RAxML MPI Master process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the RAxML MPI Worker Process Number: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the RAxML MPI Worker Process Number: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the RAxML MPI Worker Process Number: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the RAxML MPI Worker Process Number: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the RAxML MPI Worker Process Number: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: Alignment column 1695 contains only undetermined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; values which will be treated as missing data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: Sequences A4_H10 and A3ii_E11 are exactly identical
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: Sequences A2_A08 and A9_C10 are exactly identical
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: Sequences A3ii_B03 and A3ii_C06 are exactly identical
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: Sequences A9_D08 and A9_F10 are exactly identical
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: Sequences A3ii_F07 and A9_C08 are exactly identical
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: Sequences A6_F05 and A6_F11 are exactly identical
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found 6 sequences that are exactly identical to other sequences in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alignment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Normally they should be excluded from the analysis.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found 1 column that contains only undetermined values which will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; treated as missing data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Normally these columns should be excluded from the analysis.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An alignment file with undetermined columns and sequence duplicates
</span><br>
<span class="quotelev3">&gt;&gt;&gt; removed has already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been printed to file /users/holwani1/jay/ornodko-1582.reduced
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You are using RAxML version 7.0.4 released by Alexandros Stamatakis in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; April 2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alignment has 1280 distinct alignment patterns
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proportion of gaps and completely undetermined characters in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alignment: 0.124198
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RAxML rapid bootstrapping and subsequent ML search
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Executing 10 rapid bootstrap inferences and thereafter a thorough ML
</span><br>
<span class="quotelev3">&gt;&gt;&gt; search
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All free model parameters will be estimated by RAxML
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GAMMA model of rate heteorgeneity, ML estimate of alpha-parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GAMMA Model parameters will be estimated up to an accuracy of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0.1000000000 Log Likelihood units
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Partition: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Name: No Name Provided
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DataType: DNA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Substitution Matrix: GTR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Empirical Base Frequencies:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pi(A): 0.261129 pi(C): 0.228570 pi(G): 0.315946 pi(T): 0.194354
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Switching from GAMMA to CAT for rapid Bootstrap, final ML search will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be conducted under the GAMMA model you specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bootstrap[10]: Time 44.442728 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rearrangement setting 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bootstrap[0]: Time 44.814948 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rearrangement setting 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bootstrap[6]: Time 46.470371 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rearrangement setting 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] Failing at address: 0x408
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] [ 0] /lib64/libpthread.so.0 [0x3fb580de80]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(hookup+0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x413ca0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(restoreTL+0xd9)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x442c09]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x42c968]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(doAllInOne+0x91a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x42b21a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(main+0xc25)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x4063f5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x3fb501d8b4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x405719]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-11:08698] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bootstrap[1]: Time 8.400332 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rearrangement setting 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 8698 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-0-11.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My $PATH is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/bin/:/usr/prog/mpi/openmpi/1.3.3/x86_64/bin/:/usr/prog/intel/ifort/11.1.056/bin/intel64:/usr/prog/intel/icc/11.1.056//bin/intel64:/usr/prog/intel/ifort/11.1.056/bin/intel64:/usr/prog/intel/icc/11.1.056//bin/intel64:/opt/gridengine/bin/lx26-amd64:/usr/kerberos/sbin:/usr/kerberos/bin:/opt/gridengine/bin/lx26-amd64:/usr/java/latest/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My $LD_LIBRARY_PATH is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/lib/:/usr/prog/mpi/openmpi/1.3.3/x86_64/lib/:/usr/prog/intel/ifort/11.1.056/lib/intel64:/usr/prog/intel/ifort/11.1.056/mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//lib/intel64:/usr/prog/intel/icc/11.1.056//ipp/em64t/sharedlib:/usr/prog/intel/icc/11.1.056//mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/usr/prog/intel/ifort/11.1.056/lib/intel64:/usr/prog/intel/ifort/11.1.056/mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//lib/intel64:/usr/prog/intel/icc/11.1.056//ipp/em64t/sharedlib:/usr/prog/intel/icc/11.1.056//mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/opt/gridengine/lib/lx26-amd64:/opt/gridengine/lib/lx26-amd64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Although I'm only running this on one node, it may be helpful to know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that there is Infiniband with Voltaire OFED v1.4 on the nodes. Rocks'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC roll MPIs is not installed. I've tried running the above on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple nodes but still see the same error. I've attached the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.log and ompi_info to the email.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe that the input is OK as I can run the serial gcc-compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; raXML on the data with no problems. I tried compiling openmpi with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-memory-manager=none as a quick google
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (<a href="http://osdir.com/ml/clustering.open-mpi.user/2008-07/msg00201.html">http://osdir.com/ml/clustering.open-mpi.user/2008-07/msg00201.html</a>)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggested that it could help, but it made no difference. Google also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggested that it could be caused by the compile environment being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different to the runtime, to test this I compiled and ran RaXML
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immediately after I compiled Openmpi in the same session, again with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no joy.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does any one know how I can fix this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;config.tar.gz&gt;&lt;ompi-info.tar.gz&gt;&lt;ATT2831213.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="11229.php">Laurin M&#195;&#188;ller: "[OMPI users] Antw: Re:  mpirun not working on more than one	 node"</a>
<li><strong>In reply to:</strong> <a href="11090.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
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
