<?
$subject_val = "Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 06:59:24 2009" -->
<!-- isoreceived="20090630105924" -->
<!-- sent="Tue, 30 Jun 2009 04:59:09 -0600" -->
<!-- isosent="20090630105909" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?" -->
<!-- id="16BE22B4-82F4-468B-8BC9-5DAEA5FCD807_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A49E07D.6080001_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 06:59:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9768.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9766.php">Ashika Umanga Umagiliya: "[OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<li><strong>In reply to:</strong> <a href="9766.php">Ashika Umanga Umagiliya: "[OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your cmd line specified that we are only to use the host &quot;biggserver&quot;,  
<br>
so all ranks will go there.
<br>
<p>If you want ranks to go somewhere else, then you need to include that  
<br>
location in your -host spec. See &quot;man orte_hosts&quot; for details.
<br>
<p><p>On Jun 30, 2009, at 3:53 AM, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have written mandelbrot rendering using X11.I have two nodes with  
</span><br>
<span class="quotelev1">&gt; OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my code, the rank 0 node(master) does the data collection from  
</span><br>
<span class="quotelev1">&gt; salves, Window creation using X11 and render the graph.(using  
</span><br>
<span class="quotelev1">&gt; XCreateSimpleWindow() ). Slave nodes calculate and send data to  
</span><br>
<span class="quotelev1">&gt; master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I execute my application by :
</span><br>
<span class="quotelev1">&gt; #mpirun -np 4 -host biggserver ./mandel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; its gives error :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;cannot connect to X server '(null)'&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't the rank 0 given to the machine which we initially run the MPI  
</span><br>
<span class="quotelev1">&gt; application?
</span><br>
<span class="quotelev1">&gt; If so,why the application says it cannot connect to X server?Since  
</span><br>
<span class="quotelev1">&gt; rank 0 is my workstation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run this using a single node , it works well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any tips?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9768.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9766.php">Ashika Umanga Umagiliya: "[OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<li><strong>In reply to:</strong> <a href="9766.php">Ashika Umanga Umagiliya: "[OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
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
