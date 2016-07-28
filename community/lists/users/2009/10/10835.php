<?
$subject_val = "Re: [OMPI users] error in checkpointing an mpi application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 03:22:40 2009" -->
<!-- isoreceived="20091001072240" -->
<!-- sent="Thu, 01 Oct 2009 09:21:36 +0200" -->
<!-- isosent="20091001072136" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in checkpointing an mpi application" -->
<!-- id="4AC45880.5080407_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="153803.27919.qm_at_web37305.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 03:21:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10836.php">vipin kumar: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Previous message:</strong> <a href="10834.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing an mpi application"</a>
<li><strong>In reply to:</strong> <a href="10834.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing an mpi application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>from what you describe below, seems as if you did not configure well 
<br>
OpenMPI.
<br>
<p>You issued
<br>
<p>./configure --with-ft=cr --enable-mpi-threads --with-blcr=/usr/local/bin --with-blcr-libdir=/usr/local/lib
<br>
<p>while according to the installation paths you gave it should have been 
<br>
more like
<br>
<p>./configure --with-ft=cr --enable-mpi-threads --with-blcr=/root/MS --with-blcr-libdir=/root/MS/lib
<br>
<p><p><p>Apart from that, if you wish to have BLCR modules loaded at start up of 
<br>
your machine, a simple way is to add the following lines in rc.local 
<br>
This file is somewhere in /etc: the exact location can vary from one linux 
<br>
distribution to another (e.g.: /etc/rc.d/rc.local or /etc/rc.local)
<br>
<p>/sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr_imports.ko 
<br>
/sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr.ko
<br>
<p>Just in case, if you have multiple MPIs installed, you can check which 
<br>
you are using with the following command:
<br>
<p>which mpirun
<br>
<p><p>HTH,
<br>
<p><pre>
--
Constantinos
Mallikarjuna Shastry wrote:
&gt;  dear sir
&gt;
&gt;
&gt; i am sending the details as follows
&gt;
&gt;
&gt; 1. i am using openmpi-1.3.3 and blcr 0.8.2 
&gt; 2. i have installed blcr 0.8.2 first under /root/MS
&gt; 3. then i installed openmpi 1.3.3 under /root/MS
&gt; 4 i have configured and installed open mpi as follows
&gt;
&gt; #./configure --with-ft=cr --enable-mpi-threads --with-blcr=/usr/local/bin --with-blcr-libdir=/usr/local/lib
&gt; # make 
&gt; # make install
&gt;
&gt; then i added the following to the .bash_profile under home directory( i went to home directory by doing cd ~)
&gt;
&gt; /sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr_imports.ko 
&gt; /sbin/insmod /usr/local/lib/blcr/2.6.23.1-42.fc8/blcr.ko 
&gt; PATH=$PATH:/usr/local/bin
&gt; MANPATH=$MANPATH:/usr/local/man
&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib
&gt;
&gt; then i compiled and run the file arr_add.c as follows
&gt;
&gt; [root_at_localhost examples]# mpicc -o res arr_add.c
&gt; [root_at_localhost examples]# mpirun -np 2 -am ft-enable-cr ./res
&gt;
&gt; 2       2       2       2       2       2       2       2       2       2
&gt; 2       2       2       2       2       2       2       2       2       2
&gt; 2       2       2       2       2       2       2       2       2       2
&gt; --------------------------------------------------------------------------
&gt; Error: The process with PID 5790 is not checkpointable.
&gt;        This could be due to one of the following:
&gt;         - An application with this PID doesn't currently exist
&gt;         - The application with this PID isn't checkpointable
&gt;         - The application with this PID isn't an OPAL application.
&gt;        We were looking for the named files:
&gt;          /tmp/opal_cr_prog_write.5790
&gt;          /tmp/opal_cr_prog_read.5790
&gt; --------------------------------------------------------------------------
&gt; [localhost.localdomain:05788] local) Error: Unable to initiate the handshake with peer [[7788,1],1]. -1
&gt; [localhost.localdomain:05788] [[7788,0],0] ORTE_ERROR_LOG: Error in file snapc_full_global.c at line 567
&gt; [localhost.localdomain:05788] [[7788,0],0] ORTE_ERROR_LOG: Error in file snapc_full_global.c at line 1054
&gt; 2       2       2       2       2       2       2       2       2       2
&gt; 2       2       2       2       2       2       2       2       2       2
&gt; 2       2       2       2       2       2       2       2       2       2
&gt; 2       2       2       2       2       2       2       2       2       2
&gt; 2       2       2       2       2       2       2       2       2       2
&gt; 2       2       2       2       2       2       2       2       2       2
&gt;
&gt;
&gt; NOTE: the PID of mpirun is 5788
&gt;
&gt; i geve the following command for taking the checkpoint
&gt;
&gt; [root_at_localhost examples]#ompi-checkpoint -s 5788
&gt;
&gt; i got the following output , but it was hanging like this
&gt;
&gt; [localhost.localdomain:05796]                 Requested - Global Snapshot Reference: (null)
&gt; [localhost.localdomain:05796]                   Pending - Global Snapshot Reference: (null)
&gt; [localhost.localdomain:05796]                   Running - Global Snapshot Reference: (null)
&gt;
&gt;
&gt; can anybody resolve this problem
&gt; kindly rectify it.
&gt;
&gt;
&gt; with regards
&gt;
&gt; mallikarjuna shastry
&gt;
&gt;
&gt;
&gt;       
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;   
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10836.php">vipin kumar: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Previous message:</strong> <a href="10834.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing an mpi application"</a>
<li><strong>In reply to:</strong> <a href="10834.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing an mpi application"</a>
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
