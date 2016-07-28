<?
$subject_val = "[OMPI users] Intermittent corruption";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 17:02:52 2009" -->
<!-- isoreceived="20090611210252" -->
<!-- sent="Thu, 11 Jun 2009 17:02:44 -0400" -->
<!-- isosent="20090611210244" -->
<!-- name="Nick Collier" -->
<!-- email="nick.collier_at_[hidden]" -->
<!-- subject="[OMPI users] Intermittent corruption" -->
<!-- id="2CF28DA2-0985-4236-8CF7-2473FEB252E2_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Intermittent corruption<br>
<strong>From:</strong> Nick Collier (<em>nick.collier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 17:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9609.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9613.php">George Bosilca: "Re: [OMPI users] Intermittent corruption"</a>
<li><strong>Reply:</strong> <a href="9613.php">George Bosilca: "Re: [OMPI users] Intermittent corruption"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm developing under OSX 10.5.7 with Open-MPI 1.3.2 and am running  
<br>
into intermittent corruption when send / recv user defined data type.   
<br>
When running with less than four processes (i.e. mpirun -np [2,3]),  
<br>
the data is fine, when running with 4 or more the received data is  
<br>
intermittently corrupted. By corrupted, I mean things like what should  
<br>
be small integer values in a struct are very large as if the memory  
<br>
hasn't been assigned properly. This occurs intermittently -- some runs  
<br>
will be fine and others won't be, leading to crashes like:
<br>
<p>[belafonte:30191] *** Process received signal ***
<br>
[belafonte:30191] Signal: Bus error (10)
<br>
[belafonte:30191] Signal code:  (2)
<br>
[belafonte:30191] Failing at address: 0x9
<br>
[belafonte:30191] [ 0] 2   libSystem.B.dylib                    
<br>
0x945af2bb _sigtramp + 43
<br>
[belafonte:30191] [ 1] 3   ???                                  
<br>
0xffffffff 0x0 + 4294967295
<br>
<p>I'm not sure how to proceed or what might be wrong. The closest thing  
<br>
I could find on google was <a href="http://icl.cs.utk.edu/lapack-forum/viewtopic.php?f=2&amp;t=614">http://icl.cs.utk.edu/lapack-forum/viewtopic.php?f=2&amp;t=614</a> 
<br>
&nbsp;&nbsp;where someone reports having issues with ScaLapack in combination  
<br>
with openmpi and OSX's stock gcc 4.01 that were fixed by using gcc  
<br>
4.3.1.
<br>
<p>At any rate, any suggestions on how to move forward would be  
<br>
appreciated.
<br>
<p>thanks,
<br>
<p>Nick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9609.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9613.php">George Bosilca: "Re: [OMPI users] Intermittent corruption"</a>
<li><strong>Reply:</strong> <a href="9613.php">George Bosilca: "Re: [OMPI users] Intermittent corruption"</a>
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
