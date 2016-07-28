<?
$subject_val = "Re: [OMPI users] MPI_T Control Variables";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 13:27:45 2014" -->
<!-- isoreceived="20140711172745" -->
<!-- sent="Fri, 11 Jul 2014 11:27:42 -0600" -->
<!-- isosent="20140711172742" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_T Control Variables" -->
<!-- id="20140711172742.GC1506_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1405098247561.16291_at_miners.utep.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_T Control Variables<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-11 13:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24763.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Previous message:</strong> <a href="24761.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>In reply to:</strong> <a href="24760.php">Gallardo, Esthela: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24763.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24763.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, looks like the varlist fixes I provided to LLNL haven't made it
<br>
into their git repo. Use the attached version with 1.8.2.
<br>
<p>-Nathan
<br>
<p>On Fri, Jul 11, 2014 at 05:04:07PM +0000, Gallardo, Esthela wrote:
<br>
<span class="quotelev1">&gt; Hi Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where can I access the 1.8.2 tarball? I'm not sure if you meant to include it as an attachment. If so, then it did not go through.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Esthela Gallardo
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, July 11, 2014 10:50 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_T Control Variables
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try with a 1.8.2 nightly tarball or the trunk? I fixed a couple
</span><br>
<span class="quotelev1">&gt; of bugs that varlist discovered (also found some in varlist).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-5, LANL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 11, 2014 at 04:42:01PM +0000, Gallardo, Esthela wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I am new to the MPI_T interface, and was trying to run an applications
</span><br>
<span class="quotelev2">&gt; &gt;    developed by LLNL which queries and lists the values of the control
</span><br>
<span class="quotelev2">&gt; &gt;    variables available. The tool can be downloaded from the following site:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="https://computation-rnd.llnl.gov/mpi_t/varList.php">https://computation-rnd.llnl.gov/mpi_t/varList.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I noticed that when I ran the tool, I would encounter the following
</span><br>
<span class="quotelev2">&gt; &gt;    error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] Failing at address: 0x2b54ce9d1418
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] [ 0] /lib64/libpthread.so.0[0x397060f710]
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] [ 1]
</span><br>
<span class="quotelev2">&gt; &gt;    /work/02282/esthela/MPI/install-openmpi-1.8.1/lib/libmpi.so.1(MPI_T_cvar_read+0xc6)[0x2b54cbe55bd6]
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] [ 2] ./varlist(list_cvars+0xda7)[0x402e17]
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] [ 3] ./varlist(main+0x347)[0x401e37]
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] [ 4]
</span><br>
<span class="quotelev2">&gt; &gt;    /lib64/libc.so.6(__libc_start_main+0xfd)[0x396fe1ed1d]
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] [ 5] ./varlist[0x401a29]
</span><br>
<span class="quotelev2">&gt; &gt;    [c557-604:121075] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;    I went ahead and tried to write a code that follows the process in varlist
</span><br>
<span class="quotelev2">&gt; &gt;    to read the control variables, and encountered the same error when I
</span><br>
<span class="quotelev2">&gt; &gt;    called the following function:
</span><br>
<span class="quotelev2">&gt; &gt;    err=MPI_T_cvar_read(handle,val);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Through a recommendation, I ran both my code and the tool using mvapich,
</span><br>
<span class="quotelev2">&gt; &gt;    and could not reproduce the error. I don't know if this is a bug or if I
</span><br>
<span class="quotelev2">&gt; &gt;    didn't configure my installation of OpenMPI correctly. Below is a script
</span><br>
<span class="quotelev2">&gt; &gt;    that I used to install OpenMPI:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    set -e
</span><br>
<span class="quotelev2">&gt; &gt;    rm -fr /work/02282/esthela/MPI/install-openmpi-1.8.1 &amp;&amp; \
</span><br>
<span class="quotelev2">&gt; &gt;    make clean &amp;&amp; \
</span><br>
<span class="quotelev2">&gt; &gt;    ./configure --with-cma=yes
</span><br>
<span class="quotelev2">&gt; &gt;    --prefix=/work/02282/esthela/MPI/install-openmpi-1.8.1 \
</span><br>
<span class="quotelev2">&gt; &gt;    CC=icc CXX=icpc FC=ifort --enable-shared CFLAGS=&quot;-O3 -ip -xHost&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;    CXXFLAGS=&quot;-O3 -ip -xHost&quot; --without-slurm --disable-vt
</span><br>
<span class="quotelev2">&gt; &gt;    --with-verbs=/opt/ofed \
</span><br>
<span class="quotelev2">&gt; &gt;    --with-verbs-libdir=/opt/ofed/lib64 &amp;&amp; \
</span><br>
<span class="quotelev2">&gt; &gt;    make clean &amp;&amp; \
</span><br>
<span class="quotelev2">&gt; &gt;    make -j4 &amp;&amp; \
</span><br>
<span class="quotelev2">&gt; &gt;    make install&amp;#8203;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Help in resolving this issue would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Thank you!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Esthela Gallardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24758.php">http://www.open-mpi.org/community/lists/users/2014/07/24758.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24760.php">http://www.open-mpi.org/community/lists/users/2014/07/24760.php</a>
</span><br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24762/varlist.c">varlist.c</a>
</ul>
<!-- attachment="varlist.c" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24762/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24763.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Previous message:</strong> <a href="24761.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>In reply to:</strong> <a href="24760.php">Gallardo, Esthela: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24763.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24763.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
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
