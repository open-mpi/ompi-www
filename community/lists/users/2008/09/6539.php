<?
$subject_val = "Re: [OMPI users] Problem using VampirTrace";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 09:04:11 2008" -->
<!-- isoreceived="20080915130411" -->
<!-- sent="Mon, 15 Sep 2008 15:04:07 +0200" -->
<!-- isosent="20080915130407" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem using VampirTrace" -->
<!-- id="48CE5D47.50407_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200809021437.41823.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem using VampirTrace<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 09:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6538.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6303.php">Thomas Ropars: "[OMPI users] Problem using VampirTrace"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I don't have a common file system for all cluster nodes.
<br>
<p>I've tried to run the application again with VT_UNIFY=no and to call 
<br>
vtunify manually. It works well. I managed to get the .otf file.
<br>
<p>Thank you.
<br>
<p>Thomas Ropars
<br>
<p><p>Andreas Kn&#252;pfer wrote:
<br>
<span class="quotelev1">&gt; Hello Thomas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sorry for the delay. My first asumption about the cause of your problem is the 
</span><br>
<span class="quotelev1">&gt; so called &quot;unify&quot; process. This is a post-processing step which is performed 
</span><br>
<span class="quotelev1">&gt; automatically after the trace run. This step needs read access to all files, 
</span><br>
<span class="quotelev1">&gt; though. So, do you have a common file system for all cluster nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If yes, set the env variable VT_PFORM_GDIR point there. Then the traces will 
</span><br>
<span class="quotelev1">&gt; be copied there from the location VT_PFORM_LDIR which still can be a 
</span><br>
<span class="quotelev1">&gt; node-local directory. Then everything will be handled automatically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If not, please set VT_UNIFY=no in order to disable automatic unification. Then 
</span><br>
<span class="quotelev1">&gt; you need to call vtunify manually. Please copy all files from the run 
</span><br>
<span class="quotelev1">&gt; directory that start with your OTF file prefix to a common directory and call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %&gt; vtunify &lt;number of processes&gt; &lt;file prefix&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there. This should give you the &lt;prefix&gt;.otf file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please give this a try. If it is not working, please give me an 'ls -alh' from 
</span><br>
<span class="quotelev1">&gt; your trace directory/directories.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards, Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.: Please have my email on CC, I'm not on the users_at_[hidden] list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Thomas Ropars &lt;tropars_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: August 11, 2008 3:47:54 PM IST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] Problem using VampirTrace
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to use VampirTrace.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm working with r19234 of svn trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I try to run a simple application with 4 processes on the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computer, it works well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But if try to use the same application with the 4 processes executed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on 4 different computers, I never get the .otf file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried to run with VT_VERBOSE=yes, and I get the following trace:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VampirTrace: Thread object #0 created, total number is 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VampirTrace: Opened OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe8349ca.3294 id 1] for generation [buffer 32000000 bytes]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VampirTrace: Thread object #0 created, total number is 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VampirTrace: Opened OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe834bca.3020 id 1] for generation [buffer 32000000 bytes]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VampirTrace: Thread object #0 created, total number is 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VampirTrace: Opened OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe834aca.3040 id 1] for generation [buffer 32000000 bytes]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VampirTrace: Thread object #0 created, total number is 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VampirTrace: Opened OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe834fca.3011 id 1] for generation [buffer 32000000 bytes]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ring : Start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ring : End
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1]VampirTrace: Flushed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe834aca.3040 id 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2]VampirTrace: Flushed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe834bca.3020 id 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1]VampirTrace: Closed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe834aca.3040 id 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3]VampirTrace: Flushed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe834fca.3011 id 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2]VampirTrace: Closed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe834bca.3020 id 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0]VampirTrace: Flushed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe8349ca.3294 id 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1]VampirTrace: Wrote unify control file ./ring-vt.2.uctl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2]VampirTrace: Wrote unify control file ./ring-vt.3.uctl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3]VampirTrace: Closed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe834fca.3011 id 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0]VampirTrace: Closed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt.fffffffffe8349ca.3294 id 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0]VampirTrace: Wrote unify control file ./ring-vt.1.uctl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0]VampirTrace: Checking for ./ring-vt.1.uctl ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0]VampirTrace: Checking for ./ring-vt.2.uctl ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834aca.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3040.1.def
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834bca.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3020.1.def
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3]VampirTrace: Wrote unify control file ./ring-vt.4.uctl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834aca.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3040.1.events
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834bca.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3020.1.events
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834fca.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3011.1.def
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1]VampirTrace: Thread object #0 deleted, leaving 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2]VampirTrace: Thread object #0 deleted, leaving 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834fca.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3011.1.events
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3]VampirTrace: Thread object #0 deleted, leaving 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6538.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6303.php">Thomas Ropars: "[OMPI users] Problem using VampirTrace"</a>
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
