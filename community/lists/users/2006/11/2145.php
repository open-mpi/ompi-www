<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  7 09:37:59 2006" -->
<!-- isoreceived="20061107143759" -->
<!-- sent="Tue, 07 Nov 2006 07:37:50 -0700" -->
<!-- isosent="20061107143750" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn multiple bproc support" -->
<!-- id="C175E84E.5AB1%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="J8D6U1$2753235E411976D38DB9DFF29605A4DD_at_aliceadsl.fr" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-07 09:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2146.php">Durga Choudhury: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2144.php">hpetit_at_[hidden]: "[OMPI users]  Re:  MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2144.php">hpetit_at_[hidden]: "[OMPI users]  Re:  MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Herve
<br>
<p>Sorry you are experiencing these problems. Part of the problem is that I
<br>
have no access to a BJS machine. I suspect the issue you are encountering is
<br>
that our interface to BJS may not be correct - the person that wrote it, I
<br>
believe, may have used the wrong environmental variables. At least, that is
<br>
what some of the Bproc folks have said.
<br>
<p>Let me look into this a little more - no point in you continuing to thrash
<br>
on this. I'll challenge the Bproc folks to give me access to a BJS machine.
<br>
<p>Again, I'm sorry for the trouble.
<br>
Ralph
<br>
<p><p>On 11/7/06 7:27 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralf, sorry for the delay in the answer but I encountered some difficulties
</span><br>
<span class="quotelev1">&gt; to access to internet since yesterday.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried all your suggestions but I continue to experience problems.
</span><br>
<span class="quotelev1">&gt; Actually, I have a problem with bjs on the one hand that I may submit to a
</span><br>
<span class="quotelev1">&gt; bproc forum and I still spawn problem on the other hand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's focus first on the spawn problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even with a &quot;bjssub -i bash&quot; or &quot;bjssub -n 1 -i bash&quot; command, I continue to
</span><br>
<span class="quotelev1">&gt; have the log:
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 main_exe machine10
</span><br>
<span class="quotelev1">&gt; main_exe: Begining of main_exe
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Init
</span><br>
<span class="quotelev1">&gt; main_exe: MPI_Info_set soft result=0
</span><br>
<span class="quotelev1">&gt; main_exe: MPI_Info_set node result=0
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Comm_spawn_multiple()
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Some of the requested hosts are not included in the current allocation for the
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt;   ./spawned_exe
</span><br>
<span class="quotelev1">&gt; The requested hosts were:
</span><br>
<span class="quotelev1">&gt;   machine10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [setics10:07250] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_node.c at line 210
</span><br>
<span class="quotelev1">&gt; [setics10:07250] [0,0,0] ORTE_ERROR_LOG: Out of resource in file rmaps_rr.c at
</span><br>
<span class="quotelev1">&gt; line 331
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This problem is observed whatever the slave node is on the same machine than
</span><br>
<span class="quotelev1">&gt; the master or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the bjs side of the problem. I have run bjssub under gdb and I could
</span><br>
<span class="quotelev1">&gt; observed that I did not go into the code part that setenv NODES variable, so I
</span><br>
<span class="quotelev1">&gt; stayed with the default value NODES=0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question is, 
</span><br>
<span class="quotelev1">&gt; is the spawn problem a result of the bjs problem ? or are they two independant
</span><br>
<span class="quotelev1">&gt; problems ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The good thing would be to find some other people with a debian platform,
</span><br>
<span class="quotelev1">&gt; bproc, bjs and openmpi active. So that, we could check if I have made
</span><br>
<span class="quotelev1">&gt; something wrong during the installation phase or if there is really a
</span><br>
<span class="quotelev1">&gt; incompatibility problem in open mpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you so much for all you support, I wish it is not succesful yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Herve
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Date: Fri, 03 Nov 2006 14:10:20 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Comm_spawn multiple bproc support
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C170FE4C.59B3%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;ISO-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay, I picked up some further info that may help you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;bjsub -i /bin/env&quot; only sets up the NODES for the session of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/env. Probably what he wants is &quot;bjssub -i /bin/bash&quot; and start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bpsh/mpirun from the new shell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would recommend doing as they suggest. Also, they noted that you failed to
</span><br>
<span class="quotelev1">&gt; specify the number of nodes you wanted on the bjssub command line. As a
</span><br>
<span class="quotelev1">&gt; result, the system gave you only one node (hence the NODES=0 instead of
</span><br>
<span class="quotelev1">&gt; NODES=0, 1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you do a &quot;man bjssub&quot;, or a &quot;bjssub --help&quot;, you should (hopefully) find
</span><br>
<span class="quotelev1">&gt; out how to specify the desired number of nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/2/06 6:46 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I truly appreciate your patience. Let me talk to some of our Bproc folks and
</span><br>
<span class="quotelev2">&gt;&gt; see if they can tell me what is going on. I agree - I would have expected
</span><br>
<span class="quotelev2">&gt;&gt; the NODES to be 0,1. The fact that you are getting just 0 explains the
</span><br>
<span class="quotelev2">&gt;&gt; behavior you are seeing with Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also know (though I don't the command syntax) that you can get a long-term
</span><br>
<span class="quotelev2">&gt;&gt; allocation from bjs (i.e., one that continues until you logout). Let me dig
</span><br>
<span class="quotelev2">&gt;&gt; a little and see how that is done.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, I appreciate your patience.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/2/06 6:32 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I again Ralf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I gather you have access to bjs? Could you use bjs to get a node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and then send me a printout of the environment?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have slightly changed my cluster configuration for something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master is running on a machine call: machine10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node 0 is running on a machine call: machine10 (same as master then)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node 1 is running on a machine call: machine14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node 0 and 1 are up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My bjs configration allocates node 0 and 1 to the default pool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;---------------&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pool default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       policy simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       nodes 0-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;-----------------&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Be default, when I run &quot;env&quot; in a terminal, NODES variable is not present.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I run env under a job submission command like &quot;bjsub -i env&quot;, then I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see the following new environments variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NODES=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; JOBID=27 (for instance)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BPROC_RANK=0000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BPROC_PROGNAME=/usr/bin/env
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When the command is over, NODES is unset again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is strange is that I would have expected that NODES=0,1. I do not know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you bjs users have the same behaviour.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully, it is the kind of information you were expecting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Herve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------- ALICE SECURITE ENFANTS ---------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prot?gez vos enfants des dangers d'Internet en installant S?curit? Enfants,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; le
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contr?le parental d'Alice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Sat, 4 Nov 2006 14:04:54 +0100 (CET)
</span><br>
<span class="quotelev1">&gt; From: &lt;pgarcia_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Technical inquiry
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4444924729pgarcia_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, everydoby. Good afternoon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've just configured and installed the openmpi-1.1.2 on a kubuntu
</span><br>
<span class="quotelev1">&gt; GNU/linux, and I'm trying now to compile the hello.c example without
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; root_at_kubuntu:/home/livestrong/mpi/test# uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux kubuntu 2.6.15-23-386 #1 PREEMPT Tue May 23 13:49:40 UTC 2006
</span><br>
<span class="quotelev2">&gt;&gt; i686 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello.c
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; #include &quot;/usr/lib/mpich-mpd/include/mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Hello word.\n&quot;);
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         return(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error that I'm finding is this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_kubuntu:/home/livestrong/mpi/prueba# mpirun -np 2 hello
</span><br>
<span class="quotelev1">&gt; 0 - MPI_INIT : MPIRUN chose the wrong device ch_p4; program needs
</span><br>
<span class="quotelev1">&gt; device ch_p4mpd
</span><br>
<span class="quotelev1">&gt; /usr/lib/mpich/bin/mpirun.ch_p4: line 243: 16625 Segmentation
</span><br>
<span class="quotelev1">&gt; fault  &quot;/home/livestrong/mpi/prueba/hello&quot; -p4pg
</span><br>
<span class="quotelev1">&gt; &quot;/home/livestrong/mpi/prueba/PI16545&quot; -p4wd &quot;/home/livestrong/mpi/prueba&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody know what it can be the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards and thank you very much in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pablo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PD: I send the ompi_info output and the config.log to you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Besides
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: question.tar.gz
</span><br>
<span class="quotelev1">&gt; Type: application/octet-stream
</span><br>
<span class="quotelev1">&gt; Size: 59009 bytes
</span><br>
<span class="quotelev1">&gt; Desc: 
</span><br>
<span class="quotelev1">&gt; Url : 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20061104/dd281cc5/attac">http://www.open-mpi.org/MailArchives/users/attachments/20061104/dd281cc5/attac</a>
</span><br>
<span class="quotelev1">&gt; hment.obj 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 425, Issue 1
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------- ALICE SECURITE ENFANTS ---------------------
</span><br>
<span class="quotelev1">&gt; Prot&#233;gez vos enfants des dangers d'Internet en installant S&#233;curit&#233; Enfants, le
</span><br>
<span class="quotelev1">&gt; contr&#244;le parental d'Alice.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
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
<li><strong>Next message:</strong> <a href="2146.php">Durga Choudhury: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2144.php">hpetit_at_[hidden]: "[OMPI users]  Re:  MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2144.php">hpetit_at_[hidden]: "[OMPI users]  Re:  MPI_Comm_spawn multiple bproc support"</a>
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
