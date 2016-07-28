<?
$subject_val = "Re: [OMPI users] configure problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 06:53:12 2013" -->
<!-- isoreceived="20130405105312" -->
<!-- sent="Fri, 5 Apr 2013 12:52:59 +0200" -->
<!-- isosent="20130405105259" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure problem" -->
<!-- id="9A22A02E-3BA4-4926-A62B-B5E9C7C21F4D_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGzRjXa+sLD=3VDXgd58vHExdOQ_pNu=ZrTevM4JyNxpcJ4F+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure problem<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 06:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21684.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6"</a>
<li><strong>Previous message:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>In reply to:</strong> <a href="21680.php">Alan Sayre: "[OMPI users] configure problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AFAICS problem is in the middle of (it's often not directly at the end):
<br>
<p>Am 05.04.2013 um 03:21 schrieb Alan Sayre:
<br>
<p><span class="quotelev1">&gt; &lt;config.log.bz2&gt;
</span><br>
<p>configure:17615: g++ -o conftest -O3 -DNDEBUG -finline-functions   conftest.cpp  &gt;&amp;5
<br>
In file included from /usr/include/stdio.h:929:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from conftest.cpp:141:
<br>
/usr/include/bits/stdio.h: In function '__ssize_t getline(char**, size_t*, FILE*)':
<br>
/usr/include/bits/stdio.h:118:52: error: '__getdelim' was not declared in this scope
<br>
configure:17615: $? = 1
<br>
configure: program exited with status 1
<br>
<p>You compiled gcc 4.7.2 on your own with which version of the original gcc?
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21684.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6"</a>
<li><strong>Previous message:</strong> <a href="21682.php">Siegmar Gross: "[OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>In reply to:</strong> <a href="21680.php">Alan Sayre: "[OMPI users] configure problem"</a>
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
