<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 18 08:19:01 2006" -->
<!-- isoreceived="20060718121901" -->
<!-- sent="Tue, 18 Jul 2006 08:18:51 -0400" -->
<!-- isosent="20060718121851" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi, LSF and GM" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFBB4C0B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Openmpi, LSF and GM" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-18 08:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1643.php">Robert Latham: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1641.php">Keith Refson: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Maybe in reply to:</strong> <a href="1625.php">Keith Refson: "[OMPI users] Openmpi, LSF and GM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Keith Refson
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, July 18, 2006 6:21 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Openmpi, LSF and GM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The arguments you want would look like:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    mpirun -np X -mca btl gm,sm,self -mca btl_base_verbose 1 -mca
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_gm_debug 1 &lt;other arguments&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aha.  I think I had misunderstood the syntax slightly, which 
</span><br>
<span class="quotelev1">&gt; explains why
</span><br>
<span class="quotelev1">&gt; I previously saw no debugging information.  I has also 
</span><br>
<span class="quotelev1">&gt; omitted the &quot;sm&quot;
</span><br>
<span class="quotelev1">&gt; btl - though I'm not sure what that one is....
</span><br>
<p>&quot;sm&quot; = &quot;shared memory&quot;.  It's used for on-node communication between
<br>
processes.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I am now getting some debugging output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [scarf-cn008.rl.ac.uk:04291] [0,1,0] gm_port 017746B0, board 
</span><br>
<span class="quotelev1">&gt; 545460846592, global 3712550725 node
</span><br>
<span class="quotelev1">&gt; [snipped]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which I home means that I am using the GM btl.  The run is 
</span><br>
<span class="quotelev1">&gt; also about 20% quicker than
</span><br>
<span class="quotelev1">&gt; before which may suggest that I was not previously using gm.
</span><br>
<p>It does.  Excellent!
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I have also noticed that if I simply specify --mca btl ^tcp + 
</span><br>
<span class="quotelev1">&gt; the debugging options
</span><br>
<span class="quotelev1">&gt; the run works apparently uses gm, and as quickly.  It was 
</span><br>
<p>Right.
<br>
<p><span class="quotelev1">&gt; (and is) the combination
</span><br>
<span class="quotelev1">&gt;   -mca btl gm,sm,self,^tcp
</span><br>
<span class="quotelev1">&gt; that fails with
</span><br>
<span class="quotelev1">&gt;    No available btl components were found!
</span><br>
<p>The syntax only allows you to do the &quot;^&quot; notation if that's *all* you
<br>
use.  Check out this FAQ entry (I just expanded its text a bit):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#selecting-components">http://www.open-mpi.org/faq/?category=tuning#selecting-components</a>
<br>
<p>More specifically, you cannot mix the &quot;^&quot; and non-&quot;^&quot; notation -- it
<br>
doesn't make sense.  Here's why -- if you list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca btl a,b,c
<br>
<p>This tells Open MPI to *only* use components a, b, and c.  Using the
<br>
exclusive behavior, thus:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca btl ^d
<br>
<p>means &quot;use all components *except* d&quot;.  Hence, doing this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca btl a,b,c,^d
<br>
<p>would assumedly mean &quot;only use a, b, and c&quot; and &quot;use all components
<br>
*except* d&quot;, which doesn't make sense.  Taking a looser definition of
<br>
the inclusive and exclusive behavior, you could interpret it to mean
<br>
&quot;use only a, b, and c, and *not* use d&quot; -- but that would be redundant
<br>
because it's already *not* going to use d because it's *only* using a,
<br>
b, and c.  
<br>
<p>Hence, the inclusive and exclusive notations are mutually exclusive.
<br>
Indeed, the ^ character is only recognized as a prefix for the whole
<br>
value for this exact reason.  This is why you got the error that you did
<br>
-- when you used &quot;tcp,sm,^gm&quot;, it was looking for a component named
<br>
&quot;^gm&quot; since the &quot;^&quot; was not recognized as the exclusion character (and
<br>
therefore didn't find it).
<br>
<p>I'll add some detection code such that if we find &quot;^&quot; in the string and
<br>
it's not the first chacter to emit a warning.
<br>
<p><span class="quotelev3">&gt; &gt; &gt; LSF.  I believe it is on our feature request list, but I 
</span><br>
<span class="quotelev1">&gt; also don't
</span><br>
<span class="quotelev3">&gt; &gt; &gt; believe we have a timeline for implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK.  It is actually quite easy to construct a hostfile from the LSF
</span><br>
<span class="quotelev1">&gt; environment and start the processes using the openmpi mpirun command.
</span><br>
<span class="quotelev1">&gt; I don't know how this will interact with for larger scale usage,
</span><br>
<span class="quotelev1">&gt; job termination etc but I plan to experiment.
</span><br>
<p>If you use the LSF drop-in replacement for rsh (lsgrun), you should be
<br>
ok because it will use LSF's native job-launching mechanisms behind the
<br>
scenes (and therefore can use LSF's native job-termination mechanisms
<br>
when necessary).
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; One further question.  My run times are still noticably longer than
</span><br>
<span class="quotelev1">&gt; with mpich_gm.  I saw in the mailing list archives that there was
</span><br>
<span class="quotelev1">&gt; a new implementation of the collective routines in 1.0, 
</span><br>
<span class="quotelev1">&gt; (which my application
</span><br>
<span class="quotelev1">&gt; depends on rather heavil.  Is this the default in openmpi 1.1 or is
</span><br>
<p>The new collectives were introduced in 1.1, not 1.0, and yes, they are
<br>
the default.
<br>
<p><span class="quotelev1">&gt; it still necessary to specify this manually?  And if anyone 
</span><br>
<span class="quotelev1">&gt; has a comparison
</span><br>
<span class="quotelev1">&gt; of MPI_AlltoallV performance with other MPI implementations 
</span><br>
<span class="quotelev1">&gt; I'd like to
</span><br>
<span class="quotelev1">&gt; hear the numbers.
</span><br>
<p>There is still work to be done in the collectives, however -- there were
<br>
no optimized &quot;vector&quot; algorithms introduced yet (e.g., MPI_Alltoallv).
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Thanks again for all the work.  Openmpi looks very promising and it is
</span><br>
<span class="quotelev1">&gt; definitely the easiest to install and get running of any MPI 
</span><br>
<span class="quotelev1">&gt; implementation
</span><br>
<span class="quotelev1">&gt; I have tried so far.
</span><br>
<p>Glad to hear it -- thanks for the feedback!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1643.php">Robert Latham: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1641.php">Keith Refson: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Maybe in reply to:</strong> <a href="1625.php">Keith Refson: "[OMPI users] Openmpi, LSF and GM"</a>
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
