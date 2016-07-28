<?
$subject_val = "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 10:31:01 2013" -->
<!-- isoreceived="20130123153101" -->
<!-- sent="Wed, 23 Jan 2013 07:30:53 -0800" -->
<!-- isosent="20130123153053" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR" -->
<!-- id="774B3066-8259-4C3D-BBB4-5E5D01A514EA_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEQVjDOBqLf844wX4G2zm019WSMj=fLuWbX184o-4p3+Ys3Apg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 10:30:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21211.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21209.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21209.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect the problem is that the rsh/ssh launcher is attempting to use a tree pattern for launching the apps - i.e., mpirun launches a daemon on the first couple of nodes, and then those daemons launch daemons on the next level. If rsh/ssh isn't supported on those backend nodes, then this won't work.
<br>
<p>Try running it with &quot;-mca plm_rsh_no_tree_spawn 1&quot; on your cmd line. This will instruct OMPi to not use a tree pattern, but to have mpirun directly launch the daemons itself.
<br>
<p><p>On Jan 23, 2013, at 5:41 AM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes I can but with at most two machines as slave and one machine as master, If I try to add another one as slave I get those errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Il giorno 23/gen/2013 14:38, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; ha scritto:
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand you.  Does Open MPI work across multiple machines?  I.e., can you do all three of those steps across multiple machines?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2013, at 8:16 AM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm sure that openmpi works, morever my problem happens only with more than 2 slaves (on different machines while in local it greatly works with any number of slaves).
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ada
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Il giorno 23/gen/2013 14:04, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; ha scritto:
</span><br>
<span class="quotelev2">&gt; &gt; Are you able to run the C examples in the examples/ directory from the tarball?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Our README suggests the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; When verifying a new Open MPI installation, we recommend running three
</span><br>
<span class="quotelev2">&gt; &gt; tests:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Use &quot;mpirun&quot; to launch a non-MPI program (e.g., hostname or uptime)
</span><br>
<span class="quotelev2">&gt; &gt;    across multiple nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. Use &quot;mpirun&quot; to launch a trivial MPI program that does no MPI
</span><br>
<span class="quotelev2">&gt; &gt;    communication (e.g., the hello_c program in the examples/ directory
</span><br>
<span class="quotelev2">&gt; &gt;    in the Open MPI distribution).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. Use &quot;mpirun&quot; to launch a trivial MPI program that sends and
</span><br>
<span class="quotelev2">&gt; &gt;    receives a few MPI messages (e.g., the ring_c program in the
</span><br>
<span class="quotelev2">&gt; &gt;    examples/ directory in the Open MPI distribution).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you can run all three of these tests successfully, that is a good
</span><br>
<span class="quotelev2">&gt; &gt; indication that Open MPI built and installed properly.
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 23, 2013, at 7:41 AM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've installed the latest snapshot taken from svn developer's trunk but I had the same problems. This is my configuration:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       &#149; Ubuntu 2.6.38-8 kernel
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       &#149; Openssh_5.8p1 openssl 0.9.8o
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       &#149; Libtool version 2.4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       &#149; Open mpi 1.7 rc5 and latest snapshots.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you think my problem could be related with the operating system used or with any parameter or configuration? I've also checked the ssh log file but I didn't find any problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ada
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Il giorno marted&#236; 22 gennaio 2013, Ralph Castain ha scritto:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ouch - no, you'd have to take it from the developer's trunk, either via svn checkout or the nightly developer's snapshot
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Jan 22, 2013, at 12:35 PM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; My problem is that I have to use openmpi 1.7 rc5 because I'm using the Java binding mpijava... Is it present in the latest snapshot you told me? If so where can I find it?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks a lot
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ada
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Il giorno 22/gen/2013 21:03, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; ha scritto:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; It seems to be working fine for me with the latest 1.7 tarball (not rc5 - I didn't test that one). Could be there was a problem that has since been fixed. We are getting ready to release an updated rc, so you might want to try it (or use the latest nightly 1.7 snapshot).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; On Jan 22, 2013, at 9:57 AM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I'm trying to run my mpi program using open mpi 1.7 rc5 on 4 machines using the command:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; mpirun -np4 -hostfile file a.out
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; but i get the following message errors:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file ../../../../../ompi/orte/mca/rml/oob/rml_oob_send.c
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; attempted to send to [[21341,0],2]: tag 15
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file ../../../../ompi/orte/mca/grpcomm/base/grpcomm_base_xcast.c
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; The file etc/hosts is composed by ipaddress hostname, I have exchange ssh keys among the machines and ssh login works without requiring authentication password. Surprisingly if I try to run my program with at most 2 hosts, and so the file hosts contains only two hosts, it works but if i try to run my program with more than two hosts i have this error; mpi works well on each machine and I also tried to run my program with different couple of machines in order to be sure that no machine could be the problem.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Can you help me please?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Ada
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21211.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21209.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21209.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
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
