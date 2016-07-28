<?
$subject_val = "Re: [OMPI users] mpirun fails with no allocated resources";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 03:36:20 2012" -->
<!-- isoreceived="20120229083620" -->
<!-- sent="Wed, 29 Feb 2012 09:36:13 +0100 (CET)" -->
<!-- isosent="20120229083613" -->
<!-- name="Muhammad Wahaj Sethi" -->
<!-- email="hpcmseth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails with no allocated resources" -->
<!-- id="23595750.116391.1330504573139.JavaMail.root_at_epsilon" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FB67BF7B-9EC2-43CF-8E51-A706E8544A23_at_open-mpi.org" -->
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
<strong>From:</strong> Muhammad Wahaj Sethi (<em>hpcmseth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 03:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18590.php">Auclair Francis: "[OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Previous message:</strong> <a href="18588.php">Jingcha Joba: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>In reply to:</strong> <a href="18582.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18596.php">Jeffrey Squyres: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Reply:</strong> <a href="18596.php">Jeffrey Squyres: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Snapshot of my hosts file is present below. localhost is present here.
<br>
&nbsp;
<br>
127.0.0.1	localhost
<br>
127.0.1.1	wahaj-ThinkPad-T510
<br>
10.42.43.1	node0
<br>
10.42.43.2	node1
<br>
<p>Every thing works fine if I don't specify host names. 
<br>
<p>This problem only specific to Open MPI version 1.7. 
<br>
<p>Open MPI version 1.5.5 doesn't produces this error message.
<br>
&nbsp;
<br>
----- Original Message -----
<br>
From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Tuesday, February 28, 2012 5:55:43 PM
<br>
Subject: Re: [OMPI users] mpirun fails with no allocated resources
<br>
<p>Try leaving off the -H localhost,localhost front he cmd line - the local host will automatically be included, so that shouldn't be required.
<br>
<p>I believe the problem is that &quot;localhost&quot; isn't the name of your machine, and so we look and don't see that machine anywhere.
<br>
<p>On Feb 28, 2012, at 9:42 AM, Muhammad Wahaj Sethi wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;    I have installed newer version but problem still persists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Package: Open MPI wahaj_at_wahaj-ThinkPad-T510 Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.7a1r26065
</span><br>
<span class="quotelev1">&gt;  Open MPI repo revision: r26065
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Unreleased developer copy
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.7a1r26065
</span><br>
<span class="quotelev1">&gt;  Open RTE repo revision: r26065
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Unreleased developer copy
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.7a1r26065
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: r26065
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Unreleased developer copy
</span><br>
<span class="quotelev1">&gt;                 MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.7a1r26065
</span><br>
<span class="quotelev1">&gt;                  Prefix: /home/wahaj/openmpi-install
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sequence of steps I followed is mention below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; svn update
</span><br>
<span class="quotelev1">&gt; make distclean
</span><br>
<span class="quotelev1">&gt; ./autogen.pl
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/openmpi-install
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wahaj_at_wahaj-ThinkPad-T510:~$ mpirun -np 2 -H localhost,localhost /bin/hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no allocated resources for the application 
</span><br>
<span class="quotelev1">&gt;  /bin/hostname
</span><br>
<span class="quotelev1">&gt; that match the requested mapping:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the 
</span><br>
<span class="quotelev1">&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Wahaj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 28, 2012 3:30:47 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun fails with no allocated resources
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2012, at 7:24 AM, Muhammad Wahaj Sethi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt;    I am trying run following command using trunk version 1.7a1r25984.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -H localhost,localhost /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It fails with following error message.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Every thing works fine if I use trunk version 1.5.5rc3r26063.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas, how it can be fixed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure - update your trunk version. It's been fixed for awhile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; Wahaj
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18590.php">Auclair Francis: "[OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Previous message:</strong> <a href="18588.php">Jingcha Joba: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>In reply to:</strong> <a href="18582.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18596.php">Jeffrey Squyres: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Reply:</strong> <a href="18596.php">Jeffrey Squyres: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
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
