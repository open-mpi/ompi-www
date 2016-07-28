<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 10:45:51 2005" -->
<!-- isoreceived="20050826154551" -->
<!-- sent="Fri, 26 Aug 2005 17:45:39 +0200" -->
<!-- isosent="20050826154539" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re:  configure hangs in libtool.." -->
<!-- id="200508261745.45307.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20050826152744.GB15310_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-26 10:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0248.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>In reply to:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0248.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 26 August 2005 17.27, Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; Hi Peter,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Peter Kjellstr&#246;m wrote on Fri, Aug 26, 2005 at 05:21:27PM CEST:
</span><br>
<span class="quotelev2">&gt; &gt; I just checked out 7046 and my configure hangs at:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure: creating ./config.status
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating config.h
</span><br>
<span class="quotelev2">&gt; &gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev2">&gt; &gt; configure: /bin/sh '../../../opal/libltdl/configure' succeeded for
</span><br>
<span class="quotelev2">&gt; &gt; opal/libltdl checking for libtool-supplied linker flags...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ps -ef f gives me:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...configure
</span><br>
<span class="quotelev2">&gt; &gt; \_ /bin/sh /home/cap/openmpi/ompi-trunk/vbuild/opal/libltdl/libtool
</span><br>
<span class="quotelev2">&gt; &gt; --mode=compile icc -O3 -DNDEBUG foo.c -c -o foo.o \_ sleep 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; is it just currently broken (and if so, how do I check out an older
</span><br>
<span class="quotelev2">&gt; &gt; revision) or did I fumble the spell?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Weird.  Libtool thought icc does not understand `-c -o'?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you search and post the respective output from config.log?
</span><br>
<p>configure:130480: checking for libtool-supplied linker flags
<br>
configure:130509: /home/cap/openmpi/ompi-trunk/opal/libltdl/libtool 
<br>
--mode=compile icc -O3 -DNDEBUG  foo.c -c -o foo.o
<br>
Waiting for -c.o.lock to be removed
<br>
Waiting for -c.o.lock to be removed
<br>
Waiting for -c.o.lock to be removed
<br>
...and so on for inf
<br>
<p>/Peter
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0247/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0248.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>In reply to:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0248.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
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
