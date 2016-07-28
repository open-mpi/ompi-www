<?
$subject_val = "Re: [OMPI users] Receive operations hanging forever";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 19:04:59 2008" -->
<!-- isoreceived="20080313230459" -->
<!-- sent="Thu, 13 Mar 2008 18:04:46 -0500" -->
<!-- isosent="20080313230446" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receive operations hanging forever" -->
<!-- id="09AEE932-0BB4-44B4-A920-00AD3D68A0E2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47D9AFA0.2090806_at_yahoo.com.br" -->
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
<strong>Subject:</strong> Re: [OMPI users] Receive operations hanging forever<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 19:04:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5196.php">Giovani: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>Previous message:</strong> <a href="5194.php">Giovani: "[OMPI users] Receive operations hanging forever"</a>
<li><strong>In reply to:</strong> <a href="5194.php">Giovani: "[OMPI users] Receive operations hanging forever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5196.php">Giovani: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>Reply:</strong> <a href="5196.php">Giovani: "Re: [OMPI users] Receive operations hanging forever"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any collective communication has to be performed by all processes in  
<br>
the communicator. You example should be Bcast on all nodes.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 13, 2008, at 5:50 PM, Giovani wrote:
<br>
<p><span class="quotelev1">&gt; Hello OpenMPI people!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that my openmpi install is somewhat strange. I'm simply
</span><br>
<span class="quotelev1">&gt; incapable of performing the simplest Recv operations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've installed openmpi using the default gentoo linux package. It
</span><br>
<span class="quotelev1">&gt; compiled without any problems. The version is sys-cluster/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now let's use the following program as a test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpicxx.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI::Init();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    //If we are process 0:
</span><br>
<span class="quotelev1">&gt;    if ( MPI::COMM_WORLD.Get_rank() == 0 )
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        double d = 5;
</span><br>
<span class="quotelev1">&gt;        cout &lt;&lt; &quot;Starting to send data from node 0...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;        MPI::COMM_WORLD.Bcast( &amp;d, 1, MPI::DOUBLE, 0);
</span><br>
<span class="quotelev1">&gt;        cout &lt;&lt; &quot;Finished to send data from node 0...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    //Else:
</span><br>
<span class="quotelev1">&gt;    else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        MPI::Status mpi_status;
</span><br>
<span class="quotelev1">&gt;        double d = 0;
</span><br>
<span class="quotelev1">&gt;        cout &lt;&lt; &quot;Starting to receive data from node 0...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;        MPI::COMM_WORLD.Recv(&amp;d, 1, MPI::DOUBLE, MPI::ANY_SOURCE,
</span><br>
<span class="quotelev1">&gt; MPI::ANY_TAG, mpi_status );
</span><br>
<span class="quotelev1">&gt;        cout &lt;&lt; &quot;Finished to receive data from node 0...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;    };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev1">&gt;    MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm calling it with this command:
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpirun --hostfile mpi-config.txt -np 3
</span><br>
<span class="quotelev1">&gt; /home/gfaccin/desenvolvimento/Eclipse/mpiplay/Debug/mpiplay
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where the hostfile mpi-config.txt contains the following line:
</span><br>
<span class="quotelev1">&gt; localhost slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The slots thing is just to tell openmpi that I'm running it on a  
</span><br>
<span class="quotelev1">&gt; single
</span><br>
<span class="quotelev1">&gt; processor PC with oversubscribed nodes. Running the program without
</span><br>
<span class="quotelev1">&gt; using host files leads to the same results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once the program starts, I get this output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Starting to send data from node 0...
</span><br>
<span class="quotelev1">&gt; Finished to send data from node 0...
</span><br>
<span class="quotelev1">&gt; Starting to receive data from node 0...
</span><br>
<span class="quotelev1">&gt; Starting to receive data from node 0...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And that's it. Processor usage goes to 100% and stays like that  
</span><br>
<span class="quotelev1">&gt; forever.
</span><br>
<span class="quotelev1">&gt; The output indicates that the Recv functions have hung.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to reinstall the package in case something is broken, but
</span><br>
<span class="quotelev1">&gt; nothing changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you have any clues on how can I fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Giovani
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5195/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5196.php">Giovani: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>Previous message:</strong> <a href="5194.php">Giovani: "[OMPI users] Receive operations hanging forever"</a>
<li><strong>In reply to:</strong> <a href="5194.php">Giovani: "[OMPI users] Receive operations hanging forever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5196.php">Giovani: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>Reply:</strong> <a href="5196.php">Giovani: "Re: [OMPI users] Receive operations hanging forever"</a>
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
