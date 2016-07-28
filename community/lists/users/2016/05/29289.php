<?
$subject_val = "Re: [OMPI users] mpirun java";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 13:54:44 2016" -->
<!-- isoreceived="20160523175444" -->
<!-- sent="Mon, 23 May 2016 13:54:42 -0400" -->
<!-- isosent="20160523175442" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun java" -->
<!-- id="CA+ssbKU74+byNtLn_Sj06xTY=BQisHNFPQYWja2MZXaWX=firQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj7EXduGoVZLCtet+OJiMtMRWC4D1ELZ-C0mTGM8hAN+Qw_at_mail.gmail.com" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 13:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Previous message:</strong> <a href="29288.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<li><strong>In reply to:</strong> <a href="29288.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tested with OpenMPI 1.10.1 and it works.
<br>
<p>See this example, which prints java.library.path
<br>
<p>mpijavac LibPath.java
<br>
mpirun -np 2 java -Djava.library.path=path LibPath
<br>
<p>On Mon, May 23, 2016 at 1:38 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello Claudio,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun should be combining your java.library.path option with the one
</span><br>
<span class="quotelev1">&gt; needed to add
</span><br>
<span class="quotelev1">&gt; the Open MPI's java bindings as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you first try to compile the Ring.java code in ompi/examples and run
</span><br>
<span class="quotelev1">&gt; it with the
</span><br>
<span class="quotelev1">&gt; following additional mpirun parameter?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca odls_base_verbose 100 java Ring
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then try your application with the same &quot;odls_base_verbose&quot; mpirun option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and post the output from the two runs to the mail list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect there may be a bug with building the combined java.library.path
</span><br>
<span class="quotelev1">&gt; in the Open MPI code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-05-23 9:47 GMT-06:00 Claudio Stamile &lt;claudiostamile_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi for Java.
</span><br>
<span class="quotelev2">&gt;&gt; I've a problem when I try to use more option parameters in my java
</span><br>
<span class="quotelev2">&gt;&gt; command. More in detail I run mpirun as follow:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 5 java -cp path1:path2 -Djava.library.path=pathLibs
</span><br>
<span class="quotelev2">&gt;&gt; classification.MyClass
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the option &quot;-Djava.library.path&quot; is ignored when i execute
</span><br>
<span class="quotelev2">&gt;&gt; the command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it normal ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know how to solve this problem ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Claudio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; C.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29285.php">http://www.open-mpi.org/community/lists/users/2016/05/29285.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29288.php">http://www.open-mpi.org/community/lists/users/2016/05/29288.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29289/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29289/LibPath.java">LibPath.java</a>
</ul>
<!-- attachment="LibPath.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Previous message:</strong> <a href="29288.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<li><strong>In reply to:</strong> <a href="29288.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
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
