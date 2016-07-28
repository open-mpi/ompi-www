<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 13 09:16:49 2005" -->
<!-- isoreceived="20051113141649" -->
<!-- sent="Sun, 13 Nov 2005 09:16:42 -0500" -->
<!-- isosent="20051113141642" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Synchronizing C++ STL objects" -->
<!-- id="3698B91A-E5C2-4C3E-A60B-95F7829CAE9A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D500AB0F5C034F48AB08127D359BEA1F0D07DE_at_SJ-ISMSG01.altera.priv.altera.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-13 09:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0326.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>Previous message:</strong> <a href="0324.php">Yaron Kretchmer: "[O-MPI users] Synchronizing C++ STL objects"</a>
<li><strong>In reply to:</strong> <a href="0324.php">Yaron Kretchmer: "[O-MPI users] Synchronizing C++ STL objects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 13, 2005, at 1:34 AM, Yaron Kretchmer wrote:
<br>
<p><span class="quotelev1">&gt; I have an mpi-based application which contains an STL map. The map  
</span><br>
<span class="quotelev1">&gt; is of a non-standard type (i.e my own class). I would like to  
</span><br>
<span class="quotelev1">&gt; synchronize the maps between multiple machines , at the end of  
</span><br>
<span class="quotelev1">&gt; which I want each machine to have the complete map. This seems to  
</span><br>
<span class="quotelev1">&gt; be a pretty standard operation, so I'm wondering if it's been done  
</span><br>
<span class="quotelev1">&gt; before. If not, some pointers on how to roll my own sync would be  
</span><br>
<span class="quotelev1">&gt; appreciated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you use straight MPI, you are going to have to write your own  
<br>
datatype information, and probably some packing / unpacking code.   
<br>
MPI doesn't map very well to some of the complex STL datatypes (like  
<br>
std::map), so some translation will be necessary.  In terms of  
<br>
actually moving the data, I believe MPI_ALLGATHERV will do what you  
<br>
wish, but it's going to take some setup work to get the data ready  
<br>
for transmission.
<br>
<p>I'm not aware of any packages that make using the STL and MPI easier,  
<br>
but it's possible I've missed them.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0326.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>Previous message:</strong> <a href="0324.php">Yaron Kretchmer: "[O-MPI users] Synchronizing C++ STL objects"</a>
<li><strong>In reply to:</strong> <a href="0324.php">Yaron Kretchmer: "[O-MPI users] Synchronizing C++ STL objects"</a>
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
