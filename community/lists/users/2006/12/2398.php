<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 22 09:44:33 2006" -->
<!-- isoreceived="20061222144433" -->
<!-- sent="Fri, 22 Dec 2006 09:44:14 -0500" -->
<!-- isosent="20061222144414" -->
<!-- name="Ali Eghlima" -->
<!-- email="Ali_Eghlima_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3" -->
<!-- id="OF47FF1652.F2B4E99A-ON8525724C.004F123B-8525724C.0050F48E_at_mck.us.ray.com" -->
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
<strong>From:</strong> Ali Eghlima (<em>Ali_Eghlima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-22 09:44:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2399.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="2397.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2400.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Reply:</strong> <a href="2400.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We have Open MPI 1.1.2 installed on IBM AIX 5.3 cluster. It looks like
<br>
terminal output is broken. There are a few entry in the archive for this 
<br>
problem, 
<br>
with no suggested solution or real work around.
<br>
<p>I am putting this posting with hope to get some advise for a work around 
<br>
or solution.
<br>
<p><p><p>#mpirun -np 1  hostname 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No out put, piping the command to &quot;cat&quot; or &quot;more&quot; generate no out 
<br>
put as well.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The only way to get an output from this command is to add 
<br>
--debug-daemons
<br>
<p>#mpirun -np 1 --debug-daemons  hostname
<br>
<p>Even this debug option is not working for a real application which 
<br>
generate several output.
<br>
<p>Looking forward for any comments.
<br>
<p>Thanks
<br>
<p>Ali,
<br>
&nbsp;
<br>
<p>&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2398/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2399.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="2397.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2400.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>Reply:</strong> <a href="2400.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
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
