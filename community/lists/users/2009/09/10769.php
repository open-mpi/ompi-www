<?
$subject_val = "Re: [OMPI users] error in checkpointing in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 12:28:32 2009" -->
<!-- isoreceived="20090925162832" -->
<!-- sent="Fri, 25 Sep 2009 12:28:26 -0400" -->
<!-- isosent="20090925162826" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in checkpointing in open mpi" -->
<!-- id="9EAB5340-AD67-45A5-9F4C-D7BBCB1DFDC7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="348886.62283.qm_at_web37304.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error in checkpointing in open mpi<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 12:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Previous message:</strong> <a href="10768.php">Charles Wright: "[OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>In reply to:</strong> <a href="10763.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing in open mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2009, at 7:10 AM, Mallikarjuna Shastry wrote:
<br>
<p><span class="quotelev1">&gt; dear sir
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am sending the details as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. i am using openmpi-1.3.3 and blcr 0.8.2
</span><br>
<span class="quotelev1">&gt; 2. i have installed blcr 0.8.2 first under /root/MS
</span><br>
<span class="quotelev1">&gt; 3. then i installed openmpi 1.3.3 under /root/MS
</span><br>
<span class="quotelev1">&gt; 4 i have configured and installed open mpi as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #./configure --with-ft=cr --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --with-blcr=/usr/local/bin
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/usr/local/lib
</span><br>
<p>If you want to enable the C/R thread then you need to specify it. Try  
<br>
adding '--enable-ft-thread' to you Open MPI configure in addition to  
<br>
'--enable-mpi-threads'. The C/R thread should help your problem below.
<br>
<p>Also it looks like you are specifying the wrong BLCR path. Above you  
<br>
said that it was installed in '/root/MS' but you are passing '/usr/ 
<br>
local/lib'.
<br>
<p>Have you confirmed that you can successfully checkpoint/restart a non- 
<br>
MPI program on this system with BLCR?
<br>
<p><p><span class="quotelev1">&gt; # make
</span><br>
<span class="quotelev1">&gt; # make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then i added the following to the .bash_profile under home
</span><br>
<span class="quotelev1">&gt; directory( i went to home directory by doing cd ~)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /sbin/insmod
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr_imports.ko
</span><br>
<span class="quotelev1">&gt;  /sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr.ko
</span><br>
<p>Instead of putting this in your .bash_profile, the /sbin/insmod's  
<br>
should probably be setup to automatically load a boot time. BLCR's  
<br>
Admin Guide discusses how you can set this up (See section 2.5):
<br>
&nbsp;&nbsp;&nbsp;<a href="https://upc-bugs.lbl.gov//blcr/doc/html/BLCR_Admin_Guide.html">https://upc-bugs.lbl.gov//blcr/doc/html/BLCR_Admin_Guide.html</a>
<br>
<p><span class="quotelev1">&gt;  PATH=$PATH:/usr/local/bin
</span><br>
<span class="quotelev1">&gt;  MANPATH=$MANPATH:/usr/local/man
</span><br>
<span class="quotelev1">&gt;  LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib
</span><br>
<p>Again if you installed Open MPI and BLCR in /root/MS, then you need to  
<br>
add that installation path to your environment (e.g., PATH,  
<br>
LD_LIBRARY_PATH, MANPATH).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then i compiled and run the file arr_add.c as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_localhost examples]# mpicc -o res arr_add.c
</span><br>
<span class="quotelev1">&gt; [root_at_localhost examples]# mpirun -np 2 -am ft-enable-cr
</span><br>
<span class="quotelev1">&gt; ./res
</span><br>
<p>You really should not ever be running Open MPI as root. Neither Open  
<br>
MPI nor BLCR require that you be root to use them.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2  2  2  2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt; 2  2  2  2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt; 2  2  2  2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The process with PID 5790 is not checkpointable.
</span><br>
<span class="quotelev1">&gt;        This could be due to one of
</span><br>
<span class="quotelev2">&gt;&gt; the following:
</span><br>
<span class="quotelev2">&gt;&gt;        - An application with this PID
</span><br>
<span class="quotelev2">&gt;&gt; doesn't currently exist
</span><br>
<span class="quotelev2">&gt;&gt;        - The application with this PID
</span><br>
<span class="quotelev2">&gt;&gt; isn't checkpointable
</span><br>
<span class="quotelev2">&gt;&gt;        - The application with this PID
</span><br>
<span class="quotelev2">&gt;&gt; isn't an OPAL application.
</span><br>
<span class="quotelev2">&gt;&gt;       We were looking for the
</span><br>
<span class="quotelev2">&gt;&gt; named files:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   /tmp/opal_cr_prog_write.5790
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   /tmp/opal_cr_prog_read.5790
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:05788] local) Error: Unable to
</span><br>
<span class="quotelev2">&gt;&gt; initiate the handshake with peer [[7788,1],1]. -1
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:05788] [[7788,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt;&gt; Error in file snapc_full_global.c at line 567
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:05788] [[7788,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt;&gt; Error in file snapc_full_global.c at line 1054
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 2 2 2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt; 2 2 2 2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt; 2 2 2 2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt; 2 2 2 2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt; 2 2 2 2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt; 2 2 2 2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt; 2 2 2 2 2 2 2 2 2 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I suspect that this is related to your application. Have you tried to  
<br>
checkpoint/restart a simple example program, something that has a core  
<br>
loop like (Note the MPI_Barrier is necessary if you are not using the  
<br>
C/R thread since we need to call into the Open MPI library to check  
<br>
for a checkpoint):
<br>
---------
<br>
for(i = 0; i &lt; 100; i++) {
<br>
&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Counting %d\n&quot;, i);
<br>
&nbsp;&nbsp;&nbsp;sleep(1);
<br>
}
<br>
----------
<br>
<p>Per my other message to you on the list:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/09/10741.php">http://www.open-mpi.org/community/lists/users/2009/09/10741.php</a>
<br>
<p>--------------------
<br>
Is your application using SIGUSR1?
<br>
<p>This error message indicates that Open MPI's daemons could not  
<br>
communicate with the application processes. The daemons send SIGUSR1  
<br>
to the process to initiate the handshake (you can change this signal  
<br>
with -mca opal_cr_signal). If your application does not respond to the  
<br>
daemon within a time bound (default 20 sec, though you can change it  
<br>
with -mca snapc_full_max_wait_time) then this error is printed, and  
<br>
the checkpoint is aborted.--------------------
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: the PID of mpirun is 5788
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i geve the following command for taking the checkpoint
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_localhost examples]#ompi-checkpoint -s 5788
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i got the following output , but it was hanging like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:05796]
</span><br>
<span class="quotelev1">&gt;          Requested - Global
</span><br>
<span class="quotelev1">&gt; Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:05796]
</span><br>
<span class="quotelev1">&gt;            Pending -
</span><br>
<span class="quotelev1">&gt; Global Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:05796]
</span><br>
<span class="quotelev1">&gt;            Running -
</span><br>
<span class="quotelev1">&gt; Global Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kindly rectify it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mallikarjuna shastry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Previous message:</strong> <a href="10768.php">Charles Wright: "[OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>In reply to:</strong> <a href="10763.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing in open mpi"</a>
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
