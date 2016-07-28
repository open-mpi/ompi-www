<?
$subject_val = "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 24 10:12:53 2013" -->
<!-- isoreceived="20130524141253" -->
<!-- sent="Fri, 24 May 2013 07:12:46 -0700" -->
<!-- isosent="20130524141246" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs" -->
<!-- id="EA8667A2-42A1-4DF8-A90A-2130423EA7C7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201305240703.r4O72qeI020120_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-24 10:12:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21960.php">Ralph Castain: "Re: [OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>Previous message:</strong> <a href="21958.php">Siegmar Gross: "[OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>In reply to:</strong> <a href="21956.php">Siegmar Gross: "[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21979.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please clarify - are you mixing 32 and 64 bit versions in your runs that have a problem? If so, then I doubt that would work, so please check.
<br>
<p>If that isn't the case, then the error message is telling you that the system thinks you are mixing optimized and debug versions - i.e., one node is using an optimized version of OMPI and another is using a debug version. This also isn't allowed.
<br>
<p>If you check and find those two conditions are okay, then I suspect you are hitting the Solaris &quot;bit rot&quot; problem that we've talked about before - and are unlikely to be able to fix any time soon.
<br>
<p><p>On May 24, 2013, at 12:02 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.6.5a1r28554 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
</span><br>
<span class="quotelev1">&gt; x86_64&quot;, and &quot;Solaris 10 sparc&quot; with gcc-4.8.0 and &quot;Sun C 5.12&quot; in 32-
</span><br>
<span class="quotelev1">&gt; and 64-bit versions. Unfortunately I have a problem with the 64-bit
</span><br>
<span class="quotelev1">&gt; version, if I build Open MPI with gcc. The program hangs and I have
</span><br>
<span class="quotelev1">&gt; to terminate it with &lt;Ctrl-c&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 144 mpiexec -mca btl ^udapl -np 4 \
</span><br>
<span class="quotelev1">&gt;  -host sunpc1,linpc1,rs0 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; [sunpc1:15576] [[16182,0],0] ORTE_ERROR_LOG: Buffer type (described vs
</span><br>
<span class="quotelev1">&gt;  non-described) mismatch - operation not allowed in file
</span><br>
<span class="quotelev1">&gt;  ../../../../../openmpi-1.6.5a1r28554/orte/mca/grpcomm/bad/grpcomm_bad_module.c
</span><br>
<span class="quotelev1">&gt;  at line 841
</span><br>
<span class="quotelev1">&gt; ^Cmpiexec: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 145 which mpiexec
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.6.5_64_gcc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 146 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no problems with the 64-bit version, if I compile Open MPI
</span><br>
<span class="quotelev1">&gt; with Sun C. Both 32-bit versions (compiled with &quot;cc&quot; or &quot;gcc&quot;) work
</span><br>
<span class="quotelev1">&gt; as expectedas well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 106 mpiexec -mca btl ^udapl -np 4 \
</span><br>
<span class="quotelev1">&gt;  -host sunpc1,linpc1,rs0 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on linpc1
</span><br>
<span class="quotelev1">&gt; Now 3 slave tasks are sending greetings.
</span><br>
<span class="quotelev1">&gt; Greetings from task 3:
</span><br>
<span class="quotelev1">&gt;  message type:        3
</span><br>
<span class="quotelev1">&gt;  msg length:          116 characters
</span><br>
<span class="quotelev1">&gt;  message:             
</span><br>
<span class="quotelev1">&gt;    hostname:          sunpc1
</span><br>
<span class="quotelev1">&gt;    operating system:  SunOS
</span><br>
<span class="quotelev1">&gt;    release:           5.10
</span><br>
<span class="quotelev1">&gt;    processor:         i86pc
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 107 which mpiexec
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.6.5_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 106 mpiexec -mca btl ^udapl -np 4 \
</span><br>
<span class="quotelev1">&gt;  -host sunpc1,linpc1,rs0 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on linpc1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 107 which mpiexec
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.6.5_32_gcc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix the problem for the
</span><br>
<span class="quotelev1">&gt; 64-bit version with gcc. Thank you very much for any help in
</span><br>
<span class="quotelev1">&gt; advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<li><strong>Next message:</strong> <a href="21960.php">Ralph Castain: "Re: [OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>Previous message:</strong> <a href="21958.php">Siegmar Gross: "[OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>In reply to:</strong> <a href="21956.php">Siegmar Gross: "[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21979.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
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
