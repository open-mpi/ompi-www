<?
$subject_val = "Re: [OMPI users] General question about running single-node jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 15:05:34 2014" -->
<!-- isoreceived="20141002190534" -->
<!-- sent="Thu, 02 Oct 2014 15:09:30 -0400" -->
<!-- isosent="20141002190930" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General question about running single-node jobs." -->
<!-- id="542DA2EA.4090407_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="00db01cfde6b$dab6e540$9024afc0$_at_stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] General question about running single-node jobs.<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 15:09:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25430.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25428.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>In reply to:</strong> <a href="25428.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25430.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Reply:</strong> <a href="25430.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lee-Ping
<br>
<p>Computational Chemistry is Greek to me.
<br>
<p>However, on pp. 12 of the Q-Chem manual 3.2
<br>
<p>(PDF online 
<br>
<a href="http://www.q-chem.com/qchem-website/doc_for_web/qchem_manual_3.2.pdf">http://www.q-chem.com/qchem-website/doc_for_web/qchem_manual_3.2.pdf</a>)
<br>
<p>there are explanations of the meaning of QCSCRATCH and
<br>
QLOCALSRC, etc, which as Ralph pointed out, seem to be a sticking point,
<br>
and showed up in the warning messages, which I enclose below.
<br>
<p>QLOCALSRC specifies a local disk for IO.
<br>
I wonder if the node(s) is (are) diskless, and this might cause the problem.
<br>
Another possibility is that mpiexec may not be passing these
<br>
environment variables.
<br>
(Do you pass them in the mpiexec/mpirun command line?)
<br>
<p><p>QCSCRATCH defines a directory for temporary files.
<br>
If this is a network shared directory, could it be that some nodes
<br>
are not mounting it correctly?
<br>
Likewise, if your home directory or your job run directory are not
<br>
mounted that could be a problem.
<br>
Or maybe you don't have write permission (sometimes this
<br>
happens in /tmp, specially if it is a ramdir/tmpdir, which may also have 
<br>
a small size).
<br>
<p>Your BlueWaters system administrator may be able to shed some light on 
<br>
these things.
<br>
<p>Also the Q-Chem manual says it is a pre-compiled executable,
<br>
which as far as I know would require a matching version of OpenMPI.
<br>
(Ralph, please correct me if I am wrong.).
<br>
<p>However, you seem to have the source code, at least you sent a
<br>
snippet of it. [With all those sockets being opened besides MPI ...]
<br>
<p>Did you recompile with OpenMPI?
<br>
Did you add the $OMPI/bin to PATH and $OMPI/lib to LD_LIBRARY_PATH
<br>
and are these environment variables propagated to the job execution 
<br>
nodes (specially those that are failing)?
<br>
<p><p>Anyway, just a bunch of guesses ...
<br>
Gus Correa
<br>
<p>*********************************************
<br>
QCSCRATCH Defines the directory in which
<br>
Q-Chem
<br>
will store temporary files.
<br>
Q-Chem
<br>
will usually remove these files on successful completion of t
<br>
he job, but they
<br>
can be saved, if so wished. Therefore,
<br>
QCSCRATCH
<br>
should not reside in
<br>
a directory that will be automatically removed at the end of a
<br>
job, if the
<br>
files are to be kept for further calculations.
<br>
Note that many of these files can be very large, and it should be
<br>
ensured that
<br>
the volume that contains this directory has sufficient disk sp
<br>
ace available.
<br>
The
<br>
QCSCRATCH
<br>
directory should be periodically checked for scratch
<br>
files remaining from abnormally terminated jobs.
<br>
QCSCRATCH
<br>
defaults
<br>
to the working directory if not explicitly set. Please see se
<br>
ction 2.6 for
<br>
details on saving temporary files and consult your systems ad
<br>
ministrator.
<br>
<p><p>QCLOCALSCR On certain platforms, such as Linux clusters, it
<br>
is sometimes preferable to
<br>
write the temporary files to a disk local to the node.
<br>
QCLOCALSCR
<br>
spec-
<br>
ifies this directory. The temporary files will be copied to
<br>
QCSCRATCH
<br>
at
<br>
the end of the job, unless the job is terminated abnormally. I
<br>
n such cases
<br>
Q-Chem
<br>
will attempt to remove the files in
<br>
QCLOCALSCR
<br>
, but may not
<br>
be able to due to access restrictions. Please specify this va
<br>
riable only if
<br>
required
<br>
*********************************************
<br>
<p>On 10/02/2014 02:08 PM, Lee-Ping Wang wrote:
<br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve been troubleshooting this issue and communicating with Blue Waters
</span><br>
<span class="quotelev1">&gt; support.  It turns out that Q-Chem and OpenMPI are both trying to open
</span><br>
<span class="quotelev1">&gt; sockets, and I get different error messages depending on which one fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an aside, I don&#146;t know why Q-Chem needs sockets of its own to
</span><br>
<span class="quotelev1">&gt; communicate between ranks; shouldn&#146;t OpenMPI be taking care of all
</span><br>
<span class="quotelev1">&gt; that?  (I&#146;m unfamiliar with this part of the Q-Chem code base, maybe
</span><br>
<span class="quotelev1">&gt; it&#146;s trying to duplicate some functionality?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Blue Waters support has indicated that there&#146;s a problem with their
</span><br>
<span class="quotelev1">&gt; realm-specific IP addressing (RSIP) for the compute nodes, which they&#146;re
</span><br>
<span class="quotelev1">&gt; working on fixing.  I also tried running the same Q-Chem / OpenMPI job
</span><br>
<span class="quotelev1">&gt; on a management node which I think has the same hardware (but not the
</span><br>
<span class="quotelev1">&gt; RSIP), and the problem went away.  So I think I&#146;ll shelve this problem
</span><br>
<span class="quotelev1">&gt; for now, until Blue Waters support gets back to me with the fix. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Lee-Ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Lee-Ping
</span><br>
<span class="quotelev1">&gt; Wang
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, September 30, 2014 1:15 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] General question about running single-node jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.  I'll add some print statements to the code and try to figure
</span><br>
<span class="quotelev1">&gt; out precisely where the failure is happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2014, at 12:06 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2014, at 11:19 AM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           If so, then I should be able to (1) locate where the port
</span><br>
<span class="quotelev1">&gt;         number is defined in the code, and (2) randomize the port number
</span><br>
<span class="quotelev1">&gt;         every time it's called to work around the issue.  What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     That might work, depending on the code. I'm not sure what it is
</span><br>
<span class="quotelev1">&gt;     trying to connect to, and if that code knows how to handle arbitrary
</span><br>
<span class="quotelev1">&gt;     connections
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main reason why Q-Chem is using MPI is for executing parallel tasks
</span><br>
<span class="quotelev1">&gt; on a single node.  Thus, I think it's just the MPI ranks attempting to
</span><br>
<span class="quotelev1">&gt; connect with each other on the same machine.  This could be off the mark
</span><br>
<span class="quotelev1">&gt; because I'm still a novice with respect to MPI concepts - but I am sure
</span><br>
<span class="quotelev1">&gt; it is just one machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your statement doesn't match what you sent us - you showed that it was
</span><br>
<span class="quotelev1">&gt; your connection code that was failing, not ours. You wouldn't have
</span><br>
<span class="quotelev1">&gt; gotten that far if our connections failed as you would have failed in
</span><br>
<span class="quotelev1">&gt; MPI_Init. You are clearly much further than that as you already passed
</span><br>
<span class="quotelev1">&gt; an MPI_Barrier before reaching the code in question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You might check about those warnings - could be that QCLOCALSCR and
</span><br>
<span class="quotelev1">&gt;     QCREF need to be set for the code to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks; I don't think these environment variables are the issue but I
</span><br>
<span class="quotelev1">&gt; will check again.  The calculation runs without any problems on four
</span><br>
<span class="quotelev1">&gt; different clusters (where I don't set these environment variables
</span><br>
<span class="quotelev1">&gt; either), it's only broken on the Blue Waters compute node.  Also, the
</span><br>
<span class="quotelev1">&gt; calculation runs without any problems the first time it's executed on
</span><br>
<span class="quotelev1">&gt; the BW compute node - it's only subsequent executions that give the
</span><br>
<span class="quotelev1">&gt; error messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2014, at 11:05 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2014, at 10:49 AM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.  I think your diagnosis is probably correct.  Are these
</span><br>
<span class="quotelev1">&gt; sockets the same as TCP/UDP ports (though different numbers) that are
</span><br>
<span class="quotelev1">&gt; used in web servers, email etc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   If so, then I should be able to (1) locate where the port number is
</span><br>
<span class="quotelev1">&gt; defined in the code, and (2) randomize the port number every time it's
</span><br>
<span class="quotelev1">&gt; called to work around the issue.  What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That might work, depending on the code. I'm not sure what it is trying
</span><br>
<span class="quotelev1">&gt; to connect to, and if that code knows how to handle arbitrary connections
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might check about those warnings - could be that QCLOCALSCR and
</span><br>
<span class="quotelev1">&gt; QCREF need to be set for the code to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 8:45 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know anything about your application, or what the functions in
</span><br>
<span class="quotelev1">&gt; your code are doing. I imagine it's possible that you are trying to open
</span><br>
<span class="quotelev1">&gt; statically defined ports, which means that running the job again too
</span><br>
<span class="quotelev1">&gt; soon could leave the OS thinking the socket is already busy. It takes
</span><br>
<span class="quotelev1">&gt; awhile for the OS to release a socket resource.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 5:49 PM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's another data point that might be useful: The error message is
</span><br>
<span class="quotelev1">&gt; much more rare if I run my application on 4 cores instead of 8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 5:38 PM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for my last email - I think I spoke too quick.  I realized after
</span><br>
<span class="quotelev1">&gt; reading some more documentation that OpenMPI always uses TCP sockets for
</span><br>
<span class="quotelev1">&gt; out-of-band communication, so it doesn't make sense for me to set
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_oob=^tcp.  That said, I am still running into a strange problem
</span><br>
<span class="quotelev1">&gt; in my application when running on a specific machine (Blue Waters
</span><br>
<span class="quotelev1">&gt; compute node); I don't see this problem on any other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the same job (~5 seconds) in rapid succession, I see the
</span><br>
<span class="quotelev1">&gt; following error message on the second execution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /tmp/leeping/opt/qchem-4.2/bin/parallel.csh,  , qcopt_reactants.in, 8,
</span><br>
<span class="quotelev1">&gt; 0, ./qchem24825/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIRUN in parallel.csh is
</span><br>
<span class="quotelev1">&gt; /tmp/leeping/opt/qchem-4.2/ext-libs/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P4_RSHCOMMAND in parallel.csh is ssh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; QCOUTFILE is stdout
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q-Chem machineFile is /tmp/leeping/opt/qchem-4.2/bin/mpi/machines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nid15081:24859] Warning: could not find environment variable &quot;QCLOCALSCR&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nid15081:24859] Warning: could not find environment variable &quot;QCREF&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; initial socket setup ...start
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Process name: [[46773,1],0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Exit code:    255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here's the source code where the program is exiting (before &quot;initial
</span><br>
<span class="quotelev1">&gt; socket setup ...done&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; intGPICommSoc::init(MPI_Comm comm0) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* setup basic MPI information */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      init_comm(comm0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_Barrier(comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*-- start inisock and set serveradd[] array --*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(me == 0) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          fprintf(stdout,&quot;initial socket setup ...start\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          fflush(stdout);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // create the initial socket
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      inisock = new_server_socket(NULL,0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // fill and gather the serveraddr array
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; intszsock = sizeof(SOCKADDR);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      memset(&amp;serveraddr[0],0, szsock*nproc);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; intiniport=get_sockport(inisock);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      set_sockaddr_byhname(NULL, iniport, &amp;serveraddr[me]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //printsockaddr( serveraddr[me] );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      SOCKADDR addrsend = serveraddr[me];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_Allgather(&amp;addrsend,szsock,MPI_BYTE,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    &amp;serveraddr[0], szsock,MPI_BYTE, comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(me == 0) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         fprintf(stdout,&quot;initial socket setup ...done \n&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      fflush(stdout);}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't write this part of the program and I'm really a novice to MPI -
</span><br>
<span class="quotelev1">&gt; but it seems like the initial execution of the program isn't freeing up
</span><br>
<span class="quotelev1">&gt; some system resource as it should.  Is there something that needs to be
</span><br>
<span class="quotelev1">&gt; corrected in the code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 5:12 PM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My application uses MPI to run parallel jobs on a single node, so I have
</span><br>
<span class="quotelev1">&gt; no need of any support for communication between nodes.  However, when I
</span><br>
<span class="quotelev1">&gt; use mpirun to launch my application I see strange errors such as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No network interfaces were found for out-of-band communications. We require
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at least one available network for out-of-band messaging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP
</span><br>
<span class="quotelev1">&gt; socket for out-of-band communications in file oob_tcp_listener.c at line 113
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP
</span><br>
<span class="quotelev1">&gt; socket for out-of-band communications in file oob_tcp_component.c at
</span><br>
<span class="quotelev1">&gt; line 584
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    orte_oob_base_select failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(+0xfeaa9)[0x2b77e9de5aa9]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(ompi_btl_openib_connect_base_select_for_local_port+0xd0)[0x2b77e9de13a0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems like in each case, OpenMPI is trying to use some feature
</span><br>
<span class="quotelev1">&gt; related to networking and crashing as a result.  My workaround is to
</span><br>
<span class="quotelev1">&gt; deduce the components that are crashing and disable them in my
</span><br>
<span class="quotelev1">&gt; environment variables like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_btl=self,sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_oob=^tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better way to do this - i.e. explicitly prohibit OpenMPI from
</span><br>
<span class="quotelev1">&gt; using any network-related feature and run only on the local node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25410.php">http://www.open-mpi.org/community/lists/users/2014/09/25410.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25411.php">http://www.open-mpi.org/community/lists/users/2014/09/25411.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25412.php">http://www.open-mpi.org/community/lists/users/2014/09/25412.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25413.php">http://www.open-mpi.org/community/lists/users/2014/09/25413.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25419.php">http://www.open-mpi.org/community/lists/users/2014/09/25419.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25420.php">http://www.open-mpi.org/community/lists/users/2014/09/25420.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25421.php">http://www.open-mpi.org/community/lists/users/2014/09/25421.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25422.php">http://www.open-mpi.org/community/lists/users/2014/09/25422.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25428.php">http://www.open-mpi.org/community/lists/users/2014/10/25428.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25430.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25428.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>In reply to:</strong> <a href="25428.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25430.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Reply:</strong> <a href="25430.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
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
