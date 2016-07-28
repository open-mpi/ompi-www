<?
$subject_val = "Re: [OMPI users] Question about MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 09:25:00 2010" -->
<!-- isoreceived="20101021132500" -->
<!-- sent="Thu, 21 Oct 2010 08:24:54 -0500" -->
<!-- isosent="20101021132454" -->
<!-- name="Storm Zhang" -->
<!-- email="stormzhg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Barrier" -->
<!-- id="AANLkTi=H0tp+aHVjqjVOpkuBkDAD+WSDWQa1SWfZ1=Xz_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B32F6EEB-1725-413F-B5C5-B9B26FA1058F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about MPI_Barrier<br>
<strong>From:</strong> Storm Zhang (<em>stormzhg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 09:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14528.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14526.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14522.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for your reply. By commenting code B, I mean if I remove the
<br>
code B part, then the time spent on code A seems to run faster. I do have a
<br>
lot of communications in code B too. It involves 500 procs. I had thought
<br>
code B should have no effect on the time spent on code A if I use
<br>
MPI_Barrier.
<br>
<p>Linbao
<br>
On Thu, Oct 21, 2010 at 5:17 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 20, 2010, at 5:51 PM, Storm Zhang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need to measure t2-t1 to see the time spent on the code A between these
</span><br>
<span class="quotelev1">&gt; two MPI_Barriers. I notice that if I comment code B, the time seems much
</span><br>
<span class="quotelev1">&gt; less the original time (almost half). How does it happen? What is a possible
</span><br>
<span class="quotelev1">&gt; reason for it? I have no idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what you're asking here -- do you mean that if you put some
</span><br>
<span class="quotelev1">&gt; comments in code B, it takes much less time than if you don't put comments?
</span><br>
<span class="quotelev1">&gt;  If so, then the comments have nothing to do with the execution run-time --
</span><br>
<span class="quotelev1">&gt; something else is going on that is causing the delay.  Some questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - how long does it take to execute code B -- microseconds, or seconds, or
</span><br>
<span class="quotelev1">&gt; ...?
</span><br>
<span class="quotelev1">&gt; - how many processes are involved?
</span><br>
<span class="quotelev1">&gt; - what are you doing in code B; is it communication intensive and/or do you
</span><br>
<span class="quotelev1">&gt; synchronize with other processes?
</span><br>
<span class="quotelev1">&gt; - are you doing your timings on otherwise-empty machines?
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14528.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14526.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14522.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
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
