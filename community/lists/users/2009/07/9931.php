<?
$subject_val = "Re: [OMPI users] Xgrid and choosing agents...";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 12 10:45:24 2009" -->
<!-- isoreceived="20090712144524" -->
<!-- sent="Sun, 12 Jul 2009 08:45:10 -0600" -->
<!-- isosent="20090712144510" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid and choosing agents..." -->
<!-- id="64F00127-0AE8-4F9A-84B2-A97EF1BAB4F3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AD908027-9F95-4A37-80BB-F39229163B61_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Xgrid and choosing agents...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-12 10:45:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9932.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2009, at 6:58 AM, Klymak Jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12-Jul-09, at 4:07 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assuming that Scoreboard is appropriately licensed (i.e., is not  
</span><br>
<span class="quotelev2">&gt;&gt; licensed under GPL, but preferably something like FreeBSD), and  
</span><br>
<span class="quotelev2">&gt;&gt; that it has an accessible API, then we can link against it when in  
</span><br>
<span class="quotelev2">&gt;&gt; that environment and interact any way we desire - including asking  
</span><br>
<span class="quotelev2">&gt;&gt; Scoreboard for its recommended list of nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The info I have is all from <a href="http://www.macresearch.org/node/4654">http://www.macresearch.org/node/4654</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To use scoreboard you pass a run-time argument to the xgrid command  
</span><br>
<span class="quotelev1">&gt; using &quot;-art&quot; and &quot;-artid&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xgrid -job submit -art scorescript.pl -artid score MyJob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The script can return any score calculated from any of the machine  
</span><br>
<span class="quotelev1">&gt; attributes, i.e. you can send the job to machines with more than 2  
</span><br>
<span class="quotelev1">&gt; Gb of memory, or that are faster than 2GHz.  So its a pretty nice  
</span><br>
<span class="quotelev1">&gt; feature.  I don't think there is any way to manually query the nodes.
</span><br>
<p>Interesting! I'll look and see if/how we can do the query from inside  
<br>
OMPI.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I'm not sure if it is possible to do this via the API  
</span><br>
<span class="quotelev1">&gt; which does not look to have any hooks into Scorecard:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://developer.apple.com/documentation/Performance/Conceptual/XgridDeveloper/index.html#/">http://developer.apple.com/documentation/Performance/Conceptual/XgridDeveloper/index.html#/</a> 
</span><br>
<span class="quotelev1">&gt; /apple_ref/doc/framework/XgridFoundation_reference
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Curiously, looking at the API, I further get the impression it has  
</span><br>
<span class="quotelev1">&gt; no concept of identifying the nodes.  The xgrid controller assigns  
</span><br>
<span class="quotelev1">&gt; them, and there does not seem to be a mechanism for the user to  
</span><br>
<span class="quotelev1">&gt; choose.  So until the API is improved to account for the Scoreboard  
</span><br>
<span class="quotelev1">&gt; capability I guess this can't be accessed via openMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for thinking about this.  As I said, I have a solution  
</span><br>
<span class="quotelev1">&gt; now that works just great, so this is all just for curiousity's sake  
</span><br>
<span class="quotelev1">&gt; at this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,  Jody
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9932.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
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
