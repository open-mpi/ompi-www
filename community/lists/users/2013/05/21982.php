<?
$subject_val = "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 29 17:29:31 2013" -->
<!-- isoreceived="20130529212931" -->
<!-- sent="Wed, 29 May 2013 21:29:26 +0000" -->
<!-- isosent="20130529212926" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F64A4F2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201305291431.r4TEVqZX018437_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-29 17:29:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21983.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Previous message:</strong> <a href="21981.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>In reply to:</strong> <a href="21979.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21988.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>I'm a bit confused by your final table:
<br>
<p><span class="quotelev1">&gt; local machine                | -host
</span><br>
<span class="quotelev1">&gt;                              | sunpc1 | linpc1 | rs1
</span><br>
<span class="quotelev1">&gt; -----------------------------+--------+--------+-------
</span><br>
<span class="quotelev1">&gt; sunpc1 (Solaris 10, x86_64)  | ok     | hangs  | hangs
</span><br>
<span class="quotelev1">&gt; linpc1 (Solaris 10, x86_64)  | hangs  | ok     | ok
</span><br>
<span class="quotelev1">&gt; rs1    (Solaris 10, sparc)   | hangs  | ok     | ok
</span><br>
<p>Is linpc1 a Linux machine or Solaris machine?
<br>
<p>Ralph and I talked about this on the phone, and it seems like sunpc1 is just wrong somehow -- it just doesn't jive with the error message you sent.
<br>
<p>Can you verify that all 3 versions were built exactly the same way (e.g., debug or not debug)?
<br>
<p><p><p>On May 29, 2013, at 10:31 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you please clarify - are you mixing 32 and 64 bit versions
</span><br>
<span class="quotelev2">&gt;&gt; in your runs that have a problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I have four different versions on each machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 1250 ls -ld /usr/local/openmpi-1.6.5_*
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x 7 root root 512 May 23 14:00 /usr/local/openmpi-1.6.5_32_cc
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x 7 root root 512 May 23 13:55 /usr/local/openmpi-1.6.5_32_gcc
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x 7 root root 512 May 23 10:12 /usr/local/openmpi-1.6.5_64_cc
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x 7 root root 512 May 23 12:21 /usr/local/openmpi-1.6.5_64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local&quot; is a link to machine specific files on a NFS server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root root 25 Jan 10 07:47 local -&gt; /export2/prog/SunOS_sparc
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root root 26 Oct  5  2012 local -&gt; /export2/prog/SunOS_x86_64
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can choose a package in my file &quot;$HOME/.cshrc&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 1251 more .cshrc
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; #set MPI = openmpi-1.6.5_32_cc
</span><br>
<span class="quotelev1">&gt; #set MPI = openmpi-1.6.5_32_gcc
</span><br>
<span class="quotelev1">&gt; #set MPI = openmpi-1.6.5_64_cc
</span><br>
<span class="quotelev1">&gt; #set MPI = openmpi-1.6.5_64_gcc
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; source /opt/global/cshrc
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/opt/global/cshrc&quot; determines the processor architecture and operating
</span><br>
<span class="quotelev1">&gt; system and calls package specific initialization files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 1258 more /opt/global/mpi.csh 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    case openmpi-1.6.5_32_cc:
</span><br>
<span class="quotelev1">&gt;    case openmpi-1.6.5_32_gcc:
</span><br>
<span class="quotelev1">&gt;    case openmpi-1.6.5_64_cc:
</span><br>
<span class="quotelev1">&gt;    case openmpi-1.6.5_64_gcc:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;      if (($MPI == openmpi-1.7_32_cc) || ($MPI == openmpi-1.9_32_cc) || \
</span><br>
<span class="quotelev1">&gt;          ($MPI == ompi-java_32_cc) || ($MPI == ompi-java_32_gcc) || \
</span><br>
<span class="quotelev1">&gt;          ($MPI == openmpi-1.7_32_gcc) || ($MPI == openmpi-1.9_32_gcc)) then
</span><br>
<span class="quotelev1">&gt;        if ($JDK != jdk1.7.0_07-32) then
</span><br>
<span class="quotelev1">&gt;          echo &quot; &quot;
</span><br>
<span class="quotelev1">&gt;          echo &quot;In '${MPI}' funktioniert 'mpijavac' nur mit&quot;
</span><br>
<span class="quotelev1">&gt;          echo &quot;'jdk1.7.0_07-32'. Waehlen Sie bitte das entsprechende&quot;
</span><br>
<span class="quotelev1">&gt;          echo &quot;Paket in der Datei '${HOME}/.cshrc' aus und melden Sie&quot;
</span><br>
<span class="quotelev1">&gt;          echo &quot;sich ab und wieder an, wenn Sie 'mpiJava' benutzen&quot;
</span><br>
<span class="quotelev1">&gt;          echo &quot;wollen.&quot;
</span><br>
<span class="quotelev1">&gt;          echo &quot; &quot;
</span><br>
<span class="quotelev1">&gt;        endif
</span><br>
<span class="quotelev1">&gt;      endif
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;      setenv OPENMPI_HOME  ${DIRPREFIX_PROG}/$MPI
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;      set path = ( $path ${OPENMPI_HOME}/bin )
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the german message in my shell script, but mpi.csh sets
</span><br>
<span class="quotelev1">&gt; all necessary environment variables for the selected package. I
</span><br>
<span class="quotelev1">&gt; must logout and login again, if I select a different package in
</span><br>
<span class="quotelev1">&gt; &quot;$HOME/.cshrc&quot;, so that I never mix environments for different
</span><br>
<span class="quotelev1">&gt; packages, because my home directory and &quot;/opt/global&quot; are the
</span><br>
<span class="quotelev1">&gt; same on all machines (they are provided via an NFS server).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If that isn't the case, then the error message is telling you that
</span><br>
<span class="quotelev2">&gt;&gt; the system thinks you are mixing optimized and debug versions -
</span><br>
<span class="quotelev2">&gt;&gt; i.e., one node is using an optimized version of OMPI and another
</span><br>
<span class="quotelev2">&gt;&gt; is using a debug version. This also isn't allowed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I build my packages with copy-paste from a file. All configure
</span><br>
<span class="quotelev1">&gt; commands use &quot;--enable-debug&quot; (three different architectures with
</span><br>
<span class="quotelev1">&gt; two different compilers each).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.6.5 1263 grep -- enable-debug README-OpenMPI-1.6.5 
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.6.5 1264 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you check and find those two conditions are okay, then I suspect
</span><br>
<span class="quotelev2">&gt;&gt; you are hitting the Solaris &quot;bit rot&quot; problem that we've talked
</span><br>
<span class="quotelev2">&gt;&gt; about before - and are unlikely to be able to fix any time soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 113 mpiexec -mca btl ^udapl -np 4 -host sunpc1 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on sunpc1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 hello_1 114 mpiexec -mca btl ^udapl -np 4 -host linpc1 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; [sunpc1:05035] [[4165,0],0] ORTE_ERROR_LOG: Buffer type (described vs 
</span><br>
<span class="quotelev1">&gt; non-described) mismatch - operation not allowed in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5a1r28554/orte/mca/grpcomm/bad/grpcomm_bad_module.c 
</span><br>
<span class="quotelev1">&gt; at line 841
</span><br>
<span class="quotelev1">&gt; ^Cmpiexec: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following table, if I use every machine as local machine
</span><br>
<span class="quotelev1">&gt; and run my command on one of my hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; local machine                | -host
</span><br>
<span class="quotelev1">&gt;                             |
</span><br>
<span class="quotelev1">&gt;                             | sunpc1 | linpc1 | rs1
</span><br>
<span class="quotelev1">&gt; -----------------------------+--------+--------+-------
</span><br>
<span class="quotelev1">&gt; sunpc1 (Solaris 10, x86_64)  | ok     | hangs  | hangs
</span><br>
<span class="quotelev1">&gt; linpc1 (Solaris 10, x86_64)  | hangs  | ok     | ok
</span><br>
<span class="quotelev1">&gt; rs1    (Solaris 10, sparc)   | hangs  | ok     | ok
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that I have a problem with Solaris x86_64 and gcc-4.8.0,
</span><br>
<span class="quotelev1">&gt; if I use a 64-bit version of Open MPI. I have no problems with
</span><br>
<span class="quotelev1">&gt; Sun C and a 64-bit version of Open MPI or any 32-bit version of
</span><br>
<span class="quotelev1">&gt; Open MPI. Do you have any idea, what I can do to track the problem
</span><br>
<span class="quotelev1">&gt; and to get a solution?
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 24, 2013, at 12:02 AM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed openmpi-1.6.5a1r28554 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64&quot;, and &quot;Solaris 10 sparc&quot; with gcc-4.8.0 and &quot;Sun C 5.12&quot; in 32-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 64-bit versions. Unfortunately I have a problem with the 64-bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version, if I build Open MPI with gcc. The program hangs and I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to terminate it with &lt;Ctrl-c&gt;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1 hello_1 144 mpiexec -mca btl ^udapl -np 4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -host sunpc1,linpc1,rs0 hello_1_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:15576] [[16182,0],0] ORTE_ERROR_LOG: Buffer type (described vs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-described) mismatch - operation not allowed in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5a1r28554/orte/mca/grpcomm/bad/grpcomm_bad_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at line 841
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^Cmpiexec: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1 hello_1 145 which mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.6.5_64_gcc/bin/mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1 hello_1 146 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no problems with the 64-bit version, if I compile Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Sun C. Both 32-bit versions (compiled with &quot;cc&quot; or &quot;gcc&quot;) work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as expectedas well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1 hello_1 106 mpiexec -mca btl ^udapl -np 4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -host sunpc1,linpc1,rs0 hello_1_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 2 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 of 4 running on sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 of 4 running on sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 of 4 running on linpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now 3 slave tasks are sending greetings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings from task 3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message type:        3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; msg length:          116 characters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message:             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   hostname:          sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   operating system:  SunOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   release:           5.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   processor:         i86pc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1 hello_1 107 which mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.6.5_64_cc/bin/mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1 hello_1 106 mpiexec -mca btl ^udapl -np 4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -host sunpc1,linpc1,rs0 hello_1_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 2 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 of 4 running on sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 of 4 running on sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 of 4 running on linpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1 hello_1 107 which mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.6.5_32_gcc/bin/mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would be grateful, if somebody can fix the problem for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64-bit version with gcc. Thank you very much for any help in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21983.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Previous message:</strong> <a href="21981.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>In reply to:</strong> <a href="21979.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21988.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
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
