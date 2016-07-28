<?
$subject_val = "Re: [OMPI users] General question about running single-node jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 19:27:01 2014" -->
<!-- isoreceived="20141002232701" -->
<!-- sent="Thu, 2 Oct 2014 16:26:58 -0700" -->
<!-- isosent="20141002232658" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General question about running single-node jobs." -->
<!-- id="EE5AC76D-A9D4-42FA-AAE2-53E59156AFB4_at_stanford.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="542DA2EA.4090407_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 19:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25431.php">XingFENG: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>In reply to:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Thanks for the suggestions!  
<br>
<p>I know that QCSCRATCH and QCLOCALSCR are not the problem.  When I set QCSCRATCH=&quot;.&quot; and unset QCLOCALSCR it writes all the scratch files to the current directory, which is the behavior I want.  The environment variables are correctly passed in the mpirun command line.
<br>
<p>Since my jobs have a fair bit of I/O, I make sure to change to the locally mounted /tmp folder before running the calculations.  I do have permissions to write in there.  
<br>
<p>When I run jobs without OpenMPI they are stable on Blue Waters compute nodes, which suggests the issues are not due to the above.
<br>
<p>I compiled Q-Chem from the source code, so I built OpenMPI 1.8.3 first and added $OMPI/bin to my PATH (and $OMPI/lib to LD_LIBRARY_PATH).  I configured the Q-Chem build so it  properly uses &quot;mpicc&quot;, etc.  The environment variables for OpenMPI are correctly set at runtime.
<br>
<p>At this point, I think the main problem is a limitation on the networking in the compute nodes, and I believe Blue Waters support is currently working on this.  I'll make sure to send an update if anything happens.
<br>
<p>- Lee-Ping
<br>
<p>On Oct 2, 2014, at 12:09 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Lee-Ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Computational Chemistry is Greek to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, on pp. 12 of the Q-Chem manual 3.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (PDF online <a href="http://www.q-chem.com/qchem-website/doc_for_web/qchem_manual_3.2.pdf">http://www.q-chem.com/qchem-website/doc_for_web/qchem_manual_3.2.pdf</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there are explanations of the meaning of QCSCRATCH and
</span><br>
<span class="quotelev1">&gt; QLOCALSRC, etc, which as Ralph pointed out, seem to be a sticking point,
</span><br>
<span class="quotelev1">&gt; and showed up in the warning messages, which I enclose below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; QLOCALSRC specifies a local disk for IO.
</span><br>
<span class="quotelev1">&gt; I wonder if the node(s) is (are) diskless, and this might cause the problem.
</span><br>
<span class="quotelev1">&gt; Another possibility is that mpiexec may not be passing these
</span><br>
<span class="quotelev1">&gt; environment variables.
</span><br>
<span class="quotelev1">&gt; (Do you pass them in the mpiexec/mpirun command line?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; QCSCRATCH defines a directory for temporary files.
</span><br>
<span class="quotelev1">&gt; If this is a network shared directory, could it be that some nodes
</span><br>
<span class="quotelev1">&gt; are not mounting it correctly?
</span><br>
<span class="quotelev1">&gt; Likewise, if your home directory or your job run directory are not
</span><br>
<span class="quotelev1">&gt; mounted that could be a problem.
</span><br>
<span class="quotelev1">&gt; Or maybe you don't have write permission (sometimes this
</span><br>
<span class="quotelev1">&gt; happens in /tmp, specially if it is a ramdir/tmpdir, which may also have a small size).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your BlueWaters system administrator may be able to shed some light on these things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also the Q-Chem manual says it is a pre-compiled executable,
</span><br>
<span class="quotelev1">&gt; which as far as I know would require a matching version of OpenMPI.
</span><br>
<span class="quotelev1">&gt; (Ralph, please correct me if I am wrong.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, you seem to have the source code, at least you sent a
</span><br>
<span class="quotelev1">&gt; snippet of it. [With all those sockets being opened besides MPI ...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you recompile with OpenMPI?
</span><br>
<span class="quotelev1">&gt; Did you add the $OMPI/bin to PATH and $OMPI/lib to LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; and are these environment variables propagated to the job execution nodes (specially those that are failing)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, just a bunch of guesses ...
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *********************************************
</span><br>
<span class="quotelev1">&gt; QCSCRATCH Defines the directory in which
</span><br>
<span class="quotelev1">&gt; Q-Chem
</span><br>
<span class="quotelev1">&gt; will store temporary files.
</span><br>
<span class="quotelev1">&gt; Q-Chem
</span><br>
<span class="quotelev1">&gt; will usually remove these files on successful completion of t
</span><br>
<span class="quotelev1">&gt; he job, but they
</span><br>
<span class="quotelev1">&gt; can be saved, if so wished. Therefore,
</span><br>
<span class="quotelev1">&gt; QCSCRATCH
</span><br>
<span class="quotelev1">&gt; should not reside in
</span><br>
<span class="quotelev1">&gt; a directory that will be automatically removed at the end of a
</span><br>
<span class="quotelev1">&gt; job, if the
</span><br>
<span class="quotelev1">&gt; files are to be kept for further calculations.
</span><br>
<span class="quotelev1">&gt; Note that many of these files can be very large, and it should be
</span><br>
<span class="quotelev1">&gt; ensured that
</span><br>
<span class="quotelev1">&gt; the volume that contains this directory has sufficient disk sp
</span><br>
<span class="quotelev1">&gt; ace available.
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt; QCSCRATCH
</span><br>
<span class="quotelev1">&gt; directory should be periodically checked for scratch
</span><br>
<span class="quotelev1">&gt; files remaining from abnormally terminated jobs.
</span><br>
<span class="quotelev1">&gt; QCSCRATCH
</span><br>
<span class="quotelev1">&gt; defaults
</span><br>
<span class="quotelev1">&gt; to the working directory if not explicitly set. Please see se
</span><br>
<span class="quotelev1">&gt; ction 2.6 for
</span><br>
<span class="quotelev1">&gt; details on saving temporary files and consult your systems ad
</span><br>
<span class="quotelev1">&gt; ministrator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; QCLOCALSCR On certain platforms, such as Linux clusters, it
</span><br>
<span class="quotelev1">&gt; is sometimes preferable to
</span><br>
<span class="quotelev1">&gt; write the temporary files to a disk local to the node.
</span><br>
<span class="quotelev1">&gt; QCLOCALSCR
</span><br>
<span class="quotelev1">&gt; spec-
</span><br>
<span class="quotelev1">&gt; ifies this directory. The temporary files will be copied to
</span><br>
<span class="quotelev1">&gt; QCSCRATCH
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; the end of the job, unless the job is terminated abnormally. I
</span><br>
<span class="quotelev1">&gt; n such cases
</span><br>
<span class="quotelev1">&gt; Q-Chem
</span><br>
<span class="quotelev1">&gt; will attempt to remove the files in
</span><br>
<span class="quotelev1">&gt; QCLOCALSCR
</span><br>
<span class="quotelev1">&gt; , but may not
</span><br>
<span class="quotelev1">&gt; be able to due to access restrictions. Please specify this va
</span><br>
<span class="quotelev1">&gt; riable only if
</span><br>
<span class="quotelev1">&gt; required
</span><br>
<span class="quotelev1">&gt; *********************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/02/2014 02:08 PM, Lee-Ping Wang wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;ve been troubleshooting this issue and communicating with Blue Waters
</span><br>
<span class="quotelev2">&gt;&gt; support.  It turns out that Q-Chem and OpenMPI are both trying to open
</span><br>
<span class="quotelev2">&gt;&gt; sockets, and I get different error messages depending on which one fails.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As an aside, I don&#146;t know why Q-Chem needs sockets of its own to
</span><br>
<span class="quotelev2">&gt;&gt; communicate between ranks; shouldn&#146;t OpenMPI be taking care of all
</span><br>
<span class="quotelev2">&gt;&gt; that?  (I&#146;m unfamiliar with this part of the Q-Chem code base, maybe
</span><br>
<span class="quotelev2">&gt;&gt; it&#146;s trying to duplicate some functionality?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The Blue Waters support has indicated that there&#146;s a problem with their
</span><br>
<span class="quotelev2">&gt;&gt; realm-specific IP addressing (RSIP) for the compute nodes, which they&#146;re
</span><br>
<span class="quotelev2">&gt;&gt; working on fixing.  I also tried running the same Q-Chem / OpenMPI job
</span><br>
<span class="quotelev2">&gt;&gt; on a management node which I think has the same hardware (but not the
</span><br>
<span class="quotelev2">&gt;&gt; RSIP), and the problem went away.  So I think I&#146;ll shelve this problem
</span><br>
<span class="quotelev2">&gt;&gt; for now, until Blue Waters support gets back to me with the fix. :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *From:*users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; Wang
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Tuesday, September 30, 2014 1:15 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* Re: [OMPI users] General question about running single-node jobs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.  I'll add some print statements to the code and try to figure
</span><br>
<span class="quotelev2">&gt;&gt; out precisely where the failure is happening.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2014, at 12:06 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2014, at 11:19 AM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;          If so, then I should be able to (1) locate where the port
</span><br>
<span class="quotelev2">&gt;&gt;        number is defined in the code, and (2) randomize the port number
</span><br>
<span class="quotelev2">&gt;&gt;        every time it's called to work around the issue.  What do you think?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    That might work, depending on the code. I'm not sure what it is
</span><br>
<span class="quotelev2">&gt;&gt;    trying to connect to, and if that code knows how to handle arbitrary
</span><br>
<span class="quotelev2">&gt;&gt;    connections
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The main reason why Q-Chem is using MPI is for executing parallel tasks
</span><br>
<span class="quotelev2">&gt;&gt; on a single node.  Thus, I think it's just the MPI ranks attempting to
</span><br>
<span class="quotelev2">&gt;&gt; connect with each other on the same machine.  This could be off the mark
</span><br>
<span class="quotelev2">&gt;&gt; because I'm still a novice with respect to MPI concepts - but I am sure
</span><br>
<span class="quotelev2">&gt;&gt; it is just one machine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your statement doesn't match what you sent us - you showed that it was
</span><br>
<span class="quotelev2">&gt;&gt; your connection code that was failing, not ours. You wouldn't have
</span><br>
<span class="quotelev2">&gt;&gt; gotten that far if our connections failed as you would have failed in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init. You are clearly much further than that as you already passed
</span><br>
<span class="quotelev2">&gt;&gt; an MPI_Barrier before reaching the code in question.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    You might check about those warnings - could be that QCLOCALSCR and
</span><br>
<span class="quotelev2">&gt;&gt;    QCREF need to be set for the code to work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks; I don't think these environment variables are the issue but I
</span><br>
<span class="quotelev2">&gt;&gt; will check again.  The calculation runs without any problems on four
</span><br>
<span class="quotelev2">&gt;&gt; different clusters (where I don't set these environment variables
</span><br>
<span class="quotelev2">&gt;&gt; either), it's only broken on the Blue Waters compute node.  Also, the
</span><br>
<span class="quotelev2">&gt;&gt; calculation runs without any problems the first time it's executed on
</span><br>
<span class="quotelev2">&gt;&gt; the BW compute node - it's only subsequent executions that give the
</span><br>
<span class="quotelev2">&gt;&gt; error messages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2014, at 11:05 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2014, at 10:49 AM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.  I think your diagnosis is probably correct.  Are these
</span><br>
<span class="quotelev2">&gt;&gt; sockets the same as TCP/UDP ports (though different numbers) that are
</span><br>
<span class="quotelev2">&gt;&gt; used in web servers, email etc?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  If so, then I should be able to (1) locate where the port number is
</span><br>
<span class="quotelev2">&gt;&gt; defined in the code, and (2) randomize the port number every time it's
</span><br>
<span class="quotelev2">&gt;&gt; called to work around the issue.  What do you think?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That might work, depending on the code. I'm not sure what it is trying
</span><br>
<span class="quotelev2">&gt;&gt; to connect to, and if that code knows how to handle arbitrary connections
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might check about those warnings - could be that QCLOCALSCR and
</span><br>
<span class="quotelev2">&gt;&gt; QCREF need to be set for the code to work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2014, at 8:45 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know anything about your application, or what the functions in
</span><br>
<span class="quotelev2">&gt;&gt; your code are doing. I imagine it's possible that you are trying to open
</span><br>
<span class="quotelev2">&gt;&gt; statically defined ports, which means that running the job again too
</span><br>
<span class="quotelev2">&gt;&gt; soon could leave the OS thinking the socket is already busy. It takes
</span><br>
<span class="quotelev2">&gt;&gt; awhile for the OS to release a socket resource.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2014, at 5:49 PM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's another data point that might be useful: The error message is
</span><br>
<span class="quotelev2">&gt;&gt; much more rare if I run my application on 4 cores instead of 8.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2014, at 5:38 PM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for my last email - I think I spoke too quick.  I realized after
</span><br>
<span class="quotelev2">&gt;&gt; reading some more documentation that OpenMPI always uses TCP sockets for
</span><br>
<span class="quotelev2">&gt;&gt; out-of-band communication, so it doesn't make sense for me to set
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_oob=^tcp.  That said, I am still running into a strange problem
</span><br>
<span class="quotelev2">&gt;&gt; in my application when running on a specific machine (Blue Waters
</span><br>
<span class="quotelev2">&gt;&gt; compute node); I don't see this problem on any other nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I run the same job (~5 seconds) in rapid succession, I see the
</span><br>
<span class="quotelev2">&gt;&gt; following error message on the second execution:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/leeping/opt/qchem-4.2/bin/parallel.csh,  , qcopt_reactants.in, 8,
</span><br>
<span class="quotelev2">&gt;&gt; 0, ./qchem24825/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPIRUN in parallel.csh is
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/leeping/opt/qchem-4.2/ext-libs/openmpi/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P4_RSHCOMMAND in parallel.csh is ssh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; QCOUTFILE is stdout
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Q-Chem machineFile is /tmp/leeping/opt/qchem-4.2/bin/mpi/machines
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nid15081:24859] Warning: could not find environment variable &quot;QCLOCALSCR&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nid15081:24859] Warning: could not find environment variable &quot;QCREF&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; initial socket setup ...start
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev2">&gt;&gt; thus causing
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Process name: [[46773,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And here's the source code where the program is exiting (before &quot;initial
</span><br>
<span class="quotelev2">&gt;&gt; socket setup ...done&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; intGPICommSoc::init(MPI_Comm comm0) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* setup basic MPI information */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     init_comm(comm0);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Barrier(comm);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /*-- start inisock and set serveradd[] array --*/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if(me == 0) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         fprintf(stdout,&quot;initial socket setup ...start\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; // create the initial socket
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     inisock = new_server_socket(NULL,0);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; // fill and gather the serveraddr array
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; intszsock = sizeof(SOCKADDR);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     memset(&amp;serveraddr[0],0, szsock*nproc);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; intiniport=get_sockport(inisock);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     set_sockaddr_byhname(NULL, iniport, &amp;serveraddr[me]);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; //printsockaddr( serveraddr[me] );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     SOCKADDR addrsend = serveraddr[me];
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Allgather(&amp;addrsend,szsock,MPI_BYTE,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                   &amp;serveraddr[0], szsock,MPI_BYTE, comm);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if(me == 0) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        fprintf(stdout,&quot;initial socket setup ...done \n&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     fflush(stdout);}
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I didn't write this part of the program and I'm really a novice to MPI -
</span><br>
<span class="quotelev2">&gt;&gt; but it seems like the initial execution of the program isn't freeing up
</span><br>
<span class="quotelev2">&gt;&gt; some system resource as it should.  Is there something that needs to be
</span><br>
<span class="quotelev2">&gt;&gt; corrected in the code?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2014, at 5:12 PM, Lee-Ping Wang &lt;leeping_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:leeping_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My application uses MPI to run parallel jobs on a single node, so I have
</span><br>
<span class="quotelev2">&gt;&gt; no need of any support for communication between nodes.  However, when I
</span><br>
<span class="quotelev2">&gt;&gt; use mpirun to launch my application I see strange errors such as:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No network interfaces were found for out-of-band communications. We require
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; at least one available network for out-of-band messaging.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP
</span><br>
<span class="quotelev2">&gt;&gt; socket for out-of-band communications in file oob_tcp_listener.c at line 113
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP
</span><br>
<span class="quotelev2">&gt;&gt; socket for out-of-band communications in file oob_tcp_component.c at
</span><br>
<span class="quotelev2">&gt;&gt; line 584
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   orte_oob_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(+0xfeaa9)[0x2b77e9de5aa9]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(ompi_btl_openib_connect_base_select_for_local_port+0xd0)[0x2b77e9de13a0]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems like in each case, OpenMPI is trying to use some feature
</span><br>
<span class="quotelev2">&gt;&gt; related to networking and crashing as a result.  My workaround is to
</span><br>
<span class="quotelev2">&gt;&gt; deduce the components that are crashing and disable them in my
</span><br>
<span class="quotelev2">&gt;&gt; environment variables like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_btl=self,sm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_oob=^tcp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a better way to do this - i.e. explicitly prohibit OpenMPI from
</span><br>
<span class="quotelev2">&gt;&gt; using any network-related feature and run only on the local node?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25410.php">http://www.open-mpi.org/community/lists/users/2014/09/25410.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25411.php">http://www.open-mpi.org/community/lists/users/2014/09/25411.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25412.php">http://www.open-mpi.org/community/lists/users/2014/09/25412.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25413.php">http://www.open-mpi.org/community/lists/users/2014/09/25413.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25419.php">http://www.open-mpi.org/community/lists/users/2014/09/25419.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25420.php">http://www.open-mpi.org/community/lists/users/2014/09/25420.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25421.php">http://www.open-mpi.org/community/lists/users/2014/09/25421.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25422.php">http://www.open-mpi.org/community/lists/users/2014/09/25422.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25428.php">http://www.open-mpi.org/community/lists/users/2014/10/25428.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25429.php">http://www.open-mpi.org/community/lists/users/2014/10/25429.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25431.php">XingFENG: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>In reply to:</strong> <a href="25429.php">Gus Correa: "Re: [OMPI users] General question about running single-node jobs."</a>
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
