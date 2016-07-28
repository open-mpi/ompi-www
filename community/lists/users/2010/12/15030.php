<?
$subject_val = "Re: [OMPI users] glut display 'occasionally' opens";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 12:26:53 2010" -->
<!-- isoreceived="20101207172653" -->
<!-- sent="Tue, 7 Dec 2010 09:26:36 -0800" -->
<!-- isosent="20101207172636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] glut display 'occasionally' opens" -->
<!-- id="027DD80C-8587-44CD-889D-5CBAEFEBAC53_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="921BDB5D-B77D-4ADD-8638-456240511671_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 12:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15031.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="15021.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15031.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15031.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you using ssh to launch OMPI between your nodes?  (i.e., is mpirun using ssh under the covers to launch on remote nodes)
<br>
<p>If so, you might want to just set OMPI to use &quot;ssh -X&quot;, which sets up SSH tunneled X forwarding, and therefore it sets DISPLAY for you properly on all the remote nodes automatically.  But it does have the disadvantage of being a bit slow, since it's coming through ssh.
<br>
<p>Alternatively, you can xhost +&lt;source_host&gt;, where &lt;source_host&gt; is the host where your X app is running.  Then set your DISPLAY variable manually to &lt;source_host&gt;:display and it'll just go in an unencrypted fashion.  This is normal X forwarding stuff -- you can probably google around for more info on this.
<br>
<p>NOTE: IIRC, xauth is better than xhost these days.  I stopped using X for most things many years ago, so my xhost/xauth information is probably a little dated.  Google around for the most recent / best ways to do this stuff.
<br>
<p><p>On Dec 6, 2010, at 10:11 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; BTW: you might check to see if the DISPLAY envar is being correctly set on all procs. Two ways to do it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. launch &quot;env&quot; as your app to print out the envars - can be messy on the output end, though you could use the mpirun options to tag and/or split the output from the procs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. in your app, just do a getenv and print the display envar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would help tell us if there is an OMPI problem, or just a problem in how you setup X11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2010, at 9:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...yes, the code does seem to handle that '=' being in there. Forgot it was there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depending on the version you are using, mpirun could just open the display for you. There is an mpirun option that tells us to please start each app in its own xterm.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You shouldn't need forwarding if you are going to see it on a local display (i.e., one physically attached to the node), assuming you are logged into those nodes (otherwise you don't own the display).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are trying to view it on your own local display, then you do need forwarding setup.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2010, at 8:36 PM, brad baker wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without including the -x DISPLAY, glut doesn't know what display to open.  For instance, without the -x DISPLAY parameter glut returns an error from each process stating that it could not find display &quot;&quot; (empty string).  This strategy is briefly described in the openmpi   FAQs for launching gui applications with openmpi. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm assuming that by setting the DISPLAY envar to :0.0, each process will render to their local display, which is my intention, and as I previously stated works for up to 2 processes. So I believe it to be necessary.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I'm thinking I may have to configure some kind of  X11 forwarding.  I'm not sure...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your reply! Any more ideas?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 6, 2010 at 6:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Guess I'm not entirely sure I understand how this is supposed to work. All the -x does is tell us to pickup an envar of the given name and forward its value to the remote apps. You can't set the envar's value on the cmd line. So you told mpirun to pickup the value of an envar called &quot;DISPLAY=:0.0&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So yes - I would expect this would be behaving strangely.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you tell us -x DISPLAY, we'll pickup the local value of DISPLAY and forward it. What that will cause your app to do is, I suppose, up to it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 6, 2010, at 12:42 PM, brad baker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'm working on an mpi application that opens a glut display on each node of a small cluster for opengl rendering (each node has its own display). My current implementation scales great with mpich2, but I'd like to use openmpi infiniband, which is giving me trouble.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I've had some success with the -x DISPLAY=:0.0 parameter to mpirun, which will open the display on up to 2 of my nodes... any 2.  But when I attempt to run the application on 4 nodes, the display is non-deterministic. If any open at all process 0 definately will, and sometimes process 3 along with that.  I haven't observed much behavior from process 1 or 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; My command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun -x DISPLAY=:0.0 -np 4 -hostfile ~/openmpi.hosts ./myapp
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I've tried adding the -d option with no success.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Does anyone have any suggestions or comments?  I'll certainly provide more information if required.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Brad
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15031.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="15021.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15031.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15031.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
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
