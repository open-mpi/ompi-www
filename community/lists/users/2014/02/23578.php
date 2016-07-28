<?
$subject_val = "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  9 15:52:18 2014" -->
<!-- isoreceived="20140209205218" -->
<!-- sent="Sun, 9 Feb 2014 21:52:02 +0100 (CET)" -->
<!-- isosent="20140209205202" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4" -->
<!-- id="201402092052.s19Kq1cW004032_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] warnings and anachronisms in openmpi-1.7.4" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-09 15:52:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23579.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23577.php">Siegmar Gross: "[OMPI users] one more problem with process bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="23567.php">Siegmar Gross: "[OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23579.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Reply:</strong> <a href="23579.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Oscar,
<br>
<p><span class="quotelev1">&gt; The warnings of type &quot;cast to pointer from integer of different size&quot;  
</span><br>
<span class="quotelev1">&gt; are provoked when a jlong (64 bit handle in Java) is copied to a C  
</span><br>
<span class="quotelev1">&gt; pointer (32 bit) or vice versa.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These warnings could be avoided with methods like these:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      void* ompi_java_cHandle(jlong handle)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;          union { jlong j; void* c; } u;
</span><br>
<span class="quotelev1">&gt;          u.j = handle;
</span><br>
<span class="quotelev1">&gt;          return u.c;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      jlong ompi_java_jHandle(void *handle)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;          union { jlong j; void* c; } u;
</span><br>
<span class="quotelev1">&gt;          u.c = handle;
</span><br>
<span class="quotelev1">&gt;          return u.j;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We should change all the code in this manner:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      JNIEXPORT jlong JNICALL Java_mpi_Win_free(
</span><br>
<span class="quotelev1">&gt;              JNIEnv *env, jobject jthis, jlong handle)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;          MPI_Win win = ompi_java_cHandle(handle);
</span><br>
<span class="quotelev1">&gt;          int rc = MPI_Win_free(&amp;win);
</span><br>
<span class="quotelev1">&gt;          ompi_java_exceptionCheck(env, rc);
</span><br>
<span class="quotelev1">&gt;          return ompi_java_jHandle(win);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if it is worth it.
</span><br>
<p>I don't know either, but you will possibly get an error if you store
<br>
a 64-bit value into a 32-bit pointer. If the Java interface should be
<br>
available on 32-bit systems as well, it would be necessary (at least
<br>
in my opinion).
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Oscar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Quoting Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; yesterday I compiled 32- and 64-bit versions of openmpi-1.7.4 for
</span><br>
<span class="quotelev2">&gt; &gt; my platforms (Solaris 10 sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev2">&gt; &gt; Linux 12.1 x86_64) with Sun C 5.12 and gcc-4.8.0. I could build
</span><br>
<span class="quotelev2">&gt; &gt; a 64-bit version for Linux with gcc without warnings. Everything
</span><br>
<span class="quotelev2">&gt; &gt; else showed warnings. I received many warnings for my 32-bit
</span><br>
<span class="quotelev2">&gt; &gt; versions (mainly for the Java interface with gcc). I have combined
</span><br>
<span class="quotelev2">&gt; &gt; all warnings for my platforms so that it is easier to fix them, if
</span><br>
<span class="quotelev2">&gt; &gt; somebody wants to fix them. The attached files contain the warnings
</span><br>
<span class="quotelev2">&gt; &gt; from each compiler. I can also provide specific files like
</span><br>
<span class="quotelev2">&gt; &gt; Solaris.x86_64.32_cc.uniq or even my log files (e.g.,
</span><br>
<span class="quotelev2">&gt; &gt; log.make.SunOS.x86_64.32_cc).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This message was sent using IMP, the Internet Messaging Program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23579.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23577.php">Siegmar Gross: "[OMPI users] one more problem with process bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="23567.php">Siegmar Gross: "[OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23579.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Reply:</strong> <a href="23579.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
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
