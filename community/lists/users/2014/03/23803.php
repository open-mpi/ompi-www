<?
$subject_val = "Re: [OMPI users] SIGSEV when running OMPI Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 17:06:59 2014" -->
<!-- isoreceived="20140311210659" -->
<!-- sent="Tue, 11 Mar 2014 17:06:58 -0400" -->
<!-- isosent="20140311210658" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEV when running OMPI Java binding" -->
<!-- id="CA+ssbKVGW3OViGM+Kn7uFctOQxJ83MQwQM6WPJm=Tt7NrDRGuQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF5F5932-3E2D-4FD2-A65F-B0BEB3EB64DA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGSEV when running OMPI Java binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 17:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23804.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Previous message:</strong> <a href="23802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>In reply to:</strong> <a href="23802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23808.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23808.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23846.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tested with &quot;ml&quot; turned off as you suggested, but unfortunately it
<br>
didn't solve the issue.
<br>
<p>However, I found that by explicitly setting --mca btl ^tcp the code worked
<br>
on upto 4 nodes with each running 8 procs. If I don't specify this it'll
<br>
simply fail even on one node with 8 procs.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p>On Tue, Mar 11, 2014 at 4:35 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Looks like we still have a bug in one of our components -- can you try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun --mca coll ^ml ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will deactivate the &quot;ml&quot; collective component.  See if that enables
</span><br>
<span class="quotelev1">&gt; you to run (this particular component has nothing to do with Java).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2014, at 1:33 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just tested that this happens even with the simple Hello.java program
</span><br>
<span class="quotelev1">&gt; given in OMPI distribution.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've made a tarball containing details of the error adhering to
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>. Please let me know if I have
</span><br>
<span class="quotelev1">&gt; missed any info necessary.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; Saliya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Mar 10, 2014 at 10:46 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Greetings, and thanks for trying out our Java bindings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you provide some more details?  E.g., is there a particular program
</span><br>
<span class="quotelev1">&gt; you're running that incurs these problems?  Or is there even a particular
</span><br>
<span class="quotelev1">&gt; MPI function that you're using that results in this segv (e.g., perhaps we
</span><br>
<span class="quotelev1">&gt; have a specific bug somewhere)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you reduce the segv to a small example that we can reproduce (and
</span><br>
<span class="quotelev1">&gt; therefore fix)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 10, 2014, at 12:05 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have 8 nodes each with 2 quad core sockets. Also, the nodes have IB
</span><br>
<span class="quotelev1">&gt; connectivity. I am trying to run OMPI Java binding in OMPI trunk revision
</span><br>
<span class="quotelev1">&gt; 30301 with 8 procs per node totaling 64 procs. This gives a SIGSEV error as
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I wonder if you have any suggestion to resolve this?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Saliya
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #  SIGSEGV (0xb) at pc=0x000000313867b75b, pid=12229,
</span><br>
<span class="quotelev1">&gt; tid=47864973515072
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b118) (build
</span><br>
<span class="quotelev1">&gt; 1.8.0-ea-b118)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b60 mixed mode
</span><br>
<span class="quotelev1">&gt; linux-amd64 compressed oops)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # Problematic frame:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # C  [libc.so.6+0x7b75b]  memcpy+0x15b
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt; &gt; &lt;hellobug.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23804.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Previous message:</strong> <a href="23802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>In reply to:</strong> <a href="23802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23808.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23808.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23846.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
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
