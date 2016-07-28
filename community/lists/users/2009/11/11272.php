<?
$subject_val = "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 16:49:56 2009" -->
<!-- isoreceived="20091124214956" -->
<!-- sent="Tue, 24 Nov 2009 15:49:47 -0600 (CST)" -->
<!-- isosent="20091124214947" -->
<!-- name="chan_at_[hidden]" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)" -->
<!-- id="19492113.55731259099387661.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6617130.55591259099279757.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)<br>
<strong>From:</strong> <a href="mailto:chan_at_[hidden]?Subject=Re:%20[OMPI%20users]%20PGI%2010.0%20configure%20fails%20(OMPI%201.3.3)"><em>chan_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-11-24 16:49:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Previous message:</strong> <a href="11271.php">Scott Beardsley: "[OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11271.php">Scott Beardsley: "[OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Reply:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Scott Beardsley&quot; &lt;scott_at_[hidden]&gt; wrote:
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; #include&lt;stddef.h&gt;
</span><br>
<span class="quotelev1">&gt; int main ()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; struct foo {int a, b;}; size_t offset = offsetof(struct foo, b);
</span><br>
<span class="quotelev1">&gt; &#194;&#160; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ pgcc conftest.c
</span><br>
<span class="quotelev1">&gt; PGC-S-0037-Syntax error: Recovery attempted by deleting keyword
</span><br>
<span class="quotelev1">&gt; struct
</span><br>
<span class="quotelev1">&gt; (conftest.c: 4)
</span><br>
<span class="quotelev1">&gt; PGC-S-0039-Use of undeclared variable foo (conftest.c: 4)
</span><br>
<span class="quotelev1">&gt; PGC-S-0039-Use of undeclared variable b (conftest.c: 4)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 10.0-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pgcc v9 and gcc seem to have no problem with that code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>pgcc v9 has problem to compile the above test program:
<br>
<p>/pgi-9.0-4/linux86-64/9.0-4/bin/pgcc -c ts_offsetof.c
<br>
PGC-S-0037-Syntax error: Recovery attempted by deleting keyword struct (ts_offsetof.c: 4)
<br>
PGC-S-0039-Use of undeclared variable foo (ts_offsetof.c: 4)
<br>
PGC-S-0039-Use of undeclared variable b (ts_offsetof.c: 4)
<br>
PGC/x86-64 Linux 9.0-4: compilation completed with severe errors
<br>
<p>A.Chan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Previous message:</strong> <a href="11271.php">Scott Beardsley: "[OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11271.php">Scott Beardsley: "[OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Reply:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
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
