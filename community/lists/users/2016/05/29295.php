<?
$subject_val = "Re: [OMPI users] users Digest, Vol 3510, Issue 2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 19:44:51 2016" -->
<!-- isoreceived="20160523234451" -->
<!-- sent="Mon, 23 May 2016 23:44:47 +0000 (UTC)" -->
<!-- isosent="20160523234447" -->
<!-- name="Megdich Islem" -->
<!-- email="megdich_islem_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 3510, Issue 2" -->
<!-- id="1659377143.2420437.1464047087622.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.17.1464019202.3155.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 3510, Issue 2<br>
<strong>From:</strong> Megdich Islem (<em>megdich_islem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 19:44:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29296.php">Gilles Gouaillardet: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29294.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29296.php">Gilles Gouaillardet: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Reply:</strong> <a href="29296.php">Gilles Gouaillardet: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Open MPI does not work when MPICH or intel MPI are&#194;&#160;installed&quot;
<br>
Thank you for your suggestion. But I need to run OpenFoam and Empire at the same time. In fact, Empire couples OpenFoam with another software.
<br>
Is there any solution for this case ?
<br>
<p>Regards,Islem 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Le Lundi 23 mai 2016 17h00, &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden]&gt; a &#195;&#169;crit :
<br>
&nbsp;
<br>
<p>&nbsp;Send users mailing list submissions to
<br>
&#194;&#160;&#194;&#160;&#194;&#160; users_at_[hidden]
<br>
<p>To subscribe or unsubscribe via the World Wide Web, visit
<br>
&#194;&#160;&#194;&#160;&#194;&#160; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
or, via email, send a message with subject or body 'help' to
<br>
&#194;&#160;&#194;&#160;&#194;&#160; users-request_at_[hidden]
<br>
<p>You can reach the person managing the list at
<br>
&#194;&#160;&#194;&#160;&#194;&#160; users-owner_at_[hidden]
<br>
<p>When replying, please edit your Subject line so it is more specific
<br>
than &quot;Re: Contents of users digest...&quot;
<br>
<p><p>Today's Topics:
<br>
<p>&#194;&#160; 1. Re: Open MPI does not work when MPICH or intel MPI are
<br>
&#194;&#160; &#194;&#160; &#194;&#160; installed (Andy Riebs)
<br>
&#194;&#160; 2. segmentation fault for slot-list and openmpi-1.10.3rc2
<br>
&#194;&#160; &#194;&#160; &#194;&#160; (Siegmar Gross)
<br>
&#194;&#160; 3. Re: problem about mpirun on two nodes (Jeff Squyres (jsquyres))
<br>
&#194;&#160; 4. Re: Open MPI does not work when MPICH or intel MPI are
<br>
&#194;&#160; &#194;&#160; &#194;&#160; installed (Gilles Gouaillardet)
<br>
&#194;&#160; 5. Re: segmentation fault for slot-list and&#194;&#160;&#194;&#160;&#194;&#160; openmpi-1.10.3rc2
<br>
&#194;&#160; &#194;&#160; &#194;&#160; (Ralph Castain)
<br>
&#194;&#160; 6. mpirun java (Claudio Stamile)
<br>
<p><p>----------------------------------------------------------------------
<br>
<p>[Message discarded by content filter]
<br>
------------------------------
<br>
<p>Message: 2
<br>
Date: Mon, 23 May 2016 15:26:52 +0200
<br>
From: Siegmar Gross &lt;siegmar.gross_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: [OMPI users] segmentation fault for slot-list and
<br>
&#194;&#160;&#194;&#160;&#194;&#160; openmpi-1.10.3rc2
<br>
Message-ID:
<br>
&#194;&#160;&#194;&#160;&#194;&#160; &lt;241613b1-ada6-292f-eeb9-722fc8fa2f94_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=utf-8; format=flowed
<br>
<p>Hi,
<br>
<p>I installed openmpi-1.10.3rc2 on my &quot;SUSE Linux Enterprise Server
<br>
12 (x86_64)&quot; with Sun C 5.13&#194;&#160; and gcc-6.1.0. Unfortunately I get
<br>
a segmentation fault for &quot;--slot-list&quot; for one of my small programs.
<br>
<p><p>loki spawn 119 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&#194;&#160; &#194;&#160; &#194;&#160; OPAL repo revision: v1.10.2-201-gd23dda8
<br>
&#194;&#160; &#194;&#160; &#194;&#160; C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
<br>
<p><p>loki spawn 120 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&#194;&#160; I create 4 slave processes
<br>
<p>Parent process 0: tasks in MPI_COMM_WORLD:&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 1
<br>
&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; tasks in COMM_CHILD_PROCESSES local group:&#194;&#160; 1
<br>
&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; tasks in COMM_CHILD_PROCESSES remote group: 4
<br>
<p>Slave process 0 of 4 running on loki
<br>
Slave process 1 of 4 running on loki
<br>
Slave process 2 of 4 running on loki
<br>
spawn_slave 2: argv[0]: spawn_slave
<br>
Slave process 3 of 4 running on loki
<br>
spawn_slave 0: argv[0]: spawn_slave
<br>
spawn_slave 1: argv[0]: spawn_slave
<br>
spawn_slave 3: argv[0]: spawn_slave
<br>
<p><p><p><p>loki spawn 121 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&#194;&#160; I create 4 slave processes
<br>
<p>[loki:17326] *** Process received signal ***
<br>
[loki:17326] Signal: Segmentation fault (11)
<br>
[loki:17326] Signal code: Address not mapped (1)
<br>
[loki:17326] Failing at address: 0x8
<br>
[loki:17326] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f4e469b3870]
<br>
[loki:17326] [ 1] *** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***&#194;&#160; &#194;&#160; and potentially your MPI job)
<br>
[loki:17324] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f4e46c165b0]
<br>
[loki:17326] [ 2] 
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f4e46bf5b08]
<br>
[loki:17326] [ 3] *** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***&#194;&#160; &#194;&#160; and potentially your MPI job)
<br>
[loki:17325] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f4e46c1be8a]
<br>
[loki:17326] [ 4] 
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7f4e46c5828e]
<br>
[loki:17326] [ 5] spawn_slave[0x40097e]
<br>
[loki:17326] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f4e4661db05]
<br>
[loki:17326] [ 7] spawn_slave[0x400a54]
<br>
[loki:17326] *** End of error message ***
<br>
-------------------------------------------------------
<br>
Child job 2 terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus 
<br>
causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&#194;&#160; Process name: [[56340,2],0]
<br>
&#194;&#160; Exit code:&#194;&#160; &#194;&#160; 1
<br>
--------------------------------------------------------------------------
<br>
loki spawn 122
<br>
<p><p><p><p>I would be grateful, if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p>------------------------------
<br>
<p>Message: 3
<br>
Date: Mon, 23 May 2016 14:13:11 +0000
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI User's List&quot; &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] problem about mpirun on two nodes
<br>
Message-ID: &lt;B2033C1D-8AA4-4823-B984-92756DC1E756_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;us-ascii&quot;
<br>
<p>On May 21, 2016, at 11:31 PM, douraku_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered a problem about mpirun and SSH when using OMPI 1.10.0 compiled with gcc, running on centos7.2.
</span><br>
<span class="quotelev1">&gt; When I execute mpirun on my 2 node cluster, I get the following errors pasted below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [douraku_at_master home]$ mpirun -np 12 a.out
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-keyex,gssapi-with-mic).
</span><br>
<p>This is the key right here: you got a permission denied error when you (assumedly) tried to execute on the remote server.
<br>
<p>Triple check your ssh settings to ensure that you can run on the remote server(s) without a password or interactive passphrase entry.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
------------------------------
Message: 4
Date: Mon, 23 May 2016 23:31:30 +0900
From: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] Open MPI does not work when MPICH or intel
&#194;&#160;&#194;&#160;&#194;&#160; MPI are&#194;&#160;&#194;&#160;&#194;&#160; installed
Message-ID:
&#194;&#160;&#194;&#160;&#194;&#160; &lt;CAAkFZ5u86Q0ev=ospehnKvd0kumYBoeMD8WF=J+TaDUH3xYecQ_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;utf-8&quot;
modules are way more friendly that manually setting and exporting your
environment.
the issue here is you are setting your environment in your .bashrc, and
that cannot work if your account is used with various MPI implementations.
(unless your .bashrc checks a third party variable to select the
appropriate mpi, in this case, simply extend the logic to select openmpi)
if you configure'd with --enable-mpirun-prefix-by-default, you should not
need anything in your environment.
Cheers,
Gilles
On Monday, May 23, 2016, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
&gt; Hi,
&gt;
&gt; The short answer: Environment module files are probably the best solution
&gt; for your problem.
&gt;
&gt; The long answer: See
&gt; &lt;<a href="http://www.admin-magazine.com/HPC/Articles/Environment-Modules">http://www.admin-magazine.com/HPC/Articles/Environment-Modules</a>&gt;
&gt; &lt;<a href="http://www.admin-magazine.com/HPC/Articles/Environment-Modules">http://www.admin-magazine.com/HPC/Articles/Environment-Modules</a>&gt;, which
&gt; pretty much addresses your question.
&gt;
&gt; Andy
&gt;
&gt; On 05/23/2016 07:40 AM, Megdich Islem wrote:
&gt;
&gt; Hi,
&gt;
&gt; I am using 2 software, one is called Open Foam and the other called EMPIRE
&gt; that need to run together at the same time.
&gt; Open Foam uses&#194;&#160; Open MPI implementation and EMPIRE uses either MPICH or
&gt; intel mpi.
&gt; The version of Open MPI that comes with Open Foam is 1.6.5.
&gt; I am using Intel (R) MPI Library for linux * OS, version 5.1.3 and MPICH
&gt; 3.0.4.
&gt;
&gt; My problem is when I have the environment variables of&#194;&#160; either mpich or
&gt; Intel MPI&#194;&#160; sourced to bashrc, I fail to run a case of Open Foam with
&gt; parallel processing ( You find attached a picture of the error I got )
&gt; This is an example of a command line I use to run Open Foam
&gt; mpirun -np 4 interFoam -parallel
&gt;
&gt; Once I keep the environment variable of OpenFoam only, the parallel
&gt; processing works without any problem, so I won't be able to run EMPIRE.
&gt;
&gt; I am sourcing the environment variables in this way:
&gt;
&gt; For Open Foam:
&gt; source /opt/openfoam30/etc/bashrc
&gt;
&gt; For MPICH 3.0.4
&gt;
&gt; export PATH=/home/islem/Desktop/mpich/bin:$PATH
&gt; export LD_LIBRARY_PATH=&quot;/home/islem/Desktop/mpich/lib/:$LD_LIBRARY_PATH&quot;
&gt; export MPICH_F90=gfortran
&gt; export MPICH_CC=/opt/intel/bin/icc
&gt; export MPICH_CXX=/opt/intel/bin/icpc
&gt; export MPICH-LINK_CXX=&quot;-L/home/islem/Desktop/mpich/lib/ -Wl,-rpath
&gt; -Wl,/home/islem/Desktop/mpich/lib -lmpichcxx -lmpich -lopa -lmpl -lrt
&gt; -lpthread&quot;
&gt;
&gt; For intel
&gt;
&gt; export PATH=$PATH:/opt/intel/bin/
&gt; LD_LIBRARY_PATH=&quot;/opt/intel/lib/intel64:$LD_LIBRARY_PATH&quot;
&gt; export LD_LIBRARY_PATH
&gt; source
&gt; /opt/intel/compilers_and_libraries_2016.3.210/linux/mpi/intel64/bin/mpivars.sh
&gt; intel64
&gt;
&gt; If Only Open Foam is sourced, mpirun --version gives OPEN MPI (1.6.5)
&gt; If Open Foam and MPICH are sourced, mpirun --version gives mpich 3.0.1
&gt; If Open Foam and intel MPI are sourced, mpirun --version gives intel (R)
&gt; MPI libarary for linux, version 5.1.3
&gt;
&gt; My question is why I can't have two MPI implementation installed and
&gt; sourced together. How can I solve the problem ?
&gt;
&gt; Regards,
&gt; Islem Megdiche
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29279.php">http://www.open-mpi.org/community/lists/users/2016/05/29279.php</a>
&gt;
&gt;
&gt;
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
Message: 5
Date: Mon, 23 May 2016 08:45:53 -0700
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] segmentation fault for slot-list and
&#194;&#160;&#194;&#160;&#194;&#160; openmpi-1.10.3rc2
Message-ID: &lt;73195D72-CEA7-4AFC-9527-8F725C8B1FA1_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;utf-8&quot;
I cannot replicate the problem - both scenarios work fine for me. I?m not convinced your test code is correct, however, as you call Comm_free the inter-communicator but didn?t call Comm_disconnect. Checkout the attached for a correct code and see if it works for you.
FWIW: I don?t know how many cores you have on your sockets, but if you have 6 cores/socket, then your slot-list is equivalent to ??bind-to none? as the slot-list applies to every process being launched
-------------- next part --------------
A non-text attachment was scrubbed...
Name: simple_spawn.c
Type: application/octet-stream
Size: 1926 bytes
Desc: not available
URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20160523/7554b3ec/attachment.obj">http://www.open-mpi.org/MailArchives/users/attachments/20160523/7554b3ec/attachment.obj</a>&gt;
-------------- next part --------------
&gt; On May 23, 2016, at 6:26 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
&gt; 
&gt; Hi,
&gt; 
&gt; I installed openmpi-1.10.3rc2 on my &quot;SUSE Linux Enterprise Server
&gt; 12 (x86_64)&quot; with Sun C 5.13&#194;&#160; and gcc-6.1.0. Unfortunately I get
&gt; a segmentation fault for &quot;--slot-list&quot; for one of my small programs.
&gt; 
&gt; 
&gt; loki spawn 119 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
&gt;&#194;&#160; &#194;&#160; &#194;&#160; OPAL repo revision: v1.10.2-201-gd23dda8
&gt;&#194;&#160; &#194;&#160; C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
&gt; 
&gt; 
&gt; loki spawn 120 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
&gt; 
&gt; Parent process 0 running on loki
&gt;&#194;&#160; I create 4 slave processes
&gt; 
&gt; Parent process 0: tasks in MPI_COMM_WORLD:&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 1
&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; tasks in COMM_CHILD_PROCESSES local group:&#194;&#160; 1
&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; tasks in COMM_CHILD_PROCESSES remote group: 4
&gt; 
&gt; Slave process 0 of 4 running on loki
&gt; Slave process 1 of 4 running on loki
&gt; Slave process 2 of 4 running on loki
&gt; spawn_slave 2: argv[0]: spawn_slave
&gt; Slave process 3 of 4 running on loki
&gt; spawn_slave 0: argv[0]: spawn_slave
&gt; spawn_slave 1: argv[0]: spawn_slave
&gt; spawn_slave 3: argv[0]: spawn_slave
&gt; 
&gt; 
&gt; 
&gt; 
&gt; loki spawn 121 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
&gt; 
&gt; Parent process 0 running on loki
&gt;&#194;&#160; I create 4 slave processes
&gt; 
&gt; [loki:17326] *** Process received signal ***
&gt; [loki:17326] Signal: Segmentation fault (11)
&gt; [loki:17326] Signal code: Address not mapped (1)
&gt; [loki:17326] Failing at address: 0x8
&gt; [loki:17326] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f4e469b3870]
&gt; [loki:17326] [ 1] *** An error occurred in MPI_Init
&gt; *** on a NULL communicator
&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
&gt; ***&#194;&#160; &#194;&#160; and potentially your MPI job)
&gt; [loki:17324] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f4e46c165b0]
&gt; [loki:17326] [ 2] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f4e46bf5b08]
&gt; [loki:17326] [ 3] *** An error occurred in MPI_Init
&gt; *** on a NULL communicator
&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
&gt; ***&#194;&#160; &#194;&#160; and potentially your MPI job)
&gt; [loki:17325] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f4e46c1be8a]
&gt; [loki:17326] [ 4] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7f4e46c5828e]
&gt; [loki:17326] [ 5] spawn_slave[0x40097e]
&gt; [loki:17326] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f4e4661db05]
&gt; [loki:17326] [ 7] spawn_slave[0x400a54]
&gt; [loki:17326] *** End of error message ***
&gt; -------------------------------------------------------
&gt; Child job 2 terminated normally, but 1 process returned
&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
&gt; -------------------------------------------------------
&gt; --------------------------------------------------------------------------
&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
&gt; the job to be terminated. The first process to do so was:
&gt; 
&gt;&#194;&#160; Process name: [[56340,2],0]
&gt;&#194;&#160; Exit code:&#194;&#160; &#194;&#160; 1
&gt; --------------------------------------------------------------------------
&gt; loki spawn 122
&gt; 
&gt; 
&gt; 
&gt; 
&gt; I would be grateful, if somebody can fix the problem. Thank you
&gt; very much for any help in advance.
&gt; 
&gt; 
&gt; Kind regards
&gt; 
&gt; Siegmar
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29281.php">http://www.open-mpi.org/community/lists/users/2016/05/29281.php</a>
------------------------------
Message: 6
Date: Mon, 23 May 2016 17:47:53 +0200
From: Claudio Stamile &lt;claudiostamile_at_[hidden]&gt;
To: users_at_[hidden]
Subject: [OMPI users] mpirun java
Message-ID:
&#194;&#160;&#194;&#160;&#194;&#160; &lt;CAAdD79zz1wAonmr5hOd3Jp51QEDUhmP5WW8Tp7EuJLDfsHeFxw_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;utf-8&quot;
Dear all,
I'm using openmpi for Java.
I've a problem when I try to use more option parameters in my java command.
More in detail I run mpirun as follow:
mpirun -n 5 java -cp path1:path2 -Djava.library.path=pathLibs
classification.MyClass
It seems that the option &quot;-Djava.library.path&quot; is ignored when i execute
the command.
Is it normal ?
Do you know how to solve this problem ?
Thank you.
Best,
Claudio
-- 
C.
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
Subject: Digest Footer
_______________________________________________
users mailing list
users_at_[hidden]
<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
------------------------------
End of users Digest, Vol 3510, Issue 2
**************************************
  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29295/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29296.php">Gilles Gouaillardet: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29294.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29296.php">Gilles Gouaillardet: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Reply:</strong> <a href="29296.php">Gilles Gouaillardet: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
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
