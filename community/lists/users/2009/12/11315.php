<?
$subject_val = "[OMPI users] Elementary question on openMPI application location when using PBS submission";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 12:57:45 2009" -->
<!-- isoreceived="20091201175745" -->
<!-- sent="Tue, 1 Dec 2009 17:57:39 +0000" -->
<!-- isosent="20091201175739" -->
<!-- name="Belaid MOA" -->
<!-- email="belaid_moa_at_[hidden]" -->
<!-- subject="[OMPI users] Elementary question on openMPI application location when using PBS submission" -->
<!-- id="COL113-W60A0AF62DD75E31A6E6E5EF4960_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Elementary question on openMPI application location when using PBS submission<br>
<strong>From:</strong> Belaid MOA (<em>belaid_moa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 12:57:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11316.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>Previous message:</strong> <a href="11314.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11316.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>Reply:</strong> <a href="11316.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
&nbsp;I am new to this list and I have a very elementary question: suppose we have three machines, HN (Head Node hosting the pbs server), WN1 (A worker node) and WN (another worker node). The PBS nodefile has WN1 and WN2 in it (DOES NOT HAVE HN).
<br>
My openMPI program (hello) and PBS script(my_script.sh) reside on the HN. When I submit my PBS script using qsub -l nodes=2 my_script.sh, I get the following error:
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not find an executable:
<br>
<p>Executable: hello
<br>
Node: WN2
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
<p>How come my hello program is not copied automatically to the worker nodes? This leads to my elementary question:
<br>
where the application should be when using a PBS submission? 
<br>
<p>Note that when I run mpirun from HN with machinefile containing WN1 and WN2, I get the right output.  
<br>
<p>Any help on this is very appreciated.
<br>
<p>~Belaid.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Windows Live: Keep your friends up to date with what you do online.
<br>
<a href="http://go.microsoft.com/?linkid=9691815">http://go.microsoft.com/?linkid=9691815</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11315/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11316.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>Previous message:</strong> <a href="11314.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11316.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>Reply:</strong> <a href="11316.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
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
