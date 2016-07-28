<?
$subject_val = "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 24 19:12:00 2015" -->
<!-- isoreceived="20151225001200" -->
<!-- sent="Fri, 25 Dec 2015 09:11:48 +0900" -->
<!-- isosent="20151225001148" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&amp;gt; config fails when checking for ISO C99 ability" -->
<!-- id="567C89C4.9010009_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BEB99B20-D15B-4AA3-A988-8522CCC2D55C_at_hbs.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-24 19:11:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28206.php">Platzer, Peter: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Previous message:</strong> <a href="28204.php">Platzer, Peter: "[OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>In reply to:</strong> <a href="28204.php">Platzer, Peter: "[OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28206.php">Platzer, Peter: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Reply:</strong> <a href="28206.php">Platzer, Peter: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Peter,
<br>
<p>FWIW, i can compile your test program under OS X Yosemite and with gcc 
<br>
5.3 from brew
<br>
<p>can you also post your configure output and your config.log ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/25/2015 6:35 AM, Platzer, Peter wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve posted the details here on StackOverflow as well, including how 
</span><br>
<span class="quotelev1">&gt; to reproduce. 
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/34457801/error-with-gcc-5-for-varargs-function-suffix-or-operands-invalid-for-movq">http://stackoverflow.com/questions/34457801/error-with-gcc-5-for-varargs-function-suffix-or-operands-invalid-for-movq</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Environment: Mac OS El Capitan
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.10
</span><br>
<span class="quotelev1">&gt; GCC 5.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure fails when checking for ISO C99 compatibility. I traced it 
</span><br>
<span class="quotelev1">&gt; down to gcc 5 not compiling variable argument functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem does not exist when using gcc 4.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt; ___________________
</span><br>
<span class="quotelev1">&gt; Peter Platzer (HBS)
</span><br>
<span class="quotelev1">&gt; pplatzer_at_[hidden] &lt;mailto:pplatzer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Skype: Peter53129
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28204.php">http://www.open-mpi.org/community/lists/users/2015/12/28204.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28205/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28206.php">Platzer, Peter: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Previous message:</strong> <a href="28204.php">Platzer, Peter: "[OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>In reply to:</strong> <a href="28204.php">Platzer, Peter: "[OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28206.php">Platzer, Peter: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Reply:</strong> <a href="28206.php">Platzer, Peter: "Re: [OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
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
