<?
$subject_val = "Re: [OMPI users] 2 to 1 oversubscription";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 09:18:03 2009" -->
<!-- isoreceived="20090715131803" -->
<!-- sent="Wed, 15 Jul 2009 06:17:57 -0700" -->
<!-- isosent="20090715131757" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 to 1 oversubscription" -->
<!-- id="0015DEC3-0CD9-427F-BCAB-E1F80B1A7318_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0DDD0CCD-8F21-4F0B-B01B-24348545B571_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 to 1 oversubscription<br>
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 09:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9974.php">Ralph Castain: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>Previous message:</strong> <a href="9972.php">neeraj_at_[hidden]: "[OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>In reply to:</strong> <a href="9961.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9988.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9988.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Robert,
<br>
<p>Sorry if this is offtopic for the more knowledgeable here...
<br>
<p>On 14-Jul-09, at 7:50 PM, Robert Kubrick wrote:
<br>
<span class="quotelev1">&gt; By setting processor affinity you can force execution of each  
</span><br>
<span class="quotelev1">&gt; process on a specific core, thus limiting context switching. I know  
</span><br>
<span class="quotelev1">&gt; affinity wasn't supported on MacOS last year, I don't know if the  
</span><br>
<span class="quotelev1">&gt; situation has changed.
</span><br>
<span class="quotelev1">&gt; But running oversubscription without process affinity might cancel  
</span><br>
<span class="quotelev1">&gt; the benefit of SMT because the OS will try to allocate each process  
</span><br>
<span class="quotelev1">&gt; to whatever core becomes available, thus increasing context switching.
</span><br>
<p>This is a little over my head (i.e. SMT?).  However, to explain, the  
<br>
jobs were a gridded simulation, with the grid divided into 8, or 16  
<br>
'tiles' .  Each core gets a tile and passes info the the adjacent  
<br>
ones.  I would be very surprised to find out that the tiles were  
<br>
changing cores mid simulation. Why would the OS do something so silly?
<br>
<p>The machines were certainly still running other processes to keep the  
<br>
operating system going.  If you watch the cpu monitor, the total would  
<br>
occasionally drop from 100% to 98% as some operating system process  
<br>
kicked in, but in general the jobs were pegged, leaving little  
<br>
opportunity for one core to decide to take over what another core was  
<br>
already doing.
<br>
<p>Thanks, and if I'm incorrect about how the jobs get distributed  
<br>
between cores, I'd be more than happy to be corrected.  As I said, my  
<br>
knowledge of this stuff is pretty abstract.
<br>
<p>Thanks,   Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9974.php">Ralph Castain: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>Previous message:</strong> <a href="9972.php">neeraj_at_[hidden]: "[OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>In reply to:</strong> <a href="9961.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9988.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9988.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
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
