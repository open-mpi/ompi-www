<?
$subject_val = "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 25 15:19:32 2013" -->
<!-- isoreceived="20130725191932" -->
<!-- sent="Thu, 25 Jul 2013 15:19:17 -0400" -->
<!-- isosent="20130725191917" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0" -->
<!-- id="CA+ssbKWmON9aFXw84MUBvwUwi0EUffx4ZbqH7q1JccTyKh3Avw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7CA48B0D-DAFE-460F-A911-BB397CF71FB6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-25 15:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22388.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22386.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22370.php">Ralph Castain: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you. I tested a recent version and it worked.
<br>
<p>Saliya
<br>
<p><p>On Tue, Jul 23, 2013 at 2:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I suspect it has fallen stale as the Java bindings are being reworked as
</span><br>
<span class="quotelev1">&gt; we speak. I hope to see them committed back to the trunk shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 20, 2013, at 10:01 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I obtained the nightly build openmpi-1.9a1r28881 (on 7/19/13) and built it
</span><br>
<span class="quotelev1">&gt; with java enabled using,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-java --prefix=/N/u/sekanaya/build
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I wrote a simple MPI program to print the rank of the process,
</span><br>
<span class="quotelev1">&gt; following user guide from <a href="http://www.open-mpi.org/papers/mpi-java-spec/">http://www.open-mpi.org/papers/mpi-java-spec/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built my code using mpijavac and then tried running it as,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 java Main
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where Main is my class name (not in a package) and I was running inside
</span><br>
<span class="quotelev1">&gt; the folder containing Main.class.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error when doing so,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.UnsatisfiedLinkError:
</span><br>
<span class="quotelev1">&gt; /N/u/sekanaya/build/lib/libmpi_java.so.0.0.0:
</span><br>
<span class="quotelev1">&gt; /N/u/sekanaya/build/lib/libmpi.so.0: undefined symbol: opal_maffinity_setup
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion on fixing this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22387/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22388.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22386.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22370.php">Ralph Castain: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
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
