<?
$subject_val = "[OMPI users] error in checkpointing an mpi application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 02:29:55 2009" -->
<!-- isoreceived="20091001062955" -->
<!-- sent="Wed, 30 Sep 2009 23:29:51 -0700 (PDT)" -->
<!-- isosent="20091001062951" -->
<!-- name="Mallikarjuna Shastry" -->
<!-- email="pmmshastry_at_[hidden]" -->
<!-- subject="[OMPI users] error in checkpointing an mpi application" -->
<!-- id="153803.27919.qm_at_web37305.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.624.1253878805.7252.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] error in checkpointing an mpi application<br>
<strong>From:</strong> Mallikarjuna Shastry (<em>pmmshastry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 02:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10841.php">Constantinos Makassikis: "Re: [OMPI users] error in checkpointing an mpi application"</a>
<li><strong>Previous message:</strong> <a href="10839.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10841.php">Constantinos Makassikis: "Re: [OMPI users] error in checkpointing an mpi application"</a>
<li><strong>Reply:</strong> <a href="10841.php">Constantinos Makassikis: "Re: [OMPI users] error in checkpointing an mpi application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;dear sir
<br>
<p><p>i am sending the details as follows
<br>
<p><p>1. i am using openmpi-1.3.3 and blcr 0.8.2 
<br>
2. i have installed blcr 0.8.2 first under /root/MS
<br>
3. then i installed openmpi 1.3.3 under /root/MS
<br>
4 i have configured and installed open mpi as follows
<br>
<p>#./configure --with-ft=cr --enable-mpi-threads --with-blcr=/usr/local/bin --with-blcr-libdir=/usr/local/lib
<br>
# make 
<br>
# make install
<br>
<p>then i added the following to the .bash_profile under home directory( i went to home directory by doing cd ~)
<br>
<p>/sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr_imports.ko 
<br>
/sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr.ko 
<br>
PATH=$PATH:/usr/local/bin
<br>
MANPATH=$MANPATH:/usr/local/man
<br>
LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib
<br>
<p>then i compiled and run the file arr_add.c as follows
<br>
<p>[root_at_localhost examples]# mpicc -o res arr_add.c
<br>
[root_at_localhost examples]# mpirun -np 2 -am ft-enable-cr ./res
<br>
<p>2       2       2       2       2       2       2       2       2       2
<br>
2       2       2       2       2       2       2       2       2       2
<br>
2       2       2       2       2       2       2       2       2       2
<br>
--------------------------------------------------------------------------
<br>
Error: The process with PID 5790 is not checkpointable.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This could be due to one of the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- An application with this PID doesn't currently exist
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The application with this PID isn't checkpointable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The application with this PID isn't an OPAL application.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We were looking for the named files:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tmp/opal_cr_prog_write.5790
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tmp/opal_cr_prog_read.5790
<br>
--------------------------------------------------------------------------
<br>
[localhost.localdomain:05788] local) Error: Unable to initiate the handshake with peer [[7788,1],1]. -1
<br>
[localhost.localdomain:05788] [[7788,0],0] ORTE_ERROR_LOG: Error in file snapc_full_global.c at line 567
<br>
[localhost.localdomain:05788] [[7788,0],0] ORTE_ERROR_LOG: Error in file snapc_full_global.c at line 1054
<br>
2       2       2       2       2       2       2       2       2       2
<br>
2       2       2       2       2       2       2       2       2       2
<br>
2       2       2       2       2       2       2       2       2       2
<br>
2       2       2       2       2       2       2       2       2       2
<br>
2       2       2       2       2       2       2       2       2       2
<br>
2       2       2       2       2       2       2       2       2       2
<br>
<p><p>NOTE: the PID of mpirun is 5788
<br>
<p>i geve the following command for taking the checkpoint
<br>
<p>[root_at_localhost examples]#ompi-checkpoint -s 5788
<br>
<p>i got the following output , but it was hanging like this
<br>
<p>[localhost.localdomain:05796]                 Requested - Global Snapshot Reference: (null)
<br>
[localhost.localdomain:05796]                   Pending - Global Snapshot Reference: (null)
<br>
[localhost.localdomain:05796]                   Running - Global Snapshot Reference: (null)
<br>
<p><p>can anybody resolve this problem
<br>
kindly rectify it.
<br>
<p><p>with regards
<br>
<p>mallikarjuna shastry
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10841.php">Constantinos Makassikis: "Re: [OMPI users] error in checkpointing an mpi application"</a>
<li><strong>Previous message:</strong> <a href="10839.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10841.php">Constantinos Makassikis: "Re: [OMPI users] error in checkpointing an mpi application"</a>
<li><strong>Reply:</strong> <a href="10841.php">Constantinos Makassikis: "Re: [OMPI users] error in checkpointing an mpi application"</a>
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
