<?
$subject_val = "Re: [OMPI users] mpirun java";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 13:38:34 2016" -->
<!-- isoreceived="20160523173834" -->
<!-- sent="Mon, 23 May 2016 11:38:33 -0600" -->
<!-- isosent="20160523173833" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun java" -->
<!-- id="CAF1Cqj7EXduGoVZLCtet+OJiMtMRWC4D1ELZ-C0mTGM8hAN+Qw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAdD79zz1wAonmr5hOd3Jp51QEDUhmP5WW8Tp7EuJLDfsHeFxw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun java<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 13:38:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29289.php">Saliya Ekanayake: "Re: [OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29287.php">Ralph Castain: "Re: [OMPI users] wtime implementation in 1.10"</a>
<li><strong>In reply to:</strong> <a href="29285.php">Claudio Stamile: "[OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29289.php">Saliya Ekanayake: "Re: [OMPI users] mpirun java"</a>
<li><strong>Reply:</strong> <a href="29289.php">Saliya Ekanayake: "Re: [OMPI users] mpirun java"</a>
<li><strong>Reply:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Claudio,
<br>
<p>mpirun should be combining your java.library.path option with the one
<br>
needed to add
<br>
the Open MPI's java bindings as well.
<br>
<p>Which version of Open MPI are you using?
<br>
<p>Could you first try to compile the Ring.java code in ompi/examples and run
<br>
it with the
<br>
following additional mpirun parameter?
<br>
<p>mpirun -np 1 --mca odls_base_verbose 100 java Ring
<br>
<p>then try your application with the same &quot;odls_base_verbose&quot; mpirun option
<br>
<p>and post the output from the two runs to the mail list?
<br>
<p>I suspect there may be a bug with building the combined java.library.path
<br>
in the Open MPI code.
<br>
<p>Howard
<br>
<p><p>2016-05-23 9:47 GMT-06:00 Claudio Stamile &lt;claudiostamile_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using openmpi for Java.
</span><br>
<span class="quotelev1">&gt; I've a problem when I try to use more option parameters in my java
</span><br>
<span class="quotelev1">&gt; command. More in detail I run mpirun as follow:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 5 java -cp path1:path2 -Djava.library.path=pathLibs
</span><br>
<span class="quotelev1">&gt; classification.MyClass
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the option &quot;-Djava.library.path&quot; is ignored when i execute
</span><br>
<span class="quotelev1">&gt; the command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it normal ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know how to solve this problem ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Claudio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; C.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29285.php">http://www.open-mpi.org/community/lists/users/2016/05/29285.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29289.php">Saliya Ekanayake: "Re: [OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29287.php">Ralph Castain: "Re: [OMPI users] wtime implementation in 1.10"</a>
<li><strong>In reply to:</strong> <a href="29285.php">Claudio Stamile: "[OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29289.php">Saliya Ekanayake: "Re: [OMPI users] mpirun java"</a>
<li><strong>Reply:</strong> <a href="29289.php">Saliya Ekanayake: "Re: [OMPI users] mpirun java"</a>
<li><strong>Reply:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
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
