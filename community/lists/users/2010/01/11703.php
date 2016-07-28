<?
$subject_val = "Re: [OMPI users] mpirun hangs with multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 12:06:22 2010" -->
<!-- isoreceived="20100106170622" -->
<!-- sent="Wed, 6 Jan 2010 10:06:14 -0700" -->
<!-- isosent="20100106170614" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs with multiple nodes" -->
<!-- id="88D1EE11-76B8-43E6-B7E6-27873F94F079_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6546e7be1001060856ya13d681jea4e2fbca6fc0b48_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs with multiple nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-06 12:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11704.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11702.php">Tim Miller: "[OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>In reply to:</strong> <a href="11701.php">Marcia Cristina Cera: "[OMPI users] mpirun hangs with multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a bug in that tarball which was fixed as of yesterday. However, the patch that you need was the cause of the bug, so the fix for your problem is no longer in the 1.4 branch.
<br>
<p>As you probably recall, I had cautioned that the fix might not make it to the 1.4 series. At the time, I was concerned about timing. It turned out that the timing was okay, but that the complete fix requires more change to the 1.4 series than the OMPI community was comfortable in making.
<br>
<p>So the fix for your original problem will be in the 1.5 release, hopefully coming in the not-too-distant future. In the interim, you should be okay using a tarball from the developer's trunk - it appears to be pretty stable at the moment. I would suggest grabbing a tarball from it and then stabilizing there until the 1.5 release.
<br>
<p>Ralph
<br>
<p>On Jan 6, 2010, at 9:56 AM, Marcia Cristina Cera wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the OpenMPI v1.4a1r22335 to run an MPI application that creates 
</span><br>
<span class="quotelev1">&gt; dynamically processes.
</span><br>
<span class="quotelev1">&gt; The application behavior is like explained in a previous e-mail
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/12/11540.php">http://www.open-mpi.org/community/lists/users/2009/12/11540.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The application is launched by a command line such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ mpirun -hostfile myhosts -np 1 myapp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; myhosts describes 2 nodes:
</span><br>
<span class="quotelev1">&gt; node1 slots=8
</span><br>
<span class="quotelev1">&gt; node2 slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My application runs as expected creating dynamic processes into the two nodes. 
</span><br>
<span class="quotelev1">&gt; After compute, all processes (static and dynamic ones) finalizes too -- confirmed 
</span><br>
<span class="quotelev1">&gt; looking 'top' and 'ps' commands.
</span><br>
<span class="quotelev1">&gt; But, the mpirun remains running and the application never liberate the shell. 
</span><br>
<span class="quotelev1">&gt; I try use mpiexec, but it also hangs.
</span><br>
<span class="quotelev1">&gt; If I run locally (without -hostfile), the mpirun does not hang!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone could help me?!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For awhile, I create a script to kill the mpirun to enable the execution of many consecutive mpirun calls, 
</span><br>
<span class="quotelev1">&gt; but it is not a &quot;beautiful&quot; solution :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; m&#225;rcia
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11704.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11702.php">Tim Miller: "[OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>In reply to:</strong> <a href="11701.php">Marcia Cristina Cera: "[OMPI users] mpirun hangs with multiple nodes"</a>
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
