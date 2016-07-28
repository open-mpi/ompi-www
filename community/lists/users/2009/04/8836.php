<?
$subject_val = "Re: [OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 06:17:00 2009" -->
<!-- isoreceived="20090408101700" -->
<!-- sent="Wed, 8 Apr 2009 12:16:55 +0200" -->
<!-- isosent="20090408101655" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh MPi and program tests" -->
<!-- id="b87c422a0904080316l2271cd3ekb3a77fa036051e91_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20090408082808.GA9456_at_discovery" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh MPi and program tests<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 06:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8837.php">Jeff Squyres: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Previous message:</strong> <a href="8835.php">Francesco Pietra: "[OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8834.php">Marco: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With amd64 etch, intel compilers 10, and openmpi 1.2.6 I had no
<br>
problem in compiling amber10.
<br>
<p>Having changed to amd64 lenny, amber10 did no more pass installation
<br>
tets. I was unable to recompile amber10.
<br>
<p>I upgraded openmpi 10 1.3.1, which passed all its tests, but again was
<br>
unable to recompile amber10.
<br>
<p>Now I have purged everything about intel (compilers and mkl) and I am
<br>
installing version 11. I'll recompile openmpi 1.3.1 on these. If
<br>
amber10 still refuses to compile, i'll abandon intel for gnu compilers
<br>
&nbsp;and math libraries.
<br>
<p>I'll come to your questions. There was no misprint in what I wrote but
<br>
at the moment i am unable to do better. All issues about ssh were
<br>
resolved. Actually, there was no issue. I created the issues and
<br>
apologize for that.
<br>
<p>thanks
<br>
francesco
<br>
<p>On Wed, Apr 8, 2009 at 10:28 AM, Marco &lt;redshift_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; * Francesco Pietra &lt;chiendarret_at_[hidden]&gt; [2009 04 06, 16:51]:
</span><br>
<span class="quotelev2">&gt;&gt; cd cytosine &amp;&amp; ./Run.cytosine
</span><br>
<span class="quotelev2">&gt;&gt; The authenticity of host deb64 (which is the hostname) (127.0.1.1)
</span><br>
<span class="quotelev2">&gt;&gt; can't be established.
</span><br>
<span class="quotelev2">&gt;&gt; RSA fingerprint .....
</span><br>
<span class="quotelev2">&gt;&gt; connecting ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;This is a warning from ssh, not from OpenMPI; probably it is the first
</span><br>
<span class="quotelev1">&gt; time the system tries to connect to itself, and is asking you a
</span><br>
<span class="quotelev1">&gt; confirmation to continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;Please note that 127.0.1.1 seems quite strange to me, since the
</span><br>
<span class="quotelev1">&gt; 'standard' ip for localhost is '127.0.0.1'. You may want to check your
</span><br>
<span class="quotelev1">&gt; /etc/hosts .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I stopped the ssh daemon, whereby tests were interrupted because deb64
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., itself) could no more be accessed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;I'm afraid it wasn't a great idea... the ssh daemon is required to
</span><br>
<span class="quotelev1">&gt; receive connections to localhost; and since mpi wants to do just that,
</span><br>
<span class="quotelev1">&gt; stopping sshd won't really fix the issue ;)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8837.php">Jeff Squyres: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Previous message:</strong> <a href="8835.php">Francesco Pietra: "[OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8834.php">Marco: "Re: [OMPI users] ssh MPi and program tests"</a>
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
