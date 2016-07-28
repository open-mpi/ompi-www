<?
$subject_val = "Re: [OMPI users] Xgrid and choosing agents...";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 12 08:58:07 2009" -->
<!-- isoreceived="20090712125807" -->
<!-- sent="Sun, 12 Jul 2009 05:58:02 -0700" -->
<!-- isosent="20090712125802" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid and choosing agents..." -->
<!-- id="AD908027-9F95-4A37-80BB-F39229163B61_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="095D0BAB-34A0-46C9-8AB7-21C99ACAB1E5_at_open-mpi.org" -->
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
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-12 08:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9931.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Previous message:</strong> <a href="9929.php">Lee Amy: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>In reply to:</strong> <a href="9926.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9931.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9931.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>On 12-Jul-09, at 4:07 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Assuming that Scoreboard is appropriately licensed (i.e., is not  
</span><br>
<span class="quotelev1">&gt; licensed under GPL, but preferably something like FreeBSD), and that  
</span><br>
<span class="quotelev1">&gt; it has an accessible API, then we can link against it when in that  
</span><br>
<span class="quotelev1">&gt; environment and interact any way we desire - including asking  
</span><br>
<span class="quotelev1">&gt; Scoreboard for its recommended list of nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The info I have is all from <a href="http://www.macresearch.org/node/4654">http://www.macresearch.org/node/4654</a>.
<br>
<p>To use scoreboard you pass a run-time argument to the xgrid command  
<br>
using &quot;-art&quot; and &quot;-artid&quot;.
<br>
<p>xgrid -job submit -art scorescript.pl -artid score MyJob
<br>
<p>The script can return any score calculated from any of the machine  
<br>
attributes, i.e. you can send the job to machines with more than 2 Gb  
<br>
of memory, or that are faster than 2GHz.  So its a pretty nice  
<br>
feature.  I don't think there is any way to manually query the nodes.
<br>
<p>Unfortunately, I'm not sure if it is possible to do this via the API  
<br>
which does not look to have any hooks into Scorecard:
<br>
<p><a href="http://developer.apple.com/documentation/Performance/Conceptual/XgridDeveloper/index.html#/">http://developer.apple.com/documentation/Performance/Conceptual/XgridDeveloper/index.html#/</a> 
<br>
/apple_ref/doc/framework/XgridFoundation_reference
<br>
<p>Curiously, looking at the API, I further get the impression it has no  
<br>
concept of identifying the nodes.  The xgrid controller assigns them,  
<br>
and there does not seem to be a mechanism for the user to choose.  So  
<br>
until the API is improved to account for the Scoreboard capability I  
<br>
guess this can't be accessed via openMPI.
<br>
<p>Thanks a lot for thinking about this.  As I said, I have a solution  
<br>
now that works just great, so this is all just for curiousity's sake  
<br>
at this point.
<br>
<p>Cheers,  Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9931.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Previous message:</strong> <a href="9929.php">Lee Amy: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>In reply to:</strong> <a href="9926.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9931.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9931.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
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
