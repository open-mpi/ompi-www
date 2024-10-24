<?
$subject_val = "Re: [OMPI users] About openmpi-mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 10:42:23 2009" -->
<!-- isoreceived="20091217154223" -->
<!-- sent="Thu, 17 Dec 2009 15:41:49 -0000" -->
<!-- isosent="20091217154149" -->
<!-- name="Min Zhu" -->
<!-- email="min.zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About openmpi-mpirun" -->
<!-- id="64102FE81CF56640B4AE9EEF9B0026F5818C41_at_kl-exc-001.res.lan" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="dad39cd60912170733q560f25b9lb1a2d6122a38e11c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] About openmpi-mpirun<br>
<strong>From:</strong> Min Zhu (<em>min.zhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 10:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11578.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11576.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11576.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11578.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11578.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Jeroen,
<br>
<p>Thanks for your reply. I tried the command bsub -e ERR -o OUT -n 16 &quot;openmpi-mpirun /bin/sh -c 'ulimit -s unlimited; ./wrf.exe ' &quot; and wrf.exe not executed. 
<br>
<p>Cheers,
<br>
<p>Min Zhu
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeroen Kleijer
<br>
Sent: 17 December 2009 15:34
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] About openmpi-mpirun
<br>
<p>It's just that the &quot;'s on the command line get parsed by LSF / bash
<br>
(or whatever shell you use)
<br>
<p>If you wish to use it without the script you can give this a try:
<br>
bsub -e ERR -o OUT -n 16 &quot;openmpi-mpirun /bin/sh -c 'ulimit -s
<br>
unlimited; ./wrf.exe ' &quot;
<br>
<p>This causes to pass the whole string &quot;openmpi-mpirun ....&quot; to be
<br>
passed as a single string / command to LSF.
<br>
The second line between the single quotes is then passed as a single
<br>
argument to /bin/sh which is run by openmpi-mpirun.
<br>
<p>Kind regards,
<br>
<p>Jeroen Kleijer
<br>
<p>On Thu, Dec 17, 2009 at 4:03 PM, Min Zhu &lt;min.zhu_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi, Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your script method works for me. Thank you very much,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Min Zhu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: 17 December 2009 14:56
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] About openmpi-mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might be something you need to talk to Platform about...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another option would be to openmpi-mpirun a script that is just a few
</span><br>
<span class="quotelev1">&gt; lines long:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; ulimit -s unlimited
</span><br>
<span class="quotelev1">&gt; ./wrf.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2009, at 9:40 AM, Min Zhu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks. For bsub -e ERR -o OUT -n 16 openmpi-mpirun /bin/sh -c &quot;ulimit
</span><br>
<span class="quotelev2">&gt;&gt; -s unlimited; ./wrf.exe&quot;, I tried and wrf.exe doesn't executed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the content of openmpi-mpirun file, so maybe something needs
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; be changed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # &#160;Copyright (c) 2007 Platform Computing
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # This script is a wrapper for openmpi mpirun
</span><br>
<span class="quotelev2">&gt;&gt; # it generates the machine file based on the hosts
</span><br>
<span class="quotelev2">&gt;&gt; # given to it by Lava.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; usage() {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; cat &lt;&lt;USEEOF
</span><br>
<span class="quotelev2">&gt;&gt; USAGE: &#160;$0
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; This command is a wrapper for mpirun (openmpi). &#160;It can
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; only be run within Lava using bsub e.g.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; bsub -n # &quot;$0 -np # {my mpi command and args}&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; The wrapper will automatically generate the
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; machinefile used by mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; NOTE: &#160;The list of hosts cannot exceed 4KBytes.
</span><br>
<span class="quotelev2">&gt;&gt; USEEOF
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if [ x&quot;${LSB_JOBFILENAME}&quot; = x -o x&quot;${LSB_HOSTS}&quot; = x ]; then
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; usage
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; exit -1
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MYARGS=$*
</span><br>
<span class="quotelev2">&gt;&gt; WORKDIR=`dirname ${LSB_JOBFILENAME}`
</span><br>
<span class="quotelev2">&gt;&gt; MACHFILE=${WORKDIR}/mpi_machines
</span><br>
<span class="quotelev2">&gt;&gt; ARGLIST=${WORKDIR}/mpi_args
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Check if mpirun is in the PATH
</span><br>
<span class="quotelev2">&gt;&gt; T=`which mpirun`
</span><br>
<span class="quotelev2">&gt;&gt; if [ $? -ne 0 ]; then
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; echo &quot;Error: &#160;mpirun is not in your PATH.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; exit -2
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;${MYARGS}&quot; &gt; ${ARGLIST}
</span><br>
<span class="quotelev2">&gt;&gt; T=`grep -- -machinefile ${ARGLIST} |wc -l`
</span><br>
<span class="quotelev2">&gt;&gt; if [ $T -gt 0 ]; then
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; echo &quot;Error: &#160;Do not provide the machinefile for mpirun.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; echo &quot; &#160; &#160; &#160; &#160;It is generated automatically for you.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; exit -3
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Make the open-mpi machine file
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;${LSB_HOSTS}&quot; &gt; ${MACHFILE}.lst
</span><br>
<span class="quotelev2">&gt;&gt; tr '\/ ' '\r\n' &lt; ${MACHFILE}.lst &gt; ${MACHFILE}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPIRUN=`which --skip-alias mpirun`
</span><br>
<span class="quotelev2">&gt;&gt; ${MPIRUN} -x LD_LIBRARY_PATH -machinefile ${MACHFILE} ${MYARGS}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; exit $?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Min Zhu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 17 December 2009 14:29
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] About openmpi-mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 17, 2009, at 9:15 AM, Min Zhu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for your reply. Yes, your mpirun command works for me. But I
</span><br>
<span class="quotelev2">&gt;&gt; need to use bsub job scheduler. I wonder why
</span><br>
<span class="quotelev3">&gt;&gt; &gt; bsub -e ERR -o OUT -n 16 openmpi-mpirun &quot;/bin/sh -c ulimit -s
</span><br>
<span class="quotelev2">&gt;&gt; unlimited; ./wrf.exe&quot; doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try with different quoting...? &#160;I don't know the details of the
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-mpirun script, but perhaps it's trying to exec the whole
</span><br>
<span class="quotelev1">&gt; quoted
</span><br>
<span class="quotelev2">&gt;&gt; string as a single executable (which doesn't exist). &#160;Perhaps:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bsub -e ERR -o OUT -n 16 openmpi-mpirun /bin/sh -c &quot;ulimit -s
</span><br>
<span class="quotelev1">&gt; unlimited;
</span><br>
<span class="quotelev2">&gt;&gt; ./wrf.exe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's a (somewhat educated) guess...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CONFIDENTIALITY NOTICE: This e-mail, including any attachments,
</span><br>
<span class="quotelev1">&gt; contains information that may be confidential, and is protected by
</span><br>
<span class="quotelev1">&gt; copyright. It is directed to the intended recipient(s) only. &#160;If you
</span><br>
<span class="quotelev1">&gt; have received this e-mail in error please e-mail the sender by replying
</span><br>
<span class="quotelev1">&gt; to this message, and then delete the e-mail. Unauthorised disclosure,
</span><br>
<span class="quotelev1">&gt; publication, copying or use of this e-mail is prohibited. &#160;Any
</span><br>
<span class="quotelev1">&gt; communication of a personal nature in this e-mail is not made by or on
</span><br>
<span class="quotelev1">&gt; behalf of any RES group company. E-mails sent or received may be
</span><br>
<span class="quotelev1">&gt; monitored to ensure compliance with the law, regulation and/or our
</span><br>
<span class="quotelev1">&gt; policies.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only. &#160;If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited. &#160;Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only.  If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited.  Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11578.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11576.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11576.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11578.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11578.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
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
