<?
$subject_val = "Re: [OMPI users] MPI_T Control Variables";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 13:04:10 2014" -->
<!-- isoreceived="20140711170410" -->
<!-- sent="Fri, 11 Jul 2014 17:04:07 +0000" -->
<!-- isosent="20140711170407" -->
<!-- name="Gallardo, Esthela" -->
<!-- email="egallardo5_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_T Control Variables" -->
<!-- id="1405098247561.16291_at_miners.utep.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140711165003.GA1506_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Gallardo, Esthela (<em>egallardo5_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-11 13:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24761.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Previous message:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>In reply to:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24761.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24761.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24762.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,

Where can I access the 1.8.2 tarball? I'm not sure if you meant to include it as an attachment. If so, then it did not go through.   

Thank you,

Esthela Gallardo
________________________________________
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
Sent: Friday, July 11, 2014 10:50 AM
To: Open MPI Users
Subject: Re: [OMPI users] MPI_T Control Variables

Can you try with a 1.8.2 nightly tarball or the trunk? I fixed a couple
of bugs that varlist discovered (also found some in varlist).

-Nathan Hjelm
HPC-5, LANL

On Fri, Jul 11, 2014 at 04:42:01PM +0000, Gallardo, Esthela wrote:
&gt;    Hi,
&gt;
&gt;    I am new to the MPI_T interface, and was trying to run an applications
&gt;    developed by LLNL which queries and lists the values of the control
&gt;    variables available. The tool can be downloaded from the following site:
&gt;
&gt;    <a href="https://computation-rnd.llnl.gov/mpi_t/varList.php">https://computation-rnd.llnl.gov/mpi_t/varList.php</a>
&gt;
&gt;    I noticed that when I ran the tool, I would encounter the following
&gt;    error:
&gt;
&gt;    [c557-604:121075] Signal: Segmentation fault (11)
&gt;    [c557-604:121075] Signal code: Invalid permissions (2)
&gt;    [c557-604:121075] Failing at address: 0x2b54ce9d1418
&gt;    [c557-604:121075] [ 0] /lib64/libpthread.so.0[0x397060f710]
&gt;    [c557-604:121075] [ 1]
&gt;    /work/02282/esthela/MPI/install-openmpi-1.8.1/lib/libmpi.so.1(MPI_T_cvar_read+0xc6)[0x2b54cbe55bd6]
&gt;    [c557-604:121075] [ 2] ./varlist(list_cvars+0xda7)[0x402e17]
&gt;    [c557-604:121075] [ 3] ./varlist(main+0x347)[0x401e37]
&gt;    [c557-604:121075] [ 4]
&gt;    /lib64/libc.so.6(__libc_start_main+0xfd)[0x396fe1ed1d]
&gt;    [c557-604:121075] [ 5] ./varlist[0x401a29]
&gt;    [c557-604:121075] *** End of error message ***
&gt;    I went ahead and tried to write a code that follows the process in varlist
&gt;    to read the control variables, and encountered the same error when I
&gt;    called the following function:
&gt;    err=MPI_T_cvar_read(handle,val);
&gt;
&gt;    Through a recommendation, I ran both my code and the tool using mvapich,
&gt;    and could not reproduce the error. I don't know if this is a bug or if I
&gt;    didn't configure my installation of OpenMPI correctly. Below is a script
&gt;    that I used to install OpenMPI:
&gt;
&gt;    set -e
&gt;    rm -fr /work/02282/esthela/MPI/install-openmpi-1.8.1 &amp;&amp; \
&gt;    make clean &amp;&amp; \
&gt;    ./configure --with-cma=yes
&gt;    --prefix=/work/02282/esthela/MPI/install-openmpi-1.8.1 \
&gt;    CC=icc CXX=icpc FC=ifort --enable-shared CFLAGS=&quot;-O3 -ip -xHost&quot; \
&gt;    CXXFLAGS=&quot;-O3 -ip -xHost&quot; --without-slurm --disable-vt
&gt;    --with-verbs=/opt/ofed \
&gt;    --with-verbs-libdir=/opt/ofed/lib64 &amp;&amp; \
&gt;    make clean &amp;&amp; \
&gt;    make -j4 &amp;&amp; \
&gt;    make install&amp;#8203;
&gt;
&gt;
&gt;
&gt;    Help in resolving this issue would be greatly appreciated.
&gt;
&gt;    Thank you!
&gt;
&gt;    Esthela Gallardo

&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24758.php">http://www.open-mpi.org/community/lists/users/2014/07/24758.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24761.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Previous message:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>In reply to:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24761.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24761.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24762.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
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
