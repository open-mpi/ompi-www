<?
$subject_val = "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 10:38:28 2014" -->
<!-- isoreceived="20140904143828" -->
<!-- sent="Thu, 4 Sep 2014 14:38:27 +0000" -->
<!-- isosent="20140904143827" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs" -->
<!-- id="BF168B24-4BA3-4856-A588-4A21E7CC5938_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S8UJ1uO+cRUfpFva6Xg+39CBL5thdY2HVE=AqKscyRyFA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-04 10:38:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25268.php">Ralph Castain: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>In reply to:</strong> <a href="25264.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, if it's perl, it might be easy. It might just be the difference between system(&quot;...string...&quot;) and system(@argv).
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Sep 4, 2014, at 8:35 AM, &quot;Matt Thompson&quot; &lt;fortran_at_[hidden]&lt;mailto:fortran_at_[hidden]&gt;&gt; wrote:
<br>
<p>Jeff,
<br>
<p>I actually misspoke earlier. It turns out our srun is a *Perl* script around the SLURM srun. I'll speak with our admins to see if they can massage the script to not interpret the arguments. If possible, I'll ask them if I can share the script with you (privately or on the list) and maybe you can see how it is affecting Open MPI's argument passage.
<br>
<p>Matt
<br>
<p><p>On Thu, Sep 4, 2014 at 8:04 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
On Sep 3, 2014, at 9:27 AM, Matt Thompson &lt;fortran_at_[hidden]&lt;mailto:fortran_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just saw this, sorry. Our srun is indeed a shell script. It seems to be a wrapper around the regular srun that runs a --task-prolog. What it does...that's beyond my ken, but I could ask. My guess is that it probably does something that helps keep our old PBS scripts running (sets $PBS_NODEFILE, say). We used to run PBS but switched to SLURM recently. The admins would, of course, prefer all future scripts be SLURM-native scripts, but there are a lot of production runs that uses many, many PBS scripts. Converting that would need slow, careful QC to make sure any &quot;pure SLURM&quot; versions act as expected.
</span><br>
<p>Ralph and I haven't had a chance to discuss this in detail yet, but I have thought about this quite a bit.
<br>
<p>What is happening is that one of the $argv OMPI passes is of the form &quot;foo;bar&quot;.  Your srun script is interpreting the &quot;;&quot; as the end of the command the the &quot;bar&quot; as the beginning of a new command, and mayhem ensues.
<br>
<p>Basically, your srun script is violating what should be a very safe assumption: that the $argv we pass to it will not be interpreted by a shell.  Put differently: your &quot;srun&quot; script behaves differently than SLURM's &quot;srun&quot; executable.  This violates OMPI's expectations of how srun should behave.
<br>
<p>My $0.02 is that if we &quot;fix&quot; this in OMPI, we're effectively penalizing all other SLURM installations out there that *don't* violate this assumption (i.e., all of them).  Ralph may disagree with me on this point, BTW -- like I said, we haven't talked about this in detail since Tuesday.  :-)
<br>
<p>So here's my question: is there any chance you can change your &quot;srun&quot; script to a script language that doesn't recombine $argv?  This is a common problem, actually -- sh/csh/etc. script languages tend to recombine $argv, but other languages such as perl and python do not (e.g., <a href="http://stackoverflow.com/questions/6981533/how-to-preserve-single-and-double-quotes-in-shell-script-arguments-without-the-a">http://stackoverflow.com/questions/6981533/how-to-preserve-single-and-double-quotes-in-shell-script-arguments-without-the-a</a>).
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25263.php">http://www.open-mpi.org/community/lists/users/2014/09/25263.php</a>
--
&quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
 get is one trick: rational thinking. But when you're good and crazy,
 oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25264.php">http://www.open-mpi.org/community/lists/users/2014/09/25264.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25268.php">Ralph Castain: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>In reply to:</strong> <a href="25264.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
