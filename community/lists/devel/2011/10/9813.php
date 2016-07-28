<?
$subject_val = "[OMPI devel] Regarding OpenMPI example apps";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 11 13:35:29 2011" -->
<!-- isoreceived="20111011173529" -->
<!-- sent="Tue, 11 Oct 2011 23:05:22 +0530" -->
<!-- isosent="20111011173522" -->
<!-- name="Bhargava Ramu Kavati" -->
<!-- email="ramu.kavati_at_[hidden]" -->
<!-- subject="[OMPI devel] Regarding OpenMPI example apps" -->
<!-- id="CANePEPJEgA5LspPSyA0b-Z=L0tx7MuM0K_0gJ+16AgyD_Ea=LQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Regarding OpenMPI example apps<br>
<strong>From:</strong> Bhargava Ramu Kavati (<em>ramu.kavati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-11 13:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9814.php">Bhargava Ramu Kavati: "[OMPI devel] MPI tool test OFED Stack"</a>
<li><strong>Previous message:</strong> <a href="9812.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am trying to run the example applications in OpenMPI using the command
<br>
&quot;mpirun --prefix /usr/local/  --mca btl_openib_cpc_include rdmacm -np 4 -H
<br>
&lt;IP&gt; hello_c&quot;
<br>
<p>But I am getting the below warning
<br>
&quot;WARNING: No preset parameters were found for the device that Open MPI
<br>
detected:&quot;
<br>
<p>Also at the end (just before the above command returns), I see messages like
<br>
<p>&quot;[localhost.localdomain:28537] 3 more processes have sent help message
<br>
help-mpi-btl-openib.txt / no device params found
<br>
[localhost.localdomain:28537] Set MCA parameter &quot;orte_base_help_aggregate&quot;
<br>
to 0 to see all help / error messages&quot;
<br>
<p>Am I missing anything with the command that I used (OR) can we ignore these
<br>
messages ? Please suggest me.
<br>
<p>Thanks &amp; Regards,
<br>
Ramu
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9814.php">Bhargava Ramu Kavati: "[OMPI devel] MPI tool test OFED Stack"</a>
<li><strong>Previous message:</strong> <a href="9812.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
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
