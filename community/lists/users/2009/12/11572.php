<?
$subject_val = "Re: [OMPI users] About openmpi-mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 09:41:21 2009" -->
<!-- isoreceived="20091217144121" -->
<!-- sent="Thu, 17 Dec 2009 14:40:32 -0000" -->
<!-- isosent="20091217144032" -->
<!-- name="Min Zhu" -->
<!-- email="min.zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About openmpi-mpirun" -->
<!-- id="64102FE81CF56640B4AE9EEF9B0026F5818C00_at_kl-exc-001.res.lan" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AB45E2D9-92E5-4D63-AE2B-167B9A065487_at_cisco.com" -->
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
<strong>Date:</strong> 2009-12-17 09:40:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11573.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11573.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11573.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11581.php">Ashley Pittman: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Jeff,
<br>
<p>Thanks. For bsub -e ERR -o OUT -n 16 openmpi-mpirun /bin/sh -c &quot;ulimit
<br>
-s unlimited; ./wrf.exe&quot;, I tried and wrf.exe doesn't executed.
<br>
<p>Here is the content of openmpi-mpirun file, so maybe something needs to
<br>
be changed?
<br>
<p>----------------------------------------------
<br>
#!/bin/sh
<br>
#
<br>
#  Copyright (c) 2007 Platform Computing
<br>
#
<br>
# This script is a wrapper for openmpi mpirun
<br>
# it generates the machine file based on the hosts
<br>
# given to it by Lava.
<br>
#
<br>
<p>usage() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &lt;&lt;USEEOF
<br>
USAGE:  $0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This command is a wrapper for mpirun (openmpi).  It can
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;only be run within Lava using bsub e.g.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bsub -n # &quot;$0 -np # {my mpi command and args}&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The wrapper will automatically generate the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;machinefile used by mpirun.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOTE:  The list of hosts cannot exceed 4KBytes.
<br>
USEEOF
<br>
}
<br>
<p>if [ x&quot;${LSB_JOBFILENAME}&quot; = x -o x&quot;${LSB_HOSTS}&quot; = x ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;usage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit -1
<br>
fi
<br>
<p>MYARGS=$*
<br>
WORKDIR=`dirname ${LSB_JOBFILENAME}`
<br>
MACHFILE=${WORKDIR}/mpi_machines
<br>
ARGLIST=${WORKDIR}/mpi_args
<br>
<p># Check if mpirun is in the PATH
<br>
T=`which mpirun`
<br>
if [ $? -ne 0 ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Error:  mpirun is not in your PATH.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit -2
<br>
fi
<br>
<p>echo &quot;${MYARGS}&quot; &gt; ${ARGLIST}
<br>
T=`grep -- -machinefile ${ARGLIST} |wc -l`
<br>
if [ $T -gt 0 ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Error:  Do not provide the machinefile for mpirun.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;        It is generated automatically for you.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit -3
<br>
fi
<br>
<p># Make the open-mpi machine file
<br>
echo &quot;${LSB_HOSTS}&quot; &gt; ${MACHFILE}.lst
<br>
tr '\/ ' '\r\n' &lt; ${MACHFILE}.lst &gt; ${MACHFILE}
<br>
<p>MPIRUN=`which --skip-alias mpirun`
<br>
${MPIRUN} -x LD_LIBRARY_PATH -machinefile ${MACHFILE} ${MYARGS}
<br>
<p>exit $?
<br>
<p>----------------------------------------------
<br>
<p><p>Cheers,
<br>
<p>Min Zhu
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: 17 December 2009 14:29
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] About openmpi-mpirun
<br>
<p>On Dec 17, 2009, at 9:15 AM, Min Zhu wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply. Yes, your mpirun command works for me. But I
</span><br>
need to use bsub job scheduler. I wonder why
<br>
<span class="quotelev1">&gt; bsub -e ERR -o OUT -n 16 openmpi-mpirun &quot;/bin/sh -c ulimit -s
</span><br>
unlimited; ./wrf.exe&quot; doesn't work.
<br>
<p>Try with different quoting...?  I don't know the details of the
<br>
openmpi-mpirun script, but perhaps it's trying to exec the whole quoted
<br>
string as a single executable (which doesn't exist).  Perhaps:
<br>
<p>bsub -e ERR -o OUT -n 16 openmpi-mpirun /bin/sh -c &quot;ulimit -s unlimited;
<br>
./wrf.exe&quot;
<br>
<p>That's a (somewhat educated) guess...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only.  If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited.  Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11573.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11573.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11573.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11581.php">Ashley Pittman: "Re: [OMPI users] About openmpi-mpirun"</a>
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
