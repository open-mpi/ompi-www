<?
$subject_val = "Re: [OMPI users] Help: Program Terminated";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 18:48:32 2008" -->
<!-- isoreceived="20080530224832" -->
<!-- sent="Sat, 31 May 2008 06:48:25 +0800" -->
<!-- isosent="20080530224825" -->
<!-- name="Lee Amy" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Program Terminated" -->
<!-- id="289665360805301548j548a222cmec7142745b51dfd6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C7C38E01-FBD0-4E06-8B2F-C183E1BE23B4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: Program Terminated<br>
<strong>From:</strong> Lee Amy (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-30 18:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5778.php">Ralph H Castain: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<li><strong>Previous message:</strong> <a href="5776.php">Radovan Herchel: "Re: [OMPI users] eigenvalue problem"</a>
<li><strong>In reply to:</strong> <a href="5766.php">Jeff Squyres: "Re: [OMPI users] Help: Program Terminated"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2008/5/30 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I'd also like to re-emphasize something Andreas said earlier: SIGTERM
</span><br>
<span class="quotelev1">&gt; *usually* means that some external entity is killing your
</span><br>
<span class="quotelev1">&gt; application.  It *could* be coming from within the application itself,
</span><br>
<span class="quotelev1">&gt; but that's not too common.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to look into that to find out where the SIGTERM is
</span><br>
<span class="quotelev1">&gt; coming from.  The Microtar maintainers might have some better ideas.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 30, 2008, at 9:17 AM, Andreas Sch&#228;fer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 12:28 Fri 30 May     , Lee Amy wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2008/5/29 Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you very much. If I do a shorter job it seems run well. And
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dosen't repeatedly fail at the same time, but it will fail at this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; messages. Anyway, I'm not using a scheduling system. So any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; suggestions?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At least no easy ones, sorry. ;-) You could ask the Microtar guys if
</span><br>
<span class="quotelev2">&gt; &gt; they know anything about that problem. And of course you could use a
</span><br>
<span class="quotelev2">&gt; &gt; debugger to dig into Microtar and find the problem yourself. ^^ Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI has some doc how to attach gdb to a parallel job: (and how to use
</span><br>
<span class="quotelev2">&gt; &gt; valgrind etc.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Good luck!
</span><br>
<span class="quotelev2">&gt; &gt; -Andi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev2">&gt; &gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev2">&gt; &gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev2">&gt; &gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev2">&gt; &gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (\___/)
</span><br>
<span class="quotelev2">&gt; &gt; (+'.'+)
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev2">&gt; &gt; signature to help him gain world domination!
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
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
<span class="quotelev1">&gt; Cisco Systems
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
Thank you very much. I will try.
<br>
<p>Amy
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5777/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5778.php">Ralph H Castain: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<li><strong>Previous message:</strong> <a href="5776.php">Radovan Herchel: "Re: [OMPI users] eigenvalue problem"</a>
<li><strong>In reply to:</strong> <a href="5766.php">Jeff Squyres: "Re: [OMPI users] Help: Program Terminated"</a>
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
