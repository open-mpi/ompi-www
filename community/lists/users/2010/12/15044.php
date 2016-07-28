<?
$subject_val = "Re: [OMPI users] glut display 'occasionally' opens";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 14:54:31 2010" -->
<!-- isoreceived="20101208195431" -->
<!-- sent="Wed, 8 Dec 2010 12:54:26 -0700" -->
<!-- isosent="20101208195426" -->
<!-- name="brad baker" -->
<!-- email="bl.baker.85_at_[hidden]" -->
<!-- subject="Re: [OMPI users] glut display 'occasionally' opens" -->
<!-- id="AANLkTikD1h32b1fxE3Owco==AaO=dVSwJEkKYp==M7Yp_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E07C5BB8-9086-4E3D-9397-1BFB7FA01A52_at_open-mpi.org" -->
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
<strong>From:</strong> brad baker (<em>bl.baker.85_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 14:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15045.php">Nguyen Toan: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<li><strong>Previous message:</strong> <a href="15043.php">jody: "[OMPI users] using totalview"</a>
<li><strong>In reply to:</strong> <a href="15033.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15046.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15046.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ya, I just tested -x as well, and it does indeed set the value of DISPLAY
<br>
correctly for every process, every time I run it.  Unfortunately the display
<br>
is still not behaving as desired. Sometimes they open, and sometimes they
<br>
don't.
<br>
<p>I'm currently using openmpi-1.4.1 over infiniband on a Rocks cluster.  Any
<br>
ideas on how to debug this will be greatly appreciated.
<br>
<p>Thanks,
<br>
Brad
<br>
<p>On Tue, Dec 7, 2010 at 1:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: I just tested the -x option on a multi-node system and had no problem
</span><br>
<span class="quotelev1">&gt; getting the value of DISPLAY to propagate. I was able to define it on the
</span><br>
<span class="quotelev1">&gt; cmd line, saw it set correctly on every process, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was with our devel trunk - not sure what version you are using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2010, at 12:12 PM, brad baker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your responses!  I'm at home today so I can't actually do any
</span><br>
<span class="quotelev1">&gt; tests to 'see' if anything works. But I logged in remotely and I did as
</span><br>
<span class="quotelev1">&gt; Ralph suggested and ran env as my app.  No process returned a value for
</span><br>
<span class="quotelev1">&gt; DISPLAY.  Then I made a small program that calls getenv(&quot;DISPLAY&quot;) to run
</span><br>
<span class="quotelev1">&gt; with mpi, and each process returns NULL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did some googling and found in the mpirun man page&lt;<a href="http://linux.die.net/man/1/mpirun">http://linux.die.net/man/1/mpirun</a>&gt;
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;*Exported Environment Variables*
</span><br>
<span class="quotelev1">&gt; The *-x* option to *mpirun* can be used to export specific environment
</span><br>
<span class="quotelev1">&gt; variables to the new processes. While the syntax of the *-x* option allows
</span><br>
<span class="quotelev1">&gt; the definition of new variables, note that the* parser for this option is
</span><br>
<span class="quotelev1">&gt; currently not very sophisticated* - it does not even understand quoted
</span><br>
<span class="quotelev1">&gt; values. Users are advised to* set variables in the environment and use **
</span><br>
<span class="quotelev1">&gt; -x** to export them; not to define them*.&quot;
</span><br>
<span class="quotelev1">&gt; So it looks like I need to manually set them, possible how Jeff suggested.
</span><br>
<span class="quotelev1">&gt;  I'll do some more research on this and get back after I've tried a few
</span><br>
<span class="quotelev1">&gt; things in the lab.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again!
</span><br>
<span class="quotelev1">&gt; Brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 7, 2010 at 10:26 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you using ssh to launch OMPI between your nodes?  (i.e., is mpirun
</span><br>
<span class="quotelev2">&gt;&gt; using ssh under the covers to launch on remote nodes)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, you might want to just set OMPI to use &quot;ssh -X&quot;, which sets up SSH
</span><br>
<span class="quotelev2">&gt;&gt; tunneled X forwarding, and therefore it sets DISPLAY for you properly on all
</span><br>
<span class="quotelev2">&gt;&gt; the remote nodes automatically.  But it does have the disadvantage of being
</span><br>
<span class="quotelev2">&gt;&gt; a bit slow, since it's coming through ssh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, you can xhost +&lt;source_host&gt;, where &lt;source_host&gt; is the
</span><br>
<span class="quotelev2">&gt;&gt; host where your X app is running.  Then set your DISPLAY variable manually
</span><br>
<span class="quotelev2">&gt;&gt; to &lt;source_host&gt;:display and it'll just go in an unencrypted fashion.  This
</span><br>
<span class="quotelev2">&gt;&gt; is normal X forwarding stuff -- you can probably google around for more info
</span><br>
<span class="quotelev2">&gt;&gt; on this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: IIRC, xauth is better than xhost these days.  I stopped using X for
</span><br>
<span class="quotelev2">&gt;&gt; most things many years ago, so my xhost/xauth information is probably a
</span><br>
<span class="quotelev2">&gt;&gt; little dated.  Google around for the most recent / best ways to do this
</span><br>
<span class="quotelev2">&gt;&gt; stuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2010, at 10:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BTW: you might check to see if the DISPLAY envar is being correctly set
</span><br>
<span class="quotelev2">&gt;&gt; on all procs. Two ways to do it:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1. launch &quot;env&quot; as your app to print out the envars - can be messy on
</span><br>
<span class="quotelev2">&gt;&gt; the output end, though you could use the mpirun options to tag and/or split
</span><br>
<span class="quotelev2">&gt;&gt; the output from the procs
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2. in your app, just do a getenv and print the display envar
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Would help tell us if there is an OMPI problem, or just a problem in how
</span><br>
<span class="quotelev2">&gt;&gt; you setup X11
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Dec 6, 2010, at 9:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hmmm...yes, the code does seem to handle that '=' being in there.
</span><br>
<span class="quotelev2">&gt;&gt; Forgot it was there.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Depending on the version you are using, mpirun could just open the
</span><br>
<span class="quotelev2">&gt;&gt; display for you. There is an mpirun option that tells us to please start
</span><br>
<span class="quotelev2">&gt;&gt; each app in its own xterm.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; You shouldn't need forwarding if you are going to see it on a local
</span><br>
<span class="quotelev2">&gt;&gt; display (i.e., one physically attached to the node), assuming you are logged
</span><br>
<span class="quotelev2">&gt;&gt; into those nodes (otherwise you don't own the display).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; If you are trying to view it on your own local display, then you do
</span><br>
<span class="quotelev2">&gt;&gt; need forwarding setup.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Dec 6, 2010, at 8:36 PM, brad baker wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Without including the -x DISPLAY, glut doesn't know what display to
</span><br>
<span class="quotelev2">&gt;&gt; open.  For instance, without the -x DISPLAY parameter glut returns an error
</span><br>
<span class="quotelev2">&gt;&gt; from each process stating that it could not find display &quot;&quot; (empty string).
</span><br>
<span class="quotelev2">&gt;&gt;  This strategy is briefly described in the openmpi   FAQs for launching gui
</span><br>
<span class="quotelev2">&gt;&gt; applications with openmpi.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I'm assuming that by setting the DISPLAY envar to :0.0, each process
</span><br>
<span class="quotelev2">&gt;&gt; will render to their local display, which is my intention, and as I
</span><br>
<span class="quotelev2">&gt;&gt; previously stated works for up to 2 processes. So I believe it to be
</span><br>
<span class="quotelev2">&gt;&gt; necessary.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; But I'm thinking I may have to configure some kind of  X11 forwarding.
</span><br>
<span class="quotelev2">&gt;&gt;  I'm not sure...
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Thanks for your reply! Any more ideas?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Brad
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Mon, Dec 6, 2010 at 6:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Guess I'm not entirely sure I understand how this is supposed to work.
</span><br>
<span class="quotelev2">&gt;&gt; All the -x does is tell us to pickup an envar of the given name and forward
</span><br>
<span class="quotelev2">&gt;&gt; its value to the remote apps. You can't set the envar's value on the cmd
</span><br>
<span class="quotelev2">&gt;&gt; line. So you told mpirun to pickup the value of an envar called
</span><br>
<span class="quotelev2">&gt;&gt; &quot;DISPLAY=:0.0&quot;.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; So yes - I would expect this would be behaving strangely.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; If you tell us -x DISPLAY, we'll pickup the local value of DISPLAY and
</span><br>
<span class="quotelev2">&gt;&gt; forward it. What that will cause your app to do is, I suppose, up to it.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Dec 6, 2010, at 12:42 PM, brad baker wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; I'm working on an mpi application that opens a glut display on each
</span><br>
<span class="quotelev2">&gt;&gt; node of a small cluster for opengl rendering (each node has its own
</span><br>
<span class="quotelev2">&gt;&gt; display). My current implementation scales great with mpich2, but I'd like
</span><br>
<span class="quotelev2">&gt;&gt; to use openmpi infiniband, which is giving me trouble.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; I've had some success with the -x DISPLAY=:0.0 parameter to mpirun,
</span><br>
<span class="quotelev2">&gt;&gt; which will open the display on up to 2 of my nodes... any 2.  But when I
</span><br>
<span class="quotelev2">&gt;&gt; attempt to run the application on 4 nodes, the display is non-deterministic.
</span><br>
<span class="quotelev2">&gt;&gt; If any open at all process 0 definately will, and sometimes process 3 along
</span><br>
<span class="quotelev2">&gt;&gt; with that.  I haven't observed much behavior from process 1 or 2.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; My command:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; mpirun -x DISPLAY=:0.0 -np 4 -hostfile ~/openmpi.hosts ./myapp
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; I've tried adding the -d option with no success.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; Does anyone have any suggestions or comments?  I'll certainly
</span><br>
<span class="quotelev2">&gt;&gt; provide more information if required.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; Brad
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15045.php">Nguyen Toan: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<li><strong>Previous message:</strong> <a href="15043.php">jody: "[OMPI users] using totalview"</a>
<li><strong>In reply to:</strong> <a href="15033.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15046.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15046.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
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
