<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 10:27:46 2005" -->
<!-- isoreceived="20050826152746" -->
<!-- sent="Fri, 26 Aug 2005 17:27:44 +0200" -->
<!-- isosent="20050826152744" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  configure hangs in libtool.." -->
<!-- id="20050826152744.GB15310_at_iam.uni-bonn.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200508261721.32457.cap_at_nsc.liu.se" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-26 10:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0247.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0245.php">Peter Kjellstr&#246;m: "configure hangs in libtool.."</a>
<li><strong>In reply to:</strong> <a href="0245.php">Peter Kjellstr&#246;m: "configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0247.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0247.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0248.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter,
<br>
<p>* Peter Kjellstr&#246;m wrote on Fri, Aug 26, 2005 at 05:21:27PM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just checked out 7046 and my configure hangs at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating config.h
</span><br>
<span class="quotelev1">&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev1">&gt; configure: /bin/sh '../../../opal/libltdl/configure' succeeded for opal/libltdl
</span><br>
<span class="quotelev1">&gt; checking for libtool-supplied linker flags...   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps -ef f gives me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...configure
</span><br>
<span class="quotelev1">&gt; \_ /bin/sh /home/cap/openmpi/ompi-trunk/vbuild/opal/libltdl/libtool --mode=compile icc -O3 -DNDEBUG foo.c -c -o foo.o
</span><br>
<span class="quotelev1">&gt;  \_ sleep 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is it just currently broken (and if so, how do I check out an older
</span><br>
<span class="quotelev1">&gt; revision) or did I fumble the spell?
</span><br>
<p>Weird.  Libtool thought icc does not understand `-c -o'?
<br>
<p>Can you search and post the respective output from config.log?
<br>
<p>Thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0247.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0245.php">Peter Kjellstr&#246;m: "configure hangs in libtool.."</a>
<li><strong>In reply to:</strong> <a href="0245.php">Peter Kjellstr&#246;m: "configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0247.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0247.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0248.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
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
