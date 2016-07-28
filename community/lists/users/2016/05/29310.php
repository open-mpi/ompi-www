<?
$subject_val = "Re: [OMPI users] problem with exceptions in Java interface";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 13:29:35 2016" -->
<!-- isoreceived="20160524172935" -->
<!-- sent="Tue, 24 May 2016 11:29:33 -0600" -->
<!-- isosent="20160524172933" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with exceptions in Java interface" -->
<!-- id="CAF1Cqj7-imJ6qK3Rg4AO_a0r93bkGdUVvhJ9gJcQ8d_o=rE0Aw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="e9537fbc-4fd3-e4f1-17ff-285881a0af3f_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with exceptions in Java interface<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-24 13:29:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29311.php">Ryan Novosielski: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Previous message:</strong> <a href="29309.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29256.php">Siegmar Gross: "[OMPI users] problem with exceptions in Java interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>Sorry for the delay, I seem to have missed this one.
<br>
<p>It looks like there's an error in the way the native methods are processing
<br>
java exceptions.  The code correctly builds up an exception message for
<br>
cases where MPI 'c' returns non-success but, not if the problem occured
<br>
in one of the JNI utilities.
<br>
<p>Issue filed:
<br>
<a href="https://github.com/open-mpi/ompi/issues/1698">https://github.com/open-mpi/ompi/issues/1698</a>
<br>
<p><p>Thanks for reporting this.
<br>
<p><p>Howard
<br>
<p><p>2016-05-20 9:25 GMT-06:00 Siegmar Gross &lt;
<br>
siegmar.gross_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried MPI.ERRORS_RETURN in a small Java program with Open MPI
</span><br>
<span class="quotelev1">&gt; 1.10.2 and master. I get the expected behaviour, if I use a
</span><br>
<span class="quotelev1">&gt; wrong value for the root process in &quot;bcast&quot;. Unfortunately I
</span><br>
<span class="quotelev1">&gt; get an MPI or Java error message if I try to broadcast more data
</span><br>
<span class="quotelev1">&gt; than available. Is this intended or is it a problem in the Java
</span><br>
<span class="quotelev1">&gt; interface of Open MPI? I would be grateful if somebody can answer
</span><br>
<span class="quotelev1">&gt; my question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki java 194 mpijavac Exception_1_Main.java
</span><br>
<span class="quotelev1">&gt; loki java 195 mpijavac Exception_2_Main.java
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki java 196 mpiexec -np 1 java Exception_1_Main
</span><br>
<span class="quotelev1">&gt; Set error handler for MPI.COMM_WORLD to MPI.ERRORS_RETURN.
</span><br>
<span class="quotelev1">&gt; Call &quot;bcast&quot; with wrong &quot;root&quot; process.
</span><br>
<span class="quotelev1">&gt; Caught an exception.
</span><br>
<span class="quotelev1">&gt; MPI_ERR_ROOT: invalid root
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loki java 197 mpiexec -np 1 java Exception_2_Main
</span><br>
<span class="quotelev1">&gt; Set error handler for MPI.COMM_WORLD to MPI.ERRORS_RETURN.
</span><br>
<span class="quotelev1">&gt; Call &quot;bcast&quot; with index out-of bounds.
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.ArrayIndexOutOfBoundsException
</span><br>
<span class="quotelev1">&gt;         at mpi.Comm.bcast(Native Method)
</span><br>
<span class="quotelev1">&gt;         at mpi.Comm.bcast(Comm.java:1231)
</span><br>
<span class="quotelev1">&gt;         at Exception_2_Main.main(Exception_2_Main.java:44)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[38300,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; loki java 198
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards and thank you very much for any help in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29256.php">http://www.open-mpi.org/community/lists/users/2016/05/29256.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29310/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29311.php">Ryan Novosielski: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Previous message:</strong> <a href="29309.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29256.php">Siegmar Gross: "[OMPI users] problem with exceptions in Java interface"</a>
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
