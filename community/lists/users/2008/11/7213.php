<?
$subject_val = "Re: [OMPI users] Beowulf cluster and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 14:08:58 2008" -->
<!-- isoreceived="20081105190858" -->
<!-- sent="Wed, 5 Nov 2008 14:08:52 -0500" -->
<!-- isosent="20081105190852" -->
<!-- name="Daniel Gruner" -->
<!-- email="dgruner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beowulf cluster and openmpi" -->
<!-- id="20081105140852.F24805_at_tequila.chem.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7503b17d0811051044t2a7e5f78x433dc0abf5eb6071_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beowulf cluster and openmpi<br>
<strong>From:</strong> Daniel Gruner (<em>dgruner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-05 14:08:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7214.php">Jeff Squyres: "Re: [OMPI users] OK, got it installed, but...  can't find libraries"</a>
<li><strong>Previous message:</strong> <a href="7212.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7212.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can your nodes see the openmpi libraries and executables?  I have the
<br>
/usr/local and /opt from the master node mounted on the compute nodes,
<br>
in addition to having the LD_LIBRARY_PATH defined correctly.  In your
<br>
case the nodes must be able to see /home/rchaud/openmpi-1.2.6 in order
<br>
to get the libraries and executables, so this directory must be mounted
<br>
on the nodes.  You don't want to copy all this stuff to the nodes in a
<br>
bproc environment, since it would eat away at your ram.
<br>
<p>Daniel
<br>
<p>On Wed, Nov 05, 2008 at 12:44:03PM -0600, Rima Chaudhuri wrote:
<br>
<span class="quotelev1">&gt; Thanks for all your help Ralph and Sean!!
</span><br>
<span class="quotelev1">&gt; I changed the machinefile to just containing the node numbers. I added
</span><br>
<span class="quotelev1">&gt; the env variable NODES in my .bash_profile and .bashrc.
</span><br>
<span class="quotelev1">&gt; As per Sean's suggestion I added the $LD_LIBRARY_PATH (shared lib path
</span><br>
<span class="quotelev1">&gt; which the openmpi lib directory path) and the $AMBERHOME/lib  as 2 of
</span><br>
<span class="quotelev1">&gt; the libraries' path in the config file of beowulf. I also checked by
</span><br>
<span class="quotelev1">&gt; bpsh from one of the compute nodes whether it can see the executables
</span><br>
<span class="quotelev1">&gt; which is in $AMBERHOME/exe and the mpirun(OMPI):
</span><br>
<span class="quotelev1">&gt; I get the following error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [rchaud_at_helios amber10]$ ./step1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 25319) launched by the bproc PLS component on node 2 died
</span><br>
<span class="quotelev1">&gt; unexpectedly on signal 13 so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:25317] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; pls_bproc.c at line 717
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:25317] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; pls_bproc.c at line 1164
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:25317] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 462
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:25317] mpirun: spawn failed with errno=-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested to see if the compute nodes could see the master by the
</span><br>
<span class="quotelev1">&gt; following commands:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [rchaud_at_helios amber10]$ bpsh 2 echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /home/rchaud/openmpi-1.2.6/openmpi-1.2.6_ifort/lib
</span><br>
<span class="quotelev1">&gt; [rchaud_at_helios amber10]$ bpsh 2 echo $AMBERHOME
</span><br>
<span class="quotelev1">&gt; /home/rchaud/Amber10_openmpi/amber10
</span><br>
<span class="quotelev1">&gt; [rchaud_at_helios amber10]$ bpsh 2 ls -al
</span><br>
<span class="quotelev1">&gt; total 11064
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x   11 rchaud   0            4096 Nov  5 11:33 .
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x    3 rchaud   100          4096 Oct 20 17:21 ..
</span><br>
<span class="quotelev1">&gt; -rw-r--r--    1 128      53           1201 Jul 10 17:08 Changelog_at
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--    1 128      53          25975 Feb 28  2008
</span><br>
<span class="quotelev1">&gt; GNU_Lesser_Public_License
</span><br>
<span class="quotelev1">&gt; -rw-rw----    1 128      53           3232 Mar 30  2008 INSTALL
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--    1 128      53          20072 Feb 11  2008 LICENSE_at
</span><br>
<span class="quotelev1">&gt; -rw-r--r--    1 0        0         1814241 Oct 31 13:32 PLP_617_xtal_nolig.crd
</span><br>
<span class="quotelev1">&gt; -rw-r--r--    1 0        0         8722770 Oct 31 13:31 PLP_617_xtal_nolig.top
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--    1 128      53           1104 Mar 18  2008 README
</span><br>
<span class="quotelev1">&gt; -rw-r--r--    1 128      53           1783 Jun 23 19:43 README_at
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x   10 128      53           4096 Oct 20 17:23 benchmarks
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x    2 0        0            4096 Oct 20 18:21 bin
</span><br>
<span class="quotelev1">&gt; -rw-r--r--    1 0        0          642491 Oct 20 17:51 bugfix.all
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x   13 0        0            4096 Oct 20 17:37 dat
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x    3 0        0            4096 Oct 20 17:23 doc
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x    9 128      53           4096 Oct 20 17:23 examples
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx    1 0        0               3 Oct 20 17:34 exe -&gt; bin
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x    2 0        0            4096 Oct 20 17:35 include
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x    2 0        0            4096 Oct 20 17:36 lib
</span><br>
<span class="quotelev1">&gt; -rw-r--r--    1 rchaud   100            30 Nov  5 11:33 machinefile
</span><br>
<span class="quotelev1">&gt; -rw-r--r--    1 rchaud   100           161 Nov  5 12:11 min
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x   40 128      53           4096 Oct 20 17:50 src
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x    1 rchaud   100           376 Nov  3 16:41 step1
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x  114 128      53           4096 Oct 20 17:23 test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [rchaud_at_helios amber10]$ bpsh 2 which mpirun
</span><br>
<span class="quotelev1">&gt; /home/rchaud/openmpi-1.2.6/openmpi-1.2.6_ifort/bin/mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The $LD_LIBRARY_PATH seems to be defined correctly, but then why is it
</span><br>
<span class="quotelev1">&gt; not being read?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 5, 2008 at 11:08 AM,  &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt; &gt;        users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt; &gt;        users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt; &gt;        users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   1. Re: Beowulf cluster and openmpi (Kelley, Sean)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 1
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 5 Nov 2008 12:08:13 -0500
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot;Kelley, Sean&quot; &lt;Sean.Kelley_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Beowulf cluster and openmpi
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;A804E989DCC5234FBA6C4E62B939978F2EB3D5_at_ava-es5.solers.local&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain;       charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would suggest making sure that the /etc/beowulf/config file has a
</span><br>
<span class="quotelev2">&gt; &gt; &quot;libraries&quot; line for every directory where required shared libraries
</span><br>
<span class="quotelev2">&gt; &gt; (application and mpi) are located.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, make sure that the filesystems containing the executables and
</span><br>
<span class="quotelev2">&gt; &gt; shared libraries are accessible from the compute nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sean
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt; &gt; Behalf Of Rima Chaudhuri
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Monday, November 03, 2008 5:50 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Beowulf cluster and openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I added the option for -hostfile machinefile where the machinefile is a
</span><br>
<span class="quotelev2">&gt; &gt; file with the IP of the nodes:
</span><br>
<span class="quotelev2">&gt; &gt; #host names
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.100 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.101 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.102 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.103 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.104 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.105 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.106 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.107 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.108 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.109 slots=2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [rchaud_at_helios amber10]$ ./step1
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid 29837) launched by the bproc PLS component on node 192
</span><br>
<span class="quotelev2">&gt; &gt; died unexpectedly so we are aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev2">&gt; &gt; the location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; [helios.structure.uic.edu:29836] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt; &gt; pls_bproc.c at line 717 [helios.structure.uic.edu:29836] [0,0,0]
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_ERROR_LOG: Error in file pls_bproc.c at line 1164
</span><br>
<span class="quotelev2">&gt; &gt; [helios.structure.uic.edu:29836] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt; &gt; rmgr_urm.c at line 462 [helios.structure.uic.edu:29836] mpirun: spawn
</span><br>
<span class="quotelev2">&gt; &gt; failed with errno=-1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I used bpsh to see if the master and one of the nodes n8 could see the
</span><br>
<span class="quotelev2">&gt; &gt; $LD_LIBRARY_PATH, and it does..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [rchaud_at_helios amber10]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; /home/rchaud/openmpi-1.2.6/openmpi-1.2.6_ifort/lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [rchaud_at_helios amber10]$ bpsh n8 echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; /home/rchaud/openmpi-1.2.6/openmpi-1.2.6_ifort/lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Nov 3, 2008 at 3:14 PM,  &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        users-owner_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev3">&gt; &gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Today's Topics:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   1. Re: Problems installing in Cygwin - Problem with GCC      3.4.4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      (Jeff Squyres)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   2. switch from mpich2 to openMPI &lt;newbie question&gt; (PattiMichelle)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   3. Re: users Digest, Vol 1055, Issue 2 (Ralph Castain)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Mon, 3 Nov 2008 15:52:22 -0500
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] Problems installing in Cygwin - Problem with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        GCC     3.4.4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: &quot;Gustavo Seabra&quot; &lt;gustavo.seabra_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message-ID: &lt;A016B8C4-510B-4FD2-AD3B-A1B6440508F5_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 3, 2008, at 3:36 PM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For your fortran issue, the Fortran 90 interface needs the Fortran
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 77 interface.  So you need to supply an F77 as well (the output from
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; configure should indicate that the F90 interface was disabled
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; because the F77 interface was disabled).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is that what you mean (see below)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ah yes -- that's another reason the f90 interface could be disabled:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if configure detects that the f77 and f90 compilers are not link-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compatible.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I thought the g95 compiler could
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; deal with F77 as well as F95... If so, could I just pass F77='g95'?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That would probably work (F77=g95).  I don't know the g95 compiler at
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all, so I don't know if it also accepts Fortran-77-style codes.  But
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if it does, then you're set.  Otherwise, specify a different F77
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compiler that is link compatible with g95 and you should be good.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; very ugly hack: I have to go into those files and remove the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;std::&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; before
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm not sure I follow -- I don't see anywhere in OMPI where we use
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; std::max.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; What areas did you find that you needed to change?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; These files are part of the standard C++ headers. In my case, they
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sit in:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ah, I see.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In principle, the problems that comes from those files would mean
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that the OpenMPI source has some macro redefining max, but that's
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; what I could not find :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gotcha.  I don't think we are defining a &quot;max&quot; macro anywhere in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi_info source or related header files.  :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; No.  We don't really maintain the &quot;make check&quot; stuff too well.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oh well... What do you use for testing the implementation?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We have a whole pile of MPI tests in a private SVN repository.  The
</span><br>
<span class="quotelev3">&gt; &gt;&gt; repository is only private because it contains a lot of other people's
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [public] MPI test suites and benchmarks, and we never looked into
</span><br>
<span class="quotelev3">&gt; &gt;&gt; redistribution rights for their software.  There's nothing really
</span><br>
<span class="quotelev3">&gt; &gt;&gt; secret about it -- we just haven't bothered to look into the IP
</span><br>
<span class="quotelev3">&gt; &gt;&gt; issues.  :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We use the MPI Testing Tool (MTT) for nightly regression across the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; community:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     <a href="http://www.open-mpi.org/mtt/">http://www.open-mpi.org/mtt/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We have weekday and weekend testing schedules.  M-Th we do nightly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tests; F-Mon morning, we do a long weekend schedule.  This weekend,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for example, we ran about 675k regression tests:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     <a href="http://www.open-mpi.org/mtt/index.php?do_redir=875">http://www.open-mpi.org/mtt/index.php?do_redir=875</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Mon, 03 Nov 2008 12:59:59 -0800
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: PattiMichelle &lt;miche1_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: users_at_[hidden], patti.sheaffer_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message-ID: &lt;490F664F.4000000_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I just found out I need to switch from mpich2 to openMPI for some code
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm running.  I noticed that it's available in an openSuSE repo (I'm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; using openSuSE 11.0 x86_64 on a TYAN 32-processor Opteron 8000
</span><br>
<span class="quotelev3">&gt; &gt;&gt; system), but when I was using mpich2 I seemed to have better luck
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compiling it from code.  This is the line I used:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # $ F77=/path/to/g95 F90=/path/to/g95 ./configure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --prefix=/some/place/mpich2-install
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But usually I left the &quot;--prefix=&quot; off and just let it install to it's
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default...  which is /usr/local/bin and that's nice because it's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; already in the PATH and very usable.  I guess my question is whether
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or not the defaults and configuration syntax have stayed the same in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openMPI.  I also could use a &quot;quickstart&quot; guide for a non-programming
</span><br>
<span class="quotelev3">&gt; &gt;&gt; user (e.g., I think I have to start a daemon before running
</span><br>
<span class="quotelev2">&gt; &gt; parallelized programs).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; THANKS!!!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PattiM.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------- next part -------------- HTML attachment scrubbed and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; removed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message: 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Mon, 3 Nov 2008 14:14:36 -0700
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] users Digest, Vol 1055, Issue 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message-ID: &lt;2FBDF4DC-B2DF-4486-A644-0F18C96E8EB2_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem is that you didn't specify or allocate any nodes for the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; job. At the least, you need to tell us what nodes to use via a
</span><br>
<span class="quotelev2">&gt; &gt; hostfile.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Alternatively, are you using a resource manager to assign the nodes?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI didn't see anything from one, but it could be that we just didn't
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; see the right envar.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 3, 2008, at 1:39 PM, Rima Chaudhuri wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks a lot Ralph!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I corrected the no_local to nolocal and now when I try to execute the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; script step1 (pls find it attached) [rchaud_at_helios amber10]$ ./step1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----- There are no available nodes allocated to this job. This could
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; be because no nodes were found or all the available nodes were
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; already used.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note that since the -nolocal option was given no processes can be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; launched on the local node.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----- [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Temporarily out of resource in file base/rmaps_base_support_fns.c at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; line 168 [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Temporarily out of resource in file rmaps_rr.c at line 402
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; out of resource in file base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [helios.structure.uic.edu:16335] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; out of resource in file rmgr_urm.c at line 372
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [helios.structure.uic.edu:16335] mpirun: spawn failed with errno=-3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If I use the script without the --nolocal option, I get the following
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; error:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [helios.structure.uic.edu:20708] [0,0,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mon, Nov 3, 2008 at 2:04 PM,  &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  1. Scyld Beowulf and openmpi (Rima Chaudhuri)  2. Re: Scyld Beowulf
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and openmpi (Ralph Castain)  3. Problems installing in Cygwin -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Problem with GCC 3.4.4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     (Gustavo Seabra)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  4. Re: MPI + Mixed language coding(Fortran90 + C++) (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  5. Re: Problems installing in Cygwin - Problem with GCC      3.4.4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Date: Mon, 3 Nov 2008 11:30:01 -0600
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: &quot;Rima Chaudhuri&quot; &lt;rima.chaudhuri_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: [OMPI users] Scyld Beowulf and openmpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       &lt;7503b17d0811030930i13acb974kc627983a1d481192_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am a new user of openmpi -- I've installed openmpi 1.2.6 for our
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; x86_64 linux scyld beowulf cluster inorder to make it run with
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; amber10 MD simulation package.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The nodes can see the home directory i.e. a bpsh to the nodes works
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; fine and lists all the files in the home directory where I have both
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; openmpi and amber10 installed.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; However if I try to run:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; $MPI_HOME/bin/mpirun -no_local=1 -np 4 $AMBERHOME/exe/ sander.MPI
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ........
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------ Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Host:       helios.structure.uic.edu
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Executable: -o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------ [helios.structure.uic.edu:23611] [0,0,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; found in file rmgr_urm.c at line 462
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [helios.structure.uic.edu:23611] mpirun: spawn failed with errno=-13
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; any cues?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -Rima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Date: Mon, 3 Nov 2008 12:08:36 -0700
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Scyld Beowulf and openmpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message-ID: &lt;91044A7E-ADA5-4B94-AA11-B3C1D9843606_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For starters, there is no &quot;-no_local&quot; option to mpirun. You might
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; want to look at mpirun --help, or man mpirun.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I suspect the option you wanted was --nolocal. Note that --nolocal
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; does not take an argument.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Mpirun is confused by the incorrect option and looking for an
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; incorrectly named executable.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Nov 3, 2008, at 10:30 AM, Rima Chaudhuri wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I am a new user of openmpi -- I've installed openmpi 1.2.6 for our
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; x86_64 linux scyld beowulf cluster inorder to make it run with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; amber10 MD simulation package.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The nodes can see the home directory i.e. a bpsh to the nodes works
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; fine and lists all the files in the home directory where I have
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; both openmpi and amber10 installed.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; However if I try to run:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; $MPI_HOME/bin/mpirun -no_local=1 -np 4 $AMBERHOME/exe/ sander.MPI
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ........
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ------- Failed to find the following executable:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Host:       helios.structure.uic.edu
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Executable: -o
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cannot continue.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ------- [helios.structure.uic.edu:23611] [0,0,0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Not found in file rmgr_urm.c at line 462
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [helios.structure.uic.edu:23611] mpirun: spawn failed with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; errno=-13
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; any cues?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -Rima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Date: Mon, 3 Nov 2008 14:53:55 -0500
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: &quot;Gustavo Seabra&quot; &lt;gustavo.seabra_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: [OMPI users] Problems installing in Cygwin - Problem with
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; GCC
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       3.4.4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       &lt;f79359b60811031153l5591e0f8j49a7e4d9fb02eea3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Here's a &quot;progress report&quot;... more questions in the end :-)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Finally, I was *almost* able to compile OpenMPI in Cygwin using the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; following configure command:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;               --with-mpi-param_check=always --with-threads=posix \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;               --enable-mpi-threads --disable-io-romio \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;               --enable-mca-no-
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; build=memory_mallopt,maffinity,paffinity \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;               --enable-contrib-no-build=vt \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;               FC=g95 'FFLAGS=-O0  -fno-second-underscore' CXX=g++
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I then had a very weird error during compilation of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ompi/tools/ompi_info/params.cc. (See below).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The lines causing the compilation errors are:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; vector.tcc:307:      const size_type __len = __old_size +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; vector.tcc:384:      const size_type __len = __old_size +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; stl_bvector.h:522:  const size_type __len = size() +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; std::max(size(), __n);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; stl_bvector.h:823:  const size_type __len = size() +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; std::max(size(), __n);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (Notice that those are from the standard gcc libraries.)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; After googling it for a while, I could find that this error is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; caused because, at come point, the source code being compiled
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; redefined the &quot;max&quot; function with a macro, g++ cannot recognize the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;std::max&quot; that happens in those lines and only &quot;sees&quot; a (...), thus
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; printing that cryptic complaint.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; very ugly hack: I have to go into those files and remove the &quot;std::&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; before
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I did try running the tests in the 'tests' directory (with 'make
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; check'), and I didn't get any alarming message, except that in some
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cases (class, threads, peruse) it printed &quot;All 0 tests passed&quot;. I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; got and &quot;All (n) tests passed&quot; (n&gt;0) for asm and datatype.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Can anybody comment on the meaning of those test results? Should I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; be alarmed with the &quot;All 0 tests passed&quot; messages?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Finally, in the absence of big red flags (that I noticed), I went
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ahead and tried to compile my program. However, as soon as
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; compilation starts, I get the following:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /local/openmpi/openmpi-1.3b1/bin/mpif90 -c -O3  -fno-second-
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; underscore -ffree-form  -o constants.o _constants.f
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------ Unfortunately, this installation of Open MPI was not compiled
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with Fortran 90 support.  As such, the mpif90 compiler is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; non-functional.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[1]: *** [constants.o] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/seabra/local/amber11/src/sander'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make: *** [parallel] Error 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Notice that I compiled OpenMPI with g95, so there *should* be
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Fortran95 support... Any ideas on what could be going wrong?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you very much,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Gustavo.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ======================================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Error in the compilation of params.cc
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ======================================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; $ g++ -DHAVE_CONFIG_H -I. -I../../../opal/include
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -I../../../orte/include -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_CONFIGURE_USER=&quot;\&quot;seabra\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;ACS02\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Sat Nov  1 20:44:32 EDT 2008\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -finline-functions -fno-strict-aliasing \&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..  -D_REENTRANT\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions \&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  -D_REENTRANT\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_BUILD_FFLAGS=&quot;\&quot;-O0  -fno-second-underscore\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-lutil  \&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_CC_ABSOLUTE=&quot;\&quot;/usr/bin/gcc\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_CXX_ABSOLUTE=&quot;\&quot;/usr/bin/g++\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_F77_ABSOLUTE=&quot;\&quot;/usr/bin/g77\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_F90_ABSOLUTE=&quot;\&quot;/usr/local/bin/g95\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../..  -D_REENTRANT  -O3
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -DNDEBUG -finline-functions  -MT param.o -MD -MP -MF $depbase.Tpo -c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -o param.o param.cc In file included from
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; vector:72,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                from ../../../ompi/tools/ompi_info/ompi_info.h:24,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                from param.cc:43:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h: In
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; member function `void std::vector&lt;bool,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _Alloc&gt;::_M_insert_range(std::_Bit_iterator, _ForwardIterator,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _ForwardIterator, std::forward_iterator_tag)':
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h:522:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; error: expected unqualified-id before '(' token
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h: In
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; member function `void std::vector&lt;bool,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _Alloc&gt;::_M_fill_insert(std::_Bit_iterator, size_t, bool)':
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h:823:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; error: expected unqualified-id before '(' token In file included
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; from /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; vector:75,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                from ../../../ompi/tools/ompi_info/ompi_info.h:24,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                from param.cc:43:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc: In
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; member function `void std::vector&lt;_Tp,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _Alloc&gt;::_M_fill_insert(__gnu_cxx::__normal_iterator&lt;typename
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _Alloc::pointer, std::vector&lt;_Tp, _Alloc&gt; &gt;, size_t, const _Tp&amp;)':
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc:307:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; error: expected unqualified-id before '(' token
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc: In
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; member function `void std::vector&lt;_Tp,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _Alloc&gt;::_M_range_insert(__gnu_cxx::__normal_iterator&lt;typename
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _Alloc::pointer, std::vector&lt;_Tp, _Alloc&gt; &gt;, _ForwardIterator,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _ForwardIterator, std::forward_iterator_tag)':
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc:384:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; error: expected unqualified-id before '(' token
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Gustavo Seabra
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Postdoctoral Associate
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Quantum Theory Project - University of Florida Gainesville - Florida
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - USA
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Date: Mon, 3 Nov 2008 14:54:25 -0500
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C+
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message-ID: &lt;45698801-0857-466F-A19D-C529F72D4A18_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Can you replicate the scenario in smaller / different cases?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - write a sample plugin in C instead of C++
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - write a non-MPI Fortran application that loads your C++
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; application
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - ...?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; In short, *MPI* shouldn't be interfering with Fortran/C++ common
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; blocks.  Try taking MPI out of the picture and see if that makes the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; problem go away.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Those are pretty much shots in the dark, but I don't know where to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; go, either -- try random things until you find what you want.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Nov 3, 2008, at 3:51 AM, Rajesh Ramaya wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Helllo Jeff, Gustavo, Mi
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   Thank for the advice. I am familiar with the difference in the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compiler code generation for C, C++ &amp; FORTRAN. I even tried to look
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; at some of the common block symbols. The name of the symbol remains
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the same. The only difference that I observe is in FORTRAN compiled
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *.o  0000000000515bc0 B aux7loc_  and the C++ compiled code  U
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; aux7loc_  the memory is not allocated as it has been declared as
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; extern in C++. When the executable loads the shared library it
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; finds all the undefined symbols. Atleast if it did not manage to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; find a single symbol it prints undefined symbol error.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I am completely stuck up and do not know how to continue further.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Rajesh
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Behalf Of Mi Yan
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sent: samedi 1 novembre 2008 23:26
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cc: 'Open MPI Users'; users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ++)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; So your tests show:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1. &quot;Shared library in FORTRAN + MPI executable in FORTRAN&quot; works.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2. &quot;Shared library in C++ + MPI executable in FORTRAN &quot; does not
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; work.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It seems to me that the symbols in C library are not really
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; recognized by FORTRAN executable as you thought. What compilers did
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; yo use to built OpenMPI?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Different compiler has different convention to handle symbols. E.g.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; if there is a variable &quot;var_foo&quot; in your FORTRAN code, some FORTRN
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compiler will save &quot;var_foo_&quot; in the object file by default; if you
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; want to access &quot;var_foo&quot; in C code, you actually need to refer
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;var_foo_&quot; in C code. If you define &quot;var_foo&quot; in a module in the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; FORTAN compiler, some FORTRAN compiler may append the module name
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; to &quot;var_foo&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; So I suggest to check the symbols in the object files generated by
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; your FORTAN and C compiler to see the difference.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mi
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;image001.gif&gt;&quot;Rajesh Ramaya&quot; &lt;rajesh.ramaya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;Rajesh Ramaya&quot; &lt;rajesh.ramaya_at_[hidden]&gt; Sent by:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 10/31/2008 03:07 PM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Please respond to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Open MPI Users &lt;users_at_[hidden]&gt; &lt;image002.gif&gt; To
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;image003.gif&gt; &quot;'Open MPI Users'&quot; &lt;users_at_[hidden]&gt;, &quot;'Jeff
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Squyres'&quot; &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;image002.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; cc
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;image002.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subject
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;image003.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello Jeff Squyres,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  Thank you very much for the immediate reply. I am able to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; successfully access the data from the common block but the values
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; are zero. In my algorithm I even update a common block but the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; update made by the shared library is not taken in to account by the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; executable. Can you please be very specific how to make the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; parallel algorithm aware of the data?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Actually I am
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; not writing any MPI code inside? It's the executable (third party
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; software)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; who does that part. All that I am doing is to compile my code with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MPI c compiler and add it in the LD_LIBIRARY_PATH.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; In fact I did a simple test by creating a shared library using a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; FORTRAN code and the update made to the common block is taken in to
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; account by the executable. Is there any flag or pragma that need to
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; be activated for mixed language MPI?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thank you once again for the reply.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Rajesh
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sent: vendredi 31 octobre 2008 18:53
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ++)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Oct 31, 2008, at 11:57 AM, Rajesh Ramaya wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;    I am completely new to MPI. I have a basic question concerning
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; MPI and mixed language coding. I hope any of you could help me
</span><br>
<span class="quotelev2">&gt; &gt; out.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Is it possible to access FORTRAN common blocks in C++ in a MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; compiled code. It works without MPI but as soon I switch to MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; the access of common block does not work anymore.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I have a Linux MPI executable which loads a shared library at
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; runtime and resolves all undefined symbols etc  The shared library
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; is written in C++ and the MPI executable in written in FORTRAN.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Some
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; of the input that the shared library looking for are in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Fortran common blocks. As I access those common blocks during
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; runtime the values are not  initialized.  I would like to know if
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; what I am doing is possible ?I hope that my problem is clear......
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Generally, MPI should not get in the way of sharing common blocks
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; between Fortran and C/C++.  Indeed, in Open MPI itself, we share a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; few common blocks between Fortran and the main C Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; implementation.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; What is the exact symptom that you are seeing?  Is the application
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; failing to resolve symbols at run-time, possibly indicating that
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; something hasn't instantiated a common block?  Or are you able to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; successfully access the data from the common block, but it doesn't
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; have the values you expect (e.g., perhaps you're seeing all zeros)?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If the former, you might want to check your build procedure.  You
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *should* be able to simply replace your C++ / F90 compilers with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpicxx and mpif90, respectively, and be able to build an MPI
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; version of your app.  If the latter, you might need to make your
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; parallel algorithm aware of what data is available in which MPI
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; process -- perhaps not all the data is filled in on each MPI
</span><br>
<span class="quotelev2">&gt; &gt; process...?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Date: Mon, 3 Nov 2008 15:04:47 -0500
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Problems installing in Cygwin - Problem
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       GCC     3.4.4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Message-ID: &lt;8E364B51-6726-4533-ADE2-AEA266380DCC_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Nov 3, 2008, at 2:53 PM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Finally, I was *almost* able to compile OpenMPI in Cygwin using the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; following configure command:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;               --with-mpi-param_check=always --with-threads=posix \
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;               --enable-mpi-threads --disable-io-romio \
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;               --enable-mca-no-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; build=memory_mallopt,maffinity,paffinity \
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;               --enable-contrib-no-build=vt \
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;               FC=g95 'FFLAGS=-O0  -fno-second-underscore' CXX=g++
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For your fortran issue, the Fortran 90 interface needs the Fortran
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 77 interface.  So you need to supply an F77 as well (the output from
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; configure should indicate that the F90 interface was disabled
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; because the F77 interface was disabled).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I then had a very weird error during compilation of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ompi/tools/ompi_info/params.cc. (See below).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The lines causing the compilation errors are:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; vector.tcc:307:      const size_type __len = __old_size +
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; vector.tcc:384:      const size_type __len = __old_size +
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; stl_bvector.h:522:  const size_type __len = size() +
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; std::max(size(), __n);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; stl_bvector.h:823:  const size_type __len = size() +
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; std::max(size(), __n);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (Notice that those are from the standard gcc libraries.)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; After googling it for a while, I could find that this error is
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; caused because, at come point, the source code being compiled
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; redefined the &quot;max&quot; function with a macro, g++ cannot recognize the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;std::max&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; happens in those lines and only &quot;sees&quot; a (...), thus printing that
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; cryptic complaint.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; very ugly hack: I have to go into those files and remove the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;std::&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; before
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm not sure I follow -- I don't see anywhere in OMPI where we use
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; std::max.  What areas did you find that you needed to change?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I did try running the tests in the 'tests' directory (with 'make
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; check'), and I didn't get any alarming message, except that in some
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; cases (class, threads, peruse) it printed &quot;All 0 tests passed&quot;. I
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; got and &quot;All (n) tests passed&quot; (n&gt;0) for asm and datatype.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Can anybody comment on the meaning of those test results? Should I
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; be alarmed with the &quot;All 0 tests passed&quot; messages?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; No.  We don't really maintain the &quot;make check&quot; stuff too well.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; End of users Digest, Vol 1055, Issue 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Rima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;step1&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; End of users Digest, Vol 1055, Issue 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; **************************************
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; -Rima
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; End of users Digest, Vol 1057, Issue 3
</span><br>
<span class="quotelev2">&gt; &gt; **************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -Rima
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Dr. Daniel Gruner                        dgruner_at_[hidden]
Dept. of Chemistry                       daniel.gruner_at_[hidden]
University of Toronto                    phone:  (416)-978-8689
80 St. George Street                     fax:    (416)-978-5325
Toronto, ON  M5S 3H6, Canada             finger for PGP public key
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7214.php">Jeff Squyres: "Re: [OMPI users] OK, got it installed, but...  can't find libraries"</a>
<li><strong>Previous message:</strong> <a href="7212.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7212.php">Rima Chaudhuri: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
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
