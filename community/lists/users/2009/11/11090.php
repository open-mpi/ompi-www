<?
$subject_val = "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 09:56:48 2009" -->
<!-- isoreceived="20091106145648" -->
<!-- sent="Fri, 6 Nov 2009 14:56:42 +0000" -->
<!-- isosent="20091106145642" -->
<!-- name="Nick Holway" -->
<!-- email="nick.holway_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault whilst running RaXML-MPI" -->
<!-- id="60fabd260911060656pecbeee3k2bbaefa27a403f71_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49451944-09EC-436F-A5D3-2D1C0114A885_at_cisco.com" -->
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
<strong>Date:</strong> 2009-11-06 09:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11091.php">Paul Kapinos: "[OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11089.php">Josh Hursey: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>In reply to:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11230.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Reply:</strong> <a href="11230.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thank you for the information, I'm going to try the new Intel
<br>
Compilers which I'm downloading now, but as they're taking so long to
<br>
download I don't think I'm going to be able to look into this again
<br>
until after the weekend. BTW using their java-based downloader is a
<br>
bit less painful than their normal download.
<br>
<p>In the meantime, if anyone else has some suggestions then please let me know.
<br>
<p>Thanks
<br>
<p>Nick
<br>
<p>2009/11/5 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; FWIW, I think Intel released 11.1.059 earlier today (I've been trying to
</span><br>
<span class="quotelev1">&gt; download it all morning). &#160;I doubt it's an issue in this case, but I thought
</span><br>
<span class="quotelev1">&gt; I'd mention it as a public service announcement. &#160;;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seg faults are *usually* an application issue (never say &quot;never&quot;, but they
</span><br>
<span class="quotelev1">&gt; *usually* are). &#160;You might want to first contact the RaXML team to see if
</span><br>
<span class="quotelev1">&gt; there are any known issues with their software and Open MPI 1.3.3...?
</span><br>
<span class="quotelev1">&gt; &#160;(Sorry, I'm totally unfamiliar with RaXML)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2009, at 12:30 PM, Nick Holway wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run RaXML 7.0.4 on my 64bit Rocks 5.1 cluster (ie Centos
</span><br>
<span class="quotelev2">&gt;&gt; 5.2). I compiled Open MPI 1.3.3 using the Intel compilers v 11.1.056
</span><br>
<span class="quotelev2">&gt;&gt; using ./configure CC=icc CXX=icpc F77=ifort FC=ifort --with-sge
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man
</span><br>
<span class="quotelev2">&gt;&gt; --with-memory-manager=none.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run run RaXML in a qlogin session using
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/bin/mpirun -np 8
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
</span><br>
<span class="quotelev2">&gt;&gt; -f a -x 12345 -p12345 -# 10 -m GTRGAMMA -s
</span><br>
<span class="quotelev2">&gt;&gt; /users/holwani1/jay/ornodko-1582 -n mpitest39
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the RAxML MPI Worker Process Number: 1
</span><br>
<span class="quotelev2">&gt;&gt; This is the RAxML MPI Worker Process Number: 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the RAxML MPI Master process
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the RAxML MPI Worker Process Number: 7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the RAxML MPI Worker Process Number: 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the RAxML MPI Worker Process Number: 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the RAxML MPI Worker Process Number: 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the RAxML MPI Worker Process Number: 6
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: Alignment column 1695 contains only undetermined
</span><br>
<span class="quotelev2">&gt;&gt; values which will be treated as missing data
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: Sequences A4_H10 and A3ii_E11 are exactly identical
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: Sequences A2_A08 and A9_C10 are exactly identical
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: Sequences A3ii_B03 and A3ii_C06 are exactly identical
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: Sequences A9_D08 and A9_F10 are exactly identical
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: Sequences A3ii_F07 and A9_C08 are exactly identical
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: Sequences A6_F05 and A6_F11 are exactly identical
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING
</span><br>
<span class="quotelev2">&gt;&gt; Found 6 sequences that are exactly identical to other sequences in the
</span><br>
<span class="quotelev2">&gt;&gt; alignment.
</span><br>
<span class="quotelev2">&gt;&gt; Normally they should be excluded from the analysis.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING
</span><br>
<span class="quotelev2">&gt;&gt; Found 1 column that contains only undetermined values which will be
</span><br>
<span class="quotelev2">&gt;&gt; treated as missing data.
</span><br>
<span class="quotelev2">&gt;&gt; Normally these columns should be excluded from the analysis.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An alignment file with undetermined columns and sequence duplicates
</span><br>
<span class="quotelev2">&gt;&gt; removed has already
</span><br>
<span class="quotelev2">&gt;&gt; been printed to file /users/holwani1/jay/ornodko-1582.reduced
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You are using RAxML version 7.0.4 released by Alexandros Stamatakis in
</span><br>
<span class="quotelev2">&gt;&gt; April 2008
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alignment has 1280 distinct alignment patterns
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Proportion of gaps and completely undetermined characters in this
</span><br>
<span class="quotelev2">&gt;&gt; alignment: 0.124198
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RAxML rapid bootstrapping and subsequent ML search
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Executing 10 rapid bootstrap inferences and thereafter a thorough ML
</span><br>
<span class="quotelev2">&gt;&gt; search
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All free model parameters will be estimated by RAxML
</span><br>
<span class="quotelev2">&gt;&gt; GAMMA model of rate heteorgeneity, ML estimate of alpha-parameter
</span><br>
<span class="quotelev2">&gt;&gt; GAMMA Model parameters will be estimated up to an accuracy of
</span><br>
<span class="quotelev2">&gt;&gt; 0.1000000000 Log Likelihood units
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Partition: 0
</span><br>
<span class="quotelev2">&gt;&gt; Name: No Name Provided
</span><br>
<span class="quotelev2">&gt;&gt; DataType: DNA
</span><br>
<span class="quotelev2">&gt;&gt; Substitution Matrix: GTR
</span><br>
<span class="quotelev2">&gt;&gt; Empirical Base Frequencies:
</span><br>
<span class="quotelev2">&gt;&gt; pi(A): 0.261129 pi(C): 0.228570 pi(G): 0.315946 pi(T): 0.194354
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Switching from GAMMA to CAT for rapid Bootstrap, final ML search will
</span><br>
<span class="quotelev2">&gt;&gt; be conducted under the GAMMA model you specified
</span><br>
<span class="quotelev2">&gt;&gt; Bootstrap[10]: Time 44.442728 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev2">&gt;&gt; rearrangement setting 5
</span><br>
<span class="quotelev2">&gt;&gt; Bootstrap[0]: Time 44.814948 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev2">&gt;&gt; rearrangement setting 5
</span><br>
<span class="quotelev2">&gt;&gt; Bootstrap[6]: Time 46.470371 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev2">&gt;&gt; rearrangement setting 6
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] Failing at address: 0x408
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] [ 0] /lib64/libpthread.so.0 [0x3fb580de80]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(hookup+0)
</span><br>
<span class="quotelev2">&gt;&gt; [0x413ca0]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(restoreTL+0xd9)
</span><br>
<span class="quotelev2">&gt;&gt; [0x442c09]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
</span><br>
<span class="quotelev2">&gt;&gt; [0x42c968]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(doAllInOne+0x91a)
</span><br>
<span class="quotelev2">&gt;&gt; [0x42b21a]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(main+0xc25)
</span><br>
<span class="quotelev2">&gt;&gt; [0x4063f5]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev2">&gt;&gt; [0x3fb501d8b4]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
</span><br>
<span class="quotelev2">&gt;&gt; [0x405719]
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-11:08698] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Bootstrap[1]: Time 8.400332 bootstrap likelihood -inf, best
</span><br>
<span class="quotelev2">&gt;&gt; rearrangement setting 5
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 8698 on node
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-11.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My $PATH is
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/bin/:/usr/prog/mpi/openmpi/1.3.3/x86_64/bin/:/usr/prog/intel/ifort/11.1.056/bin/intel64:/usr/prog/intel/icc/11.1.056//bin/intel64:/usr/prog/intel/ifort/11.1.056/bin/intel64:/usr/prog/intel/icc/11.1.056//bin/intel64:/opt/gridengine/bin/lx26-amd64:/usr/kerberos/sbin:/usr/kerberos/bin:/opt/gridengine/bin/lx26-amd64:/usr/java/latest/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My $LD_LIBRARY_PATH is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/lib/:/usr/prog/mpi/openmpi/1.3.3/x86_64/lib/:/usr/prog/intel/ifort/11.1.056/lib/intel64:/usr/prog/intel/ifort/11.1.056/mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//lib/intel64:/usr/prog/intel/icc/11.1.056//ipp/em64t/sharedlib:/usr/prog/intel/icc/11.1.056//mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/usr/prog/intel/ifort/11.1.056/lib/intel64:/usr/prog/intel/ifort/11.1.056/mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//lib/intel64:/usr/prog/intel/icc/11.1.056//ipp/em64t/sharedlib:/usr/prog/intel/icc/11.1.056//mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/opt/gridengine/lib/lx26-amd64:/opt/gridengine/lib/lx26-amd64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Although I'm only running this on one node, it may be helpful to know
</span><br>
<span class="quotelev2">&gt;&gt; that there is Infiniband with Voltaire OFED v1.4 on the nodes. Rocks'
</span><br>
<span class="quotelev2">&gt;&gt; HPC roll MPIs is not installed. I've tried running the above on
</span><br>
<span class="quotelev2">&gt;&gt; multiple nodes but still see the same error. I've attached the
</span><br>
<span class="quotelev2">&gt;&gt; config.log and ompi_info to the email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe that the input is OK as I can run the serial gcc-compiled
</span><br>
<span class="quotelev2">&gt;&gt; raXML on the data with no problems. I tried compiling openmpi with
</span><br>
<span class="quotelev2">&gt;&gt; --with-memory-manager=none as a quick google
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://osdir.com/ml/clustering.open-mpi.user/2008-07/msg00201.html">http://osdir.com/ml/clustering.open-mpi.user/2008-07/msg00201.html</a>)
</span><br>
<span class="quotelev2">&gt;&gt; suggested that it could help, but it made no difference. Google also
</span><br>
<span class="quotelev2">&gt;&gt; suggested that it could be caused by the compile environment being
</span><br>
<span class="quotelev2">&gt;&gt; different to the runtime, to test this I compiled and ran RaXML
</span><br>
<span class="quotelev2">&gt;&gt; immediately after I compiled Openmpi in the same session, again with
</span><br>
<span class="quotelev2">&gt;&gt; no joy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does any one know how I can fix this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.tar.gz&gt;&lt;ompi-info.tar.gz&gt;&lt;ATT2831213.txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11091.php">Paul Kapinos: "[OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11089.php">Josh Hursey: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>In reply to:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11230.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Reply:</strong> <a href="11230.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
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
