<?
$subject_val = "Re: [OMPI users] Segmentation fault - Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 09:14:09 2009" -->
<!-- isoreceived="20090706131409" -->
<!-- sent="Mon, 06 Jul 2009 15:14:02 +0200" -->
<!-- isosent="20090706131402" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault - Address not mapped" -->
<!-- id="4A51F89A.2070409_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d62c43c00907060550g68e0f168pd0387859be919a08_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault - Address not mapped<br>
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 09:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9836.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="9835.php">Catalin David: "[OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //Initialize step
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; //Here it breaks!!! Memory allocation issue!
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;pool);
</span><br>
<span class="quotelev1">&gt; std::cout&lt;&lt;&quot;I'm here&quot;&lt;&lt;std::endl; //this statement is never reached
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When trying to debug via gdb, the problem seems to be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0xb7524772 in ompi_comm_invalid (comm=Could not find the frame base
</span><br>
<span class="quotelev1">&gt; for &quot;ompi_comm_invalid&quot;.) at communicator.h:261
</span><br>
<span class="quotelev1">&gt; 261	communicator.h: No such file or directory.
</span><br>
<span class="quotelev1">&gt; 	in communicator.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which might indicate a problem with paths. For now, my LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; is set to &quot;/users/cluster/cdavid/local/lib/&quot; (the local folder in my
</span><br>
<span class="quotelev1">&gt; home folder emulates the directory structure of the / folder).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>and your PATH is also okay? (I see that you use plain mpicxx in the 
<br>
build) ...
<br>
<p><span class="quotelev1">&gt; Moreover, I wanted to see if the installation is actually ok and I
</span><br>
<span class="quotelev1">&gt; tried running this program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://en.wikipedia.org/wiki/Message_Passing_Interface#Example_program">http://en.wikipedia.org/wiki/Message_Passing_Interface#Example_program</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with exactly the same results; the code breaks when the memory address
</span><br>
<span class="quotelev1">&gt; of variable pool is referenced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, if you have any ideas or you think I might have missed something,
</span><br>
<span class="quotelev1">&gt; please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Catalin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9836.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="9835.php">Catalin David: "[OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
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
