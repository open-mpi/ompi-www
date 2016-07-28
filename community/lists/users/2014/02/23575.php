<?
$subject_val = "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  9 12:45:56 2014" -->
<!-- isoreceived="20140209174556" -->
<!-- sent="Sun, 09 Feb 2014 18:45:47 +0100" -->
<!-- isosent="20140209174547" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4" -->
<!-- id="20140209184547.25231budms7mewnc_at_webmail.dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201402071703.s17H3UMQ013472_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4<br>
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-09 12:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23576.php">Siegmar Gross: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23574.php">Ralph Castain: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23567.php">Siegmar Gross: "[OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23578.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The warnings of type &quot;cast to pointer from integer of different size&quot;  
<br>
are provoked when a jlong (64 bit handle in Java) is copied to a C  
<br>
pointer (32 bit) or vice versa.
<br>
<p>These warnings could be avoided with methods like these:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* ompi_java_cHandle(jlong handle)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;union { jlong j; void* c; } u;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;u.j = handle;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return u.c;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jlong ompi_java_jHandle(void *handle)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;union { jlong j; void* c; } u;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;u.c = handle;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return u.j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>We should change all the code in this manner:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JNIEXPORT jlong JNICALL Java_mpi_Win_free(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JNIEnv *env, jobject jthis, jlong handle)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win win = ompi_java_cHandle(handle);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc = MPI_Win_free(&amp;win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_java_exceptionCheck(env, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ompi_java_jHandle(win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I don't know if it is worth it.
<br>
<p>Regards,
<br>
Oscar
<br>
<p>Quoting Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yesterday I compiled 32- and 64-bit versions of openmpi-1.7.4 for
</span><br>
<span class="quotelev1">&gt; my platforms (Solaris 10 sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev1">&gt; Linux 12.1 x86_64) with Sun C 5.12 and gcc-4.8.0. I could build
</span><br>
<span class="quotelev1">&gt; a 64-bit version for Linux with gcc without warnings. Everything
</span><br>
<span class="quotelev1">&gt; else showed warnings. I received many warnings for my 32-bit
</span><br>
<span class="quotelev1">&gt; versions (mainly for the Java interface with gcc). I have combined
</span><br>
<span class="quotelev1">&gt; all warnings for my platforms so that it is easier to fix them, if
</span><br>
<span class="quotelev1">&gt; somebody wants to fix them. The attached files contain the warnings
</span><br>
<span class="quotelev1">&gt; from each compiler. I can also provide specific files like
</span><br>
<span class="quotelev1">&gt; Solaris.x86_64.32_cc.uniq or even my log files (e.g.,
</span><br>
<span class="quotelev1">&gt; log.make.SunOS.x86_64.32_cc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>----------------------------------------------------------------
<br>
This message was sent using IMP, the Internet Messaging Program.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23576.php">Siegmar Gross: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23574.php">Ralph Castain: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23567.php">Siegmar Gross: "[OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23578.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
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
