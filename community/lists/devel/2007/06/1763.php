<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 06:42:48 2007" -->
<!-- isoreceived="20070626104248" -->
<!-- sent="Tue, 26 Jun 2007 12:42:43 +0200" -->
<!-- isosent="20070626104243" -->
<!-- name="Georg Wassen" -->
<!-- email="wassen_at_[hidden]" -->
<!-- subject="[OMPI devel] send/recv during initialization" -->
<!-- id="4680EDA3.3010603_at_lfbs.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Georg Wassen (<em>wassen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 06:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1764.php">Peter Drakenberg: "[OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>Previous message:</strong> <a href="1762.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm working on a collective component and need point-to-point 
<br>
communication during module-initialization.
<br>
As BTL is initialized prior to the collectives, I tried to use send and 
<br>
recv like MPI_Send/_Recv do:
<br>
<p>err = MCA_PML_CALL(send(buf, size, MPI_CHAR, to_id,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COLL_SCI_TAG,  MCA_PML_BASE_SEND_STANDARD, comm));
<br>
<p>This works for a total of 32 Bytes (8 times 4 Bytes) to each receiver. 
<br>
If I increase the number of processes, recv just doesn't return after 8 
<br>
recv-calls. (Further, this communication is extremely slow.)
<br>
<p>When I try to use MPI_Send/_Recv themselves, an error &quot;MPI not yet 
<br>
initialized&quot; occurs.
<br>
<p>Long story short: is there a way to communicate during 
<br>
mca_coll_*_module_init between different processes?
<br>
(I don't want to use TCP/IP-sockets while Open MPI should be able to do 
<br>
this more portable.)
<br>
<p>Thanks for your help,
<br>
Georg Wassen.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1764.php">Peter Drakenberg: "[OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>Previous message:</strong> <a href="1762.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1765.php">Andrew Friedley: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>Reply:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
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
