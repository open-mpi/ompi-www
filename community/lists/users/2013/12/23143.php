<?
$subject_val = "Re: [OMPI users] MPI Java bindings compile errors and missing	datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 17:27:36 2013" -->
<!-- isoreceived="20131203222736" -->
<!-- sent="Tue, 3 Dec 2013 22:27:35 +0000" -->
<!-- isosent="20131203222735" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Java bindings compile errors and missing	datatype" -->
<!-- id="59D05056-5D98-4004-99EE-411563771015_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAK2RZyx6xQp1ryjmA1gAkWyLBsim5HnuD24sh7Mt--NWuX1hkg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Java bindings compile errors and missing	datatype<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 17:27:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Previous message:</strong> <a href="23142.php">Oscar Vega-Gisbert: "Re: [OMPI users] Several questions about new Java bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christophfer --
<br>
<p>I somewhat dropped off email starting right before SC, and am finally plowing through all the backlog.
<br>
<p>Did you get your Java issues sorted out?
<br>
<p><p><p>On Nov 19, 2013, at 5:17 AM, Christoffer Hamberg christoffer.hamberg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I see, I'm running:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ubuntu 13.04 (GNU/Linux 3.8.0-19-generic i686)
</span><br>
<span class="quotelev1">&gt; Linux node0 3.5.0-43-highbank #66-Ubuntu SMP Tue Oct 22 03:54:35 UTC 2013 armv7l armv7l armv7l GNU/Linux
</span><br>
<span class="quotelev1">&gt; gcc (Ubuntu/Linaro 4.7.2-2ubuntu1) 4.7.2
</span><br>
<span class="quotelev1">&gt; javac 1.7.0_25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the information, I'll have a look at that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /Christoffer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2013/11/15 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; I can't replicate these problems - I tried both the current trunk and v1.7 branches. All appears to be in order. The Java support compiles without error, and mpijavac appears and functions as it should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What system are you using? Here's what I have:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux bend001 2.6.32-358.18.1.el6.x86_64 #1 SMP Wed Aug 28 17:19:38 UTC 2013 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
</span><br>
<span class="quotelev1">&gt; javac 1.7.0_45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the MPI.OBJECT issue: we completely revamped the Java bindings to (a) improve performance (they are now much, much closer to the C performance) and to make them better conform to the Java language standard terminology. So we are no longer compatible with the old mpiJava library - not only because of the APIs, but also because the new implementation is MPI-3 compliant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The authors of the work are generating some documentation and papers on it. For now, you can look at the MPI man pages to see the Java binding syntax, or use the Javadoc output (that is in the trunk but may not be in 1.7 yet).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 15, 2013, at 6:04 AM, Christoffer Hamberg &lt;christoffer.hamberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm currently trying to get the included java bindings running but as I've mentioned in a previous post I've had some problems. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi-1.9-java --without-openib --enable-static --with-threads=posix --enable-mpi-thread-multiple --enable-mpi-java --with-jdk-bindir=/usr/lib/jvm/java-7-openjdk-armhf/bin --with-jdk-headers=/usr/lib/jvm/java-7-openjdk-armhf/include
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The configure succeeds without any errors, but the build breaks in ompi/mpi/java/c since the compiler doesn't include the jdk-headers. I fixed the corresponding Makefile to include it and it works.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The second error I get is in ompi/tools/wrappers/Makefile where it sets: 
</span><br>
<span class="quotelev2">&gt;&gt; am__append_1 = mpijavac.1
</span><br>
<span class="quotelev2">&gt;&gt; am__append_2 = mpijavac.1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't this be mpijavac.pl instead?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I changed it to .pl and it seems to build with any more errors, &quot;mpirun java&quot; works fine for some simple Java tests.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After this I tried some other tests using the MPI.OBJECT datatype, just to discover that it wasn't supported. I saw that it was included in mpiJava 1.2 and the current mpiJava in OMPI is 1.1(?). I guess the java bindings aren't that prioritized?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any advice for me to do, should I try to update the bindings or do you have any other recommendations how to get it running?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Christoffer Hamberg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Previous message:</strong> <a href="23142.php">Oscar Vega-Gisbert: "Re: [OMPI users] Several questions about new Java bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
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
