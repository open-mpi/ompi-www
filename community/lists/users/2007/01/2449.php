<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 21:45:42 2007" -->
<!-- isoreceived="20070109024542" -->
<!-- sent="Mon, 8 Jan 2007 21:45:31 -0500" -->
<!-- isosent="20070109024531" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="C25F4FAE-1F52-44CA-92BF-1FF0E74077B3_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="35b301c73396$a4fd6790$58c31fac_at_bart" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-08 21:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2450.php">Michael Marti: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Previous message:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2007, at 9:34 PM, Reese Faucette wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Right, that's the maximum number of open MX channels, i.e. processes
</span><br>
<span class="quotelev2">&gt;&gt; than can run on the node using MX. With MX (1.2.0c I think), I get
</span><br>
<span class="quotelev2">&gt;&gt; weird messages if I run a second mpirun quickly after the first one
</span><br>
<span class="quotelev2">&gt;&gt; failed. The myrinet guys, I quite sure, can explain why and how.
</span><br>
<span class="quotelev2">&gt;&gt; Somehow, when an application segfault while the MX port is open
</span><br>
<span class="quotelev2">&gt;&gt; things are not cleaned up right away. It take few seconds (not more
</span><br>
<span class="quotelev2">&gt;&gt; than one minute) to have everything running correctly after that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supposedly I am a &quot;myrinet guy&quot; ;-)  Yeah, the endpoint cleanup  
</span><br>
<span class="quotelev1">&gt; stuff could
</span><br>
<span class="quotelev1">&gt; take a few seconds after an ungraceful exit.  But, if you're  
</span><br>
<span class="quotelev1">&gt; getting some
</span><br>
<span class="quotelev1">&gt; behavior that looks like you ought not be getting, please let us know!
</span><br>
<p>I think it make sense what I get. If I loop in a script starting  
<br>
mpiruns and one of the run segfault, the next one usually is unable  
<br>
to open the MX endpoints. That's happens only if I run 4 processes by  
<br>
node, where 4 is the number of instances as reported by mx_info. If I  
<br>
put a sleep of 30 seconds between my runs, then everything runs just  
<br>
fine.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; -reese
</span><br>
<span class="quotelev1">&gt; Myricom, Inc.
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2450.php">Michael Marti: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Previous message:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
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
