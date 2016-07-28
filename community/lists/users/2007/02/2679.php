<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 12:55:58 2007" -->
<!-- isoreceived="20070213175558" -->
<!-- sent="Tue, 13 Feb 2007 10:55:48 -0700" -->
<!-- isosent="20070213175548" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI and PBS Pro 8" -->
<!-- id="op.tno73aa9zidtg1_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford.groups_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 12:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2680.php">Brian Barrett: "Re: [OMPI users] configure --with-tm fails"</a>
<li><strong>Previous message:</strong> <a href="2678.php">Steven A. DuChene: "[OMPI users] openmpi with g95 and intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Reply:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, the good news:
<br>
I've recently tried PBS Pro 8 with Open MPI 1.1.4.
<br>
<p>At least with PBS Pro version 8, you can (finally) do a dynamic/shared  
<br>
object for the TM module, rather than having to compile everything  
<br>
statically.  (So the FAQ needs a minor update.)  The jobs seem to run and  
<br>
use TM properly.
<br>
<p>The bad news:
<br>
My memory is a bit fuzzy on how to use OMPI with PBS and cousins.  Sad, I  
<br>
know, but that doesn't make it any less true.
<br>
<p>For the moment, I've read the FAQ and see that you need to use the '-np  
<br>
&lt;foo&gt;' option to specify the number of processes.  For some reason, I  
<br>
recall that OMPI used to be able to get the number of processes to run  
<br>
&nbsp;from PBS; am I just 'remembering' something that never existed?
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2680.php">Brian Barrett: "Re: [OMPI users] configure --with-tm fails"</a>
<li><strong>Previous message:</strong> <a href="2678.php">Steven A. DuChene: "[OMPI users] openmpi with g95 and intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Reply:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
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
