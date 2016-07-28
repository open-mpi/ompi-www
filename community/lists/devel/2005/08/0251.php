<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 11:25:00 2005" -->
<!-- isoreceived="20050826162500" -->
<!-- sent="Fri, 26 Aug 2005 18:24:43 +0200" -->
<!-- isosent="20050826162443" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re:  configure hangs in libtool.." -->
<!-- id="200508261824.55564.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20050826160419.GC15310_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2005-08-26 11:24:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0252.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0250.php">Ralf Wildenhues: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0248.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0253.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0253.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 26 August 2005 18.04, Ralf Wildenhues wrote:
<br>
<span class="quotelev3">&gt; &gt; &gt;...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Weird.  Libtool thought icc does not understand `-c -o'?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you search and post the respective output from config.log?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just go to $top_builddir and execute these:
</span><br>
<span class="quotelev1">&gt; $ find . -name config.log | xargs sed -n '/ supports -c -o
</span><br>
<span class="quotelev1">&gt; /{N;N;N;N;N;N;N;N;p;}' $ ./libtool --version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Libtool version previous to 1.5.16 had a bug in the macro to detect
</span><br>
<span class="quotelev1">&gt; this; it was often wrong before.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<p>my libtool is indeed rather ancient compared to 1.5.16, I knew ompi needed a 
<br>
recent one but had assumed that an updated centos-4.1 (rhel4u1) would be 
<br>
enough... (I have 1.5.6)
<br>
<p>Either way, I have managed to build ompi before so I looked deeper and found 
<br>
out that the intel compilers had been updated under my feet (-027 to -029). 
<br>
Switching back made configure run just fine...
<br>
<p>/Peter
<br>
<p><pre>
-- 
------------------------------------------------------------
  Peter Kjellstr&#246;m               |
  National Supercomputer Centre  |
  Sweden                         | <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0251/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0252.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0250.php">Ralf Wildenhues: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0248.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0253.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0253.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
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
