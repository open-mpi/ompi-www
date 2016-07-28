<?
$subject_val = "[OMPI users] Trouble with MPI_Recv not filling buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  6 14:34:06 2013" -->
<!-- isoreceived="20130706183406" -->
<!-- sent="Sat, 06 Jul 2013 20:33:59 +0200" -->
<!-- isosent="20130706183359" -->
<!-- name="Patrick Br&#195;&#188;ckner" -->
<!-- email="patrick.brueckner_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with MPI_Recv not filling buffer" -->
<!-- id="51D86317.9090403_at_student.uni-kassel.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Trouble with MPI_Recv not filling buffer<br>
<strong>From:</strong> Patrick Br&#195;&#188;ckner (<em>patrick.brueckner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-06 14:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22266.php">Michael Thomadakis: "[OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22264.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<li><strong>Reply:</strong> <a href="22274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am currently learning MPI and there's this problem that I have been 
<br>
dealing with very long now. I am trying to receive a struct, and in some 
<br>
very specific cases (when I run with 2/3/4 instances and only 
<br>
calculating exactly the same number of data). For some weird reason it 
<br>
seems to work as soon as I have a lot of data to calculate (starting 
<br>
with N=5, I cannot reproduce the problem).
<br>
<p>--- snip ---
<br>
data p;
<br>
p.collection = malloc(sizeof(int)*N);
<br>
<p>printf(&quot;[%d] before receiving, data id %d at %d with direction 
<br>
%d\n&quot;,me,p.id,p.position,p.direction);
<br>
<p>MPI_Status data_status;
<br>
MPI_Recv(&amp;p,1,MPI_data,MPI_ANY_SOURCE,99,MPI_COMM_WORLD,&amp;data_status);
<br>
if(data_status.MPI_ERROR != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] ERROR %d&quot;,me,data_status.MPI_ERROR);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
}
<br>
printf(&quot;[%d] received status %d\n&quot;,data_status.MPI_ERROR);
<br>
received++;
<br>
printf(&quot;[%0d] received data %d (%d/%d) at position %d with direction 
<br>
%d\n&quot;,me,p.id,received,expected,p.position,p.direction);
<br>
--- snip ---
<br>
<p>I get this output:
<br>
<p>[1] before receiving, data id -1665002272 at 0 with direction 0
<br>
[0] received status 0
<br>
[1] received data -1665002272 (1/2) at position 0 with direction 0
<br>
<p>I am wondering if you had any hint for me, why data is still not having 
<br>
the correct data but just the old, uninitialized values, and why I don't 
<br>
get any error. Also I really have no idea, why instance 0 is printing 
<br>
this status information, as it does not enter this section at all. Is 
<br>
this some kind of optimazation that I have to turn off?
<br>
<p>Thanks for all hints,
<br>
Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22266.php">Michael Thomadakis: "[OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22264.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<li><strong>Reply:</strong> <a href="22274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trouble with MPI_Recv not filling buffer"</a>
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
