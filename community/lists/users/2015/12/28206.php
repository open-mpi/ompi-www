<?
$subject_val = "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 27 04:16:27 2015" -->
<!-- isoreceived="20151227091627" -->
<!-- sent="Sun, 27 Dec 2015 09:16:24 +0000" -->
<!-- isosent="20151227091624" -->
<!-- name="Platzer, Peter" -->
<!-- email="pplatzer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&amp;gt; config fails when checking for ISO C99 ability" -->
<!-- id="76E3EB6CA6496653.62564A69-D492-4CC6-8039-67A7CA0C6A04_at_mail.outlook.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="567C89C4.9010009_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability<br>
<strong>From:</strong> Platzer, Peter (<em>pplatzer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-27 04:16:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28207.php">anil maurya: "[OMPI users] OpenMPI Profiling"</a>
<li><strong>Previous message:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>In reply to:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles, thank you for your feedback. Based on that I scrubbed my system from all gcc, g++, mac ports, etc. then upgraded to Xcode 7 from 6, installed brew, ran brew doctor until it was all happy, deleted all broken symlinks, and started from scratch. It was now using the apple installed gcc from Xcode, which seems to be v6. And e voila, everything worked. My suspicion now is a bad cross over installation from Xcode 6 's gcc and my hand install gcc. I also updated the stackoverflow post.
<br>
<p>Thanks again for pointing me in the right direction, it took a while to clean the system, but now I'm happily running OpenMPI (and mpi4py) on my Mac!
<br>
<p>Cheers,
<br>
<p>Peter
<br>
--------------------
<br>
Senior Career Coach, Harvard Business School
<br>
(Sent from mobile device, please accept my apologies for typos)
<br>
<p><p><p><p>On Thu, Dec 24, 2015 at 4:12 PM -0800, &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]&lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
<br>
<p>Peter,
<br>
<p>FWIW, i can compile your test program under OS X Yosemite and with gcc 5.3 from brew
<br>
<p>can you also post your configure output and your config.log ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/25/2015 6:35 AM, Platzer, Peter wrote:
<br>
<p>I&#146;ve posted the details here on StackOverflow as well, including how to reproduce. <a href="http://stackoverflow.com/questions/34457801/error-with-gcc-5-for-varargs-function-suffix-or-operands-invalid-for-movq">http://stackoverflow.com/questions/34457801/error-with-gcc-5-for-varargs-function-suffix-or-operands-invalid-for-movq</a>
<br>
<p>Environment: Mac OS El Capitan
<br>
OpenMPI 1.10
<br>
GCC 5.3
<br>
<p>configure fails when checking for ISO C99 compatibility. I traced it down to gcc 5 not compiling variable argument functions.
<br>
<p>This problem does not exist when using gcc 4.9
<br>
<p><p>Cheers,
<br>
<p>Peter
<br>
___________________
<br>
Peter Platzer (HBS)
<br>
pplatzer_at_[hidden]&lt;mailto:pplatzer_at_[hidden]&gt;
<br>
Skype: Peter53129
<br>
<p><p><p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28204.php">http://www.open-mpi.org/community/lists/users/2015/12/28204.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28206/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28207.php">anil maurya: "[OMPI users] OpenMPI Profiling"</a>
<li><strong>Previous message:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>In reply to:</strong> <a href="28205.php">Gilles Gouaillardet: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
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
