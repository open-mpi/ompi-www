<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 12 09:06:59 2011" -->
<!-- isoreceived="20110212140659" -->
<!-- sent="Sat, 12 Feb 2011 07:06:47 -0700" -->
<!-- isosent="20110212140647" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="8C6E3E3E-8A63-4E4D-A248-EED7D4AC89BC_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C97B77AE.E4F3%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-12 09:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15585.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15583.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15583.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15585.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15585.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15590.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you searched the email archive and/or web for openmpi and Amazon cloud? Others have previously worked through many of these problems for that environment - might be worth a look to see if someone already solved this, or at least a contact point for someone who is already running in that environment.
<br>
<p>IIRC, there are some unique problems with running on that platform.
<br>
<p><p>On Feb 12, 2011, at 12:38 AM, Tena Sakai wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for all your suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I fixed the limits as you suggested and ran the test and
</span><br>
<span class="quotelev1">&gt; I am still getting the same failure.  More on that in a
</span><br>
<span class="quotelev1">&gt; bit.  But here is a bit of my response to what you mentioned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the IP number you checked now is not the same as in your
</span><br>
<span class="quotelev2">&gt;&gt; message with the MPI failure/errors.
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if I understand which computers we're talking about,
</span><br>
<span class="quotelev2">&gt;&gt; or where these computers are (at Amazon?),
</span><br>
<span class="quotelev2">&gt;&gt; or if they change depending on each session you use to run your programs,
</span><br>
<span class="quotelev2">&gt;&gt; if they are identical machines with the same limits or if they differ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything I mentioned in last 2-3 days is on Amazon EC2 cloud.  I
</span><br>
<span class="quotelev1">&gt; have no problem running the same thing locally (vixen is my local
</span><br>
<span class="quotelev1">&gt; machine):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$ cat app.ac1
</span><br>
<span class="quotelev1">&gt;  -H vixen   -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/fib.R 5
</span><br>
<span class="quotelev1">&gt;  -H vixen   -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/fib.R 6
</span><br>
<span class="quotelev1">&gt;  -H blitzen -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/fib.R 7
</span><br>
<span class="quotelev1">&gt;  -H blitzen -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/fib.R 8
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$ mpirun --app app.ac1
</span><br>
<span class="quotelev1">&gt;  5 vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;  8 vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;  13 blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;  21 blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$ # these lines are correct result.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Amazon EC2, where the strange behavior happens, is a virtualized
</span><br>
<span class="quotelev1">&gt; environment.  They charge by hours.  I launch an instance of a machine
</span><br>
<span class="quotelev1">&gt; when I need it and I shut them down when I am done.  Each time I get
</span><br>
<span class="quotelev1">&gt; different IP addresses (2 per instance, one on internal network and
</span><br>
<span class="quotelev1">&gt; the other for public interface).  That is why I don't show consistent
</span><br>
<span class="quotelev1">&gt; ip address or dns.  Every time I shutdown the machine, what I did on
</span><br>
<span class="quotelev1">&gt; that instance disappears and on next instance I have to recreate it
</span><br>
<span class="quotelev1">&gt; from scratch --case in point is ~/home/.ssh/config--, which is what
</span><br>
<span class="quotelev1">&gt; I have been doing (unless I take 'snapshot' of the image and save it
</span><br>
<span class="quotelev1">&gt; to a persistent storage (and doing snapshot is a bit of work)).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One of the error messages mentions LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt; Is it set to point to the OpenMPI lib directory?
</span><br>
<span class="quotelev2">&gt;&gt; Remember, OpenMPI requires both PATH and LD_LIBRARY_PATH properly
</span><br>
<span class="quotelev2">&gt;&gt; set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I have been setting LD_LIBRARY_PATH manually every time, because
</span><br>
<span class="quotelev1">&gt; I have neglected to put it into my bash startup file as part of AMI
</span><br>
<span class="quotelev1">&gt; (Amazon Machine Image) building.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now what I have done is get onto an instance as tsakai, save output
</span><br>
<span class="quotelev1">&gt; from 'ulimit -a', set /etc/security/limits.conf parameters as you
</span><br>
<span class="quotelev1">&gt; suggest, get off and re-log onto the instance (thereby activating
</span><br>
<span class="quotelev1">&gt; those ulimit parameters), and ran the same (actually simpler) test,
</span><br>
<span class="quotelev1">&gt; as tsakai and as root.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$ # 2ec2 below is a script/wrapper around ssh to
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$ # make ssh invocation line shorter.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen ec2]$ 2ec2 ec2-50-16-55-64.compute-1.amazonaws.com
</span><br>
<span class="quotelev1">&gt;  The authenticity of host 'ec2-50-16-55-64.compute-1.amazonaws.com
</span><br>
<span class="quotelev1">&gt; (50.16.55.64)' can't be established.
</span><br>
<span class="quotelev1">&gt;  RSA key fingerprint is e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
</span><br>
<span class="quotelev1">&gt;  Are you sure you want to continue connecting (yes/no)? yes
</span><br>
<span class="quotelev1">&gt;  Last login: Tue Feb  8 22:52:54 2011 from 10.201.197.188
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ ulimit -a &gt; mylimit.1
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ sudo su
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# cat - &gt;&gt; /etc/security/limits.conf
</span><br>
<span class="quotelev1">&gt;  *   -   memlock     -1
</span><br>
<span class="quotelev1">&gt;  *   -   stack       -1
</span><br>
<span class="quotelev1">&gt;  *   -   nofile      4096
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# tail /etc/security/limits.conf
</span><br>
<span class="quotelev1">&gt;  #@student        hard    nproc           20
</span><br>
<span class="quotelev1">&gt;  #@faculty        soft    nproc           20
</span><br>
<span class="quotelev1">&gt;  #@faculty        hard    nproc           50
</span><br>
<span class="quotelev1">&gt;  #ftp             hard    nproc           0
</span><br>
<span class="quotelev1">&gt;  #@student        -       maxlogins       4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  # End of file
</span><br>
<span class="quotelev1">&gt;  *   -   memlock     -1
</span><br>
<span class="quotelev1">&gt;  *   -   stack       -1
</span><br>
<span class="quotelev1">&gt;  *   -   nofile      4096
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# exit
</span><br>
<span class="quotelev1">&gt;  exit
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # logout and log back in to activate the
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # new setting.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ exit
</span><br>
<span class="quotelev1">&gt;  logout
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen ec2]$ # I am back on vixen and about to relogging back onto
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen ec2]$ # the instance which is still running.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen ec2]$ 2ec2 ec2-50-16-55-64.compute-1.amazonaws.com
</span><br>
<span class="quotelev1">&gt;  Last login: Fri Feb 11 23:50:47 2011 from 63.193.205.1
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ ulimit -a &gt; mylimit.2
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ diff mylimit.1 mylimit.2
</span><br>
<span class="quotelev1">&gt;  6c6
</span><br>
<span class="quotelev1">&gt;  &lt; max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev1">&gt;  ---
</span><br>
<span class="quotelev2">&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev1">&gt;  8c8
</span><br>
<span class="quotelev1">&gt;  &lt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt;  ---
</span><br>
<span class="quotelev2">&gt;&gt; open files                      (-n) 4096
</span><br>
<span class="quotelev1">&gt;  12c12
</span><br>
<span class="quotelev1">&gt;  &lt; stack size              (kbytes, -s) 8192
</span><br>
<span class="quotelev1">&gt;  ---
</span><br>
<span class="quotelev2">&gt;&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # yes, I have the same ulimit parameters as
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # Gus suggested.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ export LD_LIBRARY_PATH=/usr/local/lib
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ env | grep LD_LIB
</span><br>
<span class="quotelev1">&gt;  LD_LIBRARY_PATH=/usr/local/lib
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ cat - &gt; app.ac
</span><br>
<span class="quotelev1">&gt;  -H ip-10-114-138-129.ec2.internal -np 1 Rscript /home/tsakai/fib.R 5
</span><br>
<span class="quotelev1">&gt;  -H ip-10-114-138-129.ec2.internal -np 1 Rscript /home/tsakai/fib.R 6
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ cat app.ac
</span><br>
<span class="quotelev1">&gt;  -H ip-10-114-138-129.ec2.internal -np 1 Rscript /home/tsakai/fib.R 5
</span><br>
<span class="quotelev1">&gt;  -H ip-10-114-138-129.ec2.internal -np 1 Rscript /home/tsakai/fib.R 6
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;  ip-10-114-138-129
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # this run doesn't involve other node.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # just use this machine's cores.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # there are 2 cores on this machine.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ mpirun --app app.ac
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  mpirun was unable to launch the specified application as it encountered an
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Error: pipe function call failed when setting up I/O forwarding subsystem
</span><br>
<span class="quotelev1">&gt;  Node: ip-10-114-138-129
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # I still get the same error!
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ cat /proc/sys/fs/file-nr
</span><br>
<span class="quotelev1">&gt;  512     0       762674
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # number of open files (512) is no where
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # close to the limit, which is 4096 now.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ # now let's run it as root.
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ sudo su
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# env | grep LD_LIBR
</span><br>
<span class="quotelev1">&gt;  LD_LIBRARY_PATH=/usr/local/lib
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# pwd
</span><br>
<span class="quotelev1">&gt;  /home/tsakai
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# mpirun --app ./app.ac
</span><br>
<span class="quotelev1">&gt;  5 ip-10-114-138-129
</span><br>
<span class="quotelev1">&gt;  8 ip-10-114-138-129
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# # that's correct result!
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# cat /proc/sys/fs/file-nr
</span><br>
<span class="quotelev1">&gt;  512     0       762674
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# # this shows that mpirun didn't leave any
</span><br>
<span class="quotelev1">&gt;  bash-3.2# # oepn file behind, I think.  That's good.
</span><br>
<span class="quotelev1">&gt;  bash-3.2#
</span><br>
<span class="quotelev1">&gt;  bash-3.2# exit
</span><br>
<span class="quotelev1">&gt;  exit
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_ip-10-114-138-129 ~]$ exit
</span><br>
<span class="quotelev1">&gt;  logout
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Had it been the case, it failed both as root and as user
</span><br>
<span class="quotelev1">&gt; tsakai, I can conclude that either the virtualized environment
</span><br>
<span class="quotelev1">&gt; is disagreeable with openmpi OR there is something wrong with
</span><br>
<span class="quotelev1">&gt; what I am trying to do.  But what kills me is that it *does*
</span><br>
<span class="quotelev1">&gt; work when run by root.  Why pipe system call fails on user
</span><br>
<span class="quotelev1">&gt; tsakai and not on root is something I don't understand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, here is the same test (using a single machine) in local
</span><br>
<span class="quotelev1">&gt; environment (i.e., no virtualized environment):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$ cat app.ac2
</span><br>
<span class="quotelev1">&gt;  -H vixen   -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/fib.R 5
</span><br>
<span class="quotelev1">&gt;  -H vixen   -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/fib.R 6
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$ mpirun --app app.ac2
</span><br>
<span class="quotelev1">&gt;  5 vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;  8 vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;  [tsakai_at_vixen Rmpi]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running out of stones to turn over for now and maybe it's
</span><br>
<span class="quotelev1">&gt; a good time to go to bed.  :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would appreciate it if you come up with a different things
</span><br>
<span class="quotelev1">&gt; to try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/11/11 7:45 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Tena
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We setup the cluster nodes to run MPI programs
</span><br>
<span class="quotelev2">&gt;&gt; with stacksize unlimited,
</span><br>
<span class="quotelev2">&gt;&gt; memlock unlimited,
</span><br>
<span class="quotelev2">&gt;&gt; 4096 max open files,
</span><br>
<span class="quotelev2">&gt;&gt; to avoid crashing on edge cases.
</span><br>
<span class="quotelev2">&gt;&gt; This is kind of typical for HPC, MPI, number crunching.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, some are quite big codes,
</span><br>
<span class="quotelev2">&gt;&gt; and from what you said yours is not (or not yet).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your stack limit sounds quite small, but when
</span><br>
<span class="quotelev2">&gt;&gt; we had problems with stack the result was a segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 1024 files I guess is a default for 32 bit Linux distributions,
</span><br>
<span class="quotelev2">&gt;&gt; but some programs break there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you want to do this, put these lines on the bottom
</span><br>
<span class="quotelev2">&gt;&gt; of /etc/security/limits.conf:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # End of file
</span><br>
<span class="quotelev2">&gt;&gt; *   -   memlock     -1
</span><br>
<span class="quotelev2">&gt;&gt; *   -   stack       -1
</span><br>
<span class="quotelev2">&gt;&gt; *   -   nofile      4096
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think you should give unlimited number of processes to
</span><br>
<span class="quotelev2">&gt;&gt; regular users; keep this privilege to root (which is where
</span><br>
<span class="quotelev2">&gt;&gt; the two have different limits).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You may want to monitor /proc/sys/fs/file-nr while the program runs.
</span><br>
<span class="quotelev2">&gt;&gt; The first number is the actual number of open files.
</span><br>
<span class="quotelev2">&gt;&gt; Top or vmstat also help see how you are doing in terms of memory,
</span><br>
<span class="quotelev2">&gt;&gt; although you suggested these are (small?) test programs, unlikely to run
</span><br>
<span class="quotelev2">&gt;&gt; out of memory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are using two nodes, check the same stuff on the other node too.
</span><br>
<span class="quotelev2">&gt;&gt; Also, the IP number you checked now is not the same as in your
</span><br>
<span class="quotelev2">&gt;&gt; message with the MPI failure/errors.
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if I understand which computers we're talking about,
</span><br>
<span class="quotelev2">&gt;&gt; or where these computers are (at Amazon?),
</span><br>
<span class="quotelev2">&gt;&gt; or if they change depending on each session you use to run your programs,
</span><br>
<span class="quotelev2">&gt;&gt; if they are identical machines with the same limits or if they differ.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One of the error messages mentions LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt; Is it set to point to the OpenMPI lib directory?
</span><br>
<span class="quotelev2">&gt;&gt; Remember, OpenMPI requires both PATH and LD_LIBRARY_PATH properly set.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps, although I am afraid I may be missing the point.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for your tips.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't find any smoking gun or anything comes close.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the upshot:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$ ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  core file size          (blocks, -c) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  scheduling priority             (-e) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  pending signals                 (-i) 61504
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  open files                      (-n) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  real-time priority              (-r) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  stack size              (kbytes, -s) 8192
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  max user processes              (-u) 61504
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  file locks                      (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$ sudo su
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bash-3.2# ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  core file size          (blocks, -c) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  scheduling priority             (-e) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  pending signals                 (-i) 61504
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  open files                      (-n) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  real-time priority              (-r) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  stack size              (kbytes, -s) 8192
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  max user processes              (-u) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  file locks                      (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bash-3.2# ulimit -a &gt; root_ulimit-a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bash-3.2# exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$ ulimit -a &gt; tsakai_ulimit-a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$ diff root_ulimit-a tsakai_ulimit-a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  14c14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt; max user processes              (-u) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; max user processes              (-u) 61504
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$ cat /proc/sys/fs/file-nr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /proc/sys/fs/file-max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  480     0       762674
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  762674
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$ sudo su
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bash-3.2# cat /proc/sys/fs/file-nr /proc/sys/fs/file-max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  512     0       762674
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  762674
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bash-3.2# exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$ sysctl -a |grep fs.file-max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -bash: sysctl: command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$ /sbin/!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /sbin/sysctl -a |grep fs.file-max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  error: permission denied on key 'kernel.cad_pid'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  error: permission denied on key 'kernel.cap-bound'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  fs.file-max = 762674
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$ sudo /sbin/sysctl -a | grep fs.file-max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  fs.file-max = 762674
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [tsakai_at_ip-10-114-239-188 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see a bit of difference between root and tsakai, but I cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; believe such small difference results in somewhat a catastrophic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure as I have reported.  Would you agree with me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/11/11 6:06 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Tena
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please read one answer inline.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your replies.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have pretty much ruled out PATH issues by setting tsakai's PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as identical to that of root.  In that setting I reproduced the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same result as before: root can run mpirun correctly and tsakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cannot.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have also checked out permission on /tmp directory.  tsakai has
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no problem creating files under /tmp.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to come up with a strategy to show that each and every
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; programs in the PATH has &quot;world&quot; executable permission.  It is a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stone to turn over, but I am not holding my breath.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ... you are running out of file descriptors. Are file descriptors
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; limited on a per-process basis, perchance?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have never heard there is such restriction on Amazon EC2.  There
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are folks who keep running instances for a long, long time.  Whereas
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in my case, I launch 2 instances, check things out, and then turn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the instances off.  (Given that the state of California has a huge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; debts, our funding is very tight.)  So, I really doubt that's the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; case.  I have run mpirun unsuccessfully as user tsakai and immediately
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; after successfully as root.  Still, I would be happy if you can tell
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; me a way to tell number of file descriptors used or remmain.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Your mentioned file descriptors made me think of something under
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /dev.  But I don't know exactly what I am fishing.  Do you have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some suggestions?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) If the environment has anything to do with Linux,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cat /proc/sys/fs/file-nr /proc/sys/fs/file-max
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sysctl -a |grep fs.file-max
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This max can be set (fs.file-max=whatever_is_reasonable)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in /etc/sysctl.conf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See 'man sysctl' and 'man sysctl.conf'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) Another possible source of limits.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check &quot;ulimit -a&quot; (bash) or &quot;limit&quot; (tcsh).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you need to change look at:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /etc/security/limits.conf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (See also 'man limits.conf')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since &quot;root can but Tena cannot&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would check 2) first,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as they are the 'per user/per group' limits,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whereas 1) is kernel/system-wise.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PS - I know you are a wise and careful programmer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but here we had cases of programs that would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail because of too many files that were open and never closed,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eventually exceeding the max available/permissible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, it does happen.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wish I could reproduce this (weired) behavior on a different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set of machines.  I certainly cannot in my local environment.  Sigh!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tena
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2/11/11 3:17 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It is concerning if the pipe system call fails - I can't think of why that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; would happen. Thats not usually a permissions issue but rather a deeper
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; indication that something is either seriously wrong on your system or you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; running out of file descriptors. Are file descriptors limited on a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; per-process
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; basis, perchance?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 11, 2011, at 10:08 AM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Tena
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Since root can but you can't,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; is is a directory permission problem perhaps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Check the execution directory permission (on both machines,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; if this is not NFS mounted dir).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am not sure, but IIRR OpenMPI also uses /tmp for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; under-the-hood stuff, worth checking permissions there also.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Just a naive guess.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Congrats for all the progress with the cloudy MPI!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have made a bit more progress.  I think I can say ssh authenti-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cation problem is behind me now.  I am still having a problem running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun, but the latest discovery, which I can reproduce, is that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can run mpirun as root.  Here's the session log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_vixen ec2]$ 2ec2 ec2-184-73-104-242.compute-1.amazonaws.com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Last login: Fri Feb 11 00:41:11 2011 from 10.100.243.195
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ ll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; total 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-rw-r-- 1 tsakai tsakai 274 Feb 11 00:47 app.ac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x 1 tsakai tsakai 379 Feb 11 00:48 fib.R
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ ll .ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; total 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw------- 1 tsakai tsakai  232 Feb  5 23:19 authorized_keys
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw------- 1 tsakai tsakai  102 Feb 11 00:34 config
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r-- 1 tsakai tsakai 1302 Feb 11 00:36 known_hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw------- 1 tsakai tsakai  887 Feb  8 22:03 tsakai
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ ssh ip-10-100-243-195.ec2.internal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Last login: Fri Feb 11 00:36:20 2011 from 10.195.198.31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$ # I am on machine B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$ hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ip-10-100-243-195
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$ ll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; total 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-rw-r-- 1 tsakai tsakai 274 Feb 11 00:44 app.ac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x 1 tsakai tsakai 379 Feb 11 00:47 fib.R
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$ cat app.ac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H ip-10-195-198-31.ec2.internal -np 1 Rscript /home/tsakai/fib.R 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H ip-10-195-198-31.ec2.internal -np 1 Rscript /home/tsakai/fib.R 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H ip-10-100-243-195.ec2.internal -np 1 Rscript /home/tsakai/fib.R 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H ip-10-100-243-195.ec2.internal -np 1 Rscript /home/tsakai/fib.R 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$ # go back to machine A
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-100-243-195 ~]$ exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; logout
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Connection to ip-10-100-243-195.ec2.internal closed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ip-10-195-198-31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ # Execute mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ mpirun -app app.ac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun was unable to launch the specified application as it encountered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Error: pipe function call failed when setting up I/O forwarding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subsystem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node: ip-10-195-198-31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ # try it as root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ sudo su
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2# pwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/tsakai
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2# ls -l /root/.ssh/config
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw------- 1 root root 103 Feb 11 00:56 /root/.ssh/config
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2# cat /root/.ssh/config
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Host *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         IdentityFile /root/.ssh/.derobee/.kagi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         IdentitiesOnly yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         BatchMode yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2# pwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/tsakai
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2# ls -l
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; total 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-rw-r-- 1 tsakai tsakai 274 Feb 11 00:47 app.ac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x 1 tsakai tsakai 379 Feb 11 00:48 fib.R
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2# # now is the time for mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2# mpirun --app ./app.ac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 13 ip-10-100-243-195
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 21 ip-10-100-243-195
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 5 ip-10-195-198-31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8 ip-10-195-198-31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2# # It works (being root)!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash-3.2# exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ # try it one more time as tsakai
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ mpirun --app app.ac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun was unable to launch the specified application as it encountered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Error: pipe function call failed when setting up I/O forwarding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subsystem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node: ip-10-195-198-31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ # I don't get it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_ip-10-195-198-31 ~]$ exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; logout
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So, why does it say &quot;pipe function call failed when setting up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I/O forwarding subsystem Node: ip-10-195-198-31&quot; ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The node it is referring to is not the remote machine.  It is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What I call machine A.  I first thought maybe this is a problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; With PATH variable.  But I don't think so.  I compared root's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Path to that of tsaki's and made them identical and retried.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I got the same behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you could enlighten me why this is happening, I would really
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Appreciate it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tena
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 2/10/11 4:12 PM, &quot;Tena Sakai&quot; &lt;tsakai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for the firewall tip.  I tried it while allowing all tip traffic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and got interesting and preplexing result.  Here's what's interesting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (BTW, I got rid of &quot;LogLevel DEBUG3&quot; from ./ssh/config on this run):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ mpirun --app app.ac2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Host key verification failed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  A daemon (pid 2743) died unexpectedly with status 255 while
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ env | grep LD_LIB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ # Let's set LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ export LD_LIBRARY_PATH='/usr/local/lib'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ # I better to this on machine B as well
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ ssh -i tsakai ip-10-195-171-159
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Warning: Identity file tsakai not accessible: No such file or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; directory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Last login: Thu Feb 10 18:31:20 2011 from 10.203.21.132
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-195-171-159 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-195-171-159 ~]$ export LD_LIBRARY_PATH='/usr/local/lib'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-195-171-159 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-195-171-159 ~]$ env | grep LD_LIB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  LD_LIBRARY_PATH=/usr/local/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-195-171-159 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-195-171-159 ~]$ # OK, now go bak to machine A
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-195-171-159 ~]$ exit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  logout
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Connection to ip-10-195-171-159 closed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  ip-10-203-21-132
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ # try mpirun again
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ mpirun --app app.ac2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Host key verification failed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  A daemon (pid 2789) died unexpectedly with status 255 while
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ # I thought openmpi library was in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/lib...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ ll -t /usr/local/lib | less
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  total 16604
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      16 Feb  8 23:06 libfuse.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libfuse.so.2.8.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      16 Feb  8 23:06 libfuse.so.2 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libfuse.so.2.8.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      25 Feb  8 23:06 libmca_common_sm.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmca_common_sm.so.1.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      25 Feb  8 23:06 libmca_common_sm.so.1 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmca_common_sm.so.1.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      15 Feb  8 23:06 libmpi.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi.so.0.0.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      15 Feb  8 23:06 libmpi.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi.so.0.0.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_cxx.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_cxx.so.0.0.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_cxx.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_cxx.so.0.0.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_f77.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f77.so.0.0.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_f77.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f77.so.0.0.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_f90.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f90.so.0.0.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_f90.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f90.so.0.0.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      20 Feb  8 23:06 libopen-pal.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      20 Feb  8 23:06 libopen-pal.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      20 Feb  8 23:06 libopen-rte.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      20 Feb  8 23:06 libopen-rte.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      26 Feb  8 23:06 libopenmpi_malloc.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopenmpi_malloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      26 Feb  8 23:06 libopenmpi_malloc.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopenmpi_malloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      20 Feb  8 23:06 libulockmgr.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libulockmgr.so.1.0.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      20 Feb  8 23:06 libulockmgr.so.1 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libulockmgr.so.1.0.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      16 Feb  8 23:06 libxml2.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libxml2.so.2.7.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  lrwxrwxrwx 1 root root      16 Feb  8 23:06 libxml2.so.2 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libxml2.so.2.7.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  -rw-r--r-- 1 root root  385912 Jan 26 01:00 libvt.a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$ # Now, I am really confused...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [tsakai_at_ip-10-203-21-132 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you know why it's complaining about shared libraries?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tena
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 2/10/11 1:05 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Your prior mails were about ssh issues, but this one sounds like you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; might
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have firewall issues.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That is, the &quot;orted&quot; command attempts to open a TCP socket back to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; various command and control reasons.  If it is blocked from doing so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; by
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; firewall, Open MPI won't run.  In general, you can either disable your
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; firewall or you can setup a trust relationship for TCP connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; within
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cluster.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 10, 2011, at 1:03 PM, Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Reuti,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for suggesting &quot;LogLevel DEBUG3.&quot;  I did so and complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; session is captured in the attached file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What I did is much similar to what I have done before: verify
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that ssh works and then run mpirun command.  In my a bit lengthy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; session log, there are two responses from &quot;LogLevel DEBUG3.&quot;  First
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; from an scp invocation and then from mpirun invocation.  They both
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; say
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  debug1: Authentication succeeded (publickey).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From mpirun invocation, I see a line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  debug1: Sending command:  orted --daemonize -mca ess env -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_ess_jobid 3344891904 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_ess_num_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  2 --hnp-uri &quot;3344891904.0;tcp://10.194.95.239:54256&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The IP address at the end of the line is indeed that of machine B.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; After that there was hanging and I controlled-C out of it, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gave me more lines.  But the lines after
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  debug1: Sending command:  orted bla bla bla
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; doesn't look good to me.  But, in truth, I have no idea what they
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mean.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you could shed some light, I would appreciate it very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tena
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 2/10/11 10:57 AM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 10.02.2011 um 19:11 schrieb Tena Sakai:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your local machine is Linux like, but the execution hosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are Macs? I saw the /Users/tsakai/... in your output.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No, my environment is entirely linux.  The path to my home
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; directory on one host (blitzen) has been known as /Users/tsakai,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; despite it is an nfs mount from vixen (which is known to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; itself as /home/tsakai).  For historical reasons, I have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; chosen to give a symbolic link named /Users to vixen's /Home,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; so that I can use consistent path for both vixen and blitzen.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; okay. Sometimes the protection of the home directory must be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; adjusted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; too,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as you can do it from the command line this shouldn't be an issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this a private cluster (or at least private interfaces)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It would also be an option to use hostbased authentication,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which will avoid setting any known_hosts file or passphraseless
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh-keys for each user.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No, it is not a private cluster.  It is Amazon EC2.  When I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ssh from my local machine (vixen) I use its public interface,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but to address from one amazon cluster node to the other I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; use nodes' private dns names: domU-12-31-39-07-35-21 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-06-74-E2.  Both public and private dns names
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; change from a launch to another.  I am using passphrasesless
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh-keys for authentication in all cases, i.e., from vixen to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Amazon node A, from amazon node A to amazon node B, and from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Amazon node B back to A.  (Please see my initail post.  There
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is a session dialogue for this.)  They all work without authen-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tication dialogue, except a brief initial dialogue:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The authenticity of host 'domu-xx-xx-xx-xx-xx-x (10.xx.xx.xx)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; can't be established.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  RSA key fingerprint is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Are you sure you want to continue connecting (yes/no)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to which I say &quot;yes.&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But I am unclear with what you mean by &quot;hostbased authentication&quot;?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Doesn't that mean with password?  If so, it is not an option.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No. It's convenient inside a private cluster as it won't fill each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; known_hosts file and you don't need to create any ssh-keys. But when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hostname changes every time it might also create new hostkeys. It
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; uses
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hostkeys (private and public), this way it works for all users. Just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; reference:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You could look into it later.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Can you try to use a command when connecting from A to B? E.g. ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `domU-12-31-39-06-74-E2 ls`. Is this working too?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - What about putting:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LogLevel DEBUG3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In your ~/.ssh/config. Maybe we can see what he's trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; negotiate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it fails in verbose mode.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tena
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 2/10/11 2:27 AM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your local machine is Linux like, but the execution hosts are Macs?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; saw
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/tsakai/... in your output.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a) executing a command on them is also working, e.g.: ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-07-35-21 ls
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 10.02.2011 um 07:08 schrieb Tena Sakai:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have made a bit of progress(?)...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I made a config file in my .ssh directory on the cloud.  It looks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # machine A
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Host domU-12-31-39-07-35-21.compute-1.internal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is just an abbreviation or nickname above. To use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; specified
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; settings,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it's necessary to specify exactly this name. When the settings are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; anyway for all machines, you can use:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Host *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; BatchMode yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; instead.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this a private cluster (or at least private interfaces)? It
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; also
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; an option to use hostbased authentication, which will avoid setting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; known_hosts file or passphraseless ssh-keys for each user.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HostName domU-12-31-39-07-35-21
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; BatchMode yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ChallengeResponseAuthentication no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # machine B
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Host domU-12-31-39-06-74-E2.compute-1.internal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HostName domU-12-31-39-06-74-E2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; BatchMode yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ChallengeResponseAuthentication no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This file exists on both machine A and machine B.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now When I issue mpirun command as below:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-06-74-E2 ~]$ mpirun -app app.ac2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It hungs.  I control-C out of it and I get:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shown
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     domU-12-31-39-07-35-21.compute-1.internal - daemon did not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; report
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; back when launched
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am I making progress?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does this mean I am past authentication and something else is the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does someone have an example .ssh/config file I can look at?  There
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; many keyword-argument paris for this config file and I would like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; look
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; some very basic one that works.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 2/9/11 7:52 PM, &quot;Tena Sakai&quot; &lt;tsakai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have an app.ac1 file like below:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_vixen local]$ cat app.ac1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H vixen.egcrc.org   -np 1 Rscript
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H vixen.egcrc.org   -np 1 Rscript
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H blitzen.egcrc.org -np 1 Rscript
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H blitzen.egcrc.org -np 1 Rscript
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The program I run is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R x
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Where x is [5..8].  The machines vixen and blitzen each run 2 runs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here&#146;s the program fib.R:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [ tsakai_at_vixen local]$ cat fib.R
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     # fib() computes, given index n, fibonacci number iteratively
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     # here's the first dozen sequence (indexed from 0..11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     # 1, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fib &lt;- function( n ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         a &lt;- 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         b &lt;- 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         for ( i in 1:n ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              t &lt;- b
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              b &lt;- a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              a &lt;- a + t
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; arg &lt;- commandArgs( TRUE )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; myHost &lt;- system( 'hostname', intern=TRUE )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cat( fib(arg), myHost, '\n' )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It reads an argument from command line and produces a fibonacci
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; number
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; corresponds to that index, followed by the machine name.  Pretty
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; simple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; stuff.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here&#146;s the run output:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_vixen local]$ mpirun -app app.ac1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 5 vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8 vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 13 blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 21 blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which is exactly what I expect.  So far so good.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now I want to run the same thing on cloud.  I launch 2 instances of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; virtual machine, to which I get to by:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_vixen local]$ ssh &#150;A I ~/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; machine-instance-A-public-dns
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now I am on machine A:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # and I can go to machine B
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; without
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; password authentication,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # i.e., use public/private key
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ ssh -i .ssh/tsakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-0C-C8-01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Last login: Wed Feb  9 20:51:48 2011 from 10.254.214.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # I am now on machine B
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-0C-C8-01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # now show I can get to machine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; without using password
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ ssh -i .ssh/tsakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The authenticity of host 'domu-12-31-39-00-d1-f2 (10.254.214.4)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; can't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be established.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RSA key fingerprint is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are you sure you want to continue connecting (yes/no)? yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Warning: Permanently added 'domu-12-31-39-00-d1-f2' (RSA) to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; known hosts.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Last login: Wed Feb  9 20:49:34 2011 from 10.215.203.239
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ exit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; logout
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Connection to domU-12-31-39-00-D1-F2 closed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ exit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; logout
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Connection to domU-12-31-39-0C-C8-01 closed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # back at machine A
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As you can see, neither machine uses password for authentication;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; uses
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; public/private key pairs.  There is no problem (that I can see) for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; invocation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; from one machine to the other.  This is so because I have a copy of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; public
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; key
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and a copy of private key on each instance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The app.ac file is identical, except the node names:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ cat app.ac1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here&#146;s what happens with mpirun:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ mpirun -app app.ac1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tsakai_at_domu-12-31-39-0c-c8-01's password:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tsakai_at_domu-12-31-39-0c-c8-01's password: mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mpirun (or somebody else?) asks me password, which I don&#146;t have.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I end up typing control-C.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here&#146;s my question:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How can I get past authentication by mpirun where there is no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; password?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would appreciate your help/insight greatly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="15585.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15583.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15583.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15585.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15585.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15590.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
