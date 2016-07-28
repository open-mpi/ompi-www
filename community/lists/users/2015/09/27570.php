<?
$subject_val = "Re: [OMPI users] Package mpi does not exist";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 08:56:10 2015" -->
<!-- isoreceived="20150914125610" -->
<!-- sent="Mon, 14 Sep 2015 21:56:09 +0900" -->
<!-- isosent="20150914125609" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Package mpi does not exist" -->
<!-- id="CAAkFZ5tXJujiPgE_rW4JTXUOKKXiPFoxYUw-Qizm5Y9hsbc6tw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB125-W60C82F2F7A790963E4C2EA975D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Package mpi does not exist<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-14 08:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27571.php">Jeff Squyres (jsquyres): "[OMPI users] MPI-3.1 books now available"</a>
<li><strong>Previous message:</strong> <a href="27569.php">Ibrahim Ikhlawi: "[OMPI users] Package mpi does not exist"</a>
<li><strong>In reply to:</strong> <a href="27569.php">Ibrahim Ikhlawi: "[OMPI users] Package mpi does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
please use mpijavac instead of javac
<br>
this will automagically set the classpath with the ompi java libraries.
<br>
<p>if there is no javac, it is likely you did not configure ompi with
<br>
--enable-mpi-java
<br>
<p>On Monday, September 14, 2015, Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am beginner in OpenMPI. I want to run some examples from the extracted
</span><br>
<span class="quotelev1">&gt; openmpi-1.10.0/example,
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/software/ompi/v1.10/downloads/openmpi-1.10.0.tar.gz">http://www.open-mpi.org/software/ompi/v1.10/downloads/openmpi-1.10.0.tar.gz</a>&gt;
</span><br>
<span class="quotelev1">&gt; namely Hello.java and Ring.java.
</span><br>
<span class="quotelev1">&gt; But when I compile Hello.java with:
</span><br>
<span class="quotelev1">&gt; javac Hello.java
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello.java:25: error: package mpi does not existimport mpi.*;^Hello.java:28: error: cannot find symbol
</span><br>
<span class="quotelev1">&gt;     static public void main(String[] args) throws MPIException {
</span><br>
<span class="quotelev1">&gt;                                                   ^
</span><br>
<span class="quotelev1">&gt;   symbol:   class MPIException
</span><br>
<span class="quotelev1">&gt;   location: class HelloHello.java:31: error: cannot find symbol
</span><br>
<span class="quotelev1">&gt;     MPI.Init(args);
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt;   symbol:   variable MPI
</span><br>
<span class="quotelev1">&gt;   location: class HelloHello.java:33: error: package MPI does not exist
</span><br>
<span class="quotelev1">&gt;     int myrank = MPI.COMM_WORLD.getRank();
</span><br>
<span class="quotelev1">&gt;                     ^Hello.java:34: error: package MPI does not exist
</span><br>
<span class="quotelev1">&gt;     int size = MPI.COMM_WORLD.getSize() ;
</span><br>
<span class="quotelev1">&gt;                   ^Hello.java:37: error: cannot find symbol
</span><br>
<span class="quotelev1">&gt;     MPI.Finalize();
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt;   symbol:   variable MPI
</span><br>
<span class="quotelev1">&gt;   location: class Hello6 errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I resolve this problem or where can I find the mpi.jar?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Ibrahim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I cannot find mpi.jar in /lib directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27570/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27571.php">Jeff Squyres (jsquyres): "[OMPI users] MPI-3.1 books now available"</a>
<li><strong>Previous message:</strong> <a href="27569.php">Ibrahim Ikhlawi: "[OMPI users] Package mpi does not exist"</a>
<li><strong>In reply to:</strong> <a href="27569.php">Ibrahim Ikhlawi: "[OMPI users] Package mpi does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27930.php">Ibrahim Ikhlawi: "[OMPI users] How to multiply two matrices?"</a>
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
