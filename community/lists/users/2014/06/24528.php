<?
$subject_val = "Re: [OMPI users] can't preload binary to remote machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 23:46:35 2014" -->
<!-- isoreceived="20140604034635" -->
<!-- sent="Tue, 3 Jun 2014 20:46:30 -0700" -->
<!-- isosent="20140604034630" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't preload binary to remote machine" -->
<!-- id="882D67F7-4A7B-47F3-A974-874ED2CF6D31_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140520132900.3E6F32679E9_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't preload binary to remote machine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-03 23:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24529.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24527.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] can't preload binary to remote machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delayed response - been a little hectic here.
<br>
<p>I suspect the problem is that we really need a passwordless ssh connection in order to preload the file for 1.6.5. This isn't required in the 1.8 series, so you might want to try it with 1.8.1. Otherwise, resolve the password issue and it should work.
<br>
<p><p>On May 20, 2014, at 6:28 AM, Cordone, Guthrie &lt;gcordone_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have two linux machines, each running Open MPI 1.6.5. I want to use the preload binary command in an appfile to execute a binary from the host on both the node and the host during mpirun. Right now I am using an appfile with the contents:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #appfile.test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -host user_at_remotehost --preload-binary -np 1 run_date
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -host localhost -np 1 run_date
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where 'run_date' is an executable that creates a text file with the current date. I run the appfile using the command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -app appfile.test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I enter user_at_remotehost's password when prompted and then immediately receive an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Remote peer ([[53924,0],1]) failed to preload a file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exit Status: 256
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Local  File: /tmp/openmpi-sessions-user_at_remotehost_0/53924/0/run_date
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Remote File: run_date
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   scp  localhost:/home/user/appfileTest/run_date /tmp/openmpi-sessions-user_at_remotehost_0/53924/0/run_date
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will continue attempting to launch the process(es).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or execute an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: run_date
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node: user_at_remotehost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After this error, I get returned to the command line to see that the 'run_date' binary has been executed on the localhost but not the remotehost.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been able to run on both machines by manually placing the binary on the remotehost and removing the '-preload-binary' command from the appfile, however I need the appfile to place the binary for me. I have also tried setting the remote machines directory using '-wdir' but receive the same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you guys know what the issue is?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Guthrie Cordone
</span><br>
<span class="quotelev1">&gt; Systems Engineering Intern
</span><br>
<span class="quotelev1">&gt; Phone: 315-883-4484
</span><br>
<span class="quotelev1">&gt; gcordone_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24529.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24527.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] can't preload binary to remote machine"</a>
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
