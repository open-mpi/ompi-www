<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  2 10:24:09 2005" -->
<!-- isoreceived="20050802152409" -->
<!-- sent="Tue, 2 Aug 2005 17:23:49 +0200" -->
<!-- isosent="20050802152349" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Broken --enable-mpi-threads" -->
<!-- id="20050802152349.GL29812_at_unixer.de" -->
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
<strong>From:</strong> Torsten Hoefler (<em>torsten.hoefler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-02 10:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="0061.php">Greg Watson: "Re:  os x build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
after having some off-list conversation about enabling thread support
<br>
for applications using Open MPI, I found several errors during
<br>
compilation (revision 6701 with --enable-mpi-threads):
<br>
* mutex.h:267
<br>
&nbsp;OMPI_SIZEOF_SIZE_T is not defined
<br>
* orte_pointer_array.c:358
<br>
&nbsp;table is not defined
<br>
<p>Could you fix this?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: ----- pgp: <a href="http://www.unixer.de/htor-key.asc">http://www.unixer.de/htor-key.asc</a> -----
Help Microsoft fight software piracy: Give Linux to a friend today!
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="0061.php">Greg Watson: "Re:  os x build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
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
