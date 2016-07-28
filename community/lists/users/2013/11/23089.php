<?
$subject_val = "[OMPI users] Multi-threading support for openib";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 09:14:34 2013" -->
<!-- isoreceived="20131127141434" -->
<!-- sent="Wed, 27 Nov 2013 15:14:10 +0100" -->
<!-- isosent="20131127141410" -->
<!-- name="Daniel C&#225;mpora" -->
<!-- email="dcampora_at_[hidden]" -->
<!-- subject="[OMPI users] Multi-threading support for openib" -->
<!-- id="CAJVMBdpDoBBbejffY+MuCnjqCtZWFJHaqrMYmrdy9s4vySKXpQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Multi-threading support for openib<br>
<strong>From:</strong> Daniel C&#225;mpora (<em>dcampora_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 09:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23090.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23088.php">Ola.Widlund_at_[hidden]: "[OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23091.php">Ralph Castain: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>Reply:</strong> <a href="23091.php">Ralph Castain: "Re: [OMPI users] Multi-threading support for openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>I've gone through several hours of configuring and testing to get a grasp
<br>
of the current status for multi-threading support.
<br>
<p>I want to use a program with MPI_THREAD_MULTIPLE, over the openib BTL. I'm
<br>
using openmpi-1.6.5 and SLC6 (rhel6), for what's worth.
<br>
<p>Upon configuring my own openmpi library, if I just
<br>
--enable-mpi-thread-multiple, and execute my program with -mca btl openib,
<br>
it simply crashes upon openib not supporting MPI_THREAD_MULTIPLE.
<br>
<p>I've only started testing with --enable-opal-multi-threads, just in case it
<br>
would help me. Configuring with the aforementioned options,
<br>
./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
<br>
<p>results in a crash whenever executing my program,
<br>
<p>$ mpirun -np 2 -mca mca_component_path
<br>
/usr/mpi/gcc/openmpi-1.6.5/lib64/openmpi -mca btl openib -mca
<br>
btl_openib_warn_default_gid_prefix 0 -mca btl_base_verbose 100 -mca
<br>
btl_openib_verbose 100 -machinefile machinefile.labs `pwd`/em_bu_app 2&gt;&amp;1 |
<br>
less
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[lab14:13672] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 79
<br>
[lab14:13672] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c
<br>
at line 694
<br>
<p><p>Several questions related to these. Does --enable-opal-multi-threads have
<br>
any impact on the BTL multi-threading support? (If there's more
<br>
documentation on what this does I'd be glad to read it).
<br>
<p>Is there any additional configuration tag necessary for enabling
<br>
opal-multi-threads to work?
<br>
<p>Cheers, thanks a lot!
<br>
<p>Daniel
<br>
<p><pre>
-- 
Daniel Hugo C&#225;mpora P&#233;rez
European Organization for Nuclear Research (CERN)
PH LBC, LHCb Online Fellow
e-mail. dcampora_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23089/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23090.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23088.php">Ola.Widlund_at_[hidden]: "[OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23091.php">Ralph Castain: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>Reply:</strong> <a href="23091.php">Ralph Castain: "Re: [OMPI users] Multi-threading support for openib"</a>
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
