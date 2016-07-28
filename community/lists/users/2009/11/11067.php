<?
$subject_val = "[OMPI users] Segmentation fault whilst running RaXML-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 12:30:46 2009" -->
<!-- isoreceived="20091105173046" -->
<!-- sent="Thu, 5 Nov 2009 17:30:39 +0000" -->
<!-- isosent="20091105173039" -->
<!-- name="Nick Holway" -->
<!-- email="nick.holway_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault whilst running RaXML-MPI" -->
<!-- id="60fabd260911050930v7ffa8236r879f6ef5f5659c5f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault whilst running RaXML-MPI<br>
<strong>From:</strong> Nick Holway (<em>nick.holway_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 12:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Previous message:</strong> <a href="11066.php">Lee Amy: "[OMPI users] Help: Firewall problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Reply:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I'm trying to run RaXML 7.0.4 on my 64bit Rocks 5.1 cluster (ie Centos
<br>
5.2). I compiled Open MPI 1.3.3 using the Intel compilers v 11.1.056
<br>
using ./configure CC=icc CXX=icpc F77=ifort FC=ifort --with-sge
<br>
--prefix=/usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man
<br>
--with-memory-manager=none.
<br>
<p>When I run run RaXML in a qlogin session using
<br>
/usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/bin/mpirun -np 8
<br>
/usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
<br>
-f a -x 12345 -p12345 -# 10 -m GTRGAMMA -s
<br>
/users/holwani1/jay/ornodko-1582 -n mpitest39
<br>
<p>I get the following output:
<br>
<p>This is the RAxML MPI Worker Process Number: 1
<br>
This is the RAxML MPI Worker Process Number: 3
<br>
<p>This is the RAxML MPI Master process
<br>
<p>This is the RAxML MPI Worker Process Number: 7
<br>
<p>This is the RAxML MPI Worker Process Number: 4
<br>
<p>This is the RAxML MPI Worker Process Number: 5
<br>
<p>This is the RAxML MPI Worker Process Number: 2
<br>
<p>This is the RAxML MPI Worker Process Number: 6
<br>
IMPORTANT WARNING: Alignment column 1695 contains only undetermined
<br>
values which will be treated as missing data
<br>
<p><p>IMPORTANT WARNING: Sequences A4_H10 and A3ii_E11 are exactly identical
<br>
<p><p>IMPORTANT WARNING: Sequences A2_A08 and A9_C10 are exactly identical
<br>
<p><p>IMPORTANT WARNING: Sequences A3ii_B03 and A3ii_C06 are exactly identical
<br>
<p><p>IMPORTANT WARNING: Sequences A9_D08 and A9_F10 are exactly identical
<br>
<p><p>IMPORTANT WARNING: Sequences A3ii_F07 and A9_C08 are exactly identical
<br>
<p><p>IMPORTANT WARNING: Sequences A6_F05 and A6_F11 are exactly identical
<br>
<p>IMPORTANT WARNING
<br>
Found 6 sequences that are exactly identical to other sequences in the
<br>
alignment.
<br>
Normally they should be excluded from the analysis.
<br>
<p><p>IMPORTANT WARNING
<br>
Found 1 column that contains only undetermined values which will be
<br>
treated as missing data.
<br>
Normally these columns should be excluded from the analysis.
<br>
<p>An alignment file with undetermined columns and sequence duplicates
<br>
removed has already
<br>
been printed to file /users/holwani1/jay/ornodko-1582.reduced
<br>
<p><p>You are using RAxML version 7.0.4 released by Alexandros Stamatakis in
<br>
April 2008
<br>
<p>Alignment has 1280 distinct alignment patterns
<br>
<p>Proportion of gaps and completely undetermined characters in this
<br>
alignment: 0.124198
<br>
<p>RAxML rapid bootstrapping and subsequent ML search
<br>
<p><p>Executing 10 rapid bootstrap inferences and thereafter a thorough ML search
<br>
<p>All free model parameters will be estimated by RAxML
<br>
GAMMA model of rate heteorgeneity, ML estimate of alpha-parameter
<br>
GAMMA Model parameters will be estimated up to an accuracy of
<br>
0.1000000000 Log Likelihood units
<br>
<p>Partition: 0
<br>
Name: No Name Provided
<br>
DataType: DNA
<br>
Substitution Matrix: GTR
<br>
Empirical Base Frequencies:
<br>
pi(A): 0.261129 pi(C): 0.228570 pi(G): 0.315946 pi(T): 0.194354
<br>
<p><p>Switching from GAMMA to CAT for rapid Bootstrap, final ML search will
<br>
be conducted under the GAMMA model you specified
<br>
Bootstrap[10]: Time 44.442728 bootstrap likelihood -inf, best
<br>
rearrangement setting 5
<br>
Bootstrap[0]: Time 44.814948 bootstrap likelihood -inf, best
<br>
rearrangement setting 5
<br>
Bootstrap[6]: Time 46.470371 bootstrap likelihood -inf, best
<br>
rearrangement setting 6
<br>
[compute-0-11:08698] *** Process received signal ***
<br>
[compute-0-11:08698] Signal: Segmentation fault (11)
<br>
[compute-0-11:08698] Signal code: Address not mapped (1)
<br>
[compute-0-11:08698] Failing at address: 0x408
<br>
[compute-0-11:08698] [ 0] /lib64/libpthread.so.0 [0x3fb580de80]
<br>
[compute-0-11:08698] [ 1]
<br>
/usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(hookup+0)
<br>
[0x413ca0]
<br>
[compute-0-11:08698] [ 2]
<br>
/usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(restoreTL+0xd9)
<br>
[0x442c09]
<br>
[compute-0-11:08698] [ 3]
<br>
/usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
<br>
[0x42c968]
<br>
[compute-0-11:08698] [ 4]
<br>
/usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(doAllInOne+0x91a)
<br>
[0x42b21a]
<br>
[compute-0-11:08698] [ 5]
<br>
/usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI(main+0xc25)
<br>
[0x4063f5]
<br>
[compute-0-11:08698] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x3fb501d8b4]
<br>
[compute-0-11:08698] [ 7]
<br>
/usr/prog/bioinformatics/RAxML/7.0.4/x86_64/RAxML-7.0.4/raxmlHPC-MPI
<br>
[0x405719]
<br>
[compute-0-11:08698] *** End of error message ***
<br>
Bootstrap[1]: Time 8.400332 bootstrap likelihood -inf, best
<br>
rearrangement setting 5
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 8698 on node
<br>
compute-0-11.local exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>My $PATH is /usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/bin/:/usr/prog/mpi/openmpi/1.3.3/x86_64/bin/:/usr/prog/intel/ifort/11.1.056/bin/intel64:/usr/prog/intel/icc/11.1.056//bin/intel64:/usr/prog/intel/ifort/11.1.056/bin/intel64:/usr/prog/intel/icc/11.1.056//bin/intel64:/opt/gridengine/bin/lx26-amd64:/usr/kerberos/sbin:/usr/kerberos/bin:/opt/gridengine/bin/lx26-amd64:/usr/java/latest/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
<br>
<p>My $LD_LIBRARY_PATH is
<br>
/usr/prog/mpi/openmpi/1.3.3/x86_64-no-mem-man/lib/:/usr/prog/mpi/openmpi/1.3.3/x86_64/lib/:/usr/prog/intel/ifort/11.1.056/lib/intel64:/usr/prog/intel/ifort/11.1.056/mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//lib/intel64:/usr/prog/intel/icc/11.1.056//ipp/em64t/sharedlib:/usr/prog/intel/icc/11.1.056//mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/usr/prog/intel/ifort/11.1.056/lib/intel64:/usr/prog/intel/ifort/11.1.056/mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//lib/intel64:/usr/prog/intel/icc/11.1.056//ipp/em64t/sharedlib:/usr/prog/intel/icc/11.1.056//mkl/lib/em64t:/usr/prog/intel/icc/11.1.056//tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/opt/gridengine/lib/lx26-amd64:/opt/gridengine/lib/lx26-amd64
<br>
<p>Although I'm only running this on one node, it may be helpful to know
<br>
that there is Infiniband with Voltaire OFED v1.4 on the nodes. Rocks'
<br>
HPC roll MPIs is not installed. I've tried running the above on
<br>
multiple nodes but still see the same error. I've attached the
<br>
config.log and ompi_info to the email.
<br>
<p>I believe that the input is OK as I can run the serial gcc-compiled
<br>
raXML on the data with no problems. I tried compiling openmpi with
<br>
--with-memory-manager=none as a quick google
<br>
(<a href="http://osdir.com/ml/clustering.open-mpi.user/2008-07/msg00201.html">http://osdir.com/ml/clustering.open-mpi.user/2008-07/msg00201.html</a>)
<br>
suggested that it could help, but it made no difference. Google also
<br>
suggested that it could be caused by the compile environment being
<br>
different to the runtime, to test this I compiled and ran RaXML
<br>
immediately after I compiled Openmpi in the same session, again with
<br>
no joy.
<br>
<p>Does any one know how I can fix this?
<br>
<p>Thanks
<br>
<p>Nick
<br>
<p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11067/config.tar.gz">config.tar.gz</a>
</ul>
<!-- attachment="config.tar.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11067/ompi-info.tar.gz">ompi-info.tar.gz</a>
</ul>
<!-- attachment="ompi-info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Previous message:</strong> <a href="11066.php">Lee Amy: "[OMPI users] Help: Firewall problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Reply:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
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
