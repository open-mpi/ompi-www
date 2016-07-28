<?
$subject_val = "Re: [OMPI users] 2 to 1 oversubscription";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 20:12:06 2009" -->
<!-- isoreceived="20090716001206" -->
<!-- sent="Wed, 15 Jul 2009 20:11:59 -0400" -->
<!-- isosent="20090716001159" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 to 1 oversubscription" -->
<!-- id="437D105B-6009-4A2B-916E-5093FCD8C75C_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0015DEC3-0CD9-427F-BCAB-E1F80B1A7318_at_uvic.ca" -->
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
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 20:11:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9989.php">vipin kumar: "[OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="9987.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9973.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9941.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jody,
<br>
<p>On Linux, you can check which process are running on which core in  
<br>
top, but I don't think the mac os version allows this. The OS *will*  
<br>
move processes on different cores because of the time-sharing nature  
<br>
of the scheduling algorithm. There are a lot more details online  
<br>
about what this means, but basically a time-sharing system will try  
<br>
to distribute cpu time &quot;equally&quot; between processes. In some cases  
<br>
this translates into reducing the priority, or moving out, the most  
<br>
cpu hungry tasks. Sometimes this is exactly the opposite of how a  
<br>
real-time or parallel application is supposed to run.
<br>
<p>Anyway, any parallel benchmark in my view should be run using the  
<br>
real time scheduling algorithm and setting processor affinity for  
<br>
each process. On Linux, the two commands used to this are 'chrt' and  
<br>
'taskset'.
<br>
<p><p>On Jul 15, 2009, at 9:17 AM, Klymak Jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Robert,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry if this is offtopic for the more knowledgeable here...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14-Jul-09, at 7:50 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev2">&gt;&gt; By setting processor affinity you can force execution of each  
</span><br>
<span class="quotelev2">&gt;&gt; process on a specific core, thus limiting context switching. I  
</span><br>
<span class="quotelev2">&gt;&gt; know affinity wasn't supported on MacOS last year, I don't know if  
</span><br>
<span class="quotelev2">&gt;&gt; the situation has changed.
</span><br>
<span class="quotelev2">&gt;&gt; But running oversubscription without process affinity might cancel  
</span><br>
<span class="quotelev2">&gt;&gt; the benefit of SMT because the OS will try to allocate each  
</span><br>
<span class="quotelev2">&gt;&gt; process to whatever core becomes available, thus increasing  
</span><br>
<span class="quotelev2">&gt;&gt; context switching.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a little over my head (i.e. SMT?).  However, to explain,  
</span><br>
<span class="quotelev1">&gt; the jobs were a gridded simulation, with the grid divided into 8,  
</span><br>
<span class="quotelev1">&gt; or 16 'tiles' .  Each core gets a tile and passes info the the  
</span><br>
<span class="quotelev1">&gt; adjacent ones.  I would be very surprised to find out that the  
</span><br>
<span class="quotelev1">&gt; tiles were changing cores mid simulation. Why would the OS do  
</span><br>
<span class="quotelev1">&gt; something so silly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machines were certainly still running other processes to keep  
</span><br>
<span class="quotelev1">&gt; the operating system going.  If you watch the cpu monitor, the  
</span><br>
<span class="quotelev1">&gt; total would occasionally drop from 100% to 98% as some operating  
</span><br>
<span class="quotelev1">&gt; system process kicked in, but in general the jobs were pegged,  
</span><br>
<span class="quotelev1">&gt; leaving little opportunity for one core to decide to take over what  
</span><br>
<span class="quotelev1">&gt; another core was already doing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, and if I'm incorrect about how the jobs get distributed  
</span><br>
<span class="quotelev1">&gt; between cores, I'd be more than happy to be corrected.  As I said,  
</span><br>
<span class="quotelev1">&gt; my knowledge of this stuff is pretty abstract.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,   Jody
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
<li><strong>Next message:</strong> <a href="9989.php">vipin kumar: "[OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="9987.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9973.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9941.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] 2 to 1 oversubscription"</a>
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
