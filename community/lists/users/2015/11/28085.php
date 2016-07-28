<?
$subject_val = "Re: [OMPI users] help understand unhelpful ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 09:40:14 2015" -->
<!-- isoreceived="20151120144014" -->
<!-- sent="Fri, 20 Nov 2015 23:40:10 +0900" -->
<!-- isosent="20151120144010" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help understand unhelpful ORTE error message" -->
<!-- id="CAAkFZ5tZ81r64FJiKr3QmZC6Kfymq6Ofu9oGrrFs3tMHFt6KkQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="877flcg33x.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] help understand unhelpful ORTE error message<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-20 09:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28086.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28084.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28084.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28106.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28106.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently, ompi create a file in the temporary directory and then mmap it.
<br>
an obvious requirement is the temporary directory must have enough free
<br>
space for that file.
<br>
(this might be an issue on some disk less nodes)
<br>
<p><p>a simple alternative could be to try /tmp, and if there is not enough
<br>
space, try /dev/shm
<br>
(unless the tmpdir has been set explicitly)
<br>
<p>any thought ?
<br>
<p>Gilles
<br>
<p>btw, we already use the force, thanks to the ob1 pml and the yoda spml
<br>
<p>On Friday, November 20, 2015, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Hammond &lt;jeff.science_at_[hidden] &lt;javascript:;&gt;&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Doesn't mpich have the option to use sysv memory?  You may want to try
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPICH?  Look, I may have earned my way onto Santa's naughty list more
</span><br>
<span class="quotelev1">&gt; than
</span><br>
<span class="quotelev2">&gt; &gt; a few times, but at least I have the decency not to post MPICH questions
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; the Open-MPI list ;-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If there is a way to tell Open-MPI to use shm_open without filesystem
</span><br>
<span class="quotelev2">&gt; &gt; backing (if that is even possible) at configure time, I'd love to do
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand what's required, but is this what you're after?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ ompi_info --param shmem all -l 9|grep priority
</span><br>
<span class="quotelev1">&gt;                  MCA shmem: parameter &quot;shmem_mmap_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;50&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA shmem: parameter &quot;shmem_posix_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;40&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA shmem: parameter &quot;shmem_sysv_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;30&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In the spirit OMPI - may the force be with you.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; All I will say here is that Open-MPI has a Vader BTL :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whatever that might mean.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28084.php">http://www.open-mpi.org/community/lists/users/2015/11/28084.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28086.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28084.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28084.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28106.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28106.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
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
