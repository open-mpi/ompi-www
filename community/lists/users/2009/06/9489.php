<?
$subject_val = "Re: [OMPI users] Problem getting OpenMPI to run";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 15:34:42 2009" -->
<!-- isoreceived="20090601193442" -->
<!-- sent="Mon, 01 Jun 2009 15:34:40 -0400" -->
<!-- isosent="20090601193440" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem getting OpenMPI to run" -->
<!-- id="4A242D50.1010302_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A2424D0.9080006_at_att.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem getting OpenMPI to run<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 15:34:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9490.php">Eugene Loh: "Re: [OMPI users] mpi trace visualization"</a>
<li><strong>Previous message:</strong> <a href="9488.php">Eugene Loh: "Re: [OMPI users] Performance testing software?"</a>
<li><strong>In reply to:</strong> <a href="9485.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9494.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Reply:</strong> <a href="9494.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Layton wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 1, 2009, at 2:04 PM, Jeff Layton wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: executing task of job 3084 failed: execution daemon on host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;compute-2-2.local&quot; didn't accept task
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like an error message from the resource manager/scheduler 
</span><br>
<span class="quotelev2">&gt;&gt; -- not from OMPI (i.e., OMPI tried to launch a process on a node and 
</span><br>
<span class="quotelev2">&gt;&gt; the launch failed because something rejected it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which one are you using?
</span><br>
<p>When you built Open-MPI, did you use the
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-sge
<br>
<p>switch?  Or if this is an OFED release, is it possible that this wasn't 
<br>
specified?
<br>
<p>FWIW, this looks like a Rocks compute node (&quot;compute-2-2.local&quot; gives 
<br>
that away).  The OFED Rolls in Rocks have had a few issues in the past 
<br>
with how they were built, so you may be running into that.  If you 
<br>
didn't build it yourself, I'd suggest at least giving that a try.
<br>
<p>Alternatively, OFED-1.4 is pretty good.  Has a later version of Open-MPI 
<br>
than 1.3.x
<br>
<p>Joe
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SGE
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
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics,
email: landman_at_[hidden]
web  : <a href="http://scalableinformatics.com">http://scalableinformatics.com</a>
        <a href="http://scalableinformatics.com/jackrabbit">http://scalableinformatics.com/jackrabbit</a>
phone: +1 734 786 8423 x121
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9490.php">Eugene Loh: "Re: [OMPI users] mpi trace visualization"</a>
<li><strong>Previous message:</strong> <a href="9488.php">Eugene Loh: "Re: [OMPI users] Performance testing software?"</a>
<li><strong>In reply to:</strong> <a href="9485.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9494.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Reply:</strong> <a href="9494.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
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
