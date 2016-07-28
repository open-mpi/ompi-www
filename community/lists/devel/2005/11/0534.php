<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 15:50:28 2005" -->
<!-- isoreceived="20051121205028" -->
<!-- sent="Mon, 21 Nov 2005 15:44:53 -0500" -->
<!-- isosent="20051121204453" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="libtool question" -->
<!-- id="5730ECB4-E635-419D-B61D-A4A7232122B2_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-21 15:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Ralph H. Castain: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
<li><strong>Reply:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I remember a discussion few weeks ago about the devel package  
<br>
required by libtool in order to be able to compile Open MPI. But as  
<br>
far as I remember the conclusion is that we will not require it as we  
<br>
have our own ... I am wrong about that ? After updating to the latest  
<br>
trunk on all of the clusters we have here at UT I get the following  
<br>
error:
<br>
<p>In file included from ../../../../ompi-trunk/orte/mca/iof/base/ 
<br>
iof_base_select.c:24:
<br>
../../../../ompi-trunk/opal/mca/base/mca_base_component_repository.h: 
<br>
27:18: ltdl.h: No such file or directory
<br>
In file included from ../../../../ompi-trunk/orte/mca/iof/base/ 
<br>
iof_base_select.c:24:
<br>
../../../../ompi-trunk/opal/mca/base/mca_base_component_repository.h: 
<br>
39: error: parse error before &quot;lt_dlhandle&quot;
<br>
../../../../ompi-trunk/opal/mca/base/mca_base_component_repository.h: 
<br>
40: warning: function declaration isn't a prototype
<br>
<p>&nbsp;&nbsp;&nbsp;Any clues ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george
<br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Ralph H. Castain: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
<li><strong>Reply:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
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
