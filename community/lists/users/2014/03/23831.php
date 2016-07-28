<?
$subject_val = "Re: [OMPI users] SIGSEV when running OMPI Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 00:05:02 2014" -->
<!-- isoreceived="20140313040502" -->
<!-- sent="Wed, 12 Mar 2014 21:04:18 -0700" -->
<!-- isosent="20140313040418" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEV when running OMPI Java binding" -->
<!-- id="6973FA08-5F3B-43F9-9B43-EC42585F85A7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKXdtcGfDOgHA-oEHJ1LWsrNU87kPnBfS4dJWGMX99LA3Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-13 00:04:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23832.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23830.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>In reply to:</strong> <a href="23829.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23846.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We haven't figured it out yet - it seems somewhat erratic as your observations don't match anything we are seeing on our machines. We know the coll/ml component is causing trouble for Java applications (but nothing else, oddly enough), but that doesn't match your experience.
<br>
<p><p>On Mar 12, 2014, at 9:01 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just checking if there's some solution for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 11, 2014 at 10:54 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I forgot to mention that I tried the hello.c version instead of Java and it too failed in a similar manner, but 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. On a single node with --mca btl ^tcp it went up to 24 procs before failing
</span><br>
<span class="quotelev1">&gt; 2. On 8 nodes with --mca btl ^tcp it could go only up to 16 procs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 11, 2014 at 5:06 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I just tested with &quot;ml&quot; turned off as you suggested, but unfortunately it didn't solve the issue. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I found that by explicitly setting --mca btl ^tcp the code worked on upto 4 nodes with each running 8 procs. If I don't specify this it'll simply fail even on one node with 8 procs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 11, 2014 at 4:35 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Looks like we still have a bug in one of our components -- can you try:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mpirun --mca coll ^ml ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will deactivate the &quot;ml&quot; collective component.  See if that enables you to run (this particular component has nothing to do with Java).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2014, at 1:33 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Just tested that this happens even with the simple Hello.java program given in OMPI distribution.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've made a tarball containing details of the error adhering to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>. Please let me know if I have missed any info necessary.
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
<span class="quotelev2">&gt; &gt; On Mon, Mar 10, 2014 at 10:46 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Greetings, and thanks for trying out our Java bindings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you provide some more details?  E.g., is there a particular program you're running that incurs these problems?  Or is there even a particular MPI function that you're using that results in this segv (e.g., perhaps we have a specific bug somewhere)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you reduce the segv to a small example that we can reproduce (and therefore fix)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 10, 2014, at 12:05 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have 8 nodes each with 2 quad core sockets. Also, the nodes have IB connectivity. I am trying to run OMPI Java binding in OMPI trunk revision 30301 with 8 procs per node totaling 64 procs. This gives a SIGSEV error as below.
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
<span class="quotelev3">&gt; &gt; &gt; #  SIGSEGV (0xb) at pc=0x000000313867b75b, pid=12229, tid=47864973515072
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b118) (build 1.8.0-ea-b118)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b60 mixed mode linux-amd64 compressed oops)
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
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23831/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23832.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23830.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>In reply to:</strong> <a href="23829.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23846.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
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
