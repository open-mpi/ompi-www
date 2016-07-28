<?
$subject_val = "Re: [OMPI users] MPI_Finalize() maintains load at 100%.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 09:39:57 2014" -->
<!-- isoreceived="20140523133957" -->
<!-- sent="Fri, 23 May 2014 06:39:53 -0700" -->
<!-- isosent="20140523133953" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() maintains load at 100%." -->
<!-- id="38381E3D-36DD-46ED-8F5F-1459A4BB3A86_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1423790865.17046572.1400834748602.JavaMail.zimbra_at_udc.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Finalize() maintains load at 100%.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 09:39:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24461.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24459.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24456.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24461.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24461.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...that is a bit of a problem. I've added a note to see if we can turn down the aggressiveness of the MPI layer once we hit finalize, but that won't solve your immediate problem.
<br>
<p>Our usual suggestion is that you have each proc call finalize before going on to do other things. This avoids the situation you are describing - after all, if the MPI phase is done, there really isn't any reason to not call MPI_Finalize before moving on to other things. You don't have to delay the call until the end of the program.
<br>
<p>Ralph
<br>
<p>On May 23, 2014, at 1:45 AM, Iv&#225;n Cores Gonz&#225;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I have a performance problem with the next code. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    	int myid;
</span><br>
<span class="quotelev1">&gt;    	MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	//Imagine some important job here, but P0 ends first.
</span><br>
<span class="quotelev1">&gt;   	if (myid != 0)
</span><br>
<span class="quotelev1">&gt;   	{	
</span><br>
<span class="quotelev1">&gt;   		sleep(20);
</span><br>
<span class="quotelev1">&gt;   	}
</span><br>
<span class="quotelev1">&gt;        	
</span><br>
<span class="quotelev1">&gt;    	printf(&quot;Calling MPI_Finalize() ...\n&quot;);
</span><br>
<span class="quotelev1">&gt;    	// Process 0 maintain core load at 100%.
</span><br>
<span class="quotelev1">&gt;    	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    	printf(&quot;Ok\n&quot;);
</span><br>
<span class="quotelev1">&gt;    	
</span><br>
<span class="quotelev1">&gt;    	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If some MPI threads call MPI_Finalize() while others threads are still 
</span><br>
<span class="quotelev1">&gt; &quot;working&quot;, the MPI_Finalize() function maintains the core load in 100% 
</span><br>
<span class="quotelev1">&gt; and not allows other threads or jobs in the processor to run faster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea to avoid the load or force the P0 to sleep?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ivan Cores.
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
<li><strong>Next message:</strong> <a href="24461.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24459.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24456.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24461.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24461.php">Özgür Pekçağlıyan: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
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
