<?
$subject_val = "[OMPI users] MPI_File_write_ordered does not truncate files";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 15 17:27:13 2009" -->
<!-- isoreceived="20090215222713" -->
<!-- sent="Sun, 15 Feb 2009 14:27:08 -0800" -->
<!-- isosent="20090215222708" -->
<!-- name="Brian Austin" -->
<!-- email="baustin_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_File_write_ordered does not truncate files" -->
<!-- id="c826e2120902151427v4278e814ydc287e7c0ea58f1e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_File_write_ordered does not truncate files<br>
<strong>From:</strong> Brian Austin (<em>baustin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-15 17:27:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8073.php">Gabriele Fatigati: "[OMPI users] Ssh problem"</a>
<li><strong>Previous message:</strong> <a href="8071.php">RDB: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8087.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8087.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8092.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When I use MPI_File_write_ordered to overwrite an existing file, the new
<br>
file is not truncated to the appropriate size.
<br>
For example, if I first create a new file and write &quot;aa&quot; from two nodes, the
<br>
file contains &quot;aaaa&quot;.
<br>
Then I close the file, and compute for a while.
<br>
Later, I reopen the file with amode=CREATE | WRONLY and write &quot;b&quot; from two
<br>
nodes, the file contains &quot;bbaa&quot;.
<br>
I would have expected the file to contain only &quot;bb&quot;.
<br>
<p>Am I misunderstanding something, or is this a bug?
<br>
Now that I think about it, this seems more like a problem with
<br>
MPI_File_Open:
<br>
this is the behavior I would have expected if I had reopened the file with
<br>
amode=CREATE | RDRW.
<br>
Shouldn't MPI_File_Open truncate the file to 0 when it is opened WRONLY and
<br>
not APPEND?
<br>
<p>I'm able to obtain my desired result by calling
<br>
MPI_File_get_position_shared()
<br>
MPI_File_set_size()
<br>
<p>Thanks
<br>
-Brian
<br>
<p>PS. I'm using (Open MPI) 1.1.2
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8072/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8073.php">Gabriele Fatigati: "[OMPI users] Ssh problem"</a>
<li><strong>Previous message:</strong> <a href="8071.php">RDB: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8087.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8087.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8092.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
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
