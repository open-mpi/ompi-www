<?
$subject_val = "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 01:30:36 2014" -->
<!-- isoreceived="20140210063036" -->
<!-- sent="Mon, 10 Feb 2014 07:29:55 +0100 (CET)" -->
<!-- isosent="20140210062955" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4" -->
<!-- id="201402100630.s1A6Ttc2006333_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2014-02-10 01:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23581.php">Daniel Ibanez: "[OMPI users] valgrind invalid reads for large self-sends using thread_multiple"</a>
<li><strong>Previous message:</strong> <a href="23579.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="23567.php">Siegmar Gross: "[OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Oscar,
<br>
<p>I always favor no warnings, but it's not me to make this decision.
<br>
<p><p>Kind regards and thank you very much for your replies
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; Quoting Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Oscar,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The warnings of type &quot;cast to pointer from integer of different size&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are provoked when a jlong (64 bit handle in Java) is copied to a C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pointer (32 bit) or vice versa.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; These warnings could be avoided with methods like these:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      void* ompi_java_cHandle(jlong handle)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          union { jlong j; void* c; } u;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          u.j = handle;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          return u.c;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      jlong ompi_java_jHandle(void *handle)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          union { jlong j; void* c; } u;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          u.c = handle;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          return u.j;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We should change all the code in this manner:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      JNIEXPORT jlong JNICALL Java_mpi_Win_free(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              JNIEnv *env, jobject jthis, jlong handle)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          MPI_Win win = ompi_java_cHandle(handle);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          int rc = MPI_Win_free(&amp;win);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          ompi_java_exceptionCheck(env, rc);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          return ompi_java_jHandle(win);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't know if it is worth it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't know either, but you will possibly get an error if you store
</span><br>
<span class="quotelev2">&gt; &gt; a 64-bit value into a 32-bit pointer. If the Java interface should be
</span><br>
<span class="quotelev2">&gt; &gt; available on 32-bit systems as well, it would be necessary (at least
</span><br>
<span class="quotelev2">&gt; &gt; in my opinion).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no loss of information, because the 64-bit values (java long)  
</span><br>
<span class="quotelev1">&gt; come from 32-bit values (c pointers). It works ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question is if we want avoid these warnings.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Oscar
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Quoting Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; yesterday I compiled 32- and 64-bit versions of openmpi-1.7.4 for
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; my platforms (Solaris 10 sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Linux 12.1 x86_64) with Sun C 5.12 and gcc-4.8.0. I could build
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; a 64-bit version for Linux with gcc without warnings. Everything
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; else showed warnings. I received many warnings for my 32-bit
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; versions (mainly for the Java interface with gcc). I have combined
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; all warnings for my platforms so that it is easier to fix them, if
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; somebody wants to fix them. The attached files contain the warnings
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; from each compiler. I can also provide specific files like
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Solaris.x86_64.32_cc.uniq or even my log files (e.g.,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; log.make.SunOS.x86_64.32_cc).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Siegmar
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This message was sent using IMP, the Internet Messaging Program.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<li><strong>Next message:</strong> <a href="23581.php">Daniel Ibanez: "[OMPI users] valgrind invalid reads for large self-sends using thread_multiple"</a>
<li><strong>Previous message:</strong> <a href="23579.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="23567.php">Siegmar Gross: "[OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
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
