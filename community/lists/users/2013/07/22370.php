<?
$subject_val = "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 14:30:38 2013" -->
<!-- isoreceived="20130723183038" -->
<!-- sent="Tue, 23 Jul 2013 11:30:33 -0700" -->
<!-- isosent="20130723183033" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0" -->
<!-- id="7CA48B0D-DAFE-460F-A911-BB397CF71FB6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKUQKwCGC8NF4trT=wVRRMCsUwR51xGSYZoFFkyLKAXVzw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 14:30:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22371.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22369.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>In reply to:</strong> <a href="22357.php">Saliya Ekanayake: "[OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22387.php">Saliya Ekanayake: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>Reply:</strong> <a href="22387.php">Saliya Ekanayake: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect it has fallen stale as the Java bindings are being reworked as we speak. I hope to see them committed back to the trunk shortly.
<br>
<p><p>On Jul 20, 2013, at 10:01 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I obtained the nightly build openmpi-1.9a1r28881 (on 7/19/13) and built it with java enabled using,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-java --prefix=/N/u/sekanaya/build
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I wrote a simple MPI program to print the rank of the process, following user guide from <a href="http://www.open-mpi.org/papers/mpi-java-spec/">http://www.open-mpi.org/papers/mpi-java-spec/</a>
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
<span class="quotelev1">&gt; where Main is my class name (not in a package) and I was running inside the folder containing Main.class.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error when doing so,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.UnsatisfiedLinkError: /N/u/sekanaya/build/lib/libmpi_java.so.0.0.0: /N/u/sekanaya/build/lib/libmpi.so.0: undefined symbol: opal_maffinity_setup
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22370/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22371.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22369.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>In reply to:</strong> <a href="22357.php">Saliya Ekanayake: "[OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22387.php">Saliya Ekanayake: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>Reply:</strong> <a href="22387.php">Saliya Ekanayake: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
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
