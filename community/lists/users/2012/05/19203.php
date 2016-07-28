<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  5 12:04:13 2012" -->
<!-- isoreceived="20120505160413" -->
<!-- sent="Sat, 05 May 2012 09:04:26 -0700" -->
<!-- isosent="20120505160426" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="4FA54F8A.6040803_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOf_+-UE4tSZvfqnSOMMET8fpiZ-M-QR9n6vtD0ufD8uHxymUQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-05 12:04:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19204.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19202.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19201.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19207.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19207.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Wtime() returns the elapsed time since some arbitrary time in the 
<br>
past.  It is a measure of &quot;wallclock&quot; time, not of CPU time or anything.
<br>
<p>On 5/4/2012 3:08 PM, Jingcha Joba wrote:
<br>
<span class="quotelev1">&gt; Lets say I have a code like this
</span><br>
<span class="quotelev1">&gt; start = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; &lt;Run the solver&gt;
</span><br>
<span class="quotelev1">&gt; stop = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt; What happens when right after start=MPI_Wtime(), the timeslice of the 
</span><br>
<span class="quotelev1">&gt; process ( from the operating system's perspective not the MPI 
</span><br>
<span class="quotelev1">&gt; process) is over, and the operating system schedules a next process, 
</span><br>
<span class="quotelev1">&gt; after saving the context switch, and eventually this application would 
</span><br>
<span class="quotelev1">&gt; resume, once its process is scheduled back by the os.
</span><br>
<span class="quotelev1">&gt; Does MPI_Wtime() takes care of storing/updating the time when this 
</span><br>
<span class="quotelev1">&gt; happens?
</span><br>
<span class="quotelev1">&gt; Of course, part of the answer lies in the implementation of Wtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 4, 2012 at 3:53 AM, Jeff Squyres &lt;jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On May 3, 2012, at 2:02 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Not related to this question , but just curious, is Wtime
</span><br>
<span class="quotelev1">&gt;     context switch safe ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Not sure exactly what you're asking here...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19203/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19204.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19202.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19201.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19207.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19207.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
