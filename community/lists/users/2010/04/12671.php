<?
$subject_val = "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 17 15:13:55 2010" -->
<!-- isoreceived="20100417191355" -->
<!-- sent="Sat, 17 Apr 2010 13:13:47 -0600" -->
<!-- isosent="20100417191347" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile" -->
<!-- id="7FAEDD65-73E1-4CE0-99EC-0F5DF3087184_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="r2nfc029d6c1004171017h511d9696k676b3d31478e4b1d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-17 15:13:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12672.php">Grzegorz Maj: "[OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12670.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12670.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12676.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12676.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 17, 2010, at 11:17 AM, Mario Ogrizek wrote:
<br>
<p><span class="quotelev1">&gt; Hahaha, ok then that WAS silly! :D
</span><br>
<span class="quotelev1">&gt; So there is no way to utilize both cores with mpi?
</span><br>
<p>We are using both cores - it is just that they are on the same node. Unless told otherwise, the processes will use shared memory for communication.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah well, I'll correct that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From console, im starting a job like this: mpirun -np 4 Program, where i want to run a Program on 4 processors.
</span><br>
<span class="quotelev1">&gt; I was just stumbled when i got same output 4 times, like there are 4 processes ranked 0.
</span><br>
<span class="quotelev1">&gt; While with the old version of mpi (1.2) same execution would give 4 processes ranked 0..3.
</span><br>
<p>And so you should - if not, then there is something wrong. No way mpirun would start 4 processes ranked 0. How are you printing the rank? Are you sure you are getting it correctly?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope you see my question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 17, 2010 at 6:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2010, at 1:16 AM, Mario Ogrizek wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am new to mpi, so I'm sorry for any silly questions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My idea was to try to use dual core machine as two nodes. I have a limited access to a cluster, so this was just for &quot;testing&quot; purposes.
</span><br>
<span class="quotelev2">&gt;&gt; My default hostfile contains usual comments and this two nodes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node1
</span><br>
<span class="quotelev2">&gt;&gt; I thought that each processor is a node for MPI purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid not - it is just another processor on that node. So you only have one node as far as OMPI is concerned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Im not sure what do you mean with &quot;mpirun cmd line&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How are you starting your job? The usual way is with &quot;mpirun -n N ...&quot;. That is what we mean by the &quot;mpirun cmd line&quot; - i.e., what command are you using to start your job?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It sounds like things are actually working correctly. You might look at &quot;mpirun -h&quot; for possible options of interest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mario
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Apr 17, 2010 at 1:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 16, 2010, at 5:08 PM, Mario Ogrizek wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked the default MCA param file, and found it was there that was (automatically) specified as a relative path, so i changed it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So now, it works, altho, still something is not right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems like its creating 4 times only 1 process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure if it has to do something with my hostfile, it contains:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running this on a simple dualcore machine, so i specified it as a localhost with two nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand this comment - a dual core machine would still be a single node. Just happens to have two processors in it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you send the contents of your hostfile and your mpirun cmd line?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mario
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Apr 17, 2010 at 12:52 AM, Mario Ogrizek &lt;mario.guardian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand, so, its looking for a working_dir/usr/local/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I managed to run a hello world program from the console, while my wd was just &quot;/&quot; and it worked, altho strangely...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example for 4 procs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello MPI World From process 0: Num processes: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello MPI World From process 0: Num processes: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello MPI World From process 0: Num processes: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello MPI World From process 0: Num processes: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, you are saying i allways have to be in &quot;/&quot; to run mpi programs, or there is a way for mpi to search absolute path?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems pretty inconvinient this way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think v 1.2 didnt have this limitation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does this have to do anything with LD_LIBRARY_PATH?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mario
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Apr 16, 2010 at 7:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How did you specify it? Command line? Default MCA param file?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 16, 2010, at 11:44 AM, Mario Ogrizek wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any idea how to solve this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Apr 16, 2010 at 7:40 PM, Timur Magomedov &lt;timur.magomedov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks that you hostfile path should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be /usr/local/etc/openmpi-default-hostfile not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; usr/local/etc/openmpi-default-hostfile but somehow Open MPI gets the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; second path.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#208;&#146; &#208;&#159;&#209;&#130;&#208;&#189;, 16/04/2010 &#208;&#178; 19:10 +0200, Mario Ogrizek &#208;&#191;&#208;&#184;&#209;&#136;&#208;&#181;&#209;&#130;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Well, im not sure why should i name it /openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Especially, because mpirun v1.2 executes without any errors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; But, i made a copy named /openmpi-default-hostfile, and still, the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; same result.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; This is the whole error message for a simple hello world program:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;     usr/local/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; base/ras_base_allocate.c at line 186
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; base/plm_base_launch_support.c at line 72
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; plm_rsh_module.c at line 990
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ps. PTP is a parallel tools platform plugin for eclipse
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Mario
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Timur Magomedov
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Senior C++ Developer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DevelopOnBox LLC / Zodiac Interactive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12672.php">Grzegorz Maj: "[OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12670.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12670.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12676.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12676.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
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
