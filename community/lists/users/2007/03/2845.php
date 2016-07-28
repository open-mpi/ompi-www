<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 20 01:39:28 2007" -->
<!-- isoreceived="20070320053928" -->
<!-- sent="Mon, 19 Mar 2007 22:39:14 -0700" -->
<!-- isosent="20070320053914" -->
<!-- name="Bill Saphir" -->
<!-- email="bsaphir_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun exit status for non-existent executable" -->
<!-- id="756D1DEF-92B7-4305-BAFD-54B93F992042_at_numenta.com" -->
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
<strong>From:</strong> Bill Saphir (<em>bsaphir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-20 01:39:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2846.php">Tim Prins: "Re: [OMPI users] mpirun exit status for non-existent executable"</a>
<li><strong>Previous message:</strong> <a href="2844.php">Marius Schamschula: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2846.php">Tim Prins: "Re: [OMPI users] mpirun exit status for non-existent executable"</a>
<li><strong>Reply:</strong> <a href="2846.php">Tim Prins: "Re: [OMPI users] mpirun exit status for non-existent executable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you ask mpirun to launch an executable that does not exist, it  
<br>
fails, but returns an exit status of 0.
<br>
This makes it difficult to write scripts that invoke mpirun and need  
<br>
to check for errors.
<br>
I'm wondering if a) this is considered a bug and b) whether it might  
<br>
be fixed in a near term release.
<br>
<p>Example:
<br>
<p><span class="quotelev1"> &gt; orterun -np 2 asdflkj
</span><br>
------------------------------------------------------------------------ 
<br>
<pre>
--
Failed to find the following executable:
Host:       build-linux64
Executable: asdflkj
Cannot continue.
------------------------------------------------------------------------ 
--
 &gt; echo $?
0
I see this behavior for both 1.2 and 1.1.x.
Thanks for your help.
Bill
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2846.php">Tim Prins: "Re: [OMPI users] mpirun exit status for non-existent executable"</a>
<li><strong>Previous message:</strong> <a href="2844.php">Marius Schamschula: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2846.php">Tim Prins: "Re: [OMPI users] mpirun exit status for non-existent executable"</a>
<li><strong>Reply:</strong> <a href="2846.php">Tim Prins: "Re: [OMPI users] mpirun exit status for non-existent executable"</a>
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
