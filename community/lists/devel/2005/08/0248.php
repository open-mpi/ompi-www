<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 11:04:21 2005" -->
<!-- isoreceived="20050826160421" -->
<!-- sent="Fri, 26 Aug 2005 18:04:19 +0200" -->
<!-- isosent="20050826160419" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  configure hangs in libtool.." -->
<!-- id="20050826160419.GC15310_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-26 11:04:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0249.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0247.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>In reply to:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0249.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0249.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0251.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a bit more info:
<br>
<p>* Ralf Wildenhues wrote on Fri, Aug 26, 2005 at 05:27:44PM CEST:
<br>
<span class="quotelev1">&gt; * Peter Kjellstr&#246;m wrote on Fri, Aug 26, 2005 at 05:21:27PM CEST:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I just checked out 7046 and my configure hangs at:
</span><br>
<span class="quotelev2">&gt; &gt; checking for libtool-supplied linker flags...   
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ps -ef f gives me:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...configure
</span><br>
<span class="quotelev2">&gt; &gt; \_ /bin/sh /home/cap/openmpi/ompi-trunk/vbuild/opal/libltdl/libtool --mode=compile icc -O3 -DNDEBUG foo.c -c -o foo.o
</span><br>
<span class="quotelev2">&gt; &gt;  \_ sleep 2
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
<p>Just go to $top_builddir and execute these:
<br>
$ find . -name config.log | xargs sed -n '/ supports -c -o /{N;N;N;N;N;N;N;N;p;}'
<br>
$ ./libtool --version
<br>
<p>Libtool version previous to 1.5.16 had a bug in the macro to detect
<br>
this; it was often wrong before.  Now it should be pretty bogus.
<br>
Libtool still has a bug that might lead to the hang you describe
<br>
when both the macro detects that the compiler (seemingly or not)
<br>
does not understand &quot;-c -o&quot; and the source tree and the build tree
<br>
live on different mount points, so that a hard link fails.
<br>
<p>It's on our TODO list, but as we thought it to be a very rare bug,
<br>
it had rather low priority so far.
<br>
<p>If you have use Libtool &gt;= 1.5.16 and still experience this issue,
<br>
one workaround is to have the build tree below the same mount point.
<br>
But I'd like to see the failure of the macro: icc understands &quot;-c -o&quot;,
<br>
and we should be able to detect that.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0249.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0247.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>In reply to:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0249.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0249.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0251.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
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
