<?
$subject_val = "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 03:55:11 2009" -->
<!-- isoreceived="20090722075511" -->
<!-- sent="Wed, 22 Jul 2009 09:55:06 +0200" -->
<!-- isosent="20090722075506" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Warning: declaration &amp;#145;struct MPI::Grequest_intercept_t&amp;#146; does not declare anything" -->
<!-- id="9b0da5ce0907220055rd1ad220p1b0f607bae1311c8_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1248247074.3707.28.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 03:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10034.php">Alexey Sokolov: "Re: [OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<li><strong>Previous message:</strong> <a href="10032.php">Alexey Sokolov: "[OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<li><strong>In reply to:</strong> <a href="10032.php">Alexey Sokolov: "[OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10034.php">Alexey Sokolov: "Re: [OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<li><strong>Reply:</strong> <a href="10034.php">Alexey Sokolov: "Re: [OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alexey
<br>
<p>I don't know how this error messgae comes about,
<br>
but have you ever considered using a newer version of Open MPI?
<br>
1.2.4 is quite ancient, the current version is 1.3.3....
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
<br>
Jody
<br>
<p><p><p>On Wed, Jul 22, 2009 at 9:17 AM, Alexey Sokolov&lt;gabbear_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I faced a warning &quot;declaration &#145;struct MPI::Grequest_intercept_t&#146; does
</span><br>
<span class="quotelev1">&gt; not declare anything&quot; using openmpi 1.2.4 (compiling under Fedora 10
</span><br>
<span class="quotelev1">&gt; with mpic++ wrapper over gcc 4.3.2) and don't know how to solve it.
</span><br>
<span class="quotelev1">&gt; Browsing the Internet i've found an advise just to ignore it, but i
</span><br>
<span class="quotelev1">&gt; don't think it is impossible to solve it in another way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a correct working single thread program. Then i just include
</span><br>
<span class="quotelev1">&gt; mpi.h, compile and get this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;In file included
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;from /usr/include/openmpi/1.2.4-gcc/openmpi/ompi/mpi/cxx/mpicxx.h:246,
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; from /usr/include/openmpi/1.2.4-gcc/mpi.h:1783,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;from /home/user/NetBeansProjects/Correlation_orig/Correlation/Correlation.cpp:2:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;/usr/include/openmpi/1.2.4-gcc/openmpi/ompi/mpi/cxx/request_inln.h:347: warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is still works correctly but this warning makes me nervous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely yours, Alexey.
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
<li><strong>Next message:</strong> <a href="10034.php">Alexey Sokolov: "Re: [OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<li><strong>Previous message:</strong> <a href="10032.php">Alexey Sokolov: "[OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<li><strong>In reply to:</strong> <a href="10032.php">Alexey Sokolov: "[OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10034.php">Alexey Sokolov: "Re: [OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<li><strong>Reply:</strong> <a href="10034.php">Alexey Sokolov: "Re: [OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
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
