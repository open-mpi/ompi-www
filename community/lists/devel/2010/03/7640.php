<?
$subject_val = "[OMPI devel] vt compilation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 15:16:42 2010" -->
<!-- isoreceived="20100319191642" -->
<!-- sent="Fri, 19 Mar 2010 15:08:53 -0400" -->
<!-- isosent="20100319190853" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] vt compilation problem" -->
<!-- id="4BA3CBC5.5000609_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] vt compilation problem<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-19 15:08:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7641.php">Pascal Deveze: "Re: [OMPI devel] devel Digest, Vol 1613, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="7639.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7643.php">Matthias Jurenz: "Re: [OMPI devel] vt compilation problem"</a>
<li><strong>Reply:</strong> <a href="7643.php">Matthias Jurenz: "Re: [OMPI devel] vt compilation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was trying to compile the trunk head using Linux and Sun Studio 
<br>
compilers and saw the following error.  I am not sure that the compiler 
<br>
really is the smoking gun.  I see that State.cpp was last modified in 
<br>
r22820 and I wonder if the modification added the usage of 
<br>
&quot;__FUNCTION__&quot; outside an ifdef of OTF_VERBOSE.
<br>
<p>Anyways, have anyone else ran into this issue?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC -DHAVE_CONFIG_H -I. 
<br>
-I../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfaux 
<br>
-I../.. -I../../otflib 
<br>
-I../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/otflib  
<br>
-I../../../../../../../../../ompi/contrib/vt/vt/extlib/otf 
<br>
-DINSIDE_OPENMPI    -m64 -c -o State.o 
<br>
../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfaux/State.cpp
<br>
&quot;../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfaux/State.cpp&quot;, 
<br>
line 180: Error: __FUNCTION__ is not defined.
<br>
1 Error(s) detected.
<br>
make[9]: *** [State.o] Error 1
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.877.335.6887
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7640/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-7640/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7641.php">Pascal Deveze: "Re: [OMPI devel] devel Digest, Vol 1613, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="7639.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7643.php">Matthias Jurenz: "Re: [OMPI devel] vt compilation problem"</a>
<li><strong>Reply:</strong> <a href="7643.php">Matthias Jurenz: "Re: [OMPI devel] vt compilation problem"</a>
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
