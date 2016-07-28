<?
$subject_val = "Re: [OMPI users] Question about openmpi and msc nastran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 09:58:30 2008" -->
<!-- isoreceived="20081020135830" -->
<!-- sent="Mon, 20 Oct 2008 06:57:53 -0700" -->
<!-- isosent="20081020135753" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about openmpi and msc nastran" -->
<!-- id="260B5BEEF399B143A0F6E5D1D73ED2311EFD41_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6c11f45e0810200621v7f01f5bfqf85fa483134fd7b1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about openmpi and msc nastran<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-20 09:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7049.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7047.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>In reply to:</strong> <a href="7045.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7047.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pedro,
<br>
<p>&nbsp;
<br>
<p>Back in 2003 I had a script to run Nastran with LAM and SGE.  I no
<br>
longer have SGE on 
<br>
<p>any of my systems, so I can't verify it works now, but here is the
<br>
script.
<br>
<p>&nbsp;
<br>
<p>#! /bin/ksh
<br>
<p>#
<br>
<p># sge_nast: SunGridEngine script to use with
<br>
<p>#           MSC.Nastran V2001.0.9 and greater.
<br>
<p>#
<br>
<p># Usage: qsub -pe $PAR_ENV $Nproc sge_nast
<br>
<p>#
<br>
<p>#Set input file, can be an argument, but hardcoded for this test:
<br>
<p>DAT=/lhome/jjg/TEST.dat
<br>
<p>#
<br>
<p>cd ${SGE_O_WORKDIR}
<br>
<p>#
<br>
<p>#Set up hosts:
<br>
<p>#
<br>
<p>HOSTS=&quot;&quot;
<br>
<p>while read FILE
<br>
<p>do
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NODE=`echo $FILE | awk '{ print $1}'`
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;HOST0=&quot;$HOSTS&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;HOSTS=&quot;$HOST0:$NODE&quot;
<br>
<p>done &lt; $PE_HOSTFILE
<br>
<p># Remove leading ':'
<br>
<p>HOSTS=`echo $HOSTS | sed 's/://'`
<br>
<p>#
<br>
<p># Got hosts, now run Nastran:
<br>
<p>nast2003t2 ${DAT} dmp=${NSLOTS} scr=yes bat=no hosts=$HOSTS
<br>
<p>#
<br>
<p># End
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Joe Griffin
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Pedro G
<br>
Sent: Monday, October 20, 2008 6:21 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Question about openmpi and msc nastran
<br>
<p>&nbsp;
<br>
<p>Ok I will try it.
<br>
<p>&nbsp;
<br>
<p>Thank you very much.
<br>
<p>&nbsp;
<br>
<p><p>&nbsp;
<br>
<p>On 10/20/08, Reuti &lt;reuti_at_[hidden]&gt; wrote: 
<br>
<p>Am 20.10.2008 um 14:17 schrieb Pedro G:
<br>
<p>On 10/20/08, Reuti &lt;reuti_at_[hidden]&gt; wrote: Hi,
<br>
<p>Am 20.10.2008 um 12:18 schrieb Pedro G:
<br>
<p>I would like to know if Msc Nastran supports openmpi.
<br>
<p>I have been searching in google about Nastran and Openmpi but I couldn't
<br>
find if it works or not.
<br>
<p>Now I'm using lam/mpi for nastran parallel jobs, but I have some
<br>
problems with lam, nastran and sge, so I'd like to upgrade to openmpi.
<br>
<p>do you have the source code of the application? If you have only the
<br>
binary compiled for LAM, then you can't do anything to change. You
<br>
checked the LAM/MPI Howto at the SGE website?
<br>
<p>No, I don't have the source code, the application seems to be able to
<br>
work with openmpi since it has an option openmpi=yes in the command
<br>
line, but I couldn't make it to work. Anyway, I think it is not fully
<br>
supported yet since there is nothing about that option in the user
<br>
manual
<br>
<p>About LAM/MPI I have already read the howto and did a tight integration.
<br>
The problem is that Msc Nastran in parallel jobs start a new lam
<br>
environment getting out of control of sge.
<br>
<p>I contacted with Nastran and they told that was a LAM/MPI or SGE
<br>
problem.
<br>
<p><p>No, IMO it's not. When they start a new LAM/MPI environment, they are
<br>
violating the granted slot allocation. What about the following
<br>
(although it would be more a discussion on the [GE suers] list:
<br>
<p>- Suppose you have a tight LAM/MPI integration for other MPI programs.
<br>
- In your jobscript, change the $PATH, so that the found &quot;lamboot&quot;
<br>
points to e.g. /bin/true - i.e. doing nothing.
<br>
- When they then call &quot;mpirun C&quot;, they should get the already started
<br>
LAM daemons.
<br>
- If mpiexec is not working, maybe the found mpiexec must also point to
<br>
a script to supply the proper &quot;-np ...&quot; values.
<br>
- When they call &quot;mpiexec&quot; in one-shot-mode, it must also be mapped to a
<br>
script to execute just the program, but not to do a &quot;lamboot&quot;.
<br>
<p>-- Reuti 
<br>
<p><p><p><p><p><p><p><p><p>-- Reuti
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7048/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7049.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7047.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>In reply to:</strong> <a href="7045.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7047.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
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
