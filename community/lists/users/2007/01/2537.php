<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 13:16:53 2007" -->
<!-- isoreceived="20070124181653" -->
<!-- sent="Wed, 24 Jan 2007 10:16:39 -0800" -->
<!-- isosent="20070124181639" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="[OMPI users] coredump in guess_strlen()" -->
<!-- id="090601c73fe3$cb39d700$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="45B79F46.5090005_at_Sun.COM" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-24 13:16:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2538.php">Audet, Martin: "[OMPI users] mpicc adds an inexitant directory in the include path."</a>
<li><strong>Previous message:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>Maybe reply:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you ever do an opal_output() with a &quot;%p&quot; in the format string, 
<br>
guess_strlen() can segfault because it neglects to consume the corresponding 
<br>
argument, causing subsequent &quot;%s&quot; in the same format string to blow up in 
<br>
strlen() on a bad address.  Any objections to the following patch to add %p 
<br>
support?  If I were to check this in, is there some automated build process 
<br>
that will inform me I broke the build on, say, 43-bit Zurix machines ?
<br>
<p>If the llarg = (uintptr_t) business is scary (it is to me a little), much 
<br>
more conservative would be:  len += 2*sizeof(void *)+2;
<br>
-reese
<br>
<p>Index: opal/util/printf.c
<br>
===================================================================
<br>
--- opal/util/printf.c  (revision 13271)
<br>
+++ opal/util/printf.c  (working copy)
<br>
@@ -45,6 +45,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int iarg;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long larg;
<br>
+    long long llarg;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Start off with a fudge factor of 128 to handle the % escapes that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we aren't calculating here */
<br>
@@ -90,6 +91,17 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while (0 != iarg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<p>+            case 'p':
<br>
+                sarg = va_arg(ap, char *);
<br>
+                llarg = (uintptr_t) sarg;
<br>
+                len +=2;        /* allow for &quot;0x&quot; */
<br>
+                /* Now get the log16 */
<br>
+                do {
<br>
+                    ++len;
<br>
+                    llarg /= 16;
<br>
+                } while (0 != llarg);
<br>
+                break;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'f':
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;farg = (float)va_arg(ap, int);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Alloc for minus sign */
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2538.php">Audet, Martin: "[OMPI users] mpicc adds an inexitant directory in the include path."</a>
<li><strong>Previous message:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>Maybe reply:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
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
