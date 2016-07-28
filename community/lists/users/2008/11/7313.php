<?
$subject_val = "Re: [OMPI users] timing + /usr/bin/time";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 09:06:04 2008" -->
<!-- isoreceived="20081114140604" -->
<!-- sent="Fri, 14 Nov 2008 08:51:21 -0500" -->
<!-- isosent="20081114135121" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] timing + /usr/bin/time" -->
<!-- id="746E78F0-4127-4C1F-9E15-E59EB780FDFA_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="491D459C.5080109_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 08:51:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7312.php">Geraldo Veiga: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>In reply to:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7321.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7321.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I *always* report MPI application time in wall-clock seconds  
<br>
time.  I know that some people (even among the OMPI developers)  
<br>
disagree with me, but to me, there's nothing else that you can measure  
<br>
that makes sense.
<br>
<p>Case in point: when using the OpenFabrics network stack, very little  
<br>
time is spent in the kernel because OpenFabrics networks are designed  
<br>
to bypass the OS (e.g., we spin poll in userspace for OpenFabrics  
<br>
message passing progress).  Similar is true for shared memory (it's a  
<br>
&quot;network&quot; because we use it to pass messages between MPI processes).   
<br>
But what about TCP?  When not using a TOE or other similar technology  
<br>
(i.e., 99.99% of the time), you are making OS syscalls.
<br>
<p>Hence, running the same program over these three different networks  
<br>
can result in hugely different proportions of user vs. system time,  
<br>
even though it's the same app and the same algorithm.  Granted, some  
<br>
of the networks are faster than the others, but the network should  
<br>
always be the slowest part of your computation (assuming you have a  
<br>
well-coded application).  So which numbers should you report?
<br>
<p>In short: the MPI implementation is doing things for you behind the  
<br>
scenes.  This raises some obvious questions:
<br>
1. Do you report the MPI execution times or not?
<br>
1a. If so, how do you account for the differences in network  
<br>
progression (and other issues) based on the type of network?
<br>
1b. If not, how can you separate the MPI time from your application  
<br>
time?  (user/system does not make this differentiation; you need  
<br>
additional tools to separate MPI vs. application time)
<br>
<p>To me, only wall-clock execution time makes sense.  The overall  
<br>
performance of your application *includes* the time necessary for MPI/ 
<br>
message passing and everything else running on the machine.  One of  
<br>
the major points of parallel computing is to make things go faster.   
<br>
To measure that, measure the wall-clock time of the application in  
<br>
serial and then measure the wall-clock execution time in parallel  
<br>
(perhaps for various different np values).  Then you can (hopefully)  
<br>
see clear, easy-to-understand speedup.  To avoid OS-induced jitter and  
<br>
negative timing effects, most people typically turn off as many OS  
<br>
services as possible on the nodes that they're running, both for  
<br>
production and benchmarking codes (I typically leave such services  
<br>
enabled on my software development nodes, because they're helpful for  
<br>
debugging, etc.).
<br>
<p>Is wall-clock execution time the only / best metric?  Certainly not.   
<br>
But I strongly prefer it over user/system time -- I just don't think  
<br>
that user/system time tell you what most people think they're telling  
<br>
you in a parallel+MPI context.
<br>
<p><p><p>On Nov 14, 2008, at 4:32 AM, Raymond Wan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Fabian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for clarifying things and confirming some of the things  
</span><br>
<span class="quotelev1">&gt; that I thought.  I guess I have a clearer understanding now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fabian H&#228;nsel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmmm, I guess user time does not matter since it is real time that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we are interested in reducing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right. Even if we *could* measure user time of every MPI worker  
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; correctly this was not what you are interested in: Depending on the
</span><br>
<span class="quotelev2">&gt;&gt; algorithm a significant amount of time could  get spend waiting for  
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; messages to arrive - and that time would not count as user time, but
</span><br>
<span class="quotelev2">&gt;&gt; also was not 'wasted' as something important happens.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason why I was wondering is that some people in research  
</span><br>
<span class="quotelev1">&gt; papers compare their algorithm (system) with another one by  
</span><br>
<span class="quotelev1">&gt; measuring user time since it removes some of the effects of what the  
</span><br>
<span class="quotelev1">&gt; system does on behalf of the user's process.  And some people, I  
</span><br>
<span class="quotelev1">&gt; guess, see this as a fairer comparison.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, I guess I've realized the obvious -- that Open  
</span><br>
<span class="quotelev1">&gt; MPI doesn't reduce the efficiency of the algorithm.  Even worse,  
</span><br>
<span class="quotelev1">&gt; increases in user time is an artifact of Open MPI, so it is somewhat  
</span><br>
<span class="quotelev1">&gt; misleading if we are analyzing an algorithm.  What MPI should do (if  
</span><br>
<span class="quotelev1">&gt; properly used) is to reduce the real time and that's what we should  
</span><br>
<span class="quotelev1">&gt; be reporting...even if it includes other things that we did not want  
</span><br>
<span class="quotelev1">&gt; previously, like the time spent by the OS in swapping memory, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Papers I've read with graphs that have &quot;time&quot; on the y-axis and  
</span><br>
<span class="quotelev1">&gt; &quot;processors&quot; on the x-axis rarely mention what time they are  
</span><br>
<span class="quotelev1">&gt; measuring...but it seems obviously now that it must be real time  
</span><br>
<span class="quotelev1">&gt; since user time should [???] increase with more processors.....I  
</span><br>
<span class="quotelev1">&gt; think...of course, assuming we can total the user time across  
</span><br>
<span class="quotelev1">&gt; machines accurately.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your message(s)!  Think I got it now...  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7312.php">Geraldo Veiga: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>In reply to:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7321.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7321.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
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
