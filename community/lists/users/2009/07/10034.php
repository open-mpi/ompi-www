<?
$subject_val = "Re: [OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 04:34:20 2009" -->
<!-- isoreceived="20090722083420" -->
<!-- sent="Wed, 22 Jul 2009 12:34:22 +0400" -->
<!-- isosent="20090722083422" -->
<!-- name="Alexey Sokolov" -->
<!-- email="gabbear_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Warning: declaration &amp;#226;&amp;#128;&amp;#152;struct MPI::Grequest_intercept_t&amp;#226;&amp;#128;&amp;#153; does not declare anything" -->
<!-- id="1248251662.9914.2.camel_at_localhost.localdomain" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9b0da5ce0907220055rd1ad220p1b0f607bae1311c8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything<br>
<strong>From:</strong> Alexey Sokolov (<em>gabbear_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 04:34:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10035.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Previous message:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>In reply to:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10057.php">Jeff Squyres: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody
<br>
<p>As I'm new at linux it was much simpler for me to use default Fedora yum
<br>
installer and the latest version accessible with it is still 1.2.4.
<br>
<p>I've installed the latest 1.3.3 version as you advised and that warning
<br>
disappeared. Still don't know how and why but the problem now is solved.
<br>
<p>Sincerely yours, Alexey.
<br>
<p>On Wed, 2009-07-22 at 09:55 +0200, jody wrote: 
<br>
<span class="quotelev1">&gt; Hi Alexey
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know how this error messgae comes about,
</span><br>
<span class="quotelev1">&gt; but have you ever considered using a newer version of Open MPI?
</span><br>
<span class="quotelev1">&gt; 1.2.4 is quite ancient, the current version is 1.3.3....
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 22, 2009 at 9:17 AM, Alexey Sokolov&lt;gabbear_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I faced a warning &quot;declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does
</span><br>
<span class="quotelev2">&gt; &gt; not declare anything&quot; using openmpi 1.2.4 (compiling under Fedora 10
</span><br>
<span class="quotelev2">&gt; &gt; with mpic++ wrapper over gcc 4.3.2) and don't know how to solve it.
</span><br>
<span class="quotelev2">&gt; &gt; Browsing the Internet i've found an advise just to ignore it, but i
</span><br>
<span class="quotelev2">&gt; &gt; don't think it is impossible to solve it in another way.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a correct working single thread program. Then i just include
</span><br>
<span class="quotelev2">&gt; &gt; mpi.h, compile and get this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        In file included
</span><br>
<span class="quotelev2">&gt; &gt;        from /usr/include/openmpi/1.2.4-gcc/openmpi/ompi/mpi/cxx/mpicxx.h:246,
</span><br>
<span class="quotelev2">&gt; &gt;                         from /usr/include/openmpi/1.2.4-gcc/mpi.h:1783,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        from /home/user/NetBeansProjects/Correlation_orig/Correlation/Correlation.cpp:2:
</span><br>
<span class="quotelev2">&gt; &gt;        /usr/include/openmpi/1.2.4-gcc/openmpi/ompi/mpi/cxx/request_inln.h:347: warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The program is still works correctly but this warning makes me nervous.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sincerely yours, Alexey.
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
<li><strong>Next message:</strong> <a href="10035.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Previous message:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<li><strong>In reply to:</strong> <a href="10033.php">jody: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10057.php">Jeff Squyres: "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything"</a>
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
