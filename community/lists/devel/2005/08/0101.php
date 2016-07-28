<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 08:08:28 2005" -->
<!-- isoreceived="20050809130828" -->
<!-- sent="Tue, 9 Aug 2005 16:07:48 +0300" -->
<!-- isosent="20050809130748" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Memory registration question." -->
<!-- id="20050809130748.GK16361_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-09 08:07:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0102.php">Brian Barrett: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0100.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0111.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0111.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;I am trying to understand how memory registration works in openMPI and
<br>
I have a question. Does mca_mpool_base_(insert|insert) interface supports 
<br>
overlapping registrations? If one module register memory from 0 to 100
<br>
and another from 50 to 150 what mca_mpool_base_find(80) will return to
<br>
ob1 module?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0102.php">Brian Barrett: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0100.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0111.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0111.php">Timothy B. Prins: "Re:  Memory registration question."</a>
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
