<?
$subject_val = "Re: [OMPI users] MPI Java bindings compile errors and missing datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 11:57:01 2013" -->
<!-- isoreceived="20131115165701" -->
<!-- sent="Fri, 15 Nov 2013 08:55:56 -0800" -->
<!-- isosent="20131115165556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Java bindings compile errors and missing datatype" -->
<!-- id="C9EFD086-7C4C-4B92-8EC2-B06CA527ACFF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAK2RZyx+-e1RG5eh42EbNp=qYCR4=Ed455N=E7mbLS0qjL=O3A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Java bindings compile errors and missing datatype<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 11:55:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23000.php">tmishima_at_[hidden]: "[OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="22998.php">Rob Latham: "Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>In reply to:</strong> <a href="22997.php">Christoffer Hamberg: "[OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>Reply:</strong> <a href="23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't replicate these problems - I tried both the current trunk and v1.7 branches. All appears to be in order. The Java support compiles without error, and mpijavac appears and functions as it should.
<br>
<p>What system are you using? Here's what I have:
<br>
<p>Linux bend001 2.6.32-358.18.1.el6.x86_64 #1 SMP Wed Aug 28 17:19:38 UTC 2013 x86_64 x86_64 x86_64 GNU/Linux
<br>
gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
<br>
javac 1.7.0_45
<br>
<p>As for the MPI.OBJECT issue: we completely revamped the Java bindings to (a) improve performance (they are now much, much closer to the C performance) and to make them better conform to the Java language standard terminology. So we are no longer compatible with the old mpiJava library - not only because of the APIs, but also because the new implementation is MPI-3 compliant.
<br>
<p>The authors of the work are generating some documentation and papers on it. For now, you can look at the MPI man pages to see the Java binding syntax, or use the Javadoc output (that is in the trunk but may not be in 1.7 yet).
<br>
<p><p>On Nov 15, 2013, at 6:04 AM, Christoffer Hamberg &lt;christoffer.hamberg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently trying to get the included java bindings running but as I've mentioned in a previous post I've had some problems. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.9-java --without-openib --enable-static --with-threads=posix --enable-mpi-thread-multiple --enable-mpi-java --with-jdk-bindir=/usr/lib/jvm/java-7-openjdk-armhf/bin --with-jdk-headers=/usr/lib/jvm/java-7-openjdk-armhf/include
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure succeeds without any errors, but the build breaks in ompi/mpi/java/c since the compiler doesn't include the jdk-headers. I fixed the corresponding Makefile to include it and it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second error I get is in ompi/tools/wrappers/Makefile where it sets: 
</span><br>
<span class="quotelev1">&gt; am__append_1 = mpijavac.1
</span><br>
<span class="quotelev1">&gt; am__append_2 = mpijavac.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shouldn't this be mpijavac.pl instead?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I changed it to .pl and it seems to build with any more errors, &quot;mpirun java&quot; works fine for some simple Java tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After this I tried some other tests using the MPI.OBJECT datatype, just to discover that it wasn't supported. I saw that it was included in mpiJava 1.2 and the current mpiJava in OMPI is 1.1(?). I guess the java bindings aren't that prioritized?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any advice for me to do, should I try to update the bindings or do you have any other recommendations how to get it running?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Christoffer Hamberg
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22999/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23000.php">tmishima_at_[hidden]: "[OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="22998.php">Rob Latham: "Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>In reply to:</strong> <a href="22997.php">Christoffer Hamberg: "[OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>Reply:</strong> <a href="23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
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
