<?
$subject_val = "Re: [OMPI users] users Digest, Vol 3514, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 08:45:14 2016" -->
<!-- isoreceived="20160601124514" -->
<!-- sent="Wed, 1 Jun 2016 12:41:31 +0000 (UTC)" -->
<!-- isosent="20160601124131" -->
<!-- name="Megdich Islem" -->
<!-- email="megdich_islem_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 3514, Issue 1" -->
<!-- id="1196811866.4930290.1464784891779.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.21.1464364802.12695.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 3514, Issue 1<br>
<strong>From:</strong> Megdich Islem (<em>megdich_islem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-01 08:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29343.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
<li><strong>Reply:</strong> <a href="29343.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
Thank you Jeff for you suggestion. But, I am still not able to understand what do you mean by using absolute path names to for mpicc/mpifort-mpirun/mpiexec ?
<br>
This is how my .bashrc looks like
<br>
source /opt/openfoam30/etc/bashrc
<br>
export PATH=/home/Desktop/mpich/bin:$PATHexport LD_LIBRARY_PATH=&quot;/home/islem/Desktop/mpich/lib/:$LD_LIBRARY_PATH&quot;export MPICH_F90=gfortranexport MPICH_CC=/opt/intel/bin/iccexport MPICH_CXX=/opt/intel/bin/icpcexport MPICH_LINK_CXX=&quot;-L/home/Desktop/mpich/lib/ -Wl,-rpath -Wl,/home/islem/Desktop/mpich/lib -lmpichcxx -lmpich -lopa -lmpl -lrt -lpthread&quot;
<br>
export PATH=$PATH:/opt/intel/bin/LD_LIBRARY_PATH=&quot;/opt/intel/lib/intel64:$LD_LIBRARY_PATH&quot;export LD_LIBRARY_PATHsource /opt/intel/compilers_and_libraries_2016.3.210/linux/mpi/intel64/mpivars.sh intel64
<br>
alias startEMPIRE=&quot;. /home/islem/software/empire/EMPIRE-Core/etc/bashrc.sh ICC&quot;
<br>
mpirun --version gives mpich 3.0.4
<br>
This is how I run one example that couples 2 clients through the server EMPIRE.I use three terminals, in each I write one of these command lines
<br>
mpiexec -np 1 Emperor emperorInput.xml &#194;&#160;(I got a message in the terminal saying that Empire started)
<br>
mpiexec -np 1 dummyCSM dummyCSMInput (I get a message that Emperor acknowledged connection)mpiexec -np 1 pimpleDyMFoam -case OF (I got no message in the terminal which means no connection)
<br>
How can I use the mpirun and where to right any modifications ?
<br>
Regards,Islem 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Le Vendredi 27 mai 2016 17h00, &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden]&gt; a &#195;&#169;crit :
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
<p>&#194;&#160; 1. Re: users Digest, Vol 3510, Issue 2 (Jeff Squyres (jsquyres))
<br>
&#194;&#160; 2. Re: segmentation fault for slot-list and openmpi-1.10.3rc2
<br>
&#194;&#160; &#194;&#160; &#194;&#160; (Siegmar Gross)
<br>
&#194;&#160; 3. OpenMPI virtualization aware (Marco D'Amico)
<br>
&#194;&#160; 4. Re: OpenMPI virtualization aware (Ralph Castain)
<br>
<p><p>----------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Thu, 26 May 2016 23:28:17 +0000
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: Megdich Islem &lt;megdich_islem_at_[hidden]&gt;, &quot;Open MPI User's List&quot;
<br>
&#194;&#160;&#194;&#160;&#194;&#160; &lt;users_at_[hidden]&gt;
<br>
Cc: Dave Love &lt;d.love_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] users Digest, Vol 3510, Issue 2
<br>
Message-ID: &lt;441F803D-FDBB-443D-82AA-74FF3845A329_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;utf-8&quot;
<br>
<p>You're still intermingling your Open MPI and MPICH installations.
<br>
<p>You need to ensure to use the wrapper compilers and mpirun/mpiexec from the same MPI implementation.
<br>
<p>For example, if you use mpicc/mpifort from Open MPI to build your program, then you must use Open MPI's mpirun/mpiexec.
<br>
<p>If you absolutely need to have both MPI implementations in your PATH / LD_LIBRARY_PATH, you might want to use absolute path names to for mpicc/mpifort/mpirun/mpiexec.
<br>
<p><p><p><span class="quotelev1">&gt; On May 26, 2016, at 3:46 PM, Megdich Islem &lt;megdich_islem_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you all for your suggestions !!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found an answer to a similar case in Open MPI FAQ (Question 15)
</span><br>
<span class="quotelev1">&gt; FAQ: Running MPI jobs
</span><br>
<span class="quotelev1">&gt;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt; FAQ: Running MPI jobs
</span><br>
<span class="quotelev1">&gt; Table of contents: What pre-requisites are necessary for running an Open MPI job? What ABI guarantees does Open MPI provide? Do I need a common filesystem on a...
</span><br>
<span class="quotelev1">&gt; Afficher sur www.open-mpi.org
</span><br>
<span class="quotelev1">&gt; Aper?u par Yahoo
</span><br>
<span class="quotelev1">&gt;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt; which suggests to use mpirun's&#194;&#160; prefix command line option or to use the mpirun wrapper.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I modified my command&#194;&#160; to the following
</span><br>
<span class="quotelev1">&gt;&#194;&#160; mpirun --prefix /opt/openfoam30/platforms/linux64GccDPInt32Opt/lib/Openmpi-system -np 1 pimpleDyMFoam -case OF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I got an error (see attached picture). Is the syntax correct? How can I solve the problem? That first method seems to be easier than using the mpirun wrapper.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise, how can I use the mpirun wrapper?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; islem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le Mercredi 25 mai 2016 16h40, Dave Love &lt;d.love_at_[hidden]&gt; a ?crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You could wrap one (set of) program(s) in a script to set the
</span><br>
<span class="quotelev2">&gt; &gt; appropriate environment before invoking the real program. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I realize I should have said something like &quot;program invocations&quot;,
</span><br>
<span class="quotelev1">&gt; i.e. if you have no control over something invoking mpirun for programs
</span><br>
<span class="quotelev1">&gt; using different MPIs, then an mpirun wrapper needs to check what it's
</span><br>
<span class="quotelev1">&gt; being asked to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mpirun-error.png&gt;&lt;path-to-open-mpi.png&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29317.php">http://www.open-mpi.org/community/lists/users/2016/05/29317.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
------------------------------
Message: 2
Date: Fri, 27 May 2016 08:16:41 +0200
From: Siegmar Gross &lt;siegmar.gross_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] segmentation fault for slot-list and
&#194;&#160;&#194;&#160;&#194;&#160; openmpi-1.10.3rc2
Message-ID:
&#194;&#160;&#194;&#160;&#194;&#160; &lt;f5653a5c-174f-4569-c730-082a9db82e6a_at_[hidden]&gt;
Content-Type: text/plain; charset=windows-1252; format=flowed
Hi Ralph,
Am 26.05.2016 um 17:38 schrieb Ralph Castain:
&gt; I?m afraid I honestly can?t make any sense of it. It seems
&gt; you at least have a simple workaround (use a hostfile instead
&gt; of -host), yes?
Only the combination &quot;--host&quot; and &quot;--slot-list&quot; breaks.
Everything else works as expected. One more remark: As you
can see below, this combination worked using gdb and &quot;next&quot;
after the breakpoint. The process blocks, if I keep the
enter-key pressed down and I have to kill simple_spawn in
another window to get control back in gdb (&lt;Ctrl-c&gt; or
anything else didn't work). I got this error yesterday
evening.
...
(gdb)
ompi_mpi_init (argc=0, argv=0x0, requested=0, provided=0x7fffffffbc0c)
&#194;&#160; &#194;&#160; at ../../openmpi-1.10.3rc3/ompi/runtime/ompi_mpi_init.c:738
738&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_file_init())) {
(gdb)
744&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_win_init())) {
(gdb)
750&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_attr_init())) {
(gdb)
758&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_proc_complete_init())) {
(gdb)
764&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ret = MCA_PML_CALL(enable(true));
(gdb)
765&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if( OMPI_SUCCESS != ret ) {
(gdb)
771&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (NULL == (procs = ompi_proc_world(&amp;nprocs))) {
(gdb)
775&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ret = MCA_PML_CALL(add_procs(procs, nprocs));
(gdb)
776&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; free(procs);
(gdb)
780&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_ERR_UNREACH == ret) {
(gdb)
785&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; } else if (OMPI_SUCCESS != ret) {
(gdb)
790&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MCA_PML_CALL(add_comm(&amp;ompi_mpi_comm_world.comm));
(gdb)
791&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MCA_PML_CALL(add_comm(&amp;ompi_mpi_comm_self.comm));
(gdb)
796&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (ompi_mpi_show_mca_params) {
(gdb)
803&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ompi_rte_wait_for_debugger();
(gdb)
807&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (ompi_enable_timing &amp;&amp; 0 == OMPI_PROC_MY_NAME-&gt;vpid) {
(gdb)
817&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; coll = OBJ_NEW(ompi_rte_collective_t);
(gdb)
818&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; coll-&gt;id = ompi_process_info.peer_init_barrier;
(gdb)
819&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; coll-&gt;active = true;
(gdb)
820&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_rte_barrier(coll))) {
(gdb)
825&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; OMPI_WAIT_FOR_COMPLETION(coll-&gt;active);
(gdb)
Program received signal SIGTERM, Terminated.
0x00007ffff7a7acd0 in opal_progress_at_plt ()
&#194;&#160; &#194;&#160; from /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12
(gdb)
Single stepping until exit from function opal_progress_at_plt,
which has no line number information.
[Thread 0x7ffff491b700 (LWP 19602) exited]
Program terminated with signal SIGTERM, Terminated.
The program no longer exists.
(gdb)
The program is not being run.
(gdb)
...
Kind regards
Siegmar
&gt;&gt; On May 26, 2016, at 5:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt; Hi Ralph and Gilles,
&gt;&gt;
&gt;&gt; it's strange that the program works with &quot;--host&quot; and &quot;--slot-list&quot;
&gt;&gt; in your environment and not in mine. I get the following output, if
&gt;&gt; I run the program in gdb without a breakpoint.
&gt;&gt;
&gt;&gt;
&gt;&gt; loki spawn 142 gdb /usr/local/openmpi-1.10.3_64_gcc/bin/mpiexec
&gt;&gt; GNU gdb (GDB; SUSE Linux Enterprise 12) 7.9.1
&gt;&gt; ...
&gt;&gt; (gdb) set args -np 1 --host loki --slot-list 0:0-1,1:0-1 simple_spawn
&gt;&gt; (gdb) run
&gt;&gt; Starting program: /usr/local/openmpi-1.10.3_64_gcc/bin/mpiexec -np 1 --host loki --slot-list 0:0-1,1:0-1 simple_spawn
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; Detaching after fork from child process 18031.
&gt;&gt; [pid 18031] starting up!
&gt;&gt; 0 completed MPI_Init
&gt;&gt; Parent [pid 18031] about to spawn!
&gt;&gt; Detaching after fork from child process 18033.
&gt;&gt; Detaching after fork from child process 18034.
&gt;&gt; [pid 18033] starting up!
&gt;&gt; [pid 18034] starting up!
&gt;&gt; [loki:18034] *** Process received signal ***
&gt;&gt; [loki:18034] Signal: Segmentation fault (11)
&gt;&gt; ...
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; I get a different output, if I run the program in gdb with
&gt;&gt; a breakpoint.
&gt;&gt;
&gt;&gt; gdb /usr/local/openmpi-1.10.3_64_gcc/bin/mpiexec
&gt;&gt; (gdb) set args -np 1 --host loki --slot-list 0:0-1,1:0-1 simple_spawn
&gt;&gt; (gbd) set follow-fork-mode child
&gt;&gt; (gdb) break ompi_proc_self
&gt;&gt; (gdb) run
&gt;&gt; (gdb) next
&gt;&gt;
&gt;&gt; Repeating &quot;next&quot; very often results in the following output.
&gt;&gt;
&gt;&gt; ...
&gt;&gt; Starting program: /home/fd1026/work/skripte/master/parallel/prog/mpi/spawn/simple_spawn
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; [pid 13277] starting up!
&gt;&gt; [New Thread 0x7ffff42ef700 (LWP 13289)]
&gt;&gt;
&gt;&gt; Breakpoint 1, ompi_proc_self (size=0x7fffffffc060)
&gt;&gt;&#194;&#160; &#194;&#160; at ../../openmpi-1.10.3rc3/ompi/proc/proc.c:413
&gt;&gt; 413&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ompi_proc_t **procs = (ompi_proc_t**) malloc(sizeof(ompi_proc_t*));
&gt;&gt; (gdb) n
&gt;&gt; 414&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (NULL == procs) {
&gt;&gt; (gdb)
&gt;&gt; 423&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; OBJ_RETAIN(ompi_proc_local_proc);
&gt;&gt; (gdb)
&gt;&gt; 424&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; *procs = ompi_proc_local_proc;
&gt;&gt; (gdb)
&gt;&gt; 425&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; *size = 1;
&gt;&gt; (gdb)
&gt;&gt; 426&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return procs;
&gt;&gt; (gdb)
&gt;&gt; 427&#194;&#160; &#194;&#160; }
&gt;&gt; (gdb)
&gt;&gt; ompi_comm_init () at ../../openmpi-1.10.3rc3/ompi/communicator/comm_init.c:138
&gt;&gt; 138&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; group-&gt;grp_my_rank&#194;&#160; &#194;&#160; &#194;&#160; = 0;
&gt;&gt; (gdb)
&gt;&gt; 139&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; group-&gt;grp_proc_count&#194;&#160; &#194;&#160; = (int)size;
&gt;&gt; ...
&gt;&gt; 193&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ompi_comm_reg_init();
&gt;&gt; (gdb)
&gt;&gt; 196&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ompi_comm_request_init ();
&gt;&gt; (gdb)
&gt;&gt; 198&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return OMPI_SUCCESS;
&gt;&gt; (gdb)
&gt;&gt; 199&#194;&#160; &#194;&#160; }
&gt;&gt; (gdb)
&gt;&gt; ompi_mpi_init (argc=0, argv=0x0, requested=0, provided=0x7fffffffc21c)
&gt;&gt;&#194;&#160; &#194;&#160; at ../../openmpi-1.10.3rc3/ompi/runtime/ompi_mpi_init.c:738
&gt;&gt; 738&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_file_init())) {
&gt;&gt; (gdb)
&gt;&gt; 744&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_win_init())) {
&gt;&gt; (gdb)
&gt;&gt; 750&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_attr_init())) {
&gt;&gt; ...
&gt;&gt; 988&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ompi_mpi_initialized = true;
&gt;&gt; (gdb)
&gt;&gt; 991&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (ompi_enable_timing &amp;&amp; 0 == OMPI_PROC_MY_NAME-&gt;vpid) {
&gt;&gt; (gdb)
&gt;&gt; 999&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return MPI_SUCCESS;
&gt;&gt; (gdb)
&gt;&gt; 1000&#194;&#160; &#194;&#160; }
&gt;&gt; (gdb)
&gt;&gt; PMPI_Init (argc=0x0, argv=0x0) at pinit.c:94
&gt;&gt; 94&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (MPI_SUCCESS != err) {
&gt;&gt; (gdb)
&gt;&gt; 104&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return MPI_SUCCESS;
&gt;&gt; (gdb)
&gt;&gt; 105&#194;&#160; &#194;&#160; }
&gt;&gt; (gdb)
&gt;&gt; 0x0000000000400d0c in main ()
&gt;&gt; (gdb)
&gt;&gt; Single stepping until exit from function main,
&gt;&gt; which has no line number information.
&gt;&gt; 0 completed MPI_Init
&gt;&gt; Parent [pid 13277] about to spawn!
&gt;&gt; [New process 13472]
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; process 13472 is executing new program: /usr/local/openmpi-1.10.3_64_gcc/bin/orted
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; [New process 13474]
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; process 13474 is executing new program: /home/fd1026/work/skripte/master/parallel/prog/mpi/spawn/simple_spawn
&gt;&gt; [pid 13475] starting up!
&gt;&gt; [pid 13476] starting up!
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; [pid 13474] starting up!
&gt;&gt; [New Thread 0x7ffff491b700 (LWP 13480)]
&gt;&gt; [Switching to Thread 0x7ffff7ff1740 (LWP 13474)]
&gt;&gt;
&gt;&gt; Breakpoint 1, ompi_proc_self (size=0x7fffffffba30)
&gt;&gt;&#194;&#160; &#194;&#160; at ../../openmpi-1.10.3rc3/ompi/proc/proc.c:413
&gt;&gt; 413&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ompi_proc_t **procs = (ompi_proc_t**) malloc(sizeof(ompi_proc_t*));
&gt;&gt; (gdb)
&gt;&gt; 414&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (NULL == procs) {
&gt;&gt; ...
&gt;&gt; 426&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return procs;
&gt;&gt; (gdb)
&gt;&gt; 427&#194;&#160; &#194;&#160; }
&gt;&gt; (gdb)
&gt;&gt; ompi_comm_init () at ../../openmpi-1.10.3rc3/ompi/communicator/comm_init.c:138
&gt;&gt; 138&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; group-&gt;grp_my_rank&#194;&#160; &#194;&#160; &#194;&#160; = 0;
&gt;&gt; (gdb)
&gt;&gt; 139&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; group-&gt;grp_proc_count&#194;&#160; &#194;&#160; = (int)size;
&gt;&gt; (gdb)
&gt;&gt; 140&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; OMPI_GROUP_SET_INTRINSIC (group);
&gt;&gt; ...
&gt;&gt; 193&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ompi_comm_reg_init();
&gt;&gt; (gdb)
&gt;&gt; 196&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ompi_comm_request_init ();
&gt;&gt; (gdb)
&gt;&gt; 198&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return OMPI_SUCCESS;
&gt;&gt; (gdb)
&gt;&gt; 199&#194;&#160; &#194;&#160; }
&gt;&gt; (gdb)
&gt;&gt; ompi_mpi_init (argc=0, argv=0x0, requested=0, provided=0x7fffffffbbec)
&gt;&gt;&#194;&#160; &#194;&#160; at ../../openmpi-1.10.3rc3/ompi/runtime/ompi_mpi_init.c:738
&gt;&gt; 738&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_file_init())) {
&gt;&gt; (gdb)
&gt;&gt; 744&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_win_init())) {
&gt;&gt; (gdb)
&gt;&gt; 750&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_attr_init())) {
&gt;&gt; ...
&gt;&gt; 863&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_pubsub_base_select())) {
&gt;&gt; (gdb)
&gt;&gt; 869&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = mca_base_framework_open(&amp;ompi_dpm_base_framework, 0))) {
&gt;&gt; (gdb)
&gt;&gt; 873&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_dpm_base_select())) {
&gt;&gt; (gdb)
&gt;&gt; 884&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if ( OMPI_SUCCESS !=
&gt;&gt; (gdb)
&gt;&gt; 894&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS !=
&gt;&gt; (gdb)
&gt;&gt; 900&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS !=
&gt;&gt; (gdb)
&gt;&gt; 911&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_dpm.dyn_init())) {
&gt;&gt; (gdb)
&gt;&gt; Parent done with spawn
&gt;&gt; Parent sending message to child
&gt;&gt; 2 completed MPI_Init
&gt;&gt; Hello from the child 2 of 3 on host loki pid 13476
&gt;&gt; 1 completed MPI_Init
&gt;&gt; Hello from the child 1 of 3 on host loki pid 13475
&gt;&gt; 921&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_cr_init())) {
&gt;&gt; (gdb)
&gt;&gt; 931&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; opal_progress_event_users_decrement();
&gt;&gt; (gdb)
&gt;&gt; 934&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; opal_progress_set_yield_when_idle(ompi_mpi_yield_when_idle);
&gt;&gt; (gdb)
&gt;&gt; 937&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (ompi_mpi_event_tick_rate &gt;= 0) {
&gt;&gt; (gdb)
&gt;&gt; 946&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (OMPI_SUCCESS != (ret = ompi_mpiext_init())) {
&gt;&gt; (gdb)
&gt;&gt; 953&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (ret != OMPI_SUCCESS) {
&gt;&gt; (gdb)
&gt;&gt; 972&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; OBJ_CONSTRUCT(&amp;ompi_registered_datareps, opal_list_t);
&gt;&gt; (gdb)
&gt;&gt; 977&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; OBJ_CONSTRUCT( &amp;ompi_mpi_f90_integer_hashtable, opal_hash_table_t);
&gt;&gt; (gdb)
&gt;&gt; 978&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; opal_hash_table_init(&amp;ompi_mpi_f90_integer_hashtable, 16 /* why not? */);
&gt;&gt; (gdb)
&gt;&gt; 980&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; OBJ_CONSTRUCT( &amp;ompi_mpi_f90_real_hashtable, opal_hash_table_t);
&gt;&gt; (gdb)
&gt;&gt; 981&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; opal_hash_table_init(&amp;ompi_mpi_f90_real_hashtable, FLT_MAX_10_EXP);
&gt;&gt; (gdb)
&gt;&gt; 983&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; OBJ_CONSTRUCT( &amp;ompi_mpi_f90_complex_hashtable, opal_hash_table_t);
&gt;&gt; (gdb)
&gt;&gt; 984&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; opal_hash_table_init(&amp;ompi_mpi_f90_complex_hashtable, FLT_MAX_10_EXP);
&gt;&gt; (gdb)
&gt;&gt; 988&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ompi_mpi_initialized = true;
&gt;&gt; (gdb)
&gt;&gt; 991&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (ompi_enable_timing &amp;&amp; 0 == OMPI_PROC_MY_NAME-&gt;vpid) {
&gt;&gt; (gdb)
&gt;&gt; 999&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return MPI_SUCCESS;
&gt;&gt; (gdb)
&gt;&gt; 1000&#194;&#160; &#194;&#160; }
&gt;&gt; (gdb)
&gt;&gt; PMPI_Init (argc=0x0, argv=0x0) at pinit.c:94
&gt;&gt; 94&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if (MPI_SUCCESS != err) {
&gt;&gt; (gdb)
&gt;&gt; 104&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return MPI_SUCCESS;
&gt;&gt; (gdb)
&gt;&gt; 105&#194;&#160; &#194;&#160; }
&gt;&gt; (gdb)
&gt;&gt; 0x0000000000400d0c in main ()
&gt;&gt; (gdb)
&gt;&gt; Single stepping until exit from function main,
&gt;&gt; which has no line number information.
&gt;&gt; 0 completed MPI_Init
&gt;&gt; Hello from the child 0 of 3 on host loki pid 13474
&gt;&gt;
&gt;&gt; Child 2 disconnected
&gt;&gt; Child 1 disconnected
&gt;&gt; Child 0 received msg: 38
&gt;&gt; Parent disconnected
&gt;&gt; 13277: exiting
&gt;&gt;
&gt;&gt; Program received signal SIGTERM, Terminated.
&gt;&gt; 0x0000000000400f0a in main ()
&gt;&gt; (gdb)
&gt;&gt; Single stepping until exit from function main,
&gt;&gt; which has no line number information.
&gt;&gt; [tcsetpgrp failed in terminal_inferior: No such process]
&gt;&gt; [Thread 0x7ffff491b700 (LWP 13480) exited]
&gt;&gt;
&gt;&gt; Program terminated with signal SIGTERM, Terminated.
&gt;&gt; The program no longer exists.
&gt;&gt; (gdb)
&gt;&gt; The program is not being run.
&gt;&gt; (gdb)
&gt;&gt; The program is not being run.
&gt;&gt; (gdb) info break
&gt;&gt; Num&#194;&#160; &#194;&#160; Type&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Disp Enb Address&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; What
&gt;&gt; 1&#194;&#160; &#194;&#160; &#194;&#160; breakpoint&#194;&#160; &#194;&#160; keep y&#194;&#160; 0x00007ffff7aa35c7 in ompi_proc_self
&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; at ../../openmpi-1.10.3rc3/ompi/proc/proc.c:413 inf 8, 7, 6, 5, 4, 3, 2, 1
&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; breakpoint already hit 2 times
&gt;&gt; (gdb) delete 1
&gt;&gt; (gdb) r
&gt;&gt; Starting program: /home/fd1026/work/skripte/master/parallel/prog/mpi/spawn/simple_spawn
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; [pid 16708] starting up!
&gt;&gt; 0 completed MPI_Init
&gt;&gt; Parent [pid 16708] about to spawn!
&gt;&gt; [New process 16720]
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; process 16720 is executing new program: /usr/local/openmpi-1.10.3_64_gcc/bin/orted
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; [New process 16722]
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; process 16722 is executing new program: /home/fd1026/work/skripte/master/parallel/prog/mpi/spawn/simple_spawn
&gt;&gt; [pid 16723] starting up!
&gt;&gt; [pid 16724] starting up!
&gt;&gt; [Thread debugging using libthread_db enabled]
&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
&gt;&gt; [pid 16722] starting up!
&gt;&gt; Parent done with spawn
&gt;&gt; Parent sending message to child
&gt;&gt; 1 completed MPI_Init
&gt;&gt; Hello from the child 1 of 3 on host loki pid 16723
&gt;&gt; 2 completed MPI_Init
&gt;&gt; Hello from the child 2 of 3 on host loki pid 16724
&gt;&gt; 0 completed MPI_Init
&gt;&gt; Hello from the child 0 of 3 on host loki pid 16722
&gt;&gt; Child 0 received msg: 38
&gt;&gt; Child 0 disconnected
&gt;&gt; Parent disconnected
&gt;&gt; Child 1 disconnected
&gt;&gt; Child 2 disconnected
&gt;&gt; 16708: exiting
&gt;&gt; 16724: exiting
&gt;&gt; 16723: exiting
&gt;&gt; [New Thread 0x7ffff491b700 (LWP 16729)]
&gt;&gt;
&gt;&gt; Program received signal SIGTERM, Terminated.
&gt;&gt; [Switching to Thread 0x7ffff7ff1740 (LWP 16722)]
&gt;&gt; __GI__dl_debug_state () at dl-debug.c:74
&gt;&gt; 74&#194;&#160; &#194;&#160; &#194;&#160; dl-debug.c: No such file or directory.
&gt;&gt; (gdb) --------------------------------------------------------------------------
&gt;&gt; WARNING: A process refused to die despite all the efforts!
&gt;&gt; This process may still be running and/or consuming resources.
&gt;&gt;
&gt;&gt; Host: loki
&gt;&gt; PID:&#194;&#160; 16722
&gt;&gt;
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;
&gt;&gt;
&gt;&gt; The following simple_spawn processes exist now.
&gt;&gt;
&gt;&gt; loki spawn 171 ps -aef | grep simple_spawn
&gt;&gt; fd1026&#194;&#160; 11079 11053&#194;&#160; 0 14:00 pts/0&#194;&#160; &#194;&#160; 00:00:00 /usr/local/openmpi-1.10.3_64_gcc/bin/mpiexec -np 1 --host loki --slot-list 0:0-1,1:0-1 simple_spawn
&gt;&gt; fd1026&#194;&#160; 11095 11079 29 14:01 pts/0&#194;&#160; &#194;&#160; 00:09:37 [simple_spawn] &lt;defunct&gt;
&gt;&gt; fd1026&#194;&#160; 16722&#194;&#160; &#194;&#160; 1&#194;&#160; 0 14:31 ?&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 00:00:00 [simple_spawn] &lt;defunct&gt;
&gt;&gt; fd1026&#194;&#160; 17271 29963&#194;&#160; 0 14:33 pts/2&#194;&#160; &#194;&#160; 00:00:00 grep simple_spawn
&gt;&gt; loki spawn 172
&gt;&gt;
&gt;&gt;
&gt;&gt; Is it possible that there is a race condition? How can I help
&gt;&gt; to get a solution for my problem?
&gt;&gt;
&gt;&gt;
&gt;&gt; Kind regards
&gt;&gt;
&gt;&gt; Siegmar
&gt;&gt;
&gt;&gt; Am 24.05.2016 um 16:54 schrieb Ralph Castain:
&gt;&gt;&gt; Works perfectly for me, so I believe this must be an environment issue - I am using gcc 6.0.0 on CentOS7 with x86:
&gt;&gt;&gt;
&gt;&gt;&gt; $ mpirun -n 1 -host bend001 --slot-list 0:0-1,1:0-1 --report-bindings ./simple_spawn
&gt;&gt;&gt; [bend001:17599] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt; [pid 17601] starting up!
&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt; Parent [pid 17601] about to spawn!
&gt;&gt;&gt; [pid 17603] starting up!
&gt;&gt;&gt; [bend001:17599] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt; [bend001:17599] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt; [bend001:17599] MCW rank 2 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt; [pid 17604] starting up!
&gt;&gt;&gt; [pid 17605] starting up!
&gt;&gt;&gt; Parent done with spawn
&gt;&gt;&gt; Parent sending message to child
&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt; Hello from the child 0 of 3 on host bend001 pid 17603
&gt;&gt;&gt; Child 0 received msg: 38
&gt;&gt;&gt; 1 completed MPI_Init
&gt;&gt;&gt; Hello from the child 1 of 3 on host bend001 pid 17604
&gt;&gt;&gt; 2 completed MPI_Init
&gt;&gt;&gt; Hello from the child 2 of 3 on host bend001 pid 17605
&gt;&gt;&gt; Child 0 disconnected
&gt;&gt;&gt; Child 2 disconnected
&gt;&gt;&gt; Parent disconnected
&gt;&gt;&gt; Child 1 disconnected
&gt;&gt;&gt; 17603: exiting
&gt;&gt;&gt; 17605: exiting
&gt;&gt;&gt; 17601: exiting
&gt;&gt;&gt; 17604: exiting
&gt;&gt;&gt; $
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On May 24, 2016, at 7:18 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Hi Ralph and Gilles,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; the program breaks only, if I combine &quot;--host&quot; and &quot;--slot-list&quot;. Perhaps this
&gt;&gt;&gt;&gt; information is helpful. I use a different machine now, so that you can see that
&gt;&gt;&gt;&gt; the problem is not restricted to &quot;loki&quot;.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; pc03 spawn 115 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
&gt;&gt;&gt;&gt;&#194;&#160; &#194;&#160; OPAL repo revision: v1.10.2-201-gd23dda8
&gt;&gt;&gt;&gt;&#194;&#160; &#194;&#160; C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; pc03 spawn 116 uname -a
&gt;&gt;&gt;&gt; Linux pc03 3.12.55-52.42-default #1 SMP Thu Mar 3 10:35:46 UTC 2016 (4354e1d) x86_64 x86_64 x86_64 GNU/Linux
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; pc03 spawn 117 cat host_pc03.openmpi
&gt;&gt;&gt;&gt; pc03.informatik.hs-fulda.de slots=12 max_slots=12
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; pc03 spawn 118 mpicc simple_spawn.c
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; pc03 spawn 119 mpiexec -np 1 --report-bindings a.out
&gt;&gt;&gt;&gt; [pc03:03711] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../..][../../../../../..]
&gt;&gt;&gt;&gt; [pid 3713] starting up!
&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt; Parent [pid 3713] about to spawn!
&gt;&gt;&gt;&gt; [pc03:03711] MCW rank 0 bound to socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]: [../../../../../..][BB/BB/BB/BB/BB/BB]
&gt;&gt;&gt;&gt; [pc03:03711] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]: [BB/BB/BB/BB/BB/BB][../../../../../..]
&gt;&gt;&gt;&gt; [pc03:03711] MCW rank 2 bound to socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]: [../../../../../..][BB/BB/BB/BB/BB/BB]
&gt;&gt;&gt;&gt; [pid 3715] starting up!
&gt;&gt;&gt;&gt; [pid 3716] starting up!
&gt;&gt;&gt;&gt; [pid 3717] starting up!
&gt;&gt;&gt;&gt; Parent done with spawn
&gt;&gt;&gt;&gt; Parent sending message to child
&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt; Hello from the child 0 of 3 on host pc03 pid 3715
&gt;&gt;&gt;&gt; 1 completed MPI_Init
&gt;&gt;&gt;&gt; Hello from the child 1 of 3 on host pc03 pid 3716
&gt;&gt;&gt;&gt; 2 completed MPI_Init
&gt;&gt;&gt;&gt; Hello from the child 2 of 3 on host pc03 pid 3717
&gt;&gt;&gt;&gt; Child 0 received msg: 38
&gt;&gt;&gt;&gt; Child 0 disconnected
&gt;&gt;&gt;&gt; Child 2 disconnected
&gt;&gt;&gt;&gt; Parent disconnected
&gt;&gt;&gt;&gt; Child 1 disconnected
&gt;&gt;&gt;&gt; 3713: exiting
&gt;&gt;&gt;&gt; 3715: exiting
&gt;&gt;&gt;&gt; 3716: exiting
&gt;&gt;&gt;&gt; 3717: exiting
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; pc03 spawn 120 mpiexec -np 1 --hostfile host_pc03.openmpi --slot-list 0:0-1,1:0-1 --report-bindings a.out
&gt;&gt;&gt;&gt; [pc03:03729] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt;&gt; [pid 3731] starting up!
&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt; Parent [pid 3731] about to spawn!
&gt;&gt;&gt;&gt; [pc03:03729] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt;&gt; [pc03:03729] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt;&gt; [pc03:03729] MCW rank 2 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt;&gt; [pid 3733] starting up!
&gt;&gt;&gt;&gt; [pid 3734] starting up!
&gt;&gt;&gt;&gt; [pid 3735] starting up!
&gt;&gt;&gt;&gt; Parent done with spawn
&gt;&gt;&gt;&gt; Parent sending message to child
&gt;&gt;&gt;&gt; 2 completed MPI_Init
&gt;&gt;&gt;&gt; Hello from the child 2 of 3 on host pc03 pid 3735
&gt;&gt;&gt;&gt; 1 completed MPI_Init
&gt;&gt;&gt;&gt; Hello from the child 1 of 3 on host pc03 pid 3734
&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt; Hello from the child 0 of 3 on host pc03 pid 3733
&gt;&gt;&gt;&gt; Child 0 received msg: 38
&gt;&gt;&gt;&gt; Child 0 disconnected
&gt;&gt;&gt;&gt; Child 2 disconnected
&gt;&gt;&gt;&gt; Child 1 disconnected
&gt;&gt;&gt;&gt; Parent disconnected
&gt;&gt;&gt;&gt; 3731: exiting
&gt;&gt;&gt;&gt; 3734: exiting
&gt;&gt;&gt;&gt; 3733: exiting
&gt;&gt;&gt;&gt; 3735: exiting
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; pc03 spawn 121 mpiexec -np 1 --host pc03 --slot-list 0:0-1,1:0-1 --report-bindings a.out
&gt;&gt;&gt;&gt; [pc03:03744] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt;&gt; [pid 3746] starting up!
&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt; Parent [pid 3746] about to spawn!
&gt;&gt;&gt;&gt; [pc03:03744] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt;&gt; [pc03:03744] MCW rank 2 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
&gt;&gt;&gt;&gt; [pid 3748] starting up!
&gt;&gt;&gt;&gt; [pid 3749] starting up!
&gt;&gt;&gt;&gt; [pc03:03749] *** Process received signal ***
&gt;&gt;&gt;&gt; [pc03:03749] Signal: Segmentation fault (11)
&gt;&gt;&gt;&gt; [pc03:03749] Signal code: Address not mapped (1)
&gt;&gt;&gt;&gt; [pc03:03749] Failing at address: 0x8
&gt;&gt;&gt;&gt; [pc03:03749] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7fe6f0d1f870]
&gt;&gt;&gt;&gt; [pc03:03749] [ 1] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7fe6f0f825b0]
&gt;&gt;&gt;&gt; [pc03:03749] [ 2] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7fe6f0f61b08]
&gt;&gt;&gt;&gt; [pc03:03749] [ 3] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7fe6f0f87e8a]
&gt;&gt;&gt;&gt; [pc03:03749] [ 4] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x1a0)[0x7fe6f0fc42ae]
&gt;&gt;&gt;&gt; [pc03:03749] [ 5] a.out[0x400d0c]
&gt;&gt;&gt;&gt; [pc03:03749] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7fe6f0989b05]
&gt;&gt;&gt;&gt; [pc03:03749] [ 7] a.out[0x400bf9]
&gt;&gt;&gt;&gt; [pc03:03749] *** End of error message ***
&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt; mpiexec noticed that process rank 2 with PID 3749 on node pc03 exited on signal 11 (Segmentation fault).
&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt; pc03 spawn 122
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Kind regards
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Siegmar
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On 05/24/16 15:44, Ralph Castain wrote:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; On May 24, 2016, at 6:21 AM, Siegmar Gross &lt;siegmar.gross_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I copy the relevant lines to this place, so that it is easier to see what
&gt;&gt;&gt;&gt;&gt;&gt; happens. &quot;a.out&quot; is your program, which I compiled with mpicc.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 153 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; absolute:&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#194;&#160; &#194;&#160; OPAL repo revision: v1.10.2-201-gd23dda8
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#194;&#160; C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 154 mpicc simple_spawn.c
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 155 mpiexec -np 1 a.out
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24008] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt; ...
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 a.out&quot; works.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don?t know what ?a.out? is, but it looks like there is some memory
&gt;&gt;&gt;&gt;&gt;&gt;&gt; corruption there.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; &quot;a.out&quot; is still your program. I get the same error on different
&gt;&gt;&gt;&gt;&gt;&gt; machines, so that it is not very likely, that the (hardware) memory
&gt;&gt;&gt;&gt;&gt;&gt; is corrupted.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 156 mpiexec -np 1 --host loki --slot-list 0-5 a.out
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24102] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent [pid 24102] about to spawn!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24104] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24105] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] *** Process received signal ***
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal: Segmentation fault (11)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal code: Address not mapped (1)
&gt;&gt;&gt;&gt;&gt;&gt; ...
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --slot-list 0-5 a.out&quot; breaks with a segmentation
&gt;&gt;&gt;&gt;&gt;&gt; faUlt. Can I do something, so that you can find out, what happens?
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; I honestly have no idea - perhaps Gilles can help, as I have no access to that kind of environment. We aren?t seeing such problems elsewhere, so it is likely something local.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; On 05/24/16 15:07, Ralph Castain wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 24, 2016, at 4:19 AM, Siegmar Gross
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thank you very much for your answer and your example program.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 05/23/16 17:45, Ralph Castain wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I cannot replicate the problem - both scenarios work fine for me. I?m not
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; convinced your test code is correct, however, as you call Comm_free the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; inter-communicator but didn?t call Comm_disconnect. Checkout the attached
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for a correct code and see if it works for you.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I thought that I only need MPI_Comm_Disconnect, if I would have established a
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connection with MPI_Comm_connect before. The man page for MPI_Comm_free states
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;This&#194;&#160; operation marks the communicator object for deallocation. The
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; handle is set to MPI_COMM_NULL. Any pending operations that use this
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicator will complete normally; the object is actually deallocated only
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if there are no other active references to it.&quot;.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The man page for MPI_Comm_disconnect states
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;MPI_Comm_disconnect waits for all pending communication on comm to complete
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; internally, deallocates the communicator object, and sets the handle to
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_NULL. It is&#194;&#160; a&#194;&#160; collective operation.&quot;.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't see a difference for my spawned processes, because both functions will
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;wait&quot; until all pending operations have finished, before the object will be
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; destroyed. Nevertheless, perhaps my small example program worked all the years
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; by chance.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, I don't understand, why my program works with
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master&quot; and breaks with
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master&quot;. You are right,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my slot-list is equivalent to &quot;-bind-to none&quot;. I could also have used
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --oversubscribe spawn_master&quot; which works as well.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Well, you are only giving us one slot when you specify &quot;-host loki?, and then
&gt;&gt;&gt;&gt;&gt;&gt;&gt; you are trying to launch multiple processes into it. The ?slot-list? option only
&gt;&gt;&gt;&gt;&gt;&gt;&gt; tells us what cpus to bind each process to - it doesn?t allocate process slots.
&gt;&gt;&gt;&gt;&gt;&gt;&gt; So you have to tell us how many processes are allowed to run on this node.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The program breaks with &quot;There are not enough slots available in the system
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to satisfy ...&quot;, if I only use &quot;--host loki&quot; or different host names,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; without mentioning five host names, using &quot;slot-list&quot;, or &quot;oversubscribe&quot;,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately &quot;--host &lt;host name&gt;:&lt;number of slots&gt;&quot; isn't available for
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.10.3rc2 to specify the number of available slots.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Correct - we did not backport the new syntax
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Your program behaves the same way as mine, so that MPI_Comm_disconnect
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; will not solve my problem. I had to modify your program in a negligible way
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to get it compiled.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 153 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#194;&#160; OPAL repo revision: v1.10.2-201-gd23dda8
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#194;&#160; C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 154 mpicc simple_spawn.c
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 155 mpiexec -np 1 a.out
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24008] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent [pid 24008] about to spawn!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24010] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24011] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24012] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent done with spawn
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent sending message to child
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello from the child 0 of 3 on host loki pid 24010
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1 completed MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello from the child 1 of 3 on host loki pid 24011
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 completed MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello from the child 2 of 3 on host loki pid 24012
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child 0 received msg: 38
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child 0 disconnected
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child 1 disconnected
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child 2 disconnected
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent disconnected
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 24012: exiting
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 24010: exiting
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 24008: exiting
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 24011: exiting
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is something wrong with my command line? I didn't use slot-list before, so
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that I'm not sure, if I use it in the intended way.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don?t know what ?a.out? is, but it looks like there is some memory corruption
&gt;&gt;&gt;&gt;&gt;&gt;&gt; there.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 156 mpiexec -np 1 --host loki --slot-list 0-5 a.out
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24102] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent [pid 24102] about to spawn!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24104] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24105] starting up!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] *** Process received signal ***
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal: Segmentation fault (11)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal code: Address not mapped (1)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Failing at address: 0x8
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f39aa76f870]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 1]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f39aa9d25b0]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 2]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f39aa9b1b08]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 3] *** An error occurred in MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***&#194;&#160; &#194;&#160; and potentially your MPI job)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24104] Local abort before MPI_INIT completed successfully; not able to
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; were killed!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f39aa9d7e8a]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 4]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x1a0)[0x7f39aaa142ae]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 5] a.out[0x400d0c]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f39aa3d9b05]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 7] a.out[0x400bf9]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] *** End of error message ***
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child job 2 terminated normally, but 1 process returned
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, thus
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; causing
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process name: [[49560,2],0]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Exit code:&#194;&#160; &#194;&#160; 1
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 157
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hopefully, you will find out what happens. Please let me know, if I can
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; help you in any way.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FWIW: I don?t know how many cores you have on your sockets, but if you
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have 6 cores/socket, then your slot-list is equivalent to ??bind-to none?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as the slot-list applies to every process being launched
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 23, 2016, at 6:26 AM, Siegmar Gross
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I installed openmpi-1.10.3rc2 on my &quot;SUSE Linux Enterprise Server
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12 (x86_64)&quot; with Sun C 5.13&#194;&#160; and gcc-6.1.0. Unfortunately I get
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a segmentation fault for &quot;--slot-list&quot; for one of my small programs.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 119 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; absolute:&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#194;&#160; OPAL repo revision: v1.10.2-201-gd23dda8
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 120 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent process 0 running on loki
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I create 4 slave processes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent process 0: tasks in MPI_COMM_WORLD:&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 1
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; tasks in COMM_CHILD_PROCESSES local group:&#194;&#160; 1
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; tasks in COMM_CHILD_PROCESSES remote group: 4
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 0 of 4 running on loki
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 1 of 4 running on loki
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 2 of 4 running on loki
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 2: argv[0]: spawn_slave
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 3 of 4 running on loki
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 0: argv[0]: spawn_slave
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 1: argv[0]: spawn_slave
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 3: argv[0]: spawn_slave
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 121 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent process 0 running on loki
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I create 4 slave processes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] *** Process received signal ***
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] Signal: Segmentation fault (11)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] Signal code: Address not mapped (1)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] Failing at address: 0x8
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f4e469b3870]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 1] *** An error occurred in MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***&#194;&#160; &#194;&#160; and potentially your MPI job)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17324] Local abort before MPI_INIT completed successfully; not able to
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; were killed!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f4e46c165b0]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 2]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f4e46bf5b08]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 3] *** An error occurred in MPI_Init
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***&#194;&#160; &#194;&#160; and potentially your MPI job)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17325] Local abort before MPI_INIT completed successfully; not able to
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; were killed!
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f4e46c1be8a]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 4]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7f4e46c5828e]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 5] spawn_slave[0x40097e]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f4e4661db05]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 7] spawn_slave[0x400a54]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] *** End of error message ***
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child job 2 terminated normally, but 1 process returned
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thus causing
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process name: [[56340,2],0]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Exit code:&#194;&#160; &#194;&#160; 1
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 122
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would be grateful, if somebody can fix the problem. Thank you
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; very much for any help in advance.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29281.php">http://www.open-mpi.org/community/lists/users/2016/05/29281.php</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29284.php">http://www.open-mpi.org/community/lists/users/2016/05/29284.php</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;simple_spawn_modified.c&gt;_______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29300.php">http://www.open-mpi.org/community/lists/users/2016/05/29300.php</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29301.php">http://www.open-mpi.org/community/lists/users/2016/05/29301.php</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29304.php">http://www.open-mpi.org/community/lists/users/2016/05/29304.php</a>
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29307.php">http://www.open-mpi.org/community/lists/users/2016/05/29307.php</a>
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29308.php">http://www.open-mpi.org/community/lists/users/2016/05/29308.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29309.php">http://www.open-mpi.org/community/lists/users/2016/05/29309.php</a>
&gt;&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29315.php">http://www.open-mpi.org/community/lists/users/2016/05/29315.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29316.php">http://www.open-mpi.org/community/lists/users/2016/05/29316.php</a>
&gt;
------------------------------
Message: 3
Date: Fri, 27 May 2016 09:14:42 +0000
From: &quot;Marco D'Amico&quot; &lt;marco.damico91_at_[hidden]&gt;
To: users_at_[hidden]
Subject: [OMPI users] OpenMPI virtualization aware
Message-ID:
&#194;&#160;&#194;&#160;&#194;&#160; &lt;CABi-01XH+vdi2egBD=KNEN_CYXPEcG0j-+3rTvnFNc6mTD+nUg_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;utf-8&quot;
Hi I'm recently investigating in Virtualization used in HPC field, and I
found out that MVAPICH has a &quot;Virtualization aware&quot; version, that permit to
overcome the big latencies problems of using a Virtualization environment
for HPC.
My question is if there is any similar efforts in OpenMPI, since I would
eventually contribute in it.
Best regards,
Marco D'Amico
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
Message: 4
Date: Fri, 27 May 2016 06:45:05 -0700
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] OpenMPI virtualization aware
Message-ID: &lt;BBEB8E66-40B0-4688-8284-2113252E1F16_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;utf-8&quot;
Hi Marco
OMPI has integrated support for the Singularity container:
<a href="http://singularity.lbl.gov/index.html">http://singularity.lbl.gov/index.html</a> &lt;<a href="http://singularity.lbl.gov/index.html">http://singularity.lbl.gov/index.html</a>&gt;
<a href="https://groups.google.com/a/lbl.gov/forum/#!forum/singularity">https://groups.google.com/a/lbl.gov/forum/#!forum/singularity</a> &lt;<a href="https://groups.google.com/a/lbl.gov/forum/#!forum/singularity">https://groups.google.com/a/lbl.gov/forum/#!forum/singularity</a>&gt;
It is in OMPI master now, and an early version is in 2.0 - the full integration will be in 2.1. Singularity is undergoing changes for its 2.0 release (so we?ll need to do some updating of the OMPI integration), and there is still plenty that can be done to further optimize its integration - so contributions would be welcome!
Ralph
&gt; On May 27, 2016, at 2:14 AM, Marco D'Amico &lt;marco.damico91_at_[hidden]&gt; wrote:
&gt; 
&gt; Hi I'm recently investigating in Virtualization used in HPC field, and I found out that MVAPICH has a &quot;Virtualization aware&quot; version, that permit to overcome the big latencies problems of using a Virtualization environment for HPC.
&gt; 
&gt; My question is if there is any similar efforts in OpenMPI, since I would eventually contribute in it.
&gt; 
&gt; Best regards,
&gt; Marco D'Amico
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29320.php">http://www.open-mpi.org/community/lists/users/2016/05/29320.php</a>
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
Subject: Digest Footer
_______________________________________________
users mailing list
users_at_[hidden]
<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
------------------------------
End of users Digest, Vol 3514, Issue 1
**************************************
  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29341/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29343.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
<li><strong>Reply:</strong> <a href="29343.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
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
