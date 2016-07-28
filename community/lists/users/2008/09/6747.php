<?
$subject_val = "[OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 13:47:40 2008" -->
<!-- isoreceived="20080926174740" -->
<!-- sent="Fri, 26 Sep 2008 13:45:58 -0400" -->
<!-- isosent="20080926174558" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome" -->
<!-- id="0A9D7319-787B-4CFC-A32F-A3175441972D_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-26 13:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6748.php">Shafagh Jafer: "[OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<li><strong>Previous message:</strong> <a href="6746.php">Jeff Squyres: "Re: [OMPI users] which -lmpi is picked?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6748.php">Shafagh Jafer: "[OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<li><strong>Reply:</strong> <a href="6748.php">Shafagh Jafer: "[OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<li><strong>Reply:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure how should I interpret this message:
<br>
<p>[local:17344] *** An error occurred in MPI_Testsome
<br>
[local:17344] *** on communicator MPI COMMUNICATOR 5 CREATE FROM 0
<br>
[local:17344] *** MPI_ERR_TRUNCATE: message truncated
<br>
[local:17344] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpiexec noticed that job rank 0 with PID 17338 on node local exited  
<br>
on signal 15 (Terminated).
<br>
3 additional processes aborted (not shown)
<br>
<p>I am assuming that the error was triggered because one of the buffers  
<br>
I set in the MPI_Recv_init() calls can not contain the incoming  
<br>
message. However, I don't understand why job rank 0 terminates first.  
<br>
The only process that contains a call to MPI_Testsome has actually  
<br>
rank 3, and it's receiving messages from rank 0.
<br>
<p>Also I think it would be a good idea to print the message tag in the  
<br>
error log.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6748.php">Shafagh Jafer: "[OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<li><strong>Previous message:</strong> <a href="6746.php">Jeff Squyres: "Re: [OMPI users] which -lmpi is picked?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6748.php">Shafagh Jafer: "[OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<li><strong>Reply:</strong> <a href="6748.php">Shafagh Jafer: "[OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<li><strong>Reply:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
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
