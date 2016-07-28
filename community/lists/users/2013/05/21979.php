<?
$subject_val = "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 29 10:45:01 2013" -->
<!-- isoreceived="20130529144501" -->
<!-- sent="Wed, 29 May 2013 16:31:52 +0200 (CEST)" -->
<!-- isosent="20130529143152" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs" -->
<!-- id="201305291431.r4TEVqZX018437_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-29 10:31:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21980.php">Elken, Tom: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="21978.php">Ralph Castain: "Re: [OMPI users] Question on building OpenMPI with support for memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="21956.php">Siegmar Gross: "[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Reply:</strong> <a href="21982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p><span class="quotelev1">&gt; Could you please clarify - are you mixing 32 and 64 bit versions
</span><br>
<span class="quotelev1">&gt; in your runs that have a problem?
</span><br>
<p>No, I have four different versions on each machine.
<br>
<p>tyr fd1026 1250 ls -ld /usr/local/openmpi-1.6.5_*
<br>
drwxr-xr-x 7 root root 512 May 23 14:00 /usr/local/openmpi-1.6.5_32_cc
<br>
drwxr-xr-x 7 root root 512 May 23 13:55 /usr/local/openmpi-1.6.5_32_gcc
<br>
drwxr-xr-x 7 root root 512 May 23 10:12 /usr/local/openmpi-1.6.5_64_cc
<br>
drwxr-xr-x 7 root root 512 May 23 12:21 /usr/local/openmpi-1.6.5_64_gcc
<br>
<p>&quot;/usr/local&quot; is a link to machine specific files on a NFS server.
<br>
<p>lrwxrwxrwx 1 root root 25 Jan 10 07:47 local -&gt; /export2/prog/SunOS_sparc
<br>
lrwxrwxrwx 1 root root 26 Oct  5  2012 local -&gt; /export2/prog/SunOS_x86_64
<br>
...
<br>
<p>I can choose a package in my file &quot;$HOME/.cshrc&quot;.
<br>
<p>tyr fd1026 1251 more .cshrc
<br>
...
<br>
#set MPI = openmpi-1.6.5_32_cc
<br>
#set MPI = openmpi-1.6.5_32_gcc
<br>
#set MPI = openmpi-1.6.5_64_cc
<br>
#set MPI = openmpi-1.6.5_64_gcc
<br>
...
<br>
source /opt/global/cshrc
<br>
...
<br>
<p><p>&quot;/opt/global/cshrc&quot; determines the processor architecture and operating
<br>
system and calls package specific initialization files.
<br>
<p>tyr fd1026 1258 more /opt/global/mpi.csh 
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case openmpi-1.6.5_32_cc:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case openmpi-1.6.5_32_gcc:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case openmpi-1.6.5_64_cc:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case openmpi-1.6.5_64_gcc:
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (($MPI == openmpi-1.7_32_cc) || ($MPI == openmpi-1.9_32_cc) || \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;($MPI == ompi-java_32_cc) || ($MPI == ompi-java_32_gcc) || \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;($MPI == openmpi-1.7_32_gcc) || ($MPI == openmpi-1.9_32_gcc)) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($JDK != jdk1.7.0_07-32) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot; &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;In '${MPI}' funktioniert 'mpijavac' nur mit&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;'jdk1.7.0_07-32'. Waehlen Sie bitte das entsprechende&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Paket in der Datei '${HOME}/.cshrc' aus und melden Sie&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;sich ab und wieder an, wenn Sie 'mpiJava' benutzen&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;wollen.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot; &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setenv OPENMPI_HOME  ${DIRPREFIX_PROG}/$MPI
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set path = ( $path ${OPENMPI_HOME}/bin )
<br>
...
<br>
<p>Sorry for the german message in my shell script, but mpi.csh sets
<br>
all necessary environment variables for the selected package. I
<br>
must logout and login again, if I select a different package in
<br>
&quot;$HOME/.cshrc&quot;, so that I never mix environments for different
<br>
packages, because my home directory and &quot;/opt/global&quot; are the
<br>
same on all machines (they are provided via an NFS server).
<br>
<p><p><span class="quotelev1">&gt; If that isn't the case, then the error message is telling you that
</span><br>
<span class="quotelev1">&gt; the system thinks you are mixing optimized and debug versions -
</span><br>
<span class="quotelev1">&gt; i.e., one node is using an optimized version of OMPI and another
</span><br>
<span class="quotelev1">&gt; is using a debug version. This also isn't allowed.
</span><br>
<p>I build my packages with copy-paste from a file. All configure
<br>
commands use &quot;--enable-debug&quot; (three different architectures with
<br>
two different compilers each).
<br>
<p>tyr openmpi-1.6.5 1263 grep -- enable-debug README-OpenMPI-1.6.5 
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
tyr openmpi-1.6.5 1264 
<br>
<p><p><span class="quotelev1">&gt; If you check and find those two conditions are okay, then I suspect
</span><br>
<span class="quotelev1">&gt; you are hitting the Solaris &quot;bit rot&quot; problem that we've talked
</span><br>
<span class="quotelev1">&gt; about before - and are unlikely to be able to fix any time soon.
</span><br>
<p>sunpc1 hello_1 113 mpiexec -mca btl ^udapl -np 4 -host sunpc1 hello_1_mpi
<br>
Process 2 of 4 running on sunpc1
<br>
...
<br>
<p><p>sunpc1 hello_1 114 mpiexec -mca btl ^udapl -np 4 -host linpc1 hello_1_mpi
<br>
[sunpc1:05035] [[4165,0],0] ORTE_ERROR_LOG: Buffer type (described vs 
<br>
non-described) mismatch - operation not allowed in file 
<br>
../../../../../openmpi-1.6.5a1r28554/orte/mca/grpcomm/bad/grpcomm_bad_module.c 
<br>
at line 841
<br>
^Cmpiexec: killing job...
<br>
<p><p>I get the following table, if I use every machine as local machine
<br>
and run my command on one of my hosts.
<br>
<p><p>local machine                | -host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| sunpc1 | linpc1 | rs1
<br>
-----------------------------+--------+--------+-------
<br>
sunpc1 (Solaris 10, x86_64)  | ok     | hangs  | hangs
<br>
linpc1 (Solaris 10, x86_64)  | hangs  | ok     | ok
<br>
rs1    (Solaris 10, sparc)   | hangs  | ok     | ok
<br>
<p><p><p>It seems that I have a problem with Solaris x86_64 and gcc-4.8.0,
<br>
if I use a 64-bit version of Open MPI. I have no problems with
<br>
Sun C and a 64-bit version of Open MPI or any 32-bit version of
<br>
Open MPI. Do you have any idea, what I can do to track the problem
<br>
and to get a solution?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On May 24, 2013, at 12:02 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I installed openmpi-1.6.5a1r28554 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
</span><br>
<span class="quotelev2">&gt; &gt; x86_64&quot;, and &quot;Solaris 10 sparc&quot; with gcc-4.8.0 and &quot;Sun C 5.12&quot; in 32-
</span><br>
<span class="quotelev2">&gt; &gt; and 64-bit versions. Unfortunately I have a problem with the 64-bit
</span><br>
<span class="quotelev2">&gt; &gt; version, if I build Open MPI with gcc. The program hangs and I have
</span><br>
<span class="quotelev2">&gt; &gt; to terminate it with &lt;Ctrl-c&gt;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 hello_1 144 mpiexec -mca btl ^udapl -np 4 \
</span><br>
<span class="quotelev2">&gt; &gt;  -host sunpc1,linpc1,rs0 hello_1_mpi
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:15576] [[16182,0],0] ORTE_ERROR_LOG: Buffer type (described vs
</span><br>
<span class="quotelev2">&gt; &gt;  non-described) mismatch - operation not allowed in file
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
../../../../../openmpi-1.6.5a1r28554/orte/mca/grpcomm/bad/grpcomm_bad_module.c
<br>
<span class="quotelev2">&gt; &gt;  at line 841
</span><br>
<span class="quotelev2">&gt; &gt; ^Cmpiexec: killing job...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 hello_1 145 which mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.6.5_64_gcc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 hello_1 146 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have no problems with the 64-bit version, if I compile Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; with Sun C. Both 32-bit versions (compiled with &quot;cc&quot; or &quot;gcc&quot;) work
</span><br>
<span class="quotelev2">&gt; &gt; as expectedas well.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 hello_1 106 mpiexec -mca btl ^udapl -np 4 \
</span><br>
<span class="quotelev2">&gt; &gt;  -host sunpc1,linpc1,rs0 hello_1_mpi
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 4 running on sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; Process 3 of 4 running on sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 4 running on linpc1
</span><br>
<span class="quotelev2">&gt; &gt; Now 3 slave tasks are sending greetings.
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from task 3:
</span><br>
<span class="quotelev2">&gt; &gt;  message type:        3
</span><br>
<span class="quotelev2">&gt; &gt;  msg length:          116 characters
</span><br>
<span class="quotelev2">&gt; &gt;  message:             
</span><br>
<span class="quotelev2">&gt; &gt;    hostname:          sunpc1
</span><br>
<span class="quotelev2">&gt; &gt;    operating system:  SunOS
</span><br>
<span class="quotelev2">&gt; &gt;    release:           5.10
</span><br>
<span class="quotelev2">&gt; &gt;    processor:         i86pc
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 hello_1 107 which mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.6.5_64_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 hello_1 106 mpiexec -mca btl ^udapl -np 4 \
</span><br>
<span class="quotelev2">&gt; &gt;  -host sunpc1,linpc1,rs0 hello_1_mpi
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 3 of 4 running on sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 4 running on sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 4 running on linpc1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 hello_1 107 which mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.6.5_32_gcc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful, if somebody can fix the problem for the
</span><br>
<span class="quotelev2">&gt; &gt; 64-bit version with gcc. Thank you very much for any help in
</span><br>
<span class="quotelev2">&gt; &gt; advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21980.php">Elken, Tom: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="21978.php">Ralph Castain: "Re: [OMPI users] Question on building OpenMPI with support for memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="21956.php">Siegmar Gross: "[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Reply:</strong> <a href="21982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
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
