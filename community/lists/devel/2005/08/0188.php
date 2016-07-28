<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 07:03:16 2005" -->
<!-- isoreceived="20050818120316" -->
<!-- sent="Thu, 18 Aug 2005 15:02:34 +0300" -->
<!-- isosent="20050818120234" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Compile error with latest code" -->
<!-- id="20050818120234.GB18673_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-18 07:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0189.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<li><strong>Previous message:</strong> <a href="0187.php">Jeff Squyres: "SVN server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0189.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<li><strong>Reply:</strong> <a href="0189.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't compile today's svn code:
<br>
<p>gcc -shared  .libs/ptl_self.o .libs/ptl_self_component.o  -pthread -lm
<br>
-lutil  -Wl,-soname -Wl,mca_ptl_self.so -o .libs/mca_ptl_self.so
<br>
creating mca_ptl_self.la
<br>
(cd .libs &amp;&amp; rm -f mca_ptl_self.la &amp;&amp; ln -s ../mca_ptl_self.la
<br>
mca_ptl_self.la)
<br>
make[4]: Leaving directory
<br>
`/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/self'
<br>
Making all in sm
<br>
make[4]: Entering directory
<br>
`/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/sm'
<br>
make[4]: *** No rule to make target `src/ptl_sm.c', needed by
<br>
`ptl_sm.lo'.  Stop.
<br>
make[4]: Leaving directory
<br>
`/export/home/glebn/OpenMPI/ompi/ompi/mca/ptl/sm'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory
<br>
`/export/home/glebn/OpenMPI/ompi/ompi/dynamic-mca/ptl'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory
<br>
`/export/home/glebn/OpenMPI/ompi/ompi/dynamic-mca'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export/home/glebn/OpenMPI/ompi/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0189.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<li><strong>Previous message:</strong> <a href="0187.php">Jeff Squyres: "SVN server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0189.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<li><strong>Reply:</strong> <a href="0189.php">Brian Barrett: "Re:  Compile error with latest code"</a>
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
