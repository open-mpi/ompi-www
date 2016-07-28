<?
$subject_val = "[OMPI devel] Limitations on pending nonblocking operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 19:43:57 2010" -->
<!-- isoreceived="20100218004357" -->
<!-- sent="Wed, 17 Feb 2010 19:43:51 -0500" -->
<!-- isosent="20100218004351" -->
<!-- name="Christian Csar" -->
<!-- email="cacsar_at_[hidden]" -->
<!-- subject="[OMPI devel] Limitations on pending nonblocking operations" -->
<!-- id="4B7C8D47.4080900_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Limitations on pending nonblocking operations<br>
<strong>From:</strong> Christian Csar (<em>cacsar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 19:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to figure out what the limitation is for the number of
<br>
pending nonblocking operations as it does not seem to be specified
<br>
anywhere. I apologize if this is better suited to the user list, but
<br>
this seemed like information more likely to be available on the dev list.
<br>
<p>As part of a toy assignment involving multiplying triangular square
<br>
matrices, one solution being compared sends each row and column
<br>
individually. On matrices of 100 and 1000 rows the program functions
<br>
fine. However with 5000 rows it functions correctly with 8 processes
<br>
spread across 4 or 2 nodes, but not on a single node, similarly for 4
<br>
processes it works on 2 nodes, but not one, and for 2 processes on 1
<br>
node it fails. The failure appears to be because there are some number
<br>
(at least 2500) of receives that never complete causing a waitany to
<br>
never return. No errors are produced from the MPI_Isends, nor from the
<br>
MPI_Irecv's nor the MPI_Waitany.
<br>
<p>As it works on multiple nodes, but not one node, it seems reasonable to
<br>
believe that the problem lies with there being too many nonblocking
<br>
operations in progress, as there are a total of around 18000 pending
<br>
operations at once if all the processes are run on one node.
<br>
<p>The standard says the following, but I can't seem to find a definition
<br>
of what Open MPI considers pathological, and information on where to
<br>
find this would be appreciated. I've attached the results of ompi_info
<br>
--all if it is of any use.
<br>
<p>&quot;If the call causes some system resource to be exhausted, then it will
<br>
fail and return an error code. Quality implementations of MPI should
<br>
ensure that this happens only in ``pathological'' cases. That is, an MPI
<br>
implementation should be able to support a large number of pending
<br>
nonblocking operations.&quot;
<br>
<p>Sincerely,
<br>
&nbsp;&nbsp;&nbsp;Christian Csar
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7453/ompi_info.gz">ompi_info.gz</a>
</ul>
<!-- attachment="ompi_info.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
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
