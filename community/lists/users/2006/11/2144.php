<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  7 09:27:51 2006" -->
<!-- isoreceived="20061107142751" -->
<!-- sent="Tue,  7 Nov 2006 15:27:37 +0100" -->
<!-- isosent="20061107142737" -->
<!-- name="hpetit_at_[hidden]" -->
<!-- email="hpetit_at_[hidden]" -->
<!-- subject="[OMPI users]  Re:  MPI_Comm_spawn multiple bproc support" -->
<!-- id="J8D6U1$2753235E411976D38DB9DFF29605A4DD_at_aliceadsl.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:hpetit_at_[hidden]?Subject=Re:%20[OMPI%20users]%20%20Re:%20%20MPI_Comm_spawn%20multiple%20bproc%20support"><em>hpetit_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-07 09:27:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2145.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2143.php">Chevchenkovic Chevchenkovic: "[OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2145.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Reply:</strong> <a href="2145.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralf, sorry for the delay in the answer but I encountered some difficulties to access to internet since yesterday.
<br>

<br>
I have tried all your suggestions but I continue to experience problems.
<br>
Actually, I have a problem with bjs on the one hand that I may submit to a bproc forum and I still spawn problem on the other hand.
<br>

<br>
Let's focus first on the spawn problem.
<br>

<br>
Even with a &quot;bjssub -i bash&quot; or &quot;bjssub -n 1 -i bash&quot; command, I continue to have the log:
<br>
mpirun -np 1 main_exe machine10
<br>
main_exe: Begining of main_exe
<br>
main_exe: Call MPI_Init
<br>
main_exe: MPI_Info_set soft result=0
<br>
main_exe: MPI_Info_set node result=0
<br>
main_exe: Call MPI_Comm_spawn_multiple()
<br>
--------------------------------------------------------------------------
<br>
Some of the requested hosts are not included in the current allocation for the
<br>
application:
<br>
&nbsp;&nbsp;./spawned_exe
<br>
The requested hosts were:
<br>
&nbsp;&nbsp;machine10
<br>

<br>
Verify that you have mapped the allocated resources properly using the
<br>
--host specification.
<br>
--------------------------------------------------------------------------
<br>
[setics10:07250] [0,0,0] ORTE_ERROR_LOG: Out of resource in file base/rmaps_base_node.c at line 210
<br>
[setics10:07250] [0,0,0] ORTE_ERROR_LOG: Out of resource in file rmaps_rr.c at line 331
<br>

<br>
This problem is observed whatever the slave node is on the same machine than the master or not.
<br>

<br>
On the bjs side of the problem. I have run bjssub under gdb and I could observed that I did not go into the code part that setenv NODES variable, so I stayed with the default value NODES=0.
<br>

<br>
The question is, 
<br>
is the spawn problem a result of the bjs problem ? or are they two independant problems ?
<br>

<br>
The good thing would be to find some other people with a debian platform, bproc, bjs and openmpi active. So that, we could check if I have made something wrong during the installation phase or if there is really a incompatibility problem in open mpi.
<br>

<br>
Thank you so much for all you support, I wish it is not succesful yet.
<br>

<br>
Regards.
<br>

<br>
Herve
<br>

<br>
Date: Fri, 03 Nov 2006 14:10:20 -0700
<br>
From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_Comm_spawn multiple bproc support
<br>
To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;C170FE4C.59B3%rhc_at_[hidden]&gt;
<br>
Content-Type: text/plain;	charset=&quot;ISO-8859-1&quot;
<br>

<br>
Okay, I picked up some further info that may help you.
<br>

<br>
<span class="quotelev2">&gt;&gt; The &quot;bjsub -i /bin/env&quot; only sets up the NODES for the session of
</span><br>
<span class="quotelev2">&gt;&gt; /bin/env. Probably what he wants is &quot;bjssub -i /bin/bash&quot; and start
</span><br>
<span class="quotelev2">&gt;&gt; bpsh/mpirun from the new shell.
</span><br>

<br>
I would recommend doing as they suggest. Also, they noted that you failed to
<br>
specify the number of nodes you wanted on the bjssub command line. As a
<br>
result, the system gave you only one node (hence the NODES=0 instead of
<br>
NODES=0, 1).
<br>

<br>
If you do a &quot;man bjssub&quot;, or a &quot;bjssub --help&quot;, you should (hopefully) find
<br>
out how to specify the desired number of nodes.
<br>

<br>
Hope that helps.
<br>
Ralph
<br>

<br>

<br>
On 11/2/06 6:46 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; I truly appreciate your patience. Let me talk to some of our Bproc folks and
</span><br>
<span class="quotelev1">&gt; see if they can tell me what is going on. I agree - I would have expected
</span><br>
<span class="quotelev1">&gt; the NODES to be 0,1. The fact that you are getting just 0 explains the
</span><br>
<span class="quotelev1">&gt; behavior you are seeing with Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also know (though I don't the command syntax) that you can get a long-term
</span><br>
<span class="quotelev1">&gt; allocation from bjs (i.e., one that continues until you logout). Let me dig
</span><br>
<span class="quotelev1">&gt; a little and see how that is done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, I appreciate your patience.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/2/06 6:32 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I again Ralf,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I gather you have access to bjs? Could you use bjs to get a node allocation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then send me a printout of the environment?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have slightly changed my cluster configuration for something like:
</span><br>
<span class="quotelev2">&gt;&gt; master is running on a machine call: machine10
</span><br>
<span class="quotelev2">&gt;&gt; node 0 is running on a machine call: machine10 (same as master then)
</span><br>
<span class="quotelev2">&gt;&gt; node 1 is running on a machine call: machine14
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; node 0 and 1 are up
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My bjs configration allocates node 0 and 1 to the default pool
</span><br>
<span class="quotelev2">&gt;&gt; &lt;---------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pool default
</span><br>
<span class="quotelev2">&gt;&gt;       policy simple
</span><br>
<span class="quotelev2">&gt;&gt;       nodes 0-1
</span><br>
<span class="quotelev2">&gt;&gt; &lt;-----------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Be default, when I run &quot;env&quot; in a terminal, NODES variable is not present.
</span><br>
<span class="quotelev2">&gt;&gt; If I run env under a job submission command like &quot;bjsub -i env&quot;, then I can
</span><br>
<span class="quotelev2">&gt;&gt; see the following new environments variable.
</span><br>
<span class="quotelev2">&gt;&gt; NODES=0
</span><br>
<span class="quotelev2">&gt;&gt; JOBID=27 (for instance)
</span><br>
<span class="quotelev2">&gt;&gt; BPROC_RANK=0000000
</span><br>
<span class="quotelev2">&gt;&gt; BPROC_PROGNAME=/usr/bin/env
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When the command is over, NODES is unset again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is strange is that I would have expected that NODES=0,1. I do not know
</span><br>
<span class="quotelev2">&gt;&gt; if
</span><br>
<span class="quotelev2">&gt;&gt; you bjs users have the same behaviour.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully, it is the kind of information you were expecting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Herve
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------- ALICE SECURITE ENFANTS ---------------------
</span><br>
<span class="quotelev2">&gt;&gt; Prot?gez vos enfants des dangers d'Internet en installant S?curit? Enfants,
</span><br>
<span class="quotelev2">&gt;&gt; le
</span><br>
<span class="quotelev2">&gt;&gt; contr?le parental d'Alice.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>

<br>

<br>

<br>

<br>
------------------------------
<br>

<br>
Message: 2
<br>
Date: Sat, 4 Nov 2006 14:04:54 +0100 (CET)
<br>
From: &lt;pgarcia_at_[hidden]&gt;
<br>
Subject: [OMPI users] Technical inquiry
<br>
To: users_at_[hidden]
<br>
Message-ID: &lt;4444924729pgarcia_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
<br>

<br>

<br>
Hi, everydoby. Good afternoon.
<br>

<br>
I've just configured and installed the openmpi-1.1.2 on a kubuntu 
<br>
GNU/linux, and I'm trying now to compile the hello.c example without 
<br>
results.
<br>

<br>
<span class="quotelev1">&gt; root_at_kubuntu:/home/livestrong/mpi/test# uname -a
</span><br>
<span class="quotelev1">&gt; Linux kubuntu 2.6.15-23-386 #1 PREEMPT Tue May 23 13:49:40 UTC 2006 
</span><br>
<span class="quotelev1">&gt; i686 GNU/Linux
</span><br>

<br>
Hello.c
<br>
-------
<br>
#include &quot;/usr/lib/mpich-mpd/include/mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
int main (int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello word.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return(0);
<br>
}
<br>

<br>
The error that I'm finding is this:
<br>

<br>
root_at_kubuntu:/home/livestrong/mpi/prueba# mpirun -np 2 hello
<br>
0 - MPI_INIT : MPIRUN chose the wrong device ch_p4; program needs 
<br>
device ch_p4mpd
<br>
/usr/lib/mpich/bin/mpirun.ch_p4: line 243: 16625 Segmentation 
<br>
fault  &quot;/home/livestrong/mpi/prueba/hello&quot; -p4pg &quot;/home/livestrong/mpi/prueba/PI16545&quot; -p4wd &quot;/home/livestrong/mpi/prueba&quot;
<br>

<br>
Does anybody know what it can be the problem?
<br>

<br>
Regards and thank you very much in advance.
<br>

<br>
Pablo.
<br>

<br>
PD: I send the ompi_info output and the config.log to you.
<br>

<br>
Besides
<br>
-------------- next part --------------
<br>
A non-text attachment was scrubbed...
<br>
Name: question.tar.gz
<br>
Type: application/octet-stream
<br>
Size: 59009 bytes
<br>
Desc: 
<br>
Url : <a href="http://www.open-mpi.org/MailArchives/users/attachments/20061104/dd281cc5/attachment.obj">http://www.open-mpi.org/MailArchives/users/attachments/20061104/dd281cc5/attachment.obj</a> 
<br>

<br>
------------------------------
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>
End of users Digest, Vol 425, Issue 1
<br>
*************************************
<br>
<p><p>--------------------- ALICE SECURITE ENFANTS ---------------------
<br>
Prot&#233;gez vos enfants des dangers d'Internet en installant S&#233;curit&#233; Enfants, le contr&#244;le parental d'Alice.
<br>
<a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2145.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2143.php">Chevchenkovic Chevchenkovic: "[OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2145.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Reply:</strong> <a href="2145.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
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
