<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  7 14:39:38 2012" -->
<!-- isoreceived="20120507183938" -->
<!-- sent="Mon, 7 May 2012 11:39:13 -0700" -->
<!-- isosent="20120507183913" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="CAOf_+-XQN21QGLOLKtuCNfbN0Qv_2iEOQqd69GQSrW_W=SyUQQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FA54F8A.6040803_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the execution time calculation<br>
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-07 14:39:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19208.php">David Turner: "[OMPI users] open-mpi.org site"</a>
<li><strong>Previous message:</strong> <a href="19206.php">Simone Pellegrini: "[OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>In reply to:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK.This explains that if a process gets &quot;migrated&quot; from one CPU to another,
<br>
the time is not &quot;affected&quot;. But it still doesn't explain if the process
<br>
gets scheduled back to the same CPU.
<br>
<p>Just in case I have not explained my question clearly, let me explain it
<br>
from the schedular's perspective.
<br>
Lets assume that there are 3 processes, P1 an MPI process, P2 and P3 are
<br>
otehr active processes. Assume that the timeslice for each process is 10ms.
<br>
<p>During the first time slice that P1 gets, it calls the MPI_Wtime(), stores
<br>
it in &quot;start&quot; variable and does half of the solver. Unfortunately, at this
<br>
ponit the timeslice of P1 got over, and the OS schedules P2 and P3 before
<br>
getting back to P1. So it takes 20ms, before P1 gets its share of CPU back,
<br>
at which point it completes the remaining half of the solver, and
<br>
calculated MPI_Wtime() and stores it in end. In short, it required two
<br>
timeslice for the MPI process to complete.
<br>
<p>If the &quot;wall clock&quot; (a global counter) and there is no way for me to &quot;save&quot;
<br>
the value when the context switch occured from P1 to P2 and re-initialize
<br>
counting as soon as context switches from P3 back to P1, then it would
<br>
include the time spent by the process P2 and P3 as well (20ms in this case)
<br>
.
<br>
PS: To keep it simple, I am not considering the preemption that might
<br>
happen due to an interrupt, or the overhead of context switching.
<br>
<p><p><pre>
--
Joba
On Sat, May 5, 2012 at 9:04 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
&gt; **
&gt; MPI_Wtime() returns the elapsed time since some arbitrary time in the
&gt; past.  It is a measure of &quot;wallclock&quot; time, not of CPU time or anything.
&gt;
&gt;
&gt; On 5/4/2012 3:08 PM, Jingcha Joba wrote:
&gt;
&gt; Lets say I have a code like this
&gt;
&gt; start = MPI_Wtime()
&gt; &lt;Run the solver&gt;
&gt; stop = MPI_Wtime();
&gt;
&gt; What happens when right after start=MPI_Wtime(), the timeslice of the
&gt; process ( from the operating system's perspective not the MPI process) is
&gt; over, and the operating system schedules a next process, after saving the
&gt; context switch, and eventually this application would resume, once its
&gt; process is scheduled back by the os.
&gt;
&gt; Does MPI_Wtime() takes care of storing/updating the time when this
&gt; happens?
&gt;
&gt; Of course, part of the answer lies in the implementation of Wtime.
&gt;
&gt;
&gt;  On Fri, May 4, 2012 at 3:53 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; On May 3, 2012, at 2:02 PM, Jingcha Joba wrote:
&gt;&gt;
&gt;&gt; &gt; Not related to this question , but just curious, is Wtime context
&gt;&gt; switch safe ?
&gt;&gt;
&gt;&gt;  Not sure exactly what you're asking here...?
&gt;&gt;
&gt;&gt; --
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19208.php">David Turner: "[OMPI users] open-mpi.org site"</a>
<li><strong>Previous message:</strong> <a href="19206.php">Simone Pellegrini: "[OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>In reply to:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regarding the execution time calculation"</a>
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
