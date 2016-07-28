<?
$subject_val = "Re: [OMPI users] Compiling ompi for use on another machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 15:30:18 2009" -->
<!-- isoreceived="20090316193018" -->
<!-- sent="Mon, 16 Mar 2009 15:30:12 -0400" -->
<!-- isosent="20090316193012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling ompi for use on another machine" -->
<!-- id="D18AB40F-E785-4F56-AF45-070F394DDB01_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL106-W35222EA702909C12E35D4CA9D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling ompi for use on another machine<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 15:30:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8471.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8469.php">Doug Reeder: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2009, at 12:28 PM, ben rodriguez wrote:
<br>
<p><span class="quotelev1">&gt; Both machines are x86_64, although one is a single quad core and the  
</span><br>
<span class="quotelev1">&gt; other is a dual quad core, the RH installs are the same. ompi and  
</span><br>
<span class="quotelev1">&gt; the other program were both statically linked. After the compiles I  
</span><br>
<span class="quotelev1">&gt; copied the target dirs to the new machine and hoped they would run,  
</span><br>
<span class="quotelev1">&gt; the program I wish to run passes all its self tests except the  
</span><br>
<span class="quotelev1">&gt; parallel ones. One thing is that there is a previous install of opmi  
</span><br>
<span class="quotelev1">&gt; on the machine, ideally I woulkd like to keep that installed as it  
</span><br>
<span class="quotelev1">&gt; runs with other stuff. The reason I am doing this is because I have  
</span><br>
<span class="quotelev1">&gt; the optimized compiler installed on only one machine. I will try np  
</span><br>
<span class="quotelev1">&gt; -1.
</span><br>
<p>Try running simple apps in parallel first, such as the &quot;hello&quot; and  
<br>
&quot;ring&quot; programs in the examples/ directory in Open MPI.  You should be  
<br>
able to compile statically and run across multiple nodes, even if  
<br>
there are multiple Open MPI installs on each machine (I do it all the  
<br>
time).
<br>
<p>Make sure that the support libraries for your optimized compiler are  
<br>
available on all nodes.  Those are not usually node-locked; so you  
<br>
should be able to install those everywhere.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8471.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8469.php">Doug Reeder: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
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
