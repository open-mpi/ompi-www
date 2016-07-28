<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 09:27:25 2007" -->
<!-- isoreceived="20070613132725" -->
<!-- sent="Wed, 13 Jun 2007 16:27:19 +0300" -->
<!-- isosent="20070613132719" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="20070613132719.GC482_at_minantech.com" -->
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
<strong>Date:</strong> 2007-06-13 09:27:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1672.php">Daniel Sp&#229;ngberg: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>&nbsp;&nbsp;I encountered a problem with openib on depend connection code. Basically
<br>
it works only by pure luck if you have more then one endpoint for the same
<br>
proc and sometimes breaks in mysterious ways.
<br>
<p>The algo works like this: A wants to connect to B so it creates QP and sends it
<br>
to B. B receives the QP from A and looks for endpoint that is not yet associated
<br>
with remote endpoint, creates QP for it and sends info back. Now A receives
<br>
the QP and goes through the same logic as B i.e looks for endpoint that is not
<br>
yet connected, BUT there is no guaranty that it will find the endpoint that
<br>
initiated the connection in the first place! And if it finds another one it will
<br>
create QP for it and will send it back to B and so on and so forth. In the end
<br>
I sometimes receive a peculiar mesh of connection where no QP has a connection
<br>
back to it from the peer process.
<br>
<p>To overcome this problem B needs to send back some info that will allow A to
<br>
determine the endpoint that initiated a connection request. The lid:qp pair
<br>
will allow for this. But even then the problem will remain if two procs initiate
<br>
connection at the same time. To dial with simultaneous connection asymmetry
<br>
protocol have to be used one peer became master another slave. Slave alway
<br>
initiate a connection to master. Master choose local endpoint to satisfy
<br>
incoming request and sends info back to a slave. If master wants to initiate a
<br>
connection it send message to a slave and slave initiate connection back to
<br>
master.
<br>
<p>Included patch implements an algorithm described above and work for all
<br>
scenarios for which current code fails to create a connection.
<br>
<p><pre>
--
			Gleb.

</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1673/fix_openib_wireup.diff">fix_openib_wireup.diff</a>
</ul>
<!-- attachment="fix_openib_wireup.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1672.php">Daniel Sp&#229;ngberg: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
