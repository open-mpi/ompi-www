<?
$subject_val = "Re: [OMPI users] MPI Java bindings compile errors and missing datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 19 05:18:02 2013" -->
<!-- isoreceived="20131119101802" -->
<!-- sent="Tue, 19 Nov 2013 11:17:41 +0100" -->
<!-- isosent="20131119101741" -->
<!-- name="Christoffer Hamberg" -->
<!-- email="christoffer.hamberg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Java bindings compile errors and missing datatype" -->
<!-- id="CAK2RZyx6xQp1ryjmA1gAkWyLBsim5HnuD24sh7Mt--NWuX1hkg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C9EFD086-7C4C-4B92-8EC2-B06CA527ACFF_at_open-mpi.org" -->
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
<strong>From:</strong> Christoffer Hamberg (<em>christoffer.hamberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-19 05:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23005.php">Florian Bruckner: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>Previous message:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>In reply to:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23143.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI Java bindings compile errors and missing	datatype"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23143.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI Java bindings compile errors and missing	datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see, I'm running:
<br>
<p>Ubuntu 13.04 (GNU/Linux 3.8.0-19-generic i686)
<br>
Linux node0 3.5.0-43-highbank #66-Ubuntu SMP Tue Oct 22 03:54:35 UTC 2013
<br>
armv7l armv7l armv7l GNU/Linux
<br>
gcc (Ubuntu/Linaro 4.7.2-2ubuntu1) 4.7.2
<br>
javac 1.7.0_25
<br>
<p>Thank you for the information, I'll have a look at that.
<br>
<p>/Christoffer
<br>
<p><p><p><p>2013/11/15 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I can't replicate these problems - I tried both the current trunk and v1.7
</span><br>
<span class="quotelev1">&gt; branches. All appears to be in order. The Java support compiles without
</span><br>
<span class="quotelev1">&gt; error, and mpijavac appears and functions as it should.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What system are you using? Here's what I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux bend001 2.6.32-358.18.1.el6.x86_64 #1 SMP Wed Aug 28 17:19:38 UTC
</span><br>
<span class="quotelev1">&gt; 2013 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
</span><br>
<span class="quotelev1">&gt; javac 1.7.0_45
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the MPI.OBJECT issue: we completely revamped the Java bindings to
</span><br>
<span class="quotelev1">&gt; (a) improve performance (they are now much, much closer to the C
</span><br>
<span class="quotelev1">&gt; performance) and to make them better conform to the Java language standard
</span><br>
<span class="quotelev1">&gt; terminology. So we are no longer compatible with the old mpiJava library -
</span><br>
<span class="quotelev1">&gt; not only because of the APIs, but also because the new implementation is
</span><br>
<span class="quotelev1">&gt; MPI-3 compliant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The authors of the work are generating some documentation and papers on
</span><br>
<span class="quotelev1">&gt; it. For now, you can look at the MPI man pages to see the Java binding
</span><br>
<span class="quotelev1">&gt; syntax, or use the Javadoc output (that is in the trunk but may not be in
</span><br>
<span class="quotelev1">&gt; 1.7 yet).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 15, 2013, at 6:04 AM, Christoffer Hamberg &lt;
</span><br>
<span class="quotelev1">&gt; christoffer.hamberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently trying to get the included java bindings running but as I've
</span><br>
<span class="quotelev1">&gt; mentioned in a previous post I've had some problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.9-java --without-openib
</span><br>
<span class="quotelev1">&gt; --enable-static --with-threads=posix --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; --enable-mpi-java --with-jdk-bindir=/usr/lib/jvm/java-7-openjdk-armhf/bin
</span><br>
<span class="quotelev1">&gt; --with-jdk-headers=/usr/lib/jvm/java-7-openjdk-armhf/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure succeeds without any errors, but the build breaks in
</span><br>
<span class="quotelev1">&gt; ompi/mpi/java/c since the compiler doesn't include the jdk-headers. I fixed
</span><br>
<span class="quotelev1">&gt; the corresponding Makefile to include it and it works.
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
<span class="quotelev1">&gt; I changed it to .pl and it seems to build with any more errors, &quot;mpirun
</span><br>
<span class="quotelev1">&gt; java&quot; works fine for some simple Java tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After this I tried some other tests using the MPI.OBJECT datatype, just to
</span><br>
<span class="quotelev1">&gt; discover that it wasn't supported. I saw that it was included in mpiJava
</span><br>
<span class="quotelev1">&gt; 1.2 and the current mpiJava in OMPI is 1.1(?). I guess the java bindings
</span><br>
<span class="quotelev1">&gt; aren't that prioritized?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any advice for me to do, should I try to update the bindings
</span><br>
<span class="quotelev1">&gt; or do you have any other recommendations how to get it running?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23004/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23005.php">Florian Bruckner: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>Previous message:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>In reply to:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23143.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI Java bindings compile errors and missing	datatype"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23143.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI Java bindings compile errors and missing	datatype"</a>
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
