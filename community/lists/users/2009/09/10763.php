<?
$subject_val = "[OMPI users] error in checkpointing in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 07:10:56 2009" -->
<!-- isoreceived="20090925111056" -->
<!-- sent="Fri, 25 Sep 2009 04:10:52 -0700 (PDT)" -->
<!-- isosent="20090925111052" -->
<!-- name="Mallikarjuna Shastry" -->
<!-- email="pmmshastry_at_[hidden]" -->
<!-- subject="[OMPI users] error in checkpointing in open mpi" -->
<!-- id="348886.62283.qm_at_web37304.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] error in checkpointing in open mpi<br>
<strong>From:</strong> Mallikarjuna Shastry (<em>pmmshastry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 07:10:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10764.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10762.php">Mallikarjuna Shastry: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10769.php">Joshua Hursey: "Re: [OMPI users] error in checkpointing in open mpi"</a>
<li><strong>Reply:</strong> <a href="10769.php">Joshua Hursey: "Re: [OMPI users] error in checkpointing in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear sir
<br>
&nbsp;
<br>
&nbsp;i am sending the details as follows
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;1. i am using openmpi-1.3.3 and blcr 0.8.2 
<br>
&nbsp;2. i have installed blcr 0.8.2 first under /root/MS
<br>
&nbsp;3. then i installed openmpi 1.3.3 under /root/MS
<br>
&nbsp;4 i have configured and installed open mpi as follows
<br>
&nbsp;
<br>
&nbsp;#./configure --with-ft=cr --enable-mpi-threads
<br>
&nbsp;--with-blcr=/usr/local/bin
<br>
&nbsp;--with-blcr-libdir=/usr/local/lib
<br>
&nbsp;# make 
<br>
&nbsp;# make install
<br>
&nbsp;
<br>
&nbsp;then i added the following to the .bash_profile under home
<br>
&nbsp;directory( i went to home directory by doing cd ~)
<br>
&nbsp;
<br>
&nbsp;&nbsp;/sbin/insmod
<br>
&nbsp;/usr/local/lib/blcr/2.6.23.1-42.fc8/blcr_imports.ko 
<br>
&nbsp;&nbsp;/sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr.ko 
<br>
&nbsp;&nbsp;PATH=$PATH:/usr/local/bin
<br>
&nbsp;&nbsp;MANPATH=$MANPATH:/usr/local/man
<br>
&nbsp;&nbsp;LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib
<br>
&nbsp;
<br>
&nbsp;then i compiled and run the file arr_add.c as follows
<br>
&nbsp;
<br>
&nbsp;[root_at_localhost examples]# mpicc -o res arr_add.c
<br>
&nbsp;[root_at_localhost examples]# mpirun -np 2 -am ft-enable-cr
<br>
&nbsp;./res
<br>
&nbsp;
<br>
&nbsp;2  2  2  2 2 2 2 2 2 2
<br>
&nbsp;2  2  2  2 2 2 2 2 2 2
<br>
&nbsp;2  2  2  2 2 2 2 2 2 2
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;Error: The process with PID 5790 is not checkpointable.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This could be due to one of
<br>
<span class="quotelev1">&gt; the following:
</span><br>
<span class="quotelev1">&gt;         - An application with this PID
</span><br>
<span class="quotelev1">&gt; doesn't currently exist
</span><br>
<span class="quotelev1">&gt;         - The application with this PID
</span><br>
<span class="quotelev1">&gt; isn't checkpointable
</span><br>
<span class="quotelev1">&gt;         - The application with this PID
</span><br>
<span class="quotelev1">&gt; isn't an OPAL application.
</span><br>
<span class="quotelev1">&gt;        We were looking for the
</span><br>
<span class="quotelev1">&gt; named files:
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;    /tmp/opal_cr_prog_write.5790
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;    /tmp/opal_cr_prog_read.5790
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:05788] local) Error: Unable to
</span><br>
<span class="quotelev1">&gt; initiate the handshake with peer [[7788,1],1]. -1
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:05788] [[7788,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt; Error in file snapc_full_global.c at line 567
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:05788] [[7788,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt; Error in file snapc_full_global.c at line 1054
</span><br>
&nbsp;
<br>
<p>2 2 2 2 2 2 2 2 2 2
<br>
2 2 2 2 2 2 2 2 2 2
<br>
2 2 2 2 2 2 2 2 2 2
<br>
2 2 2 2 2 2 2 2 2 2
<br>
2 2 2 2 2 2 2 2 2 2
<br>
2 2 2 2 2 2 2 2 2 2
<br>
2 2 2 2 2 2 2 2 2 2
<br>
<p><p><p><p><p><p>&nbsp;
<br>
&nbsp;NOTE: the PID of mpirun is 5788
<br>
&nbsp;
<br>
&nbsp;i geve the following command for taking the checkpoint
<br>
&nbsp;
<br>
&nbsp;[root_at_localhost examples]#ompi-checkpoint -s 5788
<br>
&nbsp;
<br>
&nbsp;i got the following output , but it was hanging like this
<br>
&nbsp;
<br>
&nbsp;[localhost.localdomain:05796]       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requested - Global
<br>
&nbsp;Snapshot Reference: (null)
<br>
&nbsp;[localhost.localdomain:05796]       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pending -
<br>
&nbsp;Global Snapshot Reference: (null)
<br>
&nbsp;[localhost.localdomain:05796]       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Running -
<br>
&nbsp;Global Snapshot Reference: (null)
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;kindly rectify it.
<br>
&nbsp;
<br>
&nbsp;with regards
<br>
&nbsp;
<br>
&nbsp;mallikarjuna shastry
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10764.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10762.php">Mallikarjuna Shastry: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10769.php">Joshua Hursey: "Re: [OMPI users] error in checkpointing in open mpi"</a>
<li><strong>Reply:</strong> <a href="10769.php">Joshua Hursey: "Re: [OMPI users] error in checkpointing in open mpi"</a>
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
