<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 18:08:30 2012" -->
<!-- isoreceived="20120504220830" -->
<!-- sent="Fri, 4 May 2012 15:08:06 -0700" -->
<!-- isosent="20120504220806" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="CAOf_+-UE4tSZvfqnSOMMET8fpiZ-M-QR9n6vtD0ufD8uHxymUQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59F9DC80-B1AC-4C66-AB4F-4FF123BFC080_at_cisco.com" -->
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
<strong>Date:</strong> 2012-05-04 18:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19202.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lets say I have a code like this
<br>
<p>start = MPI_Wtime()
<br>
&lt;Run the solver&gt;
<br>
stop = MPI_Wtime();
<br>
<p>What happens when right after start=MPI_Wtime(), the timeslice of the
<br>
process ( from the operating system's perspective not the MPI process) is
<br>
over, and the operating system schedules a next process, after saving the
<br>
context switch, and eventually this application would resume, once its
<br>
process is scheduled back by the os.
<br>
<p>Does MPI_Wtime() takes care of storing/updating the time when this happens?
<br>
<p>Of course, part of the answer lies in the implementation of Wtime.
<br>
<p><p>On Fri, May 4, 2012 at 3:53 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 3, 2012, at 2:02 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not related to this question , but just curious, is Wtime context switch
</span><br>
<span class="quotelev1">&gt; safe ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure exactly what you're asking here...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19202.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
