<?
$subject_val = "Re: [OMPI users] glut display 'occasionally' opens";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 01:11:34 2010" -->
<!-- isoreceived="20101207061134" -->
<!-- sent="Mon, 6 Dec 2010 23:11:25 -0700" -->
<!-- isosent="20101207061125" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] glut display 'occasionally' opens" -->
<!-- id="921BDB5D-B77D-4ADD-8638-456240511671_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="63004E0F-213C-4243-A4BC-9442135A4F92_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] glut display 'occasionally' opens<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 01:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15022.php">Hannes Brandstätter-Müller: "[OMPI users] Interaction with boost::asio"</a>
<li><strong>Previous message:</strong> <a href="15020.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>In reply to:</strong> <a href="15019.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15030.php">Jeff Squyres: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15030.php">Jeff Squyres: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW: you might check to see if the DISPLAY envar is being correctly set on all procs. Two ways to do it:
<br>
<p>1. launch &quot;env&quot; as your app to print out the envars - can be messy on the output end, though you could use the mpirun options to tag and/or split the output from the procs
<br>
<p>2. in your app, just do a getenv and print the display envar
<br>
<p>Would help tell us if there is an OMPI problem, or just a problem in how you setup X11
<br>
<p><p>On Dec 6, 2010, at 9:18 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...yes, the code does seem to handle that '=' being in there. Forgot it was there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Depending on the version you are using, mpirun could just open the display for you. There is an mpirun option that tells us to please start each app in its own xterm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You shouldn't need forwarding if you are going to see it on a local display (i.e., one physically attached to the node), assuming you are logged into those nodes (otherwise you don't own the display).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are trying to view it on your own local display, then you do need forwarding setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2010, at 8:36 PM, brad baker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Without including the -x DISPLAY, glut doesn't know what display to open.  For instance, without the -x DISPLAY parameter glut returns an error from each process stating that it could not find display &quot;&quot; (empty string).  This strategy is briefly described in the openmpi   FAQs for launching gui applications with openmpi. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm assuming that by setting the DISPLAY envar to :0.0, each process will render to their local display, which is my intention, and as I previously stated works for up to 2 processes. So I believe it to be necessary.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But I'm thinking I may have to configure some kind of  X11 forwarding.  I'm not sure...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply! Any more ideas?
</span><br>
<span class="quotelev2">&gt;&gt; Brad
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 6, 2010 at 6:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Guess I'm not entirely sure I understand how this is supposed to work. All the -x does is tell us to pickup an envar of the given name and forward its value to the remote apps. You can't set the envar's value on the cmd line. So you told mpirun to pickup the value of an envar called &quot;DISPLAY=:0.0&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So yes - I would expect this would be behaving strangely.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you tell us -x DISPLAY, we'll pickup the local value of DISPLAY and forward it. What that will cause your app to do is, I suppose, up to it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2010, at 12:42 PM, brad baker wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm working on an mpi application that opens a glut display on each node of a small cluster for opengl rendering (each node has its own display). My current implementation scales great with mpich2, but I'd like to use openmpi infiniband, which is giving me trouble.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've had some success with the -x DISPLAY=:0.0 parameter to mpirun, which will open the display on up to 2 of my nodes... any 2.  But when I attempt to run the application on 4 nodes, the display is non-deterministic. If any open at all process 0 definately will, and sometimes process 3 along with that.  I haven't observed much behavior from process 1 or 2.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My command:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -x DISPLAY=:0.0 -np 4 -hostfile ~/openmpi.hosts ./myapp
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've tried adding the -d option with no success.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Does anyone have any suggestions or comments?  I'll certainly provide more information if required.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Brad
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15021/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15022.php">Hannes Brandstätter-Müller: "[OMPI users] Interaction with boost::asio"</a>
<li><strong>Previous message:</strong> <a href="15020.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>In reply to:</strong> <a href="15019.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15030.php">Jeff Squyres: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15030.php">Jeff Squyres: "Re: [OMPI users] glut display 'occasionally' opens"</a>
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
