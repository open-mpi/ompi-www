<?
$subject_val = "Re: [OMPI users] mpirun fails with no allocated resources";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 07:04:33 2012" -->
<!-- isoreceived="20120229120433" -->
<!-- sent="Wed, 29 Feb 2012 06:55:58 -0500" -->
<!-- isosent="20120229115558" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails with no allocated resources" -->
<!-- id="951DB2ED-2D8A-4DFE-8445-1488387929AB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="23595750.116391.1330504573139.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails with no allocated resources<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 06:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18597.php">Stefano Dal Pont: "[OMPI users] archlinux segmentation fault error"</a>
<li><strong>Previous message:</strong> <a href="18595.php">Jeffrey Squyres: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>In reply to:</strong> <a href="18589.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18603.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Reply:</strong> <a href="18603.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to put this up front: using the trunk is subject to have these kinds of problems.  It is the head of development, after all -- things sometimes break. :-)
<br>
<p>Ralph: FWIW, I can replicate this problem on my Mac (OS X Lion) with the SVN trunk HEAD (svnversion tells me I have 26070M):
<br>
<p>-----
<br>
[6:46] jsquyres-mac:~/svn/ompi % mpirun -np 1 --host localhost uptime
<br>
--------------------------------------------------------------------------
<br>
There are no allocated resources for the application 
<br>
&nbsp;&nbsp;uptime
<br>
that match the requested mapping:
<br>
&nbsp;&nbsp;
<br>
<p>Verify that you have mapped the allocated resources properly using the 
<br>
--host or --hostfile specification.
<br>
--------------------------------------------------------------------------
<br>
[6:46] jsquyres-mac:~/svn/ompi % cat /etc/hosts
<br>
##
<br>
# Host Database
<br>
#
<br>
# localhost is used to configure the loopback interface
<br>
# when the system is booting.  Do not change this entry.
<br>
##
<br>
127.0.0.1	localhost
<br>
255.255.255.255	broadcasthost
<br>
::1             localhost 
<br>
fe80::1%lo0	localhost
<br>
[6:46] jsquyres-mac:~/svn/ompi % 
<br>
-----
<br>
<p><p>On Feb 29, 2012, at 3:36 AM, Muhammad Wahaj Sethi wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Snapshot of my hosts file is present below. localhost is present here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 127.0.0.1	localhost
</span><br>
<span class="quotelev1">&gt; 127.0.1.1	wahaj-ThinkPad-T510
</span><br>
<span class="quotelev1">&gt; 10.42.43.1	node0
</span><br>
<span class="quotelev1">&gt; 10.42.43.2	node1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every thing works fine if I don't specify host names. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This problem only specific to Open MPI version 1.7. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI version 1.5.5 doesn't produces this error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 28, 2012 5:55:43 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun fails with no allocated resources
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try leaving off the -H localhost,localhost front he cmd line - the local host will automatically be included, so that shouldn't be required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the problem is that &quot;localhost&quot; isn't the name of your machine, and so we look and don't see that machine anywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2012, at 9:42 AM, Muhammad Wahaj Sethi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;   I have installed newer version but problem still persists.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Package: Open MPI wahaj_at_wahaj-ThinkPad-T510 Distribution
</span><br>
<span class="quotelev2">&gt;&gt;               Open MPI: 1.7a1r26065
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI repo revision: r26065
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI release date: Unreleased developer copy
</span><br>
<span class="quotelev2">&gt;&gt;               Open RTE: 1.7a1r26065
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE repo revision: r26065
</span><br>
<span class="quotelev2">&gt;&gt;  Open RTE release date: Unreleased developer copy
</span><br>
<span class="quotelev2">&gt;&gt;                   OPAL: 1.7a1r26065
</span><br>
<span class="quotelev2">&gt;&gt;     OPAL repo revision: r26065
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL release date: Unreleased developer copy
</span><br>
<span class="quotelev2">&gt;&gt;                MPI API: 2.1
</span><br>
<span class="quotelev2">&gt;&gt;           Ident string: 1.7a1r26065
</span><br>
<span class="quotelev2">&gt;&gt;                 Prefix: /home/wahaj/openmpi-install
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sequence of steps I followed is mention below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; svn update
</span><br>
<span class="quotelev2">&gt;&gt; make distclean
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.pl
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$HOME/openmpi-install
</span><br>
<span class="quotelev2">&gt;&gt; make all install
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wahaj_at_wahaj-ThinkPad-T510:~$ mpirun -np 2 -H localhost,localhost /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are no allocated resources for the application 
</span><br>
<span class="quotelev2">&gt;&gt; /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Verify that you have mapped the allocated resources properly using the 
</span><br>
<span class="quotelev2">&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; Wahaj
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, February 28, 2012 3:30:47 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] mpirun fails with no allocated resources
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 28, 2012, at 7:24 AM, Muhammad Wahaj Sethi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I am trying run following command using trunk version 1.7a1r25984.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 -H localhost,localhost /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It fails with following error message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are no allocated resources for the application 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Verify that you have mapped the allocated resources properly using the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Every thing works fine if I use trunk version 1.5.5rc3r26063.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas, how it can be fixed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sure - update your trunk version. It's been fixed for awhile.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wahaj
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
<li><strong>Next message:</strong> <a href="18597.php">Stefano Dal Pont: "[OMPI users] archlinux segmentation fault error"</a>
<li><strong>Previous message:</strong> <a href="18595.php">Jeffrey Squyres: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>In reply to:</strong> <a href="18589.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18603.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Reply:</strong> <a href="18603.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
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
