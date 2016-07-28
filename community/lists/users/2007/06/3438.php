<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 08:17:46 2007" -->
<!-- isoreceived="20070611121746" -->
<!-- sent="Mon, 11 Jun 2007 08:17:32 -0400" -->
<!-- isosent="20070611121732" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Timing communication" -->
<!-- id="782D97AA-FB9B-4CFF-8BA9-9A8CE8DA3325_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5861C625258167499D051F0CE1D0FE4B09C207_at_GLKMS2104.GREENLNK.NET" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 08:17:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3439.php">Brock Palen: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3361.php">Allan, Mark \(UK Filton\): "[OMPI users] Timing communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Measuring communications is a very tricky process; there's a lot of  
<br>
factors involved.  Check out this FAQ item:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tuning#running-perf-numbers">http://www.open-mpi.org/faq/?category=tuning#running-perf-numbers</a>
<br>
<p>You might want to use a well-known benchmark program (e.g., NetPIPE,  
<br>
link checker, etc.) to run pair-wise communication performance  
<br>
analysis rather than write your own application; it's typically not  
<br>
as simple as just doing a few sends within a loop.
<br>
<p>The issue is that MPI may make different decisions on how to send  
<br>
messages, including factors such as:
<br>
<p>- is this the first time you have sent between these peer pair?
<br>
- who are you sending to?
<br>
- what is the size of the message?
<br>
- are there other messages pending?
<br>
- are other messages incoming from different peers while you are  
<br>
sending?
<br>
<p>Your simplistic loop below can cause some &quot;bad&quot; things to happen  
<br>
(i.e., not give a true/absolute measure of what max performance is  
<br>
between a pair of peers) by unintentionally stepping on several of  
<br>
the things that Open MPI does behind the scenes (e.g., we don't make  
<br>
network connections until the first time a message is sent between a  
<br>
given peer pair).
<br>
<p>But on the flip side, there's a whole school of thought that micro  
<br>
benchmarks are only useful in a limited sense (because they test  
<br>
artificial scenarios), and the only thing that *really* matters is  
<br>
your application's performance.  Hence, micro benchmarks are good as  
<br>
input for guiding tuning issues, but they are not the absolute  
<br>
measure of how well a given OS/middleware/network are performing.   
<br>
That being said, a poorly-written application will tend perform  
<br>
poorly regardless of how well the OS/middleware/network performs.
<br>
<p>And so on.
<br>
<p>This is an age-old religious debate, and both sides have some good  
<br>
points.  I won't re-hash the entire debate here.  :-)
<br>
<p><p>On Jun 4, 2007, at 10:00 AM, Allan, Mark ((UK Filton)) wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm new to this list and wonder if anyone can help.  I'm trying to  
</span><br>
<span class="quotelev1">&gt; measure communication time between parallel processes using  
</span><br>
<span class="quotelev1">&gt; openmpi.  As an example I might be running on 4 dual core  
</span><br>
<span class="quotelev1">&gt; processors (8 processes in total).  I was hoping that communication  
</span><br>
<span class="quotelev1">&gt; using shared memory (comms between dual cores on the same chip)  
</span><br>
<span class="quotelev1">&gt; would be faster than that over the network.  To measure  
</span><br>
<span class="quotelev1">&gt; communication time I'm sending a block of data to each process  
</span><br>
<span class="quotelev1">&gt; (from each process) using a blocking send, and am timing how long  
</span><br>
<span class="quotelev1">&gt; it takes.  I repeat this 50 times (for example) and take the  
</span><br>
<span class="quotelev1">&gt; average time.  The code is something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for(int i=0;i&lt;numProcs;i++)
</span><br>
<span class="quotelev1">&gt;     for(int j=0;j&lt;numProcs;j++)
</span><br>
<span class="quotelev1">&gt;       if(i!=j)
</span><br>
<span class="quotelev1">&gt;          {
</span><br>
<span class="quotelev1">&gt;            // // // i is the sending proc to j, others wait
</span><br>
<span class="quotelev1">&gt;              double time = 0.0;
</span><br>
<span class="quotelev1">&gt;              for(int kk=0; kk&lt;50; kk++)
</span><br>
<span class="quotelev1">&gt;              {
</span><br>
<span class="quotelev1">&gt;                   if(i==my_rank)
</span><br>
<span class="quotelev1">&gt;                   {
</span><br>
<span class="quotelev1">&gt;                       double start = MPI::Wtime();
</span><br>
<span class="quotelev1">&gt;                       MPI::COMM_WORLD.Send(&amp;sendData 
</span><br>
<span class="quotelev1">&gt; [0],dataSize,MPI::DOUBLE,j,i);
</span><br>
<span class="quotelev1">&gt;                       double end = MPI::Wtime();
</span><br>
<span class="quotelev1">&gt;                       time+=(end-start);
</span><br>
<span class="quotelev1">&gt;                   }
</span><br>
<span class="quotelev1">&gt;                   if(j==my_rank)
</span><br>
<span class="quotelev1">&gt;                   {
</span><br>
<span class="quotelev1">&gt;                       MPI::COMM_WORLD.Recv(&amp;recvData 
</span><br>
<span class="quotelev1">&gt; [0],dataSize,MPI::DOUBLE,i,i);
</span><br>
<span class="quotelev1">&gt;                   }
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              if(i==my_rank)
</span><br>
<span class="quotelev1">&gt;                   out &lt;&lt; i &lt;&lt; &quot; &quot; &lt;&lt; j &lt;&lt; &quot; &quot; &lt;&lt; time/50.0 &lt;&lt;  
</span><br>
<span class="quotelev1">&gt; std::endl;
</span><br>
<span class="quotelev1">&gt;              MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem I am having is that I'm not noticing any appreciable  
</span><br>
<span class="quotelev1">&gt; difference in communication times between shared memory and network  
</span><br>
<span class="quotelev1">&gt; protocols.  I expected shared memory to be faster(!?!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have a better way of measuring communication times?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark.
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; This email and any attachments are confidential to the intended
</span><br>
<span class="quotelev1">&gt; recipient and may also be privileged. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient please delete it from your system and notify the sender.
</span><br>
<span class="quotelev1">&gt; You should not copy it or use it for any purpose nor disclose or
</span><br>
<span class="quotelev1">&gt; distribute its contents to any other person.
</span><br>
<span class="quotelev1">&gt; ********************************************************************
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
<li><strong>Next message:</strong> <a href="3439.php">Brock Palen: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3437.php">Terry Frankcombe: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3361.php">Allan, Mark \(UK Filton\): "[OMPI users] Timing communication"</a>
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
