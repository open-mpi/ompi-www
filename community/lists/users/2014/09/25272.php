<?
$subject_val = "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 13:21:43 2014" -->
<!-- isoreceived="20140904172143" -->
<!-- sent="Thu, 4 Sep 2014 13:21:21 -0400" -->
<!-- isosent="20140904172121" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs" -->
<!-- id="CAFb48S9XUyMYgOkOEOGdCxTOi7mQ8kt3=YUbK3YPS2zkTGjSrQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6990E304-492F-455F-AF24-AB6E3163E177_at_open-mpi.org" -->
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
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-04 13:21:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25271.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Here is the script (with a bit of munging for safety's sake):
<br>
<p>#! /usr/bin/perl -w
<br>
<p>use strict;
<br>
use warnings;
<br>
<p>use FindBin;
<br>
<p># Specify the path to the prolog.
<br>
my $prolog = '--task-prolog=/gpfsm/YYYY/XXXX.task.prolog';
<br>
<p># Build the path to the SLURM srun command.
<br>
my $srun_slurm = &quot;${FindBin::Bin}/srun.slurm&quot;;
<br>
<p># Add the prolog option, but abort if the user specifies a prolog option.
<br>
my $command = &quot;$srun_slurm $prolog&quot;;
<br>
foreach (@ARGV) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (/^--task-prolog=/) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;The --task-prolog option is unsupported at ZZZZ. Please &quot; .
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;contact the QQQQ for assistance.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$command .= &quot; $_&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
system($command);
<br>
<p>Ideas?
<br>
<p><p><p>On Thu, Sep 4, 2014 at 10:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Still begs the bigger question, though, as others have used script
</span><br>
<span class="quotelev1">&gt; wrappers before - and I'm not sure we (OMPI) want to be in the business of
</span><br>
<span class="quotelev1">&gt; dictating the scripting language they can use. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff and I will argue that one out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2014, at 7:38 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ah, if it's perl, it might be easy. It might just be the difference
</span><br>
<span class="quotelev1">&gt; between system(&quot;...string...&quot;) and system(@argv).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2014, at 8:35 AM, &quot;Matt Thompson&quot; &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I actually misspoke earlier. It turns out our srun is a *Perl* script
</span><br>
<span class="quotelev1">&gt; around the SLURM srun. I'll speak with our admins to see if they can
</span><br>
<span class="quotelev1">&gt; massage the script to not interpret the arguments. If possible, I'll ask
</span><br>
<span class="quotelev1">&gt; them if I can share the script with you (privately or on the list) and
</span><br>
<span class="quotelev1">&gt; maybe you can see how it is affecting Open MPI's argument passage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 4, 2014 at 8:04 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2014, at 9:27 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Just saw this, sorry. Our srun is indeed a shell script. It seems to be
</span><br>
<span class="quotelev2">&gt;&gt; a wrapper around the regular srun that runs a --task-prolog. What it
</span><br>
<span class="quotelev2">&gt;&gt; does...that's beyond my ken, but I could ask. My guess is that it probably
</span><br>
<span class="quotelev2">&gt;&gt; does something that helps keep our old PBS scripts running (sets
</span><br>
<span class="quotelev2">&gt;&gt; $PBS_NODEFILE, say). We used to run PBS but switched to SLURM recently. The
</span><br>
<span class="quotelev2">&gt;&gt; admins would, of course, prefer all future scripts be SLURM-native scripts,
</span><br>
<span class="quotelev2">&gt;&gt; but there are a lot of production runs that uses many, many PBS scripts.
</span><br>
<span class="quotelev2">&gt;&gt; Converting that would need slow, careful QC to make sure any &quot;pure SLURM&quot;
</span><br>
<span class="quotelev2">&gt;&gt; versions act as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Ralph and I haven't had a chance to discuss this in detail yet, but I
</span><br>
<span class="quotelev2">&gt;&gt; have thought about this quite a bit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is happening is that one of the $argv OMPI passes is of the form
</span><br>
<span class="quotelev2">&gt;&gt; &quot;foo;bar&quot;.  Your srun script is interpreting the &quot;;&quot; as the end of the
</span><br>
<span class="quotelev2">&gt;&gt; command the the &quot;bar&quot; as the beginning of a new command, and mayhem ensues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Basically, your srun script is violating what should be a very safe
</span><br>
<span class="quotelev2">&gt;&gt; assumption: that the $argv we pass to it will not be interpreted by a
</span><br>
<span class="quotelev2">&gt;&gt; shell.  Put differently: your &quot;srun&quot; script behaves differently than
</span><br>
<span class="quotelev2">&gt;&gt; SLURM's &quot;srun&quot; executable.  This violates OMPI's expectations of how srun
</span><br>
<span class="quotelev2">&gt;&gt; should behave.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My $0.02 is that if we &quot;fix&quot; this in OMPI, we're effectively penalizing
</span><br>
<span class="quotelev2">&gt;&gt; all other SLURM installations out there that *don't* violate this
</span><br>
<span class="quotelev2">&gt;&gt; assumption (i.e., all of them).  Ralph may disagree with me on this point,
</span><br>
<span class="quotelev2">&gt;&gt; BTW -- like I said, we haven't talked about this in detail since Tuesday.
</span><br>
<span class="quotelev2">&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So here's my question: is there any chance you can change your &quot;srun&quot;
</span><br>
<span class="quotelev2">&gt;&gt; script to a script language that doesn't recombine $argv?  This is a common
</span><br>
<span class="quotelev2">&gt;&gt; problem, actually -- sh/csh/etc. script languages tend to recombine $argv,
</span><br>
<span class="quotelev2">&gt;&gt; but other languages such as perl and python do not (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://stackoverflow.com/questions/6981533/how-to-preserve-single-and-double-quotes-in-shell-script-arguments-without-the-a">http://stackoverflow.com/questions/6981533/how-to-preserve-single-and-double-quotes-in-shell-script-arguments-without-the-a</a>
</span><br>
<span class="quotelev2">&gt;&gt; ).
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;  Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25263.php">http://www.open-mpi.org/community/lists/users/2014/09/25263.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev1">&gt;  get is one trick: rational thinking. But when you're good and crazy,
</span><br>
<span class="quotelev1">&gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25264.php">http://www.open-mpi.org/community/lists/users/2014/09/25264.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25269.php">http://www.open-mpi.org/community/lists/users/2014/09/25269.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25270.php">http://www.open-mpi.org/community/lists/users/2014/09/25270.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
 get is one trick: rational thinking. But when you're good and crazy,
 oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25271.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25270.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25273.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
