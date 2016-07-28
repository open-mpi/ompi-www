<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 18:16:44 2006" -->
<!-- isoreceived="20061026221644" -->
<!-- sent="Thu, 26 Oct 2006 18:16:30 -0400" -->
<!-- isosent="20061026221630" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI collectives" -->
<!-- id="630553C8-B6CE-4DF0-8215-94E869A49F00_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="034201c6f94a$a12b8d80$ca79e30a_at_ladd02" -->
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
<strong>Date:</strong> 2006-10-26 18:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2065.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>In reply to:</strong> <a href="2062.php">Tony Ladd: "[OMPI users] OMPI collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are 2 different collectives in Open MPI. One is a basic  
<br>
implementation and one is highly optimized. The only problem is that  
<br>
we optimized them based on the network, number of nodes and message  
<br>
size. As you can imagine ... not all the networks are the same ...  
<br>
which lead to troubles on some platforms. We're working on a tool to  
<br>
automatically find out the best collective algorithms for your  
<br>
particular configuration.
<br>
<p>No precise timeline yet. ASAP is the keyword here, but of course we  
<br>
are 3 weeks away from SC so I don't think that much can happens  
<br>
before SC. Anyway, if you want I can add you to the list of  
<br>
volunteers for testing it :)
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 26, 2006, at 6:03 PM, Tony Ladd wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I think OpenMPI does not use optimal algorithms for collectives.  
</span><br>
<span class="quotelev1">&gt; But
</span><br>
<span class="quotelev1">&gt; neither does LAM. For example the MPI_Allreduce scales as log_2 N  
</span><br>
<span class="quotelev1">&gt; where N is
</span><br>
<span class="quotelev1">&gt; the number of processors. MPICH uses optimized collectives and the
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce is essentially independent of N. Unfortunately MPICH  
</span><br>
<span class="quotelev1">&gt; has never
</span><br>
<span class="quotelev1">&gt; had a good TCP interface so its typically slower overall than LAM or
</span><br>
<span class="quotelev1">&gt; OpenMPI. Are there plans to develop optimized collectives for  
</span><br>
<span class="quotelev1">&gt; OpenMPI; if
</span><br>
<span class="quotelev1">&gt; so, is there a timeline
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) I have found an additional problem in OpenMPI over TCP.  
</span><br>
<span class="quotelev1">&gt; MPI_AllReduce can
</span><br>
<span class="quotelev1">&gt; run extremely slowly on large numbers of processors. Measuring  
</span><br>
<span class="quotelev1">&gt; throughput
</span><br>
<span class="quotelev1">&gt; (message size / time) for 48 nodes with 16KByte messages (for  
</span><br>
<span class="quotelev1">&gt; example) I get
</span><br>
<span class="quotelev1">&gt; only 0.12MBytes/sec. The same code with LAM gets 5.3MBytes/sec  
</span><br>
<span class="quotelev1">&gt; which is more
</span><br>
<span class="quotelev1">&gt; reasonable. The problem seems to arise for a) more than 16 nodes  
</span><br>
<span class="quotelev1">&gt; and b)
</span><br>
<span class="quotelev1">&gt; message sizes in the range 16-32KBytes. Normally this is the  
</span><br>
<span class="quotelev1">&gt; optimum size so
</span><br>
<span class="quotelev1">&gt; its odd. Other message sizes are closer to LAM (though typically a  
</span><br>
<span class="quotelev1">&gt; little
</span><br>
<span class="quotelev1">&gt; slower). I have run these tests with my own network test, but I can  
</span><br>
<span class="quotelev1">&gt; run IMB
</span><br>
<span class="quotelev1">&gt; if necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tony
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
<li><strong>Next message:</strong> <a href="2065.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>In reply to:</strong> <a href="2062.php">Tony Ladd: "[OMPI users] OMPI collectives"</a>
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
