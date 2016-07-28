<?
$subject_val = "Re: [OMPI users] Intermittent corruption";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 17:37:08 2009" -->
<!-- isoreceived="20090611213708" -->
<!-- sent="Thu, 11 Jun 2009 17:36:59 -0400" -->
<!-- isosent="20090611213659" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intermittent corruption" -->
<!-- id="014DC22C-2E87-49B4-8A17-B3C0A7946B56_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2CF28DA2-0985-4236-8CF7-2473FEB252E2_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intermittent corruption<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 17:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9614.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9612.php">Greg Fischer: "[OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
<li><strong>In reply to:</strong> <a href="9610.php">Nick Collier: "[OMPI users] Intermittent corruption"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you try to follow the advice on the LAPACK mailing list, i.e.  
<br>
upgrade your compiler from the MAC OS X default (4.0.1) to 4.3.0 ?
<br>
<p>Btw, what is the test you're running? Can you create a small test case  
<br>
so I can try to reproduce it?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 11, 2009, at 17:02 , Nick Collier wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm developing under OSX 10.5.7 with Open-MPI 1.3.2 and am running  
</span><br>
<span class="quotelev1">&gt; into intermittent corruption when send / recv user defined data  
</span><br>
<span class="quotelev1">&gt; type.  When running with less than four processes (i.e. mpirun -np  
</span><br>
<span class="quotelev1">&gt; [2,3]), the data is fine, when running with 4 or more the received  
</span><br>
<span class="quotelev1">&gt; data is intermittently corrupted. By corrupted, I mean things like  
</span><br>
<span class="quotelev1">&gt; what should be small integer values in a struct are very large as if  
</span><br>
<span class="quotelev1">&gt; the memory hasn't been assigned properly. This occurs intermittently  
</span><br>
<span class="quotelev1">&gt; -- some runs will be fine and others won't be, leading to crashes  
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [belafonte:30191] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [belafonte:30191] Signal: Bus error (10)
</span><br>
<span class="quotelev1">&gt; [belafonte:30191] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [belafonte:30191] Failing at address: 0x9
</span><br>
<span class="quotelev1">&gt; [belafonte:30191] [ 0] 2   libSystem.B.dylib                    
</span><br>
<span class="quotelev1">&gt; 0x945af2bb _sigtramp + 43
</span><br>
<span class="quotelev1">&gt; [belafonte:30191] [ 1] 3   ???                                  
</span><br>
<span class="quotelev1">&gt; 0xffffffff 0x0 + 4294967295
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure how to proceed or what might be wrong. The closest  
</span><br>
<span class="quotelev1">&gt; thing I could find on google was <a href="http://icl.cs.utk.edu/lapack-forum/viewtopic.php?f=2&amp;t=614">http://icl.cs.utk.edu/lapack-forum/viewtopic.php?f=2&amp;t=614</a> 
</span><br>
<span class="quotelev1">&gt;  where someone reports having issues with ScaLapack in combination  
</span><br>
<span class="quotelev1">&gt; with openmpi and OSX's stock gcc 4.01 that were fixed by using gcc  
</span><br>
<span class="quotelev1">&gt; 4.3.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At any rate, any suggestions on how to move forward would be  
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9614.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9612.php">Greg Fischer: "[OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
<li><strong>In reply to:</strong> <a href="9610.php">Nick Collier: "[OMPI users] Intermittent corruption"</a>
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
