<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 13:20:26 2009" -->
<!-- isoreceived="20091209182026" -->
<!-- sent="Wed, 9 Dec 2009 10:20:11 -0800" -->
<!-- isosent="20091209182011" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4" -->
<!-- id="8F455204-1C96-43CA-AAAE-F8BA2C8EC16A_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1260355062.21674.21.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4<br>
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 13:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11481.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11479.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11468.php">Ashley Pittman: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ashley,  I'll try your tool..
<br>
<p>I would think that this is an error in the programs I am trying to use, too, but this is a problem with 2 different programs, written by 2 different groups.. One of them might be bad, but both.. seems unlikely. 
<br>
<p>Interestingly the results for the connectivity_c test that is included with OMPI... works fine with -np &lt;8. For -np &gt;8 it works some of the time, other times it HANGS. I have got to believe that this is a big clue!! Also, when it hangs, sometimes I get the message &quot;mpirun was unable to cleanly terminate the daemons on the nodes shown below&quot; Note that NO nodes are shown below.   Once, I got -np 250 to pass the connectivity test, but I was not able to replicate this reliable, so I'm not sure if it was a fluke, or what.  Here is a like to a screenshop of TOP when connectivity_c is hung with -np 14.. I see that 2 processes are only at 50% CPU usage.. Hmmmm  
<br>
<p><a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1sRgCLKokNOVqo7BYw&amp;feat=directlink</a>
<br>
<p>The other tests, ring_c, hello_c, as well as the cxx versions of these guys with with all values of -np.
<br>
<p>Unfortunately, I could not get valgrind to work...
<br>
<p>Thanks, Matt
<br>
<p><p><p>On Dec 9, 2009, at 2:37 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 2009-12-08 at 08:30 -0800, Matthew MacManes wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There are 8 physical cores, or 16 with hyperthreading enabled. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That should be meaty enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1st of all, let me say that when I specify that -np is less than 4
</span><br>
<span class="quotelev2">&gt;&gt; processors (1, 2, or 3), both programs seem to work as expected. Also,
</span><br>
<span class="quotelev2">&gt;&gt; the non-mpi version of each of them works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Presumably the non-mpi version is serial however? this this doesn't mean
</span><br>
<span class="quotelev1">&gt; the program is bug-free or that the parallel version isn't broken.
</span><br>
<span class="quotelev1">&gt; There are any number of apps that don't work above N processes, in fact
</span><br>
<span class="quotelev1">&gt; probably all programs break for some value of N, it's normally a little
</span><br>
<span class="quotelev1">&gt; higher then 3 however.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thus, I am pretty sure that this is a problem with MPI rather that
</span><br>
<span class="quotelev2">&gt;&gt; with the program code or something else.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What happens is simply that the program hangs..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I presume you mean here the output stops?  The program continues to use
</span><br>
<span class="quotelev1">&gt; CPU cycles but no longer appears to make any progress?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm of the opinion that this is most likely a error in your program, I
</span><br>
<span class="quotelev1">&gt; would start by using either valgrind or padb.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can run the app under valgrind using the following mpirun options,
</span><br>
<span class="quotelev1">&gt; this will give you four files named v.log.0 to v.log.3 which you can
</span><br>
<span class="quotelev1">&gt; check for errors in the normal way.  The &quot;--mca btl tcp,self&quot; option
</span><br>
<span class="quotelev1">&gt; will disable shared memory which can create false positives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 4 --mca btl tcp,self valgrind --log-file=v.log.%
</span><br>
<span class="quotelev1">&gt; q{OMPI_COMM_WORLD_RANK} &lt;app&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively you can run the application, wait for it to hang and then
</span><br>
<span class="quotelev1">&gt; in another window run my tool, padb, which will show you the MPI message
</span><br>
<span class="quotelev1">&gt; queues and stack traces which should show you where it's hung,
</span><br>
<span class="quotelev1">&gt; instructions and sample output are on this page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk/full-report.html">http://padb.pittman.org.uk/full-report.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are no error messages, and there is no clue from anything else
</span><br>
<span class="quotelev2">&gt;&gt; (system working fine otherwise- no RAM issues, etc). It does not hang
</span><br>
<span class="quotelev2">&gt;&gt; at the same place everytime, sometimes in the very beginning, sometime
</span><br>
<span class="quotelev2">&gt;&gt; near the middle..  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could this an issue with hyperthreading? A conflict with something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unlikely, if there was a problem in OMPI running more than 3 processes
</span><br>
<span class="quotelev1">&gt; it would have been found by now.  I regularly run 8 process applications
</span><br>
<span class="quotelev1">&gt; on my dual-core netbook alongside all my desktop processes without
</span><br>
<span class="quotelev1">&gt; issue, it runs fine, a little slowly but fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All this talk about binding and affinity won't help either, process
</span><br>
<span class="quotelev1">&gt; binding is about squeezing the last 15% of performance out of a system
</span><br>
<span class="quotelev1">&gt; and making performance reproducible, it has no bearing on correctness or
</span><br>
<span class="quotelev1">&gt; scalability.  If you're not running on a dedicated machine which with
</span><br>
<span class="quotelev1">&gt; firefox running I guess you aren't then there would be a good case for
</span><br>
<span class="quotelev1">&gt; leaving it off anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<p>_________________________________
<br>
Matthew MacManes
<br>
PhD Candidate
<br>
University of California- Berkeley
<br>
Museum of Vertebrate Zoology
<br>
Phone: 510-495-5833
<br>
Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
<br>
Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
<br>
<p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11481.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11479.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11468.php">Ashley Pittman: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
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
