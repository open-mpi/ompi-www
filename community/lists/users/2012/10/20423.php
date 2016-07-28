<?
$subject_val = "Re: [OMPI users] [threads] How to configure Open MPI for thread support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  8 20:34:53 2012" -->
<!-- isoreceived="20121009003453" -->
<!-- sent="Mon, 8 Oct 2012 17:34:47 -0700" -->
<!-- isosent="20121009003447" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [threads] How to configure Open MPI for thread support" -->
<!-- id="CAMD57of9johrZbKXdV-k2dZTHbRs5z5dEMpN6Tod2dt=HhGf5g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACSDapYuGRh7TMqjcz2QZ71QbNkg==75AWHd-r3eyfh728+74A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [threads] How to configure Open MPI for thread support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-08 20:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20424.php">huydanlin: "[OMPI users] Communication Round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20422.php">Tohiko Looka: "[OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20421.php">Daniel Mitchell: "[OMPI users] [threads] How to configure Open MPI for thread support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep - that is correct
<br>
<p>On Mon, Oct 8, 2012 at 12:31 PM, Daniel Mitchell &lt;
<br>
daniel.lewis.mitchell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm writing a hybrid parallel program and it seems that unless I
</span><br>
<span class="quotelev1">&gt; configure Open MPI with --enable-thread-multiple, then MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; always provides MPI_THREAD_SINGLE, regardless of what I pass for the
</span><br>
<span class="quotelev1">&gt; required argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this mean that I have to configure with --enable-thread-multiple
</span><br>
<span class="quotelev1">&gt; even to use FUNNELED and SERIALIZED threads?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20424.php">huydanlin: "[OMPI users] Communication Round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20422.php">Tohiko Looka: "[OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20421.php">Daniel Mitchell: "[OMPI users] [threads] How to configure Open MPI for thread support"</a>
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
