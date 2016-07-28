<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 10:21:37 2005" -->
<!-- isoreceived="20050826152137" -->
<!-- sent="Fri, 26 Aug 2005 17:21:27 +0200" -->
<!-- isosent="20050826152127" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="configure hangs in libtool.." -->
<!-- id="200508261721.32457.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
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
<strong>Date:</strong> 2005-08-26 10:21:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0244.php">Jeff Squyres: "SLURM support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello folk
<br>
<p>I just checked out 7046 and my configure hangs at:
<br>
<p>configure: creating ./config.status
<br>
config.status: creating Makefile
<br>
config.status: creating config.h
<br>
config.status: executing depfiles commands
<br>
configure: /bin/sh '../../../opal/libltdl/configure' succeeded for opal/libltdl
<br>
checking for libtool-supplied linker flags...   
<br>
<p>ps -ef f gives me:
<br>
<p>...configure
<br>
\_ /bin/sh /home/cap/openmpi/ompi-trunk/vbuild/opal/libltdl/libtool --mode=compile icc -O3 -DNDEBUG foo.c -c -o foo.o
<br>
&nbsp;\_ sleep 2
<br>
<p>is it just currently broken (and if so, how do I check out an older
<br>
revision) or did I fumble the spell?
<br>
<p>I did (in top level of a cleanly checked out 7046):
<br>
<p>./autogen.sh &amp;&amp; mkdir vbuild &amp;&amp; cd vbuild &amp;&amp; ../configure \
<br>
--prefix=/usr/local/openmpi-svn7045/intel-8.1e-029 \
<br>
--with-btl-mvapi=/opt/ibgd/driver/infinihost \
<br>
--with-platform=optimized
<br>
<p>tia,
<br>
&nbsp;Peter
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
<li>application/pgp-signature attachment: <a href="../../att-0245/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0244.php">Jeff Squyres: "SLURM support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>Reply:</strong> <a href="0246.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
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
