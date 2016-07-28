<?
$subject_val = "[OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 07:04:32 2009" -->
<!-- isoreceived="20090925110432" -->
<!-- sent="Fri, 25 Sep 2009 04:04:28 -0700 (PDT)" -->
<!-- isosent="20090925110428" -->
<!-- name="Mallikarjuna Shastry" -->
<!-- email="pmmshastry_at_[hidden]" -->
<!-- subject="[OMPI users] (no subject)" -->
<!-- id="171404.62150.qm_at_web37301.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] (no subject)<br>
<strong>From:</strong> Mallikarjuna Shastry (<em>pmmshastry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 07:04:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10763.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear sir
<br>
<p>i am sending the details as follows
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
<p>&nbsp;/sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr_imports.ko 
<br>
&nbsp;/sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr.ko 
<br>
&nbsp;PATH=$PATH:/usr/local/bin
<br>
&nbsp;MANPATH=$MANPATH:/usr/local/man
<br>
&nbsp;LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib
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
<p><p><p>kindly rectify it.
<br>
<p>with regards
<br>
<p>mallikarjuna shastry
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10763.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
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
