<?
$subject_val = "Re: [OMPI users] How to replace --cpus-per-proc by --map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 14:22:01 2014" -->
<!-- isoreceived="20140515182201" -->
<!-- sent="Thu, 15 May 2014 14:16:06 -0400 (EDT)" -->
<!-- isosent="20140515181606" -->
<!-- name="Mark Hahn" -->
<!-- email="hahn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to replace --cpus-per-proc by --map-by" -->
<!-- id="alpine.LFD.2.02.1405131210400.20620_at_coffee.psychology.mcmaster.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="124B8A5E-DC4F-4380-B2A9-138E86477F02_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to replace --cpus-per-proc by --map-by<br>
<strong>From:</strong> Mark Hahn (<em>hahn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 14:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24387.php">Jeff Squyres (jsquyres): "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24385.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/24018.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24394.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="24394.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; We're open to suggestion, really - just need some help identifying the best
</span><br>
<span class="quotelev1">&gt;way to get this info out there.
</span><br>
<p>well, OpenMPI information is fragmented and sprayed all over.
<br>
In some places, there is mention of a wiki to be updated with 
<br>
an explanation; for other things, a consumer needs to wander around 
<br>
loosely-related blogs, mail archives, FAQs, usage statements, etc.
<br>
<p>For instance, I've been trying to figure out how to do a simple thing,
<br>
launch a hybrid job.  Assume I have a scheduled, heterogenous cluster
<br>
where mpirun simply receives a normal nodefile like this:
<br>
<p>clu357
<br>
clu357
<br>
clu357
<br>
clu354
<br>
clu354
<br>
clu354
<br>
<p>and I want to launch a 2-rank, 3-thread-per-rank job.  forget about 
<br>
frills like hwloc or binding.
<br>
<p>back when --cpus-per-proc was around, this was obvious and worked 
<br>
flawlessly.  I honestly can't figure out how it works now, though - 
<br>
for any definition of &quot;now&quot; since:
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2011/12/10060.php">http://www.open-mpi.org/community/lists/devel/2011/12/10060.php</a>
<br>
<p>2011!  then there's a dribble more info in 2014 (!) that hints that 
<br>
&quot;--map-by node:pe=3&quot; might do the trick here:
<br>
<p><a href="http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21193">http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21193</a>
<br>
<p>where did &quot;pe&quot; come from?  is it the same as slot, hwthread, core?
<br>
why does the documentation make snide comments about how the conventional
<br>
understanding of &quot;rank&quot; (~ equivalent to process) might not be true?
<br>
<p>most of all, when was the break introduced?  at this point, I tell people
<br>
that 1.4.3 worked, and that everything after that is broken.
<br>
<p>recent releases (I tried 1.7.3, 1.7.5 and 1.8.1) choke on this. 
<br>
I wonder whether it's having trouble with the fact that a job 
<br>
gets an arbitrary set of cores via cgroup, and perhaps hwloc 
<br>
doesn't understand that it can only work within this set...
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt;    So please see this URL below(especially the first half part
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    of it - from 1 to 20 pages):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Although these slides by Jeff are the explanation for LAMA,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    which is another mapping system installed in the openmpi-1.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    series, I guess you can easily understand what is mapping and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    binding in general terms.
</span><br>
<p>AFAIKT, the lama slide deck seemed to be only concerned with 
<br>
affinity settings, which are irrelevant here.
<br>
<p>confused,
<br>
Mark Hahn.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24387.php">Jeff Squyres (jsquyres): "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24385.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/24018.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24394.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="24394.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
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
