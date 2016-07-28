<?
$subject_val = "Re: [OMPI users] timing + /usr/bin/time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 04:34:27 2008" -->
<!-- isoreceived="20081117093427" -->
<!-- sent="Mon, 17 Nov 2008 18:34:20 +0900" -->
<!-- isosent="20081117093420" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] timing + /usr/bin/time" -->
<!-- id="49213A9C.6000909_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="746E78F0-4127-4C1F-9E15-E59EB780FDFA_at_cisco.com" -->
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
<strong>Date:</strong> 2008-11-17 04:34:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7322.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7320.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>In reply to:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thank you for your detailed explanation!  I see your point and, given 
<br>
what you said, I wonder if some people report user time (only) in order 
<br>
to understate the execution time of their algorithms/programs. 
<br>
<p>Seems like the best solution is to have user, system, and MPI times with 
<br>
the real time being the sum of all 3.  I doubt that will ever happen 
<br>
since, in reality, we have to add code to our programs to enable MPI and 
<br>
sometimes the OS has to do some work on our programs' behalf.  I guess 
<br>
there is no clear division between user and system, in this case and the 
<br>
total (real) time is the only one that makes sense.
<br>
<p>Thank you again for the explanation!
<br>
<p>Ray
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; FWIW, I *always* report MPI application time in wall-clock seconds 
</span><br>
<span class="quotelev1">&gt; time.  I know that some people (even among the OMPI developers) 
</span><br>
<span class="quotelev1">&gt; disagree with me, but to me, there's nothing else that you can measure 
</span><br>
<span class="quotelev1">&gt; that makes sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Case in point: when using the OpenFabrics network stack, very little 
</span><br>
<span class="quotelev1">&gt; time is spent in the kernel because OpenFabrics networks are designed 
</span><br>
<span class="quotelev1">&gt; to bypass the OS (e.g., we spin poll in userspace for OpenFabrics 
</span><br>
<span class="quotelev1">&gt; message passing progress).  Similar is true for shared memory (it's a 
</span><br>
<span class="quotelev1">&gt; &quot;network&quot; because we use it to pass messages between MPI processes).  
</span><br>
<span class="quotelev1">&gt; But what about TCP?  When not using a TOE or other similar technology 
</span><br>
<span class="quotelev1">&gt; (i.e., 99.99% of the time), you are making OS syscalls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, running the same program over these three different networks 
</span><br>
<span class="quotelev1">&gt; can result in hugely different proportions of user vs. system time, 
</span><br>
<span class="quotelev1">&gt; even though it's the same app and the same algorithm.  Granted, some 
</span><br>
<span class="quotelev1">&gt; of the networks are faster than the others, but the network should 
</span><br>
<span class="quotelev1">&gt; always be the slowest part of your computation (assuming you have a 
</span><br>
<span class="quotelev1">&gt; well-coded application).  So which numbers should you report?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short: the MPI implementation is doing things for you behind the 
</span><br>
<span class="quotelev1">&gt; scenes.  This raises some obvious questions:
</span><br>
<span class="quotelev1">&gt; 1. Do you report the MPI execution times or not?
</span><br>
<span class="quotelev1">&gt; 1a. If so, how do you account for the differences in network 
</span><br>
<span class="quotelev1">&gt; progression (and other issues) based on the type of network?
</span><br>
<span class="quotelev1">&gt; 1b. If not, how can you separate the MPI time from your application 
</span><br>
<span class="quotelev1">&gt; time?  (user/system does not make this differentiation; you need 
</span><br>
<span class="quotelev1">&gt; additional tools to separate MPI vs. application time)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To me, only wall-clock execution time makes sense.  The overall 
</span><br>
<span class="quotelev1">&gt; performance of your application *includes* the time necessary for 
</span><br>
<span class="quotelev1">&gt; MPI/message passing and everything else running on the machine.  One 
</span><br>
<span class="quotelev1">&gt; of the major points of parallel computing is to make things go 
</span><br>
<span class="quotelev1">&gt; faster.  To measure that, measure the wall-clock time of the 
</span><br>
<span class="quotelev1">&gt; application in serial and then measure the wall-clock execution time 
</span><br>
<span class="quotelev1">&gt; in parallel (perhaps for various different np values).  Then you can 
</span><br>
<span class="quotelev1">&gt; (hopefully) see clear, easy-to-understand speedup.  To avoid 
</span><br>
<span class="quotelev1">&gt; OS-induced jitter and negative timing effects, most people typically 
</span><br>
<span class="quotelev1">&gt; turn off as many OS services as possible on the nodes that they're 
</span><br>
<span class="quotelev1">&gt; running, both for production and benchmarking codes (I typically leave 
</span><br>
<span class="quotelev1">&gt; such services enabled on my software development nodes, because 
</span><br>
<span class="quotelev1">&gt; they're helpful for debugging, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is wall-clock execution time the only / best metric?  Certainly not.  
</span><br>
<span class="quotelev1">&gt; But I strongly prefer it over user/system time -- I just don't think 
</span><br>
<span class="quotelev1">&gt; that user/system time tell you what most people think they're telling 
</span><br>
<span class="quotelev1">&gt; you in a parallel+MPI context.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2008, at 4:32 AM, Raymond Wan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Fabian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for clarifying things and confirming some of the things 
</span><br>
<span class="quotelev2">&gt;&gt; that I thought.  I guess I have a clearer understanding now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fabian H&#228;nsel wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmmm, I guess user time does not matter since it is real time that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we are interested in reducing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right. Even if we *could* measure user time of every MPI worker process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correctly this was not what you are interested in: Depending on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; algorithm a significant amount of time could  get spend waiting for MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages to arrive - and that time would not count as user time, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also was not 'wasted' as something important happens.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason why I was wondering is that some people in research papers 
</span><br>
<span class="quotelev2">&gt;&gt; compare their algorithm (system) with another one by measuring user 
</span><br>
<span class="quotelev2">&gt;&gt; time since it removes some of the effects of what the system does on 
</span><br>
<span class="quotelev2">&gt;&gt; behalf of the user's process.  And some people, I guess, see this as 
</span><br>
<span class="quotelev2">&gt;&gt; a fairer comparison.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, I guess I've realized the obvious -- that Open MPI 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't reduce the efficiency of the algorithm.  Even worse, 
</span><br>
<span class="quotelev2">&gt;&gt; increases in user time is an artifact of Open MPI, so it is somewhat 
</span><br>
<span class="quotelev2">&gt;&gt; misleading if we are analyzing an algorithm.  What MPI should do (if 
</span><br>
<span class="quotelev2">&gt;&gt; properly used) is to reduce the real time and that's what we should 
</span><br>
<span class="quotelev2">&gt;&gt; be reporting...even if it includes other things that we did not want 
</span><br>
<span class="quotelev2">&gt;&gt; previously, like the time spent by the OS in swapping memory, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Papers I've read with graphs that have &quot;time&quot; on the y-axis and 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;processors&quot; on the x-axis rarely mention what time they are 
</span><br>
<span class="quotelev2">&gt;&gt; measuring...but it seems obviously now that it must be real time 
</span><br>
<span class="quotelev2">&gt;&gt; since user time should [???] increase with more processors.....I 
</span><br>
<span class="quotelev2">&gt;&gt; think...of course, assuming we can total the user time across 
</span><br>
<span class="quotelev2">&gt;&gt; machines accurately.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your message(s)!  Think I got it now...  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ray
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7322.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7320.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>In reply to:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
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
