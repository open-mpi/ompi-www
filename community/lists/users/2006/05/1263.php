<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 23 14:34:38 2006" -->
<!-- isoreceived="20060523183438" -->
<!-- sent="Tue, 23 May 2006 11:34:37 -0700" -->
<!-- isosent="20060523183437" -->
<!-- name="Benjamin Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Python, Perl and Java bindings" -->
<!-- id="20060523113437.A23518_at_ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C3A69_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Benjamin Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-23 14:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1264.php">Bert Wesarg: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Previous message:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>In reply to:</strong> <a href="1258.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Python, Perl and Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1259.php">Brian Barrett: "Re: [OMPI users] Python, Perl and Java bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been using the oldish (2003) mpijava of late.
<br>
It holds up pretty well with modern mpis, but certain 
<br>
jvms persist in causing extra copies, using SEGV as
<br>
a means of process control, etc.
<br>
<p>If you don't need &quot;true&quot; sun java compatibility, you
<br>
can also use gcj (gcc suite) or titanium (berkeley)
<br>
in combination or instead of mpi.
<br>
<p>I would really like to get my hands on the CNI (gcj)
<br>
binding of mpiJava once reported, but haven't been able
<br>
to find the source anywhere.
<br>
<p>Ben
<br>
<p>On Tue, May 23, 2006 at 01:15:12PM -0400, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; There are various projects out there that provide bindings in different
</span><br>
<span class="quotelev1">&gt; languages -- most (if not all?) simply layer on top of the native C
</span><br>
<span class="quotelev1">&gt; bindings, so you should be able to run them with Open MPI (disclaimer: I
</span><br>
<span class="quotelev1">&gt; have not tried any of these).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that I have seen MPI bindings for Java (there's several packages
</span><br>
<span class="quotelev1">&gt; out there, but I don't know if any of them are recent).  Some googling
</span><br>
<span class="quotelev1">&gt; shows Perl and Python bindings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceforge.net/projects/pympi/">http://sourceforge.net/projects/pympi/</a> 
</span><br>
<span class="quotelev1">&gt; <a href="http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm">http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Luigi Paioro
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, May 23, 2006 1:05 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] Python, Perl and Java bindings
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A quick question.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is anybody developing the OpenMPI bindings for Perl, Python and Java?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Luigi
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1264.php">Bert Wesarg: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Previous message:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>In reply to:</strong> <a href="1258.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Python, Perl and Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1259.php">Brian Barrett: "Re: [OMPI users] Python, Perl and Java bindings"</a>
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
