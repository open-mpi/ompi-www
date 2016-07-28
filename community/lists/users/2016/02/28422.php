<?
$subject_val = "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 11:32:12 2016" -->
<!-- isoreceived="20160201163212" -->
<!-- sent="Mon, 1 Feb 2016 17:32:11 +0100" -->
<!-- isosent="20160201163211" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall" -->
<!-- id="CAG8o1y6+0hMYSFQFCCLurX0GmU6+8Fj6iYGyRahO6y_O99rwPA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=u+Qcmw4G22uWQBOVEiQJ8dqYzTUD2F29Khc+K2wZKMpVQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-01 11:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28421.php">Jeff Hammond: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28421.php">Jeff Hammond: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all, Dear Jeff S., DearJeff H.,
<br>
<p>I had to set nMSG equal to 2. Now, the program works.
<br>
<p>Thansks, for you time and helps.
<br>
<p><p><p><p>Diego
<br>
<p><p>On 30 January 2016 at 00:11, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 29, 2016 at 2:45 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have created a program in fortran and OpenMPI, I test it on my laptop
</span><br>
<span class="quotelev2">&gt;&gt; and it works.
</span><br>
<span class="quotelev2">&gt;&gt; I would like to use it on a cluster that has, unfortunately, intel MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; You can install any open-source MPI implementation from user space.  This
</span><br>
<span class="quotelev1">&gt; includes Open-MPI, MPICH, and MVAPICH2.  If you like Open-MPI, try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;download Open-MPI tarball, unpack as $OMPI_DIR&gt;
</span><br>
<span class="quotelev1">&gt; cd $OMPI_DIR &amp;&amp; mkdir build &amp;&amp; cd build &amp;&amp; ../configure
</span><br>
<span class="quotelev1">&gt; --prefix=$HOME/ompi-install &amp;&amp; make -j &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...or something like that.  I'm sure the details are properly documented
</span><br>
<span class="quotelev1">&gt; online.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28421.php">http://www.open-mpi.org/community/lists/users/2016/01/28421.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28422/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28421.php">Jeff Hammond: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28421.php">Jeff Hammond: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
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
