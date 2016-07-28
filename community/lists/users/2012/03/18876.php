<?
$subject_val = "Re: [OMPI users] How to check that open MPI installed and work correctly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 14:24:22 2012" -->
<!-- isoreceived="20120329182422" -->
<!-- sent="Thu, 29 Mar 2012 23:54:17 +0530" -->
<!-- isosent="20120329182417" -->
<!-- name="Amit Ghadge" -->
<!-- email="amitg.aap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check that open MPI installed and work correctly" -->
<!-- id="CAMALRjjZX-Uvb=cPKrtkG59s40rn5xs=YGrjoVmpdqZcHq1ojg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMALRjh8rK0w7Viw6O=4J314L6YqYaH_ZwKS89YcuLxLXqUMBA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to check that open MPI installed and work correctly<br>
<strong>From:</strong> Amit Ghadge (<em>amitg.aap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 14:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18877.php">Linton, Tom: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
<li><strong>Previous message:</strong> <a href="18875.php">Josh Hursey: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
<li><strong>Maybe in reply to:</strong> <a href="18841.php">Hameed Alzahrani: "[OMPI users] How to check that open MPI installed and work correctly"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can use hostfile file  which containts name or ip address of nodes.
<br>
Nodes name are in line by line . If you add or remove name of node and
<br>
check if node in run or nor. The command are      shell$ mpirun --hostfile
<br>
my_hostfile -np 4 my_parallel_application
<br>
On 26-Mar-2012 8:58 PM, &quot;Tom Bryan&quot; &lt;tombry_at_[hidden]&gt; wrote:
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18877.php">Linton, Tom: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
<li><strong>Previous message:</strong> <a href="18875.php">Josh Hursey: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
<li><strong>Maybe in reply to:</strong> <a href="18841.php">Hameed Alzahrani: "[OMPI users] How to check that open MPI installed and work correctly"</a>
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
