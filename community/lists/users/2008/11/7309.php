<?
$subject_val = "Re: [OMPI users] timing + /usr/bin/time";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 04:32:20 2008" -->
<!-- isoreceived="20081114093220" -->
<!-- sent="Fri, 14 Nov 2008 18:32:12 +0900" -->
<!-- isosent="20081114093212" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] timing + /usr/bin/time" -->
<!-- id="491D459C.5080109_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081112144005.11ab912c.fabian.haensel_at_zih.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] timing + /usr/bin/time<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 04:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7310.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7308.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>In reply to:</strong> <a href="7295.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Fabian,
<br>
<p>Thank you for clarifying things and confirming some of the things that I 
<br>
thought.  I guess I have a clearer understanding now.
<br>
<p><p>Fabian H&#228;nsel wrote:
<br>
<span class="quotelev2">&gt;&gt; Hmmmm, I guess user time does not matter since it is real time that
</span><br>
<span class="quotelev2">&gt;&gt; we are interested in reducing.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right. Even if we *could* measure user time of every MPI worker process
</span><br>
<span class="quotelev1">&gt; correctly this was not what you are interested in: Depending on the
</span><br>
<span class="quotelev1">&gt; algorithm a significant amount of time could  get spend waiting for MPI
</span><br>
<span class="quotelev1">&gt; messages to arrive - and that time would not count as user time, but
</span><br>
<span class="quotelev1">&gt; also was not 'wasted' as something important happens.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The reason why I was wondering is that some people in research papers 
<br>
compare their algorithm (system) with another one by measuring user time 
<br>
since it removes some of the effects of what the system does on behalf 
<br>
of the user's process.  And some people, I guess, see this as a fairer 
<br>
comparison.
<br>
<p>On the other hand, I guess I've realized the obvious -- that Open MPI 
<br>
doesn't reduce the efficiency of the algorithm.  Even worse, increases 
<br>
in user time is an artifact of Open MPI, so it is somewhat misleading if 
<br>
we are analyzing an algorithm.  What MPI should do (if properly used) is 
<br>
to reduce the real time and that's what we should be reporting...even if 
<br>
it includes other things that we did not want previously, like the time 
<br>
spent by the OS in swapping memory, etc.
<br>
<p>[Papers I've read with graphs that have &quot;time&quot; on the y-axis and 
<br>
&quot;processors&quot; on the x-axis rarely mention what time they are 
<br>
measuring...but it seems obviously now that it must be real time since 
<br>
user time should [???] increase with more processors.....I think...of 
<br>
course, assuming we can total the user time across machines accurately.]
<br>
<p>Thank you for your message(s)!  Think I got it now...  :-)
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7310.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7308.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>In reply to:</strong> <a href="7295.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
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
